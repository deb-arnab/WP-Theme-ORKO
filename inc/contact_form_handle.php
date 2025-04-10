<?php


function orko_contact_form_handle() {
    if (isset($_POST['submit_form'])) {
        // Sanitize and validate form fields
        $name = sanitize_text_field($_POST['cf_name']);
        $email = sanitize_email($_POST['cf_email']);
        $phone = sanitize_text_field($_POST['cf_phone']);
        $message = sanitize_textarea_field($_POST['cf_message']);
   
        // Check if email is valid
        if (!is_email($email)) {
            echo '<div class="error">Please enter a valid email address.</div>';
            return;
        }

            // Validate phone number using regular expression
        if (!preg_match('/^\+?[0-9]{10,15}$/', $phone)) {
            echo '<div class="error">Please enter a valid phone number (e.g., +1234567890).</div>';
            return;
        }

        // Send the email to the admin
        $to = get_option('admin_email'); // Admin's email address
        $subject = 'New Contact Form Submission';
        $body = "You have received a new message from your website contact form:\n\n".
                "Name: $name\n".
                "Email: $email\n".
                "Phone: $phone\n\n".
                "Message:\n$message";


        $headers = array('Content-Type: text/plain; charset=UTF-8');
        $mail_sent = wp_mail($to, $subject, $body, $headers);

        // Show success or error message
        if ($mail_sent) {
            echo '<div class="success">Your message has been sent successfully. Thank you!</div>';
        } else {
            echo '<div class="error">There was an error sending your message. Please try again later.</div>';
        }
    }
}
add_action('wp_head', 'orko_contact_form_handle');
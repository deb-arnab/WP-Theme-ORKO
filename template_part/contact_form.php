<form id="contact-form" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post" enctype="multipart/form-data">
    <p>
        <label for="name">Name:</label>
        <input type="text" id="name" name="cf_name" required>
    </p>

    <p>
        <label for="email">Email:</label>
        <input type="email" id="email" name="cf_email" required>
    </p>

    <p>
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="cf_phone" required>
    </p>

    <p>
        <label for="message">Message:</label>
        <textarea id="message" name="cf_message" required></textarea>
    </p>

    <p>
        <input type="submit" name="submit_form" value="Send Message">
    </p>
</form>

<div id="form-response"></div>

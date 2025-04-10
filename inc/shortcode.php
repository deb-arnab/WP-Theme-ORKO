<?php

function orko_contact_form_shortcode() {
    // Start output buffering
    ob_start();

    // Include the contact form HTML
    include(get_template_directory() . '/template_part/contact_form.php');

    // Include the form handling logic
    include_once('contact_form_handle.php');

    // Return the content of the form
    return ob_get_clean();
}

// Register the shortcode [orko_contact_form]
function register_orko_contact_form_shortcode() {
    add_shortcode('orko_contact_form', 'orko_contact_form_shortcode');
}
add_action('init', 'register_orko_contact_form_shortcode');
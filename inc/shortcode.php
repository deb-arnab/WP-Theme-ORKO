<?php

function orko_contact_form_shortcode() {
    // Start output buffering
    ob_start();

    // Include the contact form HTML
    get_template_part('/template_part/contact_form');

    // Include the form handling logic
    get_template_part('contact_form_handle');

    // Return the content of the form
    return ob_get_clean();
}

// Register the shortcode [orko_contact_form]
function register_orko_contact_form_shortcode() {
    add_shortcode('orko_contact_form', 'orko_contact_form_shortcode');
}
add_action('init', 'register_orko_contact_form_shortcode');
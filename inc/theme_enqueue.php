<?php
/**
 * Enqueues scripts and styles for the theme.
 *
 * This function registers and enqueues the following styles and scripts:
 * - Styl CSS: The main stylesheet for the theme.
 * - Bootstrap CSS: The Bootstrap framework stylesheet.
 * - Custom CSS: A custom stylesheet for additional styles.
 * - jQuery: The jQuery library.
 * - Bootstrap JS: The Bootstrap framework JavaScript file.
 * - Main JS: A custom JavaScript file for additional functionality.
 *
 * @return void
 */
function orko_enqueue_scripts() {
    
    // Enqueue Styl CSS
    wp_enqueue_style( 'styl-css', get_stylesheet_uri());

    // Enqueue Bootstrap CSS
    wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '5.0.2', 'all' );
    wp_enqueue_style( 'bootstrap-css' );
  

    // Enqueue Custom CSS
    wp_register_style( 'custom-css', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'custom-css' );

    // Enqueue Responsive CSS
    wp_register_style( 'responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'responsive-css' );
    
    // Enqueue jQuery
    wp_enqueue_script('jquery');

    // Enqueue Bootstrap JS
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), '5.0.2', true );

    // Enqueue Main JS
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );

}
add_action('wp_enqueue_scripts', 'orko_enqueue_scripts');

// Enqueue Google Fonts
function orko_enqueue_google_fonts() {
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap',
        false
    );
}
add_action('wp_enqueue_scripts', 'orko_enqueue_google_fonts');


// Enqueue Font Awesome
function orko_enqueue_font_awesome() {
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css',
        false
    );
}
add_action('wp_enqueue_scripts', 'orko_enqueue_font_awesome');

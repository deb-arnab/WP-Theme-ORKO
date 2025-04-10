<?php
/**
 * Registers navigation menus for the theme, including a primary menu and a footer menu.
 *
 * This function defines and registers the following navigation menus:
 * - Primary Menu: The main navigation menu for the theme.
 * - Footer Menu: A secondary navigation menu for the footer section of the theme.
 *
 * @return void
 */
function orko_register_menus() {
    // Register the primary menu
    register_nav_menus(array(
        'primary_menu' => __('Primary Menu', 'orko'), // The name of the primary menu.
        'footer_menu'  => __('Footer Menu', 'orko'),  // The name of the footer menu.
    ));

}
add_action('after_setup_theme', 'orko_register_menus');
// register_nav_menu( 'main_menu', __('Main Menu'), 'orko');
<?php
/**
 * Orko Theme Functions
 *
 * This file contains the functions for the Orko theme
 *
 * @package Orko
 */

// Include the file that enqueues theme styles and scripts
include_once ('inc/theme_enqueue.php');

// Include the file that adds theme support features
include_once ('inc/theme_support.php');

// Include the file that changes excerpt length and more text
include_once('inc/excerpt.php');

// Include the file that adds navigation functions
include_once ('inc/navigation.php');

// Include the file that adds custom_post
include_once ('inc/custom_post.php');

// Include the file that adds custom_post
include_once ('inc/custom_meta_box.php');

// Include the file that customizes the theme settings
include_once ('inc/theme_customizer.php');

// Include the file that registers theme menus
include_once ('inc/theme_register_menu.php');

// Include the file that registers theme walker menu
include_once ('inc/theme_walker_menu.php');

// Include the file that registers theme widgets
include_once('inc/theme_register_widget.php');

// Include the file that adds contact form handle
include_once('inc/contact_form_handle.php');

// Include the file that adds shortcode
include_once('inc/shortcode.php');


?>
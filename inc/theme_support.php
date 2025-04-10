<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * This function is hooked into the 'after_setup_theme' action, which runs before
 * the init hook. It is used to enable support for various WordPress features
 * such as title tags, post thumbnails, post formats, automatic feed links, and
 * HTML5 markup.
 *
 * Features enabled by this function:
 * - Title tag support: Allows WordPress to manage the document title.
 * - Post thumbnails: Enables featured images for posts and pages.
 * - Post formats: Adds support for various post formats like aside, gallery, link, etc.
 * - Automatic feed links: Adds RSS feed links to the head of the document.
 * - HTML5 markup: Enables HTML5 markup for search forms, comment forms, comment lists, galleries, and captions.
 *
 * @return void
 */
function orko_theme_setup() {
    // Add support for title tag
    add_theme_support('title-tag');

    // Add support for post thumbnails
    add_theme_support('post-thumbnails', array('post', 'page', 'service', 'testimonial', 'employee'));
    // Custom image size for post thumbnails
    add_image_size('post-thumbnails', 1200, 800, true);

    // Add support for post formats
    add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

    // Add support for automatic feed links
    add_theme_support('automatic-feed-links');

    // Add support for HTML5 markup
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

}
add_action('after_setup_theme', 'orko_theme_setup');


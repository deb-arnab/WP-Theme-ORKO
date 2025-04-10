<?php
/**
 * 
 * This is the front-page template for the Orko theme.
 *
 * @package Orko
 */

get_header(); ?>
 
 
<!-- 
Hero Area Section
This section displays the hero area with a customizable background image, title, description, and button.
The content and styles are dynamically fetched from the WordPress Customizer settings.
-->
<section id="hero_area" class="hero_area" style="background-image: url('<?php echo get_theme_mod('orko_hero_background_image'); ?>');">
    <div class="hero_content">
        <h1><?php echo esc_html(get_theme_mod('orko_hero_content_title', __('Welcome to Orko Theme', 'orko'))); ?></h1>
        <p><?php echo esc_html(get_theme_mod('orko_hero_content_description', __('Discover the amazing features of our theme.', 'orko'))); ?></p>
        <a href="<?php echo esc_url(get_theme_mod('orko_hero_button_link', home_url('/'))); ?>">
            <?php echo esc_html(get_theme_mod('orko_hero_button_text', __('Get Started', 'orko'))); ?>
        </a>
    </div>
</section>

<?php 
// Include the service area template part
get_template_part('template_part/service_area_template'); ?>

<?php 
// Include the about area template part
get_template_part('template_part/about_area_template'); ?>

<?php 
// Include the meet us area template part
get_template_part('template_part/meet_us_area_template'); ?>

<?php 
// Include the client area template part
get_template_part('template_part/client_area_template'); ?>

<?php 
// Include the testimonial area template part
get_template_part('template_part/testimonial_area_template'); ?>

<?php
// Include the contact area template part
get_template_part('template_part/contact_area_template'); ?>

 <?php get_footer(); ?>


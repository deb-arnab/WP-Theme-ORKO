<?php

/**
 * Template Name: About Page
 *
 * This is the front-page template for displaying blog posts.
 *
 * @package Orko
 */

get_header(); ?>



<section class="page-header">

<h1 class="about-title">
    About Page
</h1>
<p class="about-description">
    Welcome to the About area! Here you will find information about us.
</p>

</section>
<?php
the_content(); 
    get_template_part('template_part/meet_us_area_template');
    get_template_part('template_part/about_area_template');
    get_template_part('template_part/testimonial_area_template');

?>

<?php get_footer(); ?>
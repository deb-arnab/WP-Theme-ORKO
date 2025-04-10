<?php

/**
 * Template Name: Service Page
 *
 * This is the front-page template for displaying blog posts.
 *
 * @package Orko
 */

get_header(); ?>



<section class="page-header">

<h1 class="service-title">
    Service Page
</h1>
<p class="service-description">
    Welcome to the Service area! Here you will find the services we offer.
</p>

</section>
<?php
 the_content();  
    get_template_part('template_part/service_area_template');
?>

<?php get_footer(); ?>
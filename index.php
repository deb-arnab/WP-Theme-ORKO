<?php

/**
 * Orko Theme Index
 *
 * This is the main template file for displaying blog page
 *
 * @package Orko
 */
?>
<?php get_header(); ?>

<section class="page-header">

  

        <h1 class="blog-title">
            Blog Page
        </h1>
        <p class="blog-description">Welcome to the blog! Here you will find the latest updates and articles.</p>

   
    
</section>

<?php
// Include the template part for displaying blog posts
get_template_part('template_part/posts_blog');
?>


<?php get_footer(); ?>
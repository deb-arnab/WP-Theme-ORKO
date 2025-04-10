<?php
/**
 * Orko Theme Index
 *
 * This is the main template file for displaying single post
 *
 * @package Orko
 */
?>
<?php get_header(); ?>

<section class="page-header">

    <?php
    if  (is_single()) { ?>

        <h1 class="single-title">
         <?php the_title(); ?>
        </h1>
        <p class="single-description">Posted on <?php echo get_the_date(); ?> </p>
    <?php 
    } else {
        echo 'Explore our latest posts and updates.';
    }
    ?>
    
</section>

<?php get_template_part( 'template_part/single_blog' ); ?>

<?php get_footer(); ?>
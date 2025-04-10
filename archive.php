<?php
/**
 * Orko Theme Index
 *
 * This is the main template file for archive
 *
 * @package Orko
 */
?>
<?php get_header(); ?>


<section class="page-header">

    <?php
    if (is_archive()) { ?>

        <h1 class="archive-title">
            <?php the_archive_title(); ?>
        </h1>
        <p class="archive-description">
            <?php the_archive_description(); ?>
        </p>


    <?php 
    } else {
        echo 'Explore our latest posts and updates.';
    }
    ?>
    
</section>

<?php
// Include the template part for displaying blog posts
get_template_part( 'template_part/posts_blog' ); 
?>


<?php get_footer(); ?>
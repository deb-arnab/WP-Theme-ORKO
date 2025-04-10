<?php
/**
 * Orko Theme Index
 *
 * This is the main template file for displaying search results
 *
 * @package Orko
 */
?>
<?php get_header(); ?>


<section class="page-header">

    <?php
    if (is_search()) { ?>

        <h1 class="search-title">
            <?php printf( esc_html__( 'Search Results', 'orko' )); ?>
        </h1>
        <p class="search-description">
            <?php printf( esc_html__( 'You searched for: %s', 'orko' ), '<span>' . get_search_query() . '</span>' ); ?>
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
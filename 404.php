<?php
/**
 * Orko Theme Index
 *
 * This is the main template file for displaying 404 error page
 *
 * @package Orko
 */
?>
<?php get_header(); ?>


<div class="error-404 not-found" >
    <h1>Oops! Page Not Found</h1>
    <p>It seems we can’t find what you’re looking for. Perhaps searching can help or go back to the homepage.</p>
    
    <div class="search-form-container">
        <?php get_search_form(); ?>
    </div>
    
    <a href="<?php echo  esc_url(home_url()); ?>" class="custom-button">
        Go to Homepage
    </a>
</div>


<?php get_footer(); ?>


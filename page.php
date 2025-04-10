<?php

/**
 * Template Name: Front Page
 *
 * This is the front-page template for displaying blog posts.
 *
 * @package Orko
 */

get_header(); ?>

<?php
// Determine the current page slug
$page_slug = get_post_field('post_name', get_post());

// Load the appropriate template part based on the page slug
if ($page_slug === 'blogs') {
    ?>

    <section class="page-header">

        <h1 class="blog-title">
            Blog Page
        </h1>
        <p class="blog-description">
        Welcome to the blog! Here you will find the latest updates and articles.
        </p>

    </section>
<?php

    get_template_part('template_part/posts_blog');
} else {
    // Redirect to 404 page for other cases
    wp_redirect(home_url('/404'));
    exit;
}
?>

<?php get_footer(); ?>
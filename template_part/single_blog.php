
<?php
/**
 * Template for Single Blog
 *
 * This is the single blog template for the Orko theme.
 *
 * @package Orko
 */
?>
<section id="blog_area">

    <div class="container">
        <div class="row">
        

            <div class="col-md-9">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                ?>
                        <div class="blog_section">
                            <div class="post_details">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <p class="post_meta">Author Name: <?php the_author_posts_link(); ?></p>
                            </div>
                            <div class="post_thumb">
                                <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('post-thumbnails'); ?></a>
                            </div>
                            <div class="post_details">
                                <?php the_content(); ?>
                                </div>
                                <div class="post_comments">
                                    <?php
                                    if (comments_open() || get_comments_number()) :
                                        comments_template();
                                    endif;
                                    ?>
                                </div>
                            
                        </div>
                <?php
                    endwhile;
                else:
                    ?>
                    <div class="error-404 not-found">
                        <h1>Oops! Page Not Found</h1>
                        
                    </div>
                    <?php
                    endif;
                ?>
       

            </div>

            <div class="col-md-3">
                <?php
                // Display the sidebar widget area
                if (is_active_sidebar('sidebar-1')) {
                    dynamic_sidebar('sidebar-1');
                }
                ?>
            </div>
        </div>
    </div>
</section>
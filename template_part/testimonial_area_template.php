
<section id="testimonials_area" class="testimonials_area">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h2><?php echo esc_html(get_theme_mod('orko_testimonials_section_title', __('What Our Clients Say', 'orko'))); ?></h2>
                <p><?php echo esc_html(get_theme_mod('orko_testimonials_section_description', __('See what our clients have to say about us.', 'orko'))); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="testimonials_carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                    <?php
                       
                       $enable_quote_icon = get_theme_mod('orko_enable_quote_icon', false);
                       
       query_posts('post_type=testimonial&post_status=publish&order=ASC&paged='. get_query_var('post')); 

       if(have_posts()) :
        $first_item = true; // Flag to set the first item as active
         while(have_posts()) : the_post(); 
         // Retrieve custom metabox fields
         $client_name = get_post_meta(get_the_ID(), 'client_name', true);
         $client_company = get_post_meta(get_the_ID(), 'client_company', true);
         $testimonial_rating = get_post_meta(get_the_ID(), 'rating', true);
       ?>
                           <div class="carousel-item <?php echo $first_item ? 'active' : ''; ?>">
                               <div class="testimonial_item text-center">
                                   <?php if ($enable_quote_icon) : ?>
                                       <div class="testimonial_quote_icon">
                                           <i class="fa fa-quote-left"></i>
                                       </div>
                                   <?php endif; ?>
                                   <p class="testimonial_message"><?php echo the_content( ) ?></p>
                                   <div class="testimonial_rating">
                                       <?php for ($star = 1; $star <= 5; $star++) : ?>
                                           <i class="fa <?php echo $star <= $testimonial_rating ? 'fa-star' : 'fa-star-o'; ?>"></i>
                                       <?php endfor; ?>
                                   </div>
                                   <div class="testimonial_picture rounded-circle">
                                   <?php echo the_post_thumbnail('testimonial') ?>
                                   </div>
                                   <h3 class="testimonial_name"><?php echo esc_html($client_name); ?></h3>
                                   <h4 class="testimonial_company"><?php echo esc_html($client_company); ?></h4>
                               </div>
                           </div>
                          
                           <?php 
                                    $first_item = false; // After the first item, set flag to false
                                endwhile;
                            endif;
                        ?>
                    </div>
                    <a class="carousel-control-prev" href="#testimonials_carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#testimonials_carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
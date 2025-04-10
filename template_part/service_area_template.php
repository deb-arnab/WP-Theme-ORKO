<section id="services_area" class="services_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2><?php echo esc_html(get_theme_mod('orko_services_section_title', __('Our Services', 'orko'))); ?></h2>
                <p><?php echo esc_html(get_theme_mod('orko_services_section_description', __('We offer a variety of services to help you succeed.', 'orko'))); ?></p>
            </div>

 <?php 
        query_posts('post_type=service&post_status=publish&posts_per_page=6&order=ASC&paged='. get_query_var('post')); 

        if(have_posts()) :
          while(have_posts()) : the_post(); 
        ?>
         <div class="col-md-4 service_item">
                    <div class="service_icon">
                        <?php echo the_post_thumbnail('service') ?>
                    </div>
                    <div class="service_content">
                        <h3 class="service_title"><?php the_title(); ?></h3>
                        <p class="service_description"><?php echo the_content( );; ?></p>
                    </div>
                </div>
   

        <?php 
          endwhile;
          endif;
        ?>
  

        </div>
    </div>
</section>



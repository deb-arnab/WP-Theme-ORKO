<section id="meet_us_area" class="meet_us_area">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h2><?php echo esc_html(get_theme_mod('orko_meet_us_section_title', __('Meet Our Team', 'orko'))); ?></h2>
                <p><?php echo esc_html(get_theme_mod('orko_meet_us_section_description', __('Get to know the amazing people behind our success.', 'orko'))); ?></p>
            </div>
        </div>
        <div class="row">
        <?php
            // Query the custom post type for employee posts
            $args = array(
                'post_type' => 'employee', // Assuming you have a custom post type for employees
                'posts_per_page' => 4, //Fetch four employees
                'order'=> 'ASC', // 
            );
            $employee_query = new WP_Query($args);
            
            if ($employee_query->have_posts()) :
                while ($employee_query->have_posts()) : $employee_query->the_post();

                    // Retrieve custom meta fields
                    $employee_name = get_post_meta(get_the_ID(), 'employee_name', true);
                    $employee_designation = get_post_meta(get_the_ID(), 'employee_designation', true);
                   

                    
                    // Get social media links
                    $social_links = get_post_meta(get_the_ID(), 'employee_social_links', true);
                    if (empty($social_links)) {
                        $social_links = array(); // Initialize if empty
                    }
            ?>
                    <div class="col-md-6">
                        <div class="employee_card">
                            <div class="employee_picture">
                            <?php echo the_post_thumbnail('employee') ?>
                            </div>
                            <div class="employee_details">
                                <h3><?php echo esc_html($employee_name); ?></h3>
                                <h4><?php echo esc_html($employee_designation); ?></h4>
                                <p><?php echo the_content( ) ?></p>
                                
                                <div class="social_links">
                                    <?php
                                    // Loop through social media platforms and display links
                                    $social_platforms = array(
                                        'facebook' => 'Facebook',
                                        'twitter' => 'Twitter',
                                        'linkedin' => 'LinkedIn',
                                        'instagram' => 'Instagram',
                                        'youtube' => 'YouTube'
                                    );
                                    
                                    foreach ($social_platforms as $platform_key => $platform_label) {
                                        if (isset($social_links[$platform_key]) && !empty($social_links[$platform_key]['url'])) {
                                            $social_icon = isset($social_links[$platform_key]['icon']) ? $social_links[$platform_key]['icon'] : '';
                                            $social_url = esc_url($social_links[$platform_key]['url']);
                                            ?>
                                            <a href="<?php echo $social_url; ?>" target="_blank" title="<?php echo esc_attr($platform_label); ?>">
                                                <i class="<?php echo esc_attr($social_icon); ?>"></i>
                                            </a>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata(); // Reset the global post object
            else:
                echo '<p>' . __('No employees found.', 'orko') . '</p>';
            endif;
            ?>
        </div>
    </div>
</section>



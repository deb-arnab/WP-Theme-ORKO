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
    
    <a href="<?php echo home_url(); ?>" class="custom-button">
        Go to Homepage
    </a>
</div>


<?php get_footer(); ?>



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
            $number_of_employees = 4; // Fixed number of employees
            for ($i = 1; $i <= $number_of_employees; $i++) :
                $employee_picture = get_theme_mod("orko_employee_picture_$i", get_bloginfo('template_directory') . '/assets/img/default-employee.jpg');
                $employee_name = get_theme_mod("orko_employee_name_$i", __("Employee Name $i", 'orko'));
                $employee_designation = get_theme_mod("orko_employee_designation_$i", __("Designation $i", 'orko'));
                $employee_description = get_theme_mod("orko_employee_description_$i", __("Employee Description $i", 'orko'));
                $employee_social_icon = get_theme_mod("orko_employee_social_icon_$i", 'fa-brands fa-facebook');
                $employee_social_link = get_theme_mod("orko_employee_social_link_$i", '#');
            ?>
                <div class="col-md-6">
                    <div class="employee_card">
                        <div class="employee_picture">
                            <img src="<?php echo esc_url($employee_picture); ?>" alt="<?php echo esc_attr($employee_name); ?>">
                        </div>
                        <div class="employee_details">
                            <h3><?php echo esc_html($employee_name); ?></h3>
                            <h4><?php echo esc_html($employee_designation); ?></h4>
                            <p><?php echo esc_html($employee_description); ?></p>
                            <a href="<?php echo esc_url($employee_social_link); ?>" target="_blank">
                                <i class="<?php echo esc_attr($employee_social_icon); ?>"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
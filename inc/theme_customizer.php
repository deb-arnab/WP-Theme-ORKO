<?php
/**
 * Theme Customizer for Orko Theme
 *
 * This file contains the theme customizer settings and controls for the Orko theme.
 * It allows users to customize various aspects of the theme, including header, footer,
 * hero section, features section, and meet us section.
 *
 * @package Orko
 */
function orko_customize_register($wp_customize)
{

    /*================================================================================

                            Add a panel for Theme Sections 
    
    ================================================================================*/

    $wp_customize->add_panel('orko_header_footer_panel', array(
        'title'       => __('Header & Footer', 'orko'), // Panel title
        'description' => __('Customize header and footer area of the theme', 'orko'), // Panel description
        'priority'    => 10, // Panel priority
    ));

    $wp_customize->add_panel('orko_theme_sections_panel', array(
        'title'       => __('Theme Sections', 'orko'), // Panel title
        'description' => __('Customize various sections of the theme', 'orko'), // Panel description   
        'priority'    => 20, // Panel priority
    ));


    /*================================================================================

                            Add a section for Theme Colors

    ================================================================================*/

    $wp_customize->add_section('orko_theme_colors_section', array(
        'title'       => __('Theme Colors', 'orko'), // Section title
        'description' => __('Customize the theme colors', 'orko'), // Section description
        'panel'       => 'orko_theme_sections_panel', // Assign to the panel
    ));

    // Add setting for primary color
    $wp_customize->add_setting('orko_primary_color', array(
        'default'   => '#187dbc', // Default value
        'transport' => 'refresh', // Transport method
    ));

    // Add control for primary color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'orko_primary_color', array(
        'label'    => __('Primary Color', 'orko'), // Label for the control
        'section'  => 'orko_theme_colors_section', // Section to add the control to
        'settings' => 'orko_primary_color', // Setting to link the control to
    )));

    // Add setting for secondary color
    $wp_customize->add_setting('orko_secondary_color', array(
        'default'   => '#ffd700', // Default value
        'transport' => 'refresh', // Transport method
    ));

    // Add control for secondary color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'orko_secondary_color', array(
        'label'    => __('Secondary Color', 'orko'), // Label for the control
        'section'  => 'orko_theme_colors_section', // Section to add the control to
        'settings' => 'orko_secondary_color', // Setting to link the control to
    )));

    // Add setting for custom color
    $wp_customize->add_setting('orko_custom_color', array(
        'default'   => '#ffffff', // Default value
        'transport' => 'refresh', // Transport method
    ));

    // Add control for custom color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'orko_custom_color', array(
        'label'    => __('Custom Color', 'orko'), // Label for the control
        'section'  => 'orko_theme_colors_section', // Section to add the control to
        'settings' => 'orko_custom_color', // Setting to link the control to
    )));

    // Add setting for text color 1
    $wp_customize->add_setting('orko_text_color1', array(
        'default'   => '#161616', // Default value
        'transport' => 'refresh', // Transport method
    ));

    // Add control for text color 1
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'orko_text_color1', array(
        'label'    => __('Text Color 1', 'orko'), // Label for the control
        'section'  => 'orko_theme_colors_section', // Section to add the control to
        'settings' => 'orko_text_color1', // Setting to link the control to
    )));

    // Add setting for text color 2
    $wp_customize->add_setting('orko_text_color2', array(
        'default'   => '#666666', // Default value
        'transport' => 'refresh', // Transport method
    ));

    // Add control for text color 2
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'orko_text_color2', array(
        'label'    => __('Text Color 2', 'orko'), // Label for the control
        'section'  => 'orko_theme_colors_section', // Section to add the control to
        'settings' => 'orko_text_color2', // Setting to link the control to
    )));

    // Add setting for background color 1
    $wp_customize->add_setting('orko_background_color1', array(
        'default'   => '#f4f4f4', // Default value
        'transport' => 'refresh', // Transport method
    ));

    // Add control for background color 1
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'orko_background_color1', array(
        'label'    => __('Background Color 1', 'orko'), // Label for the control
        'section'  => 'orko_theme_colors_section', // Section to add the control to
        'settings' => 'orko_background_color1', // Setting to link the control to
    )));

    // Add setting for font family 1
    $wp_customize->add_setting('orko_font_family1', array(
        'default'   => "'Oswald', sans-serif", // Default value
        'transport' => 'refresh', // Transport method
    ));

    // Add control for font family 1
    $wp_customize->add_control('orko_font_family1', array(
        'label'    => __('Font Family 1', 'orko'), // Label for the control
        'section'  => 'orko_theme_colors_section', // Section to add the control to
        'settings' => 'orko_font_family1', // Setting to link the control to
        'type'     => 'text', // Control type
    ));

    // Add setting for font family 2
    $wp_customize->add_setting('orko_font_family2', array(
        'default'   => "'Roboto', sans-serif", // Default value
        'transport' => 'refresh', // Transport method
    ));

    // Add control for font family 2
    $wp_customize->add_control('orko_font_family2', array(
        'label'    => __('Font Family 2', 'orko'), // Label for the control
        'section'  => 'orko_theme_colors_section', // Section to add the control to
        'settings' => 'orko_font_family2', // Setting to link the control to
        'type'     => 'text', // Control type
    ));
    
    /*================================================================================

                            Add a section for Theme Header 
    
    ================================================================================*/


    $wp_customize->add_section('orko_theme_header_section', array(
        'title'       => __('Theme Header', 'orko'), // Section title
        'description' => __('Customize the header settings', 'orko'), // Section description
        'panel'       => 'orko_header_footer_panel', // Assign to the panel
    ));


    // Add setting for logo upload
    $wp_customize->add_setting('orko_header_logo', array(
        'default'   => get_bloginfo('template_directory') . '/assets/img/default-logo.png', // Default value
        'transport' => 'refresh', // Transport method
       
    ));

    // Add control for logo upload
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'orko_header_logo', array(
        'label'    => __('Upload Logo', 'orko'), // Label for the control
        'section'  => 'orko_theme_header_section', // Section to add the control to
        'settings' => 'orko_header_logo', // Setting to link the control to
    )));


    // Add setting for sticky header
    $wp_customize->add_setting('orko_sticky_header', array(
        'default'   => false, // Default value
        'transport' => 'refresh', // Transport method
    ));

    // Add control for sticky header
    $wp_customize->add_control('orko_sticky_header', array(
        'label'    => __('Enable Sticky Header', 'orko'), // Label for the control
        'section'  => 'orko_theme_header_section', // Section to add the control to
        'settings' => 'orko_sticky_header', // Setting to link the control to
        'type'     => 'checkbox', // Control type
    ));


    /*================================================================================

                            Add a section for Hero Area 
    
    ================================================================================*/


    $wp_customize->add_section('orko_hero_background_section', array(
        'title'       => __('Hero Section', 'orko'), // Section title
        'description' => __('Customize the hero section', 'orko'), // Section description
        'panel'       => 'orko_theme_sections_panel', // Assign to the panel
    ));


    // Add setting for hero background image
    $wp_customize->add_setting('orko_hero_background_image', array(
        'default'   => get_bloginfo('template_directory') . '/assets/img/default-hero.jpg', // Default value
        'transport' => 'refresh', // Transport method
       
    ));

    // Add control for hero background image
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'orko_hero_background_image', array(
        'label'    => __('Upload Hero Background Image', 'orko'), // Label for the control
        'section'  => 'orko_hero_background_section', // Section to add the control to
        'settings' => 'orko_hero_background_image', // Setting to link the control to
    )));

    // Add setting for hero section title
    $wp_customize->add_setting('orko_hero_content_title', array(
        'default'   => __('Welcome to Orko Theme', 'orko'), // Default value
        'transport' => 'refresh', // Transport method
       
    ));

    // Add control for hero section title
    $wp_customize->add_control('orko_hero_content_title', array(
        'label'    => __('Hero Section Title', 'orko'), // Label for the control
        'section'  => 'orko_hero_background_section', // Section to add the control to
        'settings' => 'orko_hero_content_title', // Setting to link the control to
        'type'     => 'text', // Control type
    ));

    // Add setting for hero section description
    $wp_customize->add_setting('orko_hero_content_description', array(
        'default'   => __('Discover the amazing features of our theme.', 'orko'), // Default value
        'transport' => 'refresh', // Transport method
       
    ));

    // Add control for hero section description
    $wp_customize->add_control('orko_hero_content_description', array(
        'label'    => __('Hero Section Description', 'orko'), // Label for the control
        'section'  => 'orko_hero_background_section', // Section to add the control to
        'settings' => 'orko_hero_content_description', // Setting to link the control to
        'type'     => 'textarea', // Control type
    ));

    // Add setting for hero button text
    $wp_customize->add_setting('orko_hero_button_text', array(
        'default'   => __('Get Started', 'orko'), // Default value
        'transport' => 'refresh', // Transport method
       
    ));

    // Add control for hero button text
    $wp_customize->add_control('orko_hero_button_text', array(
        'label'    => __('Hero Button Text', 'orko'), // Label for the control
        'section'  => 'orko_hero_background_section', // Section to add the control to
        'settings' => 'orko_hero_button_text', // Setting to link the control to
        'type'     => 'text', // Control type
    ));

    // Add setting for hero button link
    $wp_customize->add_setting('orko_hero_button_link', array(
        'default'   => home_url('/'), // Default value
        'transport' => 'refresh', // Transport method
       
    ));

    // Add control for hero button link
    $wp_customize->add_control('orko_hero_button_link', array(
        'label'    => __('Hero Button Link', 'orko'), // Label for the control
        'section'  => 'orko_hero_background_section', // Section to add the control to
        'settings' => 'orko_hero_button_link', // Setting to link the control to
        'type'     => 'url', // Control type
    ));



    /*================================================================================

                            Add a section for Features Area   
    
    ================================================================================*/


    $wp_customize->add_section('orko_services_section', array(
        'title'       => __('Features', 'orko'), // Section title
        'description' => __('Customize the features section', 'orko'), // Section description
        'panel'       => 'orko_theme_sections_panel', // Assign to the panel
    ));
    // Add setting for services section title
    $wp_customize->add_setting('orko_services_section_title', array(
        'default'   => __('Our Services', 'orko'), // Default value
        'transport' => 'refresh', // Transport method
       
    ));

    // Add control for services section title
    $wp_customize->add_control('orko_services_section_title', array(
        'label'    => __('Services Section Title', 'orko'), // Label for the control
        'section'  => 'orko_services_section', // Section to add the control to
        'settings' => 'orko_services_section_title', // Setting to link the control to
        'type'     => 'text', // Control type
    ));

    // Add setting for services section description
    $wp_customize->add_setting('orko_services_section_description', array(
        'default'   => __('Explore the services we offer to our clients.', 'orko'), // Default value
       
    ));

    // Add control for services section description
    $wp_customize->add_control('orko_services_section_description', array(
        'label'    => __('Services Section Description', 'orko'), // Label for the control
        'section'  => 'orko_services_section', // Section to add the control to
        'settings' => 'orko_services_section_description', // Setting to link the control to
        'type'     => 'textarea', // Control type
    ));



    /*================================================================================

                            Add a section for About Area   
    
    ================================================================================*/


    $wp_customize->add_section('orko_about_section', array(
        'title'       => __('About Section', 'orko'), // Section title
        'description' => __('Customize the about section', 'orko'), // Section description
        'panel'       => 'orko_theme_sections_panel', // Assign to the panel
    ));

    // Add setting for about section background image
    $wp_customize->add_setting('orko_about_background_image', array(
        'default'   => get_bloginfo('template_directory') . '/assets/img/default-about-bg.jpg', // Default value   
        'transport' => 'refresh', // Transport method
       
    ));

    // Add control for about section background image
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'orko_about_background_image', array(
        'label'    => __('Upload About Section Background Image', 'orko'), // Label for the control
        'section'  => 'orko_about_section', // Section to add the control to
        'settings' => 'orko_about_background_image', // Setting to link the control to
    )));

    // Add setting for number of counters
    $wp_customize->add_setting('orko_about_number_of_counters', array(
        'default'   => 2, // Default number of counters
        'transport' => 'refresh', // Transport method
       
    ));

    // Add control for number of counters
    $wp_customize->add_control('orko_about_number_of_counters', array(
        'label'    => __('Number of Counters', 'orko'), // Label for the control
        'description' => __('Set the number of counters & refresh to display in the section. ', 'orko'), // Control description
        'section'  => 'orko_about_section', // Section to add the control to
        'settings' => 'orko_about_number_of_counters', // Setting to link the control to
        'type'     => 'number', // Control type
    ));

    // Dynamically add settings and controls for each counter
    $number_of_counters = get_theme_mod('orko_about_number_of_counters', 3);
    for ($i = 1; $i <= $number_of_counters; $i++) {
        // Add setting for counter number
        $wp_customize->add_setting("orko_about_counter_number_$i", array(
            'default'   => '100', // Default value
            'transport' => 'refresh', // Transport method
        ));

        // Add control for counter number
        $wp_customize->add_control("orko_about_counter_number_$i", array(
            'label'    => __("Counter Number $i", 'orko'), // Label for the control
            'section'  => 'orko_about_section', // Section to add the control to
            'settings' => "orko_about_counter_number_$i", // Setting to link the control to
            'type'     => 'text', // Control type
        ));

        // Add setting for counter suffix
        $wp_customize->add_setting("orko_about_counter_suffix_$i", array(
            'default'   => '+', // Default value
            'transport' => 'refresh', // Transport method
           
        ));

        // Add control for counter suffix
        $wp_customize->add_control("orko_about_counter_suffix_$i", array(
            'label'    => __("Suffix $i", 'orko'), // Label for the control
            'section'  => 'orko_about_section', // Section to add the control to
            'settings' => "orko_about_counter_suffix_$i", // Setting to link the control to
            'type'     => 'select', // Control type
            'choices'  => array(
                '+' => __('+', 'orko'),
                '%' => __('%', 'orko'),
            ),
        ));

        // Add setting for counter title
        $wp_customize->add_setting("orko_about_counter_title_$i", array(
            'default'   => __("Title $i", 'orko'), // Default value
            'transport' => 'refresh', // Transport method
           
        ));

        // Add control for counter title
        $wp_customize->add_control("orko_about_counter_title_$i", array(
            'label'    => __("Title $i", 'orko'), // Label for the control
            'section'  => 'orko_about_section', // Section to add the control to
            'settings' => "orko_about_counter_title_$i", // Setting to link the control to
            'type'     => 'text', // Control type
        ));
    }


    /*================================================================================

                            Add a section for Meet Us

    ================================================================================*/


    $wp_customize->add_section('orko_meet_us_section', array(
        'title'       => __('Meet Us Section', 'orko'), // Section title
        'description' => __('Customize the Meet Us section', 'orko'), // Section description
        'panel'       => 'orko_theme_sections_panel', // Assign to the panel
    ));

    // Add setting for Meet Us section title
    $wp_customize->add_setting('orko_meet_us_section_title', array(
        'default'   => __('Meet Our Team', 'orko'), // Default value
        'transport' => 'refresh', // Transport method
    ));

    // Add control for Meet Us section title
    $wp_customize->add_control('orko_meet_us_section_title', array(
        'label'    => __('Meet Us Section Title', 'orko'), // Label for the control
        'section'  => 'orko_meet_us_section', // Section to add the control to
        'settings' => 'orko_meet_us_section_title', // Setting to link the control to
        'type'     => 'text', // Control type
    ));

    // Add setting for Meet Us section description
    $wp_customize->add_setting('orko_meet_us_section_description', array(
        'default'   => __('Get to know the amazing people behind our success.', 'orko'), // Default value
        'transport' => 'refresh', // Transport method
    ));

    // Add control for Meet Us section description
    $wp_customize->add_control('orko_meet_us_section_description', array(
        'label'    => __('Meet Us Section Description', 'orko'), // Label for the control
        'section'  => 'orko_meet_us_section', // Section to add the control to
        'settings' => 'orko_meet_us_section_description', // Setting to link the control to
        'type'     => 'textarea', // Control type
    ));

    /*================================================================================

                                Add a section for Clients Area

    ================================================================================*/

    $wp_customize->add_section('orko_clients_section', array(
        'title'       => __('Clients Section', 'orko'), // Section title
        'description' => __('Customize the clients section', 'orko'), // Section description
        'panel'       => 'orko_theme_sections_panel', // Assign to the panel
    ));

    // Add setting for clients section background image
    $wp_customize->add_setting('orko_clients_background_image', array(
        'default'   => get_bloginfo('template_directory') . '/assets/img/default-clients-bg.jpg', // Default value
        'transport' => 'refresh', // Transport method
       
    ));

    // Add control for clients section background image
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'orko_clients_background_image', array(
        'label'    => __('Upload Clients Section Background Image', 'orko'), // Label for the control
        'section'  => 'orko_clients_section', // Section to add the control to
        'settings' => 'orko_clients_background_image', // Setting to link the control to
    )));

    // Add setting for number of client logos
    $wp_customize->add_setting('orko_number_of_client_logos', array(
        'default'   => 6, // Default number of logos
        'transport' => 'refresh', // Transport method
       
    ));

    // Add control for number of client logos
    $wp_customize->add_control('orko_number_of_client_logos', array(
        'label'    => __('Number of Client Logos', 'orko'), // Label for the control
        'description' => __('Set the number of client logos & refresh to display in the section. ', 'orko'), // Control description
        'section'  => 'orko_clients_section', // Section to add the control to
        'settings' => 'orko_number_of_client_logos', // Setting to link the control to
        'type'     => 'number', // Control type
    ));

    // Dynamically add settings and controls for each client logo
    $number_of_client_logos = get_theme_mod('orko_number_of_client_logos', 10);
    for ($i = 1; $i <= $number_of_client_logos; $i++) {
        // Add setting for client logo
        $wp_customize->add_setting("orko_client_logo_$i", array(
            'default'   => get_bloginfo('template_directory') . '/assets/img/default-client-logo.png', // Default value
            'transport' => 'refresh', // Transport method
           
        ));

        // Add control for client logo
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "orko_client_logo_$i", array(
            'label'    => __("Upload Client Logo $i", 'orko'), // Label for the control
            'section'  => 'orko_clients_section', // Section to add the control to
            'settings' => "orko_client_logo_$i", // Setting to link the control to
        )));
    }

    /*================================================================================

                                Add a section for Testimonials

    ================================================================================*/

    $wp_customize->add_section('orko_testimonials_section', array(
        'title'       => __('Testimonials Section', 'orko'), // Section title
        'description' => __('Customize the testimonials section', 'orko'), // Section description
        'panel'       => 'orko_theme_sections_panel', // Assign to the panel
    ));

    // Add setting for testimonials section title
    $wp_customize->add_setting('orko_testimonials_section_title', array(
        'default'   => __('What Our Clients Say', 'orko'), // Default value
        'transport' => 'refresh', // Transport method
       
    ));

    // Add control for testimonials section title
    $wp_customize->add_control('orko_testimonials_section_title', array(
        'label'    => __('Testimonials Section Title', 'orko'), // Label for the control
        'section'  => 'orko_testimonials_section', // Section to add the control to
        'settings' => 'orko_testimonials_section_title', // Setting to link the control to
        'type'     => 'text', // Control type
    ));

    // Add setting for testimonials section description
    $wp_customize->add_setting('orko_testimonials_section_description', array(
        'default'   => __('See what our clients have to say about us.', 'orko'), // Default value
        'transport' => 'refresh', // Transport method
       
    ));

    // Add control for testimonials section description
    $wp_customize->add_control('orko_testimonials_section_description', array(
        'label'    => __('Testimonials Section Description', 'orko'), // Label for the control
        'section'  => 'orko_testimonials_section', // Section to add the control to
        'settings' => 'orko_testimonials_section_description', // Setting to link the control to
        'type'     => 'textarea', // Control type
    ));

    

    // Add setting for enabling quote icon
    $wp_customize->add_setting('orko_enable_quote_icon', array(
        'default'   => false, // Default value
        'transport' => 'refresh', // Transport method
       
    ));

    // Add control for enabling quote icon
    $wp_customize->add_control('orko_enable_quote_icon', array(
        'label'    => __('Enable Quote Icon', 'orko'), // Label for the control
        'description' => __('Enable or disable the quote icon in the testimonials section.', 'orko'), // Control description
        'section'  => 'orko_testimonials_section', // Section to add the control to
        'settings' => 'orko_enable_quote_icon', // Setting to link the control to
        'type'     => 'checkbox', // Control type
    ));


    /*================================================================================

                            Add a section for Contact Area

    ================================================================================*/

    $wp_customize->add_section('orko_contact_section', array(
        'title'       => __('Contact Section', 'orko'), // Section title
        'description' => __('Customize the contact section', 'orko'), // Section description
        'panel'       => 'orko_theme_sections_panel', // Assign to the panel
    ));
    // Add setting for contact section title
    $wp_customize->add_setting('orko_contact_section_title', array(
        'default'   => __('Get In Touch', 'orko'), // Default value
        'transport' => 'refresh', // Transport method
       
    ));
    // Add control for contact section title
    $wp_customize->add_control('orko_contact_section_title', array(
        'label'    => __('Contact Section Title', 'orko'), // Label for the control
        'section'  => 'orko_contact_section', // Section to add the control to
        'settings' => 'orko_contact_section_title', // Setting to link the control to
        'type'     => 'text', // Control type
    ));

    // Add setting for contact section description
    $wp_customize->add_setting('orko_contact_section_description', array(
        'default'   => __('We would love to hear from you. Get in touch with us!', 'orko'), // Default value
        'transport' => 'refresh', // Transport method
       
    ));
    // Add control for contact section description
    $wp_customize->add_control('orko_contact_section_description', array(
        'label'    => __('Contact Section Description', 'orko'), // Label for the control
        'section'  => 'orko_contact_section', // Section to add the control to
        'settings' => 'orko_contact_section_description', // Setting to link the control to
        'type'     => 'textarea', // Control type
    ));
    // Add setting for contact section background image
    $wp_customize->add_setting('orko_contact_background_image', array(
        'default'   => get_bloginfo('template_directory') . '/assets/img/default-contact-bg.jpg', // Default value
        'transport' => 'refresh', // Transport method
       
    ));
    // Add control for contact section background image
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'orko_contact_background_image', array(
        'label'    => __('Upload Contact Section Background Image', 'orko'), // Label for the control
        'section'  => 'orko_contact_section', // Section to add the control to
        'settings' => 'orko_contact_background_image', // Setting to link the control to
    )));
    // Add setting for contact section button text
    $wp_customize->add_setting('orko_contact_button_text', array(
        'default'   => __('Contact Us', 'orko'), // Default value
        'transport' => 'refresh', // Transport method
       
    ));
    // Add control for contact section button text
    $wp_customize->add_control('orko_contact_button_text', array(
        'label'    => __('Contact Section Button Text', 'orko'), // Label for the control
        'section'  => 'orko_contact_section', // Section to add the control to
        'settings' => 'orko_contact_button_text', // Setting to link the control to
        'type'     => 'text', // Control type
    ));
    // Add setting for contact section button link
    $wp_customize->add_setting('orko_contact_button_link', array(
        'default'   => home_url('/'), // Default value
        'transport' => 'refresh', // Transport method
       
    ));
    // Add control for contact section button link
    $wp_customize->add_control('orko_contact_button_link', array(
        'label'    => __('Contact Section Button Link', 'orko'), // Label for the control
        'section'  => 'orko_contact_section', // Section to add the control to
        'settings' => 'orko_contact_button_link', // Setting to link the control to
        'type'     => 'url', // Control type
    ));

    // Add setting for contact section button icon
    $wp_customize->add_setting('orko_contact_button_icon', array(
        'default'   => 'fa-solid fa-paper-plane', // Default value
        'transport' => 'refresh', // Transport method
       
    ));
    // Add control for contact section button icon
    $wp_customize->add_control('orko_contact_button_icon', array(
        'label'    => __('Contact Section Button Icon', 'orko'), // Label for the control
        'description' => __('You need to install the plugin named Font Awesome by Font Awesome to use this feature. Download it from <a href="https://wordpress.org/plugins/font-awesome/" target="_blank">here</a>.', 'orko'), // Section description
        'section'  => 'orko_contact_section', // Section to add the control to
        'settings' => 'orko_contact_button_icon', // Setting to link the control to
        'type'     => 'select', // Control type
        'choices'  => array(
            'fa-solid fa-paper-plane' => __('Paper Plane', 'orko'),
            'fa-solid fa-envelope'    => __('Envelope', 'orko'),
            'fa-solid fa-phone'       => __('Phone', 'orko'),
        ),
    ));
  
    // Add setting for contact section button icon size
    $wp_customize->add_setting('orko_contact_button_icon_size', array(
        'default'   => '20px', // Default value
        'transport' => 'refresh', // Transport method
       
    ));
    // Add control for contact section button icon size
    $wp_customize->add_control('orko_contact_button_icon_size', array(
        'label'    => __('Contact Section Button Icon Size', 'orko'), // Label for the control
        'section'  => 'orko_contact_section', // Section to add the control to
        'settings' => 'orko_contact_button_icon_size', // Setting to link the control to
        'type'     => 'text', // Control type
    ));
    // Add setting for contact section button icon position
    $wp_customize->add_setting('orko_contact_button_icon_position', array(
        'default'   => 'left', // Default value
        'transport' => 'refresh', // Transport method
       
    ));
    // Add control for contact section button icon position
    $wp_customize->add_control('orko_contact_button_icon_position', array(
        'label'    => __('Contact Section Button Icon Position', 'orko'), // Label for the control
        'section'  => 'orko_contact_section', // Section to add the control to
        'settings' => 'orko_contact_button_icon_position', // Setting to link the control to
        'type'     => 'select', // Control type
        'choices'  => array(
            'left'  => __('Left', 'orko'),
            'right' => __('Right', 'orko'),
        ),
    ));



    /*================================================================================

                            Add a section for Theme Footer

    ================================================================================*/

    $wp_customize->add_section('orko_theme_footer_section', array(
        'title'       => __('Theme Footer', 'orko'), // Section title
        'description' => __('Customize the footer settings', 'orko'), // Section description
        'panel'       => 'orko_header_footer_panel', // Assign to the panel
    ));

    // Add setting for copyright text
    $wp_customize->add_setting('orko_footer_copyright', array(
        'default'   => '&copy; ' . date('Y') . ' | Arnab Deb, All rights reserved.', // Default value
       
    ));

    // Add control for copyright text
    $wp_customize->add_control('orko_footer_copyright', array(
        'label'    => __('Copyright Text', 'orko'), // Label for the control
        'section'  => 'orko_theme_footer_section', // Section to add the control to
        'settings' => 'orko_footer_copyright', // Setting to link the control to
        'type'     => 'textarea', // Control type
    ));
}
// Hook the function to the customize_register action
add_action('customize_register', 'orko_customize_register');



function orko_theme_colors_section(){
    ?>
    <style>
    :root {
        --primary-color: <?php echo get_theme_mod('orko_primary_color', '#187dbc'); ?>;
        --secondary-color: <?php echo get_theme_mod('orko_secondary_color', '#ffd700'); ?>;
        --custom-color: <?php echo get_theme_mod('orko_custom_color', '#ffffff'); ?>;
        --text-color1: <?php echo get_theme_mod('orko_text_color1', '#161616'); ?>;
        --text-color2: <?php echo get_theme_mod('orko_text_color2', '#666666'); ?>;
        --background-color1: <?php echo get_theme_mod('orko_background_color1', '#f4f4f4'); ?>;
        --font-family1: <?php echo get_theme_mod('orko_font_family1', "'Oswald', sans-serif"); ?>;
        --font-family2: <?php echo get_theme_mod('orko_font_family2', "'Roboto', sans-serif"); ?>;
    }
    body {
        color: var(--text-color1);
        background-color: var(--background-color1);
        font-family: var(--font-family1);
    }
    a {
        color: var(--primary-color);
    }
    a:hover {
        color: var(--secondary-color);
    }
    button {
        background-color: var(--primary-color);
        color: var(--custom-color);
        font-family: var(--font-family2);
    }
    button:hover {
        background-color: var(--secondary-color);
    }
    </style>
    <?php 
  }
  add_action('wp_head', 'orko_theme_colors_section');
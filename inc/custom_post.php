<?php

function orko_custom_service()
{
    register_post_type(
        'service',
        array(
            'labels'      => array(
                'name'          => __('Services', 'orko'),
                'singular_name' => __('Service', 'orko'),
                'menu_name'          => __('Services', 'orko'),
                'name_admin_bar'     =>  __('Service', 'orko'),
                'add_new' => __('Add New Service', 'orko'),
                'add_new_item' => __('Add New Service', 'orko'),
                'edit_item' => __('Edit Service', 'orko'),
                'new_item' => __('New Service', 'orko'),
                'view_item' => __('View Service', 'orko'),
                'all_items'          =>  __('All Servicess', 'orko'),
                'search_items'       =>  __('Search Services', 'orko'),
                'not_found' => __("Sorry, we couldn't find the rvice you are looking for", 'orko'),
                'featured_image'     =>  __('Service Icon', 'orko'),
                'set_featured_image' => __('Set Service Icon', 'orko'),
                'remove_featured_image' => __('Remove Service Icon', 'orko'),
                'use_featured_image' => __('Use as Service Icon', 'orko'),
            ),
            'menu_icon' => 'dashicons-portfolio',
            'public'      => true,
            'publicly_queryable' => true,
            'hierarchial' => true,
            'show_ui' => true,
            'menu_position'      => 5,
            'credibility_type' => 'post',
            'rewrite' => array('slug' => 'services'),
            'supports' => array('title', 'thumbnail', 'editor'),

        )
    );
}
add_action('init', 'orko_custom_service');


function orko_custom_testimonial()
{
    register_post_type(
        'testimonial',
        array(
            'labels'      => array(
                'name'               => 'Testimonials',
                'singular_name'      => 'Testimonial',
                'menu_name'          => 'Testimonials',
                'name_admin_bar'     => 'Testimonial',
                'add_new'            => 'Add New',
                'add_new_item'       => 'Add New Testimonial',
                'new_item'           => 'New Testimonial',
                'edit_item'          => 'Edit Testimonial',
                'view_item'          => 'View Testimonial',
                'all_items'          => 'All Testimonials',
                'search_items'       => 'Search Testimonials',
                'not_found'          => 'No testimonials found.',
                'featured_image'     => 'Client Photo',
                'set_featured_image' => 'Set Client Photo',
                'remove_featured_image' => 'Remove Client Photo',
                'use_featured_image' => 'Use as Client Photo',
            ),
            'menu_icon' => 'dashicons-testimonial',
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'rewrite'            => array('slug' => 'testimonial'),
            'capability_type'    => 'post',
            'hierarchical'       => true,
            'menu_position'      => 6,
            'supports'           => array('title', 'editor', 'thumbnail'),
        )
    );
}
add_action('init', 'orko_custom_testimonial');


function orko_custom_employee()
{
    register_post_type(
        'employee',
        array(
            'labels'      => array(
                'name'               => 'Employees',
                'singular_name'      => 'Employee',
                'menu_name'          => 'Employees',
                'name_admin_bar'     => 'Employee',
                'add_new'            => 'Add New',
                'add_new_item'       => 'Add New Employee',
                'new_item'           => 'New Employee',
                'edit_item'          => 'Edit Employee',
                'view_item'          => 'View Employee',
                'all_items'          => 'All Employees',
                'search_items'       => 'Search Employees',
                'not_found'          => 'No Employees found.',
                'featured_image'     => 'Employee Photo',
                'set_featured_image' => 'Set Employee Photo',
                'remove_featured_image' => 'Remove Employee Photo',
                'use_featured_image' => 'Use as Employee Photo',
            ),
            'menu_icon' => 'dashicons-groups',
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'rewrite'            => array('slug' => 'employee'),
            'capability_type'    => 'post',
            'hierarchical'       => true,
            'menu_position'      => 7,
            'supports'           => array('title', 'editor', 'thumbnail'),
        )
    );
}
add_action('init', 'orko_custom_employee');

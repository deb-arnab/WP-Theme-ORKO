<?php

/**
 * Registers widget areas for the theme, including a sidebar and multiple footer sections.
 *
 * This function defines and registers the following widget areas:
 * - A sidebar widget area for displaying widgets in the sidebar.
 * - Four footer widget areas for displaying widgets in the footer sections.
 *
 * Each widget area includes customizable HTML markup for widgets and their titles.
 *
 * @return void
 */

function orko_register_widget_areas() {
    // Sidebar Widget Area
    register_sidebar(array(
        'name'          => __('Sidebar', 'orko'), // The name of the widget area displayed in the admin panel.
        'id'            => 'sidebar-1', // A unique identifier for the widget area.
        'description'   => __('Add widgets here to appear in your sidebar.', 'orko'), // Description of the widget area.
        'before_widget' => '<div class="widget">', // HTML markup before each widget.
        'after_widget'  => '</div>', // HTML markup after each widget.
        'before_title'  => '<h3 class="widget-title">', // HTML markup before the widget title.
        'after_title'   => '</h3>', // HTML markup after the widget title.
    ));

    // Footer Widget Areas
    for ($i = 1; $i <= 4; $i++) { // Loop to create 4 footer widget areas.
        register_sidebar(array(
            'name'          => sprintf(__('Footer %d', 'orko'), $i), // The name of the footer widget area with a dynamic number.
            'id'            => 'footer-' . $i, // A unique identifier for each footer widget area.
            'description'   => sprintf(__('Add widgets here to appear in footer section %d.', 'orko'), $i), // Description for each footer widget area.
            'before_widget' => '<div class="widget">', // HTML markup before each widget in the footer.
            'after_widget'  => '</div>', // HTML markup after each widget in the footer.
            'before_title'  => '<h3 class="widget-title">', // HTML markup before the widget title in the footer.
            'after_title'   => '</h3>', // HTML markup after the widget title in the footer.
        ));
    }
}

// Hook the function to the 'widgets_init' action to register the widget areas.
add_action('widgets_init', 'orko_register_widget_areas');
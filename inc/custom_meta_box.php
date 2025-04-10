<?php

// Register Custom Meta Box for Testimonials
function add_testimonial_meta_boxes() {
    add_meta_box(
        'testimonial_details',              // Meta box ID
        'Testimonial Details',              // Title of the meta box
        'render_testimonial_meta_box',      // Callback function to render the meta box content
        'testimonial',                      // Post type (Testimonial)
        'normal',                           // Context (normal, side, etc.)
        'default'                           // Priority (default, low, high, etc.)
    );
}
add_action('add_meta_boxes', 'add_testimonial_meta_boxes');

// Callback function to render the content inside the custom meta box
function render_testimonial_meta_box($post) {
    // Retrieve current values from the database (if they exist)
    $client_name = get_post_meta($post->ID, 'client_name', true);
    $client_company = get_post_meta($post->ID, 'client_company', true);
    $rating = get_post_meta($post->ID, 'rating', true);

    // Use nonce for security
    wp_nonce_field('testimonial_meta_box_nonce', 'testimonial_meta_box_nonce');
    ?>
    <div class="testimonial-meta-box">
        <p>
            <label for="client_name">Client Name:</label>
            <input type="text" id="client_name" name="client_name" value="<?php echo esc_attr($client_name); ?>" class="widefat" />
        </p>
        <p>
            <label for="client_company">Client Company/Designation:</label>
            <input type="text" id="client_company" name="client_company" value="<?php echo esc_attr($client_company); ?>" class="widefat" />
        </p>
        <p>
            <label for="rating">Rating (1-5):</label>
            <input type="number" id="rating" name="rating" value="<?php echo esc_attr($rating); ?>" min="1" max="5" class="widefat" />
        </p>
    </div>
    <?php
}

// Save the data from the meta box
function save_testimonial_meta_box_data($post_id) {
    // Check if nonce is valid and user has permission to edit
    if (!isset($_POST['testimonial_meta_box_nonce']) || !wp_verify_nonce($_POST['testimonial_meta_box_nonce'], 'testimonial_meta_box_nonce')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save the custom fields data
    if (isset($_POST['client_name'])) {
        update_post_meta($post_id, 'client_name', sanitize_text_field($_POST['client_name']));
    }

    if (isset($_POST['client_company'])) {
        update_post_meta($post_id, 'client_company', sanitize_text_field($_POST['client_company']));
    }

    if (isset($_POST['rating'])) {
        update_post_meta($post_id, 'rating', intval($_POST['rating']));
    }
}
add_action('save_post', 'save_testimonial_meta_box_data');




// Register Custom Meta Box for Employees
function add_employee_meta_boxes() {
    add_meta_box(
        'employee_details',             // Meta box ID
        'Employee Details',             // Title of the meta box
        'render_employee_meta_box',     // Callback function to render the meta box content
        'employee',                     // Post type (Employee)
        'normal',                        // Context (normal, side, etc.)
        'default'                        // Priority (default, low, high, etc.)
    );
}
add_action('add_meta_boxes', 'add_employee_meta_boxes');

// Callback function to render the content inside the custom meta box
function render_employee_meta_box($post) {
    // Retrieve current values from the database (if they exist)
    $employee_name = get_post_meta($post->ID, 'employee_name', true);
    $employee_designation = get_post_meta($post->ID, 'employee_designation', true);
    
    // Get social media links and icons from post meta (use an array)
    $social_links = get_post_meta($post->ID, 'employee_social_links', true);
    if (empty($social_links)) {
        $social_links = array(); // Initialize if empty
    }

    // Use nonce for security
    wp_nonce_field('employee_meta_box_nonce', 'employee_meta_box_nonce');
    ?>
    <div class="employee-meta-box">
        <p>
            <label for="employee_name">Employee Name:</label>
            <input type="text" id="employee_name" name="employee_name" value="<?php echo esc_attr($employee_name); ?>" class="widefat" />
        </p>
        <p>
            <label for="employee_designation">Employee Designation:</label>
            <input type="text" id="employee_designation" name="employee_designation" value="<?php echo esc_attr($employee_designation); ?>" class="widefat" />
        </p>

        <h4>Social Media Links:</h4>
        <?php
        // Define the list of social platforms
        $social_platforms = array(
            'facebook' => 'Facebook',
            'twitter' => 'Twitter',
            'linkedin' => 'LinkedIn',
            'instagram' => 'Instagram',
            'youtube' => 'YouTube'
        );

        // Loop through the social platforms and render input fields
        foreach ($social_platforms as $platform_key => $platform_label) {
            $social_icon = isset($social_links[$platform_key]['icon']) ? $social_links[$platform_key]['icon'] : '';
            $social_url = isset($social_links[$platform_key]['url']) ? $social_links[$platform_key]['url'] : '';
            ?>
            <p>
                <label for="employee_<?php echo $platform_key; ?>_link"><?php echo $platform_label; ?> URL:</label>
                <input type="url" id="employee_<?php echo $platform_key; ?>_link" name="employee_social_links[<?php echo $platform_key; ?>][url]" value="<?php echo esc_url($social_url); ?>" class="widefat" placeholder="e.g., https://facebook.com/username" />
                <label for="employee_<?php echo $platform_key; ?>_icon"><?php echo $platform_label; ?> Icon Class (FontAwesome):</label>
                <input type="text" id="employee_<?php echo $platform_key; ?>_icon" name="employee_social_links[<?php echo $platform_key; ?>][icon]" value="<?php echo esc_attr($social_icon); ?>" class="widefat" placeholder="e.g., fa-brands fa-facebook" />
            </p>
            <?php
        }
        ?>
    </div>
    <?php
}

// Save the data from the meta box
function save_employee_meta_box_data($post_id) {
    // Check if nonce is valid and user has permission to edit
    if (!isset($_POST['employee_meta_box_nonce']) || !wp_verify_nonce($_POST['employee_meta_box_nonce'], 'employee_meta_box_nonce')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save the custom fields data
    if (isset($_POST['employee_name'])) {
        update_post_meta($post_id, 'employee_name', sanitize_text_field($_POST['employee_name']));
    }

    if (isset($_POST['employee_designation'])) {
        update_post_meta($post_id, 'employee_designation', sanitize_text_field($_POST['employee_designation']));
    }

    // Save the social media links as an array
    if (isset($_POST['employee_social_links'])) {
        $social_links = $_POST['employee_social_links'];
        // Sanitize and save each link and icon
        foreach ($social_links as $key => $link) {
            $social_links[$key]['url'] = esc_url_raw($link['url']);
            $social_links[$key]['icon'] = sanitize_text_field($link['icon']);
        }
        update_post_meta($post_id, 'employee_social_links', $social_links);
    }
}
add_action('save_post', 'save_employee_meta_box_data');
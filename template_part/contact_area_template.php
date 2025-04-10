<!-- Contact Area Section -->
<section id="contact_area" class="contact_area" style="background-image: url('<?php echo esc_url(get_theme_mod('orko_contact_background_image')); ?>');">
    <div class="container">
        <h2><?php echo esc_html(get_theme_mod('orko_contact_section_title', __('Get In Touch', 'orko'))); ?></h2>
        <p><?php echo esc_html(get_theme_mod('orko_contact_section_description', __('We would love to hear from you. Get in touch with us!', 'orko'))); ?></p>
        <a href="<?php echo esc_url(get_theme_mod('orko_contact_button_link', home_url('/'))); ?>" >

            <?php if (get_theme_mod('orko_contact_button_icon_position', 'left') === 'left') : ?>
                <i class="<?php echo esc_attr(get_theme_mod('orko_contact_button_icon', 'fa-solid fa-paper-plane')); ?> left" 
                   style="font-size: <?php echo esc_attr(get_theme_mod('orko_contact_button_icon_size', '20px')); ?>;"></i>
            <?php endif; ?>
            <?php echo esc_html(get_theme_mod('orko_contact_button_text', __('Contact Us', 'orko'))); ?>
            <?php if (get_theme_mod('orko_contact_button_icon_position', 'left') === 'right') : ?>
                <i class="<?php echo esc_attr(get_theme_mod('orko_contact_button_icon', 'fa-solid fa-paper-plane')); ?> right" 
                   style="font-size: <?php echo esc_attr(get_theme_mod('orko_contact_button_icon_size', '20px')); ?>;"></i>
            <?php endif; ?>
        </a>
    </div>
</section>
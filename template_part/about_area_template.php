<section id="about_area" class="about_area" style="background-image: url('<?php echo esc_url(get_theme_mod('orko_about_background_image', get_template_directory_uri() . '/assets/img/default-hero.jpg')); ?>');">
    <div class="container">
        <div class="row text-center">
            <?php
            $number_of_counters = get_theme_mod('orko_about_number_of_counters', 3);
            for ($i = 1; $i <= $number_of_counters; $i++) :
                $counter_number = get_theme_mod("orko_about_counter_number_$i", '100');
                $counter_suffix = get_theme_mod("orko_about_counter_suffix_$i", '+');
                $counter_title = get_theme_mod("orko_about_counter_title_$i", __("Title $i", 'orko'));
            ?>
                <div class="col-md-4 counter_item">
                    <div class="counter_number">
                        <h2>
                            <span class="counter" data-target="<?php echo esc_attr($counter_number); ?>">
                                0
                            </span><?php echo esc_html($counter_suffix); ?>
                        </h2>
                    </div>
                    <div class="counter_title">
                        <p><?php echo esc_html($counter_title); ?></p>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
<section id="clients_area" class="clients_area" style="background-image: url('<?php echo esc_url(get_theme_mod('orko_clients_background_image', esc_url( get_template_directory_uri() ) . '/assets/img/default-clients-bg.jpg')); ?>');">
    <div class="container">
        <div class="row">
            <div class="clients_carousel">
                <?php
                $number_of_client_logos = get_theme_mod('orko_number_of_client_logos', 12);
                for ($i = 1; $i <= $number_of_client_logos; $i++) :
                    $client_logo = get_theme_mod("orko_client_logo_$i", get_template_directory_uri() . '/assets/img/default-client-logo.png');
                ?>
                    <div class="client_logo_item">
                        <img src="<?php echo esc_url($client_logo); ?>" alt="<?php echo esc_attr(__('Client Logo', 'orko')); ?>">
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>
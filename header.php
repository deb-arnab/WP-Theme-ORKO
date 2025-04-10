<?php
/**
 * Orko Theme Header
 *
 * This is the template for displaying the header section
 *
 * @package Orko
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Arnab Deb">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <?php
    /*
     * Checks if the 'orko_sticky_header' theme modification is enabled.
     * If enabled, applies a sticky header with JavaScript functionality.
     * Otherwise, renders a normal header.
     */
    if (get_theme_mod('orko_sticky_header')) :
    ?>
        <header id="header_area" class="orko-sticky-header">
            <!-- Sticky Header JavaScript -->
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const header = document.getElementById('header_area');
                    window.addEventListener('scroll', function() {
                        if (window.scrollY > 50) {
                            header.style.position = 'fixed';
                            header.style.top = '0';
                            header.style.width = '100%';
                            header.style.backgroundColor = '#161616';
                            header.style.zIndex = '9999';
                        } else {
                            header.style.position = 'relative';
                        }
                    });
                });
            </script>
        <?php else : ?>
            <header id="header_area">
            <?php endif; ?>

            <div class="container">
    <nav class="navbar navbar-expand-lg w-100">
        <div class="container-fluid justify-content-between">

            <!-- Logo (LEFT) -->
            <a class="navbar-brand" href="<?php echo  esc_url(home_url()); ?>">
                <img src="<?php echo esc_html(get_theme_mod('orko_header_logo')); ?>" alt="Logo" class="img-fluid" style="max-height: 60px;">
            </a>

            <!-- Toggler (appears on small screens) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu (RIGHT) -->
            <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary_menu',
                    'menu_class'     => 'navbar-nav mb-2 mb-lg-0',
                    'container'      => false,
                    'fallback_cb'    => '__return_false',
                    'walker'         => new Orko_Walker_Nav_Menu()
                ));
                ?>
            </div>
        </div>
    </nav>
</div>
            </header>
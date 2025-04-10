<?php
/**
 * Orko Theme Footer
 *
 * This is the template for displaying the footer section
 *
 * @package Orko
 */
?>


<!-- Footer Area -->
<footer id="footer_area">
    <section id="footer">
        <div class="container">
            <div class="row">
                <!-- Footer Widget 1 -->
                <div class="col-md-3">
                    <?php if (is_active_sidebar('footer-1')) : ?>
                        <?php dynamic_sidebar('footer-1'); ?>
                    <?php endif; ?>
                </div>
                <!-- Footer Widget 2 -->
                <div class="col-md-3">
                    <?php if (is_active_sidebar('footer-2')) : ?>
                        <?php dynamic_sidebar('footer-2'); ?>
                    <?php endif; ?>
                </div>
                <!-- Footer Widget 3 -->
                <div class="col-md-3">
                    <?php if (is_active_sidebar('footer-3')) : ?>
                        <?php dynamic_sidebar('footer-3'); ?>
                    <?php endif; ?>
                </div>
                <!-- Footer Widget 4 -->
                <div class="col-md-3">
                    <?php if (is_active_sidebar('footer-4')) : ?>
                        <?php dynamic_sidebar('footer-4'); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    </footer>
    <section id="copyright_area">
        <div class="container">
            <div class="row">
                <div class=col-md-12>
                    <?php echo get_theme_mod('orko_footer_copyright'); ?>
                </div>
            </div>
        </div>
    </section>
    

<?php wp_footer(); ?>

</body>

</html>
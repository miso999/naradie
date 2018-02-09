<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Futbalové_trávniky
 */
?>

<?php wp_footer(); ?>
<footer class="site-footer">
    <div class="wrapper">
        <p><span class="site-footer__text">© 2017 Futbalovetravniky.sk - všetky práva vyhradené</span></p>
    </div>
</footer>

<div class="modal" id="get-in-touch">
    <div class="modal__inner">
        <div class="wrapper ">
            <h2 class="section-title">Kontaktujte <strong>nás</strong>
            </h2>
            <hr>

            <h2 class="headline headline--small headline--centered headline--no-t-margin "> Neváhajte nás kontaktovať s vašou požiadavkou </h2>
            <?php echo do_shortcode('[contact-form-7 id="28" title="Kontaktný formulár"]'); ?>
        </div>
    </div>
    <div class="modal__close">X</div>
</div>
<script src="<?=bloginfo('template_directory'); ?>/app/temp/scripts/App.js"></script>

</body>
</html>

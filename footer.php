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
        <div class="row row--gutters row--mobile-padding">

            <div class="row__medium-4">
                <div class="site-footer__subtitle">
                    O nás
                    <hr>
                </div>
                <div class="site-footer__content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam commodi fugit quis rem reprehenderit. Optio perspiciatis sapiente voluptas? Dicta dolores error facilis illum itaque magnam, minus nesciunt quam ullam unde.
                </div>
            </div>


            <div class="row__medium-2">
                <div class="site-footer__subtitle">
                    Služby
                    <hr>
                </div>
                <div class="site-footer__content">
                   <ul class="li-check">
                       <li>
                           záhradná technika
                       </li>
                       <li>
                          servis
                       </li>
                       <li>
                           poradenstvo
                       </li>
                   </ul>
                </div>
            </div>


            <div class="row__medium-2">
                <div class="site-footer__subtitle">
                    Kontakt
                    <hr>
                </div>
                <div class="site-footer__content">
                    <p>PROFI GREENKEEPER</p>
                    <p>Daniel Stranovský</p>
                    <p> Dolné Dubové 221</p>
                    <p>IČO: 44 006 438</p>

                    <p> Tel : 0908 716 007</p>
                    <p>pozicovnapzt@gmail.com</p>
                </div>
            </div>


            <div class="row__medium-4">
                <div class="site-footer__subtitle">
                    Kde nás nájdete
                    <hr>
                </div>
                <div class="site-footer__content">

                    <div class="map-responsive">
                        <iframe class="site-footer__gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3739.0331622185363!2d17.60184874183838!3d48.49689188655334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476ca881bba4a3a3%3A0xa840e7f5b7c443fc!2zRG9sbsOpIER1Ym92w6kgMjIxLCA5MTkgNTIgRG9sbsOpIER1Ym92w6ksIFNsb3ZlbnNrbw!5e0!3m2!1ssk!2sus!4v1520949816411"  frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>

                </div>
            </div>




        </div>



        <p><div class="site-footer__copyright">© <?php echo date('Y')?> pozicovna-zahradnej-techniky.sk - všetky práva vyhradené</div></p>
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

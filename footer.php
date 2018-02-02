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


            <form id="contactForm" novalidate="">
                <div class="row row--gutters-small">
                    <div class="row__medium-6">
                        <div class="form-group">
                            <input id="name" class="form-control" placeholder="Meno a priezvisko" required="required"
                                   aria-invalid="false" type="text">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row__medium-6">
                        <div class="form-group">
                            <input id="email" class="form-control" placeholder="Email" required="required"
                                   aria-invalid="false" type="email">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="row__medium-12">
                <textarea name="message" id="message" class="form-control" rows="4" placeholder="Správa" required=""
                          aria-invalid="false"></textarea>
                    <p class="help-block text-danger"></p>
                </div>

                <div class="row__medium-12" style="text-align: center">
                    <button type="submit" class="btn btn-custom btn-lg">Odoslať</button>
                </div>
            </form>


        </div>


    </div>

    <div class="modal__close">X</div>
</div>



<script src="<?=bloginfo('template_directory'); ?>/js/App-c28ff60abb.js"></script>

</body>
</html>

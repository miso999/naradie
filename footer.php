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
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam commodi fugit quis rem
                    reprehenderit. Optio perspiciatis sapiente voluptas? Dicta dolores error facilis illum itaque
                    magnam, minus nesciunt quam ullam unde.
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
                        <iframe class="site-footer__gmap"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3739.0331622185363!2d17.60184874183838!3d48.49689188655334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476ca881bba4a3a3%3A0xa840e7f5b7c443fc!2zRG9sbsOpIER1Ym92w6kgMjIxLCA5MTkgNTIgRG9sbsOpIER1Ym92w6ksIFNsb3ZlbnNrbw!5e0!3m2!1ssk!2sus!4v1520949816411"
                                frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>

                </div>
            </div>


        </div>


        <p>
        <div class="site-footer__copyright">© <?php echo date('Y') ?> pozicovna-zahradnej-techniky.sk - všetky práva
            vyhradené
        </div>
        </p>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/i18n/jquery-ui-i18n.min.js">
</script>

<?php
$query = "SELECT start_date, end_date FROM wp_calendar WHERE product_id = 17";
$dates = $wpdb->get_results($query);

foreach ($dates as $d) {
    $begin = new DateTime( $d->start_date );
    $end = new DateTime( $d->end_date );
    $end = $end->modify( '+1 day' );

    $interval = new DateInterval('P1D');
    $daterange = new DatePeriod($begin, $interval ,$end);

    foreach($daterange as $date){
        $booked[] = $date->format("Y-m-d");
    }
}
?>

<script>

    <?php
    $booked = json_encode($booked);
    echo "var unavailableDates = ". $booked . ";\n";
    ?>


</script>


<div class="modal" id="get-in-touch">
    <div class="modal__inner">
        <div class="wrapper ">

            <h2 class="section-title">Rezervujte si termín</strong>
            </h2>
            <hr>

            <h2 class="headline headline--small headline--centered headline--no-t-margin "> Neváhajte nás kontaktovať s
                vašou požiadavkou </h2>

            <div class="form">
                <form action="" method="post" id="booking" class="register">

                    <div class="row row--gutters">
                        <div class="row__medium-6">
                            <div id="datepicker"></div>
                        </div>
                        <div class="row__medium-6 user-details">
                            <input type="text" name="meno" placeholder="Meno a priezvisko">
                            <input type="text" name="email" placeholder="E-mail">
                            <input type="text" name="telefon" placeholder="Telefón">

                            <textarea name="note" id="" cols="10"   rows="3" placeholder="Poznámka"></textarea>
                            <div class="row">
                                <div class="row__medium-5">
                                    <span><input type="text" id="start-date" name="start-date" placeholder="Prvý deň rezervácie"></span>
                                </div>
                                <div class="row__medium-2" style="text-align: center;font-weight: 30px;font-size: 25px;">
                                    -
                                </div>
                                <div class="row__medium-5">

                                    <span><input type="text" id="end-date" name="end-date" placeholder="Posledný deň rezervácie"></span>
                                </div>
                            </div>


                            <div id="booking-form-errors" class="user-details__errors"></div>
                            <input type="submit" value="Odoslať" id="submit-reservation" >
                        </div>

                    </div>


                </form>
            </div>

        </div>
    </div>
    <div class="modal__close">X</div>
</div>
<script src="<?= bloginfo('template_directory'); ?>/app/temp/scripts/App.js"></script>

</body>
</html>

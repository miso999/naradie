<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/i18n/jquery-ui-i18n.min.js">
</script>

<?php
$id = get_the_ID();
$query = "SELECT start_date, end_date FROM wp_calendar WHERE product_id = $id";
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

                            <div class="vysvetlivky">
                                <span class="note note--free">Voľné</span>
                                <span class="note note--booked">Obsadené</span>
                            </div>
                        </div>
                        <div class="row__medium-6 user-details">
                            <input type="text" name="name" placeholder="Meno a priezvisko">
                            <input type="text" name="email" placeholder="E-mail">
                            <input type="text" name="phone" placeholder="Telefón">

                            <textarea name="note" id="" cols="10"  rows="3" placeholder="Poznámka"></textarea>
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

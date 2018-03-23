<?php
/**
 * Created by PhpStorm.
 * User: michalsimoncic
 * Date: 16.03.2018
 * Time: 10:04
 */

echo "<br><br>";

if ($_POST['start-date'] && $_POST['end-date'] && !$_POST['range_control']) {

    $start_date = date('Y-m-d', strtotime($_POST['start-date']));
    $end_date = date('Y-m-d', strtotime($_POST['end-date']));


    $wpdb->insert('wp_calendar', array(
        'start_date' => $start_date,
        'end_date' => $end_date,
        'product_id' => '17'
    ));
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="wrapper">


        <div class="row__medium-4">
            <h3>Dostupnosť</h3>
            <div id="dostupnost"></div>

        </div>


        <div class="row__medium-8">

            <div class="product-page">
                <div class="row row--gutters">

                    <div class="row__medium-6">
                        <div class="product-page__picture">
                            <?php futbalove_travniky_post_thumbnail(); ?>
                        </div>
                    </div>

                    <div class="row__medium-6">
                        <div class="product-page__title">
                            <?php
                            if (is_singular()) :
                                the_title('<h1 class="entry-title">', '</h1>');
                            else :
                                the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                            endif;
                            ?>
                            <hr class="left">
                        </div>

                        <div class="product-page__price">
                            <h3>Cenník</h3>
                            <div class="product-page__price-row">
                                <h4>Cena na 1 deň</h4> <span><?php echo get_field("cena"); ?> &euro; / deň</span>
                            </div>
                            <div class="product-page__price-row">
                                <h4>Záloha</h4> <span><?php echo get_field("zaloha"); ?> &euro;</span>
                            </div>


                        </div>

                        <div class="product-page__order">
                            <div class="btn btn--fullwidth open-modal" data-modal-id="get-in-touch">Rezervovať</div>
                        </div>

                        <div class="product-page__excerpt">
                            <?php
                            if (has_excerpt()) {
//                                echo '<h3>Parametre</h3>';
                                echo the_excerpt();
                            }
                            ?>
                        </div>


                    </div>

                </div>


                <div class="row">
                    <div class="product-page__text">
                        <?php
                        the_content(sprintf(
                            wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                                __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'futbalove_travniky'),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            get_the_title()
                        ));

                        wp_link_pages(array(
                            'before' => '<div class="page-links">' . esc_html__('Pages:', 'futbalove_travniky'),
                            'after' => '</div>',
                        ));
                        ?>
                    </div>
                </div>

            </div>
        </div>


    </div>


    </div>


    <footer class="entry-footer">
        <?php futbalove_travniky_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

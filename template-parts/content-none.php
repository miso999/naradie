<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Futbalové_trávniky
 */

?>

<section class="no-results not-found">

    <div class="wrapper">
        <?php
        if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

            <p><?php
                printf(
                    wp_kses(
                    /* translators: 1: link to WP admin new post page. */
                        __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'futbalove_travniky' ),
                        array(
                            'a' => array(
                                'href' => array(),
                            ),
                        )
                    ),
                    esc_url( admin_url( 'post-new.php' ) )
                );
                ?></p>

        <?php elseif ( is_search() ) : ?>

            <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'futbalove_travniky' ); ?></p>
            <?php
            get_search_form();

        else : ?>

            <p style="min-height: 200px;padding-top: 40px;"><?php esc_html_e( 'Táto kategória zatiaľ neobsahuje žiadny produkt.', 'futbalove_travniky' ); ?></p>
            <?php
            //get_search_form();

        endif; ?>
    </div><!-- .page-content -->
</section><!-- .no-results -->

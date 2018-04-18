<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Futbalové_trávniky
 */

?>


<div class="row__medium-3">
    <div class="fav-item">
        <div class="fav-item__picture">
            <?php

            $image = get_the_post_thumbnail_url($post_id, 'large');
            ?>
            <a href="<?php echo esc_url( get_permalink() ) ?>" >
            <img src="<?php echo $image; ?>" alt="">
            </a>
        </div>
        <div class="fav-item__title">
            <?php the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' ); ?>
           <span class="fav-item__price">
               <?php if(get_field('cena'))  echo get_field('cena') . "&euro; / deň"; ?>
           </span>
        </div>

        <a href="<?php echo esc_url( get_permalink() ) ?>" >
        <div class="btn btn--fullwidth">
            Viac info
        </div>
        </a>

    </div>

</div>






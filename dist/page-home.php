<?php
/*
Template Name : Home Page
*/

get_header(); ?>

    <div class="large-hero">


        <img src="<?= bloginfo('template_directory') ?>/images/football-field.jpg" height="400px"
             alt="Coastal view of ocean and mountains"
             class="large-hero__image">
        <div class="large-hero__overlay"></div>


        <div class="large-hero__text-content">
            <div class="wrapper">
                <h1 class="large-hero__title"> Futbalové trávniky</h1>
                <p class="large-hero__description">Údržba, regenerácia a manažment trávnikových plôch.</p>
                <p><a href="#our-beginning" id="our-beginning-link" class="btn hidden-xs">Viac info</a></p>
            </div>
        </div>

        <div class="large-hero__effect"><span></span> <span></span></div>

    </div>

    <div id="our-beginning" class="page-section" data-section-link="#our-beginning-link" style="position: relative;">
        <div class="wrapper">

            <div class="row row--gutters">
                <div class="row__medium-4 row__medium-4--larger row__b-margin-until-medium">
                    <picture>
                        <source sizes="404px"
                                data-srcset="<?= bloginfo('template_directory') ?>/images/onas-medium.jpg 404w, <?= bloginfo('template_directory') ?>/images/onas-medium.jpg 808w"
                                media="(min-width: 1020px)">
                        <source sizes="320px"
                                data-srcset="<?= bloginfo('template_directory') ?>/images/onas-medium.jpg 382w, <?= bloginfo('template_directory') ?>/images/lawn-mower.jpg 764w"
                                media="(min-width: 800px)">
                        <img class="lazyload img-responsive"
                             data-srcset="<?= bloginfo('template_directory') ?>/images/onas-small.jpg 800w, <?= bloginfo('template_directory') ?>/images/lawn-mower.jpg 1600w"
                             alt="Futbalové trávniky">
                    </picture>
                </div>
                <div class="row__medium-8 row__medium-8--smaller">
                    <div class="generic-content-container">
                        <h2 class="headline headline--no-t-margin headline--b-margin-small">O nás</h2>
                        <hr class="left">
                        <p>Zakladaním, údržbou a trávnikovým poradenstvom sa zaoberáme viac ako jednu dekádu. Máme
                            potrebné znalosti a skúsenosti so servisom trávnikov.

                            Pravidelne sledujeme nové trendy a neustále sa vzdelávame. Jednoducho žijeme trávnikmi.

                        </p>

                        <p> Naším poslaním je robiť služby a servis trávnikov aj pre kluby s nižším rozpočtom, ktoré
                            nedisponujú adekvátnou technikou, personálom alebo dostatočnými vedomosťami ako na to.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="features" class="page-section page-section--stripe" data-section-link="#features-link">
        <div class="wrapper">
            <h2 class="section-title"><span class="icon icon--star section-title__icon"></span> Naše
                <strong>služby</strong>
            </h2>
            <hr>

            <h2 class="headline headline--small headline--centered headline--no-t-margin "> Zabezpečujeme kompletný
                servis pre futbalové ihriská. </h2>

            <?php
            $i = 0;
            $loop = new WP_Query(
                array(
                    'post_type' => 'sluzby',
                    'orderby' => 'post_id',
                    'order' => 'ASC'
                )
            );
            while ($loop->have_posts()) : $loop->the_post();
                if ($i > 1 && $i % 3 == 0) echo '</div>';
                if ($i % 3 == 0) echo '<div class="row row--equal-height-at-medium row--gutters-small generic-content-container">';
                ?>


                <div class="row__medium-4">
                    <div class="service">
                        <?= the_post_thumbnail('', array('class' => 'service__photo')); ?>
                        <div class="service__content">
                            <h3><?= the_title() ?></h3>
                            <hr class="left">
                            <p><?= the_content() ?></p>
                        </div>
                    </div>
                </div>

                <?php
                $i++;
            endwhile; ?>

        </div>
    </div>
    </div>
    </div>

    <div id="testimonials" class="page-section  lazy lazy-hidden" data-section-link="#testimonials-link">
        <div class="wrapper ">
            <h2 class="section-title">Portfólio <strong>produktov</strong>
            </h2>
            <hr>

            <h2 class="headline headline--small headline--centered headline--no-t-margin "> Portfólio tovarov pre
                futbalové kluby </h2>

            <?php
            $i = 0;
            $loop = new WP_Query(
                array(
                    'post_type' => 'portfolio',
                    'orderby' => 'post_id',
                    'order' => 'ASC'
                )
            );
            while ($loop->have_posts()) {
                $loop->the_post();
                $i++;
                $a_class = ($i == 1) ? 'class="active"' : '';
                $div_class = ($i == 1) ? 'tabswitcher__tab--active' : '';
                $portfolio[] = array(
                    'title' => get_the_title(),
                    'slug' => $post->post_name,
                    'content' => get_the_content(),
                    'a_class' => $a_class,
                    'div_class' => $div_class
                );
            }
            ?>
            <div class="tabswitcher products">
                <ul class="tabswitcher__menu">
                    <?php if(count($portfolio)) foreach ($portfolio as $p): ?>
                        <li role="presentation" class=""><a <?= $p['a_class'] ?>
                                    data-tab-name="<?= $p['slug'] ?>"><?= $p['title'] ?></a></li>
                    <?php endforeach; ?>
                </ul>
                <?php if(count($portfolio)) foreach ($portfolio as $p): ?>
                    <div class="tabswitcher__tab  <?= $p['div_class'] ?>" id="<?=$p['slug']?>">
                        <?= $p['content'] ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div id="kontakt" class="page-section page-section--stripe lazy lazy-hidden" data-section-link="#testimonials-link">
        <div class="wrapper ">
            <h2 class="section-title">Kontaktujte <strong>nás</strong>
            </h2>
            <hr>

            <h2 class="headline headline--small headline--centered headline--no-t-margin "> Neváhajte nás kontaktovať s
                vašou požiadavkou </h2>


            <?php echo do_shortcode('[contact-form-7 id="28" title="Kontaktný formulár"]'); ?>

        </div>

    </div>


<?php
get_footer();

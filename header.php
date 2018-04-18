<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Futbalové_trávniky
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,100,300,500,600,700' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
    <script src="<?=bloginfo('template_directory'); ?>/app/temp/scripts/Vendor.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">




    <header class="site-header">

        <div class="site-header__top-block" >
            <div class="wrapper">
<!--                <div style="background:blue;height: 55px">-->
<!--                    <div class="middle" style="float:left;background:red;">A</div>-->
<!--                    <div class="middle" style="float: right;background:orange;">B<br>B<br>B</div>-->
<!--                    <div class="middle" style="float: right;background:green;">C</div>-->
<!--                </div>-->

                <div class="site-header__outer">
                    <div class="site-header__logo middle">
                        <a href="/">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">
                        </a>
                    </div>
                    <div class="search-box middle">
                        <div class="container-4">
                            <input type="search" id="search" placeholder="Hľadať..."/>
                            <button class="icon"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="site-header__info middle">
                        <i class="fa fa-phone"></i> 0908 716 007
                        <i class="fa fa-envelope" style="padding-left: 15px;"></i> pozicovnapzt@gmail.com
                    </div>
                </div>
        </div>
        </div>


        <div class="wrapper white-menu site-header__menu-content">

            <nav class="primary-nav primary-nav--pull-right">
                <ul >

                    <li class="submenu">
                        <?php echo menu_link("Záhradná technika") ?>

                        <div class="submenu__separator">

                        </div>
                        <div class="submenu__content">
                            <div class="wrapper wrapper--medium">

                                <div class="row">
                                <div class="row__medium-4">
                                    <h4><?php echo menu_link("Starostlivosť o trávnik") ?></h4>
                                    <ul class="submenu__list">
                                        <li>Aerifikátor</li>
                                        <li>Ručná sondírka</li>
                                        <li>Rozmetadlo</li>
                                        <li>Štrbinový aplikátor</li>
                                        <li>Ťahaný zberač</li>
                                        <li>Vertikutátor</li>
                                        <li>Zaťahovacia sieť</li>
                                        <li>Kosačka</li>
                                        <li>Zlupovačka trávnikov</li>
                                        <li>Krovinorez</li>

                                    </ul>


                                </div>

                                <div class="row__medium-4">
                                    <h4><?php echo menu_link("Spracovanie dreva") ?></h4>
                                    <ul class="submenu__list">
                                        <li>Drvič konárov Axo</li>
                                        <li>Štiepačka</li>
                                    </ul>


                                    <h4><?php echo menu_link("Jazierko") ?></h4>
                                    <ul class="submenu__list">
                                        <li>Jazierkový vysávač</li>
                                    </ul>


                                    <h4><?php echo menu_link("Zimná úržba") ?></h4>
                                    <ul class="submenu__list">
                                        <li>Snehová fréza Toro</li>
                                        <li>Snehová fréza Husqvarna</li>
                                    </ul>
                                </div>

                                    <div class="row__medium-4">
                                        <h4><?php echo menu_link("Spracovanie pôdy") ?></h4>
                                        <ul class="submenu__list">
                                            <li>Ručný zhutňovač</li>
                                            <li>Záhradný valec</li>
                                        </ul>

                                        <h4><?php echo menu_link("Údržba stromov") ?></h4>
                                        <ul class="submenu__list">
                                            <li>Teleskopický hák a píla</li>

                                        </ul>

                                        <h4><?php echo menu_link("Iné záhradnícke práce") ?></h4>
                                        <ul class="submenu__list">
                                            <li>Rudla</li>
                                            <li>Zametacia kefa</li>
                                            <li>Kompresor</li>
                                        </ul>
                                    </div>


                                </div>


                            </div>

                        </div>
                    </li>
                    <li>
                        <?php echo menu_link("Stavebné náradie") ?>
                    </li>
<!--                    <li><a>Iné</a></li>-->
<!--                    <li><a>Pripravujeme</a></li>-->
                    <li><a>Cenník</a></li>
                    <li><a>Kontakt</a></li>


                </ul>


            </nav>
        </div>


            <div class="site-header__menu-icon">
                <div class="site-header__menu-icon__middle"></div>
            </div>







    </header>




	<div id="content" class="site-content">

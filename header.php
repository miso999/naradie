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

                <div style="height: 73px">

                <div class="site-header__logo middle" >
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">
                </div>

                    <div class="search-box middle">
                        <div class="container-4">
                            <input type="search" id="search" placeholder="Hľadať..." />
                            <button class="icon"><i class="fa fa-search"></i></button>
                        </div>
                    </div>

                    <div class="site-header__info middle">
                        <i class="fa fa-phone"></i>   0908 716 007
                        <i class="fa fa-envelope" style="padding-left: 15px;"></i>   pozicovnapzt@gmail.com
                    </div>
            </div>
        </div>
        </div>


        <div class="wrapper white-menu">




            <div class="site-header__menu-icon">
                <div class="site-header__menu-icon__middle"></div>
            </div>

            <div class="site-header__menu-content">

                <nav class="primary-nav primary-nav--pull-right">
                    <ul>

                        <li><a href="">Záhradná technika</a></li>
                        <li><a>Stavebné náradie</a></li>
                        <li><a>Iné</a></li>
                        <li><a>Pripravujeme</a></li>
                        <li><a>Cenník</a></li>
                        <li><a>Kontakt</a></li>
                    </ul>
                </nav>


            </div>
        </div>
    </header>




	<div id="content" class="site-content">

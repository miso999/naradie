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

	<?php wp_head(); ?>
    <script src="<?=bloginfo('template_directory'); ?>/app/temp/scripts/Vendor.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">




    <header class="site-header">
        <div class="wrapper">


            <div class="site-header__menu-icon">
                <div class="site-header__menu-icon__middle"></div>
            </div>

            <div class="site-header__menu-content">

                <nav class="primary-nav primary-nav--pull-right">
                    <ul>
                        <li><a href="#our-beginning" id="our-beginning-link">O nás</a></li>
                        <li><a href="#features" id="features-link">Služby</a></li>
                        <li><a href="#testimonials" id="testimonials-link">Portfólio</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>




	<div id="content" class="site-content">

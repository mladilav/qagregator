<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slider.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/header.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/footer.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.7/slick.css"/>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
    <script src="http://code.jquery.com/jquery-1.11.1.js" ></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendors/slider.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/slider.js" type="text/javascript"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.3.7/slick.min.js"></script>

    <script>
        $( document ).ready(function() {
            //alert( "ready!" );
        });
    </script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
        <a href="/"><div class="logo"></div></a>
        <ul class="lang"><?php pll_the_languages(array('show_flags'=>0,'show_names'=>1));?></ul>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>

		</nav><!-- #site-navigation -->
        <div class="otdel">
        <div class="cap">Отдел продаж</div>
        <div class="phone">
            <ul>
                <li><a href="tel:+9660312694002">+966 (0312) 69-40-02</a></li>
                <li><a href="tel:+9960312694011">+996 (0312) 69-40-11</a></li>
                <li><a href="tel:+9960312479900<">+996 (0312) 47-99-00</a></li>
                <li><a href="tel:+9660312694002">+966 (0312) 69-40-02</a></li>
                <li><a href="tel:+9960312694011">+996 (0312) 69-40-11</a></li>
            </ul></div></div>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">
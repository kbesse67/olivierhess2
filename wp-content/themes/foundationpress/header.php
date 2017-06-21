<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Rubik:400,700" rel="stylesheet">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>




<!--HEADER NAVIGATION GAUCHE -->

	<header id="mySidenav" class="sidenav wow fadeIn">

	<a href="#" class="text-center logo wow fadeInLeft js-scrollTo" data-wow-delay="0.4s" >
		<img src="wp-content/themes/foundationpress/assets/images/logo.png" alt=""></a>

	<nav >
    <ul data-magellan data-options="barOffset:30;" activeClass="active">
			 <li class="hvr-grow wow fadeInLeft navhome" data-wow-delay="0.4s" ><a href="#accueil" class="js-scrollTo">Home</a></li>
      <li class="hvr-grow wow fadeInLeft" data-wow-delay="0.4s"><a href="#travaux" class="js-scrollTo">Travaux</a></li>
      <li  class="hvr-grow wow fadeInLeft" data-wow-delay="0.6s"><a href="#olivierhass" class="js-scrollTo">Olivier Hess</a></li>
      <li  class="hvr-grow wow fadeInLeft" data-wow-delay="0.8s"><a href="#contact" class="js-scrollTo">Contact</a></li>
    </ul>
  </nav>


</header>
	<section class="container">
		<?php do_action( 'foundationpress_after_header' );

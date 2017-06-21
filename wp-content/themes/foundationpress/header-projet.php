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




	<!-- BOUTON DE RETOUR -->
	<nav class="navback hvr-grow ">
		<a href="http://localhost:8888/olivierhess/">< BACK</a>
	</nav>


<!--HEADER NAVIGATION GAUCHE -->

<header id="mySidenav" class="sidenavprojet wow fadeIn">
		<div class="row">
				<h4 class="wow fadeInLeft text-center" data-wow-delay="0.6s"><?php the_title(); ?></h4>
				<h5 class="wow fadeInLeft text-center" data-wow-delay="0.8s"><?php the_field(caracteristique); ?><?php the_field(caracteristiquerea); ?></h5>
		</div>

	<div class="contenu">
		<p>
			<?php the_field(description); ?>
			<?php the_field(descriptionreal); ?>
		</p>

			<h4 class="text-right">2017</h4>
	</div>


</header><!--

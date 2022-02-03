<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Your_Truely
 * @since Your Truely 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	<header id="site-header">
		<nav id="nav-fixed">
			<div class="wrapper">
				<div id="branding">
					<a href="<?=home_url()?>">
						<img src="<?=get_template_directory_uri();?>/images/logo.png" alt="brand">
					</a>
				</div>
				<?php 
				$menu_attr = array(
					'container_id'    => 'primany-menu',
					'container_class'    => 'menu-wrapper',
					'theme_location'  => 'primary',
					'menu_class'      => 'menu'
					);
				wp_nav_menu( $menu_attr );
				?>
			</div>
		</nav>
	</header><!-- #header -->

	<main id="site-main">

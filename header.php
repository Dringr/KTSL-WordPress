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
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<header class="site-header" role="banner" id="navbar">
		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
			<div class="title-bar-left">
				<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
				<span class="site-mobile-title title-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</span>
			</div>
		</div>



    <a id="logo" id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/src/assets/images/svg/logos/KTSL-no-strap.svg" alt="">
    </a>
  <nav class="menu">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>solutions"><span>Solutions</span></a>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>news"><span>News & events</span></a>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>case-studies"><span>Case Studies</span></a>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us"><span>About us</span></a>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>careers"><span>Careers</span></a>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us"><span>Contact</span></a>
    <a href=""><span>Support</span></a>
  </nav>
  <div id="navbar" class="menu__toggler">
    <span></span>
  </div>
	</header>

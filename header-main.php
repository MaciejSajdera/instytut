<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>
<div class="container-fluid my-navigation-container">
	<div class="row my-navigation-row">
		<div class="col-2 col-lg-10 col-xl-8 order-md-3 button-container text-right not-on-mobile-and-tablet">
			<div class="inner-button-container">
			<form class="not-on-mobile-and-tablet my-search-form" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
				<label class="sr-only" for="s"><?php esc_html_e( 'Search', 'understrap' ); ?></label>
				<div class="input-group">
					<input class="field form-control" id="s" name="s" type="text"
						placeholder="<?php esc_attr_e( 'Search &hellip;', 'understrap' ); ?>" placeholder="<?php the_search_query(); ?>">
					<span class="input-group-append">
						<input class="submit my-search-form-icon" id="searchsubmit" name="submit" type="submit"
						placeholder="&#xf002;">
					</span>
				</div>
			</form>
			<a href="mailto:sekretariat@impib.pl"><i class="far fa-envelope"></i></a>
			<a href="https://twitter.com/lukasiewicz_pl?lang=en" target="_blank"><i class="fab fa-twitter"></i></a>
			<a href="https://www.facebook.com/Sie%C4%87-Badawcza-%C5%81UKASIEWICZ-Instytut-IMPiB-1790101597702109/" target="_blank"><i class="fab fa-facebook-f"></i></a>
			<a href="<?php echo $main_page_bussiness_href; ?>" class="my-button button-for-bussiness">Dla Biznesu</a>
			<a href="<?php echo $main_page_science_href; ?>" class="my-button button-for-science">Dla Nauki</a>
			</div>
		</div>
		<div class="col-8 col-lg-2 col-xl-2 order-md-1 text-xl-right">
			<div class="logo-container">
			<?php the_custom_logo();?>
			</div>
		</div>
		<div class="col-xl-2 only-on-xxl-and-up order-md-2">
			<p class="logo-text">
			Sieć Badawcza ŁUKASIEWICZ<br />Instytut Inżynierii Materiałów Polimerowych i Barwników 
			</p>
		</div>
		<div class="col-4 order-md-3 not-on-xl text-center my-auto">
			<div class="nav-container">
				<nav class="navbar navbar-expand-lg">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<i class="fas fa-bars"></i>
				</button>
				</nav><!-- .site-navigation -->
			</div>
		</div>
		<div class="col-12 order-md-4 not-on-mobile-and-tablet my-navigation-bar">
			<nav class="navbar navbar-expand-lg">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
				<i class="fas fa-bars"></i>
			</button>
			<?php wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'navbarNavDropdown',
					'menu_class'      => 'navbar-nav',
					'fallback_cb'     => '',
					'menu_id'         => 'main-menu',
					'depth'           => 2,
					'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
				)
			); ?>
			</nav><!-- .site-navigation -->
		</div>
	</div><!-- .row end -->
<!-- The WordPress Menu goes here -->
<div id="navbarNavDropdown" class="my-collapse-container">
				<div class="button-container-small">
					<a href="<?php echo $main_page_bussiness_href; ?>" class="my-button button-for-bussiness">Dla Biznesu</a>
					<a href="<?php echo $main_page_science_href; ?>" class="my-button button-for-science">Dla Nauki</a>
				</div>
			<?php wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => 'my-inner-collapse-container',
							'container_id'    => 'innerNavbarNavDropdown',
							'menu_class'      => 'navbar-nav',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					); ?>
				<div class="icons-button-container-small">
					<div class="social-button-container-small">
						<a href="mailto:sekretariat@impib.pl"><i class="far fa-envelope"></i></a>
						<a href="https://twitter.com/lukasiewicz_pl?lang=en" target="_blank"><i class="fab fa-twitter"></i></a>
						<a href="https://www.facebook.com/Sie%C4%87-Badawcza-%C5%81UKASIEWICZ-Instytut-IMPiB-1790101597702109/" target="_blank"><i class="fab fa-facebook-f"></i></a>
					</div>
					<form class="my-search-form" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
						<label class="sr-only" for="s"><?php esc_html_e( 'Search', 'understrap' ); ?></label>
						<div class="input-group">
							<input class="field form-control" id="s" name="s" type="text"
								placeholder="<?php esc_attr_e( 'Search &hellip;', 'understrap' ); ?>" placeholder="<?php the_search_query(); ?>">
							<span class="input-group-append">
								<input class="submit my-search-form-icon" id="searchsubmit" name="submit" type="submit"
								placeholder="&#xf002;">
							</span>
						</div>
					</form>
				</div>
			</div>
</div><!-- .conatiner end -->
</div><!-- #wrapper-navbar end -->
<div class="container-fluid main-page-container">
	<div class="row science-bussiness-photo">
		<div class="col-md-6 bussiness-photo">
			<div class="photo-overlay"></div>
			<div class="science-bussiness-text">
				<h3>Dla biznesu</h3>
				<p><?php the_field('short_text_for_business'); ?></p>
				<a href=<?php echo $main_page_bussiness_href ?>>Wybieram</a>
			</div>
		</div>
		<div class="col-md-6 science-photo">
			<div class="photo-overlay"></div>
			<div class="science-bussiness-text">
				<h3>Dla nauki</h3>
				<p><?php the_field('short_text_for_science'); ?></p>
				<a href=<?php echo $main_page_science_href ?>>Wybieram</a>
			</div>
		</div>
	</div>
</div>
	

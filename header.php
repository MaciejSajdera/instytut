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

global $post;


$main_page_bussiness_id = 85;
$main_page_science_id = 87;

$main_page_bussiness_href = get_post_permalink(85);
$main_page_science_href = get_post_permalink(87);
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
				<div class="col-2 col-lg-10 col-xl-8 not-on-mobile-and-tablet order-md-3 button-container text-right">

						<div class="logo-container">
							<?php the_custom_logo();?>
						</div>

					<div class="inner-button-container">
						
	

					<!-- <span><?php do_action('wpml_add_language_selector'); ?></span> -->


						<a href="mailto: <?php echo the_field('mail_in_menus', 1246) ?>"><i class="far fa-envelope"></i></a>
						<a href="<?php echo the_field('twitter', 1246) ?>" target="_blank"><i class="fab fa-twitter"></i></a>
						<a href="<?php echo the_field('facebook', 1246) ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
						<a href="<?php echo $main_page_bussiness_href; ?>" class="biz-button my-button <?php if (get_queried_object_id() == $main_page_bussiness_id || is_front_page() ): echo 'button-menu-active'; else: echo 'button-menu-not-active'; endif; ?>">Dla Biznesu</a>
						<a href="<?php echo $main_page_science_href; ?>" class="sci-button my-button <?php if (get_queried_object_id() == $main_page_science_id ): echo 'button-menu-active'; else: echo 'button-menu-not-active'; endif; ?>">Dla Nauki</a>
					</div>
				</div>

				<!-- <div class="col-xl-2 only-on-xxl-and-up order-xl-2">
					<p class="logo-text">
					Sieć Badawcza ŁUKASIEWICZ<br />Instytut Inżynierii Materiałów Polimerowych i Barwników 
					</p>
				</div> -->
				<div class="not-on-xl mobile-nav-container">
						<div class="logo-container">
							<?php the_custom_logo();?>
						</div>
					<div class="nav-container">
						<nav class="navbar navbar-expand-lg">
						<button class="navbar-toggler menu-toggle" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
							<span class="hamburger__container" tabindex="-1">
    						<span class="hamburger__bars"></span>
				  			</span>
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
					<form class="my-search-form" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
						<label class="sr-only" for="s"><?php esc_html_e( 'Search', 'understrap' ); ?></label>
						<div class="input-group">
							<input class="field form-control" id="s" name="s" type="text"
								placeholder="<?php esc_attr_e( 'Search &hellip;', 'understrap' ); ?>" value="<?php the_search_query(); ?>">
							<span class="input-group-append">
								<input class="submit my-search-form-icon" id="searchsubmit" name="submit" type="submit"
								value="&#xf002;">
							</span>
						</div>
					</form>
					</nav><!-- .site-navigation -->
				</div>
			</div><!-- .row end -->
			<!-- The WordPress Menu goes here -->
			<div id="navbarNavDropdown" class="my-collapse-container <?php if (get_queried_object_id() == $main_page_bussiness_id || is_front_page() ): echo 'mobile-nav-biz'; else: echo 'mobile-nav-sci'; endif; ?>">
				<div class="button-container-small">
				<a href="<?php echo $main_page_bussiness_href; ?>" class="biz-button my-button <?php if (get_queried_object_id() == $main_page_bussiness_id || is_front_page() ): echo 'button-menu-active'; else: echo 'button-menu-not-active'; endif; ?>">Dla Biznesu</a>
						<a href="<?php echo $main_page_science_href; ?>" class="sci-button my-button <?php if (get_queried_object_id() == $main_page_science_id ): echo 'button-menu-active'; else: echo 'button-menu-not-active'; endif; ?>">Dla Nauki</a>
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
						<a href="mailto: <?php echo the_field('mail_in_menus', 1246) ?>"><i class="far fa-envelope"></i></a>
						<a href="<?php echo the_field('twitter', 1246) ?>" target="_blank"><i class="fab fa-twitter"></i></a>
						<a href="<?php echo the_field('facebook', 1246) ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
					</div>
					<form class="my-search-form" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
						<label class="sr-only" for="s"><?php esc_html_e( 'Search', 'understrap' ); ?></label>
						<div class="input-group">
							<input class="field form-control" id="s" name="s" type="text"
								placeholder="<?php esc_attr_e( 'Search &hellip;', 'understrap' ); ?>" value="<?php the_search_query(); ?>">
							<span class="input-group-append">
								<input class="submit my-search-form-icon" id="searchsubmit" name="submit" type="submit"
								value="&#xf002;">
							</span>
						</div>
					</form>
				</div>
			</div>
	</div><!-- .conatiner end -->
</div><!-- #wrapper-navbar end -->

<?php
$page_id = get_queried_object_id();

$page_biz_id = get_queried_object_id('page-template-mainpage_business');

if (wp_is_mobile()) :
	$mainBannerBiz = get_field("banner_mobile_1", $main_page_bussiness_id);
	$mainBannerSci = get_field("banner_mobile_2", $main_page_science_id);
else :
	$mainBannerBiz = get_field("banner_desktop_1", $main_page_bussiness_id);
	$mainBannerSci = get_field("banner_desktop_2", $main_page_science_id);
endif;


if (get_queried_object_id() == $main_page_bussiness_id) :
	$mainBanner = $mainBannerBiz;
endif;

if (get_queried_object_id() == $main_page_bussiness_id) :
	$mainBannerSci = $mainBannerSci;
endif;


?>

<div class="container-fluid header-title-container position-relative">

	<style>
		.header-title-container {

			background:url(<?php echo $mainBannerBiz;?>) no-repeat;
			background-size: cover;
		}
	</style>
	<!-- <div class="gradient-bg-section-inner"></div> -->
	<?php if ( is_front_page()) : ?>
		<div class="my-entry-header">
			<h1 class="my-entry-title"><?php the_title(); ?></h1>
		</div>
		<?php elseif (is_search()) : ?>
		<div class="my-entry-header position-relative">
			<h1 class="my-entry-title">Wyniki wyszukiwania</h1>
		</div>
		<?php else : ?>
		<div class="my-entry-header">
			<h1 class="my-entry-title"><?php wp_title( '', true, 'right' ); ?></h1>
		</div>
	<?php endif; ?>	
</div>

	



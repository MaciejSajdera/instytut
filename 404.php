<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header('blank');
?>

<div class="wrapper my-page-404 text-center" id="error-404-wrapper">

	<section class="error-404 not-found">

		<header class="page-header">

			<p class="page-title"><?php esc_html_e( 'Strona nie została znaleziona', 'understrap' ); ?></p>

		</header><!-- .page-header -->

		<div class="page-content">
			<a href="<?php echo site_url( '/' ); ?>"><i class="fas fa-chevron-circle-right"></i></a>

			<p><a href="<?php echo site_url( '/' ); ?>" class="back-homepage">Przejdź do strony głównej</a></p>

		</div><!-- .page-content -->

	</section><!-- .error-404 -->

</div><!-- #error-404-wrapper -->

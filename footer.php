<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper bottom-footer-wrapper" id="wrapper-footer">

	<div class="container">

		<div class="row text-center">

			<div class="col-md-3">
				<a href="https://www.bip.gov.pl/" target="_blank">
					<img src="http://instytutimpib.dev.cube360.pl/wp-content/uploads/2019/06/bip.png">
				</a>
			</div>
			<div class="col-md-3">
				<a href="https://www.gov.pl/web/nauka/" target="_blank">
					<img src="http://instytutimpib.dev.cube360.pl/wp-content/uploads/2019/06/mnisw.png">
				</a>
			</div>
			<div class="col-md-3">
				<a href="https://www.rgib.org.pl/" target="_blank">
					<img src="http://instytutimpib.dev.cube360.pl/wp-content/uploads/2019/06/rgib.png">
				</a>
			</div>
			<div class="col-md-3">
				<a href="https://www.gov.pl/web/przedsiebiorczosc-technologia" target="_blank">
					<img src="http://instytutimpib.dev.cube360.pl/wp-content/uploads/2019/06/mpit.png">
				</a>
			</div>

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>


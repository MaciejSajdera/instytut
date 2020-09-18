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
				<a href="<?php echo the_field('bip', 1246) ?>" target="_blank">
					<img src="<?php echo the_field('bip_image_link', 1246) ?>">
				</a>
			</div>
			<div class="col-md-3">
				<a href="<?php echo the_field('MNSIW', 1246) ?>" target="_blank">
					<img src="<?php echo the_field('mnisw_image_link', 1246) ?>">
				</a>
			</div>
			<div class="col-md-3">
				<a href="<?php echo the_field('rgib', 1246) ?>" target="_blank">
					<img src="<?php echo the_field('rgib_image_link', 1246) ?>">
				</a>
			</div>
			<div class="col-md-3">
				<a href="<?php echo the_field('mpit', 1246) ?>" target="_blank">
					<img src="<?php echo the_field('mpit_image_link', 1246) ?>">
				</a>
			</div>

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>


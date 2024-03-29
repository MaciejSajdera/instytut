<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<div class="parallax section-container slogan-section slogan-section-1" id="slogan-1-section">
	<div class="container-fluid"></div>
	<div class="container position-relative">
		<div class="row my-container">
			<div class="col-md-7">
				<h2 class="section-title">
					<?php the_field('slogan_1', 721); ?>
				</h2>
				<p>
				<?php the_field('text_slogan_1', 721); ?>
				</p>
			</div>
			<div class="col-md-5 contact-form-container">
				<?php echo do_shortcode( '[contact-form-7 id="114" title="Formularz w sekcji haslo"]' ); ?>
			</div>
		</div>
	</div>
</div>

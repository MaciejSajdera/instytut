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

<div class="parallax section-container contact-section bg-abstract" id="contact-section">
	<div class="container-fluid navy-bg-section-inner"></div>
		<div class="row my-container position-relative">
			<div class="col-12 text-center mb-4">
				<h2>Kontakt </h2>
			</div>
			<div class="contact-form-container">
				<?php echo do_shortcode( '[contact-form-7 id="104" title="Formularz kontaktowy"]' ); ?>
			</div>
		</div>
	
</div><!-- advantages-container -->

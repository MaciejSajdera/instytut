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

<div class="parallax section-container slogan-section slogan-section-1 position-relative  bg-abstract" id="our-mission-section">
	<div class="container-fluid"></div>
	<div class="container position-relative">
		<div class="row">
			<div class="col-md-7">
				<h2 class="section-title">
					<?php the_field('our_mission', 721); ?>
				</h2>
				<div class="text-justify"><p>
					<?php the_field('our_mission_text', 721); ?>
					</p>
				
				</div>
			</div>
			<div class="col-md-5">
				<!-- <div class=" my-button-container"> -->
					<a href="http://instytutimpib.dev.cube360.pl/o-nas-2/o-instytucie/" class="green-button">Więcej o nas</a>
				<!-- </div> -->
			</div>
		</div>
	</div>
</div><!-- advantages-container -->

<?php
/**
 * Template Name: oferta
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<!-- offer -->
<div class="section-container offer">

	<div class="upper-section-container branches-text">
		<div class="row">
			<div class="col-md-4 col-lg-3">
				<h2><?php the_field('header_branches'); ?></h2>
			</div>
			<div class="col-md-8 col-lg-9">
				<div class="text-justify"><?php the_field('offer_short_text_1'); ?></div>
			</div>
		</div>
	</div>

	<div class="container-fluid branches-links">
		<div class="row my-container">
			
			<div class="col-md-6 col-lg-4">
				<a href="http://instytutimpib.dev.cube360.pl/oferta/branza-przetworstwa-tworzyw-sztucznych">
					<div class="single-branch-container">
						<p class="branch-title text-left"><?php the_field('branch_name_1'); ?></p>
						<div class="read-more-text">Czytaj więcej <i class="fas fa-long-arrow-alt-right"></i></div>
						<div class="background-icon background-icon-1"></div>
					</div>
				</a>
			</div>
			
			<div class="col-md-6 col-lg-4">
				<a href="http://instytutimpib.dev.cube360.pl/oferta/branza-przetworstwa-gumy-i-elastomerow">
					<div class="single-branch-container">
						<p class="branch-title text-left"><?php the_field('branch_name_2'); ?></p>
						<div class="read-more-text">Czytaj więcej <i class="fas fa-long-arrow-alt-right"></i></div>
						<div class="background-icon background-icon-2"></div>
					</div>
				</a>
			</div>

			<div class="col-md-6 col-lg-4">
				<a href="http://instytutimpib.dev.cube360.pl/oferta/branza-mechaniczna-dla-przemyslu-przetworstwa-tworzyw-sztucznych-i-gumy">
					<div class="single-branch-container">
						<p class="branch-title text-left"><?php the_field('branch_name_3'); ?></p>
						<div class="read-more-text">Czytaj więcej <i class="fas fa-long-arrow-alt-right"></i></div>
						<div class="background-icon background-icon-3"></div>
					</div>
				</a>
			</div>

			<div class="col-md-6 col-lg-4">
				<a href="http://instytutimpib.dev.cube360.pl/oferta/branza-farb-i-lakierow-dla-przemyslu-budowlanego-i-chemicznego">
					<div class="single-branch-container">
						<p class="branch-title text-left"><?php the_field('branch_name_4'); ?></p>
						<div class="read-more-text">Czytaj więcej <i class="fas fa-long-arrow-alt-right"></i></div>
						<div class="background-icon background-icon-4"></div>
					</div>
				</a>
			</div>

			<div class="col-md-6 col-lg-4">
				<a href="http://instytutimpib.dev.cube360.pl/oferta/ekologia-i-gospodarka-obiegu-zamknietego">
					<div class="single-branch-container">
						<p class="branch-title text-left"><?php the_field('branch_name_5'); ?></p>
						<div class="read-more-text">Czytaj więcej <i class="fas fa-long-arrow-alt-right"></i></div>
						<div class="background-icon background-icon-5"></div>
					</div>
				</a>
			</div>

			<div class="col-md-6 col-lg-4">
				<a href="http://instytutimpib.dev.cube360.pl/kontakt">
					<div class="single-branch-container single-branch-contact">
						<div class="single-branch-contact-overlay">
							<div class="my-outline-button">Skontaktuj się z nami</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>

	<div class="container branches-text-2">
		<div class="row">
			<div class="col-12">
				<h2><?php the_field('header_short_desc'); ?></h2>
			</div>
			<div class="col-12">
				<div class="text-justify"><?php the_field('offer_short_text_2'); ?></div>
			</div>
			<div class="col-12 text-center">
				<a href="http://instytutimpib.dev.cube360.pl/kontakt" class="my-button green-button">Skontaktuj się z nami</a>
			</div>
			
		</div>
	</div>
	
</div>
<!-- end of offer -->

<!--partners section-->
<?php get_template_part( 'template-parts/content-partners' ); ?>
<!--end of partners section-->
<!--contact section-->
<?php get_template_part( 'template-parts/content-contact-section' ); ?>
<!--end of contact section-->
<?php get_footer(); ?>
</div>


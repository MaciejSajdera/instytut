<?php
/**
 * Template Name: branże
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

<!-- end of branches section -->
<div class="section-container departments-section">
	<div class="container branch-main-container">
		<div class="row">
			<div class="col-lg-6 branch-text-1">
				<div class="text-justify"><p><?php the_field('branch_text_1'); ?></p></div>
			</div>
			<div class="col-lg-6 text-center">
				<?php
				$photo = get_field('branch_photo'); 
				$size = 'img-horizontal-medium'; ?>
				<?php echo wp_get_attachment_image( $photo, $size ); ?>
			</div>
			<div class="col-12 branch-text-2">
				<div class="text-justify"><p><?php the_field('branch_text_2'); ?></p></div>
			</div>
			<div class="col-12">
				<a href="#" class="my-button">Jak rozpocząć współpracę</a>
			</div>
		</div>
	</div>

	<?php if (have_rows('branch_departments')); ?>
	<?php $count=1; ?>
	<?php while(have_rows('branch_departments')) :the_row(); ?>
	<div class="container-fluid branch-departments" id="branch<?php echo $count; ?>">
		<div class="row my-container">
			<div class="col-md-6 col-lg-8 department-text">
				<h2><?php the_sub_field('department_title'); ?></h2>
				<div class="text-justify"><p><?php the_sub_field('department_text_short'); ?></p></div>
				
				<div class="collapse" id="number<?php echo $count; ?>">
					<div class="text-justify"><?php the_sub_field('department_text_long'); ?></div>
				</div>
				<a class="my-read-more-button-red" data-toggle="collapse" href="#number<?php echo $count; ?>" role="button" aria-expanded="false" aria-controls="number<?php echo $count; ?>">
					<span class="text-collapsed">Czytaj więcej</span>
					<span class="text-expanded">Czytaj mnniej</span>
				</a>
			</div>
			<div class="col-md-6 col-lg-4 department-photo text-center">
			<?php $page_id = get_queried_object_id(); ?>
				<div id="carousel-branches-<?php echo $page_id; ?>-<?php echo $count; ?>" class="carousel slide" data-ride="carousel" data-interval="false" data-pause="false">
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<?php
							$photo = get_sub_field('department_photo_1'); 
							$size = 'img-square'; ?>
							<?php echo wp_get_attachment_image( $photo, $size ); ?>
						</div>
						<div class="carousel-item">
							<?php
							$photo = get_sub_field('department_photo_2'); 
							$size = 'img-square'; ?>
							<?php echo wp_get_attachment_image( $photo, $size ); ?>
						</div>
						<div class="carousel-item">
							<?php
							$photo = get_sub_field('department_photo_3'); 
							$size = 'img-square'; ?>
							<?php echo wp_get_attachment_image( $photo, $size ); ?>
						</div>
						<div class="carousel-item">
							<?php
							$photo = get_sub_field('department_photo_4'); 
							$size = 'img-square'; ?>
							<?php echo wp_get_attachment_image( $photo, $size ); ?>
						</div>
					</div>
					<ol class="carousel-indicators">
						<li data-target="#carousel-branches-<?php echo $page_id; ?>-<?php echo $count; ?>" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-branches-<?php echo $page_id; ?>-<?php echo $count; ?>" data-slide-to="1"></li>
						<li data-target="#carousel-branches-<?php echo $page_id; ?>-<?php echo $count; ?>" data-slide-to="2"></li>
						<li data-target="#carousel-branches-<?php echo $page_id; ?>-<?php echo $count; ?>" data-slide-to="3"></li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<?php $count++; ?>
	<?php endwhile; ?>
</div>
<!-- end of branches section -->

<!--parallax -->
<div class="section-container parallax-container">
	<div class="parallax branches-check-also">
		<div class="navy-bg-section-inner"></div>
		<div class="container">
			<div class="row text-center">
				<div class="col-md-4 col-lg-6">
					<h2>Sprawdź też:</h2>
				</div>
				<div class="col-md-4 col-lg-3">
					<a href="#" class="my-button">Opinie i ekspertyzy</a>
				</div>
				<div class="col-md-4 col-lg-3">
					<a href="http://instytutimpib.dev.cube360.pl/doradztwo-i-szkolenia/" class="my-button my-button-white">Doradztwo i szkolenia</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end of parallax -->

<!-- other branches -->
<div class="section-container other-branches not-on-mobile">
	<div class="my-container">
		<h2 class="pb-5 text-center"><?php the_field('header_others_branches'); ?></h2>
		<div class="swiper-container" id="branches-carousel">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<a href="http://instytutimpib.dev.cube360.pl/oferta/branza-przetworstwa-tworzyw-sztucznych/">
						<div class="branch-container branch-1-container position-relative">
							<div class="gradient-bg-section-inner"></div>
							<p class="branch-title text-left"><?php the_field('branch_1_name'); ?></p>
							<a href="#" class="my-button">Jak rozpocząć współpracę</a>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="http://instytutimpib.dev.cube360.pl/oferta/branza-przetworstwa-gumy-i-elastomerow/">
						<div class="branch-container branch-2-container position-relative">
							<div class="gradient-bg-section-inner"></div>
							<p class="branch-title text-left"><?php the_field('branch_2_name'); ?></p>
							<a href="#" class="my-button">Jak rozpocząć współpracę</a>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="http://instytutimpib.dev.cube360.pl/oferta/branza-mechaniczna-dla-przemyslu-przetworstwa-tworzyw-sztucznych-i-gumy/">
						<div class="branch-container branch-3-container">
							<div class="gradient-bg-section-inner"></div>
							<p class="branch-title text-left"><?php the_field('branch_3_name'); ?></p>
							<a href="#" class="my-button">Jak rozpocząć współpracę</a>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="http://instytutimpib.dev.cube360.pl/oferta/branza-farb-i-lakierow-dla-przemyslu-budowlanego-i-chemicznego/">
						<div class="branch-container branch-4-container">
							<div class="gradient-bg-section-inner"></div>
							<p class="branch-title text-left"><?php the_field('branch_4_name'); ?></p>
							<a href="#" class="my-button">Jak rozpocząć współpracę</a>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="http://instytutimpib.dev.cube360.pl/oferta/ekologia-i-gospodarka-obiegu-zamknietego/">
						<div class="branch-container branch-5-container">
							<div class="gradient-bg-section-inner"></div>
							<p class="branch-title text-left"><?php the_field('branch_5_name'); ?></p>
							<a href="#" class="my-button">Jak rozpocząć współpracę</a>
						</div>
					</a>
				</div>
			</div>
			<div class="carousel-arrows">
				<div class="carousel-arrows-inner">
					<div class="my-swiper-button-prev"><i class="fas fa-arrow-left"></i></div>
					<div class="my-swiper-button-next"><i class="fas fa-long-arrow-alt-right"></i></div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end of other branches -->


<!--partners section-->
<?php get_template_part( 'template-parts/content-partners' ); ?>
<!--end of partners section-->
<!--contact section-->
<?php get_template_part( 'template-parts/content-contact-section' ); ?>
<!--end of contact section-->
<?php get_footer(); ?>
</div>


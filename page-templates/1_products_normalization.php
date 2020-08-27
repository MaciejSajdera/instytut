<?php
/**
 * Template Name: normalizacja wyrobów
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

<!-- normalization -->
<div class="section-container normalization bg-abstract">
	<div class="container top-content">
		<div class="row">
			<div class="col-12">
				<div class="text-justify"><?php the_field('text_normalization_1', 233); ?></div>
				<a class="not-on-md" data-toggle="collapse" href="#normalization-more-1" role="button" aria-expanded="false" aria-controls="normalization-more-1">Czytaj więcej <i class="fas fa-chevron-down"></i></a>
				<div class="collapse not-collapse-md" id="normalization-more-1">
					<div class="text-justify"><?php the_field('text_normalization_2', 233); ?></div>
				</div>
			</div>
			<div class="col-md-4 col-xl-3">
				<div class="photo-normalization text-center">
				<?php 
				$photo = get_field('photo_normalization', 233);
				$size = 'img-vertical-small';
				?>
				<?php echo wp_get_attachment_image( $photo, $size ); ?>
				</div>
			</div>
			<div class="col-md-8 col-xl-9">
				<div class="text-justify"><?php the_field('text_normalization_3', 233); ?></div>
				<a class="not-on-md" data-toggle="collapse" href="#normalization-more-2" role="button" aria-expanded="false" aria-controls="normalization-more-2">Czytaj więcej <i class="fas fa-chevron-down"></i></a>
				<div class="collapse not-collapse-md" id="normalization-more-2">
					<div class="text-justify"><?php the_field('text_normalization_4', 233); ?></div>
				</div>
			</div>
		</div>
	</div><!-- end of top-content -->
	<div class="container bottom-content">
		<div class="row">
			<div class="col-12">
				<div class="text-justify"><?php the_field('text_normalization_5', 233); ?></div>
			</div>
			<div class="col-12 col-lg-4">
				<a href="#" class="kt">
					<p>KT nr 140 ds. Rur, Kształtek i Armatury z Tworzyw Sztucznych<i class="fas fa-long-arrow-alt-right"></i></p>
				</a>
			</div>
			<div class="col-12 col-lg-4">
				<a href="#" class="kt">
					<p>KT nr 168 ds. Wyrobów z Tworzyw Sztucznych<i class="fas fa-long-arrow-alt-right"></i></p>
				</a>
			</div>
			<div class="col-12 col-lg-4">
				<a href="#" class="kt">
					<p>KT nr 175 ds. Farb i Lakierów<i class="fas fa-long-arrow-alt-right"></i></p>
				</a>
			</div>
		</div>
	</div>
</div>
<!-- end of normalization -->


<!--slogan 2 section-->
<?php get_template_part( 'template-parts/content-slogan-2' ); ?>
<!--end of slogan 2 section-->
<!--partners section-->
<?php get_template_part( 'template-parts/content-partners' ); ?>
<!--end of partners section-->
<!--contact section-->
<?php get_template_part( 'template-parts/content-contact-section' ); ?>
<!--end of contact section-->
<?php get_footer(); ?>
</div>


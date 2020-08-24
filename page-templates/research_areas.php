<?php
/**
 * Template Name: obszary badawcze
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

<!-- reaserch-->
<div class="section-container research-section">
	<?php if (have_rows('research_areas')); ?>
	<?php $research=1; ?>
	<?php while (have_rows('research_areas')) : the_row(); ?>
	<div class="container-fluid research-container">
		<div class="row my-container justify-content-center">
			<div class="col-md-6 work-type-container">
				<h2 class="work-type"><?php the_sub_field('work_type'); ?></h2>
			</div>
			<div class="col-md-6 research-right-container">
				<p class="research-network"><?php the_sub_field('research_network'); ?></p>
				<a class="my-read-more-button reserch-collapse" data-toggle="collapse" href="#research<?php echo $research; ?>" role="button" aria-expanded="false" aria-controls="research<?php echo $research; ?>">
					<span class="text-collapsed">Czytaj więcej</span>
					<span class="text-expanded">Czytaj mniej</span>
				</a>
			</div>
			<div class="col-12 work-text">
				<div class="collapse" id="research<?php echo $research; ?>">
					<div class="text-justify"><?php the_sub_field('work_text'); ?></div>
				</div>
			</div>
			<div class="col-12">
				<a href="http://instytutimpib.dev.cube360.pl/dzialalnosc-naukowa/laboratoria-prob-technologicznych/" class="my-button">Sprawdź nasze Laboratoria</a>
			</div>
			<div class="col-12">
				<h2 class="text-center mb-4">Liderzy Obszarów Naukowo - Badawczych</h2>
			</div>
		</div>
		<div class="row only-on-mobile justify-content-center liders-mobile">
			<div class="col-12 text-center">
				<?php
				$rows = get_sub_field('liders'); // get all the rows
				$first_row = $rows[0]; // get the first row
				$first_row_image = $first_row['lider_photo']; // get the sub field value 
				$first_row_text = $first_row['lider_name']; // get the sub field value 
				$image = wp_get_attachment_image_src( $first_row_image, 'img-square' );
				?>
				<div class="science-lider-photo"><img src="<?php echo $image[0]; ?>" /></div>
				<p><?php echo $first_row_text; ?></p>
			</div>
			<div class="col-12">
				<a class="liders-collapse" data-toggle="collapse" href="#liders<?php echo $research; ?>" role="button" aria-expanded="false" aria-controls="liders<?php echo $research; ?>">
					<span class="text-collapsed">Pokaż wszytskich liderów</span>
					<span class="text-expanded">Ukryj wszystkich liderów</span>
				</a>
			</div>
			<div class="collapse" id="liders<?php echo $research; ?>">

				<?php if(get_sub_field('liders')): $i = 0; 
				while(has_sub_field('liders')): $i++; if ($i != 1): ?>
				<div class="col-12 text-center">
					<?php 
					$photo = get_sub_field('lider_photo');
					$size = 'img-square'; ?>
					<div class="science-lider-photo"><?php echo wp_get_attachment_image( $photo, $size ); ?></div>
					<p><?php the_sub_field('lider_name'); ?></p>
				</div>
				<?php endif; endwhile; endif; ?>	
			</div>
		</div>
		<div class="row only-on-md-and-up my-container justify-content-center liders-desktop">
			<?php if (have_rows('liders')); ?>
			<?php while (have_rows('liders')) : the_row(); ?>
			<div class="col-md-2 text-center">
				<?php 
				$photo = get_sub_field('lider_photo');
				$size = 'img-square'; ?>
				<?php echo wp_get_attachment_image( $photo, $size ); ?>
				<p><?php the_sub_field('lider_name'); ?></p>
			</div>
			<?php endwhile; ?>
		</div>
	
	</div>
<?php $research++; ?>
<?php endwhile; ?>
</div>
<!-- end of reasearch -->
<!--partners section-->
<?php get_template_part( 'template-parts/content-partners' ); ?>
<!--end of partners section-->
<!--contact section-->
<?php get_template_part( 'template-parts/content-contact-section' ); ?>
<!--end of contact section-->
<?php get_footer(); ?>
</div>


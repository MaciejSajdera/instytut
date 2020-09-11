<?php
/**
 * Template Name: laboratoria prob technologicznych
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

<!-- lab tech -->
<div class="section-container lab-section bg-abstract bg-black">
	<?php if (have_rows('lab_tech')); ?>
	<?php $lab_tech=1; ?>
	<?php while (have_rows('lab_tech')) : the_row(); ?>
	<div class="container-fluid lab-container bg-abstract">
		<div class="row justify-content-center">
		  <!-- <div class="my-wrapper"> -->
			<div class="col-md-6 lab-type-container">
				<h2 class="work-type"><?php the_sub_field('lab_type'); ?></h2>
			</div>
			<div class="col-md-6 lab-network-container">
				<p class="lab-network"><?php the_sub_field('lab_network'); ?></p>
			</div>
		  <!-- </div> -->

		  <div class="my-wrapper">
			<div class="lab-text-container">
				<div class="text-justify"><?php the_sub_field('lab_text'); ?></div>
			</div>
			<div class="col-md-6">
				<div class="row lab-images-row">
					<div class="col-12 col-md-12 col-lg-6 text-center bg-vlg photo-1">
						<?php 
						$photo = get_sub_field('lab_photo_1');
						$size = 'img-almost-square'; ?>
						<div><?php echo wp_get_attachment_image( $photo, $size ); ?></div>
					</div>
					<div class="col-md-12 col-lg-6 not-on-mobile text-center bg-vlg photo-2">
						<?php 
						$photo_2 = get_sub_field('lab_photo_2');
						$size = 'img-almost-square'; ?>
						<div><?php echo wp_get_attachment_image( $photo_2, $size ); ?></div>
					</div>
				</div>
			</div>
			</div>

			<div class="col-12 mt-5">
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
				<a class="liders-collapse" data-toggle="collapse" href="#liders<?php echo $lab_tech; ?>" role="button" aria-expanded="false" aria-controls="liders<?php echo $lab_tech; ?>">
					<span class="text-collapsed">Pokaż wszytskich liderów</span>
					<span class="text-expanded">Ukryj wszystkich liderów</span>
				</a>
			</div>
			<div class="collapse" id="liders<?php echo $lab_tech; ?>">

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
		<div class="row">
			<div class="col-12">
				<a href="http://instytutimpib.dev.cube360.pl/kontakt-2/" class="<?php
					if ($lab_tech % 2 == 0):
					echo "black-button";
					else:
					echo "green-button";
					endif;
					?> my-button not-on-mobile">Skontaktuj się z nami</a>
			</div>
		</div>
	</div>
	<?php $lab_tech++; ?>
	<?php endwhile; ?>

</div>
<!-- end of lab tech -->
<!--partners section-->
<?php get_template_part( 'template-parts/content-partners' ); ?>
<!--end of partners section-->
<!--contact section-->
<?php get_template_part( 'template-parts/content-contact-section' ); ?>
<!--end of contact section-->
<?php get_footer(); ?>
</div>


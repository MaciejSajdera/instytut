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
$research_type = the_sub_field('research_area_type'); 
?>

<div class="r-areas-container">
	<div class="container r-areas-container">
		<div class="my-button black-button-radius-gtext research-option">
			<?php echo the_field('button_research_area_1', 450) ?>
		</div>
		<div class="my-button my-outline-button-black research-option">
		<?php echo the_field('button_research_area_2', 450) ?>
		</div>
	</div>
</div>

<!-- reaserch-->
<div class="section-container research-section">
	
	<?php if (have_rows('research_areas')); ?>
	<?php $research=1; ?>
	<?php while (have_rows('research_areas')) : the_row();
	?>

	<div class="container-fluid research-container <?php echo the_sub_field('research_area_type');  ?>">
		<span class="researchAreaType tets"><?php echo the_sub_field('research_area_type');  ?></span>
		<div class="row my-container justify-content-center">
			<div class="col-md-6 work-type-container">
				<h2 class="work-type"><?php the_sub_field('work_type'); ?></h2>
			</div>
			<div class="col-md-6 research-right-container">
				<p class="research-network"><?php the_sub_field('research_network'); ?></p>
				<a class="<?php
					if ($research % 2 == 0):
					echo "my-read-more-button-green";
					else:
					echo "my-read-more-button-black";
					endif;
					?> reserch-collapse" data-toggle="collapse" href="#research<?php echo $research; ?>" role="button" aria-expanded="false" aria-controls="research<?php echo $research; ?>">
					<span class="text-collapsed"><?php echo the_field('read_more', 1246) ?></span>
					<span class="text-expanded"><?php echo the_field('read_less', 1246) ?></span>
				</a>
			</div>
			<div class="col-12 work-text">
				<div class="collapse" id="research<?php echo $research; ?>">
					<div class="text-justify"><?php the_sub_field('work_text'); ?></div>
				</div>
			</div>
			<div class="col-12">
				<a href="http://instytutimpib.dev.cube360.pl/dzialalnosc-naukowa/laboratoria-prob-technologicznych/" class="<?php
					if ($research % 2 == 0):
					echo "green-button";
					else:
					echo "black-button";
					endif;
					?> my-button"><?php echo the_field('check_our_laboratories', 450) ?></a>
			</div>
			<div class="col-12">
				<h2 class="text-center mb-4"><?php the_field('leaders_research', 641); ?></h2>
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
					<span class="text-collapsed"><?php the_field('show_all_leaders', 641); ?></span>
					<span class="text-expanded"><?php the_field('hide_all_leaders', 641); ?></span>
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


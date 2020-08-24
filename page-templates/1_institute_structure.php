<?php
/**
 * Template Name: struktura instytutu
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

<!-- department-->
<div class="section-container departments">
	<div class="container-fluid my-container">
		<div class="row">
			<div class="col-md-12 col-xl-3">
				<h2 class="py-5"><?php the_field('header_our_departments', 186); ?></h2>
			</div>
			<?php if (have_rows('departments', 186)) ;?>
			<?php while (have_rows('departments', 186)) : the_row();
			$photo = get_sub_field('photo_department');
			$size = 'img-square';
			?>
			<div class="col-md-4 col-xl-3">
				<div class="card">
				<?php echo wp_get_attachment_image( $photo, $size ); ?>
					<div class="card-body">
						<p class="card-text"><?php the_sub_field('name_department'); ?></p>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<!-- department-->

<!-- science council -->
<div class="section-container bg-abstract">
	<div class="container science-council">
		<div class="row">
			<div class="col-12 col-lg-4 science-council-title">
				<h2><?php the_field('header_science_council', 186); ?></h2>
				<p>Kadencja Rady Naukowej: od 17 sierpnia 2017 r. do 16 sierpnia 2021 r.</p>
			</div>
			<?php if (have_rows('science_council', 186)) ;?>
		
			<div class="col-md-6 col-lg-4">
			<?php while (have_rows('science_council', 186)) : the_row(); ?>
				<div class="member-conatiner">
					<?php the_sub_field('science_council_member_left'); ?>
				</div>
				<?php endwhile; ?>
			</div>
			
			
			<div class="col-md-6 col-lg-4">
			<?php while (have_rows('science_council', 186)) : the_row(); ?>
				<div class="member-conatiner">
					<?php the_sub_field('science_council_member_right'); ?>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
	<!-- end ofscience council -->

	<!-- presidium -->
	<div class="container presidium">
		<div class="row">
			<div class="col-12 col-lg-4 presidium-title">
				<h2><?php the_field('header_presidium', 186); ?></h2>
			</div>
			<?php if (have_rows('presidium', 186)) ;?>
		
			<div class="col-md-6 col-lg-4">
			<?php while (have_rows('presidium', 186)) : the_row(); ?>
				<div class="member-conatiner">
					<?php the_sub_field('presidium_member_left'); ?>
				</div>
				<?php endwhile; ?>
			</div>
			
			
			<div class="col-md-6 col-lg-4">
			<?php while (have_rows('presidium', 186)) : the_row(); ?>
				<div class="member-conatiner">
					<?php the_sub_field('presidium_member_right'); ?>
				</div>
				<?php endwhile; ?>
			</div>
		
		</div>
	</div>
	<!-- end of presidium -->

	<!-- managers -->
	<div class="container presidium">
		<div class="row">
			<div class="col-12 col-lg-4 presidium-title">
				<h2><?php the_field('header_managers', 186); ?></h2>
			</div>
			<?php if (have_rows('managers', 186)) ;?>
		
			<div class="col-md-6 col-lg-4">
			<?php while (have_rows('managers', 186)) : the_row(); ?>
				<div class="member-conatiner">
					<?php the_sub_field('managers_member_left'); ?>
				</div>
				<?php endwhile; ?>
			</div>
			
			
			<div class="col-md-6 col-lg-4">
			<?php while (have_rows('managers', 186)) : the_row(); ?>
				<div class="member-conatiner">
					<?php the_sub_field('managers_member_right'); ?>
				</div>
				<?php endwhile; ?>
			</div>
		
		</div>
	</div>
	<!-- end of managers -->
</div>




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
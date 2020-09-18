<?php
/**
 * Template Name: kariera
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

<!-- career -->
<div class="section-container career">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="pb-5"><?php the_field('header_job_offers'); ?></h2>
			</div>
			<?php if (have_rows('job_offers')); ?>
			<?php $count=1; ?>
			<?php while (have_rows('job_offers')) : the_row(); ?>
				<div class="col-md-6">
					<a class="job-collapse" data-toggle="collapse" href="#number<?php echo $count; ?>" role="button" aria-expanded="false" aria-controls="number<?php echo $count; ?>">
						<p class="job-city text-left"><?php the_sub_field('city'); ?></p>
						<h4 class="position text-left"><?php the_sub_field('position'); ?></h4>
						<div class="background-icon"></div>
					</a>
					<div class="collapse" id="number<?php echo $count; ?>">
					  <div class="wrapper">
						<p class="job-text-title"><?php echo the_field('job_title', 413) ?></p>
						<div class="position-text text-justify"><?php the_sub_field('position_text'); ?></div>
						<p class="job-text-title"><?php echo the_field('job_requirements', 413) ?></p>
						<div class="requirements text-justify"><?php the_sub_field('requirements'); ?></div>
						<a href="mailto:sekretariat@impib.pl" class="my-button green-button"><?php echo the_field('send_application', 413) ?></a>
					  </div>
					</div>
				</div>
			<?php $count++; ?>
			<?php endwhile; ?>
		</div>
	</div>
	<div class="container-fluid practices">
		<div class="row my-container">
			<div class="col-12">
				<h2 class="pb-5"><?php the_field('header_trening'); ?></h2>
			</div>
			<div class="col-12">
				<p class="pb-5"><?php the_field('text_trening'); ?></p>
			</div>
			<?php if (have_rows('trening')); ?>
			<?php $count=1; ?>
			<?php while (have_rows('trening')) : the_row(); ?>
				<div class="col-md-6">
					<a class="job-collapse" data-toggle="collapse" href="#training<?php echo $count; ?>" role="button" aria-expanded="false" aria-controls="training<?php echo $count; ?>">
						<p class="job-city text-left"><?php the_sub_field('city'); ?></p>
						<h4 class="position text-left"><?php the_sub_field('position'); ?></h4>
						<div class="background-icon"></div>
					</a>
					<div class="collapse" id="training<?php echo $count; ?>">
					  <div class="wrapper">
						<p class="job-text-title"><?php echo the_field('job_title', 413) ?></p>
						<div class="position-text text-justify"><?php the_sub_field('position_text'); ?></div>
						<p class="job-text-title"><?php echo the_field('job_requirements', 413) ?></p>
						<div class="requirements text-justify"><?php the_sub_field('requirements'); ?></div>
						<a href="mailto:sekretariat@impib.pl" class="my-button black-button"><?php echo the_field('send_application', 413) ?></a>
					  </div>
					</div>
				</div>
			<?php $count++; ?>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<!-- end of career -->
<!--partners section-->
<?php get_template_part( 'template-parts/content-partners' ); ?>
<!--end of partners section-->
<!--contact section-->
<?php get_template_part( 'template-parts/content-contact-section' ); ?>
<!--end of contact section-->
<?php get_footer(); ?>
</div>


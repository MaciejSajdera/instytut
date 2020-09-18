<?php
/**
 * Template Name: szkolenia i warsztaty
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

<!-- workshops -->
<div class="section-container workshops">
	<div class="container-fluid px-0">
		<?php if( have_rows('workshops') ); ?>
		<?php $count=0 ;?>
		<?php while( have_rows('workshops') ) : the_row(); ?>
		<div class="workshop-section <?php
					if ($count % 2 == 0):
					echo "bg-green";
					else:
					echo "bg-black";
					endif;
					?>>">
			<div class="row my-container">
				<div class="col-md-6">
					<h2 class="title-workshop"><?php the_sub_field('title_workshop'); ?></h2>
				</div>
				<div class="col-md-6">
					<p class="font-weight-bold mb-0"><?php echo the_field('course_dates', 609) ?></p>
					<div class="date-workshop"><?php the_sub_field('date_workshop'); ?></div>
				</div>
				<div class="col-md-6 mt-3">
					<a class="my-read-more-button" data-toggle="collapse" href="#number<?php echo $count; ?>" role="button" aria-expanded="false" aria-controls="number<?php echo $count; ?>">
					<span class="text-collapsed"><?php echo the_field('read_more', 1246) ?></span>
					<span class="text-expanded"><?php echo the_field('read_less', 1246) ?></span>
					</a>
				</div>
				<div class="col-md-6 only-on-md-and-up mt-3">
					<a href="mailto:sekretariat@impib.pl" class="my-button"><?php echo the_field('join', 609) ?></a>
				</div>
				<div class="col-12">
					<div class="collapse" id="number<?php echo $count; ?>">
						<div class="text-workshop text-justify"><?php the_sub_field('text_workshop'); ?></div>
					</div>
				</div>
				<div class="col-12 only-on-mobile px-0 mt-3 text-center">
					<a href="mailto:sekretariat@impib.pl" class="my-button"><?php echo the_field('join', 609) ?></a>
				</div>
			</div>
		</div>
		<?php $count++; ?>
		<?php endwhile; ?>
	</div>
</div>
<!-- end of workshops -->
<!--partners section-->
<?php get_template_part( 'template-parts/content-partners' ); ?>
<!--end of partners section-->
<!--contact section-->
<?php get_template_part( 'template-parts/content-contact-section' ); ?>
<!--end of contact section-->
<?php get_footer(); ?>
</div>


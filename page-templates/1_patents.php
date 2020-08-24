<?php
/**
 * Template Name: udzielone patenty
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

<!-- patents -->
<div class="section-container patents bg-abstract">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h2><?php the_field('header_patents', 268); ?></h2>
			</div>
			<div class="col-md-9 patents-container">
				<?php if( have_rows('patents', 268) ); ?>
				<?php $count=0; ?>
				<?php while( have_rows('patents', 268) ) : the_row(); ?>
				
					<div class="patent-container">
						<p class="year"><?php the_sub_field('year'); ?><span> Urząd Patentowy RP udzielił na rzecz Instytutu patenty na wynalazki:</span></p>
						<a class="patents-collapse not-on-md" data-toggle="collapse" href="#number<?php echo $count; ?>" role="button" aria-expanded="false" aria-controls="number<?php echo $count; ?>">Wynalazki <i class="fas fa-chevron-down"></i></a>
						<div class="collapse not-collapse-md" id="number<?php echo $count; ?>">
							<?php the_sub_field('inventions', 268); ?>
						</div>
					</div>
				<?php $count++; ?>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</div>
<!-- end of patents -->
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


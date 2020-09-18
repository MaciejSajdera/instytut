<?php
/**
 * Template Name: certyfikaty
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
<!-- certifications -->
<div class="section-container certifications <?php if (get_queried_object_id() == $aboutBizCertID): echo 'bg-abstract'; endif; ?>">
	<div class="container">
		<?php if( have_rows('certifications', 223) ); ?>
		<?php $count=0 ;?>
		<?php while( have_rows('certifications', 223) ) : the_row(); ?>
		
			<div class="row">
				<div class="col-md-6">
					<h3 class="title-certification"><?php the_sub_field('title_certification'); ?></h3>
				</div>
				<div class="col-md-6">
					<p class="subtitle-certification"><?php the_sub_field('subtitle_certification'); ?></p>
					<a class="my-read-more-button-green" data-toggle="collapse" href="#number<?php echo $count; ?>" role="button" aria-expanded="false" aria-controls="number<?php echo $count; ?>">
					<span class="text-collapsed"><?php echo the_field('read_more', 1246) ?></span>
					<span class="text-expanded"><?php echo the_field('read_less', 1246) ?></span>
				</a>
				</div>
				<div class="col">
					<div class="collapse" id="number<?php echo $count; ?>">
						<p class="text-certification"><?php the_sub_field('text_certification'); ?></p>
					</div>
				</div>
			</div>
		<div class="row pdf-row justify-content-center text-center bg-vlg my-5 pdf-row">
			<?php if( have_rows('certification_pdf', 223) ); ?>
			<?php while( have_rows('certification_pdf', 223) ) : the_row(); ?>
			<div class="col-12 col-lg-4 pdf-col pdf-title">
					<p><?php the_sub_field('pdf_name'); ?></p>
					<a href="<?php the_sub_field('pdf'); ?>" download title="Pobierz pdf">
						<i class="far fa-file-pdf"></i>
					</a>
			</div>
			<?php endwhile; ?>
		</div>
		<?php $count++; ?>
		<?php endwhile; ?>
	</div>
</div>
<!-- end of certifications -->

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


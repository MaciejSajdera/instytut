<?php
/**
 * Template Name: o instytucie
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


get_header('');
$container = get_theme_mod( 'understrap_container_type' );
?>
<!-- about institute 1-->
<div class="section-container about-institute-1">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<h2><?php the_field('header_institute_section', 141); ?></h2>
				<div class="text-justify"><?php the_field('text_about_institute_1', 141); ?></div>
				<a href="#" class="green-button">Jak rozpocząć współpracę</a>
			</div>
			<div class="col-md-7">
				<img src="<?php the_field('photo_about_institute_1', 141); ?>">
			</div>
		</div>
	</div>
</div>
<!-- end of about institute 1-->

<!--institute history-->
<div class="section-container institute-history pt-4">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<h2 class="text-center pb-5 "><?php the_field('header_institute_history_section', 141); ?></h2>
			</div>
			<div class="col-md-12 history-container">
				<div class="history-container-inner">
					<div class="swiper-container history-carousel" id="history-carousel">
						<div class="swiper-wrapper">
						<?php if(have_rows('institute_history', 141)); ?>
						<?php while (have_rows('institute_history', 141)) : the_row(); ?>
						<?php if (get_sub_field('last_position')): ?>
						<?php $lastslide=' last-slide'; ?>
						<?php endif; ?>
							<div class="swiper-slide<?php echo $lastslide; ?>">
							
								<div class="history-container-single">
									<p class="history-year"><?php the_sub_field('year'); ?></p>
									<div class="history-line-container">
										<span class="history-circle"></span>
										<span class="history-line"></span>
									</div>
									<p class="history-event"><?php the_sub_field('event'); ?></p>
								</div>
							</div>
						
						<?php endwhile; ?>
						</div>
						<div class="carousel-arrows">
							<div class="carousel-arrows-inner">
								<div class="my-swiper-button-prev"><i class="fas fa-arrow-left"></i></div>
								<div class="my-swiper-button-next"><i class="fas fa-arrow-right"></i></div>
							</div>
						</div>
					</div>
				</div>			
			</div>
		</div>
	</div>
</div>
<!-- end of institute history-->

<!--statut-->
<div class="section-container statut">
	<div class="statut-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h2><?php the_field('header_statute_section', 141); ?></h2>
					<p><?php the_field('text_statute_section', 141); ?></p>
				</div>
				<div class="col-md-3 text-center">
					<div class="pdf-bg">
					<a href="http://instytutimpib.dev.cube360.pl/wp-content/uploads/2019/06/some_pdf.pdf" download title="Pobierz statut">
						<i class="far fa-file-pdf"></i>
					</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end of statut-->

<!-- about institute 2-->
<div class="section-container about-institute-2 bg-abstract">
	<div class="container">
		<div class="row">
		<div class="col-md-9 col-lg-8 text-about-institute-2 order-md-2">
			<div class="text-justify"><?php the_field('text_about_institute_2', 141); ?></div>
			</div>
			<div class="col-md-3 col-lg-4 text-center order-md-1">
				<img src="<?php the_field('photo_about_institute_2', 141); ?>">
			</div>
			
		
		</div>
		<div class="row text-about-institute-3">
			<div class="col-12">
				<div class="text-justify"><?php the_field('text_about_institute_3', 141); ?></div>
			</div>
		</div>
	</div>
</div>
<!--  end of about institute 2-->


<!--management-->
<div class="section-container management-about-institute bg-vlg pt-5 pb-4">
	<div class="container-fluid">
		<h2 class="text-center mb-5"><?php the_field('header_management', 141); ?></h2>
		<div class="swiper-container management-carousel" id="management-carousel">
			<div class="swiper-wrapper">
			<?php if(have_rows('management_about_institute', 141)); ?>
			<?php while (have_rows('management_about_institute', 141)) : the_row(); 
			$photo = get_sub_field('photo_management');
			$size = 'img-square';
			?>
				<div class="swiper-slide">
					<div class="card">
						<?php echo wp_get_attachment_image( $photo, $size ); ?>
						<div class="card-body text-center">
							<p class="card-title">
								<?php the_sub_field('name_management'); ?>
							</p>
							<p class="card-text">
								<?php the_sub_field('position_management'); ?>
							</p>
						</div>
						<div class="contact-info text-center">
							<?php the_sub_field('contact_management'); ?>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
			</div>
			<div class="swiper-pagination"></div>
		</div>
	</div>
</div>
<!-- end of management-->


<!--partners 2 -->
<div class="section-container partners-about-institute bg-abstract">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class="my-half-container">
					<h2 class="text-center"><?php the_field('header_partners', 141); ?></h2>
					<div class="text-justify"><?php the_field('text_partners', 141); ?></div>
					<a href="#" class="my-outline-button-navy">Jak rozpocząć współpracę</a>
				</div>
			</div>
			<div class="col-md-6 map-container">
				<img src="<?php the_field('photo_partners', 141); ?>">
			</div>
		</div>
	</div>
</div>
<!-- end of partners 2 -->

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


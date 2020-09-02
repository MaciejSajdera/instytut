<?php
/**
 * Template Name: strona glowna dla nauki
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

<!--blog posts-->
<?php get_template_part( 'template-parts/news_preview' ); ?>
<!--end of blog posts-->

<!--our mission section-->
<?php get_template_part( 'template-parts/content-our-mission' ); ?>
<!--end of our mission section-->

<!-- scientific activity -->
<div class="section-container scientific-activity">
	<!-- <div class="container-fluid"> -->
		<div class="container">
		<div class="row my-container">
			<div class="black-background-box"></div>
			<div class="col-md-5 science-text">
				<h2><?php the_field('header_science_section'); ?> </h2>
				<div class="text-justify"><?php the_field('science_text_mainpage', 87); ?></div>
				<a href="http://instytutimpib.dev.cube360.pl/oferta/" class="black-button">Sprawdź ofertę dla Twojej firmy</a>
			</div>
			<div class="science-container">
				<div class="row">
					<div class="col-sm">
						<a href="http://instytutimpib.dev.cube360.pl/dzialalnosc-naukowa/obszary-badawcze/">
							<div class="single-science-container single-science-container-research position-relative">
								<div class="gradient-bg-section-inner"></div>
								<p class="science-title text-left"><?php the_field('science_1_name'); ?></p>
								<div class="read-more-text">Czytaj więcej <i class="fas fa-long-arrow-alt-right"></i></div>
							</div>
						</a>
					</div>
					<div class="col-sm">
						<a href="http://instytutimpib.dev.cube360.pl/dzialalnosc-naukowa/laboratoria-akredytowane/">
							<div class="single-science-container single-science-container-lab position-relative">
								<div class="gradient-bg-section-inner"></div>
								<p class="science-title text-left"><?php the_field('science_2_name'); ?></p>
								<div class="read-more-text">Czytaj więcej <i class="fas fa-long-arrow-alt-right"></i></div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- </div> -->
</div>	
<!--end of scientific activity-->

<!--slogan 2 section-->
<?php get_template_part( 'template-parts/content-slogan-2' ); ?>
<!--end of slogan 2 section-->

<!--publishing activity-->
<div class="publishing-activity">
	<div class="container">
		<h2 class="text-center mb-5"><?php the_field('header_publishing_section'); ?> </h2>
		
		<div class="swiper-container publishing-activity-carousel" id="publishing-activity-carousel">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<a href="http://instytutimpib.dev.cube360.pl/dzialalnosc-wydawnicza/#elastomery">
					<div class="card">
						<img class="text-center publishing-activity-img" src="http://instytutimpib.dev.cube360.pl/wp-content/uploads/2019/06/dzialanosc-wydawnicza-5.jpg">
						<div class="card-body text-center">
							<p class="card-title">
								<?php the_field('department_1_name'); ?>
							</p>
						</div>
						<div class="read-more text-center">
							<div class="thin-white-line"></div>
							<p>Czytaj więcej</p>
						</div>
					</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="http://instytutimpib.dev.cube360.pl/dzialalnosc-wydawnicza/#farby-i-lakiery">
					<div class="card">
						<img class="text-center publishing-activity-img" src="http://instytutimpib.dev.cube360.pl/wp-content/uploads/2019/06/dzialanosc-wydawnicza-6.jpg">
						<div class="card-body text-center">
							<p class="card-title">
								<?php the_field('department_2_name'); ?>
							</p>
						</div>
						<div class="read-more text-center">
							<div class="thin-white-line"></div>
							<p>Czytaj więcej</p>
						</div>
					</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="http://instytutimpib.dev.cube360.pl/dzialalnosc-wydawnicza/#przetworstwo-tworzyw">
					<div class="card">
						<img class="text-center publishing-activity-img" src="http://instytutimpib.dev.cube360.pl/wp-content/uploads/2019/06/dzialanosc-wydawnicza-4.jpg">
						<div class="card-body text-center">
							<p class="card-title">
								<?php the_field('department_3_name'); ?>
							</p>
						</div>
						<div class="read-more text-center">
							<div class="thin-white-line"></div>
							<p>Czytaj więcej</p>
						</div>
					</div>
					</a>
				</div>
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
<!-- project publishing activity-->


<!-- awards-->
<div class="section-container awards pt-5 pb-4">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-5 awards-text my-half-container">
				<div class="text-awards">
					<h2 class="text-center text-md-left"><?php the_field('header_awards_section'); ?> </h2>
					<div class="text-justify"><p class="not-on-mobile"><?php the_field('awards_text_mainpage', 87); ?></p></div>
					<a href="http://instytutimpib.dev.cube360.pl/o-nas-2/nagrody-i-wyroznienia/" class="my-button not-on-mobile">Zobacz wszystko</a>
				</div>
			</div>
			<div class="col-md-7 awards-container">
				<div class="awards-container-inner">
					<div class="swiper-container awards-carousel" id="awards-carousel">
						<div class="swiper-wrapper">
						<?php if(have_rows('awards', 87)); ?>
						<?php while (have_rows('awards', 87)) : the_row(); ?>
							<div class="swiper-slide">
								<div class="award-container text-center">
									<div class="award-image">
										<p class="award-year"><?php the_sub_field('award_year'); ?></p>
									</div>
									<p class="award-place"><?php the_sub_field('place_award'); ?></p>
									<p class="competition-name"><?php the_sub_field('competition_name'); ?></p>
									<p class="competition-place"><?php the_sub_field('competition_place'); ?></p>
								</div>
							</div>
						<?php endwhile; ?>
						</div>
						<div class="carousel-arrows">
							<div class="carousel-arrows-inner">
								<div class="my-swiper-button-prev"><i class="fas fa-arrow-left"></i></div>
								<div class="my-swiper-button-next"><i class="fas fa-long-arrow-alt-right"></i></div>
							</div>
						</div>
					</div>
				</div>			
			</div>
		</div>
	</div>
</div>	
<!--end awards-->

<!--partners section-->
<?php get_template_part( 'template-parts/content-partners' ); ?>
<!--end of partners section-->
<!--contact section-->
<?php get_template_part( 'template-parts/content-contact-section' ); ?>
<!--end of contact section-->
<?php get_footer(); ?>
</div>


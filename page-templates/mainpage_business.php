<?php
/**
 * Template Name: strona glowna dla biznesu
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
<div class="section-container my-blog-posts bg-abstract">
	<div class="container my-posts-container">
		<div class="row">
			<div class="col-12 mb-4">
				<h2><?php the_field('header_news_section'); ?> </h2>
			</div>
		</div>

		<!--news on mobile-->
		<div class="only-on-mobile">
			<div class="swiper-container news-carousel" id="news-carousel">
				<div class="swiper-wrapper">
					<?php
					global $post;
					$args = array( 'posts_per_page' => 3, 'order'=> 'DESC', 'orderby' => 'date' );
					$postslist = get_posts( $args );
					foreach ( $postslist as $post ) :
					setup_postdata( $post ); ?> 
						<div class="swiper-slide my-post-container">
							<a href="<?php echo get_permalink(); ?>">
								<div class="my-post-container-outer">
									<div class="my-post-photo"><?php echo get_the_post_thumbnail( $page->ID, 'img-horizontal-medium' ); ?></div>
									<div class="my-post-container-inner">
										<div class="my-post-author"><?php the_author(); ?></div>
										<div class="my-post-data">
											<div class="my-post-title"><?php the_title(); ?></div>
											<div class="my-post-text">
												<?php the_excerpt(); ?>
											</div>
											<div class="my-post-date"><?php echo get_the_date(); ?></div>
											<div class="my-clearfix"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
					<?php
					endforeach; 
					wp_reset_postdata();
					?>
				</div>
				<div class="carousel-arrows">
					<div class="carousel-arrows-inner">
						<div class="my-swiper-button-prev"><i class="fas fa-arrow-left"></i></div>
						<div class="my-swiper-button-next"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>
			<div class="col-12 mt-5 mb-2 text-center">
				<a href="http://instytutimpib.dev.cube360.pl/wszystkie-aktualnosci/" class="my-button green-button">Pokaż wszystkie aktualności</a>
			</div>
		</div>
		<!--end of news on mobile-->
		<!--news on desktop-->
		<div class="only-on-md-and-up">
			<div class="row">
			<?php
			global $post;
			$args = array( 'posts_per_page' => 3, 'order'=> 'DESC', 'orderby' => 'date' );
			$postslist = get_posts( $args );
			foreach ( $postslist as $post ) :
			setup_postdata( $post ); ?> 
				<div class="col-12 col-md-6 col-xl-3 my-post-container">
					<a href="<?php echo get_permalink(); ?>">
						<div class="my-post-container-outer">
							<div class="my-post-photo"><?php echo get_the_post_thumbnail( $page->ID, 'img-horizontal-large' ); ?></div>
							<div class="my-post-container-inner">
								<!-- <div class="my-post-author"><?php the_author(); ?></div> -->
								<div class="my-post-data">
									<div class="my-post-title"><?php the_title(); ?></div>
									<div class="my-post-text">
										<?php the_excerpt(); ?>
									</div>
									<div class="my-post-date"><?php echo get_the_date(); ?></div>
									<div class="my-clearfix"></div>
								</div>
							</div>
						</div>
					</a>
				</div>
			<?php
			endforeach; 
			wp_reset_postdata();
			?>
			</div>
			<div class="col-12 mt-5 mb-2 text-center">
				<a href="http://instytutimpib.dev.cube360.pl/wszystkie-aktualnosci/" class="my-button green-button">Pokaż wszystkie aktualności</a>
			</div>
		</div>
		<!--end of news on desktop-->
	</div>
</div>
<!--end of blog posts-->

<!--slogan 1 section-->
<?php get_template_part( 'template-parts/content-slogan-1' ); ?>
<!--end of slogan 1 section-->

<!-- offer -->
<div class="section-container offer">
	<div class="container-fluid">
		<div class="row my-container">
			<div class="col-md-5 offer-text">
				<h2><?php the_field('header_offer_section'); ?> </h2>
				<div class="text-justify"><?php the_field('offer_text_mainpage', 85); ?></div>
			</div>
			<div class="col-md-7 branches-container">
				<div class="row justify-content-center">
					<div class="col-sm-6">
						<a href="http://instytutimpib.dev.cube360.pl/oferta/branza-przetworstwa-tworzyw-sztucznych/">
							<div class="single-branch-container">
								<p class="branch-title text-left"><?php the_field('branch_1_name'); ?></p>
								<div class="read-more-text">Czytaj więcej <i class="fas fa-arrow-right"></i></div>
								<div class="background-icon background-icon-1"></div>
							</div>
						</a>
					</div>
					
					<div class="col-sm-6">
						<a href="http://instytutimpib.dev.cube360.pl/oferta/branza-przetworstwa-gumy-i-elastomerow/">
							<div class="single-branch-container">
								<p class="branch-title text-left"><?php the_field('branch_2_name'); ?></p>
								<div class="read-more-text">Czytaj więcej <i class="fas fa-arrow-right"></i></div>
								<div class="background-icon background-icon-2"></div>
							</div>
						</a>
					</div>

					<div class="col-sm-6">
						<a href="http://instytutimpib.dev.cube360.pl/oferta/branza-mechaniczna-dla-przemyslu-przetworstwa-tworzyw-sztucznych-i-gumy/">
							<div class="single-branch-container">
								<p class="branch-title text-left"><?php the_field('branch_3_name'); ?></p>
								<div class="read-more-text">Czytaj więcej <i class="fas fa-arrow-right"></i></div>
								<div class="background-icon background-icon-3"></div>
							</div>
						</a>
					</div>

					<div class="col-sm-6">
						<a href="http://instytutimpib.dev.cube360.pl/oferta/branza-farb-i-lakierow-dla-przemyslu-budowlanego-i-chemicznego/">
							<div class="single-branch-container">
								<p class="branch-title text-left"><?php the_field('branch_4_name'); ?></p>
								<div class="read-more-text">Czytaj więcej <i class="fas fa-arrow-right"></i></div>
								<div class="background-icon background-icon-4"></div>
							</div>
						</a>
					</div>

					<div class="col-sm-6">
						<a href="http://instytutimpib.dev.cube360.pl/kontakt/">
							<div class="single-branch-container single-branch-contact">
								<div class="single-branch-contact-overlay">
									<div class="my-button green-button">Wybieram</div>
								</div>
							</div>
						</a>
					</div>

					<div class="col-sm-6">
						<a href="http://instytutimpib.dev.cube360.pl/oferta/ekologia-i-gospodarka-obiegu-zamknietego/">
							<div class="single-branch-container">
								<p class="branch-title text-left"><?php the_field('branch_5_name'); ?></p>
								<div class="read-more-text">Czytaj więcej <i class="fas fa-arrow-right"></i></div>
								<div class="background-icon background-icon-5"></div>
							</div>
						</a>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>	
<!--end of offer-->

<!--slogan 2 section-->
<?php get_template_part( 'template-parts/content-slogan-2' ); ?>
<!--end of slogan 2 section-->

<!--project-managers-->
<div class="section-container project-managers pt-5 pb-4">
	<div class="container-fluid">
		<h2 class="text-center mb-5"><?php the_field('header_management_section'); ?> </h2>
		
		<div class="swiper-container project-managers-carousel" id="project-managers-carousel">
			<div class="swiper-wrapper">
			<?php if(have_rows('management_mainpage', 85)); ?>
			<?php while (have_rows('management_mainpage', 85)) : the_row(); 
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
<!-- project-managers-->

<!--partners section-->
<?php get_template_part( 'template-parts/content-partners' ); ?>
<!--end of partners section-->
<!--contact section-->
<?php get_template_part( 'template-parts/content-contact-section' ); ?>
<!--end of contact section-->
<?php get_footer(); ?>
</div>


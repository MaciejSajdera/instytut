<?php
/**
 * Template Name: aktualnosci
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
<div class="section-container my-blog-posts">
	<div class="container my-posts-container">
		<div class="blog-grid">
		<?php
		global $post;
		$args = array( 'posts_per_page' => 5, 'order'=> 'DESC', 'orderby' => 'date' );
		$postslist = get_posts( $args );
		foreach ( $postslist as $post ) :
		setup_postdata( $post ); ?> 
			<div class="my-post-container">
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
		<div class="text-center">
			<a href="http://instytutimpib.dev.cube360.pl/wszystkie-aktualnosci/" class="green-button">Pokaż wszystkie aktualności</a>
		</div>
		</div>
	</div>
</div>
<!--end of blog posts-->





<!--news section-->
<div class="section-container news">
	<!--statemnts-->
	<div class="container-fluid statements bg-vlg-60-right mt-5">
		<div class="row my-container ">
			<div class="col-12 col-md-4 order-md-3">
				<h2 class="text-center text-md-left py-4"><?php the_field('header_statements', 775); ?></h2>
				<a href="http://www.bip.impib.pl/aktualnosci/ogloszenia-1" target="_blank" class="green-button not-on-mobile">Pokaż wszystkie komunikaty</a>
			</div>
			<?php if (have_rows('statements', 775)); ?>
			<?php while (have_rows('statements', 775)) : the_row(); ?>
			<div class="col-12 col-md-4">
				<a href="<?php the_sub_field('statement_link'); ?>" target="_blank" >
					<div class="notice-container">
						<p class="notice-title"><?php the_sub_field('statement_title'); ?></p>
						<div>
						<div class="read-more-text">Czytaj więcej <i class="fas fa-long-arrow-alt-right"></i></div>
						<span class="notice-date"><?php the_sub_field('statement_date'); ?></span>
						</div>
						<div class="background-icon"></div>
					</div>
				</a>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
	<div class="only-on-mobile">
		<a href="http://www.bip.impib.pl/aktualnosci/ogloszenia-1" target="_blank" class="green-button">Pokaż wszystkie komunikaty</a>
	</div>
	<!-- end of statements-->

	<!--auctions-->
	<div class="container-fluid auctions bg-vlg-60-left mt-5">
		<div class="row my-container ">
			<div class="col-12 col-md-4">
				<h2 class="text-center text-md-left pt-4 pb-md-3"><?php the_field('header_auctions', 773); ?></h2>
				<ul class="nav nav-tabs" role="tablist">
					<li><a class="active" href="#auctions_without_statute" role="tab" data-toggle="tab">Zamówienia realizowane bez stosowania przepisów ustawy PZP <i class="fas fa-long-arrow-alt-right"></i></a></li>
					<li><a href="#auctions_with_statute" role="tab" data-toggle="tab">Zamówienia realizowane zgodnie z przepisami ustawy PZP <i class="fas fa-long-arrow-alt-right"></i></a></li>
				</ul>
				<a href="http://www.bip.impib.pl/aktualnosci/ogloszenia-1" target="_blank" class="green-button not-on-mobile">Pokaż wszystkie przetargi</a>
			</div>
			<div class="col-12 col-md-8">
				<div class="tab-content">
					<div class="tab-pane active" id="auctions_without_statute">
							<div class="row">
								<?php if (have_rows('auctions_without_statute', 773)); ?>
								<?php while (have_rows('auctions_without_statute', 773)) : the_row(); ?>
								<div class="col-12 col-md-6">
									<a href="<?php the_sub_field('auction_link'); ?>" target="_blank">
										<div class="notice-container">
											<p class="notice-title"><?php the_sub_field('auction_title'); ?></p>
											<div>
											<div class="read-more-text">Czytaj więcej <i class="fas fa-long-arrow-alt-right"></i></div>
											<span class="notice-date"><?php the_sub_field('auction_date'); ?></span>
											</div>
											<div class="background-icon"></div>
										</div>
									</a>
								</div>
								<?php endwhile; ?>
							</div>
					</div>
					<div class="tab-pane" id="auctions_with_statute">
							<div class="row">
								<?php if (have_rows('auctions_with_statute', 773)); ?>
								<?php while (have_rows('auctions_with_statute', 773)) : the_row(); ?>
								<div class="col-12 col-md-6">
									<a href="<?php the_sub_field('auction_link'); ?>" target="_blank">
										<div class="notice-container">
											<p class="notice-title"><?php the_sub_field('auction_title'); ?></p>
											<div>
											<div class="read-more-text">Czytaj więcej <i class="fas fa-long-arrow-alt-right"></i></div>
											<span class="notice-date"><?php the_sub_field('auction_date'); ?></span>
											</div>
											<div class="background-icon"></div>
										</div>
									</a>
								</div>
								<?php endwhile; ?>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="only-on-mobile">
		<a href="http://www.bip.impib.pl/aktualnosci/zamowienia-bez-stosowania-przepisow-ustawy-pzp" target="_blank" class="green-button">Pokaż wszystkie przetargi</a>
	</div>
	<!--end of auctions-->
</div>
<!--end of news section-->

<!--partners section-->
<?php get_template_part( 'template-parts/content-partners' ); ?>
<!--end of partners section-->
<!--contact section-->
<?php get_template_part( 'template-parts/content-contact-section' ); ?>
<!--end of contact section-->
<?php get_footer(); ?>
</div>


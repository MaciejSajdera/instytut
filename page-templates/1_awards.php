<?php
/**
 * Template Name: nagrody i wyróżnienia
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
<!-- awards -->
<div class="section-container awards only-on-mobile">
	<div class="container">
		<div class="row text-center">
			<div class="col">
				<ul class="nav nav-tabs" role="tablist">
					<li><a class="active" href="#torun" role="tab" data-toggle="tab"><?php the_field('city_1', 251); ?></a></li>
					<!-- <li>/</li> -->
					<li><a href="#gliwice" role="tab" data-toggle="tab"><?php the_field('city_2', 251); ?></a></li>
					<!-- <li>/</li> -->
					<li><a href="#piastow" role="tab" data-toggle="tab"><?php the_field('city_2', 251); ?></a></li>
				</ul>
			</div>
		</div>
	</div>

	<!--content on mobile-->
	<div class="tab-content">
		<div class="tab-pane active" id="torun">
		<?php if( have_rows('awards_torun', 251) ); ?>
			<div id="carousel-awards-torun" class="carousel slide" data-ride="carousel" data-interval="5000" data-pause="false">
				<div class="carousel-inner" role="listbox">
				<?php $count = 1;
				while( have_rows('awards_torun', 251) ): the_row();
					echo '<div class="carousel-item award-box';
						if ( $count == 1 ) {
							echo ' active'; // Add the active class to the first item
						}
						echo '">' ; ?>
						<div class="award-container text-center">
							<div class="award-image">
								<p class="award-year"><?php the_sub_field('award_year'); ?></p>
							</div>
							<p class="award-place"><?php the_sub_field('place_award'); ?></p>
							<p class="competition-name"><?php the_sub_field('competition_name'); ?></p>
							<p class="competition-place"><?php the_sub_field('competition_place'); ?></p>
						</div>
					</div><!-- end of carousel-item-->
				<?php  $count++; ?>
				<?php endwhile; ?>
				</div><!-- end of carousel-inner-->
				<a class="carousel-control-prev" href="#carousel-awards-torun" role="button" data-slide="prev">
				<i class="fas fa-arrow-left"></i>
				<span class="sr-only"><?php the_field('previous', 251); ?></span>
				</a>
				<a class="carousel-control-next text-faded" href="#carousel-awards-torun" role="button" data-slide="next">
				<i class="fas fa-arrow-right"></i>
				<span class="sr-only"><?php the_field('next', 251); ?></span>
			</a>
			</div><!-- end of carousel-->
		</div><!-- end of tab-pane torun-->

		<div class="tab-pane" id="gliwice">
		<?php if( have_rows('awards_gliwice', 251) ); ?>
			<div id="carousel-awards-gliwice" class="carousel slide" data-ride="carousel" data-interval="5000" data-pause="false">
				<div class="carousel-inner" role="listbox">
				<?php $count = 1;
				while( have_rows('awards_gliwice', 251) ): the_row();
					echo '<div class="carousel-item award-box';
						if ( $count == 1 ) {
							echo ' active'; // Add the active class to the first item
						}
						echo '">' ; ?>
						<div class="award-container text-center">
							<div class="award-image">
								<p class="award-year"><?php the_sub_field('award_year'); ?></p>
							</div>
							<p class="award-place"><?php the_sub_field('place_award'); ?></p>
							<p class="competition-name"><?php the_sub_field('competition_name'); ?></p>
							<p class="competition-place"><?php the_sub_field('competition_place'); ?></p>
						</div>
					</div><!-- end of carousel-item-->
				<?php  $count++; ?>
				<?php endwhile; ?>
				</div><!-- end of carousel-inner-->
				<a class="carousel-control-prev" href="#carousel-awards-gliwice" role="button" data-slide="prev">
				<i class="fas fa-arrow-left"></i>
				<span class="sr-only"><?php the_field('previous', 251); ?></span>
				</a>
				<a class="carousel-control-next text-faded" href="#carousel-awards-gliwice" role="button" data-slide="next">
				<i class="fas fa-long-arrow-alt-right"></i>
				<span class="sr-only"><?php the_field('next', 251); ?></span>
			</a>
			</div><!-- end of carousel-->
		</div><!-- end of tab-pane gliwice-->

		<div class="tab-pane" id="piastow">
		<?php if( have_rows('awards_piastow', 251) ); ?>
			<div id="carousel-awards-piastow" class="carousel slide" data-ride="carousel" data-interval="5000" data-pause="false">
				<div class="carousel-inner" role="listbox">
				<?php $count = 1;
				while( have_rows('awards_piastow', 251) ): the_row();
					echo '<div class="carousel-item award-box';
						if ( $count == 1 ) {
							echo ' active'; // Add the active class to the first item
						}
						echo '">' ; ?>
						<div class="award-container text-center">
							<div class="award-image">
								<p class="award-year"><?php the_sub_field('award_year'); ?></p>
							</div>
							<p class="award-place"><?php the_sub_field('place_award'); ?></p>
							<p class="competition-name"><?php the_sub_field('competition_name'); ?></p>
							<p class="competition-place"><?php the_sub_field('competition_place'); ?></p>
						</div>
					</div><!-- end of carousel-item-->
				<?php  $count++; ?>
				<?php endwhile; ?>
				</div><!-- end of carousel-inner-->
				<a class="carousel-control-prev" href="#carousel-awards-piastow" role="button" data-slide="prev">
				<i class="fas fa-arrow-left"></i>
				<span class="sr-only"><?php the_field('previous', 251); ?></span>
				</a>
				<a class="carousel-control-next text-faded" href="#carousel-awards-piastow" role="button" data-slide="next">
				<i class="fas fa-long-arrow-alt-right"></i>
				<span class="sr-only"><?php the_field('next', 251); ?></span>
			</a>
			</div><!-- end of carousel-->
		</div><!-- end of tab-pane piastow-->
	</div>
</div><!--end of content on mobile-->

<!--content on tablet and desktop-->
<div class="section-container awards only-on-md-and-up <?php if (get_queried_object_id() == $aboutBizAwardsID): echo 'bg-abstract'; endif; ?>">
	<!-- <div class="container">
		<div class="row text-center">
			<div class="col">
				<ul class="nav nav-tabs" role="tablist">
					<li><a class="active" href="#torun-desktop" role="tab" data-toggle="tab"><?php the_field('city_1', 251); ?></a></li>

					<li><a href="#gliwice-desktop" role="tab" data-toggle="tab"><?php the_field('city_2', 251); ?></a></li>

					<li><a href="#piastow-desktop" role="tab" data-toggle="tab"><?php the_field('city_3', 251); ?></a></li>
				</ul>
			</div>
		</div>
	</div> -->
	<div class="tab-content">
		<div class="tab-pane active" id="torun-desktop">
			<div class="container">
				<div class="row text-center award-row">
				<?php if (have_rows('awards_torun', 251)); ?>
				<?php while (have_rows('awards_torun', 251)) : the_row(); ?>
					<div class="col-md-4 award-box">
						<div class="award-container">
							<div class="award-image">
								<p class="award-year"><?php the_sub_field('award_year'); ?></p>
							</div>
							<p class="award-place"><?php the_sub_field('place_award'); ?></p>
							<p class="competition-name"><?php the_sub_field('competition_name'); ?></p>
							<!-- <div class="thin-red-line"></div> -->
							<p class="competition-place"><?php the_sub_field('competition_place'); ?></p>
						</div>
					</div>
				<?php endwhile; ?>
				</div>
			</div>
		</div><!-- end of tab-pane-->
		<div class="tab-pane active" id="gliwice-desktop">
			<div class="container">
				<div class="row text-center award-row">
				<?php if (have_rows('awards_gliwice', 251)); ?>
				<?php while (have_rows('awards_gliwice', 251)) : the_row(); ?>
					<div class="col-md-4 award-box">
						<div class="award-container">
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
			</div>
		</div><!-- end of tab-pane-->
		<div class="tab-pane active" id="piastow-desktop">
			<div class="container">
				<div class="row text-center award-row">
				<?php if (have_rows('awards_piastow', 251)); ?>
				<?php while (have_rows('awards_piastow', 251)) : the_row(); ?>
					<div class="col-md-4 award-box">
						<div class="award-container">
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
			</div>
		</div><!-- end of tab-pane-->
	</div><!-- end of tab-content-->
	
</div><!--end of content on tablet and desktop-->
<!-- end of awards -->
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


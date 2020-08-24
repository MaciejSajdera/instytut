<?php
/**
 * Template Name: stypendia
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

<!-- grants -->
<div class="section-container grants bg-abstract">
	<div class="container">
		<div class="row text-center grant-row">
		<?php if (have_rows('grants')); ?>
		<?php while (have_rows('grants')) : the_row(); ?>
			<div class="col-md-6 col-lg-4 grant-box">
				<a href="#">
					<div class="grant-container">
						<div class="grant-image">
							<p class="grant-year"><?php the_sub_field('grant_year'); ?></p>
						</div>
						<p class="grant-title"><?php the_sub_field('grant_title'); ?></p>
						<p class="grant-text"><?php the_sub_field('grant_text'); ?></p>
						<a href="#" class="my-button">Dowiedz się więcej</a>
					</div>
				</a>
			</div>
		<?php endwhile; ?>
		</div>
	</div>
</div>
<!-- end of grants -->
<!--partners section-->
<?php get_template_part( 'template-parts/content-partners' ); ?>
<!--end of partners section-->
<!--contact section-->
<?php get_template_part( 'template-parts/content-contact-section' ); ?>
<!--end of contact section-->
<?php get_footer(); ?>
</div>


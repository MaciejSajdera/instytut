<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'single' ); ?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<div class="section-container my-blog-posts">
	<div class="container my-posts-container">
		<div class="row">
			<div class="col-12 mb-4">
				<h2>Zobacz też </h2>
			</div>
		</div>
		<div class="row">
		<?php
		global $post;
		$args = array( 'posts_per_page' => 3, 'orderby' => 'rand' );
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
		<div class="col-12 mt-5 mb-2 text-center">
			<a href="http://instytutimpib.dev.cube360.pl/wszystkie-aktualnosci/" class="green-button">Pokaż więcej</a>
		</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>

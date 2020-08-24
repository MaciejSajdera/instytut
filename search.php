<?php
/**
 * The template for displaying search results pages.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper search-wrapper" id="search-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

				<?php if ( have_posts() ) : ?>

				<form class="my-search-form my-search-form-block" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
					<label class="sr-only" for="s"><?php esc_html_e( 'Search', 'understrap' ); ?></label>
					<div class="input-group">
						<input class="field form-control" id="s" name="s" type="text"
							placeholder="<?php esc_attr_e( 'Search &hellip;', 'understrap' ); ?>" value="<?php the_search_query(); ?>">
						<span class="input-group-append">
							<input class="submit my-search-form-icon" id="searchsubmit" name="submit" type="submit"
							value="&#xf002;">
						</span>
					</div>
				</form>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', 'search' );
						?>

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->
						
		</div><!-- .row -->
		<div class="row post-pagination">
			<!-- The pagination component -->
			<?php understrap_pagination(); ?>
			</div>	
	</div><!-- #content -->

</div><!-- #search-wrapper -->

<?php get_footer(); ?>

<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div class="col-md-6 col-lg-4 my-post-container">
	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	
			<a href="<?php echo get_permalink(); ?>">
				<div class="my-post-container-outer">
					<div class="my-post-photo"><?php echo get_the_post_thumbnail( $page->ID, 'img-horizontal-medium' ); ?></div>
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
			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
					'after'  => '</div>',
				)
			);
			?>
		
	</article><!-- #post-## -->
	</div>

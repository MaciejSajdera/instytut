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
						<div class="my-swiper-button-next"><i class="fas fa-long-arrow-alt-right"></i></div>
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
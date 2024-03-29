<?php
/**
 * Template Name:  pierwsza strona
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

<div class="my-navigation-container">
	<div class="row science-bussiness-photo">
	
		<div class="col-md-6 bussiness-photo">
		
			<div class="photo-overlay"></div>
				<div class="science-bussiness-text">
					<h3><?php echo the_field('for_business', 1246) ?></h3>
					<p><?php the_field('short_text_for_business'); ?></p>
					<a class="my-button green-button" href=<?php echo $main_page_bussiness_href ?>><?php echo the_field('my_choice', 1246) ?></a>
				</div>
			
				
		</div>
		
		<div class="col-md-6 science-photo">
	
			<div class="photo-overlay"></div>
				<div class="science-bussiness-text">
					<h3><?php echo the_field('for_science', 1246) ?></h3>
					<p><?php the_field('short_text_for_science'); ?></p>
					<a class="my-button black-button" href=<?php echo $main_page_science_href ?>><?php echo the_field('my_choice', 1246) ?></a>
				</div>

		</div>
	</div>
</div>
<?php get_footer('blank'); ?>

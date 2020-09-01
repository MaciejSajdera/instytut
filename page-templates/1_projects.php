<?php
/**
 * Template Name: projekty
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

$i = 0;
?>

<!-- projects -->
<div class="section-container projects">
	<div class="container-fluid">
		<?php if( have_rows('projects', 285) ); ?>
		<?php $count=0 ;?>
		<?php while( have_rows('projects', 285) ) : the_row();

		$i++;
		?>

		<div class="bg-green-85-left">
			<div class="row my-container">
				<div class="col-md-6">
					<h3 class="title-project"><?php the_sub_field('title_project', 285); ?></h3>
				</div>
				<div class="col-md-6">
					<p class="value-project"><?php the_sub_field('value_project'); ?></p>
					<p class="finance-project"><?php the_sub_field('finance_project'); ?></p>

					<a class=<?php
					if ($i % 2 == 0):
					echo "my-read-more-button-green";
					else:
					echo "my-read-more-button-black";
					endif;
					?> data-toggle="collapse" href="#number<?php echo $count; ?>" role="button" aria-expanded="false" aria-controls="number<?php echo $count; ?>">

					<span class="text-collapsed">Opis projektu</span>
					<span class="text-expanded">Opis projektu</span>
				</a>
				</div>
				<div class="col">
					<div class="collapse" id="number<?php echo $count; ?>">
						<p class="subtitle-project"><?php the_sub_field('subtitle_project'); ?></p>
						<div class="text-justify"><p class="text-project"><?php the_sub_field('text_project'); ?></p></div>
					</div>
				</div>
			</div>
		</div>
		<?php $count++; ?>
		<?php endwhile; ?>
	</div>
</div>
<!-- end of projects -->
<!--partners section-->
<?php get_template_part( 'template-parts/content-partners' ); ?>
<!--end of partners section-->
<!--contact section-->
<?php get_template_part( 'template-parts/content-contact-section' ); ?>
<!--end of contact section-->
<?php get_footer(); ?>
</div>


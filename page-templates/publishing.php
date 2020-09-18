<?php
/**
 * Template Name: dzialalnosc wydawnicza
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

<!-- publishing -->
<div class="publishing">
	<div class="container-fluid publishing-info bg-black">
		
		<!--mobile collapase-->
		<div class="only-on-mobile publishing-info-mobile">

			<!--elomasters row-->
			<div class="row mb-4 mt-5" >
				<div class="col-12">
					<h2 class="mb-4"><?php echo the_field('publishing_category_1', 508) ?></h2>
				</div>
					<?php if ( have_rows('elastomers')); ?>
					<?php while(have_rows('elastomers')) : the_row(); ?>
				<div class="col-12">
					<a class="publishing-info-collapse" data-toggle="collapse" href="#elastomers1" role="button" aria-expanded="false" aria-controls="elastomers1">
					<p><?php echo the_field('magazine', 508) ?></p>
					</a>
					<div class="collapse" id="elastomers1">
						<div class="text-justify"><?php the_sub_field('magazine'); ?></div>
					</div>
				</div>
				<div class="col-12">
					<a class="publishing-info-collapse" data-toggle="collapse" href="#elastomers2" role="button" aria-expanded="false" aria-controls="elastomers2">
					<p><?php echo the_field('editorial', 508) ?></p>
					</a>
					<div class="collapse" id="elastomers2">
						<div class="text-justify"><?php the_sub_field('editorial_office'); ?></div>
					</div>
				</div>
				<div class="col-12">
					<a class="publishing-info-collapse" data-toggle="collapse" href="#elastomers3" role="button" aria-expanded="false" aria-controls="elastomers3">
					<p><?php echo the_field('vintages', 508) ?></p>
					</a>
					<div class="collapse" id="elastomers3">
						<div class="text-justify"><?php the_sub_field('yearbooks'); ?></div>
					</div>
				</div>
				<div class="col-12">
					<a class="publishing-info-collapse" data-toggle="collapse" href="#elastomers4" role="button" aria-expanded="false" aria-controls="elastomers4">
					<p><?php echo the_field('subscription', 508) ?></p>
					</a>
					<div class="collapse" id="elastomers4">
						<div class="text-justify"><?php the_sub_field('subscription'); ?></div>
					</div>
				</div>
				<div class="col-12">
					<a class="publishing-info-collapse" data-toggle="collapse" href="#elastomers5" role="button" aria-expanded="false" aria-controls="elastomers5">
					<p><?php echo the_field('advertising', 508) ?></p>
					</a>
					<div class="collapse" id="elastomers5">
						<div class="text-justify"><?php the_sub_field('advertising'); ?></div>
					</div>
					<?php endwhile; ?>
				</div>
				<div class="col-12 col-button">
					<a href="http://instytutimpib.dev.cube360.pl/kontakt-2/" class="my-button green-button-wtext"><?php echo the_field('contact_us', 1246) ?></a>
				</div>
				<div class="col-12 col-button">
					<a href="#" target="_blank" class="my-button green-outline-button"><?php echo the_field('magazine_page', 508) ?></a>
				</div>
			</div>

			<!--plastic row-->
			<div class="row mb-4">
				<div class="col-12">
					<h2 class="mb-4"><?php echo the_field('publishing_category_2', 508) ?></h2>
				</div>
					<?php if ( have_rows('plastic_processing')); ?>
					<?php while(have_rows('plastic_processing')) : the_row(); ?>
				<div class="col-12">
					<a class="publishing-info-collapse" data-toggle="collapse" href="#plastic1" role="button" aria-expanded="false" aria-controls="plastic1">
					<p><?php echo the_field('magazine', 508) ?></p>
					</a>
					<div class="collapse" id="plastic1">
						<div class="text-justify"><?php the_sub_field('magazine'); ?></div>
					</div>
				</div>
				<div class="col-12">
					<a class="publishing-info-collapse" data-toggle="collapse" href="#plastic2" role="button" aria-expanded="false" aria-controls="plastic2">
					<p><?php echo the_field('editorial', 508) ?></p>
					</a>
					<div class="collapse" id="plastic2">
						<div class="text-justify"><?php the_sub_field('editorial_office'); ?></div>
					</div>
				</div>
				<div class="col-12">
					<a class="publishing-info-collapse" data-toggle="collapse" href="#plastic3" role="button" aria-expanded="false" aria-controls="plastic3">
					<p><?php echo the_field('vintages', 508) ?></p>
					</a>
					<div class="collapse" id="plastic3">
						<div class="text-justify"><?php the_sub_field('yearbooks'); ?></div>
					</div>
				</div>
				<div class="col-12">
					<a class="publishing-info-collapse" data-toggle="collapse" href="#plastic4" role="button" aria-expanded="false" aria-controls="plastic4">
					<p><?php echo the_field('subscription', 508) ?></p>
					</a>
					<div class="collapse" id="plastic4">
						<div class="text-justify"><?php the_sub_field('subscription'); ?></div>
					</div>
				</div>
				<div class="col-12">
					<a class="publishing-info-collapse" data-toggle="collapse" href="#plastic5" role="button" aria-expanded="false" aria-controls="plastic5">
					<p><?php echo the_field('advertising', 508) ?></p>
					</a>
					<div class="collapse" id="plastic5">
						<div class="text-justify"><?php the_sub_field('advertising'); ?></div>
					</div>
					<?php endwhile; ?>
				</div>
				<div class="col-12">
					<a href="http://instytutimpib.dev.cube360.pl/kontakt-2/" class="my-button green-button-wtext"><?php echo the_field('contact_us', 1246) ?></a>
				</div>
			</div>

			<!--paints row-->
			<div class="row mb-4">
				<div class="col-12">
					<h2 class="mb-4"><?php echo the_field('publishing_category_3', 508) ?></h2>
				</div>
					<?php if ( have_rows('paints')); ?>
					<?php while(have_rows('paints')) : the_row(); ?>
				<div class="col-12">
					<a class="publishing-info-collapse" data-toggle="collapse" href="#paints1" role="button" aria-expanded="false" aria-controls="paints1">
					<p><?php echo the_field('magazine', 508) ?></p>
					</a>
					<div class="collapse" id="paints1">
						<div class="text-justify"><?php the_sub_field('magazine'); ?></div>
					</div>
				</div>
				<div class="col-12">
					<a class="publishing-info-collapse" data-toggle="collapse" href="#paints2" role="button" aria-expanded="false" aria-controls="paints2">
					<p><?php echo the_field('editorial', 508) ?></p>
					</a>
					<div class="collapse" id="paints2">
						<div class="text-justify"><?php the_sub_field('editorial_office'); ?></div>
					</div>
				</div>
				<div class="col-12">
					<a class="publishing-info-collapse" data-toggle="collapse" href="#paints3" role="button" aria-expanded="false" aria-controls="paints3">
					<p><?php echo the_field('vintages', 508) ?></p>
					</a>
					<div class="collapse" id="paints3">
						<div class="text-justify"><?php the_sub_field('yearbooks'); ?></div>
					</div>
				</div>
				<div class="col-12">
					<a class="publishing-info-collapse" data-toggle="collapse" href="#paints4" role="button" aria-expanded="false" aria-controls="paints4">
					<p><?php echo the_field('subscription', 508) ?></p>
					</a>
					<div class="collapse" id="paints4">
						<div class="text-justify"><?php the_sub_field('subscription'); ?></div>
					</div>
				</div>
				<div class="col-12">
					<a class="publishing-info-collapse" data-toggle="collapse" href="#paints5" role="button" aria-expanded="false" aria-controls="paints5">
					<p><?php echo the_field('advertising', 508) ?></p>
					</a>
					<div class="collapse" id="paints5">
						<div class="text-justify"><?php the_sub_field('advertising'); ?></div>
					</div>
					<?php endwhile; ?>
				</div>
				<div class="col-12">
					<a href="http://instytutimpib.dev.cube360.pl/kontakt-2/" class="my-button green-button-wtext"><?php echo the_field('contact_us', 1246) ?></a>
				</div>
			</div>
		</div>
		<!--end of mobile collpase-->
		<!--desktop tabs-->
		<div class="only-on-md-and-up publishing-info-desktop" >
			<!--elastomers row-->
			<div class="row mb-5 my-container" id="<?php echo the_field('publishing_category_1', 508) ?>">
				<div class="col-12 col-md-5">
					<h2 class="mb-3"><?php echo the_field('publishing_category_1', 508) ?></h2>
					<ul class="nav flex-column publishing-info-nav" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" href="#magazine1" role="tab" data-toggle="tab"><?php echo the_field('magazine', 508) ?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#office1" role="tab" data-toggle="tab"><?php echo the_field('editorial', 508) ?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#year1" role="tab" data-toggle="tab"><?php echo the_field('vintages', 508) ?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#sub1" role="tab" data-toggle="tab"><?php echo the_field('subscription', 508) ?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#ad1" role="tab" data-toggle="tab">Reklamy i ogłoszenia</a>
						</li>
					</ul>
					<div class="row">
						<div class="col-xl-6">
							<a href="http://instytutimpib.dev.cube360.pl/kontakt-2/" class="my-button green-button-wtext"><?php echo the_field('contact_us', 1246) ?></a>
						</div>
						<div class="col-xl-6">
							<a href="#" target="_blank" class="my-button green-outline-button"><?php echo the_field('magazine_page', 508) ?></a>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-7 d-flex justify-content-center align-items-center">
				<?php if ( have_rows('elastomers')); ?>
				<?php while(have_rows('elastomers')) : the_row(); ?>
					<div class="tab-content">
						<div class="tab-pane active" id="magazine1">
							<div class="text-justify"><?php the_sub_field('magazine'); ?></div>
						</div>
						<div class="tab-pane" id="office1">
							<div class="text-justify"><?php the_sub_field('editorial_office'); ?></div>
						</div>
						<div class="tab-pane" id="year1">
							<div class="text-justify"><?php the_sub_field('yearbooks'); ?></div>
						</div>
						<div class="tab-pane" id="sub1">
							<div class="text-justify"><?php the_sub_field('subscription'); ?></div>
						</div>
						<div class="tab-pane" id="ad1">
							<div class="text-justify"><?php the_sub_field('advertising'); ?></div>
						</div>
					</div>
				<?php endwhile; ?>	
				</div>
			</div>
			<!--end of elastomers row-->

			<!--plastic row-->
			<div class="row mb-5 my-container" id="przetworstwo-tworzyw">
				<div class="col-12 col-md-5">
					<h2 class="mb-3"><?php echo the_field('publishing_category_2', 508) ?></h2>
					<ul class="nav flex-column publishing-info-nav" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" href="#magazine2" role="tab" data-toggle="tab"><?php echo the_field('magazine', 508) ?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#office2" role="tab" data-toggle="tab"><?php echo the_field('editorial', 508) ?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#year2" role="tab" data-toggle="tab"><?php echo the_field('vintages', 508) ?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#sub2" role="tab" data-toggle="tab"><?php echo the_field('subscription', 508) ?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#ad2" role="tab" data-toggle="tab"><?php echo the_field('advertising_3', 508) ?></a>
						</li>
					</ul>
					<div class="row">
						<div class="col-xl-6">
							<a href="http://instytutimpib.dev.cube360.pl/kontakt-2/" class="my-button green-button-wtext"><?php echo the_field('contact_us', 1246) ?></a>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-7 d-flex justify-content-center align-items-center">
				<?php if ( have_rows('plastic_processing')); ?>
				<?php while(have_rows('plastic_processing')) : the_row(); ?>
					<div class="tab-content">
						<div class="tab-pane active" id="magazine2">
							<div class="text-justify"><?php the_sub_field('magazine'); ?></div>
						</div>
						<div class="tab-pane" id="office2">
							<div class="text-justify"><?php the_sub_field('editorial_office'); ?></div>
						</div>
						<div class="tab-pane" id="year2">
							<div class="text-justify"><?php the_sub_field('yearbooks'); ?></div>
						</div>
						<div class="tab-pane" id="sub2">
							<div class="text-justify"><?php the_sub_field('subscription'); ?></div>
						</div>
						<div class="tab-pane" id="ad2">
							<div class="text-justify"><?php the_sub_field('advertising'); ?></div>
						</div>
					</div>
				<?php endwhile; ?>	
				</div>
			</div>
			<!--end ofplastic row-->

			<!--paints row-->
			<div class="row my-container" id="farby-i-lakiery">
				<div class="col-12 col-md-5">
					<h2 class="mb-3"><?php echo the_field('publishing_category_3', 508) ?></h2>
					<ul class="nav flex-column publishing-info-nav" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" href="#magazine3" role="tab" data-toggle="tab"><?php echo the_field('magazine', 508) ?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#office3" role="tab" data-toggle="tab"><?php echo the_field('editorial', 508) ?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#year3" role="tab" data-toggle="tab"><?php echo the_field('vintages', 508) ?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#sub3" role="tab" data-toggle="tab"><?php echo the_field('subscription', 508) ?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#ad3" role="tab" data-toggle="tab"><?php echo the_field('advertising_3', 508) ?></a>
						</li>
					</ul>
					<div class="row">
						<div class="col-xl-6">
							<a href="http://instytutimpib.dev.cube360.pl/kontakt-2/" class="my-button green-button-wtext"><?php echo the_field('contact_us', 1246) ?></a>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-7 d-flex justify-content-center align-items-center">
				<?php if ( have_rows('paints')); ?>
				<?php while(have_rows('paints')) : the_row(); ?>
					<div class="tab-content">
						<div class="tab-pane active" id="magazine3">
							<div class="text-justify"><?php the_sub_field('magazine'); ?></div>
						</div>
						<div class="tab-pane" id="office3">
							<div class="text-justify"><?php the_sub_field('editorial_office'); ?></div>
						</div>
						<div class="tab-pane" id="year3">
							<div class="text-justify"><?php the_sub_field('yearbooks'); ?></div>
						</div>
						<div class="tab-pane" id="sub3">
							<div class="text-justify"><?php the_sub_field('subscription'); ?></div>
						</div>
						<div class="tab-pane" id="ad3">
							<div class="text-justify"><?php the_sub_field('advertising'); ?></div>
						</div>
					</div>
				<?php endwhile; ?>	
				</div>
			</div>
			<!--end of paints row-->

		</div>
		<!--end of desktop tabs-->

	</div>

	<div class="container-fluid publishings">
		<div class="row my-container">
			<div class="col-12">
				<h2 class="py-4 pb-md-5"><?php echo the_field('publishings', 508) ?></h2>
			</div>
			<?php if (have_rows('publishing')); ?>
			<?php $publishing=1; ?>
			<?php while( have_rows('publishing')) : the_row(); ?>
			<div class="col-12 col-md-6">
				<div class="row single publishing-container">
					<div class="col-12 col-lg-3">
						<?php
						$photo=get_sub_field('publishing_photo');
						$size='img-vertical-vsmall'; ?>
						<div class="text-center my-4 mt-lg-0"><?php echo wp_get_attachment_image( $photo, $size ); ?></div>
					</div>
					<div class="col-12 col-lg-9">
						<p class="publishing-title">
							<?php the_sub_field('publishing_title'); ?></p>
						<div class="publishing-house">
							<?php the_sub_field('publishing_house'); ?>
						</div>
						<a class="publishing-content-collapse green button" data-toggle="collapse" href="#publishing-content<?php echo $publishing; ?>" role="button" aria-expanded="false" aria-controls="publishing-content<?php echo $publishing; ?>">
							<div class="text-collapsed my-read-more-button-black"><span><?php echo the_field('table_of_contents', 508) ?></span></div>

						</a>
						<div class="publishing-content">
							<div class="collapse" id="publishing-content<?php echo $publishing; ?>">
								<?php the_sub_field('publishing_content'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php $publishing++ ?>
			<?php endwhile; ?>
		</div>
	</div>
	<div class="container pdf">
		<div class="row">
			<div class="col-12">
				<h2 class="my-4"><?php echo the_field('for_authors', 508) ?></h2>
			</div>
			<?php if (have_rows('for_authors')) ;?>
			<?php while (have_rows('for_authors')) : the_row(); ?>
			<div class="col-12 col-md-6 col-xl-4">
				<div class="pdf-container bg-green">
					<p class="pdf-title"><?php the_sub_field('title'); ?></p>
					<div class="pdf-bg">
						<a href="<?php the_sub_field('pdf'); ?>" download title="Pobierz pdf">
							<i class="far fa-file-pdf"></i>
						</a>
					</div>
				</div>
			</div>
<?php endwhile; ?>
	</div>
	</div>
</div>
<!-- end of publishing -->

<!--partners section-->
<?php get_template_part( 'template-parts/content-partners' ); ?>
<!--end of partners section-->
<!--contact section-->
<?php get_template_part( 'template-parts/content-contact-section' ); ?>
<!--end of contact section-->
<?php get_footer(); ?>
</div>


<?php
/**
 * Template Name: laboratoria akredytowane
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

<!-- lab accredited -->
<div class="section-container lab-section">
	<!--recycling-->
	<div class="lab-container">
		<!--title and pdf recycling-->
		<div class="container mb-5">
			<div class="row">
				<div class="col-md-6 lab-type-container">
					<h2 class="work-type"><?php the_field('header_recycling'); ?></h2>
				</div>
				<div class="col-md-6 lab-network-container">
					<p class="lab-network"><?php the_field('text_recycling'); ?></p>
				</div>
			</div>
			<?php if (have_rows('reaserch_pdf_recycling')); ?>
			<div class="row bg-vlg justify-content-center">
			<?php while (have_rows('reaserch_pdf_recycling')) : the_row(); ?>
				<div class="col-12 col-lg-4 text-center">
					<p class="pdf-title mb-lg-0"><?php the_sub_field('pdf_name'); ?>
						<a href="<?php the_sub_field('pdf'); ?>" download title="Pobierz pdf">
							<i class="far fa-file-pdf"></i>
						</a>
					</p>
				</div>
			<?php endwhile; ?>
			</div>
		</div>
		<!--end of title and pdf recycling-->

		<!--description recycling-->
		
		<div class="container research-container">
			<!--description recycling mobile-->
			<div class="row only-on-mobile">
				<?php if (have_rows('research_desc_recycling')); ?>
				<div id="carousel-research-recycling" class="carousel-reserach carousel slide only-on-mobile" data-ride="carousel" data-interval="false" data-pause="false">
					<div class="carousel-inner">
						<?php $recycling_research=1; ?>
						
						<?php while (have_rows('research_desc_recycling')) : the_row(); ?>
						<div class="carousel-item <?php if ($recycling_research==1) {echo 'active';} ;?>">
							<div class="research-type">
								<?php the_sub_field('research_type'); ?>
								</div>
									<div class="text-justify"><?php the_sub_field('short_lab_text'); ?></div>
								<div>
								
								<div class="collapse " id="number_recycling<?php echo $recycling_research; ?>">
									<div class="text-justify"><?php the_sub_field('long_lab_text'); ?></div>
								</div>
								<a class="read-more-collapse" data-toggle="collapse" href="#number_recycling<?php echo $recycling_research; ?>" role="button" aria-expanded="false" aria-controls="number_recycling<?php echo $recycling_research; ?>">
								<span class="text-collapsed"><?php echo the_field('read_more', 1246) ?></span>
								<span class="text-expanded"><?php echo the_field('read_less', 1246) ?></span>
								</a>
								<div class="text-center bg-vlg photo-1 mt-5">
									<?php 
									$photo = get_sub_field('lab_photo_1');
									$size = 'img-vertical-small'; ?>
									<div><?php echo wp_get_attachment_image( $photo, $size ); ?></div>
								</div>
							</div>
						</div>
						<?php $recycling_research++; ?>
						<?php endwhile; ?>
					</div>
					<a class="carousel-control-prev" href="#carousel-research-recycling" role="button" data-slide="prev">
						<i class="fas fa-long-arrow-alt-left"></i>
					<span class="sr-only"><?php the_field('previous', 251); ?></span>
					</a>
					<a class="carousel-control-next" href="#carousel-research-recycling" role="button" data-slide="next">
						<i class="fas fa-long-arrow-alt-right"></i>
					<span class="sr-only"><?php the_field('next', 251); ?></span>
					</a>
				</div>
			</div>
			<!--description recycling mobile-->

			<!--description recycling desktop-->
			<div class="row justify-content-center only-on-md-and-up display-flex">
				<div class="col-12 col-md-2 text-center">
					<p><?php the_field('choose', 641); ?><br/><?php the_field('research', 641); ?></p>
					<img src="http://instytutimpib.dev.cube360.pl/wp-content/uploads/2019/06/wybierz.png">
				</div>
				<?php if (have_rows('research_desc_recycling')); ?>
				<ul class="col-12 col-md-10 nav nav-tabs" role="tablist">
					<?php $recycling_research=1; ?>
					<?php while (have_rows('research_desc_recycling')) : the_row(); ?>
					<li class="research-option"><a href="#number_recycling_<?php echo $recycling_research; ?>" role="tab" data-toggle="tab" class="<?php if ($recycling_research==1) {echo 'active';} ;?>"><?php the_sub_field('research_type'); ?></a></li>
					<?php $recycling_research++; ?>
					<?php endwhile; ?>
				</ul>
			</div>

			<div class="tab-content mt-4 only-on-md-and-up">
			<?php $recycling_text=1; ?>
			<?php while (have_rows('research_desc_recycling')) : the_row(); ?>
				<div class="tab-pane <?php if ($recycling_text==1) {echo ' active';} ;?>" id="number_recycling_<?php echo $recycling_text; ?>">
					<div class="row">
						<div class="col-md-6 lab-text-container">
							<div class="short-text">
								<div class="text-justify"><?php the_sub_field('short_lab_text'); ?></div>
							</div>
							<div>
								<div class="text-justify"><?php the_sub_field('long_lab_text'); ?></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row lab-images-row">
								<div class="col-12 col-md-12 col-lg-6 text-center bg-vlg photo-1">
									<?php 
									$photo = get_sub_field('lab_photo_1');
									$size = 'img-vertical-small'; ?>
									<?php echo wp_get_attachment_image( $photo, $size ); ?>
								</div>
								<div class="col-md-12 col-lg-6 not-on-mobile text-center bg-vlg photo-2">
									<?php 
									$photo_2 = get_sub_field('lab_photo_2');
									$size = 'img-vertical-small'; ?>
									<?php echo wp_get_attachment_image( $photo_2, $size ); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php $recycling_text++; ?>
				<?php endwhile; ?>
			</div>
			<!--end of description recycling desktop-->
		</div>	
		<!--end of description recycling-->

		<!--liders recycling-->
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 mt-5">
					<h2 class="text-center mb-4"><?php the_field('leaders_research', 641); ?></h2>
				</div>
			</div>
			
			<div class="row only-on-mobile justify-content-center liders-mobile">
				<div class="col-12 text-center">
					<?php
					$rows = get_field('reaserach_liders_recycling'); // get all the rows
					$first_row = $rows[0]; // get the first row
					$first_row_image = $first_row['lider_photo']; // get the sub field value 
					$first_row_text = $first_row['lider_name']; // get the sub field value 
					$image = wp_get_attachment_image_src( $first_row_image, 'img-square' );
					?>
					<div class="science-lider-photo"><img src="<?php echo $image[0]; ?>" /></div>
					<p><?php echo $first_row_text; ?></p>
				</div>
				<div class="collapse" id="liders_recycling">
					<?php if(get_field('reaserach_liders_recycling')): $i = 0; 
					while(has_sub_field('reaserach_liders_recycling')): $i++; if ($i != 1): ?>
					<div class="col-12 text-center">
						<?php 
						$photo = get_sub_field('lider_photo');
						$size = 'img-square'; ?>
						<div class="science-lider-photo"><?php echo wp_get_attachment_image( $photo, $size ); ?></div>
						<p><?php the_sub_field('lider_name'); ?></p>
					</div>
					<?php endif; endwhile; endif; ?>
				</div>
				<div class="col-12">
					<a class="liders-collapse" data-toggle="collapse" href="#liders_recycling" role="button" aria-expanded="false" aria-controls="liders_recycling">
						<span class="text-collapsed"><?php the_field('show_all_leaders', 641); ?></span>
						<span class="text-expanded"><?php the_field('hide_all_leaders', 641); ?></span>
					</a>
				</div>
			</div>

			<div class="row only-on-md-and-up my-container justify-content-center liders-desktop">
				<?php if (have_rows('reaserach_liders_recycling')); ?>
				<?php while (have_rows('reaserach_liders_recycling')) : the_row(); ?>
				<div class="col-md-2 text-center">
					<?php 
					$photo = get_sub_field('lider_photo');
					$size = 'img-square'; ?>
					<?php echo wp_get_attachment_image( $photo, $size ); ?>
					<p><?php the_sub_field('lider_name'); ?></p>
				</div>
				<?php endwhile; ?>
			</div>
			<div class="row">
				<div class="col-12 my-wrapper">
					<a href="http://instytutimpib.dev.cube360.pl/kontakt-2/" class="my-button black-button not-on-mobile"><?php echo the_field('contact_us', 1246) ?></a>
				</div>
			</div>
		</div>
		<!--end of liders recycling-->
	</div>
	<!--end of recycling-->

	<!--plastic-->
	<div class="lab-container">
		<!--title and pdf plastic-->
		<div class="container mb-5">
			<div class="row">
				<div class="col-md-6 lab-type-container">
					<h2 class="work-type"><?php the_field('header_plastic'); ?></h2>
				</div>
				<div class="col-md-6 lab-network-container">
					<p class="lab-network"><?php the_field('text_plastic'); ?></p>
				</div>
			</div>
			<?php if (have_rows('reaserch_pdf_plastic')); ?>
			<div class="row bg-vlg justify-content-center">
			<?php while (have_rows('reaserch_pdf_plastic')) : the_row(); ?>
				<div class="col-12 col-lg-4 text-center">
					<p class="pdf-title mb-lg-0"><?php the_sub_field('pdf_name'); ?>
						<a href="<?php the_sub_field('pdf'); ?>" download title="Pobierz pdf">
							<i class="far fa-file-pdf"></i>
						</a>
					</p>
				</div>
			<?php endwhile; ?>
			</div>
		</div>
		<!--end of title and pdf plastic-->

		<!--description plastic-->
		
		<div class="container research-container">
			<!--description plastic mobile-->
			<div class="row only-on-mobile">
				<?php if (have_rows('research_desc_plastic')); ?>
				<div id="carousel-research-plastic" class="carousel-reserach carousel slide only-on-mobile" data-ride="carousel" data-interval="false" data-pause="false">
					<div class="carousel-inner">
						<?php $plastic_research=1; ?>
						
						<?php while (have_rows('research_desc_plastic')) : the_row(); ?>
						<div class="carousel-item <?php if ($plastic_research==1) {echo 'active';} ;?>">
							<div class="research-type">
								<?php the_sub_field('research_type'); ?>
								</div>
									<div class="text-justify"><?php the_sub_field('short_lab_text'); ?></div>
								<div>
								<div class="collapse " id="number_plastic<?php echo $plastic_research; ?>">
									<div class="text-justify"><?php the_sub_field('long_lab_text'); ?></div>
								</div>
								<a class="read-more-collapse" data-toggle="collapse" href="#number_plastic<?php echo $plastic_research; ?>" role="button" aria-expanded="false" aria-controls="number_plastic<?php echo $plastic_research; ?>">
								<span class="text-collapsed"><?php echo the_field('read_more', 1246) ?></span>
								<span class="text-expanded"><?php echo the_field('read_less', 1246) ?></span>
								</a>
								<div class="text-center bg-vlg photo-1 mt-5">
									<?php 
									$photo = get_sub_field('lab_photo_1');
									$size = 'img-vertical-small'; ?>
									<div><?php echo wp_get_attachment_image( $photo, $size ); ?></div>
								</div>
							</div>
						</div>
						<?php $plastic_research++; ?>
						<?php endwhile; ?>
					</div>
					<a class="carousel-control-prev" href="#carousel-research-plastic" role="button" data-slide="prev">
						<i class="fas fa-long-arrow-alt-left"></i>
					<span class="sr-only"><?php the_field('previous', 251); ?></span>
					</a>
					<a class="carousel-control-next" href="#carousel-research-plastic" role="button" data-slide="next">
						<i class="fas fa-long-arrow-alt-right"></i>
					<span class="sr-only"><?php the_field('next', 251); ?></span>
					</a>
				</div>
			</div>
			<!--description plastic mobile-->

			<!--description plastic desktop-->
			<div class="row justify-content-center only-on-md-and-up display-flex">
				<div class="col-12 col-md-2 text-center">
					<p><?php the_field('choose', 641); ?><br/><?php the_field('research', 641); ?></p>
					<img src="http://instytutimpib.dev.cube360.pl/wp-content/uploads/2019/06/wybierz.png">
				</div>
				<?php if (have_rows('research_desc_plastic')); ?>
				<ul class="col-12 col-md-10 nav nav-tabs" role="tablist">
					<?php $plastic_research=1; ?>
					<?php while (have_rows('research_desc_plastic')) : the_row(); ?>
					<li class="research-option"><a href="#number_plastic_<?php echo $plastic_research; ?>" role="tab" data-toggle="tab" class="<?php if ($plastic_research==1) {echo 'active';} ;?>"><?php the_sub_field('research_type'); ?></a></li>
					<?php $plastic_research++; ?>
					<?php endwhile; ?>
				</ul>
			</div>

			<div class="tab-content mt-4 only-on-md-and-up">
			<?php $plastic_text=1; ?>
			<?php while (have_rows('research_desc_plastic')) : the_row(); ?>
				<div class="tab-pane <?php if ($plastic_text==1) {echo ' active';} ;?>" id="number_plastic_<?php echo $plastic_text; ?>">
					<div class="row">
						<div class="col-md-6 lab-text-container">
							<div class="short-text">
								<div class="text-justify"><?php the_sub_field('short_lab_text'); ?></div>
							</div>
							<div>
								<div class="text-justify"><?php the_sub_field('long_lab_text'); ?></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row lab-images-row">
								<div class="col-12 col-md-12 col-lg-6 text-center bg-vlg photo-1">
									<?php 
									$photo = get_sub_field('lab_photo_1');
									$size = 'img-vertical-small'; ?>
									<?php echo wp_get_attachment_image( $photo, $size ); ?>
								</div>
								<div class="col-md-12 col-lg-6 not-on-mobile text-center bg-vlg photo-2">
									<?php 
									$photo_2 = get_sub_field('lab_photo_2');
									$size = 'img-vertical-small'; ?>
									<?php echo wp_get_attachment_image( $photo_2, $size ); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php $plastic_text++; ?>
				<?php endwhile; ?>
			</div>
			<!--end of description plastic desktop-->
		</div>	
		<!--end of description plastic-->

		<!--liders plastic-->
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 mt-5">
					<h2 class="text-center mb-4"><?php the_field('leaders_research', 641); ?></h2>
				</div>
			</div>
			
			<div class="row only-on-mobile justify-content-center liders-mobile">
				<div class="col-12 text-center">
					<?php
					$rows = get_field('reaserach_liders_plastic'); // get all the rows
					$first_row = $rows[0]; // get the first row
					$first_row_image = $first_row['lider_photo']; // get the sub field value 
					$first_row_text = $first_row['lider_name']; // get the sub field value 
					$image = wp_get_attachment_image_src( $first_row_image, 'img-square' );
					?>
					<div class="science-lider-photo"><img src="<?php echo $image[0]; ?>" /></div>
					<p><?php echo $first_row_text; ?></p>
				</div>
				<div class="collapse" id="liders_plastic">
					<?php if(get_field('reaserach_liders_plastic')): $i = 0; 
					while(has_sub_field('reaserach_liders_plastic')): $i++; if ($i != 1): ?>
					<div class="col-12 text-center">
						<?php 
						$photo = get_sub_field('lider_photo');
						$size = 'img-square'; ?>
						<div class="science-lider-photo"><?php echo wp_get_attachment_image( $photo, $size ); ?></div>
						<p><?php the_sub_field('lider_name'); ?></p>
					</div>
					<?php endif; endwhile; endif; ?>
				</div>
				<div class="col-12">
					<a class="liders-collapse" data-toggle="collapse" href="#liders_plastic" role="button" aria-expanded="false" aria-controls="liders_plastic">
						<span class="text-collapsed"><?php the_field('show_all_leaders', 641); ?></span>
						<span class="text-expanded"><?php the_field('hide_all_leaders', 641); ?></span>
					</a>
				</div>
			</div>

			<div class="row only-on-md-and-up my-container justify-content-center liders-desktop">
				<?php if (have_rows('reaserach_liders_plastic')); ?>
				<?php while (have_rows('reaserach_liders_plastic')) : the_row(); ?>
				<div class="col-md-2 text-center">
					<?php 
					$photo = get_sub_field('lider_photo');
					$size = 'img-square'; ?>
					<?php echo wp_get_attachment_image( $photo, $size ); ?>
					<p><?php the_sub_field('lider_name'); ?></p>
				</div>
				<?php endwhile; ?>
			</div>
			<div class="row">
				<div class="col-12 my-wrapper">
					<a href="http://instytutimpib.dev.cube360.pl/kontakt-2/" class="my-button black-button not-on-mobile"><?php echo the_field('contact_us', 1246) ?></a>
				</div>
			</div>
		</div>
		<!--end of liders plastic-->
	</div>
	<!--end of plastic-->

	<!--elastomers-->
	<div class="lab-container">
		<!--title and pdf elastomers-->
		<div class="container mb-5">
			<div class="row">
				<div class="col-md-6 lab-type-container">
					<h2 class="work-type"><?php the_field('header_elastomers'); ?></h2>
				</div>
				<div class="col-md-6 lab-network-container">
					<p class="lab-network"><?php the_field('text_elastomers'); ?></p>
				</div>
			</div>
			<?php if (have_rows('reaserch_pdf_elastomers')); ?>
			<div class="row bg-vlg justify-content-center">
			<?php while (have_rows('reaserch_pdf_elastomers')) : the_row(); ?>
				<div class="col-12 col-lg-4 text-center">
					<p class="pdf-title mb-lg-0"><?php the_sub_field('pdf_name'); ?>
						<a href="<?php the_sub_field('pdf'); ?>" download title="Pobierz pdf">
							<i class="far fa-file-pdf"></i>
						</a>
					</p>
				</div>
			<?php endwhile; ?>
			</div>
		</div>
		<!--end of title and pdf elastomers-->

		<!--description elastomers-->
		
		<div class="container research-container">
			<!--description elastomers mobile-->
			<div class="row only-on-mobile">
				<?php if (have_rows('research_desc_elastomers')); ?>
				<div id="carousel-research-elastomers" class="carousel-reserach carousel slide only-on-mobile" data-ride="carousel" data-interval="false" data-pause="false">
					<div class="carousel-inner">
						<?php $elastomers_research=1; ?>
						
						<?php while (have_rows('research_desc_elastomers')) : the_row(); ?>
						<div class="carousel-item <?php if ($elastomers_research==1) {echo 'active';} ;?>">
							<div class="research-type">
								<?php the_sub_field('research_type'); ?>
								</div>
									<div class="text-justify"><?php the_sub_field('short_lab_text'); ?></div>
								<div>
								<div class="collapse " id="number_elastomers<?php echo $elastomers_research; ?>">
									<div class="text-justify"><?php the_sub_field('long_lab_text'); ?></div>
								</div>
								<a class="read-more-collapse" data-toggle="collapse" href="#number_elastomers<?php echo $elastomers_research; ?>" role="button" aria-expanded="false" aria-controls="number_elastomers<?php echo $elastomers_research; ?>">
								<span class="text-collapsed"><?php echo the_field('read_more', 1246) ?></span>
								<span class="text-expanded"><?php echo the_field('read_less', 1246) ?></span>
								</a>
								<div class="text-center bg-vlg photo-1 mt-5">
									<?php 
									$photo = get_sub_field('lab_photo_1');
									$size = 'img-vertical-small'; ?>
									<div><?php echo wp_get_attachment_image( $photo, $size ); ?></div>
								</div>
							</div>
						</div>
						<?php $elastomers_research++; ?>
						<?php endwhile; ?>
					</div>
					<a class="carousel-control-prev" href="#carousel-research-elastomers" role="button" data-slide="prev">
						<i class="fas fa-long-arrow-alt-left"></i>
					<span class="sr-only"><?php the_field('previous', 251); ?></span>
					</a>
					<a class="carousel-control-next" href="#carousel-research-elastomers" role="button" data-slide="next">
						<i class="fas fa-long-arrow-alt-right"></i>
					<span class="sr-only"><?php the_field('next', 251); ?></span>
					</a>
				</div>
			</div>
			<!--description elastomers mobile-->

			<!--description elastomers desktop-->
			<div class="row justify-content-center only-on-md-and-up display-flex">
				<div class="col-12 col-md-2 text-center">
					<p><?php the_field('choose', 641); ?><br/><?php the_field('research', 641); ?></p>
					<img src="http://instytutimpib.dev.cube360.pl/wp-content/uploads/2019/06/wybierz.png">
				</div>
				<?php if (have_rows('research_desc_elastomers')); ?>
				<ul class="col-12 col-md-10 nav nav-tabs" role="tablist">
					<?php $elastomers_research=1; ?>
					<?php while (have_rows('research_desc_elastomers')) : the_row(); ?>
					<li class="research-option"><a href="#number_elastomers_<?php echo $elastomers_research; ?>" role="tab" data-toggle="tab" class="<?php if ($elastomers_research==1) {echo 'active';} ;?>"><?php the_sub_field('research_type'); ?></a></li>
					<?php $elastomers_research++; ?>
					<?php endwhile; ?>
				</ul>
			</div>

			<div class="tab-content mt-4 only-on-md-and-up">
			<?php $elastomers_text=1; ?>
			<?php while (have_rows('research_desc_elastomers')) : the_row(); ?>
				<div class="tab-pane <?php if ($elastomers_text==1) {echo ' active';} ;?>" id="number_elastomers_<?php echo $elastomers_text; ?>">
					<div class="row">
						<div class="col-md-6 lab-text-container">
							<div class="short-text">
								<div class="text-justify"><?php the_sub_field('short_lab_text'); ?></div>
							</div>
							<div>
								<div class="text-justify"><?php the_sub_field('long_lab_text'); ?></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row lab-images-row">
								<div class="col-12 col-md-12 col-lg-6 text-center bg-vlg photo-1">
									<?php 
									$photo = get_sub_field('lab_photo_1');
									$size = 'img-vertical-small'; ?>
									<div><?php echo wp_get_attachment_image( $photo, $size ); ?></div>
								</div>
								<div class="col-md-12 col-lg-6 not-on-mobile text-center bg-vlg photo-2">
									<?php 
									$photo_2 = get_sub_field('lab_photo_2');
									$size = 'img-vertical-small'; ?>
									<div><?php echo wp_get_attachment_image( $photo_2, $size ); ?></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php $elastomers_text++; ?>
				<?php endwhile; ?>
			</div>
			<!--end of description elastomers desktop-->
		</div>	
		<!--end of description elastomers-->

		<!--liders elastomers-->
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 mt-5">
					<h2 class="text-center mb-4"><?php the_field('leaders_research', 641); ?></h2>
				</div>
			</div>
			
			<div class="row only-on-mobile justify-content-center liders-mobile">
				<div class="col-12 text-center">
					<?php
					$rows = get_field('reaserach_liders_elastomers'); // get all the rows
					$first_row = $rows[0]; // get the first row
					$first_row_image = $first_row['lider_photo']; // get the sub field value 
					$first_row_text = $first_row['lider_name']; // get the sub field value 
					$image = wp_get_attachment_image_src( $first_row_image, 'img-square' );
					?>
					<div class="science-lider-photo"><img src="<?php echo $image[0]; ?>" /></div>
					<p><?php echo $first_row_text; ?></p>
				</div>
				<div class="collapse" id="liders_elastomers">
					<?php if(get_field('reaserach_liders_elastomers')): $i = 0; 
					while(has_sub_field('reaserach_liders_elastomers')): $i++; if ($i != 1): ?>
					<div class="col-12 text-center">
						<?php 
						$photo = get_sub_field('lider_photo');
						$size = 'img-square'; ?>
						<div class="science-lider-photo"><?php echo wp_get_attachment_image( $photo, $size ); ?></div>
						<p><?php the_sub_field('lider_name'); ?></p>
					</div>
					<?php endif; endwhile; endif; ?>
				</div>
				<div class="col-12">
					<a class="liders-collapse" data-toggle="collapse" href="#liders_elastomers" role="button" aria-expanded="false" aria-controls="liders_elastomers">
						<span class="text-collapsed"><?php the_field('show_all_leaders', 641); ?></span>
						<span class="text-expanded"><?php the_field('hide_all_leaders', 641); ?></span>
					</a>
				</div>
			</div>

			<div class="row only-on-md-and-up my-container justify-content-center liders-desktop">
				<?php if (have_rows('reaserach_liders_elastomers')); ?>
				<?php while (have_rows('reaserach_liders_elastomers')) : the_row(); ?>
				<div class="col-md-2 text-center">
					<?php 
					$photo = get_sub_field('lider_photo');
					$size = 'img-square'; ?>
					<?php echo wp_get_attachment_image( $photo, $size ); ?>
					<p><?php the_sub_field('lider_name'); ?></p>
				</div>
				<?php endwhile; ?>
			</div>
			<div class="row">
				<div class="col-12 my-wrapper">
					<a href="http://instytutimpib.dev.cube360.pl/kontakt-2/" class="my-button black-button not-on-mobile"><?php echo the_field('contact_us', 1246) ?></a>
				</div>
			</div>
		</div>
		<!--end of liders elastomers-->
	</div>
	<!--end of elastomers-->

	<!--paints-->
	<div class="lab-container">
		<!--title and pdf paints-->
		<div class="container mb-5">
			<div class="row">
				<div class="col-md-6 lab-type-container">
					<h2 class="work-type"><?php the_field('header_paints'); ?></h2>
				</div>
				<div class="col-md-6 lab-network-container">
					<p class="lab-network"><?php the_field('text_paints'); ?></p>
				</div>
			</div>
			<?php if (have_rows('reaserch_pdf_paints')); ?>
			<div class="row bg-vlg justify-content-center">
			<?php while (have_rows('reaserch_pdf_paints')) : the_row(); ?>
				<div class="col-12 col-lg-4 text-center">
					<p class="pdf-title mb-lg-0"><?php the_sub_field('pdf_name'); ?>
						<a href="<?php the_sub_field('pdf'); ?>" download title="Pobierz pdf">
							<i class="far fa-file-pdf"></i>
						</a>
					</p>
				</div>
			<?php endwhile; ?>
			</div>
		</div>
		<!--end of title and pdf paints-->

		<!--description paints-->
		
		<div class="container research-container">
			<!--description paints mobile-->
			<div class="row only-on-mobile">
				<?php if (have_rows('research_desc_paints')); ?>
				<div id="carousel-research-paints" class="carousel-reserach carousel slide only-on-mobile" data-ride="carousel" data-interval="false" data-pause="false">
					<div class="carousel-inner">
						<?php $paints_research=1; ?>
						
						<?php while (have_rows('research_desc_paints')) : the_row(); ?>
						<div class="carousel-item <?php if ($paints_research==1) {echo 'active';} ;?>">
							<div class="research-type">
								<?php the_sub_field('research_type'); ?>
								</div>
									<div class="text-justify"><?php the_sub_field('short_lab_text'); ?></div>
								<div>
								<div class="collapse " id="number_paints<?php echo $paints_research; ?>">
									<div class="text-justify"><?php the_sub_field('long_lab_text'); ?></div>
								</div>
								<a class="read-more-collapse" data-toggle="collapse" href="#number_paints<?php echo $paints_research; ?>" role="button" aria-expanded="false" aria-controls="number_paints<?php echo $paints_research; ?>">
								<span class="text-collapsed"><?php echo the_field('read_more', 1246) ?></span>
								<span class="text-expanded"><?php echo the_field('read_less', 1246) ?></span>
								</a>
								<div class="text-center bg-vlg photo-1 mt-5">
									<?php 
									$photo = get_sub_field('lab_photo_1');
									$size = 'img-vertical-small'; ?>
									<?php echo wp_get_attachment_image( $photo, $size ); ?>
								</div>
							</div>
						</div>
						<?php $paints_research++; ?>
						<?php endwhile; ?>
					</div>
					<a class="carousel-control-prev" href="#carousel-research-paints" role="button" data-slide="prev">
						<i class="fas fa-long-arrow-alt-left"></i>
					<span class="sr-only"><?php the_field('previous', 251); ?></span>
					</a>
					<a class="carousel-control-next" href="#carousel-research-paints" role="button" data-slide="next">
						<i class="fas fa-long-arrow-alt-right"></i>
					<span class="sr-only"><?php the_field('next', 251); ?></span>
					</a>
				</div>
			</div>
			<!--description paints mobile-->

			<!--description paints desktop-->
			<div class="row justify-content-center only-on-md-and-up display-flex">
				<div class="col-12 col-md-2 text-center">
					<p><?php the_field('choose', 641); ?><br/><?php the_field('research', 641); ?></p>
					<img src="http://instytutimpib.dev.cube360.pl/wp-content/uploads/2019/06/wybierz.png">
				</div>
				<?php if (have_rows('research_desc_paints')); ?>
				<ul class="col-12 col-md-10 nav nav-tabs" role="tablist">
					<?php $paints_research=1; ?>
					<?php while (have_rows('research_desc_paints')) : the_row(); ?>
					<li class="research-option"><a href="#number_paints_<?php echo $paints_research; ?>" role="tab" data-toggle="tab" class="<?php if ($paints_research==1) {echo 'active';} ;?>"><?php the_sub_field('research_type'); ?></a></li>
					<?php $paints_research++; ?>
					<?php endwhile; ?>
				</ul>
			</div>

			<div class="tab-content mt-4 only-on-md-and-up">
			<?php $paints_text=1; ?>
			<?php while (have_rows('research_desc_paints')) : the_row(); ?>
				<div class="tab-pane <?php if ($paints_text==1) {echo ' active';} ;?>" id="number_paints_<?php echo $paints_text; ?>">
					<div class="row">
						<div class="col-md-6 lab-text-container">
							<div class="short-text">
								<div class="text-justify"><?php the_sub_field('short_lab_text'); ?></div>
							</div>
							<div>
								<div class="text-justify"><?php the_sub_field('long_lab_text'); ?></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row lab-images-row">
								<div class="col-12 col-md-12 col-lg-6 text-center bg-vlg photo-1">
									<?php 
									$photo = get_sub_field('lab_photo_1');
									$size = 'img-vertical-small'; ?>
									<?php echo wp_get_attachment_image( $photo, $size ); ?>
								</div>
								<div class="col-md-12 col-lg-6 not-on-mobile text-center bg-vlg photo-2">
									<?php 
									$photo_2 = get_sub_field('lab_photo_2');
									$size = 'img-vertical-small'; ?>
									<?php echo wp_get_attachment_image( $photo_2, $size ); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php $paints_text++; ?>
				<?php endwhile; ?>
			</div>
			<!--end of description paints desktop-->
		</div>	
		<!--end of description paints-->

		<!--liders paints-->
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 mt-5">
					<h2 class="text-center mb-4"><?php the_field('leaders_research', 641); ?></h2>
				</div>
			</div>
			
			<div class="row only-on-mobile justify-content-center liders-mobile">
				<div class="col-12 text-center">
					<?php
					$rows = get_field('reaserach_liders_paints'); // get all the rows
					$first_row = $rows[0]; // get the first row
					$first_row_image = $first_row['lider_photo']; // get the sub field value 
					$first_row_text = $first_row['lider_name']; // get the sub field value 
					$image = wp_get_attachment_image_src( $first_row_image, 'img-square' );
					?>
					<div class="science-lider-photo"><img src="<?php echo $image[0]; ?>" /></div>
					<p><?php echo $first_row_text; ?></p>
				</div>
				<div class="collapse" id="liders_paints">
					<?php if(get_field('reaserach_liders_paints')): $i = 0; 
					while(has_sub_field('reaserach_liders_paints')): $i++; if ($i != 1): ?>
					<div class="col-12 text-center">
						<?php 
						$photo = get_sub_field('lider_photo');
						$size = 'img-square'; ?>
						<div class="science-lider-photo"><?php echo wp_get_attachment_image( $photo, $size ); ?></div>
						<p><?php the_sub_field('lider_name'); ?></p>
					</div>
					<?php endif; endwhile; endif; ?>
				</div>
				<div class="col-12">
					<a class="liders-collapse" data-toggle="collapse" href="#liders_paints" role="button" aria-expanded="false" aria-controls="liders_paints">
						<span class="text-collapsed"><?php the_field('show_all_leaders', 641); ?></span>
						<span class="text-expanded"><?php the_field('hide_all_leaders', 641); ?></span>
					</a>
				</div>
			</div>

			<div class="row only-on-md-and-up my-container justify-content-center liders-desktop">
				<?php if (have_rows('reaserach_liders_paints')); ?>
				<?php while (have_rows('reaserach_liders_paints')) : the_row(); ?>
				<div class="col-md-2 text-center end-of-section">
					<?php 
					$photo = get_sub_field('lider_photo');
					$size = 'img-square'; ?>
					<?php echo wp_get_attachment_image( $photo, $size ); ?>
					<p><?php the_sub_field('lider_name'); ?></p>
				</div>
				<?php endwhile; ?>
			</div>
			<div class="row">
				<div class="col-12 my-wrapper">
					<a href="/instytut/kontakt-2" class="my-button black-button not-on-mobile"><?php echo the_field('contact_us', 1246) ?></a>
				</div>
			</div>
		</div>
		<!--end of liders paints-->
	</div>
	<!--end of paints-->

</div>
<!-- end of lab accredited -->

<!--partners section-->
<?php get_template_part( 'template-parts/content-partners' ); ?>
<!--end of partners section-->
<!--contact section-->
<?php get_template_part( 'template-parts/content-contact-section' ); ?>
<!--end of contact section-->
<?php get_footer(); ?>
</div>


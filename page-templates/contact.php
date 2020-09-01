<?php
/**
 * Template Name: kontakt
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
<!-- contact -->
<div class="section-container contact ">
	<!--department Torun-->
	<div class="container-fluid contact-department-section bg-abstract">
		<div class="row my-container">
			<div class="col-md-8">
				<h2 class="contact-section-title"><?php the_field('name_torun', 289); ?></h2>
			</div>
			<div class="col-12">
				<?php the_field('adress_torun', 289); ?>
			</div>
			<div class="col-md-6 extra-padding">
				<?php the_field('nip', 289); ?>
			</div>
			<div class="col-md-6 extra-padding">
				<?php the_field('bank_account', 289); ?>
			</div>
			<?php if( have_rows('data_left_torun', 289) ); ?>
			<div class="col-md-6">
				
				<div class="single-contact-container-outer">
					<?php while( have_rows('data_left_torun', 289) ): the_row(); ?>
					<div class="single-contact-container">
						<p><strong><?php the_sub_field('department_position'); ?></strong></p>
						<p><?php the_sub_field('name'); ?></p>
						<p><?php the_sub_field('phone'); ?></p>
						<p><?php the_sub_field('second-phone'); ?></p>
						<p><a href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a></p>
						<a href = "mailto:<?php the_sub_field('email'); ?>" class="my-button">Wyślij wiadomość</a>
					</div>
					<?php endwhile; ?>
				</div>
			</div>

			<?php if( have_rows('data_right_torun', 289) ); ?>
			<div class="col-md-6">
				<?php while( have_rows('data_right_torun', 289) ): the_row(); ?>
				<div class="single-contact-container">
					<p><strong><?php the_sub_field('department'); ?></strong></p>
					<p><strong><?php the_sub_field('position'); ?></strong></p>
					<p><?php the_sub_field('name'); ?></p>
					<p><?php the_sub_field('phone'); ?></p>
					<p><?php the_sub_field('second-phone'); ?></p>
					<p><a href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a></p>
					<a href = "mailto:<?php the_sub_field('email'); ?>" class="my-button">Wyślij wiadomość</a>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
	<!--end of department Torun-->

	<!--department Gliwice-->
	<div class="container-fluid bg-vlg contact-department-section">
		<div class="row my-container">
			<div class="col-md-8">
				<h2 class="contact-section-title"><?php the_field('name_gliwice', 289); ?></h2>
			</div>	
			<div class="col-md-6">
				<?php the_field('adress_gliwice', 289); ?>
			</div>
			<div class="col-md-6">
				<div class="single-contact-container">
					<p><?php the_field('phone_gliwice', 289); ?></p>
					<p><?php the_field('faks_gliwice', 289); ?></p>
					<p><a href="mailto:<?php the_field('email_gliwice', 289); ?>"><?php the_field('email_gliwice', 289); ?></a></p>
					<a href = "mailto:<?php the_field('email_gliwice', 289); ?>" class="my-button">Wyślij wiadomość</a>
				</div>

			</div>
		</div>
	</div>
	<!--end of department Gliwice-->

	<!--department Piastow-->
	<div class="container-fluid contact-department-section bg-abstract">
		<div class="row my-container">
			<div class="col-md-8">
				<h2 class="contact-section-title"><?php the_field('name_piastow', 289); ?></h2>
			</div>
			<div class="col-md-6">
				<?php the_field('adress_piastow', 289); ?>
			</div>
			<div class="col-md-6">
				<div class="single-contact-container">
					<p><?php the_field('phone_piastow', 289); ?></p>
					<p><?php the_field('faks_piastow', 289); ?></p>
					<p><a href="mailto:<?php the_field('email_piastow', 289); ?>"><?php the_field('email_piastow', 289); ?></a></p>
					<a href = "mailto:<?php the_field('email_piastow', 289); ?>" class="my-button">Wyślij wiadomość</a>
				</div>
			</div>
		</div>
	</div>
	<!--end of department Piastow-->

</div>
<!-- end of contact -->

<!--partners section-->
<?php get_template_part( 'template-parts/content-partners' ); ?>
<!--end of partners section-->
<!--contact section-->
<?php get_template_part( 'template-parts/content-contact-section' ); ?>
<!--end of contact section-->
<?php get_footer(); ?>
</div>


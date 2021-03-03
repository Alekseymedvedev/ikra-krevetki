<?php
/*
Template Name: Страница О производстве
*/

get_header();
?>

<main id="primary" class="site-main">
<h1 class="entry-title">
	
<?php the_title(); ?>
</h1>
	<?php woocommerce_breadcrumb(); ?>
		<section class="about-page">
			
			<div class="about-page__container">
				<div class="about-page__inner flex">
					<div class="about-page__box-img">
						<img class="about-page__img" src="<?php the_field('about-page-img'); ?>" alt="">
					</div>
					<div class="about-page__box">
						<div class="about-page__title">
							<?php the_field('about-page__title'); ?>
						</div>
						<div class="about-page__text">
							<?php the_field('about-page__text-1'); ?>
						</div>
						<div class="about-page__text">
							<?php the_field('about-page__text-2'); ?>
						</div>
						<div class="about-page__text">
							<?php the_field('about-page__text-3'); ?>
						</div>
						<div class="about-page__text">
							<?php the_field('about-page__text-4'); ?>
						</div>
						<div class="about-page__text">
							<?php the_field('about-page__text-5'); ?>
						</div>
					</div>
				</div>
			</div>

		</section>
	</main><!-- #main -->

	<?php
	get_footer();

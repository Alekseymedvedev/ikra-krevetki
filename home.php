<?php
/*
Template Name: Главная страница
*/

// $name='header-{header-home}.php';

// get_header( $name, $args ); 
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}
get_header('home');
?>
<main id="primary" class="site-main">



	<div class="section top-slider">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<?php if (have_rows('top-slider')) : while (have_rows('top-slider')) : the_row(); ?>
						<div class="swiper-slide" style="background-image: url();">
							<div class="top-slider__box">
								<div class="container">

									<div class="top-slider__item">
										<img class="top-slde-img-1" src="<?php the_sub_field('top-slider-img-1'); ?>" alt="">
										<img class="top-slde-img-2" src="<?php the_sub_field('top-slider-img-2'); ?>" alt="">
										<div class="top-slider__item-title">
											<?php the_sub_field('top-slider__item-title'); ?>
										</div>
										<div class="top-slider__item-text">
											<?php the_sub_field('top-slider__item-text'); ?>
										</div>
										<a class="top-slider__item-btn" href="<?php echo get_permalink(wc_get_page_id('shop')); ?>">Перейти в каталог</a>
									</div>
								</div>
							</div>
						</div>
				<?php endwhile;
				else : endif; ?>
			</div>
			<div class="swiper-pagination"></div>
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
		</div>
	</div>
	<!-- products-section start------------------------------------------------------------------------------------ -->
	<section class="products-section" style="background-image: url(images/products-section-bg.png);">
		<div class="container">
			<h2 class="products-section__title title">
				<?php the_field('products-section__title'); ?>
			</h2>
			<div class="products-section__inner flex">
				<?php echo do_shortcode('[recent_products per_page=7]')  ?>
			</div>
			<div class="products-section__link-box">

				<a class="products-section__link btn" href="<?php echo get_permalink(wc_get_page_id('shop')); ?>">Весь каталог</a>
			</div>
		</div>
	</section>

	<!-- products-section end------------------------------------------------------------------------------------ -->

	<!-- advantages start------------------------------------------------------------------------------------ -->
	<section class="advantages" style="background-image: url(<?php the_field('advantages-bg'); ?>);">
		<div class="container">
			<h2 class="advantages__title title">
				<?php the_field('advantages__title'); ?>
			</h2>
			<div class="advantages__inner flex">
				<?php if (have_rows('advantages')) : while (have_rows('advantages')) : the_row(); ?>
						<div class="advantages__item">
							<div class="advantages__item-icon">
								<img src="<?php the_sub_field('advantages-img'); ?>" alt="">
							</div>
							<div class="advantages__item-title">
								<?php the_sub_field('advantages__item-title'); ?>
							</div>
							<div class="advantages__item-text">
								<?php the_sub_field('advantages__item-text'); ?>
							</div>
						</div>
				<?php endwhile;
				else : endif; ?>
			</div>
		</div>
	</section>
	<section class="advantages advantages-slider" style="background-image: url(<?php the_field('advantages-bg'); ?>);">
		<div class="container">
			<h2 class="advantages__title title">
				<?php the_field('advantages__title'); ?>
			</h2>
			<div class="advantages__inner flex">

				<div class="advantages-container ">
					<div class="swiper-wrapper">
						<?php if (have_rows('advantages')) : while (have_rows('advantages')) : the_row(); ?>
								<div class="swiper-slide">
									<div class="advantages__item">
										<div class="advantages__item-icon">
											<img src="<?php the_sub_field('advantages-img'); ?>" alt="">
										</div>
										<div class="advantages__item-title">
											<?php the_sub_field('advantages__item-title'); ?>
										</div>
										<div class="advantages__item-text">
											<?php the_sub_field('advantages__item-text'); ?>
										</div>
									</div>
								</div>
						<?php endwhile;
						else : endif; ?>
					</div>
					<div class="swiper-pagination"> </div>

				</div>










			</div>
		</div>
	</section>
	<!-- advantages end------------------------------------------------------------------------------------ -->


	<!-- reviews start------------------------------------------------------------------------------------ -->
	<section class="reviews">
		<div class="container">
			<h2 class="reviews__title title">
				<?php the_field('reviews__title'); ?>
			</h2>
			<div class="reviews-container ">
				<div class="swiper-wrapper">
					<?php if (have_rows('reviews')) : while (have_rows('reviews')) : the_row(); ?>
							<div class="swiper-slide">
								<div class="reviews__item">
									<div class="reviews__item-img">
										<img src="<?php the_sub_field('reviews__item-img'); ?>" alt="">
									</div>
									<div class="reviews__item-title">
										<?php the_sub_field('reviews__item-title'); ?>
									</div>
									<div class="reviews__item-text1">
										<?php the_sub_field('reviews__item-text1'); ?>
									</div>
									<div class="reviews__item-text">
										<?php the_sub_field('reviews__item-text'); ?>
									</div>
								</div>
							</div>
					<?php endwhile;
					else : endif; ?>
				</div>
				<div class="swiper-pagination"> </div>
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
		</div>
	</section>

	<!-- reviews end------------------------------------------------------------------------------------ -->

	<!-- articles-section start------------------------------------------------------------------------------------ -->
	<section class="articles-section">
		<div class="container">
			<h2 class="articles-section__title title">
				Последние статьи
			</h2>
			<div class="more-article__inner flex-start">
				<?php if (have_posts()) : ?>

					<?php
					global $query_string;
					$args = array(
						'posts_per_page'    => 10,

					);
					query_posts($query_string . "&order=ASC");
					while (have_posts()) {

					?>
						<div class="articles-section__item">
							<span class="articles-section__time">
								<?php the_time('d.m.Y '); ?>
							</span>
							<?php the_post();
							the_post_thumbnail(); ?>
							<h3 class="articles-section__subtitle">
								<a href="<?php the_permalink() ?>">
									<?php the_title(); ?>
								</a>
							</h3>

						</div>
				<?php
					}
				else :
				endif;
				wp_reset_query(); ?>
			</div>
			<div class="articles-section__link-box">

			<a class="articles-section__link btn" href="
				<?php
				$category_id = 1;
				echo get_category_link( $category_id ); 
				 ?>">Перейти в блог</a>
			</div>
		</div>
	</section>
	<!-- articles-section end------------------------------------------------------------------------------------ -->

	<!-- license start------------------------------------------------------------------------------------ -->
	<section class="license">
		<div class="container">
			<div class="license__title title">
				<?php the_field('license__title'); ?>
			</div>
			<div class="license__inner">
				<div class="license-container">
					<div class="swiper-wrapper">
						<?php if (have_rows('license')) : while (have_rows('license')) : the_row(); ?>
								<div class="swiper-slide">
									<div class="license__item-img">
										<img src="<?php the_sub_field('license__item-img'); ?>" alt="">
									</div>
								</div>
						<?php endwhile;
						else : endif; ?>
					</div>
					<div class="swiper-pagination"> </div>
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>

				</div>
			</div>

		</div>
	</section>
	<!-- license end------------------------------------------------------------------------------------ -->

</main>


<?php
get_footer();

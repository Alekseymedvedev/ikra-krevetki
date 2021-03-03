<?php
/*
Template Name: Страница контактов
*/

// $name='header-{header-home}.php';

// get_header( $name, $args ); 
?>

<?php get_header(); ?>
<main id="primary" class="site-main">
	<h1 class="entry-title">
		<?php the_title(); ?>
	</h1>
		<?php  woocommerce_breadcrumb(); ?>
	<section class="contact-page">
		<div class="contact-page__container">
			<div class="contact-page__inner flex">
				<div class="contact-page__box">
					<div class="contact-page__item flex">
						<div class="contact-page__item-box">
							<?php the_field('contact-page__item-box-1'); ?>
							<div class="contact-page__item-text contact-page__phone">
								<?php the_field('contact-page__phone'); ?>
							</div>
						</div>
						<div class="contact-page__item-box">
							<?php the_field('contact-page__item-box-2'); ?>
							<div class="contact-page__item-text contact-page__email">
								<?php the_field('contact-page__email'); ?>
							</div>
						</div>
					</div>
					<div class="contact-page__item flex">
						<div class="contact-page__item-box">
							<?php the_field('contact-page__item-box-3'); ?>
							<div class="contact-page__item-text contact-page__address">
								<?php the_field('contact-page__address'); ?>
							</div>
						</div>
					</div>
					<div class="contact-page__details">
						<div class="contact-page__item-box">
							<?php the_field('contact-page__item-box-4'); ?>
						</div>
						<div class="contact-page__details-title flex">
							<?php the_field('contact-page__details-title'); ?>
							<div class="contact-page__details-title--box">
								<span><?php the_field('inn'); ?></span>
								<span><?php the_field('ogrn'); ?></span>
							</div>
							<div class="contact-page__details-title--box">
								<span><?php the_field('kpp'); ?></span>
								<span><?php the_field('okpo'); ?></span>
							</div>


						</div>
						<div class="contact-page__details-title">
							<?php the_field('contact-page__details-title-1'); ?>
							<span><?php the_field('contact-page__details-title-2'); ?></span>
						</div>
						<div class="contact-page__details-title">
							Д<?php the_field('contact-page__details-title-3'); ?>
							<span><?php the_field('contact-page__details-title-4'); ?></span>
						</div>
						<div class="contact-page__details-title">
							<?php the_field('contact-page__details-title-5'); ?>
							<span><?php the_field('contact-page__details-title-6'); ?></span>
						</div>

					</div>
					<div class="contact-page__details">
						<div class="contact-page__details-title">
							<?php the_field('contact-page__details-title-7'); ?>
							<span><?php the_field('contact-page__details-title-8'); ?></span>
						</div>
					</div>
					<div class="contact-page__name-box flex">
						<div class="contact-page__icon-box">
							<img src="<?php the_field('contact-page-img'); ?>" alt="">
						</div>
						<div class="contact-page__name">
							<?php the_field('contact-page__name'); ?>
							<div class="contact-page__name-text">
								<?php the_field('contact-page__name-text'); ?>
							</div>
						</div>
					</div>


				</div>
				<div class="contact-page__box-img">
					<img src="<?php the_field('contact-page__box-img'); ?>" alt="">
					<div class="contact-page__form-box">
						<?php echo do_shortcode('[contact-form-7 id="299" title="Контактная форма 1"]'); ?>
						<div class="check-item">
								<label class="check-label">
									Я даю согласие на обработку персональных данных
									<input class="check-input" type="checkbox" checked>
									<span class="check-style"></span>
								</label>
							</div>
				
					</div>
				</div>
			</div>
		
			<div class="row relation">
				<div class="relation__offset"></div>
				<div class="relation__content">
					<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2237.769969532539!2d37.499058815983766!3d55.88400473058864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b538339bef43d5%3A0x131c20356edab099!2z0JjQttC-0YDRgdC60LDRjyDRg9C7LiwgMywg0JzQvtGB0LrQstCwLCAxMjU1OTk!5e0!3m2!1sru!2sru!4v1612856528530!5m2!1sru!2sru"
					width="1170" height="384" frameborder="0" style="border:0;" allowfullscreen=""
					aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>
		</div>
	</section>

</main><!-- #main -->

<?php
get_footer();
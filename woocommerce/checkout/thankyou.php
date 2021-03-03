<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;
?>
<div class="thankyou-page">
	<?php woocommerce_breadcrumb(); ?>
	<div class="page-container">
		<div class="thankyou-page__wrraper flex-start">
			<?php get_sidebar(); ?>
			<div class="thankyou-page__inner">
				<div class="woocommerce-order">

					<?php
					if ( $order ) :

						do_action( 'woocommerce_before_thankyou', $order->get_id() );
						?>

						<?php if ( $order->has_status( 'failed' ) ) : ?>

							<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed"><?php esc_html_e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce' ); ?></p>

							<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
								<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php esc_html_e( 'Pay', 'woocommerce' ); ?></a>
								<?php if ( is_user_logged_in() ) : ?>
									<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php esc_html_e( 'My account', 'woocommerce' ); ?></a>
								<?php endif; ?>
							</p>

							<?php else : ?>
								<div class="thankyou-page__box">
									<h3 class="thankyou-page__title">
										Ваш заказ принят!
									</h3>
									<p class="thankyou-page__text woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">В ближайшее время мы свяжемся с Вами для уточнения деталей заказа</p>
								</div>

							<?php endif; ?>
						<?php endif; ?>
						
					</div>
					<div class="cart-page__btn-box flex">
					<a class="cart-page__btn button button--off-icon" href="<?php echo  home_url( $path, $scheme ); ?>">Вернуться на главную</a>
					<a class="cart-page__btn button button--off-icon" href="<?php echo get_permalink(wc_get_page_id('shop')); ?>">Сделать следующий заказ</a>

				</div>
				</div>

			</div>
		</div>
	</div>


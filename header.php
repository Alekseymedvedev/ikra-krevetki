<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package silver-ponds-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- header  start------------------------------------------------------------------------------------ -->
	<header id="header" class="header ">

		<div class="header__inner flex">


			<div class="header__logo">
				<a href="<?php echo  home_url($path, $scheme); ?>">
					<img src="<?php
								$page_id = 265;
								the_field('header__logo', $page_id); ?>" alt="">
				</a>
			</div>
			<div class=" header__menu-box menu">
				<?php primary_menu(); ?>
			</div>
			<div class="header__box flex">
				<div class="header__search">
					<?php get_search_form($echo = true); ?>
				</div>

				<div class="header__contacts-box">
					<div class="header__contacts">
						<a class="header__phone" href="tel:+<?php $page_id = 265;
															the_field('header__phone-link ', $page_id); ?>">
							<?php $page_id = 265;
							the_field('header__phone', $page_id); ?>
						</a>
						<a class="header__email" href="mailto:<?php the_field('header__email', $page_id); ?>">
							<?php $page_id = 265;
							the_field('header__email', $page_id); ?>
						</a>
					</div>
				</div>
				<div class="header__cart">
					<?php fish_woocommerce_cart_link(); ?>
				</div>
				<div class="menu__btn">
					<div class="menu__btn-item"></div>

				</div>

			</div>

		</div>

	</header>
	<!-- header  end------------------------------------------------------------------------------------ -->
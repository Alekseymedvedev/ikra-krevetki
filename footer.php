<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package silver-ponds-theme
 */

?>

<footer id="footer" class="footer">
	<div class="container">
		<div class="footer__inner flex">
			<div class="header__logo">
				<a href="<?php echo  home_url($path, $scheme); ?>">
					<img src="<?php
								$page_id = 265;
								the_field('header__logo', $page_id); ?>" alt="">
				</a>
			</div>

			<?php secondary_menu(); ?>

		</div>
		<div class="footer__contacts flex">
			<a class="footer__contacts-link footer__address" target="_blank" href="<?php
																					$page_id = 265;
																					the_field('footer__address-link', $page_id); ?>">
				<?php
				$page_id = 265;
				the_field('footer__address', $page_id); ?>

			</a>
			<a class="footer__contacts-link footer__phone" target="_blank" href="tel:+<?php
																						$page_id = 265;
																						the_field('footer__phone-link', $page_id); ?>">
				<?php
				$page_id = 265;
				the_field('footer__phone', $page_id); ?>

			</a>
			<a class="footer__contacts-link footer__email" target="_blank" href="mailto:<?php
																						$page_id = 265;
																						the_field('footer__email1', $page_id); ?>">
				<?php
				$page_id = 265;
				the_field('footer__email1', $page_id); ?>
			</a>
			<span class="footer__contacts-link footer__schedule">
				<?php
				$page_id = 265;
				the_field('footer__schedule', $page_id); ?>
			</span>
		</div>


	</div>
	<div class="footer__copy">
		<?php
		$page_id = 265;
		the_field('footer__copy', $page_id); ?>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>
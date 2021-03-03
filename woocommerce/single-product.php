<?php

/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

get_header(); ?>
<h1 class="entry-title">

	<?php the_title(); ?>
</h1>
<div class="custom-single-product">
	<?php

	do_action('woocommerce_before_main_content');

	?>
	<div class="container flex-start">

		<?php

		get_sidebar(); ?>
		<div class="single-product__inner flex-start">
			<?php while (have_posts()) : ?>
				<?php the_post(); ?>

				<?php

				wc_get_template_part('content', 'single-product'); ?>

			<?php endwhile; // end of the loop. 
			?>

		</div>

	</div>
	</div>
	<?php
	get_footer('shop');
	?>
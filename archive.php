<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package silver-ponds-theme
 */

get_header();
?>

<main id="primary" class="site-main blog-page">

	<?php if ( have_posts() ) : ?>


		<?php
		the_archive_title( '<h1 class="page-title">', '</h1>' );
		the_archive_description( '<div class="archive-description">', '</div>' );
		woocommerce_breadcrumb(); 
		?>
		
		<div class="more-article__inner blog-page__inner flex-start">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>

				<div class="more-article__item">
					<div class="more-article__item-box">
						<?php the_post_thumbnail();?>
						<h2 class="more-article__item-title " >  <a class=" " href="<?php the_permalink() ?>"> <?php the_title(); ?> </a></h2>

						<div class="more-article__item-text">
							<?php the_excerpt();?>
						</div>
					</div>
					<div class="more-article__item-link-box">
						<a class="more-article__item-link" href="<?php the_permalink() ?>">Читать полностью</a>
					</div>
					
				</div>
				<?php
			endwhile;
			?>
		</div>
		<?php
		the_posts_navigation();

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif;
	?>

</main><!-- #main -->

<?php
get_footer();

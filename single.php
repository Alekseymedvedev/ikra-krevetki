<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package silver-ponds-theme
 */

get_header();
?>


<h1 class="entry-title">
    <?php the_title(); ?>
</h1>
<?php woocommerce_breadcrumb(); ?>
<div class="article-page__wrraper">

    <section class="article-page__description">
        <div class="contact-page__container">
            <div class="article-page__social">
                <div class="article-page__social-icon flex">
                    <span class="article-page__social-look">
                        <?php setPostViews(get_the_ID()); ?>
                        <?php echo getPostViews(get_the_ID()); ?>
                    </span>
                    <div class="article-page__social-rewievs">
                        <?php global $product;

                        if (!wc_review_ratings_enabled()) {
                            return;
                        }
                        $the_product =  get_field('article-page__poduct-id');
                        $rating_count = wc_get_product($the_product)->get_rating_count();
                        $review_count = wc_get_product($the_product)->get_review_count();
                        $average      = wc_get_product($the_product)->get_average_rating();

                        if ($rating_count > 0) : ?>

                            <div class="woocommerce-product-rating">
                                <?php echo wc_get_rating_html($average, $rating_count); ?>
                                <?php if (comments_open()) : ?>

                                    <a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<?php printf(_n('%s customer review', '%s customer reviews', $review_count, 'woocommerce'), '<span class="count">' . esc_html($review_count) . '</span>)'); ?></a>

                                <?php endif ?>
                            </div>

                        <?php endif; ?>
                    </div>

                </div>

                <div class="article-page__social-item">
                    <?php
                    echo '<span class="woocommerce-product-rating-text">Поделиться:</span>';
                    echo do_shortcode('[Sassy_Social_Share]');

                    ?>
                </div>
            </div>

            <div class="article-page__inner flex">
                <div class="article-page__box">
                    <div class="article-page__box-img">
                        <img src="<?php the_field('article-page__box-img'); ?>" alt="">
                    </div>
                    <div class="article-page__text article-page__description-text">
                        <?php the_field('article-page__description-text-1'); ?>

                    </div>

                    <div class="article-page__text article-page__description-text">

                        <?php the_field('article-page__description-text-2'); ?>
                    </div>
                    <div class="article-page__text-bold">
                        <?php the_field('article-page__description-text-3'); ?>
                    </div>
                </div>


            </div>
            <table class="article-page__table">
                <tr class="article-page__table-line">
                    <td class="article-page__table-title">
                        <?php the_field('article-page__table-title-1'); ?>
                    </td>
                    <th class="article-page__table-title">
                        <?php the_field('article-page__table-title-2'); ?>
                    </th>
                    <th class="article-page__table-title">
                        <?php the_field('article-page__table-title-3'); ?>
                    </th>
                    <th class="article-page__table-title">
                        <?php the_field('article-page__table-title-4'); ?>
                    </th>
                </tr>

                <?php if (have_rows('article-page__table-subline')) : while (have_rows('article-page__table-subline')) : the_row(); ?>
                        <tr class="article-page__table-subline">
                            <td class="article-page__table-text"><span>
                                    <?php the_sub_field('article-page__table-text-5'); ?>
                                </span>
                                <?php the_sub_field('article-page__table-text-1'); ?>
                            </td>
                            <th class="article-page__table-text">
                                <?php the_sub_field('article-page__table-text-2'); ?>
                            </th>
                            <th class="article-page__table-text">
                                <?php the_sub_field('article-page__table-text-3'); ?>
                            </th>
                            <th class="article-page__table-text">
                                <?php the_sub_field('article-page__table-text-4'); ?>
                            </th>
                        </tr>
                <?php endwhile;
                else : endif; ?>

            </table>
            <div class="article-page__table-description">
                <?php the_field('article-page__table-description'); ?>
            </div>
        </div>
    </section>

    <section class="article-page__danger">
        <div class="contact-page__container">
            <h2 class="article-page__title">
                <?php the_field('article-page__title'); ?>
            </h2>
            <div class="article-page__text article-page__danger-text">
                <?php the_field('article-page__danger-text-1'); ?>
            </div>
            <ul>
                <?php if (have_rows('article-page__danger-list')) : while (have_rows('article-page__danger-list')) : the_row(); ?>
                        <li class="article-page__danger-list">
                            <?php the_sub_field('article-page__danger-list-1'); ?>
                        </li>
                <?php endwhile;
                else : endif; ?>
            </ul>
            <div class="article-page__danger-attention">
                <span>
                    <?php the_field('article-page__danger-attention-1'); ?>
                </span>
                <?php the_field('article-page__danger-attention-2'); ?>
            </div>
            <div class="article-page__text article-page__danger-text">
                <?php the_field('article-page__danger-text-2'); ?>
            </div>
        </div>
    </section>

    <section class="article-page__advantages">
        <div class="contact-page__container">
            <h2 class="article-page__title">
                <?php the_field('article-page__advantages-title'); ?>
            </h2>
            <div class="article-page__text article-page__advantages-text">
                <?php the_field('article-page__advantages-text-1'); ?>
            </div>
            <div class="article-page__text article-page__advantages-text">
                <?php the_field('article-page__advantages-text-2'); ?>
            </div>
            <ul>
                <?php if (have_rows('article-page__advantages')) : while (have_rows('article-page__advantages')) : the_row(); ?>
                        <li class="article-page__advantages-list" data-number="<?php the_sub_field('article-page__advantages-list-attr'); ?>">
                            <span>
                                <?php the_sub_field('article-page__advantages-list-1'); ?>
                            </span>
                            <?php the_sub_field('article-page__advantages-list-2'); ?>
                    <?php endwhile;
                else : endif; ?>

            </ul>

            <div class="article-page__text article-page__advantages-text">
                <?php the_field('article-page__advantages-text-3'); ?>
            </div>
        </div>
    </section>
    <section class="article-page__change" style="background-image: url(<?php the_field('article-page__change-img'); ?>);">
        <div class="article-page__change-inner">
            <div class="contact-page__container">

                <h2 class="article-page__change-title">
                    <?php the_field('article-page__change-title'); ?>
                </h2>
                <div class="article-page__change-text">
                    <?php the_field('article-page__change-text'); ?>
                </div>
                <a class="article-page__change-link" href="<?php echo get_permalink(wc_get_page_id('shop')); ?>">Посмотреть каталог </a>
            </div>
        </div>
    </section>
    <section class="more-article">
        <div class="more-article__inner">
            <div class="more-article__title title">
                Читайте другие статьи
            </div>

            <div class="more-article-container">
                <div class="swiper-wrapper">

                    <?php fish_posts(); ?>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

        </div>

    </section>
    <div class="related_posts">

    </div>
</div>




<?php
get_footer();

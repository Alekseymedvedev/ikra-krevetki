<?php
/*
Template Name: Страница Оплата и доставка
*/

get_header();
?>

<main id="primary" class="site-main delevry-page">
	<h1 class="entry-title">

		<?php the_title(); ?>
	</h1>
	<?php woocommerce_breadcrumb(); ?>
	<section class="delevry-page-section">
        <div class="container">
            <div class="delevry-page__inner ">
                <div class="delevry-page-img-box">
                    
                <img src="<?php the_field('delevry-page-img'); ?>" alt="">
                </div>
                <h1 class="delevry-page__title">
                    Доставка по Москве в пределах и за пределами МКАД
                </h1>
                <div class="delevry-page__box">
                    <div class="delevry-page__text-bold">
                        Ежедневно. С понедельника по воскресение.
                    </div>
                    <div class="delevry-page__text">
                        Доставка осуществляется на следующий день, при заказе до 14:00.
                    </div>
                    <ul>
                        <li class="delevry-page__list">
                            Доставка внутри МКАД - <span>300 руб.</span> (при заказе до 10 000 руб.)
                        </li>
                        <li class="delevry-page__list">
                            Доставка внутри МКАД - <span>БЕСПЛАТНО</span> (при заказе от 10 000 руб.)
                        </li>
                        <li class="delevry-page__list">
                            Доставка за пределы МКАД (до 20 км.) - <span>по согласованию.</span> Рассчитывается
                            индивидуально
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
</main><!-- #main -->

<?php
get_footer();

<?php

/**
 * silver-ponds-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package silver-ponds-theme
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('silver_ponds_theme_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function silver_ponds_theme_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on silver-ponds-theme, use a find and replace
		 * to change 'silver-ponds-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('silver-ponds-theme', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		// register_nav_menus(
		// 	array(
		// 		'menu-1' => esc_html__( 'Primary', 'silver-ponds-theme' ),
		// 	)
		// );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'silver_ponds_theme_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'silver_ponds_theme_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function silver_ponds_theme_content_width()
{
	$GLOBALS['content_width'] = apply_filters('silver_ponds_theme_content_width', 640);
}
add_action('after_setup_theme', 'silver_ponds_theme_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function silver_ponds_theme_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'silver-ponds-theme'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'silver-ponds-theme'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'silver_ponds_theme_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function silver_ponds_theme_scripts()
{
	wp_enqueue_style('silver-ponds-theme-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('silver-ponds-theme-style', 'rtl', 'replace');

	wp_enqueue_script('silver-ponds-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'silver_ponds_theme_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
	require get_template_directory() . '/inc/woocommerce.php';
}


/**
 * подключение стилей и скриптов
 */

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');
function style_theme()
{
	wp_enqueue_style('new_style_libs', get_template_directory_uri() . '/css/libs.min.css');
	wp_enqueue_style('new_style', get_template_directory_uri() . '/css/style.min.css');
}
function scripts_theme()
{

	wp_enqueue_script('new_script_libs', get_template_directory_uri() . '/js/libs.min.js');
	wp_enqueue_script('new_script', get_template_directory_uri() . '/js/main.js');
}
// add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
// function my_scripts_method() {

// 	wp_deregister_script( 'jquery-core' );
// 	wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
// 	wp_enqueue_script( 'jquery' );
// }


/**
 * регистрация меню
 */


register_nav_menus(array(
	'primary'   => esc_html__('Основное меню', 'art-starter-theme'),
	'secondary' => esc_html__('Меню в подвале сайта', 'art-starter-theme'),
));


if (!function_exists('ast_primary_menu')) {
	function primary_menu()
	{
		wp_nav_menu(array(
			'container'      => 'nav',
			'menu_class'     => 'primary-menu',
			'theme_location' => 'primary',
			'fallback_cb'     => '__return_empty_string',
			'menu_class'     => 'header__menu-list flex'
		));
	}
}
if (!function_exists('ast_secondary_menu')) {
	function secondary_menu()
	{
		wp_nav_menu(array(
			'container'      => 'nav',
			'menu_class'     => 'secondary-menu',
			'theme_location' => 'secondary',
			'fallback_cb'     => '__return_empty_string',
			'menu_class'     => 'header__menu-list flex '
		));
	}
}
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}



/**
 * вывод корзины
 */
function wooexperts_remove_block_data()
{
	remove_filter('woocommerce_add_to_cart_fragments', 'silver_ponds_theme_woocommerce_cart_link_fragment');
}
if (!function_exists('estore_woocommerce_cart_link_fragment')) {
	// *
	//  * Cart Fragments.
	//  *
	//  * Ensure cart contents update when products are added to the cart via AJAX.
	//  *
	//  * @param array $fragments Fragments to refresh via AJAX.
	//  * @return array Fragments to refresh via AJAX.

	add_filter('woocommerce_add_to_cart_fragments', 'estore_woocommerce_cart_link_fragment');
	function estore_woocommerce_cart_link_fragment($fragments)
	{
		wooexperts_remove_block_data();
		ob_start();
		estore_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
function fish_woocommerce_cart_link()
{
?>
	<a class="cart-contents " href="<?php echo esc_url(wc_get_cart_url()); ?>">
		<span class="amount"> Корзина </span>
		<span class="count"><?php echo wp_kses_data(WC()->cart->get_cart_contents_count()); ?></span>


	</a>
	<?php
}

/**
 *размер изображения товара на главной
 **/
add_filter('woocommerce_get_image_size_thumbnail', 'add_thumbnail_size', 1, 10);
function add_thumbnail_size($size)
{

	$size['width'] = 170;
	$size['height'] = 120;
	$size['crop']   = 1; //0 - не обрезаем, 1 - обрезка
	return $size;
}

/**
 *размер изображения на странице товара
 **/
add_filter('woocommerce_get_image_size_single', 'add_single_size', 1, 10);
function add_single_size($size)
{

	$size['width'] = 270;
	$size['height'] = 270;
	$size['crop']   = 0;
	return $size;
}


/**
 *Изминение текста кнопки "В корзину"
 **/
add_filter('add_to_cart_text', 'woo_custom_product_add_to_cart_text');
add_filter('woocommerce_product_add_to_cart_text', 'woo_custom_product_add_to_cart_text');

function woo_custom_product_add_to_cart_text()
{

	return __('Добавить в корзину', 'woocommerce');
}

/**
 * Убрать разделитель в хлебных крошках
 **/

if (!function_exists('woocommerce_breadcrumb')) {

	/**
	 * Output the WooCommerce Breadcrumb.
	 *
	 * @param array $args Arguments.
	 */
	function woocommerce_breadcrumb($args = array())
	{
		$args = wp_parse_args(
			$args,
			apply_filters(
				'woocommerce_breadcrumb_defaults',
				array(
					'delimiter'   => '',
					'wrap_before' => '<nav class="woocommerce-breadcrumb">',
					'wrap_after'  => '</nav>',
					'before'      => '',
					'after'       => '',
					'home'        => _x('Home', 'breadcrumb', 'woocommerce'),
				)
			)
		);

		$breadcrumbs = new WC_Breadcrumb();

		if (!empty($args['home'])) {
			$breadcrumbs->add_crumb($args[''], apply_filters('woocommerce_breadcrumb_home_url', home_url()));
		}

		$args['breadcrumb'] = $breadcrumbs->generate();

		/**
		 * WooCommerce Breadcrumb hook
		 *
		 * @hooked WC_Structured_Data::generate_breadcrumblist_data() - 10
		 */
		do_action('woocommerce_breadcrumb', $breadcrumbs, $args);

		wc_get_template('global/breadcrumb.php', $args);
	}
}


/**
 * Убрать слово "Рубрики" из заголовка страницы
 **/
add_filter('get_the_archive_title', function ($title) {

	if (is_category()) {

		$title = single_cat_title('', false);
	} elseif (is_tag()) {

		$title = single_tag_title('', false);
	} elseif (is_author()) {

		$title = '<span class="vcard">' . get_the_author() . '</span>';
	}

	return $title;
});

add_theme_support('post-thumbnails');


/**
 * Изменения заголовков табов, в карточке товара
 **/

add_filter('woocommerce_product_tabs', 'wootabs_rename', 98);
function wootabs_rename($tabs)
{
	$tabs['description']['title'] = __('Описание товара');
	$tabs['reviews']['title'] = __('Отзывы');
	return $tabs;
}


/**
 * Добавление новых табов в карточку товара
 */
add_filter('woocommerce_product_tabs', 'woo_new_product_tab');
function woo_new_product_tab($tabs)
{

	$tabs['test_tab'] = array(
		'title' 	=> __('Характеристики', 'woocommerce'),
		'priority' 	=> 50,
		'callback' 	=> 'woo_new_product_tab_content'
	);
	return $tabs;
}
function woo_new_product_tab_content()
{
	echo '<h2>Характеристики</h2>';
	echo the_field('specifications-1');
	echo '<br>';
	echo '<br>';
	echo the_field('specifications-2');
	echo '<br>';
	echo '<br>';
	echo the_field('specifications-3');
}


/* 
*Выводим кол-во просмотров поста 
*/
function getPostViews($postID)
{
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if ($count == '') {
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
		return "0 просмотров";
	}
	echo _e('', 'dot-b');
	return $count;
}
function setPostViews($postID)
{
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if ($count == '') {
		$count = 0;
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
	} else {
		$count++;
		update_post_meta($postID, $count_key, $count);
	}
}

/**
 *	Вывод похожих постов на странице статей
 **/

function fish_posts()
{
	$categories = get_the_category($post->ID);
	if ($categories) {
		$category_ids = array();
		foreach ($categories as $individual_category) $category_ids[] = $individual_category->term_id;
		$args = array(
			'category__in' => $category_ids,
			'post__not_in' => array($post->ID),
			'showposts' => 3,
			'caller_get_posts' => 1
		);
		$my_query = new wp_query($args);
		if ($my_query->have_posts()) {
			while ($my_query->have_posts()) {
				$my_query->the_post();
	?>
				<div class="swiper-slide ">
					<div class="more-article__item">
						<div class="more-article__item-box">
							<?php get_the_ID();
							the_post_thumbnail(); ?>
							<h2 class="more-article__item-title "><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
							<div class="more-article__item-text">
								<?php the_excerpt(); ?>
							</div>
						</div>
						<div class="more-article__item-link-box">
							<a class="more-article__item-link" href="<?php the_permalink() ?>">Читать полностью</a>
						</div>
					</div>
				</div>
<?php
			}
		}
		wp_reset_query();
	}
}

/**
 *Удаление выбора поиска в каталоге товаров
 **/
add_filter('gettext', 'translate_text');
add_filter('ngettext', 'translate_text');
function woo_catalog_orderby($orderby)
{

	unset($orderby["popularity"]); // Сортировка по популярности
	unset($orderby["rating"]); // Сортировка по рейтингу
	unset($orderby["date"]);    // Сортировка по дате
	unset($orderby["title"]);	 // Сортировка по названию
	unset($orderby["menu_order"]); // Сортировка по умолчанию (можно определить порядок в админ панели)
	return $orderby;
}
add_filter("woocommerce_catalog_orderby", "woo_catalog_orderby", 20);



/**
 * Премеиновать сортировку в катологе
 **/
add_filter('woocommerce_catalog_orderby', 'wc_customize_product_sorting');

function wc_customize_product_sorting($sorting_options)
{
	$sorting_options = array(
		'price'      => __('Возрастанию цены', 'woocommerce'),
		'price-desc' => __('Убыванию цены', 'woocommerce'),
	);

	return $sorting_options;
}


/**
 *Изменения в текста
 **/

add_filter('gettext', 'translate_text');
add_filter('ngettext', 'translate_text');

function translate_text($translated)
{
	$translated = str_ireplace('Подытог', 'Стоимость заказа:', $translated);
	$translated = str_ireplace('Итого', 'Итого к оплате:', $translated);
	$translated = str_ireplace('Доставка', 'Доставка:', $translated);
	$translated = str_ireplace('цены:', 'Убыванию цены', $translated);
	$translated = str_ireplace('отзыва клиентов', 'Отзыва', $translated);
	$translated = str_ireplace('отзыв клиента', 'Отзыв', $translated);
	$translated = str_ireplace('отзывов клиента', 'Отзывов', $translated);
	$translated = str_ireplace('В корзину', 'Добавить в корзину', $translated);
	$translated = str_ireplace('Следующие записи', 'Загрузить ещё', $translated);
	$translated = str_ireplace('Предыдущие записи', 'Загрузить ещё', $translated);
	$translated = str_ireplace('Товаров на странице: ', '', $translated);
	$translated = str_ireplace('Отображение', '', $translated);
	return $translated;
}

/***
 * *
 * Описание товара в каталоге
  */

add_action('woocommerce_after_shop_loop_item_title', 'add_short_description', 9);
function add_short_description()
{
	echo  the_excerpt();
}


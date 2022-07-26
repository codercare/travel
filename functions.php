<?php

/**
 * Dimas functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Dimas
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function dimas_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Dimas, use a find and replace
		* to change 'dimas' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('dimas', get_template_directory() . '/languages');

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'dimas'),
		)
	);

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
			'dimas_custom_background_args',
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
add_action('after_setup_theme', 'dimas_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dimas_content_width()
{
	$GLOBALS['content_width'] = apply_filters('dimas_content_width', 640);
}
add_action('after_setup_theme', 'dimas_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dimas_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'dimas'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'dimas'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__('Footer 1', 'dimas'),
			'id'            => 'footer-1',
			'description'   => esc_html__('Add widgets here.', 'dimas'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__('Footer 2', 'dimas'),
			'id'            => 'footer-2',
			'description'   => esc_html__('Add widgets here.', 'dimas'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__('Footer 3', 'dimas'),
			'id'            => 'footer-3',
			'description'   => esc_html__('Add widgets here.', 'dimas'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__('Footer 4', 'dimas'),
			'id'            => 'footer-4',
			'description'   => esc_html__('Add widgets here.', 'dimas'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action('widgets_init', 'dimas_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function dimas_scripts()
{
	wp_enqueue_style('dimas-google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap', array(), _S_VERSION);
	wp_enqueue_style('dimas-bootstrap', get_template_directory_uri() . '/assets/vendors/bootstrap/css/bootstrap.min.css', array(), _S_VERSION);
	wp_enqueue_style('dimas-fontawesome', get_template_directory_uri() . '/assets/vendors/fontawesome/css/all.min.css', array(), _S_VERSION);
	wp_enqueue_style('dimas-jquery-ui', get_template_directory_uri() . '/assets/vendors/jquery-ui/jquery-ui.min.css', array(), _S_VERSION);
	wp_enqueue_style('dimas-modal-video', get_template_directory_uri() . '/assets/vendors/modal-video/modal-video.min.css', array(), _S_VERSION);
	wp_enqueue_style('dimas-lightbox', get_template_directory_uri() . '/assets/vendors/lightbox/dist/css/lightbox.min.css', array(), _S_VERSION);
	wp_enqueue_style('dimas-slick', get_template_directory_uri() . '/assets/vendors/slick/slick.css', array(), _S_VERSION);
	wp_enqueue_style('dimas-slick-theme', get_template_directory_uri() . '/assets/vendors/slick/slick-theme.css', array(), _S_VERSION);
	wp_enqueue_style('dimas-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('dimas-style', 'rtl', 'replace');

	wp_enqueue_script('dimas-waypoints', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('dimas-bootstrap', get_template_directory_uri() . '/assets/vendors/bootstrap/js/bootstrap.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('dimas-jquery-ui', get_template_directory_uri() . '/assets/vendors/jquery-ui/jquery-ui.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('dimas-loopcounter', get_template_directory_uri() . '/assets/vendors/countdown-date-loop-counter/loopcounter.js', array(), _S_VERSION, true);
	wp_enqueue_script('dimas-counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.js', array(), _S_VERSION, true);
	wp_enqueue_script('dimas-modal-video', get_template_directory_uri() . '/assets/vendors/modal-video/jquery-modal-video.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('dimas-masonry', get_template_directory_uri() . '/assets/vendors/masonry/masonry.pkgd.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('dimas-lightbox', get_template_directory_uri() . '/assets/vendors/lightbox/dist/js/lightbox.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('dimas-slick', get_template_directory_uri() . '/assets/vendors/slick/slick.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('dimas-slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('dimas-custom', get_template_directory_uri() . '/assets/js/custom.min.js', array('jquery'), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'dimas_scripts');

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
 * Custom image sizes
 */
add_image_size('img_250x250', 250, 250, true);
add_image_size('img_315x250', 315, 250, true);
add_image_size('img_315x300', 315, 300, true);
add_image_size('img_322x555', 322, 555, true);
add_image_size('img_360x450', 360, 450, true);
add_image_size('img_365x305', 365, 305, true);
add_image_size('img_410x390', 410, 390, true);
add_image_size('img_460x255', 460, 255, true);
add_image_size('img_455x330', 455, 330, true);
add_image_size('img_480x540', 480, 540, true);
add_image_size('img_655x350', 655, 350, true);
add_image_size('img_750x438', 750, 438, true);
add_image_size('img_1920x800', 1920, 800, true);

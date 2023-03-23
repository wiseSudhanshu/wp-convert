<?php
/**
 * wp-convert functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wp-convert
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wp_convert_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on wp-convert, use a find and replace
		* to change 'wp-convert' to the name of your theme in all the template files.
	*/

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	// register_nav_menus(
	// 	array(
	// 		'menu-1' => esc_html__( 'Primary', 'wp-convert' ),
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
			'wp_convert_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'wp_convert_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_convert_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_convert_content_width', 640 );
}
add_action( 'after_setup_theme', 'wp_convert_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */



if( ! function_exists('wp_convert_register_nav_menus')) {
	function wp_convert_register_nav_menus() {
		register_nav_menus(
			array('primary-menu' => 'Top Menu')
		);
	}
	add_action( 'after_setup_theme', 'wp_convert_content_width' );
}


function load_my_scripts() {
    if ( is_page_template( 'convert.php' ) ) {
        // Load your scripts here using wp_enqueue_script()
		wp_enqueue_style( 'convert', get_template_directory_uri().'/assets/css/convert.css', array(), '1.0', 'all'  );
        wp_enqueue_script( 'convert', get_template_directory_uri().'/assets/JS/convert.js', array( 'jquery' ), '1.0', true );
		wp_enqueue_script( 'exchangeRates', get_template_directory_uri().'/assets/JS/exchangeRates.js', array('jquery'), '1.0', true );
    } else {
		wp_enqueue_style( 'styles', get_template_directory_uri().'/assets/css/styles.css', array(), '1.0', 'all'  );
		wp_enqueue_script( 'script', get_template_directory_uri().'/assets/JS/script.js', array('jquery'), '1.0', true );
	}
}
add_action( 'wp_enqueue_scripts', 'load_my_scripts' );

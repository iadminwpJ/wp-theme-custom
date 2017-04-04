<?php
/**
 * iAdminWP functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package iAdminWP
 */

if ( ! function_exists( 'iadminwp_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function iadminwp_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on iAdminWP, use a find and replace
	 * to change 'iadminwp' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'iadminwp', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'iadminwp' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'iadminwp_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'iadminwp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function iadminwp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'iadminwp_content_width', 640 );
}
add_action( 'after_setup_theme', 'iadminwp_content_width', 0 );

/**
* Header logo
*/

function iadmin_logo() {
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'iadmin_logo');
add_image_size('mytheme-logo', 160, 90);
add_theme_support('custom-logo', array(
    'size' => 'mytheme-logo'
));



/**
 * Enqueue scripts and styles.
 */
 
 	if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
	function my_jquery_enqueue() {
		wp_deregister_script('jquery');
		wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
		wp_enqueue_script('jquery');
	}
	
function iadminwp_scripts() {
	wp_enqueue_style( 'iadminwp-style', get_stylesheet_uri() );

	wp_enqueue_script( 'iadminwp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	
	wp_enqueue_script( 'iadminwp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	wp_enqueue_script( 'iadminwp-sticky', get_template_directory_uri() . '/js/sticky.js', array(), '20151215', true );
	
	wp_enqueue_script( 'iadminwp-share', 'https://static.addtoany.com/menu/page.js', array(), '20151215', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
}
add_action( 'wp_enqueue_scripts', 'iadminwp_scripts' );

function fa_style() {
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'fa_style' );

function iadminwp_add_google_fonts() {
	wp_enqueue_style( 'iadminwp-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,700,300', false ); 
}
add_action( 'wp_enqueue_scripts', 'iadminwp_add_google_fonts' );

/**
 *Footer widgets 
 */ 
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
	register_sidebar( array(
        'name' => __( 'Header', 'iadminwp' ),
        'id' => 'hw-1',
        'description' => __( 'Widget in the Header', 'iadminwp' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );    
    register_sidebar( array(
        'name' => __( 'Footer 1', 'iadminwp' ),
        'id' => 'fw-1',
        'description' => __( 'Widgets in the footer area', 'iadminwp' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer 2', 'iadminwp' ),
        'id' => 'fw-2',
        'description' => __( 'Widgets in the footer area', 'iadminwp' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer 3', 'iadminwp' ),
        'id' => 'fw-3',
        'description' => __( 'Widgets in the footer area', 'iadminwp' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );    
} 
 

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


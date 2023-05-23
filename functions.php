<?php
/**
 * education functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package education
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
function education_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on education, use a find and replace
		* to change 'education' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'education', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'education' ),

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
			'education_custom_background_args',
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
add_action( 'after_setup_theme', 'education_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function education_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'education_content_width', 640 );
}
add_action( 'after_setup_theme', 'education_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function education_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'education' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'education' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'education_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function education_scripts() {
	wp_enqueue_style( 'education-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'education-style', 'rtl', 'replace' );

	wp_enqueue_script( 'education-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'education_scripts' );


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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// this will deactive demo mode of reduxframework plugin and will not display and addvertisement

if ( ! function_exists( 'redux_disable_dev_mode_plugin' ) ) {
	function redux_disable_dev_mode_plugin( $redux ) {
		if ( $redux->args['opt_name'] != 'redux_demo' ) {
			$redux->args['dev_mode'] = false;
		}
	}

	add_action( 'redux/construct', 'redux_disable_dev_mode_plugin' );
}
		
		// load the theme's options 
		if ( !isset( $redux_demo ) && file_exists( dirname(__FILE__) . '/framework/sample/config.php' ) ) {
		require_once( dirname(__FILE__) . '/framework/sample/config.php' );
		}


		#Custom menus
function custom_menu() {
	register_nav_menu('my-main-menu',__( 'My Main Menu' ));
  
  register_nav_menu('footer-menu-1',__( 'Footer Menu 1' ));
  // register_nav_menu('footer-menu-2',__( 'Footer Menu 2' ));
  //  register_nav_menu('footer-menu-3',__( 'Footer Menu 3' ));
}
add_action( 'init', 'custom_menu' );

/**
 * Footer Widget One
*/
function custom_footer_widget_one() {
	$args = array(
		'id' 							=> 'footer-widget-col-one',
		'name'						=> __('Footer Column One', 'text_domain'),
		'description'			=> __('Column One', 'text_domain'),
		'before_title'		=> '<h3 class="title">',
		'after_title' 		=> '</h3>',
		'before_widget'		=> '<div id="%1$s" class="widget %2$s">',
		'after_widget'    => '</div>'
	);
	register_sidebar( $args );
}
add_action( 'widgets_init', 'custom_footer_widget_one');

/**
 * Footer Widget Two
*/
function custom_footer_widget_two() {
	$args = array(
		'id' 							=> 'footer-widget-col-two',
		'name'						=> __('Footer Column Two', 'text_domain'),
		'description'			=> __('Column One', 'text_domain'),
		'before_title'		=> '<h3 class="title">',
		'after_title' 		=> '</h3>',
		'before_widget'		=> '<div id="%1$s" class="widget %2$s">',
		'after_widget'    => '</div>'
	);
	register_sidebar( $args );
}
add_action( 'widgets_init', 'custom_footer_widget_two');

/**
 * Footer Widget Three
*/
function custom_footer_widget_three() {
	$args = array(
		'id' 							=> 'footer-widget-col-three',
		'name'						=> __('Footer Column Three', 'text_domain'),
		'description'			=> __('Column One', 'text_domain'),
		'before_title'		=> '<h3 class="title">',
		'after_title' 		=> '</h3>',
		'before_widget'		=> '<div id="%1$s" class="widget %2$s">',
		'after_widget'    => '</div>'
	);
	register_sidebar( $args );
}
add_action( 'widgets_init', 'custom_footer_widget_three');

/**
 * Footer Widget Four
 */
function custom_footer_widget_four() {
	$args = array(
		'id' 							=> 'footer-widget-col-four',
		'name'						=> __('Footer Column Four', 'text_domain'),
		'description'			=> __('Column One', 'text_domain'),
		'before_title'		=> '<h3 class="title">',
		'after_title' 		=> '</h3>',
		'before_widget'		=> '<div id="%1$s" class="widget %2$s">',
		'after_widget'    => '</div>'
	);
	register_sidebar( $args );
}
add_action( 'widgets_init', 'custom_footer_widget_four');

/**
 * Footer Widget Five
 */
function custom_footer_widget_five() {
	$args = array(
		'id' 							=> 'footer-widget-col-five',
		'name'						=> __('Footer Column Five', 'text_domain'),
		'description'			=> __('Column One', 'text_domain'),
		'before_title'		=> '<h3 class="title">',
		'after_title' 		=> '</h3>',
		'before_widget'		=> '<div id="%1$s" class="widget %2$s">',
		'after_widget'    => '</div>'
	);
	register_sidebar( $args );
}
add_action( 'widgets_init', 'custom_footer_widget_five');

/**
 * Footer Widget Six
 */
function custom_footer_widget_six() {
	$args = array(
		'id' 							=> 'footer-widget-col-six',
		'name'						=> __('Footer Column Six', 'text_domain'),
		'description'			=> __('Column One', 'text_domain'),
		'before_title'		=> '<h3 class="title">',
		'after_title' 		=> '</h3>',
		'before_widget'		=> '<div id="%1$s" class="widget %2$s">',
		'after_widget'    => '</div>'
	);
	register_sidebar( $args );
}
add_action( 'widgets_init', 'custom_footer_widget_six');

/**
 * Footer Widget Seven
 */
function custom_footer_widget_seven() {
	$args = array(
		'id' 							=> 'footer-widget-col-seven',
		'name'						=> __('Footer Column Seven', 'text_domain'),
		'description'			=> __('Column One', 'text_domain'),
		'before_title'		=> '<h3 class="title">',
		'after_title' 		=> '</h3>',
		'before_widget'		=> '<div id="%1$s" class="widget %2$s">',
		'after_widget'    => '</div>'
	);
	register_sidebar( $args );
}
add_action( 'widgets_init', 'custom_footer_widget_seven');
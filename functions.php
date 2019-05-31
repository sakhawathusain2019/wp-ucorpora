<?php
/**
 * Ucorpa-Multipurpose Corporate functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Ucorpa-Multipurpose_Corporate
 */

if ( ! function_exists( 'ucorpa_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ucorpa_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Ucorpa-Multipurpose Corporate, use a find and replace
		 * to change 'ucorpa' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ucorpa', get_template_directory() . '/languages' );

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
			'main-menu' => esc_html__( 'Primary', 'ucorpa' ),
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
		add_theme_support( 'custom-background', apply_filters( 'ucorpa_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'ucorpa_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ucorpa_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'ucorpa_content_width', 640 );
}
add_action( 'after_setup_theme', 'ucorpa_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ucorpa_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ucorpa' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ucorpa' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ucorpa_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ucorpa_scripts() {
	wp_enqueue_style( 'ucorpa-style', get_stylesheet_uri() );
    // bootstrap file link
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css' );

	wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri() .'/assets/css/bootstrap-theme.min.css' );

	wp_enqueue_style( 'fontawesome', get_template_directory_uri() .'/assets/css/fontawesome.min.css' );

	wp_enqueue_style( 'slicknav', get_template_directory_uri() .'/assets/css/slicknav.min.css' );

	wp_enqueue_style( 'animated', get_template_directory_uri() .'/assets/css/animate.min.css' );

	wp_enqueue_style( 'popup', get_template_directory_uri() .'/assets/css/magnific-popup.css' );

	wp_enqueue_style( 'animated-text', get_template_directory_uri() .'/assets/css/animate-text.css' );

	wp_enqueue_style( 'carsoual', get_template_directory_uri() .'/assets/css/owl.carousel.min.css' );

	wp_enqueue_style( 'owl-theme', get_template_directory_uri() .'/assets/css/owl.theme.default.min.css' );

	wp_enqueue_style( 'normalize', get_template_directory_uri() .'/assets/css/normalize.css' );

	wp_enqueue_style( 'stylecss', get_template_directory_uri() .'/assets/style.css' );

	wp_enqueue_style( 'responsive', get_template_directory_uri() .'/assets/css/responsive.css' );


    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'),'1.0.1', true);

    wp_enqueue_script('slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array('jquery'),'1.0', true);

    wp_enqueue_script('scrollUp', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js', array('jquery'),'1.1', true);

    wp_enqueue_script('carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'),'1.1', true);

    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'),'1.1', true);

    wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'),'1.1', true);

    wp_enqueue_script('stellar', get_template_directory_uri().'/assets/js/jquery.stellar.min.js', array('jquery'),'1.1', true);

    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'),'1.1', true);

    wp_enqueue_script('animate', get_template_directory_uri() . '/assets/js/animate-text.js', array('jquery'),'1.1', true);

    wp_enqueue_script('easing', get_template_directory_uri() . '/assets/js/easing.min.js',array('jquery'),'1.1', true);

    wp_enqueue_script('magnific', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'),'1.1', true);

    wp_enqueue_script('particles', get_template_directory_uri() . '/assets/js/particles.min.js', array('jquery'),'1.1', true);

    wp_enqueue_script('gmaps', get_template_directory_uri() . '/assets/js/gmaps.min.js', array('jquery'),'1.1', true);

    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'),'1.1', true);


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ucorpa_scripts' );

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
 * Customizer Menu.
 */
require get_template_directory() . '/inc/menu.php';

/**
 * Theme Options File Here.
 */
require get_template_directory() . '/inc/theme-option/theme-option.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


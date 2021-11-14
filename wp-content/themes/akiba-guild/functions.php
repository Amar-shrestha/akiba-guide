	<?php
/**
 * akiba-guild functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package akiba-guild
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'akiba_guild_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function akiba_guild_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on akiba-guild, use a find and replace
		 * to change 'akiba-guild' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'akiba-guild', get_template_directory() . '/languages' );

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

		add_image_size( 'guild-group-home-blog', 331, 253 );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'akiba-guild' ),
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
				'akiba_guild_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'akiba_guild_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function akiba_guild_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'akiba_guild_content_width', 640 );
}
add_action( 'after_setup_theme', 'akiba_guild_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function akiba_guild_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'akiba-guild' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'akiba-guild' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'akiba_guild_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function akiba_guild_scripts() {
	wp_enqueue_style( 'akiba-guild-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), _S_VERSION);
	wp_enqueue_style( 'akiba-guild-animatecss', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
	wp_enqueue_style( 'akiba-guild-fonts', get_template_directory_uri() . '/css/fonts.css', array(), _S_VERSION);
	wp_enqueue_style( 'akiba-guild-main-style', get_template_directory_uri() . '/css/style.css', array(), _S_VERSION );
	wp_enqueue_style( 'akiba-guild-responsive-style', get_template_directory_uri() . '/css/responsive_style.css', array(), _S_VERSION);
	wp_enqueue_style( 'akiba-guild-mean-menu', get_template_directory_uri() . '/css/meanmenu.css', array(), _S_VERSION);
	wp_enqueue_style( 'akiba-guild-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'akiba-guild-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'akiba-guild-style', 'rtl', 'replace' );

	wp_enqueue_script( 'akiba-guild-ajaxjquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js' );
	wp_enqueue_script( 'akiba-guild-bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'akiba-guild-animatejs', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js');
	wp_enqueue_script( 'akiba-guild-commonjs', get_template_directory_uri() . '/js/common.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'akiba-guild-meanmenujs', get_template_directory_uri() . '/js/jquery.meanmenu.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'akiba-guild-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'akiba_guild_scripts' );

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
 * Content Posttype.
 */
require get_template_directory() . '/inc/content-posttype.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


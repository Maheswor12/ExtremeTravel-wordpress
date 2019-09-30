<?php
function remove_edit_menu() {
	remove_action('admin_menu', '_add_themes_utility_last', 101);
  }
  add_action('_admin_menu', 'remove_edit_menu', 1);
/**
 * travel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package travel
 */

if ( ! function_exists( 'travel_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function travel_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on travel, use a find and replace
		 * to change 'travel' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'travel', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'travel' ),
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
		add_theme_support( 'custom-background', apply_filters( 'travel_custom_background_args', array(
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
add_action( 'after_setup_theme', 'travel_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function travel_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'travel_content_width', 640 );
}
add_action( 'after_setup_theme', 'travel_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function travel_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'travel' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'travel' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'travel_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function travel_scripts() {
	wp_enqueue_style( 'travel-style', get_stylesheet_uri() );

	wp_enqueue_style( 'bootstrap.min.css', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css");

	wp_enqueue_style( 'fontawesome.css', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css');

	wp_enqueue_style( 'style.css', get_template_directory_uri() . '/css/style.css');

	wp_enqueue_style( 'owl.carousel.min.css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');

	wp_enqueue_style( 'owl.theme.default.min.css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css');

	wp_enqueue_style( 'animate.min.css', "https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css");
	
	wp_enqueue_style( 'aos.css', "https://unpkg.com/aos@2.3.1/dist/aos.css");

	wp_enqueue_style( 'fancybox.min.css', "https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.1/jquery.fancybox.min.css");

	wp_enqueue_style( 'lightslider.css', "https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css");

	wp_enqueue_style( 'lightgallery.css', "https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/css/lightgallery.min.css");

	wp_enqueue_style( 'style.css', get_template_directory_uri() . '/css/style.css');

	wp_enqueue_style( 'responsive.css', get_template_directory_uri() . '/css/responsive.css');

	wp_enqueue_script( 'travel-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '2015', true );

	wp_enqueue_script( 'travel-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '2015', true );

	wp_enqueue_script( 'jquery.com', "https://code.jquery.com/jquery-3.4.1.min.js");

	wp_enqueue_script( 'bootstrap.min.js', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js");

	wp_enqueue_script( 'owl.carousel.min.js', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js");

	wp_enqueue_script( 'aos.js', "https://unpkg.com/aos@2.3.1/dist/aos.js");

	wp_enqueue_script( 'fancybox.min.js', "https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.1/jquery.fancybox.min.js");

	wp_enqueue_script( 'lightslider.js', "https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js");

	wp_enqueue_script( 'lightgallery.js', "https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/js/lightgallery.min.js");

	wp_enqueue_script( 'main.js', get_template_directory_uri() . '/js/main.js', array(), '2015', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'travel_scripts' );

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

// for codestar
require get_template_directory() . '/plugin/codestar.php';

// for post type 
require get_template_directory() . '/plugin/custom-post-type.php';

// for taxonomy
require get_template_directory() . '/plugin/custom-taxonomy.php';
 


function template_chooser( $template ){
    global $wp_query;
    $post_type = get_query_var('post_type');
    if( $wp_query->is_search && $post_type == 'package' ){
        return locate_template('archive-package.php');  //  redirect to archive-package.php
    } 
    return $template;
}
add_filter( 'template_include', 'template_chooser' );

// for search filter
// function title_filter($where, &$wp_query){
//     global $wpdb;
//     if($search_term = $wp_query->get( 'title_filter' )){
//         $search_term = $wpdb->esc_like($search_term); //instead of esc_sql()
//         $search_term = ' \'%' . $search_term . '%\'';
//         $title_filter_relation = (strtoupper($wp_query->get( 'title_filter_relation'))=='OR' ? 'OR' : 'AND');
//         $where .= ' '.$title_filter_relation.' ' . $wpdb->posts . '.post_title LIKE '.$search_term;
//     }
//     return $where;
// }
// add_filter('posts_where','title_filter',10,2);


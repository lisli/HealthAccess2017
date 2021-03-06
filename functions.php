<?php
/**
 * Theme functions
 *
 * Sets up the theme and provides some helper functions.
 *
 * @package Health_Access2017
 */


/* OEMBED SIZING
 ========================== */
 
if ( ! isset( $content_width ) )
	$content_width = 600;
	
	
/* THEME SETUP
 ========================== */
 
if ( ! function_exists( 'health_access2017_setup' ) ):
function health_access2017_setup() {

	// Available for translation
	load_theme_textdomain( 'health-access2017', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to <head>.
	add_theme_support( 'automatic-feed-links' );

	// Add custom nav menu support
	// register_nav_menu( 'primary', __( 'Primary Menu', 'health-access2017' ) );
	
	register_nav_menus(
	    array(
	      'main-nav' => __( 'Main Menu' ),
	      'top-nav' => __( 'Top Menu' ),
	      'donate-link' => __( 'Donate Link' ),
	      'mobile-nav' => __( 'Mobile Menu' ), )
  	);
  	
	// Add featured image support
	add_theme_support( 'post-thumbnails' );
	
	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	) );
	
	// Add custom image sizes
	// add_image_size( 'name', 500, 300 );
}
endif;
add_action( 'after_setup_theme', 'health_access2017_setup' );


/* SIDEBARS & WIDGET AREAS
 ========================== */
function health_access2017_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar Top', 'health-access2017' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '<span class="widget-cta"><a href="http://healthaccess.flywheelsites.com/get-involved/">View More Ways to Get Involved >></a></span></aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',

	) );
	register_sidebar( array(
		'name' => __( 'Sidebar Middle', 'health-access2017' ),
		'id' => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '<span class="widget-cta"><a href="http://healthaccess.flywheelsites.com/blog/">More on the Blog>></a></span></aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',

	) );
	register_sidebar( array(
		'name' => __( 'Sidebar Bottom', 'health-access2017' ),
		'id' => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',

	) );

	register_sidebar( array(
		'name' => __( 'Top Bar', 'health-access2017' ),
		'id' => 'top-bar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '',
		'after_title' => '',
		
	) );

	register_sidebar( array(
		'name' => __( 'Top Nav Search', 'health-access2017' ),
		'id' => 'top-nav-search',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '',
		'after_title' => '',
		
	) );

	register_sidebar( array(
		'name' => __( 'Footer Right', 'health-access2017' ),
		'id' => 'footer-right',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		
	) );
	register_sidebar( array(
		'name' => __( 'Footer Left', 'health-access2017' ),
		'id' => 'footer-left',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		
	) );

	register_sidebar( array(
		'name' => __( 'Page Header Image', 'health-access2017' ),
		'id' => 'page-header-image',
		'before_widget' => '<aside id="%1$s" class="widget %2$s s_span_4 col">',
		'after_widget' => "</aside>",
		
	) );

	register_sidebar( array(
		'name' => __( 'Newsroom Publications Sidebar', 'health-access2017' ),
		'id' => 'newsroom-publications-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		
	) );
}
add_action( 'widgets_init', 'health_access2017_widgets_init' );

/* CUSTOM POST TYPES & TAXONOMIES
 ========================== */

add_action( 'init', 'create_publication_tax' );

function create_publication_tax() {
	register_taxonomy(
		'publication-category',
		'publication',
		array(
			'label' => __( 'Publication Categories' ),
			'rewrite' => array( 'slug' => 'publication-category' ),
			'hierarchical' => true,
		)
	);
}


add_action( 'init', 'create_publication_post_type' );
function create_publication_post_type() {
	register_post_type( 'publications',
		array(
			'labels' => array(
				'name' => __( 'Publications' ),
				'singular_name' => __( 'Publication' )
			),
		'public' => true,
		// 'rewrite' => true,
		// 'has_archive' => 'newsroom/publications',
		'has_archive' => true,
		'taxonomies' => array( 'publication-category' ),

		)
	);
}


/* ENQUEUE SCRIPTS & STYLES
 ========================== */
function health_access2017_scripts() {
	// theme style.css file
	// wp_enqueue_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=Lato:400,700,900', false ); 
	wp_enqueue_style( 'health-access2017-style', get_stylesheet_uri() );

	//enqueue additional stylesheet for custom css to be added in addition to theme css
	wp_enqueue_style( 'additional-styles', get_stylesheet_directory_uri() . '/custom.css' );
	
	// threaded comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	// vendor scripts
//	wp_enqueue_script(
//		'vendor',
//		get_template_directory_uri() . '/assets/vendor/newscript.js',
//		array('jquery')
//	);
	// theme scripts
	wp_enqueue_script(
		'theme-init',
		get_template_directory_uri() . '/assets/theme.js',
		array('jquery')
	);
}    
add_action('wp_enqueue_scripts', 'health_access2017_scripts');


/* MISC EXTRAS
 ========================== */
 
// Comments & pingbacks display template
include('inc/functions/comments.php');

// Optional Customizations
// Includes: TinyMCE tweaks, admin menu & bar settings, query overrides
include('inc/functions/customizations.php');
<?php
/**
 * Wordpress_Template_QuiteType functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Wordpress_Template_QuiteType
 */

if ( ! function_exists( 'Wordpress_Template_QuiteType_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function Wordpress_Template_QuiteType_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Wordpress_Template_QuiteType, use a find and replace
	 * to change 'Wordpress_Template_QuiteType' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'Wordpress_Template_QuiteType', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'Wordpress_Template_QuiteType' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'Wordpress_Template_QuiteType_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'Wordpress_Template_QuiteType_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function Wordpress_Template_QuiteType_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'Wordpress_Template_QuiteType_content_width', 640 );
}
add_action( 'after_setup_theme', 'Wordpress_Template_QuiteType_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function Wordpress_Template_QuiteType_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'Wordpress_Template_QuiteType' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'Wordpress_Template_QuiteType' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'Wordpress_Template_QuiteType_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function Wordpress_Template_QuiteType_scripts() {
	wp_enqueue_style( 'Wordpress_Template_QuiteType-style', get_stylesheet_uri() );

	wp_enqueue_script( 'Wordpress_Template_QuiteType-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'Wordpress_Template_QuiteType-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	// wp_register_script( 'jQuery', get_template_directory_uri() . '/vendor/jQuery.js', array(), '1.1', true);
	// wp_enqueue_script('jQuery');
	// wp_register_script( 'jQuery-ui', get_template_directory_uri() . '/vendor/jQuery-ui.js', array('jquery'), '1.1', true);
	// wp_enqueue_script('jQuery-ui');
	// wp_register_script( 'underscore', get_template_directory_uri() . '/vendor/underscore.js', array(), '1.1', true);
	// wp_enqueue_script('underscore');
	// wp_register_script( 'html2canvas', get_template_directory_uri() . '/vendor/html2canvas.js', array(), '1.1', true);
	// wp_enqueue_script('html2canvas');
	// wp_register_script( 'widowFix', get_template_directory_uri() . '/js/jQuery-widowFix/js/jquery.widowFix-1.3.2.min.js', array('jquery'), '1.3.2', true);
	// wp_enqueue_script('widowFix');
	// wp_register_script( 'smartquotes', get_template_directory_uri() . '/js/smartquotes/smartquotes.min.js', array(), '1.1', true);
	// wp_enqueue_script('smartquotes');
	// wp_register_script( 'hypher', get_template_directory_uri() . '/js/hypher/jquery.hypher.js', array('jquery'), '1.1', true);
	// wp_enqueue_script('hypher');
	// wp_register_script( 'en-us', get_template_directory_uri() . '/js/hypher/en-us.js', array('jquery', 'hypher'), '1.3.2', true);
	// wp_enqueue_script('en-us');
	// wp_register_script( 'mgMiniMap', get_template_directory_uri() . '/vendor/mgMiniMap/mgMiniMap-1.2.0.js', array('jquery'), '1.2', true);
	// wp_enqueue_script('mgMiniMap');

	// wp_register_script( 'MAIN', get_template_directory_uri() . '/js/main.min.js', array('jQuery', 'jQuery-ui', 'underscore', 'mgMiniMap', 'html2canvas', 'smartquotes', 'widowFix', 'en-us', 'hypher'), '1.1', true);
	// wp_enqueue_script('MAIN');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'Wordpress_Template_QuiteType_scripts' );

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


 //////////////////////////////////////////////
// Adding post types

// add_action( 'init', 'create_post_type' );
// function create_post_type() {
// 	register_post_type( 'tile',
// 	    array(
// 		    'labels' => array(
// 		        'name' 				 => __( 'Tiles' ),
// 		        'singular_name' 	 => __( 'Tile' ),
// 			    'edit_item'          => __( 'Edit Tile' ),
// 			    'new_item'           => __( 'New Tile' ),
// 			    'all_items'          => __( 'All Tiles' ),
// 			    'view_item'          => __( 'View Tile' ),
// 			    'search_items'       => __( 'Search Tiles' ),
// 			    'not_found'          => __( 'No products found' ),
// 			    'not_found_in_trash' => __( 'No products found in the Trash' ),
// 			    'parent_item_colon'  => '',
// 			    'menu_name'          => 'Tiles',
// 		    ),
// 	      	'public' => true,
// 	      	'has_archive' => true,
// 	      	// 'capability_type' => 'page',
// 	      	'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'page-attributes'),
// 	      	// 'taxonomies' => array( ),
// 	    )
// 	);
// }


// add_filter('pre_get_posts', 'query_post_type');
// function query_post_type($query) {
//   if(is_category() || is_tag()) {
//     $post_type = get_query_var('post_type');
// 	if($post_type)
// 	    $post_type = $post_type;
// 	else
// 	    $post_type = array('post','tile'); // replace cpt to your custom post type
//     $query->set('post_type',$post_type);
// 	return $query;
//     }
// }



//////////////////////////////////////////////////////
// Add Options Page 
// if( function_exists('acf_add_options_page') ) {
 
// 	$page = acf_add_options_page(array(
// 		'page_title' 	=> 'Theme General Settings',
// 		'menu_title' 	=> 'Theme Settings',
// 		'menu_slug' 	=> 'theme-general-settings',
// 		'capability' 	=> 'edit_posts',
// 		'redirect' 	=> false
// 	));
 
// }


// Custom WordPress Login Logo
function login_css() {
	wp_enqueue_style( 'login_css', get_template_directory_uri() . '/login.css' );
}
add_action('login_head', 'login_css');


function login_js() {

	wp_register_script( 'jQuery', get_template_directory_uri() . '/src/static/js/jquery/jQuery.js', array(), '1.1', true);
	wp_enqueue_script('jQuery');
	wp_register_script( 'login_js', get_template_directory_uri() . '/login.js', array('jquery'), '1', true);
	wp_enqueue_script('login_js');
}
add_action('login_head', 'login_js');



//////////////////////////////////////
// Remove unused nav bars
function remove_menus(){
  
  // remove_menu_page( 'edit.php?post_type=page' );    //Pages
  // remove_menu_page( 'edit-comments.php' );          //Comments
  // remove_menu_page( 'users.php' );                  //Users
  // remove_menu_page( 'edit.php?post_type=feedback' );//Feedback
}
add_action( 'admin_menu', 'remove_menus' );


//////////////////////////////////////
// NO COMMENTS
// Removes from admin menu AND POSTS
// add_action( 'admin_menu', 'my_remove_admin_menus' );
// function my_remove_admin_menus() {
//     //remove_menu_page( 'edit-comments.php' );
//     remove_menu_page( 'edit.php' );
// }
// // Removes from post and pages
// add_action('init', 'remove_comment_support', 100);

// function remove_comment_support() {
//     remove_post_type_support( 'post', 'comments' );
//     remove_post_type_support( 'page', 'comments' );
// }
// // Removes from admin bar
// function mytheme_admin_bar_render() {
//     global $wp_admin_bar;
//     $wp_admin_bar->remove_menu('comments');
// }
// add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );




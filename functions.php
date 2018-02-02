<?php
/**
 * growingminds functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package growingminds
 */

if ( ! function_exists( 'growingminds_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function growingminds_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on growingminds, use a find and replace
		 * to change 'growingminds' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'growingminds', get_template_directory() . '/languages' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-top' => esc_html__( 'Top', 'growingminds' ),
			'menu-primary' => esc_html__( 'Primary', 'growingminds' ),
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
		add_theme_support( 'custom-background', apply_filters( 'growingminds_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
		
		// Add image sizes
		add_image_size('post-thumb', 200, 200, true);
		add_image_size('post-image', 800, 9999, true);
		add_image_size('post-header', 1600, 400, true);
		


}
endif;
add_action( 'after_setup_theme', 'growingminds_setup' );

/**
 * Enqueue scripts and styles.
 */
function growingminds_scripts() {
	wp_enqueue_style( 'bootstrap-style', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css' );
	
	wp_enqueue_style( 'fontawesome-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );	

	wp_enqueue_style( 'growingminds-style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'jquery');
	
	wp_enqueue_script('bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js', true);
	
	wp_enqueue_script( 'growingminds-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	
	wp_enqueue_script( 'growingminds-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	wp_enqueue_script( 'add-this', '//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55b8fccb575602dc', array(), true );

}
add_action( 'wp_enqueue_scripts', 'growingminds_scripts' );

/**
 * Custom template tags for this theme.
 */
// require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="btn"';
}

/**
 * Remove labels
 */
add_filter( 'get_the_archive_title', function ($title) {
	if (is_category()) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
	
		$title = single_tag_title( '', false );
	
	} elseif ( is_author() ) {
	
		$title = '<span class="vcard">' . get_the_author() . '</span>' ;
	
	}
	return $title;
});

/**
 * Get rid of tags on posts.
 */
function unregister_tags() {
    unregister_taxonomy_for_object_type( 'post_tag', 'post' );
}
add_action( 'init', 'unregister_tags' );


/**
 * Add title tag support
 */
function theme_slug_setup() {
   add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_slug_setup' );


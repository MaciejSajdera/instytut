<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );
add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	// Get the theme data
    $the_theme = wp_get_theme();
    wp_register_style( 'Swiper_css', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css' );
    wp_enqueue_style('Swiper_css');
    $rand = rand(1, 999999999);
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $rand );
    //wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_register_script( 'Swiper_js', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js', null, null, true );
    wp_enqueue_script('Swiper_js');
    wp_enqueue_script( 'child-custom-understrap-scripts', get_stylesheet_directory_uri() . '/js/custom.js', array(), $the_theme->get( 'Version' ), true );
	wp_enqueue_style('google-font-open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap&subset=latin-ext', false);
    wp_enqueue_style('google-font-playfair', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap&subset=latin-ext', false);
    wp_enqueue_style('custom-fa', '//use.fontawesome.com/releases/v5.5.0/css/all.css', false);
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function replace_core_jquery_version() {
    wp_deregister_script( 'jquery' );
    // Change the URL if you want to load a local copy of jQuery from your own server.
    wp_register_script( 'jquery', "https://code.jquery.com/jquery-3.1.1.min.js", array(), '3.1.1' );
}

if ( function_exists( 'add_image_size' ) ) { 
   // add_image_size( 'img-large-trial', 3264, 4928, false ); //(scaled)
    add_image_size('img-square', 410, 410, true);
    add_image_size('img-almost-square', 300, 335, true);
    add_image_size('img-vertical-vsmall', 100, 140, true);
    add_image_size('img-vertical-small', 270, 460, true);
    add_image_size('img-horizontal-medium', 600, 400, true);
    add_image_size('img-horizontal-large', 1200, 900, true);
    add_image_size('img-horizontal-large-2', 1200, 700, true);
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

//change length of excerpt
function wpdocs_custom_excerpt_length( $length ) {
    return 12;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

add_filter('widget_text', 'do_shortcode');


// global variables

$main_page_bussiness_href = get_post_permalink(85);
$main_page_science_href = get_post_permalink(87);
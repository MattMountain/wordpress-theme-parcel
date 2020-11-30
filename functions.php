<?php 

// CALLBACK function
// Include style.css and /js/script.js
function add_theme_scripts() {
  wp_enqueue_style( 'style' , get_stylesheet_uri() );
  wp_enqueue_script( 'script' , get_template_directory_uri() . '/dist/index.js' , array() , null , true );
  wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/dist/index.css',false,'1.1','all');
}

// HOOK
add_action( 'wp_enqueue_scripts' , 'add_theme_scripts' );
add_theme_support( 'post-thumbnails' );

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );
add_filter( 'the_content', 'remove_thumbnail_dimensions', 10 );
function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

function custom_content_class($classes) {
	$classes[] = 'custom_class';
	return $classes;
}

?>
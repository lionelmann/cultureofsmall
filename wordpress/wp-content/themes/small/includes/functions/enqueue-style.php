<?php

/**
* Enqueue styles
*/

function my_styles() {
	//$timestamp = @filemtime(get_stylesheet_directory().'/style.css');

	wp_register_style('style', get_template_directory_uri() . '/style.css#async', array()/*, $timestamp*/);
 	wp_enqueue_style( 'style' );
}

add_action('wp_enqueue_scripts', 'my_styles');

?>
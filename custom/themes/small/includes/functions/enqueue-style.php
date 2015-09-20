<?php

/**
* Enqueue styles
*/

function my_styles() {
	wp_enqueue_style('google-font', 'http://fonts.googleapis.com/css?family=Source+Serif+Pro|Montserrat|Pacifico', array(), '', true);
	wp_register_style('style', get_template_directory_uri() . '/style.css');
 	wp_enqueue_style( 'style' );
 	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' );
}

add_action('wp_enqueue_scripts', 'my_styles');

?>
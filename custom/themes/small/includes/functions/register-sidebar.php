<?php

/**
* Register Wordpress sidebar widget
*/

register_sidebar(array(
 	'name' => __( 'Homepage Statement' ),
 	'id' => 'homepage-statement',
 	'description' => __( 'Widgets in this area will be shown on the homepage.' ),
  	'before_widget' => '<h1>',
  	'after_widget' => '</h1>',
  	'before_title' => '<span class="hidden" style="display: none;">',
  	'after_title' => '</span>'
));

?>


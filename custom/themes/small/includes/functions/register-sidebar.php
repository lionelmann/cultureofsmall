<?php

/**
* Register Wordpress sidebar widget
*/

register_sidebar(array(
 	'name' => __( 'Call to Action Buttons' ),
 	'id' => 'cta',
 	'description' => __( 'Widgets in this area will be shown as buttons on the homepage and panels.' ),
  	'before_widget' => '',
  	'after_widget' => '',
  	'before_title' => '<span class="ghost" style="margin: 1em;">',
  	'after_title' => '</span>'
));

?>
<?php

/**
* Register Wordpress menus
*/

function register_my_menus() {
  register_nav_menus(
    array(
      'right-menu' => __( 'Right Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

?>
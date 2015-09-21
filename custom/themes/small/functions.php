<?php

//Include cuztom helper files https://github.com/Gizburdt/Wordpress-Cuztom-Helper
include('includes/wp-cuztom-helper/cuztom.php');

//Include post custom posts type. Dependent on /wp-cuztom-helper classes.
include('includes/wp-cuztom-posts/custom-post-community.php');

//Load custom functions
require_once('includes/functions/enqueue-style.php');
require_once('includes/functions/enqueue-script.php');
require_once('includes/functions/image-support.php');
require_once('includes/functions/page-excerpts.php');
require_once('includes/functions/pagination.php');
require_once('includes/functions/recent-post.php');
require_once('includes/functions/register-menu.php');
require_once('includes/functions/register-sidebar.php');
require_once('includes/functions/remove-header-meta.php');
require_once('includes/functions/remove-menu-id.php');
require_once('includes/functions/remove-image-dimensions.php');
require_once('includes/functions/remove-wp-version.php');
//require_once('includes/shortcodes/button.php');
//require_once('includes/functions/custom-cta-widget.php');

function crunchify_social_sharing_buttons($content) {
	if(is_single() || is_home()){
		$shortURL = get_permalink();
		$shortTitle = get_the_title();
		$twitterURL = 'https://twitter.com/intent/tweet?text='.$shortTitle.'&amp;url='.$shortURL.'&amp;via=cultureofsmall';
		$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$shortURL;
		$googleURL = 'https://plus.google.com/share?url='.$shortURL;
		//$bufferURL = 'https://bufferapp.com/add?url='.$shortURL.'&amp;text='.$shortTitle;
	
		$variable = '<div class="crunchify-social"><span class="share-text">Share</span>';
		$variable .= '<a class="crunchify-link crunchify-twitter" href="'. $twitterURL .'" target="_blank"><i class="fa fa-twitter"></i></a>';
		$variable .= '<a class="crunchify-link crunchify-facebook" href="'.$facebookURL.'" target="_blank"><i class="fa fa-facebook"></i></a>';
		$variable .= '<a class="crunchify-link crunchify-googleplus" href="'.$googleURL.'" target="_blank"><i class="fa fa-google-plus"></i></a>';
		//$variable .= '<a class="crunchify-link crunchify-buffer" href="'.$bufferURL.'" target="_blank">Buffer</a>';
		//$variable .= '<a class="crunchify-link follow-twit" href="http://twitter.com/cultureofsmall" target="_blank">Follow @cultureofsmall</a></div>';
		return $variable.$content;
	}else{
		return $variable.$content;
	}
};
add_filter( 'the_content', 'crunchify_social_sharing_buttons');

function disable_wp_emojicons() {

  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

  // filter to remove TinyMCE emojis
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );

function disable_emojicons_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
    return array();
  }
}

add_filter('style_loader_tag', 'add_defer_attribute', 10, 2);
function add_defer_attribute($tag, $handle) {
    if ('style' !== $handle )
        return $tag;
    return str_replace( ' href', ' async="async" href', $tag );
}
<?php
/**
 * Lara Theme Functions
 *
 */

////////////////////////
//Clean up Wordpress////
////////////////////////

//Remove WP junk in the head
function remove_wp_version() {
return '';
}
add_filter ('the_generator', 'remove_wp_version');
remove_action ('wp_head', 'wp_generator');
remove_action ('wp_head', 'rsd_link');
remove_action ('wp_head', 'wlwmanifest_link');
remove_action ('wp_head', 'wp_shortlink_wp_head');
remove_action ('wp_head', 'rel_canonical');
remove_action ('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

//Clean up Wordpress Menus
 function custom_wp_nav_menu($var) {
  return is_array($var) ? array_intersect($var, array(
		'current_page_item' // active
		)
	) : '';
}
add_filter('nav_menu_css_class', 'custom_wp_nav_menu');
add_filter('nav_menu_item_id', 'custom_wp_nav_menu');
add_filter('page_css_class', 'custom_wp_nav_menu');

//Replaces "current-menu-item" with "active"
function current_to_active($text){
	$replace = array(
		'current_page_item' => 'active'
	);
	$text = str_replace(array_keys($replace), $replace, $text);
		return $text;
	}
add_filter ('wp_nav_menu','current_to_active');
function strip_empty_classes($menu) {
    $menu = preg_replace('/ class=""| class="sub-menu"/','',$menu);
    return $menu;
}
add_filter ('wp_nav_menu','strip_empty_classes');

//Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

//Add class to pagination buttons
add_filter('next_posts_link_attributes', 'posts_link_attributes_next');
add_filter('previous_posts_link_attributes', 'posts_link_attributes_prev');
function posts_link_attributes_next() {
  return 'class="btn-pagination btn-pagination--next"';
}
function posts_link_attributes_prev() {
  return 'class="btn-pagination btn-pagination--prev"';
}

//Remove pages from Search
function SearchFilter($query) {
if ($query->is_search) {
$query->set('post_type', 'post');
}
return $query;
}
add_filter('pre_get_posts','SearchFilter');

////////////////////////
//Edits to Image Output/
////////////////////////

//Featured Images
add_theme_support( 'post-thumbnails');

//Set default to no link on images
function wpb_imagelink_setup() {
    $image_set = get_option( 'image_default_link_type' );
    if ($image_set !== 'none') {
        update_option('image_default_link_type', 'none');
    }
}
add_action('admin_init', 'wpb_imagelink_setup', 10);

//Remove <p> tags from images
function filter_ptags_on_images($content){
  return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'filter_ptags_on_images');


// Unset 'Large' size
function sgr_filter_image_sizes( $sizes) {
  unset( $sizes['large']);
  return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'sgr_filter_image_sizes');

//Remove Attachement Dimensions
add_shortcode( 'wp_caption', 'fixed_img_caption_shortcode' );
add_shortcode( 'caption', 'fixed_img_caption_shortcode' );
function fixed_img_caption_shortcode($attr, $content = null) {
  if ( ! isset( $attr['caption'] ) ) {
     if ( preg_match( '#((?:<a [^>]+>\s*)?<img [^>]+>(?:\s*</a>)?)(.*)#is', $content, $matches ) ) {
     $content = $matches[1];
     $attr['caption'] = trim( $matches[2] );
     }
  }
  $output = apply_filters( 'img_caption_shortcode', '', $attr, $content );
     if ( $output != '' )
     return $output;
  extract( shortcode_atts(array(
  'id'      => '',
  'align'   => 'alignnone',
  'width'   => '',
  'caption' => ''
  ), $attr));
  if ( 1 > (int) $width || empty($caption) )
  return $content;
  if ( $id ) $id = 'id="' . esc_attr($id) . '" ';
  return '<p ' . $id . 'class="wp-caption ' . esc_attr($align) . '" >'
  . do_shortcode( $content ) . '<span class="wp-caption-text">' . $caption . '</span></p>';
}

//Featured Image Support
add_theme_support( 'post-thumbnails');

//95% jpeg Quality
add_filter( 'jpeg_quality', create_function( '', 'return 95;' ) );

///////////////////////////
//Theme Specific Functions/
///////////////////////////

//Register Menu
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

//Wordpress Excerpt More
function et_excerpt_more($more) {
    global $post;
    return '<a href="'. get_permalink($post->ID) . '" class="read-more">[...]</a>';
}
add_filter('excerpt_more', 'et_excerpt_more');

//Options Page (Advanced Custom Fields)
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}


////////////////////////
//CSS & JS Scripts//////
////////////////////////

//Enqueue scripts and styles.
function enqueueFiles() {
  wp_enqueue_style( 'style',  get_stylesheet_directory_uri() . '/build/css/style.min.css');
  wp_enqueue_script( 'scripts',  get_template_directory_uri() . '/build/js/scripts.min.js', '', '', true);
}

add_action( 'wp_enqueue_scripts', 'enqueueFiles');

<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


/*
      ===================================
              Nexe file includes
      ===================================
*/

require_once get_template_directory() . '/inc/walker_nexe.php';

add_action('nav_menu_css_class', 'add_current_nav_class', 10, 2 );
	
function add_current_nav_class($classes, $item) {
  
  // Getting the current post details
  global $post;
  
  // Getting the post type of the current post
  $current_post_type = get_post_type_object(get_post_type($post->ID));
  $current_post_type_slug = $current_post_type->rewrite['slug'];
    
  // Getting the URL of the menu item
  $menu_slug = strtolower(trim($item->url));
  
  // If the menu item URL contains the current post types slug add the current-menu-item class
  if (strpos($menu_slug,$current_post_type_slug) !== false) {
  
     $classes[] = 'current-menu-item';
  
  }
  
  // Return the corrected set of classes to be added to the menu item
  return $classes;

}
//PARA MEJORAR!
function add_post_types_to_query( $query ) {
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  if (($query->is_post_type_archive('artist') || $query->is_post_type_archive('release') || $query->is_post_type_archive('merchandise')) && $query->is_main_query() && !is_admin()) {
        if(is_post_type_archive('artist'))$query->set( 'post_type', array('artist'));
        if(is_post_type_archive('release'))$query->set( 'post_type', array('release'));
        if(is_post_type_archive('merchandise'))$query->set( 'post_type', array('merchandise'));
        $query->set('posts_per_page', 9 );
        $query->set('paged', $paged);
  }
  
 } 
 add_action( 'pre_get_posts', 'add_post_types_to_query' );


 //FUNCION PARA CONTROLAR LA CALIDAD DE LAS IMAGENES QUE SE SUBIRAN

add_filter('wp_handle_upload_prefilter','tc_handle_upload_prefilter');
function tc_handle_upload_prefilter($file) {

    $img=getimagesize($file['tmp_name']);
    $minimum = array('width' => '640', 'height' => '480');
    $width= $img[0];
    $height =$img[1];

    if ($width < $minimum['width'] )
        return array("error"=>"Image dimensions are too small. Minimum width is {$minimum['width']}px. Uploaded image width is $width px");

    elseif ($height <  $minimum['height'])
        return array("error"=>"Image dimensions are too small. Minimum height is {$minimum['height']}px. Uploaded image height is $height px");
    else
        return $file; 
}
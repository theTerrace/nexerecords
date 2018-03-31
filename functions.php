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

function add_blog_post_to_query( $query ) {
  if ( $query->is_post_type_archive('artist') && $query->is_main_query()) {
      $query->set( 'post_type', array('artist') );
  }
  if ($query->is_post_type_archive('release') && $query->is_main_query()){
      $query->set( 'post_type', array('release') );
  }
  if ($query->is_post_type_archive('merchandise') && $query->is_main_query()){
      $query->set( 'post_type', array('merchandise') );
  }
  if(!is_admin())$query->set( 'posts_per_page', 2 );
  
}
add_action( 'pre_get_posts', 'add_blog_post_to_query' );

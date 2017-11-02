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
                Nexe resources
      ===================================
*/


// load resources into the website's front-end
function nexe_enqueue_resources() {
  //bootsrap min css
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/styles/css-bootstrap/bootstrap.min.css');
  //our style.css
  wp_enqueue_style('nexe-style', get_template_directory_uri() . '/style.css', ['bootstrap']);

  //tether min js
  wp_enqueue_script('theter-js', get_template_directory_uri() . '/assets/scripts/jsbootstrap/tether.min.js', time(), true);
  //bootsrap min js
  wp_enqueue_script('boostrap-js', get_template_directory_uri() . '/assets/scripts/jsbootstrap/bootstrap.min.js',['tether-js'], time(), true);
}
add_action('wp_enqueue_scripts','nexe_enqueue_resources');
/*
function my_post_templater($template){
  if( !is_single() )
    return $template;
    global $wp_query;
    $c_template = get_post_meta( $wp_query->post->ID, '_wp_page_template', true );
  return empty( $c_template ) ? $template : $c_template;
}

add_filter( 'template_include', 'my_post_templater' );

function give_my_posts_templates(){
  add_post_type_support( 'post', 'page-attributes' );
}

add_action( 'init', 'give_my_posts_templates' );*/

/*
      ===================================
              Nexe file includes
      ===================================
*/

require_once get_template_directory() . '/inc/walker_nexe.php';




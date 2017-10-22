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


add_action( 'after_setup_theme', 'woocommerce_support' );

function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// load css into the website's front-end
  function nexe_enqueue_resources() {
      wp_enqueue_style('bootsrap', get_template_directory_uri() . '/assets/styles/css-bootstrap/bootstrap.min.css');
      wp_enqueue_style('nexe-style', get_template_directory_uri() . '/style.css' );
      wp_enqueue_script('boostrap-js', get_template_directory_uri() . '/assets/scripts/jsbootstrap/bootstrap.min.js');
  }
  add_action('wp_enqueue_scripts','nexe_enqueue_resources');

  
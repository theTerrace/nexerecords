<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

/**
 * Get releases by artist
 */

function get_releases_by_artist(){

    $args = array(
      'post_type' => 'release',
      'meta_query' => array(
        array(
          'key' => 'artists',
          'value' => '"'. get_the_id() .'"',
          'compare' => 'LIKE'
        ),
      ),
    );

    $collection = new \WP_Query( $args ); //collection of data
    
    $releases = $collection->posts; //get posts from this collection of data
    
    return $releases;

}

function get_related_news_by_artist(){

    $args = array(
      'post_type' => 'post',
      'meta_query' => array(
        array(
          'key' => 'artista_rel',
          'value' => '"'. get_the_id() .'"',
          'compare' => 'LIKE'
        ),
      ),
    );

    $collection = new \WP_Query( $args ); //collection of data
    
    $relatedNews = $collection->posts; //get posts from this collection of data    
    
    return $relatedNews;
}

function get_archive_news_swiper(){
  $args = array(
      'post_type' => 'new',
      'posts_per_page' => 9,
      'order' => 'DESC'
  );
  $the_query = new \WP_Query($args);
  return $the_query;
}
<?php

//Excludes pages from search results
function exclude_pages_from_search($query) {
  if ($query->is_search) {
    $query->set('post_type', 'post');
  }
  return $query;
}
add_filter('pre_get_posts','exclude_pages_from_search');

//Excerpt Length
function custom_excerpt_length( $length ) {
  return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

?>

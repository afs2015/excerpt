<?php
/*
Plugin Name: Excerpt
Plugin URI: https://github.com/afs2015/excerpt
Version: 1.0
Author: Andrew Selzer
Description: Allows one to post short excerpts of text.
*/
?>

<?php 
function trim_content( $limit ) {
  $content = explode( ' ', get_the_content(), $limit );
  
  if ( count( $content ) >= $limit ) {
    array_pop( $content );
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 

  return $content;
}
?>

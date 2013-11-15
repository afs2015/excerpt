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
/*  Copyright 2013 Andrew Selzer  (email : andrewfselzer@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

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

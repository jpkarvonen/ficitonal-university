<?php


/*
Plugin Name: My First Amazing Plugin
Description: This plugin will change your life.
*/

/* Example of how to dynamically filter content.

add_filter('the_content', 'amazingContentEdits');

function amazingContentEdits($content) {
  $content = $content . '<p>All content belongs to Fictional University</p>';
  $content = str_replace('Lorem', '****', $content);
  return $content;
}
*/


add_shortcode('programCount', 'programCountFunction');

function programCountFunction() {
  return wp_count_posts('program')->publish;
}

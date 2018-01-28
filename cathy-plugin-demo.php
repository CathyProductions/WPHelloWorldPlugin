<?php
/*
Plugin Name: Cathy Plugin Demo
Description: WordPress "Hello World"-Plugin-Demo
Version: 0.1
Author: CathyProductions
Author URI: https://www.cathyprod.de
License: GPL
*/
?>

add_action('wp_footer', 'cathy_plugin_demo_action_footer');
function cathy_plugin_demo_action_footer() {
  echo '<div>Plugin Demo Add Footer "Hello World"</div>';
}

add_filter('the_content', 'cathy_plugin_demo_filter_content');
function cathy_plugin_demo_filter_content($content) {
  $content .= '<p>Plugin Demo Add One Line - "Hello World"</p>';
  return $content;
}

?>

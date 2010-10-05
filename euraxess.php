<?php

/*
Plugin Name: Euraxess
Plugin URI: http://ec.europa.eu/euraxess/index.cfm/jobs/widgets
Description: 
Version: 1.0
Author: Euraxess
Author URI: http://ec.europa.eu/euraxess
*/

function euraxess() {
	echo '<script type="text/javascript" src="http://ec.europa.eu/euraxess/widgets/miniapp/generate.cfm"></script>';
}
function widget_euraxess($args) {
  extract($args);
  echo $before_widget;
  echo $before_title;
  echo $after_title;
  euraxess();
  echo $after_widget;
}
function euraxess_init() {
	register_sidebar_widget(__('Euraxess'), 'widget_euraxess');
}
add_action("plugins_loaded", "euraxess_init");

?>
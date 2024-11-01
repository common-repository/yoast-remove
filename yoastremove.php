<?php
/*
Plugin Name: Yoast Remove
Plugin URI: http://wordpress.org/support/topic/294488
Description: Removes Yoast Tweaking Websites Widget from the dashboard if you use sociable or other Yoast plugins.
Version: 0.0.7
Author: Bill Larson clarksville@clarksvilleonline.com
Author URI: http://www.clarksvilleonline.com/
*/

### Function: Remove Yoast Tweaking Websites Dashboard Widget

function remove_yoast_dashboard_widgets() {
	// Globalize the metaboxes array, this holds all the widgets for wp-admin
	global $wp_meta_boxes;

	// Remove these widgets.
        unset($wp_meta_boxes['dashboard']['normal']['core']['yoast_db_widget']);
        unset($wp_meta_boxes['dashboard']['normal']['core']['yst_db_widget']);
        unset($wp_meta_boxes['dashboard']['normal']['core']['blogplay_db_widget']);
        unset($wp_meta_boxes['dashboard']['normal']['core']['wpseo_yoastdbwidget']);
}
add_action('wp_dashboard_setup', 'remove_yoast_dashboard_widgets' );
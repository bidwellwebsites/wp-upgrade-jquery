<?php
/**
 * Plugin Name: Upgrade jQuery
 * Plugin URI: https://bidwellwebsites.com/
 * Description: Upgrades jQuery to 3.4.1
 * Version: 1.0
 * Author: Mason Wiley
 * Author URI: https://bidwellwebsites.com/
 */

function mw_upgrade_jquery() {
  $jquery_uri = plugin_dir_url( __FILE__ ) . '/assets/jquery.min.js';
  wp_deregister_script('jquery-core');
  wp_register_script('jquery-core', $jquery_uri, array(), '3.4.1');
}

add_action('wp_enqueue_scripts', 'mw_upgrade_jquery', 1);

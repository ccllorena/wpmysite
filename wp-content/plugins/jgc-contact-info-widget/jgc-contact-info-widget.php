<?php
/*
Plugin Name: JGC Contact Info Widget
Description: This plugin creates a widget to display your profile/bussiness information.
Version: 1.0.0
Author: GalussoThemes
Author URI: http://galussothemes.com
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: jgc-contact-info-widget
Domain Path: /languages

JGC Contact Info Widget is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
JGC Contact Info Widget is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with JGC Contact Info Widget. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

// Salir si se accede directamente
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define('JGCCIW_VERSION', '1.0.0');

add_action('init', 'jgcciw_load_textdomain');
function jgcciw_load_textdomain() {
	
	load_plugin_textdomain( 'jgc-contact-info-widget', false, basename( dirname( __FILE__ ) ) . '/languages' );
	
}

add_action('wp_enqueue_scripts', 'jgcciw_check_font_awesome', 99999);
function jgcciw_check_font_awesome() {

  global $wp_styles;
  $srcs = array_map('basename', (array) wp_list_pluck($wp_styles->registered, 'src') );

  if ( !in_array('font-awesome.css', $srcs) && !in_array('font-awesome.min.css', $srcs)  ) {
    wp_enqueue_style( 'font-awesome-jgcciw', plugins_url( 'css/font-awesome.min.css', __FILE__) );
  }

  wp_enqueue_style( 'jgcciw-style', plugins_url( 'css/jgcciw-style.css', __FILE__), '', JGCCIW_VERSION );

}

require_once( plugin_dir_path( __FILE__ ) . 'inc/jgc-widget-contact-info-widget.php' );
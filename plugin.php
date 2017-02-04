<?php
/*
Plugin Name: Styles: tourtiger
Plugin URI: http://stylesplugin.com
Description: Add Customize options to the <a href="http://wordpress.org/extend/themes/tourtiger" target="_blank">tourtiger theme</a> using the <a href="http://wordpress.org/extend/plugins/styles/" target="_blank">Styles plugin</a>.
Version: 1.0.03
Author: Paul Clark, 10up, tourtiger
Author URI: http://pdclark.com
GitHub Plugin URI: https://github.com/matjnewton/styles-tourtiger
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Require: Styles 1.0
Styles Class: Styles_Child_Theme
*/

if ( !class_exists( 'Styles_Child_Notices' ) ) {
    include dirname( __FILE__ ) . '/classes/styles-child-notices/styles-child-notices.php';
}
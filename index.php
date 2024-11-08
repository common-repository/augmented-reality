<?php
/*
Plugin Name: Augmented reality plugin
Plugin URI: 
Description: Marked based augmented reality in your wordpress https site  
Version: 1.2.0
Author: Deimos Mavrozoumis
Author URI: https://plugfame.wordpress.com
*/

if (!defined('ABSPATH'))
{
    exit; // Exit if accessed directly
}

define('PL_AR_PATH', plugin_dir_path(__FILE__));
define('PL_AR_LINK', plugin_dir_url(__FILE__));
//include_once PL_AR_PATH . 'classes/new_page.php';
include_once PL_AR_PATH . 'classes/shortcode.php';
include_once PL_AR_PATH . 'classes/utilities.php';

$pl_ar_utilities= new  pl_ar_utilities\pl_ar_Utilities();
$pl_ar_shortcode= new pl_ar_shortcode\pl_ar_Shortcode();
//$pl_ar_new_page= new pl_ar_new_page\pl_ar_new_page();

register_activation_hook(   __FILE__, array( 'pl_ar_utilities\pl_ar_Utilities', 'pl_ar_table_activation' ) );
register_deactivation_hook(   __FILE__, array( 'pl_ar_utilities\pl_ar_Utilities', 'pl_ar_table_deactivation' ) );
register_activation_hook( __FILE__, array( 'pl_ar_utilities\pl_ar_Utilities', 'pl_ar_plugin_activation' ) );
register_deactivation_hook( __FILE__, array( 'pl_ar_utilities\pl_ar_Utilities', 'pl_ar_plugin_deactivation' ) );

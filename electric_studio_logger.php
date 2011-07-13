<?php
/*
Plugin Name: Electric Studio Logger
Plugin URI: http://www.electricstudio.co.uk
Description: A Plugin for logging variables.
Version: 0.5
Author: James Irving-Swift
Author URI: http://www.irving-swift.com
License: GPL2
*/

include 'lib/install.php';
include 'lib/options.php';
include 'lib/esl_functions.php';

/* Runs when plugin is activated */
register_activation_hook(__FILE__,'PLUGIN_NAME_install'); 

/* Runs on plugin deactivation*/
register_deactivation_hook( __FILE__, 'PLUGIN_NAME_remove' );

function electric_studio_logger()
{
  //echo get_option('OPTION_NAME');
}

?>

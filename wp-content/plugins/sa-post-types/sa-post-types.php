<?php

/*
Plugin Name: SA Post Types and Taxonomies
Plugin URI: http://github.com/saposttypes/
Description: This Plugin is the best way for creating Custom Post Types and Taxonomies .
Author: Safaa Abdou
Version: 1.0.0
Author URI: http://ma.tt/
*/
 /*security measure ,check if wordpress isn’t accessing this file ,
 don’t accessing the plugin file direcrtly
 */
  
if(! defined("WPINC")){

    die;
}

//define custom constants

define("SA_VERSION", "1.0.0");

define("SADOMAIN", "sa-post-types");

define("SAPATH", plugin_dir_path(__FILE__));


//include for regiter post types in to our plugin
require_once(SAPATH . "/post-types/register.php");

add_action("init", "sa_register_posts");



//include for regiter taxnomies for post types in to our plugin
require_once(SAPATH . "/taxonomies/register.php");


add_action("init", "sa_register_tax");



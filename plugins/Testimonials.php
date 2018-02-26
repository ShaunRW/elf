<?php
/*
Plugin Name: Testimonials
Description: Loads testimonials stored in a json file.
Version: 1.0
Author: Shaun Wilesmith
Author URI: 
*/

# get correct id for plugin
$thisfile_testi=basename(__FILE__, ".php");

# register plugin
register_plugin(
    $thisfile_testi ,                              	# ID of plugin, should be filename minus php
    "Testimonials", 								# Title of plugin
    '1.0',                                         	# Version of plugin
    'Shaun Wilesmith',                             	# Author of plugin
    'http://get-simple.info',                      	# Author URL
    "Loads testimonials stored in a json file.",	# Plugin Description
    '',                                            	# Page type of plugin
    ''                                             	# Function that displays content
);

function get_all_testimonials()
{
	$testimonials_file=GSDATAOTHERPATH .'testimonials.json';
	$json = file_get_contents($testimonials_file);
	$testimonials = json_decode($json);
	return $testimonials;
}

?>
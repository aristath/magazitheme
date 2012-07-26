<?php

/*
Plugin Name: Magazi Admin Theme
Plugin URI: http://magazi.org
Description: Magazi.org Admin Theme - Upload and Activate.
Author: Aristeides Stathopoulos
Version: 1.0
Author URI: http://aristeides.com
*/

function magazi_admin_head() {
	echo '<link rel="stylesheet" type="text/css" href="' .plugins_url('admin.css', __FILE__). '">';
}

add_action('admin_head', 'magazi_admin_head');

?>

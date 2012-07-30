<?php

/*
Plugin Name: Magazi Admin Theme
Plugin URI: http://magazi.org
Description: Magazi.org Admin Theme - Upload and Activate.
Author: Aristeides Stathopoulos
Version: 1.0.1
Author URI: http://aristeides.com
*/

/*
 * The Magazi admin theme is a simple and clean WordPress administration theme.
 * 
 * Copyright (C) 2012  Aristeides Stathopoulos
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */
 
function magazi_admin_head() {
	echo '<link rel="stylesheet" type="text/css" href="' .plugins_url('admin.css', __FILE__). '">';
}

add_action('admin_head', 'magazi_admin_head');

?>

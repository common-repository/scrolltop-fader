<?php
/*
Plugin Name: ScrollTop Fader
Description: This plugin adds a scroll to top feature with a nifty fade in/fade out and color transition. Includes 18 different images that auto resize based on the device type. Large scroll to top image for HD and desktop computers, medium for tablets, and small for mobile devices. 
Author: CrucialInnovations
Plugin URI: https://www.crucialinnovations.com/scrolltop-fader.html
Text Domain: scrolltop-fader
Version: 1.1
Author URI: https://www.crucialinnovations.com

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

include_once('include/functions.php');
include_once('include/settings.php');

register_activation_hook(__FILE__, 'dme_scroll_top_fader_activation');
register_deactivation_hook(__FILE__, 'dme_scroll_top_fader_deactivation');
register_uninstall_hook(__FILE__, 'dme_scroll_top_fader_uninstall');

$dme_get_fader_status = get_option('dme_scroll_to_top_fader_status');
//enqueue scripts, styles, and link id
if ($dme_get_fader_status == '1') {
	add_action( 'wp_enqueue_scripts', 'dme_scroll_to_top_fader_css' );
	add_action( 'wp_enqueue_scripts', 'dme_scroll_to_top_fader_js', 3 );
	add_action( 'wp_footer', 'dme_scroll_to_top_fader_footer_link_link_id', 1);
}
?>
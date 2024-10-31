<?php
###############################################################
//plugin settings
###############################################################
function dme_scroll_to_top_fader_add_plugin_menu_item() {
	if(is_multisite()) {
		$level = 'manage_options';
	} else {
		$level = 'administrator';
	}
	$menutitle = '<img style="background-color:#1b99d8; border-radius:50%; border:1px solid #acacac;" src="' . plugins_url('images/dme_scrolltop16.png', __FILE__) . '" alt="" height="16" width="16" /> <span style="vertical-align:middle; padding-bottom:11px;">ScrollTop Fader</span>';
	add_options_page('ScrollTop Fader', $menutitle , $level, 'scrolltop-fader', 'dme_scroll_to_top_fader_plugin_settings_page');
	if(is_multisite()) {
		$update_level = 'update_plugins';
	}
	if (is_admin()) {
		$update_level = 'administrator';
	}
	if (! current_user_can( $update_level )) {
		return;
	} else {
		echo dme_scroll_to_top_fader_upgrade_check();
	}
}
add_action('admin_menu', 'dme_scroll_to_top_fader_add_plugin_menu_item');

function dme_scroll_to_top_fader_plugin_settings_page() {
	include_once('admin-help.php'); ?>
	    <div class="dme_fader_wrap">
	    <h1>ScrollTop Fader</h1>
	        <?php
			$img_help_settings = '<img id="dme_fader_img_selection_choices" style="margin-right:10px;" align="left" src="' . plugins_url('images/dme_scrolltop45.png', __FILE__) . '" alt="" height="45" width="45" />';
			?>
		<p style="margin-bottom:22px;"><?php echo $img_help_settings; ?><strong>About ScrollTop Fader:</strong><br>Enter your desired settings below.<br>Be sure to save your settings.<br>You can hover over, or tap the ?'s for help.<br>And, use the "Reset Defaults" to restore settings to original.
		</p>
	    <form method="post" action="options.php">
		<?php
			if (isset($_POST['reset'])) {
  				dme_scroll_to_top_fader_reset_defaults();
			}
			settings_fields('dme-scroll-to-top-fader-section');	           
			do_settings_sections('dme-scroll-to-top-fader-plugin-options');
	        submit_button();  
		?> 
	    </form>
		<form method="post" action="">
			<p class="reset_settings_button"><?php wp_nonce_field('dme-scroll-to-top-fader-plugin-options'); ?><input id="reset_settings_button" name="reset" class="button-primary" type="submit" value="Reset Defaults" onclick="return confirm('Warning ! \n \n You are about to restore default values. \n Are you sure you want to reset all data? \n')"><input type="hidden" name="action" value="reset" />
			</p>
		</form>
	    </div>
<?php
}
function dme_display_scroll_to_top_fader_plugin_fields() {
	$dme_get_fader_status = get_option('dme_scroll_to_top_fader_status');
	$dme_get_fader_border_size = get_option('dme_scroll_to_top_fader_border_size');
	$dme_get_fader_shadow_status = get_option('dme_scroll_to_top_fader_shadow_status');
	if ($dme_get_fader_status == '1') {
		$fader_status_help = '<span style="font-weight:400; font-size:0.95em;"><a href="#" onclick="return false;" id="status_enabled_trigger" class="dme_fader_admin_status_help_question">info</a></span>';
	} elseif ($dme_get_fader_status == '0') {
		$fader_status_help = '<span style="font-weight:400; font-size:0.95em;"><a href="#" onclick="return false;" id="status_disabled_trigger" class="dme_fader_admin_status_help_question">info</a></span>';
	}
	$background_color_help = '<a href="#" onclick="return false;" id="fade_in_color_trigger" class="dme_fader_admin_help_question">?</a>';
	$mouseover_color_help = '<a href="#" onclick="return false;" id="color_one_mouse_enter_trigger" class="dme_fader_admin_help_question">?</a>';
	$scrolldown_help = '<a href="#" onclick="return false;" id="scroll_down_pixels_trigger" class="dme_fader_admin_help_question">?</a>';
	$fadein_help = '<a href="#" onclick="return false;" id="fade_in_time_trigger" class="dme_fader_admin_help_question">?</a>';
	$scrolltop_help = '<a href="#" onclick="return false;" id="scroll_top_speed_trigger" class="dme_fader_admin_help_question">?</a>';
	$transition_help = '<a href="#" onclick="return false;" id="color_delay_one_enter_trigger" class="dme_fader_admin_help_question">?</a>';
	$bottom_pos_help = '<a href="#" onclick="return false;" id="fader_position_bottom_trigger" class="dme_fader_admin_help_question">?</a>';
	$right_pos_help = '<a href="#" onclick="return false;" id="fader_position_right_trigger" class="dme_fader_admin_help_question">?</a>';
	$border_color_help = '<a href="#" onclick="return false;" id="border_color_trigger" class="dme_fader_admin_help_question">?</a>';
	$border_hov_color_help = '<a href="#" onclick="return false;" id="border_hover_color_trigger" class="dme_fader_admin_help_question">?</a>';
	$border_size_help = '<a href="#" onclick="return false;" id="fader_border_size_trigger" class="dme_fader_admin_help_question">?</a>';
	$aarow_color_help = '<a href="#" onclick="return false;" id="fader_aarow_color_trigger" class="dme_fader_admin_help_question">?</a>';
	$img_selection_help = '<span style="font-weight:400; font-size:0.95em;"><a href="#" onclick="return false;" id="fader_image_selection_trigger" class="dme_fader_admin_status_help_question">info</a></span>';
	$css_comp_help = '<span style="font-weight:400; font-size:0.95em;"><a href="#" onclick="return false;" id="compress_css_trigger" class="dme_fader_admin_status_help_question">info</a></span>';
	$js_comp_help = '<span style="font-weight:400; font-size:0.95em;"><a href="#" onclick="return false;" id="compress_js_trigger" class="dme_fader_admin_status_help_question">info</a></span>';
	$milli = '<span style="font-weight:400; font-size:90%;">(milliseconds)</span>';
	$pixels = '<span style="font-weight:400; font-size:90%;">(pixels)</span>';
	$status_disabled_help = '<span style="color:#ff0000;font-weight:normal;font-style:italic;">*Disabled</span>';
	if ($dme_get_fader_status == '1' && $dme_get_fader_shadow_status == '1' || $dme_get_fader_status == '0' && $dme_get_fader_shadow_status == '1') {
		$shadow_status_help = '<span style="font-weight:400; font-size:0.95em;"><a href="#" onclick="return false;" id="shadow_status_enabled_trigger" class="dme_fader_admin_status_help_question">info</a></span>';
	} elseif ($dme_get_fader_status == '1' && $dme_get_fader_shadow_status == '0' || $dme_get_fader_status == '0' && $dme_get_fader_shadow_status == '0') {
		$shadow_status_help = '<span style="font-weight:400; font-size:0.95em;"><a href="#" onclick="return false;" id="shadow_status_disabled_trigger" class="dme_fader_admin_status_help_question">info</a></span>';
	}
	$boxshadow_color_help = '<a href="#" onclick="return false;" id="box_shadow_color_trigger" class="dme_fader_admin_help_question">?</a>';
	$boxshadow_hov_color_help = '<a href="#" onclick="return false;" id="box_shadow_hover_color_trigger" class="dme_fader_admin_help_question">?</a>';
	$boxshadow_horizontal_help = '<a href="#" onclick="return false;" id="box_shadow_horizontal_trigger" class="dme_fader_admin_help_question">?</a>';
	$boxshadow_vertical_help = '<a href="#" onclick="return false;" id="box_shadow_vertical_trigger" class="dme_fader_admin_help_question">?</a>';
	$boxshadow_blur_help = '<a href="#" onclick="return false;" id="box_shadow_blur_trigger" class="dme_fader_admin_help_question">?</a>';
	$boxshadow_spread_help = '<a href="#" onclick="return false;" id="box_shadow_spread_trigger" class="dme_fader_admin_help_question">?</a>';
	###############################################################
	//add sections-settings-fields
	###############################################################
	add_settings_section(
		'dme-scroll-to-top-fader-section',
		'ScrollTop Fader Settings:',
		null,
		'dme-scroll-to-top-fader-plugin-options'
	);
	add_settings_field(
		'dme_scroll_to_top_fader_status',
		"ScrollTop Fader Satus: $fader_status_help",
		'dme_scroll_to_top_fader_status_main_element',
		'dme-scroll-to-top-fader-plugin-options',
		'dme-scroll-to-top-fader-section'
	);
	add_settings_field(
		'dme_scroll_to_top_fader_background_color_in',
		"$background_color_help Background Color:",
		'dme_scroll_to_top_fader_background_color_in_element',
		'dme-scroll-to-top-fader-plugin-options',
		'dme-scroll-to-top-fader-section'
	);
	add_settings_field(
		'dme_scroll_to_top_fader_color_one_mouse_over',
		"$mouseover_color_help Mouse Over Color:",
		'dme_scroll_to_top_fader_color_one_mouse_over_element',
		'dme-scroll-to-top-fader-plugin-options',
		'dme-scroll-to-top-fader-section'
	);
	add_settings_field(
		'dme_scroll_to_top_fader_scroll_down_pixels',
		"$scrolldown_help Scroll Down Pixels: $milli",
		'dme_scroll_to_top_fader_scroll_down_pixels_element',
		'dme-scroll-to-top-fader-plugin-options',
		'dme-scroll-to-top-fader-section'
	);
	add_settings_field(
		'dme_scroll_to_top_fader_fadein',
		"$fadein_help FadeIn / FadeOut Time: $milli",
		'dme_scroll_to_top_fader_fadein_element',
		'dme-scroll-to-top-fader-plugin-options',
		'dme-scroll-to-top-fader-section'
	);
	add_settings_field(
		'dme_scroll_to_top_fader_up_speed',
		"$scrolltop_help Scroll To Top Speed: $milli",
		'dme_scroll_to_top_fader_up_speed_element',
		'dme-scroll-to-top-fader-plugin-options',
		'dme-scroll-to-top-fader-section'
	);
	add_settings_field(
		'dme_scroll_to_top_fader_color_transition_speed',
		"$transition_help Color Transition Speed: $milli",
		'dme_scroll_to_top_fader_color_transition_speed_element',
		'dme-scroll-to-top-fader-plugin-options',
		'dme-scroll-to-top-fader-section'
	);
	add_settings_field(
		'dme_scroll_to_top_fader_image_bottom_position',
		"$bottom_pos_help Image Bottom Position: $pixels",
		'dme_scroll_to_top_fader_image_bottom_position_element',
		'dme-scroll-to-top-fader-plugin-options',
		'dme-scroll-to-top-fader-section'
	);
	add_settings_field(
		'dme_scroll_to_top_fader_image_right_position',
		"$right_pos_help Image Right Position: $pixels",
		'dme_scroll_to_top_fader_image_right_position_element',
		'dme-scroll-to-top-fader-plugin-options',
		'dme-scroll-to-top-fader-section'
	);
	add_settings_field(
		'dme_scroll_to_top_fader_border_color',
		"$border_color_help Border Color:",
		'dme_scroll_to_top_fader_border_color_element',
		'dme-scroll-to-top-fader-plugin-options',
		'dme-scroll-to-top-fader-section'
	);
	add_settings_field(
		'dme_scroll_to_top_fader_border_hover_color',
		"$border_hov_color_help Border Hover Color:",
		'dme_scroll_to_top_fader_border_hover_color_element',
		'dme-scroll-to-top-fader-plugin-options',
		'dme-scroll-to-top-fader-section'
	);
	if ($dme_get_fader_border_size == '0') {
    	add_settings_field(
    		'dme_scroll_to_top_fader_border_size',
    		"$border_size_help Border Size: $pixels $status_disabled_help",
    		'dme_scroll_to_top_fader_border_size_element',
    		'dme-scroll-to-top-fader-plugin-options',
    		'dme-scroll-to-top-fader-section'
    	);
	} else {
    	add_settings_field(
    		'dme_scroll_to_top_fader_border_size',
    		"$border_size_help Border Size: $pixels",
    		'dme_scroll_to_top_fader_border_size_element',
    		'dme-scroll-to-top-fader-plugin-options',
    		'dme-scroll-to-top-fader-section'
    	);
	}
	add_settings_field(
		'dme_scroll_to_top_fader_compress_css_files',
		"Compress css files: $css_comp_help",
		'dme_scroll_to_top_fader_compress_css_files_element',
		'dme-scroll-to-top-fader-plugin-options',
		'dme-scroll-to-top-fader-section'
	);
	add_settings_field(
		'dme_scroll_to_top_fader_compress_js_files',
		"Compress js files: $js_comp_help",
		'dme_scroll_to_top_fader_compress_js_files_element',
		'dme-scroll-to-top-fader-plugin-options',
		'dme-scroll-to-top-fader-section'
	);
	add_settings_field(
		'dme_scroll_to_top_fader_get_img_selection',
		"Image Choices: $img_selection_help",
		'dme_scroll_to_top_fader_get_img_selection_element',
		'dme-scroll-to-top-fader-plugin-options',
		'dme-scroll-to-top-fader-section'
	);
	add_settings_field(
		'dme_scroll_to_top_fader_arrow_color',
		"$aarow_color_help Arrow Color:",
		'dme_scroll_to_top_fader_aarow_color_element',
		'dme-scroll-to-top-fader-plugin-options',
		'dme-scroll-to-top-fader-section'
	);
	add_settings_field(
		'dme_scroll_to_top_fader_shadow_status',
		"Shadow Effect Status: $shadow_status_help",
		'dme_scroll_to_top_fader_shadow_effect_element',
		'dme-scroll-to-top-fader-plugin-options',
		'dme-scroll-to-top-fader-section'
	);
	add_settings_field(
		'dme_scroll_to_top_fader_box_shadow_color',
		"$boxshadow_color_help Shadow Color:",
		'dme_scroll_to_top_fader_shadow_color_element',
		'dme-scroll-to-top-fader-plugin-options',
		'dme-scroll-to-top-fader-section'
	);
	add_settings_field(
		'dme_scroll_to_top_fader_box_shadow_hover_color',
		"$boxshadow_hov_color_help Shadow Mouse Over Color:",
		'dme_scroll_to_top_fader_shadow_hover_color_element',
		'dme-scroll-to-top-fader-plugin-options',
		'dme-scroll-to-top-fader-section'
	);
	add_settings_field(
		'dme_scroll_to_top_fader_box_shadow_horizontal_position',
		"$boxshadow_horizontal_help Horizontal Position: $pixels",
		'dme_scroll_to_top_fader_shadow_horizontal_position_element',
		'dme-scroll-to-top-fader-plugin-options',
		'dme-scroll-to-top-fader-section'
	);
	add_settings_field(
		'dme_scroll_to_top_fader_box_shadow_vertical_position',
		"$boxshadow_vertical_help Vertical Position: $pixels",
		'dme_scroll_to_top_fader_shadow_vertical_position_element',
		'dme-scroll-to-top-fader-plugin-options',
		'dme-scroll-to-top-fader-section'
	);
	add_settings_field(
		'dme_scroll_to_top_fader_box_shadow_blur_position',
		"$boxshadow_blur_help Blur Position: $pixels",
		'dme_scroll_to_top_fader_shadow_blur_position_element',
		'dme-scroll-to-top-fader-plugin-options',
		'dme-scroll-to-top-fader-section'
	);

	add_settings_field(
		'dme_scroll_to_top_fader_box_shadow_spread_position',
		"$boxshadow_spread_help Spread Position: $pixels",
		'dme_scroll_to_top_fader_shadow_spread_position_element',
		'dme-scroll-to-top-fader-plugin-options',
		'dme-scroll-to-top-fader-section'
	);
	###############################################################
	//section, name field, sanitation
	###############################################################
	register_setting(
		'dme-scroll-to-top-fader-section',
		'dme_scroll_to_top_fader_status',
		'dme_sanitize_fader_status_main'
	);
	register_setting(
		'dme-scroll-to-top-fader-section',
		'dme_scroll_to_top_fader_background_color_in',
		'dme_sanitize_hex_check_bkg_col'
	);
	register_setting(
		'dme-scroll-to-top-fader-section',
		'dme_scroll_to_top_fader_is_backgroundcolor_transparent',
		'dme_sanitize_is_bkg_transparent'
	);
	register_setting(
		'dme-scroll-to-top-fader-section',
		'dme_scroll_to_top_fader_color_one_mouse_over',
		'dme_sanitize_hex_check_mse_over_col'
	);
	register_setting(
		'dme-scroll-to-top-fader-section',
		'dme_scroll_to_top_fader_is_color_one_mouse_over_transparent',
		'dme_sanitize_is_col_one_mse_over_transparent'
	);
	register_setting(
		'dme-scroll-to-top-fader-section',
		'dme_scroll_to_top_fader_scroll_down_pixels',
		'dme_sanitize_scroll_down_pixels'
	);
	register_setting(
		'dme-scroll-to-top-fader-section',
		'dme_scroll_to_top_fader_fadein',
		'dme_sanitize_fadein_out_ms'
	);
	register_setting(
		'dme-scroll-to-top-fader-section',
		'dme_scroll_to_top_fader_up_speed',
		'dme_sanitize_up_speed_ms'
	);
	register_setting(
		'dme-scroll-to-top-fader-section',
		'dme_scroll_to_top_fader_color_transition_speed',
		'dme_sanitize_transition_speed_ms'
	);
	register_setting(
		'dme-scroll-to-top-fader-section',
		'dme_scroll_to_top_fader_image_bottom_position',
		'dme_sanitize_image_position_px'
	);
	register_setting(
		'dme-scroll-to-top-fader-section',
		'dme_scroll_to_top_fader_image_right_position',
		'dme_sanitize_image_position_px'
	);
	register_setting(
		'dme-scroll-to-top-fader-section',
		'dme_scroll_to_top_fader_border_color',
		'dme_sanitize_hex_check_border_col'
	);
	register_setting(
		'dme-scroll-to-top-fader-section',
		'dme_scroll_to_top_fader_border_hover_color',
		'dme_sanitize_hex_check_border_hover_col'
	);
	register_setting(
		'dme-scroll-to-top-fader-section',
		'dme_scroll_to_top_fader_border_size',
		'dme_sanitize_the_border_size'
	);
	register_setting(
		'dme-scroll-to-top-fader-section',
		'dme_scroll_to_top_fader_compress_css_files',
		'dme_sanitize_fader_css_comp'
	);
	register_setting(
		'dme-scroll-to-top-fader-section',
		'dme_scroll_to_top_fader_compress_js_files',
		'dme_sanitize_fader_js_comp'
	);
	register_setting(
		'dme-scroll-to-top-fader-section',
		'dme_scroll_to_top_fader_get_img_selection',
		'dme_sanitize_fader_img_choices_status'
	);
	register_setting(
		'dme-scroll-to-top-fader-section',
		'dme_scroll_to_top_fader_arrow_color',
		'dme_sanitize_fader_aarow_choices'
	);
	register_setting(
		'dme-scroll-to-top-fader-section',
		'dme_scroll_to_top_fader_shadow_status',
		'dme_sanitize_fader_shadow_status'
	);
	register_setting(
		'dme-scroll-to-top-fader-section',
		'dme_scroll_to_top_fader_box_shadow_color',
		'dme_sanitize_hex_check_box_shadow_col'
	);
	register_setting(
		'dme-scroll-to-top-fader-section',
		'dme_scroll_to_top_fader_box_shadow_hover_color',
		'dme_sanitize_hex_check_box_shadow_hover_col'
	);
	register_setting(
		'dme-scroll-to-top-fader-section',
		'dme_scroll_to_top_fader_box_shadow_horizontal_position',
		'dme_sanitize_shadow_horizontal_position'
	);
	register_setting(
		'dme-scroll-to-top-fader-section',
		'dme_scroll_to_top_fader_box_shadow_vertical_position',
		'dme_sanitize_shadow_vertical_position'
	);
	register_setting(
		'dme-scroll-to-top-fader-section',
		'dme_scroll_to_top_fader_box_shadow_blur_position',
		'dme_sanitize_shadow_blur_position'
	);
	register_setting(
		'dme-scroll-to-top-fader-section',
		'dme_scroll_to_top_fader_box_shadow_spread_position',
		'dme_sanitize_shadow_spread_position'
	);
}
add_action('admin_init', 'dme_display_scroll_to_top_fader_plugin_fields');
###############################################################
//sanitize and validate input
###############################################################
function dme_sanitize_hex_check_bkg_col($color) { 
	$color = wp_filter_nohtml_kses($color);      
	if (preg_match('/^#[a-f0-9]{6}$/i', $color)) {
   		// Verified OK
		$color = str_replace('#', '', $color); //remove hash store it in db without hash
	} elseif (preg_match('/^[a-f0-9]{6}$/i', $color)) {
    	//$color = '#' . $color; // don't add hash at current time we are storing in db without hash
	} else {
		$color = '1eaaf1'; //else default hex color without hash
	}
	$color = strtolower($color);
	return $color;
}
function dme_sanitize_hex_check_mse_over_col($color) {  
	$color = wp_filter_nohtml_kses($color);
	if (preg_match('/^#[a-f0-9]{6}$/i', $color)) {
		// Verified OK
		$color = str_replace('#', '', $color);
	} elseif (preg_match('/^[a-f0-9]{6}$/i', $color)) {
		//$color = '#' . $color;
	} else {
		$color = '1b99d8';
	}
	$color = strtolower($color);
	return $color;    
}
function dme_sanitize_scroll_down_pixels($pixels) {
	$pixels = wp_filter_nohtml_kses($pixels);
	$max = '9999';
	if ($pixels >= 0  && $pixels <= $max) {
		// OK
	} else {
		$pixels = '600';
	}
	return $pixels;
}
function dme_sanitize_fadein_out_ms($milliseconds) {
	$milliseconds = wp_filter_nohtml_kses($milliseconds);
	$max = '9999';
	if ($milliseconds >= 0  && $milliseconds <= $max) {
		// OK
	} else {
		$milliseconds = '1200';
	}
	return $milliseconds;
}
function dme_sanitize_up_speed_ms($milliseconds) {
	$milliseconds = wp_filter_nohtml_kses($milliseconds);
	$max = '9999';
	if ($milliseconds >= 0  && $milliseconds <= $max) {
		// OK
	} else {
		$milliseconds = '1000';
	}
	return $milliseconds;
}
function dme_sanitize_transition_speed_ms($milliseconds) {
	$milliseconds = wp_filter_nohtml_kses($milliseconds);
	$max = '9999';
	if ($milliseconds >= 0  && $milliseconds <= $max ) {
		// OK
	} else {
		$milliseconds = '250';
	}
	return $milliseconds;
}
function dme_sanitize_image_position_px($pixels) {
	//for both img bottom and img right position
	$pixels = wp_filter_nohtml_kses($pixels);
	$max = '999';
	if ($pixels >= 0  && $pixels <= $max) {
		// OK
	} else {
		$pixels = '30';
	}
	return $pixels;
}
function dme_sanitize_hex_check_border_col($color) {
	$color = wp_filter_nohtml_kses($color);      
	if (preg_match('/^#[a-f0-9]{6}$/i', $color)) {
		// Verified OK
		$color = str_replace('#', '', $color);
	} elseif (preg_match('/^[a-f0-9]{6}$/i', $color)) {
		//$color = '#' . $color;
	} else {
		$color = '505050';
	}
	$color = strtolower($color);
	return $color;  
}
function dme_sanitize_hex_check_border_hover_col($color) {
	$color = wp_filter_nohtml_kses($color);      
	if (preg_match('/^#[a-f0-9]{6}$/i', $color)) {
		// Verified OK
		$color = str_replace('#', '', $color);
	} elseif (preg_match('/^[a-f0-9]{6}$/i', $color)) {
		//$color = '#' . $color;
	} else {
		$color = '414141';
	}
	$color = strtolower($color);
	return $color;  
}
function dme_sanitize_the_border_size($pixels) {
	$pixels = wp_filter_nohtml_kses($pixels);
	$max = '10';
	if ($pixels == 'None' || $pixels == 'none') {
		$pixels = '0';
	} elseif ($pixels >= 0  && $pixels <= $max) {
		// OK
	} else {
		$pixels = '2';
	}
	return $pixels;
}
function dme_sanitize_fader_shadow_status($status) {
	$status = wp_filter_nohtml_kses($status);
	if (preg_match('(1|0)', $status)) {
		// match 1 or 0
	} else {
		$status = '1';
	}
	return $status;
}
function dme_sanitize_hex_check_box_shadow_col($color) {  
	$color = wp_filter_nohtml_kses($color);      
	if (preg_match('/^#[a-f0-9]{6}$/i', $color)) {
		// Verified OK
		$color = str_replace('#', '', $color);
	} elseif (preg_match('/^[a-f0-9]{6}$/i', $color)) {
		//$color = '#' . $color;
	} else {
		$color = '878787';
	}
	$color = strtolower($color);
	return $color;  
}
function dme_sanitize_hex_check_box_shadow_hover_col($color) {  
	$color = wp_filter_nohtml_kses($color);      
	if (preg_match('/^#[a-f0-9]{6}$/i', $color)) {
		// Verified OK
		$color = str_replace('#', '', $color);
	} elseif (preg_match('/^[a-f0-9]{6}$/i', $color)) {
		//$color = '#' . $color;
	} else {
		$color = '4ABBF3';
	}
	$color = strtolower($color);
	return $color;  
}
function dme_sanitize_shadow_horizontal_position($pixels) {
	$pixels = wp_filter_nohtml_kses($pixels);
	$pixels = substr($pixels,0,4);
	$max = '100';
	if ($pixels < $max  && $pixels > -$max ) {
		//match -99 to +99
	} else {
		$pixels = '0';
	}
	return $pixels;
}
function dme_sanitize_shadow_vertical_position($pixels) {
	$pixels = wp_filter_nohtml_kses($pixels);
	$pixels = substr($pixels,0,4);
	$max = '100';
	if ($pixels < $max  && $pixels > -$max ) {
		//match -99 to +99
	} else {
		$pixels = '4';
	}
	return $pixels;
}
function dme_sanitize_shadow_blur_position($pixels) {
	$pixels = wp_filter_nohtml_kses($pixels);
	$pixels = substr($pixels,0,3);
	$max = '100';
	if ($pixels >= 0  && $pixels < $max ) {
		//match -99 to +99
	} else {
		$pixels = '5';
	}
	return $pixels;
}
function dme_sanitize_shadow_spread_position($pixels) {
	$pixels = wp_filter_nohtml_kses($pixels);
	$pixels = substr($pixels,0,4);
	$max = '100';
	if ($pixels < $max  && $pixels > -$max ) {
		//match -99 to +99
	} else {
		$pixels = '0';
	}
	return $pixels;
}
function dme_sanitize_fader_aarow_choices($images) {
	$images = wp_filter_nohtml_kses($images);
	if (preg_match('(black|gray|white)', $images)) {
		// match black, gray, or white
	} else {
		$images = 'black';
	}
	return $images;
}
function dme_sanitize_fader_img_choices_status($images) {
	$images = wp_filter_nohtml_kses($images);
	if (preg_match('(a|b|c|d|e|f)', $images)) {
		// match a to f
	} else {
		$images = 'a';
	}
	return $images;
}
function dme_sanitize_fader_css_comp($status) {
	$status = wp_filter_nohtml_kses($status);
	if (preg_match('(1|0)', $status)) {
		// match 1 or 0
	} else {
		$status = '0';
	}
	return $status;
}
function dme_sanitize_fader_js_comp($status) {
	$status = wp_filter_nohtml_kses($status);
	if (preg_match('(1|0)', $status)) {
		// match 1 or 0
	} else {
		$status = '0';
	}
	return $status;
}
function dme_sanitize_fader_status_main($status) {
	$status = wp_filter_nohtml_kses($status);
	if (preg_match('(1|0)', $status)) {
	// match 1 or 0
	} else {
		$status = '1';
	}
	return $status;
}
function dme_sanitize_is_bkg_transparent($status) {
	$status = wp_filter_nohtml_kses($status);
	if (preg_match('(colorpicker|transparent)', $status)) {
		// match colorpicker or transparent
	} else {
		$status = 'colorpicker';
	}
	return $status;
}
function dme_sanitize_is_col_one_mse_over_transparent($status) {
	$status = wp_filter_nohtml_kses($status);
	if (preg_match('(colorpicker|transparent)', $status)) {
		// match colorpicker or transparent
	} else {
		$status = 'colorpicker';
	}
	return $status;
}
?>
<?php
$dme_get_fader_status = get_option('dme_scroll_to_top_fader_status');
$dme_get_fader_border_size = get_option('dme_scroll_to_top_fader_border_size');
$dme_get_fader_shadow_status = get_option('dme_scroll_to_top_fader_shadow_status');
$dme_get_fader_css_comp = get_option('dme_scroll_to_top_fader_compress_css_files');
$dme_get_fader_js_comp = get_option('dme_scroll_to_top_fader_compress_js_files');
$dme_get_fader_transparency = get_option('dme_scroll_to_top_fader_is_backgroundcolor_transparent');
$dme_get_fader_mouseover_transparency = get_option('dme_scroll_to_top_fader_is_color_one_mouse_over_transparent');
###############################################################
//enabled functions:
###############################################################
if ($dme_get_fader_status == '1') {
    function dme_scroll_to_top_fader_status_main_element() {
        ?>
        <p>
        <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_status" value="1" checked /><span style="color:#444; font-weight:bold;">Enabled</span><br>
        <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_status" value="0" />Disabled</p>
        <?php
    }
###############################################################
    if ($dme_get_fader_transparency == 'colorpicker') {
        function dme_scroll_to_top_fader_background_color_in_element() {
            ?>
            <p>
            <input name="dme_scroll_to_top_fader_background_color_in" size="6" id="dme_scroll_to_top_fader_background_color_in" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_background_color_in')); ?>" />
            <input id="dme_scroll_to_top_fader_is_backgroundcolor_transparent" type="radio" name="dme_scroll_to_top_fader_is_backgroundcolor_transparent" value="colorpicker" checked /><span style="color:#444; font-weight:bold;">Color Picker</span>
            <input id="dme_scroll_to_top_fader_is_backgroundcolor_transparent" type="radio" name="dme_scroll_to_top_fader_is_backgroundcolor_transparent" value="transparent" />Transparent</p>
            <?php
        }
    } elseif ($dme_get_fader_transparency == 'transparent') {
        function dme_scroll_to_top_fader_background_color_in_element() {
            ?>
            <p>
            <input readonly="readonly" name="dme_scroll_to_top_fader_background_color_in" size="6" id="dme_scroll_to_top_fader_background_color_in" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_background_color_in')); ?>" />
            <input id="dme_scroll_to_top_fader_is_backgroundcolor_transparent" type="radio" name="dme_scroll_to_top_fader_is_backgroundcolor_transparent" value="colorpicker" />Color Picker
            <input id="dme_scroll_to_top_fader_is_backgroundcolor_transparent" type="radio" name="dme_scroll_to_top_fader_is_backgroundcolor_transparent" value="transparent" checked /><span style="color:#444; font-weight:bold;">Transparent</span></p>
            <?php
        }
    }
###############################################################
    if ($dme_get_fader_mouseover_transparency == 'colorpicker') {
        function dme_scroll_to_top_fader_color_one_mouse_over_element() {
            ?>
            <p>
            <input name="dme_scroll_to_top_fader_color_one_mouse_over" size="6" id="dme_scroll_to_top_fader_color_one_mouse_over" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_color_one_mouse_over')); ?>" />
            <input id="dme_scroll_to_top_fader_is_color_one_mouse_over_transparent" type="radio" name="dme_scroll_to_top_fader_is_color_one_mouse_over_transparent" value="colorpicker" checked /><span style="color:#444; font-weight:bold;">Color Picker</span>
            <input id="dme_scroll_to_top_fader_is_color_one_mouse_over_transparent" type="radio" name="dme_scroll_to_top_fader_is_color_one_mouse_over_transparent" value="transparent" />Transparent</p>
            <?php
        }
    } elseif ($dme_get_fader_mouseover_transparency == 'transparent') {
        function dme_scroll_to_top_fader_color_one_mouse_over_element() {
            ?>
            <p>
            <input readonly="readonly" name="dme_scroll_to_top_fader_color_one_mouse_over" size="6" id="dme_scroll_to_top_fader_color_one_mouse_over" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_color_one_mouse_over')); ?>" />
            <input id="dme_scroll_to_top_fader_is_color_one_mouse_over_transparent" type="radio" name="dme_scroll_to_top_fader_is_color_one_mouse_over_transparent" value="colorpicker" />Color Picker
            <input id="dme_scroll_to_top_fader_is_color_one_mouse_over_transparent" type="radio" name="dme_scroll_to_top_fader_is_color_one_mouse_over_transparent" value="transparent" checked /><span style="color:#444; font-weight:bold;">Transparent</span></p>
            <?php
        }
    }
###############################################################
    function dme_scroll_to_top_fader_scroll_down_pixels_element() {
        ?>
        <p>
        <input required id="dme_scroll_to_top_fader_value_inputs" type="text" maxlength="4" name="dme_scroll_to_top_fader_scroll_down_pixels" size="6" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_scroll_down_pixels')); ?>" /></p>
        <?php
    }
###############################################################
    function dme_scroll_to_top_fader_fadein_element() {
        ?>
        <p>
        <input required id="dme_scroll_to_top_fader_value_inputs" type="text" maxlength="4" name="dme_scroll_to_top_fader_fadein" size="6" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_fadein')); ?>" /></p>
        <?php
    }
###############################################################
    function dme_scroll_to_top_fader_up_speed_element() {
        ?>
        <p>
        <input required id="dme_scroll_to_top_fader_value_inputs" type="text" maxlength="4" name="dme_scroll_to_top_fader_up_speed" size="6" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_up_speed')); ?>" /></p>
        <?php
    }
###############################################################
    function dme_scroll_to_top_fader_color_transition_speed_element() {
        ?>
        <p>
        <input required id="dme_scroll_to_top_fader_value_inputs" type="text" maxlength="4" name="dme_scroll_to_top_fader_color_transition_speed" size="6" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_color_transition_speed')); ?>" /></p>
        <?php
    }
###############################################################
    function dme_scroll_to_top_fader_image_bottom_position_element() {
        ?>
        <p>
        <input required id="dme_scroll_to_top_fader_value_inputs" type="text" maxlength="3" name="dme_scroll_to_top_fader_image_bottom_position" size="6" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_image_bottom_position')); ?>" /></p>
        <?php
    }
###############################################################
    function dme_scroll_to_top_fader_image_right_position_element() {
        ?>
        <p>
        <input required id="dme_scroll_to_top_fader_value_inputs" type="text" maxlength="3" name="dme_scroll_to_top_fader_image_right_position" size="6" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_image_right_position')); ?>" /></p>
        <?php
    }
###############################################################
    if ($dme_get_fader_border_size == '0') {
        function dme_scroll_to_top_fader_border_color_element() {
            ?>
            <p>
            <input readonly="readonly" name="dme_scroll_to_top_fader_border_color" size="6" id="dme_scroll_to_top_fader_border_color" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_border_color')); ?>" /></p>
            <?php
        }
        function dme_scroll_to_top_fader_border_hover_color_element() {
            ?>
            <p>
            <input readonly="readonly" name="dme_scroll_to_top_fader_border_hover_color" size="6" id="dme_scroll_to_top_fader_border_hover_color" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_border_hover_color')); ?>" /></p>
            <?php
        }
    } else {
        function dme_scroll_to_top_fader_border_color_element() {
            ?>
            <p>
            <input name="dme_scroll_to_top_fader_border_color" size="6" id="dme_scroll_to_top_fader_border_color" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_border_color')); ?>" /></p>
            <?php
        }
        function dme_scroll_to_top_fader_border_hover_color_element() {
            ?>
            <p>
            <input name="dme_scroll_to_top_fader_border_hover_color" size="6" id="dme_scroll_to_top_fader_border_hover_color" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_border_hover_color')); ?>" /></p>
            <?php
        }
    }
###############################################################
    function dme_scroll_to_top_fader_border_size_element() {
        ?>
        <p style="margin:5px 0 20px 0;">
        <input required id="dme_scroll_to_top_fader_value_border_input" type="text" maxlength="2" name="dme_scroll_to_top_fader_border_size" size="3" value="<?php if (get_option('dme_scroll_to_top_fader_border_size') == "0") { echo "None"; } else { echo esc_attr(get_option('dme_scroll_to_top_fader_border_size')); } ?>" /></p>
        <?php
    }
###############################################################
    if ($dme_get_fader_css_comp == '1') {
        function dme_scroll_to_top_fader_compress_css_files_element() {
	        ?>
	        <p>
	        <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_compress_css_files" value="0" />Uncompressed<br>
	        <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_compress_css_files" value="1" checked /><span style="color:#23282d; font-weight:bold;">Minified</span></p>
	        <?php
        }
    } elseif ($dme_get_fader_css_comp == '0') {
    	function dme_scroll_to_top_fader_compress_css_files_element() {
	        ?>
	        <p>
	        <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_compress_css_files" value="0" checked /><span style="color:#23282d; font-weight:bold;">Uncompressed</span><br>
	        <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_compress_css_files" value="1" />Minified</p>
	        <?php
    	}
    }
###############################################################
    if ($dme_get_fader_js_comp == '1') {
    	function dme_scroll_to_top_fader_compress_js_files_element() {
	        ?>
	        <p>	
	        <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_compress_js_files" value="0" />Uncompressed<br>
	        <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_compress_js_files" value="1" checked /><span style="color:#23282d; font-weight:bold;">Minified</span></p>
	        <?php
    	}
    } elseif ($dme_get_fader_js_comp == '0') {
    	function dme_scroll_to_top_fader_compress_js_files_element() {
	        ?>
	        <p>
	        <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_compress_js_files" value="0" checked /><span style="color:#23282d; font-weight:bold;">Uncompressed</span><br>
	        <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_compress_js_files" value="1" />Minified</p>
	        <?php
    	}
    }
###############################################################
    function dme_scroll_to_top_fader_get_img_selection_element() {
        $get_arrow_color = get_option('dme_scroll_to_top_fader_arrow_color');
        $get_img_selection = get_option('dme_scroll_to_top_fader_get_img_selection');
        if ($get_arrow_color == 'black') {
            //get black arrow imgs
            $img_options_a = '<img id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-a-black.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
            $img_options_b = '<img id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-b-black.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
            $img_options_c = '<img id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-c-black.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
            $img_options_d = '<img id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-d-black.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
            $img_options_e = '<img id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-e-black.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
            $img_options_f = '<img id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-f-black.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
        } elseif ($get_arrow_color == 'gray') {
            //get grey arrow imgs
            $img_options_a = '<img id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-a-gray.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
            $img_options_b = '<img id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-b-gray.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
            $img_options_c = '<img id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-c-gray.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
            $img_options_d = '<img id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-d-gray.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
            $img_options_e = '<img id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-e-gray.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
            $img_options_f = '<img id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-f-gray.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
        } elseif ($get_arrow_color == 'white') {
            //get white arrow imgs
            $img_options_a = '<img id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-a-white.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
            $img_options_b = '<img id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-b-white.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
            $img_options_c = '<img id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-c-white.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
            $img_options_d = '<img id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-d-white.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
            $img_options_e = '<img id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-e-white.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
            $img_options_f = '<img id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-f-white.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
        }
        if ($get_img_selection == 'a') {
            ?>
            <p><input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="a" checked /><?php echo $img_options_a; ?>
            <input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="b" /><?php echo $img_options_b; ?>
            <input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="c" /><?php echo $img_options_c; ?></p>
            <p><input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="d" /><?php echo $img_options_d; ?>
            <input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="e" /><?php echo $img_options_e; ?>
            <input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="f" /><?php echo $img_options_f; ?></p>
            <?php
        } elseif ($get_img_selection == 'b') {
            ?>
            <p><input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="a" /><?php echo $img_options_a; ?>
            <input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="b" checked /><?php echo $img_options_b; ?>
            <input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="c" /><?php echo $img_options_c; ?></p>
            <p><input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="d" /><?php echo $img_options_d; ?>
            <input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="e" /><?php echo $img_options_e; ?>
            <input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="f" /><?php echo $img_options_f; ?></p>
            <?php
        } elseif ($get_img_selection == 'c') {
            ?>
            <p><input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="a" /><?php echo $img_options_a; ?>
            <input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="b" /><?php echo $img_options_b; ?>
            <input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="c" checked /><?php echo $img_options_c; ?></p>
            <p><input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="d" /><?php echo $img_options_d; ?>
            <input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="e" /><?php echo $img_options_e; ?>
            <input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="f" /><?php echo $img_options_f; ?></p>
            <?php
        } elseif ($get_img_selection == 'd') {
            ?>
            <p><input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="a" /><?php echo $img_options_a; ?>
            <input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="b" /><?php echo $img_options_b; ?>
            <input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="c" /><?php echo $img_options_c; ?></p>
            <p><input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="d" checked /><?php echo $img_options_d; ?>
            <input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="e" /><?php echo $img_options_e; ?>
            <input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="f" /><?php echo $img_options_f; ?></p>
            <?php
        } elseif ($get_img_selection == 'e') {
            ?>
            <p><input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="a" /><?php echo $img_options_a; ?>
            <input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="b" /><?php echo $img_options_b; ?>
            <input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="c" /><?php echo $img_options_c; ?></p>
            <p><input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="d" /><?php echo $img_options_d; ?>
            <input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="e" checked /><?php echo $img_options_e; ?>
            <input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="f" /><?php echo $img_options_f; ?></p>
            <?php
        } elseif ($get_img_selection == 'f') {
            ?>
            <p><input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="a" /><?php echo $img_options_a; ?>
            <input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="b" /><?php echo $img_options_b; ?>
            <input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="c" /><?php echo $img_options_c; ?></p>
            <p><input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="d" /><?php echo $img_options_d; ?>
            <input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="e" /><?php echo $img_options_e; ?>
            <input id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="f" checked /><?php echo $img_options_f; ?></p>
            <?php
        }
    }
###############################################################
    function dme_scroll_to_top_fader_aarow_color_element() {
        $get_arrow_color = get_option('dme_scroll_to_top_fader_arrow_color');
        if ($get_arrow_color == "black") {
            ?>
            <p>
            <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_arrow_color" value="black" checked /><span style="color:#444; font-weight:bold;">Black</span><br>
            <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_arrow_color" value="gray" />Gray<br>
            <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_arrow_color" value="white" />White
            </p>
            <?php
        } elseif ($get_arrow_color == "gray") {
            ?>
            <p>
            <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_arrow_color" value="black" />Black<br>
            <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_arrow_color" value="gray" checked /><span style="color:#444; font-weight:bold;">Gray</span><br>
            <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_arrow_color" value="white" />White
            </p>
            <?php
        } elseif ($get_arrow_color == "white") {
            ?>
            <p>
            <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_arrow_color" value="black" />Black<br>
            <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_arrow_color" value="gray" />Gray<br>
            <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_arrow_color" value="white" checked /><span style="color:#444; font-weight:bold;">White</span>
            </p>
            <?php
        }
    }
###############################################################
//enabled shadow functions:
###############################################################
    if ($dme_get_fader_shadow_status == '1') {
        function dme_scroll_to_top_fader_shadow_effect_element() {
            ?>
            <p>
            <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_shadow_status" value="1" checked /><span style="color:#444; font-weight:bold;">Enabled</span><br>
            <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_shadow_status" value="0" />Disabled</p>
            <?php
        }
###############################################################
    	function dme_scroll_to_top_fader_shadow_color_element() {
            ?>
            <p>
            <input name="dme_scroll_to_top_fader_box_shadow_color" id="dme_scroll_to_top_fader_box_shadow_color" size="6" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_color')); ?>" /></p>
            <?php
    	}
###############################################################
    	function dme_scroll_to_top_fader_shadow_hover_color_element() {
            ?>
            <p>
            <input name="dme_scroll_to_top_fader_box_shadow_hover_color" size="6" id="dme_scroll_to_top_fader_box_shadow_hover_color" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_hover_color')); ?>" /></p>
            <?php
    	}
###############################################################
    	function dme_scroll_to_top_fader_shadow_horizontal_position_element() {
           ?>
           <p>
           <input required id="dme_scroll_to_top_fader_shadow_value_inputs" type="text" maxlength="3" name="dme_scroll_to_top_fader_box_shadow_horizontal_position" size="3" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_horizontal_position')); ?>" /></p>
           <?php
    	}
###############################################################
    	function dme_scroll_to_top_fader_shadow_vertical_position_element() {
           ?>
           <p>
           <input required id="dme_scroll_to_top_fader_shadow_value_inputs" type="text" maxlength="3" name="dme_scroll_to_top_fader_box_shadow_vertical_position" size="3" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_vertical_position')); ?>" /></p>
           <?php
    	}
###############################################################
    	function dme_scroll_to_top_fader_shadow_blur_position_element() {
           ?>
           <p>
           <input required id="dme_scroll_to_top_fader_shadow_value_inputs" type="text" maxlength="2" name="dme_scroll_to_top_fader_box_shadow_blur_position" size="3" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_blur_position')); ?>" /></p>
           <?php
    	}
###############################################################
    	function dme_scroll_to_top_fader_shadow_spread_position_element() {
           ?>
           <p>
           <input required id="dme_scroll_to_top_fader_shadow_value_inputs" type="text" maxlength="3" name="dme_scroll_to_top_fader_box_shadow_spread_position" size="3" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_spread_position')); ?>" /></p>
           <?php
    	}
###############################################################
//disabled shadow functions:
###############################################################
    } elseif ($dme_get_fader_shadow_status == '0') {
    	function dme_scroll_to_top_fader_shadow_effect_element() {
            ?>
            <p>
            <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_shadow_status" value="1" />Enabled<br>
            <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_shadow_status" value="0" checked /><span style="color:#444; font-weight:bold;">Disabled</span></p>
            <?php
        }
###############################################################
    	function dme_scroll_to_top_fader_shadow_color_element() {
            ?>
            <p>
            <input disabled="disabled" name="dme_scroll_to_top_fader_box_shadow_color" id="dme_scroll_to_top_fader_box_shadow_color" size="6" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_color')); ?>" />
            <input type="hidden" name="dme_scroll_to_top_fader_box_shadow_color" size="6" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_color')); ?>" /></p>
            <?php
    	}
###############################################################
    	function dme_scroll_to_top_fader_shadow_hover_color_element() {
            ?>
            <p>
            <input disabled="disabled" name="dme_scroll_to_top_fader_box_shadow_hover_color" size="6" id="dme_scroll_to_top_fader_box_shadow_hover_color" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_hover_color')); ?>" />
            <input type="hidden" name="dme_scroll_to_top_fader_box_shadow_hover_color" size="6" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_hover_color')); ?>" /></p>
            <?php
    	}
###############################################################
    	function dme_scroll_to_top_fader_shadow_horizontal_position_element() {
           ?>
           <p>
           <input class="dme_fader_inputs_disabled" readonly="readonly" id="dme_scroll_to_top_fader_shadow_value_inputs" type="text" maxlength="3" name="dme_scroll_to_top_fader_box_shadow_horizontal_position" size="3" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_horizontal_position')); ?>" /></p>
           <?php
    	}
###############################################################
    	function dme_scroll_to_top_fader_shadow_vertical_position_element() {
           ?>
           <p>
           <input class="dme_fader_inputs_disabled" readonly="readonly" id="dme_scroll_to_top_fader_shadow_value_inputs" type="text" maxlength="3" name="dme_scroll_to_top_fader_box_shadow_vertical_position" size="3" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_vertical_position')); ?>" /></p>
           <?php
    	}
###############################################################
    	function dme_scroll_to_top_fader_shadow_blur_position_element() {
           ?>
           <p>
           <input class="dme_fader_inputs_disabled" readonly="readonly" id="dme_scroll_to_top_fader_shadow_value_inputs" type="text" maxlength="2" name="dme_scroll_to_top_fader_box_shadow_blur_position" size="3" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_blur_position')); ?>" /></p>
           <?php
    	}
###############################################################
    	function dme_scroll_to_top_fader_shadow_spread_position_element() {
           ?>
           <p>
           <input class="dme_fader_inputs_disabled" readonly="readonly" id="dme_scroll_to_top_fader_shadow_value_inputs" type="text" maxlength="3" name="dme_scroll_to_top_fader_box_shadow_spread_position" size="3" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_spread_position')); ?>" /></p>
           <?php
    	}
    }
###############################################################
//disabled functions:
###############################################################
} elseif ($dme_get_fader_status == '0') {
    function dme_scroll_to_top_fader_status_main_element() {
        ?>
        <p>
        <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_status" value="1" />Enabled<br>
        <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_status" value="0" checked /><span style="color:#444; font-weight:bold;">Disabled</span></p>
        <?php
    }
###############################################################
    if ($dme_get_fader_transparency == 'colorpicker') {
        function dme_scroll_to_top_fader_background_color_in_element() {
            ?>
            <p>
            <input disabled="disabled" name="dme_scroll_to_top_fader_background_color_in" size="6" id="dme_scroll_to_top_fader_background_color_in" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_background_color_in')); ?>" />
            <input type="hidden" name="dme_scroll_to_top_fader_background_color_in" size="6" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_background_color_in')); ?>" />
            <input id="dme_scroll_to_top_fader_is_backgroundcolor_transparent" type="radio" name="dme_scroll_to_top_fader_is_backgroundcolor_transparent" value="colorpicker" checked /><span style="color:#444; font-weight:bold;" class="dme_fader_inputs_disabled">Color Picker</span>
            <input disabled="disabled" id="dme_scroll_to_top_fader_is_backgroundcolor_transparent" type="radio" name="dme_scroll_to_top_fader_is_backgroundcolor_transparent" value="transparent" /><span class="dme_fader_inputs_disabled">Transparent</span></p>
            <?php
        }
    } elseif ($dme_get_fader_transparency == 'transparent') {
        function dme_scroll_to_top_fader_background_color_in_element() {
            ?>
            <p>
            <input disabled="disabled" name="dme_scroll_to_top_fader_background_color_in" size="6" id="dme_scroll_to_top_fader_background_color_in" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_background_color_in')); ?>" />

            <input type="hidden" name="dme_scroll_to_top_fader_background_color_in" size="6" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_background_color_in')); ?>" />
            <input disabled="disabled" id="dme_scroll_to_top_fader_is_backgroundcolor_transparent" type="radio" name="dme_scroll_to_top_fader_is_backgroundcolor_transparent" value="colorpicker" /><span class="dme_fader_inputs_disabled">Color Picker</span>
            <input id="dme_scroll_to_top_fader_is_backgroundcolor_transparent" type="radio" name="dme_scroll_to_top_fader_is_backgroundcolor_transparent" value="transparent" checked /><span style="color:#444; font-weight:bold;" class="dme_fader_inputs_disabled">Transparent</span></p>
            <?php
        }
    }
###############################################################
    if ($dme_get_fader_mouseover_transparency == 'colorpicker') {
        function dme_scroll_to_top_fader_color_one_mouse_over_element() {
            ?>
            <p>
            <input disabled="disabled" name="dme_scroll_to_top_fader_color_one_mouse_over" size="6" id="dme_scroll_to_top_fader_color_one_mouse_over" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_color_one_mouse_over')); ?>" />
            <input type="hidden" name="dme_scroll_to_top_fader_color_one_mouse_over" size="6" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_color_one_mouse_over')); ?>" />
            <input id="dme_scroll_to_top_fader_is_color_one_mouse_over_transparent" type="radio" name="dme_scroll_to_top_fader_is_color_one_mouse_over_transparent" value="colorpicker" checked /><span style="color:#444; font-weight:bold;" class="dme_fader_inputs_disabled">Color Picker</span>
            <input disabled="disabled" id="dme_scroll_to_top_fader_is_color_one_mouse_over_transparent" type="radio" name="dme_scroll_to_top_fader_is_color_one_mouse_over_transparent" value="transparent" /><span class="dme_fader_inputs_disabled">Transparent</span></p>
            <?php
        }
    } elseif ($dme_get_fader_mouseover_transparency == 'transparent') {
        function dme_scroll_to_top_fader_color_one_mouse_over_element() {
            ?>
            <p>
            <input disabled="disabled" name="dme_scroll_to_top_fader_color_one_mouse_over" size="6" id="dme_scroll_to_top_fader_color_one_mouse_over" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_color_one_mouse_over')); ?>" />
            <input type="hidden" name="dme_scroll_to_top_fader_color_one_mouse_over" size="6" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_color_one_mouse_over')); ?>" />
            <input disabled="disabled" id="dme_scroll_to_top_fader_is_color_one_mouse_over_transparent" type="radio" name="dme_scroll_to_top_fader_is_color_one_mouse_over_transparent" value="colorpicker" /><span class="dme_fader_inputs_disabled">Color Picker</span>
            <input id="dme_scroll_to_top_fader_is_color_one_mouse_over_transparent" type="radio" name="dme_scroll_to_top_fader_is_color_one_mouse_over_transparent" value="transparent" checked /><span style="color:#444; font-weight:bold;" class="dme_fader_inputs_disabled">Transparent</span></p>
            <?php
        }
    }
###############################################################
    function dme_scroll_to_top_fader_scroll_down_pixels_element() {
        ?>
        <p>
        <input readonly="readonly" class="dme_fader_inputs_disabled" id="dme_scroll_to_top_fader_value_inputs" type="text" maxlength="4" name="dme_scroll_to_top_fader_scroll_down_pixels" size="6" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_scroll_down_pixels')); ?>" /></p>
        <?php
    }
###############################################################
    function dme_scroll_to_top_fader_fadein_element() {
        ?>
        <p>
        <input readonly="readonly" class="dme_fader_inputs_disabled" id="dme_scroll_to_top_fader_value_inputs" type="text" maxlength="4" name="dme_scroll_to_top_fader_fadein" size="6" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_fadein')); ?>" /></p>
        <?php
    }
###############################################################
    function dme_scroll_to_top_fader_up_speed_element() {
        ?>
        <p>
        <input readonly="readonly" class="dme_fader_inputs_disabled" id="dme_scroll_to_top_fader_value_inputs" type="text" maxlength="4" name="dme_scroll_to_top_fader_up_speed" size="6" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_up_speed')); ?>" /></p>
        <?php
    }
###############################################################
    function dme_scroll_to_top_fader_color_transition_speed_element() {
        ?>
        <p>
        <input readonly="readonly" class="dme_fader_inputs_disabled" id="dme_scroll_to_top_fader_value_inputs" type="text" maxlength="4" name="dme_scroll_to_top_fader_color_transition_speed" size="6" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_color_transition_speed')); ?>" /></p>
        <?php
    }
###############################################################
    function dme_scroll_to_top_fader_image_bottom_position_element() {
        ?>
        <p>
        <input readonly="readonly" class="dme_fader_inputs_disabled" id="dme_scroll_to_top_fader_value_inputs" type="text" maxlength="3" name="dme_scroll_to_top_fader_image_bottom_position" size="6" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_image_bottom_position')); ?>" /></p>
        <?php
    }
###############################################################
    function dme_scroll_to_top_fader_image_right_position_element() {
        ?>
        <p>
        <input readonly="readonly" class="dme_fader_inputs_disabled" id="dme_scroll_to_top_fader_value_inputs" type="text" maxlength="3" name="dme_scroll_to_top_fader_image_right_position" size="6" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_image_right_position')); ?>" /></p>
        <?php
    }
###############################################################
    function dme_scroll_to_top_fader_border_color_element() {
        ?>
        <p>
        <input disabled="disabled" name="dme_scroll_to_top_fader_border_color" size="6" id="dme_scroll_to_top_fader_border_color" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_border_color')); ?>" />
        <input type="hidden" name="dme_scroll_to_top_fader_border_color" size="6" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_border_color')); ?>" /></p>
        <?php
    }
###############################################################
    function dme_scroll_to_top_fader_border_hover_color_element() {
        ?>
        <p>
        <input disabled="disabled" name="dme_scroll_to_top_fader_border_hover_color" size="6" id="dme_scroll_to_top_fader_border_hover_color" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_border_hover_color')); ?>" />
        <input type="hidden" name="dme_scroll_to_top_fader_border_hover_color" size="6" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_border_hover_color')); ?>" /></p>
        <?php
    }
###############################################################
    function dme_scroll_to_top_fader_border_size_element() {
        ?>
        <p style="margin:5px 0 20px 0;">
        <input readonly="readonly" class="dme_fader_inputs_disabled" id="dme_scroll_to_top_fader_value_border_input" type="text" maxlength="2" name="dme_scroll_to_top_fader_border_size" size="3" value="<?php if (get_option('dme_scroll_to_top_fader_border_size') == "0") { echo "None"; } else { echo esc_attr(get_option('dme_scroll_to_top_fader_border_size')); } ?>" /></p>
        <?php
    }
###############################################################
    if ($dme_get_fader_css_comp == '1') {
    	function dme_scroll_to_top_fader_compress_css_files_element() {
	        ?>
	        <p>
	        <input disabled="disabled" id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_compress_css_files" value="0" /><span class="dme_fader_inputs_disabled">Uncompressed</span><br>
	        <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_compress_css_files" value="1" checked /><span style="color:#23282d; font-weight:bold;">Minified</span></p>
	        <?php
    	}
    } else  if ($dme_get_fader_css_comp == '0') {
    	function dme_scroll_to_top_fader_compress_css_files_element() {
	        ?>
	        <p>
	        <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_compress_css_files" value="0" checked /><span style="color:#23282d; font-weight:bold;">Uncompressed</span><br>
	        <input disabled="disabled" id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_compress_css_files" value="1" /><span class="dme_fader_inputs_disabled">Minified</span></p>
	        <?php
    	}
    }
###############################################################
    if ($dme_get_fader_js_comp == '1') {
    	function dme_scroll_to_top_fader_compress_js_files_element() {
	        ?>
	        <p>
	        <input disabled="disabled" id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_compress_js_files" value="0" /><span class="dme_fader_inputs_disabled">Uncompressed</span><br>
	        <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_compress_js_files" value="1" checked /><span style="color:#23282d; font-weight:bold;">Minified</span></p>
	        <?php
    	}
    } else  if ($dme_get_fader_js_comp == '0') {
    	function dme_scroll_to_top_fader_compress_js_files_element() {
	        ?>
	        <p>
	        <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_compress_js_files" value="0" checked /><span style="color:#23282d; font-weight:bold;">Uncompressed</span><br>
	        <input disabled="disabled"  id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_compress_js_files" value="1" /><span class="dme_fader_inputs_disabled">Minified</span></p>
	        <?php
    	}
    }
###############################################################
    function dme_scroll_to_top_fader_get_img_selection_element() {
        $get_arrow_color = get_option('dme_scroll_to_top_fader_arrow_color');
        $get_img_selection = get_option('dme_scroll_to_top_fader_get_img_selection');
        if ($get_arrow_color == 'black') {
            //get black arrow imgs
            $img_options_a = '<img class="dme_fader_inputs_disabled" id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-a-black.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
            $img_options_b = '<img class="dme_fader_inputs_disabled" id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-b-black.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
            $img_options_c = '<img class="dme_fader_inputs_disabled" id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-c-black.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
            $img_options_d = '<img class="dme_fader_inputs_disabled" id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-d-black.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
            $img_options_e = '<img class="dme_fader_inputs_disabled" id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-e-black.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
            $img_options_f = '<img class="dme_fader_inputs_disabled" id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-f-black.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
        } elseif ($get_arrow_color == 'gray') {
            //get grey arrow imgs
            $img_options_a = '<img class="dme_fader_inputs_disabled" id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-a-gray.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
            $img_options_b = '<img class="dme_fader_inputs_disabled" id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-b-gray.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
            $img_options_c = '<img class="dme_fader_inputs_disabled" id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-c-gray.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
            $img_options_d = '<img class="dme_fader_inputs_disabled" id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-d-gray.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
            $img_options_e = '<img class="dme_fader_inputs_disabled" id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-e-gray.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
            $img_options_f = '<img class="dme_fader_inputs_disabled" id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-f-gray.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
        } elseif ($get_arrow_color == 'white') {
            //get white arrow imgs
            $img_options_a = '<img class="dme_fader_inputs_disabled" id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-a-white.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
            $img_options_b = '<img class="dme_fader_inputs_disabled" id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-b-white.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
            $img_options_c = '<img class="dme_fader_inputs_disabled" id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-c-white.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
            $img_options_d = '<img class="dme_fader_inputs_disabled" id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-d-white.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
            $img_options_e = '<img class="dme_fader_inputs_disabled" id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-e-white.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
            $img_options_f = '<img class="dme_fader_inputs_disabled" id="dme_fader_img_selection_choices" src="' . plugins_url('images/up-45-f-white.png', dirname(__FILE__)) . '" alt="" height="45" width="45" />';
        }
        if ($get_img_selection == 'a') {
            ?>
            <p><input class="dme_fader_inputs_disabled" readonly="readonly" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="a" checked /><?php echo $img_options_a; ?>
            <input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="b" /><?php echo $img_options_b; ?>
            <input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="c" /><?php echo $img_options_c; ?></p>
            <p><input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="d" /><?php echo $img_options_d; ?>
            <input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="e" /><?php echo $img_options_e; ?>
            <input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="f" /><?php echo $img_options_f; ?></p>
            <?php
        } elseif ($get_img_selection == 'b') {
            ?>
            <p><input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="a" /><?php echo $img_options_a; ?>
            <input class="dme_fader_inputs_disabled" readonly="readonly" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="b" checked /><?php echo $img_options_b; ?>
            <input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="c" /><?php echo $img_options_c; ?></p>
            <p><input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="d" /><?php echo $img_options_d; ?>
            <input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="e" /><?php echo $img_options_e; ?>
            <input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="f" /><?php echo $img_options_f; ?></p>
            <?php
        } elseif ($get_img_selection == 'c') {
            ?>
            <p><input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="a" /><?php echo $img_options_a; ?>
            <input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="b" /><?php echo $img_options_b; ?>
            <input class="dme_fader_inputs_disabled" readonly="readonly" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="c" checked /><?php echo $img_options_c; ?></p>
            <p><input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="d" /><?php echo $img_options_d; ?>
            <input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="e" /><?php echo $img_options_e; ?>
            <input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="f" /><?php echo $img_options_f; ?></p>
            <?php
        } elseif ($get_img_selection == 'd') {
            ?>
            <p><input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="a" /><?php echo $img_options_a; ?>
            <input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="b" /><?php echo $img_options_b; ?>
            <input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="c" /><?php echo $img_options_c; ?></p>
            <p><input class="dme_fader_inputs_disabled" readonly="readonly" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="d" checked /><?php echo $img_options_d; ?>
            <input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="e" /><?php echo $img_options_e; ?>
            <input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="f" /><?php echo $img_options_f; ?></p>
            <?php
        } elseif ($get_img_selection == 'e') {
            ?>
            <p><input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="a" /><?php echo $img_options_a; ?>
            <input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="b" /><?php echo $img_options_b; ?>
            <input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="c" /><?php echo $img_options_c; ?></p>
            <p><input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="d" /><?php echo $img_options_d; ?>
            <input class="dme_fader_inputs_disabled" readonly="readonly" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="e" checked /><?php echo $img_options_e; ?>
            <input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="f" /><?php echo $img_options_f; ?></p>
            <?php
        } elseif ($get_img_selection == 'f') {
            ?>
            <p><input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="a" /><?php echo $img_options_a; ?>
            <input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="b" /><?php echo $img_options_b; ?>
            <input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="c" /><?php echo $img_options_c; ?></p>
            <p><input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="d" /><?php echo $img_options_d; ?>
            <input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="e" /><?php echo $img_options_e; ?>
            <input class="dme_fader_inputs_disabled" readonly="readonly" id="dme_scroll_to_top_fader_get_img_selection" type="radio" name="dme_scroll_to_top_fader_get_img_selection" value="f" checked /><?php echo $img_options_f; ?></p>
            <?php
        }
    }
###############################################################
    function dme_scroll_to_top_fader_aarow_color_element() {
        $get_arrow_color = get_option('dme_scroll_to_top_fader_arrow_color');
        if ($get_arrow_color == "black") {
            ?>
            <p>
            <input class="dme_fader_inputs_disabled" readonly="readonly" id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_arrow_color" value="black" checked /><span style="color:#444; font-weight:bold;">Black</span><br>
            <input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_arrow_color" value="gray" />Gray<br>
            <input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_arrow_color" value="white" />White
            </p>
            <?php
        } elseif ($get_arrow_color == "gray") {
            ?>
            <p>
            <input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_arrow_color" value="black" />Black<br>
            <input class="dme_fader_inputs_disabled" readonly="readonly" id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_arrow_color" value="gray" checked /><span style="color:#444; font-weight:bold;">Gray</span><br>
            <input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_arrow_color" value="white" />White
            </p>
            <?php
        } elseif ($get_arrow_color == "white") {
            ?>
            <p>
            <input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_arrow_color" value="black" />Black<br>
            <input class="dme_fader_inputs_disabled" disabled="disabled" id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_arrow_color" value="gray" />Gray<br>
            <input class="dme_fader_inputs_disabled" readonly="readonly" id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_arrow_color" value="white" checked /><span style="color:#444; font-weight:bold;">White</span>
            </p>
            <?php
        }
    }
###############################################################
//enabled shadow functions:
###############################################################
    if ($dme_get_fader_shadow_status == '1') {
    	function dme_scroll_to_top_fader_shadow_effect_element() {
            ?>
            <p>
            <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_shadow_status" value="1" checked /><span style="color:#444; font-weight:bold;">Enabled</span><br>
            <input disabled="disabled" id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_shadow_status" value="0" /><span class="dme_fader_inputs_disabled">Disabled</span></p>
            <?php
        }
###############################################################
    	function dme_scroll_to_top_fader_shadow_color_element() {
            ?>
            <p>
            <input disabled="disabled" name="dme_scroll_to_top_fader_box_shadow_color" id="dme_scroll_to_top_fader_box_shadow_color" size="6" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_color')); ?>" />
            <input type="hidden" name="dme_scroll_to_top_fader_box_shadow_color" size="6" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_color')); ?>" /></p>
            <?php
    	}
###############################################################
    	function dme_scroll_to_top_fader_shadow_hover_color_element() {
            ?>
            <p>
            <input disabled="disabled" name="dme_scroll_to_top_fader_box_shadow_hover_color" size="6" id="dme_scroll_to_top_fader_box_shadow_hover_color" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_hover_color')); ?>" />
            <input type="hidden" name="dme_scroll_to_top_fader_box_shadow_hover_color" size="6" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_hover_color')); ?>" /></p>
            <?php
    	}
###############################################################
    	function dme_scroll_to_top_fader_shadow_horizontal_position_element() {
           ?>
           <p>
           <input class="dme_fader_inputs_disabled" readonly="readonly" id="dme_scroll_to_top_fader_shadow_value_inputs" type="text" maxlength="3" name="dme_scroll_to_top_fader_box_shadow_horizontal_position" size="3" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_horizontal_position')); ?>" /></p>
           <?php
    	}
###############################################################
    	function dme_scroll_to_top_fader_shadow_vertical_position_element() {
           ?>
           <p>
           <input class="dme_fader_inputs_disabled" readonly="readonly" id="dme_scroll_to_top_fader_shadow_value_inputs" type="text" maxlength="3" name="dme_scroll_to_top_fader_box_shadow_vertical_position" size="3" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_vertical_position')); ?>" /></p>
           <?php
    	}
###############################################################
    	function dme_scroll_to_top_fader_shadow_blur_position_element() {
           ?>
           <p>
           <input class="dme_fader_inputs_disabled" readonly="readonly" id="dme_scroll_to_top_fader_shadow_value_inputs" type="text" maxlength="2" name="dme_scroll_to_top_fader_box_shadow_blur_position" size="3" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_blur_position')); ?>" /></p>
           <?php
    	}
###############################################################
    	function dme_scroll_to_top_fader_shadow_spread_position_element() {
           ?>
           <p>
           <input class="dme_fader_inputs_disabled" readonly="readonly" id="dme_scroll_to_top_fader_shadow_value_inputs" type="text" maxlength="3" name="dme_scroll_to_top_fader_box_shadow_spread_position" size="3" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_spread_position')); ?>" /></p>
           <?php
    	}
###############################################################
//disabled shadow functions:
###############################################################
    } elseif ($dme_get_fader_shadow_status == '0') {
    	function dme_scroll_to_top_fader_shadow_effect_element() {
            ?>
            <p>
            <input disabled="disabled" id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_shadow_status" value="1" /><span class="dme_fader_inputs_disabled">Enabled</span><br>
            <input id="dme_scroll_to_top_fader_enabled_disabled_inputs" type="radio" name="dme_scroll_to_top_fader_shadow_status" value="0" checked /><span style="color:#444; font-weight:bold;">Disabled</span></p>
            <?php
        }
###############################################################
    	function dme_scroll_to_top_fader_shadow_color_element() {
            ?>
            <p>
            <input disabled="disabled" name="dme_scroll_to_top_fader_box_shadow_color" id="dme_scroll_to_top_fader_box_shadow_color" size="6" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_color')); ?>" />
            <input type="hidden" name="dme_scroll_to_top_fader_box_shadow_color" size="6" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_color')); ?>" /></p>
            <?php
    	}
###############################################################
    	function dme_scroll_to_top_fader_shadow_hover_color_element() {
            ?>
            <p>
            <input disabled="disabled" name="dme_scroll_to_top_fader_box_shadow_hover_color" size="6" id="dme_scroll_to_top_fader_box_shadow_hover_color" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_hover_color')); ?>" />
            <input type="hidden" name="dme_scroll_to_top_fader_box_shadow_hover_color" size="6" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_hover_color')); ?>" /></p>
            <?php
    	}
###############################################################
    	function dme_scroll_to_top_fader_shadow_horizontal_position_element() {
           ?>
           <p>
           <input class="dme_fader_inputs_disabled" readonly="readonly" id="dme_scroll_to_top_fader_shadow_value_inputs" type="text" maxlength="3" name="dme_scroll_to_top_fader_box_shadow_horizontal_position" size="3" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_horizontal_position')); ?>" /></p>
           <?php
    	}
###############################################################
    	function dme_scroll_to_top_fader_shadow_vertical_position_element() {
           ?>
           <p>
           <input class="dme_fader_inputs_disabled" readonly="readonly" id="dme_scroll_to_top_fader_shadow_value_inputs" type="text" maxlength="3" name="dme_scroll_to_top_fader_box_shadow_vertical_position" size="3" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_vertical_position')); ?>" /></p>
           <?php
    	}
###############################################################
    	function dme_scroll_to_top_fader_shadow_blur_position_element() {
           ?>
           <p>
           <input class="dme_fader_inputs_disabled" readonly="readonly" id="dme_scroll_to_top_fader_shadow_value_inputs" type="text" maxlength="2" name="dme_scroll_to_top_fader_box_shadow_blur_position" size="3" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_blur_position')); ?>" /></p>
           <?php
    	}
###############################################################
    	function dme_scroll_to_top_fader_shadow_spread_position_element() {
           ?>
           <p>
           <input class="dme_fader_inputs_disabled" readonly="readonly" id="dme_scroll_to_top_fader_shadow_value_inputs" type="text" maxlength="3" name="dme_scroll_to_top_fader_box_shadow_spread_position" size="3" value="<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_spread_position')); ?>" /></p>
           <?php
    	}
    }
}
###############################################################
//Reset Defaults
###############################################################
function dme_scroll_to_top_fader_reset_defaults() {
  update_option('dme_scroll_to_top_fader_status', '1');
  update_option('dme_scroll_to_top_fader_background_color_in', '1eaaf1');
  update_option('dme_scroll_to_top_fader_is_backgroundcolor_transparent', 'colorpicker');
  update_option('dme_scroll_to_top_fader_is_color_one_mouse_over_transparent', 'colorpicker');
  update_option('dme_scroll_to_top_fader_color_one_mouse_over', '1b99d8');
  update_option('dme_scroll_to_top_fader_scroll_down_pixels', '600');
  update_option('dme_scroll_to_top_fader_fadein', '1200');
  update_option('dme_scroll_to_top_fader_up_speed', '1000');
  update_option('dme_scroll_to_top_fader_color_transition_speed', '250');
  update_option('dme_scroll_to_top_fader_image_bottom_position', '30');
  update_option('dme_scroll_to_top_fader_image_right_position', '30');
  update_option('dme_scroll_to_top_fader_border_color', '505050');
  update_option('dme_scroll_to_top_fader_border_hover_color', '414141');
  update_option('dme_scroll_to_top_fader_border_size', '2');
  update_option('dme_scroll_to_top_fader_shadow_status', '1');
  update_option('dme_scroll_to_top_fader_box_shadow_color', '878787');
  update_option('dme_scroll_to_top_fader_box_shadow_hover_color', '4abbf3');
  update_option('dme_scroll_to_top_fader_box_shadow_horizontal_position', '2');
  update_option('dme_scroll_to_top_fader_box_shadow_vertical_position', '3');
  update_option('dme_scroll_to_top_fader_box_shadow_blur_position', '4');
  update_option('dme_scroll_to_top_fader_box_shadow_spread_position', '0');
  update_option('dme_scroll_to_top_fader_arrow_color', 'black');
  update_option('dme_scroll_to_top_fader_get_img_selection', 'a');
  update_option('dme_scroll_to_top_fader_compress_css_files', '0');
  update_option('dme_scroll_to_top_fader_compress_js_files', '0');
  echo '<body onload="javascript:setTimeout(function(){ location.reload(true); },1500);">';		
  echo '<span style="color:green; font-weight:bold; font-size:120%;">Resetting! Default values will be loaded in just a moment...</span>';
}
###############################################################
//Enqueue Plugin Admin Scripts and Styles
###############################################################
function dme_scroll_top_fader_admin_enqueue($dme_scrolltop_fader_enqueue_admin_css_js) {
    if ( 'settings_page_scrolltop-fader' != $dme_scrolltop_fader_enqueue_admin_css_js) {
    return;
  }
  $dme_get_fader_css_comp = get_option('dme_scroll_to_top_fader_compress_css_files');
  $dme_get_fader_js_comp = get_option('dme_scroll_to_top_fader_compress_js_files');
  if ($dme_get_fader_css_comp == '0') {
    $css_admin_type = plugins_url( 'css/dme-scroll-to-top-fader-admin.css', __FILE__ );
    $css_spectrum_type = plugins_url( 'css/dme-spectrum.css', __FILE__ );
  } elseif ($dme_get_fader_css_comp == '1') {
    $css_admin_type = plugins_url( 'css/dme-scroll-to-top-fader-admin.min.css', __FILE__ );
    $css_spectrum_type = plugins_url( 'css/dme-spectrum.min.css', __FILE__ );
  }
  if ($dme_get_fader_js_comp == '0') {
    $js_spectrum_type = plugins_url( 'js/dme-spectrum.js', __FILE__ );
    $js_admin_help_type = plugins_url( 'js/dme-admin-help.js', __FILE__ );
  } elseif ($dme_get_fader_js_comp == '1') {
    $js_spectrum_type = plugins_url( 'js/dme-spectrum.min.js', __FILE__ );
    $js_admin_help_type = plugins_url( 'js/dme-admin-help.min.js', __FILE__ );
  }
  wp_register_style(
    'dmescrolltotopfaderadmincss',
    $css_admin_type,
    '',
    '1.1.0',
    'all'
  );
  wp_enqueue_style(
    'dmescrolltotopfaderadmincss'
  );
  /*-----Spectrum jQuery and CSS-----*/
  wp_register_style(
    'dmespectrumcss',
    $css_spectrum_type,
    '',
    '1.1.0',
    'all'
  );
  wp_enqueue_style(
    'dmespectrumcss'
  );
  wp_register_script(
    'dmespectrumjs',
    $js_spectrum_type,
    array( 'jquery' ),
    '1.1.0',
    true
  );
  wp_enqueue_script(
    'dmespectrumjs'
  );
  wp_register_script(
    'dmescrolltotopfaderadminhelpjs',
    $js_admin_help_type,
    array( 'jquery','dmespectrumjs' ),
    '1.1.0',
    true
  );
  wp_enqueue_script(
    'dmescrolltotopfaderadminhelpjs'
  );
}
add_action( 'admin_enqueue_scripts', 'dme_scroll_top_fader_admin_enqueue' );
###############################################################
//add custom spectrum color picker css to admin plugin header
###############################################################
function dme_scroll_top_fader_spectrum_admin_head() {
    ?>
  <style type="text/css">
  .sp-replacer {min-width: 67px; box-shadow: 1px 2px 2px #6E6E6E; border: 1px solid black; border-radius: 5%; margin: 4px 10px 4px 15px;}
  .sp-preview {width: 47px; color: #000;}
  .sp-container {border-radius: 3%; box-shadow: 5px 5px 5px 0px #6E6E6E;}
  .sp-cancel {font-weight: bold;}
  <?php 
  $colorpicker_disabled = ' {filter: alpha(opacity=60); opacity: 0.6;}';
  $dme_get_fader_transparency = esc_attr(get_option('dme_scroll_to_top_fader_is_backgroundcolor_transparent'));
  $dme_get_fader_status = esc_attr(get_option('dme_scroll_to_top_fader_status'));
  $get_background_color = '#' . esc_attr(get_option('dme_scroll_to_top_fader_background_color_in'));
  $dme_get_fader_mouseover_transparency = esc_attr(get_option('dme_scroll_to_top_fader_is_color_one_mouse_over_transparent'));
  $get_mouseover_color = '#' . esc_attr(get_option('dme_scroll_to_top_fader_color_one_mouse_over'));
  $get_border_color = '#' . esc_attr(get_option('dme_scroll_to_top_fader_border_color'));
  $dme_get_fader_border_size = esc_attr(get_option('dme_scroll_to_top_fader_border_size'));
  $get_border_hover_color = '#' . esc_attr(get_option('dme_scroll_to_top_fader_border_hover_color'));
  $dme_get_fader_shadow_status = esc_attr(get_option('dme_scroll_to_top_fader_shadow_status'));
  $box_shadow_color_is = '#' . esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_color'));
  $box_shadow_hover_color_is = '#' . esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_hover_color'));
  if ($dme_get_fader_transparency == 'transparent' || $dme_get_fader_status == '0') {
    echo '.get_background_color_disabled' . $colorpicker_disabled;
  } else {
    echo '.get_background_color {background-color: ' . $get_background_color . ';}';
  }
  if ($dme_get_fader_mouseover_transparency == 'transparent' || $dme_get_fader_status == '0') {
    echo '.get_mouse_over_color_disabled' . $colorpicker_disabled;
  } else {
    echo '.get_mouse_over_color {background-color: ' . $get_mouseover_color . ';}';
  }
  if ($dme_get_fader_status == '0' || $dme_get_fader_border_size == '0') {
    echo '.get_border_color_disabled' . $colorpicker_disabled;
  } else {
    echo '.get_border_color {background-color: ' . $get_border_color . ';}';
  }
  if ($dme_get_fader_status == '0' || $dme_get_fader_border_size == '0') {
    echo '.get_border_hover_color_disabled' . $colorpicker_disabled;
  } else {
    echo '.get_border_hover_color {background-color: ' . $get_border_hover_color . ';}';
  }
  if ($dme_get_fader_status == '0' || $dme_get_fader_shadow_status == '0') {
    echo '.get_shadow_color_disabled' . $colorpicker_disabled;
  } else {
    echo '.get_shadow_color {background-color: ' . $box_shadow_color_is . ';}';
  }
  if ($dme_get_fader_status == '0' || $dme_get_fader_shadow_status == '0') {
    echo '.get_shadow_hover_color_disabled' . $colorpicker_disabled;
  } else {
    echo '.get_shadow_hover_color {background-color: ' . $box_shadow_hover_color_is . ';}';
  }
  ?>
  </style>
  <?php
}
if (isset($_GET['page']) && $_GET['page'] == 'scrolltop-fader') {
    add_action( 'admin_head', 'dme_scroll_top_fader_spectrum_admin_head');
}
###############################################################
//add custom spectrum color picker jquery  to admin plugin header
###############################################################
function dme_scroll_top_fader_spectrum_admin_footer() {
      ?>
      <script type="text/javascript">
        jQuery(document).ready(function($) {
          $("#dme_scroll_to_top_fader_background_color_in").spectrum({
            color: "#<?php echo esc_attr(get_option('dme_scroll_to_top_fader_background_color_in')); ?>",
            preferredFormat: "hex",
            showInput: true,
            //showPalette: true,
            //showInitial: true,
            replacerClassName: "get_background_color_disabled",
            containerClassName: "get_background_color"
          });
          $("#dme_scroll_to_top_fader_color_one_mouse_over").spectrum({
            color: "#<?php echo esc_attr(get_option('dme_scroll_to_top_fader_color_one_mouse_over')); ?>",
            preferredFormat: "hex",
            showInput: true,
            replacerClassName: "get_mouse_over_color_disabled",
            containerClassName: "get_mouse_over_color"
          });
          $("#dme_scroll_to_top_fader_border_color").spectrum({
            color: "#<?php echo esc_attr(get_option('dme_scroll_to_top_fader_border_color')); ?>",
            preferredFormat: "hex",
            showInput: true,
            replacerClassName: "get_border_color_disabled",
            containerClassName: "get_border_color"
          });
          $("#dme_scroll_to_top_fader_border_hover_color").spectrum({
            color: "#<?php echo esc_attr(get_option('dme_scroll_to_top_fader_border_hover_color')); ?>",
            preferredFormat: "hex",
            showInput: true,
            replacerClassName: "get_border_hover_color_disabled",
            containerClassName: "get_border_hover_color"
          });
          $("#dme_scroll_to_top_fader_box_shadow_color").spectrum({
            color: "#<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_color')); ?>",
            preferredFormat: "hex",
            showInput: true,
            replacerClassName: "get_shadow_color_disabled",
            containerClassName: "get_shadow_color"
          });
          $("#dme_scroll_to_top_fader_box_shadow_hover_color").spectrum({
            color: "#<?php echo esc_attr(get_option('dme_scroll_to_top_fader_box_shadow_hover_color')); ?>",
            preferredFormat: "hex",
            showInput: true,
            replacerClassName: "get_shadow_hover_color_disabled",
            containerClassName: "get_shadow_hover_color"
          });
        });
      </script>
        <?php
}
//add above jquery script to plugin options page only
if (isset($_GET['page']) && $_GET['page'] == 'scrolltop-fader') {
    add_action( 'admin_footer', 'dme_scroll_top_fader_spectrum_admin_footer');
}
###############################################################
//Upgrade Check
###############################################################
/*--UPGRADE CHECK For future upgrades and development--*/
function dme_scroll_to_top_fader_upgrade_check() {
  $dme_get_fader_version = get_option('dme_scroll_to_top_fader_version');
  $dme_new_fader_version = '1.1.0';
  if ($dme_get_fader_version == '1.0.0') {
    // if version is 1.0.0 only do this (1.0.1+ will aready have it):
    delete_option('dme_scroll_to_top_fader_shadow_color');
    delete_option('dme_scroll_to_top_fader_shadow_is_light');
    delete_option('dme_scroll_to_top_fader_shadow_hover_is_light');
    delete_option('dme_scroll_to_top_fader_shadow_is_dark');
    delete_option('dme_scroll_to_top_fader_shadow_hover_is_dark');
  }
  if ($dme_get_fader_version == '1.0.1') {
    // if version is 1.0.1 only do this (1.0.1+ will aready have it):
    delete_option('dme_scroll_to_top_fader_shadow_color');
    delete_option('dme_scroll_to_top_fader_shadow_is_light');
    delete_option('dme_scroll_to_top_fader_shadow_hover_is_light');
    delete_option('dme_scroll_to_top_fader_shadow_is_dark');
    delete_option('dme_scroll_to_top_fader_shadow_hover_is_dark');
  }
  if (version_compare($dme_get_fader_version, $dme_new_fader_version) == -1) {
    # Execute upgrade logic here
    # Update the version value
    update_option('dme_scroll_to_top_fader_version', $dme_new_fader_version);
  }
}
/*--UPGRADE CHECK--*/
###############################################################
/*--FrontEnd--*/
//scroll top css
###############################################################
function dme_scroll_to_top_fader_css() {
  $dme_get_fader_css_comp = get_option('dme_scroll_to_top_fader_compress_css_files');
  if ($dme_get_fader_css_comp == '0') { 
    $css_type = plugins_url( 'css/dme-scroll-to-top-fader.css', dirname(__FILE__ ));
  } elseif ($dme_get_fader_css_comp == '1') { 
    $css_type = plugins_url( 'css/dme-scroll-to-top-fader.min.css', dirname(__FILE__ ));
  }
  wp_register_style(
  'dmescrolltotopfadercss',
  $css_type,
  '',
  '1.1.0',
  'all'
  );
  wp_enqueue_style(
  'dmescrolltotopfadercss'
  );
}
###############################################################
/*--FrontEnd--*/
//scroll top js
###############################################################
function dme_scroll_to_top_fader_js() {
  $dme_get_fader_js_comp = get_option('dme_scroll_to_top_fader_compress_js_files');
  if ($dme_get_fader_js_comp == '0') { 
    $js_type = plugins_url( 'js/dme-scroll-to-top-fader.js', dirname(__FILE__ ));
  } elseif ($dme_get_fader_js_comp == '1') { 
    $js_type = plugins_url( 'js/dme-scroll-to-top-fader.min.js', dirname(__FILE__ ));
  }
  wp_register_script(
  'dmescrolltotopfaderjs',
  $js_type,
  array( 'jquery' ),
  '1.1.0',
  false //true
  );
  wp_enqueue_script(
  'dmescrolltotopfaderjs'
  );
  $dme_get_fader_status = get_option('dme_scroll_to_top_fader_status');
  $dme_get_fader_shadow_status = get_option('dme_scroll_to_top_fader_shadow_status');
  $scroll_down_pixels_is = get_option('dme_scroll_to_top_fader_scroll_down_pixels');
  $fadein_time_is = get_option('dme_scroll_to_top_fader_fadein');
  $up_speed_time_is = get_option('dme_scroll_to_top_fader_up_speed');
  $transition_time_speed_is = get_option('dme_scroll_to_top_fader_color_transition_speed');
  $dme_get_fader_transparency = get_option('dme_scroll_to_top_fader_is_backgroundcolor_transparent');
  $get_background_color = '#' . get_option('dme_scroll_to_top_fader_background_color_in');
  $bgt = 'transparent';
  $bgn = 'colorpicker';
  if ($dme_get_fader_status == '1' && $dme_get_fader_transparency == $bgt) {
    $background_is = $bgt; /*$background_is = $dme_get_fader_transparency;*/
  } elseif ($dme_get_fader_status == '1' && $dme_get_fader_transparency == $bgn) {
    $background_is = $get_background_color;
  } elseif ($dme_get_fader_status == '0' && $dme_get_fader_transparency == $bgn || $dme_get_fader_status == '0' && $dme_get_fader_transparency == $bgt) {
    $background_is = 'none';
  }
  $dme_get_fader_mouseover_transparency = get_option('dme_scroll_to_top_fader_is_color_one_mouse_over_transparent');
  $get_mouseover_color = '#' . get_option('dme_scroll_to_top_fader_color_one_mouse_over');
  if ($dme_get_fader_status == '1' && $dme_get_fader_mouseover_transparency == $bgt) {
    $mouseover_color_is = $bgt; /*$mouseover_color_is = $dme_get_fader_mouseover_transparency;*/
  } elseif ($dme_get_fader_status == '1' && $dme_get_fader_mouseover_transparency == $bgn) {
    $mouseover_color_is = $get_mouseover_color;
  } elseif ($dme_get_fader_status == '0' && $dme_get_fader_mouseover_transparency == $bgn || $dme_get_fader_status == '0' && $dme_get_fader_mouseover_transparency == $bgt) {
    $mouseover_color_is = 'none';
  }
  $image_bottom_px_is = get_option('dme_scroll_to_top_fader_image_bottom_position');
  $image_right_px_is = get_option('dme_scroll_to_top_fader_image_right_position');
  if ($dme_get_fader_shadow_status == '0') {
    $box_shadow_color_is = 'none';
    $box_shadow_hover_color_is = 'none';
  } else {
    $box_shadow_color_is = '#' . get_option('dme_scroll_to_top_fader_box_shadow_color');
    $box_shadow_hover_color_is = '#' . get_option('dme_scroll_to_top_fader_box_shadow_hover_color');
  }
  $horz = get_option('dme_scroll_to_top_fader_box_shadow_horizontal_position');
  $vert = get_option('dme_scroll_to_top_fader_box_shadow_vertical_position');
  $blur = get_option('dme_scroll_to_top_fader_box_shadow_blur_position');
  $spread = get_option('dme_scroll_to_top_fader_box_shadow_spread_position');
  $box_shadow_px = $horz . 'px ' . $vert . 'px ' . $blur . 'px ' . $spread . 'px ';
  $get_border = get_option('dme_scroll_to_top_fader_border_size');
  if ($get_border == '0' || $get_border == 'none') {
    $border = 'none';
    $border_hover = 'none';
  } else {
    $border = $get_border . 'px solid #' . get_option('dme_scroll_to_top_fader_border_color');
    $border_hover = $get_border . 'px solid #' . get_option('dme_scroll_to_top_fader_border_hover_color');
  }
  $get_img_selection = get_option('dme_scroll_to_top_fader_get_img_selection');
  $get_arrow_color = get_option('dme_scroll_to_top_fader_arrow_color');
  if ($dme_get_fader_shadow_status == '1') {
    wp_localize_script( 'dmescrolltotopfaderjs', 'dme_scroll_to_top_fader_php_vars',
      array(
      'scrolldownpixels' => esc_attr($scroll_down_pixels_is),
      'fadeintime' => esc_attr($fadein_time_is),
      'scrolltopspeed' => esc_attr($up_speed_time_is),
      'transitioncolorspeed' => esc_attr($transition_time_speed_is),
      'backgroundcolorin' => esc_attr($background_is),
      'coloronemouseenter' => esc_attr($mouseover_color_is),
      'faderbottomposition' => esc_attr($image_bottom_px_is),
      'faderrightposition' => esc_attr($image_right_px_is),
      'boxshadowcolor' => esc_attr($box_shadow_px) . esc_attr($box_shadow_color_is),
      'boxshadowcolorhov' => esc_attr($box_shadow_px) . esc_attr($box_shadow_hover_color_is),
      'border' => esc_attr($border),
      'borderhov' => esc_attr($border_hover),
      'activateimg' => esc_attr($get_img_selection),
      'activatearrowcol' => esc_attr($get_arrow_color)
      )
    );
  } elseif ($dme_get_fader_shadow_status == '0') {
    wp_localize_script( 'dmescrolltotopfaderjs', 'dme_scroll_to_top_fader_php_vars',
      array(
      'scrolldownpixels' => esc_attr($scroll_down_pixels_is),
      'fadeintime' => esc_attr($fadein_time_is),
      'scrolltopspeed' => esc_attr($up_speed_time_is),
      'transitioncolorspeed' => esc_attr($transition_time_speed_is),
      'backgroundcolorin' => esc_attr($background_is),
      'coloronemouseenter' => esc_attr($mouseover_color_is),
      'faderbottomposition' => esc_attr($image_bottom_px_is),
      'faderrightposition' => esc_attr($image_right_px_is),
      'boxshadowcolor' => esc_attr($box_shadow_color_is),
      'boxshadowcolorhov' => esc_attr($box_shadow_hover_color_is),
      'border' => esc_attr($border),
      'borderhov' => esc_attr($border_hover),
      'activateimg' => esc_attr($get_img_selection),
      'activatearrowcol' => esc_attr($get_arrow_color)
      )
    );
  }
}
###############################################################
/*--FrontEnd--*/
//ScrollTop Footer Link ID //scroll top footer link id
###############################################################
function dme_scroll_to_top_fader_footer_link_link_id() {
$get_img_selection = get_option('dme_scroll_to_top_fader_get_img_selection'); //Returns (a-f)
$get_arrow_color = get_option('dme_scroll_to_top_fader_arrow_color'); //returns (bl-gr-wh) ?>
<a href="#" id="dme-scroll-to-top-<?php echo esc_attr($get_img_selection) . '-' . esc_attr($get_arrow_color); ?>"></a>
<?php }
###############################################################
//REGISTER ACTIVATE DEACTIVATE UNINSTALL
###############################################################
function dme_scroll_top_fader_activation() {
  if(is_multisite()) {
    //$level = 'manage_options';
    $level = 'activate_plugins';
  } else {
    $level = 'administrator';
  }
  if (! current_user_can( $level )) {
    return;
    }
    add_option('dme_scroll_to_top_fader_status', '1');
    add_option('dme_scroll_to_top_fader_background_color_in', '1eaaf1');
    add_option('dme_scroll_to_top_fader_is_backgroundcolor_transparent', 'colorpicker');
    add_option('dme_scroll_to_top_fader_is_color_one_mouse_over_transparent', 'colorpicker');
    add_option('dme_scroll_to_top_fader_color_one_mouse_over', '1b99d8');
    add_option('dme_scroll_to_top_fader_scroll_down_pixels', '600');
    add_option('dme_scroll_to_top_fader_fadein', '1200');
    add_option('dme_scroll_to_top_fader_up_speed', '1000');
    add_option('dme_scroll_to_top_fader_color_transition_speed', '250');
    add_option('dme_scroll_to_top_fader_image_bottom_position', '30');
    add_option('dme_scroll_to_top_fader_image_right_position', '30');
    add_option('dme_scroll_to_top_fader_border_color', '505050');
    add_option('dme_scroll_to_top_fader_border_hover_color', '414141');
    add_option('dme_scroll_to_top_fader_border_size', '2');
    add_option('dme_scroll_to_top_fader_shadow_status', '1');
    add_option('dme_scroll_to_top_fader_box_shadow_color', '878787');
    add_option('dme_scroll_to_top_fader_box_shadow_hover_color', '4abbf3');
    add_option('dme_scroll_to_top_fader_box_shadow_horizontal_position', '2');
    add_option('dme_scroll_to_top_fader_box_shadow_vertical_position', '3');
    add_option('dme_scroll_to_top_fader_box_shadow_blur_position', '4');
    add_option('dme_scroll_to_top_fader_box_shadow_spread_position', '0');
    add_option('dme_scroll_to_top_fader_arrow_color', 'black');
    add_option('dme_scroll_to_top_fader_get_img_selection', 'a');
    add_option('dme_scroll_to_top_fader_compress_css_files', '0');
    add_option('dme_scroll_to_top_fader_compress_js_files', '0');
    add_option('dme_scroll_to_top_fader_version', '1.1.0');
}
function dme_scroll_top_fader_deactivation() {
  if(is_multisite()) {
    $level = 'activate_plugins';
  } else {
    $level = 'administrator';
  }
  if (! current_user_can( $level )) {
    return;
  }
}
function dme_scroll_top_fader_uninstall() {
  if(is_multisite()) {
    $level = 'activate_plugins';
  } else {
    $level = 'administrator';
  }
  if (! current_user_can( $level )) {
    return;
  }
    delete_option('dme_scroll_to_top_fader_status');
    delete_option('dme_scroll_to_top_fader_background_color_in');
    delete_option('dme_scroll_to_top_fader_is_backgroundcolor_transparent');
    delete_option('dme_scroll_to_top_fader_is_color_one_mouse_over_transparent');
    delete_option('dme_scroll_to_top_fader_color_one_mouse_over');
    delete_option('dme_scroll_to_top_fader_scroll_down_pixels');
    delete_option('dme_scroll_to_top_fader_fadein');
    delete_option('dme_scroll_to_top_fader_up_speed');
    delete_option('dme_scroll_to_top_fader_color_transition_speed');
    delete_option('dme_scroll_to_top_fader_image_bottom_position');
    delete_option('dme_scroll_to_top_fader_image_right_position');
    delete_option('dme_scroll_to_top_fader_border_color');
    delete_option('dme_scroll_to_top_fader_border_hover_color');
    delete_option('dme_scroll_to_top_fader_border_size');
    delete_option('dme_scroll_to_top_fader_shadow_status');
    delete_option('dme_scroll_to_top_fader_box_shadow_color');
    delete_option('dme_scroll_to_top_fader_box_shadow_hover_color');
    delete_option('dme_scroll_to_top_fader_box_shadow_horizontal_position');
    delete_option('dme_scroll_to_top_fader_box_shadow_vertical_position');
    delete_option('dme_scroll_to_top_fader_box_shadow_blur_position');
    delete_option('dme_scroll_to_top_fader_box_shadow_spread_position');
    delete_option('dme_scroll_to_top_fader_arrow_color');
    delete_option('dme_scroll_to_top_fader_get_img_selection');
    delete_option('dme_scroll_to_top_fader_compress_css_files');
    delete_option('dme_scroll_to_top_fader_compress_js_files');
    delete_option('dme_scroll_to_top_fader_version');
    /* Global */
  global $wpdb;
  /* Clean DB */
  $wpdb->query("OPTIMIZE TABLE `" .$wpdb->options. "`");
}
?>
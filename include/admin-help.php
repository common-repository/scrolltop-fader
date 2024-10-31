<?php
    $dme_get_fader_status = get_option('dme_scroll_to_top_fader_status');
    $dme_get_fader_shadow_status = get_option('dme_scroll_to_top_fader_shadow_status');
    if($dme_get_fader_status == '0' && $dme_get_fader_shadow_status == '1') {
	       $note_help_settings = '<span class="dme_fader_jqnote">Note:</span><br/>ScrollTop Status must be enabled before you can edit this value.';
	       $fader_status = 'enabled. However you need to enable the very first ScrollTop Status setting before you can use the Shadow Effect.';
	       $note_help_settings_shadow = '<span class="dme_fader_jqnote">Note:</span><br/>Shadow Effect is enabled. However you need to enable the very first ScrollTop Status setting before you can use the Shadow Effect.';
    } elseif ($dme_get_fader_status == '1' && $dme_get_fader_shadow_status == '1') {
	       $note_help_settings = '<span class="dme_fader_jqnote">Note:</span><br/>ScrollTop Fader is enabled you may enter your preferences now.';
	       $fader_status = 'enabled. You can enter your preferences below now.';
	       $note_help_settings_shadow = '<span class="dme_fader_jqnote">Note:</span><br/>ScrollTop Fader Shadow Effect is enabled you may enter your preferences now.';
    } elseif ($dme_get_fader_status == '0' && $dme_get_fader_shadow_status == '0') {
	       $note_help_settings = '<span class="dme_fader_jqnote">Note:</span><br/>ScrollTop Status must be enabled before you can edit this value.';
	       $fader_status = 'disabled. To use it turn on/enable the very first ScrollTop Status setting first.';
	       $note_help_settings_shadow = '<span class="dme_fader_jqnote">Note:</span><br/>ScrollTop Status must be enabled in the very first ScrollTop Status setting, then you may enable the Shadow Effect.';
    } elseif ($dme_get_fader_status == '1' && $dme_get_fader_shadow_status == '0') {
	       $note_help_settings = '<span class="dme_fader_jqnote">Note:</span><br/>ScrollTop Fader is enabled you may enter your preferences now.';
	       $fader_status = 'disabled. Once you set this to enabled you will be able to enter your choices below.';
	       $note_help_settings_shadow = '<span class="dme_fader_jqnote">Note:</span><br/>The Shadow Effect is currently disable. You need to enable it in order to select your preferences.';
    }
    $dme_get_fader_border_size = get_option('dme_scroll_to_top_fader_border_size');
    //if fader enabled and border is 0 none they need a border size of at least 1 to use the border color pickers
    if ($dme_get_fader_status == '1' && $dme_get_fader_border_size == '0') {
	       $note_border_status = '<span style="font-weight:bold;">Status:</span> <span class="dme_fader_value_highlight">Disabled</span><br/><p style="font-style:italic; font-weight:bold;">This feature is currently disabled because the Border Size is set to none (0). In order to use this feature you must enter a Border Size of at least: 1.</p>';
    } elseif ($dme_get_fader_status == '0' && $dme_get_fader_border_size >= '0') {
    //else give them the regular enable message
         $note_border_status = '<span class="dme_fader_jqnote">Note:</span><br/>ScrollTop Status must be enabled before you can edit this value.';
    } else {
         $note_border_status = '<span class="dme_fader_jqnote">Note:</span><br/>ScrollTop Fader is enabled you may enter your preferences now.';
    }	
    $img_help_settings = '<img style="margin:4px 6px 0 0; background-color:#1EAAF1; border-radius:50%; align:left; display:block; border:2px solid #acacac;" align="left" src="' . plugins_url('images/dme_scrolltop25.png', __FILE__) . '" alt="" height="25" width="25" />';
    $img_options = '
    <p id="dme_fader_img_selection_sizes_help">
    <img class="dme_fader_img_selection_choices_help" src="' . plugins_url('images/dme_scrolltop50.png', __FILE__) . '" alt="" height="50" width="50" />50px
    <img class="dme_fader_img_selection_choices_help" src="' . plugins_url('images/dme_scrolltop45.png', __FILE__) . '" alt="" height="45" width="45" />45px<br>
    <img class="dme_fader_img_selection_choices_help" src="' . plugins_url('images/dme_scrolltop40.png', __FILE__) . '" alt="" height="40" width="40" />40px
    <img class="dme_fader_img_selection_choices_help" src="' . plugins_url('images/dme_scrolltop35.png', __FILE__) . '" alt="" height="35" width="35" />35px
    <img class="dme_fader_img_selection_choices_help" src="' . plugins_url('images/dme_scrolltop30.png', __FILE__) . '" alt="" height="30" width="30" /> 30px</p>
    ';
?>
      <!-- POP-UP DIV -->
      <div id="status_disabled_trigger">
        <?php echo $img_help_settings; ?><h3 id="dme_fader_headline_h3">ScrollTop Fader Status</h3>
        <p><span class="dme_fader_value">Current Status:</span> <span class="dme_fader_value_highlight">Disabled</span></p>
        <p>The ScrollTop Fader is currently disabled. Once it's enable you can enter your preferences below.</p>
        <p><span class="dme_fader_value">Please Note:</span><br>The disable option should only be used on a temporary basis.</p>
        <p>If you need to disable it long term please deactivate it in the WordPress Plugins (Installed Plugins) Menu instead.<br/></p>
      </div>
      <div id="status_enabled_trigger">
        <?php echo $img_help_settings; ?><h3 id="dme_fader_headline_h3">ScrollTop Fader Status</h3>
        <p><span class="dme_fader_value">Current Status:</span> <span class="dme_fader_value_highlight">Enabled</span></p>
        <p>The ScrollTop Fader is currently enabled. You can now enter your preferences below.</p>
        <p><span class="dme_fader_value">Please Note:</span><br>The disable option should only be used on a temporary basis.</p>
        <p>If you need to disable it long term please deactivate it in the WordPress Plugins (Installed Plugins) Menu instead.<br/></p>        
      </div>
      <div id="scroll_down_pixels_trigger">
        <?php echo $img_help_settings; ?><h3 id="dme_fader_headline_h3">Scroll Down Pixels</h3>
        <p><span class="dme_fader_value">Default Value:</span> <span class="dme_fader_value_highlight">600</span></p>
        <p>How many pixels to scroll down a page before the ScrollTop image becomes visible.</p>
        <p>A larger value means you need to scroll further before it appears, and a smaller number means you don't have to scroll as far.</p>
        <p><span class="dme_fader_jqmax_value">Maximum Value Allowed:</span> <span class="dme_fader_jqmax_numb">9999</span></p>
        <p><?php echo $note_help_settings; ?></p>
      </div>
      <div id="fade_in_time_trigger">
        <?php echo $img_help_settings; ?><h3 id="dme_fader_headline_h3">FadeIn / FadeOut Time</h3>
        <p><span class="dme_fader_value">Default Value:</span> <span class="dme_fader_value_highlight">1200</span></p>
        <p>After scrolling down the desired level of pixels (Scroll Down Pixels) Above, this is how long it takes to gradually appear (fade in).</p>
        <p>When clicked on or returning to the top of the page it is also how long it takes to disappear (fade out).</p>
        <p>A larger value means it will take longer to appear/disappear, and a smaller number means it appears/disappears faster.</p>
        <p>This value is in milliseconds. 1200 would be 1.2 seconds.</p>
        <p><span class="dme_fader_jqmax_value">Maximum Value Allowed:</span> <span class="dme_fader_jqmax_numb">9999</span></p>
        <p><?php echo $note_help_settings; ?></p>
      </div>
      <div id="scroll_top_speed_trigger">
        <?php echo $img_help_settings; ?><h3 id="dme_fader_headline_h3">Scroll To Top Speed</h3>
        <p><span class="dme_fader_value">Default Value:</span> <span class="dme_fader_value_highlight">1000</span></p>
        <p>This is the speed (how fast) you will return to the top of the page when cliking the ScrollTop image.</p>
        <p>A larger number means you return to the top of the page slower. A smaller number means goto the top faster.</p>
        <p>This value is in milliseconds. 1000 would be 1.0 seconds.</p>
        <p><span class="dme_fader_jqmax_value">Maximum Value Allowed:</span> <span class="dme_fader_jqmax_numb">9999</span></p>
        <p><?php echo $note_help_settings; ?></p>
      </div>
      <div id="fade_in_color_trigger">
        <?php echo $img_help_settings; ?><h3 id="dme_fader_headline_h3">Background Color</h3>
        <p><span class="dme_fader_value">Default Value:</span> <span class="dme_fader_value_highlight">1EAAF1</span></p>
        <p>This is the first color you see when the ScrollTop image appears.</p>
        <p>This can match your first color, or be different.</p>
        <p><span class="dme_fader_jqmax_value">Values Allowed:</span> <span class="dme_fader_jqmax_numb">6 Character HEX</span></p>
        <p><?php echo $note_help_settings; ?></p>
      </div>
      <div id="color_one_mouse_enter_trigger">
        <?php echo $img_help_settings; ?><h3 id="dme_fader_headline_h3">Mouse Over Color</h3>
        <p><span class="dme_fader_value">Default Value:</span> <span class="dme_fader_value_highlight">1B99D8</span></p>
        <p>This is the first color you will see when hovering over the ScrollTop image.</p>
        <p>Depending on your transition speed setting it can be fairly brief.</p>
        <p><span class="dme_fader_jqmax_value">Values Allowed:</span> <span class="dme_fader_jqmax_numb">6 Character HEX</span></p>
        <p><?php echo $note_help_settings; ?></p>
      </div>
      <div id="color_delay_one_enter_trigger">
        <?php echo $img_help_settings; ?><h3 id="dme_fader_headline_h3">Color Transition Speed</h3>
        <p><span class="dme_fader_value">Default Value:</span> <span class="dme_fader_value_highlight">250</span></p>
        <p>This is the speed (how fast) you transition from the Background Color to the Mouse Over Color when hovering your mouse over the ScrollTop image.</p>
        <p>This is also the speed at which the Border Color changes to the Border Hover Color, and Shadow Color to Shadow Mouse Over Color speed.</p>
        <p>A larger number means the color transitions (changes) slower. A smaller number means a faster transition rate.</p>
        <p>This value is in milliseconds. 250 is 1/4 second. Mouse overs/outs are generally something that happen fairly fast.</p>
        <p><span class="dme_fader_jqmax_value">Maximum Value Allowed:</span> <span class="dme_fader_jqmax_numb">9999</span></p>
        <p><?php echo $note_help_settings; ?></p>
      </div>
      <div id="shadow_status_disabled_trigger">
        <?php echo $img_help_settings; ?><h3 id="dme_fader_headline_h3">Shadow Effect</h3>
        <p><span class="dme_fader_value">Current Status:</span> <span class="dme_fader_value_highlight">Disabled</span></p>
        <p>The Shadow Effect is currently <?php echo $fader_status; ?><br/></p>
      </div>
      <div id="shadow_status_enabled_trigger">
        <?php echo $img_help_settings; ?><h3 id="dme_fader_headline_h3">Fader Shadow Effect</h3>
        <p><span class="dme_fader_value">Current Status:</span> <span class="dme_fader_value_highlight">Enabled</span></p>
        <p>The Shadow Effect is currently <?php echo $fader_status; ?><br/></p>
      </div>
      <div id="box_shadow_color_trigger">
        <?php echo $img_help_settings; ?><h3 id="dme_fader_headline_h3">Shadow Color</h3>
        <p><span class="dme_fader_value">Default Value:</span> <span class="dme_fader_value_highlight">878787</span></p>
        <p>This is the shadow color you see for the shadow effect.</p>
        <p>Variations of black and grey produce a nice effect on sites with lighter backgrounds.</p>
        <p><span class="dme_fader_jqmax_value">Values Allowed:</span> <span class="dme_fader_jqmax_numb">6 Character HEX</span></p>
        <p><?php echo $note_help_settings_shadow; ?></p>
      </div>
      <div id="box_shadow_hover_color_trigger">
        <?php echo $img_help_settings; ?><h3 id="dme_fader_headline_h3">Shadow Mouse Over Color</h3>
        <p><span class="dme_fader_value">Default Value:</span> <span class="dme_fader_value_highlight">4ABBF3</span></p>
        <p>This is the shadow color you see when you hover your mouse over the ScrollTop image for the shadow effect.</p>
        <p>Variations of black and grey produce a nice effect on sites with lighter backgrounds.</p>
        <p><span class="dme_fader_jqmax_value">Values Allowed:</span> <span class="dme_fader_jqmax_numb">6 Character HEX</span></p>
        <p><?php echo $note_help_settings_shadow; ?></p>
      </div>
      <div id="border_color_trigger">
        <?php echo $img_help_settings; ?><h3 id="dme_fader_headline_h3">Border Color</h3>
        <p><span class="dme_fader_value">Default Value:</span> <span class="dme_fader_value_highlight">505050</span></p>
        <p>This is the border color you see around the ScrollTop image.</p>
        <p>Variations of black and grey produce a nice effect on sites with lighter backgrounds.</p>
        <p><span class="dme_fader_jqmax_value">Values Allowed:</span> <span class="dme_fader_jqmax_numb">6 Character HEX</span></p>
        <p><?php echo $note_border_status; ?></p>
      </div>
      <div id="border_hover_color_trigger">
        <?php echo $img_help_settings; ?><h3 id="dme_fader_headline_h3">Border Hover Color</h3>
        <p><span class="dme_fader_value">Default Value:</span> <span class="dme_fader_value_highlight">414141</span></p>
        <p>This is the border color you see around the ScrollTop image when you mouse over it.</p>
        <p>Variations of black and grey produce a nice effect on sites with lighter backgrounds.</p>
        <p><span class="dme_fader_jqmax_value">Values Allowed:</span> <span class="dme_fader_jqmax_numb">6 Character HEX</span></p>
        <p><?php echo $note_border_status; ?></p>
      </div>
      <div id="fader_position_bottom_trigger">
        <?php echo $img_help_settings; ?><h3 id="dme_fader_headline_h3">Image Bottom Position</h3>
        <p><span class="dme_fader_value">Default Value:</span> <span class="dme_fader_value_highlight">30</span></p>
        <p>This is the actual ScrollTop Image location in pixels from the bottom of your browser screen.</p>
        <p>A larger number means it will appear higher up. A lower number would mean further down.</p>
        <p>30 pixels is a good starting point.</p>
        <p><span class="dme_fader_jqmax_value">Maximum Value Allowed:</span> <span class="dme_fader_jqmax_numb">999</span></p>
        <p><?php echo $note_help_settings; ?></p>
      </div>
      <div id="fader_position_right_trigger">
        <?php echo $img_help_settings; ?><h3 id="dme_fader_headline_h3">Image Right Position</h3>
        <p><span class="dme_fader_value">Default Value:</span> <span class="dme_fader_value_highlight">30</span></p>
        <p>This is the actual ScrollTop Image location in pixels from the right side of your browser screen.</p>
        <p>A larger number means it will appear further to the left. A lower number would mean closer to the right.</p>
        <p>30 pixels is a good starting point.</p>
        <p><span class="dme_fader_jqmax_value">Maximum Value Allowed:</span> <span class="dme_fader_jqmax_numb">999</span></p>
        <p><?php echo $note_help_settings; ?></p>
      </div>
      <div id="box_shadow_horizontal_trigger">
        <?php echo $img_help_settings; ?><h3 id="dme_fader_headline_h3">Horizontal Position</h3>
        <p><span class="dme_fader_value">Default Value:</span> <span class="dme_fader_value_highlight">2</span></p>
        <p>This is horizonal (left/right) position of the shadow in pixels.</p>
        <p>A positive value number IE: 10 will cast a shadow to the right of the ScrollTop fader image. A negative value number IE: -10 will cast a shadow to the left. A 0 value is none.</p>
        <p>0 pixels is a good starting point.</p>
        <p><span class="dme_fader_jqmax_value">Maximum Value Allowed:</span> <span class="dme_fader_jqmax_numb">99/-99</span></p>
        <p><?php echo $note_help_settings_shadow; ?></p>
      </div>
      <div id="box_shadow_vertical_trigger">
        <?php echo $img_help_settings; ?><h3 id="dme_fader_headline_h3">Vertical Position</h3>
        <p><span class="dme_fader_value">Default Value:</span> <span class="dme_fader_value_highlight">3</span></p>
        <p>This is horizonal (top/bottom) position of the shadow in pixels.</p>
        <p>A positive value number IE: 10 will cast a shadow to the bottom of the ScrollTop fader image. A negative value number IE: -10 will cast a shadow to the top. A 0 value is none.</p>
        <p>4 pixels is a good starting point.</p>
        <p><span class="dme_fader_jqmax_value">Maximum Value Allowed:</span> <span class="dme_fader_jqmax_numb">99/-99</span></p>
        <p><?php echo $note_help_settings_shadow; ?></p>
      </div>
      <div id="box_shadow_blur_trigger">
        <?php echo $img_help_settings; ?><h3 id="dme_fader_headline_h3">Blur Position (Radius)</h3>
        <p><span class="dme_fader_value">Default Value:</span> <span class="dme_fader_value_highlight">4</span></p>
        <p>This is blur added to the shadow in pixels.</p>
        <p>A lower number will result in little shadow blur (sharper). A larger value number will result in more blurring. A 0 value is none.</p>
        <p>5 pixels is a good starting point.</p>
        <p><span class="dme_fader_jqmax_value">Maximum Value Allowed:</span> <span class="dme_fader_jqmax_numb">99</span></p>
        <p><?php echo $note_help_settings_shadow; ?></p>
      </div>
      <div id="box_shadow_spread_trigger">
        <?php echo $img_help_settings; ?><h3 id="dme_fader_headline_h3">Spread Position (Radius)</h3>
        <p><span class="dme_fader_value">Default Value:</span> <span class="dme_fader_value_highlight">0</span></p>
        <p>This is optional. Set 0 value to not use it.</p>
        <p>A positive number increases the size of the shadow. A negative value number will decrease the size. A 0 value is none.</p>
        <p>0 pixels is a good starting point.</p>
        <p><span class="dme_fader_jqmax_value">Maximum Value Allowed:</span> <span class="dme_fader_jqmax_numb">99/-99</span></p>
        <p><?php echo $note_help_settings_shadow; ?></p>
      </div>
      <div id="fader_border_size_trigger">
        <?php echo $img_help_settings; ?><h3 id="dme_fader_headline_h3">Border Size</h3>
        <p><span class="dme_fader_value">Default Value:</span> <span class="dme_fader_value_highlight">2</span></p>
        <p>This is the border size around the ScrollTop image.</p>
        <p>It is used with the Border Color and Hover Border Color above.</p>
        <p>A value of 2 or 4 will generally produce a nice effect.</p>
        <p>To disable borders enter: <strong>0</strong> (zero).</p>
        <p><span class="dme_fader_jqmax_value">Maximum Value Allowed:</span> <span class="dme_fader_jqmax_numb">10</span></p>
        <p><?php echo $note_border_status; ?></p>
      </div>
      <div id="fader_image_selection_trigger">
        <?php echo $img_help_settings; ?><h3 id="dme_fader_headline_h3">Image Choices</h3>
        <p><span class="dme_fader_value">Defaults:</span></p> <?php echo $img_options; ?>
        <p>This is the image you wish to use.<br>
        720px screens and under will see a 30 x 30px image.<br>
        721px - 1024px screens will see a 35 x 35px image.<br>
        1025px - 1366px screens will see a 40 x 40px image.<br>
        1367px - 1680px screens will see a 45 x 45px image.<br>
        1681+px screens will see a 50 x 50px image.</p>
        <p><?php echo $note_help_settings; ?></p>
      </div>
      <div id="compress_css_trigger">
        <?php echo $img_help_settings; ?><h3 id="dme_fader_headline_h3">Compress .css files</h3>
        <p><span class="dme_fader_value">Default Value:</span> <span class="dme_fader_value_highlight">Uncompressed</span></p>
        <p>This option allows you to choose whether or not to compress (minify) .css files.</p>
        <p>Compressed files result in smaller file size and faster loading.</p>
        <p>This option is for both the Front-End (what visitors see) and the Back-End (the WordPress plugin options administration area).</p>
        <p><?php echo $note_help_settings; ?></p>
      </div>
      <div id="compress_js_trigger">
        <?php echo $img_help_settings; ?><h3 id="dme_fader_headline_h3">Compress .js files</h3>
        <p><span class="dme_fader_value">Default Value:</span> <span class="dme_fader_value_highlight">Uncompressed</span></p>
        <p>This option allows you to choose whether or not to compress (minify) .js files.</p>
        <p>Compressed files result in smaller file size and faster loading.</p>
        <p>This option is for both the Front-End (what visitors see) and the Back-End (the WordPress plugin options administration area).</p>
		    <p><?php echo $note_help_settings; ?></p>
      </div>
      <div id="fader_aarow_color_trigger">
        <?php echo $img_help_settings; ?><h3 id="dme_fader_headline_h3">Arrow Color</h3>
        <p><span class="dme_fader_value">Default Value:</span> <span class="dme_fader_value_highlight">Black</span></p>
        <p>This option allows you to change the actual arrow color.</p>
        <p>You have the option of choosing: black, gray, or white.</p>
        <p>You may need to change the Background Color and/or Mouse Over color to get a nice display.</p>
        <p><?php echo $note_help_settings; ?></p>
      </div>
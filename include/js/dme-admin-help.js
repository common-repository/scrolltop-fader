/* jquery for plugin admin hover over info help etc links
* called in admin-help.php div ahref=# id=trigger
* style in dme-scroll-to-top-fader-admin.css
*/
jQuery(document).ready(function($) {
    var moveLeft = 140;
    var moveDown = -85;
    var moveDownLink = 18;
/*--status disabled--*/
    $('a#status_disabled_trigger').hover(function(e) {
        $('div#status_disabled_trigger').fadeIn(400)
        .css('top', e.pageY + moveDownLink)
        .css('left', e.pageX + moveLeft)
         .appendTo('body');
    }, function() {
         setTimeout(function() { $('div#status_disabled_trigger').fadeOut(400); });
     });
/*--status enabled--*/
    $('a#status_enabled_trigger').hover(function(e) {
        $('div#status_enabled_trigger').fadeIn(400)
        .css('top', e.pageY + moveDownLink)
        .css('left', e.pageX + moveLeft)
        .appendTo('body');
    }, function() {
         setTimeout(function() { $('div#status_enabled_trigger').fadeOut(400); });
    });
/*--background fade in color--*/
    $('a#fade_in_color_trigger').hover(function(e) {
        $('div#fade_in_color_trigger').fadeIn(400)
        .css('top', e.pageY + moveDown)
        .css('left', e.pageX + moveLeft)
        .appendTo('body');
    }, function() {
        setTimeout(function() { $('div#fade_in_color_trigger').fadeOut(400); });
    });
/*--mouse color one--*/
    $('a#color_one_mouse_enter_trigger').hover(function(e) {
        $('div#color_one_mouse_enter_trigger').fadeIn(400)
        .css('top', e.pageY + moveDown)
        .css('left', e.pageX + moveLeft)
         .appendTo('body');
    }, function() {
        setTimeout(function() { $('div#color_one_mouse_enter_trigger').fadeOut(400); });
     });
/*--scroll down pixels--*/
    $('a#scroll_down_pixels_trigger').hover(function(e) {
        $('div#scroll_down_pixels_trigger').fadeIn(400)
        .css('top', e.pageY + moveDown)
        .css('left', e.pageX + moveLeft)
        .appendTo('body');
    }, function() {
        setTimeout(function() { $('div#scroll_down_pixels_trigger').fadeOut(400); });
    });
/*--fade in time--*/
    $('a#fade_in_time_trigger').hover(function(e) {
        $('div#fade_in_time_trigger').fadeIn(400)
        .css('top', e.pageY + moveDown)
        .css('left', e.pageX + moveLeft)
         .appendTo('body');
    }, function() {
        setTimeout(function() { $('div#fade_in_time_trigger').fadeOut(400); });
    });
/*--scroll top speed--*/
    $('a#scroll_top_speed_trigger').hover(function(e) {
        $('div#scroll_top_speed_trigger').fadeIn(400)
        .css('top', e.pageY + moveDown)
        .css('left', e.pageX + moveLeft)
        .appendTo('body');
    }, function() {
        setTimeout(function() { $('div#scroll_top_speed_trigger').fadeOut(400); });
    });
/*--Mouse Over Transition--*/
    $('a#color_delay_one_enter_trigger').hover(function(e) {
        $('div#color_delay_one_enter_trigger').fadeIn(400)
         .css('top', e.pageY + moveDown)
         .css('left', e.pageX + moveLeft)
         .appendTo('body');
    }, function() {
         setTimeout(function() { $('div#color_delay_one_enter_trigger').fadeOut(400); });
    });
/*--fader bottom position--*/
    $('a#fader_position_bottom_trigger').hover(function(e) {
        $('div#fader_position_bottom_trigger').fadeIn(400)
        .css('top', e.pageY + moveDown)
        .css('left', e.pageX + moveLeft)
        .appendTo('body');
    }, function() {
        setTimeout(function() { $('div#fader_position_bottom_trigger').fadeOut(400); });
    });
/*--fader right position--*/
    $('a#fader_position_right_trigger').hover(function(e) {
        $('div#fader_position_right_trigger').fadeIn(400)
        .css('top', e.pageY + moveDown)
        .css('left', e.pageX + moveLeft)
        .appendTo('body');
    }, function() {
        setTimeout(function() { $('div#fader_position_right_trigger').fadeOut(400); });
    });
/*--border color--*/
    $('a#border_color_trigger').hover(function(e) {
        $('div#border_color_trigger').fadeIn(400)
        .css('top', e.pageY + moveDown)
        .css('left', e.pageX + moveLeft)
        .appendTo('body');
    }, function() {
        setTimeout(function() { $('div#border_color_trigger').fadeOut(400); });
    });
/*--border hover color--*/
    $('a#border_hover_color_trigger').hover(function(e) {
        $('div#border_hover_color_trigger').fadeIn(400)
        .css('top', e.pageY + moveDown)
        .css('left', e.pageX + moveLeft)
        .appendTo('body');
    }, function() {
        setTimeout(function() { $('div#border_hover_color_trigger').fadeOut(400); });
    });
/*--border size pixels--*/
    $('a#fader_border_size_trigger').hover(function(e) {
        $('div#fader_border_size_trigger').fadeIn(400)
        .css('top', e.pageY + moveDown)
        .css('left', e.pageX + moveLeft)
        .appendTo('body');
    }, function() {
        setTimeout(function() { $('div#fader_border_size_trigger').fadeOut(400); });
    });
/*--minify compress css--*/
    $('a#compress_css_trigger').hover(function(e) {
        $('div#compress_css_trigger').fadeIn(400)
        .css('top', e.pageY + moveDownLink)
        .css('left', e.pageX + moveLeft)
        .appendTo('body');
    }, function() {
        setTimeout(function() { $('div#compress_css_trigger').fadeOut(400); });
    });
/*--minify compress js--*/
    $('a#compress_js_trigger').hover(function(e) {
        $('div#compress_js_trigger').fadeIn(400)
        .css('top', e.pageY + moveDownLink)
        .css('left', e.pageX + moveLeft)
        .appendTo('body');
    }, function() {
        setTimeout(function() { $('div#compress_js_trigger').fadeOut(400); });
    });
/*--image selection--*/
    $('a#fader_image_selection_trigger').hover(function(e) {
        $('div#fader_image_selection_trigger').fadeIn(400)
        .css('top', e.pageY + moveDownLink)
        .css('left', e.pageX + moveLeft)
        .appendTo('body');
    }, function() {
        setTimeout(function() { $('div#fader_image_selection_trigger').fadeOut(400); });
    });
/*--Aarow Color black, gray, white--*/
    $('a#fader_aarow_color_trigger').hover(function(e) {
        $('div#fader_aarow_color_trigger').fadeIn(400)
        .css('top', e.pageY + moveDown)
        .css('left', e.pageX + moveLeft)
        .appendTo('body');
    }, function() {
        setTimeout(function() { $('div#fader_aarow_color_trigger').fadeOut(400); });
    });
/*--shadow effect status disabled--*/
    $('a#shadow_status_disabled_trigger').hover(function(e) {
        $('div#shadow_status_disabled_trigger').fadeIn(400)
        .css('top', e.pageY + moveDownLink)
        .css('left', e.pageX + moveLeft)
        .appendTo('body');
    }, function() {
         setTimeout(function() { $('div#shadow_status_disabled_trigger').fadeOut(400); });
    });
/*--shadow effect status enabled--*/
    $('a#shadow_status_enabled_trigger').hover(function(e) {
        $('div#shadow_status_enabled_trigger').fadeIn(400)
        .css('top', e.pageY + moveDownLink)
        .css('left', e.pageX + moveLeft)
        .appendTo('body');
    }, function() {
            setTimeout(function() { $('div#shadow_status_enabled_trigger').fadeOut(400); });
        });
/*--shadow effect color--*/
    $('a#box_shadow_color_trigger').hover(function(e) {
        $('div#box_shadow_color_trigger').fadeIn(400)
        .css('top', e.pageY + moveDown)
        .css('left', e.pageX + moveLeft)
        .appendTo('body');
    }, function() {
        setTimeout(function() { $('div#box_shadow_color_trigger').fadeOut(400); });
    });
/*--shadow effect hover color--*/
    $('a#box_shadow_hover_color_trigger').hover(function(e) {
        $('div#box_shadow_hover_color_trigger').fadeIn(400)
        .css('top', e.pageY + moveDown)
        .css('left', e.pageX + moveLeft)
        .appendTo('body');
    }, function() {
        setTimeout(function() { $('div#box_shadow_hover_color_trigger').fadeOut(400); });
    });
/*--horizonal box shadow pixel position--*/
    $('a#box_shadow_horizontal_trigger').hover(function(e) {
        $('div#box_shadow_horizontal_trigger').fadeIn(400)
        .css('top', e.pageY + moveDown)
        .css('left', e.pageX + moveLeft)
        .appendTo('body');
    }, function() {
        setTimeout(function() { $('div#box_shadow_horizontal_trigger').fadeOut(400); });
    });
/*--vertical box shadow pixel position--*/
    $('a#box_shadow_vertical_trigger').hover(function(e) {
        $('div#box_shadow_vertical_trigger').fadeIn(400)
        .css('top', e.pageY + moveDown)
        .css('left', e.pageX + moveLeft)
        .appendTo('body');
    }, function() {
        setTimeout(function() { $('div#box_shadow_vertical_trigger').fadeOut(400); });
    });
/*--box shadow blur pixel--*/
    $('a#box_shadow_blur_trigger').hover(function(e) {
        $('div#box_shadow_blur_trigger').fadeIn(400)
        .css('top', e.pageY + moveDown)
        .css('left', e.pageX + moveLeft)
        .appendTo('body');
    }, function() {
        setTimeout(function() { $('div#box_shadow_blur_trigger').fadeOut(400); });
    });
/*--box shadow spread pixel--*/
    $('a#box_shadow_spread_trigger').hover(function(e) {
        $('div#box_shadow_spread_trigger').fadeIn(400)
        .css('top', e.pageY + moveDown)
        .css('left', e.pageX + moveLeft)
        .appendTo('body');
    }, function() {
        setTimeout(function() { $('div#box_shadow_spread_trigger').fadeOut(400); });
    });
});
"use strict";

/**
 * scrollToTop Fader
 * Modified and edited by: Jeremy LeSarge
 * Under the terms of: MIT License
 * https://opensource.org/licenses/MIT
 * https://en.wikipedia.org/wiki/MIT_License
 *
 * Original:
 * Copyright (c) Max Bidiuk
 * I'll be back
 * https://github.com/makseo/illbeback
 * http://www.jqueryscript.net/other/Easy-Configurable-Scroll-To-Top-Back-Button-Plugin-illbeback.html
 */

(function($) {

    $.dmescrolltotopFader = function(el, options) {
        // Use base instead of this to reference use this from internal functions
        var base = this;

        // jQuery DOM Element
        base.target = $(el);

        // Styling
        function setStyle() {

            var defaultCss = {
                'background-position': '0% 0%',
                'background-size': 'auto',
                'background-image': 'none',
                'background-repeat': 'repeat'
            };

            // Merge CSS Rules
            var buttonCss  = {
                'display' : 'none',
                'position' : 'fixed',
                'outline' : 'none',
                'z-index' : base.options.zIndex,
                'top' : base.options.top + 'px',
                'left' : base.options.left + 'px',
                'bottom' : base.options.bottom + 'px',
                'right' : base.options.right + 'px',
                //'width' : base.options.size + 'px',
                //'height' : base.options.size + 'px',				
                'background-color' : base.options.bgColor,
                'background-position': base.options.bgPosition,
                'background-size' : base.options.bgSize,
                //'background-image': base.options.bgImage,
                'background-repeat' : 'no-repeat',
                'border' : base.options.BorderColor,
                'box-shadow' : base.options.BoxShadowColor,
                WebkitTransition: ['background-color '+base.options.hoverDuration+'ms linear', 'border '+base.options.hoverDuration+'ms linear', 'box-shadow '+base.options.hoverDuration+'ms linear'],
                MozTransition: ['background-color '+base.options.hoverDuration+'ms linear', 'border '+base.options.hoverDuration+'ms linear', 'box-shadow '+base.options.hoverDuration+'ms linear'],
                MsTransition: ['background-color '+base.options.hoverDuration+'ms linear', 'border '+base.options.hoverDuration+'ms linear', 'box-shadow '+base.options.hoverDuration+'ms linear'],
                OTransition: ['background-color '+base.options.hoverDuration+'ms linear', 'border '+base.options.hoverDuration+'ms linear', 'box-shadow '+base.options.hoverDuration+'ms linear'],
                transition: ['background-color '+base.options.hoverDuration+'ms linear', 'border '+base.options.hoverDuration+'ms linear', 'box-shadow '+base.options.hoverDuration+'ms linear']			
            };

            // Remove button css with preset css rules
            $.each(defaultCss, function(cssProperty, defaultValue) {
                var currentValue = base.target.css(cssProperty);
                if (currentValue !== defaultValue) {
                    delete buttonCss[cssProperty];
                }
            });

            // Set style
            base.target.css(buttonCss);

            // Make round button
            if (base.options.round) {
                base.target.css({
                    WebkitBorderRadius: '100%',
                    MozBorderRadius: '100%',
                    MsBorderRadius: '100%',
                    OBorderRadius: '100%',
                    borderRadius: '100%'
                });
            }
        }

        // Listen callbacks
        function listenCallbacks () {

            // Window scroll listener
            $(window).bind('scroll', function() {

                var scrollTop = $(this).scrollTop();

                if (scrollTop > base.options.offset) {
                    base.target.fadeIn(base.options.duration);
                }
                else {
                    base.target.fadeOut(base.options.duration);
                }
            });

            // Target mouseover listener
            base.target.bind('touchstart', function(e) {
                base.target.css({'background-color': base.options.bgColor});
                base.target.css({'border': base.options.BorderColor});
                base.target.css({'box-shadow': base.options.BoxShadowColor});               
            });
            base.target.bind('mouseenter', function(e) {
                base.target.css({'background-color': base.options.hoverBgColor});
                base.target.css({'border': base.options.hoverBorderColor});
                base.target.css({'box-shadow': base.options.hoverBoxShadowColor});              
            });

            // Target mouseout listener
            base.target.bind('touchend', function(e) {
                base.target.css({'background-color': base.options.bgColor});
                base.target.css({'border': base.options.BorderColor});
                base.target.css({'box-shadow': base.options.BoxShadowColor});
            });

            // Target mouseout listener
            base.target.bind('mouseleave', function(e) {
                base.target.css({'background-color': base.options.bgColor});
                base.target.css({'border': base.options.BorderColor});
                base.target.css({'box-shadow': base.options.BoxShadowColor});
            });

            // Target click listener
            base.target.bind('click', function(e) {
                e.preventDefault();
                $('html, body').animate({scrollTop: 0}, base.options.speed);
            });
        }

        // Initialization
        base.init = function() {

            // Overwrite options
            base.options = $.extend({}, $.dmescrolltotopFader.defaultOptions, options);

            // Set styling
            if (!base.options.ownStyle) {
                setStyle();
            }

            // Listen callbacks
            listenCallbacks();
        };

        // Initialize plugin
        base.init();
    };

    // Set default options
    $.dmescrolltotopFader.defaultOptions = {

        // Parameters
        offset        : parseInt(dme_scroll_to_top_fader_php_vars.scrolldownpixels),
        speed         : parseInt(dme_scroll_to_top_fader_php_vars.scrolltopspeed),
        duration      : parseInt(dme_scroll_to_top_fader_php_vars.fadeintime),
        hoverDuration :  parseInt(dme_scroll_to_top_fader_php_vars.transitioncolorspeed),

        // Styling
        ownStyle : false,
        round    : true,
        zIndex   : 1000,
        //size     : 50,

        // Position
        top    : 'auto',
        left   : 'auto',
        bottom : parseInt(dme_scroll_to_top_fader_php_vars.faderbottomposition),
        right  : parseInt(dme_scroll_to_top_fader_php_vars.faderrightposition),

        // Background
        bgColor : dme_scroll_to_top_fader_php_vars.backgroundcolorin,
        hoverBgColor : dme_scroll_to_top_fader_php_vars.coloronemouseenter,
        bgPosition : '50% 50%',
        bgSize : '50%',
        bgRepeat : 'no-repeat',
        BorderColor : dme_scroll_to_top_fader_php_vars.border,
        hoverBorderColor : dme_scroll_to_top_fader_php_vars.borderhov,
        BoxShadowColor : dme_scroll_to_top_fader_php_vars.boxshadowcolor,
        hoverBoxShadowColor : dme_scroll_to_top_fader_php_vars.boxshadowcolorhov
        //bgImage :  "url(\"..\")"
    };

    // Returns buttons that will scroll to the top of the page
    $.fn.dmescrolltotopFader = function(options) {

        return this.each(function() {
            (new $.dmescrolltotopFader(this, options));
        });
    };

})(jQuery);

jQuery(document).ready(function($) {
    $("#dme-scroll-to-top-"+dme_scroll_to_top_fader_php_vars.activateimg+"-"+dme_scroll_to_top_fader_php_vars.activatearrowcol+"").dmescrolltotopFader();
});
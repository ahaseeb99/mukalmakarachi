/*

[MAIN SCRIPT]

Template: Nilam - Domain For Sell and Auction Template
Author: ThemeAtelier
Author URI: https://themeforest.net/user/themeatelier

*/

;(function ($) {
    "use strict";

    /* ------------------------------------
        COMMON VARIABLES
    ------------------------------------ */
    var $wn = $(window),
        $body = $('body');

    $wn.on('load', function () {
        /* ------------------------------------
            BACKGROUND IMAGE
        ------------------------------------ */
        var $bgImg = $('[data-bg-img]');

        $bgImg.each(function () {
            var $t = $(this);

            $t.css('background-image', 'url(' + $t.data('bg-img') + ')').addClass('bg--img').removeAttr('data-bg-img');
        });

        /* ------------------------------------
            PARALLAX
        ------------------------------------ */
        var $parallax = $('[data-trigger="parallax"]');

        if ( $parallax.length ) {
            $parallax.parallax({
                scalarX: 25,
                scalarY: 15,
                frictionX: 0.1,
                frictionY: 0.1,
                calibrateX: false,
            });
        }

        /* ------------------------------------
            AJAX FORM
        ------------------------------------ */
        var $ajaxForm = $('[data-form="ajax"]');

        $ajaxForm.each(function () {
            var $t = $(this);

            $t.validate({
                errorPlacement: function () {
                    return false;
                },
                submitHandler: function (el) {
                    var $el = $(el),
                        formAction = $el.attr('action'),
                        formData = $el.serialize(),
                        $btn = $el.find('.btn');
                    
                    $btn.prop('disabled', true);

                    $.post(formAction, formData, function (res) {
                        $el.find('.status').html( res ).slideDown('slow').delay(3000).slideUp('slow');
                    }).always(function () {
                        $btn.prop('disabled', false);
                    });
                }
            });
        });

        /* ------------------------------------
            COLOR SWITCHER
        ------------------------------------ */
        var $colorSwitcher = $('#changeColorScheme');

        if ( $colorSwitcher.length && $().colorSwitcher ) {
            $colorSwitcher.colorSwitcher({
                '#44dc46': 'css/colors/color-1.css',
                '#ff0000': 'css/colors/color-2.css',
                '#e74c3c': 'css/colors/color-3.css',
                '#1abc9c': 'css/colors/color-4.css'
            });
        }

        /* ------------------------------------
            PRELOADER
        ------------------------------------ */
        var $preloader = $('#preloader');

        if ( $preloader.length ) {
            $preloader.fadeOut('slow');
        }
    });

}(jQuery));

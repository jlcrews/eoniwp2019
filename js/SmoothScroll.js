/**
 * File smooth_scroll.js
 *
 * Basic anchor text link smooth scroll script
 *
 * @dependecies jquery
 * @version 1.1.1
 * @package eoni-wordpress
 *
 */

jQuery(document).ready(function($){
    $('a[href^="#top"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 1000, 'swing');
    });

    $('a[href*="#"]:not([href="#"])').click(function() {
        if (!$(this).is(':visible')) { //do not fire on display:none link elements
            return;
        }

        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});
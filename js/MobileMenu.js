/**
 * File mobile_menu.js
 *
 * mobile menu using jquery
 *
 * @dependecy jquery
 * @version: 1.0.1
 * @package: eoni-wordpress
 */

jQuery(function($) {
    var $menu_id = $('#menu'),
        $menu_close = $('#menu_close');

    //show the menu when button is clicked
    $('#menu_btn').click(function() {
        //if menu is not shown:
        if($menu_id.is(':hidden')) {
            //remove display:none
            $menu_id.css('display', 'block');
            //trigger the fancy animation
            $menu_id.animate({ left: '0' }, 'slow', function(){
                $menu_close.css('display', 'block');
            });
        } else {
            //otherwise, close menu
            $menu_id.animate({ left: '-100%' }, 'slow', function () {
                $menu_id.css('display', 'none');
                $menu_close.css('display', 'none');
            });
        }
    });

    //close menu when X button is clicked
    $menu_close.click(function() {
        $menu_id.animate({ left: '-100%' }, 'slow', function () {
            $menu_id.css('display', 'none');
        });
    });

    callOnResize();
});

jQuery(window).resize( function(){
    callOnResize();
});

function callOnResize() {
    var winwidth = jQuery(window).width(),
        mobile_width = 430,
        menu_id = jQuery('#menu');

    if (winwidth < mobile_width) {
        menu_id.css({ display: 'none' });
        menu_id.animate({ left: '-100%' }, 'slow');
    } else if (winwidth >= mobile_width) {
        menu_id.css({ display: 'block' });
    }
}

/*
 disable the top level links so user
 can actually see the dropdown links
 in mobile only
 */
jQuery(function($) {
    $(".menu-item-has-children").children("a").attr('href', "javascript:void(0)");
});
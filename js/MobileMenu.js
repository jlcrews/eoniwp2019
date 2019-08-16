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
    var $menuDiv = $('#menu'),
        $menuBtn = $('#menu_btn');

    $menuBtn.click(function() {
        if ($menuDiv.hasClass('open')) {
            $menuDiv.removeClass('open');
        } else {
            $menuDiv.addClass('open');
        }
    });

    //close menu when X button is clicked
    $menu_close.click(function() {
        $menuDiv.animate({ left: '-100%' }, 'slow', function () {
            $menuDiv.css('display', 'none');
        });
    });
});
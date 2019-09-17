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
});
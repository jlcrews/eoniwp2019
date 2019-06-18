/**
 * File pdf_css_icon_add.js
 *
 * replace any link containing the letters '.pdf' with the css div
 * showing pdf icon
 *
 * @dependecy jquery
 * @version: 1.0.1
 * @package: eoni-wordpress
 */

jQuery(document).ready(function($) {
    $('a[href$=".pdf"]').addClass("pdf_link");
});
/**
 * File videoWrapper.js
 *
 * Wraps any iframe in the videoWrapper class
 * which allows iframe to be fully responsive
 *
 * @dependecy jquery
 * @version: 1.0.1
 * @package: eoni-wordpress
 */

jQuery(document).ready(function($){
    $("iframe").wrap("<div class='videoWrapper'/>");
});

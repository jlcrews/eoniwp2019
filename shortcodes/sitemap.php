<?php
/**
 * Sitemap Shortcode
 * @return string/
 */
function theme_sitemap_page(){
    return "<h2>Sitemap</h2><ul>".wp_list_pages('title_li=&echo=0')."</ul>";
}
add_shortcode('sitemap', 'theme_sitemap_page');

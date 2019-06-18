<?php
/**
 * Theme functions and definitions
 *
 * @package eoni-wordpress
 */

require_once "shortcodes/sitemap.php";
require_once 'post-type/policy.php';

/**
 * Widgetize Theme
 */
function theme_widgets_init()
{
    register_sidebar( [
        'name' => 'Internal Sidebar',
        'id'   => 'internal-sidebar',
        'description'   => 'Widgetized sidebar for all internal pages.',
        'before_widget' => '<div class="widgetblock">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ] );

    //additional sidebars here
}
add_action( 'widgets_init', 'theme_widgets_init' );

/**
 * Declare Theme Menus
 */
register_nav_menus( [
    'header_menu' => 'Header Main Navigation Menu',
    'footer_menu_one' => 'Footer First Navigation Menu',
    'footer_menu_two' => 'Footer Second Navigation Menu',
    'footer_menu_three' => 'Footer Third Navigation Menu',
    'footer_menu_four' => 'Footer Fourth Navigation Menu',
] );

/**
 * Theme CSS and JS Scripts
 */
function theme_scripts()
{
    //normalize
    wp_enqueue_script('jquery');

    //css
    wp_enqueue_style('theme-style',get_stylesheet_uri());
    //wp_enqueue_style('slick_css','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css');

    //js
    ////js-vendor
    wp_enqueue_script('font-awesome','https://use.fontawesome.com/966d4a5f64.js',time());
    //wp_enqueue_script('slick_carousel_js','https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js',[],time(),true);
    ///js-local
    wp_enqueue_script('mobile-menu',get_template_directory_uri().'/js/MobileMenu.js',time());
    wp_enqueue_script('videoWrapper',get_template_directory_uri().'/js/VideoWrapper.js',time());
    wp_enqueue_script('smooth_scroll',get_template_directory_uri().'/js/SmoothScroll.js',time());
    wp_enqueue_script('pdf_css_icon_add',get_template_directory_uri().'/js/PdfIcon.js',time());
    wp_enqueue_script('slick_config',get_template_directory_uri().'/js/SlickConfig.js',time());

    //localized
    wp_localize_script('preload_directory', 'ajax', [
        'url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('preload_directory')
    ]);
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

/**
 * Login Screen CSS
 */
function theme_login_script()
{
    wp_enqueue_style('login_custom_style',get_stylesheet_directory_uri().'/style/css/LoginStyle.css',['login']);
}
add_action( 'login_enqueue_scripts', 'theme_login_script', 1 );

/**
 * Featured images in Page Edit
 */
add_theme_support( 'post-thumbnails' );

/**
 * Template Engine
 * Takes a template file and populates it into a string that is returned
 * @param $templateFile
 * @param array $args
 * @return string
 */
function populate_template_file($templateFile, $args = [])
{
    ob_start(); //start output buffer

    $templateDirectory = dirname(__FILE__) . '/templates';
    $templateFile = $templateFile . '.template.php';
    //Confirm that template file exists
    if(file_exists($templateDirectory . '/' . $templateFile)){
        extract($args); //populate args into variables
        include $templateDirectory . '/' . $templateFile; //Include template file, make sure you are passing the required variables.
    }

    return ob_get_clean();
}

/*
 * Convert Normal YouTube link into embed code
 * Turns - https://www.youtube.com/watch?v=Aq-d4CET3rY
 * into - Aq-d4CET3rY
 *
 * function will need to be echo'd
 *
 * @param $youtube_url
 * @return mixed
 */
function youtube_url_to_embed($youtube_url)
{
    $search = '/youtube\.com\/watch\?v=([a-zA-Z0-9]+)/smi';
    $replace = "youtube.com/embed/$1";
    $embed_url = preg_replace($search,$replace,$youtube_url);

    return $embed_url;
}

/**
 * Output YouTube Iframe Embed
 *
 * using helper function youtube_url_to_embed
 *
 * function will need to be echo'd
 * @param $embed_url
 * @return string
 */
function youtube_embed_iframe($embed_url)
{
    $iframe = '<iframe title="YouTube video player" class="youtube-player" type="text/html"  src="'.$embed_url.'"
frameborder="0" allowFullScreen></iframe>';

    //videoWrapper will be automatically added due to videoWrapper.js

    return $iframe;
}

/**
 * Get Featured Image
 *
 * Return a featured image of any Post with size passed in
 *
 * @param $id
 * @param $size - defaults to 'small' if none passed in
 * @return string
 */
//@TODO:create and provide placeholder image
function getFeaturedImage($id, $size)
{
    $size = ($size) ? $size : 'small';

    $tub = get_the_post_thumbnail($id, $size);

    if (empty($tub)) {
        return "<img src='"
            . get_template_directory_uri()
            . "/images/preload/featured_image_placeholder.png' alt='Placeholder image' />";
    } else {
        return $tub;
    }
}

/**
 * Return Page content per ID passed in
 * @param $page
 * @return mixed
 */
function get_page_content($page)
{
    $page_id = $page;
    $page_data = get_page( $page_id );
    $content = apply_filters('the_content', $page_data->post_content);

    return $content;
}

/**
 * Get Latest Post
 *
 * pipe in category_slug and how many posts
 * to return basic wp_query
 *
 * @param $category_slug
 * @param $return_number
 * @param bool $title
 * @param bool $excerpt
 * @param bool $readmore
 * @param bool $date
 *
 * @TODO: use populate_template_file method to return output
 */
function get_latest_post($category_slug, $return_number, $title = false, $excerpt = false, $readmore = false, $date = false)
{
    $args = [
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => $return_number,
        'order' => 'DSC',
        'category_name' => $category_slug
    ];

    $the_query = new WP_Query( $args );

    if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php if ($title) : ?><div class="title"><?=the_title()?></div><?php endif; ?>
            <?php if ($date) : ?><div class="date"><?=the_date()?></div><?php endif; ?>
            <?=getFeaturedImage(get_the_ID(), 'medium')?>
            <?php if ($excerpt) : ?><div class="excerpt"><?=the_excerpt()?></div><?php endif; ?>
            <?php if ($readmore) : ?><div class="readmore"><a href="<?=the_permalink()?>" title="<?=the_title(); ?>">read more</a></div><?php endif; ?>
            <?php
        endwhile;
    endif;
    wp_reset_postdata();
}

/**
 * Image Creator
 *
 * output the image src html tag
 * used primarily on product single view
 * until we build media manager handlers for this screen
 * @param $image_url
 * @param bool $alt
 * @param bool $class
 * @return string
 */
function image_creator($image_url, $alt=false, $class=false)
{
    $string = '<img src='.$image_url.' alt='.$alt.' class='.$class.'>';
    return $string;
}

/**
 * Determine Page ID of any Page/Post
 *
 * @param int $pid
 * @return bool
 */
function is_tree(int $pid): bool
{
    global $post;

    if(is_page()&&($post->post_parent==$pid||is_page($pid)))
        return true;
    else
        return false;
};

/**
 * @param int $postID
 * @return ?array
 */
function returnParentAllChildren(int $postID): ?array
{
    var_dump($postID);
    $args = array(
        'post_type' => 'page',
        'posts_per_page' => -1,
        'child_of' => $postID,
        'order' => 'ASC',
        'orderby' => 'menu_order'
    );
    $parent = new WP_Query($args);
    if ( $parent->have_posts() ) : while ( $parent->have_posts() ) : $parent->the_post();
    $pageData = [
            'id' => get_the_ID()
    ];
    endwhile;endif;

    return $pageData;
}

/**
 * General Image Fallback
 *
 * in a general instance, pipe in desired image asset
 * if not available, then show placeholder image
 *
 * placeholder image is general placeholder sitting in root of theme/images/
 *
 * @param $wantedAsset
 * @param $post
 */
function generalFallBackImageHandling($wantedAsset, $post)
{
    if (!$wantedAsset) : ?>
        <?=image_creator(get_template_directory_uri().'/images/placeholder.png', 'placeholder image') ?>
    <?php else : ?>
        <?=$wantedAsset?>
    <?php endif;
}

/**
 * Disable native WordPress emoji's loading
 */
function disable_emojis()
{
    remove_action('wp_head','print_emoji_detection_script', 7);
    remove_action('admin_print_scripts','print_emoji_detection_script');
    remove_action('wp_print_styles','print_emoji_styles');
    remove_action('admin_print_styles','print_emoji_styles');
    remove_filter('the_content_feed','wp_staticize_emoji');
    remove_filter('comment_text_rss','wp_staticize_emoji');
    remove_filter('wp_mail','wp_staticize_emoji_for_email');
    add_filter('tiny_mce_plugins','disable_emojis_tinymce');
    add_filter('wp_resource_hints','disable_emojis_remove_dns_prefetch', 10, 2);
}
add_action('init','disable_emojis');

/**
 * Filter function used to remove the tinymce emoji plugin.
 *
 * @param array $plugins
 * @return array Difference betwen the two arrays
 */
function disable_emojis_tinymce($plugins)
{
    if (is_array($plugins)) {
        return array_diff($plugins, ['wpemoji']);
    } else {
        return [];
    }
}

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.
 */
function disable_emojis_remove_dns_prefetch($urls, $relation_type)
{
    if ('dns-prefetch' == $relation_type) {
        /** This filter is documented in wp-includes/formatting.php */
        $emoji_svg_url = apply_filters('emoji_svg_url','https://s.w.org/images/core/emoji/2/svg/');

        $urls = array_diff($urls,[$emoji_svg_url]);
    }

    return $urls;
}
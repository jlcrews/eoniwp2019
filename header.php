<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <link rel="profile"
          href="http://gmpg.org/x

    <!-- Apple/Safari icon -->
    <link rel="apple-touch-icon"
          sizes="180x180"
          href="https://codetheweb.blog/assets/img/posts/html-icons/icon180.png">
    <!-- Square Windows tiles -->
    <meta name="msapplication-square70x70logo"
          content="https://codetheweb.blog/assets/img/posts/html-icons/icon70.png">
    <meta name="msapplication-square150x150logo"
          content="https://codetheweb.blog/assets/img/posts/html-icons/icon150.png">
    <meta name="msapplication-square310x310logo"
          content="https://codetheweb.blog/assets/img/posts/html-icons/icon310.png">
    <!-- Rectangular Windows tile -->
    <meta name="msapplication-wide310x150logo"
          content="https://codetheweb.blog/assets/img/posts/html-icons/icon-rect-310.png">
    <!-- Windows tile theme color -->
    <meta name="msapplication-TileColor"
          content="#2e2e2e">

    <?php wp_head(); ?>
</head>
<body>

<header class="wrapper">
    <div class="top">
        <div class="logo">
            <a href="<?=home_url()?>"
               title="<?=home_url()?> Home"
            ><img src="<?=get_template_directory_uri() ?>/images/logo-blue.png"
                  alt="<?=get_bloginfo('name')?> - <?=get_home_url()?> Logo" />
            </a>
        </div>
        <div class="rightActions">
            <div class="phone">(541) 962-7873</div>
            <ul class="menu">
                <li class="webmail">
                    <a href="https://mail.eoni.com/landing.php"
                       target="_blank"
                       title="Webmail"
                    >Webmail</a>
                </li>
                <li class="myaccount">
                    <a href="<?=home_url('/my-account')?>"
                       title="My Account"
                    >My Account</a>
                </li>
            </ul>
        </div>
    </div>
    <button id="menu_btn"></button>
    <div id="menu">
        <button id="menu_close"></button>
        <div id="search_mobile">
            <?php get_search_form()?>
        </div>
        <?php wp_nav_menu(['theme_location' => 'header_menu','menu_id' => 'primary-menu'])?>
    </div>
</header>
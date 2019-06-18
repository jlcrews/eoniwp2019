<footer>
    <div class="whiteTop">
        <div class="bottomMenu">
            <div class="menuItemList">
                <h3>Internet</h3>
                <?php wp_nav_menu(['theme_location' => 'footer_menu_one'])?>
            </div>
            <div class="menuItemList">
                <h3>Voice</h3>
                <?php wp_nav_menu(['theme_location' => 'footer_menu_two'])?>
            </div>
            <div class="menuItemList">
                <h3>Business</h3>
                <?php wp_nav_menu(['theme_location' => 'footer_menu_three'])?>
            </div>
            <div class="menuItemList">
                <h3>Support</h3>
                <?php wp_nav_menu(['theme_location' => 'footer_menu_four'])?>
            </div>
        </div>
        <div id="logo">
            <a href="<?=home_url()?>"
               title="<?=home_url()?> Home"
            ><img src="<?=get_template_directory_uri() ?>/images/logo_footer.svg"
                  alt="<?=get_bloginfo('name')?> - <?=get_home_url()?> Logo" />
        </div>
    </div>
    <div class="bottom">
        <p>&copy; <?=date("Y").' '.get_bloginfo( 'name' )?></p>
    </div>
</footer>
<?php wp_footer(); ?>

<!--Google Analytics-->
    <!--remove me and replace with client GA code-->
</body>
</html>
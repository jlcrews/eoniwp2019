<footer class="wrapper">
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
        <div class="logo">
            <a href="<?=home_url()?>"
               title="<?=home_url()?> Home"
            ><img src="https://dummyimage.com/300x140/000/fff.png"
                  alt="<?=get_bloginfo('name')?> - <?=get_home_url()?> Logo" /></a>
        </div>
    </div>
    <div class="bottom">
        <p>&copy; <?=date("Y").' '.get_bloginfo( 'name' )?> - Website By <a href="https://www.zachis.it" title="Zachary Smith Web Developer">zachis.it</a></p>
    </div>
</footer>
<?php wp_footer(); ?>

<!--Google Analytics-->
    <!--remove me and replace with client GA code-->
</body>
</html>
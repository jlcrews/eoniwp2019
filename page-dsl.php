<?php
/**
 * Template Name: Internet DSL
 *
 * @package eoni-wordpress
 */
get_header();
?>
    <main class="internalMarketing">
        <div class="wrapper">
            <div id="contentFull">
                <ul class="subMenu">
                    <li>
                        <a href="<?=home_url('/internet')?>"
                           title="Internet">Internet</a>
                    </li>
                    <li>
                        <a href="<?=home_url('/internet/fiber/')?>"
                           title="Fiber">Fiber</a>
                    </li>
                    <li>
                        <a href="<?=home_url('/internet/wireless/')?>"
                           title="Wireless">Wireless</a>
                    </li>
                    <li class="current">
                        <a href="<?=home_url('/internet/dsl/')?>"
                           title="DSL">DSL</a>
                    </li>
                </ul>
                <div class="internalMarketingTemplate dsl">
                    content here
                </div>
            </div>
        </div>
    </main>
<?php get_footer() ?>
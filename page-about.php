<?php
/**
 * Template Name: About - Special Layout
 *
 * @package eoni-wordpress
 */
get_header(); ?>
    <main class="internalMarketing">
        <div class="wrapper">
            <div id="contentFull"
                 class="internalDefaultPage">
                <ul class="subMenu">
                    <li class="current">
                        Learn More About EONI
                    </li>
                </ul>
                <?php while ( have_posts() ) : the_post() ?>
                <div class="contentWrapper">
                    <?php the_content() ?>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </main>
<?php get_footer() ?>
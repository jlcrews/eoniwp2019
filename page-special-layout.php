<?php
/**
 * Template Name: Special Layout
 *
 * @package eoni-wordpress
 */
get_header() ?>
    <main>
        <div class="wrapper">
            <div id="contentFull">
                <div class="subMenu">
                    <?php //var_dump(returnParentAllChildren(get_the_ID()))?>
                </div>
                <?php while ( have_posts() ) : the_post() ?>
                    <h2><?=the_title()?></h2>
                    <?php the_content() ?>
                <?php endwhile; ?>
            </div>
        </div>
    </main>
<?php get_footer() ?>
<?php
/**
 * The template for displaying all pages
 *
 * @package eoni-wordpress
 */
get_header() ?>
    <main class="wrapper">
        <div id="contentFull">
            <?php while ( have_posts() ) : the_post() ?>
                <h2 class="internalPageTitle"><?=the_title()?></h2>
                <?php the_content() ?>
            <?php endwhile; ?>
        </div>
    </main>
<?php get_footer() ?>
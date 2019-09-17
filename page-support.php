<?php
/**
 * Template Name: Support - Special Layout
 *
 * @package eoni-wordpress
 */
get_header(); ?>
    <main class="internalMarketing">
        <div class="wrapper">
            <div id="contentFull"
                 class="internalDefaultPage support">
                <ul class="subMenu">
                    <li class="current">
                        Contact Support
                    </li>
                </ul>
                <?php while ( have_posts() ) : the_post() ?>
                <div class="contentWrapper">
                    <div class="supportLeft">
                        <h2 class="internalPageTitle"><?=the_title()?></h2>
                        <ul>
                            <li>Technical Support 1-800-516-5251</li>
                            <li>
                                <p>If you’re having problems with your service or equipment, please don’t hesitate to contact us! We’d be more than happy to help. If we are experiencing an outage, please call our technical support number above for more information.</p>
                                <p>Please fill out the form provided, or call us at the number listed above. All tickets submitted through the website will be responded to by the next business day.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="supportRight">
                        <?php the_content() ?>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </main>
<?php get_footer() ?>
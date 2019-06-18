<?php
/**
 * Home landing page
 *
 * @package eoni-wordpress
 */
get_header() ?>
<main>
    <div class="homeSlider">
        <ul class="slickSlider">
            <li>
                <div class="left">
                    <h2>Title Here</h2>
                    <p>paragraph text here</p>
                    <div class="priceAction">
                        <div class="numbers">$34.34</div>
                        <div class="learnMore">
                            <a href="<?=home_url('')?>"
                               title="Learn More"
                               class="greenSquareButton"
                            >Learn More</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="left">
                    <h2>Title Here</h2>
                    <p>paragraph text here</p>
                    <div class="priceAction">
                        <div class="numbers">$34.34</div>
                        <div class="learnMore">
                            <a href="<?=home_url('')?>"
                               title="Learn More"
                               class="greenSquareButton"
                            >Learn More</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="left">
                    <h2>Title Here</h2>
                    <p>paragraph text here</p>
                    <div class="priceAction">
                        <div class="numbers">$34.34</div>
                        <div class="learnMore">
                            <a href="<?=home_url('')?>"
                               title="Learn More"
                               class="greenSquareButton"
                            >Learn More</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</main>
<?php get_footer() ?>
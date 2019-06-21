<?php
/**
 * Home landing page
 *
 * @package eoni-wordpress
 */
get_header() ?>
<main class="wrapper">
    <div class="homeSlider">
        <ul class="slick_slider">
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
                <div class="asset">
                    <img src="https://dummyimage.com/300x140/634/fff.png"
                         alt="change me"/>
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
                <div class="asset">
                    <img src="https://dummyimage.com/300x140/634/fff.png"
                         alt="change me"/>
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
                <div class="asset">
                    <img src="https://dummyimage.com/300x140/634/fff.png"
                         alt="change me"/>
                </div>
            </li>
        </ul>
    </div>
</main>
<?php get_footer() ?>
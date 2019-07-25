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
            <li class="internet">
                <div class="left">
                    <h2>
                        <span class="top">Smokin' Fast</span>
                        <span class="bottom">High Speed Internet</span>
                    </h2>
                    <ul>
                        <li>Fiber Internet & Voice</li>
                        <li>For your home and/or business</li>
                        <li>Speeds up to 1Gbps</li>
                    </ul>
                    <div class="priceAction">
                        <div class="priceStats">
                            <div class="numbers">$34.34</div>
                            <div class="asterisks">
                                <span class="starting">*starting at</span>
                                <span class="month">/month</span>
                            </div>
                        </div>
                        <div class="learnMore">
                            <a href="<?=home_url('')?>"
                               title="Learn More"
                            >Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="asset">
                    <img src="<?=get_template_directory_uri() ?>/images/home/monitor.png"
                         alt="computer monitor screen orange"/>
                </div>
            </li>
            <li class="voice">
                <div class="left">
                    <h2>
                        <span class="top">Crystal Clear</span>
                        <span class="bottom">Voice Communications</span>
                    </h2>
                    <ul>
                        <li>Residential voice line with unlimited local calling</li>
                        <li>Various long distance minutes included</li>
                        <li>Voicemail to email, call forwarding, & more!</li>
                    </ul>
                    <div class="priceAction">
                        <div class="priceStats">
                            <div class="numbers">$19.99</div>
                            <div class="asterisks">
                                <span class="starting">*starting at</span>
                                <span class="month">/month</span>
                            </div>
                        </div>
                        <div class="learnMore">
                            <a href="<?=home_url('')?>"
                               title="Learn More"
                            >Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="asset">
                    <img src="<?=get_template_directory_uri() ?>/images/home/phone.png"
                         alt="phone in cradle"/>
                </div>
            </li>
        </ul>
    </div>
</main>
<?php get_footer() ?>
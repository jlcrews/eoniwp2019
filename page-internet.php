<?php
/**
 * Template Name: Internet - Special Layout
 *
 * @package eoni-wordpress
 */
get_header();
?>
<main class="internalMarketing">
    <div class="wrapper">
        <div id="contentFull">
            <ul class="subMenu">
                <li class="current">
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
                <li>
                    <a href="<?=home_url('/internet/dsl/')?>"
                       title="DSL">DSL</a>
                </li>
            </ul>
            <div class="internalMarketingTemplate internet">
                <div class="signupTop">
                    <h2 class="styledHeader internet">Residential Internet Sales</h2>
                    <div class="signupAction">
                        <a href="<?=home_url('/sign-up')?>"
                           title="Sign Up"
                           class="greenSquareButton"
                        >Sign Up</a>
                    </div>
                </div>
                <div class="threeFullColumn">
                    <div class="one fiber">
                        <div class="asset">
                            <img src="<?=get_template_directory_uri() ?>/images/internal-marketing-pages/internet/fiber-blue.png"
                                 alt="fiber internet cables" />
                        </div>
                        <div class="contain">
                            <h3 class="title">
                                Fiber
                            </h3>
                            <div class="underTitle">
                                <p>Up to <span class="bold">1Gbps</span></p>
                                <p>Starting at <span class="bold">$49.99/month</span></p>
                            </div>
                            <div class="contentPara">
                                <p>Our Fiber Internet provides the fastest internet speeds available in Douglas County, right to your house. Whether you use the internet to play games, watch movies, or even operate a home business, Fiber Internet is your best option.</p>
                            </div>
                            <div class="learnMore">
                                <a href=""
                                   title="Learn About Fiber"
                                   class="graySquareButton"
                                >Learn About Fiber</a>
                            </div>
                        </div>
                    </div>
                    <div class="two wireless">
                        <div class="asset">
                            <img src="<?=get_template_directory_uri() ?>/images/internal-marketing-pages/internet/wireless-blue.png"
                                 alt="wirless internet tower" />
                        </div>
                        <div class="contain">
                            <h3 class="title">
                                Wireless
                            </h3>
                            <div class="underTitle">
                                <p>Up to <span class="bold">15Mbps</span></p>
                                <p>Starting at <span class="bold">$39.99/month</span></p>
                            </div>
                            <div class="contentPara">
                                <p>Don’t have phone line? Don’t worry as our wireless internet uses a small radio receiver that doesn’t need a phone line. We have wireless towers all over the county that allow us to provide internet to places we can’t provide DSL or Fiber to the Home.</p>
                            </div>
                            <div class="learnMore">
                                <a href=""
                                   title="Learn About Wireless"
                                   class="graySquareButton"
                                >Learn About Wireless</a>
                            </div>
                        </div>
                    </div>
                    <div class="three dsl">
                        <div class="asset">
                            <img src="<?=get_template_directory_uri() ?>/images/internal-marketing-pages/internet/dsl-towers-blue.png"
                                 alt="dsl internet phone towers" />
                        </div>
                        <div class="contain">
                            <h3 class="title">
                                DSL
                            </h3>
                            <div class="underTitle">
                                <p>Up to <span class="bold">40Mbps</span></p>
                                <p>Starting at <span class="bold">$54.99/month</span></p>
                            </div>
                            <div class="contentPara">
                                <p>Digital Subscriber Line is a type of Internet that is transmitted across your existing telephone lines. DFN uses Fiber-to-the-Node technology to provide our customers with faster speeds than the phone company.</p>
                            </div>
                            <div class="learnMore">
                                <a href=""
                                   title="Learn About DSL"
                                   class="graySquareButton"
                                >Learn About DSL</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer() ?>
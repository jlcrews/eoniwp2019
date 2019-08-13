<?php
/**
 * Template Name: Wireless - Special Layout
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
                    <li class="current">
                        <a href="<?=home_url('/internet/wireless/')?>"
                           title="Wireless">Wireless</a>
                    </li>
                    <li>
                        <a href="<?=home_url('/internet/dsl/')?>"
                           title="DSL">DSL</a>
                    </li>
                </ul>
                <div class="internalMarketingTemplate wireless">
                    <div class="signupTop">
                        <h2 class="title wireless">Wireless</h2>
                        <div class="signupAction">
                            <a href="<?=home_url('/sign-up')?>"
                               title="Sign Up"
                               class="greenSquareButton"
                            >Sign Up</a>
                        </div>
                    </div>
                    <div class="topExplainerPara">
                        <p>
                            Though we are terrific at providing DSL and fiber to hard to reach locations, for some, we are not yet in reach. For those customers, we offer high speed wireless internet! If you’ve had trouble getting fast internet, this may be your option!   **Not available in all areas**
                        </p>
                        <p>
                            Are you a low-income household that needs assistance with your monthly phone or broadband bill? Click Here!
                        </p>
                    </div>
                    <div class="twoFullColumn">
                        <div class="dataRow">
                            <div class="one fiveMbps">
                                <h3 class="title">
                                    5Mbps
                                </h3>
                                <div class="underTitle justPrice">
                                    <p><span class="price">$39.99</span>/month</p>
                                </div>
                                <ul class="itemizedPoints">
                                    <li>Our most affordable internet</li>
                                    <li>Great for emails and browsing</li>
                                    <li>No phone line required</li>
                                    <li>
                                        <a href="<?=home_url('/sign-up')?>"
                                           title="Sign Up"
                                           class="twoColSquareButton"
                                        >Sign Up</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="two fifteenMbps">
                                <h3 class="title">
                                    15Mbps
                                </h3>
                                <div class="underTitle underPrice">
                                    <p><span class="price">$49.99</span>/month</p>
                                </div>
                                <ul class="itemizedPoints">
                                    <li>Great speed for gaming</li>
                                    <li>2-3 Devices</li>
                                    <li>No phone line required</li>
                                    <li>
                                        <a href="<?=home_url('/sign-up')?>"
                                           title="Sign Up"
                                           class="twoColSquareButton"
                                        >Sign Up</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row explainerTwoCol">
                        <div class="left">
                            <h4>Installation Fees</h4>
                            <div class="priceWithText">
                                <span class="price">$0</span>
                                <span class="contractLength">with a 2 year contract</span>
                            </div>
                            <div class="priceWithText">
                                <span class="price">$75</span>
                                <span class="contractLength">with a 1 year contract</span>
                            </div>
                            <div class="priceWithText">
                                <span class="price">$100</span>
                                <span class="contractLength">with no contract</span>
                            </div>
                        </div>
                        <div class="right">
                            <h4>Equipment Rental/Purchase</h4>
                            <div class="router">
                                <img src="<?=get_template_directory_uri() ?>/images/internal-marketing-pages/fiber/wireless-router.png"
                                     alt="wireless router" />
                            </div>
                            <div class="title">Wireless Router</div>
                            <p class="finePrint">$200 Purchase$10/Month Rental</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer() ?>
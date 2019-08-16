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
                    <div class="signupTop">
                        <h2 class="styledHeader internet">DSL</h2>
                        <div class="signupAction">
                            <a href="<?=home_url('/sign-up')?>"
                               title="Sign Up"
                               class="greenSquareButton"
                            >Sign Up</a>
                        </div>
                    </div>
                    <div class="topExplainerPara">
                        <p>
                            Digital Subscriber Line (DSL) is one of the more traditional forms of high speed internet, and reaches your house via your existing copper phone lines.
                        </p>
                        <p>
                            I already have DSL. How can DFN possibly provide me with faster speeds? DFN’s DSL Internet is carried primarily across our Fiber Optic Network. This increases the speeds we can provide by limiting the distance it travels over your copper telephone lines.
                        </p>
                        <p>
                            Are you a low-income household that needs assistance with your monthly phone or broadband bill? Click Here!
                        </p>
                    </div>
                    <div class="leftSidebarColumn">
                        <div class="left">
                            <div class="one fortyMbps">
                                <h3 class="title">
                                    Up to 40Mbps
                                </h3>
                                <div class="underTitle justPrice">
                                    <p><span class="price">$54.99</span>/month</p>
                                </div>
                                <ul class="itemizedPoints">
                                    <li>Max Speed Attainable</li>
                                    <li>Up to 40Mbps</li>
                                    <li>Delivered over existing phone lines</li>
                                    <li>
                                        <a href="<?=home_url('/sign-up')?>"
                                           title="Sign Up"
                                           class="twoColSquareButton"
                                        >Sign Up</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="right">
                            <div class="row explainerOneCol">
                                <div class="installFees">
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
                                <div class="equip">
                                    <h4>Equipment Rental/Purchase</h4>
                                    <div class="wirelessSec">
                                        <div class="router">
                                            <img src="<?=get_template_directory_uri() ?>/images/internal-marketing-pages/dsl/wireless-router.png"
                                                 alt="wireless router" />
                                        </div>
                                        <div class="title">Wireless Modem</div>
                                        <p class="finePrint">$200 Purchase$10/Month Rental</p>
                                    </div>
                                    <div class="wiredSec">
                                        <div class="router">
                                            <img src="<?=get_template_directory_uri() ?>/images/internal-marketing-pages/dsl/wired-router.png"
                                                 alt="wired router" />
                                        </div>
                                        <div class="title">Wired Modem</div>
                                        <p class="finePrint">$75 Purchase$5/Month Rental</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer() ?>
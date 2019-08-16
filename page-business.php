<?php
/**
 * Template Name: Business - Special Layout
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
                        <a href="#businessFiberInternet"
                           title="Internet">Internet</a>
                    </li>
                    <li>
                        <a href="#voiceSolutions"
                           title="Voice">Voice</a>
                    </li>
                    <li>
                        <a href="<?=home_url('/hosted-voice')?>"
                           title="Hosted Voice">Hosted Voice</a>
                    </li>
                    <li>
                        <a href="#webEmailHosting"
                           title="Hosting">Hosting</a>
                    </li>
                </ul>
                <div class="internalMarketingTemplate business">
                    <div class="signupTop">
                        <div class="left">
                            <h2 class="styledHeader businessServices">Business Services</h2>
                            <p>DFN’s large fiber network allows us to offer robust Business Services including fiber internet, data networking, managed IT services, web/email hosting, and voice communications.</p>
                        </div>
                        <div class="right">
                            <div class="signupAction">
                                <a href="<?=home_url('/sign-up')?>"
                                   title="Sign Up"
                                   class="greenSquareButton"
                                >Sign Up</a>
                            </div>
                        </div>
                    </div>
                    <div id="voiceSolutions"
                         class="voiceSolutions">
                        <h2 class="styledHeader voice">Voice Solutions</h2>
                        <div class="left">
                            <h3>Business Voice</h3>
                            <ul>
                                <li>Analog, PRI, SIP Trunking</li>
                                <li>Local and Long Distance Calling</li>
                                <li>Voicemail, Voicemail to Email, Call Blocking,
                                    & more!</li>
                            </ul>
                        </div>
                        <div class="right">
                            <h3>Hosted PBX</h3>
                            <p>Switch your business over to our complete
                                VoIP system. With this option, you will now
                                have a single source provider for your business
                                phone equipment and phone service. DFN will
                                provide you with an enterprise grade phone
                                system, custom built to your specifications,
                                and include a comprehensive training
                                session for your staff.</p>
                            <div class="learnMore">
                                <a href=""
                                   title="Learn More"
                                   class="brownSquareButton"
                                >Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div id="businessFiberInternet"
                         class="businessFiberInternet">
                        <h2 class="styledHeader fiber">Business Fiber Internet</h2>
                        <div class="rowsContainer">
                            <div class="mps one">
                                <div class="title">
                                    50/25 Mbps
                                </div>
                                <div class="price">
                                    <span class="amount">$59.99*</span>
                                    <span class="under">/month</span>
                                    <span class="asterisk">*when bundled w/ DFN Voice ($79.99 without bundle)</span>
                                </div>
                                <ul class="list">
                                    <li>Our most affordable package</li>
                                    <li>Small Businesses</li>
                                    <li>Ideal for internet based phone systems</li>
                                </ul>
                                <div class="signup">
                                    <a href="<?=home_url('/sign-up')?>"
                                       title="Sign Up"
                                       class="greenSquareButton"
                                    >Sign Up</a>
                                </div>
                            </div>
                            <div class="mps two">
                                <div class="title">
                                    100/50 Mbps
                                </div>
                                <div class="price">
                                    <span class="amount">$79.99*</span>
                                    <span class="under">/month</span>
                                    <span class="asterisk">*when bundled w/ DFN Voice ($79.99 without bundle)</span>
                                </div>
                                <ul class="list">
                                    <li>Our most popular package</li>
                                    <li>Medium – Large Offices</li>
                                    <li>Video Conferencing</li>
                                </ul>
                                <div class="signup">
                                    <a href="<?=home_url('/sign-up')?>"
                                       title="Sign Up"
                                       class="greenSquareButton"
                                    >Sign Up</a>
                                </div>
                            </div>
                            <div class="mps three">
                                <div class="title">
                                    250/75 Mbps
                                </div>
                                <div class="price">
                                    <span class="amount">$159.99*</span>
                                    <span class="under">/month</span>
                                    <span class="asterisk">*when bundled w/ DFN Voice ($79.99 without bundle)</span>
                                </div>
                                <ul class="list">
                                    <li>Runs all your internet devices</li>
                                    <li>Security Systems</li>
                                    <li>Offsite Backup</li>
                                </ul>
                                <div class="signup">
                                    <a href="<?=home_url('/sign-up')?>"
                                       title="Sign Up"
                                       class="greenSquareButton"
                                    >Sign Up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="metroEthernet">
                        <div class="left">
                            <h2 class="styledHeader ethernet">Metro Ethernet</h2>
                            <p>Does your business have multiple buildings that need to connect like they are all under the same roof? With DFN’s large fiber network, we can network you with up to 10Gbps between your locations. Call us today for a custom quote!</p>
                        </div>
                        <div class="right">
                            <img src="<?=get_template_directory_uri() ?>/images/internal-marketing-pages/business/ethernet-cables-orange.png"
                                 alt="ethernet internet cables" />
                        </div>
                    </div>
                    <div id="webEmailHosting"
                         class="webEmailHosting">
                        <h2 class="styledHeader hosting">Web/Email Hosting Solutions</h2>
                        <div class="optionList">
                            <div class="option basic">
                                <h3>Basic</h3>
                                <div class="price">
                                    <span class="amount">$10.00</span>
                                    /month
                                </div>
                                <ul class="list">
                                    <li>Shared Server</li>
                                    <li>10GB Storage & Transfer</li>
                                    <li>10 Email Accounts</li>
                                </ul>
                                <div class="signup">
                                    <a href="<?=home_url('/sign-up')?>"
                                       title="Sign Up"
                                       class="greenSquareButton"
                                    >Sign Up</a>
                                </div>
                            </div>
                            <div class="option advanced">
                                <h3>Advanced</h3>
                                <div class="price">
                                    <span class="amount">$20.00</span>
                                    /month
                                </div>
                                <ul class="list">
                                    <li>Shared Server</li>
                                    <li>20GB Storage & Transfer</li>
                                    <li>20 Email Accounts</li>
                                    <li>20 Add-On Domains</li>
                                </ul>
                                <div class="signup">
                                    <a href="<?=home_url('/sign-up')?>"
                                       title="Sign Up"
                                       class="greenSquareButton"
                                    >Sign Up</a>
                                </div>
                            </div>
                            <div class="option professional">
                                <h3>Professional</h3>
                                <div class="price">
                                    <span class="amount">$30.00</span>
                                    /month
                                </div>
                                <ul class="list">
                                    <li>Shared Server</li>
                                    <li>30GB Storage & Transfer</li>
                                    <li>30 Email Accounts</li>
                                    <li>30 Add-On Domains</li>
                                    <li>Static IP Address</li>
                                </ul>
                                <div class="signup">
                                    <a href="<?=home_url('/sign-up')?>"
                                       title="Sign Up"
                                       class="greenSquareButton"
                                    >Sign Up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer() ?>
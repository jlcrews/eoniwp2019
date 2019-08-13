<?php
/**
 * Template Name: Hosted Voice
 *
 * @package eoni-wordpress
 */
get_header();
?>
    <main class="internalMarketing">
        <div class="wrapper">
            <div id="contentFull">
                <div class="internalMarketingTemplate hostedVoice">
                    <div class="signupTop">
                        <h2 class="title">Hosted Voice</h2>
                        <div class="signupAction">
                            <a href="<?=home_url('/sign-up')?>"
                               title="Sign Up"
                               class="greenSquareButton"
                            >Sign Up</a>
                        </div>
                    </div>
                    <div class="whyChoose">
                        <div class="phones">
                            <div class="phoneOne">
                                <img src="<?=get_template_directory_uri() ?>/images/internal-marketing-pages/hosted-voice/phone-big-unit.png"
                                     alt="Polycom Phone" />
                            </div>
                            <div class="phoneTwo">
                                <img src="<?=get_template_directory_uri() ?>/images/internal-marketing-pages/hosted-voice/phone-smaller-unit.png"
                                     alt="Polycom Phone" />
                            </div>
                        </div>
                        <div class="why">
                            <h3>Why Choose DFN Hosted Voice?</h3>
                            <p>DFN’s Hosted Voice is a cloud-based, Voice over IP (VoIP) phone system that delivers best in class capabilities at a fraction of the cost of traditional phone system. Everything you need is included – phones, equipment, installation and training. Advanced features and easy administration via a web portal makes Hosted PBX the last phone system you’ll ever need to buy.</p>
                            <ul>
                                <li>Low upfront cost for equipment, phones and installation</li>
                                <li>Bundled price includes everything you need – phone system, long distance, and equipment</li>
                                <li>Advanced features such as simultaneous ring, auto attendant, hunt groups, and music-on-hold</li>
                                <li>Scales to meet your changing business needs</li>
                                <li>Web interface enables you to change features at a click of a mouse</li>
                                <li>Personalized training to ensure you get the most out of your service</li>
                            </ul>
                        </div>
                        <div class="hosted">
                            <h3>Hosted PBX Web Portal</h3>
                            <p>Hosted Voice allows for a central administrator such as an office manager to change settings on phone lines for the entire business and for individual users to have the same easy-to-use control over their own extensions and IP phones. With over 20 years of experience, we at DFN pride ourselves on being your home town voice and data provider. Over the years we have continuously invested in our infrastructure in order to provide our customers with high quality service and cutting edge products.</p>
                            <div class="asset">
                                <img src="<?=get_template_directory_uri() ?>/images/internal-marketing-pages/hosted-voice/demoimg.jpg"
                                     alt="PBX Demo" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer() ?><?php
/**
 * Created by PhpStorm.
 * User: bigboi
 * Date: 8/8/2019
 * Time: 8:07 AM
 */
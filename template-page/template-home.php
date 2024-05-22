<?php
/*
* Template Name: HomePage Template
*/
get_header(); 
?>
<!-- content-holder -->
<div class="content-holder">
    <!--wrapper -->
    <div id="wrapper">
        <!--scroll-bar -->
        <div class="scr-bar_container">
            <div class="content" data-pagetitle="<?php echo esc_html('Imam Hossain Shadin', 'shadin') ?>"
                data-pagesubtitle="<?php echo esc_html('Home', 'shadin') ?>">
                <div class="bg-top"></div>
                <div class="bg-bottom"></div>
                <!--section   -->
                <section class="hero-section">
                    <div class="bg-wrap hero-section_bg">
                        <div class="bg" data-bg="<?php echo get_template_directory_uri(); ?>/images/bg/banner-bg-4.jpg">
                        </div>
                    </div>
                    <div class="hero-section-title">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="rotate_text hero-decor-let">
                                    <div><?php echo esc_html('Web Design', 'shadin'); ?></div>
                                    <div><?php echo esc_html('Web Development', 'shadin'); ?></div>
                                    <div><?php echo esc_html('Ecommerce websites', 'shadin'); ?></div>
                                    <div><?php echo esc_html('Project Websites', 'shadin'); ?></div>
                                    <div><?php echo esc_html('Booking Website', 'shadin'); ?></div>
                                    <div><?php echo esc_html('And More websites', 'shadin'); ?></div>
                                </div>
                                <h2><?php echo esc_html("Welcome to Shadin's Project Website", 'shadin'); ?></h2>

                                <div class="video_btn-wrap fl-wrap"><a
                                        data-src="<?php echo esc_url('https://vimeo.com/176916362') ?>"
                                        class="image-popup gradient-bg"><i
                                            class="fas fa-play"></i></a><span><?php echo esc_html('Play  Video Presentation', 'shadin'); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- section end  -->
                <!--section   -->
                <section>
                    <div class="row">
                        <div class="col-md-7">
                            <p>
                                <?php echo esc_html('I’m Imam Hossain Shadin. I’m a Web developer who is passionate about making error-free websites with 100% client satisfaction. Let’s collaborate to build a strong online presence you’re excited to share with the world.', 'shadin') ?>
                            </p>
                            <div class="facts-container fl-wrap">
                                <!-- inline-facts -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="4">0</div>
                                            </div>
                                        </div>
                                        <h6><?php echo esc_html('Years Experience', 'shadin') ?></h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="50">0</div>
                                            </div>
                                        </div>
                                        <h6><?php echo esc_html('Happy Clients', 'shadin') ?></h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="150">0</div>
                                            </div>
                                        </div>
                                        <h6><?php echo esc_html('Projects Completed', 'shadin') ?></h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="hero-info-list fl-wrap">
                                <ul>
                                    <li><strong>Available For Work</strong><span>Yes</span></li>
                                    <li><strong>Email</strong><span>shadinfr@yahoo.com</span></li>
                                    <li><strong>WhatsApp</strong><span>+8801858733453</span></li>
                                    <li><strong>By LinkedIn</strong><span>Imam Hossain</span></li>
                                    <!-- <li><strong>Ecommerce Website</strong><span>24+</span></li>
                                    <li><strong>Restaurant Website</strong><span>6+</span></li>
                                    <li><strong>Portfolio Website</strong><span>5+</span></li>
                                    <li><strong>Blog/Magazine Website</strong><span>9+</span></li> -->
                                </ul>
                                <a href="<?php echo esc_url(site_url()) ?>/project"
                                    class="btn ajax fl-btn color-bg"><span><?php echo esc_html('My Projects', 'shadin') ?></span></a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- section end  -->
                <section class="serv-sec">
                    <div class="section-title fl-wrap">
                        <h3><?php echo esc_html('Services That I Provide', 'shadin') ?></h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="column-wrapper_text services-item fl-wrap">
                                <span class="serv-number"><?php echo esc_html('01.', 'shadin'); ?></span>
                                <i class="fab fa-wordpress-simple"></i>
                                <h4><?php echo esc_html('WordPress', 'shadin'); ?></h4>
                                <p>Praesent nec leo venenatis elit semper aliquet id ac enim. Maecenas nec mi leo. Etiam
                                    venenatis ut dui non hendrerit. Integer dictum, diam vitae blandit accumsan, dolor
                                    odio tempus arcu .</p>
                                <ul class="serv-list">
                                    <li>Elementor</li>
                                    <li>WooCommerce</li>
                                    <li>Hotel Booking</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="column-wrapper_text services-item fl-wrap">
                                <span class="serv-number">02.</span>
                                <i class="fal fa-desktop"></i>
                                <h4>Front End Developer</h4>
                                <p>Praesent nec leo venenatis elit semper aliquet id ac enim. Maecenas nec mi leo. Etiam
                                    venenatis ut dui non hendrerit. Integer dictum, diam vitae blandit accumsan, dolor
                                    odio tempus arcu .</p>
                                <ul class="serv-list">
                                    <li>JavaScript</li>
                                    <li>React</li>
                                    <li>MongoDB</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="column-wrapper_text services-item fl-wrap">
                                <span class="serv-number">03.</span>
                                <i class="fal fa-store"></i>
                                <h4>Shopify</h4>
                                <p>Praesent nec leo venenatis elit semper aliquet id ac enim. Maecenas nec mi leo. Etiam
                                    venenatis ut dui non hendrerit. Integer dictum, diam vitae blandit accumsan, dolor
                                    odio tempus arcu .</p>
                                <ul class="serv-list">
                                    <li>Customize</li>
                                    <li>Ecommerce</li>
                                    <li>Optimize</li>
                                    <li>SEO</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="column-wrapper_text services-item fl-wrap">
                                <span class="serv-number">04.</span>
                                <i class="fal fa-bug"></i>
                                <h4>Bug Fixing</h4>
                                <p>Praesent nec leo venenatis elit semper aliquet id ac enim. Maecenas nec mi leo. Etiam
                                    venenatis ut dui non hendrerit. Integer dictum, diam vitae blandit accumsan, dolor
                                    odio tempus arcu .</p>
                                <ul class="serv-list">
                                    <li>Critical Error</li>
                                    <li>Fatal error</li>
                                    <li>syntax error</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <!--section  -->
                <section class="scroll_sec" id="sec5">
                    <div class="section-title fl-wrap">
                        <h3><?php echo esc_html('Clents And Testimonilas', 'shadin'); ?></h3>
                    </div>
                    <div class="testilider fl-wrap">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <!-- swiper-slide -->
                                <div class="swiper-slide">
                                    <div class="testi-item fl-wrap">
                                        <span class="testi-number">01.</span>
                                        <div class="testi-avatar"><img
                                                src="<?php echo get_template_directory_uri(); ?>/images/avatar/1.jpg"
                                                alt=""></div>
                                        <h3>Liza Mirovsky</h3>
                                        <p>"All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                            chunks as necessary, making this the first true generator on the Internet.
                                            It uses a dictionary of over "</p>
                                        <a href="#" class="teti-link" target="_blank">Via Twitter</a>
                                    </div>
                                </div>
                                <!-- swiper-slide end-->
                                <!-- swiper-slide -->
                                <div class="swiper-slide">
                                    <div class="testi-item fl-wrap">
                                        <span class="testi-number">02.</span>
                                        <div class="testi-avatar"><img
                                                src="<?php echo get_template_directory_uri(); ?>/images/avatar/2.jpg"
                                                alt=""></div>
                                        <h3>Andy Smith</h3>
                                        <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc.
                                            Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed
                                            sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                        <a href="#" class="teti-link" target="_blank">Via Facebook</a>
                                    </div>
                                </div>
                                <!-- swiper-slide end-->
                                <!-- swiper-slide -->
                                <div class="swiper-slide">
                                    <div class="testi-item fl-wrap">
                                        <span class="testi-number">03.</span>
                                        <div class="testi-avatar"><img
                                                src="<?php echo get_template_directory_uri(); ?>/images/avatar/3.jpg"
                                                alt=""></div>
                                        <h3>Mery Trust</h3>
                                        <p>"All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                            chunks as necessary, making this the first true generator on the Internet.
                                            It uses a dictionary of over "</p>
                                        <a href="#" class="teti-link" target="_blank">Via Twitter</a>
                                    </div>
                                </div>
                                <!-- swiper-slide end-->
                                <!-- swiper-slide -->
                                <div class="swiper-slide">
                                    <div class="testi-item fl-wrap">
                                        <span class="testi-number">04.</span>
                                        <div class="testi-avatar"><img
                                                src="<?php echo get_template_directory_uri(); ?>/images/avatar/4.jpg"
                                                alt=""></div>
                                        <h3>Centa Simpson</h3>
                                        <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc.
                                            Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed
                                            sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                        <a href="#" class="teti-link" target="_blank">Via Facebook</a>
                                    </div>
                                </div>
                                <!-- swiper-slide end-->
                            </div>
                        </div>
                    </div>
                    <div class="ts-controls">
                        <div class="tc-button tc-button-prev"><i class="fal fa-angle-left"></i></div>
                        <div class="tc-button tc-button-next"><i class="fal fa-angle-right"></i></div>
                    </div>
                    <div class="ss-pagination-wrap">
                        <div class="tc-pagination slider-pag"></div>
                    </div>
                    <!-- client-list -->
                    <div class="fl-wrap client-list">
                        <ul class="">
                            <li><a href="#" target="_blank"><img
                                        src="<?php echo get_template_directory_uri(); ?>/images/clients/1.png"
                                        alt=""></a></li>
                            <li><a href="#" target="_blank"><img
                                        src="<?php echo get_template_directory_uri(); ?>/images/clients/2.png"
                                        alt=""></a></li>
                            <li><a href="#" target="_blank"><img
                                        src="<?php echo get_template_directory_uri(); ?>/images/clients/3.png"
                                        alt=""></a></li>
                            <li><a href="#" target="_blank"><img
                                        src="<?php echo get_template_directory_uri(); ?>/images/clients/4.png"
                                        alt=""></a></li>
                        </ul>
                        <!-- client-list end-->
                    </div>
                </section>
                <!--section end-->
                <div class="to-top-wrap">
                    <div class="to-top color-bg"><i class="fas fa-caret-up"></i></div>
                </div>
            </div>
        </div>
        <!--scroll-bar end -->
        <!--share end -->
        <div class="share-wrapper">
            <div class="share-container isShare"></div>
        </div>
        <!--share end -->
    </div>
    <!--wrapper end -->
    <!--page-load -->
    <div class="page-load">
        <div class="pl-spinner"><span></span></div>
    </div>
    <!--page-load end -->
</div>
<!-- content-holder end -->
<?php 
get_footer();
                
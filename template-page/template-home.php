<?php
/*
* Template Name: HomePage Template
*/
get_header(); 
?>
<div class="content" data-pagetitle="<?php echo esc_html(get_theme_mod( 'homepage_title' ), 'shadin') ?>" data-pagesubtitle="<?php echo esc_html(the_title(), 'shadin') ?>">
    <div class="bg-top"></div>
    <div class="bg-bottom"></div>
    <!--section   -->
    <section class="hero-section">
        <div class="bg-wrap hero-section_bg">
            <?php 
                $background = get_theme_mod( 'shadin_banner_bg');
                if($background['background-image']) {
                ?>
                    <div class="bg" data-bg="<?php echo $background['background-image']; ?>"></div>
                <?php
                }
            ?>
        </div>
        <div class="hero-section-title">
            <div class="row">
                <div class="col-md-7">
                    <div class="rotate_text hero-decor-let">
                        <?php 
                            $selected_skills = get_theme_mod( 'skills_list', [] );
                            $choices_skills = skills_list();
                            // var_dump($choices_skills);
                            if( ! empty($selected_skills) ) {
                                foreach($selected_skills as $skill) {
                                    if(isset($choices_skills[$skill])) {
                                    ?>
                                        <div><?php echo esc_html($choices_skills[$skill], 'shadin'); ?></div>
                                    <?php
                                    }
                                }
                            }
                        ?>
                    </div>
                    <?php 
                        if( ! empty(get_theme_mod( 'banner_title')) ) {
                        ?>
                            <h2><?php echo esc_html(get_theme_mod( 'banner_title', "WELCOME TO SHADIN'S PROJECT WEBSITE"), 'shadin'); ?></h2>
                        <?php
                        }
                    ?>
                    <?php 
                        if( true == get_theme_mod( 'is_presentation_display') ) {
                        ?>
                            <div class="video_btn-wrap fl-wrap">
                                <a data-src="<?php echo esc_url(get_theme_mod('presentation_url', 'https://vimeo.com/176916362')) ?>" class="image-popup gradient-bg">
                                    <i class="fas fa-play"></i>
                                </a>
                                <?php if( !empty(get_theme_mod('presentation_title'))) { ?>
                                    <span><?php echo esc_html(get_theme_mod('presentation_title'), 'shadin'); ?></span>
                                <?php } ?>
                            </div>
                        <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- section end  -->
    <!--section   -->
    <section class="about-section">
        <div class="row">
            <div class="col-md-7">
                <?php if( ! empty(get_theme_mod("short_bio")) ) { ?> 
                    <p class="short-bio">
                        <?php echo esc_html(get_theme_mod("short_bio"), 'shadin') ?>
                    </p>
                <?php } ?>
                <div class="facts-container fl-wrap">
                    <!-- inline-facts -->
                    <?php
                        $achievements = get_theme_mod("achievements_fields", []);

                        if( ! empty($achievements) ) {
                            foreach($achievements as $achievement) {
                                ?>
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="<?php echo esc_attr($achievement['achievement_num'], 'shadin') ?>">0</div>
                                            </div>
                                        </div>
                                        <h6><?php echo esc_html($achievement['achievement_name'], 'shadin') ?></h6>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    ?>
                    <!-- inline-facts end -->
                </div>
            </div>
            <div class="col-md-5">
                <div class="hero-info-list fl-wrap">
                    <ul>
                        <?php
                            $contact_infos = get_theme_mod("contact_info_box");
                            if( ! empty($contact_infos) ) {
                                foreach($contact_infos as $contact_info) {
                                    ?>
                                    <li>
                                        <strong><?php echo esc_html($contact_info["contact_label"], 'shadin') ?></strong>
                                        <?php 
                                            if ($contact_info["is_have_link"]) {
                                                echo '<span><a href="' . esc_url($contact_info["contact_link"]) . '">' . esc_html($contact_info["contact_value"]) . '</a></span>';
                                            } else {
                                                echo '<span>' . esc_html($contact_info["contact_value"]) . '</span>';
                                            }
                                        ?>
                                    </li>
                                    <?php
                                }
                            }
                        ?>
                    </ul>
                    <?php if(get_theme_mod("is_contact_btn_show")) : ?>
                        <a href="<?php echo esc_url(get_theme_mod("contact_btn_url")) ?>" class="btn ajax fl-btn color-bg">
                            <span><?php echo esc_html(get_theme_mod("contact_btn_text"), 'shadin') ?></span>
                        </a>
                    <?php endif ?>
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
            <?php
                $services = get_theme_mod("service_items");
                // var_dump($services);
                if( ! empty($services) ) {
                    foreach($services as $service) {
                        ?>
                        <div class="col-md-6">
                            <div class="column-wrapper_text services-item fl-wrap">
                                <span class="serv-number"><?php echo esc_html('01.', 'shadin'); ?></span>
                                <i class="fab fa-wordpress-simple"></i>
                                <h4><?php echo esc_html($service["service_name"], 'shadin'); ?></h4>
                                <p><?php echo esc_html($service["service_desc"], 'shadin'); ?></p>
                                <ul class="serv-list">
                                    <?php foreach($service['service_skills'] as $skill): ?>
                                        <li><?php echo esc_html($skill, 'shadin'); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <?php
                    }
                }
            ?>
            <div class="col-md-6">
                <div class="column-wrapper_text services-item fl-wrap">
                    <span class="serv-number">02.</span>
                    <i class="fal fa-desktop"></i>
                    <h4>Front End Developer</h4>
                    <p>
                        Praesent nec leo venenatis elit semper aliquet id ac enim. Maecenas nec mi leo. Etiam
                        venenatis ut dui non hendrerit. Integer dictum, diam vitae blandit accumsan, dolor
                        odio tempus arcu .
                    </p>
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
                    <p>
                        Praesent nec leo venenatis elit semper aliquet id ac enim. Maecenas nec mi leo. Etiam
                        venenatis ut dui non hendrerit. Integer dictum, diam vitae blandit accumsan, dolor
                        odio tempus arcu .
                    </p>
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
                    <p>
                        Praesent nec leo venenatis elit semper aliquet id ac enim. Maecenas nec mi leo. Etiam
                        venenatis ut dui non hendrerit. Integer dictum, diam vitae blandit accumsan, dolor
                        odio tempus arcu .
                    </p>
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
<?php 
get_footer();
                
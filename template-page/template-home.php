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
    <?php if(get_theme_mod('is_service_section_show', true)): ?>
    <section class="serv-sec">
        <?php if(!empty(get_theme_mod('service_section_title'))): ?>
            <div class="section-title fl-wrap">
                <h3><?php echo esc_html(get_theme_mod('service_section_title'), 'shadin') ?></h3>
            </div>
        <?php endif; ?>
        <div class="row">
            <?php $services = get_theme_mod("service_items"); ?>
            <?php if( ! empty($services) ): ?>
                <?php foreach($services as $index => $service): ?>
                    <div class="col-md-6">
                        <div class="column-wrapper_text services-item fl-wrap">
                            <span class="serv-number"><?php echo esc_html(sprintf('%02d.', $index + 1), 'shadin'); ?></span>
                            <img src="<?php echo esc_url($service["service_image"], 'shadin'); ?>" alt="<?php echo esc_html($service["service_name"], 'shadin'); ?>">
                            <h4><?php echo esc_html($service["service_name"], 'shadin'); ?></h4>
                            <p><?php echo esc_html($service["service_desc"], 'shadin'); ?></p>
                            <ul class="serv-list">
                                <?php 
                                    if(!empty($service['service_skills'])):
                                        $skills = explode(',', $service['service_skills']);
                                        // var_dump($skills);
                                        foreach($skills as $skill): 
                                        ?>
                                            <li><?php echo esc_html($skill, 'shadin'); ?></li>
                                        <?php 
                                        endforeach;
                                    endif; 
                                ?>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-md-12">
                    <p>No services found.</p>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>
    <!--section  -->
    <?php if(get_theme_mod('is_testimonials_section_show', true)): ?>
    <section class="testimonial-section scroll_sec" id="sec5">
        <?php if(!empty(get_theme_mod('testimonials_section_title'))): ?>
            <div class="section-title fl-wrap">
                <h3><?php echo esc_html(get_theme_mod('testimonials_section_title'), 'shadin') ?></h3>
            </div>
        <?php endif; ?>
        <div class="testilider fl-wrap">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- swiper-slide -->
                    <?php $testimonials = get_theme_mod("testimonials_items", []); ?>
                    <?php if( ! empty($testimonials) ): ?>
                        <?php foreach($testimonials as $index => $testimonial): ?>
                            <div class="swiper-slide">
                                <div class="testi-item fl-wrap">
                                    <span class="testi-number"><?php echo esc_html(sprintf('%02d.', $index + 1), 'shadin'); ?></span>
                                    <div class="testi-avatar">
                                        <img src="<?php echo esc_url($testimonial["testi_client_image"], 'shadin'); ?>" alt="<?php echo esc_html($testimonial["testi_client_name"], 'shadin'); ?>">
                                    </div>
                                    <h3><?php echo esc_html($testimonial["testi_client_name"], 'shadin'); ?></h3>
                                    <p><?php echo esc_html($testimonial["testimonial_text"], 'shadin'); ?></p>
                                    <!-- <a href="#" class="testi-link" target="_blank"><?php// echo esc_html("Via " . $testimonial["testimonial_by"], 'shadin'); ?></a> -->
                                    <span class="testi-link"><?php echo esc_html("Via " . $testimonial["testimonial_by"], 'shadin'); ?></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="swiper-slide">
                            <p>No Testimonials found.</p>
                        </div>
                    <?php endif; ?>
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
    </section>
    <?php endif; ?>
    <!--section end-->
<?php 
get_footer();
                
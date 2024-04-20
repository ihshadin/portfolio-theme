<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 */
?>
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php 
	// Using the global argument
	global $redux_shadin_opt;
	wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
        <!--Loader -->
        <!-- <div class="body-preload">
            <div class="pl-spinner2"><span></span></div>
        </div> -->
        <!-- loader end  -->
        <!-- main start  -->
        <div id="main">
            <!--main-container -->
            <div class="main-container">
                <!--header -->
                <header class="main-header">
                    <div class="header-titile">
                        <h1><?php echo esc_html('Imam Hossain Shadin', 'shadin'); ?></h1>
                        <h4><?php echo esc_html('Web Developer', 'shadin'); ?></h4>
                    </div>
                    <a data-src="<?php echo get_template_directory_uri();?>/images/shadin-big2.jpg" class="image-popup header-popup color-bg"><i class="fal fa-plus"></i></a>
                    <div class="header-titile-img">
                        <div class="bg"  data-bg="<?php echo get_template_directory_uri();?>/images/shadin.png" ></div>
                    </div>
                    <div class="main-menu-wrap">
                        <!-- nav -->
                        <nav class="nav-inner fl-wrap" id="menu">
                            <!-- <ul>
                                <li><a href="" class="ajax"><i class="fal fa-home"></i> Home</a></li>
                                <li><a href="" class="ajax"><i class="fal fa-address-card"></i> Resume</a></li>
                                <li><a href="" class="ajax"><i class="fal fa-images"></i> Portfolio</a></li>
                                <li><a href="" class="ajax"><i class="fal fa-envelope"></i> Contacts</a></li>
                                <li><a href="" class="ajax"><i class="fal fa-book"></i> Blog</a></li>
                                <li>
                                    <a href="#"><i class="fal fa-layer-group"></i> Pages</a>
                                    
                                    <ul>
                                        <li><a href="portfolio-single.html" class="ajax">Portfolio Single</a></li>
                                        <li><a href="portfolio-single2.html" class="ajax">Portfolio Single 2</a></li>
                                        <li><a href="blog-single.html" class="ajax">Blog Single</a></li>
                                        <li><a href="404.html" class="ajax">404</a></li>
                                    </ul>
                                    
                                </li>
                            </ul> -->
							<?php 
								// Define the menu arguments
								$menu_args = array(
									'menu'         => 'primary-menu',
									'container'    => false,
								);

								// Output the menu
								wp_nav_menu($menu_args);
							?>
                        </nav>
                        <!-- nav end-->
                    </div>
                    <a href="#" download="" class="header_btn gradient-bg"><i class="fas fa-download"></i><?php echo esc_html('Download CV', 'shadin') ?></a>
                </header>
                <!--header end-->
                <!-- top-opt -->
                <div class="top-opt">
                    <div class="nav-button-wrap c_sb gradient-bg2">
                        <div class="nav-button"><span></span><span></span><span></span></div>
                    </div>
                    <div class="page-subtitle">
						<a href="<?php echo esc_url(site_url()); ?>" class="ajax"><i class="fal fa-home"></i></a><span>Home</span>
					</div>
                    <a href="<?php echo esc_url(site_url()); ?>" class="ajax mob-logo"><span></span><strong></strong></a>
                    <a href="<?php echo esc_url('/contact'); ?>" class="ajax to_contacts"><i class="far fa-envelope"></i><?php echo esc_html('Get in Touch', 'shadin') ?></a>
                    <div class="share-btn show-share isShare gradient-bg2">
                        <span><?php echo esc_html('Share', 'shadin') ?></span>
                        <i class="fas fa-share-alt"></i>
                    </div>
                </div>
                <!-- top-opt end -->
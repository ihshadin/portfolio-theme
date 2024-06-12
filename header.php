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
        <div class="body-preload">
            <div class="pl-spinner2"><span></span></div>
        </div>
        <!-- loader end  -->
        <!-- main start  -->
        <div id="main">
            <!--main-container -->
            <div class="main-container">
                <!--header -->
                <header class="main-header">
                    <div class="header-titile">
                        <h1><?php echo esc_html( get_theme_mod( 'your_name' ), 'shadin' ); ?></h1>
                        <h4><?php echo esc_html(get_theme_mod( 'your_designation' ), 'shadin'); ?></h4>
                    </div>
                    <a data-src="<?php echo esc_url( get_theme_mod( 'website_logo_shadin' ) ); ?>" class="image-popup header-popup color-bg">
                        <i class="fal fa-plus"></i>
                    </a>
                    <div class="header-titile-img">
                        <div class="bg"  data-bg="<?php echo esc_url( get_theme_mod( 'website_logo_shadin' ) ); ?>" ></div>
                    </div>
                    <div class="main-menu-wrap">
                        <!-- nav -->
                        <nav class="nav-inner fl-wrap" id="menu">
							<?php 
								$menu_args = array(
									'menu'         => 'primary-menu',
									'container'    => false,
								);
								wp_nav_menu($menu_args);
							?>
                        </nav>
                        <!-- nav end-->
                    </div>
                    <?php
                        if(get_theme_mod( 'header_btn_text')) {
                        ?>
                            <a href="<?php echo esc_url(get_theme_mod( 'header_btn_options') === "upload_file" ? get_theme_mod( 'header_btn_file') : get_theme_mod( 'header_btn_url'), 'shadin') ?>" download="Imam Hossain" class="header_btn gradient-bg">
                                <i class="fas fa-download"></i>
                                <?php echo esc_html( get_theme_mod( 'header_btn_text'), 'shadin' ); ?>
                            </a>
                        <?php
                        }
                    ?>
                </header>
                <!--header end-->
                <!-- top-opt -->
                <div class="top-opt">
                    <div class="nav-button-wrap c_sb gradient-bg2">
                        <div class="nav-button"><span></span><span></span><span></span></div>
                    </div>
                    <div class="page-subtitle">
						<a href="<?php echo esc_url(site_url()); ?>" class="ajax">
                            <i class="fal fa-home"></i>
                        </a>
                        <span></span>
					</div>
                    <a href="<?php echo esc_url(site_url()); ?>" class="ajax mob-logo">
                        <span></span><strong></strong>
                    </a>
                    <?php
                        if(get_theme_mod('header_action_btn')) {
                        ?>
                        <a href="<?php echo esc_url(get_theme_mod('header_action_btn_url')); ?>" class="ajax to_contacts">
                            <i class="far fa-envelope"></i>
                            <?php echo esc_html(get_theme_mod('header_action_btn'), 'shadin') ?>
                        </a>
                        <?php
                        }
                    ?>
                    <div class="share-btn show-share isShare gradient-bg2">
                        <span><?php echo esc_html('Share', 'shadin') ?></span>
                        <i class="fas fa-share-alt"></i>
                    </div>
                </div>
                <!-- top-opt end -->
                <!-- content-holder -->
                <div class="content-holder">
                    <!--wrapper -->
                    <div id="wrapper">
                    <!--scroll-bar -->
                        <div class="scr-bar_dec"></div>
                        <div class="scr-bar_container">
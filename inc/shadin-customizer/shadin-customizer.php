<?php

// Remove default section "Site Identity"
function remove_site_identity_section( $wp_customize ) {
    $wp_customize->remove_section( 'title_tagline' );
}
add_action( 'customize_register', 'remove_site_identity_section', 20 );

/*-------------------
Follow below for
All Panels 
---------------------*/

// Add a Panel "Headers Parts"
new \Kirki\Panel(
	'shadin_header_parts',
	[
		'title'       => esc_html__( 'Headers Parts', 'shadin' ),
		'priority'    => 10,
	]
);
// Add a Panel "Headers Parts"
new \Kirki\Panel(
	'shadin_homepage',
	[
		'title'       => esc_html__( 'Home Page', 'shadin' ),
		'priority'    => 20,
	]
);

/*-------------------
Follow below for
All Sections
---------------------*/

// Add a section "Header Sidebar"
new \Kirki\Section(
	'shadin_header_sidebar',
	[
		'title'       => esc_html__( 'Headers Sidebar info', 'shadin' ),
		'description' => esc_html__( "You can edit header's sidebar from there. (Text, Photo, URL and others)", 'shadin' ),
        'panel'       => 'shadin_header_parts',
		'priority'    => 10,
	]
);
// Add a section "Banner Section"
new \Kirki\Section(
	'shadin_banner_section',
	[
		'title'       => esc_html__( 'Banner Section', 'shadin' ),
		'description' => esc_html__( "You can edit banner info from here. (Background Image, Title, Slider Skills, Video etc)", 'shadin' ),
        'panel'       => 'shadin_homepage',
		'priority'    => 10,
	]
);
// Add a section "About Sidebar"
new \Kirki\Section(
	'shadin_about_section',
	[
		'title'       => esc_html__( 'About Section', 'shadin' ),
		'description' => esc_html__( "You can add/edit personal info from here. (Bio, Name, Email, Social Media ID)", 'shadin' ),
        'panel'       => 'shadin_homepage',
		'priority'    => 20,
	]
);
// Add a section "Services Sidebar"
new \Kirki\Section(
	'shadin_services_section',
	[
		'title'       => esc_html__( 'Services Section', 'shadin' ),
		'description' => esc_html__( "You can add/edit Services from here.", 'shadin' ),
        'panel'       => 'shadin_homepage',
		'priority'    => 30,
	]
);

/*-------------------
Follow below for
All Fields 
---------------------*/

// Header
require_once get_template_directory() . '/inc/shadin-customizer/header-customizer.php';
// Home page
require_once get_template_directory() . '/inc/shadin-customizer/home-customizer.php';


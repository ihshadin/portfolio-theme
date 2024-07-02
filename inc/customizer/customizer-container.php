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
// Add a Panel "Home Page"
new \Kirki\Panel(
	'shadin_homepage',
	[
		'title'       => esc_html__( 'Home Page', 'shadin' ),
		'priority'    => 20,
	]
);
// Add a Panel "Resume"
new \Kirki\Panel(
	'shadin_resume',
	[
		'title'       => esc_html__( 'Resume', 'shadin' ),
		'priority'    => 30,
	]
);
// Add a Panel "Contact Page"
new \Kirki\Panel(
	'shadin_contact_page',
	[
		'title'       => esc_html__( 'Contact', 'shadin' ),
		'priority'    => 40,
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
// Add a section "About Section"
new \Kirki\Section(
	'shadin_about_section',
	[
		'title'       => esc_html__( 'About Section', 'shadin' ),
		'description' => esc_html__( "You can add/edit personal info from here. (Bio, Name, Email, Social Media ID)", 'shadin' ),
        'panel'       => 'shadin_homepage',
		'priority'    => 20,
	]
);
// Add a section "Services Section"
new \Kirki\Section(
	'shadin_services_section',
	[
		'title'       => esc_html__( 'Services Section', 'shadin' ),
		'description' => esc_html__( "You can add/edit Services from here.", 'shadin' ),
        'panel'       => 'shadin_homepage',
		'priority'    => 30,
	]
);
// Add a section "Testimonials Section"
new \Kirki\Section(
	'shadin_testimonials_section',
	[
		'title'       => esc_html__( 'Testimonials Section', 'shadin' ),
		'description' => esc_html__( "You can add/edit Testimonials from here.", 'shadin' ),
        'panel'       => 'shadin_homepage',
		'priority'    => 40,
	]
);

// Add a section "Resume Summary"
new \Kirki\Section(
	'shadin_resume_section',
	[
		'title'       => esc_html__( 'Resume Summary', 'shadin' ),
		'description' => esc_html__( "You can add/edit Resume Summary Info from here.", 'shadin' ),
        'panel'       => 'shadin_resume',
		'priority'    => 10,
	]
);
// Add a section "Work History"
new \Kirki\Section(
	'shadin_work_history',
	[
		'title'       => esc_html__( 'Work History', 'shadin' ),
		'description' => esc_html__( "You can add/edit Work History from here.", 'shadin' ),
        'panel'       => 'shadin_resume',
		'priority'    => 20,
	]
);
// Add a section "Education Qualification"
new \Kirki\Section(
	'shadin_edu_qua',
	[
		'title'       => esc_html__( 'Education Qualification', 'shadin' ),
		'description' => esc_html__( "You can add/edit Education Qualification from here.", 'shadin' ),
        'panel'       => 'shadin_resume',
		'priority'    => 20,
	]
);
// Add a section "Skills Section"
new \Kirki\Section(
	'shadin_skills',
	[
		'title'       => esc_html__( 'Skills', 'shadin' ),
		'description' => esc_html__( "You can add/edit Skills from here.", 'shadin' ),
        'panel'       => 'shadin_resume',
		'priority'    => 20,
	]
);
// Add a section "Contact Section"
new \Kirki\Section(
	'shadin_contact_section',
	[
		'title'       => esc_html__( 'Contact Infos', 'shadin' ),
		'description' => esc_html__( "You can add/edit Contact infos from here.", 'shadin' ),
        'panel'       => 'shadin_contact_page',
		'priority'    => 10,
	]
);
// Add a section "Color Section"
new \Kirki\Section(
	'shadin_color_section',
	[
		'title'       => esc_html__( 'Colors', 'shadin' ),
		'description' => esc_html__( "You can edit All Colors from here.", 'shadin' ),
		'priority'    => 50,
	]
);
new \Kirki\Section(
	'shadin_others_section',
	[
		'title'       => esc_html__( 'Others', 'shadin' ),
		'priority'    => 60,
	]
);


/*-------------------
Follow below for
All Fields 
---------------------*/

// Fields Customizer
require_once get_template_directory() . '/inc/customizer/fields-customizer.php';
require_once get_template_directory() . '/inc/customizer/overwrite-style.php';


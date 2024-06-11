<?php 


// Website Title field
new \Kirki\Field\Text(
	[
		'settings' => 'your_name',
		'label'    => esc_html__( 'Your Name', 'shadin' ),
		'section'  => 'shadin_header_sidebar',
		'default'  => esc_html__( 'Imam Hossain', 'shadin' ),
        'description' => esc_html__( "This name will be SEO friendly", 'shadin' ),
		'priority' => 10,
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'your_name' => [
                'selector'      => '.header-titile h1',
                'render_callback' => function() {
                    return get_theme_mod( 'your_name' );
                },
            ],
        ],
	]
);
// Website designation or tagline
new \Kirki\Field\Text(
	[
		'settings' => 'your_designation',
		'label'    => esc_html__( 'Your Designation or Tagline', 'shadin' ),
		'section'  => 'shadin_header_sidebar',
		'default'  => esc_html__( 'Web Developer', 'shadin' ),
		'priority' => 15,
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'your_designation' => [
                'selector'      => '.header-titile h4',
                'render_callback' => function() {
                    return get_theme_mod( 'your_designation' );
                },
            ],
        ],
	]
);
// Website Logo
new \Kirki\Field\Image(
	[
        'type'        => 'image',
        'settings'    => 'website_logo_shadin',
        'label'       => esc_html__( 'Website Logo or features image', 'shadin' ),
        'description' => esc_html__( 'Upload your website logo here.', 'shadin' ),
        'section'     => 'shadin_header_sidebar',
        'default'     => '',
        'priority'    => 20,
        'choices'     => [
            'save_as' => 'url',
        ],
        'transport'   => 'refresh',
	]
);
// Header Button Text
new \Kirki\Field\Text(
	[
		'settings' => 'header_btn_text',
		'label'    => esc_html__( 'Button Text', 'shadin' ),
		'section'  => 'shadin_header_sidebar',
		'default'  => esc_html__( 'Download CV', 'shadin' ),
        'description' => esc_html__( "Change the header button text", 'shadin' ),
		'priority' => 25,
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'header_btn_text' => [
                'selector'      => '.header_btn',
                'render_callback' => function() {
                    return get_theme_mod( 'header_btn_text' );
                },
            ],
        ],
	]
);
// Header Button URL
new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'header_btn_options',
		'label'       => esc_html__( 'Header Button Link Options', 'shadin' ),
        'description' => esc_html__( "Select a options for URL type. If you want to upload a file then select 'File Upload'", 'shadin' ),
		'section'     => 'shadin_header_sidebar',
		'default'     => 'link',
		'priority'    => 30,
		'choices'     => [
			'link'   => esc_html__( 'Link', 'shadin' ),
			'upload_file' => esc_html__( 'File Upload', 'shadin' ),
		],
	]
);
// URL field
new \Kirki\Field\URL(
    [
        'settings' => 'header_btn_url',
        'label'    => esc_html__( 'Button URL', 'shadin' ),
        'input_attrs' => [
            'placeholder' => esc_html__( 'Enter the URL', 'shadin' ),
        ],
        'section'  => 'shadin_header_sidebar',
        'priority' => 31,
        'active_callback' => [
            [
                'setting'  => 'header_btn_options',
                'operator' => '==',
                'value'    => 'link',
            ],
        ],
    ]
);
// file upload field
new \Kirki\Field\Upload(
	[
		'settings'    => 'header_btn_file',
		'label'       => esc_html__( 'Upload a File', 'shadin' ),
		'section'     => 'shadin_header_sidebar',
        'priority' => 32,
        'active_callback' => [
            [
                'setting'  => 'header_btn_options',
                'operator' => '==',
                'value'    => 'upload_file',
            ],
        ],
	]
);
// Add a section "Headers Parts"
new \Kirki\Section(
	'shadin_header_top',
	[
		'title'       => esc_html__( 'Headers Top info', 'shadin' ),
		'description' => esc_html__( "You can edit header's top from there. (Text, Photo, URL and others)", 'shadin' ),
        'panel'       => 'shadin_header_parts',
		'priority'    => 20,
	]
);
// Website Title field
new \Kirki\Field\Text(
	[
		'settings' => 'header_action_btn',
		'label'    => esc_html__( 'Action Button Text', 'shadin' ),
        'default'  => esc_html__( 'Get In Touch', 'shadin' ),
        'input_attrs' => [
            'placeholder' => esc_html__( 'Enter text here...', 'shadin' ),
        ],
		'section'  => 'shadin_header_top',
		'priority' => 10,
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'header_action_btn' => [
                'selector'      => '.top-opt .to_contacts',
                'render_callback' => function() {
                    return get_theme_mod( 'header_action_btn' );
                },
            ],
        ],
	]
);
// URL field
new \Kirki\Field\URL(
    [
        'settings' => 'header_action_btn_url',
        'label'    => esc_html__( 'Action Button URL', 'shadin' ),
        'input_attrs' => [
            'placeholder' => esc_html__( 'Enter the URL', 'shadin' ),
        ],
        'section'  => 'shadin_header_top',
        'priority' => 20,
        'active_callback' => [
            [
                'setting'  => 'header_action_btn',
                'operator' => '!==',
                'value'    => '',
            ],
        ],
    ]
);



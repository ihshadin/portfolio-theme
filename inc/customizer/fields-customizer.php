<?php


include( get_template_directory() . '/inc/customizer/choices-options.php' );
$skills_list = skills_list();

/*-------------------
Follow below for
Header Parts
---------------------*/

// Website Title field
new \Kirki\Field\Text(
	[
		'settings' => 'your_name',
		'label'    => esc_html__( 'Your Name', 'shadin' ),
		'section'  => 'shadin_header_sidebar',
		'default'  => esc_html__( 'Imam Hossain', 'shadin' ),
        'description' => esc_html__( 'This name will be SEO friendly', 'shadin' ),
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

/*-------------------
Follow below for
Banner Section
---------------------*/

new \Kirki\Field\Text(
	[
		'settings' => 'homepage_title',
		'label'    => esc_html__( 'Page Title', 'shadin' ),
		'default'  => esc_html__( 'Imam Hossain', 'shadin' ),
        'input_attrs' => [
            'placeholder' => esc_html__( 'Enter text here...', 'shadin' ),
            ],
        'section'  => 'shadin_banner_section',
		'priority' => 10,
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'homepage_title' => [
                'selector'      => '.top-opt .page-subtitle span',
                'render_callback' => function() {
                    return get_theme_mod( 'homepage_title' );
                },
            ],
        ],
	]
);
new \Kirki\Field\Background(
	[
		'settings'    => 'shadin_banner_bg',
		'label'       => esc_html__( 'Banner background image', 'shadin' ),
		'section'     => 'shadin_banner_section',
		'default'     => [
			'background-color'      => 'rgba(20,20,20,.8)',
			'background-image'      => '',
			'background-repeat'     => 'repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'fixed',
		],
		'priority' => 15,
		'transport'   => 'refresh',
        // 'partial_refresh' => [
        //     'shadin_banner_bg' => [
        //         'selector'        => '.hero-section .hero-section_bg .bg',
        //         'render_callback' => function() {
        //             $background_image = get_theme_mod( 'shadin_banner_bg' );
        //             return '<div class="bg" data-bg="' . esc_url($background_image['background-image'] ) . '"></div>';
        //         },
        //     ],
        // ],
		'output'      => [
			[
				'element' => '.hero-section .hero-section_bg .bg',
			],
		],
	]
);
new \Kirki\Field\Select(
	[
		'settings'      => 'skills_list',
		'label'         => esc_html__( 'Skills', 'shadin' ),
		'description'   => esc_html__( 'Add skills that you are an expert in', 'shadin' ),
		'section'       => 'shadin_banner_section',
		'priority'      => 20,
		'multiple'      => 20,
		'choices'       => $skills_list,
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'skills_list' => [
                'selector'      => '.hero-section-title .hero-decor-let div',
                'render_callback' => function() {
                    return get_theme_mod( 'skills_list' );
                },
            ],
        ],
	]
);
// Website designation or tagline
new \Kirki\Field\Text(
	[
		'settings' => 'banner_title',
		'label'    => esc_html__( "Banner Title", 'shadin' ),
		'default'  => esc_html__( "WELCOME TO SHADIN'S PROJECT WEBSITE", 'shadin' ),
        'input_attrs' => [
            'placeholder' => esc_html__( 'Enter text here...', 'shadin' ),
            ],
        'section'  => 'shadin_banner_section',
		'priority' => 25,
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'banner_title' => [
                'selector'      => '.hero-section-title h2',
                'render_callback' => function() {
                    return get_theme_mod( 'banner_title' );
                },
            ],
        ],
	]
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'is_presentation_display',
		'label'       => esc_html__( 'Presentation Display', 'shadin' ),
		'description' => esc_html__( 'Do you want to display presentation. If you want hide it then you can disable it', 'shadin' ),
		'section'     => 'shadin_banner_section',
		'default'     => 'on',
		'priority'    => 30,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'shadin' ),
			'off' => esc_html__( 'Disable', 'shadin' ),
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'presentation_title',
		'label'    => esc_html__( "Presentation Title", 'shadin' ),
		'default'  => esc_html__( "Play Video Presentation", 'shadin' ),
        'input_attrs' => [
            'placeholder' => esc_html__( 'Enter text here...', 'shadin' ),
            ],
        'section'  => 'shadin_banner_section',
		'priority' => 31,
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'presentation_title' => [
                'selector'      => '.video_btn-wrap span',
                'render_callback' => function() {
                    return get_theme_mod( 'presentation_title' );
                },
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'is_presentation_display',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	]
);
new \Kirki\Field\URL(
    [
        'settings' => 'presentation_url',
        'label'    => esc_html__( 'Presentation URL', 'shadin' ),
        'input_attrs' => [
            'placeholder' => esc_html__( 'Enter the URL', 'shadin' ),
        ],
        'section'  => 'shadin_banner_section',
        'priority' => 32,
        'active_callback' => [
            [
                'setting'  => 'is_presentation_display',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ]
);

/*-------------------
Follow below for
About Section
---------------------*/

new \Kirki\Field\Textarea(
	[
		'settings'          => 'short_bio',
		'label'             => esc_html__( 'Your Short Description', 'shadin' ),
		'default'           => esc_html__( "I’m Imam Hossain Shadin. I’m a Web developer who is passionate about making error-free websites with 100% client satisfaction. Let’s collaborate to build a strong online presence you’re excited to share with the world.", 'shadin' ),
		'section'           => 'shadin_about_section',
		'priority'          => 40,
        'transport'         => 'postMessage',
        'partial_refresh'   => [
            'short_bio' => [
                'selector'      => '.short-bio',
                'render_callback' => function() {
                    return get_theme_mod( 'short_bio' );
                },
            ],
        ],
	]
);
new \Kirki\Field\Repeater(
	[
		'settings'      => 'achievements_fields',
		'label'         => esc_html__( 'Add Your Achievements', 'shadin' ),
        'button_label'  => esc_html__( 'Add New Achievement', 'shadin' ),
		'section'       => 'shadin_about_section',
		'priority'      => 45,
        'transport'     => 'postMessage',
        // 'choices'       => [
        //     'limit'         => 3
        // ],
        'row_label'     => [
            'type'          => 'field',
            'value'         => esc_html__('Achievement', 'shadin' ),
            'field'         => 'achievement_name',
        ],
		'default'       => [
			[
				'achievement_num'       => esc_html__( '4', 'shadin' ),
				'achievement_name'      => esc_html__( 'Years Experience', 'shadin' ),
			],
            [
				'achievement_num'       => esc_html__( '50', 'shadin' ),
				'achievement_name'      => esc_html__( 'Happy Clients', 'shadin' ),
			],
            [
				'achievement_num'       => esc_html__( '186', 'shadin' ),
				'achievement_name'      => esc_html__( 'Projects Completed', 'shadin' ),
			],
		],
		'fields'        => [
			'achievement_num'   => [
				'type'          => 'number',
				'label'         => esc_html__( 'Achievement Number', 'shadin' ),
				'default'       => '4',
			],
			'achievement_name'    => [
				'type'          => 'text',
				'label'         => esc_html__( 'Achievement Name', 'shadin' ),
				'default'       => '',
			],
		],
	]
);
new \Kirki\Field\Repeater (
    [
		'settings'      => 'contact_info_box',
		'label'         => esc_html__( 'Contact Info Box', 'shadin' ),
        'button_label'  => esc_html__( 'Add New Contact Info', 'shadin' ),
		'section'       => 'shadin_about_section',
		'priority'      => 50,
        'transport'     => 'postMessage',
        'choices'       => [
            'limit'         => 8
        ],
        'row_label'     => [
            'type'          => 'field',
            'value'         => esc_html__('Contact Info', 'shadin' ),
            'field'         => 'contact_label',
        ],
		'default'       => [
			[
				'contact_label'     => esc_html__( 'Available For Work', 'shadin' ),
				'contact_value'     => esc_html__( 'Yes', 'shadin' ),
				'is_have_link'      => false,
			],
            [
				'contact_label'     => esc_html__( 'Email', 'shadin' ),
				'contact_value'     => esc_html__( 'example@gmail.com', 'shadin' ),
				'is_have_link'      => true,
                'contact_link'      => "mailto:example@gmail.com",
			],
            [
				'contact_label'     => esc_html__( 'WhatsApp', 'shadin' ),
				'contact_value'     => esc_html__( '+880 1858-733453', 'shadin' ),
				'is_have_link'      => true,
                'contact_link'      => "tel:01858733453",
			],
		],
		'fields'        => [
			'contact_label' => [
				'type'          => 'text',
				'label'         => esc_html__( 'Contact Label', 'shadin' ),
				'default'       => 'Email',
			],
			'contact_value' => [
				'type'          => 'text',
				'label'         => esc_html__( 'Contact Value', 'shadin' ),
				'default'       => 'example@gmail.com',
			],
            'is_have_link'  => [
                'type'          => 'checkbox',
                'label'         => esc_html__( 'Add URL for this information', 'shadin' ),
                'default'       => false,
            ],
            'contact_link'  => [
                'type'          => 'url',
                'label'         => esc_html__( 'Input URL', 'shadin' ),
                'description'   => esc_html__( "If mobile number then add (tel:) before mobile number. For example - tel:mobile-number. And if email then add (mailto:) before email. For example - mailto:example@gmail.com", 'shadin' ),
                'active_callback' => [
                    [
                        'setting'  => 'is_have_link',
                        'operator' => '==',
                        'value'    => true,
                    ],
                ],
            ],
		],
	],
);
new \Kirki\Field\Checkbox(
	[
		'settings'    => 'is_contact_btn_show',
		'label'       => esc_html__( 'Do you want to show a Button', 'shadin' ),
		'section'     => 'shadin_about_section',
		'default'     => '1',
		'priority'    => 55,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'contact_btn_text',
		'label'    => esc_html__( "Button Text", 'shadin' ),
		'default'  => esc_html__( "My Projects", 'shadin' ),
        'input_attrs' => [
            'placeholder' => esc_html__( 'Enter text here...', 'shadin' ),
        ],
        'section'  => 'shadin_about_section',
		'priority' => 56,
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'contact_btn_text' => [
                'selector'      => '.about-section .hero-info-list .fl-btn',
                'render_callback' => function() {
                    return get_theme_mod( 'contact_btn_text' );
                },
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'is_contact_btn_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	]
);
new \Kirki\Field\URL(
    [
        'settings' => 'contact_btn_url',
        'label'    => esc_html__( 'Button URL', 'shadin' ),
		'default'  => esc_html__( "/projects", 'shadin' ),
        'input_attrs' => [
            'placeholder' => esc_html__( 'Enter the URL...', 'shadin' ),
        ],
        'section'  => 'shadin_about_section',
        'priority' => 57,
        'active_callback' => [
            [
                'setting'  => 'is_contact_btn_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ]
);

/*-------------------
Follow below for
Services Section
---------------------*/

new \Kirki\Field\Checkbox(
	[
		'settings'    => 'is_service_section_show',
		'label'       => esc_html__( 'Do you want to show Services Section', 'shadin' ),
		'section'     => 'shadin_services_section',
		'default'     => true,
		'priority'    => 10,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'service_section_title',
		'label'    => esc_html__( "Section Title", 'shadin' ),
		'default'  => esc_html__( "SERVICES THAT I PROVIDE", 'shadin' ),
        'input_attrs' => [
            'placeholder' => esc_html__( 'Enter text here...', 'shadin' ),
        ],
        'section'  => 'shadin_services_section',
		'priority' => 10,
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'service_section_title' => [
                'selector'      => '.serv-sec .section-title h3',
                'render_callback' => function() {
                    return get_theme_mod( 'service_section_title' );
                },
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'is_service_section_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	]
);
new \Kirki\Field\Repeater (
    [
		'settings'      => 'service_items',
		'label'         => esc_html__( 'Services', 'shadin' ),
        'button_label'  => esc_html__( 'Add New Service', 'shadin' ),
		'section'       => 'shadin_services_section',
		'priority'      => 20,
        'transport'     => 'postMessage',
        'choices'       => [
            'limit'         => 8
        ],
        'row_label'     => [
            'type'          => 'field',
            'value'         => esc_html__('Service', 'shadin' ),
            'field'         => 'service_name',
        ],
		'default'       => [
            'service_name'     => esc_html__( 'WordPress Developer', 'shadin' ),
            'service_desc'     => esc_html__( 'Praesent nec leo venenatis elit semper aliquet id ac enim. Maecenas nec mi leo.', 'shadin' ),
            'service_skills'     => esc_html__( 'WordPress, Elementor, Yoast SEO', 'shadin' ),
		],
		'fields'        => [
			'service_image' 	=> [
				'type'          => 'image',
				'label'         => esc_html__( 'Service Image', 'shadin' ),
				'default'       => '',
			],
			'service_name' 		=> [
				'type'          => 'text',
				'label'         => esc_html__( 'Service Name', 'shadin' ),
				'default'       => 'WordPress',
                'transport'   => 'postMessage',
                'partial_refresh' => [
                    'service_name' => [
                        'selector'      => '.services-item h4',
                        'render_callback' => function() {
                            return get_theme_mod( 'service_name' );
                        },
                    ],
                ],
			],
			'service_desc' 		=> [
				'type'          => 'textarea',
				'label'         => esc_html__( 'Service Description', 'shadin' ),
				'default'       => 'Praesent nec leo venenatis elit semper aliquet id ac enim. Maecenas nec mi leo. Etiam venenatis ut dui non hendrerit. Integer dictum, diam vitae blandit accumsan, dolor odio tempus arcu .',
				'rows'			=> 8,
			],
			'service_skills' 		=> [
				'type'          => 'textarea',
				'label'         => esc_html__( 'Service Skills', 'shadin' ),
				'description'         => esc_html__( 'Add comma ( , ) for separate skills', 'shadin' ),
				'input_attrs' => [
					'placeholder' => esc_html__( 'Enter text here...', 'shadin' ),
				],
				'default'       => '',
			],
		],
        'active_callback' => [
            [
                'setting'  => 'is_service_section_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	],
);

/*-------------------
Follow below for
Testimonials Section
---------------------*/

new \Kirki\Field\Checkbox(
	[
		'settings'    => 'is_testimonials_section_show',
		'label'       => esc_html__( 'Do you want to show Testimonials Section', 'shadin' ),
		'section'     => 'shadin_testimonials_section',
		'default'     => true,
		'priority'    => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'testimonials_section_title',
		'label'    => esc_html__( "Section Title", 'shadin' ),
		'default'  => esc_html__( "Clients and Testimonials", 'shadin' ),
        'input_attrs' => [
            'placeholder' => esc_html__( 'Enter text here...', 'shadin' ),
        ],
        'section'  => 'shadin_testimonials_section',
		'priority' => 10,
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'testimonials_section_title' => [
                'selector'      => '.testimonial-section .section-title h3',
                'render_callback' => function() {
                    return get_theme_mod( 'testimonials_section_title' );
                },
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'is_testimonials_section_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	]
);
new \Kirki\Field\Repeater (
    [
		'settings'      => 'testimonials_items',
		'label'         => esc_html__( 'Testimonials', 'shadin' ),
        'button_label'  => esc_html__( 'Add New Testimonial', 'shadin' ),
		'section'       => 'shadin_testimonials_section',
		'priority'      => 20,
        'transport'     => 'postMessage',
        'row_label'     => [
            'type'          => 'field',
            'value'         => esc_html__('Testimonial', 'shadin' ),
            'field'         => 'testi_client_name',
        ],
		'default'       => [
            'testi_client_name'         => esc_html__( 'Andy Smith', 'shadin' ),
            'testimonial_text'         => esc_html__( 'Great Job Very fast and responsive work and many more projects are on the way get ready.', 'shadin' ),
            'testimonial_by'         => esc_html__( 'Twitter', 'shadin' ),
		],
		'fields'        => [
			'testi_client_image' 	=> [
				'type'          => 'image',
				'label'         => esc_html__( 'Client Image', 'shadin' ),
				'default'       => '',
			],
			'testi_client_name' 	=> [
				'type'          => 'text',
				'label'         => esc_html__( 'Client Name', 'shadin' ),
				'default'       => 'Andy Smith',
			],
			'testimonial_text' 	=> [
				'type'          => 'textarea',
				'label'         => esc_html__( 'Testimonial Text', 'shadin' ),
				'default'       => 'Great Job Very fast and responsive work and many more projects are on the way get ready.',
			],
			'testimonial_by' 		=> [
				'type'          => 'text',
				'label'         => esc_html__( 'Review By', 'shadin' ),
				'description'         => esc_html__( 'Write the name of the platform through which the review you got', 'shadin' ),
				'default'       => 'Fiverr',
			],
		],
        'active_callback' => [
            [
                'setting'  => 'is_testimonials_section_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	],
);

/*-------------------
Follow below for
Resume Summary
---------------------*/

new \Kirki\Field\Checkbox(
	[
		'settings'    => 'is_resume_summary_show',
		'label'       => esc_html__( 'Do you want to show Resume Summary', 'shadin' ),
		'section'     => 'shadin_resume_section',
		'default'     => true,
		'priority'    => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'resume_summary_title',
		'label'    => esc_html__( "Summary Section Tittle", 'shadin' ),
		'default'  => esc_html__( "Professional Summary", 'shadin' ),
        'input_attrs' => [
            'placeholder' => esc_html__( 'Enter text here...', 'shadin' ),
        ],
        'section'  => 'shadin_resume_section',
		'priority' => 10,
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'resume_summary_title' => [
                'selector'      => '.resume-summary-section .section-title h3',
                'render_callback' => function() {
                    return get_theme_mod( 'resume_summary_title' );
                },
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'is_resume_summary_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	]
);
new \Kirki\Field\Textarea(
	[
		'settings'          => 'resume_summary_text',
		'label'             => esc_html__( 'Professional Summary', 'shadin' ),
		'default'           => esc_html__( "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Dolore magna aliqua.", 'shadin' ),
		'section'           => 'shadin_resume_section',
		'priority'          => 40,
        'transport'         => 'postMessage',
        'partial_refresh'   => [
            'resume_summary_text' => [
                'selector'      => '.resume-summary-section .content-box p',
                'render_callback' => function() {
                    return get_theme_mod( 'resume_summary_text' );
                },
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'is_resume_summary_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'resume_language_title',
		'label'    => esc_html__( "Language box title", 'shadin' ),
		'default'  => esc_html__( "Language Knowledge", 'shadin' ),
        'input_attrs' => [
            'placeholder' => esc_html__( 'Enter text here...', 'shadin' ),
        ],
        'section'  => 'shadin_resume_section',
		'priority' => 10,
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'resume_language_title' => [
                'selector'      => '.resume-summary-section h5',
                'render_callback' => function() {
                    return get_theme_mod( 'resume_language_title' );
                },
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'is_resume_summary_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	]
);
new \Kirki\Field\Textarea(
	[
		'settings'          => 'resume_language_list',
		'label'             => esc_html__( 'Language', 'shadin' ),
        'description'         => esc_html__( 'Add comma ( , ) for separate language', 'shadin' ),
		'default'           => esc_html__( "English, Dutch", 'shadin' ),
		'section'           => 'shadin_resume_section',
		'priority'          => 40,
        'transport'         => 'postMessage',
        'partial_refresh'   => [
            'resume_language_list' => [
                'selector'      => '.resume-summary-section .box-text-wrap_item.content-box ul',
                'render_callback' => function() {
                    $languages = explode(',', get_theme_mod("resume_language_list", 'English, Dutch'));
                    $output = '<ul>';
                    foreach($languages as $language){
                        $output .= '<li><span>' . esc_html(trim($language)) . '</span></li>';
                    }
                    $output .= '</ul>';
                    return $output;
                },
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'is_resume_summary_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	]
);

/*-------------------
Follow below for
Work History
---------------------*/

new \Kirki\Field\Checkbox(
	[
		'settings'    => 'is_work_history_show',
		'label'       => esc_html__( 'Do you want to show Work History', 'shadin' ),
		'section'     => 'shadin_work_history',
		'default'     => true,
		'priority'    => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'work_section_title',
		'label'    => esc_html__( "Section Tittle", 'shadin' ),
		'default'  => esc_html__( "Work History", 'shadin' ),
        'input_attrs' => [
            'placeholder' => esc_html__( 'Enter text here...', 'shadin' ),
        ],
        'section'  => 'shadin_work_history',
		'priority' => 10,
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'work_section_title' => [
                'selector'      => '.work-history .section-title h3',
                'render_callback' => function() {
                    return get_theme_mod( 'work_section_title' );
                },
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'is_work_history_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	]
);
new \Kirki\Field\Repeater (
    [
		'settings'      => 'works_history_items',
		'label'         => esc_html__( 'Works History', 'shadin' ),
        'button_label'  => esc_html__( 'Add New Work History', 'shadin' ),
		'section'       => 'shadin_work_history',
		'priority'      => 20,
        'transport'     => 'postMessage',
        'row_label'     => [
            'type'          => 'field',
            'value'         => esc_html__('Work History', 'shadin' ),
            'field'         => 'company_name',
        ],
		'default'       => [
            'company_name'         => esc_html__( 'Web Syner', 'shadin' ),
            'designation_title'         => esc_html__( 'WordPress Developer', 'shadin' ),
            'duration'         => esc_html__( '2019 - Present', 'shadin' ),
            'description'         => esc_html__( 'Dolore magna aliqua. Consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde.', 'shadin' ),
		],
		'fields'        => [
			'company_name' 	=> [
				'type'          => 'text',
				'label'         => esc_html__( 'Company Name', 'shadin' ),
				'default'       => 'Web Syner',
			],
			'designation_title' 	=> [
				'type'          => 'text',
				'label'         => esc_html__( 'Designation Title', 'shadin' ),
				'default'       => 'WordPress Developer',
			],
			'duration' 		=> [
				'type'          => 'text',
				'label'         => esc_html__( 'Working time frame (from - to)', 'shadin' ),
                'default'       => '2014 - Present',
			],
			'description' 	=> [
				'type'          => 'textarea',
				'label'         => esc_html__( 'Description', 'shadin' ),
				'default'       => 'Dolore magna aliqua. Consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde.',
			],
		],
        'active_callback' => [
            [
                'setting'  => 'is_work_history_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	],
);

/*-------------------
Follow below for
Education Qualification
---------------------*/

new \Kirki\Field\Checkbox(
	[
		'settings'    => 'is_edu_qua_show',
		'label'       => esc_html__( 'Do you want to show Education Qualification', 'shadin' ),
		'section'     => 'shadin_edu_qua',
		'default'     => true,
		'priority'    => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'education_section_title',
		'label'    => esc_html__( "Section Tittle", 'shadin' ),
		'default'  => esc_html__( "Education Qualification", 'shadin' ),
        'input_attrs' => [
            'placeholder' => esc_html__( 'Enter text here...', 'shadin' ),
        ],
        'section'  => 'shadin_edu_qua',
		'priority' => 10,
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'education_section_title' => [
                'selector'      => '.edu-qua .section-title h3',
                'render_callback' => function() {
                    return get_theme_mod( 'education_section_title' );
                },
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'is_edu_qua_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	]
);
new \Kirki\Field\Repeater (
    [
		'settings'      => 'edu_qualifications',
		'label'         => esc_html__( 'Education Qualifications', 'shadin' ),
        'button_label'  => esc_html__( 'Add New Degree', 'shadin' ),
		'section'       => 'shadin_edu_qua',
		'priority'      => 20,
        'transport'     => 'postMessage',
        'row_label'     => [
            'type'          => 'field',
            'value'         => esc_html__('Degree', 'shadin' ),
            'field'         => 'degree_name',
        ],
		'default'       => [
            'degree_name'         => esc_html__( 'Bachelor of Computer science', 'shadin' ),
            'institute_name'         => esc_html__( 'University of Washington', 'shadin' ),
            'duration'         => esc_html__( '2014 - 2018', 'shadin' ),
            'description'         => esc_html__( 'Dolore magna aliqua. Consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde.', 'shadin' ),
		],
		'fields'        => [
			'degree_name' 	=> [
				'type'          => 'text',
				'label'         => esc_html__( 'Degree Name', 'shadin' ),
				'default'       => 'Bachelor of Computer science',
			],
			'institute_name' 	=> [
				'type'          => 'text',
				'label'         => esc_html__( 'Institute Name', 'shadin' ),
				'default'       => 'University of Washington',
			],
			'duration' 		=> [
				'type'          => 'text',
				'label'         => esc_html__( 'Education Duration', 'shadin' ),
                'default'       => '2014 - 2018',
			],
			'description' 	=> [
				'type'          => 'textarea',
				'label'         => esc_html__( 'Description', 'shadin' ),
				'default'       => 'Dolore magna aliqua. Consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde.',
			],
		],
        'active_callback' => [
            [
                'setting'  => 'is_edu_qua_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	],
);

/*-------------------
Follow below for
Skills
---------------------*/

new \Kirki\Field\Checkbox(
	[
		'settings'    => 'is_skills_show',
		'label'       => esc_html__( 'Do you want to show Skills', 'shadin' ),
		'section'     => 'shadin_skills',
		'default'     => true,
		'priority'    => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'skills_section_title',
		'label'    => esc_html__( "Section Tittle", 'shadin' ),
		'default'  => esc_html__( "My Skills", 'shadin' ),
        'input_attrs' => [
            'placeholder' => esc_html__( 'Enter text here...', 'shadin' ),
        ],
        'section'  => 'shadin_skills',
		'priority' => 20,
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'skills_section_title' => [
                'selector'      => '.skills-section .section-title h3',
                'render_callback' => function() {
                    return get_theme_mod( 'skills_section_title' );
                },
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'is_skills_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	]
);
new \Kirki\Field\Select(
	[
		'settings'      => 'skills_sec_layout',
		'label'         => esc_html__( 'Skills Layout', 'shadin' ),
		// 'description'   => esc_html__( 'Add skills that you are an expert in', 'shadin' ),
        'default'       => 'layout-1',
		'section'       => 'shadin_skills',
		'priority'      => 30,
		'choices'       => [
            'layout-1' => esc_html__("Layout One", 'shadin'),
            'layout-2' => esc_html__("Layout Two", 'shadin')
        ],
        'active_callback' => [
            [
                'setting'  => 'is_skills_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	]
);
new \Kirki\Field\Repeater (
    [
		'settings'      => 'professional_skills',
		'label'         => esc_html__( 'Skills', 'shadin' ),
        'button_label'  => esc_html__( 'Add New Skill', 'shadin' ),
		'section'       => 'shadin_skills',
		'priority'      => 40,
        'transport'     => 'postMessage',
        'row_label'     => [
            'type'          => 'field',
            'value'         => esc_html__('Skill', 'shadin' ),
            'field'         => 'skill_name',
        ],
		'default'       => [
            [
                'skill_name'         => esc_html__( 'WordPress', 'shadin' ),
                'skill_value'         => esc_html__( 90, 'shadin' ),
            ],
            [
                'skill_name'         => esc_html__( 'Elementor', 'shadin' ),
                'skill_value'         => esc_html__( 95, 'shadin' ),
            ],
            [
                'skill_name'         => esc_html__( 'Divi', 'shadin' ),
                'skill_value'         => esc_html__( 80, 'shadin' ),
            ]
		],
		'fields'        => [
			'skill_name' 	=> [
				'type'          => 'text',
				'label'         => esc_html__( 'Skill Name', 'shadin' ),
				'default'       => 'WordPress',
			],
			'skill_value' 	=> [
				'type'          => 'number',
				'label'         => esc_html__( 'Skill Value', 'shadin' ),
				'default'       => 90,
			],
		],
        'active_callback' => [
            [
                'setting'  => 'is_skills_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	],
);
new \Kirki\Field\Checkbox(
	[
		'settings'    => 'is_featured_skills_show',
		'label'       => esc_html__( 'Do you want to show "Featured Skills"', 'shadin' ),
		'section'     => 'shadin_skills',
		'default'     => true,
		'priority'    => 50,
        'active_callback' => [
            [
                'setting'  => 'is_skills_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'featured_skills_section_title',
		'label'    => esc_html__( "Section Tittle", 'shadin' ),
		'default'  => esc_html__( "Featured Skills", 'shadin' ),
        'input_attrs' => [
            'placeholder' => esc_html__( 'Enter text here...', 'shadin' ),
        ],
        'section'  => 'shadin_skills',
		'priority' => 60,
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'featured_skills_section_title' => [
                'selector'      => '.skills-section .featured-skill-title h3',
                'render_callback' => function() {
                    return get_theme_mod( 'featured_skills_section_title' );
                },
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'is_skills_show',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'is_featured_skills_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	]
);
new \Kirki\Field\Repeater (
    [
		'settings'      => 'featured_skills',
		'label'         => esc_html__( 'Featured Skills', 'shadin' ),
        'button_label'  => esc_html__( 'Add New Skill', 'shadin' ),
		'section'       => 'shadin_skills',
		'priority'      => 70,
        'transport'     => 'postMessage',
        'choices' => [
            'limit' => 4
        ],
        'row_label'     => [
            'type'          => 'field',
            'value'         => esc_html__('Skill', 'shadin' ),
            'field'         => 'skill_name',
        ],
		'default'       => [
            [
                'skill_name'         => esc_html__( 'WordPress', 'shadin' ),
                'skill_value'         => esc_html__( 90, 'shadin' ),
            ],
            [
                'skill_name'         => esc_html__( 'Elementor', 'shadin' ),
                'skill_value'         => esc_html__( 95, 'shadin' ),
            ],
            [
                'skill_name'         => esc_html__( 'Divi', 'shadin' ),
                'skill_value'         => esc_html__( 80, 'shadin' ),
            ]
		],
		'fields'        => [
			'skill_name' 	=> [
				'type'          => 'text',
				'label'         => esc_html__( 'Skill Name', 'shadin' ),
				'default'       => 'WordPress',
			],
			'skill_value' 	=> [
				'type'          => 'number',
				'label'         => esc_html__( 'Skill Value', 'shadin' ),
				'default'       => 90,
			],
		],
        'active_callback' => [
            [
                'setting'  => 'is_skills_show',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'is_featured_skills_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	],
);

/*-------------------
Follow below for
Contact Section
---------------------*/

new \Kirki\Field\Checkbox(
	[
		'settings'    => 'is_contact_info_show',
		'label'       => esc_html__( 'Do you want to show Contact Infos Section', 'shadin' ),
		'section'     => 'shadin_contact_section',
		'default'     => true,
		'priority'    => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'contact_info_section_title',
		'label'    => esc_html__( "Section Tittle", 'shadin' ),
		'default'  => esc_html__( "Contact Information", 'shadin' ),
        'input_attrs' => [
            'placeholder' => esc_html__( 'Enter text here...', 'shadin' ),
        ],
        'section'  => 'shadin_contact_section',
		'priority' => 20,
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'contact_info_section_title' => [
                'selector'      => '.contact-infos .section-title h3',
                'render_callback' => function() {
                    return get_theme_mod( 'contact_info_section_title' );
                },
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'is_contact_info_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	]
);
new \Kirki\Field\Checkbox(
	[
		'settings'    => 'is_email_info_show',
		'label'       => esc_html__( 'Do you want to show Email info Box', 'shadin' ),
		'section'     => 'shadin_contact_section',
		'default'     => true,
		'priority'    => 30,
        'active_callback' => [
            [
                'setting'  => 'is_contact_info_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'contact_info_email_title',
		'label'    => esc_html__( "Email Tittle", 'shadin' ),
		'default'  => esc_html__( "My Emails", 'shadin' ),
        'input_attrs' => [
            'placeholder' => esc_html__( 'Enter text here...', 'shadin' ),
        ],
        'section'  => 'shadin_contact_section',
		'priority' => 40,
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'contact_info_email_title' => [
                'selector'      => '.contact-infos .email-box h4',
                'render_callback' => function() {
                    return get_theme_mod( 'contact_info_email_title' );
                },
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'is_contact_info_show',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'is_email_info_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	]
);
new \Kirki\Field\Textarea(
	[
		'settings'          => 'contact_info_email_description',
		'label'             => esc_html__( 'Email Box description', 'shadin' ),
		'default'           => esc_html__( "Feel Free to send email to me. I am always open to discuss about new projects", 'shadin' ),
		'section'           => 'shadin_contact_section',
		'priority'          => 50,
        'transport'         => 'postMessage',
        'partial_refresh'   => [
            'contact_info_email_description' => [
                'selector'      => '.contact-infos .email-box p',
                'render_callback' => function() {
                    return get_theme_mod( 'contact_info_email_description' );
                },
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'is_contact_info_show',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'is_email_info_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'contact_info_email',
		'label'    => esc_html__( "Email address", 'shadin' ),
		'default'  => esc_html__( "example@gmail.com", 'shadin' ),
        'input_attrs' => [
            'placeholder' => esc_html__( 'Enter text here...', 'shadin' ),
        ],
        'section'  => 'shadin_contact_section',
		'priority' => 60,
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'contact_info_email' => [
                'selector'      => '.contact-infos .email-box a',
                'render_callback' => function() {
                    return get_theme_mod( 'contact_info_email' );
                },
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'is_contact_info_show',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'is_email_info_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	]
);

new \Kirki\Field\Checkbox(
	[
		'settings'    => 'is_phone_info_show',
		'label'       => esc_html__( 'Do you want to show Phone Infos Box', 'shadin' ),
		'section'     => 'shadin_contact_section',
		'default'     => true,
		'priority'    => 70,
        'active_callback' => [
            [
                'setting'  => 'is_contact_info_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'contact_info_phone_title',
		'label'    => esc_html__( "Phone Title", 'shadin' ),
		'default'  => esc_html__( "My Phones", 'shadin' ),
        'input_attrs' => [
            'placeholder' => esc_html__( 'Enter text here...', 'shadin' ),
        ],
        'section'  => 'shadin_contact_section',
		'priority' => 80,
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'contact_info_phone_title' => [
                'selector'      => '.contact-infos .phone-box h4',
                'render_callback' => function() {
                    return get_theme_mod( 'contact_info_phone_title' );
                },
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'is_contact_info_show',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'is_phone_info_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	]
);
new \Kirki\Field\Textarea(
	[
		'settings'          => 'contact_info_phone_description',
		'label'             => esc_html__( 'Phone Box description', 'shadin' ),
		'default'           => esc_html__( "Feel Free to call to me. I am always open to discuss about new projects", 'shadin' ),
		'section'           => 'shadin_contact_section',
		'priority'          => 90,
        'transport'         => 'postMessage',
        'partial_refresh'   => [
            'contact_info_phone_description' => [
                'selector'      => '.contact-infos .phone-box p',
                'render_callback' => function() {
                    return get_theme_mod( 'contact_info_phone_description' );
                },
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'is_contact_info_show',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'is_phone_info_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'contact_info_phone',
		'label'    => esc_html__( "Phone Number", 'shadin' ),
		'default'  => esc_html__( "+14844578289", 'shadin' ),
        'input_attrs' => [
            'placeholder' => esc_html__( 'Enter text here...', 'shadin' ),
        ],
        'section'  => 'shadin_contact_section',
		'priority' => 100,
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'contact_info_phone' => [
                'selector'      => '.contact-infos .phone-box a',
                'render_callback' => function() {
                    return get_theme_mod( 'contact_info_phone' );
                },
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'is_contact_info_show',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'is_phone_info_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	]
);

new \Kirki\Field\Checkbox(
	[
		'settings'    => 'is_location_info_show',
		'label'       => esc_html__( 'Do you want to show Location Infos Box', 'shadin' ),
		'section'     => 'shadin_contact_section',
		'default'     => true,
		'priority'    => 110,
        'active_callback' => [
            [
                'setting'  => 'is_contact_info_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'contact_info_location_title',
		'label'    => esc_html__( "Location Tittle", 'shadin' ),
		'default'  => esc_html__( "My Location", 'shadin' ),
        'input_attrs' => [
            'placeholder' => esc_html__( 'Enter text here...', 'shadin' ),
        ],
        'section'  => 'shadin_contact_section',
		'priority' => 120,
        'transport'   => 'postMessage',
        'partial_refresh' => [
            'contact_info_location_title' => [
                'selector'      => '.contact-infos .location-box h4',
                'render_callback' => function() {
                    return get_theme_mod( 'contact_info_location_title' );
                },
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'is_contact_info_show',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'is_location_info_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	]
);
new \Kirki\Field\Textarea(
	[
		'settings'          => 'contact_info_location_description',
		'label'             => esc_html__( 'Your Address', 'shadin' ),
		'default'           => esc_html__( "1600 Broadway, New York, USA", 'shadin' ),
		'section'           => 'shadin_contact_section',
		'priority'          => 130,
        'transport'         => 'postMessage',
        'partial_refresh'   => [
            'contact_info_location_description' => [
                'selector'      => '.contact-infos .location-box p',
                'render_callback' => function() {
                    return get_theme_mod( 'contact_info_location_description' );
                },
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'is_contact_info_show',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'is_location_info_show',
                'operator' => '==',
                'value'    => true,
            ],
        ],
	]
);
new \Kirki\Field\Color(
    [
        'settings'    => 'theme_primary_color',
        'label'       => esc_html__('Primary Color', 'shadin'),
        'section'     => 'shadin_color_section',
        'default'     => '#f89020',
        'transport'   => 'postMessage',
    ]
);

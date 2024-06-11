<?php


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
include( get_template_directory() . '/inc/shadin-customizer/choices-options.php' );
$skills_list = skills_list();
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

new \Kirki\Field\Repeater (
    [
		'settings'      => 'service_items',
		'label'         => esc_html__( 'Services', 'shadin' ),
        'button_label'  => esc_html__( 'Add New Service', 'shadin' ),
		'section'       => 'shadin_services_section',
		'priority'      => 50,
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
			],
		],
	],
);
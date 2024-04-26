<?php
/*
* Redux framework code files
*/
if ( ! class_exists( 'Redux' ) ) {
	return;
}

$opt_name = 'redux_shadin_opt';

// disable demo mode.
Redux::disable_demo();

$theme = wp_get_theme(); 

$args = array(
	'display_name'         => $theme->get( 'Name' ),
	'display_version'      => $theme->get( 'Version' ),
	'description'     	   => 'Your theme description',
	'menu_title'           => esc_html__( 'Shadin Options', 'shadin' ),
	'page_priority'        => 90,
	'customizer'           => true,
);

Redux::set_args( $opt_name, $args );

Redux::set_section( 
	$opt_name, 
	array(
		'title'  => esc_html__( 'Header Parts', 'shadin' ),
		'id'     => 'header_parts',
		'desc'   => esc_html__( 'Edit Header All Parts Step by Step', 'shadin' ),
		'icon'   => 'el el-th-list',
		'fields' => array(
			array(
				'id'       => 'opt-text',
				'type'     => 'text',
				'title'    => esc_html__( 'Example Text', 'shadin' ),
				'desc'     => esc_html__( 'Example description.', 'shadin' ),
				'subtitle' => esc_html__( 'Example subtitle.', 'shadin' ),
				'hint'     => array(
					'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
				)
			)
		)
	) 
);

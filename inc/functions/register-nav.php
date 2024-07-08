<?php 

function theme_setup_register_nav() {

	register_nav_menus(
		array(
			'pirmary-menu' => esc_html__( 'Primary Menu', 'aesthetica' ),
		)
	);
}
add_action( 'after_setup_theme', 'theme_setup_register_nav' );
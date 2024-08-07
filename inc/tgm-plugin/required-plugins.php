<?php
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
function my_theme_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
        array(
			'name'                  => 'Contact Form 7',
			'slug'                  => 'contact-form-7',
			'required'              => true,
            'force_activation'      => true,
            'force_deactivation'    => true,
		),
		// array(
		// 	'name'                  => 'Shadin Customizer',
		// 	'slug'                  => 'kirki',
		// 	'required'              => true,
        //     'force_activation'      => true,
        //     'force_deactivation'    => true,
		// ),
		// array(
		// 	'name'               => 'TGM Example Plugin', // The plugin name.
		// 	'slug'               => 'tgm-example-plugin', // The plugin slug (typically the folder name).
		// 	'source'             => get_stylesheet_directory() . '/lib/plugins/tgm-example-plugin.zip', // The plugin source.
		// 	'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		// 	'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
		// 	'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		// 	'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
		// 	'external_url'       => '', // If set, overrides default API URL and points to an external URL.
		// 	'is_callable'        => '', 
		// ),
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 */
	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
		// 'strings'      => array(
		// 	'page_title'                      => __( 'Install Required Plugins', 'theme-slug' ),
		// 	'menu_title'                      => __( 'Install Plugins', 'theme-slug' ),
		// 	// <snip>...</snip>
		// 	'nag_type'                        => 'updated', // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
		// )
	);
	tgmpa( $plugins, $config );
}
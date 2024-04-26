<?php


// Projects Type Taxonomy Register
function register_taxonomy_project_type() {

    // Taxonomy labels
	$labels = [
		"name" => esc_html__( "Projects Type", "shadin" ),
		"singular_name" => esc_html__( "Project Type", "shadin" ),
		"menu_name" => esc_html__( "Projects Type", "shadin" ),
		"all_items" => esc_html__( "All projects type", "shadin" ),
		"edit_item" => esc_html__( "Edit projects type", "shadin" ),
		"view_item" => esc_html__( "View projects type", "shadin" ),
		"update_item" => esc_html__( "Update projects type name", "shadin" ),
		"add_new_item" => esc_html__( "Add new projects type", "shadin" ),
		"new_item_name" => esc_html__( "New projects type name", "shadin" ),
		"not_found" => esc_html__( "No projects type found", "shadin" ),
		"no_terms" => esc_html__( "No projects type", "shadin" ),
	];

	// Taxonomy Arguments
	$args = [
		"label" => esc_html__( "Projects Type", "shadin" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'project_type', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "projects type",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "project_type", 'project', $args );
}
add_action( 'init', 'register_taxonomy_project_type' );


// Work Type Taxonomy Register
function register_taxonomy_work_type() {

    // Taxonomy labels
	$labels = [
		"name" => esc_html__( "Work Type", "shadin" ),
		"singular_name" => esc_html__( "Work Type", "shadin" ),
		"menu_name" => esc_html__( "Work Type", "shadin" ),
		"all_items" => esc_html__( "All Work type", "shadin" ),
		"edit_item" => esc_html__( "Edit Work type", "shadin" ),
		"view_item" => esc_html__( "View Work type", "shadin" ),
		"update_item" => esc_html__( "Update Work type name", "shadin" ),
		"add_new_item" => esc_html__( "Add new Work type", "shadin" ),
		"new_item_name" => esc_html__( "New Work type name", "shadin" ),
		"not_found" => esc_html__( "No Work type found", "shadin" ),
		"no_terms" => esc_html__( "No Work type", "shadin" ),
	];

	// Taxonomy Arguments
	$args = [
		"label" => esc_html__( "Work Type", "shadin" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'work_type', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "Work type",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "work_type", 'project', $args );
}
add_action( 'init', 'register_taxonomy_work_type');
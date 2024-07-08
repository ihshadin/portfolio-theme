<?php
// Projects Category Taxonomy Register
function register_taxonomy_project_category() {
	$labels = [
		"name" => esc_html__( "Projects Category", 'aesthetica' ),
		"singular_name" => esc_html__( "Project Category", 'aesthetica' ),
		"menu_name" => esc_html__( "Projects Category", 'aesthetica' ),
		"all_items" => esc_html__( "All projects category", 'aesthetica' ),
		"edit_item" => esc_html__( "Edit projects category", 'aesthetica' ),
		"view_item" => esc_html__( "View projects category", 'aesthetica' ),
		"update_item" => esc_html__( "Update projects category name", 'aesthetica' ),
		"add_new_item" => esc_html__( "Add New Projects Category", 'aesthetica' ),
		"new_item_name" => esc_html__( "New projects category name", 'aesthetica' ),
		"not_found" => esc_html__( "No projects category found", 'aesthetica' ),
		"no_terms" => esc_html__( "No projects category", 'aesthetica' ),
	];
	$args = [
		"labels" 			=> $labels,
		"public" 			=> true,
		"hierarchical" 		=> true,
		"show_ui" 			=> true,
		"show_in_nav_menus" => true,
		"show_admin_column" => true,
		"show_in_rest" 		=> true,
		"show_tagcloud" 	=> true,
		"rewrite" 			=> [ 'slug' => 'project_category', 'with_front' => true, ],
	];
	register_taxonomy( "project_category", 'project', $args );
}
add_action( 'init', 'register_taxonomy_project_category' );

// Projects Tags Taxonomy Register
function register_taxonomy_project_tags() {
	$labels = [
		"name" => esc_html__( "Projects Tags", 'aesthetica' ),
		"singular_name" => esc_html__( "Project Tags", 'aesthetica' ),
		"menu_name" => esc_html__( "Projects Tags", 'aesthetica' ),
		"all_items" => esc_html__( "All projects tags", 'aesthetica' ),
		"edit_item" => esc_html__( "Edit projects tags", 'aesthetica' ),
		"view_item" => esc_html__( "View projects tags", 'aesthetica' ),
		"update_item" => esc_html__( "Update projects tags name", 'aesthetica' ),
		"add_new_item" => esc_html__( "Add New Projects tags", 'aesthetica' ),
		"new_item_name" => esc_html__( "New projects tags name", 'aesthetica' ),
		"not_found" => esc_html__( "No projects tags found", 'aesthetica' ),
		"no_terms" => esc_html__( "No projects tags", 'aesthetica' ),
	];
	$args = [
		"labels" 			=> $labels,
		"public" 			=> true,
		"hierarchical" 		=> false,
		"show_ui" 			=> true,
		"show_in_nav_menus" => true,
		"show_admin_column" => true,
		"show_in_rest" 		=> true,
		"show_tagcloud" 	=> true,
		"rewrite" 			=> [ 'slug' => 'project_tags', 'with_front' => true, ],
	];
	register_taxonomy( "project_tags", 'project', $args );
}
add_action( 'init', 'register_taxonomy_project_tags' );

// Projects Type Taxonomy Register
function register_taxonomy_project_type() {
    // Taxonomy labels
	$labels = [
		"name" => esc_html__( "Projects Type", 'aesthetica' ),
		"singular_name" => esc_html__( "Project Type", 'aesthetica' ),
		"menu_name" => esc_html__( "Projects Type", 'aesthetica' ),
		"all_items" => esc_html__( "All projects type", 'aesthetica' ),
		"edit_item" => esc_html__( "Edit projects type", 'aesthetica' ),
		"view_item" => esc_html__( "View projects type", 'aesthetica' ),
		"update_item" => esc_html__( "Update projects type name", 'aesthetica' ),
		"add_new_item" => esc_html__( "Add new projects type", 'aesthetica' ),
		"new_item_name" => esc_html__( "New projects type name", 'aesthetica' ),
		"not_found" => esc_html__( "No projects type found", 'aesthetica' ),
		"no_terms" => esc_html__( "No projects type", 'aesthetica' ),
	];

	// Taxonomy Arguments
	$args = [
		"labels" 			=> $labels,
		"public" 			=> true,
		"hierarchical" 		=> true,
		"show_ui" 			=> true,
		"show_in_nav_menus" => true,
		"show_admin_column" => true,
		"show_in_rest" 		=> true,
		"show_tagcloud" 	=> true,
		"rewrite" 			=> [ 'slug' => 'project_type', 'with_front' => true, ],
	];
	register_taxonomy( "project_type", 'project', $args );
}
add_action( 'init', 'register_taxonomy_project_type' );

// Work Type Taxonomy Register
function register_taxonomy_work_type() {
    // Taxonomy labels
	$labels = [
		"name" => esc_html__( "Work Type", 'aesthetica' ),
		"singular_name" => esc_html__( "Work Type", 'aesthetica' ),
		"menu_name" => esc_html__( "Work Type", 'aesthetica' ),
		"all_items" => esc_html__( "All Work type", 'aesthetica' ),
		"edit_item" => esc_html__( "Edit Work type", 'aesthetica' ),
		"view_item" => esc_html__( "View Work type", 'aesthetica' ),
		"update_item" => esc_html__( "Update Work type name", 'aesthetica' ),
		"add_new_item" => esc_html__( "Add new Work type", 'aesthetica' ),
		"new_item_name" => esc_html__( "New Work type name", 'aesthetica' ),
		"not_found" => esc_html__( "No Work type found", 'aesthetica' ),
		"no_terms" => esc_html__( "No Work type", 'aesthetica' ),
	];

	// Taxonomy Arguments
	$args = [
		"labels" 			=> $labels,
		"public" 			=> true,
		"hierarchical" 		=> true,
		"show_ui" 			=> true,
		"show_in_nav_menus" => true,
		"show_admin_column" => true,
		"show_in_rest" 		=> true,
		"show_tagcloud" 	=> true,
		"rewrite" 			=> [ 'slug' => 'work_type', 'with_front' => true, ],
	];
	register_taxonomy( "work_type", 'project', $args );
}
add_action( 'init', 'register_taxonomy_work_type');

// Used Tools Taxonomy Register
function register_taxonomy_used_tools() {
    // Taxonomy labels
	$labels = [
		"name" => esc_html__( "Used Tools/Technologies", 'aesthetica' ),
		"singular_name" => esc_html__( "Used Tools", 'aesthetica' ),
		"menu_name" => esc_html__( "Used Tools", 'aesthetica' ),
		"all_items" => esc_html__( "All Used Tools", 'aesthetica' ),
		"edit_item" => esc_html__( "Edit Used Tools", 'aesthetica' ),
		"view_item" => esc_html__( "View Used Tools", 'aesthetica' ),
		"update_item" => esc_html__( "Update Used Tools name", 'aesthetica' ),
		"add_new_item" => esc_html__( "Add new Used Tools", 'aesthetica' ),
		"new_item_name" => esc_html__( "New Used Tools name", 'aesthetica' ),
		"not_found" => esc_html__( "No Used Tools found", 'aesthetica' ),
		"no_terms" => esc_html__( "No Used Tools", 'aesthetica' ),
	];

	// Taxonomy Arguments
	$args = [
		"labels" 			=> $labels,
		"public" 			=> true,
		"hierarchical" 		=> true,
		"show_ui" 			=> true,
		"show_in_nav_menus" => true,
		"show_admin_column" => true,
		"show_in_rest" 		=> true,
		"show_tagcloud" 	=> true,
		"rewrite" 			=> [ 'slug' => 'used_tools', 'with_front' => true, ],
	];
	register_taxonomy( "used_tools", 'project', $args );
}
add_action( 'init', 'register_taxonomy_used_tools');
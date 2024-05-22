<?php
// Projects Category Taxonomy Register
function register_taxonomy_project_category() {
	$labels = [
		"name" => esc_html__( "Projects Category", "shadin" ),
		"singular_name" => esc_html__( "Project Category", "shadin" ),
		"menu_name" => esc_html__( "Projects Category", "shadin" ),
		"all_items" => esc_html__( "All projects category", "shadin" ),
		"edit_item" => esc_html__( "Edit projects category", "shadin" ),
		"view_item" => esc_html__( "View projects category", "shadin" ),
		"update_item" => esc_html__( "Update projects category name", "shadin" ),
		"add_new_item" => esc_html__( "Add New Projects Category", "shadin" ),
		"new_item_name" => esc_html__( "New projects category name", "shadin" ),
		"not_found" => esc_html__( "No projects category found", "shadin" ),
		"no_terms" => esc_html__( "No projects category", "shadin" ),
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
		"name" => esc_html__( "Projects Tags", "shadin" ),
		"singular_name" => esc_html__( "Project Tags", "shadin" ),
		"menu_name" => esc_html__( "Projects Tages", "shadin" ),
		"all_items" => esc_html__( "All projects tags", "shadin" ),
		"edit_item" => esc_html__( "Edit projects tags", "shadin" ),
		"view_item" => esc_html__( "View projects tags", "shadin" ),
		"update_item" => esc_html__( "Update projects tags name", "shadin" ),
		"add_new_item" => esc_html__( "Add New Projects tags", "shadin" ),
		"new_item_name" => esc_html__( "New projects tags name", "shadin" ),
		"not_found" => esc_html__( "No projects tags found", "shadin" ),
		"no_terms" => esc_html__( "No projects tags", "shadin" ),
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
		"name" => esc_html__( "Used Tools/Technologies", "shadin" ),
		"singular_name" => esc_html__( "Used Tools", "shadin" ),
		"menu_name" => esc_html__( "Used Tools", "shadin" ),
		"all_items" => esc_html__( "All Used Tools", "shadin" ),
		"edit_item" => esc_html__( "Edit Used Tools", "shadin" ),
		"view_item" => esc_html__( "View Used Tools", "shadin" ),
		"update_item" => esc_html__( "Update Used Tools name", "shadin" ),
		"add_new_item" => esc_html__( "Add new Used Tools", "shadin" ),
		"new_item_name" => esc_html__( "New Used Tools name", "shadin" ),
		"not_found" => esc_html__( "No Used Tools found", "shadin" ),
		"no_terms" => esc_html__( "No Used Tools", "shadin" ),
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
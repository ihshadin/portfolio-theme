<?php
function register_project_post_type() {
    $labels = array(
        'name'                  => __( 'Projects', 'shadin' ),
        'singular_name'         => __( 'Project', 'shadin' ),
        'menu_name'             => __( 'Projects', 'shadin' ),
        'add_new'               => __( 'Add New Project', 'shadin' ),
        'add_new_item'          => __( 'Add New project', 'shadin' ),
        'new_item'              => __( 'New project', 'shadin' ),
        'edit_item'             => __( 'Edit project', 'shadin' ),
        'view_item'             => __( 'View project', 'shadin' ),
        'all_items'             => __( 'All Projects', 'shadin' ),
        'search_items'          => __( 'Search Projects', 'shadin' ),
        'not_found'             => __( 'No Projects found.', 'shadin' ),
        'not_found_in_trash'    => __( 'No Projects found in Trash.', 'shadin' ),
        'featured_image'        => _x( 'Project Cover Image', 'Overrides the “Featured Image” phrase for this post type', 'shadin' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type', 'shadin' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type', 'shadin' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type', 'shadin' ),
        'archives'              => _x( 'Project archives', 'The post type archive label', 'shadin' ),
        'insert_into_item'      => _x( 'Insert into project', 'Overrides the “Insert into post” phrase for this post type', 'shadin' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this project', 'Overrides the “Uploaded to this post” phrase for this post type', 'shadin' ),
        'filter_items_list'     => _x( 'Filter projects list', 'Screen reader text for the filter links heading on the post type listing screen', 'shadin' ),
        'items_list_navigation' => __( 'Projects list navigation', 'shadin' ),
        'items_list'            => __( 'Projects list', 'shadin' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Project Post Type: Showcase your work in style with our customizable project post type. Display your projects, achievements, and creative endeavors effortlessly. Highlight your skills and expertise with rich media content and engaging descriptions. Perfect for artists, designers, developers, and anyone looking to showcase their professional or personal projects.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'project' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'project_category' ),
        'show_in_rest'       => true,
        'menu_icon'          => 'dashicons-format-gallery'
    );
     
    register_post_type( 'project', $args );
}
add_action( 'init', 'register_project_post_type');
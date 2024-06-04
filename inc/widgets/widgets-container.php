<?php 


// Register widget area.
function shadin_widgets_init() {
	// Sidebar register for blogs
	register_sidebar(
		array(
			'name'          => esc_html__( 'Blog Sidebar', 'shadin' ),
			'id'            => 'blog_sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'shadin' ),
			'before_widget' => '<div class="widget-inner">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
	// Sidebar register for projects
	register_sidebar(
		array(
			'name'          => esc_html__( 'Project Sidebar', 'shadin' ),
			'id'            => 'project_sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'shadin' ),
			'before_widget' => '<div class="widget-inner">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'shadin_widgets_init' );

// custom widgets
require get_template_directory() . '/inc/widgets/custom-widgets.php';
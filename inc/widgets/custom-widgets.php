<?php

// All Custom tags for blog with custom design
function register_blog_tags_widget() {
    // Custom widget class
    class blogs_tags_widgets_shadin extends WP_Widget {
        function __construct() {
            parent::__construct (
                'blog_tags_widgets_shadin', __('Blog Tags (Shadin)', 'shadin'), array('description' => __('A custom widget to display blog posts tags', 'shadin'),)
            );
        }

        public function widget($args, $instance) {
            echo $args['before_widget'];
            if (!empty($instance['title'])) {
                echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
            }

            // Custom HTML and PHP for displaying tags
            echo '<div class="widget-inner">';
            echo '<ul class="post-tags">';
            $tags = get_tags();
            if ($tags) {
                foreach ($tags as $tag) {
                    echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
                }
            }
            echo '</ul>';
            echo '</div>';

            echo $args['after_widget'];
        }

        public function form($instance) {
            if (isset($instance['title'])) {
                $title = $instance['title'];
            } else {
                $title = __('Tags', 'shadin');
            }
            ?>
            <p>
                <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'shadin'); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
                       name="<?php echo $this->get_field_name('title'); ?>" type="text"
                       value="<?php echo esc_attr($title); ?>"/>
            </p>
            <?php
        }

        public function update($new_instance, $old_instance) {
            $instance = array();
            $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
            return $instance;
        }
    }

    // Register and load the widget
    register_widget('blogs_tags_widgets_shadin');
}
add_action('widgets_init', 'register_blog_tags_widget');

// All Custom tags for blog with custom design
function register_blog_categories_widget() {
    // Custom widget class
    class blogs_categories_widgets_shadin extends WP_Widget {
        function __construct() {
            parent::__construct (
                'blog_categories_widgets_shadin', __('Blog Categories (Shadin)', 'shadin'), array('description' => __('A custom widget to display blog posts categories', 'shadin'),)
            );
        }

        public function widget($args, $instance) {
            echo $args['before_widget'];
            if (!empty($instance['title'])) {
                echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
            }

            // Custom HTML and PHP for displaying tags
            echo '<div class="widget-inner">';
            echo '<ul class="cat-wid">';
            $categories = get_categories();
            if ($categories) {
                foreach ($categories as $category) {
                    echo '<li  class="cat-item"><a href="' . get_tag_link($category->term_id) . '">' . $category->name . '</a><span>' . $category->count . '</span></li>';
                }
            }
            echo '</ul>';
            echo '</div>';
            echo $args['after_widget'];
        }

        public function form($instance) {
            if (isset($instance['title'])) {
                $title = $instance['title'];
            } else {
                $title = __('Categories', 'shadin');
            }
            ?>
            <p>
                <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'shadin'); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
                       name="<?php echo $this->get_field_name('title'); ?>" type="text"
                       value="<?php echo esc_attr($title); ?>"/>
            </p>
            <?php
        }

        public function update($new_instance, $old_instance) {
            $instance = array();
            $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
            return $instance;
        }
    }

    // Register and load the widget
    register_widget('blogs_categories_widgets_shadin');
}
add_action('widgets_init', 'register_blog_categories_widget');


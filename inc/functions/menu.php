<?php

// add class to the nav menu links
function add_class_nav_menu_link($atts, $item, $args, $depth) {
    $atts['class'] = 'ajax';

    return $atts;
};
add_action('nav_menu_link_attributes', "add_class_nav_menu_link", 10, 4);

// Add Icons to menu
// Add Font Awesome icon field to menu items
function add_menu_icon_field($item_id, $item) {
    ?>
    <p class="field-icon description description-wide">
        <label for="menu-item-icon-<?php echo $item_id; ?>">
            <?php _e('Input Icon Class', 'shadin'); ?><br/>
            <input type="text" id="menu-item-icon-<?php echo $item_id; ?>" name="menu-item-icon[<?php echo $item_id; ?>]" class="widefat edit-menu-item-icon" value="<?php echo esc_attr(get_post_meta($item_id, '_menu_item_icon', true)) ?>" />
        </label>
    </p>
    <?php
};
add_action('wp_nav_menu_item_custom_fields', 'add_menu_icon_field', 10, 5);

// Save icon field value
function save_menu_icon_field($menu_id, $menu_item_db_id) {
    if(isset($_POST['menu-item-icon'][$menu_item_db_id])) {
        update_post_meta($menu_item_db_id, '_menu_item_icon', sanitize_text_field($_POST['menu-item-icon'][$menu_item_db_id]));
    }
}
add_action('wp_update_nav_menu_item', 'save_menu_icon_field', 10, 6);

// Filter individual menu items to add icons
function add_icon_to_menu_item($item_output, $item, $depth, $args) {
    // Get the icon class for the current menu item
    $icon_class = get_post_meta($item->ID, '_menu_item_icon', true);
    
    // Check if the icon class exists and if the item has a link
    if (!empty($icon_class) && !empty($item->url)) {
        // Find the position of the closing '>' of the <a> link
        $pos = strpos($item_output, '>');

        // Insert the icon after the opening <a> tag
        if ($pos !== false) {
            $item_output = substr_replace($item_output, '<i class="' . esc_attr($icon_class) . '"></i> ', $pos+1, 0);
        }
    }
    
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'add_icon_to_menu_item', 10, 7);











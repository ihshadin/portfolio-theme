<?php 

// Add Meta Box for project Post Type
function add_meta_fields_for_project() {
    add_meta_box('meta_fields_for_project', 'Additional information for the Projects', 'additional_info_callback', 'project', 'normal', 'default');
}
add_action('add_meta_boxes', 'add_meta_fields_for_project');

// Render Meta Box Content
function additional_info_callback($post) {
?>
    <!-- Project Live Url -->
    <p class="field-live_url description description-wide">
        <label for="website_live_url">
            <h5 class="info_project_heading"><?php _e('Website Live URL', 'shadin'); ?></h5>
            <input type='url' id="website_live_url" class="widefat" name="website_live_url" value="<?php echo esc_attr(get_post_meta( $post->ID, 'website_live_url', true)); ?>" />
        </label>
    </p>
    <!-- Project images gallery -->
    <?php
    wp_nonce_field('project_gallery_metabox', 'project_gallery_nonce');
    $gallery_data = get_post_meta($post->ID, 'gallery_data', true);
    ?>
    <div id="gallery_wrapper">
        <h5 class="info_project_heading"><?php _e('Project Screenshot', 'shadin'); ?></h5>
        <div id="img_box_container">
            <?php 
            if (isset($gallery_data['image_url'])) {
                foreach ($gallery_data['image_url'] as $image_url) { ?>
                    <div class="gallery_single_row">
                        <div class="gallery_area image_container">
                            <img class="gallery_img_img" src="<?php echo esc_url($image_url); ?>" height="55" width="55" onclick="open_media_uploader_image_this(this)"/>
                            <input type="hidden" class="meta_image_url" name="gallery[image_url][]" value="<?php echo esc_url($image_url); ?>"/>
                        </div>
                        <div class="gallery_area">
                            <span class="button remove" onclick="remove_img(this)" title="Remove"><i class="fas fa-trash-alt"></i></span>
                        </div>
                        <div class="clear"></div>
                    </div>
                <?php }
            } ?>
        </div>
        <div style="display:none" id="master_box">
            <div class="gallery_single_row">
                <div class="gallery_area image_container" onclick="open_media_uploader_image(this)">
                    <input class="meta_image_url" value="" type="hidden" name="gallery[image_url][]"/>
                </div>
                <div class="gallery_area">
                    <span class="button remove" onclick="remove_img(this)" title="Remove"><i class="fas fa-trash-alt"></i></span>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div id="add_gallery_single_row">
            <input class="button add" type="button" value="+" onclick="open_media_uploader_image_plus();" title="Add image"/>
        </div>
    </div>
    <?php
}

// Enqueue Styles and Scripts
function property_gallery_styles_scripts($hook) {
    global $post;
    if ($hook == 'post-new.php' || $hook == 'post.php') {
        if ('project' === $post->post_type) {
            ?>
            <style type="text/css">
                .info_project_heading {
                    margin: 0 0 7px;
                    font-size: 14px;
                    font-weight: 600;
                } 
                .gallery_area {
                    float: right;
                }
                .image_container {
                    float: left !important;
                    width: 100px;
                    background: url('https://i.hizliresim.com/dOJ6qL.png');
                    height: 100px;
                    background-repeat: no-repeat;
                    background-size: cover;
                    border-radius: 3px;
                    cursor: pointer;
                }
                .image_container img {
                    height: 100px;
                    width: 100px;
                    border-radius: 3px;
                }
                .clear {
                    clear: both;
                }
                #gallery_wrapper {
                    width: 100%;
                    height: auto;
                    position: relative;
                    display: inline-block;
                    margin-top: 15px;
                }
                #gallery_wrapper input[type=text] {
                    width: 300px;
                }
                #gallery_wrapper .gallery_single_row {
                    float: left;
                    display: inline-block;
                    width: 100px;
                    position: relative;
                    margin-right: 8px;
                    margin-bottom: 20px;
                }
                .button.remove {
                    background: none;
                    color: #f1f1f1;
                    position: absolute;
                    border: none;
                    top: 4px;
                    right: 7px;
                    font-size: 1.2em;
                    padding: 0px;
                    box-shadow: none;
                }
                .button.remove:hover {
                    background: none;
                    color: #fff;
                }
                .button.add {
                    background: #c3c2c2;
                    color: #ffffff;
                    border: none;
                    box-shadow: none;
                    width: 100px;
                    height: 100px;
                    line-height: 100px;
                    font-size: 4em;
                }
                .button.add:hover, .button.add:focus {
                    background: #e2e2e2;
                    box-shadow: none;
                    color: #0f88c1;
                    border: none;
                }
            </style>
            <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
            <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
            <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
            <script type="text/javascript">
                function remove_img(value) {
                    var parent = jQuery(value).parent().parent();
                    parent.remove();
                }
                var media_uploader = null;
                function open_media_uploader_image(obj){
                    media_uploader = wp.media({
                        frame: "post",
                        state: "insert",
                        multiple: false
                    });
                    media_uploader.on("insert", function(){
                        var json = media_uploader.state().get("selection").first().toJSON();
                        var image_url = json.url;
                        var html = '<img class="gallery_img_img" src="'+image_url+'" height="55" width="55" onclick="open_media_uploader_image_this(this)"/>';
                        jQuery(obj).append(html);
                        jQuery(obj).find('.meta_image_url').val(image_url);
                    });
                    media_uploader.open();
                }
                function open_media_uploader_image_this(obj){
                    media_uploader = wp.media({
                        frame: "post",
                        state: "insert",
                        multiple: false
                    });
                    media_uploader.on("insert", function(){
                        var json = media_uploader.state().get("selection").first().toJSON();
                        var image_url = json.url;
                        jQuery(obj).attr('src', image_url);
                        jQuery(obj).siblings('.meta_image_url').val(image_url);
                    });
                    media_uploader.open();
                }
                function open_media_uploader_image_plus(){
                    media_uploader = wp.media({
                        frame: "post",
                        state: "insert",
                        multiple: true
                    });
                    media_uploader.on("insert", function(){
                        var length = media_uploader.state().get("selection").length;
                        var images = media_uploader.state().get("selection").models;
                        for (var i = 0; i < length; i++) {
                            var image_url = images[i].changed.url;
                            var box = jQuery('#master_box').html();
                            jQuery(box).appendTo('#img_box_container');
                            var element = jQuery('#img_box_container .gallery_single_row:last-child').find('.image_container');
                            var html = '<img class="gallery_img_img" src="'+image_url+'" height="55" width="55" onclick="open_media_uploader_image_this(this)"/>';
                            element.append(html);
                            element.find('.meta_image_url').val(image_url);
                        }
                    });
                    media_uploader.open();
                }
                jQuery(function() {
                    jQuery("#img_box_container").sortable();
                });
            </script>
            <?php
        }
    }
}
add_action('admin_enqueue_scripts', 'property_gallery_styles_scripts');

// Save Meta Box Data
function save_additional_info_data($post_id) {
    // Check the user's permissions
    if(!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save Data
    if(isset($_POST['website_live_url'])) {
        update_post_meta( $post_id, 'website_live_url', sanitize_text_field($_POST['website_live_url'])); 
    }

    // if (isset($_POST['gallery']['image_url'])) {
    //     update_post_meta($post_id, 'gallery_data', ['image_url' => array_map('esc_url_raw', $_POST['gallery']['image_url'])]);
    // } 
    if (isset($_POST['gallery']['image_url'])) {
        $image_urls = array_filter($_POST['gallery']['image_url'], function($url) {
            return !empty($url);
        });
        update_post_meta($post_id, 'gallery_data', ['image_url' => array_map('esc_url_raw', $image_urls)]);
    } else {
        delete_post_meta($post_id, 'gallery_data');
    }
}
add_action('save_post_project', 'save_additional_info_data');

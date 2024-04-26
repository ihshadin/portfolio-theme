<?php 


// Website Live URL field for Projects Post Type
function add_meta_fields_for_project() {
    add_meta_box( 'meta_fields_for_project', 'Additional Information for The Projects', 'live_url_callback', 'project', 'normal', 'default' );
    // add_meta_box( 'project_gallery', 'Project Gallery', 'project_gallery_callback', 'project', 'normal', 'default' );
}
add_action( 'add_meta_boxes', 'add_meta_fields_for_project' );

// callback function to display the Website live URL for Projects Post Type
function live_url_callback($post) {
    ?>
        <p class="field-live_url description description-wide">
            <label for="website_live_url">
                <?php _e('Website Live URL', 'shadin'); ?><br/>
                <input type='url' id="website_live_url" class="widefat" name="website_live_url" value="<?php echo esc_attr(get_post_meta( $post->ID, 'website_live_url', true)); ?>" />
            </label>
        </p>

        <?php
            // Retrieve current value of the photo gallery
            $photo_gallery = get_post_meta($post->ID, 'project_photo_gallery', true);
            ?>
            <div class="photo-gallery-container">
                <label for="project_photo_gallery">Photo Gallery:</label>
                <input type="hidden" id="project_photo_gallery" name="project_photo_gallery" value="<?php echo esc_attr($photo_gallery); ?>" />
                <button class="upload-gallery-images-button button">Upload / Manage Images</button>
                <div class="gallery-preview">
                    <?php
                    if (!empty($photo_gallery)) {
                        $images = explode(',', $photo_gallery);
                        foreach ($images as $image) {
                            echo '<img src="' . esc_url($image) . '" alt="Gallery Image" />';
                        }
                    }
                    ?>
                </div>
            </div>
            <style>
                .photo-gallery-container {
                    margin-top: 20px;
                }
                .gallery-preview {
                    display: grid;
                    grid-template-columns: repeat(4, 1fr);
                    gap: 50px;
                    margin-top: 20px;
                }
                .gallery-preview img {
                    width: 100%;
                    height: 300px;
                    object-fit: cover;
                }
            </style>
            <script>
                jQuery(document).ready(function ($) {
                    // Uploading files
                    var file_frame;

                    $('.upload-gallery-images-button').on('click', function (event) {
                        event.preventDefault();

                        // If the media frame already exists, reopen it.
                        if (file_frame) {
                            file_frame.open();
                            return;
                        }

                        // Create the media frame.
                        file_frame = wp.media.frames.file_frame = wp.media({
                            title: 'Select Images for Gallery',
                            button: {
                                text: 'Add to Gallery'
                            },
                            multiple: true
                        });

                        // When an image is selected, run a callback.
                        file_frame.on('select', function () {
                            var attachment = file_frame.state().get('selection').toJSON();
                            var attachment_urls = [];

                            $.each(attachment, function (index, value) {
                                attachment_urls.push(value.url);
                            });

                            $('#project_photo_gallery').val(attachment_urls.join(','));
                            $('.gallery-preview').empty();

                            $.each(attachment_urls, function (index, value) {
                                $('.gallery-preview').append('<img src="' + value + '" alt="Gallery Image" />');
                            });
                        });

                        // Finally, open the modal.
                        file_frame.open();
                    });
                });
            </script>
    <?php
}

// Save Website Live URL Data
function save_live_url_data($post_id) {
    // Check the user's permissions
    if(!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save Data
    if(isset($_POST['website_live_url'])) {
        update_post_meta( $post_id, 'website_live_url', sanitize_text_field($_POST['website_live_url'])); 
    }

    // Save Data
    if(isset($_POST['project_photo_gallery'])) {
        update_post_meta( $post_id, 'project_photo_gallery', sanitize_text_field($_POST['project_photo_gallery'])); 
    }
}
add_action('save_post', 'save_live_url_data');
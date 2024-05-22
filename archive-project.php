<?php
/*
* this file is part of Project Archive page
*/
get_header(); 
?>
<!-- content-holder -->
<div class="content-holder">
  <!--wrapper -->
  <div id="wrapper">
    <!--scroll-bar -->
    <div class="scr-bar_dec"></div>
    <div class="scr-bar_container">
      <div
        class="content"
        data-pagetitle="<?php echo esc_attr('My Projects', 'shadin'); ?>"
        data-pagesubtitle="<?php echo esc_attr('Projects', 'shadin'); ?>"
      >
        <div class="bg-top"></div>
        <div class="bg-bottom"></div>        
        <!--section  -->
        <section>
          <div class="section-title fl-wrap">
            <h3><?php echo esc_html('My Latest Projects', 'shadin') ?></h3>
            <div class="gallery-filters-wrap">
              <div class="gallery-filters init_hidden_filter">
                <a
                  href="#"
                  class="gallery-filter gallery-filter-active"
                  data-filter="*"
                  >All</a
                >
                <?php
                  $categories = get_terms('project_category', array(
                    'hide_empty' => 0,
                    'orderby' => 'ASC',
                  ));
                  foreach($categories as $category) {
                    $name = $category->name;
                    $slug = $category->slug;
                    ?>
                      <a href="<?php echo esc_url($slug); ?>" class="gallery-filter" data-filter=".<?php echo $slug ?>">
                        <?php echo esc_html($name, 'shadin'); ?>
                      </a>
                    <?php
                  }
                ?>
              </div>
            </div>
          </div>
          <!-- project start -->
          <div class="gallery-items min-pad hover-dir fl-wrap">
            <!-- gallery-item-->
            <?php 
              // Get the projects
              $args = array (
                'post_type' => 'project',
                'posts_per_page' => 8
              );
              $project_query = new WP_Query($args);
              if($project_query->have_posts()) {
                while($project_query->have_posts()) {
                  $project_query->the_post();

                  // get the categories for each project
                  $project_categories = get_the_terms($post->ID, 'project_category');
                  
                  $class_names = array();
                  if($project_categories) {
                    foreach($project_categories as $category) {
                      $class_names[] = $category->slug;
                    }
                  }
                  ?>
                    <div class="gallery-item <?php echo join(' ', $class_names); ?>">
                      <div class="grid-item-holder hov_zoom">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php esc_html(the_title(), 'shadin') ?>" />
                        <div class="grid-det">
                          <a href="<?php echo get_the_post_thumbnail_url(); ?>" class="grid-media-zoom image-popup" >
                            <i class="far fa-search"></i>
                          </a>
                          <div class="grid-det_category">
                            <?php
                              if ($project_categories) {
                                  foreach ($project_categories as $category) {
                                      echo '<a href="' . get_term_link($category->term_id) . '" class="' . $category->slug . '">' . $category->name . '</a>';
                                  }
                              }
                            ?>
                          </div>
                          <div class="grid-det-item">
                            <a href="<?php the_permalink(); ?>"class="ajax grid-det_link">
                              <?php esc_html(the_title(), 'shadin') ?>
                              <i class="fal fa-long-arrow-right"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php
                }
                wp_reset_postdata();
              } else {
                echo 'No Projects found';
              }
            ?>
          </div>
          <!-- project end -->
        </section>
        <!--section end-->
        <div class="to-top-wrap">
          <div class="to-top color-bg">
            <i class="fas fa-caret-up"></i>
          </div>
        </div>
      </div>
    </div>
    <!--scroll-bar end -->
    <!--share end -->
    <div class="share-wrapper">
      <div class="share-container isShare"></div>
    </div>
    <!--share end -->
  </div>
  <!--wrapper end -->
  <!--page-load -->
  <div class="page-load">
    <div class="pl-spinner"><span></span></div>
  </div>
  <!--page-load end -->
</div>
<!-- content-holder end -->
<?php
get_footer();
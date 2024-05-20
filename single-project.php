<?php
/*
* this file is part of Project Single page
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
        data-pagetitle="<?php echo esc_html('Project Details', 'shadin'); ?>"
        data-pagesubtitle="<?php echo esc_html('Project', 'shadin'); ?>"
      >
        <div class="bg-top"></div>
        <div class="bg-bottom"></div>
        <!--section  -->
        <section>
          <div class="section-title fl-wrap">
            <h3><?php esc_html(the_title(), 'shadin') ?></h3>
          </div>
          <?php
          global $post;	
          $gallery_data  = get_post_meta( $post->ID, 'gallery_data', true );

          if (isset($gallery_data['image_url']) && !empty($gallery_data['image_url'])) { ?> 
            <div class="center-carousel-wrap fl-wrap">
              <div class="center-carousel fl-wrap">
                <div class="swiper-container">
                  <div class="swiper-wrapper lightgallery">
                    <!--swiper-slide  -->
                    <?php foreach($gallery_data['image_url'] as $image_url) { ?>
                      <div class="swiper-slide hov_zoom">
                        <img src="<?php echo esc_url($image_url); ?>" alt="Project image" />
                        <a href="<?php echo esc_url($image_url); ?>" class="box-media-zoom popup-image">
                          <i class="fal fa-search"></i>
                        </a>
                      </div>
                    <?php } ?>
                    <!--swiper-slide end -->
                  </div>
                </div>
              </div>
              <div class="ts-controls">
                <div class="tc-button ccsw-prev">
                  <i class="fal fa-angle-left"></i>
                </div>
                <div class="tc-button ccsw-next">
                  <i class="fal fa-angle-right"></i>
                </div>
              </div>
              <div class="ss-pagination-wrap">
                <div class="tc-pagination2 slider-pag"></div>
              </div>
            </div>
          <?php } ?>
          <div class="box-text-wrap fl-wrap">
            <div class="row">
              <div class="col-md-8">
                <div class="fl-wrap content-box single_pb project_info">
                  <h4 class="bold-title"><?php echo esc_html('Project Info', 'shadin'); ?></h4>
                  <?php echo the_content(); ?>
                  <?php //$project_category = get_the_category();
                        
                        // if($project_category) {
                        //   foreach($project_category as $category) {
                        //     $project_categories[] = $category->name;
                        //     echo "<pre>";
                        //     var_dump($project_categories);
                        //     echo join(', ', $project_categories);
                        //     echo "</pre>";
                        //   }
                        // }

                        // echo "<pre>";
                        // var_dump($project_categories);
                        // echo "</pre>";
                  ?>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box-text-wrap_item content-box">
                  <h5><?php echo esc_html('Project Details', 'shadin'); ?></h5>
                  <?php 
                    // Project categories
                    $project_categories = get_the_category();
                    if($project_categories) {
                      foreach($project_categories as $category) {
                        $project_categories_list[] = $category->name;
                      }
                    }
                    // Project Work Type
                    $project_type = get_the_terms(get_the_ID(), 'project_type');
                    if($project_type) {
                      foreach($project_type as $single_project_type) {
                        $project_type_list[] = $single_project_type->name;
                      }
                    }
                    // Project Work Type
                    $work_type = get_the_terms(get_the_ID(), 'work_type');
                    if($work_type) {
                      foreach($work_type as $single_work_type) {
                        $work_type_list[] = $single_work_type->name;
                      }
                    }
                    // project live url
                    $project_live_url = get_post_meta(get_the_ID(), 'website_live_url', true)
                  ?>
                  <ul>
                    <?php if($project_categories) { ?>
                      <li><span>Category : <?php echo join(', ', $project_categories_list) ?></span></li>
                    <?php } ?>
                    <?php if($project_type) { ?>
                      <li><span>Project Type : <?php echo join(', ', $project_type_list) ?></span></li>
                    <?php } ?>
                    <?php if($work_type) { ?>
                      <li><span>My Role : <?php echo join(', ', $work_type_list) ?></span></li>
                    <?php } ?>
                    <?php if($project_live_url) { ?>
                      <li><span>Live Link : <a href="<?php echo esc_url($project_live_url) ?>" target="_blank"><?php echo esc_html('Click here...', 'shadin') ?></a> </span></li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!--content-nav_holder-->
          <div class="content-nav_holder fl-wrap cnh_sin-post">
            <div class="content-nav fl-wrap">
              <ul>
                <?php 
                $prev_project = get_previous_post(true, '', 'category');
                $next_project = get_next_post(true, '', 'category');

                if(!empty($prev_project)) { 
                  $prev_project_id = $prev_project->ID;
                  $prev_project_link = get_permalink($prev_project_id);
                  $prev_project_title = get_the_title($prev_project_id);
                  $prev_project_thumbnail = get_the_post_thumbnail_url($prev_project_id, '')
                ?>
                  <li>
                    <a href="<?php echo esc_url($prev_project_link); ?>" class="ln ajax">
                      <i class="fas fa-caret-left"></i>
                      <span><?php echo __('Prev', 'shadin'); ?>  - <?php echo esc_html($prev_project_title); ?></span>
                    </a>
                    <div class="content-nav_mediatooltip cnmd_leftside">
                      <img src="<?php echo esc_url($prev_project_thumbnail);?>" alt="<?php echo esc_attr($prev_project_title); ?>" />
                    </div>
                  </li>
                <?php  } else { ?>
                  <li>
                    <a href="<?php echo the_permalink() ?>" class="ln ajax">
                      <i class="fas fa-caret-left"></i>
                      <span><?php echo __('No Previous Project Found', 'shadin'); ?></span>
                    </a>
                  </li>
                <?php }
                
                if(!empty($next_project)) {
                  $next_project_id = $next_project->ID;
                  $next_project_link = get_permalink($next_project_id);
                  $next_project_title = get_the_title($next_project_id);
                  $next_project_thumbnail = get_the_post_thumbnail_url($next_project_id);
                ?>
                <li>
                  <a href="<?php echo esc_url($next_project_link) ?>" class="rn ajax">
                    <span>Next - <?php echo esc_html($next_project_title) ?></span>
                    <i class="fas fa-caret-right"></i>
                  </a>
                  <div class="content-nav_mediatooltip cnmd_rightside">
                    <img src="<?php echo esc_url($next_project_thumbnail);?>" alt="<?php echo esc_attr($next_project_title) ?>" />
                  </div>
                </li>
                <?php } else { ?>
                  <li>
                    <a href="#" class="ln ajax">
                      <i class="fas fa-caret-left"></i>
                      <span><?php echo __('No Next Project Found', 'shadin'); ?></span>
                    </a>
                  </li>
                <?php } ?> 
              </ul>
            </div>
          </div>
          <!-- content-nav_holder end-->
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
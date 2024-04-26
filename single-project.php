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
        data-pagetitle="Project Single"
        data-pagesubtitle="<?php echo esc_html('Project Details'); ?>"
      >
        <div class="bg-top"></div>
        <div class="bg-bottom"></div>
        <!--section  -->
        <section>
          <div class="section-title fl-wrap">
            <h3>Project Project Title</h3>
          </div>
          <div class="center-carousel-wrap fl-wrap">
            <div class="center-carousel fl-wrap">
              <div class="swiper-container">
                <div class="swiper-wrapper lightgallery">
                  <!--swiper-slide  -->
                  <div class="swiper-slide hov_zoom">
                    <img src="images/folio/1.jpg" alt="" /><a
                      href="images/folio/1.jpg"
                      class="box-media-zoom popup-image"
                      ><i class="fal fa-search"></i
                    ></a>
                  </div>
                  <!--swiper-slide end -->
                  <!--swiper-slide -->
                  <div class="swiper-slide hov_zoom">
                    <img src="images/folio/2.jpg" alt="" />
                    <a
                      href="images/folio/2.jpg"
                      class="box-media-zoom popup-image"
                      ><i class="fal fa-search"></i
                    ></a>
                  </div>
                  <!--swiper-slide end -->
                  <!--swiper-slide   -->
                  <div class="swiper-slide hov_zoom">
                    <img src="images/folio/3.jpg" alt="" />
                    <a
                      href="images/folio/3.jpg"
                      class="box-media-zoom popup-image"
                      ><i class="fal fa-search"></i
                    ></a>
                  </div>
                  <!--swiper-slide end -->
                  <!--swiper-slide   -->
                  <div class="swiper-slide hov_zoom">
                    <img src="images/folio/4.jpg" alt="" />
                    <a
                      href="images/folio/4.jpg"
                      class="box-media-zoom popup-image"
                      ><i class="fal fa-search"></i
                    ></a>
                  </div>
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
          <div class="box-text-wrap fl-wrap">
            <div class="row">
              <div class="col-md-8">
                <div class="fl-wrap content-box single_pb">
                  <h4 class="bold-title">Project Info</h4>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Dolore magna aliqua.
                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box-text-wrap_item content-box">
                  <h5>Project Details</h5>
                  <ul>
                    <li><span>Category : Branding</span></li>
                    <li><span>Date : 02.03.2022</span></li>
                    <li><span>Client : Usla Ink</span></li>
                    <li><span>Address : domian.com</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!--content-nav_holder-->
          <div class="content-nav_holder fl-wrap cnh_sin-post">
            <div class="content-nav fl-wrap">
              <ul>
                <li>
                  <a href="project-single.html" class="ln ajax"
                    ><i class="fas fa-caret-left"></i
                    ><span>Prev - Project Title</span></a
                  >
                  <div class="content-nav_mediatooltip cnmd_leftside">
                    <img src="images/folio/1.jpg" alt="" />
                  </div>
                </li>
                <li>
                  <a href="project-single2.html" class="rn ajax"
                    ><span>Next - Project Title</span>
                    <i class="fas fa-caret-right"></i
                  ></a>
                  <div class="content-nav_mediatooltip cnmd_rightside">
                    <img src="images/folio/2.jpg" alt="" />
                  </div>
                </li>
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
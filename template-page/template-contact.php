<?php
/*
* Template Name: ContactPage Template
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
        data-pagetitle="<?php echo esc_attr('Get In Touch', 'shadin'); ?>"
        data-pagesubtitle="<?php echo esc_attr('Contact', 'shadin'); ?>"
      >
        <div class="bg-top"></div>
        <div class="bg-bottom"></div>
        <section>
          <div class="section-title fl-wrap">
            <h3><?php echo esc_html('Contact Information', 'shadin'); ?></h3>
          </div>
          <div class="row">
            <!--card-item -->
            <div class="col-md-6">
              <div class="card-item fl-wrap">
                <i class="fal fa-envelope"></i>
                <span class="card-item_num"><?php echo esc_html('01.', 'shadin'); ?></span>
                <h4><?php echo esc_html('My Emails', 'shadin'); ?></h4>
                <p>
                  <?php echo esc_html("Feel Free to send email to me. I am always open to discuss about new projects", "shadin") ?>
                </p>
                <a href="mailto:ihshadin3453@gmail.com" class="card-link"><?php echo esc_html('ihshadin3453@gmail.com', 'shadin'); ?></a>
              </div>
            </div>
            <!--card-item end -->
            <!--card-item -->
            <div class="col-md-6">
              <div class="card-item fl-wrap">
                <i class="fas fa-phone"></i>
                <span class="card-item_num"><?php echo esc_html('02.', 'shadin'); ?></span>
                <h4><?php echo esc_html('My Phones', 'shadin'); ?></h4>
                <p>
                  <?php echo esc_html("Feel Free Call to me. I am always open to discuss about new projects", "shadin") ?>
                </p>
                <a href="tel:+8801858733453" class="card-link"><?php echo esc_html('+880 1858-733453', 'shadin'); ?></a>
              </div>
            </div>
            <!--card-item end -->
          </div>
        </section>
        <section>
          <div class="section-title fl-wrap">
            <h3><?php echo esc_html('Write me Message', 'shadin'); ?></h3>
          </div>
          <!--contact-form-wrap -->
          <div class="contact-form-wrap">
            <div id="contact-form" class="contact-form fl-wrap">
              <div id="message"></div>
              <div class="custom-form" name="contactform" id="contactform" >
                <!-- <fieldset>
                  <div class="input-wrap">
                    <i class="far fa-user-plus"></i>
                    <input
                      type="text"
                      name="name"
                      id="name"
                      placeholder="Your Name *"
                      value=""
                    />
                  </div>
                  <div class="input-wrap">
                    <i class="far fa-envelope"></i>
                    <input
                      type="text"
                      name="email"
                      id="email"
                      placeholder="Email Address*"
                      value=""
                    />
                  </div>
                  <div class="input-wrap">
                    <i class="far fa-comment-alt"></i>
                    <textarea
                      name="comments"
                      id="comments"
                      cols="40"
                      rows="3"
                      placeholder="Your Message:"
                    ></textarea>
                  </div>
                </fieldset>
                <button class="btn float-btn color-bg" id="submit">
                  <span>Send Message</span>
                </button> -->
                <?php echo do_shortcode('[contact-form-7 id="19c0b62" title="Contact form"]') ?>
              </div>
            </div>
            <!-- contact form  end-->
          </div>
          <!--contact-form-wrap end-->
        </section>
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
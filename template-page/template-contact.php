<?php
/*
* Template Name: ContactPage
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
        data-pagetitle="Get In Touch"
        data-pagesubtitle="Contacts"
      >
        <div class="bg-top"></div>
        <div class="bg-bottom"></div>
        <section>
          <div class="section-title fl-wrap">
            <h3>Contact Information</h3>
          </div>
          <div class="row">
            <!--card-item -->
            <div class="col-md-6">
              <div class="card-item fl-wrap">
                <i class="fal fa-envelope"></i>
                <span class="card-item_num">01.</span>
                <h4>My Emails</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing
                  elit.
                </p>
                <a href="#" class="card-link">yourmail@domain.com</a>
              </div>
            </div>
            <!--card-item end -->
            <!--card-item -->
            <div class="col-md-6">
              <div class="card-item fl-wrap">
                <i class="fas fa-phone"></i>
                <span class="card-item_num">02.</span>
                <h4>My Phones</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing
                  elit.
                </p>
                <a href="#" class="card-link">+7(111)123456789</a>
                <a href="#" class="card-link">+3(333)987654321</a>
              </div>
            </div>
            <!--card-item end -->
          </div>
        </section>
        <section>
          <div class="section-title fl-wrap">
            <h3>Write me Mesagge</h3>
          </div>
          <!--contact-form-wrap -->
          <div class="contact-form-wrap">
            <div id="contact-form" class="contact-form fl-wrap">
              <div id="message"></div>
              <form
                class="custom-form"
                action="https://vbook.kwst.net/php/contact.php"
                name="contactform"
                id="contactform"
              >
                <fieldset>
                  <div class="input-wrap">
                    <i class="far fa-user-plus"></i
                    ><input
                      type="text"
                      name="name"
                      id="name"
                      placeholder="Your Name *"
                      value=""
                    />
                  </div>
                  <div class="input-wrap">
                    <i class="far fa-envelope"></i
                    ><input
                      type="text"
                      name="email"
                      id="email"
                      placeholder="Email Address*"
                      value=""
                    />
                  </div>
                  <div class="input-wrap">
                    <i class="far fa-comment-alt"></i
                    ><textarea
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
                </button>
              </form>
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
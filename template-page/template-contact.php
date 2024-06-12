<?php
/*
* Template Name: ContactPage Template
*/
get_header(); 
?>
<div class="content" data-pagetitle="<?php echo esc_attr('Get In Touch', 'shadin'); ?>" data-pagesubtitle="<?php echo esc_attr(the_title(), 'shadin'); ?>">
  <div class="bg-top"></div>
  <div class="bg-bottom"></div>
  <!--section  -->
  <?php if(get_theme_mod('is_contact_info_show', true)): ?>
    <section class="contact-infos">
      <div class="section-title fl-wrap">
        <h3><?php echo esc_html(get_theme_mod( 'contact_info_section_title', 'Contact Information' ), 'shadin'); ?></h3>
      </div>
      <div class="row">
        <?php
          $is_email_info_show = get_theme_mod('is_email_info_show', true);
          $is_phone_info_show = get_theme_mod('is_phone_info_show', true);
          $is_location_info_show = get_theme_mod('is_location_info_show', true);

          $show_count = (int) $is_email_info_show + (int) $is_phone_info_show + (int) $is_location_info_show;

          switch ($show_count) {
            case 1:
                $email_class = 'col-md-12';
                $phone_class = 'col-md-12';
                $location_class = 'col-md-12';
                break;
            case 2:
                $email_class = 'col-md-6';
                $phone_class = 'col-md-6';
                $location_class = 'col-md-6';
                break;
            case 3:
                $email_class = 'col-md-6';
                $phone_class = 'col-md-6';
                $location_class = 'col-md-12';
                break;
            default:
                $email_class = 'col-md-6';
                $phone_class = 'col-md-6';
                $location_class = 'col-md-12';
                break;
        }
        ?>
        <!--Email info Box -->
        <?php if($is_email_info_show): ?>
          <div class="<?php echo esc_attr($email_class); ?>">
            <div class="card-item fl-wrap email-box">
              <i class="fal fa-envelope"></i>
              <span class="card-item_num"><?php echo esc_html('01.', 'shadin'); ?></span>
              <h4><?php echo esc_html(get_theme_mod('contact_info_email_title', "My Email"), 'shadin'); ?></h4>
              <p><?php echo esc_html(get_theme_mod('contact_info_email_description', "Feel Free to send email to me. I am always open to discuss about new projects"), "shadin") ?></p>
              <a href="mailto:<?php echo esc_html(get_theme_mod('contact_info_email', 'example@gmail.com'), 'shadin'); ?>" class="card-link"><?php echo esc_html(get_theme_mod('contact_info_email', 'example@gmail.com'), 'shadin'); ?></a>
            </div>
          </div>
        <?php endif; ?>

        <!--Phone info Box -->
        <?php if($is_phone_info_show): ?>
          <div class="<?php echo esc_attr($phone_class); ?>">
            <div class="card-item fl-wrap phone-box">
              <i class="fas fa-phone"></i>
              <span class="card-item_num"><?php echo esc_html('02.', 'shadin'); ?></span>
              <h4><?php echo esc_html(get_theme_mod('contact_info_phone_title', "My Phones"), 'shadin'); ?></h4>
              <p><?php echo esc_html(get_theme_mod('contact_info_phone_description', "Feel Free Call to me. I am always open to discuss about new projects"), 'shadin'); ?></p>
              <a href="tel:<?php echo get_theme_mod('contact_info_phone', '+14844578289'); ?>" class="card-link"><?php echo esc_html(get_theme_mod('contact_info_phone', '+14844578289'), 'shadin'); ?></a>
            </div>
          </div>
        <?php endif; ?>

        <!--Location info Box -->
        <?php if($is_location_info_show): ?>
          <div class="<?php echo esc_attr($location_class); ?>">
            <div class="card-item fl-wrap location-box">
              <i class="fas fa-map-marker-alt"></i>
              <span class="card-item_num"><?php echo esc_html('02.', 'shadin'); ?></span>
              <h4><?php echo esc_html(get_theme_mod('contact_info_location_title', "My Location"), 'shadin'); ?></h4>
              <p><?php echo esc_html(get_theme_mod('contact_info_location_description', '1600 Broadway, New York, USA'), 'shadin'); ?></p>
              <!-- <a href="tel:+8801858733453" class="card-link"><?php// echo esc_html('+880 1858-733453', 'shadin'); ?></a> -->
            </div>
          </div>
        <?php endif; ?>
      </div>
    </section>
  <?php endif; ?>
  <!--section end-->
  <!--section  -->
  <section>
    <div class="section-title fl-wrap">
      <h3><?php echo esc_html('Write me Message', 'shadin'); ?></h3>
    </div>
    <!--contact-form-wrap -->
    <div class="contact-form-wrap">
      <!-- Contact Form -->
      <div id="contact-form" class="contact-form fl-wrap">
        <div id="message"></div>
        <div class="custom-form" name="contactform" id="contactform" >
          <?php echo do_shortcode('[contact-form-7 id="19c0b62" title="Contact form"]') ?>
        </div>
      </div>
      <!-- contact form  end-->
    </div>
    <!--contact-form-wrap end-->
  </section>
  <!--section end-->
<?php 
get_footer();
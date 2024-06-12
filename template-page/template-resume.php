<?php
/*
* Template Name: Resume Page Template
*/
get_header(); 
?>
<div class="content" data-pagetitle="My story" data-pagesubtitle="<?php echo esc_attr(the_title(), 'shadin')?>" >
  <div class="bg-top"></div>
  <div class="bg-bottom"></div>
  <!--section  -->
  <?php if(get_theme_mod('is_resume_summary_show', true)): ?>
  <section class="resume-summary-section">
    <div class="section-title fl-wrap">
      <h3><?php echo esc_html(get_theme_mod('resume_summary_title'), 'shadin') ?></h3>
    </div>
    <div class="box-text-wrap fl-wrap">
      <div class="row">
        <div class="col-md-8">
          <div class="fl-wrap content-box single_pb cb_dec">
            <p><?php echo esc_html(get_theme_mod('resume_summary_text'), 'shadin') ?></p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box-text-wrap_item content-box">
            <?php if(get_theme_mod("resume_language_title", "Language Knowledge")): ?>
              <h5><?php echo esc_html(get_theme_mod('resume_language_title', "Language Knowledge"), 'shadin'); ?></h5>
            <?php endif; ?>
            <ul>
              <?php if(get_theme_mod("resume_language_list", 'English, Dutch')):?>
                <?php $languages = explode(',', get_theme_mod("resume_language_list", 'English, Dutch')) ?>
                <?php foreach($languages as $language): ?>
                  <li><span><?php echo esc_html($language, 'shadin') ?></span></li>
                <?php endforeach; ?>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <!--section end-->
  <!--section  -->
  <section>
    <div class="row">
      <?php
        $is_work_history_show = get_theme_mod('is_work_history_show', true);
        $edu_qua_class = $is_work_history_show ? 'col-md-6' : 'col-md-12';

        $is_edu_qua_show = get_theme_mod('is_edu_qua_show', true);
        $work_history_class = $is_edu_qua_show ? 'col-md-6' : 'col-md-12';
      ?>
      <?php if(get_theme_mod('is_work_history_show', true)): ?>
        <div class="work-history <?php echo esc_attr($work_history_class); ?>">
          <div class="section-title fl-wrap">
            <?php if(get_theme_mod("work_section_title", "Work History")): ?>
              <h3><?php echo esc_html(get_theme_mod('work_section_title', "Work History"), 'shadin'); ?></h3>
            <?php endif; ?>
          </div>
          <div class="resume-item-container fl-wrap">
            <!--resume-item-->
            <?php $work_histories = get_theme_mod("works_history_items", []); ?>
            <?php if( ! empty($work_histories) ): ?>
                <?php foreach($work_histories as $work_history): ?>
                  <div class="resume-item fl-wrap">
                    <h4><?php echo esc_html($work_history["company_name"], 'shadin'); ?></h4>
                    <h5><?php echo esc_html($work_history["designation_title"], 'shadin'); ?></h5>
                    <p><?php echo esc_html($work_history["description"], 'shadin'); ?></p>
                    <span class="resume-date"><?php echo esc_html($work_history["duration"], 'shadin'); ?></span>
                  </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="resume-item fl-wrap">
                    <p>No work history found.</p>
                </div>
            <?php endif; ?>
            <!--resume-item end-->
          </div>
        </div>
      <?php endif; ?>
      <?php if(get_theme_mod('is_edu_qua_show', true)): ?>
        <div class="edu-qua <?php echo esc_attr($edu_qua_class); ?>">
          <div class="section-title fl-wrap">
            <?php if(get_theme_mod("education_section_title", "Education")): ?>
              <h3><?php echo esc_html(get_theme_mod('education_section_title', "My Skills"), 'shadin'); ?></h3>
            <?php endif; ?>
          </div>
          <div class="resume-item-container ric_nom fl-wrap">
            <!--resume-item-->
            <?php $edu_qualifications = get_theme_mod("edu_qualifications", []); ?>
            <?php if( ! empty($edu_qualifications) ): ?>
                <?php foreach($edu_qualifications as $education): ?>
                  <div class="resume-item fl-wrap">
                    <h4><?php echo esc_html($education["degree_name"], 'shadin'); ?></h4>
                    <h5><?php echo esc_html($education["institute_name"], 'shadin'); ?></h5>
                    <p><?php echo esc_html($education["description"], 'shadin'); ?></p>
                    <span class="resume-date"><?php echo esc_html($education["duration"], 'shadin'); ?></span>
                  </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="resume-item fl-wrap">
                    <p>No education degree found.</p>
                </div>
            <?php endif; ?>
            <!--resume-item end-->
          </div>
        </div>
      <?php endif; ?>
    </div>
  </section>
  <!--section end-->
  <!--section  -->
  <?php if(get_theme_mod('is_skills_show', true)): ?>
  <section class="skills-section">
    <div class="fl-wrap">
      <div class="row">
        <!-- Layout one -->
        <div class="col-md-6">
          <div class="section-title fl-wrap">
            <h3><?php echo esc_html(get_theme_mod('skills_section_title', "Education"), 'shadin'); ?></h3>
          </div>
          <?php if(get_theme_mod('skills_sec_layout', 'layout-1') === 'layout-1'): ?>
            <div class="skillbar-box animaper">
              <!-- skill  -->
              <?php $skills = get_theme_mod("professional_skills", []); ?>
              <?php if( ! empty($skills) ): ?>
                  <?php foreach($skills as $skill): ?>
                    <div class="custom-skillbar-title">
                      <span><?php echo esc_html($skill["skill_name"], 'shadin'); ?></span>
                    </div>
                    <div class="skill-bar-percent"><?php echo esc_html($skill["skill_value"], 'shadin'); ?>%</div>
                    <div class="skillbar-bg" data-percent="<?php echo esc_attr($skill["skill_value"], 'shadin'); ?>%">
                      <div class="custom-skillbar"></div>
                    </div>
                  <?php endforeach; ?>
              <?php else: ?>
                  <div class="content-box single_pb">
                      <p>No Skills found.</p>
                  </div>
              <?php endif; ?>
            </div>
          <?php else: ?>
            <!-- Layout two -->
            <div class="clearfix"></div>
            <div class="piechart-holder fl-wrap animaper" data-skcolor="#F89020">
              <!-- 1  -->
              <?php $skills = get_theme_mod("professional_skills", []); ?>
              <?php if( ! empty($skills) ): ?>
                  <?php foreach($skills as $skill): ?>
                    <div class="piechart">
                      <span class="chart" data-percent="<?php echo esc_attr($skill["skill_value"], 'shadin'); ?>">
                        <span class="percent"></span>
                      </span>
                      <div class="clearfix"></div>
                      <div class="skills-description">
                        <h4><?php echo esc_html($skill["skill_name"], 'shadin'); ?></h4>
                      </div>
                    </div>
                  <?php endforeach; ?>
              <?php else: ?>
                  <div class="content-box single_pb">
                      <p>No Skills found.</p>
                  </div>
              <?php endif; ?>
              <!-- 1 end -->
              <div class="chart-dec">
                <span><i class="fal fa-plus"></i></span>
              </div>
            </div>
          <?php endif; ?>
        </div>
        <?php if(get_theme_mod('is_featured_skills_show', true)): ?>
          <div class="col-md-6">
            <div class="section-title fl-wrap featured-skill-title">
              <h3><?php echo esc_html(get_theme_mod('featured_skills_section_title', "Featured Skills"), 'shadin'); ?></h3>
            </div>
            <!-- Layout two -->
            <div class="clearfix"></div>
            <div class="piechart-holder fl-wrap animaper" data-skcolor="#F89020">
              <!-- 1  -->
              <?php $skills = get_theme_mod("featured_skills", []); ?>
              <?php if( ! empty($skills) ): ?>
                  <?php foreach($skills as $skill): ?>
                    <div class="piechart">
                      <span class="chart" data-percent="<?php echo esc_attr($skill["skill_value"], 'shadin'); ?>">
                        <span class="percent"></span>
                      </span>
                      <div class="clearfix"></div>
                      <div class="skills-description">
                        <h4><?php echo esc_html($skill["skill_name"], 'shadin'); ?></h4>
                      </div>
                    </div>
                  <?php endforeach; ?>
              <?php else: ?>
                  <div class="content-box single_pb">
                      <p>No Skills found.</p>
                  </div>
              <?php endif; ?>
              <!-- 1 end -->
              <div class="chart-dec">
                <span><i class="fal fa-plus"></i></span>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <!--section end-->
<?php
get_footer();
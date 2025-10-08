<?php
/*
*    Template Name: Certification Category V2
*/

$banner_heading = get_field('Banner-heading', false, false);
$banner_bg_image = get_field('banner_background_image');
$banner_button = get_field('banner_button');
$banner_button_heading = get_field('banner_bottom_text');
$certification_category = get_field('certification_category');
$benefits_of_certification = get_field('benefits')['benefits_of_certification'];
$banner_readmore_link = !empty($certification_category) ? $certification_category->slug : '';
$testimonials = get_field("testimonials", 1262);

get_header();
?>
<!--Header End-->
<div class="middle-section">
  <div class="inner-page certification-cate">
    <section class="cert-spec-section pb-0 pt-4">
      <div class="container-full">
        <div class="row align-items-center">
          <div class="col-lg-12 col-md-12 position-relative">
            <div class="top_img-text px-4">
              <h1 class="cmn-hd text-start mb-5"><?php echo $banner_heading; ?></h1>
              <?php /* if ($banner_button) : ?>
                <a href="<?php echo $banner_button['url']; ?>#<?php echo $certification_category->slug; ?>" class="btn btn-primary"><?php echo $banner_button['title']; ?></a>
              <?php endif; */?>
              <a href="#<?php echo $certification_category->slug; ?>" class="btn btn-primary scroll-link">Get Started Now</a>
            </div>
             <div class="certifications-tech-img">
              <img class="w-100" src="<?php echo $banner_bg_image; ?>" alt="<?php echo get_the_title(); ?>" />
            </div>
          </div>
          <!-- <div class="col-lg-4 col-md-6">
            <div class="certifications-tech-img">
              <img src="<?php echo $banner_bg_image; ?>" alt="<?php echo get_the_title(); ?>" />
            </div>
          </div> -->
        </div>
      </div>
    </section><!-- Top Image With Text -->

    <section class="rich-text-container">
      <div class="gloy_bg pt-5 pb-5 ">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="rich-text text-center">
                <h2><?php echo $banner_button_heading; ?></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- RichText Glowy Text -->

    <?php
    $args = array(
      'parent' => $certification_category->term_id,
      'hide_empty' => false
    );
    $subcategories = get_categories($args);
    ?>
    <section class="cmn-section esteemed-partners-section"  id="<?php echo $certification_category->slug; ?>">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="esteemed-partners-cnt pa-listing">
              <h2 class="cmn-hd mb-4 text-start" data-aos="fade-up" data-aos-duration="1000"><?php echo esc_html($certification_category->name); ?></h2>
              <div class="row">
              <?php echo do_shortcode('[courses_by_category category="' . $certification_category->slug . '"]'); ?>
              </div>
              <?php
              /*
              if (!empty($subcategories)) {
                foreach ($subcategories as $subcategory) { ?>
                  <h2 class="cmn-hd mb-4 subcat-title text-start" data-aos="fade-up" data-aos-duration="1000"><?php echo esc_html($subcategory->name); ?></h2>
                  <div class="partners-desc-area mb-5" data-aos="fade-up" data-aos-duration="1000">
                  </div>
                  <div class="row">
                    <?php echo do_shortcode('[courses_by_category category="' . $certification_category->slug . '"]'); ?>
                  </div>
                <?php } ?>
              <?php }  */ ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php /*
    <section class="HowItWorks pb-5 mb-5">
      <div class="container">
        <div class="section-heading mb-5">
          <h2>How It <span class="primary_color">Works</span></h2>
        </div>
        <div class="row gy-5 gx-4 position-relative">
          <div class="step_curve-arrow step_curve-1">
            <img src="<?php echo get_template_directory_uri(); ?>/images/step_curve-arrow.svg" alt="Certifications" />
          </div>
          <div class="step_curve-arrow step_curve-2">
            <img src="<?php echo get_template_directory_uri(); ?>/images/step_curve-arrowtop.svg" alt="Certifications" />
          </div>
          <div class="step_curve-arrow step_curve-3">
            <img src="<?php echo get_template_directory_uri(); ?>/images/step_curve-arrow.svg" alt="Certifications" />
          </div>
          <div class="step_curve-arrow step_curve-4">
            <img src="<?php echo get_template_directory_uri(); ?>/images/step_curve-arrowtop.svg" alt="Certifications" />
          </div>
          <div class="col-lg-2">
            <div class="howtostep">
              <span class="title-count">1</span>
              <h5>Select Certification </h5>
              <h6>Choose from our comprehensive list of certifications tailored for business professionals.</h6>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="howtostep">
              <span class="title-count">2</span>
              <h5>Enroll in Course</h5>
              <h6>Choose from our comprehensive list of certifications tailored for business professionals.</h6>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="howtostep">
              <span class="title-count">3</span>
              <h5>Complete Modules</h5>
              <h6>Engage with interactive modules at your own pace.</h6>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="howtostep">
              <span class="title-count">4</span>
              <h5>Take the Exam</h5>
              <h6>Assess your knowledge through our certification exam.</h6>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="howtostep">
              <span class="title-count">5</span>
              <h5>Get Certified</h5>
              <h6>Receive your AI Professional™ certification and advance your career.</h6>
            </div>
          </div>

        </div>
      </div>
    </section>
    */ ?>
  <section class="HowItWorks pb-4 pb--md-5 mb-lg-5">
    <div class="container">
      <div class="section-heading mb-5">
        <h2>How It <span class="primary_color">Works</span></h2>
      </div>
      <div class="row gy-5 gx-4 position-relative">
        <div class="step_curve-arrow step_curve-1">
          <img src="<?php echo get_template_directory_uri(); ?>/images/step_curve-arrow.svg" alt="Certifications Flow" />
        </div>
        <div class="step_curve-arrow step_curve-2">
          <img src="<?php echo get_template_directory_uri(); ?>/images/step_curve-arrowtop.svg" alt="Certifications Flow" />
        </div>
        <div class="step_curve-arrow step_curve-3">
          <img src="<?php echo get_template_directory_uri(); ?>/images/step_curve-arrow.svg" alt="Certifications Flow" />
        </div>
        <div class="step_curve-arrow step_curve-4">
          <img src="<?php echo get_template_directory_uri(); ?>/images/step_curve-arrowtop.svg" alt="Certifications Flow" />
        </div>
        <?php if (have_rows('how_it_works_steps', 'option')): ?>
          <?php while (have_rows('how_it_works_steps', 'option')): the_row(); ?>
            <div class="col-lg-2">
              <div class="howtostep">
                <span class="title-count"><?php the_sub_field('step_number'); ?></span>
                <h5><?php the_sub_field('step_title'); ?></h5>
                <h6><?php the_sub_field('step_description'); ?></h6>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>

    <section class="Benefits pt-3 pb-5 mb-lg-5">
      <div class="container">
        <div class="section-heading mb-2 mb-lg-4">
          <h2>Benefits</h2>
        </div>
        <div class="row gy-4">
          <?php foreach ($benefits_of_certification as $benefits_of_certi) : ?>
            <div class="col-lg-4 col-md-6 col-12">
              <div class="Benefits_card d-flex">
                <div class="flex_item Benefits_icon">
                  <?php 
                  $benefit_image = get_template_directory_uri() . "/images/Benefits-Checkmark.png";
                  /*if ($benefits_of_certi['benefit_image']) : 
                    $benefit_image = $benefits_of_certi['benefit_image'];
                  endif;*/ ?>
                  <img src="<?php echo $benefit_image; ?>" alt="Certificatino Benefits" />
                </div>
                <div class="flex_item Benefits_info">
                  <?php if ($benefits_of_certi['benefit_name']) : ?>
                    <h4><?php echo $benefits_of_certi['benefit_name']; ?></h4>
                  <?php endif; ?>
                  <?php if ($benefits_of_certi['benefit_detail']) : ?>
                    <h6><?php echo $benefits_of_certi['benefit_detail']; ?></h6>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="testimonials_certi mb-0 mb--md-5 pb-3 pb-md-5">
      <div class="container">
        <div class="section-heading mb-4 mb-md-5 pb-2">
          <h2>Testimonials</h2>
        </div>
        <div class="row gy-5 gx-5">
          <?php
          $count = 0;
          foreach ($testimonials as $testimonial) :
            if ($count == 4) break;
          ?>
            <div class="col-lg-3 col-md-6 col-12">
              <div class="testimonials_card">
                <div class="teachere_img">
                  <img src="<?php echo $testimonial['employee_photo']; ?>" alt="Career" />
                </div>
                <div class="teachere_name">
                  <h5><?php echo $testimonial['employee_name']; ?></h5>
                  <h6><?php echo $testimonial['job_role']; ?></h6>
                </div>
                <p><?php echo $testimonial['description']; ?></p>
              </div>
            </div>
          <?php
            $count++;
          endforeach;
          ?>
        </div>
        <div class="mt-3">
          <div class="text-end">
            <a href="<?php echo site_url('/testimonials'); ?>" class="link_with-arrow"><span class="text">View More</span> <span class="icon-arrow">
                <img src="<?php echo get_template_directory_uri(); ?>/images/small-arrow.svg" alt="Icon" /></span></a>
          </div>
        </div>
      </div>
    </section>

    <script>
        jQuery(document).ready(function(){
            jQuery('a.scroll-link').click(function(event){
                event.preventDefault(); // Prevent default anchor click behavior

                var targetId = jQuery(this).attr('href'); // Get the target section ID
                var targetPosition = jQuery(targetId).offset().top - 100; // Calculate position with offset

                jQuery('html, body').animate({
                    scrollTop: targetPosition
                }, 500); // Smooth scroll to the target position
            });
        });
    </script>

    <?php
    get_footer();

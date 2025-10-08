<?php
/*
*    Template Name: Certification Category V1
*/	


// Define the category slugs
$workdomains = ['technology'];


get_header();
	?>	
  <!--Header End-->
<div class="middle-section">
  <div class="inner-page certification-cate">
  <section class="cert-spec-section pb-2">
    <div class="container-full">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-6 px-lg-5 px-md-5 px-4">
                <div class="top_img-text" data-aos="fade-up" data-aos-duration="1000">
                        <h1 class="cmn-hd text-start">Grow and Rise Your Career with <span class="primary_color">AI</span> TechnicalTM Certifications</h1>
                        <a href="#" class="btn btn-primary">Get Started Now</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="certifications-tech-img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/certifications.png" alt="Certifications" />
                </div>
            </div>
        </div>
    </div>
    </section><!-- Top Image With Text --> 

    <section class="rich-text-container mt-5">
      <div class="gloy_bg pt-5 pb-5 ">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="rich-text text-center">
                <h2>AI Technical™ certifications empower technical business professionals to leverage AI in decision-making, innovation, and productivity. </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- RichText Glowy Text --> 

<?php     
foreach ($workdomains as $slug) {
    $main_category = get_category_by_slug($slug);

    if ($main_category) {
        $main_category_id = $main_category->term_id;

        $args = array(
            'parent' => $main_category_id,
            'hide_empty' => false 
        );
        $subcategories = get_categories($args);
        ?>
        
        <section class="cmn-section esteemed-partners-section">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="esteemed-partners-cnt">
                  <h2 class="cmn-hd mb-4 text-start" data-aos="fade-up" data-aos-duration="1000"><?php echo esc_html($main_category->name); ?></h2>
                  <?php     
                  if (!empty($subcategories)) { 
                    foreach ($subcategories as $subcategory) { ?>
                      <h2 class="cmn-hd mb-4 subcat-title text-start" data-aos="fade-up" data-aos-duration="1000"><?php echo esc_html($subcategory->name); ?></h2>
                      <div class="partners-desc-area mb-5" data-aos="fade-up" data-aos-duration="1000">
                      </div>
                      <div class="row">
                        <?php echo do_shortcode('[courses_by_category category="'. $subcategory->slug .'"]'); ?>
                      </div>
                    <?php } ?>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php 
    } 
}
?>

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
</section><!-- How It Works -->

<section class="Benefits pt-5 pb-5 mb-5 mt-5">
        <div class="container">
            <div class="section-heading mb-5">           
                <h2>Benefits</h2>
            </div>
            <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="Benefits_card d-flex">
                            <div class="flex_item Benefits_icon">                              
                              <img src="<?php echo get_template_directory_uri(); ?>/images/career.svg" alt="Career" />
                            </div>
                            <div class="flex_item Benefits_info">                          
                              <h4>For Professionals: </h4>
                              <h6>Gain expertise, improve decision-making, and drive innovation within your organisation.</h6>
                            </div>
                        </div>
                    </div><!-- Cal End -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="Benefits_card d-flex">
                            <div class="flex_item Benefits_icon">                              
                              <img src="<?php echo get_template_directory_uri(); ?>/images/growth.svg" alt="Career" />
                            </div>
                            <div class="flex_item Benefits_info">                          
                              <h4>For Employers: </h4>
                              <h6>Develop a skilled workforce, enhance productivity, and foster a culture of innovation.</h6>
                            </div>
                        </div>
                    </div><!-- Cal End -->

            </div>
        </div>
    </section><!-- Benefits --> 

    <section class="testimonials_certi mb-5 pb-5">
      <div class="container">
        <div class="section-heading mb-5 pb-2">           
                <h2>Testimonials</h2>
            </div>
        <div class="row gy-5 gx-5">
          <div class="col-lg-3 col-md-6 col-12">
            <div class="testimonials_card">
              <div class="teachere_img">
                 <img src="<?php echo get_template_directory_uri(); ?>/images/jb.png" alt="Career" />
              </div>
              <div class="teachere_name">
                <h5>John Beckham</h5>
                <h6>Technical Trainer</h6>
              </div>
              <p>Lorem ipsum dolor sit amet consectetur. A vel quis lobortis pellentesque scelerisque enim viverra lacinia. Placerat amet convallis ultricies gravida. Urna sed sit donec tincidunt nisi adipiscing diam tortor lectus. Laoreet fermentum ut mattis morbi morbi cursus porttitor rhoncus nunc.</p>
            </div>
          </div>
           <div class="col-lg-3 col-md-6 col-12">
            <div class="testimonials_card">
              <div class="teachere_img">
                 <img src="<?php echo get_template_directory_uri(); ?>/images/jb2.png" alt="Career" />
              </div>
              <div class="teachere_name">
                <h5>John Beckham</h5>
                <h6>Technical Trainer</h6>
              </div>
              <p>Lorem ipsum dolor sit amet consectetur. A vel quis lobortis pellentesque scelerisque enim viverra lacinia. Placerat amet convallis ultricies gravida. Urna sed sit donec tincidunt nisi adipiscing diam tortor lectus. Laoreet fermentum ut mattis morbi morbi cursus porttitor rhoncus nunc.</p>
            </div>
          </div>
           <div class="col-lg-3 col-md-6 col-12">
            <div class="testimonials_card">
              <div class="teachere_img">
                 <img src="<?php echo get_template_directory_uri(); ?>/images/jb3.png" alt="Career" />
              </div>
              <div class="teachere_name">
                <h5>John Beckham</h5>
                <h6>Technical Trainer</h6>
              </div>
              <p>Lorem ipsum dolor sit amet consectetur. A vel quis lobortis pellentesque scelerisque enim viverra lacinia. Placerat amet convallis ultricies gravida. Urna sed sit donec tincidunt nisi adipiscing diam tortor lectus. Laoreet fermentum ut mattis morbi morbi cursus porttitor rhoncus nunc.</p>
            </div>
          </div>
           <div class="col-lg-3 col-md-6 col-12">
            <div class="testimonials_card">
              <div class="teachere_img">
                 <img src="<?php echo get_template_directory_uri(); ?>/images/jb4.png" alt="Career" />
              </div>
              <div class="teachere_name">
                <h5>John Beckham</h5>
                <h6>Technical Trainer</h6>
              </div>
              <p>Lorem ipsum dolor sit amet consectetur. A vel quis lobortis pellentesque scelerisque enim viverra lacinia. Placerat amet convallis ultricies gravida. Urna sed sit donec tincidunt nisi adipiscing diam tortor lectus. Laoreet fermentum ut mattis morbi morbi cursus porttitor rhoncus nunc.</p>
            </div>
          </div>
        </div>
         <div class="mt-3">
            <div class="text-end">
              <a href="#" class="link_with-arrow"><span class="text">View More</span> <span class="icon-arrow"> 
                <img src="<?php echo get_template_directory_uri(); ?>/images/small-arrow.svg" alt="Icon" /></span></a>
            </div>
          </div>
      </div>
    </section><!-- Testimonials --> 

<?php
get_footer();
<?php
/*
 *    Template Name: TestmonialsTemplate-V2
 */
get_header();

$testimonials = get_field("testimonials");


?>
<div class="middle-section">
  

<section class="banner-video-section tm-v2-banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
        <div class="video-banner-cnt">
            <h1>What Our Learners Say</h1>
            <p>Empowering individuals with AI and Blockchain certifications globally.</p>
            <a href="#" class="btn btn-primary me-3" >Download Brochure</a> <a href="#" class="btn btn-outline-dark" >Explore Certifications</a>
            
        </div>
      </div>
		</div>
	</div>
</section>

<section class="tmv2-main-tms cmn-sliderdots">
  <div class="container maxwidth">
    <div class="row">
      <div class="col-xl-12">
        
      <div class="owl-carousel tmv2-carousel owl-theme">
        <div class="tmv2-large-card">
            <div class="card">
              <p>I recently attended a workshop conducted jointly by Indrashil University and Al Certs and earned the Al+Executive™ Certification. This workshop has enriched me with knowledge about practical Al applications, their ethical considerations, the latest Al trends, Al technologies, strategies, and much more. This workshop has paved new career opportunities for me. I am excited to implement these learnings and for those intrigued by Al, Al+Executive™ certificate offered by Al Certs is highly recommended.</p>
              <div class="tmv2-use-large"><span>John Den</span> - <span>Student</span></div>
            </div> 
            <div class="tmv2-thumbimg">
              <img class="w-100" alt="Play Icon" src="<?php echo esc_url(get_template_directory_uri() . "/images/Speakers3.png"); ?>">
            </div>
        </div>
        <div class="tmv2-large-card">
            <div class="card">
              <p>I recently attended a workshop conducted jointly by Indrashil University and Al Certs and earned the Al+Executive™ Certification. This workshop has enriched me with knowledge about practical Al applications, their ethical considerations, the latest Al trends, Al technologies, strategies, and much more. This workshop has paved new career opportunities for me. I am excited to implement these learnings and for those intrigued by Al, Al+Executive™ certificate offered by Al Certs is highly recommended.</p>
              <div class="tmv2-use-large"><span>John Den</span> - <span>Student</span></div>
            </div> 
            <div class="tmv2-thumbimg">
              <img class="w-100" alt="" src="<?php echo esc_url(get_template_directory_uri() . "/images/Speakers3.png"); ?>">
            </div>
        </div>
       </div>   
        
      </div> 
    </div> 
  </div> 
</section>  

<section class="tmv2-tabs-section cmn-sliderdots">
<div class="container maxwidth">
    <div class="row">
      <div class="col-xl-12">
         <h2>Testimonials</h2>
         <div class="tmv2-tabs">

            <ul class="nav nav-tabs h2_tabs" id="myTab" role="tablist">
              <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab1" type="button" >AI Essentials</button></li>
              <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab2" type="button">AI Data & Robotics</button></li>
              <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab3" type="button"  >Development</button></li>
            </ul>

            <div class="tab-content" id="myTabContent">
              
              <div class="tab-pane fade show active" id="tab1" role="tabpanel">

                <div class="CourseCompletion">

                    <div class="row gy-4 gy-lg-0">
                        
                        <div class="col-lg-4 col-md-4">
                            <div class="CourseCard text-center">
                                <div class="iconwithprice">
                                  <img src="https://aicerts.local/wp-content/themes/aicerts/images/SalaryMail.svg" alt="Mail"> 
                                  <div><h3>Median Salaries</h3><span>$52,223</span></div>
                              </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="CourseCard text-center">
                                <div class="iconwithprice">
                                  <img src="https://aicerts.local/wp-content/themes/aicerts/images/salaryadd.svg" alt="Mail">
                                  <div><h3>With AI skills</h3><span>$1,47,455</span></div>
                                </div>
                              </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="CourseCard text-center">
                                <div class="iconwithprice">
                                  <img src="https://aicerts.local/wp-content/themes/aicerts/images/Percent.svg" alt="Mail">
                                  <div><h3>% difference</h3><span>182</span></div>
                                </div>
                            </div>
                        </div>
                      </div>

                  </div>

                  
                  <div class="owl-carousel owl-theme tmv2-tm-small">
                     <div class="card">
                        <p>Happy to share I've completed the AI+ Executive Certification from AI CERTs! This program has sharpened my skills in strategic AI application + implementation, further equipping me to lead AI-driven organizational transformation.</p>
                        <div class="tmv2-starts">
                          <span><img class="" alt="" src="<?php echo esc_url(get_template_directory_uri() . "/images/star-filled.svg"); ?>"></span>
                          <span><img class="" alt="" src="<?php echo esc_url(get_template_directory_uri() . "/images/star-filled.svg"); ?>"></span>
                          <span><img class="" alt="" src="<?php echo esc_url(get_template_directory_uri() . "/images/star-filled.svg"); ?>"></span>
                          <span><img class="" alt="" src="<?php echo esc_url(get_template_directory_uri() . "/images/star-filled.svg"); ?>"></span>
                          <span><img class="" alt="" src="<?php echo esc_url(get_template_directory_uri() . "/images/star-blank.svg"); ?>"></span>
                        </div>
                        <div class="tmv2-small-user">
                          <img class="" alt="" src="<?php echo esc_url(get_template_directory_uri() . "/images/Carolina.jpg"); ?>">
                          <h4>John Den <span>Student</span></h4>
                        </div>
                     </div>
                  </div>

                  <div class="text-center mt-4">
                  <a href="#" class="btn btn-primary">Explore Certifications</a>
                  </div>
                  
    
                </div>

              <div class="tab-pane fade" id="tab2" role="tabpanel" >
                2
              </div>

              <div class="tab-pane fade" id="tab3" role="tabpanel" >
                3
              </div>

            </div>

         </div>
      </div> 
    </div> 
  </div> 
</section>  

<section class="tmv2-partners">
  <div class="container maxwidth">
    Partners Section will go here from detail page
  </div>
</section>

<section class="share-exp-section">
  <div class="container maxwidth">
    <div class="row">
      <div class="col-12">

      <div class="card exp-card">

          <div class="exp-gform-cnt">
            gform will come here
          </div>

          <div class="exp-img-cnt">
          <img class="stars-animated" alt="" src="<?php echo esc_url(get_template_directory_uri() . "/images/stars-animated.gif"); ?>">
            <img class="" alt="" src="<?php echo esc_url(get_template_directory_uri() . "/images/share-exp-img.png"); ?>">
          </div>

        </div>
      </div>
    </div>
  </div>
</section>


<section class="tmv2-cta-section">
        <div class="container">
            <div class="happy_to_help_wrap">
                <div class="row align-items-end">
                    <div class="col-md-5">
                        <div class="happy_to_help_content">
                            <h2 class="mb-lg-4">Ready to Transform Your Career?</h2>
                            <a href="<?php echo $speak_to_expert_button['url']; ?>" target="_blank" class="btn btn-white">Get Certified Today</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>



</div>


<?php
get_footer();
<?php
   /*
    * Template Name: Certification Detail V4
    * Template Post Type: courses
    */
   get_header();
   global $post;
   $post_id = $post->ID;
   $course_tagline = get_post_meta($post_id, 'course_tagline', true);
   $about_certification = get_post_meta($post_id, 'about_certification', true);
   $featured_img_url = get_the_post_thumbnail_url($post->ID, 'thumbnail');
   $buynowlink = get_post_meta($post_id, 'by_now_url', true);
   $downloadblueprintlink = get_field('download_blueprint_url');
   $findapartner =  get_field('find_partner_url');
   $section_menu = get_field('section_menu');
   $prerequisites_new = get_field('prerequisites_new');
   $exam_details = get_field('exam_details');
   $modules = get_post_meta($post_id, 'modules', true);
   $examination = get_post_meta($post_id, 'examination', true);
   $examination_time = explode(",", get_post_meta($post_id, 'examination_time', true));
   $passing_score = get_post_meta($post_id, 'passing_score', true);
   $course_modules = get_field('certification_modules');
   $what_will_you_learn = get_field('what_will_you_learn');
   $what_will_you_learn_image = $what_will_you_learn['what_will_you_learn_image'];
   $learn_sections = $what_will_you_learn['learn_sections'];
   $prerequisites = get_field('prerequisites');
   //$form_shortcode = '[gravityform id="1" title="true" ajax="true"]';
   $form_shortcode = '[gravity_form_by_name name="Request A Training"]';
   include_once get_template_directory() ."/template-parts/formpopup.php";
   $key_benefits_heading = get_field('key_benefits_heading');
   $key_benefits_video = get_field('key_benefits_video');
   $key_benefits_content = get_field('key_benefits_content');
   $key_benefits_points = get_field('key_benefits_points');
   $eligibility_course_heading = get_field('eligibility_course_heading');
   $eligibility_course_content = get_field('eligibility_course_content');
   $check_now_button = get_field('check_now_button');
   $eligibility_course_image = get_field('eligibility_course_image');
   $median_salaries = get_field('median_salaries');
   $with_ai_skills = get_field('with_ai_skills');
   $difference = get_field('difference');
   $learners_box = get_field('testimonials',1262);
   $see_more_learners = get_permalink(1262);
   $get_certified_heading_course = get_field('get_certified_heading_course');
   $get_certified_content_course = get_field('get_certified_content_course');
   $get_certified_button_course = get_field('get_certified_button_course');
   $exam_detail_heading = get_field('exam_detail_heading');
   $exam_detail_image = get_field('exam_detail_image');
?>
<div class="middle-section">
   <!-- InstanceBeginEditable name="MainContent" -->
   <div class="inner-page certification-page">
      <!-- Title subtitle section Start -->
      <section class="cert-spec-section listing-pages">
         <div class="container maxwidth common-cnt">
            <div class="row flex-row-reverse">
              
               <?php if(!empty($featured_img_url)) : ?>  
               <div class="col-md-4 col-lg-4 ps-lg-5">
                  <div class="sidebar-thumb-new thumbnail-visible">                         
                     <img class="badge-img" src="<?php echo $featured_img_url; ?>" />
                  </div>
               </div>
               <?php endif; ?>
			    <div class="col-xl-8 col-lg-8 col-md-8">
                  <div class="" data-aos="fade-down" data-aos-duration="1000">                              
                     <h1 class="certification-title"> <?php echo get_the_title($post_id); ?></h1>
                     <small class="mb-3 mb-xl-5">
                        <?php if (!empty($course_tagline)) {
                        echo $course_tagline;
                     } ?>
                     </small>
                     <p class="mb-5 pe-xl-5"><?php echo $about_certification; ?></p>
                     <?php if( $buynowlink ): ?>   
                        <a href="<?php echo $buynowlink['url'] ?>" target="<?php echo $buynowlink['target']; ?>" class="btn btn-primary btn-lg me-lg-2">
                     <?php /* if( $buynowlink['title'] ): ?>
                        <?php echo $buynowlink['title']; ?>
                     <?php else: ?>
                        Buy Now 
                     <?php endif; */?>
                        Buy Exam Bundle
                        </a>
                     <?php endif; ?>   
                     <?php /* if( $downloadblueprintlink ): ?>   
                        <a href="<?php echo $downloadblueprintlink['url'] ?>"  class="btn btn-primary btn-lg me-lg-2" download>
                        <?php echo $downloadblueprintlink['title'] ?>
                        </a>
                     <?php endif; */?>
                     <?php if( $downloadblueprintlink ): ?>   
                        <a href="<?php echo $downloadblueprintlink ?>" class="btn btn-primary btn-lg me-lg-2" download>
                           Download Blueprint
                        </a>
                     <?php endif;?>
                     <a href="<?php echo site_url();?>/find-a-training-partner/" class="btn btn-primary btn-lg me-lg-2">Find a Training Partner</a>
                     <?php /* if( $findapartner ): ?> 
                        <a href="<?php echo $findapartner['url']; ?>" target="<?php echo $findapartner['target']; ?>" class="btn btn-primary btn-lg me-lg-2">
                        <?php //echo $findapartner['title']; ?>
                        </a>
                     <?php endif; */ ?> 
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Title subtitle section End -->
      <section class="indextabs">
         <div class="container maxwidth">
            <div class="row">
               <div class="col-lg-12 common-cnt py-0">
                  <div class="d-flex justify-content-between">
                  <ul>
                     <?php if( $key_benefits_video ): ?> 
                     <li><a href="#tabKeyBenefits">Key Benefits</a></li>
                     <?php endif; ?>
                     <li><a href="#tabPrerequesites">Prerequisites</a></li>
							<li><a href="#tabExamDetails">Exam Details</a></li>
							<li><a href="#tabModules">Modules</a></li>
							<li><a href="#tabSkills">Skills</a></li>
							<li><a href="#tabOpportunities">Opportunities</a></li>
                     <?php if( have_rows('faqs') ): ?> 
							<li><a href="#tabFAQs">FAQs</a></li>
                     <?php endif; ?>
                  </ul>
                  <?php /*
                  <!-- <?php if( $buynowlink ): ?>   
                     <a href="<?php echo $buynowlink['url'] ?>" class="btn btn-primary">
                        Buy Now
                     </a>
                  <?php endif;?> --> */ ?>
                  </div>
               </div>
               
            </div>
         </div>
      </section>
      <?php if($key_benefits_video): ?>
      <!-- KeyBenefits Start-->
      <section class="KeyBenefits dark_bg pt-5 pb-5 KeyBenefits_v2" id="tabKeyBenefits">
           <div class="dark_bg pt-lg-5 pb-lg-5">
            <div class="container maxwidth common-cnt">
               <div class="row gy-4 gx-5">
                <div class="col-12">
                  <div class="section_header pb-1">
                     <?php if( $key_benefits_heading ): ?> 
                        <h2 class="mb-lg-3"><?php echo $key_benefits_heading; ?></h2>
                     <?php endif; ?>
                     <?php if( $key_benefits_content ): ?> 
                        <p><?php echo $key_benefits_content; ?></p>
                     <?php endif; ?>
                  </div>
                </div>
                  <div class="col-lg-12">
                     <div class="benefits_video">
                        <?php echo $key_benefits_video; ?>
                        <?php /*
                        <!-- <iframe width="853" height="480" src="https://www.youtube.com/embed/zvXA5cH1CVA" title="Introduction to AI+ Executive™ Certification" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/KeyBenefits2.png" class="w-100"  alt=""/> 
                           <div class="play_btn">
                              <img src="<?php echo get_template_directory_uri(); ?>/images/play-button1.png" alt=""/>
                              <span>Play Video</span> 
                           </div> --> */ ?>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="row gy-4">
                        <?php if( $key_benefits_points ): ?>
                           <?php foreach ($key_benefits_points as $ker_points): ?>
                           <div class="col-lg-6 col-md-6 col-12">
                              <div class="keycard">
                                 <?php if( $ker_points['key_benefits_icon'] ): ?>
                                    <div class="icon_key mb-3"> <img src="<?php echo $ker_points['key_benefits_icon']; ?>" alt=""/></div>
                                 <?php endif; ?>
								 <div>
                                 <?php if( $ker_points['key_points'] ): ?>
                                    <h5><?php echo $ker_points['key_points']; ?></h5>
                                 <?php endif; ?>
                                 <?php if( $ker_points['key_points_detail'] ): ?>
                                    <p><?php echo $ker_points['key_points_detail']; ?></p>
                                 <?php endif; ?>
								 </div>
                              </div>
                           </div>
                           <?php endforeach; ?>
                        <?php endif; ?>
                     </div>
                  </div>
               </div>
            </div>          
           </div>          
      </section><!-- KeyBenefits End-->
      <?php endif; ?>
      <?php if( $prerequisites ): 
      $prerequisitesfield = get_field_object('prerequisites');
      $prerequisites_title = $prerequisitesfield['label'];
      ?>
      <section class="cmn-section pre-section" id="tabPrerequesites">
         <div class="container maxwidth">
            <div class="row">
               <div class="col-lg-12 common-cnt">
                  <h2 class="mb-4"><?php echo $prerequisites_title; ?></h2>
                  <?php echo $prerequisites; ?>
               </div>
            </div>
         </div>
      </section>
      <?php endif; ?>
      <section class="cmn-section examdetail" id="tabExamDetails">
     		<div class="container common-cnt maxwidth">
				<div class="row g-0 gx-lg-5">
					<div class="col-lg-12">
               <?php if( $exam_detail_heading ): ?>
						<h2 class="mb-lg-4"><?php echo $exam_detail_heading; ?></h2>
               <?php else: ?>
                  <h2 class="mb-lg-4">Exam Details</h2>
               <?php endif; ?>
				  </div>
					<div class="col-xl-6">
               <?php if( $exam_detail_image ): ?>
						<img src="<?php echo $exam_detail_image['url']; ?>" class="w-100"  alt="<?php echo $exam_detail_image['title']; ?>"/> 
               <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/exam-detail-img.jpg" class="w-100"  alt=""/> 
               <?php endif; ?>
					</div>
					<div class="col-xl-6">
						<div class="row exam-cards">
							<div class="col-xl-6 col-lg-3 col-md-6 mb-4 col-6">
                        <div class="card">
                           <h3>Modules<span><?php echo $modules; ?></span></h3>
                        </div>
                     </div>
							<div class="col-xl-6 col-lg-3 col-md-6 mb-4 col-6">
                        <div class="card">
                           <h3>Examination<span><?php echo $examination; ?></span></h3>
                        </div>
                     </div>
							<div class="col-xl-6 col-lg-3 col-md-6 mb-4 col-6">
                        <div class="card">
                           <?php if( isset($examination_time[1]) ): ?>
                           <h3><?php echo $examination_time[0]; ?><span><?php echo $examination_time[1]; ?></span></h3>
                           <?php endif; ?>
                           <!-- <h3><?php echo $examination_time[0]; ?><span><?php echo $examination_time[1]; ?></span></h3> -->
                        </div>
                     </div>
							<div class="col-xl-6 col-lg-3 col-md-6 mb-4 col-6">
                        <div class="card">
                           <h3>Passing Score<span><?php echo $passing_score; ?></span></h3>
                        </div>
                     </div>
						</div>
					</div>
			  </div>	
			</div>
     </section>	 
      <section class="cmn-section" id="tabModules">
         <div class="container common-cnt maxwidth">
            <div class="row">
               <div class="col-lg-12">
                  <h2 class="mb-4">Certification Modules</h2>
                  <div class="accordion home-accordion" id="regularAccordionRobots">
                     <?php
                        if ($course_modules) :
                           $index = 0;
                              foreach ($course_modules as $module) :
                                    $module_title = $module['certification_module_title'];
                                    $module_description = $module['certification_module_description'];
                                    ?>
                     <div class="accordion-item">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#UnderstandingAI<?php echo $index; ?>" aria-expanded="false"> 
                              <?php echo $module_title; ?>                                      
                           </button>
                        <div id="UnderstandingAI<?php echo $index; ?>" class="accordion-collapse collapse">
                           <div class="accordion-body pt-2">
                              <?php echo $module_description; ?>
                           </div>
                        </div>
                     </div>
                     <?php
                        $index++;
                        endforeach;
                        endif;
                     ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      

      <section class="cmn-section youlearn dark_bg" id="tabSkills">
         <div class="container maxwidth">
            <div class="row flex-row-reverse">
            <?php /*
            <!--div class="col-lg-6 mb-4 mb-md-0 mb-lg-0">
                  <?php if(!empty($what_will_you_learn_image)) : ?>
                     <img class="w-100" src="<?php echo $what_will_you_learn_image; ?>" />
                  <?php endif; ?>
               </div-->  
            */ ?>            
            <div class="col-lg-12">
                  <?php if( $learn_sections ): ?> 
                     <div class="row skills-section px-4 common-cnt">
                     <div class="col-lg-12">
                        <h2>What Will You Learn?</h2>
                     </div>
                        <?php foreach ($learn_sections as $learn_section):
                           $learn_icon = $learn_section['learn_icon'];
                           $learn_name = $learn_section['learn_name'];
                           $learn_text = $learn_section['learn_text'];
                        ?> 
                        <div class="col-xl-6 col-lg-6 col-md-6 mb-4">
                           <?php if( $learn_icon ): ?>
                              <img src="<?php echo $learn_icon;?>" alt="Identity Icon" class="float-start mt-2" />
                           <?php else: ?>
                              <img src="<?php echo get_template_directory_uri().'/images/check-mark-icon.svg'; ?>" alt="Identity Icon" class="float-start mt-2" />
                           <?php endif;?>
                           <div class="skill-cnt">
                              <?php if( $learn_name ): ?>
                                 <h4><?php echo $learn_name;?></h4>
                              <?php endif;?>
                              <?php if( $learn_text ): ?>
                                 <p><?php echo $learn_text;?></p>
                              <?php endif;?>
                           </div>
                        </div>
                        <?php endforeach; ?>
                     </div>
                  <?php endif; ?>
               </div>           
               
            </div>
         </div>
      </section>
      <?php /*
      <!-- <section class="eligibility">
     		<div class="container">
				<div class="row">
               <div class="col-lg-6 pt-lg-5 pb-lg-5">
                  <div class="eligiblity_content  p-4 p-lg-5">
                     <?php if($eligibility_course_heading) :  ?>
                        <h2><?php echo $eligibility_course_heading; ?></h2>
                     <?php endif; ?>
                     <?php if($eligibility_course_content) :  ?>
                        <p><?php echo $eligibility_course_content; ?></p>
                     <?php endif; ?>
                     <?php if($check_now_button) :  ?>
                        <a href="<?php echo $check_now_button['url']; ?>" class="btn btn-primary mt-lg-4"><?php echo $check_now_button['title']; ?></a>
                     <?php endif; ?>
                  </div>               
               </div>
               <div class="col-lg-6">
                  <div class="eligiblity_img">
                  <?php if($eligibility_course_image) :  ?>
                     <img src="<?php echo $eligibility_course_image; ?>" class="w-100"  alt=""/> 
                  <?php else: ?>
                     <img src="<?php echo get_template_directory_uri(); ?>/images/future-artificial-intelligence-robot.png" class="w-100"  alt=""/> 
                  <?php endif; ?>
                  </div>
               </div>
            </div>
         </div>                            
      </section>                              --> */ ?>

      <?php /* <!-- Industry Opportunities after Course Completion --> */ ?>
      <section class="cmn-section opportunities-slide" id="tabOpportunities">
         <div class="container common-cnt maxwidth">
            <div class="row">
               <div class="col-lg-12">
                  <h2 class="mb-4">Industry Opportunities after Course Completion</h2>
                  <?php if( $median_salaries && $with_ai_skills && $difference ): ?>
                  <div class="CourseCompletion mt-5">
                    <div class="row gy-4 gy-lg-0">
                        <div class="col-lg-4 col-md-4">
                            <div class="CourseCard text-center">
                                
                                <div class="iconwithprice">
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/SalaryMail.svg" alt="Mail"/> 
                                 <div>
									<h3>Median Salaries</h3>
								 
								 <?php if( $median_salaries ): ?>
                                    <span><?php echo $median_salaries; ?></span>
                                 <?php endif; ?>
								 </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="CourseCard text-center">
                                
                                <div class="iconwithprice">
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/salaryadd.svg" alt="Mail"/> 
								 <div>
								 <h3>With AI skills</h3>
                                 <?php if( $with_ai_skills ): ?>
                                    <span><?php echo $with_ai_skills; ?></span>
                                 <?php endif; ?>
                                </div>
								</div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="CourseCard text-center">
                                
                                <div class="iconwithprice">
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/Percent.svg" alt="Mail"/>
								 <div>
								 <h3>% difference</h3>
                                 <?php if( $difference ): ?>
                                    <span><?php echo $difference; ?></span>
                                 <?php endif; ?>
                                </div>
								</div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php if( have_rows('industry_opportunities') ): ?> 
                  <div class="owl-carousel owl-theme opp-slider">
                     <?php while( have_rows('industry_opportunities') ): the_row(); 
                        $opportunities_icon = get_sub_field('opportunities_icon');
                        $opportunities_title = get_sub_field('opportunities_title');
                        $opportunities_text = get_sub_field('opportunities_text');
                        ?> 
                     <div class="card">
                        <?php if( $opportunities_icon ): ?>
                           <img src="<?php echo $opportunities_icon ?>" alt="Opportunity Icon">
                        <?php else: ?>
                           <img src="<?php echo get_template_directory_uri().'/images/icon-productivity.svg'; ?>" alt="Identity Icon" class="float-start mt-2" />
                        <?php endif; ?>
                        <h5><?php echo $opportunities_title ?></h5>
                        <p><?php echo $opportunities_text ?></p>
                     </div>
                     <?php endwhile; ?> 
                  </div>
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </section>

      <section class="cmn-sectio TenXYourGrowth mb-5 pb-3">
         <div class="container">
            <div class="section_header mb-5">
             <h2>Industry Opportunities after Course Completion</h2>
             <h3>AI Executive Career Advancement – <span class="primary_color"> 10X Your Growth</span></h3>
            </div>
            <div class="row g4 flex-row-reverse">
               <div class="col-lg-5">
                  <div class="site-image-card">
                  <img class="w-100" src="<?php echo get_template_directory_uri().'/images/growth.png'; ?>" alt="Growth" />
                  </div>
               </div>
               <div class="col-lg-7">
                  <div class="MD-content">
                     <h5>Market Demand for AI Executives</h5>
                     <ul>
                        <li>AI adoption is rapidly increasing across industries, and organizations need leaders who can drive AI-powered business strategies.</li>
                        <li>Studies show that 75% of enterprises are actively hiring AI-skilled executives to lead digital transformation initiatives.</li>
                        <li>High-Growth Areas: AI Strategy, AI Governance, AI Ethics, and Data-Driven Decision Making.</li>
                        <li>The demand for AI executives is outpacing supply, making this a high-impact career move.</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section><!-- 10X Growth -->
        
      <section class="cmn-sectio TopHiringIndustries mb-5 pb-3">
         <div class="container">
            <div class="section_header mb-4">
               <h2>Top Hiring Industries for <span class="primary_color">AI</span> Executives</h2>
            </div>
            <div class="row g-4 more-spacing_xy">
               <div class="col-lg-4 col-md-6">
                  <div class="icon_with_text-card text-center h-100">
                     <img src="<?php echo get_template_directory_uri().'/images/FinanceBanking.svg'; ?>" alt="FinanceBanking" />
                     <h3 class="mb-2 mt-2">Finance & Banking </h3>
                     <p class="mb-0">AI-powered risk assessment, fraud detection, algorithmic trading.</p>
                  </div>
               </div><!-- IconCard -->
               <div class="col-lg-4 col-md-6">
                  <div class="icon_with_text-card text-center h-100">
                     <img src="<?php echo get_template_directory_uri().'/images/Healthcare.svg'; ?>" alt="Healthcare" />
                     <h3 class="mb-2 mt-2">Healthcare </h3>
                     <p class="mb-0">AI-driven patient management, predictive analytics, automation of workflows.</p>
                  </div>
               </div><!-- IconCard -->
               <div class="col-lg-4 col-md-6">
                  <div class="icon_with_text-card text-center h-100">
                     <img src="<?php echo get_template_directory_uri().'/images/Manufacturing.svg'; ?>" alt="Manufacturing" />
                     <h3 class="mb-2 mt-2">Manufacturing </h3>
                     <p class="mb-0">AI-powered automation, robotics, quality control.</p>
                  </div>
               </div><!-- IconCard -->
               <div class="col-lg-4 col-md-6">
                  <div class="icon_with_text-card text-center h-100">
                     <img src="<?php echo get_template_directory_uri().'/images/RetailE-commerce.svg'; ?>" alt="RetailE-commerce" />
                     <h3 class="mb-2 mt-2">Retail & E-commerce</h3>
                     <p class="mb-0">AI for demand forecasting, personalized customer experience, chatbot automation.</p>
                  </div>
               </div><!-- IconCard -->
               <div class="col-lg-4 col-md-6">
                  <div class="icon_with_text-card text-center h-100">
                     <img src="<?php echo get_template_directory_uri().'/images/Government.svg'; ?>" alt="Government" />
                     <h3 class="mb-2 mt-2">Government & Public Sector </h3>
                     <p class="mb-0">AI in smart cities, defense, AI-driven policymaking.</p>
                  </div>
               </div><!-- IconCard -->
               <div class="col-lg-4 col-md-6">
                  <div class="icon_with_text-card text-center h-100">
                     <img src="<?php echo get_template_directory_uri().'/images/Technology.svg'; ?>" alt="Technology" />
                     <h3 class="mb-2 mt-2">IT & Technology</h3>
                     <p class="mb-0">AI for cybersecurity, cloud computing, enterprise AI solutions.</p>
                  </div>
               </div><!-- IconCard -->
            </div>
         </div>                  
      </section> <!-- Top Hiring Industries -->

      <section class="cmn-section dark_bg Learners">
         <div class="container common-cnt">
            <h2 class="mb-5">Hear it from the Learners</h2>
            <div class="row gy-4 gy-lg-0">
            <?php if(($learners_box) && ($i <= 4) ): ?>
                <?php $i=1; foreach($learners_box as $box): ?>
                    <?php if($i <= 4) { ?>
                     <div class="col-lg-3 col-md-6">
                        <div class="Learners_card">
                           <div class="Learners_img">
                              <span class="l_img"><img src="<?php echo $box['employee_photo']; ?>" alt="Icon" /></span>
                              <h6><?php echo $box['employee_name']; ?></h6>
                           </div>
                           <div class="learner_text">
                              <p><?php echo $box['description']; ?></p>
                           </div>
                        </div>
                     </div>
                     <?php } ?>
                  <?php $i++; endforeach; ?>
               <?php endif; ?>
            </div>
            <div class="text-center load_more-btn mt-5">
               <a href="<?php echo $see_more_learners; ?>" class="btn link-primary">Load More</a>
            </div>
         </div>
      </section>
      
      <?php if($get_certified_heading_course): ?>
      <section class="cmn-section DiscoverPrograms">
         <div class="container common-cnt">
            <div class="row align-items-center">
               <div class="col-lg-8 col-mg-8">
                  <div class="section-heading">
                  
                     <h2><?php echo $get_certified_heading_course; ?></h2>
                  
                  <?php if($get_certified_content_course): ?>
                     <p><?php echo $get_certified_content_course; ?></p>
                  <?php endif; ?>
                  </div>
               </div>
               <div class="col-lg-4 col-mg-4">
                  <div class="get_certi">
                  <?php if($get_certified_button_course): ?>
                     <a href="<?php echo $get_certified_button_course['url']; ?>" class="btn btn-primary-white"><?php echo $get_certified_button_course['title']; ?> <img src="<?php echo get_template_directory_uri().'/images/arrow-right-orange.svg'; ?>" alt="Icon" /></a>
                  <?php endif; ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php endif; ?>
      
      <!-- FAQ -->
      
      <section class="cmn-section faqs-slide" id="tabFAQs">
         <div class="container common-cnt max-medium-container">
            <div class="row">
               <div class="col-lg-12">
                  <h2 class="mb-4 mb-lg-5 text-center">Frequently asked questions</h2>
                  <?php if( have_rows('faqs') ): ?>
                     <div class="accordion home-accordion" id="regularAccordionRobots">
                        <?php while( have_rows('faqs') ): the_row(); 
                           $faqnumber = get_sub_field('faq_number');
                           $questions = get_sub_field('questions');
                           $answer = get_sub_field('answer');
                           ?> 
                        <div class="accordion-item">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item<?php echo $faqnumber;?>" aria-expanded="false">
                              <?php echo $questions;?>
                           </button>
                           <div id="item<?php echo $faqnumber;?>" class="accordion-collapse collapse" style="">
                                 <div class="accordion-body">
                                    <p><?php echo $answer;?></p>
                                 </div>
                              </div>             
                        </div>
                        <?php endwhile; ?> 
                     </div>
                     <?php endif; ?>
               </div>
            </div>
         </div>
      </section>
      
      <?php
         $certi_suggestions = get_field('certificate_suggestions');
         if($certi_suggestions) {
      ?>
      <section class="cmn-section CertificateSuggestions dark_bg">
         <div class="container">
            <div class="row">
               <div class="col-lg-7">
                  <div class="section-heading">
                     <h2>Recommended Certifications</h2>
                     <?php if(get_field('certificate_suggestion_description')): ?>
                     <p><?php echo get_field('certificate_suggestion_description'); ?></p>
                     <?php endif; ?>
                  </div>
               </div>
            </div>
            
            <div class="More_Certificate mt-4">
               <div class="owl-carousel owl-theme Certificate_slide">
                  <?php
                     foreach ($certi_suggestions as $certi_sug) {
                        $course_url = get_the_permalink($certi_sug);
                        $thumb_image = get_the_post_thumbnail_url($certi_sug);
                        $title = get_the_title($certi_sug);
                        $title_with_br = preg_replace('/\+ /', '+ <br>', $title);
                  ?>
                     <a href="<?php echo $course_url; ?>" target="_blank">
                        <div class="Certificate_card">
                        <?php if ($thumb_image): ?>
                           <img src="<?php echo $thumb_image; ?>" alt="Certificate"/>
                        <?php else: ?>
                           <img src="<?php echo get_template_directory_uri().'/images/Badge-AI+-Marketing.svg'; ?>" alt="Certificate"/>
                        <?php endif; ?>
                           <h6><?php echo $title_with_br; ?></h6>
                        </div>
                     </a>
                  <?php
                  }
                  wp_reset_postdata();
                  ?>
                 </div>          
            </div>
         </div>
      </section>   
   <?php } ?>
   </div>
   <!-- InstanceEndEditable -->
</div>
<?php
   get_footer();
   ?>
<style>
.owl-nav, .owl-dots {
  display: none;
}
.More_Certificate.show-arrows-more-certificate .owl-nav, .More_Certificate.show-arrows-more-certificate .owl-dots {
  display: block;
}
</style>








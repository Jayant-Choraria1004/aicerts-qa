<?php
   /*
    * Template Name: Certification Detail V3
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
?>
<div class="middle-section">
   <!-- InstanceBeginEditable name="MainContent" -->
   <div class="inner-page certification-page">
      <section class="cert-spec-section listing-pages">
         <div class="container maxwidth">
            <div class="row">
               <div class="col-xl-7 col-lg-8 col-md-12">
                  <div class="common-cnt" data-aos="fade-down" data-aos-duration="1000">                              
                     <h1 class="certification-title"> <?php echo get_the_title($post_id); ?></h1>
                     <small class="mb-3 mb-xl-5">
                        <?php if (!empty($course_tagline)) {
                        echo $course_tagline;
                     } ?>
                     </small>
                     <p class="mb-5 pe-xl-5"><?php echo $about_certification; ?></p>
                     <!-- <?php if( $buynowlink ): ?>   
                        <a href="<?php echo $buynowlink['url'] ?>" class="btn btn-primary btn-lg me-lg-2">
                        Buy Exam Bundle
                        </a>
                     <?php endif;?>    -->
                     <!-- <?php if( $downloadblueprintlink ): ?>   
                        <a href="<?php echo $downloadblueprintlink ?>" class="btn btn-primary btn-lg me-lg-2" download>
                           Download Blueprint
                        </a>
                     <?php endif;?> -->
                        <a href="<?php echo site_url("/find-a-training-partner/"); ?>" class="btn btn-primary btn-lg me-lg-2">
                        Get Satrted
                        </a>
                  </div>
               </div>
               <div class="col-md-5 col-lg-4 ps-md-5">
                  <?php if(!empty($featured_img_url)) : ?>    
                     <div class="sidebar-thumb-new sidebar-thumb-new4">                         
                        <img class="badge-img" src="<?php echo $featured_img_url; ?>" />
                     </div>
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </section>

      <section class="KeyBenefits dark_bg pt-5 pb-5">
           <div class="dark_bg pt-lg-5 pb-lg-5">
            <div class="container">
               <div class="row gy-4 gx-5 align-items-center">
                  <div class="col-lg-4">
                     <div class="section_header pb-1">
                        <h2 class="mb-lg-5">Key Benefits</h2>
                        <p>Fusce quis lectus mauris. Ut eget risus nunc. Etiam placerat efficitur libero ut euismod. Aliquam ut tortor quam. Maecenas tortor lacus, congue sit amet faerat quis dolor. Lorem ipsum dolor sit amet.</p>
                     </div>
                     <div class="benefits_video mt-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/KeyBenefits.png" class="w-100"  alt=""/> 
                           <div class="play_btn">
                              <img src="<?php echo get_template_directory_uri(); ?>/images/play-button1.png" alt=""/>
                              <span>Play Video</span> 
                           </div>
                     </div>
                  </div>
                  <div class="col-lg-8">
                     <div class="row gy-4">
                        <div class="col-lg-6 col-md-6 col-12">
                           <div class="keycard">
                              <div class="icon_key mb-3"> <img src="<?php echo get_template_directory_uri(); ?>/images/value-icon-ai.svg" alt=""/></div>
                              <h5>Strategic AI Insight</h5>
                              <p>Develop a deep understanding of AI technologies and their business applications.</p>
                           </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                           <div class="keycard">
                              <div class="icon_key mb-3"> <img src="<?php echo get_template_directory_uri(); ?>/images/Leadership.svg" alt=""/></div>
                              <h5>Leadership Skills</h5>
                              <p>Enhance your ability to lead AI projects and team effectively.</p>
                           </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                           <div class="keycard">
                              <div class="icon_key mb-3"> <img src="<?php echo get_template_directory_uri(); ?>/images/Practical.svg" alt=""/></div>
                              <h5>Practical Knowledge</h5>
                              <p>Gain hands-on experience with AI tools and frameworks.</p>
                           </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                           <div class="keycard">
                              <div class="icon_key mb-3"> <img src="<?php echo get_template_directory_uri(); ?>/images/Competitive.svg" alt=""/></div>
                              <h5>Competitive Edge</h5>
                              <p>Position yourself at the forefront of AI-driven business transformation.</p>
                           </div>
                        </div>
                        
                     </div>
                  </div>
               </div>
            </div>          
           </div>          
      </section>
      <!-- <section class="indextabs">
         <div class="container maxwidth">
            <div class="row">
               <div class="col-lg-12 common-cnt py-0">
                  <div class="d-flex justify-content-between">
                  <ul>
                     <li><a href="#tabPrerequesites">Prerequisite</a></li>
							<li><a href="#tabExamDetails">Exam Details</a></li>
							<li><a href="#tabModules">Modules</a></li>
							<li><a href="#tabSkills">Skills</a></li>
							<li><a href="#tabOpportunities">Opportunities</a></li>
                     <?php if( have_rows('faqs') ): ?> 
							<li><a href="#tabFAQs">FAQs</a></li>
                     <?php endif; ?>
                  </ul>
                  <?php if( $buynowlink ): ?>   
                     <a href="<?php echo $buynowlink['url'] ?>" class="btn btn-primary">
                        Buy Now
                     </a>
                  <?php endif;?>
                  </div>
               </div>
               
            </div>
         </div>
      </section> -->

      <section class="cmn-section" id="tabModules">
         <div class="container common-cnt maxwidth">
            <div class="row">
               <div class="col-lg-12">
                  <h2 class="mb-4">Course Content</h2>
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

      <!-- <section class="cmn-section pre-section" id="prerequisites">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 common-cnt">
                  <h2 class="mb-4">Prerequisites</h2>
                  <ul>
                     <?php 
                        foreach($prerequisites_new as $prerequisite_n) :
                           if($prerequisites_new) : 
                     ?>
                        <li><?php echo $prerequisite_n['prerequisites_text']; ?></li>
                     <?php
                           endif;
                        endforeach; 
                     ?>
                  </ul>
               </div>
            </div>
         </div>
      </section> -->
      <!-- <section class="cmn-section examdetail" id="tabExamDetails">
         <div class="container common-cnt">
            <div class="row g-0 g-lg-5">
               <div class="col-lg-12">
                  <h2 class="mb-4">Exam Details</h2>
               </div>
               <div class="col-lg-6">
                  <?php if(!empty($exam_details_image)) : ?>
                     <img class="w-100" src="<?php echo $exam_details_image; ?>" />
                  <?php endif; ?>    
               </div>              
               <div class="col-lg-6">
                  <div class="row exam-cards">
                  <?php if(!empty($exam_details_image)) : ?>
                     <?php 
                     foreach($exam_tiles as $exam_tile) :
                        if($exam_tiles) : 
                           ?>
                        <div class="col-xl-6 col-lg-12 col-md-6 mb-4">
                           <div class="card">
                              <h3><?php echo $exam_tile['exam_tile_name']; ?><span><?php echo $exam_tile['exam_tile_content']; ?></span></h3>
                           </div>
                        </div>
                        <?php
                        endif;
                     endforeach; 
                  endif;?>
                  </div>
               </div>
            </div>
         </div>
      </section> -->


      <section class="cmn-section dark_bg">
         <div class="container max-medium-container">
            <div class="row">
               <div class="col-lg-12 common-cnt text-center">
                  <h2 class="mb-4">Career Path</h2>
                  <p>Fusce quis lectus mauris. Ut eget risus nunc. Etiam placerat efficitur libero ut euismod. Aliquam ut tortor quam. Maecenas tortor lacus, congue sit amet faerat quis dolor. Lorem ipsum dolor sit amet.</p>
               </div>
            </div>
            <div class="career_list mt-lg-4">
               <div class="row gy-5 gy-lg-0 gx-5">
                  <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                     <div class="course_card">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Badge-AI+-Marketing.svg" alt=""/>
                        <div class="number_bg">
                           <span>01</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                     <div class="course_card">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Badge-AI+-Finance.svg" alt=""/>
                        <div class="number_bg">
                           <span>02</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                     <div class="course_card">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Badge-AI+-Ethics.svg" alt=""/>
                        <div class="number_bg">
                           <span>03</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                     <div class="course_card">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Badge-AI+-Educator.svg" alt=""/>
                        <div class="number_bg last_bg">
                           <span>04</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>


      <section class="cmn-section pre-section" id="tabPrerequesites">
         <div class="container maxwidth">
            <div class="row">
               <div class="col-lg-12 common-cnt">
                  <h2 class="mb-4">Prerequisite</h2>
                  <?php echo $prerequisites; ?>
               </div>
            </div>
         </div>
      </section>             

      <section class="examdetail mb-5" id="tabExamDetails">
     		<div class="container-fuild">
				<div class="row flex-row-reverse g-0">
					
					<div class="col-xl-6">
                  <div class="exam-detail_full">
						<img src="<?php echo get_template_directory_uri(); ?>/images/exam-detail-img.png" class="w-100"  alt=""/> 
                  </div>
					</div>
					<div class="col-xl-6">
						<div class="row exam-cards p-4 p-lg-5">
                  <div class="col-lg-12">
                        <h2 class="mb-4">Exam Details</h2>
                  </div>
							<div class="col-xl-6 col-lg-3 col-md-6 mb-4">
                        <div class="card">
                           <h3>Module<span><?php echo $modules; ?></span></h3>
                           <div class="exam_icon"> <img src="<?php echo get_template_directory_uri(); ?>/images/exam-icon1.svg" alt=""/></div>
                        </div>
                     </div>
							<div class="col-xl-6 col-lg-3 col-md-6 mb-4">
                        <div class="card">
                           <h3>Examination<span><?php echo $examination; ?></span></h3>
                           <div class="exam_icon"> <img src="<?php echo get_template_directory_uri(); ?>/images/exam-icon2.svg" alt=""/></div>
                        </div>
                     </div>
							<div class="col-xl-6 col-lg-3 col-md-6 mb-4">
                        <div class="card">
                           <?php if( isset($examination_time[1]) ): ?>
                           <h3><?php echo $examination_time[0]; ?><span><?php echo $examination_time[1]; ?></span></h3>
                           <?php endif; ?>
                           <!-- <h3><?php echo $examination_time[0]; ?><span><?php echo $examination_time[1]; ?></span></h3> -->
                           <div class="exam_icon"> <img src="<?php echo get_template_directory_uri(); ?>/images/exam-icon3.svg" alt=""/></div>
                        </div>
                     </div>
							<div class="col-xl-6 col-lg-3 col-md-6 mb-4">
                        <div class="card">
                           <h3>Passing Score<span><?php echo $passing_score; ?></span></h3>
                           <div class="exam_icon"> <img src="<?php echo get_template_directory_uri(); ?>/images/exam-icon4.svg" alt=""/></div>
                        </div>
                     </div>
						</div>
					</div>
			  </div>	
			</div>
     </section>	 
      

     



      <section class="cmn-section youlearn" id="tabSkills">
         <div class="container-fuild">
            <div class="row">
              
               <div class="col-lg-6">
                  <?php if(!empty($what_will_you_learn_image)) : ?>
                     <img class="w-100" src="<?php echo $what_will_you_learn_image; ?>" />
                  <?php endif; ?>
               </div>
               <div class="col-lg-6">
                  <?php if( $learn_sections ): ?> 
                     <div class="row skills-section px-4">
                     <div class="col-lg-12 mb-lg-5">
                        <h2>What will you Learn ?</h2>
                     </div>
                        <?php foreach ($learn_sections as $learn_section):
                           $learn_icon = $learn_section['learn_icon'];
                           $learn_name = $learn_section['learn_name'];
                           $learn_text = $learn_section['learn_text'];
                        ?> 
                        <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
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

      <section class="eligibility">
     		<div class="container-fuild">
				<div class="row">
               <div class="col-lg-6 pt-lg-5 pb-lg-5">
                  <div class="eligiblity_content  p-4 p-lg-5">
                     <h2>Want to check your eligibility to take this course?</h2>
                     <p>Fusce quis lectus mauris. Ut eget risus nunc. Etiam placerat efficitur libero ut euismod. Aliquam ut tortor quam. Maecenas tortor lacus, congue sit amet faerat quis dolor. Lorem ipsum dolor sit amet.</p>
                     <a href="#" class="btn btn-primary mt-lg-4">Check Now</a>
                  </div>               
               </div>
               <div class="col-lg-6">
                  <div class="eligiblity_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/future-artificial-intelligence-robot.png" class="w-100"  alt=""/> 
                  </div>
               </div>
            </div>
         </div>                            
      </section>        
      
      <section class="cmn-section CareerOptions">
       <div class="container max-medium-container">
         <div class="row gy-md-4">
            <div class="col-12">
               <div class="section-heading mb-lg-5">
                  <h2>Career Options</h2>
                  <p>Fusce quis lectus mauris. Ut eget risus nunc. Etiam placerat efficitur libero ut euismod. Aliquam ut tortor quam. Maecenas tortor lacus, congue sit amet faerat quis dolor. Lorem ipsum dolor sit amet.</p>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="option_card job_roles">
                  <h3>Job Roles</h3>
                  <ul>
                     <li>
                        <span class="icon_2arrow"><img src="<?php echo get_template_directory_uri().'/images/Pointer.svg'; ?>" alt="Icon" /></span>
                        <span class="text_point">Executive Leader</span>
                     </li>
                     <li>
                        <span class="icon_2arrow"><img src="<?php echo get_template_directory_uri().'/images/Pointer.svg'; ?>" alt="Icon" /></span>
                        <span class="text_point">Chief Officer</span>
                     </li>
                     <li>
                        <span class="icon_2arrow"><img src="<?php echo get_template_directory_uri().'/images/Pointer.svg'; ?>" alt="Icon" /></span>
                        <span class="text_point">Executive Director</span>
                     </li>
                     <li>
                        <span class="icon_2arrow"><img src="<?php echo get_template_directory_uri().'/images/Pointer.svg'; ?>" alt="Icon" /></span>
                        <span class="text_point">Corporate Strategy Leader</span>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="option_card industry_impact">
                  <h3>Industry Impact</h3>
                  <div class="owl-carousel owl-theme industry-slider">
                     <div class="industry_slide">
                        <p>The AI certification course transformed my career. The hands-on approach and expert guidance were invaluable.</p>
                        <h6>- Natasha Lionhart</h6>
                     </div>
                     <div class="industry_slide">
                        <p>The AI certification course transformed my career. The hands-on approach and expert guidance were invaluable.</p>
                        <h6>- Natasha Lionhart</h6>
                     </div>
                     <div class="industry_slide">
                        <p>The AI certification course transformed my career. The hands-on approach and expert guidance were invaluable.</p>
                        <h6>- Natasha Lionhart</h6>
                     </div>
                  </div>   
                  <div class="quotes_icon">
                   <img src="<?php echo get_template_directory_uri().'/images/quotes.svg'; ?>" alt="Icon" />
                  </div>               
               </div>
            </div>
         </div>
       </div>
      </section>

      <section class="cmn-section dark_bg Learners">
         <div class="container">
            <h2 class="text-center mb-5">Hear it from the Learners</h2>
            <div class="row">
               <div class="col-lg-3 col-md-6">
                  <div class="Learners_card">
                     <div class="Learners_img">
                        <span class="l_img"><img src="<?php echo get_template_directory_uri().'/images/h2_learners-img.jpg'; ?>" alt="Icon" /></span>
                        <h6>Rishi Hirpara</h6>
                     </div>
                     <div class="learner_text">
                        <p>I recently attended a workshop conducted jointly by Indrashil University and AI Certs and earned the AI+Executive™️ Certification. This workshop has enriched me with knowledge about practical AI applications, their ethical considerations, the latest AI trends, AI technologies, strategies, and much more. </p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="Learners_card">
                     <div class="Learners_img">
                        <span class="l_img"><img src="<?php echo get_template_directory_uri().'/images/h2_learners-img2.jpg'; ?>" alt="Icon" /></span>
                        <h6>Kunj Faladu</h6>
                     </div>
                     <div class="learner_text">
                        <p>I'm thrilled to share that I have earned the AI+ Executive certification from AI CERTs! This immersive experience has not only enriched my understanding of artificial intelligence but has also fueled my passion for cutting-edge technologies shaping the future. I am excited to bring the power of AI into real-world applications and explore the depths of AI for business innovation and strategic solutions.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="Learners_card">
                     <div class="Learners_img">
                        <span class="l_img"><img src="<?php echo get_template_directory_uri().'/images/h2_learners-img3.jpg'; ?>" alt="Icon" /></span>
                        <h6>Jino Joseph</h6>
                     </div>
                     <div class="learner_text">
                        <p>I recently completed the AI+ Executive course by AI Certs, and I must say it exceeded my expectations. The program provided a thorough understanding of AI fundamentals. I am now well-prepared to navigate and contribute to the dynamic landscape of AI-driven innovation. AI Certs has truly delivered a comprehensive and impactful learning experience.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="Learners_card">
                     <div class="Learners_img">
                        <span class="l_img"><img src="<?php echo get_template_directory_uri().'/images/h2_learners-img4.png'; ?>" alt="Icon" /></span>
                        <h6>Vishvjit Thakar</h6>
                     </div>
                     <div class="learner_text">
                        <p>The AI+ Executive course by AI Certs was really beneficial for me. I learned the basics of AI and learned how AI is used in real-world business situations. It's was not only about technical stuff; it also made me learn the impact of AI business in different sectors. AI Certs made learning AI simple and exciting.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="text-center load_more-btn mt-4">
               <a href="#" class="btn link-primary">Load More<img src="<?php echo get_template_directory_uri().'/images/arrow-right-orange.svg'; ?>" alt="Icon" /></a>
            </div>
         </div>
      </section>

      <section class="cmn-section DiscoverPrograms">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-8 col-mg-8">
                  <div class="section-heading">
                     <h2>Discover Your Ideal Role-Based Certifications and Programs!</h2>
                     <p>Not sure which certifications to go for? Take our quick assessment to discover the perfect role-based certifications and programs tailored just for you.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-mg-4">
                  <div class="get_certi">
                     <a href="#" class="btn btn-primary-white">Get Certified <img src="<?php echo get_template_directory_uri().'/images/arrow-right-orange.svg'; ?>" alt="Icon" /></a>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- Industry Opportunities after Course Completion -->
      <!-- <section class="cmn-section opportunities-slide" id="tabOpportunities">
         <div class="container common-cnt maxwidth">
            <div class="row">
               <div class="col-lg-12">
                  <h2 class="mb-4">Industry Opportunities after Course Completion</h2>
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
      </section> -->
      
      <!-- FAQ -->
     
      <section class="cmn-section faqs-slide" id="tabFAQs">
         <div class="container common-cnt max-medium-container">
            <div class="row">
               <div class="col-lg-12">
                  <h2 class="mb-4 mb-lg-5 text-center">Frequently asked questions</h2>
                     <div class="accordion home-accordion" id="regularAccordionRobots">                   
                        <div class="accordion-item">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item1" aria-expanded="false">
                           Who is this course designed for?
                           </button>
                           <div id="item1" class="accordion-collapse collapse" style="">
                                 <div class="accordion-body">
                                    <p>This course is tailored for business leaders and decision-makers who are looking to understand and strategically leverage artificial intelligence within their organizations.</p>
                                 </div>
                              </div>             
                        </div>                     
                     </div>
                     <div class="accordion home-accordion" id="regularAccordionRobots">                   
                        <div class="accordion-item">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item2" aria-expanded="false">
                           Are there any prerequisites for enrolling in this course?
                           </button>
                           <div id="item2" class="accordion-collapse collapse" style="">
                                 <div class="accordion-body">
                                    <p>There are no strict prerequisites, but a basic understanding of business operations and a keen interest in emerging technologies, particularly artificial intelligence, would be beneficial.</p>
                                 </div>
                              </div>             
                        </div>                     
                     </div>
               </div>
            </div>
         </div>
      </section>

      <section class="cmn-section CertificateSuggestions dark_bg">
         <div class="container">
            <div class="row">
               <div class="col-lg-7">
                  <div class="section-heading">
                     <h2>Certificate Suggestions</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
               </div>
            </div>
            <div class="More_Certificate mt-4">
                 <div class="owl-carousel owl-theme Certificate_slide">
                   <div class="Certificate_card">
                     <img src="<?php echo get_template_directory_uri().'/images/Badge-AI+-Marketing.svg'; ?>" alt="Certificate"/>
                     <h6>AI+ <br>Marketing™</h6>
                   </div>
                   <div class="Certificate_card">
                     <img src="<?php echo get_template_directory_uri().'/images/Badge-AI+-Finance.svg'; ?>" alt="Certificate"/>
                     <h6>AI+ <br>Finance™</h6>
                   </div>
                   <div class="Certificate_card">
                     <img src="<?php echo get_template_directory_uri().'/images/Badge-AI+-Ethics.svg'; ?>" alt="Certificate"/>
                     <h6>AI+ <br>Ethics™</h6>
                   </div>
                   <div class="Certificate_card">
                     <img src="<?php echo get_template_directory_uri().'/images/Badge-AI+-Educator.svg'; ?>" alt="Certificate"/>
                     <h6>AI+ <br>Educator™</h6>
                   </div>
                   <div class="Certificate_card">
                     <img src="<?php echo get_template_directory_uri().'/images/Badge-AI+-Finance.svg'; ?>" alt="Certificate"/>
                     <h6>AI+ <br>Finance™</h6>
                   </div>
                   <div class="Certificate_card">
                     <img src="<?php echo get_template_directory_uri().'/images/Badge-AI+-Finance.svg'; ?>" alt="Certificate"/>
                     <h6>AI+ <br>Finance™</h6>
                   </div>
                   <div class="Certificate_card">
                     <img src="<?php echo get_template_directory_uri().'/images/Badge-AI+-Marketing.svg'; ?>" alt="Certificate"/>
                     <h6>AI+ <br>Marketing™</h6>
                   </div>
                 </div>          
            </div>
         </div>
      </section>
      
   </div>
   <!-- InstanceEndEditable -->
</div>
<?php
   get_footer();
   ?>
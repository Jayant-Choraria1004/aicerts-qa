<?php
   /*
    * Template Name: MycoursenewTemplate
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
                     <?php if( $buynowlink ): ?>   
                        <a href="<?php echo $buynowlink['url'] ?>" class="btn btn-primary btn-lg me-lg-2">
                        Buy Exam Bundle
                        </a>
                     <?php endif;?>   
                     <?php if( $downloadblueprintlink ): ?>   
                        <a href="<?php echo $downloadblueprintlink ?>" class="btn btn-primary btn-lg me-lg-2" download>
                           Download Blueprint
                        </a>
                     <?php endif;?>
                        <a href="<?php echo site_url("/find-a-training-partner/"); ?>" class="btn btn-primary btn-lg me-lg-2">
                        Find a Training Partner
                        </a>
                  </div>
               </div>
               <div class="col-md-5 col-lg-4 ps-md-5">
                  <?php if(!empty($featured_img_url)) : ?>    
                     <div class="sidebar-thumb-new">                         
                        <img class="badge-img" src="<?php echo $featured_img_url; ?>" />
                     </div>
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </section>
      <section class="indextabs">
         <div class="container maxwidth">
            <div class="row">
               <div class="col-lg-12 common-cnt py-0">
                  <div class="d-flex justify-content-between">
                  <ul>
                     <li><a href="#tabPrerequesites">Prerequisites</a></li>
							<li><a href="#tabExamDetails">Exam Details</a></li>
							<li><a href="#tabModules">Modules</a></li>
							<li><a href="#tabSkills">Skills</a></li>
							<li><a href="#tabOpportunities">Opportunities</a></li>
                     <?php if( have_rows('faqs') ): ?> 
							<li><a href="#tabFAQs">FAQs</a></li>
                     <?php endif; ?>
                  </ul>
                  <!-- <?php if( $buynowlink ): ?>   
                     <a href="<?php echo $buynowlink['url'] ?>" class="btn btn-primary">
                        Buy Now
                     </a>
                  <?php endif;?> -->
                  </div>
               </div>
               
            </div>
         </div>
      </section>
      <section class="cmn-section pre-section" id="tabPrerequesites">
         <div class="container maxwidth">
            <div class="row">
               <div class="col-lg-12 common-cnt">
                  <h2 class="mb-4">Prerequisites</h2>
                  <?php echo $prerequisites; ?>
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
      <section class="cmn-section examdetail" id="tabExamDetails">
     		<div class="container common-cnt maxwidth">
				<div class="row g-0 g-lg-5">
					<div class="col-lg-12">
						<h2 class="mb-4 mb-lg-0">Exam Details</h2>
				  </div>
					<div class="col-xl-6">
						<img src="<?php echo get_template_directory_uri(); ?>/images/exam-detail-img.jpg" class="w-100"  alt=""/> 
					</div>
					<div class="col-xl-6">
						<div class="row exam-cards">
							<div class="col-xl-6 col-lg-3 col-md-6 mb-4">
                        <div class="card">
                           <h3>Module<span><?php echo $modules; ?></span></h3>
                        </div>
                     </div>
							<div class="col-xl-6 col-lg-3 col-md-6 mb-4">
                        <div class="card">
                           <h3>Examination<span><?php echo $examination; ?></span></h3>
                        </div>
                     </div>
							<div class="col-xl-6 col-lg-3 col-md-6 mb-4">
                        <div class="card">
                           <?php if( isset($examination_time[1]) ): ?>
                           <h3><?php echo $examination_time[0]; ?><span><?php echo $examination_time[1]; ?></span></h3>
                           <?php endif; ?>
                           <!-- <h3><?php echo $examination_time[0]; ?><span><?php echo $examination_time[1]; ?></span></h3> -->
                        </div>
                     </div>
							<div class="col-xl-6 col-lg-3 col-md-6 mb-4">
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
      <section class="cmn-section examdetail" id="tabSkills">
         <div class="container common-cnt maxwidth">
            <div class="row g-0 row-reverse">
               <div class="col-lg-12">
						<h2>What Will You Learn?</h2>
				   </div>
               <!--div class="col-lg-6">
                  <?php if(!empty($what_will_you_learn_image)) : ?>
                     <img class="w-100" src="<?php echo $what_will_you_learn_image; ?>" />
                  <?php endif; ?>
               </div-->
               <div class="col-lg-12">
                  <?php if( $learn_sections ): ?> 
                     <div class="row skills-section">
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
      <!-- Industry Opportunities after Course Completion -->
      <section class="cmn-section opportunities-slide" id="tabOpportunities">
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
      </section>
      
      <!-- FAQ -->
      <?php if( have_rows('faqs') ): ?>
      <section class="cmn-section faqs-slide" id="tabFAQs">
         <div class="container common-cnt maxwidth">
            <div class="row">
               <div class="col-lg-12">
                  <h2 class="mb-4">FAQs</h2>
                  
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
               </div>
            </div>
         </div>
      </section>
      <?php endif; ?>
   </div>
   <!-- InstanceEndEditable -->
</div>
<?php
   get_footer();
   ?>
<?php
/*
    * Template Name: Certification Detail V6
    * Template Post Type: courses
    */
get_header();

global $post;
$post_id = $post->ID;
$certificate_code = get_post_meta($post_id, 'certificate_code', true);
$course_tagline = get_post_meta($post_id, 'course_tagline', true);
$about_certification = get_post_meta($post_id, 'about_certification', true);
$featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
$buynowlink = get_post_meta($post_id, 'by_now_url', true);
// if (empty($buynowlink)) {
//    $buynowlink = get_field('global_buy_exam_bundle', 'option'); 
// }
$buy_instructor_led_course = get_field('buy_instructor_led_course');
if (empty($buy_instructor_led_course)) {
   $buy_instructor_led_course = get_field('global__buy_instructor_led_course', 'option');
}
$banner_image = get_field('banner_image');
$downloadblueprintlink = get_field('download_blueprint_url');
$download_executive_summary = get_field('download_executive_summary');
$findapartner =  get_field('find_partner_url');
//$section_menu = get_field('section_menu');
//$prerequisites_new = get_field('prerequisites_new');
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
// $form_shortcode = '[gravity_form_by_name name="Request A Training"]';
// include_once get_template_directory() . "/template-parts/formpopup.php";
$certification_video_hide_show = get_field('certification_video_hide_show');
$key_benefits_heading = get_field('key_benefits_heading');
$key_benefits_video = get_field('key_benefits_video');
$key_benefits_video_show_hide = get_field('key_benefits_video_show_hide');
$banner_video = get_field('banner_video');
$key_benefits_content = get_field('key_benefits_content');
$key_benefits_points = get_field('key_benefits_points');
//$eligibility_course_heading = get_field('eligibility_course_heading');
//$eligibility_course_content = get_field('eligibility_course_content');
$check_now_button = get_field('check_now_button');
$eligibility_course_image = get_field('eligibility_course_image');
$median_salaries = get_field('median_salaries');
$with_ai_skills = get_field('with_ai_skills');
$difference = get_field('difference');
//$learners_box = get_field('testimonials', 1262);
//$see_more_learners = get_permalink(13939);
//$see_more_learners = site_url("testimonials");
$get_certified_heading_course = get_field('get_certified_heading_course');
$get_certified_content_course = get_field('get_certified_content_course');
$get_certified_button_course = get_field('get_certified_button_course');
//$exam_detail_heading = get_field('exam_detail_heading');
//$exam_detail_image = get_field('exam_detail_image');
$ai_blockchain_experts_heading = get_field('ai_blockchain_experts_heading');
$ai_blockchain_experts_sub_heading = get_field('ai_blockchain_experts_sub_heading');
$aiblockchainexperts_slider = get_field('aiblockchainexperts_slider');
$supporting_companies_heading = get_field('supporting_companies_heading');
$supporting_companies_subheading = get_field('supporting_companies_subheading');
$supporting_companies_section = get_field('supporting_companies_section');
$expert_leaders_heading = get_field('expert_leaders_heading');
$expert_leaders_subheading = get_field('expert_leaders_subheading');
$expert_leader_slider = get_field('expert_leader_slider');
$recertification_requirements_heading = get_field('recertification_requirements_heading');
$recertification_requirements_content = get_field('recertification_requirements_content');
$exam_description_heading = get_field('exam_description_heading');
$target_candidate = get_field('target_candidate');

$ppc_certifications = get_field('ppc_certification', 'option');
$current_post_id = get_the_ID();
$certification_duration = get_field('certification_duration');
$tools = get_field('tools');
$podcast_audio = get_field('podcast_audio');
$purchase_exam = get_field('purchase_exam');
$at_a_glance_heading = get_field('at_a_glance_heading');
$at_a_glance_overview = get_field('at_a_glance_overview');
$who_should_enroll_heading = get_field('who_should_enroll_heading');
$who_should_enroll_points = get_field('who_should_enroll_points');
$who_should_enroll_image = get_field('who_should_enroll_image');
$ai_network_specialist_heading = get_field('ai_network_specialist_heading');
$ai_network_specialist_sub_heading = get_field('ai_network_specialist_sub_heading');
$ai_network_specialist_points = get_field('ai_network_specialist_points');
$ai_network_specialist_image = get_field('ai_network_specialist_image');
$skills_you_will_gain_heading = get_field('skills_you_will_gain_heading');
$skills_list = get_field('skills_list');
$duration = get_field('duration');
$format = get_field('format');
$delivery_method = get_field('delivery_method');
$exam_blueprint_heading = get_field('exam_blueprint_heading');
$exam_blueprint_content = get_field('exam_blueprint_content');
$exam_blueprint_content_v2 = get_field('exam_blueprint_content_v2');
$whats_included_heading = get_field('what’s_included_heading');
$what_included_list = get_field('what_included_list');
$choose_the_format_heading = get_field('choose_the_format_heading');
$choose_the_format_card = get_field('choose_the_format_card');
?>

<style>
   .hidden-skill {
        display: none;
    }
    .expanded .hidden-skill {
        display: list-item;
    }
.opt_detailsection {margin-top:70px; margin-bottom:70px;}
.opt_detailmain {display:flex; gap:70px;}
.opt_detailsection a.optbtn {background:#CFA935; border-color:#CFA935; font-weight: 500; text-align: center; height: 44px; line-height: 44px; padding: 0 13px; min-width: 150px; border-radius: 0px; color:#fff; display: inline-block; font-size: 16px; margin-right:5px; margin-bottom:15px; white-space: nowrap;}
.opt_detailsection a.optbtn:hover {background:#BA982F; border-color:#BA982F;}
.opt_detail-cnt {flex: 1;}
.opt_detail-cnt small {font-size:18px; font-weight:600; display: block;}
.opt_detail-cnt h1, .opt_detail-cnt small {margin-bottom:24px;}
.opt_detail-cnt p {margin-bottom:36px;}
.opt_detail-cnt h1 {font-weight: 600;}
.opt_detail-img {width: 380px;}
.opt_detail-imgbg {background: url("https://i0.wp.com/www.aicerts.ai/wp-content/themes/aicerts/images/thumb-bg.jpg") no-repeat top #171A24; padding: 80px; background-size: 100%; border-radius: 16px; margin-bottom:20px;}
.opt_detailsection .opt_detail-img a.optbtn {margin-right:0; display:block;}
.custom-ai-text {color:#CFA935;}
p.opt_certificate_code {font-weight:600; color: var(--primary-color); font-size:20px; margin-bottom:24px;} 
p.opt_certificate_duration {font-weight:600; color: var(--primary-color); font-size:18px; text-align:center;}  

@media screen and (max-width:1199px) {
.opt_detail-img {width: 280px;}
.opt_detail-imgbg {padding: 40px;}	
}

@media screen and (max-width:1023px) {
.opt_detail-img {width: 240px;}
}

@media screen and (max-width:767px) {
.opt_detailmain {flex-direction: column-reverse; gap: 20px;}	
.opt_detail-img {width: 100%;}
.opt_detailsection a.optbtn {display: block; margin-bottom: 20px;}
a.optbtn {width: 100%;}   
}
</style>

<div class="middle-section">
   <!-- InstanceBeginEditable name="MainContent" -->
   <div class="inner-page certification-page">
      <!-- Optimized Fold -->
      <section class="opt_detailsection">
         <div class="container">
            <div class="opt_detailmain">
               <div class="opt_detail-cnt readmore-content pre-section">
                  <h1 class="certification-title"> <?php echo get_the_title($post_id); ?></h1>
                  <?php if ($certificate_code): ?>
                     <p class="opt_certificate_code"><i class="fa-solid fa-hashtag"></i> <?php echo $certificate_code; ?></p>
                  <?php endif; ?>
				  <!-- <?php if ($certification_duration): ?>
                     <p class="opt_certificate_code"> Certification Duration: <span class="white_text"><?php echo $certification_duration; ?></span></p>
                  <?php endif; ?> -->
                  <small class="">
                     <?php
                     if (!empty($course_tagline)) {
                        echo $course_tagline;
                     }
                     ?>
                  </small>
                  <!--p class="mb-0 mb-xl-4 readmore-text"><?php echo $about_certification; ?></p-->
                  <?php echo $about_certification; ?>
                  <!-- <button class="readmore-btn mb-4">Read More</button> -->
                  <div class="clear mb-3"></div>
                     
                  <a href="#tabLearning" class="optbtn cmndupbtnlink" id="enroll-now-btn-<?php echo $certificate_code; ?>">
                        Enroll Now<?php //echo $buynowlink['title'] 
                                    ?>
                     </a>
                  <?php if ($buynowlink): ?>
                     <!-- <a href="<?php echo $buynowlink['url'] ?>" target="<?php echo $buynowlink['target']; ?>" class="optbtn cmndupbtnlink">
                        Enroll Now<?php //echo $buynowlink['title'] 
                                    ?>
                     </a> -->
                  <?php endif; ?>


                  <?php if ($buy_instructor_led_course): ?>
                     <a href="<?php echo $buy_instructor_led_course['url']; ?>" target="<?php echo $buy_instructor_led_course['target']; ?>" class="optbtn cmndupbtnlink d-none">
                        <?php echo $buy_instructor_led_course['title']; ?>
                     </a>
                  <?php endif; ?>

                  <?php if ($download_executive_summary):
                     echo do_shortcode("[popup_cta download_field='download_executive_summary' button_text='Download Program Guide' modal_title='Download Program Guide']");
                  endif; ?>
                  
                  <?php if (!in_array($current_post_id, $ppc_certifications)) : ?>
                     <a href="<?php echo site_url(); ?>/find-a-training-partner/" class="optbtn me-lg-2 d-lg-none d-inline-block d-none">Find a Training Partner</a>
                  <?php endif; ?>
               </div>
               <div class="opt_detail-img">
                  <div class="opt_detail-imgbg">
                     <img class="badge-img" src="<?php echo $featured_img_url; ?>" alt="Certification Badge" />
                  </div>
                  <?php if (!in_array($current_post_id, $ppc_certifications)) : ?>
                     <a href="<?php echo site_url(); ?>/find-a-training-partner/" class="optbtn d-none">Find a Training Partner</a>
                  <?php endif; ?>

                  <?php if ($buy_instructor_led_course): ?>
                     <a href="<?php echo $buynowlink['url'] ?>" target="<?php echo $buynowlink['target']; ?>" class="optbtn cmndupbtnlink d-none">
                        Enroll Now<?php //echo $buynowlink['title'] 
                                    ?>
                     </a>
                  <?php endif; ?>
                  <?php if ($purchase_exam): ?>
                     <a href="<?php echo $purchase_exam['url'] ?>" target="<?php echo $purchase_exam['target']; ?>" class="optbtn cmndupbtnlink d-none d-md-block">
                     Purchase Exam
                     </a>
                  <?php endif; ?>
                  <?php 
                     if ($podcast_audio):
                        $podcast_audio_url = $podcast_audio['url'];
                        $podcast_audio_title = $podcast_audio['title'];                     
                        echo do_shortcode('[podcast_player audio_url="'.$podcast_audio_url.'" title="'.$podcast_audio_title.'"]');
                     endif;
                  ?>
				  
                  
               </div>
            </div>
         </div>
      </section>
      <!-- Optimized Fold ends -->
      </div>
      <div class="">
      <section class="indextabs sticky-element">
         <div class="container maxwidth">
            <div class="row">
               <div class="col-lg-12 common-cnt py-0">
                  <div class="d-flex justify-content-between cdv5-indextabs">
                     <ul>
                        <?php if ($at_a_glance_heading): ?>
                           <li><a href="#tabOverview">Overview</a></li>
                        <?php endif; ?>
                        <?php if ($who_should_enroll_heading): ?>
                           <li><a href="#tabOpportunities">Opportunities</a></li>
                        <?php endif; ?>
                        <!-- <?php if ($skills_you_will_gain_heading): ?>
                           <li><a href="#tabSkills">Skills</a></li>
                        <?php endif; ?> -->
                        <?php if ($course_modules): ?>
                           <li><a href="#tabModules">Course Modules</a></li>
                        <?php endif; ?>
                        <?php if ($tools): ?>
                           <li><a href="#tabTools">Tools</a></li>
                        <?php endif; ?>
                        <li><a href="#tabPrerequesites">Prerequisites</a></li>
                        <li><a href="#tabExamdetail">Exam Details</a></li>
                        <li><a href="#tabLearning">Mode of learning</a></li>
                        <li><a href="#tabTestimonials">Testimonials</a></li>
                        <?php if (have_rows('faqs')): ?>
                           <li><a href="#tabFAQs">FAQs</a></li>
                        <?php endif; ?>
                     </ul>
                     <!-- <?php if ($buynowlink): ?>   
                     <a href="<?php echo $buynowlink['url'] ?>" class="btn btn-primary">
                        Buy Now
                     </a>
                  <?php endif; ?> -->
                  </div>
               </div>
            </div>
         </div>
      </section>

      <?php if ($key_benefits_heading): ?>
         <!-- KeyBenefits Start-->
         <section class="common-section KeyBenefits dark_bg KeyBenefits_v2"  id="tabOverview">
            <div class="dark_bg">
               <div class="container maxwidth common-cnt">
                  <div class="row gy-4 gx-5">
                     <div class="col-12">
                        <div class="section_header pb-1">
                           <?php if ($key_benefits_heading): ?>
                              <h2 class="mb-lg-3"><?php echo $key_benefits_heading; ?></h2>
                           <?php endif; ?>
                           <?php if ($key_benefits_points): ?>
                           <div class="items cdv6-whysection">
                              <?php foreach ($key_benefits_points as $ker_points): ?>
                                 <div class="item"><b><?php echo $ker_points['key_points']; ?></b> <?php echo $ker_points['key_points_detail']; ?></div>
                              <?php endforeach; ?>
                           </div>
                           <?php endif; ?>
                        </div>
                     </div>                     
                    
                  </div>
               </div>
            </div>
         </section>
      <?php endif; ?>
	  
      <?php if($at_a_glance_heading): ?>
         <section class="common-section">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12 common-cnt">
                     <h2 class="mb-4"><?php echo $at_a_glance_heading; ?></h2>
                     <?php if($at_a_glance_overview): ?>
                        <div class="Overviewtable">
                           <?php //foreach($at_a_glance_overview as $glance): ?>
                              <div class="Overviewrow"><div>Program Name </div><div><?php echo $at_a_glance_overview['program_name']; ?> </div></div>
                              <div class="Overviewrow"><div>Included </div><div><?php echo $at_a_glance_overview['included']; ?></div></div>
                              <div class="Overviewrow">
                                 <div>Duration </div>
                                 <div>
                                 <?php echo $at_a_glance_overview['duration']; ?>
                                 </div>
                              </div>
                              <div class="Overviewrow"><div>Prerequisites</div><div><?php echo $at_a_glance_overview['prerequisites']; ?></div></div>
                              <div class="Overviewrow"><div>Exam Format </div><div><?php echo $at_a_glance_overview['exam_format']; ?></div></div>
                              <div class="Overviewrow"><div>Delivery</div><div><?php echo $at_a_glance_overview['delivery']; ?></div></div>
                              <div class="Overviewrow"><div>Outcome</div><div><?php echo $at_a_glance_overview['outcome']; ?></div></div>
                           <?php //endforeach; ?>
                        </div>
                     <?php endif; ?>
                  </div>
               </div>
            </div>
         </section>
	   <?php endif; ?>
	   
      <?php if($who_should_enroll_heading): ?>
         <section class="common-section pre-section" id="tabOpportunities">
            <div class="container">
               <div class="row">
                  <div class="col-lg-5">
                     <div class="site-image-card">
                        <?php if($who_should_enroll_image): ?>
                           <img class="br10 mb-3" src="<?php echo $who_should_enroll_image['url']; ?>" alt="<?php echo $who_should_enroll_image['title']; ?>" />
                        <?php else: ?>
                           <img class="br10 mb-3" src="<?php echo get_template_directory_uri(); ?>/images/enroll-img.jpg" alt="Mail" />
                        <?php endif; ?>
                     </div>
                  </div>
                  <div class="col-lg-7 ps-lg-5">
                  <h2><?php echo $who_should_enroll_heading; ?></h2>
                  <?php if($who_should_enroll_points): ?>
                     <ul class="faq-list ms-0">
                        <?php foreach($who_should_enroll_points as $enroll): ?>
                           <li><?php echo $enroll['who_should_enroll_point']; ?></li>
                        <?php endforeach; ?>
                     </ul>
                  <?php endif; ?>
                  </div>
               </div>
            </div>
         </section>
      <?php endif; ?>  
	  
	   <section class="common-section cmn-sliderdots offsetarrow">
         <div class="container common-cnt maxwidth">
            <div class="row">
               <div class="col-lg-12">
                  <h3 class="mb-4 cmntitle">Job Roles & Industry Outlook </h3>
                  
                  <?php if (have_rows('industry_opportunities')): ?>
                     <div class="owl-carousel owl-theme opp-slider">
                        <?php while (have_rows('industry_opportunities')): the_row();
                           $opportunities_icon = get_sub_field('opportunities_icon');
                           $opportunities_title = get_sub_field('opportunities_title');
                           $opportunities_text = get_sub_field('opportunities_text');
                        ?>
                           <div class="card">
                              <?php if ($opportunities_icon): ?>
                                 <img src="<?php echo $opportunities_icon ?>" alt="Opportunity Icon">
                              <?php else: ?>
                                 <img src="<?php echo get_template_directory_uri() . '/images/icon-productivity.svg'; ?>" alt="Identity Icon" class="float-start mt-2" />
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
	  
      <?php if($ai_network_specialist_heading): ?>
	   <section class="common-section pre-section">
         <div class="container">
            <div class="row">               
               <div class="col-lg-7 pe-lg-5">
               <!-- <h3><?php echo $ai_network_specialist_heading; ?></h3> -->
               <h3><?php echo $ai_network_specialist_sub_heading; ?></h3>
               <?php if($ai_network_specialist_points): ?>
                  <ul class="faq-list ms-0">
                  <?php foreach($ai_network_specialist_points as $specialist): ?>
                     <li><?php echo $specialist['ai_network_specialist_point']; ?></li>                  
                     <?php endforeach; ?>
                  </ul>
                  <?php endif; ?>
               </div>
			      <div class="col-lg-5">
                  <div class="site-image-card">
                     <?php if($ai_network_specialist_image): ?>
                        <img class="br10 mb-3" src="<?php echo $ai_network_specialist_image['url']; ?>" alt="<?php echo $ai_network_specialist_image['title']; ?>" />
                     <?php else: ?>
                        <img class="br10 mb-3" src="<?php echo get_template_directory_uri(); ?>/images/enroll-img.jpg" alt="Mail" />
                     <?php endif; ?>
                  </div>
                  
               </div>			   
            </div>
         </div>
      </section>
      <?php endif; ?>
	  
      <?php if($skills_you_will_gain_heading): ?>
	  <section class="common-section" id="tabSkills">
         <div class="container">
            <div class="row">
				<div class="col-12">
				<h3 class="mb-4 cmntitle"><?php echo $skills_you_will_gain_heading; ?></h3>                  
            <?php if($skills_list): ?>
				<div class="skillspillsmain">
				   <ul class="skillspills">	
               <?php foreach($skills_list as $index => $skill): ?>			
                  <li class="<?= ($index >= 3) ? 'hidden-skill' : ''; ?>"><?php echo $skill['skill']; ?></li>
                  <?php endforeach; ?>
               </ul>	
               <?php if (count($skills_list) > 3): ?>
                  
                  <button class="readmore1-btn skill">+ More</button>
               <?php endif; ?>
			   </div>
            <?php endif; ?>
				</div>
            </div>
         </div>
      </section> 
      <?php endif; ?>
	  
<section class="common-section h2_faq p-0" id="tabModules">
         <div class="container common-cnt">
            <div class="row">
               <div class="col-lg-12">
                  <h3 class="mb-4 cmntitle"> What You'll Learn </h3>
               </div>
               <div class="col-lg-12">
                  <div class="accordion" id="regularAccordionRobots">
                     <?php
                     if ($course_modules) :
                        $index = 0;
                        foreach ($course_modules as $module) :
                           $module_title = $module['certification_module_title'];
                           $content = $module['certification_module_description'];
                           $module_description = preg_replace('/<a[^>]+href=["\'](https?:\/\/www\.youtube\.com\/watch\?v=[^"\']+)["\'][^>]*>.*?<\/a>/', '', $content);
                           //$module_description = $module['certification_module_description'];
                     ?>
                           <div class="accordion-item">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#UnderstandingAI<?php echo $index; ?>" aria-expanded="false">
                                 <?php echo $module_title; ?>
                              </button>
                              <div id="UnderstandingAI<?php echo $index; ?>" class="accordion-collapse collapse">
                                 <div class="accordion-body ps-0 pb-2">
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
               <?php /* <!-- <div class="col-lg-6">
                  <div class="benefits_video ps-lg-5">
                     <?php //echo $key_benefits_video; 
                     ?>
                     <iframe id="youtube-video" width="853" height="480" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                  </div>
               </div> --> */ ?>
            </div>
         </div>
      </section>
	  
	  <?php if ($tools): ?>
         <section class="cmn-section pt-0" id="tabTools">
            <div class="container common-cnt maxwidth">
               <h3 class="mb-4 cmntitle">Tools You’ll Master</h3>
               <div class="row">
                  <div class="col-12">
                     <div class="toolsrow">
                        <?php foreach ($tools as $tool):
                           $taxonomy = 'course-tool';
                           $toolimg = get_field('tool_image', $taxonomy . '_' . $tool);
                           $term = get_term($tool, $taxonomy);
                           $term_name = $term->name;
                        ?>
                           <div class="toolcard">
                              <img src="<?php echo $toolimg; ?>" alt="Tool <?php echo $term_name; ?>" loading="lazy" />
                              <p class="mb-0 white_text"><?php echo $term_name; ?></p>
                           </div>
                        <?php endforeach; ?>
                     </div>
                  </div>
               </div>
         </section>
      <?php endif; ?>
	  
      <?php if ($prerequisites):
         $prerequisitesfield = get_field_object('prerequisites');
         $prerequisites = get_field('prerequisites');
         $prerequisites_title = $prerequisitesfield['label'];
      ?>
         <section class="common-section pre-section" id="tabPrerequesites">
            <div class="container maxwidth">
               <div class="row">
                  <div class="col-lg-12 common-cnt">
                     <h2 class="mb-4"><?php echo $prerequisites_title; ?></h2>
                     <div class="cdv6-whysection">
                     <?php echo $prerequisites; ?>
                     </div>
                     <!-- <div class="cdv6-whysection">
                        <div class="item"><b>Rising Industry Demands:</b> Networking professionals must meet growing expectations for efficiency, security, and performance.</div>
                        <div class="item"><b>AI-Powered Solutions:</b> AI+ Network™ equips you with skills to optimize network operations and automate tasks.</div>
                        <div class="item"><b>Enhanced Security:</b> Learn AI-driven threat detection to strengthen network defenses.</div>
                        <div class="item"><b>Rising Industry Demands:</b> Networking professionals must meet growing expectations for efficiency, security, and performance.</div>
                        <div class="item"><b>AI-Powered Solutions:</b> AI+ Network™ equips you with skills to optimize network operations and automate tasks.</div>
                        <div class="item"><b>Enhanced Security:</b> Learn AI-driven threat detection to strengthen network defenses.</div>
                        <div class="item"><b>AI-Powered Solutions:</b> AI+ Network™ equips you with skills to optimize network operations and automate tasks.</div>
					      </div> -->
                  </div>
               </div>
            </div>
         </section>
      <?php endif; ?>

      <?php if ($recertification_requirements_heading): ?>
         <section class="cmn-section pb-0">
            <div class="container common-cnt maxwidth">
               <div>
                  <h3 class="cmntitle"><?php echo $recertification_requirements_heading; ?></h3>
                  <?php echo $recertification_requirements_content; ?>
               </div>
            </div>
         </section>
      <?php endif; ?>
      <?php if ($exam_description_heading): ?>
         <section class="">
            <div class="container common-cnt maxwidth">
               <div class="ExamDescription">
                  <h3 class="mb-3 cmntitle"><?php echo $exam_description_heading; ?></h3>
                  <h3 class="mb-4"></h3>
                  <?php if ($target_candidate): ?>
                     <div class="table-responsive">
                        <table class="table table-bordered">
                           <!--tr>
                     <th>Target Candidate</th>
                     <th></th>
                  </tr-->
                           <?php foreach ($target_candidate as $candidate): ?>
                              <tr>
                                 <td><?php echo $candidate['target_candidate_heading']; ?></td>
                                 <td>
                                    <?php echo $candidate['target_candidate_content']; ?>
                                 </td>
                              </tr>
                           <?php endforeach; ?>
                        </table>
                     </div>
                  <?php endif; ?>
               </div>
            </div>
         </section>
      <?php endif; ?>
      <?php if ($certification_video_hide_show == 1): ?>
      <section class="cmn-section half-width" id="tabModules">
         <div class="container common-cnt maxwidth">
            <div class="row">
               <div class="col-lg-12">
                  <h3 class="mb-2 mb-lg-4 cmntitle">Certification Modules</h3>
               </div>
               <div class="col-lg-6 mb-md-4">
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
                                 <div class="accordion-body pt-2 video-acrdn">
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
               <div class="col-lg-6">
                  <div class="benefits_video ps-lg-5">
                     <?php //echo $key_benefits_video; 
                     ?>
                     <iframe id="youtube-video" width="853" height="480" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" loading="lazy" allowfullscreen></iframe>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php endif; ?>
      
	  <section class="common-section"  id="tabExamdetail">
		<div class="container common-cnt">
		   
			  <h3 class="cmntitle mb-4">Exam Details</h3>
			  <div class="edcardsmain mb-4">
				<div class="edcardcol">
					<h3 class="primary_color">Duration</h3>
					<h4><?php echo $duration; ?></h4>
				</div>
				<div class="edcardcol">
					<h3 class="primary_color">Passing Score</h3>
					<h4><?php echo $passing_score; ?></h4>
				</div>
				<div class="edcardcol">
					<h3 class="primary_color">Format</h3>
					<h4><?php echo $format; ?></h4>
				</div>
				<div class="edcardcol">
					<h3 class="primary_color">Delivery Method</h3>
					<h4><?php echo $delivery_method; ?> </h4>
				</div>
			  </div>
			  <h3 class="mb-3"><?php echo $exam_blueprint_heading; ?></h3>
           <ul class="faq-list">
               <?php foreach($exam_blueprint_content_v2 as $item): ?>
				   <li><?php echo $item['line_item']; ?></li>
            <?php endforeach; ?>	
			  </ul>

           <p class="mb-5"><?php echo $exam_blueprint_content; ?></p>		           	  
		</div>
     </section>
	 
	 
	<section class="common-section cmn-section cdv6-cformat" id="tabLearning">
		<div class="container common-cnt">
		   <h3 class="cmntitle mb-4"><?php echo $choose_the_format_heading; ?></h3>
		   <div class="row g-5  mb-3">
            <h4 class="mb-0"><?php echo $whats_included_heading; ?></h4>
               <div class="Includedicons">
                  <div class="cd6icons"><img class="" src="<?php echo get_template_directory_uri(); ?>/images/cdv6-icon-video.svg" alt="" /></div>
                  <div class="cd6icons"><img class="" src="<?php echo get_template_directory_uri(); ?>/images/cdv6-icon-audio.svg" alt="" /></div>
                  <div class="cd6icons"><img class="" src="<?php echo get_template_directory_uri(); ?>/images/cdv6-icon-mike.svg" alt="" /></div>
                  <div class="cd6icons"><img class="" src="<?php echo get_template_directory_uri(); ?>/images/cdv6-icon-book.svg" alt="" /></div>
               </div>			  
               <div class="pre-section mt-3">
					 <ul class="ms-3 mb-0">
                  <?php foreach($what_included_list as $included): ?>
                  <li><?php echo $included['what_included']; ?></li>
               <?php endforeach; ?>	
               </ul>
			   </div>
            <?php foreach($choose_the_format_card as $cardformat): ?>
               <div class="col-lg-6">
                  <div class="cdv6-schedulecard">
                     <h4 class=""><?php echo $cardformat['card_title']; ?></h4>	
                     <div class="pre-section">
					 <ul class="ms-3">
                        <?php foreach($cardformat['card_content'] as $cardcontent): ?>
                        <li><?php echo $cardcontent['card_points']; ?></li>			
                        <?php endforeach; ?>
                     </ul>
					 </div>
                     <?php if($cardformat['card_button']): ?>
                     <?php
                        $input = $cardformat['card_button']['title'];
                        $output = strtolower(str_replace(' ', '-', $input));
                     ?>
                     <a href="<?php echo $cardformat['card_button']['url']; ?>" class="btn btn-primary" id="<?php echo $output."-".$certificate_code; ?>"><?php echo $cardformat['card_button']['title']; ?></a>
                     <?php endif; ?>
                  </div>
               </div>
            <?php endforeach; ?>
            
		   </div>         
		</div>
	</section>

      <?php if ($expert_leader_slider): ?>
         <section class="cmn-section ExpertLeaders-slide pt-0">
            <div class="container common-cnt cmn-sliderdots maxwidth">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="expertstitle">
                        <h3 class="mb-4"><?php echo $expert_leaders_heading; ?></h3>
                        <p><?php echo $expert_leaders_subheading; ?></p>
                     </div>
                     <div class="owl-carousel owl-theme ExpertLeaders">
                        <?php foreach ($expert_leader_slider as $expertslider): ?>
                           <div class="card">
                              <?php if ($expertslider['expert_leader_image']): ?>
                                 <img src="<?php echo $expertslider['expert_leader_image']; ?>" alt="Exper Profile Thumb" loading="lazy" />
                              <?php endif; ?>
                              <div class="ExpertLeaders-cnt">
                                 <?php if ($expertslider['expert_leader_name']): ?>
                                    <h4><?php echo $expertslider['expert_leader_name']; ?></h4>
                                 <?php endif; ?>
                                 <?php if ($expertslider['expert_leader_description']): ?>
                                    <p><?php echo $expertslider['expert_leader_description']; ?></p>
                                 <?php endif; ?>
                              </div>
                           </div>
                        <?php endforeach; ?>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      <?php endif; ?>
      
      

      <?php
      $top_hiring_industries_heading = get_field('top_hiring_industries_heading');
      $top_hiring_industries_content = get_field('top_hiring_industries_content');
      ?>
      <?php if($top_hiring_industries_heading): ?>
      <section class="cmn-sectio TopHiringIndustries mb-5 pb-3">
         <div class="container">
            <div class="section_header mb-4">
               <h2><?php echo $top_hiring_industries_heading; ?></h2>
            </div>
            <div class="row g-4 more-spacing_xy">
               <?php if($top_hiring_industries_content): ?>
                  <?php foreach($top_hiring_industries_content as $hiring): ?>
                  <div class="col-lg-4 col-md-6">
                     <div class="icon_with_text-card text-center h-100">
                        <?php if($hiring['industry_image']['url']): ?>
                           <img src="<?php echo $hiring['industry_image']['url']; ?>" alt="FinanceBanking" />
                        <?php else: ?>
                           <img src="<?php echo get_template_directory_uri().'/images/FinanceBanking.svg'; ?>" alt="FinanceBanking" />
                        <?php endif; ?>
                        <h3 class="mb-2 mt-2"><?php echo $hiring['industry_name']; ?> </h3>
                        <p class="mb-0"><?php echo $hiring['industry_content']; ?></p>
                     </div>
                  </div><!-- IconCard -->
                  <?php endforeach; ?>
               <?php endif; ?>
            </div>
         </div>                  
      </section> <!-- Top Hiring Industries -->
      <?php endif; ?>



      <?php include_once get_template_directory() . '/inc/testimonials-linkedin-reviews-section-course.php'; 
      ?>

      <?php if ($get_certified_heading_course): ?>
         <section class="common-section ab-cta-section mb-0 py-5">
            <div class="container common-cnt maxwidth">
               <div class="row align-items-center">
                  <div class="col-lg-6">
                     <div class="section-heading">

                        <h3 class="mb-3 primary_color cmntitle"><?php echo $get_certified_heading_course; ?></h3>

                        <?php if ($get_certified_content_course): ?>
                           <p class="mb-4 white_text"><?php echo $get_certified_content_course; ?></p>
                        <?php endif; ?>
                        <?php if ($get_certified_button_course): ?>
                           <a href="<?php echo $get_certified_button_course['url']; ?>" id="<?php echo "get-certified-".$certificate_code; ?>" class="btn btn-primary"><?php echo $get_certified_button_course['title']; ?> </a>
                        <?php endif; ?>
                     </div>
                  </div>

               </div>
            </div>
         </section>
      <?php endif; ?>

      <!-- FAQ -->

      <section class="h2_faq" id="tabFAQs">
         <div class="container common-cnt maxwidth">
            <div class="row">
               <div class="col-lg-12">
                  <h3 class="mb-4 mb-lg-5 text-center cmntitle">Frequently Asked Questions</h3>
                  <div class="faq_wrap">
                     <?php if (have_rows('faqs')): ?>
                        <div class="accordion" id="regularAccordionRobots">
                           <?php while (have_rows('faqs')): the_row();
                              $faqnumber = get_sub_field('faq_number');
                              $questions = get_sub_field('questions');
                              $answer = get_sub_field('answer');
                           ?>
                              <div class="accordion-item">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item<?php echo $faqnumber; ?>" aria-expanded="false">
                                    <?php echo $questions; ?>
                                 </button>
                                 <div id="item<?php echo $faqnumber; ?>" class="accordion-collapse collapse" style="">
                                    <div class="accordion-body">
                                       <p><?php echo $answer; ?></p>
                                    </div>
                                 </div>
                              </div>
                           <?php endwhile; ?>
                        </div>
                     <?php endif; ?>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <?php
      $certi_suggestions = get_field('certificate_suggestions');
      if ($certi_suggestions) {
      ?>
         <section class="cmn-section CertificateSuggestions dark_bg">
            <div class="container maxwidth">
               <div class="row">
                  <div class="col-lg-7">
                     <div class="section-heading">
                        <h3 class="cmntitle">Recommended Certifications</h3>
                        <?php if (get_field('certificate_suggestion_description')): ?>
                           <p><?php echo get_field('certificate_suggestion_description'); ?></p>
                        <?php endif; ?>
                     </div>
                  </div>
               </div>

               <div class="More_Certificate mt-4">
                  <div class="owl-carousel owl-theme Certificate_slide cmn-sliderdots offsetarrow">
                     <?php
                     foreach ($certi_suggestions as $certi_sug) {
                        $course_url = get_the_permalink($certi_sug);
                        $thumb_image = get_the_post_thumbnail_url($certi_sug);
                        $title = get_the_title($certi_sug);
                        $title_with_br = preg_replace('/\+ /', '+ <br>', $title);
                        //$title_with_br = preg_replace('/\+ /', '<sup>+</sup> ', $title);
                     ?>
                        <a href="<?php echo $course_url; ?>" target="_blank">
                           <div class="Certificate_card">
                              <?php if ($thumb_image): ?>
                                 <img src="<?php echo $thumb_image; ?>" alt="Certification <?php echo $title; ?>" />
                              <?php else: ?>
                                 <img src="<?php echo get_template_directory_uri() . '/images/Badge-AI+-Marketing.svg'; ?>" alt="Certification" />
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
<!-- Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <div class="ratio ratio-16x9">
               <!-- <iframe id="youtubeVideo" src="" frameborder="0" allowfullscreen></iframe> -->
               <?php echo $banner_video; ?>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- Modal -->
<div class="modal fade modal-mobilevideo" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <!-- <div class="modal-header"> -->
         <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> -->
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
         <!-- </div> -->
         <div class="modal-body">
            <div id="video-container"></div>

         </div>
         <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
      </div>
   </div>
</div>
<style>
   .owl-nav,
   .owl-dots {
      display: none;
   }

   .More_Certificate.show-arrows-more-certificate .owl-nav,
   .More_Certificate.show-arrows-more-certificate .owl-dots {
      display: block;
   }
</style>
<script>

jQuery(document).ready(function ($) {
    var stickyElement = $('.sticky-element'); // Element to be made sticky
    var lastScrollTop = 0;
    var elementOffset = stickyElement.offset().top; // Initial position of the element

    $(window).on('scroll', function () {
        var scrollTop = $(this).scrollTop();

        if (scrollTop > lastScrollTop) {
            // Scrolling Down
            if (scrollTop >= elementOffset) {
                stickyElement.addClass('is-sticky');
            }
        } else {
            // Scrolling Up
            if (scrollTop < elementOffset) {
                stickyElement.removeClass('is-sticky');
            }
        }

        lastScrollTop = scrollTop;
        var headerHeight = $("header").height();
        var indexmnuHeight = $(".indextabs").height();
        
          // Highlight active tab while scrolling
         $("section.common-section, section.h2_faq, section.cmn-section, section.share-exp-section").each(function () {
            var sectionTop = $(this).offset().top - headerHeight - indexmnuHeight - 100;  // Adjust for header height
            var sectionId = $(this).attr("id");

            if (scrollTop >= sectionTop) {
                $(".cdv5-indextabs ul li a").removeClass("active");
                var activeLink = $('.cdv5-indextabs ul li a[href="#' + sectionId + '"]');
                activeLink.addClass("active");
                
               // Ensure the active link is visible in the horizontal scroll area
               //  activeLink.length > 0 && activeLink[0].offsetLeft > 100 &&
               //  activeLink[0].scrollIntoView({
               //      behavior: "smooth",
               //      inline: "center"
               //  });
            }  
        });

       

    });
    // Smooth scroll to section when clicking on navigation links
    $(".cdv5-indextabs ul li a").on("click", function (e) {
        e.preventDefault();
        var targetId = $(this).attr("href"); // Get section ID
        var headerHeight = $("header").outerHeight() || 0;
        var indexmnuHeight = $(".indextabs").outerHeight() || 0;
        
        var targetOffset = $(targetId).offset().top - headerHeight - indexmnuHeight - 40; // Adjust for header + menu height

        $("html, body").animate({ scrollTop: targetOffset }, 800); // Smooth scroll
    });
});



   jQuery(document).ready(function($) {
      $("#tabModules li:contains('Preview') a").each(function() {
         $(this).text(''); // Remove the text inside the <a> tag
      });
      $('div.video-acrdn ol').addClass('faq-list-title');
      if ($('#tabModules').hasClass('half-width')) {
         var firstHref = $('#tabModules .accordion-item a:first').attr('href');
         $('#tabModules .accordion-item a:first').addClass('activelink');
         if (firstHref) {
            var embedUrl = getYoutubeVideoId(firstHref);
         }
         if (firstHref && embedUrl) {
            $('#youtube-video').attr('src', embedUrl);
            $('.full-width').hide();
            $('.full-width').removeAttr('id');
         } else {
            $('.half-width').hide();
            $('.half-width').removeAttr('id');
            AOS.refresh();
         }

         $('#tabModules .accordion-item a').on('click', function(e) {
            $('#tabModules .accordion-item a').removeClass('activelink');
            e.preventDefault();
            var videoUrl = $(this).attr('href');
            $(this).addClass('activelink');
            var embedUrl = getYoutubeVideoId(videoUrl);

            $('#youtube-video').attr('src', embedUrl);
            // Scroll to the video section
            document.getElementById('tabModules').scrollIntoView({
               behavior: 'smooth'
            });
         });

         function getYoutubeVideoId(url) {
            if (url.includes('v=')) {
               var videoId = url.split('v=')[1];
               var embedUrl = "https://www.youtube.com/embed/" + videoId;
            } else {
               console.log('URL format not recognized:', url);
            }
            console.log(embedUrl);
            return embedUrl;
         }
         // JavaScript to highlight li elements containing the preview link
         const listItems = document.querySelectorAll('.faq-list-title li');

         listItems.forEach(item => {
            const previewLink = item.querySelector('a');
            if (previewLink) {
               previewLink.classList.add('float-end');
               item.classList.add('primary_color'); // Add highlight class
               $(previewLink).parent().parent().parent().parent().parent().find('button').addClass('primary_color');
               var accbtncontent = $(previewLink).parent().parent().parent().parent();
               var accbtn = $(previewLink).parent().parent().parent().parent().parent().find('button');
               if ($(accbtn).attr('aria-expanded') === 'false') {
                  $(accbtn).attr('aria-expanded', 'true');
               }
               if ($(accbtn).hasClass('collapsed')) {
                  $(accbtn).removeClass('collapsed');
                  $(accbtncontent).addClass('show');
               }
            }
         });
      }
   });

   jQuery(document).ready(function($) {
      function addHrefToLiForMobile() {
         if ($(window).width() <= 768) {
            $('.faq-list-title li').each(function() {
               var listItem = $(this);
               var anchor = listItem.find('a');
               listItem.find('a').hide();
               if (anchor.length) {
                  var youtubeUrl = anchor.attr('href'); // Get the YouTube link from the anchor
                  listItem.attr('data-bs-toggle', "modal");
                  listItem.attr('data-bs-target', "#exampleModal");

                  listItem.click(function() {
                     // Parse the YouTube video ID from the URL
                     var videoId = youtubeUrl.split('v=')[1];
                     var ampersandPosition = videoId.indexOf('&');
                     if (ampersandPosition != -1) {
                        videoId = videoId.substring(0, ampersandPosition);
                     }

                     // Inject the YouTube iframe into the modal
                     $('#video-container').html('<iframe src="https://www.youtube.com/embed/' + videoId + '" frameborder="0" loading="lazy" allowfullscreen></iframe>');


                  });
               }
            });
         }
      }

      // Run the function when the page loads
      addHrefToLiForMobile();

      // Run the function again when the window is resized (to handle changes in screen width)
      $(window).resize(function() {
         addHrefToLiForMobile();
      });
      // Clear the modal content and stop video playback when it's closed
      $('#exampleModal').on('hidden.bs.modal', function() {
         $('#video-container').html(''); // Clear iframe content to stop the video
      });
      jQuery(document).ready(function($) {
         // $(".readmore-btn").click(function() {
         //    $(this).prev(".readmore-text").parent().toggleClass("expanded");
         //    $(this).text($(this).text() === "Read More" ? "Read Less" : "Read More");
         // });
         $(".readmore1-btn").click(function() {
            $(this).prev(".skillspills").parent().toggleClass("expanded");
            $(this).text($(this).text() === "+ More" ? "- Less" : "+ More");
         });
      });
   });
</script>


<script>
jQuery(document).ready(function(){

//   var $this = $('.items');
//   if ($this.find('div').length > 2) {
//       $('.items').append('<div><a href="javascript:;" class="cdv6-showMore"></a></div>');
//   }
  
  // If more than 2 Education items, hide the remaining
	// $('.items .item').slice(0,3).addClass('shown');
	// $('.items .item').not('.shown').hide();
	// $('.items .cdv6-showMore').on('click',function(){
	// 	$('.items .item').not('.shown').toggle(300);
	// 	$(this).toggleClass('showLess');
	// });

});
</script>

<?php
get_footer();
?>
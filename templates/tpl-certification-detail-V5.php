<?php
/*
    * Template Name: Certification Detail V5
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
$certification_scheme = get_field('certification_scheme');
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
?>


<style>
.opt_detailsection {margin-top:70px; margin-bottom:50px;}
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
                  <small class="">
                     <?php
                     if (!empty($course_tagline)) {
                        echo $course_tagline;
                     }
                     ?>
                  </small>
                  <p class="mb-0 mb-xl-4 readmore-text"><?php echo $about_certification; ?></p>
                  <button class="readmore-btn mb-4">Read More</button>
                  <?php if ($certification_duration): ?>
                     <p class="opt_certificate_code mb-4"> Certification Duration: <span class="white_text"><?php echo $certification_duration; ?></span></p>
                  <?php endif; ?>
                  <?php if ($buynowlink): ?>
                     <a href="<?php echo $buynowlink['url'] ?>" target="<?php echo $buynowlink['target']; ?>" class="optbtn cmndupbtnlink d-block d-md-none">
                        Enroll Now<?php //echo $buynowlink['title'] 
                                    ?>
                     </a>
                  <?php endif; ?>
				  
				  <?php if ($purchase_exam): ?>
                     <a href="<?php echo $purchase_exam['url'] ?>" target="<?php echo $purchase_exam['target']; ?>" class="optbtn cmndupbtnlink d-block d-md-none">
                     Purchase Exam
                     </a>
                  <?php endif; ?>


                  <?php if ($buy_instructor_led_course): ?>
                     <a href="<?php echo $buy_instructor_led_course['url']; ?>" target="<?php echo $buy_instructor_led_course['target']; ?>" class="optbtn cmndupbtnlink">
                        <?php echo $buy_instructor_led_course['title']; ?>
                     </a>
                  <?php endif; ?>

                  <?php if ($downloadblueprintlink && !in_array($current_post_id, $ppc_certifications)): ?>
                     <a href="<?php echo $downloadblueprintlink ?>" class="optbtn" download>
                        Download Blueprint
                     </a>
                  <?php endif; ?>

                  <?php if ($download_executive_summary):
                     echo do_shortcode("[popup_cta download_field='download_executive_summary' button_text='Download Executive Summary' modal_title='Download Executive Summary']");
                     //$add_popup_class = is_single('ai-everyone') ? 'hs-cta-trigger-button hs-cta-trigger-button-182846219022' : '';
                  ?>
                  <?php if ($certification_scheme): ?>
                     <a href="<?php echo $certification_scheme['url']; ?>" class="optbtn" download>
                     Certification Scheme
                     </a>
                  <?php endif; ?>
                     <?php /* <a href="<?php echo $download_executive_summary; ?>" class="optbtn <?php echo $add_popup_class; ?>"  data-bs-target="#executivemodal" download>Download Executive Summary</a> */ ?>
                  <?php endif;  ?>
                  <?php if (!in_array($current_post_id, $ppc_certifications)) : ?>
                     <a href="<?php echo site_url(); ?>/find-a-training-partner/" class="optbtn me-lg-2 d-lg-none d-inline-block">Find a Training Partner</a>
                  <?php endif; ?>
               </div>
               <div class="opt_detail-img">
                  <div class="opt_detail-imgbg">
                     <img class="badge-img" src="<?php echo $featured_img_url; ?>" alt="Certification Badge" />
                  </div>
                  <?php if (!in_array($current_post_id, $ppc_certifications)) : ?>
                     <a href="<?php echo site_url(); ?>/find-a-training-partner/" class="optbtn d-lg-block d-none">Find a Training Partner</a>
                  <?php endif; ?>

                  <?php if ($buy_instructor_led_course): ?>
                     <a href="<?php echo $buynowlink['url'] ?>" target="<?php echo $buynowlink['target']; ?>" class="optbtn cmndupbtnlink d-none d-md-block">
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
      <div class="inner-page">
      <section class="indextabs">
         <div class="container maxwidth">
            <div class="row">
               <div class="col-lg-12 common-cnt py-0">
                  <div class="d-flex justify-content-between cdv5-indextabs">
                     <ul>
                        <?php if ($key_benefits_heading): ?>
                           <li><a href="#tabKeyBenefits">Key Benefits</a></li>
                        <?php endif; ?>
                        <li><a href="#tabPrerequesites">Prerequisites</a></li>
                        <li><a href="#tabExamDetails">Exam Details</a></li>
                        <li><a href="#tabModules">Modules</a></li>
                        <?php if ($tools): ?>
                           <li><a href="#tabTools">Tools</a></li>
                        <?php endif; ?>
                        <li><a href="#tabSkills">Skills</a></li>
                        <li><a href="#tabOpportunities">Opportunities</a></li>
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
         <section class="KeyBenefits dark_bg KeyBenefits_v2" id="tabKeyBenefits">
            <div class="dark_bg">
               <div class="container maxwidth common-cnt">
                  <div class="row gy-4 gx-5">
                     <div class="col-12">
                        <div class="section_header pb-1">
                           <?php if ($key_benefits_heading): ?>
                              <h2 class="mb-lg-3"><?php echo $key_benefits_heading; ?></h2>
                           <?php endif; ?>
                           <?php if ($key_benefits_content): ?>
                              <p class="mb-0"><?php echo $key_benefits_content; ?></p>
                           <?php endif; ?>
                        </div>
                     </div>
                     <?php if($key_benefits_video_show_hide == 1): ?>
                     <div class="col-lg-12">
                        <div class="benefits_video">
                           <?php echo $key_benefits_video; ?>

                        </div>
                     </div>
                     <?php endif; ?>
                     <div class="col-lg-12">
                        <div class="row gy-4">
                           <?php if ($key_benefits_points): ?>
                              <?php foreach ($key_benefits_points as $ker_points): ?>
                                 <div class="col-lg-6 col-md-6 col-12">
                                    <div class="keycard">
                                       <?php if ($ker_points['key_benefits_icon']): ?>
                                          <div class="icon_key mb-3"> <img src="<?php echo $ker_points['key_benefits_icon']; ?>" alt="Key Benefit Card Icon" /></div>
                                       <?php endif; ?>
                                       <div>
                                          <?php if ($ker_points['key_points']): ?>
                                             <h5><?php echo $ker_points['key_points']; ?></h5>
                                          <?php endif; ?>
                                          <?php if ($ker_points['key_points_detail']): ?>
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
         </section>
      <?php endif; ?>
      <?php if ($prerequisites):
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
      <?php 
      $exam_policies_and_integrity_heading = get_field('exam_policies_and_integrity_heading');
      $exam_policies_and_integrity_content = get_field('exam_policies_and_integrity_content');
      $view_candidate_handbook_button = get_field('view_candidate_handbook_button');
      $view_candidate_handbook_content = get_field('view_candidate_handbook_content');
      ?>
      <?php if($exam_policies_and_integrity_heading): ?>
      <section class="cmn-section common-section pre-section dark_bg" id="tabPrerequesites">
         <div class="container maxwidth">
            <div class="row">
               <div class="col-lg-12 common-cnt">
                  <h2 class="mb-4"><?php echo $exam_policies_and_integrity_heading; ?></h2>
                  <p><?php echo $exam_policies_and_integrity_content; ?></p>
                  <?php if($view_candidate_handbook_button): ?>
                     <a href="<?php echo $view_candidate_handbook_button['url']; ?>" class="btn btn-primary mb-4" target="_blank">View Candidate Handbook</a>
                  <?php endif; ?>
                  <p class="mb-0"><i><?php echo $view_candidate_handbook_content; ?></i></p>
               </div>
            </div>
         </div>
      </section>
      <?php endif; ?>
      
      <section class="" id="tabExamDetails">
         <div class="container common-cnt cdv5-examdetail maxwidth">

            <div class="row g-0 gx-lg-5">
               <div class="col-xl-12">
                  <div class="row exam-cards">
                     <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="card">
                           <h3>Modules</h3>
                           <h4><span><?php echo $modules; ?></span></h4>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="card">
                           <h3>Examination</h3>
                           <h4><span><?php echo $examination; ?></span></h4>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="card">
                           <?php if (isset($examination_time[1])): ?>
                              <h3><?php echo $examination_time[0]; ?></h3>
                              <h4><span><?php echo $examination_time[1]; ?></span></h4>
                           <?php endif; ?>
                           <!-- <h3><?php echo $examination_time[0]; ?><span><?php echo $examination_time[1]; ?></span></h3> -->
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="card lastcard">
                           <h3>Passing Score</h3>
                           <h4><span><?php echo $passing_score; ?></span></h4>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

         </div>

      </section>

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
      
      <section class="cmn-section full-width" id="tabModules">
         <div class="container common-cnt maxwidth">
            <div class="row">
               <div class="col-lg-12">
                  <h3 class="mb-4 cmntitle">Certification Modules</h3>
               </div>
               <div class="col-lg-12">
                  <div class="accordion home-accordion" id="regularAccordionRobots">
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
                                 <div class="accordion-body pt-2 v5-modules">
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
               <h3 class="mb-4 text-center cmntitle">Tools</h3>
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

      <section class="cmn-section youlearn dark_bg pb-0" id="tabSkills">
         <div class="container maxwidth">
            <div class="row flex-row-reverse">
               <?php /*
               <!--div class="col-lg-6 mb-4 mb-md-0 mb-lg-0">
                  <?php if (!empty($what_will_you_learn_image)) : ?>
                     <img class="w-100" src="<?php echo $what_will_you_learn_image; ?>" />
                  <?php endif; ?>
               </div--> */ ?>
               <div class="col-lg-12">
                  <?php if ($learn_sections): ?>
                     <div class="row skills-section px-0 px-lg-4 common-cnt">
                        <div class="col-lg-12">
                           <h3 class="cmntitle">Exam Objectives</h3>
                        </div>
                        <?php foreach ($learn_sections as $learn_section):
                           $learn_icon = $learn_section['learn_icon'];
                           $learn_name = $learn_section['learn_name'];
                           $learn_text = $learn_section['learn_text'];
                        ?>
                           <div class="col-xl-6 col-lg-6 col-md-6 mb-4">
                              <?php if ($learn_icon): ?>
                                 <img src="<?php echo $learn_icon; ?>" alt="Identity Icon" class="float-start" />
                              <?php else: ?>
                                 <img src="<?php echo get_template_directory_uri() . '/images/check-mark-icon.svg'; ?>" alt="Identity Icon" class="float-start" />
                              <?php endif; ?>
                              <div class="skill-cnt">
                                 <?php if ($learn_name): ?>
                                    <h4><?php echo $learn_name; ?></h4>
                                 <?php endif; ?>
                                 <?php if ($learn_text): ?>
                                    <p><?php echo $learn_text; ?></p>
                                 <?php endif; ?>
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
      <section class="cmn-section cmn-sliderdots offsetarrow" id="tabOpportunities">
         <div class="container common-cnt maxwidth">
            <div class="row">
               <div class="col-lg-12">
                  <h3 class="mb-4 cmntitle">Career Opportunities Post-Certification</h3>
                  <?php if ($median_salaries && $with_ai_skills && $difference): ?>
                     <div class="CourseCompletion mt-5 mb-5">
                        <div class="row gy-4 gy-lg-0">
                           <div class="col-lg-4 col-md-4">
                              <div class="CourseCard text-center">

                                 <div class="iconwithprice">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/SalaryMail.svg" alt="Mail" />
                                    <div>
                                       <h3>Median Salaries</h3>

                                       <?php if ($median_salaries): ?>
                                          <span><?php echo $median_salaries; ?></span>
                                       <?php endif; ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-4">
                              <div class="CourseCard text-center">

                                 <div class="iconwithprice">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/salaryadd.svg" alt="Mail" />
                                    <div>
                                       <h3>With AI Skills</h3>
                                       <?php if ($with_ai_skills): ?>
                                          <span><?php echo $with_ai_skills; ?></span>
                                       <?php endif; ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-4">
                              <div class="CourseCard text-center">

                                 <div class="iconwithprice">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/Percent.svg" alt="Mail" />
                                    <div>
                                       <h3>% Difference</h3>
                                       <?php if ($difference): ?>
                                          <span><?php echo $difference; ?></span>
                                       <?php endif; ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  <?php endif; ?>
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

      <?php
      $industry_opportunities_after_course_completion_heading = get_field('industry_opportunities_after_course_completion_heading');
      // $industry_opportunities_subtitle = get_field('industry_opportunities_subtitle');
      $industry_opportunities_image = get_field('industry_opportunities_image');
      // $market_demand_for_ai_executives_heading = get_field('market_demand_for_ai_executives_heading');
      // $market_demand_points = get_field('market_demand_points');
      $industry_opportunities_content = get_field('industry_opportunities_content');
      ?>
      <?php if($industry_opportunities_after_course_completion_heading): ?>
      <section class="cmn-sectio TenXYourGrowth mb-5 pb-3">
         <div class="container">
            <div class="section_header mb-5">
             <h2><?php echo $industry_opportunities_after_course_completion_heading; ?></h2>
             <!-- <h3><?php //echo $industry_opportunities_subtitle; ?></h3> -->
            </div>
            <div class="row g4 flex-row-reverse">
               <div class="col-lg-5">
                  <div class="site-image-card">
                     <?php if($industry_opportunities_image): ?>
                        <img class="w-100" src="<?php echo $industry_opportunities_image['url']; ?>" alt="<?php echo $industry_opportunities_image['title']; ?>" />
                     <?php else: ?>
                        <img class="w-100" src="<?php echo get_template_directory_uri().'/images/growth.png'; ?>" alt="Growth" />
                     <?php endif; ?>
                  </div>
               </div>
               <div class="col-lg-7">
                  <div class="MD-content">
                     <h5><?php echo $industry_opportunities_content; ?></h5>
                     
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php endif; ?>
	  
	  <!-- Smart Solutions for AI- Powered Credentials -->
     <?php 
      $smart_solutions_heading = get_field('smart_solutions_heading','options');
      $smart_solutions_data = get_field('smart_solutions_data','options');
      ?>
      <?php if($smart_solutions_heading): ?>
         <section class="common-section pb-5">
            <div class="container common-cnt">
               <div class="row gy-4">
				<div class="col-lg-12">
					<div class="expertstitle">
						<h3 class="cmntitle mb-2"><?php echo $smart_solutions_heading; ?></h3>
					</div>					
				</div> 
            <?php foreach($smart_solutions_data as $smart_data):
                     $smart_solutions_image = $smart_data['smart_solutions_image'];
                     $smart_solutions_image_black = $smart_data['smart_solutions_image_black'];
                     $smart_solutions_description = $smart_data['smart_solutions_description'];
                     $smart_solutions_explore_more = $smart_data['smart_solutions_explore_more'];
                  ?>
				<div class="col-lg-6 text-center">
					<div class="card sscards">
               <?php if($smart_solutions_image): ?>
                  <img class="white_theme_hide" src="<?php echo $smart_solutions_image['url']; ?>" alt="Certificate"/>
               <?php endif; ?>
               <?php if($smart_solutions_image_black): ?>
                  <img class="black_theme_hide" src="<?php echo $smart_solutions_image_black['url']; ?>" alt="Certificate"/>
               <?php endif; ?>
					 <p class="mb-0"><?php echo $smart_solutions_description; ?></p>
				   </div>
				   <a href="<?php echo $smart_solutions_explore_more['url']; ?>" class="btn btn-primary mt-4"><?php echo $smart_solutions_explore_more['title']; ?></a>
				</div>
            <?php endforeach; ?>
               </div>
            </div>
         </section>
      <?php endif; ?>


      <!-- AI & Blockchain Experts -->
      <?php if ($aiblockchainexperts_slider): ?>
         <section class="cmn-section AIBlockchainExperts-slide pt-0">
            <div class="container common-cnt cmn-sliderdots offsetarrow maxwidth">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="expertstitle">
                        <?php if ($ai_blockchain_experts_heading): ?>
                           <h3 class="mb-2 cmntitle"><?php echo $ai_blockchain_experts_heading; ?></h3>
                        <?php endif; ?>
                        <p><?php echo $ai_blockchain_experts_sub_heading; ?></p>
                     </div>
                     <div class="owl-carousel owl-theme AIBlockchainExperts">
                        <?php foreach ($aiblockchainexperts_slider as $expertslider): ?>
                           <div class="card">
                              <?php if ($expertslider['expert_image']): ?>
                                 <img src="<?php echo $expertslider['expert_image']; ?>" alt="<?php echo $expertslider['expert_name']; ?>" loading="lazy"/>
                              <?php endif; ?>
                              <div class="aiexpert-card-cnt">
                                 <?php if ($expertslider['expert_name']): ?>
                                    <h4><?php echo $expertslider['expert_name']; ?></h4>
                                 <?php endif; ?>
                                 <?php if ($expertslider['expert_description']): ?>
                                    <p><?php echo $expertslider['expert_description']; ?></p>
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


      <!--  Supporting Companies  -->
      <?php if ($supporting_companies_section) : ?>
         <section class="cmn-section SupportingCompanies-slide pt-0">
            <div class="container common-cnt cmn-sliderdots maxwidth">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="expertstitle">
                        <?php if ($supporting_companies_heading): ?>
                           <h3 class="mb-4"><?php echo $supporting_companies_heading; ?></h3>
                        <?php endif; ?>
                        <?php if ($supporting_companies_subheading): ?>
                           <p><?php echo $supporting_companies_subheading; ?></p>
                        <?php endif; ?>
                     </div>
                     <div class="owl-carousel owl-theme SupportingCompanies">
                        <?php foreach ($supporting_companies_section as $companies): ?>
                           <div class="card">
                              <?php if ($companies['supporting_company_logo']): ?>
                                 <div class="suppo-company-logo">
                                    <img src="<?php echo $companies['supporting_company_logo']; ?>" alt="" />
                                 </div>
                              <?php endif; ?>
                              <div class="sc-cnt">
                                 <?php if ($companies['supporting_company_name']): ?>
                                    <h4><?php echo $companies['supporting_company_name']; ?></h4>
                                 <?php endif; ?>
                                 <?php if ($companies['supporting_company_description']): ?>
                                    <p><?php echo $companies['supporting_company_description']; ?></p>
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



      <!-- Expert Leaders  -->
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
                  <div class="col-lg-8">
                     <div class="section-heading">

                        <h3 class="mb-3 primary_color cmntitle"><?php echo $get_certified_heading_course; ?></h3>

                        <?php if ($get_certified_content_course): ?>
                           <p class="mb-4 white_text"><?php echo $get_certified_content_course; ?></p>
                        <?php endif; ?>
                        <?php if ($get_certified_button_course): ?>
                           <a href="<?php echo $get_certified_button_course['url']; ?>" class="btn btn-primary"><?php echo $get_certified_button_course['title']; ?> </a>
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
   jQuery(document).ready(function($) {
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
         $(".readmore-btn").click(function() {
            $(this).prev(".readmore-text").parent().toggleClass("expanded");
            $(this).text($(this).text() === "Read More" ? "Read Less" : "Read More");
         });
      });
   });
</script>
<?php
get_footer();
?>
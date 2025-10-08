<?php 
/* 
   Template Name: Template QA Certification
*/
   get_header();
   $banner_heading = get_field('banner_heading');
   $banner_subheading = get_field('banner_subheading');
   $banner_button_text = get_field('banner_button_text');
   $banner_button_link = get_field('banner_button_link');
   $banner_image = get_field('banner_image');
   $iso_content = get_field('iso_content');
   $why_choose_heading = get_field('why_choose_heading');
   $why_choose_card = get_field('why_choose_card');
   $our_certification_people_heading = get_field('our_certification_people_heading');
   $our_certification_people_description = get_field('our_certification_people_description');
   $our_certification_slider = get_field('our_certification_slider');
   $advantage_heading = get_field('advantage_heading');
   $advantage_description = get_field('advantage_description');
   $ready_to_get_started_heading = get_field('ready_to_get_started_heading');
   $ready_to_get_started_image = get_field('ready_to_get_started_image');
   $ready_to_get_started_description = get_field('ready_to_get_started_description');
   $know_more_button_text = get_field('know_more_button_text');
   $know_more_button_url = get_field('know_more_button_url');
   $qa_faq_heading = get_field('qa_faq_heading');
   $qa_faq = get_field('qa_faq');
?> 
<div class="middle-section">
   <?php if($banner_heading): ?>
      <section class="banner-video-section quality_assurance_banner pt-0 pt-md-4">
         <div class="container">
            <div class="row align-items-center row-reverse">
               <div class="col-lg-5 text-center">
               <?php if($banner_image): ?>
                  <img src="<?php echo $banner_image; ?>" alt="">
               <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/banner-img.jpg" alt="">
               <?php endif; ?>
               </div>
			   <div class="col-lg-7">
                  <div class="video-banner-cnt">
                     <h1><?php echo $banner_heading; ?></h1>
                     <p><?php echo $banner_subheading; ?></p>
                     <div class="btn_group mt-4">
                        <a href="<?php echo $banner_button_link; ?>" class="btn btn-primary"><?php echo $banner_button_text; ?></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   <?php endif; ?>   
   <?php if($iso_content): ?>
      <section class="iso_content common-section">
         <div class="container">
            <div class="iso_content_inner">
               <p class="white_text"><?php echo $iso_content; ?></p>
            </div>
         </div>
      </section>
   <?php endif; ?>
   <?php if($why_choose_heading): ?>
      <section class="why_choose_aicerts_certification common-section">
         <div class="container">
            <h2 class="mb-4 text-center"><?php echo $why_choose_heading; ?></h2>
            <div class="row justify-content-center">
               <?php if($why_choose_card): ?>
                  <?php foreach($why_choose_card as $card): ?>
                     <div class="col-md-6 col-lg-4 mb-4">
                        <div class="why_choose_aicerts_certification_card">
                           <div class="aicerts_certification_title">
                              <img src="<?php echo $card['card_icon']; ?>" alt="">
                              <h5 class="mb-0"><?php echo $card['card_title']; ?></h5>
                           </div>
                           <div class="aicerts_certification_desc">
                              <p class="mb-0"><?php echo $card['card_content']; ?></p>
                           </div>
                        </div>
                     </div>
                  <?php endforeach; ?>
               <?php endif; ?>
            </div>
         </div>
      </section>
   <?php endif; ?>
   <?php if($our_certification_people_heading): ?>
      <section class="our_certification_team common-section">
         <div class="container">
            <h2 class="mb-4 text-center"><?php echo $our_certification_people_heading; ?></h2>
            <p class="text-center font400 black-color px-md-5 mx-xl-5"><?php echo $our_certification_people_description; ?></p>
            <div class="our_certification_team_slider cmn-sliderdots offsetarrow">
               <div class="owl-carousel owl-theme">
                  <?php if($our_certification_slider): ?>
                     <?php foreach($our_certification_slider as $our_certification): ?>
                        <div class="item our_certification_team_item">
                           <div class="our_certification_team_item_inner">
                              <div class="our_certification_team_item_img">
                                 <?php if($our_certification['our_certification_slider_image']): ?>
                                    <img src="<?php echo $our_certification['our_certification_slider_image']; ?>" alt="">
                                 <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/team-slide-img1.png" alt="">
                                 <?php endif; ?>
                              </div>
                              <div class="our_certification_team_item_desc">
                                 <h3 class="primary_color"><?php echo $our_certification['our_certification_slider_title']; ?></h3>
                                 <?php echo $our_certification['our_certification_slider_content']; ?>
                              </div>
                           </div>
                        </div>
                     <?php endforeach; ?>
                  <?php endif; ?>
               </div>
            </div>
            <?php if($know_more_button_text): ?>
               <div class="text-center mt-4">
                  <a href="<?php echo $know_more_button_url; ?>" class="btn btn-primary"><?php echo $know_more_button_text; ?></a>
               </div>
            <?php endif; ?>
         </div>
      </section>
   <?php endif; ?>
   <?php if($advantage_heading): ?>
      <section class="aicerts__advantage py-5 px-2 common-section">
         <div class="container">
            <div class="text-center px-lg-5">
               <h2 class="mb-3"><?php echo $advantage_heading; ?></h2>
               <p class="font22 black-color mb-0"><?php echo $advantage_description; ?></p>
            </div>
         </div>
      </section>
   <?php endif; ?>
   <?php if($ready_to_get_started_heading): ?>
      <section class="aicerts_qa_getstarted common-section">
         <div class="container">
            <div class="aicerts_qa_getstarted_inner px-3 px-md-5">
               <div class="row">
                  <div class="col-lg-6 py-5 my-auto">
                     <h2 class="primary-color"><?php echo $ready_to_get_started_heading; ?></h2>
                     <p class="fw500"><?php echo $ready_to_get_started_description; ?></p>
                     <?php if($know_more_button_text): ?>
                        <a href="<?php echo $know_more_button_url; ?>" class="btn btn-primary"><?php echo $know_more_button_text; ?></a>
                     <?php endif; ?>
                  </div>
                  <div class="col-lg-6">
                     <?php if($ready_to_get_started_image): ?>
                        <div class="aicerts_qa_getstarted_img">
                           <img src="<?php echo $ready_to_get_started_image; ?>" alt="">
                        </div>
                     <?php else: ?>
                        <div class="aicerts_qa_getstarted_img">
                           <img src="<?php echo get_template_directory_uri(); ?>/images/get-started-girl.png" alt="">
                        </div>
                     <?php endif; ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
   <?php endif; ?>
   <?php if($qa_faq_heading): ?>
      <section class="h2_faq common-section p-0">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-lg-8 col-xxl-6 mx-auto text-center mb-4">
                  <h2 class="mb-2"><?php echo $qa_faq_heading; ?></h2>
               </div>
               <div class="col-lg-12 faq_wrap">
                  <div class="accordion accordion-flush" id="accordionFAQ">
                     <?php if($qa_faq): ?>
                        <?php $i=1; foreach($qa_faq as $faq): ?>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="h2faq-heading1">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#h2faq-collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="h2faq-collapse<?php echo $i; ?>"><?php echo $faq['qa_faq_question']; ?></button>
                              </h2>
                              <div id="h2faq-collapse<?php echo $i; ?>" class="accordion-collapse collapse"
                                 aria-labelledby="h2faq-heading<?php echo $i; ?>" data-bs-parent="#accordionFAQ">
                                 <div class="accordion-body">
                                    <p><?php echo $faq['qa_faq_answer']; ?></p>
                                 </div>
                              </div>
                           </div>
                        <?php $i++; endforeach; ?>
                     <?php endif; ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
   <?php endif; ?>
</div>
<?php
// get_sidebar();
get_footer(); 
?>
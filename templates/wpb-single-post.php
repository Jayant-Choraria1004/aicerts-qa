<?php
   /*
    * Template Name: MycourseTemplate
    * Template Post Type: courses
    */
   get_header();
   global $post;
   $post_id = $post->ID;
   $featured_img_url = get_the_post_thumbnail_url($post->ID, 'thumbnail');
   $featured_img2 = get_field('featured_image_2');
   $achieve_points = get_field('certification_points');
   $examdetails = get_field('exam_details');
   $enroll_url = get_post_meta($post_id, 'enroll_url', true);
   $modules = get_post_meta($post_id, 'modules', true);
   $examination = get_post_meta($post_id, 'examination', true);
   $examination_time = get_post_meta($post_id, 'examination_time', true);
   $passing_score = get_post_meta($post_id, 'passing_score', true);
   $course_tagline = get_post_meta($post_id, 'course_tagline', true);
   $about_certification = get_post_meta($post_id, 'about_certification', true);
   $introduction_video = get_post_meta($post_id, 'introduction_video', true);
   $prerequisites = get_post_meta($post_id, 'prerequisites', true);
   $course_modules = get_field('certification_modules');
   $course_overcome = get_field('certification_outcome');
   $course_overcome_summery = $course_overcome['summery'];
   $course_benefits = $course_overcome['Outcomes'];
   ?>
<!-- section class="midd-inner-banner certificate-banner">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="certificate-banner-cnt position-relative d-flex justify-content-between">
               <div class="certificate-banner-hd" data-aos="fade-down" data-aos-duration="1000">
                  <h1>
                     <?php echo get_the_title($post_id); ?>
                  </h1>
                  <p>
                     <?php if (!empty($course_tagline)) {
                        echo $course_tagline;
                        } ?>
                  </p>
                  <?php /*
                     <a href="<?php if (!empty($enroll_url)) {
                        echo $enroll_url;
                        } ?>"
                  class="btn btn-primary">Enroll Now</a> */ ?>
               </div>
               <div class="certificate-banner-logo" data-aos="fade-down" data-aos-duration="1000"><img
                  src="<?php echo $featured_img_url; ?>"></div>
               <div class="certificate-details" data-aos="fade-up" data-aos-duration="1000">
                  <ul class="d-flex justify-content-left">
                     <li>
                        <?php if (!empty($modules)) {
                           echo $modules;
                           } ?> Modules
                     </li>
                     <li>
                        <?php if (!empty($examination)) {
                           echo $examination;
                           } ?> Examination
                     </li>
                     <li>
                        <?php if (!empty($examination_time)) {
                           echo $examination_time;
                           } ?>
                     </li>
                     <li>Passing Score:
                        <?php if (!empty($passing_score)) {
                           echo $passing_score;
                           } ?>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section -->

<!-- section class="cmn-section certificate-scroll-section">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="certificate-scroll-cnt">
               <div class="certifciate-tab" data-aos="fade-up" data-aos-duration="1000">
                  <ul>
                     <li class="active"><a href="#about">About</a></li>
                     <li><a href="#coursemodules">Certification Modules</a></li>
                     <li><a href="#certification">Certification Outcome</a></li>
                  </ul>
               </div>
              
               <div id="about" class="about-scroll mb-5" data-aos="fade-up" data-aos-duration="1000">
                  <div class="row">
                     <div class="col-lg-6">
                        <h2 class="inner-hd">About Certification</h2>
                        <p class="pe-lg-5 pe-0"><?php echo $about_certification; ?></p>
                     </div>
                     <?php if(!empty($introduction_video)) : ?>
                     <div class="col-lg-6">
                        <iframe width="100%" height="315" src="<?php echo $introduction_video; ?>"" title="YouTube video player" frameborder="0"
                           allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                           allowfullscreen>
                        </iframe>
                     </div>
                     <?php endif; ?>
                  </div>
                  <h2 class="inner-hd">Prerequisites</h2>
                  <?php echo $prerequisites; ?>
               </div>
               <div id="coursemodules" class="course-modules-scroll mb-5" data-aos="fade-up" data-aos-duration="1000">
                  <h2 class="inner-hd">Certification Modules</h2>
                  <div class="course-modules-box accordion" id="regularAccordionRobots">
                     <?php
                        if ($course_modules) :
                        	$index = 0;
                        		foreach ($course_modules as $module) :
                        
                        				$module_title = $module['certification_module_title'];
                        				$module_description = $module['certification_module_description'];
                        				?>
                     <div class="accordion-item">
                        <h2 class="accordion-header">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#UnderstandingAI<?php echo $index; ?>" aria-expanded="false"><span>
                           <img class="career-ic" alt="" src="images/briefcase-ic.svg"><?php echo $module_title; ?></span>
                           </button>
                        </h2>
                        <div id="UnderstandingAI<?php echo $index; ?>" class="accordion-collapse collapse">
                           <div class="accordion-body">
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

               <div id="certification" class="certification-scroll">
                  <h2 class="inner-hd">Certification outcome</h2>
                  <p class="mb-5"><?php echo $course_overcome_summery; ?></p>
                  <div class="row">
                     <?php 
                        foreach($course_benefits as $benefit) :
                        	if($course_benefits) : 
                        		?>
                     <div class="col-md-4 pb-3" data-aos="fade-up" data-aos-duration="1000">
                        <div class="certification-scroll-cnt">
                           <div class="certification-img-area"><img src="<?php echo $benefit['outcome_image']; ?>">
                           </div>
                           <div class="certification-img-hd"><?php echo $benefit['outcome_title']; ?></div>
                           <div class="certification-img-desc">
                              <?php echo $benefit['outcome_details']; ?>
                           </div>
                        </div>
                     </div>
                     <?php
                        endif;
                        endforeach; ?>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </div>
</section -->

<div class="middle-section">
            <!-- InstanceBeginEditable name="MainContent" -->
            <div class="inner-page certification-page">
               <section class="cert-spec-section listing-pages">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-8">
                           <div class="common-cnt pe-xl-5" data-aos="fade-down" data-aos-duration="1000">
                              <small>
                              	<?php if (!empty($course_tagline)) {
                                echo $course_tagline;
                        		} ?>
                              </small>
                              <h2 class="st-word"> <?php echo get_the_title($post_id); ?></h2>
                              <p class="mb-5"><?php echo $about_certification; ?></p>
                              <hr>
                              <div class="accordion home-accordion" id="regularAccordionRobots">
                                 <h3 class="mt-5">Certification Modules</h3>

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
                        <div class="col-lg-4">
                           <div class="overview-sidebar ms-xl-5">
                              <div class="sidebar-thumb position-relative">
                              	<?php if(!empty($featured_img2)) : ?>
                              	<img class="w-100" src="<?php echo $featured_img2; ?>" />
                              	<?php endif; ?>
                              	<?php if(!empty($featured_img_url)) : ?>	                         	
                              	<img class="badge-img" src="<?php echo $featured_img_url; ?>" />
                              	<?php endif; ?>
                              	</div>
                              <div class="sidebar-cnt">                                 
                                 <?php echo $achieve_points; ?>
                                 <!-- ?php echo $examdetails; ?-->
                                   <h4>Exam Details</h4>
                                 <ul>
                                    <li>
                                    <?php if (!empty($modules)) {
                                       echo $modules;
                                       } ?> Modules
                                 </li>
                                 <li>
                                    <?php if (!empty($examination)) {
                                       echo $examination;
                                       } ?> Examination
                                 </li>
                                 <li>
                                    <?php if (!empty($examination_time)) {
                                       echo $examination_time;
                                       } ?>
                                 </li>
                                 <li>Passing Score:
                                    <?php if (!empty($passing_score)) {
                                       echo $passing_score;
                                       } ?>
                                 </li>
                                 </ul> 
                              </div>
                               <?php if(!empty($introduction_video)) : ?>
			                     <div class="video_card">
			                        <iframe width="100%" height="315" src="<?php echo $introduction_video; ?>" title="YouTube video player" frameborder="0"
			                           allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
			                           allowfullscreen>
			                        </iframe>
			                     </div>
			                     <?php endif; ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <section class="cert-spec-section certification-outcome">
                  <div class="container">
                     <h3 class="mb-lg-5">Certification Outcome</h3>
                     <div class="row">
                     <?php 
                        foreach($course_benefits as $benefit) :
                        	if($course_benefits) : 
                        		?>
                     <div class="col-lg-4 col-md-6 listing-box" data-aos="fade-up" data-aos-duration="1000">
                        <div class="certification-scroll-cnt">
                           <div class="certification-img-area">
                           	<img class="w-100 mb-4" src="<?php echo $benefit['outcome_image']; ?>">
                           	<h3><?php echo $benefit['outcome_title']; ?></h3>
                           	<p><?php echo $benefit['outcome_details']; ?></p>
                           </div>
                        </div>
                     </div>
                     <?php else: // field_name returned false ?>
                        field_name returned false
                     <?php
                        endif;
                        endforeach; ?>
                  </div>
                  </div>
               </section>
            </div>
            <!-- InstanceEndEditable -->
         </div>

<?php //echo get_the_content($post_id); ?>
<?php
   get_footer();
   ?>
<?php /* Template Name: Template Index 
   */ 
   get_header(); 
   
   $whatwedo = get_field('what_we_do');
   $whysubheading = get_field('why_ai_certs_sub_heading');
   $whyheading = get_field('why_ai_certs_heading');
   $whycontent = get_field('why_ai_certs_content');
   $imagewithtextoverlay = get_field('image_with_text_overlay');
   $imagewithtextoverlay2 = get_field('image_with_text_overlay2');
   ?> 
<!--Header End-->
<!--Header End-->
<div class="middle-section">
   <section class="midd-banner">
      <?php if( have_rows('slideshow') ): ?> 
           <div class="owl-carousel owl-theme midd-banner-slider">
               <?php while( have_rows('slideshow') ): the_row(); 
                  $videotitle = get_sub_field('video_title');
                  $videoinfo = get_sub_field('video_info');
                  $videourl = get_sub_field('video_url');
                  $videoposter = get_sub_field('video_poster');
                  ?> 
                <div class="item">
                  <div class="midd-banner-slide d-flex">
                     <video width="100%" autoplay muted loop poster="<?php echo $videoposter;?>">
                        <source src="<?php echo $videourl;?>" type="video/mp4">
                        </source>
                     </video>
                     <div class="main-banner-cnt">
                        <div class="container">
                           <h2 class="video_title"><?php echo $videotitle;?></h2>
                           <p><?php echo $videoinfo;?></p>
                        </div>
                     </div>
                  </div>                           
               </div>
               <?php endwhile; ?> 
            </div>
            <?php endif; ?>
      
      <div class="banner-tags">
         <marquee>
            <?php if( have_rows('banner_tags') ): ?> 
            <ul class="d-flex">
               <?php while( have_rows('banner_tags') ): the_row(); 
                  $tag_text = get_sub_field('tag_text');
                       $tag_link = get_sub_field('tag_link');
                  ?> 
               <li>
                  <a class="btn btn-dark" href="<?php echo $tag_link;?>"><?php echo $tag_text;?></a>		        	
               </li>
               <?php endwhile; ?> 
            </ul>
            <?php endif; ?>
         </marquee>
      </div>
      <!--#BannerTasEnd-->
   </section>
   <?php if( $whatwedo ): ?>
   <section class="cmn-section missionvalues-section pb-0">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="common-cnt text-center">
                  <?php if( $whatwedo['sub_heading'] ): ?>
                  <small><?php echo $whatwedo['sub_heading'];?></small>
                  <?php endif;?>
                  <?php if( $whatwedo['heading'] ): ?>
                  <h2 class="max-title"><?php echo $whatwedo['heading'];?></h2>
                  <?php endif;?>
                  <?php if( $whatwedo['content'] ): ?>
                  <p class="highlight"><?php echo $whatwedo['content'];?></p>
                  <?php endif;?>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--#WhatWeDoEnd-->
   <?php endif;?>
   <section class="cert-spec-section">
      <div class="row">
         <div class="col-lg-6">
            <div class="training-partner-img pe-xl-5" data-aos="fade-up" data-aos-duration="1000">
            	<?php if( get_field('why_ai_certs') ): ?>
				    <img src="<?php the_field('why_ai_certs'); ?>" alt="Why AI Certs" />
				<?php endif; ?>
           	</div>
         </div>
         <div class="col-lg-6">
            <div class="common-cnt p-xl-5" data-aos="fade-down" data-aos-duration="1000">
            	<?php if( $whysubheading ): ?>
               <small><?php echo $whysubheading;?></small>
               <?php endif;?>
               <?php if( $whyheading ): ?>
               <h2><?php echo $whyheading;?></h2>
                <?php endif;?>
                <?php if( $whycontent ): ?>
                  <p class="mb-5"><?php echo $whycontent;?></p>
                  <?php endif;?>
                   <?php if( get_field('why_ai_certs_thum_image') ): ?>
                   <img src="<?php the_field('why_ai_certs_thum_image'); ?>" class="w-100" alt="Why AI Certs Thumb" />
                  <?php endif; ?>

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
   <section class="cta-certifications">
      <div class="row">
          <?php if( $imagewithtextoverlay ): ?>
         <div class="col-lg-6 cta-bg-card" style="background: url(<?php echo $imagewithtextoverlay['cta_banner'];?>);">
            <div class="cta-cnt-area">
               <h3><?php echo $imagewithtextoverlay['cta_title'];?></h3>
               <p><?php echo $imagewithtextoverlay['cta_content']; ?></p>
               <a href="<?php echo $imagewithtextoverlay['cta_link']; ?>" class="btn btn-primary">
                  <?php echo $imagewithtextoverlay['cta_link_text']; ?>
               </a> 
            </div>
         </div>
          <?php endif;?>
           <?php if( $imagewithtextoverlay2 ): ?>
         <div class="col-lg-6 cta-bg-card technicalbg" style="background: url(<?php echo $imagewithtextoverlay2['cta_banner'];?>);">
            <div class="cta-cnt-area">
               <h3><?php echo $imagewithtextoverlay2['cta_title'];?></h3>
               <p><?php echo $imagewithtextoverlay2['cta_content']; ?></p>
               <a href="<?php echo $imagewithtextoverlay2['cta_link']; ?>" class="btn btn-primary">
                  <?php echo $imagewithtextoverlay2['cta_link_text']; ?>
               </a>
            </div>
         </div>
         <?php endif;?>
      </div>
   </section><!--#Certifications-->
   <!-- InstanceEndEditable -->
</div>
<!--Footer-->
<?php
   // get_sidebar();
    get_footer(); 
    ?>
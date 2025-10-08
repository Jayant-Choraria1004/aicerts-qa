<?php /* Template Name: Template CertLab V1
  */
get_header();
$aicertslabwhite = get_field('aicertslab_white');
$aicertslabblack = get_field('aicertslab_black');
$text_before_logo = get_field('text_before_logo');
$content_after_logo = get_field('content_after_logo');
$rich_text_video_content = get_field('rich_text_video_content');
$lab_faq = get_field('lab_faq');
$lab_faq_heading = get_field('lab_faq_heading');
?>

<section class="banner-video-section">

<div class="bannervideo">
		<video width="100%" autoplay muted loop poster="<?php echo get_template_directory_uri(); ?>">
			<source src="<?php echo get_template_directory_uri(); ?>/images/labvideo.mp4" type="video/mp4">
			</source>
		 </video>
</div>

    <div class="container">
	<div class="row">
		
        
            <div class="col-lg-12">
                <div class="video-banner-cnt labsbanner">
                  <?php if( $text_before_logo ): ?>
                     <h1><?php echo $text_before_logo; ?><br> 
                  <?php endif; ?>
                </h1>
				<div class="brand_logo">
                     <?php if( $aicertslabwhite ): ?>
                        <img class="white_theme_hide" src="<?php echo $aicertslabwhite;?>" alt="<?php echo $aicertslabwhite;?>"/>
                     <?php endif;?>   
                     <?php if( $aicertslabblack ): ?>
                        <img class="black_theme_hide" src="<?php echo $aicertslabblack;?>" alt="<?php echo $aicertslabblack;?>"/>
                     <?php endif;?>   
                  </div>
                <?php if( $content_after_logo ): ?>
                  <p><?php echo $content_after_logo; ?></p>
               <?php endif; ?>
                </div>
            </div>
        </div>
	</div>	
  
</section><!--Top Banner No Overlay Header End-->

<?php if( $rich_text_video_content ): ?>
   <section class="rich-text-video mt-md-5 mb-md-5 text-center">
   <div class="rich-overaly_video ">
                  <!--video width="100%" autoplay muted loop poster="<?php echo get_template_directory_uri(); ?>/images/labsBanner.png">
                           <source src="<?php echo get_template_directory_uri(); ?>/images/rich-text-video.mp4" type="video/mp4">
                           </source>
                        </video-->
               </div>
      <div class="rich-text-video-content">
      <div class="container">
         <h3 class="mb-0 px-lg-5"><span class="primary_color"><?php echo $rich_text_video_content; ?></h3>
      </div>
      </div>                 
   </section>
<?php endif; ?>

<section class="certs_lab-logos-text pt-5">
  <div class="container common-cnt">
     <?php if( have_rows('certs_lab_logos_text') ): ?> 
       <?php while( have_rows('certs_lab_logos_text') ): the_row(); 
                  $certslabvideo = get_sub_field('certs_lab_video');
                  $certslablogo = get_sub_field('certs_lab_logo');
                  $certslablogoblack = get_sub_field('certs_lab_logo_black');
                  $certslabheading = get_sub_field('certs_lab_heading');
                  $certslabcontent = get_sub_field('certs_lab_content');
                  $certslabpoints = get_sub_field('certs_lab_points');
                  $certslabbtntext = get_sub_field('certs_lab_btn_text');
                  $certslabbtnlink = get_sub_field('certs_lab_btn_link');
                  ?> 
            <div class="row justify-content-center text-center labsrow gx-5">              
              <div class="col-12 col-md-5 col-lg-5 mb-4">
                  <!-- <div class="certs_lab-video">
                      <?php if( $certslabvideo ): ?>
                        <img class="video_poster" src="<?php echo $certslabvideo;?>" alt="<?php echo $certslabvideo;?>"/>
                        <img class="video_btn" alt="Play Icon" src="<?php echo esc_url(get_template_directory_uri() . "/images/play-btn.svg"); ?>">
                      <?php endif;?>   
                  </div>                             -->
                  <div class="certs_lab-logo mb-4">
                      <?php if( $certslablogo ): ?>
                      <img class="white_theme_hide" src="<?php echo $certslablogo;?>" alt="<?php echo $certslablogo;?>"/>
                        <?php endif;?>   
                        <?php if( $certslablogoblack ): ?>
                      <img class="black_theme_hide" src="<?php echo $certslablogoblack;?>" alt="<?php echo $certslablogoblack;?>"/>
                        <?php endif;?>                   
                    </div>
               </div>
               <div class="col-12 col-md-7 col-lg-7 mb-5">
                 <div class="certs_lab-text">              
                  <?php if( $certslabheading ): ?>
                     <h2><?php echo $certslabheading;?></h2>
                  <?php endif;?>
                   <?php if( $certslabcontent ): ?>
                  <p><?php echo $certslabcontent;?></p>
                   <?php endif;?>
                   <?php if( $certslabpoints ): ?>
                   <div class="patners_points mb-lg-4 mb-md-4 mb-0"><?php echo $certslabpoints;?></div>
                   <?php endif;?>
                   <?php if( $certslabbtnlink ): ?>
                  <a href="<?php echo $certslabbtnlink;?>" class="btn btn-primary" target="_blank"><?php echo $certslabbtntext;?></a>
                   <?php endif;?>
                </div>
               </div>
              
            </div>
             <?php endwhile; ?> 
            <?php endif; ?>
  </div>
</section><!--#certs_lab-logos-text-->

<?php if($lab_faq): ?>
<section class="h2_faq mb-5  pt-0 pb-lg-5" id="tabFAQs">
   <div class="container common-cnt max-medium-container">
      <div class="faq_wrap home_version2">
         <div class="col-lg-12">
            <?php if($lab_faq_heading): ?>
               <h2 class="mb-4 mb-lg-5 text-center"><?php echo $lab_faq_heading; ?></h2>
            <?php endif; ?>
            <div class="accordion" id="regularAccordionRobots">
               <?php $i=1; foreach($lab_faq as $faq): ?>
                  <div class="accordion-item">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item<?php echo $i; ?>" aria-expanded="false">
                     <?php echo $faq['faq_question'] ?> 
                     </button>
                     <div id="item<?php echo $i; ?>" class="accordion-collapse collapse" style="">
                        <div class="accordion-body">
                           <p><?php echo $faq['faq_answer'] ?></p>
                        </div>
                     </div>
                  </div>
               <?php  $i++; endforeach; ?>
            </div>
         </div>
      </div>
   </div>
</section>
<?php endif; ?>

<!--Footer-->
<?php
// get_sidebar();
get_footer();
?>
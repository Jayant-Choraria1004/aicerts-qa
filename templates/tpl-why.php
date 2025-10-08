<?php /* Template Name: Template Why 
   */ 
   get_header(); 
   $whysubheading = get_field('why_ai_certs_sub_heading');
   $whylink = get_field('why_link');
   $whylinktext = get_field('why_link_text');
   $whyheading = get_field('why_ai_certs_heading');
   $whycontent = get_field('why_ai_certs_content');
   $imagewithtextoverlay = get_field('image_with_text_overlay');
   $imagewithtextoverlay2 = get_field('image_with_text_overlay2');
   ?> 
<!--Header End-->
<!--Header End-->
<div class="middle-section">
   <div class="inner-page certification-page">

       <section class="cert-spec-section listing-pages mb-2 pb-lg-3">
         <div class="container maxwidth">
			<h1 class="mb-2 mb-xl-5"><?php echo get_the_title(); ?> </h1>
            <div class="row">               
                <div class="col-lg-6">   
                <div class="training-partner-img pe-xl-5 text-center" data-aos="fade-up" data-aos-duration="1000">  
                  <?php if( get_field('why_ai_certs') ): ?>
                   <img src="<?php the_field('why_ai_certs'); ?>" alt="Why AI Certs" />
                  <?php endif; ?>
				 <?php if( $whylink ): ?>	
				 <a href="<?php echo $whylink ?>" class="btn btn-primary" download>
                 <?php echo $whylinktext;?>
                </a>
				 <?php endif;?>	
               </div>
               </div>
                <div class="col-lg-6">
                  <div class="common-cnt" data-aos="fade-down" data-aos-duration="1000">
                 <?php if( $whysubheading ): ?>
                  <small><?php echo $whysubheading;?></small>
                  <?php endif;?>
                  <?php if( $whyheading ): ?>
                  <!--h2><?php echo $whyheading;?></h2-->
                   <?php endif;?>
                    <?php if( $whycontent ): ?>
                  <p class="mb-5"><?php echo $whycontent;?></p>
                  <?php endif;?>
                   <?php if( get_field('why_ai_certs_thum_image') ): ?>
                   <img src="<?php the_field('why_ai_certs_thum_image'); ?>" class="w-100" alt="Why AI Certs Thumb" />
                  <?php endif; ?>                    
                    </div>
                </div>
            </div>
         </div>
     </section><!--#ImageWithTet-->

     <section class="cert-spec-section values">
          <div class="container">

             <?php if( have_rows('value_proposition') ): ?> 
            <div class="row">
               <div class="col-lg-3">
                <div class="common-cnt p-md-0 p-sm-0" data-aos="fade-down" data-aos-duration="1000">
                  <small>AI CERTs™</small>
                  <h2>Value<br> Proposition</h2>
               </div>
              </div>
               <?php while( have_rows('value_proposition') ): the_row(); 
                  $valueicon = get_sub_field('value_icon');
                  $valuename = get_sub_field('value_name');
                  ?> 
               <div class="col-lg-3 col-md-6 mb-4">
                  <div class="card">
                     <?php if( $valueicon ): ?>
                     <img src="<?php echo $valueicon;?>" alt=""/>
                      <?php endif;?>
                     <?php if( $valuename ): ?>
                     <h3><?php echo $valuename;?></h3>
                      <?php endif;?>
                  </div>            
               </div>
               <?php endwhile; ?> 
            </div>
            <?php endif; ?>
         </div>    
      </section><!--#values-->

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

   </div>
</div>
<!--Footer-->
<?php
   // get_sidebar();
    get_footer(); 
    ?>
<?php /* Template Name: Exam Process
   */ 
   get_header(); 
   $examheading = get_field('exam_process_heading');
   $examcontent = get_field('exam_process_content');
   $video_url = get_field('exam_process_video_url');
   ?> 
<!--Header End-->
<!--Header End-->
<div class="middle-section">
   <div class="inner-page certification-page pt-5">

       <section class="cert-spec-section pb-1 text-center">
         <div class="container maxwidth">
            <div class="row">               
                <div class="col-lg-12">
                  <div class="common-cnt" data-aos="fade-down" data-aos-duration="1000">               
                  <?php if( $examheading ): ?>
                  <h2><?php echo $examheading;?></h2>
                   <?php endif;?>
                    <?php if( $examcontent ): ?>
                  <p class="mb-5"><?php echo $examcontent;?></p>
                  <?php endif;?>                                   
                    </div>
                </div>
            </div>
         </div>
     </section><!--#TopContent-->

     <section class="cert-spec-section pb-2 pt-2 exam-faqs_section">
         <div class="container max-medium-container">
            <div class="row g-5">       
               <div class="col-lg-12">
                  <div class="examp_step">
                  <iframe width="100%" height="480" src="<?php echo $video_url;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                  </div>
               </div>        
                <div class="col-lg-12">
                  <div class="common-cnt" data-aos="fade-down" data-aos-duration="1000"> 
                     
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
                              <div class="accordion-body exam_faqs">
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
         </div>
     </section><!--#VideoText-->

     <section class="cert-spec-section values">
          <div class="container">
             <?php if( have_rows('value_proposition') ): ?> 
            <div class="row">
               <div class="col-lg-3">
                <div class="common-cnt p-md-0 p-sm-0" data-aos="fade-down" data-aos-duration="1000">
                  <h2>AI CERTs™<br> Proposition</h2>
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
      </section><!--#Examvalues-->

     
   </div>
</div>
<!--Footer-->
<?php
   // get_sidebar();
    get_footer(); 
    ?>
<?php /* Template Name: Template ROI Page V1*/ 
   get_header(); 
   ?>
<style>
   .gfield_description  {
      visibility: hidden;
   }
</style>
<?php if( have_rows('feature_image_with_text') ): ?>
<?php while( have_rows('feature_image_with_text') ): the_row(); ?>

<section class="banner-video-section imgbanner roi-banner">
      <div class="container">
         <div class="row">
            <?php if( get_sub_field('heading') ): ?>
            <div class="col-lg-12">
               <div class="video-banner-cnt">
                  <h1 class="primary_color"><?php the_sub_field('heading'); ?></h1>
                  <?php if( get_sub_field('sub_heading') ): ?>
                  <p><?php the_sub_field('sub_heading'); ?></p>
                  <?php endif; ?>
                  <?php if( get_sub_field('description') ): ?>
                  <p><?php the_sub_field('description'); ?></p>
                  <?php endif; ?>
                  <?php if( get_sub_field('button_text') && get_sub_field('button_link') ): ?>
                  <a href="<?php the_sub_field('button_link'); ?>" class="btn btn-primary"><?php the_sub_field('button_text'); ?></a>
                  <?php endif; ?>
               </div>
            </div>
           <div id="ROICalculatorSectionLanding"></div>
            <?php endif; ?>
         </div>
      </div>
</section>

<!--Image-with-Text-->
<?php endwhile; ?>
<?php endif; ?>

<?php 
   $roi_calculation_section = get_field('roi_calculation_section');
   if($roi_calculation_section):
?>
<section class="mt-lg-3 mb-5 pb-lg-3">
   <div class="container">
      <div class="section_header text-center mb-5">
         <h2><?php echo $roi_calculation_section['section_title']; ?></h2>
      </div>
      <div class="ROICalculator">
         <?php echo do_shortcode($roi_calculation_section['roi_form']); ?>
      </div>
   </div>
</section>
<?php endif; ?>
<!--CustomCalculator-->




<section id="recommonded_certifications" class="ROIGrowth mb-5 pb-lg-3 d-none">
   <div class="container">
      <?php if( have_rows('roigrowth') ): ?>
      <?php while( have_rows('roigrowth') ): the_row(); ?>
      <?php if (get_row_layout() == 'section_header') : // Check for a specific layout ?>
      <?php if( get_sub_field('heading') ): ?>
      <div class="section_header text-center">
         <h2><?php the_sub_field('heading'); ?></h2>
         <?php if( get_sub_field('description') ): ?>
         <p class="fs-4 fw-normal"><?php the_sub_field('description'); ?></p>
         <?php endif; ?>
      </div>
      <?php endif; ?>
      <?php elseif (get_row_layout() == 'course_list') : ?>      
      <div class="RIOCars mt-lg-5">
         <?php if( have_rows('course') ): ?>
         <div class="row g-4 g-lg-5">
            <?php while( have_rows('course') ): the_row(); 
               $image = get_sub_field('image');
               $heading = get_sub_field('heading');
               $content = get_sub_field('content');
               $button_text = get_sub_field('button_text');
               $button_link = get_sub_field('button_link');  
               ?>
            <?php if( $image ): ?> 
            <div class="col-lg-4 col-md-6">
               <div class="DetailCourseCard">
                  <div class="CourseImg position-relative">
                     <?php if( $image ): ?> 
                     <img class="w-100 h-100 position-absolute top-0" src="<?php echo $image;?>" alt="Course">
                     <?php endif;?>
                  </div>
                  <?php if( $heading ): ?>
                  <div class="Courseetail p-4">
                     <h4 class="fw-bold"><?php echo $heading;?></h4>
                     <?php if( $content ): ?>
                     <p class="fs-6"><?php echo $content;?></p>
                     <?php endif;?>
                     <?php if( $button_text && $button_link ): ?>
                     <a href="<?php echo $button_link;?>" class="link primary_color text-decoration-underline fs-6"><?php echo $button_text;?></a>
                     <?php endif;?>
                  </div>
                  <?php endif;?>
               </div>
            </div>
            <?php endif;?>
            <?php endwhile; ?>    
         </div>
         <?php endif; ?>
      </div>
      <?php endif; ?> 
      <?php endwhile; ?>
      <?php endif; ?>   
   </div>
</section>
<!--ROIGrowth-->

<section  class="OurCoreValues mb-5 pb-lg-3 pt-lg-3";>
   <div class="container">
      <?php if( have_rows('ourcorevalues') ): ?>
      <?php while( have_rows('ourcorevalues') ): the_row(); ?>
      <?php if (get_row_layout() == 'section_header') : // Check for a specific layout ?>
      <?php if( get_sub_field('heading') ): ?>
      <div class="section_header text-center">
         <h2 class="primary_color"><?php the_sub_field('heading'); ?></h2>
         <?php if( get_sub_field('description') ): ?>
         <p><?php the_sub_field('description'); ?></p>
         <?php endif; ?>
      </div>
      <?php endif; ?>
      <?php elseif (get_row_layout() == 'core_value') : ?>
      <?php if( have_rows('core_value_card') ): ?>
      <div class="row g-4">
         <?php while( have_rows('core_value_card') ): the_row(); 
            $image = get_sub_field('image');
            $heading = get_sub_field('heading');
            ?>
         <?php if( $image ): ?>
         <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="core-value_card h-100">
               <?php if( $image ): ?>
               <div class="core-value-icon mb-3">
                  <img src="<?php echo $image;?>" alt="icon-core-value">
               </div>
               <?php endif;?>
               <?php if( $heading ): ?>
               <div class="core-value-content">
                  <p class="mb-0"><?php echo $heading;?></p>
               </div>
               <?php endif;?>
            </div>
         </div>
         <?php endif; ?>
         <?php endwhile; ?>
      </div>
      <?php endif; ?>  
      <?php elseif (get_row_layout() == 'cta') : ?>   
      <?php if( get_sub_field('button_text') && get_sub_field('button_link') ): ?>
      <div class="text-center view-all mt-5">
         <a href="<?php the_sub_field('button_link'); ?>" class="btn btn-primary btn-auto"><?php the_sub_field('button_text'); ?></a>
      </div>
      <?php endif; ?>
      <?php endif; ?>  
      <?php endwhile; ?>
      <?php endif; ?>  
   </div>
</section>
<!--Our Core Values End-->
<?php if( have_rows('consultation') ): ?>
    <?php while( have_rows('consultation') ): the_row(); ?>
<section class="Consultation mb-5 position-relative">
   <div class="bg-gradient-overlay">
      <div class="container position-relative">
            <div class="section_header">
                <h2 class="primary_color"><?php the_sub_field('heading'); ?></h2>
                </div>
                  <?php if( get_sub_field('description') ): ?>
                  <p class="white_text"><?php the_sub_field('description'); ?></p>
                  <?php endif; ?>
                  <?php if( get_sub_field('button_text') && get_sub_field('button_link') ): ?>
                  <a href="<?php the_sub_field('button_link'); ?>" class="btn btn-primary mt-4 btn-auto"><?php the_sub_field('button_text'); ?></a>
                  <?php endif; ?>
      </div>
   </div>
   </div>
</section>
<?php endwhile; ?>
      <?php endif; ?>  
<!-- Book Consultation End-->

<?php 
$faqs = get_field('faqs');
if( $faqs ): 
?>
<section class="h2_faq pt-2">
   <div class="container">
      <h2 class="mb-5 text-center">Frequently Asked Questions</h2>
      <div class="faq_wrap">
         <div class="accordion" id="faq-accordion">
            <?php   
             $faqnumber = 1; 
            foreach( $faqs as $faq ): 
                  $questions = $faq['faq_question'];
                  $answer = $faq['faq_answer'];
            ?>
            <div class="accordion-item">
               <h2 class="accordion-header" id="faq_heading1">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_collapse<?php echo $faqnumber;?>" aria-expanded="true" aria-controls="faq_collapse<?php echo $faqnumber;?>">
                  <?php echo $faq['faq_question']; ?>
                  </button>
               </h2>
               <div id="faq_collapse<?php echo $faqnumber;?>" class="accordion-collapse collapse" aria-labelledby="faq_heading1" data-bs-parent="#faq-accordion">
                  <div class="accordion-body">
                     <?php echo $faq['faq_answer']; ?>
                  </div>
               </div>
            </div>
            <?php $faqnumber++;  endforeach; ?>
         </div>
      </div>
   </div>
</section>
<?php endif; ?>
<!--FAQs End-->
<!--Footer-->

<script>
jQuery(document).ready(function(){

   jQuery(".gfield_description").hide();

   jQuery(document).on('gform_confirmation_loaded', function(event, formId) {
      console.log('form submitted:'+formId);
      jQuery("#recommonded_certifications").removeClass("d-none");
   });
});
</script>

<?php
   // get_sidebar();
   get_footer();
?>
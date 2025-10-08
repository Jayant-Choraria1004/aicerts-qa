<?php
   /*
    * Template Name: Certification Process V1
    */
   get_header();
   function numberToWord($number) {
      $words = [
         1 => 'one',
         2 => 'two',
         3 => 'three',
         4 => 'four',
         5 => 'five',
         6 => 'six',
         7 => 'seven',
         8 => 'eight',
         9 => 'nine',
         10 => 'ten'
      ];   
      return $words[$number] ?? 'Number out of range';
   }
   $process_steps = get_field('process_steps');
   $banner_heading = get_field('banner_heading');
   $banner_subheading = get_field('banner_subheading');
   $apply_for_certification_now_url = get_field('apply_for_certification_now_url');
   $banner_image = get_field('banner_image');
   $introduction_heading = get_field('introduction_heading');
   $introduction_content = get_field('introduction_content');
   $why_choose_ai_certs_certification_heading = get_field('why_choose_ai_certs_certification_heading');
   $why_choose_ai_certs_certification_content = get_field('why_choose_ai_certs_certification_content');
   $join_ai_certs_content = get_field('join_ai_certs_content');
   $know_more_about_our_team_link = get_field('know_more_about_our_team_link');
   $faq_heading = get_field('faq_heading');
   $faq = get_field('faq');
?>

<section class="no_overlay-header aict_top-image_with-text cmn-section">
   <div class="container">
      <div class="position-relative row flex-row-reverse align-items-center g-4">
         <div class="col-lg-6">
            <div class="top-image">
             <img class="w-100" alt="TopWebImg" src="<?php echo $banner_image; ?>">
            </div>
         </div>
         <div class="col-lg-6">
            <div class="top-content">
               <h1 class="primary_color"><?php echo $banner_heading; ?></h1>
               <h2 class="mb-4 fw-normal"><?php echo $banner_subheading; ?></h2>
               <a href="<?php echo $apply_for_certification_now_url; ?>" class="btn btn-primary">Apply for Certification Now</a>
            </div>
         </div>
      </div>
   </div>
</section><!--#TopImageText End -->

<section class="rich-text gray-bg rich-box-shadow pt-5 pb-5 common-section">
    <div class="container custom-width">
        <div class="RichTextContent text-center">
            <h2><?php echo $introduction_heading; ?></h2>
            <p class="modify-text mx-auto m-1"><?php echo $introduction_content; ?></p>
        </div>
    </div>
</section><!--#RichText End -->


<?php if($process_steps): ?>
   <section class="StepImageText common-section">
      <div class="container">
         <?php $i=1; foreach($process_steps as $steps): ?>
            <div class="step-process mb-5 pb-4">
               <div class="step-count-card <?php echo ($i != 1) ? 'd-flex' : ''; ?>  <?php echo ($i%2) == 0 ? 'space_right justify-content-end' : 'space_left'; ?> s_<?php echo numberToWord($i); ?>">
                  <?php if($i != 1 ): ?>
                     <?php if(($i%2) == 0): ?>
                        <span class="dashed-border">
                           <img alt="DashedBorder" src="<?php echo esc_url(get_template_directory_uri() . "/images/dashed-border-r.svg"); ?>">
                        </span>
                        <span class="s-count">Step <?php echo $i; ?></span>
                     <?php else: ?>
                        <span class="s-count">Step <?php echo $i; ?></span>
                        <span class="dashed-border">
                           <img alt="DashedBorder" src="<?php echo esc_url(get_template_directory_uri() . "/images/dashed-border-l.svg"); ?>">
                        </span>
                     <?php endif; ?>
                     <?php else: ?>
                        <span class="s-count">Step <?php echo $i; ?></span>
                  <?php endif; ?>
               </div>
               <div class="step-card-cover">
                  <div class="position-relative row <?php echo ($i%2) == 0 ? '' : 'flex-row-reverse'; ?>  align-items-center g-4">
                     <div class="col-lg-6">
                        <div class="step_img-card">
                           <img class="w-100" alt="Step-1" src="<?php echo $steps['step_image']; ?>">
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="step-content">
                           <h2><?php echo $steps['step_heading']; ?></h2>
                           <h4 class="fw-normal"><?php echo $steps['step_subheading']; ?></h4>
                           <?php if($steps['step_feature_point']): ?>
                              <ul class="step-feature-points">
                                 <?php foreach($steps['step_feature_point'] as $stepheading): ?>
                                    <li><?php echo $stepheading['feature_point']; ?></li>
                                 <?php endforeach; ?>
                              </ul>
                           <?php endif; ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         <?php $i++; endforeach; ?>
      </div>
   </section><!--#StepImageText End -->
<?php endif; ?>

<section class="rich-text rich-text common-section">
    <div class="container custom-width">
        <div class="RichTextContent Floral-White-bg rich-box-shadow rich-radius text-center">
            <h2><?php echo $why_choose_ai_certs_certification_heading; ?></h2>
            <p><?php echo $why_choose_ai_certs_certification_content; ?></p>
        </div>
    </div>
</section><!--#RichText End -->

<section class="rich-text gray-bg rich-radius pt-5 pb-5 common-section">
    <div class="container custom-width">
        <div class="RichTextContent text-center">
            <h2><?php echo $join_ai_certs_content; ?></h2>
            <a href="<?php echo $know_more_about_our_team_link; ?>" class="btn btn-primary mt-4">Know More about Our Team</a>
        </div>
    </div>
</section><!--#RichText End -->

<section class="h2_faq pt-0">
   <div class="container">
      <h2 class="white_text mb-5 text-center"><?php echo $faq_heading; ?></h2>
      <div class="faq_wrap">
         <?php if( $faq ): ?>
            <div class="accordion" id="faq-accordion">
               <?php $faqnumber = 1; 
                  foreach( $faq as $faqs ): 
                     $questions = $faqs['faq_question'];
                     $answer = $faqs['faq_content'];
               ?>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="faq_heading<?php echo $faqnumber;?>">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_collapse<?php echo $faqnumber;?>" aria-expanded="true" aria-controls="faq_collapse<?php echo $faqnumber;?>"><?php echo $questions;?> </button>
                  </h2>
                  <div id="faq_collapse<?php echo $faqnumber;?>" class="accordion-collapse collapse" aria-labelledby="faq_heading<?php echo $faqnumber;?>" data-bs-parent="#faq-accordion">
                     <div class="accordion-body">
                        <?php echo $answer;?>
                     </div>
                  </div>
               </div>
               <?php $faqnumber++; endforeach; ?>
            </div>
         <?php endif; ?>
      </div>
   </div>
</section><!--#FAQs End -->

<!--Footer-->
<?php
// get_sidebar();
get_footer(); 
?> 
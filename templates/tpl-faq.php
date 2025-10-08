<?php 
/* 
 * Template Name: Template FAQ
 */ 

 get_header(); 

$home_page_id = get_option('page_on_front');
$faq_heading = get_field('faq_heading', $home_page_id);
$faq_accordion = get_field('faq_accordion', $home_page_id);
?> 

<?php if($faq_heading): ?>
<section class="banner-video-section faqbannersection">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">        
          <h1 class="text-center text-white"><?php echo $faq_heading; ?></h1>        
      </div>
    </div>
  </div>
</section>

    <section class="h2_faq pt-2">
        <div class="container">            
            <div class="faq_wrap">
            <?php if( $faq_accordion ): ?>
                <div class="accordion" id="faq-accordion">
                <?php $faqnumber = 1; 
                    foreach( $faq_accordion as $faqs ): 
                        $questions = $faqs['faq_question'];
                        $answer = $faqs['faq_answer'];
                    ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq_heading1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_collapse<?php echo $faqnumber;?>" aria-expanded="true" aria-controls="faq_collapse<?php echo $faqnumber;?>"><?php echo $questions;?></button>
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
    </section><!--FAQs End-->
<?php endif; ?>
<!--Footer-->
<?php
// get_sidebar();
get_footer(); 
?>

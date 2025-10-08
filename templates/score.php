<?php
/*
 *    Template Name: Score-v1
 */
get_header();

$top_heading = get_field('top_banner_heading');
$top_subheading = get_field('top_banner_subheading');
$top_content = get_field('top_banner_content');
$top_cta_text = get_field('top_banner_cta_text');
$top_cta_link = get_field('top_banner_cta_link');

$assessment_heading = get_field('assessment_heading');
$assessment_content = get_field('assessment_content');

$adaptable_heading = get_field('adaptable_heading');
$adaptable_content = get_field('adaptable_content');
$adaptable_cta_text = get_field('adaptable_cta_text');
$adaptable_cta_link = get_field('adaptable_cta_link');

$revolutionize_heading = get_field('revolutionize_heading');
$revolutionize_content = get_field('revolutionize_content');

$partners_heading = get_field('partners_heading');
$partners_content = get_field('partners_content');
$partners_logos = get_field('partners_logos');
$partners_cta_text = get_field('partners_cta_text');
$partners_cta_link = get_field('partners_cta_link');

$future_heading = get_field('future_heading');
$future_content = get_field('future_content');

$dd_heading = get_field('dive_deeper_heading');
$dd_content = get_field('dive_deeper_content');
$dd_cta_text = get_field('dive_deeper_cta_text');
$dd_cta_link = get_field('dive_deeper_cta_link');

$faq_heading = get_field('faq_heading');
$faq_accordion = get_field('faq_accordion');

$select_popup_form = get_field('select_popup_form');


?>
<div class="middle-section">

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Get Your AI Score</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!--div class="modal-body">
        <?php echo do_shortcode($select_popup_form); ?>		
      </div-->
	  <div class="modal-body">
        <p class="mb-0">Coming Soon...</p>
      </div>
	  
	  
    
    </div>
  </div>
</div>

    <section class="banner-video-section imgbanner score-banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="video-banner-cnt">
              <?php if( $top_heading ): ?>
                <h1><span class="primary_color"><?php echo $top_heading;?></span></h1>
              <?php endif;?>
              <?php if( $top_subheading ): ?>
                <h2><?php echo $top_subheading;?></h2>
              <?php endif;?>
                <?php if( $top_content ): ?>
                  <p><?php echo $top_content;?></p>
                <?php endif;?>
                <?php if( $top_cta_link ): ?>
                  <a href="<?php echo $top_cta_link ?>" class="btn btn-primary me-3" type="button"><?php echo $top_cta_text;?></a>				  
                <?php endif;?>
            </div>
          </div>
        </div>
      </div>
    </section><!-- Score Banner End -->

  <section class="common-section">
    <div class="container">
      <div class="text-center">
        <?php if( $assessment_heading ): ?>
          <h2 class="mb-4"><?php echo $assessment_heading;?></h2>
        <?php endif;?>
        <?php if( $assessment_content ): ?>
          <p class="white_text mb-5"><?php echo $assessment_content;?></p>
        <?php endif;?>
      </div>

      <?php if( have_rows('assessment_card') ): ?>
        <div class="row gx-lg-5 gy-lg-0 gy-3">
          <?php while( have_rows('assessment_card') ): the_row(); 
              $icon = get_sub_field('icon');
              $icon_heading = get_sub_field('icon_heading');  
              ?>
          <div class="col-lg-4">
            <div class="assessment-cards">
              <?php if( $icon ): ?>
              <div class="amt-cardsicons"><img src="<?php echo $icon;?>" alt="Assessment Icon"></div>
              <?php endif;?>
              <?php if( $icon_heading ): ?>
              <div class="amt-cards-text"><?php echo $icon_heading;?></div>
              <?php endif;?>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?> 

    </div>
  </section><!-- Talent Assessment End -->

  <section class="common-section">
    <div class="container adaptable-bg cmn-section">
      <div class="text-center">
        <?php if( $adaptable_heading ): ?>
          <h2 class="mb-4"><?php echo $adaptable_heading;?></h2>
        <?php endif;?>
        <?php if( $adaptable_content ): ?>
          <p class="white_text mb-5"><?php echo $adaptable_content;?></p>
        <?php endif;?>
      </div>

      <?php if( have_rows('adaptable_card') ): ?>
        <div class="adaptable_row">
          <?php while( have_rows('adaptable_card') ): the_row(); 
              $icon = get_sub_field('percent_image');
              $icon_heading = get_sub_field('percent_title');
              $icon_text = get_sub_field('percent_content');  
              ?>
            <div class="adaptable_card">
              <?php if( $icon ): ?>
              <div class="mb-3"><img src="<?php echo $icon;?>" alt="Percent Icon"></div>
              <?php endif;?>
              <?php if( $icon_heading ): ?>
              <h5 class="mb-2 fw-bold"><?php echo $icon_heading;?></h5>
              <?php endif;?>
              <?php if( $icon_text ): ?>
              <p><?php echo $icon_text;?></p>
              <?php endif;?>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>

      <?php if( $adaptable_cta_link ): ?>
        <div class="text-center mt-5">
          <a href="<?php echo $adaptable_cta_link ?>" class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><?php echo $adaptable_cta_text;?></a>
        </div>
      <?php endif;?>
    
    </div>
  </section><!-- Adaptable End -->

  <section class="common-section">
    <div class="container">
      <div class="text-center">
        <?php if( $revolutionize_heading ): ?>
          <h2 class="mb-4"><?php echo $revolutionize_heading;?></h2>
        <?php endif;?>
        <?php if( $revolutionize_content ): ?>
          <p class="white_text mb-5"><?php echo $revolutionize_content;?></p>
        <?php endif;?>
      </div>

      <?php if( have_rows('revolutionize_card') ): ?>
        <div class="adaptable_row">
          <?php while( have_rows('revolutionize_card') ): the_row(); 
              $card_image = get_sub_field('card_image');
              $card_heading = get_sub_field('card_heading');
              $card_content = get_sub_field('card_content');  
              ?>
            <div class="revolutionize_card">
              <?php if( $card_image ): ?>
              <div class="mb-3"><img src="<?php echo $card_image;?>" alt="Revolutionize Image"></div>
              <?php endif;?>
              <?php if( $card_heading ): ?>
              <h5 class="mb-2 fw-bold"><?php echo $card_heading;?></h5>
              <?php endif;?>
              <?php if( $card_content ): ?>
              <p><?php echo $card_content;?></p>
              <?php endif;?>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>    

    </div>
  </section><!-- Revolutionize End -->

  <section class="common-section adaptable-bg h2_partners_logo">
    <div class="container">
      <div class="text-center">
        <?php if( $partners_heading ): ?>
          <h2 class="mb-4"><?php echo $partners_heading;?></h2>
        <?php endif;?>
        <?php if( $partners_content ): ?>
          <p class="white_text mb-5"><?php echo $partners_content;?></p>
        <?php endif;?>
      </div>
      <div class="h2_partners_logo_slider mt-md-3 mt-3 cmn-sliderdots offsetarrow">
        <div class="owl-carousel owl-theme">
            <?php if($partners_logos): ?>
            <?php foreach($partners_logos as $p_logo):?>
            <div class="item">
              <div class="h2_aicerts_lab_box">
                  <!-- <img src="<?php echo $p_logo['partner_lab_logo']; ?>" alt=""> -->
                  <img src="<?php echo $p_logo['partner_lab_logo']; ?>" alt="" class="aicerts_lab_white">
                  <img src="<?php echo $p_logo['black_partner_lab_logo']; ?>" alt="" class="aicerts_lab_black">
              </div>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
      </div>
      <?php if( $partners_cta_link ): ?>
        <div class="text-center mt-5">
          <a href="<?php echo $partners_cta_link ?>" class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><?php echo $partners_cta_text;?></a>
        </div>
      <?php endif;?>
      
  </section><!-- Partners End -->

  <section class="common-section">
    <div class="container">
      <div class="scoreherocard">
        <?php if( $dd_heading ): ?>
          <h2 class="text-white"><?php echo $dd_heading;?></h2>
        <?php endif;?>
        <?php if( $dd_content ): ?>
          <h3 class="text-white"><?php echo $dd_content;?></h3>
        <?php endif;?>
        <?php if( $dd_cta_link ): ?>
          <a href="<?php echo $dd_cta_link ?>" class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><?php echo $dd_cta_text;?></a>
        <?php endif;?>
      </div>      
    </div>
  </section><!-- Future of AI End -->
  <?php /*
  <section class="common-section cmn-section scorecta">
    <div class="container text-center">    
      <div class="scorecta-cnt">
      <?php if( $dd_heading ): ?>
          <h2 class="mb-4"><?php echo $dd_heading;?></h2>
        <?php endif;?>
        <?php if( $dd_content ): ?>
          <h3><?php echo $dd_content;?></h3>
        <?php endif;?>
        <?php if( $dd_cta_link ): ?>
          <a href="<?php echo $dd_cta_link ?>" class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><?php echo $dd_cta_text;?></a>
        <?php endif;?>
      </div>  
    </div>
  </section><!-- >Dive Deeper End --> 
  */ ?>

  <section class="h2_faq pt-0">
        <div class="container">
        <?php if($faq_heading): ?>
            <h2 class="white_text mb-3 mb-md-5 text-center"><?php echo $faq_heading; ?></h2>
        <?php endif; ?>
            <div class="faq_wrap">
            <?php if( $faq_accordion ): ?> 
                <div class="accordion" id="faq-accordion">
                <?php $faqnumber = 1; 
                    foreach( $faq_accordion as $faqs ): 
                        $questions = $faqs['faq_question'];
                        $answer = $faqs['faq_answer'];
                    ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq_heading<?php echo $faqnumber; ?>">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_collapse<?php echo $faqnumber;?>" aria-expanded="false" aria-controls="faq_collapse<?php echo $faqnumber;?>"><?php echo $questions;?></button>
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
    </section><!-- FAQs End -->



<?php
get_footer();
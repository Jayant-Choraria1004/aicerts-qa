<?php
/*
 *    Template Name: recertification
 */
get_header();
$top_heading = get_field('top_banner_heading');
$top_content = get_field('top_banner_content');
$top_cta_text = get_field('top_banner_cta_text');
$top_cta_link = get_field('top_banner_cta_link');

$WhatisRecer_title = get_field('whatisrecer_title');
$whatisrecer_content = get_field('whatisrecer_content');
$whatisrecer_subtitle = get_field('whatisrecer_subtitle');
$whyrecertify_points = get_field('why_recertify_points');

$Reattempt_heading = get_field('reattempt_heading');
$reattempt_subheading = get_field('reattempt_subheading');

$Reattempt_policy = get_field('reattempt_policy_heading');
$Reattempt_note = get_field('reattempt_policy_note');

$assistance_heading = get_field('assistance_heading');
$assistance_content = get_field('assistance_content');
$contact_heading = get_field('contact_heading');
$contactlist = get_field('contactlist');
$contant_cta_text = get_field('contant_cta_text');
$contant_cta_link = get_field('contant_cta_link');

$buynow_cta_link = get_field('buynow_cta_link' );
$reattempt_cta_link = get_field('reattempt_cta_link' );

$recertification_faqs = get_field('recertification_faqs');
?>

<div class="middle-section">
  
    <section class="banner-video-section imgbanner rc-banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="video-banner-cnt">
                <?php if( $top_heading ): ?>
                  <?php echo $top_heading;?>
                <?php endif;?>
                <?php if( $top_content ): ?>
                  <p><?php echo $top_content;?></p>
                <?php endif;?>
                <?php if( $top_cta_link ): ?>
                  <a href="<?php echo $top_cta_link ?>" class="btn btn-primary me-3"><?php echo $top_cta_text;?></a>
                <?php endif;?>	
            </div>
          </div>
        </div>
      </div>
    </section><!-- TopBanner -->
  
  
    <section class="common-section">
      <div class="container">
        <div class="row gx-lg-5">
          <div class="col-lg-6">
            <?php if( get_field('WhatisRecer') ): ?>
              <img class="w-100 rc-img-shadow" src="<?php the_field('WhatisRecer'); ?>" alt="recertification-img" />
            <?php endif; ?>
          </div>
          <div class="col-lg-6">
            <div class="ab-whyaict-cnt mt-lg-0 mt-4">
              <?php if( $WhatisRecer_title ): ?>
                <h2 class="primary_color mb-3"><?php echo $WhatisRecer_title;?></h2>
                <?php endif;?>
              <?php if( $whatisrecer_content ): ?>
                <p><?php echo $whatisrecer_content;?></p>
              <?php endif;?> 
              <?php if($whatisrecer_subtitle): ?>
                <h4 class="primary_color mb-2"><?php echo $whatisrecer_subtitle;?></h4>
              <?php endif;?>
              <?php if($whyrecertify_points): ?>
                <?php echo $whyrecertify_points;?>
              <?php endif;?>
            </div>
            <?php if( $buynow_cta_link ): ?>
              <a href="<?php echo $buynow_cta_link['url']; ?>" class="btn btn-primary mt-3"><?php echo $buynow_cta_link['title']; ?></a>
            <?php endif;?>
          </div>
        </div>
      </div>
    </section><!-- WhatisRecertification? -->

    <section class="common-section">
      <div class="container">

          <?php if( $Reattempt_heading ): ?>
            <h2 class="text-center"><?php echo $Reattempt_heading;?></h2>
          <?php endif;?>
          <?php if( $reattempt_subheading ): ?>
            <p class="text-center mb-5"><?php echo $reattempt_subheading;?></p>
          <?php endif;?>

          <?php if( have_rows('reattempt_list_items') ): ?>
            <div class="row g-md-4">
            <?php while( have_rows('reattempt_list_items') ): the_row(); 
                $step = get_sub_field('step');
                $title = get_sub_field('title'); 
                $description = get_sub_field('description'); 
            ?>
                <div class="col-lg-3 cardshapebg1 position-relative">
                  <div class="reattempt_cards">
                    <?php if( $step ): ?>
                      <label><?php echo $step;?></label>
                    <?php endif;?>
                    <?php if( $title ): ?>
                      <h4><?php echo $title;?></h4>
                    <?php endif;?>
                    <?php if( $description ): ?>
                      <p><?php echo $description;?></p>
                    <?php endif;?>
                  </div>
                </div>
            <?php endwhile; ?>
			<div class="text-center mt-4">
          <?php if( $buynow_cta_link ): ?>
              <a href="<?php echo $buynow_cta_link['url']; ?>" class="btn btn-primary mt-3"><?php echo $buynow_cta_link['title']; ?></a>
          <?php endif;?>
			</div>
          </div>
        <?php else: ?>
            <p class="text-center mb-4">Coming soon content here...</p>
        <?php endif; ?>

      </div>
    </section><!-- Reattempt -->

    <section class="common-section">
      <div class="container">
        <?php if( $Reattempt_policy ): ?>
          <h2 class="text-center md-4"><?php echo $Reattempt_policy;?></h2>
        <?php endif;?>
  
        <div class="row gx-lg-5">
          
          <div class="col-lg-7">
            <?php if( get_field('reattmp_policy_image') ): ?>
              <img class="w-100" src="<?php the_field('reattmp_policy_image'); ?>" alt="Policy"/>
            <?php endif; ?>
          </div>

          <div class="col-lg-5">
            <?php if( have_rows('reattempt_policy_items') ): ?>
              <ul class="reattempt_listing">
              <?php while( have_rows('reattempt_policy_items') ): the_row(); 
                $icon = get_sub_field('icon');
                $icon_heading = get_sub_field('icon_heading');  
              ?>
                  <li>
                    <?php if( $icon ): ?>
                    <div class="rcicons"><img src="<?php echo $icon;?>" alt="Policy Icon"></div>
                    <?php endif;?>
                    <?php if( $icon_heading ): ?>
                      <div class="policy-point-item"><?php echo $icon_heading;?></div>
                    <?php endif;?>
                  </li>
              <?php endwhile; ?>
              </ul>
            <?php endif; ?>
          </div>

          <?php if( $Reattempt_note ): ?>
          <h4 class="text-center md-4"><i><?php echo $Reattempt_note;?></i></h4>
          <?php endif;?>
		  <div class="text-center mt-2">
            <?php if( $buynow_cta_link ): ?>
              <a href="<?php echo $buynow_cta_link['url']; ?>" class="btn btn-primary mt-3"><?php echo $buynow_cta_link['title']; ?></a>
            <?php endif;?>
		  </div>

        </div>
      </div>
    </section><!-- Reattempt Policy -->

    <section class="common-section light-primary-bg-color">
      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-lg-6">
            <div class="ab-whyaict-cnt mt-lg-0 mt-4">

                <?php if( $assistance_heading ): ?>
                  <h2 class="primary_color mb-3"><?php echo $assistance_heading;?></h2>
                <?php endif;?>
                <?php if( $assistance_content ): ?>
                  <p><?php echo $assistance_content;?></p>
                <?php endif;?>
                <?php if( $contact_heading ): ?>
                <h4 class="mb-2"><?php echo $contact_heading;?></h4>
                <?php endif;?>
                <div class="mb-4">
                  <?php if($contactlist): ?>
                    <?php echo $contactlist;?>
                  <?php endif;?>
                </div>
              <?php if( $contant_cta_link ): ?>
                  <a href="<?php echo $contant_cta_link['url'] ?>" class="btn btn-primary me-2 mb-3 mb-md-0"><?php echo $contant_cta_text;?></a>
              <?php endif;?>	
              <?php if( $reattempt_cta_link ): ?>
                    <a href="<?php echo $reattempt_cta_link['url']; ?>" class="btn btn-primary me-2 mb-3 mb-md-0"><?php echo $reattempt_cta_link['title']; ?></a>
              <?php endif;?>
            </div>
          </div>

          <div class="col-lg-6">
              <img alt="" class="" src="<?php echo esc_url(get_template_directory_uri() . "/images/assistance-img.png"); ?>">
          </div>

        </div>
      </div>
    </section><!-- Need Assistance? -->


    <?php if($recertification_faqs): ?>
    <section class="h2_faq pt-0">
      <div class="container cmn-container">
        <div class="row">
          <div class="col-md-12 col-lg-8 col-xxl-6 mx-auto text-center mb-4">
              <h2 class="mb-2">Frequently Asked Questions</h2>
          </div>
          
          <div class="col-lg-12">
            <div class="accordion" id="accordionFAQ">
            <?php $i=1; foreach($recertification_faqs as $faq): ?>
              <div class="accordion-item">
                <h2 class="accordion-header" id="h2faq-heading<?php echo $i; ?>">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#h2faq-collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="h2faq-collapse<?php echo $i; ?>"><?php echo $faq['faq_question']; ?></button>
                </h2>
                <div id="h2faq-collapse<?php echo $i; ?>" class="accordion-collapse collapse"
                  aria-labelledby="h2faq-heading<?php echo $i; ?>" data-bs-parent="#accordionFAQ">
                  <div class="accordion-body">
                    <?php echo $faq['faq_answer']; ?>
                  </div>
                </div>
              </div>
            <?php $i++; endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>
<?php
get_footer();
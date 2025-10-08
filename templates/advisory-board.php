<?php
/*
 *    Template Name: Advisory Board
 */
get_header();

$advisory_banner_heading1 = get_field('advisory_banner_heading1');
$advisory_banner_heading2 = get_field('advisory_banner_heading2');
$advisory_banner_subheading = get_field('advisory_banner_subheading');
$advisory_banner_button_text = get_field('advisory_banner_button_text');
$advisory_banner_button_url = get_field('advisory_banner_button_url');
$highlighted_content_heading = get_field('highlighted_content_heading');
$highlighted_content = get_field('highlighted_content');
$why_ai_certs_image = get_field('why_ai_certs_image');
$why_ai_certs_heading = get_field('why_ai_certs_heading');
$why_ai_certs_content = get_field('why_ai_certs_content');
$our_leadership_team_heading = get_field('our_leadership_team_heading');
$our_leadership_team_slider = get_field('our_leadership_team_slider');
$plans = get_field('plans');
$group_meetup_image = get_field('group_meetup_image');
$group_meetup_heading = get_field('group_meetup_heading');
$group_meetup_content = get_field('group_meetup_content');
$recognition_heading = get_field('recognition_heading');
$recognition_subheading = get_field('recognition_subheading');
$recognition_card = get_field('recognition_card');
$apply_to_become_an_advisor_text = get_field('apply_to_become_an_advisor_text');
$apply_to_become_an_advisor_link = get_field('apply_to_become_an_advisor_link');
$our_strategic_partners_heading = get_field('our_strategic_partners_heading');
$our_strategic_partners_slider = get_field('our_strategic_partners_slider');
$view_all_partner_text = get_field('view_all_partner_text');
$view_all_partner_link = get_field('view_all_partner_link');
$become_part_of_our_advisory_team_heading = get_field('become_part_of_our_advisory_team_heading');
$become_part_of_our_advisory_team_content = get_field('become_part_of_our_advisory_team_content');
$apply_to_become_an_advisor_button_text = get_field('apply_to_become_an_advisor_button_text');
$apply_to_become_an_advisor_button_link = get_field('apply_to_become_an_advisor_button_link');
$advisory_board_form = get_field('advisory_board_form');

?>
<div class="middle-section">
  <?php if($advisory_banner_heading1): ?>
    <section class="banner-video-section imgbanner ab-banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="video-banner-cnt">
                <h1><?php echo $advisory_banner_heading1; ?> <span class="primary_color"><?php echo $advisory_banner_heading2; ?></span></h1>
                <p><?php echo $advisory_banner_subheading; ?></p>
                <a href="<?php echo $advisory_banner_button_url; ?>" class="btn btn-primary me-3" ><?php echo $advisory_banner_button_text; ?></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php if($highlighted_content_heading || $highlighted_content): ?>
  <section class="common-section ab_hero_sec">
    <div class="container maxwidth">
    <?php if($highlighted_content_heading): ?>
      <h2 class="primary_color mb-4"><?php echo $highlighted_content_heading; ?></h2>
    <?php endif; ?>
    <?php if($highlighted_content): ?>
      <p class="white_text"><?php echo $highlighted_content; ?></p>
    <?php endif; ?>
    </div>
  </section>
  <?php endif; ?>

  <?php if($why_ai_certs_heading): ?>
    <section class="common-section">
      <div class="container maxwidth">
        <div class="row">
          <div class="col-12">
            <div class="ab-whyaict-card">
              <div class="ab-whyaict-img">
                <?php if($why_ai_certs_image): ?>
                  <img alt="" src="<?php echo $why_ai_certs_image; ?>">
                <?php else: ?>
                  <img alt="" src="<?php echo esc_url(get_template_directory_uri() . "/images/ab-why-aict.jpg"); ?>">
                <?php endif; ?>
              </div>
              <div class="ab-whyaict-cnt">
                <h2 class="primary_color mb-3"><?php echo $why_ai_certs_heading; ?></h2>
                <?php echo $why_ai_certs_content; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php if($our_leadership_team_heading): ?>
    <!--section class="common-section ab-team cmn-sliderdots">
      <div class="container">
        <h2 class="primary_color text-center mb-3 mb-lg-5"><?php echo $our_leadership_team_heading; ?></h2>
        <div class="row">
          <div class="col-xl-12">
            <div class="owl-carousel abteam-carousel owl-theme">
              <?php if($our_leadership_team_slider): ?>
                <?php foreach($our_leadership_team_slider as $slider1): ?>
                  <div class="ab-team-card">
                    <div class="ab-team-cardin">
                      <div class="ab-teamcard-img">
                        <img class="w-100" alt="" src="<?php echo $slider1['leader_image']; ?>">
                      </div>
                      <div class="ab-teamcard-cnt">
                        <p class="white_text"><?php echo $slider1['leader_detail']; ?></p>
                        <h3><?php echo $slider1['leader_name']; ?></h3>
                        <p><span><?php echo $slider1['leader_designation']; ?></span></p>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </div> 
        </div> 
      </div> 
    </section-->
  <?php endif; ?>

  <?php if($plans): ?>
  <?php foreach($plans as $plan): ?>
    <section class="common-section ab-plans">
      <div class="container maxwidth">
        <h2 class="primary_color text-center mb-3"><?php echo $plan['platform_advisory_board_plan_heading']; ?></h2>
        <p class="white_text text-center mb-3 mb-lg-5 subtitle"><?php echo $plan['platform_advisory_board_plan_highlighted_content']; ?></p>
        <div class="row gx-5">
          <div class="col-lg-6 mb-5">
            <?php if($plan['plan_card_one_heading']): ?>
              <div class="ab-whatcards">
                <h3><?php echo $plan['plan_card_one_heading']; ?></h3>
                <?php if($plan['plan_card_one_content']): ?>
                  <?php echo $plan['plan_card_one_content']; ?>
                <?php endif; ?>
              </div>
            <?php endif; ?>
          </div>
          <div class="col-lg-6 mb-5">
            <?php if($plan['plan_card_two_heading']): ?>
              <div class="ab-whatcards">
                  <h3><?php echo $plan['plan_card_two_heading']; ?></h3>
                <?php if($plan['plan_card_two_content']): ?>
                  <?php echo $plan['plan_card_two_content']; ?>
                <?php endif; ?>
              </div>
            <?php endif; ?>
          </div>
          <?php if($plan['plan_commitment_heading']): ?>
          <div class="col-lg-12">
            <div class="ab-commitment-card">
              <?php if($plan['platform_advisory_image']): ?>
                <img alt="" src="<?php echo $plan['platform_advisory_image']; ?>">
              <?php else: ?>
                <img alt="" src="<?php echo esc_url(get_template_directory_uri() . "/images/icon-commitment.svg"); ?>">
              <?php endif; ?>
              <div class="ab-commitment-cnt">
                <h3><?php echo $plan['plan_commitment_heading']; ?></h3>
                <p class="white_text"><?php echo $plan['plan_commitment_content']; ?></p>
              </div>
            </div>
          </div>
          <?php endif; ?>
        </div>
		
        <div class="row">

          <?php if($plan['platform_advisory_board_plan_slider']): ?>
          <?php foreach($plan['platform_advisory_board_plan_slider'] as $plan_data): ?>
            <div class="col-lg-6">
              <div class="ab-plan-card">
                <div class="ab-pan-img">
                  <img class="w-100" alt="" src="<?php echo $plan_data['platform_advisory_image']; ?>">
                  <label><?php echo $plan_data['platform_advisory_designation']; ?></label>
                </div>
                <div class="ab-pan-cnt">
                  <p class="white_text"><?php echo $plan_data['platform_advisory_detail']; ?></p>
                  <h3><?php echo $plan_data['platform_advisory_name']; ?></h3>
                  <p><?php echo $plan_data['platform_advisory_company']; ?></p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          <?php endif; ?>

        </div> 
      </div> 
    </section>
  <?php endforeach; ?>
  <?php endif; ?>
  
  <?php if($group_meetup_heading): ?>
    <section class="common-section ab-meetupsection">
      <div class="container maxwidth">
        <div class="row">
			<div class="col-12">
				<div class="ab-meetup-card">
					<div class="ab-meetupimg">
            <?php if($group_meetup_image): ?>
              <img alt="" src="<?php echo $group_meetup_image; ?>">
            <?php else: ?>
              <img alt="" src="<?php echo esc_url(get_template_directory_uri() . "/images/meetupimg.jpg"); ?>">
            <?php endif; ?>
					</div>
					<div class="ab-meetupimg-cnt">
						<h3><?php echo $group_meetup_heading; ?></h3>
						<p class="white_text"><?php echo $group_meetup_content; ?></p>
					</div>
					
				</div>
			</div>
        </div> 
      </div> 
    </section>
  <?php endif; ?>
  
  <?php if($recognition_heading): ?>
    <section class="common-section ab-plans mb-2">
      <div class="container maxwidth">
        <h2 class="primary_color text-center mb-3"><?php echo $recognition_heading; ?></h2>
		    <p class="white_text text-center mb-3 mb-lg-5 subtitle"><?php echo $recognition_subheading; ?></p>
        <div class="row gx-xl-5 mb-lg-5 pt-lg-4 pt-0">
          <?php if($recognition_card): ?>
            <?php foreach($recognition_card as $r_card): ?>
              <div class="col-lg-3 col-md-6  rnb-cards">
                <div class="ab-recog-card">
                  <div class="circleicon">
                    <?php if($r_card['recognition_icon']): ?>
                      <img alt="" src="<?php echo $r_card['recognition_icon']; ?>">
                    <?php else: ?>
                      <img alt="" src="<?php echo esc_url(get_template_directory_uri() . "/images/icon-commitment.svg"); ?>">
                    <?php endif; ?>
                  </div>
                  <?php if($r_card['recognition_content']): ?>
                    <p class="white_text text-cente"><?php echo $r_card['recognition_content']; ?></p>
                  <?php endif; ?>
                </div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div> 
        <?php if($apply_to_become_an_advisor_text): ?>
          <div class="row" id="advisoryformsection">
            <div class="col-12 mt-4 text-center">
              <!--a href="<?php echo $apply_to_become_an_advisor_link; ?>" class="btn btn-primary w-auto"><?php echo $apply_to_become_an_advisor_text; ?></a-->
            </div>			
          </div>
        <?php endif; ?>
      </div> 
    </section>
  <?php endif; ?>

  <?php if($advisory_board_form): ?>
    <section class="common-section ab-plans" >
      <div class="container">
        <h2 class="primary_color text-center mb-3 mb-lg-5">Advisory Board Application Form</h2>
        <div class="row">
          <div class="col-12">
            <div class="advisory-form-card gravity-page_form">
              <?php echo do_shortcode($advisory_board_form); ?>
            </div>
          </div>
        </div> 
      </div> 
    </section>
  <?php endif; ?>

  <?php if($our_strategic_partners_heading): ?>
  <section class="common-section cmn-sliderdots mt-5">
    <div class="container">
      <h2 class="primary_color text-center mb-3 mb-lg-5"><?php echo $our_strategic_partners_heading; ?></h2>
      <div class="row">
        <div class="col-xl-12">
        <div class="owl-carousel pv1-carousel owl-theme">
          <?php if($our_strategic_partners_slider): ?>
            <?php foreach($our_strategic_partners_slider as $strategic): ?>
              <div class="ab-partner-card">
                <div class="ab-partner-img">
                  <img alt="" src="<?php echo $strategic['partners_image']; ?>">
                </div>
                <div class="ab-partner-cnt">
                  <p class="white_text"><?php echo $strategic['partner_detail']; ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
        <div class="text-center mt-3"><a href="<?php echo $view_all_partner_link; ?>" class="btn btn-primary"><?php echo $view_all_partner_text; ?></a></div>
      </div> 
    </div> 
  </section>
  <?php endif; ?>

  <?php if($become_part_of_our_advisory_team_heading): ?>
    <section class="common-section ab-cta-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-12">
            <h2 class="primary_color"><?php echo $become_part_of_our_advisory_team_heading; ?></h2>
            <p class="white_text"><?php echo $become_part_of_our_advisory_team_content; ?></p>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>
</div>


<?php
get_footer();
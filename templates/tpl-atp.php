<?php /* Template Name: Template ATP Page*/ 
get_header();
$banner_section = get_field('banner_section');
$the_ai_moment_is_now = get_field('the_ai_moment_is_now');
$why_become_an_ai_certs = get_field('why_become_an_ai_certs');
$what_youll_offer_learners = get_field('what_youll_offer_learners');
$benefits_for_your_training_business = get_field('benefits_for_your_training_business');
$benefits_for_your_training_business_card = $benefits_for_your_training_business['benefits_for_your_training_business_card'];
$the_atp_success_system = get_field('the_atp_success_system');
$steps = $the_atp_success_system['steps'];
$ready_to_help_your_clients_become_ai_ready = get_field('ready_to_help_your_clients_become_ai_ready');
$help_point = $ready_to_help_your_clients_become_ai_ready['help_point'];
$real_partners_real_results = get_field('real_partners_real_results');
$form_shortcode = get_field('form_shortcode');
$plug_in_promote_profit = get_field('plug_in_promote_profit');
$faq_heading = get_field('faq_heading');
$faq = get_field('faq');
?>

<section class="banner-video-section imgbanner atp-banner">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="video-banner-cnt text-center">
            <p class="fw-medium fs-2 mb-3 mx-auto"><?php echo $banner_section['tap_into_the_ai_training_goldmine']; ?></p>
            <h1><?php echo $banner_section['join_the_ai_certs']; ?></h1>
            <p class="mx-auto"><?php echo $banner_section['offer_real']; ?></p>
            <?php if($banner_section['banner_button']): ?>
              <a href="<?php echo $banner_section['banner_button']['url']; ?>" class="btn btn-primary"><?php echo $banner_section['banner_button']['title']; ?></a>
            <?php else: ?>
              <a href="<?php echo $banner_section['join_the_network_button']['url']; ?>" class="btn btn-primary"><?php echo $banner_section['join_the_network_button']['title']; ?></a>
              <?php endif; ?>
            <?php if($banner_section['join_the_network_button']): ?>
              <a href="<?php echo $banner_section['join_the_network_button']['url']; ?>" class="btn btn-primary"><?php echo $banner_section['join_the_network_button']['title']; ?></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
</section><!-- Banner End -->

<section class="RichText cmn-section common-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="RichTextContent text-center">
          <h2><?php echo $the_ai_moment_is_now['the_ai_moment_is_now']; ?></h2>
          <p><?php echo $the_ai_moment_is_now['ai_is_transforming_industries']; ?></p>
          <h3><?php echo $the_ai_moment_is_now['where_aicerts_comes']; ?></h3>
          <p><?php echo $the_ai_moment_is_now['as_an_authorized_training_partner']; ?></p>
          <p><?php echo $the_ai_moment_is_now['just_plug_in_promote']; ?></p>
          <?php if($the_ai_moment_is_now['apply_of_partnership_button']): ?>
            <a href="<?php echo $the_ai_moment_is_now['apply_of_partnership_button']['url']; ?>" class="btn btn-primary"><?php echo $the_ai_moment_is_now['apply_of_partnership_button']['title']; ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section><!-- RichText End -->

<section class="atp-img-with-text common-section">
  <div class="container">
    <div class="row g-4 g-lg-5">
      <div class="col-lg-4">
        <div class="atp-img-card">
          <?php if( $why_become_an_ai_certs['why_become_an_ai_certs_image'] ): ?>
            <img class="w-100" src="<?php echo $why_become_an_ai_certs['why_become_an_ai_certs_image']['url']; ?>" alt="ATP">
          <?php else: ?>
            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/images/atp1.jpg" alt="ATP">
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="atp-img-content">
          <h2><?php echo $why_become_an_ai_certs['why_become_an_ai_certs']; ?></h2>
          <h4><?php echo $why_become_an_ai_certs['whether_youre_a_general']; ?></h4>
          <?php echo $why_become_an_ai_certs['points']; ?>
        </div>
        <?php if($why_become_an_ai_certs['register_as_an_aicerts_partner']): ?>
        <a href="<?php echo $why_become_an_ai_certs['register_as_an_aicerts_partner']['url']; ?>" class="btn btn-primary mt-3"><?php echo $why_become_an_ai_certs['register_as_an_aicerts_partner']['title']; ?></a>
      <?php endif; ?>
      </div>
      
    </div>
  </div>
</section><!-- ImgText End -->

<section class="atp-img-with-text common-section">
  <div class="container">
    <div class="row g-4 g-lg-5">
      <div class="col-lg-4">
        <div class="atp-img-card">
          <?php if($what_youll_offer_learners['what_you’ll_offer_learners_image']): ?>
            <img class="w-100" src="<?php echo $what_youll_offer_learners['what_you’ll_offer_learners_image']['url']; ?>" alt="ATP">
          <?php else: ?>
            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/images/atp2.jpg" alt="ATP">
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="atp-img-content">
          <h2><?php echo $what_youll_offer_learners['what_youll_offer_learners']; ?></h2>
          <h4><?php echo $what_youll_offer_learners['ai_certs_certification_programs_help']; ?></h4>
          <?php echo $what_youll_offer_learners['ai_certs_certification_points']; ?>
          <h5 class="primary_color mt-3"><?php echo $what_youll_offer_learners['all_certification_programs_include']; ?></h5>
          <?php echo $what_youll_offer_learners['all_certification_programs_include_points']; ?>
        </div>
      </div>
    </div>
  </div>
</section><!-- ImgText End -->

<section class="BenefitsBusiness common-section">
  <div class="container">
    <div class="section-header text-center mb-4">
      <h2><?php echo $benefits_for_your_training_business['benefits_for_your_training_business']; ?></h2>
      <p><?php echo $benefits_for_your_training_business['atp_program_is_designed_for']; ?></p>
    </div>
    <div class="row g-4">
      <?php if($benefits_for_your_training_business_card): ?>
        <?php foreach($benefits_for_your_training_business_card as $card): ?>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
          <div class="BBCard h-100">
            <h4 class="primary_color"><?php echo $card['card_title']; ?></h4>
            <p><?php echo $card['card_content']; ?></p>
          </div>
        </div><!-- BBCard  End -->
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section><!-- BenefitsBusiness  End -->

<section class="ATPSuccess common-section">
  <div class="container">
    <div class="section-heading text-center mt-4 mb-5">
      <h2><?php echo $the_atp_success_system['the_atp_success_system']; ?></h2>
    </div>
    <div class="row justify-content-lg-between g-4 g-lg-5">
      <?php if($steps): ?>
        <?php $i=1; foreach($steps as $step): ?>
          <div class="col-xl-3 col-lg-4">
            <div class="exam_step text-center">
              <div class="step_card">
                <h4 class="fs-3 fw-semibold">Step</h4>
                <h3 class="fs-2 fw-semibold"><?php echo '0'.$i; ?></h3>
              </div>
              <div class="step_info">
                <h3 class="primary_color mb-2"><?php echo $step['step_name']; ?></h3>
                <p><?php echo $step['step_detail']; ?></p>
              </div>
            </div>
          </div>
      <?php $i++; endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section><!-- ATPSuccess  End -->

<!-- section class="common-section ATP-Meetup" id="readytohelp">
  <div class="container maxwidth">
    <div class="row">
      <div class="col-12">
        <div class="ab-meetup-card">
					<div class="ab-meetupimg">
            <?php if($ready_to_help_your_clients_become_ai_ready['ready_to_help_your_clients_become_ai-ready_image']): ?>
              <img alt="" src="<?php echo $ready_to_help_your_clients_become_ai_ready['ready_to_help_your_clients_become_ai-ready_image']['url']; ?>">
            <?php else: ?>
              <img alt="" src="<?php echo esc_url(get_template_directory_uri() . "/images/meetupimg.jpg"); ?>">
            <?php endif; ?>
					</div>
					<div class="ab-meetupimg-cnt">
						<h3><?php echo $ready_to_help_your_clients_become_ai_ready['ready_to_help_your_clients_become_ai-ready']; ?></h3>
						<p class="white_text fw-bold"><?php echo $ready_to_help_your_clients_become_ai_ready['well_help_you_launch_fast']; ?></p>
            <ul class="help-point">
              <?php if($help_point): ?>
                <?php foreach($help_point as $help): ?>
              <li>
                <strong><?php echo $help['help_point']; ?></strong><br>
                <?php echo $help['help_detail']; ?>
              </li>
              <?php endforeach; ?>
              <?php endif; ?>
            </ul> 
            <p>
            <?php if($ready_to_help_your_clients_become_ai_ready['fill_out_the_atp_interest_form_button']): ?>
              <a href="<?php echo $ready_to_help_your_clients_become_ai_ready['fill_out_the_atp_interest_form_button']['url']; ?>" class="btn btn-primary me-lg-3"><?php echo $ready_to_help_your_clients_become_ai_ready['fill_out_the_atp_interest_form_button']['title']; ?></a>
            <?php endif; ?>
            <?php if($ready_to_help_your_clients_become_ai_ready['join_the_network_button']): ?>
              <a href="<?php echo $ready_to_help_your_clients_become_ai_ready['join_the_network_button']['url']; ?>" class="btn btn-primary me-lg-3"><?php echo $ready_to_help_your_clients_become_ai_ready['join_the_network_button']['title']; ?></a>
            <?php endif; ?></p>
          </div>
				</div>
      </div>
    </div>
  </div>
</section --><!-- AB-Meetup  End -->

<section class="common-section ATP-Meetup" id="readytohelp">
  <div class="container maxwidth">
    <div class="row">
      <div class="col-12">
        <div class="ab-meetup-card">					
			<div class="ab-meetupimg-cnt">
				<h3><?php echo $ready_to_help_your_clients_become_ai_ready['ready_to_help_your_clients_become_ai-ready']; ?></h3>
				<p class="white_text w-75 mb-5"><?php echo $ready_to_help_your_clients_become_ai_ready['well_help_you_launch_fast']; ?></p>
				
				<div class="row justify-content-center">
					<div class="col-lg-5">
						<div class="atpicons">
							<!-- <img alt="Icon" src="<?php echo esc_url(get_template_directory_uri() . "/images/atp-icon1.svg"); ?>"> -->
              <?php if($ready_to_help_your_clients_become_ai_ready['fill_out_the_atp_interest_form_icon']): ?>
                <img alt="" src="<?php echo $ready_to_help_your_clients_become_ai_ready['fill_out_the_atp_interest_form_icon']['url']; ?>">
              <?php else: ?>
                <img alt="Icon" src="<?php echo esc_url(get_template_directory_uri() . "/images/atp-icon1.svg"); ?>">
              <?php endif; ?>
							<!-- <a href="#" class="btn btn-primary">Fill Out the ATP Interest Form </a> -->
              <?php if($ready_to_help_your_clients_become_ai_ready['fill_out_the_atp_interest_form_button']): ?>
                <a href="<?php echo $ready_to_help_your_clients_become_ai_ready['fill_out_the_atp_interest_form_button']['url']; ?>" class="btn btn-primary"><?php echo $ready_to_help_your_clients_become_ai_ready['fill_out_the_atp_interest_form_button']['title']; ?></a>
              <?php endif; ?>
						</div>
					</div>
          <?php if($ready_to_help_your_clients_become_ai_ready['schedule_a_meeting_button']): ?>
					<div class="col-lg-5">
						<div class="atpicons">
							<!-- <img alt="Icon" src="<?php echo esc_url(get_template_directory_uri() . "/images/atp-icon2.svg"); ?>"> -->
              <?php if($ready_to_help_your_clients_become_ai_ready['schedule_a_meeting_icon']): ?>
                <img alt="" src="<?php echo $ready_to_help_your_clients_become_ai_ready['schedule_a_meeting_icon']['url']; ?>">
              <?php else: ?>
                <img alt="Icon" src="<?php echo esc_url(get_template_directory_uri() . "/images/atp-icon2.svg"); ?>">
              <?php endif; ?>
							<!-- <a href="#" class="btn btn-primary">Schedule a Meeting </a> -->
              
                <a href="<?php echo $ready_to_help_your_clients_become_ai_ready['schedule_a_meeting_button']['url']; ?>" class="btn btn-primary"><?php echo $ready_to_help_your_clients_become_ai_ready['schedule_a_meeting_button']['title']; ?></a>
              
						</div>
					</div>
          <?php endif; ?>
					<div class="col-lg-4">
						<div class="atpicons">
							<!-- <img alt="Icon" src="<?php echo esc_url(get_template_directory_uri() . "/images/atp-icon3.svg"); ?>"> -->
              <?php if($ready_to_help_your_clients_become_ai_ready['join_a_live_atp_webinar_icon']): ?>
                <img alt="" src="<?php echo $ready_to_help_your_clients_become_ai_ready['join_a_live_atp_webinar_icon']['url']; ?>">
              <?php else: ?>
                <img alt="Icon" src="<?php echo esc_url(get_template_directory_uri() . "/images/atp-icon3.svg"); ?>">
              <?php endif; ?>
							<!-- <a href="#" class="btn btn-primary">Join a Live ATP Webinar  </a> -->
              <?php if($ready_to_help_your_clients_become_ai_ready['join_a_live_atp_webinar_button']): ?>
                <a class="btn btn-primary" id="toggleBtn" href="#exploreevent"><?php echo $ready_to_help_your_clients_become_ai_ready['join_a_live_atp_webinar_button']['title']; ?></a>
              <?php endif; ?>
						</div>
					</div>
				</div>           
            
          </div>
		</div>
      </div>
    </div>
  </div>
</section><!-- AB-Meetup  End -->


<section class="ExplorebyCategory eventscarousel UpcomingEvents evencarousel cmn-sliderdots offsetarrow" id="exploreevent" style="margin-top: 10px;">
  <div class="container common-cnt">
    <div class="owl-carousel owl-theme">
      <?php $ready_to_help_event_section = $ready_to_help_your_clients_become_ai_ready['ready_to_help_event_section']; ?>
      <?php foreach($ready_to_help_event_section as $eventsection): ?>
        <!-- Event Card -->
        <div class="events_card pb-3">
          <div class="event_grid">
            <div class="event_image">
              <img class="img-responsive" src="<?php echo $eventsection['event_image']['url']; ?>" alt="Event" />              
            </div>
            <div class="event_info">
              <div class="event_datelocation mb-3">
                <div>
                  <img src="<?php echo esc_url(get_template_directory_uri() . "/images/icon-calendar.svg"); ?>" alt="" class="me-1" />
                  <span><?php echo $eventsection['event_date']; ?></span>
                </div>
                <div>
                  <img src="<?php echo esc_url(get_template_directory_uri() . "/images/icon-location.svg"); ?>" alt="" class="me-1" />
                  <span><?php echo $eventsection['event_location']; ?></span>
                </div>
              </div>
              <?php $eventtime = $eventsection['event_times']; ?>
              <?php foreach($eventtime as $time): ?>
                <div class="eventtimelisting">
					<p class="mb-0"><?php echo $time['event_time']; ?></p>
					<?php if($time['register_now_button']): ?>
					<a href="<?php echo $time['register_now_button']; ?>" class="btn btn-primary">Register Now</a>
					<?php endif; ?>
				</div>
				<?php endforeach; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>      
    </div>
  </div>
</section>


<section class="common-section atp-commitment-card">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="ab-commitment-card">
          
          <?php if($real_partners_real_results['icon']): ?>
              <img alt="" src="<?php echo $real_partners_real_results['icon']['url']; ?>">
            <?php else: ?>
              <img alt="Icon" src="<?php echo esc_url(get_template_directory_uri() . "/images/icon-relationship.svg"); ?>">
            <?php endif; ?>
          <div class="ab-commitment-cnt">
            <h3><?php echo $real_partners_real_results['real_partners_real_results']; ?></h3>
            <p class="white_text"><?php echo $real_partners_real_results['real_partners_real_results_detail']; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- ATP-Real  End -->

<section class="common-section PartnershipFrom d-none">
  <div class="container">
    <div class="FormATP gravity-page_form">
      <?php echo do_shortcode($form_shortcode); ?>
    </div>
  </div>
</section><!-- PartnershipFrom  End -->

<section class="common-section ATP-cta_banner">
  <div class="cta-overaly">
    <div class="container">
      <h4><?php echo $plug_in_promote_profit['plug_in_promote_profit_content']; ?></h4>
      <h2 class="primary_color"><?php echo $plug_in_promote_profit['plug_in_promote_profit']; ?></h2>
    </div>
  </div>
</section>

<!--Commit Test-->
<?php if($faq_heading): ?>
<section class="h2_faq pt-2">
   <div class="container">
      <h2 class="mb-5 text-center"><?php echo $faq_heading; ?></h2>
      <div class="faq_wrap">
         <div class="accordion" id="faq-accordion">
            <?php $j=1; foreach($faq as $faqs): ?>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq_heading<?php echo $j; ?>">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_collapse<?php echo $j; ?>" aria-expanded="true" aria-controls="faq_collapse<?php echo $j; ?>">
                    <?php echo $faqs['faq_question'] ?> 
                    </button>
                </h2>
                <div id="faq_collapse<?php echo $j; ?>" class="accordion-collapse collapse" aria-labelledby="faq_heading<?php echo $j; ?>" data-bs-parent="#faq-accordion">
                    <div class="accordion-body">
                    <?php echo $faqs['faq_answer'] ?>
                    </div>
                </div>
              </div>
            <?php $j++; endforeach; ?>
         </div>
      </div>
   </div>
</section> <!--FAQs End-->
<?php endif; ?>
<!--Footer-->
<script>
jQuery('a[href^="#"]').on('click', function(e) {
  e.preventDefault();

  var targetId = $(this).attr('href'); // gets the href value like #section1
  var $target = $(targetId);

  if ($target.length) {
    var targetOffset = $target.offset().top;
    var scrollOffset = targetOffset - 100; // adjust for fixed header if needed

    $('html, body').animate({
      scrollTop: scrollOffset
    }, 600);
  }
});
jQuery(document).ready(function(){
  // jQuery('#toggleBtn').click(function() {
  //   jQuery('#exploreevent').toggle();
  // });
});


</script>
<?php
// get_sidebar();
get_footer();
?>
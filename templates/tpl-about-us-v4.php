<?php /* Template Name: Template About US V4*/ 
get_header(); 
$why_aicerts_banner_heading = get_field('why_aicerts_banner_heading');
$why_aicert_banner_content = get_field('why_aicert_banner_content');
$start_your_ai_journey_today = get_field('start_your_ai_journey_today');
$our_story_heading = get_field('our_story_heading');
$our_story_info = get_field('our_story_info');
$our_story_image = get_field('our_story_image');
$our_core_values_heading = get_field('our_core_values_heading');
$our_core_values_content = get_field('our_core_values_content');
$our_core_values_card = get_field('our_core_values_card');
$our_core_values_bottom_content = get_field('our_story_bottom_content');
$who_we_serve_heading = get_field('who_we_serve_heading');
$who_we_serve_subheading = get_field('who_we_serve_subheading');
$who_we_serve_card = get_field('who_we_serve_card');
$your_learning_journey_heading = get_field('your_learning_journey_heading');
$your_learning_journey_sub_heading = get_field('your_learning_journey_sub_heading');
$your_learning_journey_steps = get_field('your_learning_journey_steps');
$start_your_certification_journey_today_heading = get_field('start_your_certification_journey_today_heading');
$start_your_certification_journey_today_subheading = get_field('start_your_certification_journey_today_subheading');
$explore_all_certifications_button = get_field('explore_all_certifications_button');
$partner_with_us_button = get_field('partner_with_us_button');
?>

<?php if($why_aicerts_banner_heading): ?>
  <section class="banner-video-section imgbanner aboutv4-banner overlay-linear-gradient">
      <div class="container position-relative">
          <div class="row">
            <div class="col-lg-12">
              <div class="video-banner-cnt">
                  <h1><?php echo $why_aicerts_banner_heading; ?></h1>
                  <p><?php echo $why_aicert_banner_content; ?></p>
                  <a href="<?php echo $start_your_ai_journey_today['url']; ?>" class="btn btn-primary"><?php echo $start_your_ai_journey_today['title']; ?></a>
              </div>
            </div>
          </div>
      </div>
  </section>
<?php endif; ?>
<!-- HeroBanner End -->

<section class="AboutOurStory common-section cmn-section light-primary-bg-color">
  <div class="container">
    <div class="section-header text-center mb-4 mb-lg-5">
      <h2><?php echo $our_story_heading; ?></h2>
    </div>
    <div class="row g-4 g-lg-5 align-items-center">
      <?php if ($our_story_info): ?>
        <?php foreach ($our_story_info as $info): ?>
          <div class="col-12">
            <div class="StoryInfo">
              <h3><?php echo $info['story_info_heading']; ?></h3>
              <p><?php echo $info['story_info_content']; ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
<!-- Our Story -->

<?php
$our_journey_heading = get_field('our_journey_heading');
$our_journey_subheading = get_field('our_journey_subheading');
$our_journey_card = get_field('our_journey_card');
?>
<section class="OurJourney common-section">
  <div class="container">
    <div class="section-header text-center mb-4 pb-1">
      <h2 class="primary_color"><?php echo $our_journey_heading; ?></h2>
      <p><?php echo $our_journey_subheading; ?></p>
    </div>
    <?php if($our_journey_card): ?>
      <div class="JourneyList">
        <?php foreach($our_journey_card as $journycard): ?>
          <div class="JourneyCard">
            <div class="Jround"></div>
            <div class="YearText"><?php echo $journycard['journey_year']; ?></div>
            <div class="AchiverIcon">
              <?php if($journycard['journey_icon']): ?>
                <img src="<?php echo $journycard['journey_icon']['url']; ?>"  alt="icon-plane"/>
              <?php else: ?>
                <img src="<?php echo esc_url(get_template_directory_uri(). "/images/icon-plane.svg"); ?>"  alt="icon-plane"/>
              <?php endif; ?>
            </div>
            <div class="JourneyInfo">
              <h5><?php echo $journycard['journey_title']; ?></h5>
              <p><?php echo $journycard['journey_detail']; ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
<!-- Our Journey -->

<?php if($our_core_values_heading): ?>
<section class="HowWeMakeItReal common-section">
    <div class="container">
        <div class="section-header text-center mb-2 pb-1">
            <h2 class="primary_color"><?php echo $our_core_values_heading; ?> </h2>
            <p><?php echo $our_core_values_content; ?></p>
        </div>
        <div class="row g-4 g-lg-5">
          <?php if($our_core_values_card): ?>
            <?php foreach($our_core_values_card as $corevalues): ?>
              <div class="col-lg-6">
                  <div class="RealCard">
                      <div class="RCIcon">
                          <!-- <img src="<?php echo esc_url(get_template_directory_uri(). "/images/icon-capa.svg"); ?>"  alt="icon-capa"/> -->
                        <?php if($corevalues['core_value_icon']): ?>
                          <img src="<?php echo $corevalues['core_value_icon']; ?>" alt="icon-core-value">
                        <?php else: ?>
                          <img src="<?php echo esc_url(get_template_directory_uri(). "/images/icon-capa.svg"); ?>" alt="icon-core-value">
                        <?php endif; ?>
                      </div>
                      <div class="RCText">
                          <h4 class="primary_color"><?php echo $corevalues['core_value_title']; ?></h4>
                          <p><?php echo $corevalues['core_value_content']; ?></p>
                      </div>
                  </div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
            <div class="col-12">
                <div class="text-center RCInfo">
                    <p class="mb-0 fw-bold"><?php echo $our_core_values_bottom_content; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- How We Make It Real  -->

<?php if($who_we_serve_heading): ?>
<section class="WhoWeServe common-section light-primary-bg-color cmn-section">
  <div class="container">
    <div class="section-header text-center mb-2 pb-1">
      <h2 class="primary_color"><?php echo $who_we_serve_heading; ?></h2>
      <p><?php echo $who_we_serve_subheading; ?></p>
    </div>
    <div class="row g-4 justify-content-center">
      <?php if($who_we_serve_card): ?>
        <?php foreach($who_we_serve_card as $whocard): ?>
          <div class="col-md-6 col-lg-4">
            <div class="WWS h-100">
              <?php if($whocard['who_we_serve_card_icon']): ?>
                <img src="<?php echo $whocard['who_we_serve_card_icon']['url']; ?>"  alt="bt-icon"/>
              <?php else: ?>
                <img src="<?php echo esc_url(get_template_directory_uri(). "/images/bt-icon1.svg"); ?>"  alt="bt-icon"/>
              <?php endif; ?>
              <h4><?php echo $whocard['who_we_serve_card_title']; ?></h4>
              <p><?php echo $whocard['who_we_serve_card_content']; ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php endif; ?>
<!-- Who We Serve -->

<section class="common-section">
  <div class="container">
    <h2 class="text-center">Explore All Our Role Based Solutions</h2>
    <?php 
    //role base section
    include_once get_template_directory() . '/inc/home-role-base-section.php'; ?>
  </div>
</section>
 
<section class="NewPossibilities common-section">
  <div class="container">
    <div class="light-primary-bg-color cmn-section ps-2 pe-2 text-center border-radius10">
      <div class="d-flex flex-column gap-4">
        <div class="section-header">
          <h2 class="primary_color"><?php echo $start_your_certification_journey_today_heading; ?></h2>
          <p class="mb-0"><?php echo $start_your_certification_journey_today_subheading; ?></p>
          <h5>Are you ready to be part of the transformation?</h5>
        </div>
        <div class="d-flex flex-wrap justify-content-center gap-3">
           <a href="<?php echo $explore_all_certifications_button['url']; ?>" class="btn btn-primary" ><?php echo $explore_all_certifications_button['title']; ?></a>
           <a href="<?php echo $partner_with_us_button['url']; ?>" class="btn btn-outline btn-primary-outline"><?php echo $partner_with_us_button['title']; ?></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- New Possibilities  -->

<!--Footer-->
<?php
// get_sidebar();
get_footer();
?>
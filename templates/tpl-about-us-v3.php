<?php /* Template Name: Template About US V3*/ 
get_header(); 
$why_aicerts_banner_heading = get_field('why_aicerts_banner_heading');
$why_aicert_banner_content = get_field('why_aicert_banner_content');
$start_your_ai_journey_today = get_field('start_your_ai_journey_today');
$home_page_id = get_option('page_on_front');
$partners_heading = get_field('our_trusted_partners_heading');
$partners_subheading = get_field('our_trusted_partners_sub_heading');
$see_all_partners_link = get_field('see_all_partners_link',$home_page_id);
$partners_logos = get_field('partners_logos',$home_page_id);
$resources_heading = get_field('latest_resources_heading' ,$home_page_id);
$resources_type = get_field('resources_type',$home_page_id);
$get_a_free_course_heading = get_field('get_a_free_course_heading');
$get_a_free_course_subheading = get_field('get_a_free_course_subheading');
$get_a_free_course_image = get_field('get_a_free_course_image');
$googleplay_image = get_field('googleplay_image');
$googleplay_link = get_field('googleplay_link');
$appstore_image = get_field('appstore_image');
$appstore_link = get_field('appstore_link');
$qrcode_image = get_field('qrcode_image');
$scan_to_download_instantly_text = get_field('scan_to_download_instantly_text');
$scan_to_download_instantly_sub_text = get_field('scan_to_download_instantly_sub_text');
$start_your_certification_journey_today_heading = get_field('start_your_certification_journey_today_heading');
$start_your_certification_journey_today_subheading = get_field('start_your_certification_journey_today_subheading');
$explore_all_certifications_button = get_field('explore_all_certifications_button');
$partner_with_us_button = get_field('partner_with_us_button');
?>

<?php if($why_aicerts_banner_heading): ?>
  <section class="banner-video-section imgbanner aboutv3-banner overlay-linear-gradient">
      <div class="container position-relative">
          <div class="row">
            <div class="col-lg-12">
              <div class="video-banner-cnt">
                  <h1><?php echo $why_aicerts_banner_heading; ?></h1>
                  <p><?php echo $why_aicert_banner_content; ?></p>
                  <a href="<?php echo $start_your_ai_journey_today['url']; ?>" class="btn btn-primary" ><?php echo $start_your_ai_journey_today['title']; ?></a>
              </div>
            </div>
          </div>
      </div>
  </section>
<?php endif; ?>
<!-- HeroBanner End -->

<?php
$our_story_heading = get_field('our_story_heading');
$our_story_info = get_field('our_story_info');
$our_story_image = get_field('our_story_image');
?>
<section class="AboutOurStory common-section cmn-section light-primary-bg-color">
  <div class="container">
    <div class="section-header text-center mb-4 mb-lg-5">
      <h2><?php echo $our_story_heading; ?></h2>
    </div>
    <div class="row g-4 g-lg-5 align-items-center">
      <div class="col-lg-6">
        <div class="StoryInfo">
          <?php echo $our_story_info; ?>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="OurStoryBoad">
          <?php if($our_story_image): ?>
            <img class="w-100" src="<?php echo $our_story_image['url']; ?>"  alt="Our Story"  /> 
          <?php else: ?>
            <img class="w-100" src="<?php echo esc_url(get_template_directory_uri(). "/images/ourstoreboad.svg"); ?>"  alt="Our Story"  /> 
          <?php endif; ?>           
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Our Story -->

<?php
$mission_vision_heading = get_field('mission_vision_heading');
$mission_title = get_field('mission_title');
$mission_content = get_field('mission_content');
$mission_image = get_field('mission_image');
$vision_title = get_field('vision_title');
$vision_content = get_field('vision_content');
$vision_image = get_field('vision_image');
?>
<section class="AboutMissionVision common-section">
  <div class="container">
    <div class="section-header text-center mb-4 mb-lg-5">
      <h2><?php echo $mission_vision_heading; ?></h2>
    </div>
    <div class="row g-4 g-lg-5">
      <div class="col-md-6">
        <div class="AboutMV d-flex flex-column">
          <div class="MV-TextIcon d-flex align-items-center gap-2">
            <div class="MVIcon">
              <?php if($mission_image): ?>
                <img src="<?php echo $mission_image['url']; ?>"  alt="Icon-Mission"  />
              <?php else: ?>
                <img src="<?php echo esc_url(get_template_directory_uri(). "/images/Icon-Mission.svg"); ?>"  alt="Icon-Mission"  />
              <?php endif; ?>
            </div>
            <h3 class="mb-0"><?php echo $mission_title; ?></h3>
          </div>
          <div class="MVContent">
            <p class="mb-0"><?php echo $mission_content; ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="AboutMV d-flex flex-column">
          <div class="MV-TextIcon d-flex align-items-center gap-2">
            <div class="MVIcon">
              <?php if($vision_image): ?>
                <img src="<?php echo $vision_image['url']; ?>"  alt="Icon-Mission"  />
              <?php else: ?>
                <img src="<?php echo esc_url(get_template_directory_uri(). "/images/Icon-Vision.svg"); ?>"  alt="Icon-Mission"  />
              <?php endif; ?>
            </div>
            <h3 class="mb-0"><?php echo $vision_title; ?></h3>
          </div>
          <div class="MVContent">
            <p class="mb-0"><?php echo $vision_content; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Mission & Vision -->

<?php
$our_core_values_heading = get_field('our_core_values_heading');
$our_core_values_content = get_field('our_core_values_content');
$our_core_values_card = get_field('our_core_values_card');
?>
<?php if($our_core_values_heading): ?>
  <section class="OurCoreValues common-section">
    <div class="container">
      <div class="section-heading mx-auto text-center mb-2 pb-1">
        <h2><?php echo $our_core_values_heading; ?></h2>
        <p><?php echo $our_core_values_content; ?></p>
      </div>
      <div class="row g-4">
        <?php if($our_core_values_card): ?>
          <?php foreach($our_core_values_card as $corevalues): ?>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="core-value_card h-100">
                <div class="core-value-icon mb-3">
                  <?php if($corevalues['core_value_icon']): ?>
                      <img src="<?php echo $corevalues['core_value_icon']; ?>" alt="icon-core-value">
                  <?php else: ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/icon-core-value1.svg" alt="icon-core-value">
                  <?php endif; ?>
                </div>
                <div class="core-value-content">
                  <h5 class="mb-0"><?php echo $corevalues['core_value_title']; ?></h5>
                  <p><?php echo $corevalues['core_value_content']; ?></p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php endif; ?>
<!--Our Core Values End-->

<?php
$who_we_serve_heading = get_field('who_we_serve_heading');
$who_we_serve_subheading = get_field('who_we_serve_subheading');
$who_we_serve_card = get_field('who_we_serve_card');
?>
<section class="WhoWeServe common-section light-primary-bg-color cmn-section">
  <div class="container">
    <div class="section-header text-center mb-2 pb-1">
      <h2 class="primary_color"><?php echo $who_we_serve_heading; ?></h2>
      <p><?php echo $who_we_serve_subheading; ?></p>
    </div>
    <div class="row g-4">
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
<!-- Who We Serve -->

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

<?php
$your_learning_journey_heading = get_field('your_learning_journey_heading');
$your_learning_journey_sub_heading = get_field('your_learning_journey_sub_heading');
$your_learning_journey_steps = get_field('your_learning_journey_steps');
?>

<section class="common-section">
  <div class="container">
    <h2 class="text-center">Explore All Our Role Based Solutions</h2>
    <?php 
    //role base section
    include_once get_template_directory() . '/inc/home-role-base-section.php'; ?>
  </div>
</section>


<section class="YourLearningJourney common-section">
  <div class="container">
    <div class="section-header text-center mb-4 pb-1">
        <h2><?php echo $your_learning_journey_heading; ?></h2>
        <h3><?php echo $your_learning_journey_sub_heading; ?></h3>
    </div>
    <?php if($your_learning_journey_steps): ?>
      <div class="YCPath text-center light-primary-bg-color">
        <div class="row g-4 justify-content-between">
          <?php $i=1; foreach($your_learning_journey_steps as $learnsteps): ?>
          <div class="col-lg-2 col-md-6 step-arrow-right">
            <div class="YCinfo">
              <div class="YCStep"><?php echo $i; ?></div>
              <h4><?php echo $learnsteps['step_title']; ?></h4>
              <p><?php echo $learnsteps['step_content']; ?></p>
            </div>
          </div>
          <?php $i++; endforeach; ?>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>
<!-- Your Learning Journey -->
 

<?php include_once get_template_directory() . '/inc/testimonials-linkedin-reviews-section-course-aboutus.php'; ?>
<!-- Learner Success Stories -->

<?php if($partners_heading): ?>
  <section class="h2_partners_logo OurPartners_logos common-section border-0 p-0 bg-transparent">
      <div class="container">
          <div class="d-flex flex-wrap justify-content-center align-items-center flex-column">
              <h2 class="primary_color"><?php echo $partners_heading; ?></h2>
              <h4><?php echo $partners_subheading ?></h4>
              <?php if($see_all_partners_link): ?>
                  <a href="<?php echo $see_all_partners_link['url']; ?>" target="_blank" class="discover_more_link d-none">See All Partners</a>
              <?php endif; ?>
          </div>
          <div class="h2_partners_logo_slider mt-md-3 mt-3 cmn-sliderdots offsetarrow">
              <div class="owl-carousel owl-theme">
                  <?php if($partners_logos): ?>
                      <?php foreach($partners_logos as $p_logo):?>
                      <div class="item">
                          <div class="h2_aicerts_lab_box">
                              <img src="<?php echo $p_logo['partner_lab_logo']; ?>" alt="" class="aicerts_lab_white">
                              <img src="<?php echo $p_logo['black_partner_lab_logo']; ?>" alt="" class="aicerts_lab_black">
                          </div>
                      </div><!--LogoItem End-->
                      <?php endforeach; ?>
                  <?php endif; ?>
              </div>
          </div>
          <?php if($see_all_partners_link): ?>
          <div class="mt-4 text-center">
              <a href="<?php echo $see_all_partners_link['url']; ?>" target="_blank" class="btn btn-primary">See All Partners</a>
          </div>
          <?php endif; ?>
      </div>
  </section><!--Our Partners End-->
<?php endif; ?>

<section class="h2_blog_resource pt-0 border-0 h4_blog_resource">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-center align-items-center mb-md-5 mb-2">
            <!-- <?php if($resources_heading): ?>
                <h2 class="white_text px-3">Latest Resources</h2>
            <?php endif; ?> -->
            <?php if($resources_type): ?>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs h2_blog_resource_tabs" id="blog_resourceTab" role="tablist">
                <?php $i=1; foreach($resources_type as $r_type): ?>
                <li class="nav-item" role="presentation">
                    <button class="nav-link <?php echo ($i==1) ? 'active' : ''; ?>" id="<?php echo $r_type['resource_id']; ?>" data-bs-toggle="tab" data-bs-target="#<?php echo $r_type['resource_id']; ?>-pane"
                        type="button" role="tab" aria-controls="<?php echo $r_type['resource_id']; ?>-pane" aria-selected="<?php ($i==1) ? 'true' : 'false'; ?>">
                        <img src="<?php echo $r_type['resource_icon']; ?>" alt=""><?php echo $r_type['resource_name']; ?>
                    </button>
                </li>
                <?php $i++; endforeach; ?>
            </ul>
            <?php endif; ?>
        </div>
        <div class="tab-content h2_blog_resource_content cmn-sliderdots offsetarrow" id="blog_resourceTabContent">
            <?php $j=1; foreach($resources_type as $r_type): ?>
                <?php
                $post_type = $r_type['resource_id'];
                $args = array(
                    'post_type' => $post_type,
                    'posts_per_page' => 5,
                    'post_status' => 'publish'
                );
                $query = new WP_Query($args);
                $viewall = get_page_id_by_slug($r_type['resource_id']);
                $viewallresource = get_permalink($viewall);
                ?>
                <div class="tab-pane fade <?php echo ($j==1) ? 'show active' : ''; ?>" id="<?php echo $r_type['resource_id']; ?>-pane" role="tabpanel" aria-labelledby="<?php echo $r_type['resource_id']; ?>" tabindex="0">
                    <div class="h2_blog_resource_grid">
                    <?php
                    if ($query->have_posts()) {
                        ?>
                        <div class="accordion-item blog_accordian">
                            <h2 class="accordion-header" id="acc_blog_heading<?php echo $j; ?>">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc_blog_collapse<?php echo $j; ?>" aria-expanded="true" aria-controls="acc_blog_collapse<?php echo $j; ?>">
                                    <img src="<?php echo $r_type['resource_icon']; ?>" alt=""><?php echo $r_type['resource_name']; ?>
                                </button>
                            </h2>
                            <div id="acc_blog_collapse<?php echo $j; ?>" class="accordion-collapse collapse" aria-labelledby="acc_blog_heading<?php echo $j; ?>" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <div class="owl-carousel owl-theme">
                                        <?php
                                        while ($query->have_posts()) {
                                            $query->the_post(); 
                                            $post_id = get_the_ID();
                                            $thumb = get_the_post_thumbnail_url($post_id, 'full');
                                            $posturl = get_permalink($post_id);
                                            // Check post type and set custom URL
                                            switch ($post_type) {
                                                case 'case-studies':
                                                    $posturl = site_url("/case-studies");
                                                    break;
                                                case 'publications':
                                                        $posturl = site_url("/publications");
                                                        break;
                                                }
                                                if(empty($thumb)) {
                                                    $thumb = get_template_directory_uri()."/images/blog-img.jpg";
                                                }
                                            ?>
                                        <div class="item">
                                            <div class="h2_blog_resource_box">
                                                <div class="blog_resource_img">
                                                    <img src="<?php echo $thumb; ?>" alt="">
                                                </div>
                                                <p><a href="<?php echo $posturl; ?>" target="_blank"><?php echo get_the_title(); ?></a></p>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="text-center d-md-none">
                                        <a href="<?php echo $viewallresource; ?>" target="_blank" class="btn btn-primary-outline">View All <?php echo $r_type['resource_name']; ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-3 d-none d-md-block">
                            <a href="<?php echo $viewallresource; ?>" target="_blank" class="btn btn-primary">View All <?php echo $r_type['resource_name']; ?></a>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            <?php $j++; endforeach; ?>
        </div>
    </div>
</section>

<section class="MobileAppStore light-primary-bg-color common-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-xl-5 col-lg-5 text-center">
        <div class="MobileAppScreen">
          <?php if($get_a_free_course_image): ?>
            <img src="<?php echo $get_a_free_course_image['url']; ?>"  alt="MobileAppS"/>
          <?php else: ?>
            <img src="<?php echo esc_url(get_template_directory_uri(). "/images/mobilescreen.png"); ?>"  alt="MobileAppS"/>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-xl-7 col-lg-7">
        <div class="AppInfo">
            <h2><?php echo $get_a_free_course_heading; ?></h2>
            <h4><?php echo $get_a_free_course_subheading; ?></h4>
            <div class="AppCTA d-flex flex-wrap align-items-center gap-3">
              <a href="<?php echo !empty($googleplay_link['url']) ? $googleplay_link['url'] : '#'; ?>" target="_blank">
                <?php if($googleplay_image): ?>
                  <img src="<?php echo $googleplay_image['url']; ?>"  alt="GooglePlay"/>
                <?php else: ?>
                  <img src="<?php echo esc_url(get_template_directory_uri(). "/images/icon-google.svg"); ?>"  alt="GooglePlay"/>
                <?php endif; ?>
              </a>
              <a href="<?php echo !empty($appstore_link['url']) ? $appstore_link['url'] : '#'; ?>" target="_blank">
                <?php if($appstore_image): ?>
                  <img src="<?php echo $appstore_image['url']; ?>"  alt="AppStore"/>
                <?php else: ?>
                  <img src="<?php echo esc_url(get_template_directory_uri(). "/images/icon-appstore.svg"); ?>"  alt="AppStore"/>
                <?php endif; ?>
              </a>
            </div>
            <div class="scan_to_download mt-4">
              <div class="scan_download_img">
                <?php if($qrcode_image): ?>
                  <img src="<?php echo $qrcode_image['url']; ?>"  alt="QRCode"/>
                <?php else: ?>
                  <img src="<?php echo esc_url(get_template_directory_uri(). "/images/QRCode.svg"); ?>"  alt="QRCode"/>
                <?php endif; ?>
              </div>
              <div class="scan_download_text">
                <h5 class="mb-0"><?php echo $scan_to_download_instantly_text; ?></h5>
								<p class="mb-0"><?php echo $scan_to_download_instantly_sub_text; ?></p>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- MobileApp -->

<section class="NewPossibilities common-section">
  <div class="container">
    <div class="light-primary-bg-color cmn-section ps-2 pe-2 text-center border-radius10">
      <div class="d-flex flex-column gap-4">
        <div class="section-header">
          <h2 class="primary_color"><?php echo $start_your_certification_journey_today_heading; ?></h2>
          <p class="mb-0"><?php echo $start_your_certification_journey_today_subheading; ?></p>
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
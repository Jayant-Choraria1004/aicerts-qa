<?php /* Template Name: Template Vendor*/ 
get_header();
$microsoft_logo_black = get_field('microsoft_logo_black');
$microsoft_logo_white = get_field('microsoft_logo_white');
$aicerts_logo_black = get_field('aicerts_logo_black');
$aicerts_logo_white = get_field('aicerts_logo_white');
$banner_heading = get_field('banner_heading');
$banner_subheading = get_field('banner_subheading');
$explore_certifications_button = get_field('explore_certifications_button');
$become_a_partner_button = get_field('become_a_partner_button');
?>

<section class="banner-video-section imgbanner vendor-banner overlay-linear-gradient mb-0">
    <div class="container position-relative">
        <div class="row">
          <div class="col-lg-12">
            <div class="video-banner-cnt">
                <div class="VbrandLogo d-flex flex-wrap flex-column flex-sm-row align-items-center gap-3 mb-4">
                  <?php if($microsoft_logo_white): ?>
                    <img class="banner-out-hide" src="<?php echo $microsoft_logo_white['url']; ?>" alt="<?php echo $microsoft_logo_white['title']; ?>">
                  <?php else: ?>
                    <img class="banner-out-hide" src="<?php echo get_template_directory_uri(); ?>/images/v-microsoft.png" alt="MicroSoft">
                  <?php endif; ?>
                  <?php if($microsoft_logo_black): ?>
                    <img class="white_theme only_mobile" src="<?php echo $microsoft_logo_black['url']; ?>" alt="<?php echo $microsoft_logo_black['title']; ?>">
                  <?php else: ?>
                    <img class="white_theme only_mobile" src="<?php echo get_template_directory_uri(); ?>/images/v-microsoft-black.png" alt="MicroSoft">
                  <?php endif; ?>
                  <div class="hline"></div>
                  <?php if($aicerts_logo_white): ?>
                    <img class="banner-out-hide" src="<?php echo $aicerts_logo_white['url']; ?>" alt="<?php echo $aicerts_logo_white['url']; ?>">
                  <?php else: ?>
                    <img class="banner-out-hide" src="<?php echo get_template_directory_uri(); ?>/images/v-aicerts.png" alt="Aicerts">
                  <?php endif; ?>
                  <?php if($aicerts_logo_black): ?>
                    <img class="white_theme only_mobile" src="<?php echo $aicerts_logo_black['url']; ?>" alt="<?php echo $aicerts_logo_black['url']; ?>">
                  <?php else: ?>
                    <img class="white_theme only_mobile" src="<?php echo get_template_directory_uri(); ?>/images/v-aicerts-black.png" alt="Aicerts">
                  <?php endif; ?>
                </div>
                <h1><?php echo $banner_heading; ?></h1>
                <p><?php echo $banner_subheading; ?></p>
                <?php if($explore_certifications_button): ?>
                  <a href="<?php echo $explore_certifications_button['url']; ?>" class="btn btn-primary me-3"><?php echo $explore_certifications_button['title']; ?></a>
                <?php endif; ?>
                <?php if($become_a_partner_button): ?>
                  <a href="<?php echo $become_a_partner_button['url']; ?>" class="btn btn-outline btn-primary-outline me-3" ><?php echo $become_a_partner_button['title']; ?></a>
                <?php endif; ?>
            </div>
          </div>
        </div>
    </div>
</section>
<!-- HeroBanner End -->

<?php 
$certification_alignment_heading = get_field('certification_alignment_heading');
$certification_alignment_description = get_field('certification_alignment_description');
?>
<section class="CertificationAlignment light-primary-bg-color common-section cmn-section vendorsection">
  <div class="container">
     <div class="section-header text-center d-flex flex-column flex-sm-row-reverse align-items-center flex-wrap justify-content-center gap-3">
        <h2 class="mb-0"><?php echo $certification_alignment_heading; ?></h2>
        <div class="VbrandLogo d-flex flex-wrap align-items-center flex-column flex-sm-row-reverse justify-content-center gap-3">
          <?php if($microsoft_logo_white): ?>
            <img class="black_theme" src="<?php echo $microsoft_logo_white['url']; ?>" alt="<?php echo $microsoft_logo_white['title']; ?>">
          <?php else: ?>
            <img class="black_theme" src="<?php echo get_template_directory_uri(); ?>/images/v-microsoft.png" alt="MicroSoft">
          <?php endif; ?>
          <?php if($microsoft_logo_black): ?>
            <img class="white_theme" src="<?php echo $microsoft_logo_black['url']; ?>" alt="<?php echo $microsoft_logo_black['title']; ?>">
          <?php else: ?>
            <img class="white_theme" src="<?php echo get_template_directory_uri(); ?>/images/v-microsoft-black.png" alt="MicroSoft">
          <?php endif; ?>
          <div class="plus">+</div>
          <?php if($aicerts_logo_white): ?>
            <img class="black_theme" src="<?php echo $aicerts_logo_white['url']; ?>" alt="<?php echo $aicerts_logo_white['url']; ?>">
          <?php else: ?>
            <img class="black_theme" src="<?php echo get_template_directory_uri(); ?>/images/v-aicerts.png" alt="Aicerts">
          <?php endif; ?>
          <?php if($aicerts_logo_black): ?>
            <img class="white_theme" src="<?php echo $aicerts_logo_black['url']; ?>" alt="<?php echo $aicerts_logo_black['url']; ?>">
          <?php else: ?>
            <img class="white_theme" src="<?php echo get_template_directory_uri(); ?>/images/v-aicerts-black.png" alt="Aicerts">
          <?php endif; ?>
        </div>
    </div>
    <div class="section-description text-center mt-4 mb-4 mb-lg-5">
      <p><?php echo $certification_alignment_description; ?></p>
    </div>
    <?php include_once get_template_directory() . '/inc/vendor-course-section.php'; ?>
  </div>
</section>
<!-- Certification Alignment -->

<?php
$better_together_heading = get_field('better_together_heading');
$better_together_description = get_field('better_together_description');
$better_together_tiles = get_field('better_together_tiles');
?>
<section class="BetterTogether common-section">
  <div class="container">
    <div class="section-header text-center d-flex flex-column flex-sm-row align-items-center flex-wrap justify-content-center gap-3">
        <h2 class="mb-0"><?php echo $better_together_heading; ?></h2>
        <div class="VbrandLogo d-flex flex-wrap align-items-center flex-column flex-sm-row justify-content-center gap-3">
          <?php if($microsoft_logo_white): ?>
            <img class="black_theme" src="<?php echo $microsoft_logo_white['url']; ?>" alt="<?php echo $microsoft_logo_white['title']; ?>">
          <?php else: ?>
            <img class="black_theme" src="<?php echo get_template_directory_uri(); ?>/images/v-microsoft.png" alt="MicroSoft">
          <?php endif; ?>
          <?php if($microsoft_logo_black): ?>
            <img class="white_theme" src="<?php echo $microsoft_logo_black['url']; ?>" alt="<?php echo $microsoft_logo_black['title']; ?>">
          <?php else: ?>
            <img class="white_theme" src="<?php echo get_template_directory_uri(); ?>/images/v-microsoft-black.png" alt="MicroSoft">
          <?php endif; ?>
          <div class="plus">+</div>
          <?php if($aicerts_logo_white): ?>
            <img class="black_theme" src="<?php echo $aicerts_logo_white['url']; ?>" alt="<?php echo $aicerts_logo_white['url']; ?>">
          <?php else: ?>
            <img class="black_theme" src="<?php echo get_template_directory_uri(); ?>/images/v-aicerts.png" alt="Aicerts">
          <?php endif; ?>
          <?php if($aicerts_logo_black): ?>
            <img class="white_theme" src="<?php echo $aicerts_logo_black['url']; ?>" alt="<?php echo $aicerts_logo_black['url']; ?>">
          <?php else: ?>
            <img class="white_theme" src="<?php echo get_template_directory_uri(); ?>/images/v-aicerts-black.png" alt="Aicerts">
          <?php endif; ?>
        </div>
    </div>
    <div class="section-description text-center mt-4 mb-4 mb-lg-5">
      <p><?php echo $better_together_description; ?></p>
    </div>
    <?php if($better_together_tiles): ?>
      <div class="row g-4">
        <?php foreach($better_together_tiles as $tiles): ?>
          <div class="col-lg-4 col-md-6">
            <div class="BetterIconText">
                <img src="<?php echo $tiles['better_together_tiles_icon']['url']; ?>" alt="<?php echo $tiles['better_together_tiles_icon']['title']; ?>">
                <h4><?php echo $tiles['better_together_tiles_description']; ?></h4>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
<!-- Better Together -->

<?php
$partner_with_ai_certs_heading = get_field('partner_with_ai_certs_heading');
$partner_with_ai_certs_content = get_field('partner_with_ai_certs_content');
$partner_with_ai_certs_image = get_field('partner_with_ai_certs_image');
?>
<section class="PartnerWithAICERTs common-section cmn-section">
  <div class="container">
    <div class="row flex-row-reverse align-items-center g-4">
      <div class="col-lg-6">
        <div class="PartnersImg">
          <?php if($partner_with_ai_certs_image): ?>
            <img class="img-fluid w-100" src="<?php echo $partner_with_ai_certs_image['url']; ?>" alt="<?php echo $partner_with_ai_certs_image['title']; ?>">
          <?php else: ?>
            <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/images/partners.jpg" alt="Partner">
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="parntersinfo">
          <h2><?php echo $partner_with_ai_certs_heading; ?></h2>
          <?php echo $partner_with_ai_certs_content; ?>
          <?php if($become_a_partner_button): ?>
            <a href="<?php echo $become_a_partner_button['url']; ?>" class="btn btn-primary"><?php echo $become_a_partner_button['title']; ?> <i class="fa-solid fa-angle-right"></i></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Partner With AI CERTs -->

<?php
$your_career_path_heading = get_field('your_career_path_heading');
$your_career_path_steps = get_field('your_career_path_steps');
?>
<section class="YourCareerPath common-section">
  <div class="container">
    <div class="section-header text-center mb-4 pb-1">
        <h2><?php echo $your_career_path_heading; ?></h2>
    </div>
    <?php if($your_career_path_steps): ?>
    <div class="YCPath text-center">
      <div class="row g-4 g-lg-5">
        <?php $i=1; foreach($your_career_path_steps as $steps): ?>
        <div class="col-lg-3 col-md-6 step-arrow-right">
          <div class="YCinfo">
            <div class="YCStep"><?php echo $i; ?></div>
            <h4><?php echo $steps['your_career_path_step_title']; ?></h4>
            <p><?php echo $steps['your_career_path_step_content']; ?></p>
          </div>
        </div>
        <?php $i++; endforeach; ?>
      </div>
    </div>
    <?php endif; ?>
  </div>
</section>
<!-- Your Career Path -->

<?php
$build_a_foundation_heading = get_field('build_a_foundation_heading');
$build_a_foundation_subheading = get_field('build_a_foundation_subheading');
?>
<section class="NewPossibilities common-section">
  <div class="container">
    <div class="light-primary-bg-color cmn-section ps-2 pe-2 text-center border-radius10">
      <div class="d-flex flex-column gap-4">
        <div class="VbrandLogo d-flex flex-wrap align-items-center flex-column flex-sm-row justify-content-center gap-3">
          <?php if($microsoft_logo_white): ?>
            <img class="black_theme" src="<?php echo $microsoft_logo_white['url']; ?>" alt="<?php echo $microsoft_logo_white['title']; ?>">
          <?php else: ?>
            <img class="black_theme" src="<?php echo get_template_directory_uri(); ?>/images/v-microsoft.png" alt="MicroSoft">
          <?php endif; ?>
          <?php if($microsoft_logo_black): ?>
            <img class="white_theme" src="<?php echo $microsoft_logo_black['url']; ?>" alt="<?php echo $microsoft_logo_black['title']; ?>">
          <?php else: ?>
            <img class="white_theme" src="<?php echo get_template_directory_uri(); ?>/images/v-microsoft-black.png" alt="MicroSoft">
          <?php endif; ?>
          <div class="hline"></div>
          <?php if($aicerts_logo_white): ?>
            <img class="black_theme" src="<?php echo $aicerts_logo_white['url']; ?>" alt="<?php echo $aicerts_logo_white['url']; ?>">
          <?php else: ?>
            <img class="black_theme" src="<?php echo get_template_directory_uri(); ?>/images/v-aicerts.png" alt="Aicerts">
          <?php endif; ?>
          <?php if($aicerts_logo_black): ?>
            <img class="white_theme" src="<?php echo $aicerts_logo_black['url']; ?>" alt="<?php echo $aicerts_logo_black['url']; ?>">
          <?php else: ?>
            <img class="white_theme" src="<?php echo get_template_directory_uri(); ?>/images/v-aicerts-black.png" alt="Aicerts">
          <?php endif; ?>
        </div>
        <div class="section-header">
          <h2 class="primary_color"><?php echo $build_a_foundation_heading; ?></h2>
          <p><?php echo $build_a_foundation_subheading; ?></p>
        </div>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <?php if($explore_certifications_button): ?>
            <a href="<?php echo $explore_certifications_button['url']; ?>" class="btn btn-primary" ><?php echo $explore_certifications_button['title']; ?></a>
          <?php endif; ?>
          <?php if($become_a_partner_button): ?>
            <a href="<?php echo $become_a_partner_button['url']; ?>" class="btn btn-outline btn-primary-outline" ><?php echo $become_a_partner_button['title']; ?></a>
           <?php endif; ?>
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
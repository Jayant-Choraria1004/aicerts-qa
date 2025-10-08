<?php
/*
 *    Template Name: Testmonials Dynamic-V2
 */
get_header();


$see_all_partners_link = get_field('see_all_partners_link');
$partners_heading = get_field('partners_heading');
$global_testimonials = get_field("testimonials", 1262);

$home_page_id = (get_site_url() === "https://dev.aicerts.ai") ? 3901 : 4352;
$partners_heading = get_field('partners_heading', $home_page_id);
$see_all_partners_link = get_field('see_all_partners_link', $home_page_id);
$partners_logos = get_field('partners_logos', $home_page_id);
$linkedin_reviews_title = get_field('linkedin_reviews_title');
$linkedin_slider = get_field('linkedin_slider');
?>

<!-- Banner Section -->
<section class="banner-video-section tm-v2-banner imgbanner">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="video-banner-cnt">
          <h1><?php echo esc_html(get_field('banner_title')); ?></h1>
          <p><?php echo esc_html(get_field('banner_paragraph')); ?></p>
          <?php
          $download_brochure = get_field('download_brochure');
          $explore_certifications = get_field('explore_certifications');
          ?>
          <?php if (!empty($download_brochure['url'])) : ?>
          <a href="<?php echo esc_url($download_brochure['url']); ?>" class="btn btn-primary me-3" download> <span><?php echo esc_html($download_brochure['title']); ?></span> </a>
          <?php endif; ?>
          <?php if (!empty($explore_certifications['url'])) : ?>
          <a href="<?php echo esc_url($explore_certifications['url']); ?>" class="btn btn-outline-dark"> <span><?php echo esc_html($explore_certifications['title']); ?></span> </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>


<?php 
    //role base section
    include_once get_template_directory() . '/inc/testimonials-linkedin-reviews-section.php'; ?>
<?php
$terms = get_field('home_category_order', $home_page_id);

?>
<!-- Course Wise Testimonial Slider Section  -->
<section class="tmv2-tabs-section cmn-sliderdots d-none">
  <div class="container maxwidth">
    <div class="row">
      <div class="col-xl-12">
        <h2>
          <?php the_field('testimonial_title'); ?>
        </h2>
        <div class="tmv2-tabs">
          <ul class="nav nav-tabs h2_tabs" id="myTab" role="tablist">
            <?php
            $first = true;
            foreach ($terms['categories_order'] as $term) { ?>
            <li class="nav-item">
              <button class="nav-link <?php echo $first ? 'active' : ''; ?>" data-bs-toggle="tab" data-bs-target="#tab<?php echo $term->term_id; ?>"
                  type="button"><?php echo $term->name; ?></button>
            </li>
            <?php
              $first = false;
            }
            ?>
          </ul>
          <div class="tab-content" id="myTabContent">
            <?php

            $first = true;
            foreach ($terms['categories_order'] as $term) { ?>
            <div class="tab-pane fade <?php echo $first ? 'active show' : ''; ?>" id="tab<?php echo $term->term_id; ?>" role="tabpanel">
              <?php
                  $salCards = [
                    [
                      'img_src' => get_template_directory_uri() . '/images/SalaryMail.svg',
                      'img_alt' => 'Mail',
                      'heading' => 'Median Salaries',
                      'field'   => 'median_salaries'
                    ],
                    [
                      'img_src' => get_template_directory_uri() . '/images/salaryadd.svg',
                      'img_alt' => 'Salary Add',
                      'heading' => 'With AI Skills',
                      'field'   => 'with_ai_skills'
                    ],
                    [
                      'img_src' => get_template_directory_uri() . '/images/Percent.svg',
                      'img_alt' => 'Percent',
                      'heading' => '% Difference',
                      'field'   => 'percentage_difference'
                    ]
                  ];
                  
                  // Check if at least one field has data
                  $hasData = false;
                  foreach ($salCards as $card) {
                    if (!empty(get_field($card['field'], $term))) {
                      $hasData = true;
                      break;
                    }
                  }
                  ?>
              <?php if ($hasData): ?>
              <div class="CourseCompletion">
                <div class="row gy-4 gy-lg-0">
                  <?php foreach ($salCards as $card): ?>
                  <?php if (!empty(get_field($card['field'], $term))) : ?>
                  <div class="col-lg-4 col-md-4">
                    <div class="CourseCard text-center">
                      <div class="iconwithprice"> <img src="<?php echo $card['img_src']; ?>" alt="<?php echo $card['img_alt']; ?>">
                        <div>
                          <h3><?php echo $card['heading']; ?></h3>
                          <span><?php echo get_field($card['field'], $term); ?></span> </div>
                      </div>
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php endforeach; ?>
                </div>
              </div>
              <?php endif; ?>
              <?php 
                
                  include_once get_template_directory() . "/inc/testimonial_cards.php"; 
                  get_testimonials_from_term($term);
                
                ?>
              <div class="text-center mt-4"> <a href="<?php //echo esc_url($explore_certifications['url']); ?>" class="btn btn-primary"> <span><?php echo esc_html($explore_certifications['title']); ?></span> </a> </div>
            </div>
            <?php
              $first = false;
            } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="tmv2-partners h2_partners_logo home_version2 bt-1">
  <div class="container">
    <div class="d-flex flex-wrap justify-content-between align-items-center">
      <?php ?>
      <?php if ($partners_heading): ?>
      <h2 class="white_text mb-0"><?php echo $partners_heading; ?></h2>
      <?php endif; ?>
      <?php if ($see_all_partners_link): ?>
      <a href="<?php echo $see_all_partners_link['url']; ?>" target="_blank"
          class="discover_more_link d-none d-md-block"><?php echo $see_all_partners_link['title']; ?></a>
      <?php endif; ?>
    </div>
    <div class="h2_partners_logo_slider mt-md-3 mt-3 cmn-sliderdots offsetarrow">
      <div class="owl-carousel owl-theme">
        <?php if ($partners_logos): ?>
        <?php foreach ($partners_logos as $p_logo): ?>
        <div class="item">
          <div class="h2_aicerts_lab_box"> <img src="<?php echo $p_logo['partner_lab_logo']; ?>" alt="Partner Logo" class="aicerts_lab_white"> <img src="<?php echo $p_logo['black_partner_lab_logo']; ?>" alt="Partner Logo" class="aicerts_lab_black"> </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
    <?php if ($see_all_partners_link): ?>
    <div class="mt-4 d-md-none"> <a href="<?php echo $see_all_partners_link['url']; ?>" target="_blank"
          class="discover_more_link ms-auto"><?php echo $see_all_partners_link['title']; ?></a> </div>
    <?php endif; ?>
  </div>
</section>

<!--section class="share-exp-section">
  <div class="container maxwidth">
    <div class="row">
      <div class="col-12">

      <div class="card exp-card">
			
          <div class="exp-gform-cnt">
          <h3>Share Your Experience</h3>
          <p>Encourage users to submit their own testimonials</p>
          <?php
            if (function_exists('gravity_form')) {
              include_once get_template_directory() . "/inc/gform-customization/review-rating-control.php";
              echo do_shortcode(get_field('review_form_shortcode'));
            }
            ?>
          </div>

          <div class="exp-img-cnt">
            <img class="stars-animated" alt="" src="<?php //echo esc_url(get_template_directory_uri() . "/images/stars-animated.gif"); ?>">
            <img class="" alt="" src="<?php //echo esc_url(get_template_directory_uri() . "/images/share-exp-img.png"); ?>">
          </div>

        </div>
      </div>
    </div>
  </div>
</section-->

<section class="tmv2-cta-section">
  <div class="container">
    <div class="happy_to_help_wrap">
      <div class="row align-items-end">
        <div class="col-md-5">
          <div class="happy_to_help_content">
            <h2 class="mb-lg-4">
              <?php the_field('footer_banner_title'); ?>
            </h2>
            <a href="<?php the_field('footer_banner_cta'); ?>" class="btn btn-primary">
            <?php $field = get_field_object('footer_banner_cta'); ?>
            <span><?php echo $field['label']; ?></span> </a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();


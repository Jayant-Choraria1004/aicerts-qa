<?php
/*
 *    Template Name: PPC Landing
 */
get_header();

$header_banner_section = get_field('header_banner_section');
$banner_title = $header_banner_section['banner_title'] ?? '';
$banner_details = $header_banner_section['banner_details'] ?? '';
$banner_cta_button = $header_banner_section['banner_cta_button'] ?? [];
$banner_background_image = $header_banner_section['banner_background_image'] ?? [];
$banner_form_shortcode = $header_banner_section['banner_form_shortcode'] ?? '';
?>
<div class="middle-section" id="get-started">
  <section class="banner-video-section imgbanner ppcbanner" style="background:url('<?php echo $banner_background_image["url"]; ?>') no-repeat center"> 
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="video-banner-cnt">
                      <h1><?php echo ($banner_title); ?></h1>
                      <p><?php echo ($banner_details); ?></p>                
                      <div class="ppc_form">
                          <?php echo do_shortcode($banner_form_shortcode); ?>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

<?php 
// Overcome Your Challenges Section
$overcome_your_challenges = get_field('overcome_your_challenges');
$overcome_section_title = $overcome_your_challenges['section_title'] ?? '';
$overcome_section_details = $overcome_your_challenges['section_details'] ?? '';
$overcome_cards = $overcome_your_challenges['event_overview'] ?? [];
$overcome_section_cta = $overcome_your_challenges['section_cta'] ?? [];
?>

    <section class="cmn-section common-section dark_bg ppcsection">
        <div class="container">
            <h2><?php echo ($overcome_section_title); ?></h2>
            <h3 class="mb-5"><?php echo ($overcome_section_details); ?></h3>
            
            <div class="ppcChallengesrow">
                <?php foreach ($overcome_cards as $card): ?>
                    <div class="ppcChallengescard">
                        <img class="img-responsive" src="<?php echo esc_url($card['icon'] ?? ''); ?>" alt="<?php echo ($card['card_title'] ?? ''); ?>">
                        <h4 class="mb-0"><?php echo ($card['card_title'] ?? ''); ?></h4>
                        <p class="mb-0"><?php echo ($card['card_detail'] ?? ''); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <?php if (!empty($overcome_section_cta)): ?>
                <a href="<?php echo esc_url($overcome_section_cta['url'] ?? '#'); ?>" class="btn btn-primary">
                    <?php echo ($overcome_section_cta['title'] ?? 'Find the Right Certification for You'); ?>
                </a>
            <?php endif; ?>
        </div>
    </section>
<?php 
// Certification Easy Steps Section
$certification_easy_steps = get_field('certification_easy_steps');
$steps_section_title = $certification_easy_steps['section_title'] ?? '';
$steps_section_details = $certification_easy_steps['section_details'] ?? '';
$steps_cards = $certification_easy_steps['event_overview'] ?? [];
$steps_section_cta = $certification_easy_steps['section_cta'] ?? [];
?>

    <section class="common-section ppcsteps">
        <div class="container">
            <h2 class="text-center mb-5"><?php echo ($steps_section_title); ?></h2>
            <div class="row">
                <?php foreach ($steps_cards as $card): ?>
                    <div class="col-lg-4">
                        <div class="Certificationsteps">
                            <img class="img-responsive" src="<?php echo esc_url($card['icon'] ?? ''); ?>" alt="<?php echo ($card['card_title'] ?? ''); ?>">
                            <h4 class="mb-2"><?php echo ($card['card_title'] ?? ''); ?></h4>
                            <p class="mb-0"><?php echo ($card['card_detail'] ?? ''); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php 
    // Free Certification Offer Section
    $free_certification_offer = get_field('free_certification_offer');
    $offer_section_title = $free_certification_offer['section_title'] ?? '';
    $offer_section_details = $free_certification_offer['section_details'] ?? '';
    if (strpos($offer_section_details, '<!--more-->') !== false) {
        list($short_content, $full_content) = explode('<!--more-->', $offer_section_details);
    } else {
        $short_content = $offer_section_details;
        $full_content = '';
    }
    ?>
    <section class="common-section">
      <div class="container">
        <div class="comprehensive_disclaimers">
          <h3><?php echo $offer_section_title; ?></h3>
          <div class="content">
            <div class="short-content">
                <?php echo $short_content; ?>
            </div>
            <?php if (!empty($full_content)): ?>
                <div class="full-content" style="display: none;">
                    <?php echo $full_content; ?>
                </div>
                <span class="read-more-btn">Read More</span>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>

    <?php 
    $course_ids = get_field('course_tab_order');
    $tabname = [];

    //foreach($course_tab_order as $course_id):
    $args1 = array(
        'post_type' => 'customer-testimonial',
        'posts_per_page' => 10,
        'orderby'        => 'rand',
        'meta_query'     => array(
            array(
                'key'     => 'course_taken_by_student',   // ACF field key
                'value'   => $course_ids,                // Leave value empty to check if field has any value
                'compare' => 'IN',              // Fetch posts where 'certification' is not empty
            ),
        ),
    );
    $testimonial = get_posts($args1);
    $testid = [];
    foreach($testimonial as $testi_post):
        $certificate_slider = get_field('certification', $testi_post->ID); // Fetch the field once
        $view_post_link = get_field('view_post_link', $testi_post->ID); // Fetch the field once
        $course_taken_by_student = get_field('course_taken_by_student', $testi_post->ID);
        if(!empty($certificate_slider) && !empty($course_taken_by_student) ) {
            $testid[] = [
                'testiid' => $testi_post->ID,
                'post_title' => $testi_post->post_title,
                'course_taken_by_student' => $course_taken_by_student->ID,
                'certificateslider' => $certificate_slider,
                'view_post_link' => $view_post_link
            ];
        }
    endforeach;
    ?>

    <section class="share-exp-section tmlinkedin h2_popular_certifications">
        <div class="container">
            <h2 class="mb-4"> </h2><h2 class="mb-4">Trusted LinkedIn Reviews Posted by <span>Our Learners</span> </h2>
            <div class="mt-md-3 mt-3 cmn-sliderdots offsetarrow">
                <div class="owl-carousel owl-theme">
                    <?php foreach ($testid as $linkedin): ?>
                        <div class="item">
                            <div class="tmpostcard">
                            <div class="tmpost-image"> <?php echo $linkedin['certificateslider']; ?></div>
                            <div class="mt-3 post-link text-center"> <a href="<?php echo $linkedin['view_post_link']; ?>" target="_blank">View Post</a> </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>              
        </div>
    </section>


<?php 
$dont_wait_cta_section = get_field('dont_wait_cta_section');
$dont_wait_section_title = $dont_wait_cta_section['section_title'] ?? '';
$dont_wait_section_description = $dont_wait_cta_section['section_description'] ?? '';
$dont_wait_section_cta = $dont_wait_cta_section['section_cta'] ?? [];
$dont_wait_section_image = $dont_wait_cta_section['section_image'] ?? [];
?>
    <section class="cmn-section common-section dark_bg journeybg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ppc_journeycnt">
                    <div>
                        <h2 class="primary_color mb-lg-5"><?php echo esc_html($dont_wait_section_title); ?></h2>
                        <?php if (!empty($dont_wait_section_cta)): ?>
                            <a href="<?php echo esc_url($dont_wait_section_cta['url'] ?? '#'); ?>" class="btn btn-primary">
                                <?php echo ($dont_wait_section_cta['title'] ?? 'Get Started'); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-responsive ppc_journeycimg" src="<?php echo esc_url($dont_wait_section_image['url'] ?? ''); ?>" alt="<?php echo $dont_wait_section_image['alt']; ?>">
                </div>
            </div>
        </div>
    </section>
</div>

<script>
jQuery(document).ready(function ($) {
    $('.read-more-btn').click(function () {
        const fullContent = $(this).siblings('.full-content');
        const shortContent = $(this).siblings('.short-content');
        
        if (fullContent.is(':visible')) {
            fullContent.slideUp();
            $(this).text('Read More');
        } else {
            fullContent.slideDown();
            $(this).text('Read Less');
        }
    });

});
</script>
<?php
get_footer();
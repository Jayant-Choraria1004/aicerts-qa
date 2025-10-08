<?php /* Template Name: Template AI Certified Trainer  
  */

get_header(); ?>

<style>
.video-card {
  max-width: 100%;
}

.video-wrapper {
  position: relative;
  width: 100%;
  padding-bottom: 56.25%; /* 16:9 ratio */
  height: 0;
  overflow: hidden;
  border-radius: 8px;
}

.video-wrapper iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}
</style>

<section class="no_overlay-header aictbanner">
   <div class="container-full labsbanner">
      <div class="position-relative row flex-row-reverse align-items-center">
         <?php if (have_rows('header_banner_section')) : ?>
            <?php while (have_rows('header_banner_section')) : the_row(); ?>
               <?php $video = get_sub_field('no_overlay_header_video'); ?>
               <?php $poster_image = get_sub_field('no_overlay_header_poster'); ?>
               <?php $title_small_logo = get_sub_field('title_small_logo'); ?>
               <?php $title = get_sub_field('no_overlay_header_title'); ?>
               <?php $highlighted_title = get_sub_field('highlighted_title'); ?>
               <?php $subtitle = get_sub_field('no_overlay_header_subtitle'); ?>
               <?php $button_text = get_sub_field('no_overlay_header_button_text'); ?>
               <?php $button_url = get_sub_field('no_overlay_header_button_url'); ?>

               <div class="col-12 col-lg-8 col-md-6 video-with-text_overlay">
                  <div class="overaly_video">
                     <video width="100%" autoplay muted loop poster="<?php echo esc_url($poster_image); ?>">
                        <source src="<?php echo esc_url($video); ?>" type="video/mp4">
                     </video>
                  </div>
               </div>
               <div class="px-4 px-lg-4 col-12 col-lg-5 col-md-6">
                  <div class="overaly_video-content">
                     <h1>
                        <div class="aicerts-brand_logo"><!-- <img src="<?php echo $title_small_logo['url']; ?>" alt="<?php echo $title_small_logo['alt']; ?>" /> --> <?php echo $title; ?> <span class="primary_color"><?php echo $highlighted_title; ?></span></div>
                     </h1>
                     <h3 class="mb-lg-5 mb-4"><?php echo esc_html($subtitle); ?></h3>
                     <a href="<?php echo esc_url($button_url); ?>" class="btn btn-primary">
                        <?php echo esc_html($button_text); ?>
                     </a>
                  </div>
               </div>
            <?php endwhile; ?>
         <?php endif; ?>
      </div>
   </div>
</section>



<section class="certi_trai-rich-text-video">
   <?php if (have_rows('rich_text_section')) : ?>
      <?php while (have_rows('rich_text_section')) : the_row(); ?>
         <?php $video = get_sub_field('video'); ?>
         <?php $poster_image = get_sub_field('poster_image'); ?>
         <?php $rich_text = get_sub_field('rich_text'); ?>
         <?php $thumb_img = get_sub_field('thumb_img');   ?>

         <div class="certi_trai-rich-overaly_video">
            <video width="100%" autoplay muted loop poster="<?php //echo esc_url($poster_image); 
                                                            ?>">
               <source src="<?php echo esc_url($video); ?>" type="video/mp4">
            </video>
         </div>
         <div class="certi_trai-rich-text-video-content">
            <div class="container">
               <div class="row align-items-center gx-lg-5 gy-sm-4">
                  <div class="col-lg-2">
                     <div class="certi_trai_logo">
                        <img src="<?php echo esc_url($thumb_img['url']); ?>" alt="Badge-Certified-Trainer" />
                     </div>
                  </div>
                  <div class="col-lg-10 px-lg-5">
                     <h3 class="mb-0"><?php echo strip_tags($rich_text); ?></h3>
                  </div>
               </div>
            </div>
         </div>
      <?php endwhile; ?>
   <?php endif; ?>
</section>


<?php if (have_rows('program_highlights')) : ?>
   <section class="ProgramHighlights">
      <?php while (have_rows('program_highlights')) : the_row(); ?>
         <div class="container common-cnt">
            <div class="section-heading text-center mb-4">
               <h2><?php the_sub_field('section_title'); ?> <span class="primary_color"><?php the_sub_field('highlight_text'); ?></span></h2>
            </div>
            <div class="row gy-4">
               <?php if (have_rows('highlights')) : ?>
                  <?php while (have_rows('highlights')) : the_row(); ?>
                     <div class="col-lg-6 col-md-6">
                        <div class="pro-h_card">
                           <div class="icon_with-text-box">
                              <div class="pro-h_icon">
                                 <img src="<?php the_sub_field('icon'); ?>" alt="<?php the_sub_field('title'); ?>" />
                              </div>
                              <div class="pro-h_text">
                                 <h6>
                                    <span class="primary_color"><?php the_sub_field('title'); ?>:</span> <?php the_sub_field('description'); ?>
                                 </h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  <?php endwhile; ?>
               <?php endif; ?>
            </div>
         </div>
      <?php endwhile; ?>
   </section>
<?php endif; ?>

<?php if (have_rows('corporate_training_engagements')) : ?>
   <section class="Corporate_TE">
      <?php while (have_rows('corporate_training_engagements')) : the_row(); ?>
         <div class="container common-cnt">
            <div class="section-heading text-center">
               <h2><?php the_sub_field('section_title'); ?> <span class="primary_color"><?php the_sub_field('highlight_text'); ?></span></h2>
            </div>
            <div class="row align-items-center gx-lg-5 gy-4">
               <div class="col-lg-4 pe-lg-5">
                  <div class="Corporate_img">
                     <img src="<?php the_sub_field('image'); ?>" class="w-100" alt="<?php the_sub_field('section_title'); ?>" />
                  </div>
               </div>
               <div class="col-lg-8">
                  <div class="Corporate_content">
                     <p class="white_text"><?php echo strip_tags(get_sub_field('description')); ?></p>
                     <?php if (have_rows('bullet_points')) : ?>
                        <ul class="bullets_points white_text">
                           <?php while (have_rows('bullet_points')) : the_row(); ?>
                              <li><?php the_sub_field('bullet_point'); ?></li>
                           <?php endwhile; ?>
                        </ul>
                     <?php endif; ?>
                  </div>
               </div>
            </div>
         </div>
      <?php endwhile; ?>
   </section>
<?php endif; ?>



<?php if (have_rows('eligibility_criteria')) : ?>
   <section class="Eligibility_Criteria">
      <?php while (have_rows('eligibility_criteria')) : the_row(); ?>
         <div class="container common-cnt">
            <div class="section-heading">
               <h2 class="text-center mb-4"><?php the_sub_field('section_title'); ?> <span class="primary_color"><?php the_sub_field('highlight_text'); ?></span></h2>
               <h5 class="mb-4 white_text text-center"><?php the_sub_field('subtitle'); ?></h5>
            </div>
            <div class="row gy-4">
               <?php while (have_rows('criteria')) : the_row(); ?>
                  <div class="col-lg-4">
                     <div class="et_card me-lg-2">
                        <div class="icon-text-quality">
                           <div class="icon-quality">
                              <img src="<?php the_sub_field('icon'); ?>" class="w-100" alt="Criteria Icon" />
                           </div>
                           <div class="text-quality white_text">
                              <p><?php the_sub_field('description'); ?></p>
                           </div>
                        </div>
                     </div>
                  </div>
               <?php endwhile; ?>
            </div>
         </div>
      <?php endwhile; ?>
   </section>
<?php endif; ?>

<?php
$banner_fields = get_field('who_should_take_this_program');

if ($banner_fields) :
   $section_title = $banner_fields['section_title'];
   $highlight_text = $banner_fields['highlight_text'];
   $image = $banner_fields['image'];
   $description = $banner_fields['description'];
?>
   <section class="Corporate_TE">
      <div class="container common-cnt">
         <div class="section-heading text-center">
            <h2><?php echo esc_html($section_title); ?> <span class="primary_color"><?php echo esc_html($highlight_text); ?></span>?</h2>
         </div>
         <div class="row gx-lg-5 gy-4">
            <div class="col-lg-4 pe-lg-5">
               <div class="Corporate_img">
                  <?php if ($image) : ?>
                     <img src="<?php echo esc_url($image['url']); ?>" class="w-100" alt="<?php echo esc_attr($image['alt']); ?>" />
                  <?php endif; ?>
               </div>
            </div>
            <div class="col-lg-8">
               <div class="Corporate_content">
                  <div class="white_text"><?php echo $description; ?></div>
               </div>
            </div>
         </div>
      </div>
   </section>
<?php
endif;
?>


<?php
$benefits_of_joining = get_field('benefits_of_joining');
?>
<section class="Corporate_TE">
   <div class="container common-cnt">
      <div class="section-heading text-center">
         <h2><?php echo $benefits_of_joining['section_title']; ?><span class="primary_color"> <?php echo $benefits_of_joining['highlighted_text']; ?></span></h2>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="Corporate_content">
               <?php echo $benefits_of_joining['details']; ?>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="ApplicationProcess">
   <div class="container common-cnt">
      <div class="section-heading text-center">
         <h2><?php echo get_field('steps_label'); ?></h2>
      </div>
      <div class="row gy-5">
         <?php if (have_rows('application_steps')) : ?>
            <?php while (have_rows('application_steps')) : the_row();
               $step_number = get_sub_field('step_number');
               $step_description = get_sub_field('step_description');
            ?>
			<div class="arrowanimation">
               <div class="col-12 col-md-6 col-lg-6">
                  <div class="AP_card white_text">
                     <div class="ap_step"><?php echo $step_number; ?></div>
                     <p><?php echo esc_html($step_description); ?></p>
                  </div>
               </div>
               <!--div class="col-6"></div>
               <div class="col-6"></div-->
			  </div> 
            <?php endwhile; ?>
         <?php endif; ?>
      </div>
   </div>
</section>

<?php /*
$testimonials = get_field("testimonials", 1262);
if ($testimonials) {
   shuffle($testimonials);
} 
?>

<section class="aicerts_testimonial">
   <div class="container">
      <div class="testimonial_small">
         <div class="testimonial-aicerts_slider owl-carousel">
            <?php if ($testimonials) : ?>
               <?php foreach ($testimonials as $testimonial) : ?>
                  <div class="item">
                     <div class="testimonial_card">
                        <div class="testimonial_pic">
                           <?php if ($testimonial['employee_photo']) : ?>
                              <img src="<?php echo esc_url($testimonial['employee_photo']); ?>" class="w-100" alt="<?php echo esc_attr($testimonial['employee_name']); ?>" />
                           <?php endif; ?>
                        </div>
                        <div class="testimonial_content white_text">
                           <h4><?php echo esc_html($testimonial['employee_name']); ?></h4>
                           <p><?php echo esc_html($testimonial['description']); ?></p>
                        </div>
                     </div>
                  </div>
               <?php endforeach; ?>
            <?php endif; ?>
         </div>
      </div>
   </div>
</section>
*/ ?>

<?php
$banner_fields = get_field('career_growth_and_impact');

if ($banner_fields) :
   $section_title = $banner_fields['section_title'];
   $highlight_text = $banner_fields['highlight_text'];
   $image = $banner_fields['image'];
   $description = $banner_fields['description'];
   $bullet_points = $banner_fields['bullet_points'];
?>
   <section class="Corporate_TE">
      <div class="container common-cnt">
         <div class="section-heading text-center">
            <h2><span class="primary_color"><?php echo esc_html($highlight_text); ?></span> <?php echo esc_html($section_title); ?> </h2>
         </div>
         <div class="row gx-lg-5 gy-4">
            <div class="col-lg-4 pe-lg-5">
               <div class="Corporate_img">
                  <?php if ($image) : ?>
                     <img src="<?php echo esc_url($image['url']); ?>" class="w-100" alt="<?php echo esc_attr($image['alt']); ?>" />
                  <?php endif; ?>
               </div>
            </div>
            <div class="col-lg-8">
               <div class="Corporate_content">
                  <?php echo $description; ?>
                  <?php if ($bullet_points) : ?>
                     <ul class="bullets_points white_text">
                        <?php foreach ($bullet_points as $bullet) : ?>
                           <li><?php echo esc_html($bullet['bullet_point']); ?></li>
                        <?php endforeach; ?>
                     </ul>
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </div>
   </section>
<?php
endif;
?>

<!-- Trainer Section start -->
 <section class="share-exp-section tmlinkedin h2_popular_certifications">
    <div class="container">
        <h2 class="mb-4">Trusted Reviews Posted by <span>Our Trainers</span></h2>
        <?php
        $all_trainer_testimonials = get_posts([
            'post_type'      => 'customer-testimonial',
            'posts_per_page' => -1,
            'post_status'    => 'publish',
            'tax_query' => [
                [
                    'taxonomy' => 'testimonial-category',
                    'field'    => 'slug',
                    'terms'    => 'trainer-testimonials',
                ]
            ]
        ]);
        ?>
        <div class="tab-content sub_tabs">
            <div class="tab-content popular_certifications_content">
                <!-- First Tab Content -->
                <div class="mt-md-3 mt-3 cmn-sliderdots offsetarrow">
                    <div class="owl-carousel owl-theme">
                        <?php if ($all_trainer_testimonials): ?>
                            <?php foreach ($all_trainer_testimonials as $testimonial): 
                                $customer_photo      = get_field('customer_photo', $testimonial->ID);
                                $user_name           = get_the_title($testimonial->ID);
                                $user_job_role       = get_field('user_job_role', $testimonial->ID);
                                $certificate_iframe  = get_field('certification', $testimonial->ID);
                                $view_post_link      = get_field('view_post_link', $testimonial->ID);
                                ?>
                                <div class="item video-card">
                                    <div class="linkedintm-card tmpostcard">
                                        <div class="linkintm-header">
                                            <?php  if ($customer_photo) : ?>
                                                <img src="<?php echo esc_url($customer_photo['url']); ?>" alt="User Thumb" style="width:45px;" />
                                            <?php else : ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/no-user.jpg" alt="User Thumb" style="width:45px;" />
                                            <?php endif; ?>
                                            <div>
                                                <p><?php echo esc_html($user_name); ?></p>
                                                <span><?php echo esc_html($user_job_role); ?></span>
                                            </div>
                                        </div>
                                        <div class="video-wrapper">
                                            <?php echo $certificate_iframe; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>No testimonials found.</p>
                        <?php endif; ?>
                        <!-- Repeat item for more testimonials -->
                    </div>
                </div>
                <!-- End Second Tab -->
            </div>
        </div>
    </div>
</section>

<!-- Trainer Section End -->

<?php
$interested_in_becoming_an_aict = get_field('interested_in_becoming_an_aict');

if ($interested_in_becoming_an_aict) :
   $section_title = $interested_in_becoming_an_aict['title'];
   $background = $interested_in_becoming_an_aict['background'];
   $subtitle = $interested_in_becoming_an_aict['subtitle'];
   $button_text = $interested_in_becoming_an_aict['button_text'];
   $button_link = $interested_in_becoming_an_aict['button_link'];
?>

   <section class="Becoming">
      <div class="container">
         <div class="BecomeaTrainer">
            <div class="news_banner">
               <img src="<?php echo $background; ?>" class="w-100" alt="CTE Banner" />
            </div>
            <div class="BTrainer-content">
               <h2><span class="primary_color"><?php echo $section_title; ?></span></h2>
               <h5 class="white_text"><?php echo $subtitle ?></h5>
               <a href="<?php echo $button_link; ?>" class="btn btn-primary mt-4"><?php echo $button_text; ?></a>
            </div>
         </div>
      </div>
   </section>
<?php
endif;
?>
<?php
$lab_faq = get_field('lab_faq');
$lab_faq_heading = get_field('lab_faq_heading');
?>
<?php if ($lab_faq) : ?>
   <section class="h2_faq" id="tabFAQs">
      <div class="container common-cnt max-medium-container">
         <div class="row">
            <div class="col-lg-12">
               <?php if ($lab_faq_heading) : ?>
                  <h2 class="mb-4 mb-lg-5 text-center"><?php echo $lab_faq_heading; ?></h2>
               <?php endif; ?>
               <div class="faq_wrap" id="regularAccordionRobots">
                  <?php $i = 1;
                  foreach ($lab_faq as $faq) : ?>
                     <div class="accordion-item">

                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item<?php echo $i; ?>" aria-expanded="false">
                           <?php echo $faq['faq_question'] ?>
                        </button>
                        <div id="item<?php echo $i; ?>" class="accordion-collapse collapse" style="">
                           <div class="accordion-body">
                              <p><?php echo $faq['faq_answer'] ?></p>
                           </div>
                        </div>
                     </div>
                  <?php $i++;
                  endforeach; ?>
               </div>
            </div>
         </div>
      </div>
   </section>
<?php endif; ?>



<script>
   jQuery(document).ready(function() {
      //highlightNthWord(".aicerts-brand_logo", 3);
   });
</script>
<script>
let youtubePlayers = [];

function onYouTubeIframeAPIReady() {
    document.querySelectorAll('iframe[src*="youtube.com"]').forEach(function(iframe) {
        // Ensure enablejsapi=1 is in src
        let src = iframe.getAttribute('src');
        if (!src.includes('enablejsapi=1')) {
            src += (src.includes('?') ? '&' : '?') + 'enablejsapi=1';
            iframe.setAttribute('src', src);
        }

        const player = new YT.Player(iframe, {
            events: {
                'onStateChange': function(event) {
                    if (event.data === YT.PlayerState.PLAYING) {
                        youtubePlayers.forEach(function(p) {
                            if (p !== event.target) {
                                p.pauseVideo();
                            }
                        });
                    }
                }
            }
        });

        youtubePlayers.push(player);
    });
}

// Load the YouTube API
(function loadYouTubeAPI() {
    if (typeof YT === 'undefined' || typeof YT.Player === 'undefined') {
        const tag = document.createElement('script');
        tag.src = 'https://www.youtube.com/iframe_api';
        const firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    } else {
        onYouTubeIframeAPIReady();
    }
})();
</script>
<?php
// get_sidebar();
get_footer();
?>
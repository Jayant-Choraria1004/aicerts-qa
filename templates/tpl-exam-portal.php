<?php /* Template Name: Template Exam Portal 
*/
get_header();
?>

<?php 
    // Assign reusable variables for all ACF fields
    $banner_title = get_field('banner_title');
    $banner_details = get_field('banner_details');
    $banner_cta_button = get_field('banner_cta_button');
    $banner_background_image = get_field('banner_background_image');
?>
<section class="no_overlay-header">  
    <div class="container-full position-relative Exam-Banner video-with-text_overlay">
        <div class="position-relative row flex-row-reverse align-items-center">
            <div class="overaly_image">
                <?php 
                if ($banner_background_image) {
                    echo '<img src="' . esc_url($banner_background_image['url']) . '" class="w-100" alt="Banner"/>';
                }
                ?>
            </div>
            <div class="px-4 px-lg-4 col-12 col-lg-5 col-md-6">
                <div class="overaly_video-content">
                    <h1>
                        <?php if ($banner_title) : ?>
                            <?php echo $banner_title; ?>
                        <?php endif; ?>
                    </h1>
                    <h3 class="mt-4 mb-4">
                        <?php if ($banner_details) : ?>
                            <?php echo esc_html($banner_details); ?>
                        <?php endif; ?>
                    </h3>
                    <?php 
                    if ($banner_cta_button) : ?>
                        <a href="<?php echo esc_url($banner_cta_button['url']); ?>" class="btn btn-primary">
                            <?php echo esc_html($banner_cta_button['title']); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section><!--Top Banner No Overlay Header End-->

<?php
    // Store ACF fields in variables
    $exam_process_video_section = get_field('exam_process_video_section');
    $exam_process_steps_section = get_field('exam_process_steps_section');


    // Extract sub-fields from video section
    $process_video = $exam_process_video_section['process_video'] ?? '';
    $video_background_image = $exam_process_video_section['video_background_image'] ?? '';

    // Extract sub-fields from steps section
    $section_title = $exam_process_steps_section['section_title'] ?? '';
    $exam_process_steps = $exam_process_steps_section['how_it_works_steps'] ?? '';
    
?>
<section class="ExamVideoStep">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-10">
                <?php if ($process_video) : ?>
                    <div class="video_frame" 
                    <?php if ($video_background_image) : ?>
                    style="background-image:url('<?php echo esc_url($video_background_image['url']); ?>')" 
                    <?php endif; ?> >
                        <?php echo $process_video; ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>
        <div class="exam-portal_step">
            <div class="section-heading text-center mt-4 mb-5">
                <h2><?php echo esc_html($section_title); ?></h2>
            </div>
            <div class="exam_row">
                <?php if ($exam_process_steps) : 
                    $step_counter = 1;
                    foreach ($exam_process_steps as $step) : ?>
                        <div class="exam_flex">
                           <div class="exam_step text-center">
                              <div class="step_card">
                                    <h4>Step</h4>
                                    <h3><?php echo sprintf("%02d", $step_counter); ?></h3>
                              </div>
                              <div class="step_info">
                                    <p><?php echo esc_html($step['step_description']); ?></p>
                              </div>
                           </div>
                        </div><!-- Exam Step Flex End-->
                    <?php 
                        $step_counter++;
                    endforeach;
                endif; ?>
            </div>
        </div>
    </div>
</section><!--ExamVideoStep End-->

<section class="WCAI mt-5 pt-lg-5">
    <?php
    // Store ACF fields in variables
    $why_choose_aicerts_section = get_field('why_choose_aicerts_section');

    // Extract sub-fields from "Why Choose AI CERTs" section
    $why_section_title = $why_choose_aicerts_section['section_title'] ?? '';
    $section_cards = $why_choose_aicerts_section['section_cards'] ?? [];
    ?>

    <div class="container text-center">
        <div class="section-heading mb-5">
            <h2><?php echo $why_section_title; ?></h2>
        </div>
        <div class="row gx-5">
            <?php if ($section_cards) : 
                foreach ($section_cards as $card) : ?>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="why_card h-100">
                            <h3 class="primary_color"><?php echo esc_html($card['card_title']); ?></h3>
                            <p><?php echo esc_html($card['card_description']); ?></p>
                        </div>
                    </div>
                <?php endforeach;
            endif; ?>
        </div>
    </div>
</section>


<?php
    // Store ACF field in a variable
    $ready_to_certified = get_field('ready_to_certified');

    // Extract fields for "Ready to Get Certified" section
    $ready_title = $ready_to_certified['title'] ?? 'Ready to Get Certified?';
    $ready_description = $ready_to_certified['description'] ?? 'Take the next step in your career with an AI CERTs™ certification.';
    $ready_button_label = $ready_to_certified['button_label'] ?? 'Apply Now';
    $ready_button_url = $ready_to_certified['button_url'] ?? '#';
    $ready_image = $ready_to_certified['image'] ?? '';
?>

<section class="JoinOurCertified mt-5 pt-lg-4">
    <div class="container">
        <div class="cta_banner">
            <div class="ctabanner_img">
                <?php if ($ready_image) : ?>
                    <img src="<?php echo esc_url($ready_image['url']); ?>" alt="<?php echo esc_attr($ready_image['alt']); ?>" />
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/rgc.jpg" alt="Ready to Get Certified" />
                <?php endif; ?>
            </div>
            <div class="ctabanner-content">
                <h2 class="primary_color"><?php echo esc_html($ready_title); ?></h2>
                <h3 class="mt-4 mb-lg-5"><?php echo esc_html($ready_description); ?></h3>
                <div class="cta_btns">
                    <a href="<?php echo esc_url($ready_button_url); ?>" class="btn btn-primary"><?php echo esc_html($ready_button_label); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="h2_faq mt-5 mb-5 pt-lg-3 pt-1 pb-lg-5" id="tabFAQs">
    <?php
    // Store the FAQ section field in a variable
    $faq_section = get_field('faq_section');

    // Extract FAQ entries
    $faqs = $faq_section['faqs'] ?? [];
    ?>
    <div class="container common-cnt max-medium-container">
        <div class="faq_wrap home_version2">
            <div class="col-lg-12">
                <h2 class="mb-4 mb-lg-5 text-center"><?php echo esc_html($faq_section['section_title'] ?? 'Frequently Asked Questions'); ?></h2>
                <div class="accordion" id="regularAccordionRobots">
                    <?php if ($faqs) :
                        $faq_counter = 1;
                        foreach ($faqs as $faq) : 
                            $faq_question = $faq['question'] ?? '';
                            $faq_answer = $faq['answer'] ?? '';
                            ?>
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item<?php echo $faq_counter; ?>" aria-expanded="false">
                                    <?php echo esc_html($faq_question); ?>
                                </button>
                                <div id="item<?php echo $faq_counter; ?>" class="accordion-collapse collapse" style="">
                                    <div class="accordion-body">
                                        <p><?php echo $faq_answer; ?></p>
                                    </div>
                                </div>
                            </div><!-- FAQs Item End-->
                            <?php 
                            $faq_counter++;
                        endforeach;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</section><!-- FAQs End-->


<!--Footer-->
<?php
get_footer();
?>
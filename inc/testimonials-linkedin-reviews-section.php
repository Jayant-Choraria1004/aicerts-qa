<?php

$course_tab_order = get_field('course_tab_order');


// $args = array(
//     'post_type' => 'courses',
//     'posts_per_page' => -1,
//     'orderby' => 'meta_value_num', // Use 'meta_value_num' for numeric values
//     'meta_key' => 'certification_order_number', // Replace with your custom field key
//     'order' => 'ASC' // Ascending order
// );
// $courses = get_posts($args);
$tabname = [];

foreach($course_tab_order as $course_id):
    $args1 = array(
        'post_type' => 'customer-testimonial',
        'posts_per_page' => -1,
        'meta_query'     => array(
            array(
                'key'     => 'course_taken_by_student',   // ACF field key
                'value'   => $course_id,                // Leave value empty to check if field has any value
                'compare' => '==',              // Fetch posts where 'certification' is not empty
            ),
        ),
    );
    $testimonial = get_posts($args1);
    $testid = [];
    foreach($testimonial as $testi_post):
        $certificate_slider = get_field('certification', $testi_post->ID); // Fetch the field once
        $customer_name = get_the_title($testi_post->ID);
        $customer_photo = get_field('customer_photo',  $testi_post->ID);
        $customer_job_role = get_field('user_job_role',  $testi_post->ID);
        $certificate_earned_img_url = get_the_post_thumbnail_url($testi_post->ID);
        $testimonial_message = get_the_excerpt($testi_post->ID);
        $view_post_link = get_field('view_post_link', $testi_post->ID); // Fetch the field once
        $course_taken_by_student = get_field('course_taken_by_student', $testi_post->ID);
        if(!empty($certificate_slider) && !empty($course_taken_by_student) ) {
            $testid[] = [
                'testiid' => $testi_post->ID,
                'customer_name' => $testi_post->post_title,
                'customer_photo' => $customer_photo,
                'customer_job_role' => $customer_job_role,
                'certificateslider' => $certificate_slider,
                'testimonial_message' => $testimonial_message,
                'view_post_link' => $view_post_link,
                'course_taken_by_student' => $course_taken_by_student->ID,
                'certificate_earned_img_url' => $certificate_earned_img_url            
            ];
        }
    endforeach;
    if(!empty($testid) ) {
        $course_title = get_the_title( $course_id );
        $tabname[] = [
            'course_name' => $course_title,
            'testimonial' =>  $testid,
            'course_id' => $course_id,
            'courseimg' => get_the_post_thumbnail_url( $course_id),
            'totalcountslider' => count($testid)
        ];
    }
endforeach;
?>

<section class="share-exp-section tmlinkedin h2_popular_certifications">
    <div class="container">
        <h2 class="mb-4"> </h2><h2 class="mb-4">Trusted LinkedIn Reviews Posted by <span>Our Learners</span> </h2>
       
        <div class="tab-content sub_tabs" id="main_tabsContent">
            <div class="tab-pane fade show active" id="main_tab_0-pane" role="tabpanel" aria-labelledby="main_tab_0" tabindex="0">
                <ul class="nav nav-tabs h2_tabs" id="popular_certifications_Role_Base_Sub_CategoryTab" role="tablist">
                <?php $courseno = 0; foreach($tabname as $tab): ?>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link <?php echo ($courseno == 0 ? 'active' : ''); ?>" id="sub_tab_<?php echo $courseno; ?>_business" data-bs-toggle="tab" data-bs-target="#sub_tab_<?php echo $courseno; ?>_business-pane" type="button" role="tab" aria-controls="sub_tab_<?php echo $courseno; ?>_business-pane" aria-selected="<?php echo ($courseno == 0 ? 'true' : 'false'); ?>"><?php echo $tab['course_name']; ?></button>
                    </li> 
                <?php $courseno++; endforeach; ?>
                </ul>
                <div class="tab-content popular_certifications_content" id="popular_certifications_Role_Base_Sub_CategoryTabContent">
                    <?php $tabno = 0; foreach($tabname as $tab): ?>
                        <div class="tab-pane fade <?php echo ($tabno == 0) ? 'show active' : '' ?>" id="sub_tab_<?php echo $tabno; ?>_business-pane" role="tabpanel" aria-labelledby="sub_tab_<?php echo $tabno; ?>_business" tabindex="0">
                            <div class="accordion-item course_accordian" id="course_accordian_<?php echo $tabno; ?>_business">
                                <h2 class="accordion-header" id="acc_course_heading_<?php echo $tabno; ?>_business">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc_course_collapse_<?php echo $tabno; ?>_business" aria-expanded="true" aria-controls="acc_course_collapse_<?php echo $tabno; ?>_business">
                                        <div class="course_btn_wrap">
                                            <div class="course_img">
                                                <?php if($tab['courseimg']) { ?>
                                                    <img src="<?= $tab['courseimg'] ?>" alt="">
                                                <?php } else { ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/course-thumb.jpg" alt="">
                                                <?php } ?>
                                            </div>
                                            <div class="course_title">
                                                <h6><?php echo $tab['course_name']; ?></h6>
                                                <p><?php echo $tab['totalcountslider']; ?>certifications</p>
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="acc_course_collapse_<?php echo $tabno; ?>_business" class="accordion-collapse collapse" aria-labelledby="acc_course_heading_<?php echo $tabno; ?>" data-bs-parent="#course_accordian_<?php echo $tabno; ?>">
                                    <div class="mt-md-3 mt-3 cmn-sliderdots offsetarrow">
                                        <div class="owl-carousel owl-theme">
                                            <?php foreach ($tab['testimonial'] as $linkedin): ?>
                                                <div class="item">
                                                    <div class="linkedintm-card tmpostcard">
                                                        <div class="linkintm-header">
                                                                <?php if ($linkedin['customer_photo']) : ?>
                                                                    <img src="<?php echo esc_url($linkedin['customer_photo']['url']); ?>" alt="User Thumb" style="width:45px;" />
                                                                <?php else : ?>
                                                                    <i class="fa-solid fa-user"></i>
                                                                <?php endif; ?>
                                                                <div>
                                                                    <p><?php echo esc_html($linkedin['customer_name']); ?></p>
                                                                    <span><?php echo esc_html($linkedin['customer_job_role']); ?></span>
                                                                </div>
                                                        </div>
                                                        <p class="linkedintm-disc"><?php echo esc_html($linkedin['testimonial_message']); ?></p>
                                                        <?php if ($linkedin['certificate_earned_img_url']) : ?>
                                                            <img class="linkedincerti-img" src="<?php echo esc_url($linkedin['certificate_earned_img_url']); ?>" alt="Certificate Earned By <?php echo esc_html($linkedin['customer_name']); ?>" />
                                                        <?php else : ?>
                                                            <img class="linkedincerti-img" src="<?php echo esc_url(get_template_directory_uri() . '/images/certificate-testimonial-placeholder.jpg'); ?>" alt="Certificate Earned By <?php echo esc_html($linkedin['customer_name']); ?>" />
                                                        <?php endif; ?>
                                                        <a href="<?php echo esc_url($linkedin['view_post_link']); ?>" class="viewpostbtn" target="_blank">View Post</a>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php $tabno++; endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>



<script>
    jQuery(document).ready(function() {
        jQuery(".popular_certifications_content .popular_certifications_content .tab-pane.fade:first").addClass("show active");
    });
</script>



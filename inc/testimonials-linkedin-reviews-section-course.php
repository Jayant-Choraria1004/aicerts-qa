<?php

global $post;
$post_id = $post->ID;
$course_id = get_field('course_taken_by_student');
$tabname = [];

$args1 = array(
    'post_type' => 'customer-testimonial',
    'posts_per_page' => 10,
    'meta_query' => array(
        array(
            'key' => 'course_taken_by_student', // ACF field key
            'value' => $post_id, // Leave value empty to check if field has any value
            'compare' => '==', // Fetch posts where 'certification' is not empty
        ),
    ),
);
$testimonials = new WP_Query($args1);

if ($testimonials->have_posts()) : ?>
    <section class="share-exp-section tmlinkedin h2_popular_certifications" id="tabTestimonials">
        <div class="container">
            <h2 class="mb-4"> </h2>
            <h2 class="mb-4">Trusted LinkedIn Reviews Posted by <span>Our Learners</span></h2>
            <div class="mt-md-3 mt-3 cmn-sliderdots offsetarrow">
                <div class="owl-carousel owl-theme">
                    <?php while ($testimonials->have_posts()) : $testimonials->the_post(); 
                        $customer_name = get_the_title();
                        $customer_photo = get_field('customer_photo');
                        $customer_job_role = get_field('user_job_role');
                        $certificate_earned_img_url = get_the_post_thumbnail_url();
                        $testimonial_message = get_the_excerpt();
                        $view_post_link = get_field('view_post_link');
                    ?>
                        <div class="item">
                            <div class="linkedintm-card tmpostcard">
                                <div class="linkintm-header">
                                    <?php if ($customer_photo) : ?>
                                        <img src="<?php echo esc_url($customer_photo['url']); ?>" alt="User Thumb" style="width:45px;" />
                                    <?php else : ?>
                                        <i class="fa-solid fa-user"></i>
                                    <?php endif; ?>
                                    <div>
                                        <p><?php echo esc_html($customer_name); ?></p>
                                        <span><?php echo esc_html($customer_job_role); ?></span>
                                    </div>
                                </div>
                                <p class="linkedintm-disc"><?php echo esc_html($testimonial_message); ?></p>
                                <?php if ($certificate_earned_img_url) : ?>
                                    <img src="<?php echo esc_url($certificate_earned_img_url); ?>" alt="Certificate Earned By <?php echo esc_html($customer_name); ?>" />
                                <?php else : ?>
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/certificate-testimonial-placeholder.jpg'); ?>" alt="Certificate Earned By <?php echo esc_html($customer_name); ?>" />
                                <?php endif; ?>
                                <a href="<?php echo esc_url($view_post_link); ?>" class="viewpostbtn" target="_blank">View Post</a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif;
wp_reset_postdata();
?>
<?php /* Template Name: Role Based Solution */ 
get_header();
$role_based_banner_image = get_field('role_based_banner_image');
$role_based_banner_heading = get_field('role_based_banner_heading');
$role_based_banner_content = get_field('role_based_banner_content');
$get_in_touch_button = get_field('get_in_touch_button');
$expert_level_heading = get_field('expert_level_heading');
$expert_level_content = get_field('expert_level_content');
$training_card = get_field('training_card');
$explore_top_certifications_heading = get_field('explore_top_certifications_heading');
$explore_top_certifications = get_field('explore_top_certifications');
$personalized_section = get_field('personalized_section');
$contact_us_image = get_field('contact_us_image');
$contact_us_heading = get_field('contact_us_heading');
$contact_us_button = get_field('contact_us_button');
$buy_now = get_field('buy_now');
$download_brochure = get_field('download_brochure');

?>

<section class="no_overlay-header rbs-banner">
    <div class="container-full">
        <div class="image-with-text_overlay position-relative">
            <?php if($role_based_banner_image) : ?>
                <div class="overaly_image">
                    <img src="<?php echo $role_based_banner_image['url']; ?>" class="w-100"  alt="<?php echo $role_based_banner_image['alt']; ?>"/> 
                </div>
            <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/role_base-banner.jpg" class="w-100"  alt="Banner"/>
            <?php endif; ?>
            <div class="overaly_conten px-4 px-lg-5">
                <?php if($role_based_banner_heading) : ?>
                    <h1><?php echo $role_based_banner_heading; ?></h1>
                <?php endif; ?>
                <?php if($role_based_banner_content) : ?>
                    <p><?php echo $role_based_banner_content; ?></p>
                <?php endif; ?>
                <?php if($get_in_touch_button) : ?>
                    <a href="<?php echo $get_in_touch_button['url']; ?>" target="<?php echo $get_in_touch_button['url']; ?>" class="btn btn-primary"><?php echo $get_in_touch_button['title']; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section><!--Top Banner No Overlay Header End-->

<?php if($expert_level_heading) : ?>
<section class="Expert-level mt-5 mb-5 pb-lg-4 pt-lg-4">
    <div class="section_header text-center mb-5">
        <div class="container max-medium-container">
            <h2><span class="primary_color"><?php echo $expert_level_heading; ?></h2>
            <?php if($expert_level_content) : ?>
                <p><?php echo $expert_level_content; ?></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="Training_Role">
        <div class="container">
            <div class="row g-4">
			
			<div class="owl-carousel owl-theme">
				
            <?php if($training_card) : ?>
                <?php foreach($training_card as $card) : ?>
				
                <div class="item">
                    <div class="training_card">
                        <div class="card_image">
                            <img src="<?php echo $card['card_image']['url']; ?>" class="w-100"  alt="<?php echo $card['card_image']['alt']; ?>"/> 
                        </div>
                        <div class="card_content">
                            <h3 class="primary_color mb-0"><?php echo $card['card_heading']; ?></h3>
                            <p class="white_text mb-0"><?php echo $card['card_content']; ?></p>
                        </div>
                    </div>
                </div>
				
				
                <?php endforeach; ?>
            <?php endif; ?>
				
			</div>	
			
            </div>
        </div>
    </div>

</section><!--Expert-level End-->
<?php endif; ?>

<?php
    // The Query
    $args = array(
        'post_type' => 'career-path',
        'posts_per_page' => 100, 
        'post_status' => 'publish',
        'order' => 'ASC',
    );
    $query = new WP_Query($args);
?>
<section class="explore-all_our-role mb-5 pb-5">
    <div class="section_header mb-5">
        <div class="container">
            <h2 class="text-uppercase"><span class="primary_color">key</span> Roles</h2>
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <div class="CareerPaths_role">
                        <select id="CareerPathsDropdown">
                            <?php
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    ?>
                                    <option value="<?php echo get_the_ID(); ?>" data-postid="postid-<?php echo get_the_ID(); ?>"><?php echo get_the_title() ?></option>
                                <?php } ?>
                                <?php  wp_reset_postdata(); 
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <a href="javascript:void(0)" class="btn btn-primary viewall searchkeyroles">Search</a>
                </div>
            </div>
        </div>
    </div>
    <!-- parallel_roles start -->
    <div class="parallel_Certi parallel_roles" id="postsContainer3">
        <div class="container">
            <div class="section_header mb-5">
                <h2 class="text-uppercase"><span class="primary_color">Parallel</span> Roles</h2>
            </div>
            <div class="row gy-5 mb-5">
                <div class="col-12">
                    <ul class="list-group list-group-horizontal">
                    <?php
                    // The Loop
                    if ($query->have_posts()) :
                    while ($query->have_posts()) :
                        $query->the_post();
                    ?>
                    <?php $parallel_roles = get_field('parallel_roles'); ?>
                    <?php if ($parallel_roles): ?>
                        <?php foreach ($parallel_roles as $pararoles): ?>
                            <li class="list-group-item me-3 postid-<?php echo get_the_ID(); ?>"><a href="#<?php //echo $pararoles->term_id; ?>"><?php echo $pararoles->name; ?></a></li>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- parallel_roles end -->

    <div class="essential_certi" id="postsContainer2">
        <div class="container">
            <div class="section_header">
                <h2>Essential <span class="primary_color">Certification</span></h2>
            </div>
            <div class="row gy-5">
                <?php
                // The Loop
                if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                ?>
                <?php $essential_certifications = get_field('essential_certifications'); ?>
                <?php if ($essential_certifications): ?>
                    <?php foreach ($essential_certifications as $course): ?>
                        <?php $buy_now1 = get_field('by_now_url', $course); ?>
                        <?php $courese_content = get_field('content_for_role_based_page', $course); ?>
                        <!-- <a class="btn" href="<?php echo get_permalink($course); ?>"><?php echo get_the_title($course); ?></a> -->
                        <div class="col-12 careerbox postid-<?php echo get_the_ID(); ?>">
                        <div class="recom_card">
                            <div class="certi_label">Essential</div>
                            <div class="recom_card-inner">
                                <div class="certification-details">
                                    <div class="certi_badge">
                                        <img src="<?php echo get_the_post_thumbnail_url($course); ?>" class="w-100"  alt="Banner"/> 
                                    </div>
                                    <div class="certi_name-content">
                                        <a href="<?php echo get_permalink($course); ?>"><h3 class="white_text"><?php echo get_the_title($course); ?></h3></a>
                                        <?php if($courese_content) : ?>
                                            <p class="white_text"><?php echo $courese_content; ?></p>
                                        <?php else: ?>
                                            <p class="white_text">Learn AI basics & craft powerful prompts for AI models. Gain hands-on skills for diverse applications</p>
                                        <?php endif; ?>
                                        <?php if($buy_now1) : ?>
                                            <a href="<?php echo $buy_now1; ?>" class="btn btn-primary">Buy Now</a>
                                        <?php endif; ?>
                                    </div>
                                    <div class="certi_couse_info">
                                        <div class="icon_text-info">
                                            <?php $examination_time = get_post_meta($course, 'role_based_course_hours', true); ?>
                                            <span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/Time.svg" alt="Banner"/></span>
                                            <?php if($examination_time) : ?>
                                                <span class="icon_text"><?php echo $examination_time; ?></span>
                                            <?php else: ?>
                                                <span class="icon_text">1 Hour</span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="icon_text-info">
                                            <?php $modules = get_post_meta($course, 'modules', true); ?>
                                            <span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/Book.svg" alt="Banner"/></span>
                                            <span class="icon_text"><?php echo $modules." Modules"; ?></span>
                                        </div>
                                        <!-- <div class="icon_text-info">
                                            <span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/Range.svg" alt="Banner"/></span>
                                            <span class="icon_text">Intermediate</span>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div><!--Course End-->
                    <?php endforeach; ?>
                <?php endif; ?>
                <?php }
                    wp_reset_postdata();
                } else {
                    // no posts found
                    echo 'No Career Path found';
                }
            ?>
            </div>
        </div>
    </div>


    <div class="Recommended_Certi" id="postsContainer">
        <div class="container">
            <div class="section_header">
                <h2>Recommended <span class="primary_color">Certification</span></h2>
            </div>
            <div class="row gy-5">
                <?php
                // The Loop
                if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                ?>
                <?php $recommended_courses = get_field('recommended__courses'); ?>
                <?php if ($recommended_courses): ?>
                    <?php foreach ($recommended_courses as $course): ?>
                        <?php $buy_now1 = get_field('by_now_url', $course); ?>
                        <?php $courese_content = get_field('content_for_role_based_page', $course); ?>
                        <!-- <a class="btn" href="<?php echo get_permalink($course); ?>"><?php echo get_the_title($course); ?></a> -->
                        <div class="col-12 careerbox postid-<?php echo get_the_ID(); ?>">
                        <div class="recom_card">
                            <div class="certi_label">Recommended</div>
                            <div class="recom_card-inner">
                                <div class="certification-details">
                                    <div class="certi_badge">
                                        <img src="<?php echo get_the_post_thumbnail_url($course); ?>" class="w-100"  alt="Banner"/> 
                                    </div>
                                    <div class="certi_name-content">
                                        <a href="<?php echo get_permalink($course); ?>"><h3 class="white_text"><?php echo get_the_title($course); ?></h3></a>
                                        <?php if($courese_content) : ?>
                                            <p class="white_text"><?php echo $courese_content; ?></p>
                                        <?php else: ?>
                                            <p class="white_text">Learn AI basics & craft powerful prompts for AI models. Gain hands-on skills for diverse applications</p>
                                        <?php endif; ?>
                                        <?php if($buy_now1) : ?>
                                            <a href="<?php echo $buy_now1; ?>" class="btn btn-primary">Buy Now</a>
                                        <?php endif; ?>
                                    </div>
                                    <div class="certi_couse_info">
                                        <div class="icon_text-info">
                                            <?php $examination_time = get_post_meta($course, 'role_based_course_hours', true); ?>
                                            <span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/Time.svg" alt="Banner"/></span>
                                            <?php if($examination_time) : ?>
                                                <span class="icon_text"><?php echo $examination_time; ?></span>
                                            <?php else: ?>
                                                <span class="icon_text">1 Hour</span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="icon_text-info">
                                            <?php $modules = get_post_meta($course, 'modules', true); ?>
                                            <span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/Book.svg" alt="Banner"/></span>
                                            <span class="icon_text"><?php echo $modules." Modules"; ?></span>
                                        </div>
                                        <!-- <div class="icon_text-info">
                                            <span class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/Range.svg" alt="Banner"/></span>
                                            <span class="icon_text">Intermediate</span>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div><!--Course End-->
                    <?php endforeach; ?>
                <?php endif; ?>
                <?php }
                    wp_reset_postdata();
                } else {
                    // no posts found
                    echo 'No Career Path found';
                }
            ?>
            </div>
        </div>
    </div>
</section><!--Career Path End-->

<?php if($explore_top_certifications) : ?>
<section class="Top-Certifications mb-5 pb-lg-4">
    <div class="container">
        <div class="section_header mb-4">
        <?php if($explore_top_certifications_heading) : ?>
            <h2><?php echo $explore_top_certifications_heading; ?></h2>
        <?php endif; ?>
        </div>
        <div class="owl-carousel owl-theme Top-Certi_slider">
            <?php 
            foreach($explore_top_certifications as $explore_certi):
                $course_url = get_the_permalink($explore_certi);
                $thumb_image = get_the_post_thumbnail_url($explore_certi);
                $title = get_the_title($explore_certi);
                $title_with_br = preg_replace('/\+ /', '+ <br>', $title);
            ?>
            <div class="item">  
                <a href="<?php echo $course_url; ?>" target="_blank">
                    <div class="badge_box Top-Certi_card">
                        <h4><?php echo $title_with_br; ?></h4>
                        <?php if ($thumb_image): ?>
                            <img src="<?php echo $thumb_image; ?>" class="w-100"  alt="Banner"/>
                        <?php endif; ?>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section><!--Top-Certifications End-->
<?php endif; ?>

<?php if($personalized_section) : ?>
<section class="Personalized mb-5 pb-lg-4">
    <div class="container">
        <div class="row justify-content-lg-between gy-4">
            <?php $i= 1; foreach($personalized_section as $personalise) : ?>
                <div class="col-lg-3 col-md-12">
                    <?php if($i == 2) { ?>
                    <div class="cave_arrow cave_arrow-l"><img src="<?php echo get_template_directory_uri(); ?>/images/CaveArrow.svg" alt="Icon"/></div>
                    <div class="cave_arrow cave_arrow-r"><img src="<?php echo get_template_directory_uri(); ?>/images/CaveArrow.svg" alt="Icon"/></div>
                    <?php } ?>
                    <div class="Personalized_Card text-center">
                    <?php if($personalise['personalized_path_image']) : ?>
                        <img src="<?php echo $personalise['personalized_path_image']['url']; ?>" alt="<?php echo $personalise['personalized_path_image']['alt']; ?>"/>
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Personalized1.svg" alt="Icon"/>
                    <?php endif; ?>
                        <h3><?php echo $personalise['personalized_path_heading']; ?></h3>
                        <p><?php echo $personalise['personalized_path_content']; ?></p>
                    </div>
                </div><!--Personalized_Card End-->
            <?php $i++; endforeach; ?>
        </div>
    </div>
</section><!--Personalized End-->
<?php endif; ?>
<?php if($contact_us_heading) : ?>
    <section class="ContactUs_Now pb-5">
        <div class="container-fuild common-cnt">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contactusimg">
                    <?php if($contact_us_image): ?>
                        <img src="<?php echo $contact_us_image['url']; ?>" class="w-100" alt="ContactUs"/>
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/contactusimg.png" class="w-100" alt="ContactUs"/>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                        <div class="contactusinfo">
                        <?php if($contact_us_heading): ?>
                            <h3 class="mb-4"><?php echo $contact_us_heading; ?></h3>
                        <?php endif; ?>
                        <?php if($contact_us_button): ?>
                            <a href="<?php echo $contact_us_button['url']; ?>" class="btn btn-primary"> <span><img src="<?php echo get_template_directory_uri(); ?>/images/cell.svg" alt="Icon"/></span> Contact us</a>
                        <?php endif; ?>
                        </div>
                    <div class="contactus-btn">
                        <?php if($buy_now): ?>
                            <a href="<?php echo $buy_now['url']; ?>" class="btn btn-primary">Buy now</a>
                        <?php endif; ?>
                        <?php if($download_brochure): ?>
                            <a href="<?php echo $download_brochure['url']; ?>" class="btn btn-primary">Download Brochure</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section><!--ContactUs_Now End-->
<?php endif; ?>

<!--Footer-->
<?php
// get_sidebar();
get_footer();
?>
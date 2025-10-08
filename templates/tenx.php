<?php
/* Template Name: 10x Page  */
?>

<?php
get_header();
$banner_heading = get_field('banner_heading');
$banner_description = get_field('banner_description');
//$accelerate_your_career_button = get_field('accelerate_your_career_button');
$why_choose_heading = get_field('why_choose_heading');
$why_choose_image = get_field('why_choose_image');
$why_choose_content = get_field('why_choose_content');
$explore_ai_certifications_link = get_field('explore_ai_certifications_link');
$the_ai_certs_10x_career_impact_heading = get_field('the_ai_certs_10x_career_impact_heading');
$data_driven_heading = get_field('data_driven_heading');
$data_driven_content = get_field('data_driven_content');
$success_stories_heading = get_field('success_stories_heading');
$success_stories = get_field('success_stories');
$ai_job_roles_certification_heading = get_field('10x_ai_job_roles_certification_heading');
$ai_job_roles_certification_subheading = get_field('10x_ai_job_roles_certification_subheading');
$certificate_cards = get_field('certificate_cards');
$gamified_ai_powered_quiz_image = get_field('gamified_ai_powered_quiz_image');
$gamified_ai_powered_quiz_title = get_field('gamified_ai-powered_quiz_title');
$gamified_ai_powered_quiz_content = get_field('gamified_ai-powered_quiz_content');
$gamified_ai_powered_quiz_link = get_field('gamified_ai-powered_quiz_link');
$aicerts_vs_competitors_title = get_field('aicerts_vs_competitors_title');
$view_more = get_field('view_more');
if( have_rows('why_we_lead') ):
    while( have_rows('why_we_lead') ): the_row();
    $feature = get_sub_field('feature');
    $aicerts = get_sub_field('aicerts');
    $coursera = get_sub_field('coursera');
    $udacity = get_sub_field('udacity');
    endwhile;
endif;
$enroll_now_button = get_field('enroll_now_button');
?>

<div id="tenx-page">
    <?php if($banner_heading): ?>
        <section class="banner-video-section imgbanner tenx-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="video-banner-cnt">
                            <h1 class="mb-4"><?php echo $banner_heading; ?></h1>
                            <p><?php echo $banner_description; ?></p>
                            <!-- <?php if($accelerate_your_career_button['url']): ?>
                                <a href="<?php echo $accelerate_your_career_button['url']; ?>" class="btn btn-primary me-3 mt-3" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><?php echo $accelerate_your_career_button['title']; ?></a>
                            <?php endif; ?> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>    
    <?php if($why_choose_heading): ?>
        <section class="tenx-career common-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-5 left-wrapper">
                        <div class="primary-bg-overlay">
                            <div>
                                <?php if($why_choose_image['url']): ?>
                                    <img src="<?php echo $why_choose_image['url']; ?>" alt="<?php echo $why_choose_image['title']; ?>" />
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/tenx-cg-img.png" alt="ai-job-role-cimg1" />
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-7 right-wrapper mt-5 mt-xl-0">
                        <div class="text-center ps-lg-5">
                            <h2 class="mb-4"><?php echo $why_choose_heading; ?></h2>
                            <div>
                                <div class="row main-wrapper m-0 justify-content-between">
                                    <?php if($why_choose_content): ?>
                                        <?php foreach($why_choose_content as $why): ?>
                                            <div class="col-12 col-lg-6 container-wrapper">
                                                <div class="d-flex primary-bg-overlay">
                                                    <div class="card-item">
                                                        <div class="mb-0 font18 content"><?php echo $why['why_choose_tile_text']; ?></div>
                                                        <div class="d-flex aie">
                                                            <div class="primary-bg d-flex justify-content-end align-items-center">
                                                                <?php if($why['why_choose_tile_icon']['url']): ?>
                                                                    <img src="<?php echo $why['why_choose_tile_icon']['url']; ?>" alt="<?php echo $why['why_choose_tile_icon']['title']; ?>" />
                                                                <?php else: ?>
                                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/tenx-job-opp.png" alt="ai-job-role-cimg1" />
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                                <?php if($explore_ai_certifications_link['url']): ?>
                                    <a href="<?php echo $explore_ai_certifications_link['url']; ?>" class="btn btn-primary mt-3" type="button" ><?php echo $explore_ai_certifications_link['title'] ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php if($the_ai_certs_10x_career_impact_heading): ?>
        <section class="tenx-career-impact common-section">
            <h2 class="text-center mb-4 px-3"><?php echo $the_ai_certs_10x_career_impact_heading; ?></h2>
            <div class="container mt-2">
                <div class="row">
                    <div class="col-12 col-lg-5 left-wrapper">
                        <h4 class="px-2 text-center mb-4"><?php echo $data_driven_heading; ?></h4>
                        <?php if($data_driven_content): ?>
                            <?php foreach($data_driven_content as $data_driven): ?>
                                <div class="container-wrapper mb-4">
                                    <div class="content-main">
                                        <div class="content-wrapper">
                                            <p class="font18 p-4 text-center mb-0"><?php echo $data_driven['data-driven_points']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-12 col-lg-7 right-wrapper">
                        <h4 class="px-2 text-center mb-4"><?php echo $success_stories_heading; ?></h4>
                        <div class="tenx_storys_slider cmn-sliderdots offsetarrow">
                            <div class="owl-carousel owl-them">
                                <?php if($success_stories): ?>
                                    <?php $story_i = 1; foreach($success_stories as $story): ?>
                                        <?php if (($story_i %2) != 0) { echo "<div>"; } ?>
                                            <div class="card-container <?php if (($story_i %2) != 0) { echo 'mb-4'; } ?>">
                                                <div class="card-img pe-2">
                                                    <div class="mb-3">
                                                        <?php if($story['graduates_image']): ?>
                                                            <img src="<?php echo $story['graduates_image']['url']; ?>" alt="<?php echo $story['graduates_image']['title']; ?>" />
                                                        <?php else: ?>
                                                            <img src="<?php echo get_template_directory_uri(); ?>/images/tenx-user-img.png" alt="ai-job-role-cimg1" />
                                                        <?php endif; ?>
                                                    </div>
                                                    <h6 class="mb-2"><?php echo $story['graduates_name']; ?></h6>
                                                    <p class="font14"><?php echo $story['graduates_designation']; ?></p>
                                                </div>
                                                <div class="card-content"><?php echo $story['graduates_info']; ?></div>
                                            </div>
                                            <?php if (($story_i % 2) == 0) { echo "</div>"; } ?>
                                    <?php $story_i++; endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php if($ai_job_roles_certification_heading): ?>
        <section class="common-section texnx-ai-job-role">
            <h2 class="text-center mb-4 px-3"><?php echo $ai_job_roles_certification_heading; ?></h2>
            <h4 class="text-center mb-5 px-3"><?php echo $ai_job_roles_certification_subheading; ?></h4>
            <section class="RoleBasedCertifications common-section">
                <div class="container">
                    <div class="section-heading text-center mb-4">
                    </div>
                        <div class="row g-4">
                            <?php if($certificate_cards): ?>
                                <?php foreach($certificate_cards as $card): ?>
                                    <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                        <a href="<?php echo $card['certification_link']['url']; ?>" class="categorytile">
                                            <div class="RBC-Card text-center p-0">
                                                <div class="img-wrapper">
                                                    <div class="certi_img">
                                                        <?php if($card['certificate_image']['url']): ?>
                                                            <img src="<?php echo $card['certificate_image']['url']; ?>" />
                                                        <?php else: ?>
                                                            <img src="<?php echo get_template_directory_uri(); ?>/images/ai-job-role-cimg1.png" alt="ai-job-role-cimg1" />
                                                        <?php endif; ?>
                                                    </div>
                                                    <p class="tag-badge"><?php echo $card['certificate_title']; ?></p>
                                                </div>
                                                <div class="certi-title_text p-3">
                                                    <!-- <h4 class="mb-2"><?php echo $card['certificate_name']; ?></h4> -->
                                                    <h5 class="mb-0"><?php echo $card['certificate_text']; ?></h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                                <div class="tenx-viewall text-center">
                                <a href="<?php echo $view_more['url']; ?>" class="btn btn-primary me-3 mt-3">View More</a>
                                </div>
                            <?php endif; ?>
                        </div>
                </div>
            </section><!--Explore Our Role Based Certifications End-->
        </section>
    <?php endif; ?>
    <?php if($gamified_ai_powered_quiz_title): ?>
        <section class="common-section gamified-ai-powered-quiz">
            <div class="position-relative">
                <div class="content-wrapper">
                    <div>
                        <?php if($gamified_ai_powered_quiz_image):  ?>
                            <img src="<?php echo $gamified_ai_powered_quiz_image['url']; ?>" alt="<?php echo $gamified_ai_powered_quiz_image['title']; ?>" style="width: 100%; min-height: 345px;" />
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/gamified-ai-powered-quiz-bg.png" alt="ai-job-role-cimg1" style="width: 100%; min-height: 345px;" />
                        <?php endif; ?>
                    </div>
                    <div class="absolute-content">
                        <h2><?php echo $gamified_ai_powered_quiz_title; ?></h2>
                        <h4><?php echo $gamified_ai_powered_quiz_content; ?></h4>
                        <?php if($gamified_ai_powered_quiz_link): ?>
                            <a href="<?php echo $gamified_ai_powered_quiz_link['url']; ?>" class="btn btn-white" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><?php echo $gamified_ai_powered_quiz_link['title']; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php if($aicerts_vs_competitors_title): ?>
        <section class="tenx-growth-revolution common-section container">
            <h2 class="text-center mb-4 px-3"><?php echo $aicerts_vs_competitors_title; ?></h2>
            <div class="main-wrapper">
                <div>
                    <div class="content-wrapper d-flex">
                        <div class="w410 me-4">
                            <div class="cbox feature mb-4 brtr10">
                                <h5 class="mb-0">Feature</h5>
                            </div>
                            <?php foreach($feature as $fea): ?>
                            <div class="cbox feature mb-4">
                                <h5 class="mb-0"><?php echo $fea['feature_name']; ?></h5>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    
                        <div class="w250 me-4">
                            <div class="cbox aicerts mb-4 brtr10">
                                <h5 class="mb-0">AICERTs</h5>
                            </div>
                            <?php foreach($aicerts as $aicert): ?>
                                <div class="cbox aicerts mb-4">
                                    <?php if($aicert['aicerts_value'] == 'Yes'): ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/mdi_tick-circle.svg"
                                    alt="ai-job-role-cimg1" />
                                    <?php endif; ?>
                                    <?php if($aicert['aicerts_value'] == 'No'): ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/gridicons_cross-circle.svg"
                                    alt="ai-job-role-cimg1" />
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="w250 me-4">
                            <div class="cbox coursera mb-4 brtr10">
                                <h5 class="mb-0">Coursera</h5>
                            </div>
                            <?php foreach($coursera as $course): ?>
                                <div class="cbox coursera mb-4">
                                <?php if($course['coursera_value'] == 'Yes'): ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/mdi_tick-circle.svg"
                                    alt="ai-job-role-cimg1" />
                                <?php endif; ?>
                                <?php if($course['coursera_value'] == 'No'): ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/gridicons_cross-circle.svg"
                                    alt="ai-job-role-cimg1" />
                                <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="w250">
                            <div class="cbox udacity mb-4 brtr10">
                                <h5 class="mb-0">Udacity</h5>
                            </div>
                            <?php foreach($udacity as $uda): ?>
                                <div class="cbox udacity mb-4">
                                <?php if($uda['udacity_value'] == 'Yes'): ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/mdi_tick-circle.svg"
                                    alt="ai-job-role-cimg1" />
                                <?php endif; ?>
                                <?php if($uda['udacity_value'] == 'No'): ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/gridicons_cross-circle.svg"
                                    alt="ai-job-role-cimg1" />
                                <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php if($enroll_now_button): ?>
                <div class="w-100 text-center">
                    <a href="<?php echo $enroll_now_button['url']; ?>" class="btn btn-primary me-3 mt-3" type="button"><?php echo $enroll_now_button['title']; ?></a>
                </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>

</div>

<?php
get_footer();
?>
<?php /* Template Name: AI-Saksham */ 
get_header();
$certification_offer_text = get_field('certification_offer_text');
$banner_heading_text = get_field('banner_heading_text');
$banner_sub_heading_text = get_field('banner_sub_heading_text');
$banner_content = get_field('banner_content');
$register_now_button = get_field('register_now_button');
$learn_more_button = get_field('learn_more_button');
$from_freedom_to_ai_readiness_heading = get_field('from_freedom_to_ai_readiness_heading');
$from_freedom_to_ai_readiness_content = get_field('from_freedom_to_ai_readiness_content');
$true_freedom_content = get_field('true_freedom_content');
$about_mission_ai_saksham_heading = get_field('about_mission_ai_saksham_heading');
$about_mission_ai_saksham_sub_heading = get_field('about_mission_ai_saksham_sub_heading');
$about_mission_ai_saksham_card = get_field('about_mission_ai_saksham_card');
$unveiling_mission_ai_saksham_heading = get_field('unveiling_mission_ai_saksham_heading');
$unveiling_mission_ai_saksham_sub_heading = get_field('unveiling_mission_ai_saksham_sub_heading');
$unveiling_mission_ai_saksham_card = get_field('unveiling_mission_ai_saksham_card');
$how_it_works_heading = get_field('how_it_works_heading');
$how_it_works_sub_heading = get_field('how_it_works_sub_heading');
$how_it_works_steps = get_field('how_it_works_steps');
$join_the_mission_heading = get_field('join_the_mission_heading');
$join_the_mission_sub_heading = get_field('join_the_mission_sub_heading');
$join_the_mission_content = get_field('join_the_mission_content');
$join_the_mission_image = get_field('join_the_mission_image');
$join_the_mission_card = get_field('join_the_mission_card');
$ready_to_transform_your_ai_future_heading = get_field('ready_to_transform_your_ai_future_heading');
$ready_to_transform_your_ai_future_subheading = get_field('ready_to_transform_your_ai_future_subheading');
?>

<?php if($certification_offer_text): ?>
    <section class="banner-video-section imgbanner aisaksham-banner">
        <div class="container position-relative">
            <div class="row">
            <div class="col-lg-12">
                <div class="video-banner-cnt text-center">
                    <div class="CertiOffer"><?php echo $certification_offer_text; ?></div>
                    <h1><?php echo $banner_heading_text; ?></h1>
                    <h2><?php echo $banner_sub_heading_text; ?></h2>
                    <p><?php echo $banner_content; ?></p>
                    <div class="d-flex flex-wrap justify-content-center gap-3 gap-lg-5">
                        <?php if($register_now_button): ?>
                            <a href="<?php echo $register_now_button['url']; ?>" class="btn btn-primary" ><?php echo $register_now_button['title']; ?></a>
                        <?php endif; ?>
                        <?php if($learn_more_button): ?>
                            <a href="<?php echo $learn_more_button['url']; ?>" class="btn btn-outline btn-primary-outline"><?php echo $learn_more_button['title']; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- HeroBanner End -->

<?php if($from_freedom_to_ai_readiness_heading): ?>
<section class="AIReadiness common-section text-center">
    <div class="container mw-960">
        <div class="section-header mb-4">
            <h2><?php echo $from_freedom_to_ai_readiness_heading; ?></h2>
            <p><?php echo $from_freedom_to_ai_readiness_content; ?></p>
        </div>
        <div class="TrueFreedomCard">
            <div class="TFC">
                <h4><?php echo $true_freedom_content; ?></h4>
            </div>
        </div>
    </div>    
</section>
<?php endif; ?>
<!-- AIReadiness -->

<?php if($about_mission_ai_saksham_heading): ?>
    <section class="AboutMissionAI-Saksham common-section cmn-section">
    <div class="container">
        <div class="section-header text-center mb-4">
            <h2><?php echo $about_mission_ai_saksham_heading; ?></h2>
            <p><?php echo $about_mission_ai_saksham_sub_heading; ?></p>
        </div>
        <div class="row g-4">
            <?php if($about_mission_ai_saksham_card): ?>
                <?php foreach($about_mission_ai_saksham_card as $mission_card): ?>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="sakshmpointcard">
                            <h4><?php echo $mission_card['card_title']; ?></h4>
                            <p><?php echo $mission_card['card_content']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    </section>
 <?php endif; ?>
 <!-- About Mission AI-Saksham -->

<?php if($unveiling_mission_ai_saksham_heading): ?>
    <section class="UnveilingMissionAI-Saksham common-section">
        <div class="container">
            <div class="section-header text-center pb-2">
                <h2><?php echo $unveiling_mission_ai_saksham_heading; ?></h2>
                <p><?php echo $unveiling_mission_ai_saksham_sub_heading; ?></p>
            </div>
            <div class="row g-4 g-lg-5 UMSRow">
                <?php if($unveiling_mission_ai_saksham_card): ?>
                    <?php foreach($unveiling_mission_ai_saksham_card as $unveiling_card): ?>
                        <div class="col-md-6 UMSColorCard">
                            <div class="UMCard">
                                <h3><?php echo $unveiling_card['unveiling_mission_ai-saksham_card_title']; ?></h3>
                                <?php if($unveiling_card['unveiling_mission_ai-saksham_card_points']): ?>
                                    <?php foreach($unveiling_card['unveiling_mission_ai-saksham_card_points'] as $point): ?>
                                        <div class="UMPoints">
                                            <h5><?php echo $point['point_title']; ?></h5>
                                            <p><?php echo $point['point_content']; ?></p>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- Unveiling Mission AI-Saksham -->

<?php if($how_it_works_heading): ?>
    <section class="HowItWorks common-section">
        <div class="container">
            <div class="section-header text-center">
                <h2><?php echo $how_it_works_heading; ?></h2>
                <p><?php echo $how_it_works_sub_heading; ?></p>
            </div>
            <?php if($how_it_works_steps): ?>
                <div class="YCPath text-center">
                    <div class="row g-4 g-lg-5">
                        <?php $i=1; foreach($how_it_works_steps as $steps): ?>
                        <div class="col-lg-3 col-md-6 step-arrow-right">
                        <div class="YCinfo">
                            <div class="YCStep"><?php echo $i; ?></div>
                            <h4><?php echo $steps['step_title']; ?></h4>
                            <p><?php echo $steps['step_content']; ?></p>
                        </div>
                        </div>
                        <?php $i++; endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
<!-- How It Works -->

<?php if($join_the_mission_heading): ?>
    <section class="JointheMission common-section cmn-section">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2><?php echo $join_the_mission_heading; ?></h2>
                <h3><?php echo $join_the_mission_sub_heading; ?></h3>
                <p><?php echo $join_the_mission_content; ?></p>
            </div>
            <div class="row g-4 JTMrow flex-row-reverse">
                <div class="col-lg-6">
                    <div class="ProudIndia">
                        <?php if($join_the_mission_image): ?>
                            <img class="w-100" src="<?php echo $join_the_mission_image['url']; ?>" alt="ProudIndia">
                        <?php else: ?>
                            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/images/ProudIndia.jpg" alt="ProudIndia">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="JTMGrid">
                        <?php if($join_the_mission_card): ?>
                            <?php foreach($join_the_mission_card as $joincard): ?>
                                <div class="JTMFlex">
                                    <h4><?php echo $joincard['join_the_mission_card_title']; ?></h4>
                                    <p><?php echo $joincard['join_the_mission_card_content']; ?></p>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php if($register_now_button): ?>
                <div class="text-center mt-5">
                    <a href="<?php echo $register_now_button['url']; ?>" class="btn btn-primary"><?php echo $register_now_button['title']; ?></a>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
<!-- Join the Mission -->

<?php if($ready_to_transform_your_ai_future_heading): ?>
    <section class="CTAsaksham common-section">
        <div class="container">
            <div class="CTAsakshamBanner">
                <h2><?php echo $ready_to_transform_your_ai_future_heading; ?></h2>
                <p><?php echo $ready_to_transform_your_ai_future_subheading; ?></p>
                <?php if($register_now_button): ?>
                    <a href="<?php echo $register_now_button['url']; ?>" class="btn btn-gradient">
                        <span class="gold-gradient">Start Your AI Journey — Register Free</span>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- CTAsaksham -->

<!--Footer-->
<?php
// get_sidebar();
get_footer();
?>
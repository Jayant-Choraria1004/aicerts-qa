<?php /* Template Name: Template Token V1
  */
get_header();
$banner_image = get_field('banner_image');
$banner_heading = get_field('banner_heading');
$banner_subheading = get_field('banner_subheading');
$coming_soon_link = get_field('coming_soon_link');
$token_description = get_field('token_description');
$token_cards = get_field('token_cards');
$vision_mission = get_field('vision_mission');
$token_boxes = get_field('token_boxes');
$technology_and_security_heading = get_field('technology_and_security_heading');
$techno_cards = get_field('techno_cards');
$governance_staking_heading = get_field('governance_staking_heading');
$governance_staking_points = get_field('governance_staking_points');
$governance_staking_left_image = get_field('governance_staking_left_image');
$governance_staking_right_image = get_field('governance_staking_right_image');
$team_advisors_heading = get_field('team_advisors_heading');
$team_advisors_card = get_field('team_advisors_card');
$transform_your_career_heading = get_field('transform_your_career_heading');
$transform_your_career_description = get_field('transform_your_career_description');
$explore_now_link = get_field('explore_now_link');
$faq_heading = get_field('faq_heading');
$faqs = get_field('faqs');
$teamdata = get_field('team_advisors_category');
$args = array(
    'post_type' => 'teams', // Change this if you're querying a custom post type
    'posts_per_page' => -1, // Retrieve all posts with the tag
    'fields' => 'ids',
    'tax_query' => array(
        array(
            'taxonomy' => 'team-categories', // Replace with your taxonomy
            'field'    => 'term_id',  // We are filtering by term_id
            'terms'    => $teamdata,        // Replace with the term ID you want to filter by
        ),
    ),
);
$query = new WP_Query($args);
// Create an array of post IDs
$post_ids = $query->posts;

wp_reset_postdata();
//print_r($post_ids);

//exit;
?>
<?php if($banner_heading): ?>
   
	<section class="banner-video-section imgbanner tokenbanner">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="video-banner-cnt">
                <h1><span class="primary_color"><?php echo $banner_heading; ?></span></h1>
                <p><?php echo $banner_subheading; ?></p>
                <a href="<?php echo $coming_soon_link; ?>" class="btn btn-primary btn-bg-gradient"><span class="btn-text-gradient"> Coming Soon.... </span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
	
	
<?php endif; ?>

<?php if($token_description): ?>
    <section class="CertsToken common-section">
        <div class="container">
            <div class="token-certs-card">
                <div class="token-certs-area text-center mx-auto">
                    <div class="section_content white_text mb-4">
                        <p><?php echo $token_description; ?></p>
                    </div>
                    <?php if($token_cards): ?>
                    <div class="row g-4 g-lg-5">
                        <?php foreach($token_cards as $token): ?>
                            <div class="col-lg-4 col-md-12">
                                <div class="token-card-box white_text h-100">
                                    <div class="token-card-img">
                                        <img class="w-100" src="<?php echo $token['token_card_image']; ?>" alt="token-card" />
                                    </div>
                                    <div class="token-card-content">
                                        <h5 class="primary_color mb-0 mt-2"><?php echo $token['token_card_heading']; ?></h5>
                                        <p class="mb-0"><?php echo $token['token_card_description']; ?><p>
                                    </div>
                                </div>
                            </div><!--#Col End-->
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section><!--#CertsToken End-->
<?php endif; ?>

<?php if($vision_mission): ?>
    <section class="Vision-Mission common-section">
        <div class="container">
        <div class="row g-4">
            <?php foreach($vision_mission as $vimi): ?>
                <div class="col-lg-6">
                    <div class="our-mv-card h-100">
                        <div class="our-mv-row row align-items-center position-relative">
                        <div class="col-lg-4 col-md-4">
                            <div class="mv-img">
                                <img class="w-100" src="<?php echo $vimi['vision_mission_image']; ?>" alt="Vision" />
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 position-relative before-line">
                            <div class="mv-content white_text">
                                <p><?php echo $vimi['vision_mission_description']; ?></p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        </div>
    </section>
<?php endif; ?>

<?php if($token_boxes): ?>
    <?php foreach($token_boxes as $tokenbox): ?>
        <section class="toker-For-ATPS common-section">
            <div class="container">
                <div class="ATPS_Box position-relative">
                    <div class="row g-4 g-lg-5 align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="toker-attps-image-card">
                                <img class="w-100" src="<?php echo $tokenbox['token_box_image']; ?>" alt="ATTPS" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="toker-attps-content">
                                <div class="card_heading text-center">
                                    <h3 class="dots-with-line primary_color d-inline-block"><?php echo $tokenbox['token_box_heading']; ?></h3>
                                </div>
                                <?php if($tokenbox['token_points']): ?>
                                    <ul class="attps-points white_text">
                                        <?php foreach($tokenbox['token_points'] as $token2): ?>
                                            <li><?php echo $token2['token_point']; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--For-ATPS End 1-->
    <?php endforeach; ?>
<?php endif; ?>

<?php if($technology_and_security_heading): ?>
    <section class="TechSecu common-section">
        <div class="container">
            <div class="section-heading text-center mb-4">
                <h2 class="primary_color"><?php echo $technology_and_security_heading; ?></h2>
            </div>
            <div class="row g-4 g-lg-5">
                <?php if($techno_cards): ?>
                    <?php foreach($techno_cards as $card1): ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="technocard h-100">
                            <div class="tech_secu-img">
                                <img class="w-100" src="<?php echo $card1['techno_card_image']; ?>" alt="TechSecu" />
                            </div>
                            <div class="tech_secu-content">
                                <h4 class="primary_color text-center mt-2 mb-1"><?php echo $card1['techno_card_heading']; ?></h4>
                                <?php if($card1['techno_card_points']): ?>
                                <ul class="list_points white_text">
                                    <?php foreach($card1['techno_card_points'] as $point): ?>
                                        <li><?php echo $point['techno_points'] ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div><!--TechSecu Item End-->
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section><!--Technology & Security End-->
<?php endif; ?>

<?php if($governance_staking_heading): ?>
    <section class="GovernanceStaking position-relative Before After common-section">
        <div class="container">
            <div class="GS-Card">
                <div class="gosta-cover text-center position-relative">
                    <div class="position-absolute GSCard-Box-showdow gs-top-left">
                        <img src="<?php echo $governance_staking_left_image; ?>" alt="GSCard"/>
                    </div>   
                    <div class="gs-content position-relative">
                        <h2 class="primary_color"><?php echo $governance_staking_heading; ?></h2>
						<ul class="attps-points white_text text-start">
                        <?php if($governance_staking_points): ?>
                            <?php foreach($governance_staking_points as $govpoint): ?>
                                <li><?php echo $govpoint['governance_staking_point']; ?></li>
                            <?php endforeach; ?>
                        <?php endif; ?>			
						</ul>
                    </div>
                    <div class="position-absolute GSCard-Box-showdow gs-bottom-right">
                        <img src="<?php echo $governance_staking_right_image; ?>" alt="GSCard"/>
                    </div> 
                </div>
            </div>
        </div>
    </section><!--Governance & Staking End-->
<?php endif; ?>

<?php if($team_advisors_heading): ?>
    <section class="TeamAdvisors common-section">
        <div class="container">
            <div class="section-heading text-center mb-4">
                <h2 class="primary_color"><?php echo $team_advisors_heading; ?></h2>
            </div>
            <div class="Team_Cover">
                <div class="row">
                    <div class="col-12">
                        <div class="owl-carousel TeamAdvisors_Carousel owl-theme cmn-sliderdots offsetarrow">
                            <?php if ($query ->have_posts()) :
                                while ($query->have_posts()) : $query->the_post();
                                $user_name = get_the_title();
                                $role = get_field('role');
                                $intro = get_field('intro');
                                $user_image = get_the_post_thumbnail_url();

                            ?>
                                <div class="item">
                                    <div class="advisor-card d-flex flex-column">
                                        <div class="advisor-name-img d-flex align-items-center gap-3">
                                            <div class="ad-imge-box">
                                                <?php if($user_image): ?>
                                                    <img src="<?php echo $user_image; ?>" alt="Team"/>
                                                <?php else: ?>
                                                    <img src="<?php echo esc_url(get_template_directory_uri()."/images/TAD.png"); ?>" alt="Team"/>
                                                <?php endif; ?>
                                            </div>
                                            <div class="ad-title-sub-text">
                                                <h4 class="mb-0"><?php echo $user_name; ?></h4>
                                                <span><?php echo $role; ?></span>
                                            </div>
                                        </div>
                                        <div class="advisor-intor">
                                            <p class="mb-0"><?php echo $intro; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile;
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--#Team & Advisors End -->
<?php endif; ?>

<?php if($transform_your_career_heading): ?>
    <section class="rich-text common-section">
        <div class="container TYC-custom-width pt-5 pb-5">
            <div class="RichTextContent text-center pt-lg-3 pb-lg-3">
                <h2 class="primary_color"><?php echo $transform_your_career_heading; ?></h2>
                <p class="white_text"><?php echo $transform_your_career_description; ?></p>
                <a href="<?php echo $explore_now_link; ?>" class="btn btn-primary   btn-bg-gradient">Explore Now</a>
            </div>
        </div>
    </section><!--#RichText End -->
<?php endif; ?>

<?php if( $faqs ): ?>
    <section class="h2_faq mb-5 pb-3 pt-3">
        <div class="container">
            <h2 class="white_text mb-5 text-center"><?php echo $faq_heading; ?></h2>
            <div class="faq_wrap">
                <div class="accordion" id="faq-accordion">
                <?php $faqnumber = 1; 
                    foreach( $faqs as $faq ): 
                        $questions = $faq['faq_question'];
                        $answer = $faq['faq_answer'];
                ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq_heading<?php echo $faqnumber;?>">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_collapse<?php echo $faqnumber;?>" aria-expanded="true" aria-controls="faq_collapse<?php echo $faqnumber;?>"><?php echo $questions;?></button>
                        </h2>
                        <div id="faq_collapse<?php echo $faqnumber;?>" class="accordion-collapse collapse" aria-labelledby="faq_heading<?php echo $faqnumber;?>" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <?php echo $answer;?>
                            </div>
                        </div>
                    </div>
                <?php $faqnumber++; endforeach; ?>
                </div>
            </div>
        </div>
    </section><!--#FAQs End --> 
<?php endif; ?>

<!--Footer-->
<?php
// get_sidebar();
get_footer();
?>
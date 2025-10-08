<?php /* Template Name: Template BAB*/ 
get_header(); 
?>

<?php
$banner_heading = get_field('banner_heading');
$banner_subheading = get_field('banner_subheading');
$apply_to_join_the_board_button = get_field('apply_to_join_the_board_button');
$view_member_button = get_field('view_member_button');
?>
<section class="banner-video-section imgbanner abv2-banner overlay-linear-gradient">
    <div class="container position-relative">
        <div class="row">
          <div class="col-lg-12">
            <div class="video-banner-cnt">
                <h1><?php echo $banner_heading; ?></h1>
                <p><?php echo $banner_subheading; ?></p>
                <a href="<?php echo $apply_to_join_the_board_button['url']; ?>" class="btn btn-primary me-3" ><?php echo $apply_to_join_the_board_button['title']; ?></a>
                <a href="<?php echo $view_member_button['url']; ?>" class="btn btn-outline me-3" ><?php echo $view_member_button['title']; ?></a>
            </div>
          </div>
        </div>
    </div>
</section>
<!-- HeroBanner End -->

<?php
$our_esteemed_board_members_title = get_field('our_esteemed_board_members_title');
$our_esteemed_board_members_subtitle = get_field('our_esteemed_board_members_subtitle');
?>
<section class="common-section BoardMembers" id="viewmember">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2><?php echo $our_esteemed_board_members_title; ?></h2>
            <p><?php echo $our_esteemed_board_members_subtitle; ?></p>
        </div>
        
        <?php
        $team_query = new WP_Query([
            'post_type' => 'board-member',
            'posts_per_page' => -1,
            'post_status' => 'publish'
        ]);
        ?>
        <div class="BoardMemberBox">
        <section class="cmn-section team-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="team-cnt">
                            <div class="row gy-lg-2 gy-3">
                            <?php
                            if ($team_query->have_posts()) :
                                while ($team_query->have_posts()) : $team_query->the_post();
                                $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                $role = get_post_meta(get_the_ID(), 'job_role', true);
                                $linkedin = get_post_meta(get_the_ID(), 'linkedin', true);
                            ?>
                                <div class="col-sm-6 col-md-4 col-xl-3">
                                    <div class="mission-value-box position-relative">
                                        <a href="<?php the_permalink(); ?>"><div class="team-img"><img src="<?php echo $featured_img_url; ?>"></div></a>
                                        <?php if (!empty(trim($linkedin))) { ?>
                                            <div class="ourteam-linkedin"><a href="<?php echo esc_url($linkedin); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team-linkedin.png"></a></div>
                                        <?php } ?>
                                        <div class="corevalue-hd"><?php the_title(); ?></div>
                                    </div>
                                </div>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>     
    </div>
</section>
<!-- Board Members -->

<?php
$what_they_bring_to_ai_certs_title = get_field('what_they_bring_to_ai_certs_title');
$what_they_bring_to_ai_certs_subtitle = get_field('what_they_bring_to_ai_certs_subtitle');
$what_they_bring_to_ai_certs_boxes = get_field('what_they_bring_to_ai_certs_boxes');
?>
<section class="common-section">
    <div class="TheyBring pt-5 pb-5">
        <div class="container pt-lg-3 pb-lg-3">
            <div class="section-header text-center pb-3">
                <h2><?php echo $what_they_bring_to_ai_certs_title; ?></h2>
                <p><?php echo $what_they_bring_to_ai_certs_subtitle; ?></p>
            </div>
            <div class="row g-4">
                <?php if($what_they_bring_to_ai_certs_boxes): ?>
                    <?php foreach($what_they_bring_to_ai_certs_boxes as $bring_box): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="BringCard">
                                <div class="BringIcon">
                                    <?php if($bring_box['what_they_bring_to_ai_certs_box_icon']): ?>
                                        <img alt="<?php echo $bring_box['what_they_bring_to_ai_certs_box_icon']['title']; ?>​" src="<?php echo $bring_box['what_they_bring_to_ai_certs_box_icon']['url']; ?>"/>
                                    <?php else: ?>
                                        <img alt="Icon​" src="<?php echo esc_url(get_template_directory_uri(). "/images/icon-chessking.svg"); ?>"/>
                                    <?php endif; ?>
                                </div>
                                <h4><?php echo $bring_box['what_they_bring_to_ai_certs_box_title']; ?></h4>
                                <p><?php echo $bring_box['what_they_bring_to_ai_certs_box_content']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="BringCard">
                        <div class="BringIcon">
                            <img alt="Icon​" src="<?php echo esc_url(get_template_directory_uri(). "/images/icon-moneybag.svg"); ?>"/> 
                        </div>
                        <h4>Industry Credibility</h4>
                        <p>Elite members act as a halo of trust across clients, investors, and public sector.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="BringCard">
                        <div class="BringIcon">
                            <img alt="Icon​" src="<?php echo esc_url(get_template_directory_uri(). "/images/icon-network.svg"); ?>"/> 
                        </div>
                        <h4>Network Access</h4>
                        <p>Advisors open doors — to governments, investors, channel partners, etc.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="BringCard">
                        <div class="BringIcon">
                            <img alt="Icon​" src="<?php echo esc_url(get_template_directory_uri(). "/images/icon-mgroup.svg"); ?>"/> 
                        </div>
                        <h4>Workforce Development</h4>
                        <p>Insights on AI upskilling, job lignment, and certifications.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="BringCard">
                        <div class="BringIcon">
                            <img alt="Icon​" src="<?php echo esc_url(get_template_directory_uri(). "/images/icon-innovation.svg"); ?>"/> 
                        </div>
                        <h4>Innovation Sounding Board</h4>
                        <p>Objective input on new ideas, pricing, GTM strategy.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="BringCard">
                        <div class="BringIcon">
                            <img alt="Icon​" src="<?php echo esc_url(get_template_directory_uri(). "/images/icon-techno.svg"); ?>"/> 
                        </div>
                        <h4>Tech Integration Advice</h4>
                        <p>AI and automation guidance that's realistic and ROI-driven.</p>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>
<!-- What They Bring to AI CERTs -->

<?php
$how_we_leverage_the_board_title = get_field('how_we_leverage_the_board_title');
$how_we_leverage_the_board_image = get_field('how_we_leverage_the_board_image');
$how_we_leverage_the_board_content = get_field('how_we_leverage_the_board_content');
$how_we_leverage_the_board_points = get_field('how_we_leverage_the_board_points');
?>
<section class="common-section LeveragetheBoard">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="BoardImg">
                    <?php if($how_we_leverage_the_board_image): ?>
                        <img class="w-100" alt="<?php echo $how_we_leverage_the_board_image['title']; ?>" src="<?php echo $how_we_leverage_the_board_image['url']; ?>"/>
                    <?php else: ?>
                        <img class="w-100" alt="Board​" src="<?php echo esc_url(get_template_directory_uri(). "/images/board-img.jpg"); ?>"/>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="BoardInfo">
                    <h2><?php echo $how_we_leverage_the_board_title; ?></h2>
                    <p><?php echo $how_we_leverage_the_board_content; ?></p>
                    <?php if($how_we_leverage_the_board_points): ?>
                    <div class="boardpoints">
                        <?php foreach($how_we_leverage_the_board_points as $leveragepoints): ?>
                        <div class="BPoint">
                            <span class="icon-tick">
                                <img alt="icon-circletick​" src="<?php echo esc_url(get_template_directory_uri(). "/images/icon-circletick.svg"); ?>"/>
                            </span>
                            <p><strong><?php echo $leveragepoints['point_label']; ?></strong> <?php echo $leveragepoints['point_text']; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- How We Leverage the Board -->

<?php
$why_they_join_title = get_field('why_they_join_title');
$why_they_join_subtitle = get_field('why_they_join_subtitle');
$why_they_join_card = get_field('why_they_join_card');
?>
<section class="common-section">
     <div class="WhyTheyJoin pt-5 pb-5">
        <div class="container pt-lg-3 pb-lg-3">
            <div class="section-header text-center pb-3">
                <h2><?php echo $why_they_join_title; ?></h2>
                <p><?php echo $why_they_join_subtitle; ?></p>
            </div>
            <?php if($why_they_join_card): ?>
                <div class="row g-4">
                    <?php foreach($why_they_join_card as $joincard): ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="TheyJoinCard">
                                <?php if($joincard['why_they_join_icon']): ?>
                                    <img alt="<?php echo $joincard['why_they_join_icon']['title']; ?>​" src="<?php echo $joincard['why_they_join_icon']['url']; ?>"/>
                                <?php else: ?>
                                    <img alt="icon-kingroup​" src="<?php echo esc_url(get_template_directory_uri(). "/images/icon-kingroup.svg"); ?>"/>
                                <?php endif; ?>
                                <h5><?php echo $joincard['why_they_join_card_title']; ?></h5>
                                <p><?php echo $joincard['why_they_join_card_content']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Why They Join -->

<?php
$are_you_one_of_them_title = get_field('are_you_one_of_them_title');
$are_you_one_of_them_subtitle = get_field('are_you_one_of_them_subtitle');
$are_you_one_of_them_cart = get_field('are_you_one_of_them_cart');
?>
<section class="common-section AreYouOneofThem">
    <div class="container">
        <div class="section-header text-center mb-lg-4">
            <h2><?php echo $are_you_one_of_them_title; ?></h2>
            <h4><?php echo $are_you_one_of_them_subtitle; ?></h4>
        </div>
    </div>
    <?php if ($are_you_one_of_them_cart): ?>
        <div class="container onezerotwothree pt-2">
            <div class="row g-4">
                <?php
                // Split into two columns
                $total = count($are_you_one_of_them_cart);
                $half = ceil($total / 2);
                $chunks = array_chunk($are_you_one_of_them_cart, $half);
                ?>

                <?php foreach ($chunks as $column): ?>
                    <div class="col-lg-6">
                        <div class="CS-ListView d-grid gap-4 gap-sm-3">
                            <?php foreach ($column as $item): ?>
                                <div class="CS_CartItem">
                                    <div class="CSIcon">                                        
                                        <?php if($item['are_you_one_of_them_icon']): ?>
                                            <img alt="<?php echo $item['are_you_one_of_them_icon']['title']; ?>" src="<?php echo $item['are_you_one_of_them_icon']['url']; ?>"/>
                                        <?php else: ?>
                                            <img alt="icon-monthly" src="<?php echo esc_url(get_template_directory_uri(). "/images/icon-them1.svg"); ?>"/>
                                        <?php endif; ?>
                                    </div>
                                    <div class="CSCard-Info">
                                        <h4 class="primary_color"><?php echo $item['are_you_one_of_them_cart_title']; ?>​</h4>
                                        <p><?php echo $item['are_you_one_of_them_cart_content']; ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>  
                        </div>
                        <!-- CS-ListView -->
                    </div>
                <?php endforeach; ?>
                <!-- <div class="col-lg-6">
                    <div class="CS-ListView d-grid gap-4 gap-sm-3">
                        <div class="CS_CartItem">
                            <div class="CSIcon">
                                <img alt="icon-monthly" src="<?php echo esc_url(get_template_directory_uri(). "/images/icon-them4.svg"); ?>"/>
                            </div>
                            <div class="CSCard-Info">
                                <h4 class="primary_color">Investors & Influencers​</h4>
                                <p>VCs, angels, and thought leaders driving innovation in AI and workforce development.</p>
                            </div>
                        </div>
                        <div class="CS_CartItem">
                            <div class="CSIcon">
                                <img alt="icon-groups" src="<?php echo esc_url(get_template_directory_uri(). "/images/icon-them5.svg"); ?>"/>
                            </div>
                            <div class="CSCard-Info">
                                <h4 class="primary_color">Government & NGO Advisors​​</h4>
                                <p>Senior officials and policy makers influencing regulatory and social impact.​​</p>
                            </div>
                        </div>
                        <div class="CS_CartItem">
                            <div class="CSIcon">
                                <img alt="icon-ad-hoc" src="<?php echo esc_url(get_template_directory_uri(). "/images/icon-them6.svg"); ?>"/>
                            </div>
                            <div class="CSCard-Info">
                                <h4 class="primary_color">AI/Tech Pioneers​</h4>
                                <p>Technical leaders and innovators at the forefront of artificial intelligence​</p>
                            </div>
                        </div>  
                    </div>
                </div> -->
            </div>
        </div>
    <?php endif; ?>
</section>
<!-- Are You One of Them?​ End -->

<?php
$ad_hoc_consultations_title = get_field('ad-hoc_consultations_title');
$ad_hoc_consultations_image = get_field('ad-hoc_consultations_image');
$ad_hoc_consultations_subtitle = get_field('ad-hoc_consultations_subtitle');
$ad_hoc_consultations_points = get_field('ad-hoc_consultations_points');
?>
<section class="common-section">
    <div class="Ad-HocConsultations pt-5 pb-5">
    <div class="container pt-lg-4 pb-lg-4">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="BoardImg">
                    <?php if($ad_hoc_consultations_image): ?>
                        <img class="w-100" alt="<?php echo $ad_hoc_consultations_image['title']; ?>" src="<?php echo $ad_hoc_consultations_image['url']; ?>"/>
                    <?php else: ?>
                        <img class="w-100" alt="Board​" src="<?php echo esc_url(get_template_directory_uri(). "/images/board-img2.jpg"); ?>"/>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="BoardInfo">
                    <h2><?php echo $ad_hoc_consultations_title; ?></h2>
                    <p><?php echo $ad_hoc_consultations_subtitle; ?></p>
                    <?php if($ad_hoc_consultations_points): ?>
                    <div class="boardpoints">
                        <?php foreach($ad_hoc_consultations_points as $adpoints): ?>
                            <div class="BPoint">
                                <span class="icon-tick">
                                    <img alt="icon-circletick​" src="<?php echo esc_url(get_template_directory_uri(). "/images/icon-circletick.svg"); ?>"/>
                                </span>
                                <p><strong><?php echo $adpoints['ad-hoc_consultations_points__label']; ?></strong> <?php echo $adpoints['ad-hoc_consultations_points_text']; ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Ad-Hoc Consultations -->

<?php
$application_form_shortcode = get_field('application_form_shortcode');
$application_form_title =get_field('application_form_title');
$application_form_subtitle =get_field('application_form_subtitle');
?>
<section class="common-section ApplicationForm" id="joinboardform">
    <div class="container">
        <div class="section-header text-center pb-3">
            <h2><?php echo $application_form_title; ?></h2>
            <p><?php echo $application_form_subtitle; ?></p>
        </div>
        <div class="AppFormBox">
            <?php echo do_shortcode($application_form_shortcode); ?>
        </div>
    </div>
</section>
<!-- Application Form -->

<?php
$ready_to_lend_your_expertise_title = get_field('ready_to_lend_your_expertise_title');
$ready_to_lend_your_expertise_subtitle = get_field('ready_to_lend_your_expertise_subtitle');
$questions_about_the_advisory_board_contenet = get_field('questions_about_the_advisory_board_contenet');
$contact_us = get_field('contact_us');
?>
<section class="YourExpertise">
    <div class="container">
        <div class="section-header text-center grid-1fr">
            <h2><?php echo $ready_to_lend_your_expertise_title; ?></h2>
            <h4><?php echo $ready_to_lend_your_expertise_subtitle; ?></h4>
            <div class="section_cta mb-3">
                <?php if($apply_to_join_the_board_button): ?>
                    <a href="<?php echo $apply_to_join_the_board_button['url']; ?>" class="btn btn-primary me-3" ><?php echo $apply_to_join_the_board_button['title']; ?></a>
                <?php endif; ?>
                <?php if($contact_us): ?>
                    <a href="<?php echo $contact_us['url']; ?>" class="btn btn-outline me-3" ><?php echo $contact_us['title']; ?></a>
                <?php endif; ?>
            </div>
            <p><?php echo $questions_about_the_advisory_board_contenet; ?></p>
        </div>
    </div>
</section>
<!-- Ready to Lend Your Expertise? -->

<style>
.gform_heading {display:none !important;}
.BoardMemberBox .item-group {display: grid;gap: 10px;}
/* Tablet: 2 rows x 2 columns */
@media (min-width: 768px) and (max-width: 1023px) {
.BoardMemberBox .item-group {grid-template-columns: repeat(2, 1fr);}
.BoardMemberBox .item-group{row-gap: 30px;}
}
/* Desktop: 2 rows x 3 columns */
@media (min-width: 1024px) {
.BoardMemberBox .item-group {grid-template-columns: repeat(3, 1fr);}
.BoardMemberBox .item-group{row-gap: 30px;}
}
@media (min-width: 1201px){
.BoardMemberBox .item-group{column-gap: 20px; row-gap: 60px;}
}
</style>

<script>
jQuery('a[href^="#"]').on('click', function(e) {
    
    var target = jQuery(this.getAttribute('href'));

    if (target.length) {
        e.preventDefault();
        
        var headerHeight = jQuery('header').outerHeight(); // adjust if your header has a different selector
        
        jQuery('html, body').animate({
            scrollTop: target.offset().top - headerHeight
        }, 800);
    }
    console.log(headerHeight);
});

</script>
<!--Footer-->
<?php
// get_sidebar();
get_footer();
?>
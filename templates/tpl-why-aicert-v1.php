<?php 
/* 
 * Template Name: Template Why Aicerts V1
 */ 
get_header();

$banner_poster = get_field('banner_poster');
$banner_video = get_field('banner_video');
$why_aicerts_banner_heading = get_field('why_aicerts_banner_heading');
$why_aicert_banner_content = get_field('why_aicert_banner_content');
$download_brochure_button_text = get_field('download_brochure_button_text');
$download_brochure_file = get_field('download_brochure_file');
$banner_bottom_video = get_field('banner_bottom_video');
$mission_vision = get_field('mission_vision');
$unique_selling_propositions_heading = get_field('unique_selling_propositions_heading');
$unique_selling_propositions = get_field('unique_selling_propositions');
$value_proposition_heading = get_field('value_proposition_heading');
$value_proposition_content = get_field('value_proposition_content');
$value_proposition = get_field('value_proposition');
$our_partner_heading = get_field('our_partner_heading');
$our_partner_box = get_field('our_partner_box');
$our_certifications_heading = get_field('our_certifications_heading');
$our_certifications_sub_heading = get_field('our_certifications_sub_heading');
$our_certifications_card = get_field('our_certifications_card');
$cta_banner_image = get_field('cta_banner_image');
$cta_banner_heading = get_field('cta_banner_heading');
$cta_banner_subheading = get_field('cta_banner_subheading');
$contact_us_button_name = get_field('contact_us_button_name');
$contact_us_button_link = get_field('contact_us_button_link');
$who_we_are_heading = get_field('who_we_are_heading');
$who_we_are_content = get_field('who_we_are_content');
$our_purpose_heading = get_field('our_purpose_heading');
$our_purpose_content = get_field('our_purpose_content');
$home_page_id = get_option('page_on_front');
$faq_heading = get_field('faq_heading', $home_page_id);
$faq_accordion = get_field('faq_accordion', $home_page_id);
?> 
<!--Header End-->
<!--Header End-->

<!--section class="no_overlay-header whypage-cmn-section">
    <div class="container-full why-aircert-video">
        <div class="position-relative row flex-row-reverse align-items-center">
            <?php if($banner_video) : ?>
            <div class="col-12 col-lg-8 video-with-text_overlay p-0 m-0">
                <div class="overaly_video ">
                    <video width="100%" autoplay muted loop poster="<?php echo $banner_poster; ?>">
                        <source src="<?php echo $banner_video; ?>" type="video/mp4">
                        </source>
                    </video>
                </div>
            </div>
            <?php endif; ?>
            <div class="col-lg-4 p-0 m-0">
                <div class="overaly_video-content common-cnt">
                    <?php if($why_aicerts_banner_heading) : ?>
                        <h1><?php echo $why_aicerts_banner_heading; ?></h1>
                    <?php endif; ?>
                    <?php if($why_aicert_banner_content) : ?>
                        <p><?php echo $why_aicert_banner_content; ?></p>
                    <?php endif; ?>
                    <?php if($download_brochure_file) : ?>
                        <a href="<?php echo $download_brochure_file; ?>" class="btn btn-primary" download><?php echo $download_brochure_button_text; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section><!--Top Banner No Overlay Header End-->

<section class="banner-video-section">

	<div class="bannervideo">
		<video width="100%" autoplay muted loop poster="<?php echo $banner_poster; ?>">
			<source src="<?php echo $banner_video; ?>" type="video/mp4"></source>
		</video>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
                <div class="video-banner-cnt">
                    <?php if($why_aicerts_banner_heading) : ?>
                        <h1><?php echo $why_aicerts_banner_heading; ?></h1>
                    <?php endif; ?>
                    <?php if($why_aicert_banner_content) : ?>
                        <p class="smalltext"><?php echo $why_aicert_banner_content; ?></p>
                    <?php endif; ?>
                    <?php if($download_brochure_file) : ?>
                        <a href="<?php echo $download_brochure_file; ?>" class="btn btn-primary" download><?php echo $download_brochure_button_text; ?></a>
                    <?php endif; ?>
                </div>
            </div>
		</div>
	</div>
	
</section>

<section class="why-Video-box whypage-cmn-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-12">
                <div class="whoweare-cnt me-xl-5">
                    <?php if($who_we_are_heading): ?>
                        <h2><?php echo $who_we_are_heading; ?></h2>
                    <?php endif; ?>
                    <?php if($who_we_are_content): ?>
                        <p><?php echo $who_we_are_content; ?></p>
                    <?php endif; ?>
                    <?php if($our_purpose_heading): ?>
                        <h2><?php echo $our_purpose_heading; ?></h2>
                    <?php endif; ?>
                    <?php if($our_purpose_content): ?>
                        <p class="mb-0"><?php echo $our_purpose_content; ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-xl-6 col-md-12">
                <div class="full-Video-card position-relative">
                    <!--div class="overlay_card"></div-->
                    <div class="video_cover">
                        <?php if($banner_bottom_video): ?>
                        <?php echo $banner_bottom_video; ?>
                            <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/h2-aicrets-video.jpg" alt=""> -->
                        <?php endif; ?>
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/whyvideo.png" alt="whyvideo">
                        <div class="play_btn">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/play-button.svg" alt="play-button">
                        </div> -->
                    </div>
                </div>
            <div>
        </div>
    </div>
</section><!--full-Video-box End-->

<?php if($mission_vision): ?>
    <section class="Mission_Vision whypage-cmn-section">
        <div class="container">
            <div class="row gy-4 gx-lg-5">
                <?php foreach($mission_vision as $mission): ?>
                <div class="col-lg-12 col-md-12">
                    <div class="icon-wtih-text-card">
                        <div class="icon_with_text-flex justify-content-center">
                            <div class="icon_card">
                                <img src="<?php echo $mission['mission_vision_icon']; ?>" alt="Mission">
                                <h6 class="primary_color mb-0 mt-2"><?php echo $mission['mission_vision_title']; ?></h6>
                            </div>
                            <div class="text_card">
                                <h2 class="mb-0 white_text"><?php echo $mission['mission_vision_detail']; ?></h2>
                            </div>
                        </div>
                    </div>
                </div><!--icon-wtih-text-card End-->
                <?php endforeach; ?>
            </div>
        </div>
    </section><!--MISSIONVISION End-->
<?php endif; ?>

<?php if($unique_selling_propositions): ?>
    <section class="usps whypage-cmn-section corevaluebg">
        <div class="container">
            <div class="section_header text-center mb-4">
                <?php if($unique_selling_propositions_heading): ?>
                    <h2><?php echo $unique_selling_propositions_heading; ?></h2>
                <?php endif; ?>
            </div>
            <div class="row gy-4">
            <?php foreach($unique_selling_propositions as $unique_selling): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="usps_card dark_bg text-center h-100">
                        <h4 class="primary_color"><?php echo $unique_selling['unique_selling_propositions_title']; ?></h4>
                        <p class="white_text mb-0"><?php echo $unique_selling['unique_selling_propositions_detail']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </section><!--Unique Selling Propositions (USPs) End-->
<?php endif; ?>

<?php if($value_proposition): ?>
    <section class="cert-spec-section values whypage-cmn-section p-0">
        <div class="container">
            <div class="section_header text-center mb-4">
                <?php if($value_proposition_heading): ?>
                    <h2><?php echo $value_proposition_heading; ?></h2>
                <?php endif; ?>
            </div>
            <?php if( have_rows('value_proposition') ): ?> 
            <div class="row">
                <?php if($value_proposition_content): ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="vp-firsttext">
                            <p class="mb-0 white_text mt-lg-3"><?php echo $value_proposition_content;?><p>
                        </div>            
                    </div>
                <?php endif; ?>
                <?php foreach($value_proposition as $value): ?>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img src="<?php echo $value['value_icon'];?>" alt=""/>
                        <h4><?php echo $value['value_name'];?></h4>
                        <p class="mb-0 white_text mt-3"><?php echo $value['value_detail'];?></p>
                    </div>            
                </div>
                <?php endforeach; ?> 
            </div>
            <?php endif; ?>
        </div>    
    </section><!--#values-->
<?php endif; ?>

<?php if($our_partner_box): ?>
    <section class="OurPartner whypage-cmn-section">
        <div class="container">
            <div class="section_header text-center mb-4">
                <h2 class="mb-3"><?php echo $our_partner_heading; ?></h2>
            </div>
            <div class="row gy-4 gy-lg-0 gx-lg-5">
                <?php foreach($our_partner_box as $partner_box): ?>
                    <div class="col-lg-4">
                        <div class="op_outer text-center h-100 mx-2">
                            <div class="op_inner dark_bg h-100">
                                <h4 class="primary_color mb-3"><?php echo $partner_box['partner_title']; ?></h4>
                                <p class="white_text mb-0"><?php echo $partner_box['partner_detail']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <div>
        </div>
    </section><!--Our Partner End-->
<?php endif; ?>

<?php if($our_certifications_card): ?>
    <section class="OurCertifications whypage-cmn-section">
        <div class="container">
            <div class="section_header text-center mb-4">
                <h2><?php echo $our_certifications_heading; ?></h2>
                <p class="white_text mb-0"><?php echo $our_certifications_sub_heading; ?></p>
            </div>
            <div class="row gy-4">
                <?php foreach($our_certifications_card as $certifications_card): ?>
                    <div class="col-lg-2">
                        <a href="<?php echo $certifications_card['certifications_link']; ?>">
                        <div class="Card_Cources dark_bg text-center h-100">
                            <div class="o_certi-img mb-3"><img src="<?php echo $certifications_card['certifications_image']; ?>" alt="Training"></div>
                            <div class="o_certi-info">
                                <h4><?php echo $certifications_card['certifications_title']; ?></h4>
                                <p><?php echo $certifications_card['certifications_detail']; ?></p>
                            </div>
                        </div>
                        </a>
                    </div><!--Our Partner End-->
                <?php endforeach; ?>
            </div>
        </div>
    </section><!--Our Certifications End-->
<?php endif; ?>

<section class="OurCertifications  whypage-cmn-section mb-4 ">
	<div class="container">
		<div class="section_header text-center mb-4">
			<h2>Global <span>Partnerships</span></h2>
			<p class="white_text">We collaborate with leading organisations, building partnerships that drive innovation and success.</p>
         </div>
	</div>
</section>
<section class="cta-Banner whypage-cmn-section">
   <div class="container">
      <div class="cta_banner">
            <div class="ctabanner_img">
                <img src="<?php echo $cta_banner_image; ?>" class="w-100" alt="CTE Banner " /> 
            </div>
            <div class="ctabanner-content">
                <h2><?php echo $cta_banner_heading; ?></h2>
                <h3 class="white_text"><?php echo $cta_banner_subheading; ?></h3>
                <div class="cta_btns mt-4">
                    <a href="<?php echo $contact_us_button_link; ?>" class="btn btn-secondary"><span><img src="<?php echo get_template_directory_uri(); ?>/images/cell-pc.svg" alt="Icon" /></span><?php echo $contact_us_button_name; ?></a>
                    <?php if($download_brochure_file) : ?>
                    <a href="<?php echo $download_brochure_file; ?>" class="btn btn-primary" download><?php echo $download_brochure_button_text; ?></a>
                    <?php endif; ?>
                </div>
            </div>
      </div>
   </div>
</section><!-- CTA Banner End-->

<section class="h2_faq pt-0">
        <div class="container">
        <?php if($faq_heading): ?>
            <h2 class="white_text mb-3 mb-md-4 text-center"><?php echo $faq_heading; ?></h2>
        <?php endif; ?>
            <div class="faq_wrap">
            <?php if( $faq_accordion ): ?> 
                <div class="accordion" id="faq-accordion">
                <?php $faqnumber = 1; 
                    foreach( $faq_accordion as $faqs ): 
                        $questions = $faqs['faq_question'];
                        $answer = $faqs['faq_answer'];
                    ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq_heading1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_collapse<?php echo $faqnumber;?>" aria-expanded="true" aria-controls="faq_collapse1"><?php echo $questions;?></button>
                        </h2>
                        <div id="faq_collapse<?php echo $faqnumber;?>" class="accordion-collapse collapse" aria-labelledby="faq_heading1" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <?php echo $answer;?>
                            </div>
                        </div>
                    </div>
                    <?php $faqnumber++; endforeach; ?>
                </div>
            <?php endif; ?>
            </div>
        </div>
    </section>

<!--Footer-->
<?php
   // get_sidebar();
    get_footer(); 
    ?>
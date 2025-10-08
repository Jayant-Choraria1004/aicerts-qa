<?php
/*
*    Template Name: Certificates Master
*/	
get_header();
$banner_heading = get_field('certificate_master_banner_heading');
$banner_content = get_field('certificate_master_banner_content');
$discover_more_button = get_field('discover_more_button');
$certificates_master_banner_image = get_field('certificates_master_banner_image');
$certificate_list = get_field("certificate_list");
$view_all_certificate = get_field("view_all_certificate");
$benefits_of_certification_heading = get_field('benefits_of_certification_heading');
$benefits_of_certification = get_field('benefits_of_certification');
$get_certified_heading = get_field('get_certified_heading');
$get_certified_content = get_field('get_certified_content');
$get_certified_image = get_field('get_certified_image');
$get_certified_button = get_field('get_certified_button');
?>	
  <!--Header End-->

<div class="middle-section">
  <div class="inner-page certification-master-info mt-4">
    <section class="cert-spec-section pb-2 certification-master imgbanner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 px-lg-5 px-md-5 px-4">
                <div class="video-banner-cnt" data-aos="fade-up" data-aos-duration="1000">
                    <?php if($banner_heading) : ?>
                        <h1 class="cmn-hd text-start"><?php echo $banner_heading; ?></h1>
                    <?php endif; ?>
                    <?php if($banner_content) : ?>
                        <p class="mt-lg-5 mb-lg-5 mt-md-4 mb-md-4"><?php echo $banner_content; ?></p>
                    <?php endif; ?>
                    <?php if($discover_more_button) : ?>
                        <a href="<?php echo $discover_more_button['url']; ?>" class="btn btn-primary-outline"><?php echo $discover_more_button['title']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <!--div class="col-lg-6 col-md-6">
                <div class="empower-img">
                <?php if($certificates_master_banner_image) : ?>
                    <img src="<?php echo $certificates_master_banner_image; ?>"/>
                <?php endif; ?>
                </div>
            </div-->
        </div>
    </div>
    </section><!-- Top Image With Text --> 
   
    <section class="cmn-section AllCertification position-relative">
        <div class="container">
            <div class="row gy-4">
                <?php if($certificate_list) : ?>
                    <?php foreach($certificate_list as $certilist): ?>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="certi-card">
                                <div class="certi_image">
                                <?php if($certilist['certificate_image']) : ?>
                                    <img src="<?php echo $certilist['certificate_image']; ?>" alt="<?php echo $certilist['certificate_name']; ?> Practice Area Thumb"/>
                                <?php endif; ?>
                                </div>
                                <div class="certi_details">
                                <?php if($certilist['certificate_name']) : ?>
                                    <a href="<?php echo $certilist['explore_more']['url']; ?>"><h3 class="mb-1"><?php echo $certilist['certificate_name']; ?></h3></a>
									<p><b>(Certifications - <?php echo get_cat_count_by_name($certilist['certificate_name']); ?>)</b></p>
                                <?php endif; ?>
                                    <ul class="certi_list">
                                    <?php if($certilist['sub_certificate_link']) : ?>
                                        <?php foreach($certilist['sub_certificate_link'] as $sub_certi_link): ?>
                                            <li><a class="text-link" href="<?php echo $sub_certi_link['sub_certi_link']['url']; ?>"><?php echo $sub_certi_link['sub_certi_link']['title']; ?></a></li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    </ul>
                                    <?php if($certilist['explore_more']) : ?>
                                    <div class="text-end">
                                        <a class="link-primary" href="<?php echo $certilist['explore_more']['url']; ?>"><?php echo $certilist['explore_more']['title']; ?></a>
                                            <img src="<?php echo esc_url(get_template_directory_uri()."/images/arrow-right-orange.svg"); ?>" alt="Explore More <?php echo $certilist['explore_more']['title']; ?> Certifications"/>
                                        </a>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div class="chips_vecto"><img src="<?php echo esc_url(get_template_directory_uri()."/images/chips.svg"); ?>" alt="AI Certification Chip Icon"/></div>
                            </div>
                        </div><!--Col End-->
                    <?php endforeach; ?>
                <?php endif; ?>
                <div class="col-12">
                <?php if($view_all_certificate) : ?>
                    <div class="text-end mt-3 all-certi"><a class="btn link-primary" href="<?php echo $view_all_certificate['url']; ?>"><?php echo $view_all_certificate['title']; ?> <img src="<?php echo esc_url(get_template_directory_uri()."/images/arrow-right-orange.svg"); ?>"/></a></div>
                <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="ai_vector1"><img src="<?php echo esc_url(get_template_directory_uri()."/images/ai_vector1.png"); ?>"/></div>
    </section><!-- All Certification --> 

    <section class="BenefitsCertification pt-3 pb-5 mb-5">
        <div class="container">
            <div class="section-heading mb-5 text-center">
            <?php if($benefits_of_certification_heading) : ?>
                <h2><?php echo $benefits_of_certification_heading; ?></h2>
            <?php endif; ?>
            </div>
            <div class="row gy-4">
            <?php if($benefits_of_certification_heading) : ?>
                <?php foreach($benefits_of_certification as $benefits_of_certi): ?>  
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="Benefits_card d-flex">
                            <div class="flex_item Benefits_icon">
                                <?php if($benefits_of_certi['benefit_image']) : ?>
                                    <img src="<?php echo $benefits_of_certi['benefit_image']; ?>" alt="Benefits of Certifications - Professional Man with AI Certification"/>
                                <?php endif; ?>
                            </div>
                            <div class="flex_item Benefits_info">
                            <?php if($benefits_of_certi['benefit_name']) : ?>
                                <h4><?php echo $benefits_of_certi['benefit_name']; ?></h4>
                            <?php endif; ?>
                            <?php if($benefits_of_certi['benefit_detail']) : ?>
                                <h6><?php echo $benefits_of_certi['benefit_detail']; ?></h6>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div><!-- Cal End  -->
                <?php endforeach; ?>
            <?php endif; ?>
            </div>
        </div>
    </section><!-- Benefits of Certification  --> 

    <section class="UpliftYourCareer">
        <div class="career_bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-7">
                        <div class="career_header">
                        <?php if($get_certified_heading) : ?>
                            <h2><?php echo $get_certified_heading; ?></span></h2>
                        <?php endif; ?>
                        <?php if($get_certified_content) : ?>
                            <h4><?php echo $get_certified_content; ?></h4>
                        <?php endif; ?>
                        <?php if($get_certified_button) : ?>
                            <a href="<?php echo $get_certified_button['url']; ?>" class="btn btn-primary"><?php echo $get_certified_button['title']; ?></a>
                        <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="wining-image">
                            <img class="win" src="<?php echo esc_url(get_template_directory_uri()."/images/blonde.png"); ?>"/>
                            <img class="EllipseRound" src="<?php echo esc_url(get_template_directory_uri()."/images/EllipseRound.svg"); ?>"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Uplift Your Career  -->



 </div><!--inner-page End-->
</div><!--middle-section End-->


<?php
get_footer();
?>
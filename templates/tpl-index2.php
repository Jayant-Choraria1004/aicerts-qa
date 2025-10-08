<?php /* Template Name: Template Homev2 
   */ 
   get_header(); 
   $banner_slides = get_field('banner_slides');
    $certification_types = get_field('certification_types');
    $what_aicerts_heading = get_field('what_aicerts_heading');
    $what_aicerts_detail = get_field('what_aicerts_detail');
    $discover_more_what_ai_certs = get_field('discover_more_what_ai_certs');
    $explore_solutions_heading = get_field('explore_solutions_heading');
    $main_technology = get_field('main_technology');
    $hot_selling_certification_heading = get_field('hot_selling_certification_heading');
    $hot_selling_certifications_tab = get_field('hot_selling_certifications_tab');
    $learn_more_cta_heading = get_field('learn_more_cta_heading');
    $learn_more_cta_button = get_field('learn_more_cta_button');
    $learn_more_cta_image = get_field('learn_more_cta_image');
    $learn_more_cta_video = get_field('learn_more_cta_video');
    $aicerts_lab_heading = get_field('aicerts_lab_heading');
    $aicerts_lab_see_more = get_field('aicerts_lab_see_more');
    $aicerts_lab_logos = get_field('aicerts_lab_logos');
    $why_aicerts_heading = get_field('why_aicerts_heading');
    $ai_certs_lab_link = get_field('ai_certs_lab_link');
    $why_aicerts_content = get_field('why_aicerts_content');
    $discover_more_button = get_field('discover_more_button');
    $why_aicerts_slider = get_field('why_aicerts_slider');
    $partners_heading = get_field('partners_heading');
    $see_all_partners_link = get_field('see_all_partners_link');
    $partners_logos = get_field('partners_logos');
    $speak_to_expert_heading = get_field('speak_to_expert_heading');
    $speak_to_expert_content = get_field('speak_to_expert_content');
    $speak_to_expert_button = get_field('speak_to_expert_button');
    $speak_to_expert_image = get_field('speak_to_expert_image');
    $learners_heading = get_field('learners_heading');
    $see_more_learners = get_field('see_more_learners');
    $learners_box = get_field('testimonials',1262);
    $faq_heading = get_field('faq_heading');
    $faq_accordion = get_field('faq_accordion');
    $get_certified_heading = get_field('get_certified_heading');
    $get_certified_content = get_field('get_certified_content');
    $get_certified_button = get_field('get_certified_button');
    $resources_heading = get_field('latest_resources_heading');
    $resources_type = get_field('resources_type');
?>
<style>
/*    
.header-section {
        position: sticky;
}
.opt_banner {position: relative; min-height: max(500px, 70vh); max-height: 800px;} */
.opt_banner {margin-top: 80px; position: relative;}
.opt_banner img {width: 100%;}
.opt_banner-cnt {position: absolute; height: 100%; width: 100%; top: 0; left: 0; display: flex; align-items: center;}
.opt_banner-cnt h1 {color:var(--white-color);font-size:48px;font-weight:700; margin-bottom:38px;max-width:620px;}
.opt_banner-cnt h1 span, .opt_banner-cnt h2 span {color:var(--primary-color);}
.opt_banner-cnt a {background:#CFA935; border-color:#CFA935; font-weight: 600; text-align: center; height: 44px; line-height: 44px; padding: 0 15px; min-width: 150px; border-radius: 0px; color:#fff; display: inline-block; font-size: 16px;}
.opt_banner-cnt a:hover {background:#BA982F; border-color:#BA982F;}

.opt_herosection {padding: 70px 0; border-bottom:solid 1px #333;}
.opt_herosection .opt_herosection_cnt {max-width: 990px; margin: 0 auto; text-align: center;}
.opt_herosection h2 {color:#fff; font-size: 32px; font-weight: 700; margin-bottom: 15px;}
.opt_herosection h2 span {color:var(--primary-color);}
.opt_herosection p {color:#fff; font-size: 18px; font-weight: 500;}

.optbtn {background: #CFA935; border-color: #CFA935; font-weight: 500; text-align: center; height: 44px; line-height: 44px; padding: 0 13px;min-width: 150px;border-radius: 0px; color: #fff; display: inline-block; font-size: 16px; margin-right: 5px; white-space: nowrap;}
.optbtn:hover {background: #BA982F; border-color: #BA982F; color: #fff;}

@media screen and (max-width:767px) {
.opt_banner img {min-height: 200px; object-fit: cover; object-position: right;}
.opt_banner-cnt {position: relative; padding: 30px 0; padding-bottom: 0;}	
.opt_banner-cnt h1 {font-size:28px; margin-bottom: 20px;}

.opt_herosection {padding: 40px 0;}
.opt_herosection h2 {font-size:24px;}
.opt_herosection .opt_herosection_cnt {text-align: left;}
}
</style>

<div class="middle-section home_version2">
    <?php if($banner_slides): ?>
        <?php //echo "<pre>"; print_r($banner_slides); ?>
        <?php foreach($banner_slides as $bannerslide): ?>
            <section class="opt_banner"> <?php /* class for event "homeeventsbanner" */ ?>
                <?php if($bannerslide['home_banner_background']) { ?>
                        <img src="<?php echo $bannerslide['home_banner_background']; ?>" class="eventbannerimg" alt="Explore AI and Blockchain certifications">
                <?php } else { ?>
                     <img src="<?php echo get_template_directory_uri(); ?>/images/home-banner-opt.webp" alt="Explore AI and Blockchain certifications">
                <?php } ?>

                <div class="opt_banner-cnt">
                    <div class="container">
                        <h1><?php echo $bannerslide['slide_title']; ?></h1>
                        <?php if(isset($bannerslide['slide_info']) && !empty($bannerslide['slide_info'])) : ?>
						<h2><?php echo $bannerslide['slide_info']; ?></h2>
                        <?php endif; ?>
                        <?php if( isset($bannerslide['event_details']) && 0) : ?>
						<div class="homeboothdtls">
                            <?php if(isset($bannerslide['event_details']['booth_number']) && !empty($bannerslide['event_details']['booth_number'])) : ?>
							<div class="homeboothpills"><img src="<?php echo get_template_directory_uri(); ?>/images/events-icon-booth.svg" alt=""> <label>Booth: <b><?php echo $bannerslide['event_details']['booth_number']; ?></b><label></div>
                            <?php endif; ?>
                            <?php if(isset($bannerslide['event_details']['zone']) && !empty($bannerslide['event_details']['zone'])) : ?>
							<div class="homeboothpills"><img src="<?php echo get_template_directory_uri(); ?>/images/events-icon-zone.svg" alt=""> <label>Zone: <b><?php echo $bannerslide['event_details']['zone']; ?></b><label></div>
                            <?php endif; ?>
                            <?php if(isset($bannerslide['event_details']['event_date']) && !empty($bannerslide['event_details']['event_date'])) : ?>
							<div class="homeboothpills"><img src="<?php echo get_template_directory_uri(); ?>/images/events-icon-calendar.svg" alt=""> <label>Date: <b><?php echo $bannerslide['event_details']['event_date']; ?></b><label></div>
                            <?php endif; ?>
                            <?php if(isset($bannerslide['event_details']['location']) && !empty($bannerslide['event_details']['location'])) : ?>
							<div class="homeboothpills"><img src="<?php echo get_template_directory_uri(); ?>/images/events-icon-map.svg" alt=""> <label>Location: <b><?php echo $bannerslide['event_details']['location']; ?></b><label></div>
                            <?php endif; ?>
						</div>
                        <?php endif; ?>
                        <?php if($bannerslide['banner_button']) { ?>
                            <a href="<?php echo $bannerslide['banner_button']['url']; ?>" target="_blank" class="btn btn-primary"><!-- <i class="fa-solid fa-calendar-days me-1"></i>--> <?php echo $bannerslide['banner_button']['title']; ?></a>
                        <?php } ?>
                    </div>
                </div>
            </section>
        <?php endforeach; ?>
    <?php endif; ?>

    <section class="opt_herosection">
        <div class="container">
            <div class="opt_herosection_cnt">
                <?php if($what_aicerts_heading) : ?>
                    <h2><?php echo $what_aicerts_heading; ?></h2>
                <?php endif; ?>
                <?php if($what_aicerts_detail) : ?>
                    <p><?php echo $what_aicerts_detail; ?></p>
                <?php endif; ?>
                <?php if($discover_more_what_ai_certs): ?>
				    <a href="<?php echo $discover_more_what_ai_certs['url']; ?>" target="" class="optbtn"><?php echo $discover_more_what_ai_certs['title']; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php 
    //role base section
    include_once get_template_directory() . '/inc/home-role-base-section.php'; ?>
	
	 <section class="h2_why_ai_certs">
        <div class="container">
            <div class="row">
                <div class="col-xxl-3 col-lg-4">
                    <div class="h2_why_ai_certs_title">
                        <?php if($why_aicerts_heading): ?>
                            <h2><?php echo $why_aicerts_heading; ?></h2>
                        <?php endif; ?>
                        <?php if($why_aicerts_content): ?>
                            <p class="font-20"><?php echo $why_aicerts_content; ?></p>
                        <?php endif; ?>
                        <?php if($discover_more_button): ?>
                            <a href="<?php echo $discover_more_button['url']; ?>" target="_blank" class="discover_more_link white__bg"><?php echo $discover_more_button['title']; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if($why_aicerts_slider): ?>
                    <div class="col-xxl-9 col-lg-8 mt-5 mt-lg-0">
                        <div class="h2_why_ai_certs_slider cmn-sliderdots offsetarrow">
                            <div class="owl-carousel owl-theme">
                            <?php $boxnumber=1; foreach($why_aicerts_slider as $why_slide): ?>
                                <div class="item">
                                    <div class="h2_why_ai_certs_box h2_why_ai_certs_box<?php echo $boxnumber; ?>">
                                    <?php if($why_slide['slide_icon']): ?>
                                        <img src="<?php echo $why_slide['slide_icon']; ?>" alt="Card Icon">
                                    <?php endif; ?>
                                    <?php if($why_slide['slide_title']): ?>
                                        <h4><?php echo $why_slide['slide_title']; ?></h4>
                                    <?php endif; ?>
                                    <?php if($why_slide['slide_content']): ?>
                                        <p><?php echo $why_slide['slide_content']; ?></p>
                                    <?php endif; ?>
                                    </div>
                                </div>
                                <?php $boxnumber++; endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    
    <?php if($learn_more_cta_heading): ?>
        <section class="h2_aicerts_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 mt-4 mt-lg-0">
                        <h2 class="mb-5"><?php echo $learn_more_cta_heading; ?></h2>
                        <?php if($learn_more_cta_button): ?>
                            <a href="<?php echo $learn_more_cta_button['url']; ?>" target="_blank" class="btn btn-primary"><?php echo $learn_more_cta_button['title']; ?></a>
                        <?php endif; ?>
                    </div>

                    <div class="col-lg-5 ps-xxl-5">
                        <?php if($learn_more_cta_video): ?>
                            <?php 
                                // Image Placeholder
                                $thumbnail_url = get_template_directory_uri() . '/images/h2-aicrets-video2.jpg';
                            ?>
                            <div class="video-wrapper">
                                <img src="<?php echo $thumbnail_url; ?>" alt="Video Thumbnail" class="video-thumbnail" style="cursor:pointer; width:100%;">
                                <div class="video-iframe" style="display:none;">
                                    <?php 
                                        // Add extra attributes to iframe HTML.
                                        $attributes = 'loading="lazy"';
                                        $learn_more_cta_video = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $learn_more_cta_video); 
                                        echo $learn_more_cta_video; 
                                    ?>
                                </div>
                            </div>

                            <script>
                                jQuery(document).ready(function($) {
                                    $('.video-thumbnail').on('click', function() {
                                        var wrapper = $(this).closest('.video-wrapper');
                                        wrapper.find('.video-thumbnail').hide();
                                        wrapper.find('.video-iframe').show();
                                    });
                                });
                            </script>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </section>
    <?php endif; ?>

    <section class="h2_aicerts_lab cmn-sliderdots offsetarrow">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-center">
                <?php if($aicerts_lab_heading): ?>
                    <?php if($ai_certs_lab_link): ?>
                        <a href="<?php echo $ai_certs_lab_link; ?>" target="_blank">
                    <?php endif; ?>
                        <h2 class="white_text mb-0"><?php echo $aicerts_lab_heading; ?></h2>
                    <?php if($ai_certs_lab_link): ?>
                        </a>
                    <?php endif; ?>
                <?php endif; ?>
                <?php if($aicerts_lab_see_more): ?>
                    <a href="<?php echo $aicerts_lab_see_more['url']; ?>" target="_blank" class="discover_more_link ms-auto d-none d-md-block"><?php echo $aicerts_lab_see_more['title']; ?></a>
                <?php endif; ?>
            </div>
            <div class="h2_aicerts_lab_wrap mt-0 mt-md-5">
                <div class="owl-carousel owl-theme">
                <?php if($aicerts_lab_logos): ?>
                    <?php foreach($aicerts_lab_logos as $logos): ?>
                    <div class="item">
                    <?php if($logos['lab_link']): ?>
                        <a href="<?php echo $logos['lab_link']; ?>" target="_blank">
                    <?php endif; ?>
                            <div class="h2_aicerts_lab_box">
                            <?php if($logos['lab_logo']): ?>
                                <img src="<?php echo $logos['lab_logo']; ?>" alt="AI Labs 365 Logo" class="aicerts_lab_white">
                            <?php endif; ?>
                            <?php if($logos['black_lab_logo']): ?>
                                <img src="<?php echo $logos['black_lab_logo']; ?>" alt="AI Labs 365 Logo" class="aicerts_lab_black">
                            <?php endif; ?>
                            </div>
                    <?php if($logos['lab_link']): ?>
                        </a>
                    <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                </div>
            </div>
            <?php if($aicerts_lab_see_more): ?>
                <div class="mt-4 d-md-none">
                    <a href="<?php echo $aicerts_lab_see_more['url']; ?>" target="_blank" class="discover_more_link ms-auto"><?php echo $aicerts_lab_see_more['title']; ?></a>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <section class="h2_blog_resource">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-md-5 mb-2">
                <?php if($resources_heading): ?>
                    <h2 class="white_text px-3">Latest Resources</h2>
                <?php endif; ?>
                <?php if($resources_type): ?>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs h2_blog_resource_tabs" id="blog_resourceTab" role="tablist">
                    <?php $i=1; foreach($resources_type as $r_type): ?>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link <?php echo ($i==1) ? 'active' : ''; ?>" id="<?php echo $r_type['resource_id']; ?>" data-bs-toggle="tab" data-bs-target="#<?php echo $r_type['resource_id']; ?>-pane"
                            type="button" role="tab" aria-controls="<?php echo $r_type['resource_id']; ?>-pane" aria-selected="<?php ($i==1) ? 'true' : 'false'; ?>">
                            <img src="<?php echo $r_type['resource_icon']; ?>" alt="Latest Resources <?php echo $r_type['resource_name']; ?>"><?php echo $r_type['resource_name']; ?>
                        </button>
                    </li>
                    <?php $i++; endforeach; ?>
                </ul>
                <?php endif; ?>
            </div>
            <div class="tab-content h2_blog_resource_content cmn-sliderdots offsetarrow" id="blog_resourceTabContent">
                <?php $j=1; foreach($resources_type as $r_type): ?>
                    <?php
                    $post_type = $r_type['resource_id'];
                    $args = array(
                        'post_type' => $post_type,
                        'posts_per_page' => 5,
                        'post_status' => 'publish'
                    );
                    $query = new WP_Query($args);
                    $viewall = get_page_id_by_slug($r_type['resource_id']);
                    $viewallresource = get_permalink($viewall);
                    ?>
                    <div class="tab-pane fade <?php echo ($j==1) ? 'show active' : ''; ?>" id="<?php echo $r_type['resource_id']; ?>-pane" role="tabpanel" aria-labelledby="<?php echo $r_type['resource_id']; ?>" tabindex="0">
                        <div class="h2_blog_resource_grid">
                        <?php
                        if ($query->have_posts()) {
                            ?>
                            <div class="accordion-item blog_accordian">
                                <h2 class="accordion-header" id="acc_blog_heading<?php echo $j; ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc_blog_collapse<?php echo $j; ?>" aria-expanded="true" aria-controls="acc_blog_collapse<?php echo $j; ?>">
                                        <img src="<?php echo $r_type['resource_icon']; ?>" alt="<?php echo $r_type['resource_name']; ?> Icon"><?php echo $r_type['resource_name']; ?>
                                    </button>
                                </h2>
                                <div id="acc_blog_collapse<?php echo $j; ?>" class="accordion-collapse collapse" aria-labelledby="acc_blog_heading<?php echo $j; ?>" data-bs-parent="#faq-accordion">
                                    <div class="accordion-body">
                                        <div class="owl-carousel owl-theme">
                                            <?php
                                            while ($query->have_posts()) {
                                                $query->the_post(); 
                                                $post_id = get_the_ID();
                                                $thumb = get_the_post_thumbnail_url($post_id, 'full');
                                                $posturl = get_permalink($post_id);
                                                // Check post type and set custom URL
                                                switch ($post_type) {
                                                    case 'case-studies':
                                                        $posturl = site_url("/case-studies");
                                                        break;
                                                    case 'publications':
                                                        $posturl = site_url("/publications");
                                                        break;
                                                }
                                                if(empty($thumb)) {
                                                    $thumb = get_template_directory_uri()."/images/blog-img.jpg";
                                                }
                                            ?>
                                            <div class="item">
                                                <div class="h2_blog_resource_box">
                                                    <div class="blog_resource_img">
                                                        <img src="<?php echo $thumb; ?>" alt="<?php echo get_the_title(); ?>">
                                                    </div>
                                                    <p><a href="<?php echo $posturl; ?>" target="_blank"><?php echo get_the_title(); ?></a></p>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div class="text-center">
                                            <a href="<?php echo $viewallresource; ?>" target="_blank" class="discover_more_link d-md-none">View All <?php echo $r_type['resource_name']; ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-5 d-none d-md-block">
                                <a href="<?php echo $viewallresource; ?>" target="_blank" class="discover_more_link">View All <?php echo $r_type['resource_name']; ?></a>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                    
                <?php $j++; endforeach; ?>
            </div>
        </div>
    </section>
    
    <section class="h2_partners_logo">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-center">
            <?php if($partners_heading): ?>
                <h2 class="white_text mb-0"><?php echo $partners_heading; ?></h2>
            <?php endif; ?>
            <?php if($see_all_partners_link): ?>
                <a href="<?php echo $see_all_partners_link['url']; ?>" target="_blank" class="discover_more_link d-none d-md-block"><?php echo $see_all_partners_link['title']; ?></a>
            <?php endif; ?>
            </div>
            <div class="h2_partners_logo_slider mt-md-3 mt-3 cmn-sliderdots offsetarrow">
                <div class="owl-carousel owl-theme">
                    <?php if($partners_logos): ?>
                    <?php foreach($partners_logos as $p_logo):?>
                        <div class="item">
                            <div class="h2_aicerts_lab_box">
                                <!-- <img src="<?php echo $p_logo['partner_lab_logo']; ?>" alt=""> -->
                                <img src="<?php echo $p_logo['partner_lab_logo']; ?>" alt="Partner Logo" class="aicerts_lab_white">
                                <img src="<?php echo $p_logo['black_partner_lab_logo']; ?>" alt="Partner Logo" class="aicerts_lab_black">
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <?php if($see_all_partners_link): ?>
            <div class="mt-4 d-md-none">
                <a href="<?php echo $see_all_partners_link['url']; ?>" target="_blank" class="discover_more_link ms-auto"><?php echo $see_all_partners_link['title']; ?></a>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <section class="h2_happy_to_help">
        <div class="container">
            <div class="happy_to_help_wrap">
                <div class="row align-items-end">
                    <div class="col-md-6">
                        <div class="happy_to_help_content">
                        <?php if($speak_to_expert_heading): ?>
                            <h2 class="white_text"><?php echo $speak_to_expert_heading; ?></h2>
                        <?php endif; ?>
                        <?php if($speak_to_expert_content): ?>
                            <p><?php echo $speak_to_expert_content; ?></p>
                        <?php endif; ?>
                        <?php if($speak_to_expert_button): ?>
                            <a href="<?php echo $speak_to_expert_button['url']; ?>" target="_blank" class="btn btn-primary"><?php echo $speak_to_expert_button['title']; ?></a>
                        <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <?php if($speak_to_expert_image): ?>
                        <div class="happy_to_help_img">
                            <img src="<?php echo $speak_to_expert_image; ?>" alt="Speak To Our Expert">
                        </div>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="h2_learners cmn-sliderdots offsetarrow">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
                <?php if($learners_heading): ?>
                    <h2 class="mb-0"><?php echo $learners_heading; ?></h2>
                <?php endif; ?>
                <?php if($see_more_learners): ?>
                <a href="<?php echo $see_more_learners['url']; ?>" target="_blank" class="discover_more_link white__bg d-none d-md-block"><?php echo $see_more_learners['title']; ?></a>
                <?php endif; ?>
            </div>
            <div class="h2_learners_row">
                <div class="owl-carousel owl-theme">
                    <!-- <div class="col-md-6 col-xl-3 mb-4 mb-xl-0 h2_learners_col"> -->
                        <?php if(($learners_box) ): shuffle($learners_box); ?>
                        <?php foreach($learners_box as $box): ?>
                            <div class="item">
                                <div class="h2_learners_box">
                                    <div class="h2_learners_header">
                                        <img src="<?php echo $box['employee_photo']; ?>" alt="<?php echo $box['employee_name']; ?> Learner Photo">
                                        <h6><?php echo $box['employee_name']; ?></h6>
                                    </div>
                                    <div class="h2_learners_desc">
                                        <p><?php echo $box['description']; ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php  endforeach; ?>
                        <?php endif; ?>
                    <!-- </div> -->
                </div>
            </div>
            <?php if($see_more_learners): ?>
            <div class="mt-2 mt-md-4">
                <a href="<?php echo $see_more_learners['url']; ?>" target="_blank" class="discover_more_link white__bg d-md-none"><?php echo $see_more_learners['title']; ?></a>
            </div>
            <?php endif; ?>
        </div>
    </section>
	
	 <section class="h2_get_certified">
        <div class="container">
            <div class="h2_get_certified_wrap">
                <div class="row align-items-center">
                    <div class="col-xl-9 col-lg-8">
                        <?php if($get_certified_heading): ?>
                            <h5><?php echo $get_certified_heading; ?></h5>
                        <?php endif; ?>
                        <?php if($get_certified_content): ?>
                            <p><?php echo $get_certified_content; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="col-xl-3 col-lg-4 text-lg-end">
                    <?php if($get_certified_button): ?>
                        <a href="<?php echo $get_certified_button['url']; ?>" target="_blank" class="btn btn-white"><?php echo $get_certified_button['title']; ?></a>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="h2_faq">
        <div class="container">
        <?php if($faq_heading): ?>
            <h2 class="white_text mb-3 mb-md-5 text-center"><?php echo $faq_heading; ?></h2>
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

   

</div>

<?php
// get_sidebar();
   get_footer(); 
   ?>
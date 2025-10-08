<?php 
/* 
 * Template Name: Template Why Aicerts V2
 */ 

 get_header(); 

$why_aicerts_banner_heading = get_field('why_aicerts_banner_heading');
$why_aicert_banner_content = get_field('why_aicert_banner_content');
$banner_poster = get_field('banner_poster');
$why_choose_heading = get_field('why_choose_heading');
$why_choose_content = get_field('why_choose_content');
$why_choose_image = get_field('why_choose_image');
$certifications_count = get_field('certifications_count');
$mission_vision = get_field('mission_vision');
$our_core_values_heading = get_field('our_core_values_heading');
$our_core_values_content = get_field('our_core_values_content');
$our_core_values_card = get_field('our_core_values_card');
$value_proposition_heading = get_field('value_proposition_heading');
$value_proposition_image = get_field('value_proposition_image');
$value_proposition = get_field('value_proposition');
$our_certifications_heading = get_field('our_certifications_heading');
$our_certifications_card = get_field('our_certifications_card');
$process_heading = get_field('process_heading');
$process = get_field('process');
$home_page_id = get_option('page_on_front');
$faq_heading = get_field('faq_heading', $home_page_id);
$faq_accordion = get_field('faq_accordion', $home_page_id);
$partners_heading = get_field('partners_heading',$home_page_id);
$see_all_partners_link = get_field('see_all_partners_link',$home_page_id);
$partners_logos = get_field('partners_logos',$home_page_id);
$transform_your_career_heading = get_field('transform_your_career_heading');
$transform_your_career_content = get_field('transform_your_career_content');
$start_your_ai_journey_today = get_field('start_your_ai_journey_today');
$resources_heading = get_field('latest_resources_heading' ,$home_page_id);
$resources_type = get_field('resources_type',$home_page_id);
?> 
<!--Header End-->

<?php if($why_aicerts_banner_heading): ?>
    <section class="banner-video-section imgbanner why2-banner">
        <div class="container">
            <div class="row">
			<div class="col-12">
                <div class="video-banner-cnt">
                        <h1><?php echo $why_aicerts_banner_heading; ?></h1>
                        <p><?php echo $why_aicert_banner_content; ?></p>
						<a href="<?php echo $start_your_ai_journey_today; ?>" class="btn btn-primary">Start Your AI Journey Today</a>
                </div>
                <!--div class="col-lg-4">
                    <div class="hero-image">
                        <?php if($banner_poster): ?>
                            <img src="<?php echo $banner_poster; ?>" alt="HeroBanner">
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/BannersCard.png" alt="HeroBanner">
                        <?php endif; ?>
                    </div>
                </div-->
            </div>
			</div>
        </div>
    </section><!-- Hero Banner End-->
<?php endif; ?>
<?php if($why_choose_heading): ?>
    <section class="WhyChoose cmn-section common-section">
        <div class="container">
            <div class="row g-lg-5 g-4 align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="WhyChoose-pic position-relative">
                        <?php if($why_choose_image): ?>
                            <img src="<?php echo $why_choose_image; ?>" alt="WhyChoose">
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/whyc.png" alt="WhyChoose">
                        <?php endif; ?>
                        <div class="certitag">
                            <h2><span class="primary_color"> <?php echo $certifications_count; ?> </span></h2>
                            <p>Certifications</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="whyContent">
                        <h2><?php echo $why_choose_heading; ?></h2>
                        <p class="mb-0 fw500"><?php echo $why_choose_content; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Why Choose AI CERTsTM? End-->
<?php endif; ?>
<?php if($mission_vision): ?>
    <section class="Our_MV common-section">
        <div class="container">
            <?php foreach($mission_vision as $mission): ?>
                <div class="mission-vision d-flex align-items-center justify-content-center flex-wrap gap-4 gap-lg-5 text-center">
                    <div class="mv-icon">
                        <?php if($mission['mission_vision_icon']): ?>
                            <img src="<?php echo $mission['mission_vision_icon']; ?>" alt="icon-target">
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-target.svg" alt="icon-target">
                        <?php endif; ?>
                    </div>
                    <div class="mv-target">
                        <h2><span class="primary_color"><?php echo $mission['mission_vision_title']; ?></h2>
                        <p><?php echo $mission['mission_vision_detail']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section><!-- OurMV End-->
<?php endif; ?>
<?php if($our_core_values_heading): ?>
    <section class="OurCoreValues common-section">
        <div class="container">
            <div class="section-heading mx-auto text-center">
                <h2><span class="primary_color"><?php echo $our_core_values_heading; ?></span></h2>
                <p><?php echo $our_core_values_content; ?></p>
            </div>
            <div class="row g-4">
                <?php if($our_core_values_card): ?>
                    <?php foreach($our_core_values_card as $corevalues): ?>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="core-value_card h-100">
                                <div class="core-value-icon mb-3">
                                    <?php if($corevalues['core_value_icon']): ?>
                                        <img src="<?php echo $corevalues['core_value_icon']; ?>" alt="icon-core-value">
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-core-value1.svg" alt="icon-core-value">
                                    <?php endif; ?>
                                </div>
                                <div class="core-value-content">
                                    <h5 class="mb-0"><?php echo $corevalues['core_value_title']; ?></h5>
                                    <p><?php echo $corevalues['core_value_content']; ?></p>
                                </div>
                            </div>
                        </div><!--Core Values Item End-->
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section><!--Our Core Values End-->
<?php endif; ?>
<?php if($value_proposition_heading): ?>
    <section class="ValuePropositions common-section">
        <div class="container">
            <div class="row g-4 g-lg-5">
                <div class="col-lg-4">
                    <div class="value_image">
                        <?php if($value_proposition_image): ?>
                            <img class="w-100" src="<?php echo $value_proposition_image; ?>" alt="Value">
                        <?php else: ?>
                            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/images/Value.png" alt="Value">
                        <?php endif; ?>
                    </div>
                </div>
                <?php if($value_proposition): ?>
                    <div class="col-lg-8">
                        <div class="Value_info">
                            <h2 class="mb-4"><span class="primary_color"><?php echo $value_proposition_heading; ?></span></h2>
                            <ul class="Value_Points">
                                <?php foreach($value_proposition as $value): ?>
                                    <li><strong><?php echo $value['value_name']; ?></strong> <?php echo $value['value_detail']; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section><!--Value Propositions End-->
<?php endif; ?>
<?php if($our_certifications_heading): ?>
    <section class="RoleBasedCertifications common-section">
        <div class="container">
            <div class="section-heading text-center mb-4">
                <h2><?php echo $our_certifications_heading; ?></h2>
            </div>
            <?php if($our_certifications_card): ?>
                <div class="row g-4">
                    <?php foreach($our_certifications_card as $card): ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <a href="<?php echo $card['certifications_link']; ?>" class="categorytile">
                                <div class="RBC-Card text-center">
                                    <div class="certi_img mb-3">
                                        <?php if($card['certifications_image']): ?>
                                            <img src="<?php echo $card['certifications_image']; ?>" alt="Certification">
                                        <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/training1.jpg" alt="Certification">
                                        <?php endif; ?>
                                    </div>
                                    <div class="certi-title_text">
                                        <h4 class="mb-2"><?php echo $card['certifications_title']; ?></h4>
                                        <p class="mb-2"><?php echo $card['certifications_detail']; ?></p>
                                    </div>
                                </div>
                            </a>
                        </div><!--RBCCard End-->
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section><!--Explore Our Role Based Certifications End-->
<?php endif; ?>

<?php //include_once get_template_directory() . '/inc/all-certifications.php'; ?>
<!--Are Most Valued End-->

<?php if($process_heading): ?>
    <section class="StandardProcesses text-center common-section">
        <div class="container">
            <div class="section-heading">
                <h2><?php echo $process_heading; ?></h2>
            </div>
            <?php if($process): ?>
                <div class="row g-4 g-lg-5">
                    <?php foreach($process as $proc): ?>
                        <div class="col-lg-4 col-md-4">
                            <div class="Processes_Card">
                                <?php if($proc['process_image']): ?>
                                    <img src="<?php echo $proc['process_image']; ?>" alt="icon-certification">
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon-certification.svg" alt="icon-certification">
                                <?php endif; ?>
                                <h4><?php echo $proc['process_name']; ?></h4>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section><!-- StandardProcesses End-->
<?php endif; ?>
<?php if($partners_heading): ?>
    <section class="h2_partners_logo OurPartners_logos common-section border-0 p-0 bg-transparent">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-center align-items-center flex-column">
                <h2>Our Trusted Partners</h2>
                <h4>Collaborating with world-class institutions and innovative companies to <br> deliver exceptional AI-powered learning experiences across the globe</h4>
                <?php if($see_all_partners_link): ?>
                    <a href="<?php echo $see_all_partners_link['url']; ?>" target="_blank" class="discover_more_link d-none">See All Partners</a>
                <?php endif; ?>
            </div>
            <div class="h2_partners_logo_slider mt-md-3 mt-3 cmn-sliderdots offsetarrow">
                <div class="owl-carousel owl-theme">
                    <?php if($partners_logos): ?>
                        <?php foreach($partners_logos as $p_logo):?>
                        <div class="item">
                            <div class="h2_aicerts_lab_box">
                                <img src="<?php echo $p_logo['partner_lab_logo']; ?>" alt="" class="aicerts_lab_white">
                                <img src="<?php echo $p_logo['black_partner_lab_logo']; ?>" alt="" class="aicerts_lab_black">
                            </div>
                        </div><!--LogoItem End-->
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <?php if($see_all_partners_link): ?>
            <div class="mt-4 text-center">
                <a href="<?php echo $see_all_partners_link['url']; ?>" target="_blank" class="btn btn-primary">See All Partners</a>
            </div>
            <?php endif; ?>
        </div>
    </section><!--Our Partners End-->
<?php endif; ?>

<section class="h2_blog_resource pt-0 border-0 h4_blog_resource">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-center align-items-center mb-md-5 mb-2">
            <!-- <?php if($resources_heading): ?>
                <h2 class="white_text px-3">Latest Resources</h2>
            <?php endif; ?> -->
            <?php if($resources_type): ?>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs h2_blog_resource_tabs" id="blog_resourceTab" role="tablist">
                <?php $i=1; foreach($resources_type as $r_type): ?>
                <li class="nav-item" role="presentation">
                    <button class="nav-link <?php echo ($i==1) ? 'active' : ''; ?>" id="<?php echo $r_type['resource_id']; ?>" data-bs-toggle="tab" data-bs-target="#<?php echo $r_type['resource_id']; ?>-pane"
                        type="button" role="tab" aria-controls="<?php echo $r_type['resource_id']; ?>-pane" aria-selected="<?php ($i==1) ? 'true' : 'false'; ?>">
                        <img src="<?php echo $r_type['resource_icon']; ?>" alt=""><?php echo $r_type['resource_name']; ?>
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
                                    <img src="<?php echo $r_type['resource_icon']; ?>" alt=""><?php echo $r_type['resource_name']; ?>
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
                                                    <img src="<?php echo $thumb; ?>" alt="">
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
                        <div class="text-center mt-3">
                            <a href="<?php echo $viewallresource; ?>" target="_blank" class="btn btn-primary">View All <?php echo $r_type['resource_name']; ?></a>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            <?php $j++; endforeach; ?>
        </div>
    </div>
</section>

<?php if($transform_your_career_heading): ?>
    <section class="YourCareer common-section">
        <div class="container">
            <div class="yc_card text-center">
                <div class="yc_area mx-auto">
                    <h2><span class="primary_color"><?php echo $transform_your_career_heading; ?></span></h2>
                    <p><?php echo $transform_your_career_content; ?></p>
                    <a href="<?php echo $start_your_ai_journey_today; ?>" class="btn btn-primary">Start Your AI Journey Today</a>
                </div>
            </div>
        </div>
    </section><!-- YourCareer End-->
<?php endif; ?>


<!--Footer-->
<?php
// get_sidebar();
get_footer(); 
?>

<script>
    // Industries Growth Insights tabbed content
    $(".tab_content").hide();
    $(".tab_content:first").show();

  /* if in tab mode */
    $("ul.tabs li").click(function() {
		
      $(".tab_content").hide();
      var activeTab = $(this).attr("rel"); 
      $("#"+activeTab).fadeIn();		
		
      $("ul.tabs li").removeClass("active");
      $(this).addClass("active");

	  $(".tab_drawer_heading").removeClass("d_active");
	  $(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
	  
    });
	/* if in drawer mode */
	$(".tab_drawer_heading").click(function() {
      
      $(".tab_content").hide();
      var d_activeTab = $(this).attr("rel"); 
      $("#"+d_activeTab).fadeIn();
	  
	  $(".tab_drawer_heading").removeClass("d_active");
      $(this).addClass("d_active");
	  
	  $("ul.tabs li").removeClass("active");
	  $("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
    });

    // Our Portfolio tabbed content
    $(".tab_content2").hide();
    $(".tab_content2:first").show();

  /* if in tab mode */
    $("ul.tabs2 li").click(function() {
		
      $(".tab_content2").hide();
      var activeTab = $(this).attr("rel"); 
      $("#"+activeTab).fadeIn();		
		
      $("ul.tabs2 li").removeClass("active");
      $(this).addClass("active");

	  $(".tab_drawer_heading2").removeClass("d_active");
	  $(".tab_drawer_heading2[rel^='"+activeTab+"']").addClass("d_active");
	  
    });
	/* if in drawer mode */
	$(".tab_drawer_heading2").click(function() {
      
      $(".tab_content2").hide();
      var d_activeTab = $(this).attr("rel"); 
      $("#"+d_activeTab).fadeIn();
	  
	  $(".tab_drawer_heading2").removeClass("d_active");
      $(this).addClass("d_active");
	  
	  $("ul.tabs2 li").removeClass("active");
	  $("ul.tabs2 li[rel^='"+d_activeTab+"']").addClass("active");
    });
</script>
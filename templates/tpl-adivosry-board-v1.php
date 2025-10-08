<?php /* Template Name: Adivosry Board V1 */ 
get_header();
$banner_title = get_field('banner_title');
$banner_subtitle = get_field('banner_subtitle');
$apply_to_join_the_board_button = get_field('apply_to_join_the_board_button');
$responsibilities_of_business_advisory_board_members_title = get_field('responsibilities_of_business_advisory_board_members_title');
$responsibilities_of_business_content = get_field('responsibilities_of_business_content');
$business_model_refinement_title = get_field('business_model_refinement_title');
$business_model_refinement_image = get_field('business_model_refinement_image');
$business_model_refinement_points = get_field('business_model_refinement_points');
$growth_and_partnership_title = get_field('growth_and_partnership_title');
$growth_and_partnership_subtitle = get_field('growth_and_partnership_subtitle');
$growth_and_partnership_content = get_field('growth_and_partnership_content');
$commitment_and_structure_heading = get_field('commitment_and_structure_heading');
$commitment_and_structure_subheading = get_field('commitment_and_structure_subheading');
$commitment_and_structure_content = get_field('commitment_and_structure_content');
$monthly_meetings​_heading = get_field('monthly_meetings​_heading');
$monthly_meetings​_image = get_field('monthly_meetings​_image');
$monthly_meetings​_content = get_field('monthly_meetings​_content');
$ad_hoc_consultations​_heading = get_field('ad-hoc_consultations​_heading');
$ad_hoc_consultations​_content = get_field('ad-hoc_consultations​_content');
$ad_hoc_consultations​_image = get_field('ad-hoc_consultations​_image');
$benefits_for_advisors​_heading = get_field('benefits_for_advisors​_heading');
$benefits_for_advisors​_content = get_field('benefits_for_advisors​_content');
$bottom_section_content = get_field('bottom_section_content');
$form_short_code = get_field('form_short_code');
?>

<div class="middle-section">
    <?php if($banner_title): ?>
    <section class="banner-video-section imgbanner abv1-banner overlay-linear-gradient">
      <div class="container position-relative">
        <div class="row">
          <div class="col-lg-12">
            <div class="video-banner-cnt">
                <h1><?php echo $banner_title; ?></h1>
                <p><?php echo $banner_subtitle; ?></p>
                <a href="<?php echo $apply_to_join_the_board_button['url']; ?>" class="btn btn-primary me-3" ><?php echo $apply_to_join_the_board_button['title']; ?></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>
    <!-- HeroBanner End -->
    
    <?php if($responsibilities_of_business_advisory_board_members_title): ?>
    <section class="common-section Responsibilities text-center">
        <div class="container">
            <div class="section-header mb-lg-5">
                <h2><?php echo $responsibilities_of_business_advisory_board_members_title; ?>​</h2>
            </div>
            <div class="row g-4 g-lg-5">
                <?php if($responsibilities_of_business_content): ?>
                    <?php foreach($responsibilities_of_business_content as $res_content): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="ABM-Card">
                                <div class="ABM_Icon">
                                <img alt="Business" src="<?php echo $res_content['responsibilities_icon']['url']; ?>"/>     
                                </div>
                                <div class="ABM_Content">
                                    <h4 class="primary_color"><?php echo $res_content['responsibilities_label']; ?>​</h4>
                                    <p><?php echo $res_content['responsibilities_content']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>                  
            </div>
             <!-- Row End -->
        </div>
    </section>
    <?php endif; ?>
     <!-- Responsibilities End -->

     <?php if($business_model_refinement_title): ?>
     <section class="common-section BusinessModel">
        <div class="container">
            <div class="BMRContent">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="BMR-Img">
                            <img class="w-100" alt="BMR" src="<?php echo $business_model_refinement_image['url']; ?>"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="BMR_Details">
                            <h2><?php echo $business_model_refinement_title; ?></h2>
                            <ul>
                                <?php if($business_model_refinement_points): ?>
                                    <?php foreach($business_model_refinement_points as $bus_points): ?>
                                    <li>
                                        <strong><?php echo $bus_points['business_model_refinement_title']; ?></strong> <?php echo $bus_points['business_model_refinement_pointers']; ?>
                                    </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
     <?php endif; ?>
     <!-- Business Model Refinement​ End -->

    <?php if($growth_and_partnership_title): ?>
    <section class="common-section GrowthBoad">
        <div class="container">
            <div class="section-header text-center mb-lg-4">
                <h2><?php echo $growth_and_partnership_title; ?></h2>
                <p><?php echo $growth_and_partnership_subtitle; ?></p>
            </div>
            <div class="row g-5 g-xl-4 d-xl-grid row-flow_2fr">
                <?php if($growth_and_partnership_content): ?>
                    <?php foreach($growth_and_partnership_content as $growth): ?>
                        <div class="col-xl-12 col-lg-6">
                            <div class="GPCard h-100">
                                <div class="GPImage">
                                    <img class="w-100" alt="BMR" src="<?php echo $growth['growth_and_partnership_image']['url']; ?>"/>
                                </div>
                                <div class="GPInfo">
                                    <h5 class="primary_color fw-bold"><?php echo $growth['growth_and_partnership_label']; ?>​</h5>
                                    <p><?php echo $growth['growth_and_partnership_subcontent']; ?></p>
                                </div>       
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                <!-- Col End -->                
            </div>
            <!-- Row End -->
        </div>
    </section>
    <?php endif; ?>
    <!-- Growth & Partnerships​ End -->

    <?php if($commitment_and_structure_heading): ?>
    <section class="common-section CommitmentStru">
        <div class="container">
            <div class="section-header text-center mb-lg-4">
                <h2><?php echo $commitment_and_structure_heading; ?></h2>
                <h4><?php echo $commitment_and_structure_subheading; ?></h4>
            </div>
        </div>
        <div class="container onezerotwothree pt-2">
            <div class="CS-ListView d-grid gap-4 gap-sm-3">
                <?php if($commitment_and_structure_content): ?>
                    <?php foreach($commitment_and_structure_content as $commitment): ?>
                        <div class="CS_CartItem">
                            <div class="CSIcon">
                                <img alt="icon-monthly" src="<?php echo $commitment['commitment_and_structure_icon']['url']; ?>"/>
                            </div>
                            <div class="CSCard-Info">
                                <h4 class="primary_color"><?php echo $commitment['commitment_and_structure_label']; ?>​</h4>
                                <p><?php echo $commitment['commitment_and_structure_detail']; ?>​</p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                <!-- CS_CartItem -->
            </div>
            <!-- CS-ListView -->
        </div>
    </section>
    <?php endif; ?>
    <!-- Commitment & Structure​ End -->

    <?php if($monthly_meetings​_heading): ?>
    <section class="common-section Structure">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="cms-section-img">
                        <img class="w-100" alt="cms-monthly" src="<?php echo $monthly_meetings​_image['url']; ?>"/>
                    </div>
                </div>
                <!-- Col4End -->
                <div class="col-xl-7 col-lg-6">
                    <div class="cmn-section-content">
                        <h2><?php echo $monthly_meetings​_heading; ?>​</h2>
                        <?php if($monthly_meetings​_content): ?>
                            <?php foreach($monthly_meetings​_content as $meet): ?>
                                <p><strong><?php echo $meet['monthly_meetings​_label']; ?></strong><?php echo $meet['monthly_meetings​_detail']; ?></p>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                 <!--Col8End  -->
            </div>
            <!-- RowEnd -->
            <div class="row g-4 flex-row-reverse mt-1 mt-lg-5">
                <div class="col-xl-5 col-lg-6">
                    <div class="cms-section-img">
                        <img class="w-100" alt="Ad-Hoc" src="<?php echo $ad_hoc_consultations​_image['url']; ?>"/>
                    </div>
                </div>
                <!-- Col4End -->
                <div class="col-xl-7 col-lg-6">
                    <div class="cmn-section-content">
                        <h2><?php echo $ad_hoc_consultations​_heading; ?>​</h2>
                        <p><?php echo $ad_hoc_consultations​_content; ?></p>
                    </div>
                </div>
                 <!--Col8End  -->
            </div>
            <!-- RowEnd --> 
        </div>
    </section>
    <?php endif; ?>
    <!-- Structure​ End -->

    <section class="common-section text-center">
        <div class="container">
            <div class="BenefitsAdvisors">
            <div class="section-header mb-lg-4">
                <h2><?php echo $benefits_for_advisors​_heading; ?></h2>
            </div>
            <div class="row g-4 g-xl-5 justify-content-center">
                <?php if($benefits_for_advisors​_content): ?>
                    <?php foreach($benefits_for_advisors​_content as $ad_benefit): ?>
                        <div  class="col-xl-3 col-lg-4">
                            <div class="ABCard h-100">
                                <div class="ABIcon">
                                    <img alt="ABIcon" src="<?php echo $ad_benefit['benefits_for_advisors​_icon']['url']; ?>"/>
                                </div>
                                <div class="ABIconText">
                                    <p><?php echo $ad_benefit['benefits_for_advisors​_detail']; ?>​</p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                <!-- ColEnd -->                
            </div>
              <!-- RowEnd -->
            </div>
        </div>
    </section>
    <!-- Benefits for Advisors​​ End -->

    <?php if($form_short_code): ?>
        <section class="common-section ab-plans" id="advisoryformsection">
            <div class="container">
                <h2 class="primary_color text-center mb-3 mb-lg-5">Advisory Board Application Form</h2>
                <div class="row">
                <div class="col-12">
                    <div class="advisory-form-card gravity-page_form">
                    <?php echo do_shortcode($form_short_code); ?>
                    </div>
                </div>
                </div> 
            </div>
        </section>
    <?php endif; ?>

    <section class="common-section ab-cta-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-12">
            <h2 class="white_text"><?php echo $bottom_section_content; ?>​</h2>
          </div>
        </div>
      </div>
    </section>
    <!-- AB CTA Banner​ End -->

</div>
 <!-- Middle Section End -->
<script>
jQuery(document).ready(function($){

$('a[href^="#"]').on('click', function(e) {
    e.preventDefault();

    var target = $(this.getAttribute('href'));

    if (target.length) {
        // Height of the fixed header
        var headerHeight = $('.sticky').outerHeight();

        // Scroll to section with offset
        $('html, body').animate({
            scrollTop: target.offset().top - headerHeight
        }, 600); // 600ms scroll duration
    }
});

});

</script>
<?php
// get_sidebar();
get_footer();
?>
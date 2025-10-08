<?php /* Template Name: Template GTIA */ 
get_header(); 
$banner_heading = get_field('banner_heading');
$banner_content = get_field('banner_content');
$banner_sub_content = get_field('banner_sub_content');
$explore_certifications_button = get_field('explore_certifications_button');
$partner_benefits_that_power_your_growth_title = get_field('partner_benefits_that_power_your_growth_title');
$partner_benefits_card = get_field('partner_benefits_card');
$find_the_partnership_that_fits_you_best_title = get_field('find_the_partnership_that_fits_you_best_title');
$find_the_partnership_sub_title = get_field('find_the_partnership_sub_title');
$find_the_partnership_content = get_field('find_the_partnership_content');
$find_the_partnership_box = get_field('find_the_partnership_box');
$lets_build_the_future_together_heading = get_field('lets_build_the_future_together_heading');
$lets_build_the_future_together_content = get_field('lets_build_the_future_together_content');
$become_a_partner_button = get_field('become_a_partner_button');
$lets_talk_button = get_field('lets_talk_button');
$why_partners_choose_heading = get_field('why_partners_choose_heading');
$why_partners_choose_image = get_field('why_partners_choose_image');
$why_partners_choose_content = get_field('why_partners_choose_content');
$trusted_by_educators_heading = get_field('trusted_by_educators_heading');
$trusted_by_educators_sub_heading = get_field('trusted_by_educators_sub_heading');
$lets_shape_the_future_heading = get_field('lets_shape_the_future_heading');
$lets_shape_the_future_content = get_field('lets_shape_the_future_content');
$lets_shape_the_future_button_one = get_field('lets_shape_the_future_button_one');
$lets_shape_the_future_button_two = get_field('lets_shape_the_future_button_two');
$home_page_id = get_option('page_on_front');
$see_all_partners_link = get_field('see_all_partners_link',$home_page_id);
$partners_logos = get_field('partners_logos',$home_page_id);
$resources_heading = get_field('latest_resources_heading' ,$home_page_id);
$resources_type = get_field('resources_type',$home_page_id);
?>
<?php if($banner_heading): ?>
<section class="banner-video-section imgbanner gtia-banner overlay-linear-gradient">
    <div class="container position-relative">
        <div class="row">
          <div class="col-lg-12">
            <div class="video-banner-cnt">
                <h2><?php echo $banner_heading; ?></h2>
                <p><?php echo $banner_content; ?></p>
                <h4 class="mb-4 pb-2"><?php echo $banner_sub_content; ?></h4>
                <a href="<?php echo $explore_certifications_button['url']; ?>" class="btn btn-primary me-3" ><?php echo $explore_certifications_button['title']; ?></a>
            </div>
          </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- HeroBanner End -->

<?php if($partner_benefits_that_power_your_growth_title): ?>
<section class="PartnerBenefitsGrowth common-section">
    <div class="container">
        <div class="section-heading text-center mb-5">
            <h2 class="primary_color"><?php echo $partner_benefits_that_power_your_growth_title; ?></h2>
        </div>
        <div class="row g-4">
            <?php if($partner_benefits_card): ?>
                <?php foreach($partner_benefits_card as $card): ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="ShadowCardGHover">
                            <?php if($card['partner_benefits_card_icon']): ?>
                                <img src="<?php echo $card['partner_benefits_card_icon']['url']; ?>"  alt="<?php echo $card['partner_benefits_card_icon']['title']; ?>"/>
                            <?php else: ?>
                                <img src="<?php echo esc_url(get_template_directory_uri(). "/images/icon-pbg1.svg"); ?>"  alt="PartnerBenefits"/>
                            <?php endif; ?>
                            <h4 class="mt-3"><?php echo $card['partner_benefits_card_name']; ?></h4>
                            <p><?php echo $card['partner_benefits_card_content']; ?></p>
                        </div>
                    </div>
                    <!-- Colend -->
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- Partner Benefits That Power Your Growth -->

<?php if($find_the_partnership_that_fits_you_best_title): ?>
    <section class="FindthePartnership common-section cmn-section light-primary-bg-color" id="findthepartnership">
        <div class="container">
            <div class="section-header text-center mb-3 pb-1">
                <h2 class="primary_color"><?php echo $find_the_partnership_that_fits_you_best_title; ?></h2>
                <h3><?php echo $find_the_partnership_sub_title; ?></h3>
                <p><?php echo $find_the_partnership_content; ?></p>
            </div>
            <div class="row g-4 g-lg-5">
                <?php if($find_the_partnership_box): ?>
                    <?php foreach($find_the_partnership_box as $findbox): ?>
                        <div class="col-lg-6">
                            <div class="FYBest h-100">
                                <div class="FYBestmain">
                                    <div class="FYBTitle text-center">
                                        <h3><?php echo $findbox['find_the_partnership_box_name']; ?></h3>
                                    </div>
                                    <div class="FYBContent">
                                        <h4><?php echo $findbox['find_the_partnership_for']; ?></h4>
                                        <?php echo $findbox['find_the_partnership_box_content']; ?>
                                    </div>
                                </div>
                                <div class="FYBCta">
                                    <a href="<?php echo $findbox['find_the_partnership_button']['url']; ?>" class="btn btn-primary"><?php echo $findbox['find_the_partnership_button']['title']; ?></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                <!-- Colend -->
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- Find the Partnership -->

<?php if($lets_build_the_future_together_heading): ?>
<section class="NewPossibilities common-section">
  <div class="container">
    <div class="light-primary-bg-color cmn-section ps-2 pe-2 text-center border-radius10">
      <div class="d-flex flex-column gap-4">
        <div class="section-header">
          <h2 class="primary_color"><?php echo $lets_build_the_future_together_heading; ?></h2>
          <p class="mb-0"><?php echo $lets_build_the_future_together_content; ?></p>
        </div>
        <div class="d-flex flex-wrap justify-content-center gap-3">
           <a href="<?php echo $become_a_partner_button['url']; ?>" target="_blank" class="btn btn-primary" ><?php echo $become_a_partner_button['title']; ?></a>
           <a href="<?php echo $lets_talk_button['url']; ?>" class="btn btn-outline btn-primary-outline"><?php echo $lets_talk_button['title']; ?></a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<!-- New Possibilities  -->

<?php if($why_partners_choose_heading): ?>
<section class=" WhyPartnersChoose common-section cmn-section gray-bg border-0">
    <div class="container">
        <div class="section-header text-center mb-4 pb-1">
            <h2><?php echo $why_partners_choose_heading; ?></h2>
        </div>
        <div class="row g-4 g-lg-5">
            <div class="col-lg-6">
                <div class="WhyPCImg">
                    <?php if($why_partners_choose_image): ?>
                        <img class="w-100" src="<?php echo $why_partners_choose_image['url']; ?>"  alt="gtiawhy"/>
                    <?php else: ?>
                        <img class="w-100" src="<?php echo esc_url(get_template_directory_uri(). "/images/gtiawhy.png"); ?>"  alt="gtiawhy"/>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="WhyPCContent">
                    <?php echo $why_partners_choose_content; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- Why Partners Choose AI CERTs -->

<?php if($trusted_by_educators_heading): ?>
 <section class="h2_partners_logo common-section text-center bg-transparent p-0 border-0">
    <div class="container">
        <div class="section-header">
            <h2 class="primary_color"><?php echo $trusted_by_educators_heading; ?></h2>
            <p><?php echo $trusted_by_educators_sub_heading; ?></p>
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
    </div>
 </section>
 <?php endif; ?>
 <!-- Partners Logo -->

<?php if($lets_shape_the_future_heading): ?>
<section class="NewPossibilities cmn-section gray-bg text-center border-0">
  <div class="container">
      <div class="d-flex flex-column gap-4">
        <div class="section-header">
          <h2 class="primary_color"><?php echo $lets_shape_the_future_heading; ?></h2>
          <p class="mb-0"><?php echo $lets_shape_the_future_content; ?></p>
        </div>
        <div class="d-flex flex-wrap justify-content-center gap-3">
           <a href="<?php echo $lets_shape_the_future_button_one['url']; ?>" target="_blank" class="btn btn-primary" ><?php echo $lets_shape_the_future_button_one['title']; ?></a>
           <a href="<?php echo $lets_shape_the_future_button_two['url']; ?>" class="btn btn-outline btn-primary-outline"><?php echo $lets_shape_the_future_button_two['title']; ?></a>
        </div>
      </div>
    </div>
</section>
<?php endif; ?>
<!-- New Possibilities  -->

<!--Footer-->
<?php
// get_sidebar();
get_footer();
?>
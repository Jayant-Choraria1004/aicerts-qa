<?php
/*
 *    Template Name: Roadmap
 */
get_header();
$banner_heading_line_1 = get_field('banner_heading_line_1');
$banner_heading_line2 = get_field('banner_heading_line2');
$banner_subheading = get_field('banner_subheading');
$banner_button_text = get_field('banner_button_text');
$banner_button_url = get_field('banner_button_url');
$progression_heading = get_field('progression_of_ai_certs_learning_heading');
$progression_sub_heading = get_field('progression_of_ai_certs_learning_sub_heading');
$progression_roadmap = get_field("progression_roadmap");
$roadmap_cta_heading = get_field('roadmap_cta_heading');
$roadmap_cta_subheading = get_field('roadmap_cta_subheading');
$roadmap_cta_form_shortcode = get_field('roadmap_cta_form_shortcode');
?>
<div class="middle-section">
<section class="banner-video-section pv1-banner roadmap-banner imgbanner">
	<div class="container maxwidth">
		<div class="row">
			<div class="col-lg-12">
        <?php if($banner_heading_line_1): ?>
          <div class="video-banner-cnt">
              <h1><?php echo $banner_heading_line_1; ?> <span class="primary_color"><?php echo $banner_heading_line2; ?></h1>
              <p><?php echo $banner_subheading; ?></p>
              <?php if(!empty($banner_button_url)): ?>
                <a href="<?php echo $banner_button_url; ?>" class="btn btn-primary me-3" download><?php echo $banner_button_text; ?></a>
              <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
		</div>
	</div>
</section>

<section class="roadmap-sec">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <h2 class="text-center primary_color"><?php echo $progression_heading; ?></h2>
        <p class="secondtitle white_text text-center"><?php echo $progression_sub_heading; ?></p>
        <div class="progression-cnt-outer">
          <div class="progression-cnt">
            <?php if($progression_roadmap): ?>
              <?php foreach($progression_roadmap as $roadmap): ?>
                <div class="prog-category">
                  <h2 class="prog-cat-title"><?php echo $roadmap['progression_category_title']; ?></h2>
                    <div class="monthly-prog">
                    <?php if($roadmap['progress_map']): ?>
                      <?php foreach($roadmap['progress_map'] as $progress_map): ?>
                        <?php $progressyear = $progress_map['progress_year']; ?>
                        <?php if($progressyear != '') : ?>
                          <h2 class="progyear primary_color"><?php echo $progress_map['progress_year']; ?></h2>
                        <?php endif; ?>
                          <ul>
                            <li>
                              <a class="monthtitle"><?php echo $progress_map['progress_title']; ?> </a>
                              <?php if($progress_map['popup_title']): ?>
                                <div class="prog-popovers">
									<div class="closepopovers"><i class="fa-regular fa-circle-xmark"></i></div>
                                  <div class="prog-popovers-header">
                                    <img src="<?php echo esc_url(get_template_directory_uri()."/images/icon_completed-certi.svg"); ?>"/> 
                                    <div><?php echo $progress_map['popup_title']; ?></div>
                                  </div>
                                  <?php $certificate = $progress_map['select_certificate']; ?>
                                  <?php if($certificate): ?>
                                    <div class="prog-popovers-cnt">
                                      <div class="row">
                                        <?php
                                          foreach ($certificate as $certi_sug):
                                              $course_url = get_the_permalink($certi_sug);
                                              $thumb_image = get_the_post_thumbnail_url($certi_sug);
                                              $title = get_the_title($certi_sug);
                                              $title_with_br = preg_replace('/\+ /', '+ <br>', $title);
                                        ?>
                                          <div class="col-lg-4 col-md-6 mb-3">
                                            <div class="prog-popovers-card">
                                              <?php if ($thumb_image): ?>
                                                <img src="<?php echo $thumb_image; ?>" alt="Certificate"/>
                                              <?php else: ?>
                                                <img src="<?php echo esc_url(get_template_directory_uri()."/images/certi-img-ai-executive.png"); ?>"/> 
                                              <?php endif; ?>
                                              <div>
                                                <h4><?php echo $title_with_br; ?></h4>
                                                <a href="<?php echo $course_url; ?>">Learn more</a>
                                              </div>
                                            </div>
                                          </div>  
                                        <?php endforeach; ?>
                                      </div>
                                    </div>
                                  <?php endif; ?>
                                </div>
                              <?php endif; ?>
                            </li>
                          </ul>
                      <?php endforeach; ?>
                  <?php endif; ?>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>        


      </div>
    </div> 
  </div> 
</section>  

<?php if($roadmap_cta_heading): ?>
<section class="roadmap_cta">
 <div class="container">
    <div class="row">
      <div class="col-lg-7 align-content-lg-center">
        <div class="rm-cta-cnt">
          <h2><?php echo $roadmap_cta_heading; ?></h2>
          <p><?php echo $roadmap_cta_subheading; ?></p>
        </div>
      </div>
      <?php if($roadmap_cta_form_shortcode): ?>
      <div class="col-lg-5">
        <div class="roadmap-form">
          <h3>Request More Information</h3>
          <?php echo do_shortcode($roadmap_cta_form_shortcode); ?>
        </div>
      </div>
      <?php endif; ?>
    </div>
    
 </div>
</section>
<?php endif; ?>
</div>
<?php
get_footer();
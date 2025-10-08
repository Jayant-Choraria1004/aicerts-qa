<?php
/*
 *    Template Name: recertification request template
 */
get_header();

$page_title = get_field('page_title');
$section_image = get_field('section_image');

$form_shortcode = get_field('form_shortcode');

$page_id = get_page_by_path('recertification')->ID;

$assistance_heading = get_field('assistance_heading', $page_id);
$assistance_content = get_field('assistance_content', $page_id);
$contact_heading = get_field('contact_heading', $page_id);
$contactlist = get_field('contactlist', $page_id);
$contant_cta_text = get_field('contant_cta_text', $page_id);
$contant_cta_link = get_field('contant_cta_link', $page_id);

$buynow_cta_link = get_field('buynow_cta_link' , $page_id);
$reattempt_cta_link = null;
?>

<div class="middle-section">
    
    <section class="cmn-section">
      <div class="container">
        <?php if( $page_title ): ?>
          <h2 class="text-center md-4"><?php echo $page_title;?></h2>
        <?php endif;?>
  
        <div class="row gx-lg-5 pt-5">
          
          <div class="col-lg-7">
            <?php if( $section_image ): ?>
              <img class="w-100 rcimgbr25" src="<?php echo $section_image['url'];; ?>" alt="<?php echo $section_image['alt']; ?>"/>
            <?php endif; ?>
          </div>

          <div class="col-lg-5">
			<div class="contact-form recertiform">
            <?php if( $form_shortcode ): ?>
              <?php echo do_shortcode($form_shortcode); ?>  
            <?php endif; ?>
          </div>
		  </div>
        </div>
      </div>
    </section><!-- Reattempt Policy -->

    <section class="common-section light-primary-bg-color">
      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-lg-6">
            <div class="ab-whyaict-cnt mt-lg-0 mt-4">

                <?php if( $assistance_heading ): ?>
                  <h2 class="primary_color mb-3"><?php echo $assistance_heading;?></h2>
                <?php endif;?>
                <?php if( $assistance_content ): ?>
                  <p><?php echo $assistance_content;?></p>
                <?php endif;?>
                <?php if( $contact_heading ): ?>
                <h4 class="mb-2"><?php echo $contact_heading;?></h4>
                <?php endif;?>
                <div class="mb-4">
                  <?php if($contactlist): ?>
                    <?php echo $contactlist;?>
                  <?php endif;?>
                </div>
              <?php if( $contant_cta_link['url'] ): ?>
                  <a href="<?php echo $contant_cta_link['url'] ?>" class="btn btn-primary me-2"><?php echo $contant_cta_text;?></a>
              <?php endif;?>	
              <?php if( $reattempt_cta_link['url'] ): ?>
                    <a href="<?php echo $reattempt_cta_link['url']; ?>" class="btn btn-primary me-2"><?php echo $reattempt_cta_link['title']; ?></a>
              <?php endif;?>
            </div>
          </div>

          <div class="col-lg-6">
              <img alt="" class="" src="<?php echo esc_url(get_template_directory_uri() . "/images/assistance-img.png"); ?>">
          </div>

        </div>
      </div>
    </section><!-- Need Assistance? -->

<?php
get_footer();
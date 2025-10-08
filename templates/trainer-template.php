<?php
/*
* Template Name: TrainerTemplate
*/
get_header();
global $post;
$defaults1 = array('orderby' => 'date','order' => 'DESC','post_type'=> 'trainers','tax_query' => array(
		array(
			'taxonomy' => 'trainercat',
			'field'    => 'slug',
			'terms'    => 'trainer'
		)
	)); 		 			
$trainerpartners = get_posts($defaults1);	
?>
   <div class="middle-section">
    <div class="inner-page blog-bg">
  <section class="cert-spec-section d-flex justify-content-center align-items-center pb-0">
  <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <h1 class="cmn-hd" data-aos="fade-up" data-aos-duration="1000"><?php echo get_the_title(); ?></h1>
            </div>
          </div>
      </div>
  </section>


  <section class="cmn-section esteemed-partners-section pt-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="esteemed-partners-cnt">
          <?php 
            $content = get_the_content();
            $content = apply_filters('the_content', $content);
          ?>
         <?php echo $content;?>
          <div class="partners-desc-area mb-5" data-aos="fade-up" data-aos-duration="1000">
          </div>
          <?php /*
          <div class="row justify-content-center">
            
            <?php if(!empty($trainerpartners)) { ?>
              <?php foreach($trainerpartners as $training) { 
                    $featured_img_url = get_the_post_thumbnail_url($training->ID,'thumbnail'); 
                    $register_here = get_post_meta( $training->ID, 'register_here', true); 
              ?>
                <div class="col-xl-3 col-md-4" data-aos="fade-up" data-aos-duration="1000">
                  <div class="mission-value-box certifications-cnt">
                    <div class="certifications-img"><img alt="AI+ Certified Trainer" src="<?php echo $featured_img_url;?>"></div>
                    <div class="corevalue-desc"><?php echo $training->post_title;?></div>
                    <div class="certified-btn"><a href="<?php echo $register_here;?>" class="btn btn-primary">Become a Trainer</a></div>
                  </div>
                </div>
                
            <?php } ?>
          <?php } ?>
          </div> */ ?>
        </div>
      </div>
    </div>
  </div>
</section>
 </div>
 </div>  
	
<?php
get_footer();
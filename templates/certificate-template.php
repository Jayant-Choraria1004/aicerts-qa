<?php
/*
*    Template Name: CertificatesTemplateNew
*/	
get_header();
	$defaults1 = array('orderby' => 'date','order' => 'DESC','post_type'=>'courses', 'posts_per_page'=>-1, 'tax_query' => array(
		array(
			'taxonomy' => 'category',
			'field'    => 'slug',
			'terms'    => 'ai-professional'
		)
	)); 
	$defaults2 = array('orderby' => 'date','order' => 'DESC','post_type'=>'courses', 'posts_per_page'=>-1,'tax_query' => array(
		array(
			'taxonomy' => 'category',
			'field'    => 'slug',
			'terms'    => 'ai-technical'
		)
	)); 
  $defaults3 = array('orderby' => 'date','order' => 'DESC','post_type'=>'courses','posts_per_page'=>-1, 'tax_query' => array(
		array(
			'taxonomy' => 'category',
			'field'    => 'slug',
			'terms'    => 'blockchain-professional'
		)
	));
  $defaults4 = array('orderby' => 'date','order' => 'DESC','post_type'=>'courses', 'posts_per_page'=>-1,'tax_query' => array(
		array(
			'taxonomy' => 'category',
			'field'    => 'slug',
			'terms'    => 'blockchain-technical'
		)
	));
	$aiprofessional = get_posts($defaults1);
	$aitechnical = get_posts($defaults2);
	$blockchainprofessional = get_posts($defaults3);
	$blockchaintechnical = get_posts($defaults4);


?>	
  <!--Header End-->

<div class="middle-section">
  <div class="inner-page certification-page">
<section class="cert-spec-section pb-2 d-flex justify-content-center align-items-center">
<div class="container">
      <div class="row">
        <div class="col-lg-12">
            <h1 class="cmn-hd" data-aos="fade-up" data-aos-duration="1000">Premier Certifications</h1>
        </div>
      </div>
</div>
</section>

     
 <!--... AI+ Professional --> 
   
 <section class="cmn-section esteemed-partners-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="esteemed-partners-cnt">
          <h2 class="cmn-hd mb-4" data-aos="fade-up" data-aos-duration="1000">AI+ Professional™ Certifications</h2>
          <div class="partners-desc-area mb-5" data-aos="fade-up" data-aos-duration="1000">
          </div>
          <div class="row">
            <?php echo do_shortcode('[courses_by_category category="ai-professional"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!---AI+ Developer-->

<section class="cmn-section pt-0 esteemed-partners-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="esteemed-partners-cnt">
          <h2 class="cmn-hd mb-4" data-aos="fade-up" data-aos-duration="1000">AI+ Technical™ Certifications</h2>
          <div class="partners-desc-area mb-5" data-aos="fade-up" data-aos-duration="1000">
          </div>
          <div class="row">
            <?php echo do_shortcode('[courses_by_category category="ai-technical"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
   
<section class="cmn-section pt-0 esteemed-partners-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="esteemed-partners-cnt">
          <h2 class="cmn-hd mb-4" data-aos="fade-up" data-aos-duration="1000">Blockchain+ Professional™ Certification</h2>
          <div class="partners-desc-area mb-5" data-aos="fade-up" data-aos-duration="1000">
          </div>
          <div class="row">
            <?php echo do_shortcode('[courses_by_category category="blockchain-professional"]'); ?>  
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cmn-section pt-0 esteemed-partners-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="esteemed-partners-cnt">
          <h2 class="cmn-hd mb-4" data-aos="fade-up" data-aos-duration="1000">Blockchain+ Technical™ Certifications</h2>
          <div class="partners-desc-area mb-5" data-aos="fade-up" data-aos-duration="1000">
          </div>
          <div class="row">
            <?php echo do_shortcode('[courses_by_category category="blockchain-technical"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
</div>

<?php
get_footer();
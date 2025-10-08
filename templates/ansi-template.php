<?php
/*
* Template Name: ComplianceTemplate
*/
get_header();
global $post;
$defaults1 = array('orderby' => 'date','order' => 'DESC','post_type'=> 'compliences','tax_query' => array(
		array(
			'taxonomy' => 'complience-category',
			'field'    => 'slug',
			'terms'    => 'ansi'
		)
	)); 		 			
$compliances = get_posts($defaults1);	
?>
    <!-- <div class="middle-section">
        <div class="inner-page pt-5">
      <section class="cert-spec-section pb-2 d-flex justify-content-center align-items-center">

      <div class="container">

            <div class="row">

              <div class="col-lg-12">

                  <h1 class="cmn-hd" data-aos="fade-up" data-aos-duration="1000"><?php //echo get_the_title(); ?></h1>

                </div>

                </div>

         </div>

     </section>
     
     <section class="cmn-section certification-section pt-3">
     		<div class="container">
         		<div class="row">
            	<div class="col-lg-12">
                	<div class="certification-cnt text-center">
                    <?php //echo get_the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
     </section> -->
    
    <div class="middle-section">
        <div class="inner-page certification-page"> 
     <section class="cmn-section ourstory-section ansi-compliance listing-pages mb-2 pb-lg-3">
     		<div class="container maxwidth">
			<h1 class="mb-2 mb-xl-5">Accreditation</h1>
				<?php if(!empty($compliances)) { ?>
				<?php foreach($compliances as $comp) { ?>
				<?php $featured_img_url = get_the_post_thumbnail_url($comp->ID,'full'); ?>
				<?php //$register_here = get_post_meta( $comp->ID, 'register_here', true);?>
         		<div class="row">
            	<div class="col-md-6">
                	<div class="training-partner-img" data-aos="fade-up" data-aos-duration="1000">
                        <img alt="" src="<?php echo $featured_img_url;?>">
                    </div>
                </div>
                <div class="col-md-6">
                	<div class="training-partner-desc" data-aos="fade-down" data-aos-duration="1000">
                    <label>ACCREDITATION</label>
                    <h2><?php echo $comp->post_title;?></h2>
                    <?php echo $comp->post_content;?>	
                    </div>
                </div>
            </div>
				<?php } ?>
            <?php } ?>
        </div>
     </section>
 </div>
</div>
      
<?php
get_footer();
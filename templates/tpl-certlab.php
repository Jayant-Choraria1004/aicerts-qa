<?php /* Template Name: Template CertLab 
  */
get_header();
$aicertslabwhite = get_field('aicertslab_white');
$aicertslabblack = get_field('aicertslab_black');
?>

<div class="middle-section">
    <div class="inner-page blog-bg">
<section class="cert-spec-section d-flex justify-content-center align-items-center">
      <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <!-- <h1 class="cmn-hd aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000"><?php echo get_the_title(); ?></h1> -->
        <h1 class="cmn-hd aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
          <div class="brand_logo mx-auto">
          <?php if( $aicertslabwhite ): ?>
              <img class="white_theme_hide" src="<?php echo $aicertslabwhite;?>" alt="<?php echo $aicertslabwhite;?>"/>
          <?php endif;?>   
          <?php if( $aicertslabblack ): ?>
              <img class="black_theme_hide" src="<?php echo $aicertslabblack;?>" alt="<?php echo $aicertslabblack;?>"/>
          <?php endif;?>   
        </div>
        </h1>
      </div>
    </div>
  </div>
</section>

<section class="certs_lab-logos-text pt-5 pb-5">
  <div class="container">
     <?php if( have_rows('certs_lab_logos_text') ): ?> 
       <?php while( have_rows('certs_lab_logos_text') ): the_row(); 
                  $certslablogo = get_sub_field('certs_lab_logo');
                  $certslablogoblack = get_sub_field('certs_lab_logo_black');
                  $certslabheading = get_sub_field('certs_lab_heading');
                  $certslabcontent = get_sub_field('certs_lab_content');
                  $certslabbtntext = get_sub_field('certs_lab_btn_text');
                  $certslabbtnlink = get_sub_field('certs_lab_btn_link');
                  ?> 
            <div class="row justify-content-center align-items-center text-center mb-5">              
              <div class="col-12 col-md-6 col-lg-6 mb-4">
                  <div class="certs_lab-logo helo">
                     <?php if( $certslablogo ): ?>
                     <img class="white_theme_hide" src="<?php echo $certslablogo;?>" alt="<?php echo $certslablogo;?>"/>
                      <?php endif;?>   
                      <?php if( $certslablogoblack ): ?>
                     <img class="black_theme_hide" src="<?php echo $certslablogoblack;?>" alt="<?php echo $certslablogoblack;?>"/>
                      <?php endif;?>                   
                  </div>            
               </div>
               <div class="col-12 col-md-6 col-lg-6 mb-5">
                 <div class="certs_lab-text">
                  <?php if( $certslabheading ): ?>
                     <h2><?php echo $certslabheading;?></h2>
                  <?php endif;?>
                   <?php if( $certslabcontent ): ?>
                  <p><?php echo $certslabcontent;?></p>
                   <?php endif;?>
                   <?php if( $certslabbtnlink ): ?>
                  <a href="<?php echo $certslabbtnlink;?>" class="btn btn-primary" target="_blank"><?php echo $certslabbtntext;?></a>
                   <?php endif;?>
                </div>
               </div>
              
            </div>
             <?php endwhile; ?> 
            <?php endif; ?>
  </div>
</section><!--#certs_lab-logos-text-->
</div>
</div>

<!--Footer-->
<?php
// get_sidebar();
get_footer();
?>
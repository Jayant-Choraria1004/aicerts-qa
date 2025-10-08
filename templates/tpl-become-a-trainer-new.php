<?php /* Template Name: Template New Become A Trainer */
 get_header();
 ?>
<div class="middle-section">
  <div class="inner-page certification-page pt-5">
    <section class="cert-spec-section pb-1 text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common-cnt aos-init aos-animate">
                        <h1 class="cmn-hd" data-aos="fade-up" data-aos-duration="1000"><?php echo get_the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cmn-section">
        <div class="container max-medium-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="gravity-page_form">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>
</div>
<style>
.page-template-tpl-become-a-trainer-new .ftr-social { margin-top: 20px; }
</style>
 
 
<!--Footer-->
<?php
  // get_sidebar();
  get_footer(); 
?>
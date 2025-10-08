<?php
/*
* Template Name: Train and Certify Template
*/

get_header(); 
?>

  <div class="middle-section">
     <div class="inner-page blog-bg">
         <section class="cert-spec-section listing-pages TrainandCertify">
           <div class="container">
              <h1><?php echo get_the_title() ?></h1>
              <div class="row">
                 <?php the_content(); ?>    
              </div>
           </div>
       </section>
     </div>
  </div>
<?php /*
<script>
jQuery(document).ready(function($) {
    // Move the required fields legend before the submit button
    $('.gform_footer').after($('.gform_heading'));
    $('.gform_heading').css("margin-top", "10px");
    $('.gform_heading').css("font-size", "12px");
});
</script>
*/ ?>
<?php
get_footer();
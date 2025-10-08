<?php
/*
*    Template Name: CertificatesListing
*/	
get_header();
?>

<!--Header End-->
<div class="middle-section">
   <div class="inner-page certification-page">
       <section class="cert-spec-section listing-pages">
         <div class="container">
            <h1><?php echo get_the_title(); ?></h1>
            <div class="row">
               <?php the_content(); ?>              
            </div>
         </div>
     </section><!--#CaseStudies-->
   </div>
</div>
<!--Footer-->

<?php
get_footer();
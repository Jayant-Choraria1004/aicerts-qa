<?php
/**
 * The template for displaying all pages
 *
 */

 get_header();
 global $post;
 ?>
 <section class="midd-inner-banner authorized-partners-banner d-flex justify-content-center align-items-center">
     <div class="container">
         <div class="row">
         <div class="col-lg-12">
             <h1 class="cmn-hd" data-aos="fade-up" data-aos-duration="1000"><?php echo get_the_title(); ?></h1>
             </div>
         </div>
     </div>
 </section>
 <section class="cmn-section">
 <div class="container">
   <div class="row">
     <?php the_content(); ?>
   </div>
 </div>
 </section>
 <?php
 get_footer();
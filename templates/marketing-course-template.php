<?php
/* Template Name: Marketing Main Template 
  */

 get_header();
 global $post;
 ?>
 <section class="cmn-section">
 <div class="container">
   <div class="row">
     <?php the_content(); ?>
   </div>
 </div>
 </section>
 <?php
 get_footer();
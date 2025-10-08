<?php
/*
 *    Template Name: blockchain-hackathon-register
 */
get_header();

$event_user_instructions = get_field('event_user_instructions', 24822);
if(!$event_user_instructions){
  $event_user_instructions = get_field('event_user_instructions', 24904);
}
?>
<div class="middle-section">  
    <section class="common-section hackathon-register">
      <div class="container">        
      <h2 class="mb-4">Register Now</h2>
        <div class="row g-4">   
          <div class="col-lg-12 col-md-12 hackathonlisting mb-4">
              <hr>
              <?php 
              if($event_user_instructions && !empty($event_user_instructions['section_description'])) : 
                echo $event_user_instructions['section_description']; 
              endif;
              ?>
              <hr>
          </div>
        </div>
        
        <div class="row">          
          <div class="col-lg-12 col-md-12">                           
            <div>
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
    </section>

<script>
  jQuery(document).ready(function(){
    jQuery(".large iti__tel-input").css("padding-left", "40px"); 
  });
</script> 




<?php
get_footer();
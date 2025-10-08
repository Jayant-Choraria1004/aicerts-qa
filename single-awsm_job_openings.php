<?php
get_header();
?>
<section class="midd-inner-banner career-banner d-flex justify-content-center align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="cmn-hd" data-aos="fade-up" data-aos-duration="1000">
          <?php echo get_the_title(); ?>
        </h1>
      </div>
    </div>
  </div>
</section>
<section class="cmn-section">
 <div class="container">
  <div class="row">
    <?php if ( ! is_awsm_job_expired( false ) ) : ?>

      <div class="awsm-job-content col-md-7">
        <?php //include get_awsm_jobs_template_path( 'main', 'single-job' ); ?>
         <?php if(!empty(get_field('role_overview', $post->ID))) { ?>
         <h6>Role Overview:</h6>
        <p>
          <?php echo get_field('role_overview', $post->ID); ?>
        </p>
        <?php } ?>
        <?php if(!empty(get_field('responsibilities', $post->ID))) { ?>
        <h6>Responsibilities:</h6>
        <p>
          <?php echo get_field('responsibilities', $post->ID); ?>
        </p>
        <?php } ?>
        <?php if(!empty(get_field('qualifications', $post->ID))) { ?>
        <h6>Qualifications:</h6>
        <p>
          <?php echo get_field('qualifications', $post->ID); ?>
        </p>
        <?php } ?>
         
      </div><!-- .awsm-job-content -->

      <div class="awsm-job-form col-md-5">
        <?php
        if ( ! is_awsm_job_expired() ) {
          /**
           * awsm_application_form_init hook
           *
           * Initialize job application form
           *
           * @hooked AWSM_Job_Openings_Form::application_form()
           *
           * @since 1.0
           */
          do_action( 'awsm_application_form_init' );
        } else {
          awsm_jobs_expired_msg( '<div class="awsm-job-form-inner">', '</div>' );
        }
        ?>
      </div><!-- .awsm-job-form -->

      <?php else : ?>
      <div class="awsm-expired-message">
        <?php awsm_jobs_expired_msg( '<p>', '</p>' ); ?>
      </div><!-- .awsm-expired-message -->
    <?php endif; ?>

  </div>
 </div>
</section>
<script>
  jQuery(document).ready(function(){
    jQuery('#awsm-application-form').attr("hs-do-not-collect", true); 
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Replace '#formID' with the actual form identifier
    var form = document.querySelector('#awsm-application-form');

    if (form) {
        // Remove or change attributes that HubSpot may use
        // form.removeAttribute('id');
        // form.removeAttribute('name');
        // form.classList.remove('hs-form');
        
        // You can also add an arbitrary class or id to track the form separately if needed
        form.classList.add('non-hubspot-form');
    }
});
</script>
<?php
get_footer();
?>
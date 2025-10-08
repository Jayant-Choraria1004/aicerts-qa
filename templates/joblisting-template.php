<?php
/*
 *    Template Name: JobListingTemplate
 */
get_header();
$why_join_thumb = get_field("why_join_thumb");
$why_join = get_field("why_join");
$why_join_bullets = get_field("why_join_bullets");
$why_join_para_2 = get_field("why_join_para_2");
$testimonials = get_field("testimonials");
$culture_and_values = get_field("culture_and_values");
$job_department_objects = get_terms([
  'taxonomy' => 'job-department',
  'hide_empty' => false
]);
$get_in_touch_form = get_field('get_in_touch_form');


$default1 = array('orderby' => 'date', 'order' => 'DESC', 'post_type' => 'awsm_job_openings', 'posts_per_page' => 20);

?>
<section class="no_overlay-header">
  <div class="container-full">
    <div class="simple_banner-overlay">
      <img src="<?php echo get_template_directory_uri(); ?>/images/career-banner.jpg">
    </div>
  </div>
</section>
<!-- <section class="cert-spec-section pb-2 d-flex justify-content-center align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="cmn-hd" data-aos="fade-up" data-aos-duration="1000">
          <?php echo get_the_title(); ?>
        </h1>
      </div>
    </div>
  </div>
</section> -->

<section class="career-sec1">
  <div class="container maxwidth">
    <div class="WhyJoin-card">
      <div class="WhyJoin-ovelay">
      <div class="row justify-content-center">
        <!--<div class="col-lg-6">
          <div class="pe-lg-5 mb-5 position-relative">
            <img src="<?php echo $why_join_thumb; ?>" class="w-100">
            <div class="yearsexp position-absolute d-none">
              <div class="iocnleft"><img src="<?php echo get_template_directory_uri(); ?>/images/customer-review 1.svg">
              </div>
              <div class="years-cnt"><span>10+</span>Years of Experience</div>
            </div>
          </div>
        </div>-->

        <div class="col-lg-12">
          <div class="text-center">
            <h1 class="cmn-hd mb-4">Why Join AI CERTs?</h1>
            <?php echo $why_join; ?>
            <div class="whyjoin-grids">
              <div class="row gy-4 gy-lg-0">
                <?php foreach($why_join_bullets as $bullet) : ?>
                <div class="col-lg-3 col-md-6 mb-4">
                  <div class="iconwithtext">
                    <div class="iconbox">
                      <img src="<?php echo $bullet['why_join_bullet_icon'];?>">
                    </div>
                    <div><?php echo $bullet['bullet_label']; ?></div>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
            <?php echo $why_join_para_2; ?>
            <a href="#joblisting" class="btn btn-primary">Apply Now</a>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>

<a id="joblisting"></a>
<section class="job-listing-section" data-aos="fade-up" data-aos-duration="1000">
  <div class="container career-tabs maxwidth">
    <div class="joblisting-head">
      <h2 class="cmn-hd mb-4">Jobs</h2>
      <div class="half-divider"></div>
      <?php /* <div class="awsm-filter-wrap"><form action="<?php echo site_url(); ?>/wp-admin/admin-ajax.php" method="POST"><div class="awsm-filter-item-search"><div class="awsm-filter-item-search-in"><label for="awsm-jq-1" class="awsm-sr-only">Search</label><input type="text" id="awsm-jq-1" name="jq" value="" placeholder="Search" class="awsm-job-search awsm-job-form-control"><span class="awsm-job-search-btn awsm-job-search-icon-wrapper"><i class="awsm-job-icon-search"></i></span><span class="awsm-job-search-close-btn awsm-job-search-icon-wrapper awsm-job-hide"><i class="awsm-job-icon-close-circle"></i></span></div></div><input type="hidden" name="action" value="jobfilter"></form></div> */ ?>
    </div>
    <ul class="nav nav-tabs" id="myTab">

      <?php $index = 0;
      foreach ($job_department_objects as $job_department_object):
        ?>
        <li class="nav-item">
          <?php if ($index === 0) { ?>
            <button class="nav-link btn active" data-bs-toggle="tab"
              data-bs-target="#term-<?php echo $job_department_object->term_id; ?>" type="button">
              <?php echo $job_department_object->name; ?>
            </button>
          <?php } else { ?>
            <button class="nav-link btn" data-bs-toggle="tab"
              data-bs-target="#term-<?php echo $job_department_object->term_id; ?>" type="button">
              <?php echo $job_department_object->name; ?>
            </button>
          <?php } ?>
        </li>
        <?php
        $index++;
      endforeach; ?>
    </ul>
    <div class="tab-content" id="myTabContent">
      <?php $index = 0;
      foreach ($job_department_objects as $job_department_object): ?>
        <?php if ($index === 0) { ?>
        <div class="tab-pane fade show active" id="term-<?php echo $job_department_object->term_id; ?>">
        <?php } else { ?>
        <div class="tab-pane fade" id="term-<?php echo $job_department_object->term_id; ?>">
        <?php } ?>

        <?php
        $term_id = $job_department_object->term_id;

        $defaults = array(
          'orderby' => 'date',
          'order' => 'DESC',
          'post_type' => 'awsm_job_openings',
          'posts_per_page' => 20,
          'meta_query' => array(
            array(
              'key' => 'job_department',
              'value' => $term_id,
              'compare' => 'LIKE',
            )
          )
        );
        $jobposts = get_posts($defaults);

        // global $wpdb;
        // echo "<pre>";
        // print_r($wpdb->queries);
        // echo "</pre>";
        
        foreach ($jobposts as $post): ?>

            <div class="course-modules-box accordion" id="regularAccordionRobots">
              <div class="accordion-item">
                <div class="accordion-header">
                  <h3>
                    <span>
                      <?php echo $post->post_title; ?>
                    </span>
                  </h3>
                  <div class="remote-icon">
                    <img class="career-ic" alt=""
                      src="<?php echo get_template_directory_uri(); ?>/images/maps-and-flags-new.svg" width="38">
                    <span>Remote</span>
                  </div>
                  
                 
                 
                </div>

                <div class="job_overview">
                  <?php if(!empty(get_field('responsibilities', $post->ID))) : ?>
                    <!-- <h6>Role Overview:</h6> -->
                    <p>
                      <?php echo get_field('role_overview', $post->ID); ?>
                    </p>
                    <?php endif; ?>
                  </div>

                <div id="job<?php echo $post->ID; ?>" class="accordion-collapse collapse">

                  <div class="accordion-body">
                   
                    <?php if(!empty(get_field('responsibilities', $post->ID))) : ?>
                    <h4>Responsibilities:</h4>
                    <p>
                      <?php echo get_field('responsibilities', $post->ID); ?>
                    </p>
                    <?php endif; ?>
                    <?php if(!empty(get_field('qualifications', $post->ID))) : ?>
                    <h4>Qualifications:</h4>
                    <p>
                      <?php echo get_field('qualifications', $post->ID); ?>
                    </p>
                    <?php endif; ?>
                  </div>
                </div>
                <a href="<?php echo get_the_permalink(); ?>" class="btn btn-primary ms-3">Apply Now</a>
                <button class="underline-link collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#job<?php echo $post->ID; ?>" aria-expanded="false">
                    <span class="see_d">see details</span>
                    <span class="see_l">see Less</span>
                  </button>
                 

              </div>
            </div>
          <?php endforeach; ?>
          </div>
        <?php $index++; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="cmn-section">
  <div class="container maxwidth">
    <h2 class="cmn-hd text-start mb-4">Our Core Values</h2>
    <div class="row gx-5 gy-4">
      <?php foreach($culture_and_values as $cv) :  ?>
      <div class="col-lg-4 text-center">
        <div class="values-card h-100">
            <div class="values-img">
              <img src="<?php echo $cv['thumb']; ?>" width="100%" alt="Values" />
            </div>
            <div class="values-content px-3">
              <h3 class="mt-3 fw-bolder primary_color"><?php echo $cv['title']; ?></h3>
              <p class="white_text"><?php echo $cv['details']; ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="cmn-section careers-testimonial testimonial-section tm-light  testimonial_employee pt-0">
  <div class="container maxwidth">
    <h2 class="cmn-hd text-start mb-4">Hear from Our Employees</h2>
    <div class="row">
      <div class="col-md-12">
        <div class="owl-carousel client-testimonial-carousel mt-0">
        
          <?php foreach($testimonials as $testimonial): ?>  
            <div class="single-testimonial-item">
              <div class="card card-tm">
                <div class="tm-user">
                  <div class="userimg">
                    <img src="<?php echo $testimonial['employee_photo']; ?>" width="200" height="200" alt="" />
                  </div>
                  <h3><?php echo $testimonial['employee_name']; ?> <span><?php echo $testimonial['job_role']; ?></span></h3>
                </div>
                <div class="testimonial-description">
                  <p><?php echo $testimonial['description']; ?></p>
                  <?php //if(!empty($testimonial['rating']) && $testimonial['rating'] > 0) echo renderStarRating($testimonial['rating']); ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          
        </div>
      </div>
    </div>
  </div>
</section>


<section class="cmn-section getintouch-bg lightform">
	<div class="container maxwidth">
		<h2 class="cmn-hd text-start text-dark mb-3 mb-xl-5">Get In Touch With Us</h2>
		<div class="row">
			<div class="col-lg-6">
      <?php echo do_shortcode($get_in_touch_form); ?>
			</div>
		</div>
	</div>
</section>

<script>
jQuery(document).ready(function(){
  jQuery(".owl-carousel").owlCarousel({
      loop: true,
      margin: 30,
      autoplay:true,
      autoplayTimeout:5000,
      autoplayHoverPause:true,
      dots: true,
      nav: false,
      items: 1,
      responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            1000:{
                items:3,
            }
        }                         
    });
  });
</script>
<?php
get_footer();
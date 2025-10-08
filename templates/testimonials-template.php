<?php
/*
 *    Template Name: TestmonialsTemplate
 */
get_header();

$testimonials = get_field("testimonials");

?>
<div class="middle-section">
  <div class="inner-page blog-bg">
  <section class="cert-spec-section d-flex justify-content-center align-items-center pb-0">
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

<section class="cmn-section testimonial-page testimonial-section tm-light pt-5">
  <div class="container">
    <h2 class="text-white text-center sub_text">Hear it from the Learners</h2>
    <div class="row">
      <div class="col-md-12">
        <div class="owl-carousel client-testimonial-carousel">
        
          <?php foreach($testimonials as $testimonial): ?>  
            <div class="single-testimonial-item">
              <div class="card card-tm">
                <p><?php echo $testimonial['description']; ?></p>
                
              </div>
              <div class="tm-user">
                <div class="userimg"><img src="<?php echo $testimonial['employee_photo']; ?>" width="200"
                    height="200" alt="" /></div>
                <div class="user_info">    
                  <div class="user_flex">
                    <h3> <?php echo $testimonial['employee_name']; ?></h3>
                  </div>
                   <div class="user_flex user-post">
                     <span><?php echo $testimonial['job_role']; ?></span>
                     <span><?php echo $testimonial['employee_company']; ?></span>
                   </div>                  
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$args = array(
    'post_type'      => 'customer-testimonial',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC',
    'tax_query'      => array(
        array(
            'taxonomy' => 'testimonial-category',    // Custom taxonomy
            'field'    => 'slug',                    // Search by slug
            'terms'    => array('learner-testimonials','global-testimonials') // Terms to match
        ),
    ),
);

  $testimonials = new WP_Query($args);
  if ($testimonials->have_posts()) :
  $courseid = [];
  $i = 1; while ($testimonials->have_posts()) : $testimonials->the_post();
    //echo get_field('certification').$i."<br>";
    $testimonial_id = get_the_id();
    $certification = get_field('certification');
    $course = get_field('course_taken_by_student');
    //echo $course->ID;
    if(!empty($certification)) {
      $courseid[] = [
        'testimonial_id' => $testimonial_id,
        'course_id' => $course->ID,
        'certification' => $certification
      ];
    }
  $i++; endwhile;
  endif;
  //  echo "<pre>";
  //  print_r($courseid);
?>

</div>
</div>

<?php
$industry_type = get_category_by_slug('role-base-category');
$explore_solutions_heading = get_field('explore_solutions_heading');
if (!$industry_type) {
    echo 'No such category found.';
    return;
}
$industry_type_id = $industry_type->term_id;

$subcategories = get_categories(array(
    'parent' => $industry_type_id,
    'child_of' => $industry_type_id,
    'hide_empty' => 0, // Include empty categories if needed
));



$main_tabs = [];
$sub_tabs = [];

foreach ($subcategories as $subcategory) {
    $main_tabs[] = $subcategory->name;

    $terms = get_field('home_category_order');
    if( $terms['categories_order'] ){ 
      foreach( $terms['categories_order'] as $term ){
        $sub_tabs_order[] = $term->term_id;
      }
    }
    $sub_subcategories = get_categories(array(
        'child_of' => $subcategory->term_id,
        'hide_empty' => 0,
        'orderby' => 'include',
        'include' => $sub_tabs_order
    ));
    foreach ($sub_subcategories as $sub_subcategory) {
        $args = array(
            'post_type' => 'customer-testimonial',
            'posts_per_page' => -1,
            'meta_query'     => array(
                array(
                    'key'     => 'course_taken_by_student',   // ACF field key
                    'value'   => '',                // Leave value empty to check if field has any value
                    'compare' => '!=',              // Fetch posts where 'certification' is not empty
                ),
            ),
        );
        $posts = get_posts($args);
        //echo "<pre>";
        //print_r($posts);
        $badges = [];
        $total_countslider = 0;
        foreach ($posts as $post) {
            $certificate_slider = get_field('certification', $post->ID); // Fetch the field once
            $view_post_link = get_field('view_post_link', $post->ID); // Fetch the field once
            $course_taken_by_student = get_field('course_taken_by_student', $post->ID); // Fetch the field once
            
            $category1 = get_the_category($course_taken_by_student->ID);
            $category_ids = wp_list_pluck($category1, 'term_id');

            if (in_array($sub_subcategory->term_id, $category_ids)) {
                //echo "Post ID {$post_id} belongs to the category '{$cat_slug}'.<br>";
                $catid = $sub_subcategory->term_id;
                if( !empty($certificate_slider) && !empty($course_taken_by_student) && ($course_taken_by_student != '') ) {
                  $badges[] = [
                    'name' => get_the_title($post->ID),
                    'certificateslider' => $certificate_slider,
                    'course' => $course_taken_by_student->ID,
                    'category' => $catid,
                    'category1' => $category_ids,
                    'view_post_link' => $view_post_link
                  ];
                }
            }
        }
        if( !empty($badges) ) {
          $sub_tabs[$subcategory->name][$sub_subcategory->slug] = [
              'title' => $sub_subcategory->name,
              'cateid' => $sub_subcategory->term_id,
              'badges' => $badges,
              'courseimg' => get_field('course_category_image', $sub_subcategory),
              'totalcountslider' => count($badges)
              
          ];
        }
    }
}
   //echo "<pre>";
  //print_r ($sub_tabs);

?>

<section class="share-exp-section tmlinkedin h2_popular_certifications">
    <div class="container">
        <h2 class="mb-4"> <h2 class="mb-4">Trusted LinkedIn Reviews Posted by <span>Our Learners</span> </h2></h2>
        <ul class="nav nav-tabs h2_tabs h2__maintabs" id="main_tabs" role="tablist">
            <?php foreach ($main_tabs as $index => $main_tab): ?>
                <li class="nav-item" role="presentation">
                    <button class="nav-link <?= $index === 0 ? 'active' : '' ?>" id="main_tab_<?= $index ?>" data-bs-toggle="tab" data-bs-target="#main_tab_<?= $index ?>-pane" type="button" role="tab" aria-controls="main_tab_<?= $index ?>-pane" aria-selected="<?= $index === 0 ? 'true' : 'false' ?>"><?= $main_tab ?></button>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="tab-content sub_tabs" id="main_tabsContent">
            <?php foreach ($main_tabs as $main_index => $main_tab): ?>
                <div class="tab-pane fade <?= $main_index === 0 ? 'show active' : '' ?>" id="main_tab_<?= $main_index ?>-pane" role="tabpanel" aria-labelledby="main_tab_<?= $main_index ?>" tabindex="0">
                    <ul class="nav nav-tabs h2_tabs" id="popular_certifications_<?= str_replace(' ', '_', $main_tab) ?>Tab" role="tablist">
                        <?php foreach ($sub_tabs[$main_tab] as $sub_index => $sub_tab): ?>
                            
                            <li class="nav-item" role="presentation">
                                <button class="nav-link <?= $sub_index === array_key_first($sub_tabs[$main_tab]) ? 'active' : '' ?>" id="sub_tab_<?= $main_index ?>_<?= $sub_index ?>" data-bs-toggle="tab" data-bs-target="#sub_tab_<?= $main_index ?>_<?= $sub_index ?>-pane" type="button" role="tab" aria-controls="sub_tab_<?= $main_index ?>_<?= $sub_index ?>-pane" aria-selected="<?= $sub_index === array_key_first($sub_tabs[$main_tab]) ? 'true' : 'false' ?>"><?= $sub_tab['title'] ?></button>
                            </li>
                            
                        <?php endforeach; ?>
                    </ul>
                    <div class="tab-content popular_certifications_content" id="popular_certifications_<?= str_replace(' ', '_', $main_tab) ?>TabContent">
                        <?php foreach ($sub_tabs[$main_tab] as $sub_index => $sub_tab): ?>
                            <div class="tab-pane fade <?= $sub_index === array_key_first($sub_tabs[$main_tab]) ? 'show active' : '' ?>" id="sub_tab_<?= $main_index ?>_<?= $sub_index ?>-pane" role="tabpanel" aria-labelledby="sub_tab_<?= $main_index ?>_<?= $sub_index ?>" tabindex="0">
                                <div class="accordion-item course_accordian" id="course_accordian_<?= $main_index ?>_<?= $sub_index ?>">
                                    <h2 class="accordion-header" id="acc_course_heading_<?= $main_index ?>_<?= $sub_index ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc_course_collapse_<?= $main_index ?>_<?= $sub_index ?>" aria-expanded="true" aria-controls="acc_course_collapse_<?= $main_index ?>_<?= $sub_index ?>">
                                            <div class="course_btn_wrap">
                                                <div class="course_img">
                                                    <?php if($sub_tab['courseimg']) { ?>
                                                    <img src="<?= $sub_tab['courseimg'] ?>" alt="">
                                                    <?php } else { ?>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/images/course-thumb.jpg" alt="">
                                                    <?php } ?>
                                                </div>
                                                <div class="course_title">
                                                    <h6><?= $sub_tab['title'] ?></h6>
                                                    <p><?= $sub_tab['totalcountslider'] ?> certifications</p>
                                                </div>
                                                </a>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="acc_course_collapse_<?= $main_index ?>_<?= $sub_index ?>" class="accordion-collapse collapse" aria-labelledby="acc_course_heading_<?= $main_index ?>_<?= $sub_index ?>" data-bs-parent="#course_accordian_<?= $main_index ?>_<?= $sub_index ?>">
                                        <div class="mt-md-3 mt-3 cmn-sliderdots offsetarrow">
                                            <div class="owl-carousel owl-theme">
                                                <?php foreach ($sub_tab['badges'] as $badge): ?>
                                                  
                                                  <div class="item">
                                                      <div class="tmpostcard">
                                                          <!-- <div class="tmpost-image"> <img class="" alt="" src="<?php //echo $badgeslider['certificate_image']; ?>"> </div> -->
                                                          <div class="tmpost-image"> <?php echo $badge['certificateslider']; ?></div>
                                                          <div class="mt-3 post-link text-center"> <a href="<?php echo $badge['view_post_link']; ?>">View Post</a> </div>
                                                      </div>
                                                  </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>



<script>
jQuery(document).ready(function(){
  jQuery(".owl-carousel").owlCarousel({
      loop: false,
      margin: 30,
      autoplay:true,
      autoplayTimeout:5000,
      autoplayHoverPause:true,
      dots: true,
      nav: true,
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
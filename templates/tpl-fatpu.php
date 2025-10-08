<?php 
/* 
   Template Name: Template FATP Update
*/
get_header();
$paged = isset($_POST['page']) ? $_POST['page'] : 1;
$args = array(
   'post_type' => 'partner',
   'posts_per_page' => 10,
   'paged'          => $paged,
); 
$partners = get_posts($args);
$form_shortcode = get_field('form_shortcode',3530);

$all_partners_args = array(
   'post_type'      => 'partner',
   'posts_per_page' => -1 // Get all partners
);
$all_partner_ids = get_posts($all_partners_args);
$banner_heading = get_field('banner_heading');
$banner_content = get_field('banner_content');
$faq_heading = get_field('faq_heading');
$faq_accordion = get_field('faq_accordion');
?>

<section class="Image-with-Text top-header-blank position-relative">
    <div class="img-bg-over-cover">
        <div class="container position-relative">
            <div class="section-heading both-theme-text-colot-white">
              <h1><?php echo $banner_heading; ?></h1>
              <p class="fw-normal text-white"><?php echo $banner_content; ?></p>
            </div>
        </div>
    </div>
</section><!--Image-with-Text-->

<section class="SearchbyPartne mb-5 pb-lg-3">
   <div class="light-primary-bg-color pt-5 pb-5 tb-gray-border">
      <div class="container">
         <div class="sbp-search_bar position-relative">
            <!-- <form role="search" method="get" id="searchform" class="searchform form" action="" data-hs-cf-bound="true">
               <input type="search" name="q" id="q" value="" placeholder="Search by Partner Name, City, Keyword, or Certification..." class="search-field form-control">
               <input type="submit" id="searchsubmit" value="" class="searchbtn">
            </form> -->
            <form id="partner-search-form" class="searchform form">
               <input type="search" name="q" id="partner-search" placeholder="Search by Partner Name, City, Keyword, or Certification..." class="search-field form-control">
               <button type="submit" id="searchsubmit" class="searchbtn"></button>
            </form>
         </div>
         <div class="search-select mt-5">
            <form id="filter-form">
               <div class="row g-4">
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="select-option">
                        <label class="form-label" for="">Certification</label>
                        <select name="certification" id="certification" class="large gfield_select">
                           <option value="">Select Certification</option>
                           <!-- <option value="">Select</option>
                           <option value="Certification1">Certification1</option>
                           <option value="Certification2">Certification2</option> -->
                           <?php
                           $courseargs = array(
                              'post_type'      => 'courses', // Change to your actual post type
                              'posts_per_page' => -1, // Fetch all courses
                              'orderby'        => 'title',
                              'order'          => 'ASC'
                           );
                           $courses = get_posts($courseargs);
                           if (!empty($courses)) {
                              foreach ($courses as $course) {
                                 echo '<option value="' . $course->ID . '">' . esc_html($course->post_title) . '</option>';
                              }
                           }
                           ?>
                        </select>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="select-option">
                        <label class="form-label" for="">Partner Type</label>
                        <select name="partner_type" id="partner_type" class="large gfield_select">
                           <option value="">Select Partner Type</option>
                           <?php
                           $excluded_term_name = 'Content Partners';
                           $partner_types = get_terms([
                              'taxonomy'   => 'partnercategories',
                              'hide_empty' => true, // Show even empty categories
                           ]);

                           if (!empty($partner_types) && !is_wp_error($partner_types)) {
                              foreach ($partner_types as $partner_type) {
                                 if ($partner_type->name === $excluded_term_name) {
                                    continue; // Skip this term
                                 }
                                 echo '<option value="' . esc_attr($partner_type->term_id) . '">' . esc_html($partner_type->name) . '</option>';
                              }
                           }
                           ?>
                        </select>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="select-option">
                        <label class="form-label" for="">Country</label>
                        <select name="country" id="country" class="large gfield_select">
                           <option value="">Select Country</option>
                           <?php
                              $acf_field = acf_get_field('locations');
                              if (!empty($acf_field) && isset($acf_field['choices'])) {
                                 $choices = $acf_field['choices']; // Get value => label mapping
                              } else {
                                 $choices = []; // Fallback
                              }

                           foreach($choices as $key=>$value) : ?>
                              <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                           <?php endforeach; ?>
                           <!-- <option value="Virtual">Virtual</option>
                           <option value="USA">USA</option>
                           <option value="UK">UK</option> -->
                        </select>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="select-option">
                        <label class="form-label" for="">Language</label>
                        <select name="language" id="language" class="large gfield_select">
                           <option value="">Select Language</option>
                           <?php
                              $language_field = acf_get_field('language');
                              if (!empty($language_field) && isset($language_field['choices'])) {
                                 $choices = $language_field['choices']; // Get value => label mapping
                              } else {
                                 $choices = []; // Fallback
                              }
                           foreach($choices as $key1=>$value1) : ?>
                              <option value="<?php echo $key1; ?>"><?php echo $value1; ?></option>
                           <?php endforeach; ?>
                           <!-- <option value="English">English</option>
                           <option value="French">French</option> -->
                        </select>
                     </div>
                  </div>
                  <div class="col-12 text-center mt-4">
                     <div class="form-cta">
                        <!-- <a href="" class="btn btn-primary">Search</a>
                        <a href="" class="btn btn-primary-outline"> 
                           <span class="reset-icon"> <img src="<?php echo esc_url(get_template_directory_uri()."/images/reset.svg"); ?>" alt="Reset"/></span> Reset</a> -->
                        <button type="submit" class="btn btn-primary" id="filter-search">Search</button>
                        <button type="reset" class="btn btn-primary-outline" id="reset-filters">
							Reset
                        </button>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</section><!--Search by Partne--> 


<section class="PartnerList mb-5 pb-lg-3">
   <div class="container">
   <div id="partner-container">
      <div class="accordion" id="partner-accordion">
         <?php $wp_query = new WP_Query($args); 
            $total_pages = $wp_query->max_num_pages;
         ?>
         <?php $count = 1; if ($wp_query->have_posts()) : ?>
            <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>  
            <?php 
               $locations = get_field('locations');
               $about_partner = get_field('about_partner');
               $select_certificate = get_field('select_certificate');
               $partner_levels = get_the_terms(get_the_ID(), 'partner-level');
               $partner_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
               $location_str = '--';
               $visit_url = get_field('visit_url');
               if(!empty($locations))
               {
                  $location_str = implode(", ", $locations);
               }
            ?>       
               <div class="accordion-item">
                     <h2 class="accordion-header d-flex align-items-center justify-content-between flex-wrap gap-3" id="partner_heading<?php echo $count; ?>">
                        <div class="Partner-logo_name  d-flex align-items-center gap-4">
                        <?php if($partner_image): ?>
                              <img src="<?php echo $partner_image; ?>" alt="Partner-logo"/>                              
                           <?php else: ?>
                              <img src="<?php echo esc_url(get_template_directory_uri()."/images/pl1.svg"); ?>" alt="Partner-logo"/>
                           <?php endif; ?>
                           <h4 class="mb-0"><?php echo get_the_title(); ?></h4>
                        </div>
                        <div class="Partner-connet d-flex align-items-center gap-2 flex-wrap">
                           <?php 
                           if (!empty($partner_levels) && !is_wp_error($partner_levels)) {
                              foreach ($partner_levels as $level) {
                                 echo '<div class="PartnerPlan fs-6 fw-semibold '.esc_html($level->name).'-Color">'.esc_html($level->name).'</div>'; // Display the category name
                              }
                           } ?>
                           <!-- <a href="#" class="btn btn-primary">Request Training</a> -->
                           <a href ="<?php echo $visit_url; ?>" target="_blank" class="btn btn-primary">View</a>
						   <button type="search"  class="btn btn-primary find-training-provider" data-partnername="<?php echo get_the_title(); ?>" data-partnerlocations="<?php echo $location_str; ?>">Request Training</button>
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#partner_collapse<?php echo $count; ?>" aria-expanded="true" aria-controls="partner_collapse<?php echo $count; ?>">  
                           <img src="<?php echo esc_url(get_template_directory_uri()."/images/acco-arrow.svg"); ?>" alt="acco-arrow"/>
                           </button>
                        </div>
                     </h2>
                     <div id="partner_collapse<?php echo $count; ?>" class="accordion-collapse collapse" aria-labelledby="partner_heading<?php echo $count; ?>" data-bs-parent="#partner-accordion">
                        <div class="accordion-body p-0 pt-3">
                           <?php echo $about_partner; ?>
                           <?php if (!empty($select_certificate)) : ?>
                              <div class="fatp-listing">
                                 <ul>
                                 <?php foreach ($select_certificate as $certification_id) :
                                    // Get course title and image
                                    $course_title = get_the_title($certification_id);
                                    $course_image = get_the_post_thumbnail_url($certification_id, 'full');
                                 ?>
                                    <li><a href="<?php echo get_permalink($certification_id); ?>"><?php echo $course_title; ?></a></li>
                                 <?php endforeach; ?>
                                 </ul>
                              </div>
                           <?php endif; ?>
                        </div>
                     </div>
               </div>
            <?php $count++; endwhile; ?>
         <?php endif; ?>
         <?php wp_reset_postdata(); ?>
      </div>
      <!-- <div class="pl-paginate mt-5">
         <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center gap-2">
               <li class="page-item active"><a class="page-link" href="#">1</a></li>
               <li class="page-item"><a class="page-link" href="#">2</a></li>
               <li class="page-item"><a class="page-link" href="#">3</a></li>
            </ul>
         </nav>
      </div> -->
      <!-- Numbered Pagination -->
      <div id="partner-pagination" class="pagination-container text-center pl-paginate mt-5">
         <?php if ($total_pages > 1) : ?>
            <nav aria-label="Page navigation example"></nav>
            <ul class="pagination justify-content-center gap-2">
                  <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                     <li class="page-item <?php echo ($i == $paged) ? 'active' : ''; ?>">
                        <a href="javascript:void(0);" class="page-link" data-page="<?php echo $i; ?>"><?php echo $i; ?></a>
                     </li>
                  <?php endfor; ?>
            </ul>
            </nav>
         <?php endif; ?>
      </div>
   </div>
</section><!--Partner List--> 
</div>

<?php if($faq_heading): ?>
<section class="h2_faq pt-2">
   <div class="container">
      <h2 class="mb-5 text-center"><?php echo $faq_heading; ?></h2>
      <div class="faq_wrap">
      <?php if( $faq_accordion ): ?> 
         <div class="accordion" id="faq-accordion">
            <?php $faqnumber = 1; 
            foreach( $faq_accordion as $faqs ): 
               $questions = $faqs['faq_question'];
               $answer = $faqs['faq_answer'];
            ?>
            <div class="accordion-item">
               <h2 class="accordion-header" id="faq_heading<?php echo $faqnumber; ?>">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_collapse<?php echo $faqnumber; ?>" aria-expanded="true" aria-controls="faq_collapse<?php echo $faqnumber; ?>"><?php echo $questions;?></button>
               </h2>
               <div id="faq_collapse<?php echo $faqnumber; ?>" class="accordion-collapse collapse" aria-labelledby="faq_heading<?php echo $faqnumber; ?>" data-bs-parent="#faq-accordion">
                  <div class="accordion-body"><?php echo $answer;?></div>
               </div>
            </div>
            <?php $faqnumber++; endforeach; ?>
         </div>
      <?php endif; ?>
      </div>
   </div>
</section> <!--FAQs End-->
<?php endif; ?>
<?php include_once get_template_directory() . "/template-parts/formpopup.php"; ?>
<?php wp_enqueue_script('jquery'); ?>
<script>
jQuery(document).ready(function(){
   jQuery(".find-training-provider").click(function(){
      if(jQuery("#gform_13").length)
      {
            jQuery("#input_13_20").val($(this).data('partnername'));
            jQuery("#input_13_21").val($(this).data('partnerlocations'));
      }
      
      if(jQuery("#gform_11").length)
      {
            jQuery("#input_11_20").val($(this).data('partnername'));
            jQuery("#input_11_21").val($(this).data('partnerlocations'));
      }
      if(jQuery("#gform_4").length)
      {
            jQuery("#input_4_20").val($(this).data('partnername'));
            jQuery("#input_4_21").val($(this).data('partnerlocations'));
      }
   });
       
   function fetch_partners(page = 1) {
      let searchQuery = $('#partner-search').val();
      let certification = $('#certification').val();
      let partnerType = $('#partner_type').val();
      let country = $('#country').val();
      let language = $('#language').val();

      $.ajax({
         url: '<?php echo admin_url('admin-ajax.php'); ?>',
         type: 'POST',
         data: {
               action: 'load_partners',
               page: page,
               search: searchQuery,
               certification: certification,
               partner_type: partnerType,
               country: country,
               language: language
         },
         // beforeSend: function() {
         //       $('#partner-container').html('<p>Loading...</p>');
         // },
         success: function(response) {
               $('#partner-container').html(response);
               console.log(certification);
               console.log(country);
               console.log(partner_type);
            //  $('.page-link').removeClass('active');
            //  $('.page-link[data-page="' + page + '"]').parent().addClass('active');
         }
      });
   }

   // Handle form submission for search
   $('#partner-search-form').submit(function(e) {
      e.preventDefault();
      fetch_partners(1);
   });

   // Handle filter change
   $('#filter-form').submit(function(e) {
      e.preventDefault();
      fetch_partners(1);
   });

   // Reset filters
   $('#reset-filters').click(function() {
      $('#partner-search').val('');
      $('#certification').val('');
      $('#partner_type').val('');
      $('#country').val('');
      $('#language').val('');
      fetch_partners(1);
   });
   //  $('.page-link').click(function() {
   //    console.log("sasasas");
   //      let page = $(this).data('page');
   //      fetch_partners(page);
   //  });
   // Use event delegation for dynamically created elements
   $(document).on('click', '.page-link', function() {
        let page = $(this).data('page');
        fetch_partners(page);
    });
});
</script>
<!--Footer-->
<?php
// get_sidebar();
get_footer();
?>
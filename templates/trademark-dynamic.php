<?php
/*
 * Template Name: Trademark Dynamic
 */
get_header();
global $post;

$trademakr_subtext = get_field('trademakr_sub_text');
$trademakr_maintext = get_field('trademakr_main_text');
$trademakr_content = get_field('trademakr_content_text');
$importance = get_field('importance_of_trademarks');
$importancebtm = get_field('importance_btm');
$importancebottom = get_field('importance_bottom');
$identity = get_field('our_identity');
?>

<section class="common-img-banner" style="background: url('<?php the_field('banner-bg'); ?>'); background-size:cover;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="tm-banner-cnt">
          <h1><?php the_field('banner-title'); ?> <span class="primary_color"><?php the_field('color-title'); ?></span>
            <?php the_field('after-color'); ?></h1>
          <p class="largesubtext"><?php the_field('banner-paragraph'); ?></p>
          <a href="<?php the_field('banner-cta-btn'); ?>" class="btn btn-primary">
            <?php $field = get_field_object('banner-cta-btn'); ?>
            <p class="fs-16px"><?php echo $field['label']; ?></p>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="tm-hd-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <p><?php the_field('paragraph'); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="list-of_the-course tm-ourtrademarks">
  <div class="container">
    <div class="card-ourtm">
      <?php if (have_rows('course_list')): ?>
        <div class="row">
          <div class="col-12">
            <div class="ourtm-titlebar">
              <h2>Our Trademarks</h2>
              <div class="search-ourtm">
                <input type="text" id="courseSearchInput" onkeyup="filterCourses()" class="form-control position relative" size="40" >
                       <a href="#"><i class="fa-solid fa-magnifying-glass search-icon""></i></a> 
              </div>
            </div>
          </div>
        </div>
        <div class="row ourtm-scrollable" id="courseContainer">
  <?php while (have_rows('course_list')): the_row(); 
    $coursename = get_sub_field('course_title');
    $courselink = get_sub_field('course_link');
  ?>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-4 course-item">
      <div class="tm_card_bg">
        <div class="tm_card">
          <?php if ($coursename): ?>
            <h4>
              <?php if (!empty($courselink)): ?>
                <a href="<?php echo $courselink; ?>"><?php echo $coursename; ?></a>
              <?php else: ?>
                <?php echo $coursename; ?>
              <?php endif; ?>
            </h4>
          <?php endif; ?>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
</div>
      <?php endif; ?>
    </div>
  </div>
</section><!--/#Course-->

<section class="tmv3-cards">
  <div class="container">
    <div class="row gx-lg-5">
      <div class="col-xl-4 col-lg-6 mb-4">
        <div class="card">
          <img src="<?php the_field('commitment-box-image'); ?>">
          <h3><?php the_field('commitment-title'); ?></h3>
          <p><?php the_field('commitment-paragraph'); ?></p>

        </div>
      </div>
      <div class="col-xl-4 col-lg-6 mb-4">
        <div class="card">
          <img src="<?php the_field('commitment-box-image-2'); ?>">
          <h3><?php the_field('commitment-title_2'); ?></h3>
          <p><?php the_field('commitment-paragraph_2'); ?></p>

        </div>
      </div>
      <div class="col-xl-4 col-lg-6 mb-4">
        <div class="card">
          <img src="<?php the_field('commitment-box-image-3'); ?>">
          <h3><?php the_field('commitment-title_3'); ?></h3>
          <p><?php the_field('commitment-paragraph_3'); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cmn-cta-banner">
  <div class="container">
    <div class="cmn-cta-cnt">
      <h3><?php the_field('protect_banner_title'); ?></h3>
      <a href="<?php the_field('banner-cta-btn'); ?>" class="btn btn-primary"><?php $field = get_field_object('banner-cta-btn'); ?>
        <p><?php echo $field['label']; ?></p>
      </a>
    </div>
  </div>
</section><!-- CTA Banner End-->

<section class="h2_faq d-none" id="tabFAQs">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="mb-4 mb-lg-5 text-center">Frequently Asked Questions</h2>
		<div class="faq_wrap">
        <?php if (have_rows('faqs')): ?>
          <div class="accordion" id="regularAccordionRobots">
            <?php while (have_rows('faqs')):
              the_row();
              $faqnumber = get_sub_field('faq_number');
              $questions = get_sub_field('questions');
              $answer = get_sub_field('answer');
              ?>
              <div class="accordion-item">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#item<?php echo $faqnumber; ?>" aria-expanded="false">
                  <?php echo $questions; ?>
                </button>
                <div id="item<?php echo $faqnumber; ?>" class="accordion-collapse collapse" style="">
                  <div class="accordion-body">
                    <p><?php echo $answer; ?></p>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
		</div>
	  </div>
    </div>
  </div>
</section>

<script>
function filterCourses() {
  // Get the input field and filter value
  var input, filter, items, h4, i, txtValue;
  input = document.getElementById('courseSearchInput');
  filter = input.value.toUpperCase();
  container = document.getElementById('courseContainer');
  items = container.getElementsByClassName('course-item');

  // Loop through all course items, and hide those who don't match the search query
  for (i = 0; i < items.length; i++) {
    h4 = items[i].getElementsByTagName("h4")[0];
    txtValue = h4.textContent || h4.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      items[i].style.display = "";
    } else {
      items[i].style.display = "none";
    }
  }
}
</script>
<?php
get_footer();


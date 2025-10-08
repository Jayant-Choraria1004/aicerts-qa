<?php
/*
* Template Name: TrademarkTemplate V3
*/
get_header();

$bannertitle = get_field('banner-title');
$bannerparagraph = get_field('banner-paragraph');
$bannerctabtn = get_field('banner-cta-btn');
$bannerparatwo = get_field('paragraph');
$trademark_highlights = get_field('trademark_highlights');

$protect_banner_title = get_field('protect_banner_title');
?>


<section class="banner-video-section imgbanner tmbanner-bg mb-0">
  <div class="container maxwidth">
    <div class="row">
      <div class="col-lg-12">
        <div class="video-banner-cnt">
          <h1><?php echo $bannertitle; ?></h1>
          <p><?php echo $bannerparagraph; ?></p>
          <a href="<?php echo $bannerctabtn['url']; ?>" class="btn btn-primary"><?php echo $bannerctabtn['title']; ?></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="tm-hd-section pb-4">
  <div class="container maxwidth">
    <div class="row">
      <div class="col-lg-12">
        <p><?php echo $bannerparatwo; ?></p>
      </div>
    </div>
  </div>
</section>

<section class="list-of_the-course tm-ourtrademarks">
  <div class="container maxwidth">
    <div class="card-ourtm">
      <?php if (have_rows('course_list')): ?>
        <div class="row">
          <div class="col-12">
            <div class="ourtm-titlebar">
              <h2>Our Trademarks</h2>
              <div class="search-ourtm">
                <input type="search" id="courseSearchInput" onkeyup="filterCourses()" class="form-control position relative" size="40">
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
                      <?php if (!empty($courselink)) : ?>
                        <a href="<?php echo $courselink; ?>"><?php echo $coursename; ?></a>
                      <?php else : ?>
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
  <div class="container maxwidth">
    <div class="row gx-lg-5">
      <?php
      if ($trademark_highlights && isset($trademark_highlights['cards'])):
        foreach ($trademark_highlights['cards'] as $card):
      ?>
          <div class="col-xl-4 col-lg-6 mb-4">
            <div class="card">
              <?php if (!empty($card['icon_img'])): ?>
                <img src="<?php echo $card['icon_img']; ?>" alt="card" />
              <?php endif; ?>
              <?php if (!empty($card['title'])): ?>
                <h3><?php echo $card['title']; ?></h3>
              <?php endif; ?>
              <?php if (!empty($card['description'])): ?>
                <p><?php echo $card['description']; ?></p>
              <?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="cmn-cta-banner">
  <div class="container maxwidth">
    <div class="cmn-cta-cnt">
      <h3>Protect the integrity of your certification. If you suspect any misuse, report it immediately. Together, we can ensure that <span class="primary_color">AI</span> CERTs continues to set the global standard.</h3>
      <a href="<?php echo $bannerctabtn['url']; ?>" class="btn btn-primary"><?php echo $bannerctabtn['title']; ?></a>
    </div>
  </div>
</section><!-- CTA Banner End-->

<?php /*
<section class="faqs-slide" id="tabFAQs">
  <div class="container common-cnt max-medium-container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="mb-4 mb-lg-5 text-center">Frequently Asked Questions</h2>
        <?php if (have_rows('faqs')): ?>
          <div class="accordion home-accordion" id="regularAccordionRobots">
            <?php while (have_rows('faqs')): the_row();
              $faqnumber = get_sub_field('faq_number');
              $questions = get_sub_field('questions');
              $answer = get_sub_field('answer');
            ?>
              <div class="accordion-item">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item<?php echo $faqnumber; ?>" aria-expanded="false">
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
</section> */ ?>


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

<?php
/*
 *    Template Name: PressRelease Listing Template
 */
get_header();

$defaults1 = array('orderby' => 'date', 'order' => 'DESC', 'post_type' => 'press-releases', 'posts_per_page' => 20);
$pressreleases = get_posts($defaults1);

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
<section class="cmn-section esteemed-partners-section pt-lg-5 pt-0 pr-blog-listing">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="esteemed-partners-cnt">
                    <div id="press-release-results" class="row articlespage justify-content-center gy-lg-5 gy-3">
                    <!-- AJAX Results Load Here -->
                    </div>
                </div>
            </div>
        </div>
        <div class="ajax-pagination-wrap mt-5 d-flex justify-content-center pagination blog-pagination"></div>
    </div>
</section>
</div>
</div>

<?php
get_footer();
<?php
get_header();
global $post;
?>
<div class="middle-section">
  <div class="inner-page blog-bg">
    <section class="cert-spec-section d-flex justify-content-center align-items-center pb-0">
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
</div>
</div>
<?php
get_footer();
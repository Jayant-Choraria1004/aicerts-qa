<?php
/*
 *    Template Name: Article Listing Template
 */
get_header();

$defaults1 = array('orderby' => 'date', 'order' => 'DESC', 'post_type' => 'article', 'posts_per_page' => 20);
$articles = get_posts($defaults1);

?>

<section class="midd-inner-banner midd-banner-slide3 d-flex justify-content-center align-items-center">
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
<section class="cmn-section esteemed-partners-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="esteemed-partners-cnt">
                    <div class="row articlespage justify-content-center" align="center">
                        <?php foreach ($articles as $article) : ?>
                            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000" align="center">
                                <div class="mission-value-box">
                                    <div class="mb-3">
                                        <?php
                                        if (has_post_thumbnail($article->ID)) {
                                        ?>
                                            <img src="<?php echo  get_the_post_thumbnail_url($article->ID, 'full'); ?>" class="w-100" alt="<?php echo get_the_title($article->ID); ?>">
                                        <?php
                                        } else {
                                            echo '<img src="' . get_template_directory_uri() . '/images/no-image.jpg" class="w-100" alt="Default Image">';
                                        }
                                        ?>
                                    </div>
                                    <div class="corevalue-hd">
                                        <a href="<?php echo get_permalink($article->ID); ?>"><?php echo get_the_title($article->ID); ?></a>
                                    </div>
                                    <div class="corevalue-desc"><?php echo wp_trim_words($article->post_content, 20, '...'); ?></div>
                                    <div class="certified-btn">
                                        <a href="<?php echo get_permalink($article->ID); ?>" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
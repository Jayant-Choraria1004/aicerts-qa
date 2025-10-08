<?php
/*
 *    Template Name: Blogs Listing Template
 */
get_header();

// Set up the query for paginated posts
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'orderby' => 'date',
    'order' => 'DESC',
    'post_type' => 'blogs',
    'posts_per_page' => 6,
    'paged' => $paged
);

$blogs_query = new WP_Query($args);
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
    <section class="cmn-section esteemed-partners-section pt-5 pr-blog-listing">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="esteemed-partners-cnt">
              <div class="row articlespage justify-content-center gy-5" align="center">
                <?php if ($blogs_query->have_posts()) : ?>
                  <?php while ($blogs_query->have_posts()) : $blogs_query->the_post(); ?>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000" align="center">
                      <div class="mission-value-box">
                        <div class="mb-3 aspect_ratio">
                          <?php
                          if (has_post_thumbnail()) {
                          ?>
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" class="w-100" alt="<?php the_title(); ?>">
                          <?php
                          } else {
                            echo '<img src="' . get_template_directory_uri() . '/images/no-image.jpg" class="w-100" alt="Default Image">';
                          }
                          ?>
                        </div>
                        <div class="corevalue-hd">
                          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </div>
                        <div class="corevalue-desc"><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></div>
                        <div class="certified-btn">
                          <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                        </div>
                      </div>
                    </div>
                  <?php endwhile; ?>
                <?php else : ?>
                  <p>No blogs found.</p>
                <?php endif; ?>
              </div>
              
              <div>&nbsp;</div>
              <!-- Pagination Section -->
              <div class="pagination-wrapper pagination blog-pagination">
                <?php
                echo paginate_links(array(
                  'total' => $blogs_query->max_num_pages,
                  'current' => $paged,
                  'prev_text' => __('« Prev'),
                  'next_text' => __('Next »'),
                ));
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<?php
// Reset post data
wp_reset_postdata();
get_footer();
?>

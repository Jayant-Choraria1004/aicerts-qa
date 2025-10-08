<?php
/*
 *    Template Name: blogs-V2
 */
get_header();

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Get the current page number
$posts_per_page = 3; // Number of posts per page

$defaults1 = array(
  'orderby' => 'date',
  'order' => 'DESC',
  'post_type' => 'Blogs',
  'posts_per_page' => $posts_per_page,
  'paged' => $paged // Use the paged variable to paginate the posts
);

$blogs_query = new WP_Query($defaults1);
$partners_heading = get_field('partners_heading');
$see_all_partners_link = get_field('see_all_partners_link');
$partners_logos = get_field('partners_logos');
$testimonials = get_field("testimonials");
?>

<div class="middle-section">
  <section class="common-img-banner blogsv2-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="video-banner-cnt">
            <p><?php the_field('banner_first_title'); ?></p>
            <h1><?php the_field('banner_title'); ?></h1>
            <p><?php the_field('banner_paragraph'); ?></p>
            <?php
            $field = get_field_object('banner_cta_button');
            if ($field) {
              $button_url = isset($field['value']['url']) ? $field['value']['url'] : '';
              $button_title = isset($field['value']['title']) ? $field['value']['title'] : 'Click Here';
            }
            ?>
            <a href="<?php echo esc_url($button_url); ?>" class="btn btn-primary">
              <span><?php echo esc_html($button_title); ?></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="tmv2-main-tms cmn-sliderdots">
    <div class="container">
      <div class="row gx-xl-5">
        <div class="col-xl-8 col-md-7">
          <div class="esteemed-partners-cnt">
            <div class="row articlespage justify-content-start gy-5" style="width: 150%;">
              <?php if ($blogs_query->have_posts()): ?>
                <?php while ($blogs_query->have_posts()):
                  $blogs_query->the_post(); ?>
                  <div class="col-lg-8 col-md-6" data-aos="fade-up" data-aos-duration="1000" align="center">
                    <div class="mission-value-box">
                      <div class="mb-3 aspect_ratio">
                        <?php if (has_post_thumbnail()): ?>
                          <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" class="w-100"
                            alt="<?php echo get_the_title(); ?>" class="thumblarge">
                        <?php else: ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.jpg" class="w-100"
                            alt="Default Image">
                        <?php endif; ?>
                      </div>
                      <small class="pb-3">
                        <p><?php echo get_the_date(); ?></p>
                      </small>
                      <div>
                        <a href="<?php the_permalink(); ?>" class="fs-18px"><?php the_title(); ?></a>
                      </div>
                      <div class="corevalue-desc mt-4"><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></div>
                    </div>
                  </div>
                <?php endwhile; ?>
              <?php else: ?>
                <p>No blog posts found.</p>
              <?php endif; ?>
            </div>

            <!-- Pagination -->
            <div class="pagination">
              <?php
              echo paginate_links(array(
                'total' => $blogs_query->max_num_pages,
                'current' => max(1, get_query_var('paged')),
                'format' => '?paged=%#%',
                'show_all' => false,
                'end_size' => 1,
                'mid_size' => 2,
                'prev_next' => true,
                'prev_text' => __('« Prev'),
                'next_text' => __('Next »'),
              ));
              ?>
            </div>
          </div>
        </div>

        <!-- sidebar recent blogs starts here -->
        <div class="col-xl-4 col-md-5">
          <h2 class="primary_color">Recent Blogs</h2>
          <?php
          $recent_posts = get_posts(array(
            'post_type' => 'Blogs',
            'posts_per_page' => 3,
            'post_status' => 'publish',
            'order' => 'DESC',
          ));

          if ($recent_posts) {
            foreach ($recent_posts as $post):
              setup_postdata($post); ?>
              <div class="recent-post">
                <a href="<?php the_permalink(); ?>">
                  <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('thumbnail'); ?>
                  <?php endif; ?>
                  <div class="post-info">
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo get_the_date(); ?></p>
                  </div>
                </a>
              </div>
            <?php endforeach;
            wp_reset_postdata();
          } else {
            echo '<p>No recent posts available.</p>';
          }
          ?>
        </div>
      </div>

      <!-- sidebar recent blogs ends here -->

    </div>
  </section>

  <section class="h2_partners_logo">
    <div class="container">
      <div class="d-flex flex-wrap justify-content-between align-items-center">
        <?php if ($partners_heading): ?>
          <h2 class="white_text mb-0"><?php echo $partners_heading; ?></h2>
        <?php endif; ?>
        <?php if ($see_all_partners_link): ?>
          <a href="<?php echo $see_all_partners_link['url']; ?>" target="_blank"
            class="discover_more_link d-none d-md-block"><?php echo $see_all_partners_link['title']; ?></a>
        <?php endif; ?>
      </div>
      <div class="h2_partners_logo_slider mt-md-3 mt-3">
        <div class="owl-carousel owl-theme">
          <?php if ($partners_logos): ?>
            <?php foreach ($partners_logos as $p_logo): ?>
              <div class="item">
                <div class="h2_aicerts_lab_box">
                  <img src="<?php echo $p_logo['partner_lab_logo']; ?>" alt="" class="aicerts_lab_white">
                  <img src="<?php echo $p_logo['black_partner_lab_logo']; ?>" alt="" class="aicerts_lab_black">
                </div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
      <?php if ($see_all_partners_link): ?>
        <div class="mt-4 d-md-none">
          <a href="<?php echo $see_all_partners_link['url']; ?>" target="_blank"
            class="discover_more_link ms-auto"><?php echo $see_all_partners_link['title']; ?></a>
        </div>
      <?php endif; ?>
    </div>
  </section>

</div>

<?php
wp_reset_postdata(); // Always reset the post data after a custom query
get_footer();
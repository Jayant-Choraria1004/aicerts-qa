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
    <div class="col-lg-8">
      <?php the_content(); ?>
    </div>
    <!-- sidebar recent blogs starts here -->
    <div class="col-lg-4 col-md-5">
        <!-- Form code start-->
		<div class="blogsidebarform scroll-sticky-form">
            <h3 class="text-center">Learn More About the Course</h3>
            <p class="text-center">Get details on syllabus, projects, tools and more</p>
            <?php 
            $blogform = get_field('blog_form_short_code', 'option');
            echo do_shortcode($blogform); ?>
		</div>        
        <!-- Form code end-->
        <h2 class="primary_color"><?php the_field('recent_blog_titles', 'option'); ?></h2>
        <?php
        wp_reset_postdata();
        $recent_posts = get_posts(array(
            'post_type' => 'Blogs',
            'posts_per_page' => 5,
            'post_status' => 'publish',
            'order' => 'DESC',
            'post__not_in'   => array(get_the_ID()), // Exclude the current post
        ));

        if ($recent_posts) {
            foreach ($recent_posts as $post):
                    ?>
                <div class="card blogv2-card-large card-recentblog">
                    <a href="<?php echo get_the_permalink(); ?>">
                        <div class="blogv2-thumb-large">
                            <img class="thumblarge" alt="<?php echo get_the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(); ?>">            
                        </div>
                    </a>
                        <div class="blogv2-cnt-large">
                                <h3>FEATURED</h3>
                                <a href="<?php echo get_the_permalink(); ?>"><p><?php echo get_the_title(); ?></p></a>
                            <small class="mt-3 d-block"><?php echo get_the_date(); ?></small>
                        </div>
                    
                </div>
            <?php endforeach;
            wp_reset_postdata();
        } else {
            echo '<p>No recent posts available.</p>';
        }
        ?>
    </div>
    <div class="col-xl-12">
      <div class="row post-navigation">
        <div class="nav-previous col-6">
            <h6><?php previous_post_link('%link', '<span class="nav-label btn btn-primary mb-3">Previous </span><br> %title'); ?></h6>
        </div>
        <div class="nav-next col-6 text-end">
            <h6><?php next_post_link('%link', '<span class="nav-label btn btn-primary mb-3"> Next </span><br> %title'); ?></h6>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

</div>
</div>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const formBlock = document.querySelector(".blogsidebarform");

    if (formBlock) {
      const formOffset = formBlock.offsetTop;

      window.addEventListener("scroll", function () {
        if (window.pageYOffset > formOffset) {
          formBlock.classList.add("sticky");
        } else {
          formBlock.classList.remove("sticky");
        }
      });
    }
  });
</script>

<?php
get_footer();
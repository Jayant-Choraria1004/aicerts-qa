<?php
    /* Template Name: Archive Blog Page */ 
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

$banner_post = new WP_Query([
    'post_type'      => 'Blogs',
    'posts_per_page' => 1,
    'orderby'        => 'date',
    'order'          => 'DESC',
]);
?>

<div class="middle-section">
<?php if ($banner_post->have_posts()) :    ?>
    <section class="banner-video-section imgbanner blogsv2-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php while ($banner_post->have_posts()) : $banner_post->the_post(); ?>
                    <div class="video-banner-cnt">
                        <p><?php the_field('banner_first_title', 'option'); ?></p>
                        <h1><?php the_title(); ?></h1>
                        <p><?php echo wp_trim_words(get_the_content(), 20, ''); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">
                            <span>READ MORE</span>
                        </a>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <section class="tmv2-main-tms cmn-sliderdots">
        <div class="container">
            <div class="row gx-xl-5">
                <div class="col-xl-8 col-md-7">
                    <div class="esteemed-partners-cnt" id="blog_section" >
                        <div id="ajax-blog-results">
                            <div class="articlespage justify-content-start gy-5">
                                <?php if ($blogs_query->have_posts()): ?>
                                    <?php while ($blogs_query->have_posts()):
                                        $blogs_query->the_post(); ?>
                                        <div class="card blogv2-card-large">
                                            <div class="blogv2-thumb-large">
                                                <?php if (has_post_thumbnail()): ?>
                                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" class="thumblarge" alt="<?php echo get_the_title(); ?>">
                                                <?php else: ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.jpg" class="thumblarge" alt="Default Image">
                                                <?php endif; ?>
                                                <!-- <div class="blogv2-hero">
                                                    <div class="blogv2-hero-img">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/images/Speakers1.png" alt=""/> 
                                                    </div>
                                                    <div class="blogv2-hero-cnt">
                                                        <h3>Posted By <b><?php the_author(); ?></b></h3>
                                                        <small><?php echo get_the_date('M d, Y'); ?></small>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <div class="blogv2-cnt-large">
                                                <small><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></small>
                                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                <p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php else: ?>
                                    <p>No blog posts found.</p>
                                <?php endif; ?>
                            </div>

                            <!-- Pagination -->
                            <div class="pagination blog-pagination">
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
                </div>

                <!-- sidebar recent blogs starts here -->
                <div class="col-xl-4 col-md-5">
                    <div class="blogsearch-form searchbar-mainnav">
                    <form id="blog-search-form" class="searchform form">
                        <input type="search" name="search" id="search-input" placeholder="Search blog..." class="search-field form-control">
                        <input type="submit" id="searchsubmit" value="" class="searchbtn">
                    </form>
                    </div>
                    <h2 class="primary_color"><?php the_field('recent_blog_titles', 'option'); ?></h2>
                    <?php
                    wp_reset_postdata();
                    $recent_posts = get_posts(array(
                        'post_type' => 'Blogs',
                        'posts_per_page' => 5,
                        'post_status' => 'publish',
                        'order' => 'DESC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'blog-categories',
                                'field'    => 'slug', 
                                'terms'    => 'featured', 
                            ),
                        ),
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
                                        <h3>FEATURED</a></h3>
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
            </div>

            <!-- sidebar recent blogs ends here -->

        </div>
    </section>

    <?php 
    $homepage_id = get_option('page_on_front');

    $partners_heading = get_field('partners_heading', $homepage_id);
    $see_all_partners_link = get_field('see_all_partners_link', $homepage_id);
    $partners_logos = get_field('partners_logos', $homepage_id);
    ?>
    <?php if(!$partners_heading): ?>
    <section class="h2_partners_logo">
        <div class="container home_version2">
            <div class="d-flex flex-wrap justify-content-between align-items-center">
            <?php if($partners_heading): ?>
                <h2 class="white_text mb-0"><?php echo $partners_heading; ?></h2>
            <?php endif; ?>
            <?php if($see_all_partners_link): ?>
                <a href="<?php echo $see_all_partners_link['url']; ?>" target="_blank" class="discover_more_link d-none d-md-block"><?php echo $see_all_partners_link['title']; ?></a>
            <?php endif; ?>
            </div>
            <div class="h2_partners_logo_slider mt-md-3 mt-3 cmn-sliderdots offsetarrow">
                <div class="owl-carousel owl-theme">
                    <?php if($partners_logos): ?>
                    <?php foreach($partners_logos as $p_logo):?>
                        <div class="item">
                            <div class="h2_aicerts_lab_box">
                                <!-- <img src="<?php echo $p_logo['partner_lab_logo']; ?>" alt=""> -->
                                <img src="<?php echo $p_logo['partner_lab_logo']; ?>" alt="" class="aicerts_lab_white">
                                <img src="<?php echo $p_logo['black_partner_lab_logo']; ?>" alt="" class="aicerts_lab_black">
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <?php if($see_all_partners_link): ?>
            <div class="mt-4 d-md-none">
                <a href="<?php echo $see_all_partners_link['url']; ?>" target="_blank" class="discover_more_link ms-auto"><?php echo $see_all_partners_link['title']; ?></a>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>
</div>

<?php
wp_reset_postdata(); 
get_footer();
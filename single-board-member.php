<?php
get_header();
//global $post;
$thumbnail = get_the_post_thumbnail_url();
$job_role = get_field('job_role');
$linkedin = get_field('linkedin');
$description = get_field('description');
$cta_heading = get_field('cta_heading', 'option');
$cta_subheading = get_field('cta_subheading', 'option');
$apply_to_join_the_board_button = get_field('apply_to_join_the_board_button', 'option');
?>
<section class="common-section advisiorinfo top-header-blank pt-lg-5">
    <div class="container">
        <div class="AdvisorDetails">
            <div class="MemberCard text-center">
                <div class="MemberProfile">
                    <div class="bmprofile">
                        <?php if($thumbnail): ?>
                            <img alt="​" src="<?php echo $thumbnail; ?>"/>
                        <?php else: ?>
                            <img alt="Icon​" src="<?php echo esc_url(get_template_directory_uri(). "/images/icon-chessking.svg"); ?>"/>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="MemberInfo">
                    <h4 class="primary_color"><?php the_title(); ?>​</h4>
                    
                    <div class="bmSocial">
                        <?php if ($linkedin): ?>
                            <a href="<?php echo esc_url($linkedin); ?>" target="_blank" rel="nofollow">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="Adinfo mt-4">
                <p><?php echo $description; ?></p>
            </div>
        </div>
    </div>
</section>
<!-- AdvisiorInfo -->

<section class="cmn-section team-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-header text-center mb-5">
                    <h2>Discover the other members</h2>
                </div>
                <div class="team-cnt">
                    <!-- <h2 class="cmn-hd mb-lg-5 mb-3"><?php echo $category->name; ?></h2> -->
                    <div class="row gy-lg-2 gy-3">
                        <?php
                        $args = array(
                            'post_type' => 'board-member',
                            'posts_per_page' => -1,
                            'post_status' => 'publish',
                            'post__not_in' => array(get_the_ID())
                        );
                        
                        $advisors = new WP_Query($args);
                        
                        if ($advisors->have_posts()) :
                            while ($advisors->have_posts()) : $advisors->the_post();
                            $singlethumbnail = get_the_post_thumbnail_url(get_the_ID(),'full');
                            $single_job_role = get_field('job_role');
                            $single_linkedin = get_field('linkedin');
                            $single_description = get_field('description');
                        ?>
                                <div class="col-sm-6 col-md-4 col-xl-3">
                                    <div class="mission-value-box position-relative">
                                        <a href="<?php echo the_permalink(); ?>"><div class="team-img"><img src="<?php echo $singlethumbnail; ?>"></div></a>
                                        <?php if (!empty(trim($single_linkedin))) { ?>
                                            <div class="ourteam-linkedin"><a  href="<?php echo esc_url($single_linkedin); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team-linkedin.png"></a></div>
                                        <?php } ?>
                                        <div class="corevalue-hd"><?php echo get_the_title(); ?></div>
                                    </div>
                                </div>
                            <?php endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Discover The Other Members -->

<section class="common-section">
    <div class="container">
        <div class="joiningAdvisoryBoard">
            <div class="section-header text-center">
                <h2><?php echo $cta_heading; ?></h2>
                <p><?php echo $cta_subheading; ?></p>
                <?php if($apply_to_join_the_board_button): ?>
                    <a href="<?php echo $apply_to_join_the_board_button['url']; ?>" class="btn btn-primary"><?php echo $apply_to_join_the_board_button['title']; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- Interested in joining Our Advisory Board? -->
<?php
get_footer();
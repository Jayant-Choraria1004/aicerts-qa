<?php 
 /* Template Name: Form - Partner Summit 2024 */
 get_header();
?>
<style>
  
        /* @media (max-width: 600px) {
            #canvas {
                height: 200px; 
            }
        } */
</style>
<?php
$event_post_title = get_field('event_post_title');
$white_event_logo = get_field('white_event_logo');
$black_event_logo = get_field('black_event_logo');
?>
<div class="middle-section">
    <section class="top_video-with-text partner_summit_video">
        <div class="top_banner-imgvideo text-center">
            <!-- <canvas id="canvas" class="connecting-dots"></canvas> -->
            <video width="100%" autoplay muted loop poster="<?php echo esc_url(get_template_directory_uri() . "/images/top_banner.png"); ?>">
                <source src="<?php echo esc_url(get_template_directory_uri() . "/images/Event-main-video.mp4"); ?>" type="video/mp4">
                </source>
            </video>       
        </div>
        <div class="top_banner-content text-center">           
            <div class="container maxwidth">
                <?php if ($event_post_title) { ?>
                    <h1><?php echo $event_post_title; ?></h1>
                <?php } ?>
                <div class="line_with-logo">
                    <span class="line"></span>
                    <?php if ($white_event_logo) {  ?>
                        <img class="black_theme" alt="AI CERTs" src="<?php echo $white_event_logo; ?>">
                    <?php } if ($black_event_logo) { ?>
                        <img class="white_theme" alt="AI CERTs" src="<?php echo $black_event_logo; ?>">
                    <?php } ?>
                </div>
            </div>
        </div>
    </section><!--TopVideo-->

    <section class="">
        <div class="container">
            <div class="hr_big-line">
                <div class="hr-line_item hr_one"></div>
                <div class="hr-line_item hr_two"></div>
                <div class="hr-line_item hr_three"></div>
                <div class="hr-line_item hr_four"></div>
                <div class="hr-line_item hr_give"></div>
            </div>
            <div class="p-3 p-lg-5 partner_summit_form">
                <div class="container">
                    <div class="row align-items-center gx-5 gy-4">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section><!--TeaserVideo-->
</div>
<script>
jQuery(document).ready(function(){
    connecting_dots_animation();
});
</script>
<?php
// get_sidebar();
get_footer(); 
?> 
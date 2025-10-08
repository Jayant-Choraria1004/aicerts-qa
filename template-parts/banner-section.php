<section class="no_overlay-header">
   <div class="container-full labsbanner">
      <div class="position-relative row flex-row-reverse align-items-center">
         <?php if (have_rows('header_banner_section')) : ?>
            <?php while (have_rows('header_banner_section')) : the_row(); ?>
               <?php $video = get_sub_field('no_overlay_header_video'); ?>
               <?php $poster_image = get_sub_field('no_overlay_header_poster'); ?>
               <?php $title = get_sub_field('no_overlay_header_title'); ?>
               <?php $subtitle = get_sub_field('no_overlay_header_subtitle'); ?>
               <?php $button_text = get_sub_field('no_overlay_header_button_text'); ?>
               <?php $button_url = get_sub_field('no_overlay_header_button_url'); ?>

               <div class="col-12 col-lg-8 col-md-6 video-with-text_overlay">
                  <div class="overaly_video">
                     <video width="100%" autoplay muted loop poster="<?php echo esc_url($poster_image); ?>">
                        <source src="<?php echo esc_url($video); ?>" type="video/mp4">
                     </video>
                  </div>
               </div>
               <div class="px-4 px-lg-4 col-12 col-lg-5 col-md-6">
                  <div class="overaly_video-content">
                     <h1>
                        <div class="aicerts-brand_logo"><?php echo esc_html($title); ?></div>
                     </h1>
                     <h5 class="white_text"><?php echo esc_html($subtitle); ?></h5>
                     <a href="<?php echo esc_url($button_url); ?>" class="btn btn-primary-white btn-lg mt-4">
                        <?php echo esc_html($button_text); ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-right-orange.svg" alt="Arrow" />
                     </a>
                  </div>
               </div>
            <?php endwhile; ?>
         <?php endif; ?>
      </div>
   </div>
</section>

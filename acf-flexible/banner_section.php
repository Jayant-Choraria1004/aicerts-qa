<?php 

$baner_title = get_sub_field('banner_title');
$banner_description = get_sub_field('banner_description');
$banner_cta_button = get_sub_field('banner_cta_button');
$banner_background_image =  get_sub_field('banner_background_image');
?>

<?php if($baner_title || $banner_description || $banner_cta_button || $banner_background_image ): ?>
<section class="banner-video-section AffiliateBanner imgbanner" style="background-image: url('<?php echo esc_url($banner_background_image['url']); ?>');">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="video-banner-cnt">
               <?php if($baner_title): ?>
                    <h1 class="fs-2"><?php echo $baner_title; ?></h1>
               <?php endif; ?>
               <?php if($banner_description): ?>
               <p><?php echo $banner_description; ?></p>
               <?php endif; ?>
               <a class="btn btn-primary me-3" href="<?php echo $banner_cta_button['url']; ?>"><?php echo $banner_cta_button['title']; ?></a>
            </div>
         </div>
      </div>
   </div>
</section>
<?php endif; ?>


<?php 

$baner_title = get_sub_field('banner_title');
$banner_description = get_sub_field('banner_description');
$banner_cta_button = get_sub_field('banner_cta_button');
$banner_background_image =  get_sub_field('banner_background_image');
?>

<?php if($baner_title || $banner_description || $banner_cta_button || $banner_background_image ): ?>
<section class="ReadytoPromote mb-5">
   <div class="container">
      <div class="APReadyCard">
         <?php if($baner_title): ?>
         <h2><?php echo $baner_title; ?></h2>
         <?php endif; ?>
          <?php if($banner_description): ?>
         <p><?php echo $banner_description; ?></p>
         <?php endif; ?>
         <?php if($banner_cta_button['url']): ?>
         <a class="btn btn-primary" href="<?php echo $banner_cta_button['url']; ?>"><?php echo $banner_cta_button['title']; ?></a>
         <?php endif; ?>
      </div>
   </div>
</section>
<?php endif; ?>
<?php 
$baner_title = get_sub_field('section_title');
$list_items = get_sub_field('list_items');

?>

<?php if($baner_title || $list_items): ?>
<section class="AffiliateHighlight mb-5 pb-lg-5">
   <div class="container">
      <?php if($baner_title): ?>
      <div class="section-header text-center mb-4 mb-lg-5">
         <h2><?php echo $baner_title; ?></h2>
      </div>
       <?php endif; ?>
      <div class="row g-4 g-lg-5 justify-content-center">
         <?php foreach ($list_items as $item): ?>
         <div class="col-lg-4 col-md-6">
            <div class="APCard h-100">
               <?php if(!empty($item['item_icon'])): ?>
               <div class="APIcon">
                   <img alt="ApIcon" src="<?php echo $item['item_icon']['url'] ?>"/>
               </div>
               <?php endif; ?>
               <div class="APInfo">
                  <?php if(!empty($item['label'])): ?>
                     <h4><?php echo esc_html($item['label']); ?></h4>
                  <?php endif; ?>
                  <?php if(!empty($item['description'])): ?>
                     <p><?php echo esc_html($item['description']); ?></p>
                  <?php endif; ?>
               </div>
            </div>
         </div>
         <?php endforeach; ?>
      </div>
   </div>
</section>
<?php endif; ?>

<?php /* if($baner_title || $list_items): ?>
<section class="WhyAffiliate mb-5">
   <div class="AffiliateCover">
      <div class="WAHeading mb-4 mb-lg-5">
         <div class="container">
            <?php if($baner_title): ?>
            <div class="section-header text-center">
               <h2 class="mb-0"><?php echo $baner_title; ?></h2>
            </div>
            <?php endif; ?>
         </div>
      </div>
      <div class="container">
         <div class="row g-4 gx-lg-5">
            <?php foreach ($list_items as $item): ?>
            <div class="col-sm-6">
               <div class="WhyACard h-100 text-center">
                  <?php if(!empty($item['label'])): ?>
                     <h4><?php echo esc_html($item['label']); ?></h4>
                  <?php endif; ?>
                  <?php if(!empty($item['description'])): ?>
                     <p><?php echo esc_html($item['description']); ?></p>
                  <?php endif; ?>
               </div>
            </div>   
            <?php endforeach; ?>            
         </div>
      </div>
   </div>
</section>
<?php endif; */?>



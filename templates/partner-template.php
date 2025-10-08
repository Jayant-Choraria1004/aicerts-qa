<?php
/*
 * Template Name: PartnerTemplate
 */
get_header();
global $post;
$defaults1 = array(
 'orderby' => 'date',
 'order' => 'DESC',
 'post_type' => 'partner',
 'posts_per_page' => 100,
 'tax_query' => array(
  array(
   'taxonomy' => 'partnercategories',
   'field' => 'slug',
   'terms' => 'training-partner'
  )
 )
);
$defaults2 = array(
 'orderby' => 'date',
 'order' => 'DESC',
 'post_type' => 'partner',
 'posts_per_page' => 20,
 'tax_query' => array(
  array(
   'taxonomy' => 'partnercategories',
   'field' => 'slug',
   'terms' => 'academic-partners'
  )
 )
);
$defaults3 = array(
 'orderby' => 'date',
 'order' => 'DESC',
 'post_type' => 'partner',
 'posts_per_page' => 20,
 'tax_query' => array(
  array(
   'taxonomy' => 'partnercategories',
   'field' => 'slug',
   'terms' => 'content-partners'
  )
 )
);
$defaults4 = array('orderby' => 'date','order' => 'DESC','post_type'=> 'trainers','tax_query' => array(
    array(
      'taxonomy' => 'trainercat',
      'field'    => 'slug',
      'terms'    => 'trainer'
    )
  ));           
$trainerpartners = get_posts($defaults4); 
$trainingpartners = get_posts($defaults1);
$contentpartners = get_posts($defaults3);
$acedemicpartners = get_posts($defaults2);
//$featured_img_url = get_the_post_thumbnail_url($post->ID,'thumbnail'); 
//$enroll_url = get_post_meta( $post_id, 'enroll_url', true);
/* Get Header Section */
$partner_header_section = get_field('partner_header_section');
$authorized_trainer_section = get_field('authorized_trainer_section');
$academic_partners_section = get_field('academic_partners_section');
$authorized_content_section = get_field('authorized_content_section');
?>
<style>
  .cmn-section ul.pagination li{ list-style:none; margin:10px; }
  .cmn-section ul.pagination li.page-item {background: #f3f3f3; padding:10px 15px; margin-right:10px; white-space:nowrap; margin-bottom:30px; font-size: 16px;}
  .cmn-section ul.pagination li.page-item:hover, .cmn-section ul.pagination li.page-item.active {background: var(--primary-color); }
  .cmn-section ul.pagination li a{ color: #000; }
</style>
<div class="middle-section">
    <div class="inner-page blog-bg">
      <?php if($partner_header_section): ?> 
 <section class="cert-spec-section d-flex justify-content-center align-items-center pb-0">
  <div class="container">
   <div class="row">
    <div class="col-lg-12">
      <?php if($partner_header_section['ap_heading']): ?>
     <h1 class="cmn-hd"><?= $partner_header_section['ap_heading']; ?></h1>
     <?php endif;?>
    </div>
   </div>
  </div>
 </section>
 <?php endif ;?>

 <section class="cmn-section esteemed-partners-section pt-4">
  <div class="container">
   <div class="row">

    <div class="col-lg-12">
     <div class="esteemed-partners-cnt">
     <?php if(isset($partner_header_section['ap_sub_heading'])): ?>
      <h2 class="cmn-hd mb-4"><?= $partner_header_section['ap_sub_heading'];?></h2>
      <?php endif ;?>
      <?php if(isset($partner_header_section['ap_description'])): ?>
    <p class="text-center"><?= $partner_header_section['ap_description'] ;?></p>
    <?php endif ;?>
    <?php if(isset($partner_header_section['ap_authorized_partner_logo'])):?>
        <div class="wrapper-img" align="center">
        <img class="ap-logo" src="<?= $partner_header_section['ap_authorized_partner_logo']['url'] ?>">
      </div>
        <?php endif ;?>
    <?php if(isset($partner_header_section['ap_cta'])):?>
      <div class="partners-desc-area mb-5">
       <div class="partner-btn">
        <a href="<?= $partner_header_section['ap_cta']['url'];?>"
         class="btn btn-primary training-partner-form">
         <?= $partner_header_section['ap_cta']['title'];?></a>
       </div>
      </div>
      <?php endif ;?>

      <div class="row gy-lg-5 gy-3" align="center">       
       <?php if (!empty($trainingpartners)) { ?>
        <div id="training-partners-list"></div>
        <nav aria-label="Training Partner Pagination">
          <ul class="pagination justify-content-center" id="training-partners-pagination"></ul>
        </nav>
        <script>
        // Prepare PHP data for JS
        var trainingPartnersData = <?php echo json_encode(array_map(function($training) {
          return [
            'img' => get_the_post_thumbnail_url($training->ID, 'full'),
            'url' => get_post_meta($training->ID, 'visit_url', true),
            'title' => $training->post_title,
            //'desc' => $training->post_content,
          ];
        }, $trainingpartners)); ?>;

        var itemsPerPage = 9;
        var currentPage = 1;

        function renderTrainingPartners(page) {
          var start = (page - 1) * itemsPerPage;
          var end = start + itemsPerPage;
          var items = trainingPartnersData.slice(start, end);
          var html = '';
          items.forEach(function(item) {
            html += '<div class="col-lg-4 col-md-6">'+
              '<div class="mission-value-box certified-box">'+
                '<div class="certified-icon"><img src="'+item.img+'"></div>'+ 
                '<div class="corevalue-hd">'+item.title+'</div>'+ 
                //'<div class="corevalue-desc">'+item.desc+'</div>'+ 
                '<div class="certified-btn mt-2"><a href="'+item.url+'" class="btn btn-primary" target="_blank">Visit Us</a></div>'+ 
              '</div>'+ 
            '</div>';
          });
          document.getElementById('training-partners-list').innerHTML = '<div class="row gy-lg-5 gy-3">'+html+'</div>';
        }

        function renderPagination() {
          var totalPages = Math.ceil(trainingPartnersData.length / itemsPerPage);
          var pagHtml = '';
          for (var i = 1; i <= totalPages; i++) {
            pagHtml += '<li class="page-item'+(i===currentPage?' active':'')+'">'+
              '<a href="#" onclick="changeTrainingPage('+i+');return false;">'+i+'</a></li>';
          }
          document.getElementById('training-partners-pagination').innerHTML = pagHtml;
        }

        function changeTrainingPage(page) {
          currentPage = page;
          renderTrainingPartners(page);
          renderPagination();
          // Scroll to Become a Partner button if exists
          var becomeBtn = document.querySelector('.training-partner-form');
          if (becomeBtn) {
            becomeBtn.scrollIntoView({ behavior: 'smooth', block: 'center' });
          }
        }

        // Initial render
        renderTrainingPartners(currentPage);
        renderPagination();
        </script>
       <?php } ?>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>

 <section class="cmn-section esteemed-partners-section pt-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="esteemed-partners-cnt">
          <?php if($authorized_trainer_section): ?>
            <?php if($authorized_trainer_section['at_heading']):?>
              <h2 class="cmn-hd mb-4"><?= $authorized_trainer_section['at_heading'];?></h2>
            <?php endif;?>
            <?php if($authorized_trainer_section['at_sub_heading']):?>
              <h3 class="text-center"><?= $authorized_trainer_section['at_sub_heading'];?></h3>
            <?php endif;?>
            
          <?php endif;?>
          <div class="row justify-content-center">
            <?php if(!empty($trainerpartners)) { ?>
              <?php foreach($trainerpartners as $training) { 
                    $featured_img_url = get_the_post_thumbnail_url($training->ID,'full'); 
                    $trainer_link = get_post_meta( $training->ID, 'trainer_link', true); 
              ?>
              <div class="col-xl-3 col-md-4">
                <div class="mission-value-box certifications-cnt">
                  <div class="certifications-img"><a href="<?php echo $trainer_link;?>"><img alt="AI+ Certified Trainer" src="<?php echo $featured_img_url;?>"></a></div>
                </div>
              </div>
              <?php } ?>
            <?php } ?>
              <div class="col-xl-9 col-md-8">
                <?php if($authorized_trainer_section): ?>
                  <?php if($authorized_trainer_section['at_description']):?>
                    <p class="text-center"><?= $authorized_trainer_section['at_description'];?></p>
                  <?php endif;?>
                <?php endif;?>
              </div>

              <?php if(!empty($trainerpartners)) { ?>
              <?php foreach($trainerpartners as $training) {
                    $register_here = get_post_meta( $training->ID, 'register_here', true); 
              ?>
              <div class="col-xl-3 col-md-4">
                <div class="mission-value-box certifications-cnt">
                  <div class="become-trainer-btn"><a target="_blank" href="<?php echo $register_here;?>" class="btn btn-primary">Become a Trainer</a></div>
                </div>
              </div>
              <?php } ?>
            <?php } ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

 <section class="cmn-section  pt-0 esteemed-partners-section">
  <div class="container">
   <div class="row">
    <div class="col-lg-12">
     <div class="esteemed-partners-cnt">
      <?php if($academic_partners_section):?>
        <?php if($academic_partners_section['ac_heading']):?>
      <h2 class="cmn-hd mb-4"><?= $academic_partners_section['ac_heading'];?></h2>
      <?php endif;?>
      <?php if($academic_partners_section['ac_description']):?>
    <p class="text-center"><?= $academic_partners_section['ac_description'];?></p>
    <?php endif;?>
    <?php if($academic_partners_section['ac_authorized_partner_logo']):?>
        <div class="wrapper-img" align="center">
        <img class="ap-logo" src="<?= $academic_partners_section['ac_authorized_partner_logo']['url'] ?>">
      </div>
        <?php endif ;?>
    <?php if($academic_partners_section['ac_cta']):?>
    <div class="partners-desc-area mb-5">
       <div class="partner-btn">
        <a href="<?= $academic_partners_section['ac_cta']['url'];?>" class="btn btn-primary training-partner-form">
        <?= $academic_partners_section['ac_cta']['title'];?></a>
       </div>
      </div>
      <?php endif;?>
      <?php endif;?>
      <div class="row gy-lg-5 gy-3">
       <?php if (!empty($acedemicpartners)) { ?>
        <?php foreach ($acedemicpartners as $acedmic) { ?>
         <?php $featured_img_url = get_the_post_thumbnail_url($acedmic->ID, 'full'); ?>
         <?php $visit_url = get_post_meta($acedmic->ID, 'visit_url', true); ?>
         <div class="col-lg-4 col-md-6">
          <div class="mission-value-box certified-box">
           <div class="certified-icon"><img src="<?php echo $featured_img_url; ?>"></div>
           <div class="corevalue-hd">
            <?php echo $acedmic->post_title; ?>
           </div>
           <!-- <div class="corevalue-desc">
            <?php echo $acedmic->post_content; ?>
           </div> -->
           <div class="certified-btn mt-2"><a href="<?php echo $visit_url; ?>" class="btn btn-primary" target="_blank">Visit Us</a>
         </div>
          </div>
         </div>
        <?php } ?>
       <?php } ?>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>

 <section class="cmn-section  pt-0 esteemed-partners-section">
  <div class="container">
   <div class="row">
    <div class="col-lg-12">
     <div class="esteemed-partners-cnt">
     <?php if($authorized_content_section):?>
      <?php if($authorized_content_section['acp_heading']):?>
      <h2 class="cmn-hd mb-4"><?= $authorized_content_section['acp_heading'];?> </h2>
      <?php endif;?>
      <?php if($authorized_content_section['acp_description']):?>
    <p class="text-center"><?= $authorized_content_section['acp_description'];?></p>
    <?php endif;?>
    <?php if($authorized_content_section['acp_authorized_partner_logo']):?>
        <div class="wrapper-img" align="center">
        <img class="ap-logo" src="<?= $authorized_content_section['acp_authorized_partner_logo']['url'] ?>">
      </div>
        <?php endif ;?>
    <?php if($authorized_content_section['acp_cta']):?>
      <div class="partners-desc-area mb-5">
       <div class="partner-btn">
        <a href="<?= $authorized_content_section['acp_cta']['url'];?>" class="btn btn-primary training-partner-form"><?= $authorized_content_section['acp_cta']['title'];?></a>
       </div>
      </div>
      <?php endif;?>
      <?php endif;?>
      <div class="row gy-lg-5 gy-3">
       <?php if (!empty($contentpartners)) { ?>
        <?php foreach ($contentpartners as $content) { ?>
         <?php $featured_img_url = get_the_post_thumbnail_url($content->ID, 'full'); ?>
         <?php $visit_url = get_post_meta($content->ID, 'visit_url', true); ?>
         <div class="col-lg-4 col-md-6">
          <div class="mission-value-box certified-box">
           <div class="certified-icon"><img src="<?php echo $featured_img_url; ?>"></div>
           <div class="corevalue-hd">
            <?php echo $content->post_title; ?>
           </div>
          <!--  <div class="corevalue-desc">
            <?php echo $content->post_content; ?>
           </div> -->
           <div class="certified-btn mt-2"><a href="<?php echo $visit_url; ?>" class="btn btn-primary" target="_blank">Visit Us</a>
         </div>
          </div>
         </div>
        <?php } ?>
       <?php } ?>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>
</div>
</div>
<?php
get_footer();
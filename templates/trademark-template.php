<?php
/*
* Template Name: TrademarkTemplate
*/
get_header();
global $post;

$trademakr_subtext = get_field('trademakr_sub_text');
$trademakr_maintext = get_field('trademakr_main_text');
$trademakr_content = get_field('trademakr_content_text');
$importance = get_field('importance_of_trademarks');
$importancebtm = get_field('importance_btm');
$importancebottom = get_field('importance_bottom');
$identity = get_field('our_identity');


?>
 <div class="middle-section">
   <div class="inner-page certification-page"> 
    <section class="trademakr_text-image cert-spec-section listing-pages mb-2 pb-lg-3 d-flex justify-content-center align-items-center">
      <div class="container maxwidth">
	  <h1 class="mb-2 mb-xl-5"><?php echo get_the_title(); ?> </h1>
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="trademakr-img">
            <?php if( get_field('trademakr_image') ): ?>
               <img src="<?php the_field('trademakr_image'); ?>" alt="Trademakr Image" />
            <?php endif; ?>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="trademakr-text">
                <?php if( $trademakr_subtext ): ?>
                  <!--small><?php echo $trademakr_subtext;?></small-->
                <?php endif;?>
                <?php if( $trademakr_maintext ): ?>
                  <h2 class="mt-2 mb-4"><?php echo $trademakr_maintext;?></h2>
                <?php endif;?>
                <?php if( $trademakr_content ): ?>
                  <p class="mb-5"><?php echo $trademakr_content;?></p>
                <?php endif;?>
            </div>
          </div>
        </div>
      </div>
    </section><!--/#TextWithImage-->

    <section class="cmn-section  tmportance">
      <div class="container maxwidth">
        <div class="row">
          <div class="col-lg-12 col-md-12">
              <div class="importance_heading">
              <?php if( $importance ): ?>
                  <h2 class="mt-2 mb-4"><?php echo $importance;?></h2>
                <?php endif;?>
                <?php if( $identity ): ?>
                  <p class="mb-5"><?php echo $identity;?></p>
                <?php endif;?>
              </div>
          </div>
        </div>
        <?php if( have_rows('identity_card') ): ?> 
            <div class="row">
               <?php while( have_rows('identity_card') ): the_row(); 
                  $identityicon = get_sub_field('identity_icon');
                  $identityname = get_sub_field('identity_name');
                  $identitytext = get_sub_field('identity_text');
                  ?> 
               <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card core_value text-center">
                     <?php if( $identityicon ): ?>
                     <img src="<?php echo $identityicon;?>" alt="Identity Icon"/>
                      <?php endif;?>
                     <?php if( $identityname ): ?>
                     <h3><?php echo $identityname;?></h3>
                      <?php endif;?>
                      <?php if( $identitytext ): ?>
                     <p><?php echo $identitytext;?></p>
                      <?php endif;?>
                  </div>            
               </div>
               <?php endwhile; ?> 
            </div>
            <?php endif; ?>
      </div>
    </section><!--/#CoreValue-->

    <section class="tmportance_btm pb-5">
      <div class="container maxwidth">
        <div class="row">
          <div class="col-lg-12 col-md-12">
              <div class="importance_heading">
              <?php if( $importancebtm ): ?>
                  <?php echo $importancebtm;?>  
                <?php endif;?>               
              </div>
          </div>
        </div>
      </div>
     </section><!--/#Course-->
    
    <section class="list-of_the-course pb-5">
      <div class="container">
        <?php if( have_rows('course_lists') ): ?> 
          <div class="row">
            <?php while( have_rows('course_lists') ): the_row();               
                  $coursename = get_sub_field('course_name');
                  $courselink = get_sub_field('course_link');
                  ?> 
              <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-4">
                <div class="tm_card">
                   <?php if( $coursename ): ?>
                    <h4>
                        <?php if(!empty($courselink)) : ?>
                          <a href="<?php echo $courselink; ?>"><?php echo $coursename; ?></a>
                        <?php else : ?>
                          <?php echo $coursename; ?>
                        <?php endif; ?>
                    </h4>
                    <?php endif; ?>
                </div>
              </div>
            <?php endwhile; ?> 
          </div>
        <?php endif; ?>
      </div>                    
    </section><!--/#Course-->

    <section class="tmportance_btm pb-5">
      <div class="container maxwidth">
        <div class="row">
          <div class="col-lg-12 col-md-12">
              <div class="importance_heading">
              <?php if( $importancebottom ): ?>
                  <?php echo $importancebottom;?>  
                <?php endif;?>               
              </div>
          </div>
        </div>
      </div>
     </section><!--/#Course-->

    
    
  </div>
</div>
<?php
get_footer();
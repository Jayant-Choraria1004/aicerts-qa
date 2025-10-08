<?php /* Template Name: Aicerts Marketing 
  */
get_header();
$topcontent = get_field('top_content');
$whatweoffer = get_field('what_we_offer');
$benefitsofenrolling = get_field('benefits_of_enrolling');
$ftheading = get_field('form_top_heading');
$fbtext = get_field('form_bottom_text');
$testimonials = get_field("testimonials")
?>

<style>
.user-testimonial.testimonial-section.tm-light .card-tm, .testimonial-section .card-tm
    {
    background: linear-gradient(180deg, #000 0%, #333853 100%);
    border-top: 1px solid rgba(0, 0, 0, .125); 
    border-bottom: none;  
    }
.user-testimonial .tm-user {display: block;text-align: center;padding-bottom: 30px;}
.user-testimonial .tm-user .userimg {margin: 0 !important;}
.user-testimonial .tm-user .userimg img { margin: 0px auto 10px;}    
ul.offer_points li {
    margin-bottom: 2rem;
    position: relative;
    padding-left: 2rem;
}
ul.offer_points li::before {
    position: absolute;
    content: "";
    width: 10px;
    height: 10px;
    background: var(--primary-color);
    top: 50%;
    transform: translateY(-50%);
    left: 0;
}
.user-testimonial .owl-item {
    justify-content: center;
}

.offer_form h5 {
    font-weight: 700;
    margin-bottom: 40px !important;
}
.sub_heading {
    font-size: 24px;
    line-height: normal;
    font-weight: 700;
}.sub_heading {
    font-size: 24px;
    line-height: normal;
    font-weight: 700;
}
.offer_form p {
    font-size: 14px;
}
.offer_ribbine {
    background :linear-gradient(90deg, #C9A74F 0%, #FAF59E 50%, #C9A74F 100%);
    padding: 20px 50px 20px 20px;
    position: absolute;
    border-radius: 100px 0px 0px 100px;
    width: 380px;
    top: 20px;
    right: 0;
    }
.offer_ribbine p {
    margin: 0;
    font-weight: 700;
    color: #000;
}
@media (max-width:768px) {
    .offer_ribbine {
        position: relative;
        padding: 20px;
        width: 100%;
        margin-top: 40px;
        margin-left: 20px;
        top: 0px;
    }
}

</style>

<div class="middle-section">
    <div class="inner-page blog-bg pb-3">
    <div class="offer_ribbine"><p>First 100 certifications are free! Don't miss out on this limited offer.</p></div>
    <?php if( $topcontent ): ?>    
    <section class="cert-spec-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="cmn-hd aos-init aos-animate sub_heading" data-aos="fade-up" data-aos-duration="1000"><?php echo $topcontent;?></h5>
                </div>
            </div>
        </div>
    </section><!--TopSecttion-->
    <?php endif;?>

    <section class="WhatWeOffer pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">               
                    <div class="whatweoffer-info">
                    <?php if( $whatweoffer ): ?>
                        <h2 class="mb-5"><?php echo $whatweoffer;?></h2>
                    <?php endif;?>    
                    <?php if( have_rows('offer_points') ): ?>
                        <ul class="offer_points">
                        <?php while( have_rows('offer_points') ): the_row(); 
                            $offerpoint = get_sub_field('offer_point');
                            ?> 
                            <?php if( $offerpoint ): ?>
                            <li><h5><?php echo $offerpoint;?></h5></li>
                            <?php endif;?>
                            <?php endwhile; ?> 
                        </ul>
                        <?php endif; ?>  
                    </div>                    
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="offer_form">
                    <?php if( $ftheading ): ?>
                        <h5 class="text-center mb-4"><?php echo $ftheading;?></h5>
                    <?php endif;?>
                        <?php echo get_field('lead_form'); ?>
                        
                        <?php if( $fbtext ): ?>
                            <p class="text-center"><?php echo $fbtext;?></p>
                        <?php endif;?>  
                    </div>
                </div>
            </div>
        </div>
    </section><!--WhatWeOffer-->

    <section class="benefitsofenrolling values pb-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading text-center mb-5">
                        <?php if( $benefitsofenrolling ): ?>
                            <h2 class="text-center mb-5"><?php echo $benefitsofenrolling;?></h2>
                        <?php endif;?> 
                    </div>
                </div>
            </div>
            <?php if( have_rows('benefits') ): ?> 
            <div class="row justify-content-center">
               <?php while( have_rows('benefits') ): the_row(); 
                  $valueicon = get_sub_field('value_icon');
                  $valuename = get_sub_field('value_name');
                  ?> 
               <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card">
                     <?php if( $valueicon ): ?>
                     <img src="<?php echo $valueicon;?>" alt=""/>
                      <?php endif;?>
                     <?php if( $valuename ): ?>
                     <h3><?php echo $valuename;?></h3>
                      <?php endif;?>
                  </div>            
               </div>
               <?php endwhile; ?> 
            </div>
            <?php endif; ?>
        </div>
    </section><!--Benefitsofenrolling-->

    <section class="cmn-section user-testimonial testimonial-page testimonial-section tm-light pt-5 text-center">
        <div class="container">
            <h2 class="text-white text-center sub_text">Hear it from the Learners</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel client-testimonial-carousel">   
                        <?php foreach($testimonials as $testimonial): ?> 
                            <div class="single-testimonial-item">
                            <div class="tm-user">
                                <div class="userimg">
                                <img src="<?php echo $testimonial['employee_photo']; ?>" width="200"
                                height="200" alt="" />
                                </div>
                                <div class="user_info">    
                                    <div class="user_flex">
                                        <h3> <?php echo $testimonial['employee_name']; ?></h3>
                                    </div>
                                    <div class="user_flex user-post">
                                    <span><?php echo $testimonial['employee_company']; ?></span>
                                    </div>                  
                                </div>
                            </div>
                            <div class="card card-tm">
                                <p><?php echo $testimonial['description']; ?></p>                   
                            </div>                        
                            </div>   
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section><!--Testimonials-->   


</div>
</div>

<script>
jQuery(document).ready(function(){
  jQuery(".owl-carousel").owlCarousel({
      loop: true,
      margin: 30,
      autoplay:false,
      autoplayTimeout:5000,
      autoplayHoverPause:true,
      dots: true,
      nav: true,
      items: 1,
      responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            1000:{
                items:3,
            }
        }                         
    });
  });
</script>

<!--Footer-->
<?php
// get_sidebar();
get_footer();
?>
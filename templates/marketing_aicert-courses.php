<?php /* Template Name: Marketing - Aicerts Courses */ ?>  
<?php
 get_header();
 $coursename = get_field('course_name');
 $courseshort = get_field('course_short_text');
 $enrollbtntext = get_field('enroll_btn_text');
 $enrollbtnlink = get_field('enroll_btn_link');
 $benefitsofenrolling = get_field('benefits_of_enrolling');
 $aiexecutiveheading = get_field('ai_executive_heading');
 $aiexecutivesource = get_field('ai-executive_source');
 $whyaicerts = get_field('why_ai_certs');
 $whyaicertscontent = get_field('why_ai_certs_content');
 $whatweoffer = get_field('what_we_offer');
 $FormTitle = get_field('executive_form_title');
 $Form = get_field('executive_form');
 $csuiteheading = get_field('c-suite_heading');
 $midtierheading = get_field('mid-tier_heading');
 $frontlineheading = get_field('front_line_heading');
 $testimonials = get_field("testimonials")

 ?>

<style>
.benefitsofenrolling h3{font-size: 18px;}   
.values .card {border-radius: 0;} 
.aiexecutivesource p a {font-weight: 700;}
.aiexecutivesource {display: flex;flex-wrap: wrap;column-gap: 20px;}
.aiexecutivesource p {padding: 10px;border: 1px solid #ccc;flex: 1;text-align: center;}
.user-testimonial.testimonial-section.tm-light .card-tm, .testimonial-section .card-tm
    {
    background: linear-gradient(180deg, #000 0%, #333853 100%);
    border-top: 1px solid rgba(0, 0, 0, .125); 
    border-bottom: none;  
    }
.user-testimonial .tm-user {display: block;text-align: center;padding-bottom: 30px;}
.user-testimonial .tm-user .userimg {margin: 0 !important;}
.user-testimonial .tm-user .userimg img { margin: 0px auto 10px;}  
.single-testimonial-item {
    background: rgb(0 0 0 / 2%);
}
ul.offer_points li {
    margin-bottom: 1rem;
    position: relative;
    padding-left: 1.5rem;
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
.whatweoffer-info h4 {
    font-weight: 600;
    margin-bottom: 20px;
}
ul.offer_points li h5 {
    font-size: 1rem;
}
.whatweoffer-info {
    border: 1px solid #eee;
    padding: 20px;
}
</style>

<div class="middle-section">
   <div class="inner-page certification-page pt-5">
    <section class="cert-spec-section pb-5">
         <div class="container maxwidth">
            <div class="row align-items-center">               
                <div class="col-lg-6">   
                    <div class="aicerts_course-info">
                        <?php if( $coursename ): ?>
                            <h1 class="aicerts_course-name"><?php echo $coursename;?></h1>
                        <?php endif;?>
                        <?php if( $courseshort ): ?>
                            <h2 class="aicerts_course-short-text"><?php echo $courseshort;?></h2>
                        <?php endif;?>
                        <?php if( $enrollbtnlink ): ?>	
                        <a href="<?php echo $enrollbtnlink ?>" class="btn btn-primary mb-3">
                            <?php echo $enrollbtntext;?>
                        </a>
                        <?php endif;?>
                    </div>
               </div>
                <div class="col-lg-6">
                    <div class="aicerts_course-video">
                    <iframe width="100%" height="350" src="https://www.youtube.com/embed/zvXA5cH1CVA?si=hJLLFHT_RFqBSAM1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
         </div>
     </section><!--#ImageWithTet-->

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
               <div class="col-lg-3 col-md-6 mb-4">
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

    <section class="AI-Executive pt-5">
      <div class="container">
        <div class="row">
        <div class="col-12">
            <div class="section_heading text-center mb-5">
                <?php if( $aiexecutiveheading ): ?>
                    <h2 class="text-center mb-5"><?php echo $aiexecutiveheading;?></h2>
                <?php endif;?> 
                </div>    
            </div>
        </div>
        <div class="col-12">
            <div class="aiexecutivesource">
                <?php if( $aiexecutivesource ): ?>
                     <?php echo $aiexecutivesource;?>
                <?php endif;?>                      
            </div>
        </div>
      </div>                  
    </section><!--AI-Executive-->  

    <section class="WhatWeOffer pb-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading text-center mb-5">
                        <?php if( $whatweoffer ): ?>
                            <h2 class="text-center mb-5"><?php echo $whatweoffer;?></h2>
                        <?php endif;?>    
                    </div>
                </div>
            </div>
            <div class="row">
                
                <div class="col-lg-4 col-md-6">               
                    <div class="whatweoffer-info">    
                    <?php if( $csuiteheading ): ?>
                        <h4><?php echo $csuiteheading;?></h4>
                    <?php endif;?>  
                    <?php if( have_rows('c-suite_managers') ): ?>                       
                        <ul class="offer_points">
                        <?php while( have_rows('c-suite_managers') ): the_row();                             
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
                <div class="col-lg-4 col-md-6">               
                    <div class="whatweoffer-info">    
                    <?php if( $midtierheading ): ?>
                        <h4><?php echo $midtierheading;?></h4>
                    <?php endif;?>  
                    <?php if( have_rows('mid-tier_managers') ): ?>                       
                        <ul class="offer_points">
                        <?php while( have_rows('mid-tier_managers') ): the_row();                             
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
                <div class="col-lg-4 col-md-6">               
                    <div class="whatweoffer-info">    
                    <?php if( $frontlineheading ): ?>
                        <h4><?php echo $frontlineheading;?></h4>
                    <?php endif;?>  
                    <?php if( have_rows('front_line_managers') ): ?>                       
                        <ul class="offer_points">
                        <?php while( have_rows('front_line_managers') ): the_row();                             
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
            </div>
        </div>
    </section><!--WhatWeOffer-->
    
    <section class="WhyAICerts pt-5">
      <div class="container">
        <div class="row">
        <div class="col-12">
            <div class="section_heading text-center mb-5">
                <?php if( $whyaicerts ): ?>
                    <h2 class="text-center mb-5"><?php echo $whyaicerts;?></h2>
                <?php endif;?> 
                </div>    
            </div>
        </div>
        <div class="col-12">
            <div class="WhyAICertsContent text-center">
                <?php if( $whyaicertscontent ): ?>
                     <?php echo $whyaicertscontent;?>
                <?php endif;?>                      
            </div>
        </div>
      </div>                  
    </section><!--WhyAICerts-->  

    <section class="cmn-section user-testimonial testimonial-page testimonial-section tm-light pt-5 text-center">
        <div class="container">
            <h2 class="text-white text-center sub_text">What Executives Are Saying</h2>
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

    <section class="ExecutiveForm pb-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading text-center mb-5">
                        <?php if( $FormTitle ): ?>
                            <h2 class="text-center mb-5"><?php echo $FormTitle;?></h2>
                        <?php endif;?> 
                    </div>    
                </div>
                <div class="col-12">
                    <div class="form_short_code">
                        <?php if( $Form ): ?>
                            <?php echo $Form;?>
                        <?php endif;?>                      
                    </div>
                </div>
            </div>
        </div>
    </section><!--AI ExecutiveAI Executive-->

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


<?php
// get_sidebar();
get_footer();
?>
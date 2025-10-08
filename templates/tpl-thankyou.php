<?php 
/* 
Template Name: Thankyou Page 
*/ 

$thankyou_title = get_field('thankyou_title');
$thankyou_message = get_field('thankyou_message');  

$button_1 = get_field('button_1');
$button_2 = get_field('button_2');


get_header(); 

   

?> 
<!--Header End-->
<!--Header End-->
<div class="middle-section">
   <div class="inner-page blog-bg">
       <section class="cert-spec-section listing-pages">
         <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="thankyoupage-cnt">					
						<img src="<?php echo get_template_directory_uri(); ?>/images/thankyou-icon.svg" alt="<?php echo $thankyou_title; ?>" class="my-5"/>
						<h1><?php echo $thankyou_title; ?></h1>
						<h3><?php echo $thankyou_message; ?></h3>
						<div class="thankyoubtns">
                     <?php if(isset($_REQUEST['publication']) && !empty($_REQUEST['publication'])) { ?>
                         <a href="<?php echo esc_url($_REQUEST['publication']); ?>" class="btn btn-primary" download>Download Publication</a> <br\>
                     <?php } ?>
                     <?php if(isset($_REQUEST['program_guide']) && !empty($_REQUEST['program_guide'])) { ?>
                         <a href="<?php echo esc_url($_REQUEST['program_guide']); ?>" class="btn btn-primary" download>Download</a> <br\>
                     <?php } ?>
                     <?php if(isset($_REQUEST['executive_summary']) && !empty($_REQUEST['executive_summary'])) { ?>
                         <a href="<?php echo esc_url($_REQUEST['executive_summary']); ?>" class="btn btn-primary" download>Download</a> <br\>
                     <?php } ?>                    
                     <?php if(!empty($button_1['url'])) { ?>
                        <a href="<?php echo $button_1['url']; ?>" class="btn btn-primary"><?php echo $button_1['title']; ?></a> 
                     <?php } ?>
                     <?php if(!empty($button_2['url'])) { ?>
                        <a href="<?php echo $button_2['url']; ?>" class="btn btn-outline-primary"><?php echo $button_2['title']; ?></a>  
                     <?php } ?>
						</div>
						<img src="<?php echo get_template_directory_uri(); ?>/images/thankyou-page-img.svg" alt="<?php echo $thankyou_title; ?>" />
					</div>
				</div>			
			</div>            
         </div>
     </section><!--#CaseStudies-->
   </div>
</div>

<!--Footer-->




<?php
// get_sidebar();
get_footer(); 
?>
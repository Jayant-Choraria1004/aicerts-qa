<?php
/*
 *    Template Name: Product Videos V1
 */
get_header();

$testimonials = get_field("testimonials");


?>
<div class="middle-section">
  

<section class="banner-video-section pv1-banner">
	<div class="container maxwidth">
		<div class="row">
			<div class="col-lg-12">
        <div class="video-banner-cnt">
            <h1>Experience Our <span class="primary_color">Products</span></h1>
            <p>Watch in-depth product videos showcasing our latest innovations.</p>
            <a href="#" class="btn btn-primary me-3" >Know more</a>
            
        </div>
      </div>
		</div>
	</div>
</section>

<section class="pv1-cmn-sec">
  <div class="container">
    <div class="row gx-xl-5">
      
      <div class="col-xl-7 col-lg-6">
        <div class="pv1-about-video mb-4 mb-lg-0">
          <img class="w-100" src="<?php echo esc_url(get_template_directory_uri()."/images/pv1-about-image.png");?>"/>
        </div>
      </div>

      <div class="col-xl-5 col-lg-6">
        <div class="pv1-about-cnt">
          <h2>About AICERTs</h2>
          <p>Discover your pathway to success with AI Certs, the leading certification platform for AI and blockchain courses. Our industry-recognized certifications, guided by expert instructors, provide flexible learning options and hands-on projects. Whether you're a novice or a seasoned pro, AI Certs offers the ideal courses for your needs.
          </p>
          <a href="#" class="btn btn-outline-dark"><span><i class="fa-regular fa-heart"></i> Like</span></a> <a href="#" class="btn btn-outline-dark"><span><i class="fa-solid fa-arrow-up-from-bracket"></i> Share</span></a>
        </div>
      </div>

    </div> 
  </div> 
</section>  

<section class="pv1-cmn-sec cmn-sliderdots">
  <div class="container">
    <div class="row">
      <h2 class="mb-3 mb-lg-4">Our Products</h2>
      <div class="col-xl-12">
        
      <div class="owl-carousel pv1-carousel owl-theme">
        <div class="pv1-caro-card">
            <div class="pvideo-sm">
            <img class="w-100" src="<?php echo esc_url(get_template_directory_uri()."/images/pv1-about-image.png");?>"/>
            </div>
            <h3><a href="#">Certs 365</a></h3>
            <p>Rhoncus pulvinar tincidunt integer netus lobortis euismod ipsum iaculis.</p>
            <p class="pv1-learnmore mb-0 text-end"><a href="#">Learn More</a></p>
        </div>
      
        
      </div> 
    </div> 
  </div> 
</section>  

<section class="pv1-cmn-sec">
  <div class="container">
    <div class="row">
      <h2 class="mb-3 mb-lg-4 primary_color">Resources Videos</h2>
      
      <div class="col-lg-4 col-md-6 mb-4">        
        <div class="rv-card">
          <div class="rv-video">
            <img class="w-100" src="<?php echo esc_url(get_template_directory_uri()."/images/pv1-about-image.png");?>"/>
          </div>
          <h3 class="mb-0"><a href="#">Introduction to AI+ Executive™ Certification</a></h3>
          <p class="mb-0">Welcome to our deep dive into the AI+ Executive Certification, offered exclusively by www.aicerts.ai. This comprehensive video introduction is your first step towards mastering artificial intelligence and leveraging it to enhance your leadership skills and business strategies.</p>
          <a href="#" class="rv-viewlink">View Course <i class="fa-solid fa-arrow-right-long ms-1"></i></a>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 mb-4">        
        <div class="rv-card">
          <div class="rv-video">
            <img class="w-100" src="<?php echo esc_url(get_template_directory_uri()."/images/pv1-about-image.png");?>"/>
          </div>
          <h3 class="mb-0"><a href="#">Introduction to AI+ Executive™ Certification</a></h3>
          <p class="mb-0">This comprehensive video introduction is your first step towards mastering artificial intelligence and leveraging it to enhance your leadership skills and business strategies.</p>
          <a href="#" class="rv-viewlink">View Course <i class="fa-solid fa-arrow-right-long ms-1"></i></a>
        </div>
      </div>


    </div> 
  </div> 
</section> 






</div>


<?php
get_footer();
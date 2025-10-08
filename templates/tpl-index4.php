<?php /* Template Name: Template HomeV4 */ 
get_header(); 
?>

<section class="HomeSlideshow top-header-blank common-section">
    <div class="container">
        <div class="owl-carousel owl-theme cmn-sliderdots offsetarrow" id="HomeV4Slider">
            <div class="item">
                <div class="row g-4 flex-row-reverse align-items-center ps-1 pe-1">
                    <div class="col-lg-6">
                        <div class="SlideImg">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/HSlide1.png" alt="HomeSlide">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="SlideInfo">
                            <h2>Future-Proof Your Career with AI and Blockchain Skills</h2>
                            <h3>Join thousands earning globally respected AI+ certifications — practical, role-based, and built for real-world growth.</h3>
                            <a href="#" class="btn btn-primary-outline">Explore Certifications</a>    
                        </div>
                    </div>
                </div>
            </div>
            <!-- Owl Item End -->
            <div class="item">
                <div class="row g-4 flex-row-reverse align-items-center ps-1 pe-1">
                    <div class="col-lg-6">
                        <div class="SlideImg">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/HSlide2.png" alt="HomeSlide">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="SlideInfo">
                            <h2>Join 50,000+ Learners Leading the AI Future</h2>
                            <h3>Globally trusted. Enterprise-ready. Proven success.</h3>
                            <a href="#" class="btn btn-primary-outline">View Success Stories</a>    
                        </div>
                    </div>
                </div>
            </div>
            <!-- Owl Item End -->
            <div class="item">
                <div class="row g-4 flex-row-reverse align-items-center ps-1 pe-1">
                    <div class="col-lg-6">
                        <div class="SlideImg">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/HSlide3.png" alt="HomeSlide">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="SlideInfo">
                            <h2>Not Sure Where to Start? Let AI Guide You</h2>
                            <h3>Our AI Advisor helps you choose the right certification in seconds.</h3>
                            <a href="#" class="btn btn-primary-outline">Ask the AI Advisor</a>    
                        </div>
                    </div>
                </div>
            </div>
            <!-- Owl Item End --> 
            <div class="item">
                <div class="row g-4 flex-row-reverse align-items-center ps-1 pe-1">
                    <div class="col-lg-6">
                        <div class="SlideImg">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/HSlide4.png" alt="HomeSlide">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="SlideInfo">
                            <h2>Trusted by Global Enterprises and Universities</h2>
                            <h3>Certifications aligned with NASSCOM, FedLearn, and enterprise standards.</h3>
                            <a href="#" class="btn btn-primary-outline">Partner With Us</a>    
                        </div>
                    </div>
                </div>
            </div>
            <!-- Owl Item End -->   
        </div>
        <!-- Owl Carousel End -->
    </div>
</section>
<!-- HomeSlideshow -->

<section class="CertificationCard common-section cmn-section text-center light-primary-bg">
    <div class="container">
        <div class="MyCertiCard">
            <div class="section-header text-center">
                <h2>AI CERTs Professional Certification</h2>
                <p>Advance your career with globally recognized AI certifications.<br> Join thousands of professionals who have validated their expertise with AI CERTs.</p>
                 <a href="#" class="btn btn-primary">Discover More</a>
            </div>
        </div>
    </div>
</section>
<!-- CertificationCard -->

<section class="Subscribe cmn-section text-center">
    <div class="container">
        <div class="section-header">
            <h2>Stay Ahead in AI</h2>
            <h4>Join 10,000+ learners receiving AI insights, certification updates, and career opportunities</h4>
        </div>
        <div class="SubscribFrom">
                <form action="#">
                    <div class="input-group justify-content-center gap-3">
                        <input class="form-control" name="email" id="email" type="email" placeholder="Enter your email address" required>
                        <button class="btn btn-primary" type="submit">Subscribe</button>
                    </div>
                </form>
        </div>
    </div>
</section>
<!-- SubscribeCard -->

<!--Footer-->
<?php
// get_sidebar();
get_footer();
?>
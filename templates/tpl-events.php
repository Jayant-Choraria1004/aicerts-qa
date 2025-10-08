<?php /* Template Name: Template Events*/ 
get_header(); 
?>
<div class="middle-section">
<section class="midd-banner event_slider">    
           <div class="owl-carousel owl-theme midd-banner-slider">             
                <div class="item">
                  <div class="midd-banner-slide d-flex">                    
                  <img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()."/images/Banner01.png"); ?>" alt="Slide">                 
                     <div class="main-banner-cnt">
                        <div class="container">
                          <div class="slider_content">
                            <h4 class="slide-sub">Event Highlight</h4>
                            <h2 class="video_title Slide_title">AI Cterts™ <br> Partner Summit <span> 2024</span></h2>
                            <h3 class="slide-sub-tex">23-26 July 2024 - Florida, USA</h3>
                          </div>
                        </div>
                     </div>
                  </div>                           
               </div>
            </div> <!--#BannerTasEnd-->        
   </section>

   <section class="cert-spec-section UpcomingEvents">
    <div class="container maxwidth">
        <div class="row">
            <div class="col-12">
                <div class="common-cnt section_header">
                    <h2>Upcoming Events</h2>
                </div>
            </div>
        </div>
        <div class="row gy-5">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="event_grid">
                    <div class="event_image">
                    <img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()."/images/event1.png"); ?>" alt="Event">
                    </div>
                    <div class="event_info">
                        <h3>AI Partner Summit 2024</h3>
                        <p>23 July, 2024 - Florida, USA</p>
                    </div>
                </div>
            </div><!--#ColEnd-->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="event_grid">
                    <div class="event_image">
                    <img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()."/images/event2.png"); ?>" alt="Event">
                    </div>
                    <div class="event_info">
                        <h3>Blockchain Summit 2025</h3>
                        <p>23 July, 2024 - Florida, USA</p>
                    </div>
                </div>
            </div><!--#ColEnd-->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="event_grid all_event">
                    <h3>All Events</h3>
                    <ul class="all-events">
                        <li><a href="#">Upcoming Events</a></li>
                        <li><a href="#">Online Workshops</a></li>
                        <li><a href="#">Virtual Events</a></li>
                        <li><a href="#">Past Events</a></li>
                    </ul>
                </div>
            </div><!--#ColEnd-->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="event_grid">
                    <div class="event_image">
                    <img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()."/images/event3.png"); ?>" alt="Event">
                    </div>
                    <div class="event_info">
                        <h3>AI Certs™ Summit Los Angeles</h3>
                        <p>23 July, 2024 - Los Angeles, USA</p>
                    </div>
                </div>
            </div><!--#ColEnd-->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="event_grid">
                    <div class="event_image">
                    <img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()."/images/event4.png"); ?>" alt="Event">
                    </div>
                    <div class="event_info">
                        <h3>AI Certs™ Summit USA</h3>
                        <p>23 July, 2025 - Chicago, USA</p>
                    </div>
                </div>
            </div><!--#ColEnd-->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="event_grid">
                    <div class="event_image">
                    <img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()."/images/event5.png"); ?>" alt="Event">
                    </div>
                    <div class="event_info">
                        <h3>AI Certs™ Summit India</h3>
                        <p>23 July, 2025 - Delhi, India</p>
                    </div>
                </div>
            </div><!--#ColEnd-->
        </div><!--#RowEnd-->
    </div>
   </section><!--#UpcomingEvents-->
    
   <section class="OurEventsNews mb-5">
    <div class="container maxwidth">
        <div class="row align-items-center">
            <div class="col-lg-10 col-md-8 col-12">
                <h3>Stay Updated with Our Events, Workshops, and more</h3>
            </div>
            <div class="col-lg-2 col-md-4 col-12">
                <div class="btn_ctn">
                <a href="#" class="btn btn-primary">Subscribe Now!</a>
                </div>
            </div>
        </div>
    </div>
   </section>

</div>


<!--Footer-->
<?php
// get_sidebar();
get_footer(); 
?> 
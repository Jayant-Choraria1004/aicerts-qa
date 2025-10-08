<?php 
    /* Template Name: Archive Events Page */ 
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
			
			
			
			<div class="col-12">
                <div class="eventstab">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
					  <li class="nav-item" role="presentation">
						<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#AllEvents" type="button" role="tab" aria-controls="home" aria-selected="true">All Events</button>
					  </li>
					  <li class="nav-item" role="presentation">
						<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#UpcomingEvents" type="button" role="tab" aria-controls="profile" aria-selected="false">Upcoming Events</button>
					  </li>
					  <li class="nav-item" role="presentation">
						<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#VirtualEvents" type="button" role="tab" aria-controls="contact" aria-selected="false">Virtual Events</button>
					  </li>
					  <li class="nav-item" role="presentation">
						<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#OnlineWorkshops" type="button" role="tab" aria-controls="contact" aria-selected="false">Online Workshops</button>
					  </li>
					</ul>
					<div class="tab-content" id="myTabContent">
					  <div class="tab-pane fade show active" id="AllEvents" role="tabpanel" aria-labelledby="home-tab">
						<?php $my_query = new WP_Query('post_type=events'); ?>
						<div class="row gy-5">
							<?php 
								if($my_query->have_posts()) {
									$counter = 1;
									while($my_query->have_posts()) {
										$my_query->the_post();
							?>
							<div class="col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="event_grid">
									<div class="event_image">
									<!-- <img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()."/images/event1.png"); ?>" alt="Event"> -->
									<img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="Event">
									</div>
									<div class="event_info">
										<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
										<p>23 July, 2024 - Florida, USA</p>
									</div>
								</div>
							</div><!--#ColEnd-->
							<?php if($counter == 2){ ?>
							<!--div class="col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="event_grid all_event">
									<h3>All Events</h3>
									<ul class="all-events">
									<?php $eventmenus = get_field('event_menu', 'option'); ?>
									<?php foreach($eventmenus as $eventmenu): ?>
										<li><a href="<?php echo $eventmenu['menu_name']['url']; ?>"><?php echo $eventmenu['menu_name']['title']; ?></a></li>
									<?php endforeach; ?>
									</ul>
								</div>
							</div--><!--#ColEnd-->
							<?php } ?>
							<?php
										$counter++;
									}
								wp_reset_postdata();
							}
							?>
						</div><!--#RowEnd-->
					  </div>
					  
					  
					  <div class="tab-pane fade" id="UpcomingEvents" role="tabpanel" aria-labelledby="profile-tab">Upcoming Events</div>
					  <div class="tab-pane fade" id="VirtualEvents" role="tabpanel" aria-labelledby="contact-tab">Virtual Events</div>
					  <div class="tab-pane fade" id="OnlineWorkshops" role="tabpanel" aria-labelledby="contact-tab">Online Workshops</div>
					</div>
                </div>
            </div>
			
			
        </div>
        
    </div>
   </section><!--#UpcomingEvents-->
</div>

<?php
get_footer(); 
?>
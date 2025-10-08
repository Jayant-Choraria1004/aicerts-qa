<?php /* Template Name: Template Events V2*/ 
get_header(); 
?>
<?php
//upcoming event query
$upcomingevent_args = array(
	'post_type' => 'events',
	'posts_per_page' => 15,
	'tax_query' => array(
		array(
			'taxonomy' => 'eventcategory',
			'field'    => 'slug',
			'terms'    => 'upcoming-events',
		),
	),
);
$upcomingevent = new WP_Query($upcomingevent_args);

//Past event query
$pastevent_args = array(
	'post_type' => 'events',
	'tax_query' => array(
		array(
			'taxonomy' => 'eventcategory',
			'field'    => 'slug',
			'terms'    => 'past-events',
		),
	),
);
$pastevent = new WP_Query($pastevent_args); 

$event_name = get_field('event_name', 'option');
$event_slider_subtitle = get_field('event_slider_subtitle', 'option');
$explore_events_link = get_field('explore_events_link', 'option');

$why_attend_heading = get_field('why_attend_heading');
$why_attend_center_image = get_field('why_attend_center_image');
$arrow_icon_one = get_field('arrow_icon_one');
$arrow_icon_two = get_field('arrow_icon_two');
$arrow_icon_three = get_field('arrow_icon_three');
$arrow_icon_four = get_field('arrow_icon_four');
$arrow_heading_one = get_field('arrow_heading_one');
$arrow_heading_two = get_field('arrow_heading_two');
$arrow_heading_three = get_field('arrow_heading_three');
$arrow_heading_four = get_field('arrow_heading_four');
$arrow_content_one = get_field('arrow_content_one');
$arrow_content_two = get_field('arrow_content_two');
$arrow_content_three = get_field('arrow_content_three');
$arrow_content_four = get_field('arrow_content_four');

$featured_speakers_heading = get_field('featured_speakers_heading');
$speaker_detail = get_field('speaker_detail');
$more_speakers_link = get_field('more_speakers_link');

$partners_heading = get_field('partners_heading');
$partners_logos = get_field('partners_logos');
$see_all_partners_link = get_field('see_all_partners_link');

$faq_heading = get_field('faq_heading');
$faq = get_field('faq');
$event_banner_image = get_field('event_banner_image');

?>
<div class="middle-section">
	<section class="midd-banner event_slider mb-lg-5 mb-3">
		<div class="owl-carousel owl-theme midd-banner-slider">
			<div class="item">
				<div class="midd-banner-slide d-flex">
				<?php if($event_banner_image): ?>
					<img class="img-responsive" src="<?php echo $event_banner_image; ?>" alt="Slide">
				<?php else: ?>
					<img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()."/images/Banner01.png"); ?>" alt="Slide">
				<?php endif; ?>
					<div class="main-banner-cnt">
					<div class="container common-cnt">
						<div class="slider_content">
						<?php if($event_name): ?>
							<h1 class="video_title Slide_title"><?php echo $event_name; ?></h1>
						<?php endif; ?>
						<?php if($event_slider_subtitle): ?>
							<h3 class="slide-sub-tex"><?php echo $event_slider_subtitle; ?></h3>
						<?php endif; ?>
						<?php if($explore_events_link): ?>
							<a href="#exploreevent"><button class="btn btn-primary">Explore Events</button></a>
						<?php endif; ?>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div> <!--#BannerTasEnd-->
   	</section>

	<!--#UpcomingEvents starts-->
	<?php if($upcomingevent->have_posts()) : ?>
		<section class="cert-spec-section UpcomingEvents cmn-sliderdots offsetarrow">
			<div class="container common-cnt">
				<h2>Upcoming <span class="primary_color">Events</span></h2>
				<div class="">
				
				<div class="owl-carousel owl-theme">
				<?php while($upcomingevent->have_posts()) : ?>
					<?php $upcomingevent->the_post(); ?>
					<?php 
						$eventname = get_field('event_name');
						$event_description = get_field('event_description');
						$event_learn_more_url = get_field('event_learn_more_url');
						$event_date = get_field('event_date');
						$event_location = get_field('event_location');
						$thumbnail = get_the_post_thumbnail_url();
					?>
					
						<div class="events_card">
							<div class="event_grid">
								<div class="event_image">
									<?php if($thumbnail): ?>
										<img class="img-responsive" src="<?php echo $thumbnail; ?>" alt="Event">
									<?php else: ?>
										<img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()."/images/img-event2.jpg"); ?>" alt="Event">
									<?php endif; ?>
								</div>
								<div class="event_info">
									<div class="event_datelocation mb-3">
										<?php if($event_date): ?>
											<div><img src="<?php echo esc_url(get_template_directory_uri()."/images/icon-calendar.svg"); ?>" alt="" class="me-1" /> <span><?php echo $event_date; ?></span> </div>
										<?php endif; ?>
										<?php if($event_location): ?>
											<div><img src="<?php echo esc_url(get_template_directory_uri()."/images/icon-location.svg"); ?>" alt="" class="me-1"/> <span><?php echo $event_location; ?></span></div>
										<?php endif; ?>
									</div>
									<?php if($eventname): ?>
										<h4><?php echo $eventname; ?></h4>
									<?php endif; ?>
									<?php if($event_description): ?>
										<p class="d-none"><?php echo $event_description; ?></p>
									<?php endif; ?>
									<?php if($event_learn_more_url): ?>
										<div class="d-flex justify-content-between align-items-center">
											<a href="<?php echo $event_learn_more_url; ?>" target="_blank"><button class="btn btn-primary">Learn More</button></a>
											<!--a href="<?php echo $event_learn_more_url; ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()."/images/icon-share.svg"); ?>" alt=""/></a-->
										</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					
				<?php endwhile; ?>
				</div>
				</div>
				<!--#RowEnd-->
			</div>
		</section>
	<?php endif; ?>

	<!--#Events for patners starts-->
	<?php $event_for_partners_category = get_field('event_for_partners_category', 'option'); ?>
	<?php if(!empty($event_for_partners_category)): ?>
	<section class="ExplorebyCategory eventscarousel UpcomingEvents evencarousel cmn-sliderdots offsetarrow" id="exploreevent">
		<div class="container common-cnt">
			<h2>Events for <span class="primary_color">Partners</span></h2>
			<div class="eventsv2-tab">
				<ul class="nav nav-tabs maintabs" id="myTab" role="tablist">
					
					<?php $numi=5; foreach($event_for_partners_category as $maincatevent): ?>
						<li class="nav-item" role="presentation">
							<button class="nav-link <?php echo ($numi==5) ? 'active' : '' ; ?>" id="<?php echo 'eventhome-tab'.$numi; ?>" data-bs-toggle="tab" data-bs-target="#<?php echo 'target'.$numi; ?>" type="button" role="tab"  aria-selected="<?php echo ($numi==5) ? 'true' : 'false' ; ?>"><?php echo $maincatevent->name; ?></button>
						</li>
					<?php $numi++; endforeach; ?>
				</ul>
				<div class="tab-content" id="myTabContent">
					<?php $numk=5; foreach($event_for_partners_category as $maincatevent): ?>
						<div class="tab-pane fade <?php echo ($numk==5) ? 'active show' : '' ; ?>" id="<?php echo 'target'.$numk; ?>" role="tabpanel">
							<div class="events-subtabs">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<?php $event_sub_category = get_field('sub_category', 'option'); ?>
									<?php $numj=5; foreach($event_sub_category as $eventsubcate): ?>
										<li class="nav-item" role="presentation">
											<button class="nav-link <?php echo ($numj==5) ? 'active' : '' ; ?>" id="<?php echo 'eventhome-tab'.$numj; ?>" data-bs-toggle="tab" data-bs-target="#<?php echo 'subtarget'.$numk.$numj; ?>" type="button" role="tab" aria-controls="home" aria-selected="<?php echo ($numj==5) ? 'true' : 'false' ; ?>"><?php echo $eventsubcate->name; ?></button>
										</li>
									<?php $numj++; endforeach; ?>
								</ul>
								<div class="tab-content" id="myTabContent">
									<?php $numl=5; foreach($event_sub_category as $eventsubcate): ?>
										<div class="tab-pane fade <?php echo ($numl==5) ? 'active show' : '' ; ?>" id="<?php echo 'subtarget'.$numk.$numl; ?>" role="tabpanel" aria-labelledby="eventhome-tab">
											<div class="">
												<?php
												$eventerm_ids = array($eventsubcate->term_id, $maincatevent->term_id);
												$eventcat_post = array(
													'tax_query' => array(
														'relation' => 'AND',
														array(
															'taxonomy' => 'eventcategory',
															'field'    => 'term_id',
															'terms'    => $eventerm_ids[0],
														),
														array(
															'taxonomy' => 'eventcategory',
															'field'    => 'term_id',
															'terms'    => $eventerm_ids[1],
														),
													),
												);
												$eventcat_postquery = new WP_Query($eventcat_post);
												?>
												<?php if($eventcat_postquery->have_posts()) : ?>
												
												<div class="owl-carousel owl-theme">

												<?php while($eventcat_postquery->have_posts()) : ?>
												<?php $eventcat_postquery->the_post(); ?>
												<?php 
													$eventcat_eventname = get_field('event_name');
													$eventcat_event_description = get_field('event_description');
													$eventcat_event_learn_more_url = get_field('event_learn_more_url');
													$eventcat_event_date = get_field('event_date');
													$eventcat_event_location = get_field('event_location');
													$eventcat_thumbnail = get_the_post_thumbnail_url();
													$event_time = get_field('event_time');
												?>
													<div class="">
														<div class="events_card">
															<div class="event_grid">
																<div class="event_image">
																<?php if($eventcat_thumbnail): ?>
																	<img class="img-responsive" src="<?php echo $eventcat_thumbnail; ?>" alt="Event">
																<?php else: ?>
																	<img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()."/images/img-event2.jpg"); ?>" alt="Event">
																<?php endif; ?>
																<?php if($event_time): ?>
																		<p><?php echo $event_time; ?></p>
																	<?php endif; ?>
																</div>
																<div class="event_info">
																	<div class="event_datelocation mb-3">
																	<?php if($eventcat_event_date): ?>
																		<div><img src="<?php echo esc_url(get_template_directory_uri()."/images/icon-calendar.svg"); ?>" alt="" class="me-1" /> <span><?php echo $eventcat_event_date; ?></span> </div>
																	<?php endif; ?>
																	<?php if($eventcat_event_location): ?>
																		<div><img src="<?php echo esc_url(get_template_directory_uri()."/images/icon-location.svg"); ?>" alt="" class="me-1"/> <span><?php echo $eventcat_event_location; ?></span></div>
																	<?php endif; ?>
																	</div>
																	<?php if($eventcat_eventname): ?>
																		<h4><?php echo $eventcat_eventname; ?></h4>
																	<?php endif; ?>
																	<?php if($eventcat_event_description): ?>
																		<p class="d-none"><?php echo $eventcat_event_description; ?></p>
																	<?php endif; ?>
																	<?php if($eventcat_event_learn_more_url): ?>
																		<div class="d-flex justify-content-between align-items-center">
																			<a href="<?php echo $eventcat_event_learn_more_url; ?>" target="_blank"><button class="btn btn-primary">Learn More</button></a>
																			<!--a href="<?php echo $eventcat_event_learn_more_url; ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()."/images/icon-share.svg"); ?>" alt=""/></a-->
																		</div>
																	<?php endif; ?>
																</div>
															</div>
														</div>
													</div>
												<?php endwhile; ?>
												</div>
												
												<?php endif; ?>
											</div>
										</div>
									<?php $numl++; endforeach; ?>
								</div>
							</div>	
						</div>
					<?php $numk++; endforeach; ?>
				</div>
			</div>
		</div>
   	</section>
	<?php endif; ?>

	<!--#Explore by Category starts-->
	<section class="ExplorebyCategory eventscarousel UpcomingEvents upcomingeventcarousel cmn-sliderdots offsetarrow" id="exploreevent">
		<div class="container common-cnt">
			<h2>Explore by <span class="primary_color">Category</span></h2>
			<div class="eventsv2-tab">
				<ul class="nav nav-tabs maintabs" id="myTab" role="tablist">
					<?php $maincategory = get_field('main_category', 'option'); ?>
					<?php $i=1; foreach($maincategory as $maincat): ?>
						<li class="nav-item" role="presentation">
							<button class="nav-link <?php echo ($i==1) ? 'active' : '' ; ?>" id="<?php echo 'home-tab'.$i; ?>" data-bs-toggle="tab" data-bs-target="#<?php echo 'target'.$i; ?>" type="button" role="tab"  aria-selected="<?php echo ($i==1) ? 'true' : 'false' ; ?>"><?php echo $maincat->name; ?></button>
						</li>
					<?php $i++; endforeach; ?>
				</ul>
				<div class="tab-content" id="myTabContent">
					<?php $k=1; foreach($maincategory as $maincat): ?>
						<div class="tab-pane fade <?php echo ($k==1) ? 'active show' : '' ; ?>" id="<?php echo 'target'.$k; ?>" role="tabpanel">
							<div class="events-subtabs">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<?php $sub_category = get_field('sub_category', 'option'); ?>
									<?php $j=1; foreach($sub_category as $subcate): ?>
										<li class="nav-item" role="presentation">
											<button class="nav-link <?php echo ($j==1) ? 'active' : '' ; ?>" id="<?php echo 'home-tab'.$j; ?>" data-bs-toggle="tab" data-bs-target="#<?php echo 'subtarget'.$k.$j; ?>" type="button" role="tab" aria-controls="home" aria-selected="<?php echo ($j==1) ? 'true' : 'false' ; ?>"><?php echo $subcate->name; ?></button>
										</li>
									<?php $j++; endforeach; ?>
								</ul>
								<div class="tab-content" id="myTabContent">
									<?php $l=1; foreach($sub_category as $subcate): ?>
										<div class="tab-pane fade <?php echo ($l==1) ? 'active show' : '' ; ?>" id="<?php echo 'subtarget'.$k.$l; ?>" role="tabpanel" aria-labelledby="home-tab">
											<div class="">
												<?php
												$term_ids = array($subcate->term_id, $maincat->term_id);
												$cat_post = array(
													'tax_query' => array(
														'relation' => 'AND',
														array(
															'taxonomy' => 'eventcategory',
															'field'    => 'term_id',
															'terms'    => $term_ids[0],
														),
														array(
															'taxonomy' => 'eventcategory',
															'field'    => 'term_id',
															'terms'    => $term_ids[1],
														),
													),
												);
												$cat_postquery = new WP_Query($cat_post);
												?>
												<?php if($cat_postquery->have_posts()) : ?>
												
												<div class="owl-carousel owl-theme">

												<?php while($cat_postquery->have_posts()) : ?>
												<?php $cat_postquery->the_post(); ?>
												<?php 
													$cat_eventname = get_field('event_name');
													$cat_event_description = get_field('event_description');
													$cat_event_learn_more_url = get_field('event_learn_more_url');
													$cat_event_date = get_field('event_date');
													$cat_event_location = get_field('event_location');
													$cat_thumbnail = get_the_post_thumbnail_url();
												?>
													<div class="">
														<div class="events_card">
															<div class="event_grid">
																<div class="event_image">
																<?php if($cat_thumbnail): ?>
																	<img class="img-responsive" src="<?php echo $cat_thumbnail; ?>" alt="Event">
																<?php else: ?>
																	<img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()."/images/img-event2.jpg"); ?>" alt="Event">
																<?php endif; ?>
																</div>
																<div class="event_info">
																	<div class="event_datelocation mb-3">
																	<?php if($cat_event_date): ?>
																		<div><img src="<?php echo esc_url(get_template_directory_uri()."/images/icon-calendar.svg"); ?>" alt="" class="me-1" /> <span><?php echo $cat_event_date; ?></span> </div>
																	<?php endif; ?>
																	<?php if($cat_event_location): ?>
																		<div><img src="<?php echo esc_url(get_template_directory_uri()."/images/icon-location.svg"); ?>" alt="" class="me-1"/> <span><?php echo $cat_event_location; ?></span></div>
																	<?php endif; ?>
																	</div>
																	<?php if($cat_eventname): ?>
																		<h4><?php echo $cat_eventname; ?></h4>
																	<?php endif; ?>
																	<?php if($cat_event_description): ?>
																		<p class="d-none"><?php echo $cat_event_description; ?></p>
																	<?php endif; ?>
																	<?php if($cat_event_learn_more_url): ?>
																		<div class="d-flex justify-content-between align-items-center">
																			<a href="<?php echo $cat_event_learn_more_url; ?>" target="_blank"><button class="btn btn-primary">Learn More</button></a>
																			<!--a href="<?php echo $cat_event_learn_more_url; ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()."/images/icon-share.svg"); ?>" alt=""/></a-->
																		</div>
																	<?php endif; ?>
																</div>
															</div>
														</div>
													</div>
												<?php endwhile; ?>
												</div>
												
												<?php endif; ?>
											</div>
										</div>
									<?php $l++; endforeach; ?>
								</div>
							</div>	
						</div>
					<?php $k++; endforeach; ?>
				</div>
			</div>
		</div>
   	</section>
	
	<!--Why Attend-->
   	<section class="whyattendevents">
		<div class="container common-cnt">
			<?php if($why_attend_heading) : ?>
				<h2><?php echo $why_attend_heading; ?></h2>
			<?php endif; ?>
			<div class="whyevents-bg">
			<div class="why-attentevents mb-lg-5">
					<div class="arrowcnt">
						<div class="eventsicons">
							<?php if($arrow_icon_one) : ?>
								<img class="img-responsive" src="<?php echo $arrow_icon_one['url']; ?>" alt="Slide">
							<?php endif; ?>
							</div>
							<div>
							<?php if($arrow_heading_one) : ?>
								<h3><?php echo $arrow_heading_one; ?></h3>
							<?php endif; ?>
							<?php if($arrow_content_one) : ?>
								<p><?php echo $arrow_content_one; ?></p>
							<?php endif; ?>
						</div>
					</div>
					<div class="arrowcnt invertarrow">
						<div class="eventsicons">
							<?php if($arrow_icon_two) : ?>
								<img class="img-responsive" src="<?php echo $arrow_icon_two['url']; ?>" alt="Slide">
							<?php endif; ?>
						</div>
						<div>
							<?php if($arrow_heading_two) : ?>
								<h3><?php echo $arrow_heading_two; ?></h3>
							<?php endif; ?>
							<?php if($arrow_content_two) : ?>
								<p><?php echo $arrow_content_two; ?></p>
							<?php endif; ?>
						</div>
				</div>
			</div>
				<div class="why-attentevents">
					<div class="arrowcnt">
						<div class="eventsicons">
							<?php if($arrow_icon_three) : ?>
								<img class="img-responsive" src="<?php echo $arrow_icon_three['url']; ?>" alt="Slide">
							<?php endif; ?>
						</div>
						<div>
							<?php if($arrow_heading_three) : ?>
								<h3><?php echo $arrow_heading_three; ?></h3>
							<?php endif; ?>
							<?php if($arrow_content_three) : ?>
								<p><?php echo $arrow_content_three; ?></p>
							<?php endif; ?>
						</div>
					</div>
					<div class="arrowcnt invertarrow">
						<div class="eventsicons">
							<?php if($arrow_icon_four) : ?>
								<img class="img-responsive" src="<?php echo $arrow_icon_four['url']; ?>" alt="Slide">
							<?php endif; ?>
						</div>
						<div>
							<?php if($arrow_heading_four) : ?>
								<h3><?php echo $arrow_heading_four; ?></h3>
							<?php endif; ?>
							<?php if($arrow_content_four) : ?>
								<p><?php echo $arrow_content_four; ?></p>
							<?php endif; ?>
						</div>
					</div>
			</div>
			</div>
		</div>
   	</section>
	
	<!-- Featured Speakers -->
   <section class="eventsSpeakers">
    <div class="container common-cnt">
		<?php if($featured_speakers_heading) : ?>
        	<h2><?php echo $featured_speakers_heading; ?></h2>
		<?php endif; ?>
        <div class="mt-md-3 mt-3 cmn-sliderdots offsetarrow">
                <div class="owl-carousel owl-theme">
				<?php foreach($speaker_detail as $speaker): ?>
					<?php if($speaker['speaker_link']): ?>
						<a href="<?php echo $speaker['speaker_link']; ?>">
					<?php endif; ?>
                    <div class="item">
						<div class="speakerscard">
						   <h4><?php echo $speaker['speaker_name']; ?> <i> <?php echo $speaker['speaker_position']; ?></i></h4>
						   <p><?php echo $speaker['about_speaker']; ?></p>
							<img src="<?php echo $speaker['speaker_image']['url']; ?>" alt=""/>
						</div>
                     </div>
					 <?php if($speaker['speaker_link']): ?>
						</a>
					<?php endif; ?>
				<?php endforeach; ?>
                   
                </div>
				<?php if($more_speakers_link) : ?>
					<!--div class="text-center mt-5 d-none d-md-block">
						<a href="<?php echo $more_speakers_link; ?>" target="_blank" class="discover_more_link">More Speakers</a>
					</div-->
				<?php endif; ?>
            </div>
    </div>
   </section>

	<!-- Past Events Highlights -->
	<?php if($pastevent->have_posts()) : ?>
		<section class="UpcomingEvents eventscarousel cmn-sliderdots offsetarrow">
			<div class="container common-cnt">
				<h2>Past Events <span class="primary_color">Highlights</span></h2>
				<div class="">
				<div class="owl-carousel owl-theme">
				<?php while($pastevent->have_posts()) : ?>
					<?php $pastevent->the_post(); ?>
					<?php 
						$eventname1 = get_field('event_name');
						$event_description1 = get_field('event_description');
						$event_learn_more_url1 = get_field('event_learn_more_url');
						$event_date1 = get_field('event_date');
						$event_location1 = get_field('event_location');
						$thumbnail1 = get_the_post_thumbnail_url();
					?>
					
						<div class="events_card">
							<div class="event_grid">
								<div class="event_image">
									<?php if($thumbnail1): ?>
										<img class="img-responsive" src="<?php echo $thumbnail1; ?>" alt="Event">
									<?php else: ?>
										<img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()."/images/img-event2.jpg"); ?>" alt="Event">
									<?php endif; ?>
								</div>
								<div class="event_info">
									<div class="event_datelocation mb-3">
										<?php if($event_date1): ?>
											<div><img src="<?php echo esc_url(get_template_directory_uri()."/images/icon-calendar.svg"); ?>" alt="" class="me-1" /> <span><?php echo $event_date1; ?></span> </div>
										<?php endif; ?>
										<?php if($event_location1): ?>
											<div><img src="<?php echo esc_url(get_template_directory_uri()."/images/icon-location.svg"); ?>" alt="" class="me-1"/> <span><?php echo $event_location1; ?></span></div>
										<?php endif; ?>
									</div>
									<?php if($eventname1): ?>
										<h4><?php echo $eventname1; ?></h4>
									<?php endif; ?>
									<?php if($event_description1): ?>
										<p class="d-none"><?php echo $event_description1; ?></p>
									<?php endif; ?>
									<?php if($event_learn_more_url1): ?>
										<div class="d-flex justify-content-between align-items-center">
											<a href="<?php echo $event_learn_more_url1; ?>" target="_blank"><button class="btn btn-primary">Learn More</button></a>
											<!--a href="<?php echo $event_learn_more_url1; ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()."/images/icon-share.svg"); ?>" alt=""/></a-->
										</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					
					<?php endwhile; ?>
				</div>
				</div>
				<!--#RowEnd-->
			</div>
		</section>
	<?php endif; ?>	
	
	<!-- <section class="h2_partners_logo eventspartner">
        <div class="container common-cnt">
            <div class="d-flex flex-wrap justify-content-between align-items-center">
				<?php if($partners_heading) : ?>
                	<h2 class="white_text mb-0"><?php echo $partners_heading; ?></h2>
				<?php endif; ?>
				<?php if($see_all_partners_link) : ?>
                	<a href="<?php echo $see_all_partners_link; ?>" class="discover_more_link d-none d-md-block">See All Partners</a>
				<?php endif; ?>
            </div>
            <div class="h2_partners_logo_slider mt-5 home_version2">
                <div class="owl-carousel owl-theme">
				<?php if($partners_logos): ?>
                    <?php foreach($partners_logos as $logos): ?>
                    <div class="item">
                        <div class="h2_aicerts_lab_box">
							<?php if($logos['white_partner_logo']): ?>
								<img src="<?php echo $logos['white_partner_logo']; ?>" alt="" class="">
							<?php endif; ?>
							<?php if($logos['black_partner_logo']): ?>
								<img src="<?php echo $logos['black_partner_logo']; ?>" alt="" class="">
							<?php endif; ?>
                        </div>
                    </div>
					<?php endforeach; ?>
					<?php endif; ?>
                </div>
            </div>
            <div class="mt-4 d-md-none">
                <a href="<?php echo $see_all_partners_link; ?>" class="discover_more_link ms-auto">See All Partners</a>
            </div>
        </div>
    </section> -->
	
	<section class="h2_faq pt-0">
        <div class="container common-cnt">
			<?php if($faq_heading) : ?>
            	<h2 class="white_text mb-lg-5 text-center"><?php echo $faq_heading; ?></h2>
			<?php endif; ?>
            <div class="faq_wrap">
				<?php if( $faq ): ?> 
                <div class="accordion" id="faq-accordion">
					<?php $faqnumber = 1; 
                    foreach( $faq as $faqs ): 
                        $questions = $faqs['faq_question'];
                        $answer = $faqs['faq_answer'];
                    ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq_heading1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_collapse<?php echo $faqnumber;?>" aria-expanded="true" aria-controls="faq_collapse1"><?php echo $questions;?></button>
                        </h2>
                        <div id="faq_collapse<?php echo $faqnumber;?>" class="accordion-collapse collapse" aria-labelledby="faq_heading1" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <?php echo $answer;?>
                            </div>
                        </div>
                    </div>
                    <?php $faqnumber++; endforeach; ?>
                </div>
            	<?php endif; ?>
            </div>
        </div>
    </section>
</div>
<!--Footer-->
<?php
// get_sidebar();
get_footer(); 
?> 
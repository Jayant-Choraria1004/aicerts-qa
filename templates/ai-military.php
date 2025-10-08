<?php
/*
 *    Template Name: AI Military
 */
get_header();

$military_banner_tagline = get_field('military_banner_tagline');
$military_banner_heading = get_field('military_banner_heading');
$military_banner_content = get_field('military_banner_content');
$enroll_now_button_text = get_field('enroll_now_button_text');
$enroll_now_button_url = get_field('enroll_now_button_url');
$request_info_button_text = get_field('request_info_button_text');
$request_info_button_url = get_field('request_info_button_url');
$military_banner_slides = get_field('military_banner_slides');
$why_ai_military_heading = get_field('why_ai_military_heading');
$why_ai_military_subheading = get_field('why_ai_military_subheading');
$military_section_image = get_field('military_section_image');
$military_accordion = get_field('military_accordion');
$blocks = get_field('blocks');
$key_certification_programs_heading = get_field('key_certification_programs_heading');
$key_certification_programs_content = get_field('key_certification_programs_content');
$explore_program_button_text = get_field('explore_program_button_text');
$explore_program_button_url = get_field('explore_program_button_url');
$comprehensive_ai_training_heading = get_field('comprehensive_ai_training_heading');
$comprehensive_ai_boxes = get_field('comprehensive_ai_boxes');
$market_potential_heading = get_field('market_potential_heading');
$market_potential_subheading = get_field('market_potential_subheading');
$market_potential_content = get_field('market_potential_content');
$market_potential_sliders = get_field('market_potential_sliders');
$military_partnerships_heading = get_field('military_partnerships_heading');
$military_partnerships_subheading = get_field('military_partnerships_subheading');
$military_partnerships_content_heading = get_field('military_partnerships_content_heading');
$military_partnerships_content = get_field('military_partnerships_content');
$military_partnership_steps = get_field('military_partnership_steps');
$military_partnerships_bottom_content = get_field('military_partnerships_bottom_content');
$testimonials_heading = get_field('testimonials_heading');
$testimonials_subheading = get_field('testimonials_subheading');
$testimonial_slider = get_field('testimonial_slider');
$faq_heading = get_field('faq_heading');
$faq_subheading = get_field('faq_subheading');
$faqs = get_field('faqs');
$cta_heading = get_field('cta_heading');
$box_number_of = get_field('box_number_of');
$cta_image = get_field('cta_image');

?>

<?php include_once get_template_directory() . "/inc/popup-cta.php"; ?>

<div class="middle-section">
<section class="aim-banner">
	<div class="container cmn-container pt-lg-5 pt-3">
		<div class="row">
			<div class="col-lg-6">
				<div class="banner_text pe-lg-5">
					<?php if($military_banner_tagline): ?>
						<h2><?php echo $military_banner_tagline; ?></h2>
					<?php endif; ?>
					<?php if($military_banner_heading): ?>
						<h2><?php echo $military_banner_heading; ?></h2>
					<?php endif; ?>
					<?php if($military_banner_content): ?>
					<p class="white_text"><?php echo $military_banner_content; ?></p>
					<?php endif; ?>
					<div class="btn_group mt-4">
					<?php if($enroll_now_button_text): ?>
						<a href="<?php echo $enroll_now_button_url; ?>" class="btn btn-primary me-2"><?php echo $enroll_now_button_text; ?></a>
					<?php endif; ?>
					<?php if($request_info_button_text): ?>
						<a href="<?php echo $request_info_button_url; ?>" class="btn btn-outline-primary d-none"><?php echo $request_info_button_text; ?></a>
					<?php endif; ?>
					</div>
				</div>
			</div>
			<?php if($military_banner_slides): ?>
			<div class="col-lg-6 mt-5 mt-lg-0">
				<div class="aim-slider">
					<div class="owl-carousel owl-theme">
					<?php foreach($military_banner_slides as $m_slides): ?>
						<div class="item">
							<img src="<?php echo $m_slides['slides']; ?>" alt="" />
						</div>
					<?php endforeach; ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<section class="why_ai_military">
	<div class="container cmn-container">
		<div class="row flex-column-reverse flex-lg-row">
			<?php if($military_section_image): ?>
				<div class="col-lg-6 pe-xl-5 mt-5 mt-lg-0">
					<img src="<?php echo $military_section_image; ?>" alt="" />
				</div>
			<?php endif; ?>
			<?php if($why_ai_military_heading): ?>
				<div class="col-lg-6">
					<h2><?php echo $why_ai_military_heading; ?></h2>
					<?php if($why_ai_military_subheading): ?>
						<p class="white_text"><?php echo $why_ai_military_subheading; ?></p>
					<?php endif; ?>
					<?php if($military_accordion): ?>
					<div class="accordion home-accordion whymilitaryaccordion" id="accordionWhyMilitary">
					<?php $i=1; foreach($military_accordion as $mili_acc): ?>
						<div class="accordion-item">
							<h2 class="accordion-header" id="flush-heading<?php echo $i; ?>">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $i; ?>"><?php echo $mili_acc['military_accordion_question']; ?></button>
							</h2>
							<div id="flush-collapse<?php echo $i; ?>" class="accordion-collapse collapse"
								aria-labelledby="flush-heading<?php echo $i; ?>" data-bs-parent="#accordionWhyMilitary">
								<div class="accordion-body">
									<?php echo $mili_acc['military_accordion_answer']; ?>
								</div>
							</div>
						</div>
					<?php $i++; endforeach; ?>
					</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php if($blocks): ?>
<section class="aim-block_title">
	<div class="container cmn-container">
		<div class="aiblock_title_wrap">
			<?php foreach($blocks as $blk): ?>
				<div class="aiblock_title_item">
					<p><?php echo $blk['block_heading']; ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php endif; ?>

<section>
<div class="container cmn-container">
	<div class="col-lg-12 mb-5">
						<div class="key_certification p-4">
							<div class="key_certification_text">
								<h2><?php echo $key_certification_programs_heading; ?></h2>
								
								<?php if($key_certification_programs_content): ?>
									<p class="mb-0"><?php echo $key_certification_programs_content; ?></p>
								<?php endif; ?>
							</div>
							<div class="btn_group">
								<?php if($enroll_now_button_text): ?>
									<a href="<?php echo $enroll_now_button_url; ?>" class="btn btn-outline-white d-none"><?php echo $enroll_now_button_text; ?></a>
								<?php endif; ?>
							</div>
						</div>
					</div>
</div>
</section>

<?php if($key_certification_programs_heading): ?>
	<section class="comprehensive_ai_training">
		<div class="container cmn-container">
			<div class="comprehensive_ai_training_inner">
				<div class="row">
					
					<div class="col-lg-12">
						<div class="row">
							<?php if($comprehensive_ai_training_heading): ?>
								<div class="col-lg-12 mx-auto">
									<h2 class="text-center mb-0"><?php echo $comprehensive_ai_training_heading; ?></h2>
								</div>
							<?php endif; ?>
							<?php if($comprehensive_ai_boxes): ?>
								<?php foreach($comprehensive_ai_boxes as $box): ?>
								<div class="col-lg-4 col-md-6 mt-4">
									<div class="comprehensive_ai_box">
										<h3 class="primary_color"><?php echo $box['box_heading']; ?></h3>
										<P class="compredays white_text"><?php echo $box['box_number_of']; ?></P>
										<P class="mb-0 white_text"><?php echo $box['box_content']; ?></P>
									</div>
								</div>
								<?php endforeach; ?>
							<?php endif; ?>
							<div class="col-lg-12 text-center">
								<?php if($explore_program_button_text): ?>
									<a href="<?php echo $explore_program_button_url; ?>" class="btn btn-primary mt-4"><?php echo $explore_program_button_text; ?></a>
								<?php endif; ?>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php if($market_potential_heading): ?>
<section class="market_potential">
	<div class="container cmn-container">
		<div class="row"> 
			<div class="col-lg-5">
				<div class="banner_text pe-lg-5">
					<h2 class="mb-4"><?php echo $market_potential_heading; ?></h2>
					<?php if($market_potential_subheading): ?>
						<p class="mb-3 white_text"><b><?php echo $market_potential_subheading; ?></b></p>
					<?php endif; ?>
					<?php if($market_potential_content): ?>
						<p class="white_text"><?php echo $market_potential_content; ?> </p>
					<?php endif; ?>
					<div class="btn_group mt-4">
						<?php if($enroll_now_button_text): ?>
							<a href="<?php echo $enroll_now_button_url; ?>" class="btn btn-primary me-2"><?php echo $enroll_now_button_text; ?></a>
						<?php endif; ?>
						<?php if($request_info_button_text): ?>
							<a href="<?php echo $request_info_button_url; ?>" class="btn btn-outline-secondary d-none"><?php echo $request_info_button_text; ?></a>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<?php if($market_potential_sliders): ?>
			<div class="col-lg-7 mt-5 mt-lg-0">
				<div class="market_potential_slider cmn-sliderdots offsetarrow">
					<div class="owl-carousel owl-theme">
						<?php foreach($market_potential_sliders as $market_slide): ?>
						<div class="item market_potential_slide">
							<img src="<?php echo $market_slide['market_potential_slider_icon']; ?>" alt="" class="mb-4" />
							<h5 class="mb-4"><?php echo $market_slide['market_potential_slider_title']; ?></h5>
							<p class="black-color mb-0"><?php echo $market_slide['market_potential_slider_content']; ?></p>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php endif; ?>

<?php if($military_partnerships_heading): ?>
<section class="military_partnership bglightgrey-color">
	<div class="container cmn-container">
		<div class="text-center mb-5">
			<h2 class="mb-2"><?php echo $military_partnerships_heading; ?></h2>
			<?php if($military_partnerships_subheading): ?>
				<p><?php echo $military_partnerships_subheading; ?></p>
			<?php endif; ?>
		</div>
		<div class="row">
			<div class="col-lg-6 pe-lg-5">
				<?php if($military_partnerships_content_heading): ?>
					<h3><?php echo $military_partnerships_content_heading; ?></h3>
				<?php endif; ?>
				<?php if($military_partnerships_content): ?>
					<p><?php echo $military_partnerships_content; ?></p>
				<?php endif; ?>
				<div class="btn_group mt-4">
					<?php if($request_info_button_text ): ?>
						<a href="<?php echo $request_info_button_url; ?>" class="btn btn-primary me-2"><?php echo $request_info_button_text; ?></a>
					<?php endif; ?>
					<?php if($enroll_now_button_text ): ?>
						<a href="<?php echo $enroll_now_button_url; ?>" class="btn btn-outline-primary d-none"><?php echo $enroll_now_button_text; ?></a>
					<?php endif; ?>
				</div>
			</div>
			<?php if($military_partnership_steps): ?>
			<div class="col-lg-6 mt-5 mt-lg-0">
				<div class="military_partnership_item mb-3">
					<ul>
						<?php foreach($military_partnership_steps as $mili_steps): ?>
						<li class="">
							<h5 class="mb-2"><?php echo $mili_steps['step_heading']; ?></h5>
							<p class="black-color mb-0"><?php echo $mili_steps['step_content']; ?></p>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
			<?php endif; ?>
		</div>
		<?php if($military_partnerships_bottom_content): ?>
		<div class="row">
			<div class="col-lg-12 pe-lg-5">
			<p><?php echo $military_partnerships_bottom_content;?></p>
			</div>
		</div>
		<?php endif; ?>
	</div>
</section>
<?php endif; ?>

<?php if($testimonials_heading): ?>
<section class="aim_testimonial d-none">
	<div class="container cmn-container">
		<div class="row">
			<div class="col-md-12 col-lg-8 col-xxl-5 mx-auto text-center">
				<h2 class="mb-2"><?php echo $testimonials_heading; ?></h2>
				<?php if($testimonials_subheading): ?>
					<p class="font18 font500 black-color"><?php echo $testimonials_subheading; ?></p>
				<?php endif; ?>
			</div>
			<?php if($testimonial_slider): ?>
			<div class="col-lg-12">
				<div class="testimonial_slider py-lg-5">
					<div class="owl-carousel owl-theme pt-md-5">
						<?php foreach($testimonial_slider as $testi_slider): ?>
						<div class="item testimonial_slide_item">
							<div class="testimonial_img">
							<img src="<?php echo $testi_slider['testimonial_image']; ?>" alt="" />
							</div>
							<div class="testimonial_detail">
								<h1><?php echo $testi_slider['testimonial_name']; ?></h1>
								<label for=""><?php echo $testi_slider['testimonial_designation']; ?></label>
								<ul class="d-flex gap-2 mb-4">
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
								</ul>
								<p class="font500 font18 black-color"><?php echo $testi_slider['testimonial_content']; ?></p>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php endif; ?>

<?php if($faqs): ?>
<section class="h2_faq pt-0">
	<div class="container cmn-container">
		<div class="row">
			<div class="col-md-12 col-lg-8 col-xxl-6 mx-auto text-center mb-4">
				<?php if($faq_heading): ?>
					<h2 class="mb-2"><?php echo $faq_heading; ?></h2>
				<?php endif; ?>
				<?php if($faq_subheading): ?>
					<p class="font18 font500 black-color"><?php echo $faq_subheading; ?></p>
				<?php endif; ?>
			</div>
			
			<div class="col-lg-12">
				<div class="accordion" id="accordionFAQ">
				<?php $i=1; foreach($faqs as $faq): ?>
					<div class="accordion-item">
						<h2 class="accordion-header" id="h2faq-heading<?php echo $i; ?>">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#h2faq-collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="h2faq-collapse<?php echo $i; ?>"><?php echo $faq['faq_question']; ?></button>
						</h2>
						<div id="h2faq-collapse<?php echo $i; ?>" class="accordion-collapse collapse"
							aria-labelledby="h2faq-heading<?php echo $i; ?>" data-bs-parent="#accordionFAQ">
							<div class="accordion-body">
								<?php echo $faq['faq_answer']; ?>
							</div>
						</div>
					</div>
				<?php $i++; endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>

<?php if($cta_heading): ?>
<section class="footer_hero_section">
	<div class="container cmn-container">
		<div class="row mx-0">
			<div class="col-lg-6 px-0">
				<div class="left px-4 py-5 px-md-5">
					<h3 class="white-color font600"><?php echo $cta_heading; ?></h3>
					<div class="btn_group mt-auto pt-md-2">
						<?php if($request_info_button_text): ?>
							<a href="<?php echo $request_info_button_url; ?>" class="btn bg-white me-2"><?php echo $request_info_button_text; ?></a>
						<?php endif; ?>
						<?php if($enroll_now_button_text): ?>
							<a href="<?php echo $enroll_now_button_url; ?>" class="btn btn-outline-light mb-3 d-none"><?php echo $enroll_now_button_text; ?></a>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<?php if($cta_image): ?>
			<div class="col-lg-6 px-0">
				<div class="right">
					<img src="<?php echo $cta_image; ?>" alt="" />
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php endif; ?>
</div>

 

<?php
get_footer();
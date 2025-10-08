<?php
/*
* Template Name: Contratulations Page
*/
get_header();
global $post;
?>
<section class="cmn-section section-gray">
	<div class="container">
		<div class="row">
		<div class="col-lg-12">
			<div  class="text-center link-dark">
				<p><img src="<?php echo get_stylesheet_directory_uri() ?>/images/Cup.svg" alt=""/></p>
			<h2 style="color:black;">Congratulations</span></h2>
			<p class="bigfont fw-bold">on finishing the exam!</p>
			<p class="p-2">We appreciate your dedication and effort in completing the examination. If you have passed the examination, you will receive your certification by email. You also have the option to download it directly from AI CERTs™ Learning Platform</p>
				<a href="https://lms.aicerts.io" class="btn btn-primary">AI CERTs™ Learning Platform</a>
			</div>
		</div>
	</div>
</div>
</section>

<?php /*
$defaults = array(
	'category'         => 48,
	'orderby'          => 'date',
	'order'            => 'DESC',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'post',
	'suppress_filters' => true,
	); 			
$posts = get_posts($defaults);
//echo '<pre>'; print_r($post);
			
?>
<div align="center">
	</br>
</div>	
<section class="cert-spec-section">	
	<h2 class="cmn-hd" data-aos="fade-up" data-aos-duration="1000">Premier Certifications Tailored for AI and Blockchain Specializations.<span>Compliant with ISO 17024 Compliant Certifications, ensuring global recognition and quality.</span></h2>
	<div id="certifications" class="container">
		<div class="row">
		<div class="col-lg-12">
			<div class="cert-spec-cnt">
				<div class="owl-carousel owl-theme certifications-slider">
					<?php if ($posts) { ?>
							<?php foreach ($posts as $post) { ?>
								<?php $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full'); ?>
								<?php $key = 'field_65491d6415f37';
								$field = get_field_object($key, $post->ID);
								?>
								<div class="item">
									<div class="certifications-cnt">
										<!--	<div class="certifications-hd">AI+ Executive</div>-->
										<div class="certifications-img"><img alt="Course Thumb"
												src="<?php echo $featured_img_url; ?>"></div>
										<p>
											<?php echo $post->post_excerpt; ?>
										</p>

										<?php if ($field['value'] == 'no') { ?>
											<a href="<?php echo get_permalink($post->id); ?>" class="btn btn-primary">
												<?php echo 'Learn More'; ?>
											</a>
										<?php } else { ?>
											<a href="#" class="btn btn-primary">
												<?php echo 'Comming Soon'; ?>
											</a>
										<?php } ?>

									</div>
								</div>
							<?php } ?>
						<?php } ?>

					</div>
				</div>
			</div>
			<?php if (!empty($partner)) { ?>
				<?php foreach ($partner as $part) {
					$partnerlink = get_post_meta($part->ID, 'certificate-link', true);
					$featured_img_url = get_the_post_thumbnail_url($part->ID, 'full');
					?>
					<div class="col-md-6">
						<div class="training-partner-img" data-aos="fade-up" data-aos-duration="1000"><img alt=""
								src="<?php echo $featured_img_url; ?>"></div>
					</div>
					<div id="" class="col-md-6">
						<div class="training-partner-desc" data-aos="fade-down" data-aos-duration="1000">
							<div class="training-hd">
								<?php echo $part->post_title; ?>
							</div>
							<p>
								<?php echo $part->post_content; ?>
							</p>
							<a href="<?php echo $partnerlink; ?>" class="btn btn-primary">Learn More</a>
						</div>
					</div>
				<?php } ?>
			<?php } ?>
		</div>
	</div>
</section>
	   */ ?>
<?php
get_footer();
<?php
/*
* Template Name: TeamTemplate
*/
get_header();
?>
<style>

@media (max-width:575px) {
	.ourteam-linkedin {top:270px;}
}
</style>
<?php
// Retrieve the value of the 'our_team_category' field
$our_team_categories = get_field('our_team_category');


?>
<div class="middle-section">
	<div class="inner-page pt-5">
		<section class="cert-spec-section pb-2 d-flex justify-content-center align-items-center">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="cmn-hd"><?php echo get_the_title(); ?></h1>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
<?php
if ($our_team_categories) {
	// Loop through each category object and display its name
	foreach ($our_team_categories as $category) {
		$args = array('orderby' => 'date', 'order' => 'DESC', 'post_type' => 'teams', 'posts_per_page' => 40, 'tax_query' => array(
			array(
				'taxonomy' => 'team-categories',
				'field'    => 'slug',
				'terms'    => $category->slug
			)
		));
		$profiles = get_posts($args);
?>
		<section class="cmn-section team-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="team-cnt">
							<h2 class="cmn-hd mb-lg-5 mb-3"><?php echo $category->name; ?></h2>
							<div class="row gy-lg-2 gy-3">
								<?php if (!empty($profiles)) { ?>
									<?php foreach ($profiles as $profile) { ?>
										<?php $featured_img_url = get_the_post_thumbnail_url($profile->ID, 'full'); ?>
										<?php $role = get_post_meta($profile->ID, 'role', true); ?>
										<?php $linkedin = get_post_meta($profile->ID, 'linkedin', true);

										?>
										<div class="col-sm-6 col-md-4 col-xl-3">
											<div class="mission-value-box position-relative">
												<div class="team-img"><img src="<?php echo $featured_img_url; ?>"></div>
												<?php if (!empty(trim($linkedin))) { ?>
													<div class="ourteam-linkedin"><a  href="<?php echo esc_url($linkedin); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team-linkedin.png"></a></div>
												<?php } ?>
												<div class="corevalue-hd"><?php echo esc_attr($profile->post_title); ?> <span><?php echo $role; ?></span></div>
											</div>
										</div>
									<?php } ?>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
<?php
	}
}
?>

<?php
/*
global $post;

$defaults1 = array('orderby' => 'date', 'order' => 'DESC', 'post_type' => 'teams', 'posts_per_page' => 40, 'tax_query' => array(
	array(
		'taxonomy' => 'team-categories',
		'field'    => 'slug',
		'terms'    => 'core-team'
	)
));
$defaults2 = array('orderby' => 'date', 'order' => 'DESC', 'post_type' => 'teams', 'posts_per_page' => 20, 'tax_query' => array(
	array(
		'taxonomy' => 'team-categories',
		'field'    => 'slug',
		'terms'    => 'advisory-board'
	)
));
$defaults3 = array('orderby' => 'date', 'order' => 'DESC', 'post_type' => 'teams', 'posts_per_page' => 60, 'tax_query' => array(
	array(
		'taxonomy' => 'team-categories',
		'field'    => 'slug',
		'terms'    => array('ai-experts', 'our-ai-sme')
	)
));
$defaults4 = array('orderby' => 'date', 'order' => 'DESC', 'post_type' => 'teams', 'posts_per_page' => 20, 'tax_query' => array(
	array(
		'taxonomy' => 'team-categories',
		'field'    => 'slug',
		'terms'    => 'blockchain-experts'
	)
));
$defaults5 = array('orderby' => 'date', 'order' => 'DESC', 'post_type' => 'teams', 'posts_per_page' => 20, 'tax_query' => array(
	array(
		'taxonomy' => 'team-categories',
		'field'    => 'slug',
		'terms'    => 'certifications-advisors	'
	)
));
$defaults6 = array('orderby' => 'date', 'order' => 'DESC', 'post_type' => 'teams', 'posts_per_page' => -1, 'tax_query' => array(
	array(
		'taxonomy' => 'team-categories',
		'field'    => 'slug',
		'terms'    => 'our-ai-sme'
	)
));
$coreteams = get_posts($defaults1);
$adviosryboards = get_posts($defaults2);
$aiexperts = get_posts($defaults3);
$blockchais = get_posts($defaults4);
$certadvisors = get_posts($defaults5);
//$ouraisme = get_posts($defaults6);
//$featured_img_url = get_the_post_thumbnail_url($post->ID,'full'); 
//$enroll_url = get_post_meta( $post_id, 'enroll_url', true);

?>
<div class="middle-section">
	<div class="inner-page pt-5">
		<section class="cert-spec-section pb-2 d-flex justify-content-center align-items-center">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="cmn-hd aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000"><?php echo get_the_title(); ?></h1>
					</div>
				</div>
			</div>
		</section>
		<section class="cmn-section team-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="team-cnt">
							<h2 class="cmn-hd mb-5" data-aos="fade-up" data-aos-duration="1000">Leadership Team</h2>
							<div class="row gy-5">
								<?php if (!empty($coreteams)) { ?>
									<?php foreach ($coreteams as $core) { ?>
										<?php $featured_img_url = get_the_post_thumbnail_url($core->ID, 'full'); ?>
										<?php $role = get_post_meta($core->ID, 'role', true); ?>
										<?php $linkedin = get_post_meta($core->ID, 'linkedin', true);

										?>
										<div class="col-sm-6 col-md-4 col-xl-3" data-aos="fade-up" data-aos-duration="1000">
											<div class="mission-value-box">
												<div class="team-img"><img src="<?php echo $featured_img_url; ?>"></div>
												<div class="corevalue-hd"><?php echo $core->post_title; ?> <span><?php echo $role; ?></span></div>
												<?php if (!empty(trim($linkedin))) { ?>
													<div class="team-linkedin"><a href="<?php echo $linkedin; ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team-linkedin.png"></a></div>
												<?php } ?>
											</div>
										</div>
									<?php } ?>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="cmn-section pt-0 team-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="team-cnt">
							<h2 class="cmn-hd mb-5" data-aos="fade-up" data-aos-duration="1000">Advisory Board</h2>
							<div class="row">
								<?php if (!empty($adviosryboards)) { ?>
									<?php foreach ($adviosryboards as $advoiser) { ?>
										<?php $featured_img_url = get_the_post_thumbnail_url($advoiser->ID, 'full'); ?>
										<?php $role = get_post_meta($advoiser->ID, 'role', true); ?>
										<?php $linkedin = get_post_meta($advoiser->ID, 'linkedin', true); ?>
										<div class="col-sm-6 col-md-4 col-xl-3" data-aos="fade-up" data-aos-duration="1000">
											<div class="mission-value-box">
												<div class="team-img"><img src="<?php echo $featured_img_url; ?>"></div>
												<div class="corevalue-hd"><?php echo $advoiser->post_title; ?> <span><?php echo $role; ?></span></div>
												<?php if (!empty(trim($linkedin))) { ?>
													<div class="team-linkedin"><a href="<?php echo $linkedin; ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team-linkedin.png"></a></div>
												<?php } ?>
											</div>
										</div>
									<?php } ?>
								<?php } ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="cmn-section pt-0 team-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="team-cnt">
							<h2 class="cmn-hd mb-5" data-aos="fade-up" data-aos-duration="1000">Certification Team</h2>
							<div class="row">
								<?php if (!empty($certadvisors)) { ?>
									<?php foreach ($certadvisors as $block) { ?>
										<?php $featured_img_url = get_the_post_thumbnail_url($block->ID, 'full'); ?>
										<?php $role = get_post_meta($block->ID, 'role', true); ?>
										<?php $linkedin = get_post_meta($block->ID, 'linkedin', true); ?>
										<div class="col-sm-6 col-md-4 col-xl-3" data-aos="fade-up" data-aos-duration="1000">
											<div class="mission-value-box">
												<div class="team-img"><img src="<?php echo $featured_img_url; ?>"></div>
												<div class="corevalue-hd"><?php echo $block->post_title; ?> <span><?php echo $role; ?></span></div>
												<?php if (!empty(trim($linkedin))) { ?>
													<div class="team-linkedin"><a href="<?php echo $linkedin; ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team-linkedin.png"></a></div>
												<?php } ?>
											</div>
										</div>
									<?php } ?>
								<?php } ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="cmn-section pt-0 team-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="team-cnt">
							<h2 class="cmn-hd mb-5" data-aos="fade-up" data-aos-duration="1000">Our AI Experts</h2>
							<div class="row">
								<?php if (!empty($aiexperts)) { ?>
									<?php foreach ($aiexperts as $ai) { ?>
										<?php $featured_img_url = get_the_post_thumbnail_url($ai->ID, 'full'); ?>
										<?php $default_featured_image = get_stylesheet_directory_uri() . '/images/no-image.jpg'; ?>
										<?php $role = get_post_meta($ai->ID, 'role', true); ?>
										<?php $linkedin = get_post_meta($ai->ID, 'linkedin', true); ?>
										<div class="col-sm-6 col-md-4 col-xl-3" data-aos="fade-up" data-aos-duration="1000">
											<div class="mission-value-box">
												<div class="team-img"><img src="<?php echo !empty($featured_img_url) ? $featured_img_url : $default_featured_image; ?>"></div>
												<div class="corevalue-hd"><?php echo $ai->post_title; ?> <span><?php echo $role; ?></span></div>
												<?php if (!empty(trim($linkedin))) { ?>
													<div class="team-linkedin"><a href="<?php echo $linkedin; ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team-linkedin.png"></a></div>
												<?php } ?>
											</div>
										</div>
									<?php } ?>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="cmn-section pt-0 team-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="team-cnt">
							<h2 class="cmn-hd mb-5" data-aos="fade-up" data-aos-duration="1000">Our Blockchain Experts</h2>
							<div class="row">
								<?php if (!empty($blockchais)) { ?>
									<?php foreach ($blockchais as $block) { ?>
										<?php $featured_img_url = get_the_post_thumbnail_url($block->ID, 'full'); ?>
										<?php $default_featured_image = get_stylesheet_directory_uri() . '/images/no-image.jpg'; ?>
										<?php $role = get_post_meta($block->ID, 'role', true); ?>
										<?php $linkedin = get_post_meta($block->ID, 'linkedin', true); ?>
										<div class="col-sm-6 col-md-4 col-xl-3" data-aos="fade-up" data-aos-duration="1000">
											<div class="mission-value-box">
												<div class="team-img"><img src="<?php echo !empty($featured_img_url) ? $featured_img_url : $default_featured_image; ?>"></div>
												<div class="corevalue-hd"><?php echo $block->post_title; ?> <span><?php echo $role; ?></span></div>
												<?php if (!empty(trim($linkedin))) { ?>
													<div class="team-linkedin"><a href="<?php echo $linkedin; ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team-linkedin.png"></a></div>
												<?php } ?>
											</div>
										</div>
									<?php } ?>
								<?php } ?>


							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>
</div>
*/ ?>

<?php
get_footer();

<?php
/*
* Template Name: Microsoft Career Pathway
*/
get_header();


$template_url = get_template_directory_uri();

$banner_title = get_field('banner_title');
$banner_details = get_field('banner_details');
$banner_cta_button = get_field('banner_cta_button');
$banner_background_image = get_field('banner_background_image');

$why_aicerts = get_field('why_aicerrts');
$why_aicerts_title = $why_aicerts['title'] ?? '';
$why_aicerts_description = $why_aicerts['description'] ?? '';
$why_aicerts_image = $why_aicerts['image'] ?? null;

// Fetch ACF fields for "AI CERTs Certification Pathways"
$certification_pathways = get_field('ai_certs_certification_pathways');
$certification_pathways_title = $certification_pathways['title'] ?? '';
$certification_pathways_description = $certification_pathways['decription'] ?? '';

$amplify_ai_potential = get_field('amplify_your_ai_potential');
$amplify_title = $amplify_ai_potential['title'] ?? '';
$amplify_description = $amplify_ai_potential['description'] ?? '';
$certification_standouts = $amplify_ai_potential['certification_standouts'] ?? [];

$cross_certification = get_field('cross_certification_with_ai_certs_and_microsoft');
$cross_certification_title = $cross_certification['section_title'] ?? '';
$cross_certification_description = $cross_certification['section_description'] ?? '';

$footer_cta_title = get_field('footer_cta_banner_title');
$footer_cta_details = get_field('footer_cta_banner_details');
$footer_cta_button = get_field('footer_cta_banner_cta_button');
$footer_cta_background_image = get_field('footer_cta_banner_background_image');
?>
<style>
	.aicerts_microsoft_banner .blue_color{color:#4285F4}
</style> 
<div class="site-content">	
	<section class="aicerts_microsoft_banner common-section">
		<div class="container pathwaybanner">
			<div class="row align-items-center flex-row-reverse">
				<div class="col-lg-6 px-0">
					<?php if ($banner_background_image): ?>
						<img src="<?php echo esc_url($banner_background_image['url']); ?>" alt="<?php echo esc_attr($banner_background_image['alt']); ?>" class="aicerts_microsoft_banner_img">
					<?php endif; ?>
				</div>
				<div class="col-lg-6 py-5">
					<div class="banner_text">
						<?php if ($banner_title): ?>
							<h2 class="white-color"><?php echo $banner_title; ?></h2>
						<?php endif; ?>

						<?php if ($banner_details): ?>
							<p class="white-color font20 mb-4 font600"><?php echo esc_html($banner_details); ?></p>
						<?php endif; ?>

						<?php if ($banner_cta_button): ?>
							<div class="btn_group mt-4">
								<a href="<?php echo esc_url($banner_cta_button['url']); ?>" class="btn btn-primary">
									<?php echo esc_html($banner_cta_button['title']); ?>
								</a>
							</div>
						<?php endif; ?>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	
	<section class="ms_why_aicerts common-section">
		<div class="container">
			<div class="ms_why_aicerts_inner">
				<div class="row mx-0">
					<div class="col-lg-6 ps-lg-0">
						<?php if ($why_aicerts_image): ?>
							<img src="<?php echo esc_url($why_aicerts_image['url']); ?>" alt="<?php echo esc_attr($why_aicerts_image['alt']); ?>" class="ms-why-aicert-img">
						<?php endif; ?>
					</div>
					<div class="col-lg-6 py-4">
						<div class="">
							<?php if ($why_aicerts_title): ?>
								<h2><?php echo esc_html($why_aicerts_title); ?></h2>
							<?php endif; ?>
							
							<?php if ($why_aicerts_description): ?>
								<p class="black-color"><?php echo $why_aicerts_description; ?></p>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="common-section">
		<div class="container">
			<div class="aicerts__advantage_inner py-5 px-lg-5">
				<div class="text-center px-lg-5">
					<?php if ($certification_pathways_title): ?>
						<h2 class="mb-3"><?php echo esc_html($certification_pathways_title); ?></h2>
					<?php endif; ?>

					<?php if ($certification_pathways_description): ?>
						<p class="black-color mb-0"><?php echo esc_html($certification_pathways_description); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>



	<?php 
	$cert_pathways = get_field('certification_pathways');

	foreach ($cert_pathways as $pathway): 

		// Get the certification pathway title
		$cart_path_title = get_the_title($pathway->ID);
		
		// Get recommended courses
		$course_learning_order = get_field('recommended__courses', $pathway->ID);
		
		// Define the categories with their corresponding border color and color block class
		$categories = [
			'fundamentals' => [
				'border_color' => 'green-border',
				'color_block_class' => 'green-color',
				'label' => 'Fundamentals'
			],
			'associate' => [
				'border_color' => 'blue-border',
				'color_block_class' => 'blue-color',
				'label' => 'Associate'
			],
			'expert' => [
				'border_color' => 'orange-border',
				'color_block_class' => 'orange-color',
				'label' => 'Expert'
			]
		];
		
		// Group courses by their categories
		$grouped_courses = [
			'fundamentals' => [],
			'associate' => [],
			'expert' => []
		];

		foreach ($course_learning_order as $single_course_id):
			foreach (array_keys($categories) as $cat) {
				if (has_category($cat, $single_course_id)) {
					$grouped_courses[$cat][] = $single_course_id;
					break;
				}
			}
		endforeach;
		?>
		
		<section class="aicerts_microsoft_process common-section">
			<div class="container">
				<div class="azure_administrator mb-5">
					<h2 class="text-center"><?php echo $cart_path_title; ?></h2>
					
					<ul class="indication-label-list mb-4">
						<?php foreach ($categories as $category_key => $category_data): ?>
							<?php if (!empty($grouped_courses[$category_key])): ?>
								<li><span class="color-block <?php echo $category_data['color_block_class']; ?>"></span> <?php echo $category_data['label']; ?></li>
							<?php endif; ?>
						<?php endforeach; ?>
					</ul>
					
					<?php foreach ($grouped_courses as $category_key => $courses): ?>
						<?php if (!empty($courses)): ?>
							<div class="category-section" style="margin-top: 20px";>
								<h3 class="text-left"><?php echo $categories[$category_key]['label']; ?></h3>
								<div class="aicerts_microsoft_grid">
									<?php foreach ($courses as $single_course_id): 
										// Course vendor details
										$vendor = get_field('vendor', $single_course_id);
										$vendor_title = $vendor ? $vendor->post_title : '';
										$vendor_logo = get_field('vendor_logo', $vendor->ID);
										$vendor_thumb = $vendor_logo['tile_small_logo'];
										$vendor_thumb_black_theme = $vendor_logo['tile_small_logo_black_theme'];

										// Course details
										$course_title = get_the_title($single_course_id);
										$pathway_tile_short_tagline = get_field('pathway_tile_short_tagline', $single_course_id);
										$course_link = get_the_permalink($single_course_id);

										// Border color for the category
										$border_color = $categories[$category_key]['border_color'];
									?>
										<div class="flip-card">
											<div class="flip-card-inner">
												<div class="flip-card-front">
													<div class="aicerts_microsoft_card <?php echo $border_color; ?>">
														<?php if ($vendor_thumb): ?>
															<img src="<?php echo $vendor_thumb['url']; ?>" alt="<?php echo $vendor_title; ?>" class="aicerts_vendor_white">
															<img src="<?php echo $vendor_thumb_black_theme['url']; ?>" alt="<?php echo $vendor_title; ?>" class="aicerts_vendor_black">
														<?php endif; ?>
														<p class="text-dark"><?php echo $course_title; ?></p>
													</div>
												</div>
												<div class="flip-card-back <?php echo $border_color; ?>">
													<div class="aicerts_microsoft_card <?php echo $border_color; ?>">
														<p class="text-dark"><?php echo $pathway_tile_short_tagline; ?></p>
													</div>
												</div>
											</div>
										</div>
									<?php endforeach; ?>
								</div>
							</div>
						<?php endif; ?>
					<?php endforeach; ?>
				</div>
			</div>
		</section>

	<?php endforeach; ?>



	<section class="ms_what_sets_aicerts common-section">
		<div class="container">
			<div class="px-lg-5 pb-4">
				<div class="text-center px-lg-5">
					<?php if ($amplify_title): ?>
						<h2 class="mb-3"><?php echo esc_html($amplify_title); ?></h2>
					<?php endif; ?>

					<?php if ($amplify_description): ?>
						<p class="black-color"><?php echo esc_html($amplify_description); ?></p>
					<?php endif; ?>
				</div>
			</div>
			<div class="row">
				<?php if (!empty($certification_standouts)): ?>
					<?php foreach ($certification_standouts as $standout): ?>
						<div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
							<div class="what_sets_aicerts_card">
								<?php if (!empty($standout['icon'])): ?>
									<img src="<?php echo esc_url($standout['icon']['url']); ?>" alt="<?php echo esc_attr($standout['icon']['alt']); ?>">
								<?php endif; ?>
								
								<?php if (!empty($standout['title'])): ?>
									<h3 class="my-3"><?php echo esc_html($standout['title']); ?></h3>
								<?php endif; ?>

								<?php if (!empty($standout['details'])): ?>
									<p class="mb-0 black-color"><?php echo esc_html($standout['details']); ?></p>
								<?php endif; ?>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<?php
	// Fetch ACF fields for "Your Customized Learning Path"
	$learning_path = get_field('your_customized_learning_path');
	$learning_path_title = $learning_path['section_title'] ?? '';
	$learning_path_description = $learning_path['section_description'] ?? '';
	$learning_path_image = $learning_path['background_image'] ?? null;
	?>

	<section class="ms_learning_path common-section">
		<div class="container">
			<div class="ms_learning_path_inner">
				<div class="row mx-0">
					<div class="col-lg-5 px-0">
						<div class="ms_learning_path_video">
							<?php if ($learning_path_image): ?>
								<img src="<?php echo esc_url($learning_path_image['url']); ?>" alt="<?php echo esc_attr($learning_path_image['alt']); ?>">
							<?php endif; ?>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="ms_learning_path_desc py-3 px-3">
							<?php if ($learning_path_title): ?>
								<h2 class="mb-3"><?php echo esc_html($learning_path_title); ?></h2>
							<?php endif; ?>

							<?php if ($learning_path_description): ?>
								<p class="mb-0 text-dark"><?php echo esc_html($learning_path_description); ?></p>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="ms_cross_certification common-section">
		<div class="container">
			<div class="ms_cross_certification_inner py-5 px-4">
				<div class="text-center px-lg-5">
					<?php if ($cross_certification_title): ?>
						<h2 class="mb-3"><?php echo esc_html($cross_certification_title); ?></h2>
					<?php endif; ?>

					<?php if ($cross_certification_description): ?>
						<p class="px-0 px-lg-3 mb-0 text-dark"><?php echo esc_html($cross_certification_description); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="ms_upskill_aicerts py-5 common-section">
		<div class="container py-md-4">
			<div class="row">
				<div class="col-lg-7">
					<?php if ($footer_cta_title): ?>
						<h2 class="mb-3"><?php echo esc_html($footer_cta_title); ?></h2>
					<?php endif; ?>

					<?php if ($footer_cta_details): ?>
						<p><?php echo esc_html($footer_cta_details); ?></p>
					<?php endif; ?>

					<?php if ($footer_cta_button): ?>
						<a href="<?php echo esc_url($footer_cta_button['url']); ?>" class="btn btn-primary">
							<?php echo esc_html($footer_cta_button['title']); ?>
						</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
</div>

<?php
   get_footer();
?>
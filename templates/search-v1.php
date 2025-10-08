<?php
/*
* Template Name: Search Template V1
*/
get_header();


// Retrieve the value of the 'our_team_category' field
$our_team_categories = get_field('our_team_category');


?>
<div class="middle-section">
	<div class="inner-page">
		<section class="cert-spec-section">
			<div class="container mobile-cmn-cnt">
				<div class="row">
					
				<!--  Sidebar Starts -->
					<div class="col-xl-3 col-lg-4 pe-lg-5">
						<div class="search-filter-title">
							Filter by <img src="<?php echo get_template_directory_uri(); ?>/images/search-filter-icon.svg" alt="" class="ms-2"/>
						</div>
						<div class="search-filter-panel">
							<a class="sfp-title" data-bs-toggle="collapse" href="#PracticeArea " role="button" aria-expanded="false" aria-controls="PracticeArea">
								Practice Area 
							</a>
							<div class="collapse show" id="PracticeArea">
								<div class="card card-body">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="item1">
										<label class="form-check-label" for="item1">Essentials</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="item2">
										<label class="form-check-label" for="item2">Data & Robotics</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="item3">
										<label class="form-check-label" for="item3">Development</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="item4">
										<label class="form-check-label" for="item4">Security</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="item5">
										<label class="form-check-label" for="item5">Cloud</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="item6">
										<label class="form-check-label" for="item6">Blockchain & Bitcoin</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="item7">
										<label class="form-check-label" for="item7">Design & Creative</label>
									</div>
								</div>
							</div>
						</div>
						<div class="search-filter-panel">
							<a class="sfp-title" data-bs-toggle="collapse" href="#Roles " role="button" aria-expanded="false" aria-controls="Roles">
							Roles 
							</a>
							<div class="collapse show" id="Roles">
								<div class="card card-body">
									<div class="roles-searchbox">
										<input type="search" class="form-control" placeholder="Search Roles  ( 421 )">
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="role1">
										<label class="form-check-label" for="role1">Leadership and Management</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="role2">
										<label class="form-check-label" for="role2">Computer Programming(</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="role3">
										<label class="form-check-label" for="role3">Data Analysis</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="role4">
										<label class="form-check-label" for="role4">Python Programming</label>
									</div>
									
								</div>
							</div>
						</div>
						
					</div>
				<!--  Sidebar Ends  -->

				<!--  Search Result Area  Starts -->
					<div class="col-xl-9 col-lg-8">
						<div class="search-result-cnt">
							<div class="search-result-title">
								<h2>10 results for "Prompt”</h2>
								<div class="dropdown">
									<h3 class="d-inline">Sort by:</h3> <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
									Best Match
									</button>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#">Best Match</a></li>
										<li><a class="dropdown-item" href="#">Newest</a></li>
									</ul>
									</div>
								</div>
							</div>

							<div class="search-listing">
								<div class="row">
									<div class="col-xl-4 col-lg-6 col-md-6">
										<div class="card">
											<img src="<?php echo get_template_directory_uri(); ?>/images/search-sample-img.jpg" alt=""/>
											<img src="<?php echo get_template_directory_uri(); ?>/images/con-img-ai-certified-trainer.png" alt="" class="search-thumb"/>
											<a href="#" class="btn btn-primary">Buy Now</a>
											<div class="search-listing-cnt">
												<h3>AI+ Executive</h3>
												<p><b>Job Roles:</b> Data science, Deap learning, Machine learning, Human learning </p>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-6 col-md-6">
										<div class="card">
											<img src="<?php echo get_template_directory_uri(); ?>/images/search-sample-img.jpg" alt=""/>
											<img src="<?php echo get_template_directory_uri(); ?>/images/con-img-ai-certified-trainer.png" alt="" class="search-thumb"/>
											<a href="#" class="btn btn-primary">Buy Now</a>
											<div class="search-listing-cnt">
												<h3>AI+ Executive</h3>
												<p><b>Job Roles:</b> Data science, Deap learning, Machine learning, Human learning </p>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-6 col-md-6">
										<div class="card">
											<img src="<?php echo get_template_directory_uri(); ?>/images/search-sample-img.jpg" alt=""/>
											<img src="<?php echo get_template_directory_uri(); ?>/images/con-img-ai-certified-trainer.png" alt="" class="search-thumb"/>
											<a href="#" class="btn btn-primary">Buy Now</a>
											<div class="search-listing-cnt">
												<h3>AI+ Executive</h3>
												<p><b>Job Roles:</b> Data science, Deap learning, Machine learning, Human learning </p>
											</div>
										</div>
									</div>
									
									
								</div>
							</div>



					</div>
				<!--  Search Result Area  Starts -->

				</div>
			</div>
		</section>
	</div>
</div>



<?php
get_footer();

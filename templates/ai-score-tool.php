<?php
/* Template Name: AI SCORE TOOL  */
?>

<?php
get_header();
$form_shortcode = get_field('form_shortcode');
$discover_your_ai_readiness_level =get_field('discover_your_ai_readiness_level');
$discover_your_ai_readiness_level_content =get_field('discover_your_ai_readiness_level_content');
$start_evaluation_now_button =get_field('start_evaluation_now_button');
$check_your_ai_score_status =get_field('check_your_ai_score_status');
$check_your_ai_score_status_content =get_field('check_your_ai_score_status_content');
$the_future_of_ai_heading = get_field('the_future_of_ai_heading');
$the_future_of_ai_subheading = get_field('the_future_of_ai_subheading');
$dive_deeper_into_the_ai_score_title = get_field('dive_deeper_into_the_ai_score_title');
$dive_deeper_into_the_ai_score_subtitle = get_field('dive_deeper_into_the_ai_score_subtitle');
$see_how_the_ai_score_works_button = get_field('see_how_the_ai_score_works_button');
$faq_heading = get_field('faq_heading');
$score_faq = get_field('score_faq');
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script> 

<div id="ai-score-tool-page">
    <section class="beta-stripe">
        Beta Version
    </section>
    <section class="cmn-section cya-ai-score-container cya-ai-score-bg">
        <div class="container">
		
			<div class="row g-5">
                <?php if($discover_your_ai_readiness_level): ?>
				<div class="col-lg-6">
					<div class="scorev2card">
						<h2><?php echo $discover_your_ai_readiness_level; ?></h2>
						<p><?php echo $discover_your_ai_readiness_level_content; ?></p>
                        <?php if($start_evaluation_now_button): ?>
						    <a href="<?php echo $start_evaluation_now_button['url']; ?>" class="btn btn-primary"><?php echo $start_evaluation_now_button['title']; ?></a>
                        <?php endif; ?>
					</div>
				</div>
                <?php endif; ?>
                <?php if($check_your_ai_score_status): ?>
				<div class="col-lg-6">
					<div class="scorev2card">
						<h2><?php echo $check_your_ai_score_status; ?></h2>
						<p><?php echo $check_your_ai_score_status_content; ?></p>
						<?php echo do_shortcode("[otp_verification]"); ?>
					</div>
				</div>
                <?php endif; ?>
			</div>
		
            
        </div>
    </section>
	
	<section class="cmn-section">
    <div class="container">
      <div class="text-center">        
          <h2 class="mb-4">How It Works (Steps to Guide the User)</h2>
      </div>

      <?php if( have_rows('assessment_card') ): ?>
        <div class="row gx-lg-5 gy-lg-0 gy-3">
          <?php while( have_rows('assessment_card') ): the_row(); 
              $icon = get_sub_field('icon');
              $icon_heading = get_sub_field('icon_heading');  
              ?>
          <div class="col-lg-4">
            <div class="assessment-cards">
              <?php if( $icon ): ?>
              <div class="amt-cardsicons"><img src="<?php echo $icon;?>" alt="Assessment Icon"></div>
              <?php endif;?>
              <?php if( $icon_heading ): ?>
              <div class="amt-cards-text"><?php echo $icon_heading;?></div>
              <?php endif;?>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
		
      <?php endif; ?> 

    </div>
  </section>
	
	
	
    <!-- Thanks You Modal Popup -->
    <div class="modal fade cya-ai-score-container-popup gf-thank-you-popup" id="exampleModalCentered" tabindex="-1" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl p-2">
            <div class="modal-content">
                <div class="modal-header border-0 p-4">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4 p-lg-5">
                    <div class="d-flex justify-content-center mb-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/cya-thanks-popup.png" alt="upload image"/>
                    </div>
                    <div>
                        <h4 class="text-center w-90 m-auto">Please complete AI Score Test first.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- OTP Verification Modal -->
    <div class="modal fade" id="otpVerificationModal" tabindex="-1" aria-labelledby="otpModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="otpModalLabel">Verify Your OTP</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>A 6-digit OTP has been sent to your email. Please enter it below:</p>
                    <input type="text" id="otp" class="form-control" placeholder="Enter OTP" maxlength="6">
                    <p id="otp_error" class="text-danger mt-2" style="display: none;">Invalid OTP. Please try again.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="verify_otp">Verify OTP</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Your results are not Modal Popup -->
    <div class="modal fade cya-ai-score-container-popup" id="exampleModalCentered1" tabindex="-1" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl p-2">
            <div class="modal-content">
                <div class="modal-header border-0 p-4">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4 p-lg-5">
                    <div class="d-flex justify-content-center mb-3 mb-lg-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/cya-error-popup.png" alt="upload image"/>
                    </div>
                    <div>
                        <h4 class="text-center">Your results are not available yet. Please check back later or wait for the email notification. You can reach out to <span style="color: var(--primary-color); font-size: 20px;">support@aicerts.io</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="ai-score-section" class="container You-credit-in-ecellent-sape common-section mt-4"  style="display: none;">
        <div class="row">
            <div class="col-12 col-lg-4 d-flex flex-column">        
                <div class="your-ai-score flex-fill">
                    <div class="primary-text d-flex justify-content-center pb-3"><span class="td me-1">Your</span> AI Score</div>
                    <div class="scorecircleai"><label id="scoreimage">750</label><img src="<?php echo get_template_directory_uri(); ?>/images/roi-circle-bg.png" alt="upload image"/></div>
                    <div class="mt-4 text-center">
                        <h3 id="name">Nerd 👍</h3>
                        <p class="mb-1" id="generated" style="font-weight: 600;">Generated 10th Feb</p>
                        <p style="color: #91919F; font-weight: 600;">AICERTs</p>
                    </div>
                </div>        
            </div>
            <div class="col-12 col-lg-8 d-lg-flex mt-4 mt-lg-0">
                <div class="ycies">        
                    <div class="row">
                        <div class="col-1 d-flex">
                            <div class="ait-wm-sw-lr flex-1 mx-3 font500">
                                <h3 class="mt-1">AI</h3>
                                <h3>Score</h3>
                            </div>
                        </div>
                        <div class="col-11">
                            <div class="primary-text">Your credit in excellent shape!</div>
                        </div>
                        <div class="font500">
                            <div class="d-flex justify-content-center py-4">Categories</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4 p-0">
            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/wl-ai.png" alt="upload image" class="mw100" /> 
                 </div>
            </div>
            <div class="col-12 col-lg-8 d-lg-flex oa-table">
                <table class="table flex-1 mb-0">
                    <thead>
                        <tr>
                            <th scope="col">Category</th>
                            <th scope="col">Score</th>
                            <th scope="col">Weight</th>
                            <th scope="col">Weighted Contribution</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Certifications</td>
                        <td id="certifications-score">250</td>
                        <td>0.25</td>
                        <td id="certifications-contribution" style="color: #CFA935;">62.5</td>
                    </tr>

                    <tr>
                        <td>Experience</td>
                        <td id="experience-score">200</td>
                        <td>0.3</td>
                        <td id="experience-contribution" style="color: #CFA935;">60.0</td>
                    </tr>

                    <tr>
                        <td>Skills</td>
                        <td id="skills-score">150</td>
                        <td>0.2</td>
                        <td id="skills-contribution" style="color: #CFA935;">30.0</td>
                    </tr>

                    <tr>
                        <td>Contributions</td>
                        <td id="contributions-score">100</td>
                        <td>0.15</td>
                        <td id="contributions-contribution" style="color: #CFA935;">15.0</td>
                    </tr>

                    <tr>
                        <td>Feedback</td>
                        <td id="feedback-score">50</td>
                        <td>0.1</td>
                        <td id="feedback-contribution" style="color: #CFA935;">5.0</td>
                    </tr>

                    <tr>
                        <td>Total</td>
                        <td></td>
                        <td></td>
                        <td id="total-contribution" style="color: #CFA935;">182.5</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="advance-ai-score-section adaptable-bg cmn-section" id="ai-score-form">
        <div class="container">
            <h2 class="mb-4">Advanced AI Score Application</h2>            
            <div class="row">
                <div class="col-12 col-lg-12 card-wrapper  w-100">                
                    <?php echo do_shortcode($form_shortcode); ?>
                </div>
                <!-- <div class="col-12 col-lg-6 card-wrapper">
                    <h4 class="mb-2">Certifications</h4>                    
                    <div class="finput-wrapper">
                        <label for="foundational-certifications">Foundational Certifications</label>
                        <div class="finput-content">
                            <label class="fi upload-fi p65" for="foundational-certifications">
                                Choose a file 
                                <div class="img-wrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/ms_upload.svg" alt="upload image"/>
                                </div>
                                <input type="file" id="foundational-certifications" name="foundational-certifications" class="form-control d-none">
                            </label>
                        </div>
                    </div>                    
                    <div class="finput-wrapper">
                        <label for="intermediate-certifications">Intermediate Certifications</label>
                        <div class="finput-content">
                            <label class="fi upload-fi p65" for="intermediate-certifications">Choose a file</label>
                            <div class="img-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/ms_upload.svg" alt="upload image"/>
                            </div>
                            <input type="file" id="intermediate-certifications" name="intermediate-certifications" class="form-control d-none">
                        </div>
                    </div>                    
                    <div class="finput-wrapper">
                        <label for="advanced-certifications">Advanced Certifications</label>
                        <div class="finput-content">
                            <label class="fi upload-fi p65" for="advanced-certifications">Choose a file</label>
                            <div class="img-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/ms_upload.svg" alt="upload image"/>
                            </div>
                            <input type="file" id="advanced-certifications" name="advanced-certifications" class="form-control d-none">
                        </div>
                    </div>
                </div>                
                <div class="col-12 col-lg-6 card-wrapper">
                    <h4 class="mb-2">Professional Experience</h4>                    
                    <div class="finput-wrapper">
                        <label for="years-experience">Years of Experience</label>
                        <div class="finput-content">
                            <input type="text" id="years-experience" name="years-experience" class="form-control fi" placeholder="Enter your experience">
                        </div>
                    </div>
                    
                    <div class="finput-wrapper">
                        <label for="project-complexity">Project Complexity</label>
                        <div class="finput-content">
                            <input type="text" id="project-complexity" name="project-complexity" class="form-control fi" placeholder="Enter your project complexity">
                        </div>
                    </div>                    
                    <div class="finput-wrapper">
                        <label for="sector-roles">Sector-Specific Roles</label>
                        <div class="finput-content">
                            <input type="text" id="sector-roles" name="sector-roles" class="form-control fi" placeholder="Enter your sector-specific roles">
                        </div>
                    </div>
                </div>                
                <div class="col-12 col-lg-6 card-wrapper">
                    <h4 class="mb-2">Practical Skills</h4>                    
                    <div class="finput-wrapper">
                        <label for="coding-challenges">Coding Challenges</label>
                        <div class="finput-content">
                            <input type="text" id="coding-challenges" name="coding-challenges" class="form-control fi" placeholder="Enter your coding challenges">
                        </div>
                    </div>                    
                    <div class="finput-wrapper">
                        <label for="case-studies">Case Studies</label>
                        <div class="finput-content">
                            <label class="fi upload-fi p65" for="case-studies">
                                Choose a file 
                                <div class="img-wrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/ms_upload.svg" alt="upload image"/>
                                </div>
                                <input type="file" id="case-studies" name="case-studies" class="form-control d-none">
                            </label>
                        </div>
                    </div>
                    <div class="finput-wrapper">
                        <label for="case-studies">Hackathon Participation</label>
                        <div class="finput-content">
                            <label class="fi upload-fi p65" for="hackathon-participation">
                                Choose a file 
                                <div class="img-wrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/ms_upload.svg" alt="upload image"/>
                                </div>
                                <input type="file" id="hackathon-participation" name="hackathon-participation" class="form-control d-none">
                            </label>
                        </div>
                    </div>
                </div>                
                <div class="col-12 col-lg-6 card-wrapper">
                    <h4 class="mb-2">Industry Contributions</h4>                    
                    <div class="finput-wrapper">
                        <label for="open-source">Open-Source Contributions</label>
                        <div class="finput-content">
                            <input type="text" id="open-source" name="open-source" class="form-control fi" placeholder="Enter your open-source contributions">
                        </div>
                    </div>
                    <div class="finput-wrapper">
                        <label for="case-studies">Research Publications</label>
                        <div class="finput-content">
                            <label class="fi upload-fi p65" for="research-publications">
                                Choose a file 
                                <div class="img-wrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/ms_upload.svg" alt="upload image"/>
                                </div>
                                <input type="file" id="research-publications" name="research-publications" class="form-control d-none">
                            </label>
                        </div>
                    </div>
                    <div class="finput-wrapper">
                        <label for="case-studies">Community Engagement</label>
                        <div class="finput-content">
                            <label class="fi upload-fi p65" for="community-engagement">
                                Choose a file 
                                <div class="img-wrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/ms_upload.svg" alt="upload image"/>
                                </div>
                                <input type="file" id="community-engagement" name="community-engagement" class="form-control d-none">
                            </label>
                        </div>
                    </div>
                </div>                
                <div class="col-12 col-lg-12 card-wrapper w-100">
                    <h4 class="mb-2">Peer & Employer Feedback</h4>                    
                    <div class="w-100 d-block d-lg-flex justify-content-between">
                        <div class="finput-wrapper cw50m100">
                            <label for="employer-feedback">Employer Feedback</label>
                            <div>
                                <div class="finput-content">
                                    <label class="fi upload-fi p65" for="employer-feedback">
                                        Choose a file 
                                        <div class="img-wrapper">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/ms_upload.svg" alt="upload image"/>
                                        </div>
                                        <input type="file" id="employer-feedback" name="employer-feedback" class="form-control d-none">
                                    </label>
                                </div>
                            </div>
                        </div>    
                        <div class="finput-wrapper cw50m100">
                            <label for="employer-feedback">Peer Endorsements</label>
                            <div>
                                <div class="finput-content">
                                    <label class="fi upload-fi p65" for="peer-endorsements">
                                        Choose a file 
                                        <div class="img-wrapper">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/ms_upload.svg" alt="upload image"/>
                                        </div>
                                        <input type="file" id="peer-endorsements" name="employer-feedback" class="form-control d-none">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-primary mt30 caibtn">Calculate AI Score</button>
            </div> -->
        </div>
    </section>
    
    <?php
    
    ?>
    <?php if($the_future_of_ai_heading): ?>
    <section class="cmn-section">
        <div class="container">
            <div class="scoreherocard">
                <h2 class="text-white"><?php echo $the_future_of_ai_heading; ?></h2>
                <h3 class="text-white"><?php echo $the_future_of_ai_subheading; ?></h3>
            </div>
        </div>
    </section>
    <?php endif; ?>
    
    <?php if($dive_deeper_into_the_ai_score_title): ?>
    <section class="common-section cmn-section scorecta">
        <div class="container text-center">    
            <div class="scorecta-cnt">
                <h2 class="mb-4"><?php echo $dive_deeper_into_the_ai_score_title; ?></h2>
                <h3><?php echo $dive_deeper_into_the_ai_score_subtitle; ?></h3>
                <a href="<?php echo $see_how_the_ai_score_works_button['url']; ?>" class="btn btn-primary"><?php echo $see_how_the_ai_score_works_button['title']; ?></a>
            </div>  
        </div>
    </section>
    <?php endif; ?>
    
    <?php if($faq_heading): ?>
    <section class="h2_faq pt-0">
        <div class="container">
            <h2 class="white_text mb-3 mb-md-5 text-center"><?php echo $faq_heading; ?></h2>
    
            <div class="faq_wrap">
                <div class="accordion" id="faq-accordion">
                    <?php $i=1; foreach($score_faq as $faq): ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq_heading<?php echo $i; ?>">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="faq_collapse<?php echo $i; ?>">
                                <?php echo $faq['faq_question']; ?>
                                </button>
                            </h2>
                            <div id="faq_collapse<?php echo $i; ?>" class="accordion-collapse collapse" aria-labelledby="faq_heading<?php echo $i; ?>" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                <?php echo $faq['faq_answer']; ?>
                                </div>
                            </div>
                        </div>
                    <?php $i++;  endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
</div>
<?php
get_footer();
?>
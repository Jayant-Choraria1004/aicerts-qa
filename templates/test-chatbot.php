<?php
/*
 *    Template Name: chatbotpage
 */
get_header();
$top_heading = get_field('top_banner_heading');
$top_content = get_field('top_banner_content');
$top_cta_text = get_field('top_banner_cta_text');
$top_cta_link = get_field('top_banner_cta_link');

$WhatisRecer_title = get_field('whatisrecer_title');
$whatisrecer_content = get_field('whatisrecer_content');
$whatisrecer_subtitle = get_field('whatisrecer_subtitle');
$whyrecertify_points = get_field('why_recertify_points');

$Reattempt_heading = get_field('reattempt_heading');
$reattempt_subheading = get_field('reattempt_subheading');

$Reattempt_policy = get_field('reattempt_policy_heading');
$Reattempt_note = get_field('reattempt_policy_note');

$assistance_heading = get_field('assistance_heading');
$assistance_content = get_field('assistance_content');
$contact_heading = get_field('contact_heading');
$contactlist = get_field('contactlist');
$contant_cta_text = get_field('contant_cta_text');
$contant_cta_link = get_field('contant_cta_link');

$buynow_cta_link = get_field('buynow_cta_link' );
$reattempt_cta_link = get_field('reattempt_cta_link' );

$recertification_faqs = get_field('recertification_faqs');
?>

<div class="middle-section">
  
    <section class="banner-video-section imgbanner chatbot-banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="video-banner-cnt">
				<h1>Accelerate Your Career with AI and Blockchain Certifications </h1>
				<p>Gain globally recognised credentials to lead in the tech-driven future.</p>
				<div class="custom_chatbotui">
					<div class="input-group mb-3">
					  <input type="text" class="form-control" placeholder="Ask your question to our Certification Advisor">
					  <button class="chatboticon" type="button" onclick="handleClick()"><img src="<?php echo get_template_directory_uri(); ?>/images/chatboticon.svg" alt="" class="me-2"/></button>
					</div>
					<div class="chatbotfixed">
						<!-- <iframe id="chatbot-widget-window-iframe"  src="https://app.xbot365.io/widget/03be73aa6e654a928fb539d40cce110a"  width="100%"  height="500px"  frameborder="0"  allow="clipboard-read; clipboard-write"></iframe></div> -->
							
					</div>
				<a href="#" class="btn btn-primary me-3">Explore Certifications</a>
                
            
          </div>
        </div>
      </div>
    </section><!-- TopBanner -->
  
	<script> 
	function handleClick() { 
		const host = document.querySelector("chat-widget"); 
		const shadowRoot = host.shadowRoot; 
		// or host.attachShadow({ mode: 'open' }) if creating it 
		//const shadowElement = shadowRoot.getElementById( "gpt-trainer-submit-button" ); 
		shadowElement?.click(); 
	} 
	</script>
  
<?php
get_footer();
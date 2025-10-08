<?php
/*
 *    Template Name: blockchain-hackathon
 */
get_header();

$template_url = get_template_directory_uri();

$banner_title = get_field('banner_title');
$banner_details = get_field('banner_details');
$banner_cta_button = get_field('banner_cta_button');
$download_event_details_button = get_field('download_event_details_button');
$banner_background_image = get_field('banner_background_image');

$event_core_fields_group = get_field('event_core_fields_group');
$event_start_date = $event_core_fields_group['event_start_date_time'];

$date = DateTime::createFromFormat('d/m/Y g:i a', $event_start_date);
$event_start_date = date_format($date, 'F j, Y g:i a');

$event_overview_group = get_field('event_overview_group'); 
$why_blockchain_and_ai_for_education = get_field('why_blockchain_and_ai_for_education');

$event_schedule_group = get_field('event_schedule_group');

$panel_details = get_field('panel_discussion_details');
$panel_details_section_title = $panel_details['section_title'];
$panel_details_section_cards = $panel_details['section_cards'];
$discussion_points_title = $panel_details['discussion_points_title'];
$discussion_points_content = $panel_details['discussion_points_content'];

$event_user_instructions = get_field('event_user_instructions');

   
?>
<script>
  function updateTimer() {
    future  = Date.parse('<?php echo $event_start_date; ?>');
    now     = new Date();
    diff    = future - now;

    days  = Math.floor( diff / (1000*60*60*24) );
    hours = Math.floor( diff / (1000*60*60) );
    mins  = Math.floor( diff / (1000*60) );
    secs  = Math.floor( diff / 1000 );

    d = days;
    h = hours - days  * 24;
    m = mins  - hours * 60;
    s = secs  - mins  * 60;

    document.getElementById("hackathontimer")
      .innerHTML =
        '<div class="counterdigits"><h2>' + d + '</h2><span>days</span></div>' +
        '<div class="counterdigits"><h2>' + h + '</h2><span>hours</span></div>' +
        '<div class="counterdigits"><h2>' + m + '</h2><span>minutes</span></div>' +
        '<div class="counterdigits"><h2>' + s + '</h2><span>seconds</span></div>' ;
  }
  setInterval('updateTimer()', 1000 );
</script>
<div class="middle-section">
  
    <section class="banner-video-section imgbanner hackathonbanner" style="background-image: url('<?php echo $banner_background_image; ?>')">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="video-banner-cnt">
                <p><small><?php echo $event_core_fields_group['above_banner_event_date_caption']; ?></small></p>
                <h1><?php echo $banner_title; ?></h1>
                <p><?php echo $banner_details; ?></p>
                <?php if(!empty($banner_cta_button)) : ?>
                <a href="<?php echo esc_url($banner_cta_button['url']); ?>" class="btn btn-primary me-lg-2"><?php echo esc_html($banner_cta_button['title']); ?></a>
                <?php endif; ?>
                <?php if(!empty($download_event_details_button)) : ?>
                <a href="<?php echo esc_url($download_event_details_button); ?>" class="btn btn-primary" download>Download Event Details
                </a>
                <?php endif; ?>
                <?php if(!empty($event_start_date)) : ?>
                  <div class="hackathontimer mt-4" id="hackathontimer">
                    <div class="counterdigits">
                      <h2>107</h2><span>Days</span>
                    </div>
                    <div class="counterdigits">
                      <h2>11</h2><span>Hours</span>
                    </div>
                    <div class="counterdigits">
                      <h2>54</h2><span>Minutes</span>
                    </div>
                    <div class="counterdigits">
                      <h2>19</h2><span>Seconds</span>
                    </div>
                  </div>
                <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="common-section">
      <div class="container">
          <?php if( $event_overview_group && !empty($event_overview_group['event_overview_title']) ): ?>
          <h2 class="text-center mb-4"><?php echo $event_overview_group['event_overview_title']; ?></h2>
          <?php endif; ?>
          <div class="row g-4">
            
          <?php         
          if( $event_overview_group && !empty($event_overview_group['event_overview']) ): 
              $event_overview = $event_overview_group['event_overview'];
              foreach( $event_overview as $overview_item ): 
                  $value_icon = $overview_item['value_icon'];
                  $value_name = $overview_item['value_name'];
                  $value_detail = $overview_item['value_detail'];
          ?>
              <div class="col-lg-4 col-md-6">
                  <div class="overviewcards">
                      <?php if( $value_icon ): ?>
                          <img class="img-responsive" src="<?php echo esc_url($value_icon); ?>" alt="<?php echo esc_attr($value_name); ?>">                 
                      <?php else: ?>
                          <img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()."/images/overview-icon1.svg"); ?>" alt="">                 
                      <?php endif; ?>
                      <?php if( $value_name ): ?>
                          <h3 class="mb-0"><?php echo esc_html($value_name); ?></h3>
                      <?php endif; ?>
                      <?php if( $value_detail ): ?>
                          <p class="mb-0"><?php echo esc_textarea($value_detail); ?></p>
                      <?php endif; ?>
                  </div>
              </div>
          <?php 
              endforeach; 
          endif;
          ?>        
          </div>
      </div>
    </section>

    <!--section class="common-section">
      <div class="container">
        <?php if( $event_user_instructions && !empty($event_user_instructions['section_title']) ): ?>
            <h2 class="text-center mb-4"><?php echo $event_user_instructions['section_title']; ?></h2>
        <?php endif; ?>
        <div class="row g-4">
          <?php 
          if($event_user_instructions && !empty($event_user_instructions['section_description'])) : 
            echo $event_user_instructions['section_description']; 
          endif;
          ?>
        </div>
      </div>
    </section-->
	
	<section class="common-section">
      <div class="container">
        <?php if( $event_user_instructions && !empty($event_user_instructions['section_title']) ): ?>
            <h2 class="text-center mb-4"><?php echo $event_user_instructions['section_title']; ?></h2>
        <?php endif; ?>
        <div class="row">
			<div class="col-12 hackathonlisting">
        <?php if( $event_user_instructions && !empty($event_user_instructions['section_description']) ): ?>
          <?php echo $event_user_instructions['section_description']; ?>
        <?php endif; ?>
		 </div> 
        </div>
      </div>
    </section>
	
    
    <?php if($why_blockchain_and_ai_for_education) : ?>       
    <section class="cmn-section dark_bg common-section">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6">
            <h2 class="mb-4"><?php echo $why_blockchain_and_ai_for_education['section_title']; ?></h2>         
            <div class="hackathonlisting me-0 me-lg-5">
              <ul>
                <?php foreach($why_blockchain_and_ai_for_education['section_pointers'] as $section_pointer) : ?>
                  <li><b> <?php echo $section_pointer['value_name']; ?></b> <?php echo $section_pointer['value_detail']; ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 d-none d-md-block d-lg-block d-xl-block">
            <div class="text-center position-relative">
				<div class="movingboject1 bouncestyle1"><img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()."/images/movingobject1.webp"); ?>" alt=""></div>
              <?php if(!empty($why_blockchain_and_ai_for_education['section_image'])): ?>
              <img class="img-responsive" src="<?php echo $why_blockchain_and_ai_for_education['section_image']['url']; ?>" alt="<?php echo $why_blockchain_and_ai_for_education['section_image']['alt']; ?>">                 
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php endif;?>

    
  <?php if( $event_schedule_group ): ?>
  <section class="common-section common-section">
    <div class="container">
      <h2 class="mb-4 text-center"><?php echo $event_schedule_group['section_title']; ?></h2>
      <div class="row g-5">
        <?php 
          $schedule_card = $event_schedule_group['schedule_card'];
          $i=1;
          foreach( $schedule_card as $card ):
            $card_title = $card['card_title'];
            $above_activity_schedule = $card['above_activity_schedule'];
            $activities = $card['activities'];
            $below_activity_schedule = $card['below_activity_schedule'];
        ?>
        <div class="col-lg-6">
          <div class="EventSchedule">
            <div class="EventSchedule_title">
              <h3 class="mb-0"><?php echo esc_html($card_title); ?></h3>
              <div class="eventday"><span><?php printf("0%d", $i); ?></span><img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()."/images/eventicon.svg"); ?>" alt=""></div>                   
            </div>
            <div class="hackathonschedules">
                <?php if($above_activity_schedule) :?>
                <div><p><?php echo $above_activity_schedule; ?></p></div>
                <?php endif; ?>

                <?php if( $activities ): ?>
                  <?php foreach( $activities as $activity ): 
                    $activity_time = $activity['activity_time'];
                    $activity_details = $activity['activity_details'];
                  ?>
                  <div class="schedulelist">
                    <div class="eventtime"><i class="fa-regular fa-clock me-1"></i> <span><?php echo $activity_time; ?></span></div>
                    <div><p class="mb-0 white_text"><?php echo $activity_details; ?></p></div>
                  </div>
                  <?php endforeach; ?>
                <?php endif; ?>                 
            </div>
            <?php if($below_activity_schedule) :?>
                <div class="mt-auto"><p><?php echo $below_activity_schedule; ?></p></div>
            <?php endif; ?>
          </div>
        </div>
        <?php $i++; endforeach; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <section class="cmn-section common-section dark_bg">
    <div class="container">
      <h2 class="mb-4"><?php echo esc_html($panel_details_section_title); ?></h2>
      <div class="row g-4">
        <?php if ($panel_details_section_cards): ?>
          <?php foreach ($panel_details_section_cards as $card): ?>
            <div class="col-lg-4 col-md-6">
              <div class="overviewcards">
                <img class="img-responsive" src="<?php echo esc_url($card['value_icon']); ?>" alt="">
                <h3 class="mb-0"><?php echo esc_html($card['value_name']); ?></h3>
                <p class="mb-0"><?php echo esc_html($card['value_detail']); ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
        <?php if ($discussion_points_content): ?>
        <div class="col-lg-12 col-md-6">
          <div class="overviewcards align-items-start">          
            <h3 class="mb-0"><?php echo $discussion_points_title; ?></h3>
            <ul class="overviewlist">
              <?php if ($discussion_points_content): ?>
                <?php echo wp_kses_post($discussion_points_content); ?>
              <?php endif; ?>
            </ul>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <?php 
  $participant_benefits = get_field('participant_benefits');
  $participant_benefits_section_cards = $participant_benefits['section_cards']; ?>

  <section class="common-section">
    <div class="container">
      <h2 class="text-center mb-4"><?php echo $participant_benefits['section_title']; ?></h2>
      <div class="row g-4">
        <?php if ($participant_benefits_section_cards): ?>
          <?php foreach ($participant_benefits_section_cards as $card): ?>
            <div class="col-lg-4 col-md-6">
              <div class="overviewcards">
                <img class="img-responsive" src="<?php echo esc_url($card['card_icon']['url']); ?>" alt="">
                <h3 class="mb-0"><?php echo esc_html($card['card_title']); ?></h3>
                <ul class="awardprizelist">
                  <?php if ($card['card_pointers']): ?>
                    <?php foreach ($card['card_pointers'] as $pointer): ?>
                      <li><?php echo esc_html($pointer['text_pointers']); ?></li>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </ul>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>


  <?php 
  $additional_resources_for_participants​ = get_field('additional_resources_for_participants​'); 
  if($additional_resources_for_participants​) : ?>       
    <section class="common-section resources-bg">
      <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <?php if(!empty($additional_resources_for_participants​['section_image'])): ?>
          <img class="w-100 d-block d-lg-none py-4" src="<?php echo $additional_resources_for_participants​['section_image']['url']; ?>" alt="<?php echo $additional_resources_for_participants​['section_image']['alt']; ?>">                 
          <?php endif; ?>
        </div>  
        <div class="col-lg-6 addi-resources">
            <div class="py-lg-5 py-4">
              <h2 class="mb-4"><?php echo $additional_resources_for_participants​['section_title']; ?></h2>         
              <div class="hackathonlisting">
                <ul>
                  <?php foreach($additional_resources_for_participants​['section_pointers'] as $section_pointer) : ?>
                    <li><b> <?php echo $section_pointer['value_name']; ?></b> <?php echo $section_pointer['value_detail']; ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
        </div>
      </div>
      </div>
    </section>
  <?php endif;?>

  <?php 
  $problem_statement = get_field('problem_statement');
  if($problem_statement) : ?>
      <section class="common-section">
        <div class="container">
          <h2 class="text-center mb-4"><?php echo $problem_statement['section_title']; ?></h2>
          <div class="row g-4 justify-content-center">
            <?php foreach($problem_statement['cards'] as $card) : ?>
            <div class="col-lg-4 col-md-6">
                <div class="overviewcards">
                  <div class="stroketextstyle"><?php echo $card['card_step']; ?></div>
                  <h3 class="mb-0"><?php echo $card['card_title'];?></h3>
                  <p><?php echo $card['card_details']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>
  <?php endif; ?>

<?php 
    $collaboration_and_mentorship_opportunities = get_field('collaboration_and_mentorship_opportunities'); 
    $cmo_cards = $collaboration_and_mentorship_opportunities['section_pointers']; 
?>
    
  <section class="common-section collaboration-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 addi-resources">
          <div class="py-lg-5 py-4">
            <h2 class="mb-4"><?php echo $collaboration_and_mentorship_opportunities['section_title']; ?>​</h2>         
            <div class="collaboration-listing">
              <ul>
                <?php foreach($cmo_cards as $card) : ?>
                <li><img src="<?php echo $card['value_icon']; ?>"><p><b><?php echo $card['value_name']; ?></b><?php echo $card['value_detail'];?></p></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <img class="w-100 d-block d-lg-none py-4" src="<?php echo $collaboration_and_mentorship_opportunities['section_image']['url']; ?>" alt="<?php echo $collaboration_and_mentorship_opportunities['section_image']['alt']; ?>">                 
        </div>
      </div>
    </div>
  </section>

    <?php
    $team_structure_and_target_participants = get_field('team_structure_&_target_participants');
    $team_size_section = $team_structure_and_target_participants['team_size_section'];
    $target_participants_section = $team_structure_and_target_participants['target_participants_section'];

    $team_size_section_title = $team_size_section['title'];
    $team_size_options = $team_size_section['size_options'];
    $team_size_note = $team_size_section['team_size_note'];

    $target_participants_section_title = $target_participants_section['section_title'];
    $participant_types = $target_participants_section['participant_type'];
    ?>
                  
    <section class="common-section">
      <div class="container">
          <h2 class="text-center mb-4">
              <?php echo esc_html($team_structure_and_target_participants['section_title']); ?>
          </h2>
          <div class="row g-4">          
            <div class="col-lg-4">
                <div class="overviewcards">
                  <h3 class="mb-0"><?php echo esc_html($team_size_section_title); ?></h3>
                  <div class="target_participants">
                    <?php foreach( $team_size_options as $option ): ?>
                    <div> <?php echo esc_html($option['options']); ?></div>
                    <?php endforeach; ?>  
                  </div>
                  <p class="mb-0"> <?php echo esc_html($team_size_note); ?></p>
                </div>
            </div>
            <div class="col-lg-8">
              <div class="overviewcards">
                <h3 class="mb-0"><?php echo esc_html($target_participants_section_title); ?></h3>
                <div class="target_participants">
                <?php foreach( $participant_types as $participant ): ?>
                  <div class="largebox"><?php echo esc_html($participant['name']); ?></div>
                <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
      
    
    <?php 
    $judging_criteria = get_field('judging_criteria');
    $judging_criteria_cards = $judging_criteria['section_cards'];
    ?>
    <section class="cmn-section common-section dark_bg judging-criteria-section">
      <div class="container">        
          <h2 class="mb-4 text-center"><?php echo $judging_criteria['section_title']; ?></h2>
          <div class="row g-4">    
            <?php foreach($judging_criteria_cards as $card) : ?>         
            <div class="col-lg-3 col-md-6">
                <div class="overviewcards">
                  <img class="img-responsive" src="<?php echo $card['value_icon']; ?>" alt="<?php echo $card['value_name']; ?>">
                  <h3 class="mb-0"><?php echo $card['value_name']; ?></h3>
                  <p class="mb-0"><?php echo $card['value_detail']; ?>​</p>
                </div>
            </div>
            <?php endforeach; ?>
          </div>        
      </div>
    </section>

    <?php 
    $key_challenges_participants_will_tackle = get_field('key_challenges_participants_will_tackle'); 
    if($key_challenges_participants_will_tackle) : ?>       
      <section class="common-section resources-bg KeyChallenges">
        <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <?php if(!empty($key_challenges_participants_will_tackle['section_image'])): ?>
            <img class="w-100 d-block d-lg-none py-4" src="<?php echo $key_challenges_participants_will_tackle['section_image']['url']; ?>" alt="<?php echo $key_challenges_participants_will_tackle['section_image']['alt']; ?>">                 
            <?php endif; ?>
          </div>  
          <div class="col-lg-6 addi-resources">
              <div class="py-lg-5 py-4">
                <h2 class="mb-4"><?php echo $key_challenges_participants_will_tackle['section_title']; ?></h2>         
                <div class="hackathonlisting">
                  <ul>
                    <?php foreach($key_challenges_participants_will_tackle['section_pointers'] as $section_pointer) : ?>
                      <li><b> <?php echo $section_pointer['value_name']; ?></b> <?php echo $section_pointer['value_detail']; ?></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
          </div>
        </div>
        </div>
      </section>
    <?php endif;?>

    <?php 
    $what_to_expect_on_hackathon_day = get_field('what_to_expect_on_hackathon_day'); 
    if($what_to_expect_on_hackathon_day) : ?>       
      <section class="common-section resources-bg HackathonDay">
        <div class="container">
        <div class="row">            
          <div class="col-lg-6 addi-resources">
              <div class="py-lg-5 py-4">
                <h2 class="mb-4"><?php echo $what_to_expect_on_hackathon_day['section_title']; ?></h2>         
                <div class="hackathonlisting">
                  <ul>
                    <?php foreach($what_to_expect_on_hackathon_day['section_pointers'] as $section_pointer) : ?>
                      <li><b> <?php echo $section_pointer['value_name']; ?></b> <?php echo $section_pointer['value_detail']; ?></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
          </div>
		  <div class="col-lg-6">
            <?php if(!empty($what_to_expect_on_hackathon_day['section_image'])): ?>
            <img class="w-100 d-block d-lg-none py-4" src="<?php echo $what_to_expect_on_hackathon_day['section_image']['url']; ?>" alt="<?php echo $what_to_expect_on_hackathon_day['section_image']['alt']; ?>">                 
            <?php endif; ?>
          </div>
        </div>
        </div>
      </section>
    <?php endif;?>

    <?php 
    $why_participate = get_field('why_participate'); 
    if($why_participate) : ?>       
      <section class="common-section resources-bg WhyParticipate">
        <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <?php if(!empty($why_participate['section_image'])): ?>
            <img class="w-100 d-block d-lg-none py-4" src="<?php echo $why_participate['section_image']['url']; ?>" alt="<?php echo $why_participate['section_image']['alt']; ?>">                 
            <?php endif; ?>
          </div>  
          <div class="col-lg-6 addi-resources">
              <div class="py-lg-5 py-4">
                <h2 class="mb-4"><?php echo $why_participate['section_title']; ?></h2>         
                <div class="hackathonlisting">
                  <ul>
                    <?php foreach($why_participate['section_pointers'] as $section_pointer) : ?>
                      <li><b> <?php echo $section_pointer['value_name']; ?></b> <?php echo $section_pointer['value_detail']; ?></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
          </div>
        </div>
        </div>
      </section>
    <?php endif;?>

    <?php $after_hackathon_engagement​ = get_field('post_hackathon_engagement​'); 
    $after_hackathon_engagement​_cards = $after_hackathon_engagement​['section_cards'];
    ?>

    <section class="common-section">
      <div class="container">        
          <h2 class="mb-4 text-center"><?php echo $after_hackathon_engagement​['section_title']; ?>​</h2>
          <div class="row g-4"> 
            <?php foreach($after_hackathon_engagement​_cards as $card) : ?>         
            <div class="col-lg-4 col-md-6">
                <div class="overviewcards">
                  <img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()."/images/icon-topic.svg"); ?>" alt="">                 
                  <h3 class="mb-0"><?php echo $card['value_name']; ?></h3>
                  <p class="mb-0"><?php echo $card['value_detail']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
          </div>
      </div>
    </section>

    <section class="common-section moat-section">
      <div class="container">  
        <?php echo get_field('notes_section'); ?>
      </div>
    </section>

    <?php 
    $footer_cta_banner_bg = get_field('footer_cta_banner_background_image'); 
    $above_title_text = get_field('above_title_text'); 
    $footer_cta_banner_title = get_field('footer_cta_banner_title'); 
    $footer_cta_banner_details = get_field('footer_cta_banner_details'); 
    $footer_cta_banner_cta_button = get_field('footer_cta_banner_cta_button'); 
    $footer_cta_banner_cta_button2 = get_field('footer_cta_banner_cta_button_2'); 
    ?>
    <section class="cmn-section common-section hackathon-cta-bg">
      <div class="container">
          <div class="row">             
            <div class="col-lg-5">                
                  <p class="text-light"><?php echo $above_title_text; ?></p>
                  <h2 class="text-light"><?php echo $footer_cta_banner_title; ?></h2>
                  <p class="text-light"><?php echo $footer_cta_banner_details; ?></p> 
                 
                  <?php if(!empty($footer_cta_banner_cta_button['title'])) : ?>
                  <a href="<?php echo  $footer_cta_banner_cta_button['url']; ?>" class="btn btn-primary me-2"><?php echo $footer_cta_banner_cta_button['title']; ?></a> 
                  <?php endif; ?>

                  <?php if(!empty($footer_cta_banner_cta_button['title'])) : ?>
                  <a href="<?php echo  $footer_cta_banner_cta_button2['url']; ?>" class="btn btn-primary-outline"><?php echo $footer_cta_banner_cta_button2['title']; ?></a>
                  <?php endif; ?>

            </div>            
          </div>        
      </div>
    </section>

    <?php   
    $faqs_section = get_field('faq_section'); 
    $faq_heading = $faqs_section['faq_heading'];
    $faqs= $faqs_section['faqs'];
    ?>
    <?php if( $faqs ): ?>
    <section class="h2_faq mb-5 pb-3 pt-3">
        <div class="container">
            <h2 class="white_text mb-5 text-center"><?php echo $faq_heading; ?></h2>
            <div class="faq_wrap">
                <div class="accordion" id="faq-accordion">
                <?php $faqnumber = 1; 
                    foreach( $faqs as $faq ): 
                        $questions = $faq['faq_question'];
                        $answer = $faq['faq_answer'];
                ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq_heading<?php echo $faqnumber;?>">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq_collapse<?php echo $faqnumber;?>" aria-expanded="true" aria-controls="faq_collapse<?php echo $faqnumber;?>"><?php echo $questions;?></button>
                        </h2>
                        <div id="faq_collapse<?php echo $faqnumber;?>" class="accordion-collapse collapse" aria-labelledby="faq_heading<?php echo $faqnumber;?>" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <?php echo $answer;?>
                            </div>
                        </div>
                    </div>
                <?php $faqnumber++; endforeach; ?>
                </div>
            </div>
        </div>
    </section><!--#FAQs End --> 
    <?php endif; ?>

<?php
get_footer();
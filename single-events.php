<?php 
 /* Template Name: Template Events Details*/
 get_header();

?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<?php
$event_post_title = get_field('event_post_title');
$white_event_logo = get_field('white_event_logo');
$black_event_logo = get_field('black_event_logo');
$text_above_register_button = get_field('text_above_register_button');
$register_button_link = get_field('register_button_link');
$teaser_video = get_field('teaser_video');
$teaser_content = get_field('teaser_content');
$right_teaser_video_image = get_field('right_teaser_video_thumbnail');
$right_teaser_video_url = get_field('right_teaser_video');
$event_topic_tab = get_field('event_topic_tab');
$event_topic_content = get_field('event_topic_content');
$event_topic_title = get_field('event_topic_title');
$save_date_heading = get_field('save_date_heading');
$save_date_image = get_field('save_date_image');
$summit_topic_heading = get_field('summit_topic_heading');
$summit_content = get_field('summit_content');
$event_speaker_heading = get_field('event_speaker_heading');
$event_speakers = get_field('event_speakers');
$who_attend_heading = get_field('who_attend_heading');
$who_attend_image = get_field('who_attend_image');
$who_attend_points = get_field('who_attend_points');
$early_bird_heading = get_field('early_bird_heading');
$early_bird_title = get_field('early_bird_title');
$early_bird_subtitle = get_field('early_bird_subtitle');
$aicert_invite_text = get_field('aicert_invite_text');
$event_partner = get_field('event_partner');
$our_event_updates_title = get_field('our_event_updates_title');
$our_event_updates_heading = get_field('our_event_updates_heading');
$our_event_update_subcontent = get_field('our_event_update_subcontent');
$our_event_photos = get_field('our_event_photos');
$event_date = get_field('event_date');
$event_enddate = get_field('event_end_date');
$event_location = get_field('event_location');
?>

<style type="text/css">
.full_img img:first-child {height: 100%;object-fit: cover;}  
.video_text ul li {list-style: inside;margin-bottom: 5px;}  
.video_text { max-width: 100%; }
</style>

<div class="middle-section">
    <section class="top_video-with-text">
        <div class="top_banner-imgvideo text-center">
            <video width="100%" autoplay muted loop poster="<?php echo esc_url(get_template_directory_uri() . "/images/top_banner.png"); ?>">
                <source src="<?php echo esc_url(get_template_directory_uri() . "/images/Event-main-video.mp4"); ?>" type="video/mp4">
                </source>
            </video>       
        </div>
        <div class="top_banner-content text-center">           
            <div class="container maxwidth">
                <?php if ($event_post_title) { ?>
                    <h1><?php echo $event_post_title; ?></h1>
                <?php } ?>
                <div class="line_with-logo">
                    <span class="line"></span>
                    <?php if ($white_event_logo) {  ?>
                        <!-- <img class="black_theme" alt="AI CERTs" src="<?php echo $white_event_logo; ?>"> -->
                    <?php } if ($black_event_logo) { ?>
                        <!-- <img class="white_theme" alt="AI CERTs" src="<?php echo $black_event_logo; ?>"> -->
                    <?php } ?>
                </div>
                <div class="top_btn pt-5 pb-5">
                    <?php if ($register_button_link) { ?>
                        <!-- <a class="btn btn-primary" href="<?php echo $register_button_link['url']; ?>"><?php echo $register_button_link['title']; ?></a> -->
                    <?php } ?>
                    <div class="date_grid">
                       <?php  $startdate = explode(' ',trim($event_date));
                            $strdat = $startdate[0];
                            $string = $startdate[1];
                            $month_number = date("n",strtotime($string));
                            $event_enddate1 = explode(' ',trim($event_enddate));
                            $enddate = $event_enddate1[0]."<sup>th</sup> ".$event_enddate1[1]." ".$event_enddate1[2];
                        ?>
                        <span class="date_location event_date"><?php echo $strdat."<sup>th</sup>-".$enddate; ?></span>
                        <span class="date_location"><?php echo $event_location; ?></span>
                    </div>
                </div>
                <div id="countdown">
                    <ul>
                    <li><span id="days"></span>days</li>
                    <li><span id="hours"></span>Hours</li>
                    <li><span id="minutes"></span>Minutes</li>
                    <li><span id="seconds"></span>Seconds</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--TopVideo-->

    <section class="TeaserVideo">
        <div class="container">
            <div class="hr_big-line">
                <div class="hr-line_item hr_one"></div>
                <div class="hr-line_item hr_two"></div>
                <div class="hr-line_item hr_three"></div>
                <div class="hr-line_item hr_four"></div>
                <div class="hr-line_item hr_give"></div>
            </div>
            <div class="primary_bg p-5">
                <div class="container pt-lg-5 pt-md-5 pb-lg-5 pb-md-5">
                    <div class="row gx-5 gy-4">
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="video_text">
                                <?php if($teaser_content) { ?><h3><?php echo $teaser_content; ?></h3> <?php } ?>
                                <?php if($teaser_video) { ?><a class="btn btn-tertiary mt-4" href="<?php echo $teaser_video['url']; ?>"><?php echo $teaser_video['title']; ?></a><?php } ?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="teaservideo-item full_img h-100">
                            <?php if($right_teaser_video_url): ?>
                                <video width="100%" poster="<?php echo $right_teaser_video_image; ?>" controls>
                                    <source src="<?php echo $right_teaser_video_url; ?>" type="video/mp4">
                                    </source>
                                </video>
                            <?php endif; ?>
							<?php if ($text_above_register_button) : ?>
                                <div class="text-center my-4"><p><?php echo $text_above_register_button; ?><p>
                            <?php endif; ?>
                            <?php if ($register_button_link) { ?>
                                <!-- <a class="btn btn-primary" href="<?php echo $register_button_link['url']; ?>"><?php echo $register_button_link['title']; ?></a> -->
                                <a href="<?php echo $register_button_link['url']; ?>" class="btn btn-primary btn-outline"><?php echo $register_button_link['title']; ?></a>
                            <?php } ?>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--TeaserVideo-->

    <section class="EventTopic mt-5 mb-md-5 pt-xl-5 pb-xl-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-4 col-12">
                    <div class="section_header">
                        <?php if ($event_topic_title){ ?><h2><?php echo $event_topic_title; ?></h2><?php } ?>
                        <?php if ($event_topic_content){ ?><p><?php echo $event_topic_content; ?></p><?php } ?>
                        <div class="video_vector">
                         <video width="100%" autoplay muted loop poster="<?php echo esc_url(get_template_directory_uri() . "/images/videovector.png"); ?>">
                            <source src="<?php echo esc_url(get_template_directory_uri() . "/images/Molecule-animation.mp4"); ?>" type="video/mp4">
                            </source>
                        </video>   
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-12">
                    <div class="easy-hory_tab">
                    <?php if ($event_topic_tab){ ?>
                        <!--Horizontal Tab-->
                        <div id="parentHorizontalTab">
                            <ul class="resp-tabs-list hor_1">
                            <?php foreach($event_topic_tab as $tab): ?>
                                    <li><?php echo $tab['event_topic_tab_title']; ?></li>
                            <?php endforeach; ?>
                            </ul>
                        <div class="resp-tabs-container hor_1">
                            <?php foreach($event_topic_tab as $tab): ?>
                                <div class="easyTab_item">
                                    <div class="time_schedule">
                                        <?php if($tab['day_detail']): ?>
                                            <h5><?php echo $tab['day_detail']; ?></h5>
                                        <?php endif; ?>
                                        <?php $tab_content = $tab['event_topic_tab_content']; ?>
                                        <?php if($tab_content): ?>
                                        <?php foreach($tab_content as $tabcontent): ?>
                                        <?php
                                            $time = $tabcontent['time_detail'];
                                            $time_detail = $tabcontent['event_time_detail'];
                                        ?>
                                            <div class="time_details">
                                            <?php if($time): ?>
                                                <h6><?php echo $time; ?></h6>
                                            <?php endif; ?>
                                            <?php if($time_detail): ?>
                                                <p><?php echo $time_detail; ?> </p>
                                            <?php endif; ?>
                                            </div>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div><!--resp-tabs-container-->
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section><!--EventTopic-->

    <!--section class="TeaserVideo">
        <div class="container">
            <div class="hr_big-line">
                <div class="hr-line_item hr_one"></div>
                <div class="hr-line_item hr_two"></div>
                <div class="hr-line_item hr_three"></div>
                <div class="hr-line_item hr_four"></div>
                <div class="hr-line_item hr_give"></div>
            </div>
            <div class="primary_bg p-5">
                <div class="container maxwidth pt-lg-5 pt-md-5 pb-lg-5 pb-md-5">
                    <div class="row align-items-center gx-5 gy-4">
                    <div class="col-lg-6 col-md-12 col-12">
                        <?php if($save_date_image) { ?>
                            <div class="teaservideo-item">
                                <img alt="AI CERTs" src="<?php echo $save_date_image; ?>">
                            </div>
                            <?php } ?>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="video_text">
                                <div class="time_event">
                                    <h4><span class="icon"><img alt="AI CERTs" src="<?php echo esc_url(get_template_directory_uri() . "/images/calendar3.svg"); ?>"></span> <?php echo $event_date; ?></h4>
                                    <h4><span class="icon"><img alt="AI CERTs" src="<?php echo esc_url(get_template_directory_uri() . "/images/geo-alt.svg"); ?>"></span> <?php echo $event_location; ?></h4>
                                </div>    
                                <?php if($save_date_heading) { ?><h2><?php echo $save_date_heading; ?></h2><?php } ?>
                                <a class="btn btn-tertiary mt-4" href="#">Register Now</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section><!--TeaserVideo-->

    <!-- <section class="cert-spec-section values EventsTopi">
            <div class="container max-medium-container">
            <?php if($summit_topic_heading) { ?><h2><?php echo $summit_topic_heading; ?></h2><?php } ?>
            </div>
            <?php if($summit_content) { ?>
          <div class="container  pt-4">            
            <div class="row gy-4">
                <?php foreach($summit_content as $sum_con): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="card">                     
                        <img alt="AI CERTs" src="<?php echo $sum_con['summit_icon']; ?>">                                       
                        <h3><?php echo $sum_con['summit_title']; ?></h3>                     
                    </div>            
                </div>
                <?php endforeach; ?>
            </div>           
         </div> 
         <?php } ?>   
    </section> -->

    <section class="OurSpeakers mb-lg-5">
        <div class="container max-medium-container position-relative">
            <div class="video_vector">
                <video width="100%" autoplay muted loop poster="<?php echo esc_url(get_template_directory_uri() . "/images/videovector.png"); ?>">
                <source src="<?php echo esc_url(get_template_directory_uri() . "/images/Molecule-animation.mp4"); ?>" type="video/mp4">
                </source>
                </video>   
            </div>
            <?php if($event_speaker_heading) { ?><h2 class="mb-5"><?php echo $event_speaker_heading; ?></h2><?php } ?>
            <?php if($event_speakers) { ?>
            <div class="row g-5">
                <?php foreach($event_speakers as $event_speaker): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="Speakers">
                        <div class="Speakers_img mb-4">
                         <img src="<?php echo $event_speaker['speakers_photo']; ?>" alt="AI CERTs" class="w-100">
                        </div>
                        <h3><?php echo $event_speaker['speakers_name']; ?></h3>
                        <p><?php echo $event_speaker['speakers_designation']; ?></p>
                        <div class="social-link">
                            <a href="<?php echo $event_speaker['linkedin_account']; ?>" rel="nofollow" target="_blank"><img alt="Social" src="<?php echo esc_url(get_template_directory_uri() . "/images/linkedin.svg"); ?>"></a>
                            <a href="<?php echo $event_speaker['twitter_account']; ?>" rel="nofollow" target="_blank"><img alt="Social" src="<?php echo esc_url(get_template_directory_uri() . "/images/twitter.svg"); ?>"></a>
                        </div>
                    </div>
                </div><!--#Speakers-->
                <?php endforeach; ?>
            </div>
            <?php } ?>
        </div>
    </section><!--#OurSpeakers-->

    <section class="TeaserVideo mt-5 pt-5 pb-5 mb-5 d-none">
        <div class="container">
            <div class="hr_big-line">
                <div class="hr-line_item hr_one"></div>
                <div class="hr-line_item hr_two"></div>
                <div class="hr-line_item hr_three"></div>
                <div class="hr-line_item hr_four"></div>
                <div class="hr-line_item hr_give"></div>
            </div>
            <div class="primary_bg p-5">
                <div class="container maxwidth pt-lg-5 pt-md-5 pb-lg-5 pb-md-5">
                    <div class="section_header">
                        <?php if($who_attend_heading) { ?><h2><?php echo $who_attend_heading; ?></h2><?php } ?>
                    </div>
                    <div class="row align-items-center gx-5 gy-4">
                        <?php if($who_attend_points) { ?>
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="video_text">
                               <ul class="Attend_list">
                               <?php foreach($who_attend_points as $attend_point): ?>
                                <li>
                                    <img alt="AI CERTs" src="<?php echo esc_url(get_template_directory_uri() . "/images/roundtik.svg"); ?>">
                                    <?php echo $attend_point['points']; ?>
                                </li>
                                <?php endforeach; ?>
                               </ul>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="col-lg-6 col-md-12 col-12">
                            <?php if($who_attend_image) { ?>
                            <div class="teaservideo-item">
                                <img alt="AI CERTs" src="<?php echo $who_attend_image; ?>">
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--TeaserVideo-->

    <!--section class="TextOverlayImage mb-5">
        <div class="Text_overlay">
            <?php if($early_bird_heading) { ?><h3 class="mb-0"><?php echo $early_bird_heading; ?></h3><?php } ?>
            <?php if($early_bird_title) { ?><h2><?php echo $early_bird_title; ?></h2><?php } ?>
            <?php if($early_bird_subtitle) { ?><h3><?php echo $early_bird_subtitle; ?></h3><?php } ?>
            <a href="#" class="btn  btn-primary mt-4">Register Now</a>
        </div>
    </section><!--TextOverlayImage-->

    <section class="RichTextContent mt-5 mb-5 pt-5 pb-5">
        <div class="container max-medium-container position-relative">
            <div class="video_vector">
                <video width="100%" autoplay muted loop poster="<?php echo esc_url(get_template_directory_uri() . "/images/videovector.png"); ?>">
                <source src="<?php echo esc_url(get_template_directory_uri() . "/images/Molecule-animation.mp4"); ?>" type="video/mp4">
                </source>
                </video>   
            </div>
            <div class="section_heading text-center position-relative">
                <h6 class="brand-text">AI CERTs™</h6>
                <?php if($aicert_invite_text) { ?><h2><?php echo $aicert_invite_text; ?></h2><?php } ?>
                <!--a href="#" class="btn  btn-primary mt-4">Register Now</a-->
            </div>
        </div>
    </section><!--RichTextContent-->

    <section class="OurPartner mb-5">
        <div class="container max-medium-container">
            <?php if($event_partner) { ?>
            <div class="owl-carousel owl-theme OurPartner_slider">
                <?php foreach($event_partner as $event_partners): ?> 
                <div class="item">
                    <div class="OurPartner_card">
                        <div class="OurPartner_round">
                            <img alt="AI CERTs" src="<?php echo $event_partners['event_partner_logo']; ?>">
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php } ?>
        </div>
    </section><!--OurPartner-->

    <section class="TeaserVideo pt-5 pb-5 mb-5">
        <div class="container">
            <div class="hr_big-line">
                <div class="hr-line_item hr_one"></div>
                <div class="hr-line_item hr_two"></div>
                <div class="hr-line_item hr_three"></div>
                <div class="hr-line_item hr_four"></div>
                <div class="hr-line_item hr_give"></div>
            </div>
            <div class="primary_bg p-5">
                <div class="container maxwidth pt-lg-5 pt-md-5 pb-lg-5 pb-md-5">
                    <div class="section_header">
                        <?php if($our_event_updates_title) { ?><h3 class="mb-0"><?php echo $our_event_updates_title; ?></h3><?php } ?>
                        <?php if($our_event_updates_heading) { ?><h2><?php echo $our_event_updates_heading; ?></h2><?php } ?>
                        <?php if($our_event_update_subcontent) { ?><p><?php echo $our_event_update_subcontent; ?></p><?php } ?>
                    </div>
                    <div class="row gy-4 pt-4">
                    <?php if($our_event_photos) { ?>
                        <?php foreach($our_event_photos as $event_photos): ?> 
                        <div class="col-lg-3 col-md-16 col-6">
                            <div class="flow_event on-hover_zoom">
                                <img alt="AI CERTs" src="<?php echo $event_photos['our_event_images']; ?>">
                            </div>
                        </div> 
                        <?php endforeach; ?>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section><!--FollowOur -->

</div>

<script>
    (function () {
  const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  //I'm adding this section so I don't have to keep updating this pen every year :-)
  //remove this if you don't need it
  let today = new Date(),
      dd = String(today.getDate()).padStart(2, "0"),
      mm = String(today.getMonth() + 1).padStart(2, "0"),
      yyyy = today.getFullYear(),
      nextYear = yyyy + 1,
      //dayMonth = "07/23/",
      dayMonth = "<?php echo $month_number."/".$strdat."/"; ?>",
      birthday = dayMonth + yyyy;
      //startdate = "07/23"
  console.log(dayMonth);
  today = mm + "/" + dd + "/" + yyyy;
  if (today > birthday) {
    birthday = dayMonth + nextYear;
  }
  //end
  
  const countDown = new Date(birthday).getTime(),
      x = setInterval(function() {    

        const now = new Date().getTime(),
              distance = countDown - now;

        document.getElementById("days").innerText = Math.floor(distance / (day)),
          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached
        if (distance < 0) {
          document.getElementById("headline").innerText = "It's AICerts Event";
          document.getElementById("countdown").style.display = "none";
          document.getElementById("content").style.display = "block";
          clearInterval(x);
        }
        //seconds
      }, 0)
  }());
</script>

<script>
    $(document).ready(function() {
        //Horizontal Tab
        $('#parentHorizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });

        //Vertical Tab
        $('#parentVerticalTab').easyResponsiveTabs({
            type: 'vertical', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo2');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });
</script>

<!--Footer-->
<?php
// get_sidebar();
get_footer(); 
?> 
<?php /* Template Name: Roadmap V2
 */
get_header();

$roadmap_banner_heading = get_field('roadmap_banner_heading');
$roadmap_banner_subheading = get_field('roadmap_banner_subheading');
$roadmap_banner_button = get_field('roadmap_banner_button');
$upcoming_certifications_heading = get_field('upcoming_certifications_heading');
$certi_card = get_field('certi_card');
$latest_certifications_heading = get_field('latest_certifications_heading');
$latest_certifications_card = get_field('latest_certifications_card');
$completed_certifications_heading = get_field('completed_certifications_heading');
$completed_certifications_card = get_field('completed_certifications_card');
?>
<!--Header End-->

<div class="middle-section">
    <section class="banner-video-section pv1-banner roadmap-banner imgbanner">
        <div class="container maxwidth">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-banner-cnt">
                        <?php if($roadmap_banner_heading): ?>
                            <h1 class="mb-4"><?php echo $roadmap_banner_heading; ?></h1>
                        <?php endif; ?>
                        <?php if($roadmap_banner_subheading): ?>
                            <!--p><?php echo $roadmap_banner_subheading; ?></p-->
                        <?php endif; ?>
                        <?php if($roadmap_banner_button): ?>
                            <a href="<?php echo $roadmap_banner_button['url']; ?>" class="btn btn-primary me-3" download><?php echo $roadmap_banner_button['title']; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- HeroBanner End -->
    
    <?php if($upcoming_certifications_heading): ?>
    <section class="UpcomingCert mb-5 pb-lg-3">
        <div class="container">
            <div class="UCCard RoardCard">
                <div class="round-pointstop"></div>
                <div class="text-center ps-5 ps-sm-0">
                    <h2 class="primary_color mb4 mb-lg-5"><?php echo $upcoming_certifications_heading; ?></h2>
                </div>
                <?php if($certi_card): ?>
                    <?php foreach($certi_card as $card):
                        $cardcerti = $card['select_certificate'];
                    ?>
                        <div class="row g-3 g-md-4 mb-4 mb-md-5">
                            <div class="col-2 col-md-1">
                                <div class="Qcard d-flex align-items-center justify-content-center">
                                    <h3 class="mb-0 fw-semibold"><?php echo $card['card_number']; ?></h3>
                                </div>
                            </div>
                            <div class="col-10 col-md-11">
                                <div class="rCertiWrapper">
                                    <div class="rCertiCard">
                                        <?php foreach($cardcerti as $certi): 
                                            $course_url = get_the_permalink($certi);
                                            $title = get_the_title($certi);
                                        ?>
                                            <a href="<?php echo $course_url; ?>"><?php echo $title; ?></a>
                                        <?php endforeach; ?>
                                    </div>
                                        <button class="toggleBtn">Tap to Expand</button>
                                </div>  
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section><!-- UpcomingCert End -->
    <?php endif; ?>

    <?php if($latest_certifications_heading): ?>
    <section class="LatestCert mb-5 pb-lg-3">
        <div class="container">
            <div class="LCCard RoardCard">
                <div class="text-center ps-5 ps-sm-0">
                    <h2 class="primary_color mb4 mb-lg-5"><?php echo $latest_certifications_heading; ?></h2>
                </div>
                <?php if($latest_certifications_card): ?>
                    <?php foreach($latest_certifications_card as $card1):
                        $cardcerti1 = $card1['select_latest_certifications'];
                    ?>
                    <div class="row g-3 g-md-4 mb-4 mb-md-5">
                        <div class="col-2 col-md-1">
                            <div class="Qcard d-flex align-items-center justify-content-center">
                                <h3 class="mb-0 fw-semibold"><?php echo $card1['latest_certifications_card_number']; ?></h3>
                            </div>
                        </div>
                        <div class="col-10 col-md-11">
                            <div class="rCertiWrapper">
                                <div class="rCertiCard">
                                    <?php foreach($cardcerti1 as $certi1): 
                                        $course_url1 = get_the_permalink($certi1);
                                        $title1 = get_the_title($certi1);
                                    ?>
                                        <a href="<?php echo $course_url1; ?>"><?php echo $title1; ?></a>
                                    <?php endforeach; ?>
                                </div>
                                <button class="toggleBtn">Tap to Expand</button>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section><!-- LatestCert End -->
    <?php endif; ?>

    <?php if($completed_certifications_heading): ?>
    <section class="CompletedCert mb-5 pb-lg-3">
        <div class="container">
            <div class="CCCard RoardCard">
                <div class="round-pointsbottom"></div>
                <div class="text-center ps-5 ps-sm-0">
                    <h2 class="primary_color mb4 mb-lg-5"><?php echo $completed_certifications_heading; ?></h2>
                </div>
                <?php if($completed_certifications_card): ?>
                    <?php foreach($completed_certifications_card as $card2):
                        $cardcerti2 = $card2['select_completed_certifications'];
                    ?>
                    <div class="row g-3 g-md-4 mb-4 mb-md-5">
                        <div class="col-2 col-md-1">
                            <div class="Qcard d-flex align-items-center justify-content-center">
                                <h3 class="mb-0 fw-semibold"><?php echo $card2['completed_certifications_card_number']; ?></h3>
                            </div>
                        </div>
                        <div class="col-10 col-md-11">
                            <div class="rCertiWrapper">
                                <div class="rCertiCard">
                                    <?php foreach($cardcerti2 as $certi2): 
                                        $course_url2 = get_the_permalink($certi2);
                                        $title2 = get_the_title($certi2);
                                    ?>
                                        <a href="<?php echo $course_url2; ?>"><?php echo $title2; ?></a>
                                    <?php endforeach; ?>
                                </div>
                                <button class="toggleBtn">Tap to Expand</button>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section><!-- CompletedCert End -->
    <?php endif; ?>

</div>

<script>
  function setInitialHeights() {
    const allCards = document.querySelectorAll('.rCertiCard');
    if (window.innerWidth <= 991) {
      allCards.forEach(card => {
        if (!card.classList.contains('expanded')) {
          card.style.height = '120px';
        }
      });
    } else {
      allCards.forEach(card => {
        card.style.height = 'auto';
      });
    }
  }

  document.addEventListener('DOMContentLoaded', () => {
    const toggleButtons = document.querySelectorAll('.toggleBtn');

    toggleButtons.forEach(button => {
      const card = button.previousElementSibling;

      button.addEventListener('click', () => {
        const allCards = document.querySelectorAll('.rCertiCard');
        const allButtons = document.querySelectorAll('.toggleBtn');

        if (!card.classList.contains('expanded')) {
          // Collapse all other cards
          allCards.forEach((c, i) => {
            c.classList.remove('expanded');
            if (window.innerWidth <= 991) {
              c.style.height = '120px';
              allButtons[i].innerText = 'Tap to Expand';
            }
          });

          // Expand clicked card
          card.classList.add('expanded');
          card.style.height = card.scrollHeight + 'px';
          button.innerText = 'Tap to Collapse';
        } else {
          // Collapse if already open
          card.classList.remove('expanded');
          card.style.height = '120px';
          button.innerText = 'Tap to Expand';
        }
      });
    });

    setInitialHeights();
  });

  window.addEventListener('resize', setInitialHeights);
</script>


<!--Footer-->
<?php
// get_sidebar();
get_footer(); 
?>

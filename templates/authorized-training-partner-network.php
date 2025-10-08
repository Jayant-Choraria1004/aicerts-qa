<?php 
/* 
Template Name: Authorized Training Partner Network
*/ 

get_header();
$authorized_training_partners_heading = get_field('our_global_training_partners_heading');
$authorized_training_partners_content = get_field('our_global_training_partners_content');
$authorized_training_partners_thumb = get_field('our_global_training_partners_image');
$authorized_training_partners_badge = get_field('our_global_training_partners_badge');
$authorized_training_partnersbottom_content = get_field('our_global_training_partners_bottom_content');
$interested_in_becoming_a_partner_title = get_field('interested_in_becoming_a_partner_title');
$interested_in_becoming_a_partner_text = get_field('interested_in_becoming_a_partner_text');
$range_of_benefits_title = get_field('range_of_benefits_title');
$range_of_benefits_list = get_field('range_of_benefits_list');
$find_our_partners = get_field('find_our_partners');
$find_our_partners_url = $find_our_partners['url'];
$find_our_partners_btn_name = $find_our_partners['title'];
$become_a_partner_now = get_field('become_a_partner_now');
$become_a_partner_now_url = $become_a_partner_now['url'];
$become_a_partner_now_btn_name = $become_a_partner_now['title'];
$autho_faq = get_field('autho_faq');
?> 
<!--Header End-->
<!--Header End-->
<div class="middle-section">
    <!-- InstanceBeginEditable name="MainContent" -->
    <div class="inner-page certification-page">
        <section class="cert-spec-section listing-pages mb-2 pb-lg-3">
            <div class="container maxwidth">
				<div class="text-center mb-3">
                <h1 class="mb-3"><?php echo get_the_title(); ?></h1>
				<a href="<?php echo $find_our_partners_url; ?>" class="btn btn-primary btn-lg"><?php echo $find_our_partners_btn_name; ?></a>
				</div>
                <div class="row g-xl-5">
                    <div class="col-md-6 pe-xl-5 mb-4">
                        <div class="position-relative">
                            <img src="<?php echo $authorized_training_partners_thumb; ?>" alt="" class="w-100" />
                            <img src="<?php echo $authorized_training_partners_badge; ?>" alt="" class="partner-network-badge" />
                        </div>
                    </div>	
                    <div class="col-md-6">
                        <div class="p-md-0" data-aos="fade-down" data-aos-duration="1000">
                            <h2><?php echo $authorized_training_partners_heading; ?></h2>
                            <p class="pe-xl-5"><?php echo $authorized_training_partners_content; ?></p>
                        </div>
                    </div>
                </div>	
            </div>
        </section>
        <section class="cmn-section pre-section pt-0">
            <div class="container maxwidth">
                <div class="row">
                    <div class="col-lg-12">
						<div class="">
                        <p><?php echo $authorized_training_partnersbottom_content; ?></p>
                        <h2><?php echo $interested_in_becoming_a_partner_title; ?></h2>
                        <p><?php echo $interested_in_becoming_a_partner_text; ?></p>
                        <h2><?php echo $range_of_benefits_title; ?></h2>
                        <?php echo $range_of_benefits_list; ?>
                            <a href="<?php echo $become_a_partner_now_url; ?>" class="btn btn-primary btn-lg mb-0"><?php echo $become_a_partner_now_btn_name; ?></a>
						</div>
                    </div>	
                </div>	
            </div>
        </section>
        <?php if($autho_faq): ?>
        <section class="h2_faq mb-5  pt-0 pb-lg-5" id="tabFAQs">
            <div class="container common-cnt max-medium-container">
                <div class="faq_wrap home_version2">
                    <div class="col-lg-12">
                        <h2 class="mb-4 mb-lg-5 text-center">Frequently Asked Questions</h2>
                        <div class="accordion" id="regularAccordionRobots">
                        <?php $i=1; foreach($autho_faq as $faq): ?>
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item<?php echo $i; ?>" aria-expanded="false">
                                <?php echo $faq['faq_question'] ?> 
                                </button>
                                <div id="item<?php echo $i; ?>" class="accordion-collapse collapse" style="">
                                    <div class="accordion-body">
                                    <p><?php echo $faq['faq_answer'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php  $i++; endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
    </div>
</div>
<?php
    // get_sidebar();
    get_footer();
?>
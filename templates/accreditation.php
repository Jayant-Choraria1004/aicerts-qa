<?php
/* Template Name: Accreditation  */
?>

<?php
get_header();
?>

<section class="banner-video-section imgbanner" style="background: url('<?php the_field('banner_background'); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="video-banner-cnt">
                    <h1><?php the_field('banner_title'); ?></h1>
                    <p><?php the_field('banner-paragraph'); ?></p>
                    <a href="<?php the_field('cta_button'); ?>" class="btn btn-primary">
                                <?php $field = get_field_object('cta_button'); ?>
                                <span><?php echo $field['label']; ?></span>
                            </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="accr-ansi-compliance cmn-section">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6 col-md-12 responsive">
                <div class="accr-second-section-image">
                    <?php
                    $image = get_field('ansi_image');
                    if ($image): ?>
                        <img src="<?php echo esc_url($image); ?>" ; ?>
                    <?php endif; ?>

                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="trademakr-text pt-0">
                    <!--small>TRADEMARKS</small-->
                    <h2 class="accr-ansti-title mt-50px"><?php the_field('ansi_title'); ?></h2>
                    <p class="accr-paragraph"><?php the_field('ansi_paragraph'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="accr-iso-iec cmn-section">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6 col-md-12 ">
                <div class="trademakr-text">
                    <p class="accr-isoiec-title"><?php the_field('isoiec_small_title'); ?></p>
                    <h2><?php the_field('iso-iec_title'); ?></h2>
                    <p class=""><?php the_field('iso-iec_paragraph'); ?></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 responsive">
                <div class="accr-second-section-image ">
                    <?php
                    $image = get_field('iso-iec-image');
                    if ($image): ?>
                        <img src="<?php echo esc_url($image); ?>" ; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="accr-ansi-compliance-bg cmn-section">
    <div class="container">
        <div class="row gx-5">
            <h2 class="text-center mb-4"><?php the_field('commitment_title'); ?></h2>
            <div class="col-lg-4 col-md-12 mb-5 mb-lg-0">
                <div class="accr-commitment-box position-relative">
                    <?php
                    $image = get_field('step-1_box');
                    if ($image): ?>
                        <img src="<?php echo esc_url($image); ?>" ; ?>
                    <?php endif; ?>
                    <p class="accr-commitment-paragraph "><?php the_field('step-1_paragraph'); ?></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Number.png" alt="ISOIEC"
                        class="accr-step" />
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-5 mb-lg-0">
                <div class="accr-commitment-box position-relative"> <?php
                $image = get_field('step-2_box');
                if ($image): ?>
                        <img src="<?php echo esc_url($image); ?>" ; ?>
                    <?php endif; ?>
                    <p class="accr-commitment-paragraph "><?php the_field('step-2_paragraph'); ?></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Number-2.png" alt="ISOIEC"
                        class="accr-step" />
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-5 mb-lg-0">
                <div class="accr-commitment-box position-relative">
                    <?php
                    $image = get_field('step-3_box');
                    if ($image): ?>
                        <img src="<?php echo esc_url($image); ?>" ; ?>
                    <?php endif; ?>
                    <p class="accr-commitment-paragraph "><?php the_field('step-3_paragraph'); ?></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Number-3.png" alt="ISOIEC"
                        class="accr-step" />
                </div>
            </div>
        </div>
    </div>
</section>


<section class="accr-iso-iec  cmn-section">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6 col-md-12">
                <div class="trademakr-text">

                    <h2 class="accr-ansti-title"><?php the_field('ansi_matter_title'); ?></h2>

                    <ul class="accr-matter mb-0">
                        <li class="d-flex accr-gap">
                            <?php if (have_rows('ansi_matter_list')): ?>
                                <div class="commitments-wrapper">
                                    <?php while (have_rows('ansi_matter_list')):
                                        the_row();
                                        // Get subfield values
                                        $image = get_sub_field('icon');
                                        $paragraph = get_sub_field('list_title');
                                        ?>
                                        <div class="commitment-item icon-alignment accr-matter-border-bottom ">
                                            <?php if ($image && isset($image['url'])): ?>
                                                <img src="<?php echo esc_url($image['url']); ?>"
                                                    alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                            <?php if ($paragraph): ?>
                                                <p class="mb-0"><?php echo esc_html($paragraph); ?></p>
                                            <?php endif; ?>
                                           
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php else: ?>
                                <p>No commitments found.</p>
                            <?php endif; ?>

                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 responsive pb-40px">
                <div class="accr-second-section-image img-res">
                    <?php
                    $image = get_field('ansi_matter_image');
                    if ($image): ?>
                        <img src="<?php echo esc_url($image); ?>" ; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="accr-ansi-standard pb-100px accr-pb-sm d-none">
    <div class="container">
        <div class="row gx-5">
            <h2 class="accr-commitment-title"><?php the_field('acc_standard_title'); ?></h2>

            <div class="col-lg-4 col-md-12 mb-5 mb-lg-0">
                <div class="accr-card position-relative">
                    <p class="accreditation-paragraph"><?php the_field('acc_standard_para_1'); ?></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Trust Badge.png" alt="ISOIEC"
                        class="accr-card-setup" />

                </div>
            </div>

            <div class="col-lg-4 col-md-12 mb-5 mb-lg-0">
                <div class="accr-card position-relative">
                    <p class="accreditation-paragraph"><?php the_field('acc_standard_para_2'); ?></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Trust Badge.png" alt="ISOIEC"
                        class="accr-card-setup" />
                </div>
            </div>

            <div class="col-lg-4 col-md-12 mb-5 mb-lg-0">
                <div class="accr-card position-relative">
                    <p class="accreditation-paragraph"><?php the_field('acc_standard_para_3'); ?></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Trust Badge.png" alt="ISOIEC"
                        class="accr-card-setup" />
                </div>
            </div>
        </div>
    </div>
</section>


<section class="h2_happy_to_help_accr">
    <div class="container">
        <div class="happy_to_help_wrap_accr">
            <div class="row gx-5">
                <div class="col-xl-6 col-lg-12">
                    <div class="happy_to_help_content_accr">
                        <h2><?php the_field('get_certified_title'); ?></h2>
                        <p><?php the_field('get_certified_paragraph'); ?></p>
                        <div class="d-flex inline-btn">
                            <a href="<?php the_field('explore_certificate'); ?>" class="btn btn-primary me-3">
                                <?php $field = get_field_object('explore_certificate'); ?>
                                <?php echo $field['label']; ?>
                            </a>

                            <a href="<?php the_field('contact_us_btn'); ?>" class="btn btn-outline-primary">
                                <?php $field = get_field_object('contact_us_btn'); ?>
                                <?php echo $field['label']; ?>
                            </a>
                         
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 position-relative">
                    <div class="">
                         <?php
                    $image = get_field('get_certified_image');
                    if ($image): ?>
                        <img src="<?php echo esc_url($image); ?>" class="accr_event_photo img-none" ; ?>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>
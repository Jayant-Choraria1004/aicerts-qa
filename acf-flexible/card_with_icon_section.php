<?php 

$section_title = get_sub_field('section_title');
$card_items = get_sub_field('card_items');

              

if($section_title ||  $card_items) :
?>
<section class="HowItWorks mb-5 pb-lg-3">
    <div class="container">
        <div class="section-header text-center mb-lg-5 mb-4">
            <?php if($section_title): ?>
            <h2><?php echo $section_title; ?></h2>
            <?php endif; ?>
        </div>

        <?php if($card_items): ?>
        <div class="row g-4 justify-content-lg-between">
            <?php
                while(have_rows('card_items')): the_row();
                    $icon = get_sub_field('icon_image');
                    $title = get_sub_field('card_title');
                    $description = get_sub_field('card_description');
            ?>
                    
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="HowIcons text-center">
                                <?php if($icon): ?>
                                <div class="HIcons mb-4">
                                    <img alt="Icon" src="<?php echo esc_url($icon['url']); ?>"/>
                                </div>
                                <?php endif; ?>
                                <?php if($title): ?>
                                    <h4 class="primary_color"><?php echo $title; ?></h4>
                                <?php endif; ?>
                                <?php if($description): ?>
                                    <p><?php echo $description; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</section><!-- Step3 End -->
<?php endif; ?>
<?php
    $cta_button_text = get_field('cta_button_text', 'options');
    $cta_link = get_field('cta_link', 'option');
?>

<?php if (!empty($cta_button_text)) { ?>
    <div class="topright-btn">
        <?php echo do_shortcode('[themeswitch]'); ?>
        <?php /* <a href="<?php echo $cta_link; ?>" class="btn btn-primary"><?php echo $cta_button_text; ?></a> */ ?>
    </div>
<?php } ?>

<?php
$download_file = get_field($download_field_name);
$post_id = get_the_ID();
$thumb = get_the_post_thumbnail_url($post_id, 'full');
if (empty($thumb)) {
    $thumb = get_template_directory_uri() . "/images/blog-img.jpg";
}
?>
<div class="col-lg-4 col-md-6 listing-box">
    <div class="listing-tags">
        <?php
        $tags = get_the_terms($post_id, $post_type_taxname);
        $term_names = array();
        if (!empty($tags)) {
            foreach ($tags as $term) {
                $term_names[] = $term->name;
            }
        }
        if (is_array($tags)) {
            echo implode(", ", $term_names);
        }
        ?>
    </div>
    <img src="<?php echo esc_url($thumb); ?>" class="w-100 mb-4" />
    <a href="<?php the_permalink(); ?>"><h4><?php echo get_the_title(); ?></h4></a>
    <a href="<?php the_permalink(); ?>" class="btn btn-primary">View</a>
    <!-- <p><?php echo get_the_excerpt(); ?></p> -->
    <!-- <a href="#" class="btn btn-primary download-<?php echo $post_type ?>" data-file="<?php echo $download_file; ?>"  data-bs-toggle="modal" data-bs-target="#download-publication">Download <?php echo ucfirst($post_type); ?></a> -->
</div>
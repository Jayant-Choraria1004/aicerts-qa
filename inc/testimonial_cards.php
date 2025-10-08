<?php
function get_testimonials_from_term($term = null)
{
$post_ids = array();
// Set up the query arguments to get only post IDs
$args = array(
    'post_type' => 'courses', // Change this if you're querying a custom post type
    'posts_per_page' => -1, // Retrieve all posts with the tag
    'fields' => 'ids',
    'tax_query' => array(
        array(
            'taxonomy' => 'category', // Replace with your taxonomy
            'field'    => 'term_id',  // We are filtering by term_id
            'terms'    => $term->term_id,        // Replace with the term ID you want to filter by
        ),
    ),
);

// Run the query
$query = new WP_Query($args);

// Create an array of post IDs
$post_ids = $query->posts;

wp_reset_postdata();


// Query testimonials custom post type
$args = array(
    'post_type'      => 'customer-testimonial',
    'posts_per_page' => -1,
    'meta_query'     => array(
        array(
            'key'     => 'course_taken_by_student',  // ACF field key linking testimonial to a course
            'value'   => $post_ids,           // The course IDs to filter by
            'compare' => 'IN',                  // Use IN to match any of the course IDs
        ),
    ),
    'tax_query'      => array(
        array(
            'taxonomy' => 'testimonial-category',    // Custom taxonomy
            'field'    => 'slug',                    // Search by slug
            'terms'    => 'learner-testimonials',     // Term to match
        ),
    ),
);

$testimonial_query = new WP_Query($args);

// Check if the query has posts
if ($testimonial_query->have_posts()) :
    ?>
    <div class="owl-carousel owl-theme tmv2-tm-small">
        <?php
        while ($testimonial_query->have_posts()) : $testimonial_query->the_post();
            // Get the necessary fields from ACF
            $card_paragraph = get_the_content();
            $rating = get_field('user_reivew_rating'); // Assuming you have a rating field
            $user_name = get_the_title(); // Assuming you have a name field
            $user_role = get_field('user_role'); // Assuming you have a role field (like student)
            $user_image = get_the_post_thumbnail_url(); // Assuming you have an image field
            $stars_filled = intval($rating); // Assuming rating is a number
            $stars_empty = 5 - $stars_filled;
            ?>
            <div class="card">
                <p><?php echo esc_html($card_paragraph); ?></p>
                <div class="tmv2-starts">
                    <?php 
                    // Display filled stars based on the rating
                    for ($i = 0; $i < $stars_filled; $i++) : ?>
                        <span><img class="" alt="" src="<?php echo esc_url(get_template_directory_uri() . "/images/star-filled.svg"); ?>"></span>
                    <?php endfor; ?>

                    <?php 
                    // Display empty stars
                    for ($i = 0; $i < $stars_empty; $i++) : ?>
                        <span><img class="" alt="" src="<?php echo esc_url(get_template_directory_uri() . "/images/star-blank.svg"); ?>"></span>
                    <?php endfor; ?>
                </div>
                <div class="tmv2-small-user">
                    <?php if ($user_image) : ?>
                        <img class="" alt="" src="<?php echo esc_url($user_image); ?>">
                    <?php else : ?>
                        <img class="" alt="" src="<?php echo esc_url(get_template_directory_uri() . "/images/default-user.jpg"); ?>"> <!-- Fallback image -->
                    <?php endif; ?>
                    <h4><?php echo esc_html($user_name); ?> <span><?php echo esc_html($user_role); ?></span></h4>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    <?php
    wp_reset_postdata();
else :
    echo '<p>No testimonials found.</p>';
endif;
}
?>

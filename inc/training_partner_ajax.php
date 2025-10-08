<?php 
function my_theme_enqueue_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('my-ajax-pagination', get_template_directory_uri() . '/js/ajax-pagination.js', array('jquery'), null, true);

    wp_localize_script('my-ajax-pagination', 'ajaxpagination', array(
        'ajaxurl' => admin_url('admin-ajax.php')
    ));
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');


function ajax_pagination() {
    $paged = $_POST['page']; // Get page number from AJAX request

    $args = array(
        'post_type' => 'partner',
        'posts_per_page' => 5,
        'category' => 'training-partner',
        'paged' => $paged
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) {
        while ($query->have_posts()) : $query->the_post();  
            ?>
            <div class="table-row">
            <div class="row-item subheading"> <h6>Partner Name</h6> <?php echo get_the_title(); ?> </div>
            <div class="row-item"> 
                <h6>Partner Type</h6> 
                <div class="row_innter-item"> 
                    <p>Authorized Training Partner</p>
                </div> 
            </div>
            <div class="row-item"> 
                <h6>Location</h6> 
                <div class="row_innter-item"> 
                    <p><?php 
                        $locations = get_field('locations');
                        if(!empty($locations))
                        {
                            echo implode(", ", $locations);
                        }
                        else {
                            echo "";
                        }
                    ?></p>
                </div> 
            </div>
            <div class="row-item"> 
                <div class="row_innter-item"> 
                <button type="search" class="btn btn-primary">Find a Training Provider</button>
                </div> 
            </div>
        </div>
        <?php
        endwhile;
        wp_reset_postdata();
    }
    die();
}
add_action('wp_ajax_nopriv_ajax_pagination', 'ajax_pagination');
add_action('wp_ajax_ajax_pagination', 'ajax_pagination');



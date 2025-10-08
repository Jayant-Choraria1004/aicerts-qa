
<?php
$industry_type = get_category_by_slug('super-industry-areas');
// $slug = 'home'; // Replace with your page slug
// $page = get_page_by_path($slug);
// if ($page) {
//     $page_id = $page->ID;
// }
// $explore_solutions_heading = get_field('explore_solutions_heading', $page_id);
$explore_solutions_heading = get_field('explore_solutions_heading');
if (!$industry_type) {
    echo 'No such category found.';
    return;
}
$industry_type_id = $industry_type->term_id;

$subcategories = get_categories(array(
    'parent' => $industry_type_id,
    'child_of' => $industry_type_id,
    'hide_empty' => 0, // Include empty categories if needed
));



$main_tabs = [];
$sub_tabs = [];

foreach ($subcategories as $subcategory) {
    $main_tabs[] = $subcategory->name;

    $pageID = get_the_ID();
    $terms = get_field('about_page_category_order',$pageID);
    if( $terms['categories_order'] ){ 
      foreach( $terms['categories_order'] as $term ){
        $sub_tabs_order[] = $term->term_id;
      }
    }
    // print_r($sub_tabs_order);
    // die();
    $sub_subcategories = get_categories(array(
        'child_of' => $subcategory->term_id,
        'hide_empty' => 0,
        'orderby' => 'include',
        'include' => $sub_tabs_order
    ));
    foreach ($sub_subcategories as $sub_subcategory) {
        $args = array(
            'post_type' => 'courses', // Specify the custom post type
            'category__in' => array($sub_subcategory->term_id),
            'posts_per_page' => -1,
        );
        $posts = get_posts($args);

        $badges = [];
        foreach ($posts as $post) {
            $badges[] = [
                'name' => get_the_title($post->ID),
                'img' => get_the_post_thumbnail_url($post->ID, 'full'),
                'link' => get_the_permalink($post->ID)
            ];
        }

        $sub_tabs[$subcategory->name][$sub_subcategory->slug] = [
            'title' => $sub_subcategory->name,
            'courses' => count($posts),
            'badges' => $badges,
            'courseimg' => get_field('course_category_image', $sub_subcategory)
        ];
    }
}
?>

<section class="h2_popular_certifications AreMostValued pt-0">
    <div class="container">
        <div class="section-heading text-center mb-4">
            <h2>Leading Industries Where <span class="primary_color">AI Certifications</span> Are Most Valued</h2>
        </div>
        <ul class="nav nav-tabs h2_tabs h2__maintabs" id="main_tabs" role="tablist">
            <?php foreach ($main_tabs as $index => $main_tab): ?>
                <li class="nav-item" role="presentation">
                    <button class="nav-link <?= $index === 0 ? 'active' : '' ?>" id="main_tab_<?= $index ?>" data-bs-toggle="tab" data-bs-target="#main_tab_<?= $index ?>-pane" type="button" role="tab" aria-controls="main_tab_<?= $index ?>-pane" aria-selected="<?= $index === 0 ? 'true' : 'false' ?>"><?= $main_tab ?></button>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="tab-content sub_tabs" id="main_tabsContent">
            <?php foreach ($main_tabs as $main_index => $main_tab): ?>
                <div class="tab-pane fade cmn-sliderdots offsetarrow <?= $main_index === 0 ? 'show active' : '' ?>" id="main_tab_<?= $main_index ?>-pane" role="tabpanel" aria-labelledby="main_tab_<?= $main_index ?>" tabindex="0">
                    <ul class="nav nav-tabs h2_tabs" id="popular_certifications_<?= str_replace(' ', '_', $main_tab) ?>Tab" role="tablist">
                        <?php foreach ($sub_tabs[$main_tab] as $sub_index => $sub_tab): ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link <?= $sub_index === array_key_first($sub_tabs[$main_tab]) ? 'active' : '' ?>" id="sub_tab_<?= $main_index ?>_<?= $sub_index ?>" data-bs-toggle="tab" data-bs-target="#sub_tab_<?= $main_index ?>_<?= $sub_index ?>-pane" type="button" role="tab" aria-controls="sub_tab_<?= $main_index ?>_<?= $sub_index ?>-pane" aria-selected="<?= $sub_index === array_key_first($sub_tabs[$main_tab]) ? 'true' : 'false' ?>">
                                    <!-- <?= $sub_tab['title'] ?> -->
                                    <div class="course_btn_wrap">
                                                <div class="course_img">
                                                    <?php if($sub_tab['courseimg']) { ?>
                                                    <img src="<?= $sub_tab['courseimg'] ?>" alt="">
                                                    <?php } else { ?>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/images/course-thumb.jpg" alt="">
                                                    <?php } ?>
                                                </div>
                                                <div class="course_title">
                                                    <h6><?= $sub_tab['title'] ?></h6>
                                                    <p><?= $sub_tab['courses'] ?> certifications</p>
                                                </div>
                                                </a>
                                            </div>
                                </button>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="tab-content popular_certifications_content" id="popular_certifications_<?= str_replace(' ', '_', $main_tab) ?>TabContent">
                        <?php foreach ($sub_tabs[$main_tab] as $sub_index => $sub_tab): ?>
                            <div class="tab-pane fade <?= $sub_index === array_key_first($sub_tabs[$main_tab]) ? 'show active' : '' ?>" id="sub_tab_<?= $main_index ?>_<?= $sub_index ?>-pane" role="tabpanel" aria-labelledby="sub_tab_<?= $main_index ?>_<?= $sub_index ?>" tabindex="0">
                                <div class="accordion-item course_accordian" id="course_accordian_<?= $main_index ?>_<?= $sub_index ?>">
                                    <h2 class="accordion-header" id="acc_course_heading_<?= $main_index ?>_<?= $sub_index ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc_course_collapse_<?= $main_index ?>_<?= $sub_index ?>" aria-expanded="true" aria-controls="acc_course_collapse_<?= $main_index ?>_<?= $sub_index ?>">
                                            <div class="course_btn_wrap">
                                                <div class="course_img">
                                                    <?php if($sub_tab['courseimg']) { ?>
                                                    <img src="<?= $sub_tab['courseimg'] ?>" alt="">
                                                    <?php } else { ?>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/images/course-thumb.jpg" alt="">
                                                    <?php } ?>
                                                </div>
                                                <div class="course_title">
                                                    <h6><?= $sub_tab['title'] ?></h6>
                                                    <p><?= $sub_tab['courses'] ?> certifications</p>
                                                </div>
                                                </a>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="acc_course_collapse_<?= $main_index ?>_<?= $sub_index ?>" class="accordion-collapse collapse" aria-labelledby="acc_course_heading_<?= $main_index ?>_<?= $sub_index ?>" data-bs-parent="#course_accordian_<?= $main_index ?>_<?= $sub_index ?>">
                                        <div class="accordion-body">
                                            <h2 class="text-center mb-3"><span class="primary_color"> <?= $sub_tab['title'] ?> </span></h2>
                                            <div class="owl-carousel owl-theme">
                                                <?php foreach ($sub_tab['badges'] as $badge): ?>
                                                    <div class="item">
                                                        <a href="<?= $badge['link'] ?>" target="_blank">
                                                        <div class="badge_box">
                                                            <h6><?= $badge['name'] ?></h6>
                                                            <img src="<?= $badge['img'] ?>" alt="<?= $badge['name'] ?>">
                                                        </div>
                                                        </a>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>




<script>
    jQuery(document).ready(function() {
        jQuery(".popular_certifications_content .popular_certifications_content .tab-pane.fade:first").addClass("show active");
    });
</script>




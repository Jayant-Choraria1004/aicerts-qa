<?php
$industry_type = get_category_by_slug('role-base-category');
$explore_solutions_heading = get_field('explore_solutions_heading');
if (!$industry_type) {
    echo 'No such category found.';
    return;
}
$industry_type_id = $industry_type->term_id;

$subcategories = get_categories(array(
    'parent' => $industry_type_id,
    'child_of' => $industry_type_id,
    'hide_empty' => 0,
));

$main_tabs = [];
$sub_tabs = [];

foreach ($subcategories as $subcategory) {
    $main_tabs[] = $subcategory->name;

    // RESET order array so previous loop doesn't leak values
    $sub_tabs_order = array();

    $pageID = get_option('page_on_front');
    $terms = get_field('home_category_order', $pageID);
    if (!empty($terms) && !empty($terms['categories_order'])) {
      foreach ($terms['categories_order'] as $term) {
        // term may be an object; be sure to extract ID
        if (is_object($term) && isset($term->term_id)) {
          $sub_tabs_order[] = $term->term_id;
        } elseif (is_array($term) && isset($term['term_id'])) {
          $sub_tabs_order[] = $term['term_id'];
        } elseif (is_int($term) || ctype_digit((string)$term)) {
          $sub_tabs_order[] = (int)$term;
        }
      }
    }

    $sub_sub_args = array(
        'child_of' => $subcategory->term_id,
        'hide_empty' => 0,
    );
    if (!empty($sub_tabs_order)) {
        $sub_sub_args['orderby'] = 'include';
        $sub_sub_args['include'] = $sub_tabs_order;
    }
    $sub_subcategories = get_categories($sub_sub_args);

    foreach ($sub_subcategories as $sub_subcategory) {
        $args = array(
            'post_type' => 'courses',
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

<section class="h2_popular_certifications">
    <div class="container">
        <h2 class="mb-4"><?php echo $explore_solutions_heading; ?></h2>
        <div class="tab-content sub_tabs" id="main_tabsContent">
            <?php foreach ($main_tabs as $main_index => $main_tab): ?>
                <div class="tab-pane fade cmn-sliderdots offsetarrow <?= $main_index === 0 ? 'show active' : '' ?>" id="main_tab_<?= $main_index ?>-pane" role="tabpanel" aria-labelledby="main_tab_<?= $main_index ?>" tabindex="0">

                    <!-- Scrollable Sub Tabs -->
                    <div class="subtab-slider-wrapper">
                        <button class="subtab-scroll-left" type="button" aria-label="Scroll left">‹</button>
                        <div class="subtab-scroll-container">
                            <ul class="nav nav-tabs h2_tabs" id="popular_certifications_<?= esc_attr(str_replace(' ', '_', $main_tab)) ?>Tab" role="tablist">
                                <?php foreach ($sub_tabs[$main_tab] as $sub_index => $sub_tab): ?>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link <?= $sub_index === array_key_first($sub_tabs[$main_tab]) ? 'active' : '' ?>" id="sub_tab_<?= $main_index ?>_<?= esc_attr($sub_index) ?>" data-bs-toggle="tab" data-bs-target="#sub_tab_<?= $main_index ?>_<?= esc_attr($sub_index) ?>-pane" type="button" role="tab" aria-controls="sub_tab_<?= $main_index ?>_<?= esc_attr($sub_index) ?>-pane" aria-selected="<?= $sub_index === array_key_first($sub_tabs[$main_tab]) ? 'true' : 'false' ?>"><?= esc_html($sub_tab['title']) ?></button>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <button class="subtab-scroll-right" type="button" aria-label="Scroll right">›</button>
                    </div>

                    <!-- Sub Tab Content -->
                    <div class="tab-content popular_certifications_content" id="popular_certifications_<?= esc_attr(str_replace(' ', '_', $main_tab)) ?>TabContent">
                        <?php foreach ($sub_tabs[$main_tab] as $sub_index => $sub_tab): ?>
                            <div class="tab-pane fade <?= $sub_index === array_key_first($sub_tabs[$main_tab]) ? 'show active' : '' ?>" id="sub_tab_<?= $main_index ?>_<?= esc_attr($sub_index) ?>-pane" role="tabpanel" aria-labelledby="sub_tab_<?= $main_index ?>_<?= esc_attr($sub_index) ?>" tabindex="0">
                                <div class="accordion-item course_accordian" id="course_accordian_<?= $main_index ?>_<?= esc_attr($sub_index) ?>">
                                    <h2 class="accordion-header" id="acc_course_heading_<?= $main_index ?>_<?= esc_attr($sub_index) ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc_course_collapse_<?= $main_index ?>_<?= esc_attr($sub_index) ?>" aria-expanded="true" aria-controls="acc_course_collapse_<?= $main_index ?>_<?= esc_attr($sub_index) ?>">
                                            <div class="course_btn_wrap">
                                                <div class="course_img">
                                                    <?php if ($sub_tab['courseimg']) : ?>
                                                        <img src="<?= esc_url($sub_tab['courseimg']) ?>" alt="">
                                                    <?php else : ?>
                                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/course-thumb.jpg'); ?>" alt="">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="course_title">
                                                    <h6><?= esc_html($sub_tab['title']) ?></h6>
                                                    <p><?= intval($sub_tab['courses']) ?> certifications</p>
                                                </div>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="acc_course_collapse_<?= $main_index ?>_<?= esc_attr($sub_index) ?>" class="accordion-collapse collapse" aria-labelledby="acc_course_heading_<?= $main_index ?>_<?= esc_attr($sub_index) ?>" data-bs-parent="#course_accordian_<?= $main_index ?>_<?= esc_attr($sub_index) ?>">
                                        <div class="accordion-body">
                                            <div class="owl-carousel owl-theme">
                                                <?php $exploreroleid = 1; foreach ($sub_tab['badges'] as $badge): ?>
                                                    <div class="item">
                                                        <a id="explore-role-ER-<?= esc_attr($sub_index) ?><?= $exploreroleid ?>" href="<?= esc_url($badge['link']) ?>" target="_blank" rel="noopener noreferrer">
                                                            <div class="badge_box">
                                                                <h6><?= esc_html($badge['name']) ?></h6>
                                                                <img src="<?= esc_url($badge['img']) ?>" alt="<?= esc_attr($badge['name']) ?>">
                                                            </div>
                                                        </a>
                                                    </div>
                                                <?php $exploreroleid++; endforeach; ?>
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

<!-- CSS tweaks -->
<style>
.subtab-slider-wrapper {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 15px;
}
.subtab-scroll-container {
    overflow-x: auto;
    white-space: nowrap;
    flex: 1;
    -webkit-overflow-scrolling: touch;
}
.nav-tabs.h2_tabs {
    flex-wrap: nowrap !important;
    display: inline-flex;          /* inline-flex so li widths are computed correctly inside scroll container */
    gap: 8px;
    padding-bottom: 0;
    margin-bottom: 0;
}
.nav-tabs.h2_tabs .nav-item {
    white-space: nowrap;
}
.subtab-scroll-left,
.subtab-scroll-right {
    cursor: pointer;
    background: #eee;
    border: none;
    padding: 6px 10px;
}
</style>

<!-- JS: make sure this runs AFTER jQuery and bootstrap.bundle are enqueued -->
<script>
jQuery(document).ready(function ($) {
    // Scroll wrappers
    $('.subtab-slider-wrapper').each(function () {
        const $wrapper = $(this);
        const $scrollContainer = $wrapper.find('.subtab-scroll-container');
        const $tabList = $scrollContainer.find('.nav-tabs.h2_tabs');
        const $tabs = $tabList.find('.nav-link');

        // Left / right buttons
        $wrapper.find('.subtab-scroll-left').on('click', function () {
            $scrollContainer.animate({ scrollLeft: $scrollContainer.scrollLeft() - 200 }, 200);
        });
        $wrapper.find('.subtab-scroll-right').on('click', function () {
            $scrollContainer.animate({ scrollLeft: $scrollContainer.scrollLeft() + 200 }, 200);
        });

        // When a tab is shown (Bootstrap event), ensure it's fully visible in the scroll area
        $tabs.on('shown.bs.tab', function (e) {
            const $tab = $(e.target);
            // compute left relative to scroll container visible area
            const tabLeft = $tab.offset().left - $scrollContainer.offset().left + $scrollContainer.scrollLeft();
            const tabRight = tabLeft + $tab.outerWidth();
            const visibleLeft = $scrollContainer.scrollLeft();
            const visibleRight = visibleLeft + $scrollContainer.width();

            if (tabLeft < visibleLeft) {
                $scrollContainer.animate({ scrollLeft: tabLeft }, 200);
            } else if (tabRight > visibleRight) {
                $scrollContainer.animate({ scrollLeft: tabRight - $scrollContainer.width() }, 200);
            }
        });

        // Auto-activate first fully visible tab on scroll (debounced)
        let scrollTimer = null;
        $scrollContainer.on('scroll', function () {
            clearTimeout(scrollTimer);
            scrollTimer = setTimeout(function () {
                $tabs.each(function () {
                    const $tab = $(this);
                    const tabLeftRel = $tab.offset().left - $scrollContainer.offset().left;
                    const tabRightRel = tabLeftRel + $tab.outerWidth();
                    if (tabLeftRel >= 0 && tabRightRel <= $scrollContainer.width()) {
                        if (!$tab.hasClass('active')) {
                            // use bootstrap Tab API to reliably show it
                            const bsTab = new bootstrap.Tab($tab.get(0));
                            bsTab.show();
                        }
                        return false; // break loop after first fully visible
                    }
                });
            }, 60);
        });

        // Ensure one tab is active initially (if none)
        if ($tabs.filter('.active').length === 0) {
            const $first = $tabs.first();
            if ($first.length) {
                const bsTab = new bootstrap.Tab($first.get(0));
                bsTab.show();
            }
        }
    });
});
</script>

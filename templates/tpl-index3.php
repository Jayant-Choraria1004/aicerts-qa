<?php /* Template Name: Template Homev3
   */ 
  get_header(); 
?>

<?php 
/*
function display_industry_type_categories() {
    // Get the ID of the parent category by slug 'industry-type'
    $industry_type = get_category_by_slug('industry-type');
    if (!$industry_type) {
        echo 'No such category found.';
        return;
    }
    $industry_type_id = $industry_type->term_id;

    // Get all subcategories of the 'Industry Type' category
    $subcategories = get_categories(array(
        'parent' => $industry_type_id,
        'child_of' => $industry_type_id,
        'hide_empty' => 0, // Include empty categories if needed
    ));
   
    if ($subcategories) {
        echo '<ul>';
        foreach ($subcategories as $subcategory) {
            echo '<li>' . $subcategory->name;

            // Get all sub-subcategories of the current subcategory
            $sub_subcategories = get_categories(array(
                'child_of' => $subcategory->term_id,
                'hide_empty' => 0, // Include empty categories if needed
            ));

            if ($sub_subcategories) {
                echo '<ul>';
                foreach ($sub_subcategories as $sub_subcategory) {
                    echo '<li>' . $sub_subcategory->name;

                    // Get posts in the current sub-subcategory
                    $args = array(
                        'post_type' => 'courses', // Specify the custom post type
                        'category__in' => array($sub_subcategory->term_id),
                        'posts_per_page' => -1,
                    );
                    $posts = get_posts($args);

                    if ($posts) {
                        echo '<ul>';
                        foreach ($posts as $post) {
                            echo '<li>' . get_the_title($post->ID) . '</li>';
                        }
                        echo '</ul>';
                    } else {
                        echo '<ul><li>No courses found.</li></ul>';
                    }

                    echo '</li>';
                }
                echo '</ul>';
            }
            echo '</li>';
        }
        echo '</ul>';
    } else {
        echo 'No subcategories found.';
    }
}

// Use this function wherever you want to display the categories and courses
display_industry_type_categories();


exit; */
?>


<div class="middle-section home_version2">

    <section class="h2_banner">
        <div class="owl-carousel owl-theme midd-banner-slider">
            <div class="item">
                <div class="h2_banner_slide h2_banner_slide1">
                    <div class="h2_banner_content">
                        <h1><span>Accelerate</span> Your Career with AI and Blockchain Certifications</h1>
                        <p>Gain globally recognised credentials to lead in the tech-driven future.</p>
                        <a href="https://www.aicerts.ai/ai-professional/" class="btn btn-primary">Explore Certifications</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="h2_banner_slide h2_banner_slide2">
                    <div class="h2_banner_content">
                        <h1><span>Accelerate</span> Your Career with AI and Blockchain Certifications</h1>
                        <p>Gain globally recognised credentials to lead in the tech-driven future.</p>
                        <a href="https://www.aicerts.ai/ai-professional/" class="btn btn-primary">Explore Certifications</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="h2_banner_slide h2_banner_slide3">
                    <div class="h2_banner_content">
                        <h1><span>Accelerate</span> Your Career with AI and Blockchain Certifications</h1>
                        <p>Gain globally recognised credentials to lead in the tech-driven future.</p>
                        <a href="https://www.aicerts.ai/ai-professional/" class="btn btn-primary">Explore Certifications</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="h2_banner_slide h2_banner_slide4">
                    <div class="h2_banner_content">
                        <h1><span>Accelerate</span> Your Career with AI and Blockchain Certifications</h1>
                        <p>Gain globally recognised credentials to lead in the tech-driven future.</p>
                        <a href="https://www.aicerts.ai/ai-professional/" class="btn btn-primary">Explore Certifications</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--section class="h2_certifications">
        <div class="container">
            <div class="certification_box_wrap">
                <div class="certification_box">
                    <div class="certification_icon">
                        <img src="/wp-content/themes/aicerts/images/accredited-certifications.svg" alt="">
                    </div>
                    <div class="certification_title">
                        <h5>Accredited Certifications</h5>
                        <p>Our certifications are recognised globally, ensuring credibility & value.</p>
                    </div>
                </div>
                <div class="certification_box">
                    <div class="certification_icon">
                        <img src="/wp-content/themes/aicerts/images/expert-Instructors.svg" alt="">
                    </div>
                    <div class="certification_title">
                        <h5>Expert Instructors</h5>
                        <p>Learn from industry leaders and pioneers in AI and Blockchain.</p>
                    </div>
                </div>
                <div class="certification_box">
                    <div class="certification_icon">
                        <img src="/wp-content/themes/aicerts/images/flexible-learning.svg" alt="">
                    </div>
                    <div class="certification_title">
                        <h5>Flexible Learning</h5>
                        <p>Access self-paced, online courses tailored to your schedule.</p>
                    </div>
                </div>
            </div>
        </div>
    </section-->

    <section class="h2_what_aicerts">
        <div class="container">
            <div class="h2_what_aicerts_content">
                <h2>What is <span>AI</span> CERTs?</h2>
                <p>AI Certs™ offers role-based AI & Blockchain Certifications. Our purpose is to promote the values of lifelong learning. We help companies build a smarter workforce, adapt to change, and drive growth. Our mission is to certify a billion people!</p>
            </div>
        </div>
    </section>

<?php 
/**********************************
// Version 1
*********************** */
?>
<?php

// Get the ID of the parent category by slug 'industry-type'
$industry_type = get_category_by_slug('industry-type');
if (!$industry_type) {
    echo 'No such category found.';
    return;
}
$industry_type_id = $industry_type->term_id;

// Get immediate child categories of the 'Industry Type' category
$subcategories = get_categories(array(
    'parent' => $industry_type_id,
    'hide_empty' => 1, // Include empty categories if needed
));

// Function to generate tab navigation
function generate_tab_navigation($subcategories) {
    echo '<ul class="nav nav-tabs h2_tabs h2__maintabs" id="main_tabs" role="tablist">';
    $tab_index = 0;
    foreach ($subcategories as $subcategory) {
        $active_class = $tab_index === 0 ? 'active' : '';
        echo '<li class="nav-item" role="presentation">';
        echo '<button class="nav-link ' . $active_class . '" id="main_tab_' . $subcategory->slug . '" data-bs-toggle="tab" data-bs-target="#main_tab_' . $subcategory->slug . '-pane" type="button" role="tab" aria-controls="main_tab_' . $subcategory->slug . '-pane" aria-selected="' . ($tab_index === 0 ? 'true' : 'false') . '">' . $subcategory->name . '</button>';
        echo '</li>';
        $tab_index++;
    }
    echo '</ul>';
}

// Function to generate tab content
function generate_tab_content($subcategories) {
    echo '<div class="tab-content popular_certifications_content" id="main_tabsContent">';
    $tab_index = 0;
    foreach ($subcategories as $subcategory) {
        $active_class = $tab_index === 0 ? 'show active' : '';
        echo '<div class="tab-pane fade ' . $active_class . '" id="main_tab_' . $subcategory->slug . '-pane" role="tabpanel" aria-labelledby="main_tab_' . $subcategory->slug . '" tabindex="0">';
        generate_subcategory_tabs($subcategory);
        echo '</div>';
        $tab_index++;
    }
    echo '</div>';
}

// Function to generate subcategory tabs
function generate_subcategory_tabs($subcategory) {
    echo '<ul class="nav nav-tabs h2_tabs" id="popular_certifications_' . $subcategory->slug . 'Tab" role="tablist">';
    $sub_subcategories = get_categories(array(
        'parent' => $subcategory->term_id,
        'hide_empty' => 1, // Include empty categories if needed
    ));
    $sub_tab_index = 0;
    foreach ($sub_subcategories as $sub_subcategory) {
        $sub_active_class = $sub_tab_index === 0 ? 'active' : '';
        echo '<li class="nav-item" role="presentation">';
        echo '<button class="nav-link ' . $sub_active_class . '" id="pop_cert_' . $subcategory->slug . '_' . $sub_subcategory->slug . '" data-bs-toggle="tab" data-bs-target="#pop_cert_' . $subcategory->slug . '_' . $sub_subcategory->slug . '-pane" type="button" role="tab" aria-controls="pop_cert_' . $subcategory->slug . '_' . $sub_subcategory->slug . '-pane" aria-selected="' . ($sub_tab_index === 0 ? 'true' : 'false') . '">' . $sub_subcategory->name . '</button>';
        echo '</li>';
        $sub_tab_index++;
    }
    echo '</ul>';
    echo '<div class="tab-content popular_certifications_content" id="popular_certifications_' . $subcategory->slug . 'TabContent">';
    foreach ($sub_subcategories as $sub_subcategory) {
        generate_subsubcategory_content($subcategory, $sub_subcategory);
    }
    echo '</div>';
}

// Function to generate sub-subcategory content
function generate_subsubcategory_content($subcategory, $sub_subcategory) {
    echo '<div class="tab-pane fade" id="pop_cert_' . $subcategory->slug . '_' . $sub_subcategory->slug . '-pane" role="tabpanel" aria-labelledby="pop_cert_' . $subcategory->slug . '_' . $sub_subcategory->slug . '" tabindex="0">';
    echo '<div class="accordion-item course_accordian">';
    echo '<h2 class="accordion-header" id="acc_course_heading_' . $sub_subcategory->term_id . '">';
    echo '<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc_course_collapse_' . $sub_subcategory->term_id . '" aria-expanded="true" aria-controls="acc_course_collapse_' . $sub_subcategory->term_id . '">';
    echo '<div class="course_btn_wrap">';
    echo '<div class="course_img">';
    echo '<img src="'.  get_the_post_thumbnail_url($post->ID) .'" alt="">';
    echo '</div>';
    echo '<div class="course_title">';
    echo '<h6>' . $sub_subcategory->name . '</h6>';

    // Get posts in the current sub-subcategory
    $args = array(
        'post_type' => 'courses', // Specify the custom post type
        'category__in' => array($sub_subcategory->term_id),
        'posts_per_page' => -1,
    );
    $posts = get_posts($args);

    $post_count = count($posts);
    echo '<p>' . $post_count . ' courses</p>';
    echo '</div>';
    echo '</div>';
    echo '</button>';
    echo '</h2>';
    echo '<div id="acc_course_collapse_' . $sub_subcategory->term_id . '" class="accordion-collapse collapse" aria-labelledby="acc_course_heading_' . $sub_subcategory->term_id . '" data-bs-parent="#course_accordian">';
    echo '<div class="accordion-body">';
    echo '<div class="owl-carousel owl-theme">';
    
    if ($posts) {
        foreach ($posts as $post) {
            echo '<div class="item">';
            echo '<div class="badge_box">';
            echo '<h6>' . get_the_title($post->ID) . '</h6>';
            // Assuming you have a way to get the image for the course
            echo '<img src="'.  get_the_post_thumbnail_url($post->ID) .'" alt="">';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo '<div class="item">';
        echo '<div class="badge_box">';
        echo '<h6>No courses found.</h6>';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>'; // owl-carousel
    echo '</div>'; // accordion-body
    echo '</div>'; // accordion-collapse
    echo '</div>'; // accordion-item
    echo '</div>'; // tab-pane
}

// Display section only if subcategories are found
if ($subcategories) {
    echo '<section class="h2_popular_certifications">';
    echo '<div class="container">';
    echo '<h2 class="mb-4">Explore all our role based <span>solutions</span></h2>';
    generate_tab_navigation($subcategories);
    generate_tab_content($subcategories);
    echo '</div>'; // container
    echo '</section>'; // section
} else {
    echo 'No subcategories found.';
}
?>
    

<?php
$industry_type = get_category_by_slug('industry-type');
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
    $sub_subcategories = get_categories(array(
        'child_of' => $subcategory->term_id,
        'hide_empty' => 0, // Include empty categories if needed
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
                'img' => get_the_post_thumbnail_url($post->ID, 'full')
            ];
        }

        $sub_tabs[$subcategory->name][$sub_subcategory->slug] = [
            'title' => $sub_subcategory->name,
            'courses' => count($posts),
            'badges' => $badges
        ];
    }
}
?>

<?php 
/**********************************
// Version 2
*********************** */
?>
<section class="h2_popular_certifications">
    <div class="container">
        <h2 class="mb-4">Explore all our role based <span>solutions</span></h2>
        <ul class="nav nav-tabs h2_tabs h2__maintabs" id="main_tabs" role="tablist">
            <?php foreach ($main_tabs as $index => $main_tab): ?>
                <li class="nav-item" role="presentation">
                    <button class="nav-link <?= $index === 0 ? 'active' : '' ?>" id="main_tab_<?= $index ?>" data-bs-toggle="tab" data-bs-target="#main_tab_<?= $index ?>-pane" type="button" role="tab" aria-controls="main_tab_<?= $index ?>-pane" aria-selected="<?= $index === 0 ? 'true' : 'false' ?>"><?= $main_tab ?></button>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="tab-content sub_tabs" id="main_tabsContent">
            <?php foreach ($main_tabs as $main_index => $main_tab): ?>
                <div class="tab-pane fade <?= $main_index === 0 ? 'show active' : '' ?>" id="main_tab_<?= $main_index ?>-pane" role="tabpanel" aria-labelledby="main_tab_<?= $main_index ?>" tabindex="0">
                    <ul class="nav nav-tabs h2_tabs" id="popular_certifications_<?= str_replace(' ', '_', $main_tab) ?>Tab" role="tablist">
                        <?php foreach ($sub_tabs[$main_tab] as $sub_index => $sub_tab): ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link <?= $sub_index === array_key_first($sub_tabs[$main_tab]) ? 'active' : '' ?>" id="sub_tab_<?= $main_index ?>_<?= $sub_index ?>" data-bs-toggle="tab" data-bs-target="#sub_tab_<?= $main_index ?>_<?= $sub_index ?>-pane" type="button" role="tab" aria-controls="sub_tab_<?= $main_index ?>_<?= $sub_index ?>-pane" aria-selected="<?= $sub_index === array_key_first($sub_tabs[$main_tab]) ? 'true' : 'false' ?>"><?= $sub_tab['title'] ?></button>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="tab-content popular_certifications_content" id="popular_certifications_<?= str_replace(' ', '_', $main_tab) ?>TabContent">
                        <?php foreach ($sub_tabs[$main_tab] as $sub_index => $sub_tab): ?>
                            <div class="tab-pane fade <?= $sub_index === array_key_first($sub_tabs[$main_tab]) ? 'show active' : '' ?>" id="sub_tab_<?= $main_index ?>_<?= $sub_index ?>-pane" role="tabpanel" aria-labelledby="sub_tab_<?= $main_index ?>_<?= $sub_index ?>" tabindex="0">
                                <div class="accordion-item course_accordian">
                                    <h2 class="accordion-header" id="acc_course_heading_<?= $main_index ?>_<?= $sub_index ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc_course_collapse_<?= $main_index ?>_<?= $sub_index ?>" aria-expanded="true" aria-controls="acc_course_collapse_<?= $main_index ?>_<?= $sub_index ?>">
                                            <div class="course_btn_wrap">
                                                <div class="course_img">
                                                    <img src="/wp-content/themes/aicerts/images/course-thumb.jpg" alt="">
                                                </div>
                                                <div class="course_title">
                                                    <h6><?= $sub_tab['title'] ?></h6>
                                                    <p><?= $sub_tab['courses'] ?> courses</p>
                                                </div>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="acc_course_collapse_<?= $main_index ?>_<?= $sub_index ?>" class="accordion-collapse collapse" aria-labelledby="acc_course_heading_<?= $main_index ?>_<?= $sub_index ?>" data-bs-parent="#course_accordian">
                                        <div class="accordion-body">
                                            <div class="owl-carousel owl-theme">
                                                <?php foreach ($sub_tab['badges'] as $badge): ?>
                                                    <div class="item">
                                                        <div class="badge_box">
                                                            <h6><?= $badge['name'] ?></h6>
                                                            <img src="<?= $badge['img'] ?>" alt="">
                                                        </div>
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


<?php 
/**********************************
// Version 3
*********************** */
?>

<?php 
$main_tabs = ['Technology', 'Business & Leadership'];
$sub_tabs = [
    'Technology' => [
        'AIDATA' => ['title' => 'AIDATA', 'courses' => 3, 'badges' => [['name' => 'AI+ AI&DATA', 'img' => 'https://dev.aicerts.ai/wp-content/uploads/2024/02/Badge-AI-Prompt-Engineer.svg'], ['name' => 'Everyone', 'img' => 'https://dev.aicerts.ai/wp-content/uploads/2024/04/Badge-AI-Everyone.svg'], ['name' => 'Executive', 'img' => 'https://dev.aicerts.ai/wp-content/uploads/2024/03/Badge-AI-Executive.svg']]],
        'AppDev' => ['title' => 'AppDev', 'courses' => 2, 'badges' => [['name' => 'AI+ Application Development', 'img' => 'https://dev.aicerts.ai/wp-content/uploads/2024/02/Badge-AI-Prompt-Engineer.svg']]],
    ],
    'Business & Leadership' => [
        'Leadership' => ['title' => 'Leadership', 'courses' => 3, 'badges' => [['name' => 'Prompt Engineer', 'img' => 'https://dev.aicerts.ai/wp-content/uploads/2024/02/Badge-AI-Prompt-Engineer.svg']]],
        'Design & Multimedia' => ['title' => 'Design & Multimedia', 'courses' => 3, 'badges' => [['name' => 'Design', 'img' => 'https://dev.aicerts.ai/wp-content/uploads/2024/02/Badge-AI-Design.svg'], ['name' => 'UX Design', 'img' => 'https://dev.aicerts.ai/wp-content/uploads/2024/02/Badge-AI-UX-Designer.svg']]],
    ]
];
?>

<section class="h2_popular_certifications">
    <div class="container">
        <h2 class="mb-4">Explore all our role based <span>solutions</span></h2>
        <ul class="nav nav-tabs h2_tabs h2__maintabs" id="main_tabs" role="tablist">
            <?php foreach ($main_tabs as $index => $main_tab): ?>
                <li class="nav-item" role="presentation">
                    <button class="nav-link <?= $index === 0 ? 'active' : '' ?>" id="main_tab_<?= $index ?>" data-bs-toggle="tab" data-bs-target="#main_tab_<?= $index ?>-pane" type="button" role="tab" aria-controls="main_tab_<?= $index ?>-pane" aria-selected="<?= $index === 0 ? 'true' : 'false' ?>"><?= $main_tab ?></button>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="tab-content sub_tabs" id="main_tabsContent">
            <?php foreach ($main_tabs as $main_index => $main_tab): ?>
                <div class="tab-pane fade <?= $main_index === 0 ? 'show active' : '' ?>" id="main_tab_<?= $main_index ?>-pane" role="tabpanel" aria-labelledby="main_tab_<?= $main_index ?>" tabindex="0">
                    <ul class="nav nav-tabs h2_tabs" id="popular_certifications_<?= str_replace(' ', '_', $main_tab) ?>Tab" role="tablist">
                        <?php foreach ($sub_tabs[$main_tab] as $sub_index => $sub_tab): ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link <?= $sub_index === array_key_first($sub_tabs[$main_tab]) ? 'active' : '' ?>" id="sub_tab_<?= $main_index ?>_<?= $sub_index ?>" data-bs-toggle="tab" data-bs-target="#sub_tab_<?= $main_index ?>_<?= $sub_index ?>-pane" type="button" role="tab" aria-controls="sub_tab_<?= $main_index ?>_<?= $sub_index ?>-pane" aria-selected="<?= $sub_index === array_key_first($sub_tabs[$main_tab]) ? 'true' : 'false' ?>"><?= $sub_tab['title'] ?></button>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="tab-content popular_certifications_content" id="popular_certifications_<?= str_replace(' ', '_', $main_tab) ?>TabContent">
                        <?php foreach ($sub_tabs[$main_tab] as $sub_index => $sub_tab): ?>
                            <div class="tab-pane fade <?= $sub_index === array_key_first($sub_tabs[$main_tab]) ? 'show active' : '' ?>" id="sub_tab_<?= $main_index ?>_<?= $sub_index ?>-pane" role="tabpanel" aria-labelledby="sub_tab_<?= $main_index ?>_<?= $sub_index ?>" tabindex="0">
                                <div class="accordion-item course_accordian">
                                    <h2 class="accordion-header" id="acc_course_heading_<?= $main_index ?>_<?= $sub_index ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc_course_collapse_<?= $main_index ?>_<?= $sub_index ?>" aria-expanded="true" aria-controls="acc_course_collapse_<?= $main_index ?>_<?= $sub_index ?>">
                                            <div class="course_btn_wrap">
                                                <div class="course_img">
                                                    <img src="/wp-content/themes/aicerts/images/course-thumb.jpg" alt="">
                                                </div>
                                                <div class="course_title">
                                                    <h6><?= $sub_tab['title'] ?></h6>
                                                    <p><?= $sub_tab['courses'] ?> courses</p>
                                                </div>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="acc_course_collapse_<?= $main_index ?>_<?= $sub_index ?>" class="accordion-collapse collapse" aria-labelledby="acc_course_heading_<?= $main_index ?>_<?= $sub_index ?>" data-bs-parent="#course_accordian">
                                        <div class="accordion-body">
                                            <div class="owl-carousel owl-theme">
                                                <?php foreach ($sub_tab['badges'] as $badge): ?>
                                                    <div class="item">
                                                        <div class="badge_box">
                                                            <h6><?= $badge['name'] ?></h6>
                                                            <img src="<?= $badge['img'] ?>" alt="">
                                                        </div>
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


<?php 
/**********************************
// HTML
*********************** */
?>


    <section class="h2_popular_certifications">
        <div class="container">
            <h2 class="mb-4">Explore all our role based <span>solutions</span></h2>
            <ul class="nav nav-tabs h2_tabs h2__maintabs" id="main_tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="main_tab_Technology" data-bs-toggle="tab" data-bs-target="#main_tab_Technology-pane" type="button" role="tab" aria-controls="main_tab_Technology-pane" aria-selected="true">Technology</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="main_tab_BusinessLeadership" data-bs-toggle="tab" data-bs-target="#main_tab_BusinessLeadership-pane" type="button" role="tab" aria-controls="main_tab_BusinessLeadership-pane" aria-selected="false">Business & Leadership</button>
                </li>
            </ul>
            <div class="tab-content popular_certifications_content" id="main_tabsContent">
                <div class="tab-pane fade" id="main_tab_Technology-pane" role="tabpanel" aria-labelledby="main_tab_Technology" tabindex="0">
                    <ul class="nav nav-tabs h2_tabs" id="popular_certifications_TechnologyTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pop_aidata" data-bs-toggle="tab" data-bs-target="#pop_aidata-pane" type="button" role="tab" aria-controls="pop_aidata-pane" aria-selected="true">AIDATA</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pop_APPDEV" data-bs-toggle="tab" data-bs-target="#pop_APPDEV-pane" type="button" role="tab" aria-controls="pop_APPDEV-pane" aria-selected="false">APPDEV</button>
                        </li>
                    </ul>
                    <div class="tab-content popular_certifications_content" id="popular_certifications_TechnologyTabContent">
                        <div class="tab-pane fade show active" id="pop_aidata-pane" role="tabpanel" aria-labelledby="pop_aidata" tabindex="0">
                            <div class="accordion-item course_accordian">
                                <h2 class="accordion-header" id="acc_course_heading1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc_course_collapse1" aria-expanded="true" aria-controls="acc_course_collapse1">
                                        <div class="course_btn_wrap">
                                            <div class="course_img">
                                                <img src="/wp-content/themes/aicerts/images/course-thumb.jpg" alt="">
                                            </div>
                                            <div class="course_title">
                                                <h6>AI & Data</h6>
                                                <p>3 courses</p>
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="acc_course_collapse1" class="accordion-collapse collapse" aria-labelledby="acc_course_heading1" data-bs-parent="#course_accordian">
                                    <div class="accordion-body">
                                        <div class="owl-carousel owl-theme">
                                            <div class="item">
                                                <div class="badge_box">
                                                    <h6>AI+ <br> Prompt Engineer</h6>
                                                    <img src="/wp-content/themes/aicerts/images/badge-promptengineer.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pop_APPDEV-pane" role="tabpanel" aria-labelledby="pop_APPDEV" tabindex="0">
                            <div class="accordion-item course_accordian">
                                <h2 class="accordion-header" id="acc_course_heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc_course_collapse2" aria-expanded="true" aria-controls="acc_course_collapse2">
                                        <div class="course_btn_wrap">
                                            <div class="course_img">
                                                <img src="/wp-content/themes/aicerts/images/course-thumb.jpg" alt="">
                                            </div>
                                            <div class="course_title">
                                                <h6>Application Development</h6>
                                                <p>2 courses</p>
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="acc_course_collapse2" class="accordion-collapse collapse" aria-labelledby="acc_course_heading2" data-bs-parent="#course_accordian">
                                    <div class="accordion-body">
                                        <div class="owl-carousel owl-theme">
                                            <div class="item">
                                                <div class="badge_box">
                                                    <h6>AI+ <br> Everyone</h6>
                                                    <img src="/wp-content/themes/aicerts/images/badge-everyone.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show active" id="main_tab_BusinessLeadership-pane" role="tabpanel" aria-labelledby="main_tab_BusinessLeadership" tabindex="0">
                    <ul class="nav nav-tabs h2_tabs" id="popular_certifications_BusinessTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pop_cert2_Leadership" data-bs-toggle="tab" data-bs-target="#pop_cert2_Leadership-pane" type="button" role="tab" aria-controls="pop_cert2_Leadership-pane" aria-selected="true">Leadership</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pop_cert2_BusinessProcess" data-bs-toggle="tab" data-bs-target="#pop_cert2_BusinessProcess-pane" type="button" role="tab" aria-controls="pop_cert2_BusinessProcess-pane" aria-selected="false">Business Process</button>
                        </li>
                    </ul>
                    <div class="tab-content popular_certifications_content" id="popular_certifications_BusinessTabContent">
                        <div class="tab-pane fade show active" id="pop_cert2_Leadership-pane" role="tabpanel" aria-labelledby="pop_cert2_Leadership" tabindex="0">
                            <div class="accordion-item course_accordian">
                                <h2 class="accordion-header" id="acc_course_heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc_course_collapse3" aria-expanded="true" aria-controls="acc_course_collapse3">
                                        <div class="course_btn_wrap">
                                            <div class="course_img">
                                                <img src="/wp-content/themes/aicerts/images/course-thumb.jpg" alt="">
                                            </div>
                                            <div class="course_title">
                                                <h6>Security</h6>
                                                <p>2 courses</p>
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="acc_course_collapse3" class="accordion-collapse collapse" aria-labelledby="acc_course_heading3" data-bs-parent="#course_accordian">
                                    <div class="accordion-body">
                                        <div class="owl-carousel owl-theme">
                                            <div class="item">
                                                <div class="badge_box">
                                                    <h6>AI+ <br> Executive</h6>
                                                    <img src="/wp-content/themes/aicerts/images/badge-executive.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pop_cert2_BusinessProcess-pane" role="tabpanel" aria-labelledby="pop_cert2_BusinessProcess" tabindex="0">
                            <div class="accordion-item course_accordian">
                                <h2 class="accordion-header" id="acc_course_heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc_course_collapse4" aria-expanded="true" aria-controls="acc_course_collapse4">
                                        <div class="course_btn_wrap">
                                            <div class="course_img">
                                                <img src="/wp-content/themes/aicerts/images/course-thumb.jpg" alt="">
                                            </div>
                                            <div class="course_title">
                                                <h6>Cloud</h6>
                                                <p>2 courses</p>
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="acc_course_collapse4" class="accordion-collapse collapse" aria-labelledby="acc_course_heading4" data-bs-parent="#course_accordian">
                                    <div class="accordion-body">
                                        <div class="owl-carousel owl-theme">
                                            <div class="item">
                                                <div class="badge_box">
                                                    <h6>AI+ <br> Ethics</h6>
                                                    <img src="/wp-content/themes/aicerts/images/badge-ethics.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="badge_box">
                                                    <h6>AI+ <br> Writer</h6>
                                                    <img src="/wp-content/themes/aicerts/images/badge-writer.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="badge_box">
                                                    <h6>AI+ <br> Researcher</h6>
                                                    <img src="/wp-content/themes/aicerts/images/Badge-researchb.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
// get_sidebar();
   get_footer(); 
   ?>
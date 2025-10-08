<?php
/*
*    Template Name: EventsListing
*/	
get_header();
$page = get_post(get_the_ID());
$term_slug = $page->post_name;
$event_slider_title = get_field('event_slider', 'option');
$event_name = get_field('event_name', 'option');
$event_slider_subtitle = get_field('event_slider_subtitle', 'option');
?>
<div class="middle-section">
    <section class="midd-banner event_slider">    
        <div class="owl-carousel owl-theme midd-banner-slider">             
            <div class="item">
                <div class="midd-banner-slide d-flex">                    
                <img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()."/images/Banner01.png"); ?>" alt="Slide">                 
                    <div class="main-banner-cnt">
                        <div class="container">
                            <div class="slider_content">
                                <h4 class="slide-sub"><?php echo $event_slider_title; ?></h4>
                                <h2 class="video_title Slide_title"><?php echo $event_name; ?></h2>
                                <h3 class="slide-sub-tex"><?php echo $event_slider_subtitle; ?></h3>
                            </div>
                        </div>
                    </div>
                </div>                           
            </div>
        </div> <!--#BannerTasEnd-->
   </section>
   <section class="cert-spec-section UpcomingEvents">
    <div class="container maxwidth">
        <div class="row">
            <div class="col-12">
                <div class="common-cnt section_header">
                    <h2><?php echo get_the_title(); ?></h2>
                </div>
            </div>
        </div>
        <?php
        $event_args = array(
            'post_type' => 'events',
            'tax_query' => array(
                array(
                    'taxonomy' => 'eventcategory',
                    'field'    => 'slug', // You can use 'term_id', 'name', or 'slug'
                    'terms'    => $term_slug, // Replace with your category slug
                ),
            ),
        );
        ?>
        <?php $event = new WP_Query($event_args); ?>
        <div class="row gy-5">
            <?php 
                if($event->have_posts()) {
                    $counter = 1;
                    while($event->have_posts()) {
                        $event->the_post();
            ?>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="event_grid">
                    <div class="event_image">
                    <!-- <img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()."/images/event1.png"); ?>" alt="Event"> -->
                    <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="Event">
                    </div>
                    <div class="event_info">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php echo get_field('event_date'); ?> - <?php echo get_field('event_location'); ?></p>
                    </div>
                </div>
            </div><!--#ColEnd-->
            <?php if($counter == 2){ ?>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="event_grid all_event">
                    <h3>All Events</h3>
                    <ul class="all-events">
                        <?php $eventmenus = get_field('event_menu', 'option'); ?>
                        <?php foreach($eventmenus as $eventmenu): ?>
                            <li><a href="<?php echo $eventmenu['menu_name']['url']; ?>"><?php echo $eventmenu['menu_name']['title']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div><!--#ColEnd-->
            <?php } ?>
            <?php
                        $counter++;
                    }
                wp_reset_postdata();
            }
            ?>
        </div><!--#RowEnd-->
    </div>
   </section><!--#UpcomingEvents-->
</div>
<!--Footer-->
<?php
get_footer();
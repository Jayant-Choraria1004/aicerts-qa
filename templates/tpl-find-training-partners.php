<?php /* Template Name: Template Find a Training Partners
   */ 
   get_header(); 
   $mapdesktop = get_field('training_partners_map_desktop');
   $mapmobile = get_field('training_partners_map_mobile');
   $form_shortcode = get_field('form_shortcode');

   $args = array(
        'post_type' => 'partner',
        'tax_query' => array(
            array(
                'taxonomy' => 'partnercategories', // Custom taxonomy name
                'field'    => 'slug',
                'terms'    => 'training-partner', // Term slug to filter by
            ),
        ),
        'posts_per_page' => 500,
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1
    ); 
    $partners = get_posts($args);
    $country_arr = ['Global'];
     
        
        
   ?> 
<!--Header End-->

<style>
 .csm_content { max-width: 759px;}   
 .FindInpute {
    background: #171A24;
    border: 1px solid #2A2E36;
    padding: 14px 27px 14px 20px;
    }
.find_serch-btn button.btn.btn-primary {height: 52px; width: 100%;}    
.FindPartners .row_innter-item p {margin-bottom: 0; font-size: 1rem;font-weight: 600;}
.FindPartners .row-item {align-items: center;padding: 20px;background: #171A24;}
.FindPartners .row_innter-item .btn { background: var(--primary-color);width: 100%;font-size: 1rem;padding: 12px;border-color: var(--primary-color);}
.FindPartners .row_innter-item {width: 100%;}    
@media  (max-width: 991.5px) {
.FindPartners .row-item {padding: 15px;}
.TrainingPartners img {width: 1250px;max-width: 1250px;}
.TrainingPartners 
    {
    overflow: hidden;
    overflow-x: auto;
    }
}
@media  (min-width: 1200.5px) {
.CountryInput {max-width: 235px;}
.find_serch-btn button.btn.btn-primary {
    position: absolute;
    right: 10px;
    bottom: 9px;
    width: auto;
}
}
#client-pagination .btn {
    min-width: 50px;
    background: #f3f3f3;
}
#client-pagination .btn.active {
    background: var(--primary-color); color: var(--white-color);
}
#client-pagination .btn-secondary {
    color: #000;
}

</style>

<div class="middle-section">
    <div class="inner-page pt-5">
        <section class="cert-spec-section pb-2 d-flex justify-content-center align-items-center">
            <div class="container maxwidth">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="cmn-hd" data-aos="fade-up" data-aos-duration="1000"><?php echo get_the_title(); ?></h1>
                    </div>
                    <div class="col-12">
                        <div class="csm_content text-center mt-4 mx-auto">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="find_map">
            <div class="container maxwidth">
                <div class="col-12">
                    <div class="TrainingPartners">
                        <div class="black_theme">
                        <?php if( $mapdesktop ): ?>	
                            <img src="<?php echo $mapdesktop ?>" alt="Training Partners" />
                        <?php endif; ?>
                        </div>
                        <div class="white_theme">
                        <?php if( $mapmobile ): ?>	
                            <img src="<?php echo $mapmobile ?>" alt="Training Partners" />
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="FindPartners mt-5">
            <div class="container maxwidth">
                <div class="row align-content-center mb-5 position-relative gy-2">
                    <?php /*  <div class="col-lg-4 col-md-4">
                        <input type="text" class="SearchInput form-control" placeholder="Search">
                    </div> 
                    <div class="col-lg-4 col-md-4">
                        <select class="ParntersInput form-control" name="partnername">
                            <option value="All">All</option>
                            <?php if (!empty($partners)) : ?>
                                <?php   
                                foreach ($partners as $partner) :  ?>
                                <option value="<?php echo $partner->post_title; ?>"><?php echo $partner->post_title; ?></option>
                                <?php 
                                endforeach;
                                ?>
                            <?php endif; ?>
                        </select>
                    </div> */ ?>
                    <div class="col-lg-4 col-md-4">
                        <select class="CountryInput form-control" name="country">
                            <?php   
                                foreach ($partners as $partner) :  ?>
                                <?php 
                                    $country = get_field('locations', $partner->ID);
                                    if(!empty($country))
                                    {
                                        $country_arr = array_merge($country_arr, $country);
                                    }
                                    $country_arr = array_unique($country_arr);
                                endforeach;
                            ?>
                            <?php foreach($country_arr as $country) { ?>
                            <option value="<?php echo $country; ?>"><?php echo $country; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <?php /* <div class="find_serch-btn">
                    <button type="search" class="btn btn-primary">Search</button>
                    </div> */ ?>
                    <div class="mobile_btn-show">
                        <button type="search"  class="btn btn-primary find-training-provider" data-partnername="<?php echo get_the_title(); ?>" data-partnerlocations="<?php echo $location_str; ?>">Request Training</button>
                    </div>
                </div>
            </div>
            <div class="FindPartner_table mb-5">
                <div class="container maxwidth">
                        <div class="main-container">
                            <div class="table-container">

                            <div class="table-row heading">
                                <div class="row-item">Partner Name</div>
                                <div class="row-item">Partner Type</div>
                                <div class="row-item">Location</div>
                                <div class="row-item"></div>
                            </div><!-- heading -->
                                <?php
                                $wp_query = new WP_Query($args);
                                ?>
                                <div id="table-row-container">
                                <?php if ($wp_query->have_posts()) : ?>
                                    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                                        <div class="table-row" data-location="<?php $locations = get_field('locations'); echo !empty($locations) ? implode(',', $locations) : ''; ?>">
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
                                                        $location_str = '--';
                                                        if(!empty($locations))
                                                        {
                                                            $location_str = implode(", ", $locations);
                                                            echo $location_str;
                                                        }
                                                        else {
                                                            echo "";
                                                        }
                                                    ?></p>
                                                </div> 
                                            </div>
                                            <div class="row-item"> 
                                                <div class="row_innter-item"> 
                                                <button type="search"  class="btn btn-primary find-training-provider" data-partnername="<?php echo get_the_title(); ?>" data-partnerlocations="<?php echo $location_str; ?>">Request Training</button>
                                                </div> 
                                            </div>
                                        </div><!-- Subheading -->
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php else : ?>
                                    <p><?php _e('No Training Provider'); ?></p>
                                <?php endif; ?>
                                </div>
                                <div id="client-pagination" class="d-flex justify-content-center mt-3"></div>
                        </div>
                    </div>
                </div>     
            </div>                     
        </section>
    </div>
</div>

<?php include_once get_template_directory() . "/template-parts/formpopup.php"; ?>

<?php wp_enqueue_script('jquery'); ?>
<script>
jQuery('document').ready(function(){
    var selectedLocation = '';
    var rowsPerPage = 10;
    var currentPage = 1;
    var $rows = $('.table-row').not('.heading');

    function getFilteredRows() {
        if (!selectedLocation || selectedLocation === 'Global') {
            return $rows;
        }
        return $rows.filter(function() {
            var rowLocation = $(this).data('location') || '';
            if (!rowLocation) return false;
            var locationsArr = rowLocation.split(',');
            return locationsArr.includes(selectedLocation);
        });
    }

    function showPage(page) {
        var filteredRows = getFilteredRows();
        var totalRows = filteredRows.length;
        var totalPages = Math.ceil(totalRows / rowsPerPage);
        if (page < 1) page = 1;
        if (page > totalPages) page = totalPages;
        currentPage = page;

        $rows.hide();
        filteredRows.each(function(i) {
            if (i >= (page - 1) * rowsPerPage && i < page * rowsPerPage) {
                $(this).show();
            }
        });
        renderPagination(totalPages);
    }

    function renderPagination(totalPages) {
        var $pagination = $('#client-pagination');
        $pagination.empty();
        if (totalPages <= 1) return;
        var html = '';
        if (currentPage > 1) {
            html += '<button class="btn btn-secondary mx-1" data-page="' + (currentPage - 1) + '">Prev</button>';
        }
        for (var i = 1; i <= totalPages; i++) {
            html += '<button class="btn btn-light mx-1' + (i === currentPage ? ' active' : '') + '" data-page="' + i + '">' + i + '</button>';
        }
        if (currentPage < totalPages) {
            html += '<button class="btn btn-secondary mx-1" data-page="' + (currentPage + 1) + '">Next</button>';
        }
        $pagination.html(html);
    }

    // Initial show
    showPage(1);

    // Country filter
    $('.CountryInput').on('change', function() {
        selectedLocation = $(this).val();
        showPage(1);
    });

    // Pagination click
    $('#client-pagination').on('click', 'button', function() {
        var page = parseInt($(this).data('page'));
        showPage(page);
        // Scroll to country dropdown
        var dropdownOffset = $('.CountryInput').offset();
        if(dropdownOffset) {
            $('html, body').animate({ scrollTop: dropdownOffset.top - 130 }, 400);
        }
    });

    // Optionally, you can add search or partner filter here and call showPage(1) after updating filters
});
</script>

<script>
    jQuery(document).ready(function(){
        jQuery(".find-training-provider").click(function(){
            //alert($(this).data('partnername'));
            if(jQuery("#gform_13").length)
            {
                jQuery("#input_13_20").val($(this).data('partnername'));
                jQuery("#input_13_21").val($(this).data('partnerlocations'));
            }
            
            if(jQuery("#gform_11").length)
            {
                jQuery("#input_11_20").val($(this).data('partnername'));
                jQuery("#input_11_21").val($(this).data('partnerlocations'));
            }
            if(jQuery("#gform_4").length)
            {
                jQuery("#input_4_20").val($(this).data('partnername'));
                jQuery("#input_4_21").val($(this).data('partnerlocations'));
            }
        });
        
    });
</script>
<!--Footer-->
<?php
// get_sidebar();
get_footer(); 
?>
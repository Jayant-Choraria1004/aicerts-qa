<?php
/*
 * Template Name: Career Path
 */
get_header();
$evlevateheading = get_field('evlevate_heading');
$evlevatecontent1 = get_field('evlevate_content1');
$evlevatecontent2 = get_field('evlevate_content2');
$evlevatecontent3 = get_field('evlevate_content3');
$evlevatecontent4 = get_field('evlevate_content4');

$args = array(
    'post_type' => 'career-path',
    'posts_per_page' => 100, 
    'post_status' => 'publish',
    'order' => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'cp-categories',
            'field'    => 'slug',
            'terms'    => array( 'microsoft-aicerts' ),
            'operator' => 'NOT IN',
        )
    ),
);

?>

<div class="middle-section roles-based-solutions">
    <div class="inner-page certification-page">
        <section class="cert-spec-section listing-pages">
            <div class="container maxwidth">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="evlevate_image">
                            <?php if (get_field('evlevate_image')): ?>
                                <img src="<?php the_field('evlevate_image'); ?>" class="w-100" alt="Evlevat Image" />
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="evlevate_content">
                            <?php if ($evlevateheading): ?>
                                <h2 class="mb-4"><?php echo $evlevateheading; ?></h2>
                            <?php endif; ?>
                            <?php if ($evlevatecontent1): ?>
                                <p><?php echo $evlevatecontent1; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-col-12">
                        <div class="evlevate_content_bt mt-4">
                            <?php if ($evlevatecontent2): ?>
                                <p><?php echo $evlevatecontent2; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-col-12">
                        <h4 class="roll_base-text mb-4">
Select a specific career from the drop down or view all careers using the View All button.</h4>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="section_heading cp-dropdown">
                            <select name="CareerPaths" id="CareerPaths">
                                
                                
                                <option value="0" data-postid="0">Select Career</option>
                                <?php 
                                $query = new WP_Query($args);                            
                                if ($query->have_posts()) {
                                    while ($query->have_posts()) {
                                        $query->the_post();
                                        ?>
                                        <option value="<?php echo get_the_title() ?>" data-postid="postid-<?php echo get_the_ID(); ?>"><?php echo get_the_title() ?></option>
                                    <?php } ?>
                                    <?php  wp_reset_postdata(); 
                                }
                                ?>                               
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                       <a href="javascript:void(0)" class="btn btn-primary viewall">View All</a>
                    </div>
                    <div class="col-lg-6 col-md-6 mt-4">
                        <div class="evlevate_content_bt">
                            <?php if ($evlevatecontent3): ?>
                                <p><?php echo $evlevatecontent3; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mt-4">
                        <div class="evlevate_content_bt">
                            <?php if ($evlevatecontent4): ?>
                                <p><?php echo $evlevatecontent4; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="middle-section CareerPath">
    <div class="inner-page">
        <section class="cert-spec-section listing-pages pt-lg-5 pt-0">
            <div class="container">
                <div class="row align-content-center">
                    <div class="col-lg-8 col-md-6">
                        <div class="section_heading">
                            <h2>Career Paths </h2>
                        </div>
                    </div>
                </div>
                <div class="main-container mt-2 mb-4">
                    <div class="table-container">
                        <div class="table-row heading">
                            <div class="row-item">CAREER</div>
                            <div class="row-item">AI CERTs RECOMMENDATION</div>
                            <!-- <div class="row-item">VENDOR CERTIFICATION</div> -->
                        </div>
                        <?php
                        // The Query
                        $query = new WP_Query($args);

                        // The Loop
                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                ?>

                                <div class="table-row postid-<?php echo get_the_ID(); ?>" >
                                    <div class="row-item subheading">
                                        <h6>CAREER</h6>
                                        <?php the_title(); ?>
                                    </div>
                                    <div class="row-item">
                                        <h6>AI CERTs RECOMMENDATION</h6>
                                        <div class="row_innter-item">
                                            <?php $recommended_courses = get_field('recommended__courses'); ?>
                                            <?php if ($recommended_courses): ?>
                                                <?php foreach ($recommended_courses as $course): ?>
                                                    <a class="btn"
                                                        href="<?php echo get_permalink($course); ?>"><?php echo get_the_title($course); ?></a>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <!-- <div class="row-item">
                                        <h6>VENDOR CERTIFICATION</h6>
                                        <div class="row_innter-item">
                                            <?php $vendor_certification = get_field('vendor_certification'); ?>
                                            <?php if ($vendor_certification): ?>
                                                <?php foreach ($vendor_certification as $certification): ?>
                                                    <a class="btn"
                                                        href="javascript:void(0);"><?php echo get_the_title($certification); ?></a>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div> -->
                                </div>
                                <?php
                            }
                            /* Restore original Post Data */
                            wp_reset_postdata();
                        } else {
                            // no posts found
                            echo 'No Career Path found';
                        }
                        ?>
                    </div>
                </div>
        </section>
    </div>
</div>
<?php wp_enqueue_script('jquery'); ?>
<script>
jQuery('document').ready(function(){
    jQuery('#CareerPaths').change(function(){
        var postid = jQuery(this).find(':selected').data('postid');
        if(postid==0)
        {
            jQuery(".table-container .table-row").removeClass('d-none');
        }
        else
        {
            jQuery('.table-container .table-row').addClass('d-none');
            jQuery('.table-container .table-row.heading').removeClass('d-none');
            jQuery('.table-container .table-row.' + postid).removeClass('d-none'); 
        }
        var offset = jQuery('.table-container').offset().top-250;
        jQuery('html, body').animate({
            scrollTop: offset
        }, 'slow');
        jQuery(".roles-based-solutions").css("margin-bottom", "-135px");
    });
    jQuery('.viewall').click(function() {
        jQuery(".table-container .table-row").removeClass('d-none');
        var offset = jQuery('.table-container').offset().top-250;
        jQuery('html, body').animate({
            scrollTop: offset
        }, 'slow');
    });
});
</script>


<script>
    function create_custom_dropdowns() {
    jQuery('select').each(function (i, select) {
        if (!jQuery(this).next().hasClass('dropdown-select')) {
            jQuery(this).after('<div class="dropdown-select ' + (jQuery(this).attr('class') || '') + '" tabindex="0"><span class="current"></span><div class="list"><ul></ul></div></div>');
            var dropdown = jQuery(this).next();
            var options = jQuery(select).find('option');
            var selected = jQuery(this).find('option:selected');
            dropdown.find('.current').html(selected.data('display-text') || selected.text());
            options.each(function (j, o) {
                var display = jQuery(o).data('display-text') || '';
                dropdown.find('ul').append('<li class="option ' + (jQuery(o).is(':selected') ? 'selected' : '') + '" data-value="' + jQuery(o).val() + '" data-display-text="' + display + '">' + jQuery(o).text() + '</li>');
            });
        }
    });

    jQuery('.dropdown-select ul').before('<div class="dd-search"><input id="txtSearchValue" autocomplete="off" onkeyup="filter()" class="dd-searchbox" type="text"></div>');
    }

// Event listeners

// Open/close
jQuery(document).on('click', '.dropdown-select', function (event) {
    if(jQuery(event.target).hasClass('dd-searchbox')){
        return;
    }
    jQuery('.dropdown-select').not(jQuery(this)).removeClass('open');
    jQuery(this).toggleClass('open');
    if (jQuery(this).hasClass('open')) {
        jQuery(this).find('.option').attr('tabindex', 0);
        jQuery(this).find('.selected').focus();
    } else {
        jQuery(this).find('.option').removeAttr('tabindex');
        jQuery(this).focus();
    }
});

// Close when clicking outside
jQuery(document).on('click', function (event) {
    if (jQuery(event.target).closest('.dropdown-select').length === 0) {
        jQuery('.dropdown-select').removeClass('open');
        jQuery('.dropdown-select .option').removeAttr('tabindex');
    }
    event.stopPropagation();
});

function filter(){
    var valThis = jQuery('#txtSearchValue').val();
    jQuery('.dropdown-select ul > li').each(function(){
     var text = jQuery(this).text();
        (text.toLowerCase().indexOf(valThis.toLowerCase()) > -1) ? jQuery(this).show() : jQuery(this).hide();         
   });
};
// Search

// Option click
jQuery(document).on('click', '.dropdown-select .option', function (event) {
    jQuery(this).closest('.list').find('.selected').removeClass('selected');
    jQuery(this).addClass('selected');
    var text = jQuery(this).data('display-text') || jQuery(this).text();
    jQuery(this).closest('.dropdown-select').find('.current').text(text);
    jQuery(this).closest('.dropdown-select').prev('select').val(jQuery(this).data('value')).trigger('change');
});

// Keyboard events
jQuery(document).on('keydown', '.dropdown-select', function (event) {
    var focused_option = jQuery(jQuery(this).find('.list .option:focus')[0] || jQuery(this).find('.list .option.selected')[0]);
    // Space or Enter
    //if (event.keyCode == 32 || event.keyCode == 13) {
    if (event.keyCode == 13) {
        if (jQuery(this).hasClass('open')) {
            focused_option.trigger('click');
        } else {
            jQuery(this).trigger('click');
        }
        return false;
        // Down
    } else if (event.keyCode == 40) {
        if (!jQuery(this).hasClass('open')) {
            jQuery(this).trigger('click');
        } else {
            focused_option.next().focus();
        }
        return false;
        // Up
    } else if (event.keyCode == 38) {
        if (!jQuery(this).hasClass('open')) {
            jQuery(this).trigger('click');
        } else {
            var focused_option = jQuery(jQuery(this).find('.list .option:focus')[0] || jQuery(this).find('.list .option.selected')[0]);
            focused_option.prev().focus();
        }
        return false;
        // Esc
    } else if (event.keyCode == 27) {
        if (jQuery(this).hasClass('open')) {
            jQuery(this).trigger('click');
        }
        return false;
    }
});

jQuery(document).ready(function () {
    create_custom_dropdowns();
});
</script>
<style>
select {
    display: none !important;
}
.dropdown-select {
    background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0) 100%);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#40FFFFFF', endColorstr='#00FFFFFF', GradientType=0);
    background-color: #fff;
    border-radius: 6px;
    border: solid 1px #eee;
    box-shadow: 0px 2px 5px 0px rgba(155, 155, 155, 0.5);
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    float: left;
    font-size: 14px;
    font-weight: normal;
    height: 42px;
    line-height: 40px;
    outline: none;
    padding-left: 18px;
    padding-right: 30px;
    position: relative;
    text-align: left !important;
    transition: all 0.2s ease-in-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    white-space: nowrap;
    width: auto;

}

.dropdown-select:focus {
    background-color: #fff;
}

.dropdown-select:hover {
    background-color: #fff;
}

.dropdown-select:active,
.dropdown-select.open {
    background-color: #fff !important;
    border-color: #bbb;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05) inset;
}

.dropdown-select:after {
    height: 0;
    width: 0;
    border-left: 4px solid transparent;
    border-right: 4px solid transparent;
    border-top: 4px solid #777;
    -webkit-transform: origin(50% 20%);
    transform: origin(50% 20%);
    transition: all 0.125s ease-in-out;
    content: '';
    display: block;
    margin-top: -2px;
    pointer-events: none;
    position: absolute;
    right: 10px;
    top: 50%;
}

.dropdown-select.open:after {
    -webkit-transform: rotate(-180deg);
    transform: rotate(-180deg);
}

.dropdown-select.open .list {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1;
    pointer-events: auto;
}

.dropdown-select.open .option {
    cursor: pointer;
}

.dropdown-select.wide {
    width: 100%;
}

.dropdown-select.wide .list {
    left: 0 !important;
    right: 0 !important;
}

.dropdown-select .list {
    box-sizing: border-box;
    transition: all 0.15s cubic-bezier(0.25, 0, 0.25, 1.75), opacity 0.1s linear;
    -webkit-transform: scale(0.75);
    transform: scale(0.75);
    -webkit-transform-origin: 50% 0;
    transform-origin: 50% 0;
    box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.09);
    background-color: #fff;
    border-radius: 6px;
    margin-top: 4px;
    padding: 3px 0;
    opacity: 0;
    overflow: hidden;
    pointer-events: none;
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 999;
    max-height: 250px;
    overflow: auto;
    border: 1px solid #ddd;
}

.dropdown-select .list:hover .option:not(:hover) {
    background-color: transparent !important;
}
.dropdown-select .dd-search{
  overflow:hidden;
  display:flex;
  align-items:center;
  justify-content:center;
  margin:0.5rem;
}

.dropdown-select .dd-searchbox{
  width:90%;
  padding:0.5rem;
  border:1px solid #999;
  border-color:#999;
  border-radius:4px;
  outline:none;
}
.dropdown-select .dd-searchbox:focus{
  border-color:#12CBC4;
}

.dropdown-select .list ul {
    padding: 0;
}

.dropdown-select .option {
    cursor: default;
    font-weight: 400;
    line-height: 40px;
    outline: none;
    padding-left: 18px;
    padding-right: 29px;
    text-align: left;
    transition: all 0.2s;
    list-style: none;
}

.dropdown-select .option:hover,
.dropdown-select .option:focus {
    background-color: #f6f6f6 !important;
}

.dropdown-select .option.selected {
    font-weight: 600;
    color: #12cbc4;
}

.dropdown-select .option.selected:focus {
    background: #f6f6f6;
}

.dropdown-select a {
    color: #aaa;
    text-decoration: none;
    transition: all 0.2s ease-in-out;
}

.dropdown-select a:hover {
    color: #666;
}
</style>
<?php
get_footer();
?>
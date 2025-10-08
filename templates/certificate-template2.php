<?php
/*
*    Template Name: CertificatesTemplateV3
*/	
//echo "<pre>";
$workdomains = [];
$terms = get_field('categories_order');
if( $terms ){ 
  foreach( $terms as $term ){
    $workdomains [] = $term->slug;
  }
}

//$workdomains = ['ai-data', 'application-development', 'security', 'cloud', 'blockchain-bitcoin', 'business-process',  'business', 'design', 'specialization', 'learning-education', 'essentials'];

// Define the category slugs
//$workdomains = ['technology', 'business-leadership', 'design-creative', 'industry-specializations'];


get_header();
	?>	
  <!--Header End-->
<div class="middle-section">
  <div class="inner-page certification-page">
<section class="cert-spec-section pb-2 d-flex justify-content-center align-items-center">
<div class="container">
      <div class="row">
        <div class="col-lg-12">
            <h1 class="cmn-hd mb-5" data-aos="fade-up" data-aos-duration="1000">Premier Certifications</h1>
        </div>
      </div>
</div>
</section>


<?php     
foreach ($workdomains as $slug) {
    $main_category = get_category_by_slug($slug);

    if ($main_category) {
        ?>
        
        <section class="cert-catlist" id="<?php echo $slug; ?>">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="esteemed-partners-cnt">
                  <h2 class="cmn-hd mb-4" data-aos="fade-up" data-aos-duration="1000"><?php echo esc_html($main_category->name); ?></h2>

                      <div class="partners-desc-area mb-5" data-aos="fade-up" data-aos-duration="1000">
                      </div>
                      <div class="row">
                        <?php echo do_shortcode('[courses_by_category category="'. $slug .'"]'); ?>
                      </div>
                    
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php 
    } 
}
?>

<?php  /*   
foreach ($workdomains as $slug) {
    $main_category = get_category_by_slug($slug);

    if ($main_category) {
        $main_category_id = $main_category->term_id;

        $args = array(
            'parent' => $main_category_id,
            'hide_empty' => false 
        );
        $subcategories = get_categories($args);
        ?>
        
        <section class="cmn-section esteemed-partners-section">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="esteemed-partners-cnt">
                  <h2 class="cmn-hd mb-4" data-aos="fade-up" data-aos-duration="1000"><?php echo esc_html($main_category->name); ?></h2>
                  <?php     
                  if (!empty($subcategories)) { 
                    foreach ($subcategories as $subcategory) { ?>
                      <h2 class="cmn-hd mb-4 subcat-title" data-aos="fade-up" data-aos-duration="1000"><?php echo esc_html($subcategory->name); ?></h2>
                      <div class="partners-desc-area mb-5" data-aos="fade-up" data-aos-duration="1000">
                      </div>
                      <div class="row">
                        <?php echo do_shortcode('[courses_by_category category="'. $subcategory->slug .'"]'); ?>
                      </div>
                    <?php } ?>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php 
    } 
} */
?>
<script>
jQuery(document).ready(function() {
    // Function to scroll to the target element with smooth behavior
    function scrollToHash() {
        var hash = window.location.hash;
        if (hash) {
            var targetElement = jQuery(hash);
            if (targetElement.length) {
                jQuery('html, body').animate({
                    scrollTop: targetElement.offset().top - 170
                }, 800);
            }
        }
    }

    // Scroll to the section if URL contains a hash on load
    scrollToHash();

    // Add click event listeners to menu items
    jQuery('#menu-footer-certification-menu a').on('click', function(event) {
        event.preventDefault();
        var targetId = this.hash;
        var targetElement = jQuery(targetId);
        if (targetElement.length) {
            window.history.pushState(null, null, targetId);
            jQuery('html, body').animate({
                scrollTop: targetElement.offset().top - 170
            }, 800);
        }
    });

    // Handle back/forward navigation
    jQuery(window).on('hashchange', function() {
        scrollToHash();
    });
});

</script>
<?php
get_footer();
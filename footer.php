<?php //include_once get_template_directory() . "/inc/popup-cta.php"; ?>
<?php if ( ! is_404() ) : ?>
<?php 
$footer_type = get_field('footer_type'); 
$copyright = get_field('copyright_text','options');
if(!empty($footer_type) && $footer_type == 'Footer_1')
{
   ob_start();
?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer_info text-center">
                    <p><?php echo $copyright; ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php
}
else if(!empty($footer_type) && $footer_type == 'Footer_2') {
   include_once "footers/footer_2.php";
}
else { ?>
<footer class="footer-section">
   <div class="container maxwidth">
      <div class="row">
         <div class="col-xl-3 col-md-12">
            <div class="mb-5">
            <?php $headerlogo = get_field('header_logo', 'option'); ?>
            <?php $headerlogo_black = get_field('header_logo_black', 'option'); ?>
				<a href="<?php echo get_home_url(); ?>"> 
                    <?php if (!isset($_COOKIE['theme']) || $_COOKIE['theme'] == '0') { ?>
                        <img class="navbar-logo"  src="<?php echo $headerlogo_black; ?>" alt="AI CERTs Logo – Advancing AI Certification Excellence">
                    <?php } else { ?>
                        <img class="navbar-logo"  src="<?php echo $headerlogo; ?>" alt="AI CERTs Logo – Advancing AI Certification Excellence">
                    <?php } ?>
                </a>
            </div>
            <div class="ftr-newsletter">
               <h3>Newsletter Signup</h3>
               <div class="position-relative">                  
                  <!-- <input type="email" class="emailfield" placeholder="Enter Your Email Address"><input class="ftr-submitbtn" type="submit" value=""> -->
                  <?php //echo do_shortcode('[contact-form-7 id="51617ad" title="Subscription Form"]'); ?>
                  <?php 
                  $newsletter_subscription_form = get_field('subscription_form', 'option');
                  echo do_shortcode($newsletter_subscription_form); ?>
                  
                  <p class="captcha_hide_text">This site is protected by reCAPTCHA and the Google
                  <a href="https://policies.google.com/privacy">Privacy Policy</a> and
                  <a href="https://policies.google.com/terms">Terms of Service</a> apply.</p>

               </div>
               <div class="ftr-social">

                  <?php
                     // Check if the repeater field exists
                     if ( have_rows('social_media','option') ) {
                      // Loop through the repeater field   
                     while ( have_rows('social_media','option') ) {the_row();
                        // Get the values of the sub fields
                        $social_icon = get_sub_field('social_icon');
                        $social_link = get_sub_field('social_link');
                        if ( !empty($social_icon) ) {
                     ?>
                     <a href="<?php echo $social_link;?>" target="_blank">
                     <img src="<?php echo $social_icon['url']; ?>" alt="<?php echo $social_icon['alt']; ?>" />
                        </a>
                     <?php
                        }
                     }
                     }
                     ?>
               </div>
            </div>
         </div>
		 <div class="col-xl-9 col-md-12">
			<div class="footerrowlinks">
				<div class="footercols">
            <h3 class="cmn-hd">About</h3>
            <?php  
               wp_nav_menu(array(
                   'theme_location'=> 'menu-footer-one', 
                   'menu_class'    => 'ftr-link',
                   'depth'         => 3, // specify the depth for multilevel menu 
               )); 
               ?>
         </div>
         <div class="footercols">
            <h3 class="cmn-hd">Certifications</h3>
            <?php  
               wp_nav_menu(array(
                   'theme_location'=> 'menu-footer-two', 
                   'menu_class'    => 'ftr-link',
                   'depth'         => 3, // specify the depth for multilevel menu 
               )); 
            ?>
         </div>
         <div class="footercols">
            <h3 class="cmn-hd">Authorized Partner</h3>
            <?php  
               wp_nav_menu(array(
                   'theme_location'=> 'menu-footer-three', 
                   'menu_class'    => 'ftr-link',
                   'depth'         => 3, // specify the depth for multilevel menu 
               )); 
               ?>
         </div>

         <div class="footercols">
            <h3 class="cmn-hd">Certifications Policies</h3>
            <?php  
               wp_nav_menu(array(
                   'theme_location'=> 'menu-footer-four', 
                   'menu_class'    => 'ftr-link',
                   'depth'         => 3, // specify the depth for multilevel menu 
               )); 
               ?>
         </div>

        </div>
		 </div>
         
		 
		 
      </div>
   </div>
   <div class="copyright">
      <div class="container maxwidth">
         <div class="row">
            <div class="col-lg-12"><?php echo $copyright; ?></div>
         </div>
      </div>
   </div>
</footer>
<?php 
}
?>
</div>
<?php endif; ?>
<script src="<?php echo esc_url(get_template_directory_uri()."/js/jquery-3.7.1.min.js"); ?>" ></script>
<script src="<?php echo esc_url(get_template_directory_uri()."/js/bootstrap.bundle.min.js"); ?>" defer></script>
<script src="<?php echo esc_url(get_template_directory_uri()."/js/owl.carousel.js"); ?>"></script>
<script src="<?php echo esc_url(get_template_directory_uri()."/js/aos.js"); ?>" ></script>
<script src="<?php echo esc_url(get_template_directory_uri()."/js/easyResponsiveTabs.js"); ?>" defer></script> 
<?php /* <script src="<?php echo esc_url(get_template_directory_uri()."/js/custom.js"); ?>" defer></script>  */ ?>
<script>
   AOS.init({
     easing: 'ease-in-out-sine'
   });
</script>

<?php wp_footer(); ?>

<script>
   //$('document').ready(function() {
    
    //if(!$('body').hasClass('home')){$("ul#menu-main-menu li:first-child a").removeClass("active");}
    //selectCountry_code();
         
 //}, 5000);
 //wpcf7.cached = 0;
 $('.training-partner-form', '.become-trainer-btn' ).click(selectCountry_code());
 function selectCountry_code(){
    $(".country-select input").val($(".selected-flag").attr("title"));
    $(".wpcf7-phonetext").val($(".wpcf7-phonetext-country-code").val()); 
 }
 $(document).ready(function() {
    var searchPattern = /AI\+/ig; // Case-insensitive regex for 'AI+'
    var replacement = '<span class="custom-ai-text">AI<sup>+</sup></span>';

    $('h1.certification-title').html(function(index, oldHtml) {
        return oldHtml.replace(searchPattern, replacement);
    });

    //Superscript
    var searchPattern = /AI\⁺/ig; // Case-insensitive regex for 'AI+'
    var replacement = '<span class="custom-ai-text">AI⁺</span>';

    $('h1.certification-title').html(function(index, oldHtml) {
        return oldHtml.replace(searchPattern, replacement);
    });

    var searchPattern1 = /Bitcoin\+/ig; // Case-insensitive regex for 'Bitcoin+'
    var replacement1 = '<span class="custom-ai-text">Bitcoin<sup>+</sup></span>';

    $('h1.certification-title').html(function(index1, oldHtml1) {
        return oldHtml1.replace(searchPattern1, replacement1);
    });

    //superscript
    var searchPattern1 = /Bitcoin\⁺/ig; // Case-insensitive regex for 'Bitcoin+'
    var replacement1 = '<span class="custom-ai-text">Bitcoin⁺</span>';

    $('h1.certification-title').html(function(index1, oldHtml1) {
        return oldHtml1.replace(searchPattern1, replacement1);
    });

    var searchPattern2 = /Blockchain\+/ig; // Case-insensitive regex for 'Blockchain+'
    var replacement2 = '<span class="custom-ai-text">Blockchain<sup>+</sup></span>';

    $('h1.certification-title').html(function(index2, oldHtml2) {
        return oldHtml2.replace(searchPattern2, replacement2);
    });

    //superscript
    var searchPattern2 = /Blockchain\⁺/ig; // Case-insensitive regex for 'Blockchain+'
    var replacement2 = '<span class="custom-ai-text">Blockchain⁺</span>';

    $('h1.certification-title').html(function(index2, oldHtml2) {
        return oldHtml2.replace(searchPattern2, replacement2);
    });
    
});
</script>

<script>
jQuery(document).ready(function($){
    $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
        var $el = $(this);
        var $parent = $(this).offsetParent(".dropdown-menu");
        if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
        }
        var $subMenu = $(this).next(".dropdown-menu");
        $subMenu.toggleClass('show');
        
        $(this).parent("li").toggleClass('show');

        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
            $('.dropdown-menu .show').removeClass("show");
        });

        if (!$parent.parent().hasClass('navbar-nav')) {
            if ($parent.css("position") != "static") {
                $el.next().css({ "top": $el[0].offsetTop, "left": $parent.outerWidth() - 4 });
            } else {
                $el.next().css({ "top": $el[0].offsetTop, "left": $parent.outerWidth() - 4 });
            }
        }
        return false;
    });
});
</script>
<?php /*
<script>
    window.GPTTConfig = {
        uuid: "c489775bb3824445b3291d6be38a23fb",
        domain: "app.xbot365.io"
    }
</script>
<script
    src="https://app.xbot365.io/widget-asset.min.js"
    defer>
</script>

<!-- <script>
    window.GPTTConfig = {
        uuid: "d6e9921dc6f54303b5425a8600123fdc"
    }
</script>
<script
    src="
https://app.gpt-trainer.com/widget-asset.min.js"
    defer>
</script> --> */ ?>
<?php /* <script src='//in.fw-cdn.com/32032354/1079421.js' chat='true' widgetId='96f480d7-7393-4840-be53-f4e833dcd9eb' defer></script> */ ?>
<script>
    window.GPTTConfig = {
        uuid: "03be73aa6e654a928fb539d40cce110a",
        domain: "app.xbot365.io"
    }
</script>
<script
    src="https://app.xbot365.io/widget-asset.min.js"
    defer>
</script>

</body>
<!-- InstanceEnd --></html>
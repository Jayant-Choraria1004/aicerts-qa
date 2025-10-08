<footer class="footer-section">
   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
            <div class="mb-5">
            <?php $headerlogo = get_field('header_logo', 'option'); ?>
				<a href="<?php echo get_home_url(); ?>"> <img class="navbar-logo" src="<?php echo esc_url( $headerlogo ); ?>" alt="AI CERTs" /></a>
            </div>
         </div>
         <div class="col-lg-4 col-md-4 aos-init aos-animate" data-aos="fade-down" data-aos-duration="1000">           
           AICT Page URL
         </div>
         <div class="col-lg-4 col-md-4 aos-init aos-animate" data-aos="fade-down" data-aos-duration="1000">
            <div class="ftr-social">
    
                <?php
                // Check if the repeater field exists
                if ( have_rows('social_media','option') ) {
                    // Loop through the repeater field   
                    while ( have_rows('social_media','option') ) {
                        the_row();
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
   </div>
   <div class="copyright">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">Copyright &copy; AI Certs&trade;, Inc. All Rights Reserved</div>
         </div>
      </div>
   </div>
</footer>
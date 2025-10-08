<!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<?php /* <div class="search-form searchbar-mainnav">
		<form role="search" method="get" id="searchform" class="searchform form" action="#">
			<input type="search" name="q" id="q" value="<?php echo $search_query; ?>" placeholder="Search …" class="form-control">
			<input type="submit" id="searchsubmit" value="" class="searchbtn">
		</form>
	</div> */ ?>
    <?php if ( shortcode_exists( 'aisearch2_form_sc' ) ) {
        echo do_shortcode('[aisearch2_form_sc]'); 
    } ?>
    <?php //wp_nav_menu(array('theme_location' => 'menu-header', 'container' => false, 'menu_class' => 'navbar-nav', 'add_a_class' => 'nav-link', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 'walker' => new Child_Wrap())); 
    ?>

    <?php
    wp_nav_menu(array(
        'theme_location' => 'menu-header',
        'depth' => 4, // Set to 3 for a 3-level menu
        'container_id' => false,
        'menu_class' => 'nav navbar-nav',
        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
        'walker' => new WP_Bootstrap_Navwalker(),
    ));
    // wp_nav_menu(array(
    //     'theme_location'=> 'menu-header', 
    //     'menu_class'    => 'main-menu',
    //     'depth'         => 3, // specify the depth for multilevel menu 
    // )); 
    ?>
    <?php include get_template_directory() . "/inc/menu_cta.php"; ?>

</div>
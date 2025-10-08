<?php
/**
 * Functions and definitions
 *
 */

 require_once get_template_directory() . '/inc/inc_functions_1.php';
 
//  function add_last_nav_item($items) {
//   if(wp_is_mobile())
//   {
//     $cta_button_text = get_field('cta_button_text', 'options');
//     $cta_link = get_field('cta_link', 'option');
//     $items = "";
//     if (!empty($cta_button_text)) {
//           $items .= "<div class='topright-btn'>";
//           $items .= do_shortcode('[themeswitch]');
//           $items .= '<a href="'. $cta_link .'" class="btn btn-primary">' . $cta_button_text . '</a></div>';
//     }
//     return $items;
//   }
// }
// add_filter('wp_nav_menu_items','add_last_nav_item');

 require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

 add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}

class Multi_Level_Menu_Walker extends Walker_Nav_Menu {
  // Start Level
  function start_lvl(&$output, $depth = 0, $args = array()) {
      
       
      $indent = str_repeat("\t", $depth);
      $submenu_id = !empty($args->submenu_id) ? ' id="' . $args->submenu_id . '"' : '';
      $output .= "\n$indent<div class=\"subMenu\"{$submenu_id}><div class=\"backTrigger\"><i class=\"fas fa-arrow-left icon\"></i> Back</div><ul>\n";
  }

  // End Level
  function end_lvl(&$output, $depth = 0, $args = array()) {
      $indent = str_repeat("\t", $depth);
      $output .= "$indent</ul></div>\n";
  }

  // Start Element
  function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
      $indent = ($depth) ? str_repeat("\t", $depth) : '';
      $class_names = $value = '';

      $classes = empty($item->classes) ? array() : (array) $item->classes;
      $classes[] = 'menu-item-' . $item->ID;

      if (in_array('menu-item-has-children', $classes)) {
          $classes[] = 'hasSubMenu';
          $data_target = ' data-target="#' . sanitize_title($item->title) . '-tab"';
      } else {
          $data_target = '';
      }

      $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
      $class_names = ' class="' . esc_attr($class_names) . '"';

      $id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args);
      $id = $id ? ' id="' . esc_attr($id) . '"' : '';

      $output .= $indent . '<li' . $id . $value . $class_names . $data_target .'>';

      $atts = array();
      $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
      $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
      $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
      $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

      $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

      $attributes = '';
      foreach ( $atts as $attr => $value ) {
          if ( ! empty( $value ) ) {
              $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
              $attributes .= ' ' . $attr . '="' . $value . '"';
          }
      }

      $item_output = $args->before;
      $item_output .= '<div class="trigger"><a'. $attributes .'>';
      $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
      if (in_array('menu-item-has-children', $classes)) {
          $item_output .= ' <i class="fas fa-arrow-right"></i>';
      }
      $item_output .= '</a></div>';
      $item_output .= $args->after;

      $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }

  // End Element
  function end_el(&$output, $item, $depth = 0, $args = array()) {
      $output .= "</li>\n";
  }
}


 class Child_Wrap extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n<div class='dropdown-menu'>$indent<ul>\n";
    }

    function end_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div>\n";
    }
}   


function add_additional_class_on_a($classes, $item, $args)
{
	
    if (isset($args->add_a_class)) {
      
      if($item->menu_item_parent!=0 && !in_array('dropdown', $item->classes))
      {
        $classes['class'] = 'dropdown-item';
        
        if(in_array('dropend', $item->classes))
        {
          $classes['class'] = 'dropdown-item dropdown-toggle';
        }
      }
      else if($item->menu_item_parent!=0 || in_array('dropdown', $item->classes) || in_array('dropend', $item->classes)) {
        $classes['class'] = $args->add_a_class .' dropdown-toggle';
      }
      else {
        $classes['class'] = $args->add_a_class;
      }
    }
    return $classes;
}
//add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

/*
 * Let WordPress manage the document title.
 */
add_theme_support('title-tag');

/*
 * Enable support for Post Thumbnails on posts and pages.
 */
add_theme_support('post-thumbnails');

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support('html5', array(
  'search-form',
  'comment-form',
  'comment-list',
  'gallery',
  'caption',
));





/** 
 * Include primary navigation menu
 */
function htmlwp_nav_init()
{
  register_nav_menus(
    array(
      'menu-header' => 'Header Menu',
      'menu-footer' => 'Footer Menu',
      'menu-footer-one' => 'Footer Menu One',
      'menu-footer-two' => 'Footer Menu Two',
      'menu-footer-three' => 'Footer Menu Three',
      'menu-footer-four' => 'Footer Menu Four',
    ));
}
add_action('init', 'htmlwp_nav_init');



/**
 * Register widget area.
 *
 */
function htmlwp_widgets_init()
{
  register_sidebar(
    array(
      'name' => 'Sidebar',
      'id' => 'sidebar-1',
      'description' => 'Add widgets',
      'before_widget' => '<section id="%1" class="widget %2">',
      'after_widget' => '</section>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'htmlwp_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function htmlwp_scripts()
{
  wp_enqueue_style('htmlwp-style', get_stylesheet_uri());
  wp_enqueue_script('jquery');

  wp_enqueue_script('custom-ajax-script', get_template_directory_uri() . '/js/custom.js', array('jquery'), null, true);

  // Localize script to make `ajaxurl` available
  wp_localize_script('custom-ajax-script', 'ajax_object', array(
    'ajax_url' => admin_url('admin-ajax.php')
  ));
}
add_action('wp_enqueue_scripts', 'htmlwp_scripts');

// function htmlwp_create_post_custom_post()
// {
//   register_post_type(
//     'custom_post',
//     array(
//       'labels' => array(
//         'name' => __('Custom Post', 'htmlwp'),
//       ),
//       'public' => true,
//       'hierarchical' => true,
//       'supports' => array(
//         'title',
//         'editor',
//         'excerpt',
//         'custom-fields',
//         'thumbnail',
//       ),
//       'taxonomies' => array(
//         'post_tag',
//         'category',
//       )
//     )
//   );
// }
// add_action('init', 'htmlwp_create_post_custom_post'); // Add our work type

// Disable default image sizes
add_filter( 'intermediate_image_sizes', 'remove_default_img_sizes', 10, 1);

function remove_default_img_sizes( $sizes ) {
  $targets = ['medium', 'thumbnail', 'large'];

  foreach($sizes as $size_index=>$size) {
    if(in_array($size, $targets)) {
      unset($sizes[$size_index]);
    }
  }

  return $sizes;
}


function allow_svg_upload($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

add_filter('upload_mimes', 'allow_svg_upload');


// Register Custom Post Type
function custom_post_type_courses() {

  $labels = array(
      'name'                  => _x( 'Courses', 'Post Type General Name', 'text_domain' ),
      'singular_name'         => _x( 'Course', 'Post Type Singular Name', 'text_domain' ),
      'menu_name'             => __( 'Courses', 'text_domain' ),
      'name_admin_bar'        => __( 'Course', 'text_domain' ),
      'archives'              => __( 'Course Archives', 'text_domain' ),
      'attributes'            => __( 'Course Attributes', 'text_domain' ),
      'parent_item_colon'     => __( 'Parent Course:', 'text_domain' ),
      'all_items'             => __( 'All Courses', 'text_domain' ),
      'add_new_item'          => __( 'Add New Course', 'text_domain' ),
      'add_new'               => __( 'Add New', 'text_domain' ),
      'new_item'              => __( 'New Course', 'text_domain' ),
      'edit_item'             => __( 'Edit Course', 'text_domain' ),
      'update_item'           => __( 'Update Course', 'text_domain' ),
      'view_item'             => __( 'View Course', 'text_domain' ),
      'view_items'            => __( 'View Courses', 'text_domain' ),
      'search_items'          => __( 'Search Course', 'text_domain' ),
      'not_found'             => __( 'Not found', 'text_domain' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
      'featured_image'        => __( 'Featured Image', 'text_domain' ),
      'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
      'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
      'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
      'insert_into_item'      => __( 'Insert into Course', 'text_domain' ),
      'uploaded_to_this_item' => __( 'Uploaded to this Course', 'text_domain' ),
      'items_list'            => __( 'Courses list', 'text_domain' ),
      'items_list_navigation' => __( 'Courses list navigation', 'text_domain' ),
      'filter_items_list'     => __( 'Filter Courses list', 'text_domain' ),
  );
  $args = array(
      'label'                 => __( 'Course', 'text_domain' ),
      'description'           => __( 'Post Type Description', 'text_domain' ),
      'labels'                => $labels,
      'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'author' ),
      'taxonomies'            => array( 'category', 'post_tag' ),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'menu_icon'             => 'dashicons-welcome-learn-more',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,
      // 'rewrite'               => array(
      //                               'slug' => 'certifications'
      // ),
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'post',
      'show_in_rest'          => true, // Enable REST API
  );
  register_post_type( 'courses', $args );

}
add_action( 'init', 'custom_post_type_courses', 0 );


add_action('admin_head', 'admin_svg_image_show');

function admin_svg_image_show() {
  echo '<style>
  .editor-post-featured-image .components-responsive-wrapper__content{ min-width:100px; min-hight:100px;}
  </style>';
}


// Function to retrieve courses based on category
function get_courses_by_category_shortcode($atts)
{
  // Extract shortcode attributes
  $atts = shortcode_atts(
    array(
      'category' => '', // Default category slug
    ),
    $atts,
    'courses_by_category' // Shortcode name
  );
  $cat_arr = explode(",", $atts['category']);
  $query_args = array(
    'orderby' => 'date',
    'order' => 'DESC',
    'post_type' => 'courses',
    'posts_per_page' => -1,
    'tax_query' => array(
      array(
        'taxonomy' => 'category',
        'field' => 'slug',
        'terms' => $cat_arr
      )
    )
  );
  $courses = get_posts($query_args);
  ob_start();
  ?>
      <?php if ($courses) { ?>  
          <?php foreach ($courses as $post) { ?>
              <?php 
              $featured_img_url = !empty(get_the_post_thumbnail_url($post->ID, 'full')) ? get_the_post_thumbnail_url($post->ID, 'full') : get_template_directory_uri()."/images/default-image.jpg"; 
              $featured_img2 = !empty(get_field('featured_image_2', $post->ID)) ? get_field('featured_image_2', $post->ID) :  get_template_directory_uri()."/images/certification-thumb.jpg"; 
              ?>   
              <div class="col-lg-3 col-md-6 listing-box">
                <a href="<?php if (has_category('available-now', $post->ID)) {
                  echo get_permalink($post->ID);
                } else {
                  //echo "#";
                  echo get_permalink($post->ID);
                } ?>">
                    <img src="<?php echo esc_url($featured_img2); ?>" class="w-100" />
                    <div class="certi-listing-thumb">
                      <img src="<?php echo esc_url($featured_img_url); ?>"/>
                    </div>
                    <div class="certi-listing-brief">
                    <h3><?php echo get_the_title($post->ID); ?></h3>
                    <span>
                    <?php if (has_category('available-now', $post->ID)) { ?> Available Now <?php } else { ?> Coming Soon <?php } ?>
                    </span>
                  </div>
                </a> 
              </div> 

          <?php } ?>
      <?php } ?>         
  <?php
  // Return buffered content
  return ob_get_clean();
}
add_shortcode('courses_by_category', 'get_courses_by_category_shortcode');


add_filter("awsm_jobs_admin_notification_mail_attachments", "awsm_jobs_admin_notification_mail_attachments_fn", 10, 2);

function awsm_jobs_admin_notification_mail_attachments_fn($args, $applicant_details) {
  $cvdetails = array(
    array('file' => get_attached_file($applicant_details['awsm_attachment_id']))
  );
  return $cvdetails;
}

if ( ! function_exists( 'awsm_jobs_mail_content_typ_custom' ) ) {
	function awsm_jobs_mail_content_typ_custom() {
		return 'multipart/mixed';
	}
}

function limit_upload_size_limit_for_non_admin( $limit ) {
  
  // && get_post_type() == 'awsm_job_openings'
  if ( ! current_user_can( 'manage_options') ) {
    $limit = 5000000; // 1mb in bytes    
  }
  return $limit;
}
  
add_filter( 'upload_size_limit', 'limit_upload_size_limit_for_non_admin' );
  
  
function apply_wp_handle_upload_prefilter( $file ) {
  if ( ! current_user_can( 'manage_options' )) {
    $limit = 200000; // 200KB in bytes
   
    if ( $file['size'] > $limit ) {
      $file['error'] = __( 'The file you have selected is too large.', 'wp-job-manager' );
    }
  }
  return $file;
}
  
add_filter( 'wp_handle_upload_prefilter', 'apply_wp_handle_upload_prefilter' );

function custom_redirect() {
  // Check if the user is logged in
	global $post;
  if (has_category('comming-soon', get_the_ID())) {
      wp_redirect(get_permalink(292), 302);
	  exit;
  }
}
add_action('template_redirect', 'custom_redirect');


// function enable_gzip_compression() {
//     if ( !ob_start("ob_gzhandler") ) ob_start();
// }
// add_action('init', 'enable_gzip_compression');


add_filter('xmlrpc_enabled', '__return_false');
?>
<?php
// remove_action('wp_head', 'print_emoji_detection_script', 7);
// remove_action('wp_print_styles', 'print_emoji_styles');
?>
<?php
function disable_self_pingbacks(&$links) {
    foreach ($links as $l => $link)
        if (0 === strpos($link, get_option('home')))
            unset($links[$l]);
}
add_action('pre_ping', 'disable_self_pingbacks');
?>
<?php
// remove_filter('the_content', 'wpautop');
// remove_filter('the_excerpt', 'wpautop');
?>
<?php
remove_action('wp_head', 'wp_generator');
?>
<?php
function disable_embeds_code_init() {
    remove_action('rest_api_init', 'wp_oembed_register_route');
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_oembed_add_host_js');
    add_filter('embed_oembed_discover', '__return_false');
    remove_filter('pre_oembed_result', 'wp_filter_pre_oembed_result', 10);
}
add_action('init', 'disable_embeds_code_init', 9999);


add_action('admin_head', 'activity_log_page');
function activity_log_page() {
  $current_user_id = get_current_user_id();
  if ( $current_user_id != 1 ) {
  echo '<style> #toplevel_page_activity_log_page {
      display:none;
    } 
  </style>';
  }
 
  if(($_SERVER['REQUEST_URI'] == '/wp-admin/admin.php?page=activity_log_page' || $_SERVER['REQUEST_URI'] == '/admin.php?page=activity-log-settings') && $current_user_id != 1){
    echo "Error !!";
    die();
  }
}


add_action('wp_footer', function() { ?>
  <script>
  // $(document).ready(function(){
  //   $('.themeswitch').html('');
  // });
  </script>
  <?php
  if ( is_page(['publications', 'case-studies']) ) {  
?>   
  <script>
  $(document).ready(function(){
      $('.download-publications').each(function(){
          var fileUrl = $(this).data('file');
          $(this).attr('href', fileUrl);
          $(this).attr('download', '');
          $(this).removeClass('download-publications');
        
      });
  });
  $(document).ready(function(){
      $('.page-template-tpl-case-studies .download-casestudy').each(function(){
          var fileUrl = $(this).data('casefile');
          $(this).attr('href', fileUrl);
          $(this).attr('download', '');
          $(this).removeClass('download-casestudy');
        
      });
  });
  </script>
<?php
  }  
});
//add_filter( 'http_request_host_is_external', '__return_true' );
include_once "inc/dark_light_mode.php"; 

add_filter( 'body_class', 'custom_body_class' );
function custom_body_class( array $classes ) {
	$new_class = is_page() ? get_post_meta( get_the_ID(), 'body_class', true ) : null;

	if ( $new_class ) {
		$classes[] = $new_class;
	}

	return $classes;
}

// prevent WP from rendering emoji as images
add_filter( 'gform_pre_send_email', function( $email, $mesage_format, $notification, $entry ) {

  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

  return $email;

}, 10, 4 );

// Function to enable maintenance mode
function enable_maintenance_mode() {
  // Check if the user is not an admin and maintenance mode is enabled
  if ( ! current_user_can( 'manage_options' ) && get_option( 'maintenance_mode_enabled' ) ) {
      // Check if the maintenance template exists
      if ( file_exists( get_template_directory() . '/maintenance.php' ) ) {
          include( get_template_directory() . '/maintenance.php' );
          exit();
      } else {
          // Fallback message if the template does not exist
          wp_die( '<h1>Under Maintenance</h1><p>Our website is currently undergoing scheduled maintenance. Please check back soon.</p>', 'Maintenance Mode', array( 'response' => '503' ) );
      }
  }
}
add_action( 'template_redirect', 'enable_maintenance_mode' );

// Function to add settings to the admin
function maintenance_mode_settings_init() {
  // Register a new setting for "general" page
  register_setting( 'general', 'maintenance_mode_enabled', array(
      'type' => 'boolean',
      'sanitize_callback' => 'sanitize_text_field',
      'default' => false,
  ) );

  // Add a new field to the "general" page
  add_settings_field(
      'maintenance_mode_enabled_field',
      __( 'Enable Maintenance Mode', 'textdomain' ),
      'maintenance_mode_enabled_field_callback',
      'general',
      'default',
      array(
          'label_for' => 'maintenance_mode_enabled'
      )
  );
}
add_action( 'admin_init', 'maintenance_mode_settings_init' );

// Field callback function
function maintenance_mode_enabled_field_callback( $args ) {
  $maintenance_mode_enabled = get_option( 'maintenance_mode_enabled' );
  echo '<input type="checkbox" id="maintenance_mode_enabled" name="maintenance_mode_enabled" value="1"' . checked( 1, $maintenance_mode_enabled, false ) . '>';
  echo '<label for="maintenance_mode_enabled">' . esc_html__( 'Enable maintenance mode.', 'textdomain' ) . '</label>';
}

// Enqueue admin styles and scripts if needed
function maintenance_mode_admin_enqueue_scripts( $hook ) {
  if ( 'options-general.php' !== $hook ) {
      return;
  }
  wp_enqueue_style( 'maintenance-mode-admin-style', get_template_directory_uri() . '/admin-style.css' );
}
add_action( 'admin_enqueue_scripts', 'maintenance_mode_admin_enqueue_scripts' );

// add_action( 'admin_init', 'disable_tinymce_for_notifications');
// function disable_tinymce_for_notifications() {
//     if ( ( RGForms::is_gravity_page() && rgget( 'page' ) === 'gf_edit_forms' && rgget( 'view' ) === 'settings' ) && rgget( 'subview' ) === 'notification' ) {
//         add_filter( 'user_can_richedit', '__return_false' );
//     }
//   }

// function custom_modify_post_title( $title, $id = null ) {
//   // Check if we are in the main query and it's a single post
//   if ( is_singular() ) {
//     // Check if the title contains "AI text"
//     if ( stripos( $title, 'AI+' ) !== false ) {
//         // If "AI text" is found, wrap it in a <span> tag
//         $title = str_ireplace( 'AI+', '<span class="custom-ai-text">AI</span>+<br>', $title );
//     }
//   }
//   return $title;
// }
// add_filter( 'the_title', 'custom_modify_post_title', 10, 2 );

add_filter( 'gform_field_validation_10_8', 'custom_address_validation', 10, 4 );
function custom_address_validation( $result, $value, $form, $field ) {
    //address field will pass $value as an array with each of the elements as an item within the array, the key is the field id
    if ( 'address' === $field->type && $field->isRequired ) {
        GFCommon::log_debug( __METHOD__ . '(): Running.' );
        //address failed validation because of a required item not being filled out
        //do custom validation
      
        $country = rgar( $value, $field->id . '.6' );
 
        //check to see if the values you care about are filled out
        $required_inputs = array( '6' => $country);
        $empty_input = false;
 
        foreach ( $required_inputs as $input_number => $input_value ) {
            GFCommon::log_debug( __METHOD__ . '(): Is Hidden? ' . $field->get_input_property( $input_number, 'isHidden' ) );
            if ( empty( $input_value ) && ! $field->get_input_property( $input_number, 'isHidden' ) ) {
                $field->set_input_validation_state( $input_number, false ); // Only for Gravity Forms 2.5.10 or higher.
                $empty_input = true;
                GFCommon::log_debug( __METHOD__ . "(): Empty input: {$field->id}.{$input_number}" );
            }
        }
 
        if ( $empty_input ) {
            $result['is_valid'] = false;
            $result['message']  = empty( $field->errorMessage ) ? 'This field is required.' : $field->errorMessage;
        } else {
            $result['is_valid'] = true;
            $result['message']  = '';
        }
    }
    GFCommon::log_debug( __METHOD__ . '(): Returning validation result.' );
    return $result;
}

include_once "inc/training_partner_ajax.php";

function get_gravity_form_id_by_name($form_name) {
  $forms = GFAPI::get_forms();
  foreach ($forms as $form) {
      if ($form['title'] === $form_name) {
          return $form['id'];
      }
  }
  return null;
}

function gravity_form_by_name_shortcode($atts) {
  $atts = shortcode_atts(array(
      'name' => '',
  ), $atts, 'gravity_form_by_name');

  $form_id = get_gravity_form_id_by_name($atts['name']);
  if ($form_id) {
      return gravity_form($form_id, false, false, false, '', true, 1, false);
  } else {
      return 'Form not found.';
  }
}
add_shortcode('gravity_form_by_name', 'gravity_form_by_name_shortcode');


// Register Custom Post Type
function custom_post_type_events() {

  $labels = array(
      'name'                  => _x( 'Events', 'Post Type General Name', 'text_domain' ),
      'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'text_domain' ),
      'menu_name'             => __( 'Events', 'text_domain' ),
      'name_admin_bar'        => __( 'Event', 'text_domain' ),
      'archives'              => __( 'Event Archives', 'text_domain' ),
      'attributes'            => __( 'Event Attributes', 'text_domain' ),
      'parent_item_colon'     => __( 'Parent Event:', 'text_domain' ),
      'all_items'             => __( 'All Events', 'text_domain' ),
      'add_new_item'          => __( 'Add New Event', 'text_domain' ),
      'add_new'               => __( 'Add New', 'text_domain' ),
      'new_item'              => __( 'New Event', 'text_domain' ),
      'edit_item'             => __( 'Edit Event', 'text_domain' ),
      'update_item'           => __( 'Update Event', 'text_domain' ),
      'view_item'             => __( 'View Event', 'text_domain' ),
      'view_items'            => __( 'View Events', 'text_domain' ),
      'search_items'          => __( 'Search Event', 'text_domain' ),
      'not_found'             => __( 'Not found', 'text_domain' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
      'featured_image'        => __( 'Featured Image', 'text_domain' ),
      'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
      'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
      'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
      'insert_into_item'      => __( 'Insert into Event', 'text_domain' ),
      'uploaded_to_this_item' => __( 'Uploaded to this Event', 'text_domain' ),
      'items_list'            => __( 'Events list', 'text_domain' ),
      'items_list_navigation' => __( 'Events list navigation', 'text_domain' ),
      'filter_items_list'     => __( 'Filter Events list', 'text_domain' ),
  );
  $args = array(
      'label'                 => __( 'Event', 'text_domain' ),
      'description'           => __( 'Post Type Description', 'text_domain' ),
      'labels'                => $labels,
      'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
      'taxonomies'            => array( 'eventcategory' ),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'menu_icon'             => 'dashicons-welcome-learn-more',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => false,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'post',
      'show_in_rest'          => true, // Enable REST API
  );
  register_post_type( 'events', $args );

}
add_action( 'init', 'custom_post_type_events', 0 );


function create_event_taxonomy() {
    $labels = array(
        'name' => 'Eventcategories',
        'singular_name' => 'Eventcategory',
        'search_items' => 'Search Eventcategories',
        'all_items' => 'All Eventcategories',
        'parent_item' => 'Parent Eventcategory',
        'parent_item_colon' => 'Parent Eventcategory:',
        'edit_item' => 'Edit Eventcategory',
        'update_item' => 'Update Eventcategory',
        'add_new_item' => 'Add New Eventcategory',
        'new_item_name' => 'New Eventcategory Name',
        'menu_name' => 'Eventcategory'
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'eventcategory')
    );

    register_taxonomy('eventcategory', array('events'), $args);
}
add_action('init', 'create_event_taxonomy');

function get_page_id_by_slug($page_slug) {
  // Get the page object by its slug
  $page = get_page_by_path($page_slug);
  
  // Check if the page exists
  if ($page) {
      // Return the page ID
      return $page->ID;
  } else {
      // If the page doesn't exist, return false or handle the error
      return false;
  }
}


/**
 * acfe/settings/json_save
 * 
 * @string  $path         Save path
 * @array   $field_group  Field group settings
 */

//  filter('acfe/settings/json_save',                         $path);
//  filter('acfe/settings/json_save/all',                     $path, $field_group);
//  filter('acfe/settings/json_save/ID=122',                  $path, $field_group);
//  filter('acfe/settings/json_save/key=group_5f50bb1964cd4', $path, $field_group);

// Save ACF field groups as JSON
// function my_acf_json_save_point($path) {
//   // Update the path
//   $path = get_stylesheet_directory() . '/acf-json';
//   return $path;
// }
// add_filter('acf/settings/save_json', 'my_acf_json_save_point');

// // Load ACF field groups from JSON
// function my_acf_json_load_point($paths) {
//   // Remove original path (optional)
//   unset($paths[0]);
//   // Append new path
//   $paths[] = get_stylesheet_directory() . '/acf-json';
//   return $paths;
// }
// add_filter('acf/settings/load_json', 'my_acf_json_load_point');

// // get category count
 function get_cat_count_by_name($category_name) {
   $category = get_term_by('name', $category_name, 'category');
   if ($category) {
       return $category->count;
   }
}

// Example usage
// $category_slug = 'my-category'; // Replace with your specific category slug
// $category_count = get_specific_category_count_by_slug($category_slug);
// echo 'The category has ' . $category_count . ' posts.';


function fetch_posts_by_category() {
  $career_id = intval($_POST['career_id']);

  
  // $args = array(
  //     'category' => $career_id,
  //     'post_status' => 'publish'
  // );
  
  // $posts = get_posts($args);
  
  // if ($posts) {
  //     foreach ($posts as $post) {
  //         setup_postdata($post);
  //         echo '<h2>' . get_the_title() . '</h2>';
  //         echo '<div>' . get_the_excerpt() . '</div>';
  //     }
  //     wp_reset_postdata();
  // } else {
  //     echo 'No posts found.';
  // }
  
  wp_die();
}

add_action('wp_ajax_fetch_posts_by_category', 'fetch_posts_by_category');
add_action('wp_ajax_nopriv_fetch_posts_by_category', 'fetch_posts_by_category');
// Add a custom menu item to the admin bar
function add_acf_field_groups_admin_bar($wp_admin_bar) {
  // Only show the menu item when editing a page or post
  if (is_admin() && ($screen = get_current_screen()) && in_array($screen->base, ['post', 'page'])) {
      global $post;
      
      // Get all ACF field groups
      $field_groups = acf_get_field_groups();

      // Get the current post type
      $post_type = $post->post_type;

      // Parent menu item
      $wp_admin_bar->add_node([
          'id'    => 'acf_field_groups',
          'title' => __('Associated ACF Field Groups'),
          'href'  => '#'
      ]);

      // Add field groups as sub-menu items
      foreach ($field_groups as $field_group) {
          $locations = $field_group['location'];
          foreach ($locations as $location) {
              foreach ($location as $rule) {
                  if (($rule['param'] == 'post_type' && $rule['operator'] == '==' && $rule['value'] == $post_type) ||
                      ($rule['param'] == 'page_template' && $rule['operator'] == '==' && $rule['value'] == get_page_template_slug($post->ID))) {
                      $wp_admin_bar->add_node([
                          'id'     => 'acf_field_group_' . $field_group['key'],
                          'parent' => 'acf_field_groups',
                          'title'  => $field_group['title'],
                          'href'   => get_edit_post_link($field_group['ID'])
                      ]);
                  }
              }
          }
      }
  }
}
add_action('admin_bar_menu', 'add_acf_field_groups_admin_bar', 100);

function after_gravity_init() {

  function get_gravity_form_id_by_title($form_title) {
    $forms = GFAPI::get_forms(); // Get all forms
    foreach ($forms as $form) {
        if ($form['title'] == $form_title) {
            return $form['id']; // Return the ID of the form that matches the title
        }
    }
    return null; // Return null if no form with the given title is found
  }
  
  $form_id = get_gravity_form_id_by_title('Advisory Board Application Form');
  
  if ($form_id) {
    add_filter('gform_field_validation_' . $form_id, 'validate_linkedin_url', 10, 4);
  } 
}

add_action('gform_loaded', 'after_gravity_init');

function validate_linkedin_url($result, $value, $form, $field) {

    $form_id = $form['id']; // Get the current form ID
    
    if ($form_id == $form_id  && $field->id == 12) {
        if (!preg_match('/^(https?:\/\/)?(www\.)?linkedin\.com\/.+$/', $value)) {
            $result['is_valid'] = false;
            $result['message'] = 'Please enter a valid LinkedIn URL( https://linkedin.com/username).';
        }
    }
    return $result;
  }


function add_custom_column_to_cpt($columns) {
    $columns['custom_column'] = 'Course';
    return $columns;
}
add_filter('manage_edit-customer-testimonial_columns', 'add_custom_column_to_cpt'); // Replace 'movie' with your post type slug

function populate_custom_column($column, $post_id) {
    if ($column === 'custom_column') {
        $courseid = get_post_meta($post_id, 'course_taken_by_student', true);
        echo get_the_title($courseid);
    }
}
add_action('manage_customer-testimonial_posts_custom_column', 'populate_custom_column', 10, 2); // Replace 'movie' with your post type slug

function make_custom_column_sortable($sortable_columns) {
    $sortable_columns['custom_column'] = 'custom_column';
    return $sortable_columns;
}
add_filter('manage_edit-customer-testimonial_sortable_columns', 'make_custom_column_sortable');

function custom_column_sorting($query) {
    if (!is_admin()) {
        return;
    }

    $orderby = $query->get('orderby');
    if ($orderby === 'custom_column') {
        $query->set('meta_key', 'course_taken_by_student');
        $query->set('orderby', 'meta_value');
    }
}
add_action('pre_get_posts', 'custom_column_sorting');

// For Find a partner page
function load_partners() {
  // Get current page from AJAX request
  $paged = isset($_POST['page']) ? $_POST['page'] : 1;
  $search_query = isset($_POST['search']) ? sanitize_text_field($_POST['search']) : '';
  $certification = isset($_POST['certification']) ? sanitize_text_field($_POST['certification']) : '';
  $partner_type = isset($_POST['partner_type']) ? sanitize_text_field($_POST['partner_type']) : '';
  $country = isset($_POST['country']) ? sanitize_text_field($_POST['country']) : '';
  $language = isset($_POST['language']) ? sanitize_text_field($_POST['language']) : '';
  
  $meta_query = ['relation' => 'AND'];
  $tax_query = [];

  if (!empty($certification)) {
    $meta_query[] = [
      'key'     => 'select_certificate',
      'value'   => $certification,
      'compare' => 'LIKE'
    ];
  }
  if (!empty($country)) {
    $meta_query[] = [
      'key'     => 'locations',
      'value'   => '"' . $country . '"',
      'compare' => 'LIKE'
    ];
  }
  if (!empty($language)) {
    $meta_query[] = [
      'key'     => 'language',
      'value'   => $language,
      'compare' => 'LIKE'
    ];
  }

  // Partner Type Filtering
  if (!empty($partner_type)) {
    $tax_query[] = [
      'taxonomy' => 'partnercategories',
      'field'    => 'term_id',
      'terms'    => $partner_type,
    ];
  }

  if (!empty($search_query)) {
    $meta_query[] = [
        'relation' => 'OR',
        [
            'key'     => 'about_partner',
            'value'   => $search_query,
            'compare' => 'LIKE'
        ]
    ];
  }

  $args = array(
      'post_type'      => 'partner',
      'posts_per_page' => 10,
      'paged'          => $paged,
      //'s'              => !empty($search_query) ? $search_query : '',
      'meta_query'     => count($meta_query) > 1 ? $meta_query : [],
      'post_status'    => 'publish',
  );

  // Add taxonomy filter if set
  if (!empty($tax_query)) {
    $args['tax_query'] = $tax_query;
  }

  $query = new WP_Query($args);
  $total_pages = $query->max_num_pages;
  $count = 1;
  if ($query->have_posts()) :
      echo '<div class="accordion" id="partner-accordion">';
      while ($query->have_posts()) : $query->the_post();
          ?>
          <?php 
               $locations = get_field('locations');
               $about_partner = get_field('about_partner');
               $select_certificate = get_field('select_certificate');
               $partner_levels = get_the_terms(get_the_ID(), 'partner-level');
               $partner_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
               $visit_url = get_field('visit_url');
               $location_str = '--';
               if(!empty($locations))
               {
                  $location_str = implode(", ", $locations);
               }
            ?>       
            <div class="accordion-item">
              <h2 class="accordion-header d-flex align-items-center justify-content-between flex-wrap gap-3" id="partner_heading<?php echo $count; ?>">
                <div class="Partner-logo_name  d-flex align-items-center gap-4">
                <?php if($partner_image): ?>
                      <img src="<?php echo $partner_image; ?>" alt="Partner-logo"/>                              
                    <?php else: ?>
                      <img src="<?php echo esc_url(get_template_directory_uri()."/images/pl1.svg"); ?>" alt="Partner-logo"/>
                    <?php endif; ?>
                    <h4 class="mb-0"><?php echo get_the_title(); ?></h4>
                </div>
                <div class="Partner-connet d-flex align-items-center gap-2 flex-wrap">
                    <?php 
                    if (!empty($partner_levels) && !is_wp_error($partner_levels)) {
                      foreach ($partner_levels as $level) {
                          echo '<div class="PartnerPlan fs-6 fw-semibold '.esc_html($level->name).'-Color">'.esc_html($level->name).'</div>'; // Display the category name
                      }
                    } ?>
                    <!-- <a href="#" class="btn btn-primary">Request Training</a> -->
                    <a href ="<?php echo $visit_url; ?>" target="_blank" class="btn btn-primary">View</a>
                    <button type="search"  class="btn btn-primary find-training-provider" data-partnername="<?php echo get_the_title(); ?>" data-partnerlocations="<?php echo $location_str; ?>">Request Training</button>
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#partner_collapse<?php echo $count; ?>" aria-expanded="true" aria-controls="partner_collapse<?php echo $count; ?>">  
                    <img src="<?php echo esc_url(get_template_directory_uri()."/images/acco-arrow.svg"); ?>" alt="acco-arrow"/>
                    </button>
                </div>
              </h2>
              <div id="partner_collapse<?php echo $count; ?>" class="accordion-collapse collapse" aria-labelledby="partner_heading<?php echo $count; ?>" data-bs-parent="#partner-accordion">
                <div class="accordion-body">
                <?php echo $about_partner; ?>
                <?php if (!empty($select_certificate)) : ?>
                  <div class="fatp-listing">
                    <ul>
                    <?php foreach ($select_certificate as $certification_id) :
                      // Get course title and image
                      $course_title = get_the_title($certification_id);
                      $course_image = get_the_post_thumbnail_url($certification_id, 'full');
                    ?>
                      <li><a href="<?php echo get_permalink($certification_id); ?>"><?php echo $course_title; ?></a></li>
                    <?php endforeach; ?>
                    </ul>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          <?php
      $count++; endwhile;
      echo '</div>';
  else :
      echo '<p>No partners found.</p>';
  endif;
  // Pagination Buttons
  if ($total_pages > 1) {
    echo '<div id="partner-pagination" class="pagination-container text-center pl-paginate mt-5">';
    echo '<nav aria-label="Page navigation example">';
    echo '<ul class="pagination justify-content-center gap-2">';
    for ($partneri = 1; $partneri <= $total_pages; $partneri++) {
        echo '<li class="page-item ' . ($partneri == $paged ? 'active' : '') . '">
                <a href="javascript:void(0);" class="page-link" data-page="' . $partneri . '">' . $partneri . '</a>
              </li>';
    }
    echo '</ul></div>';
  }
  wp_reset_postdata();
  wp_die();
}

add_action('wp_ajax_load_partners', 'load_partners');
add_action('wp_ajax_nopriv_load_partners', 'load_partners');

function get_gravity_form_by_title($form_title) {
  $forms = GFAPI::get_forms(); // Get all forms
  foreach ($forms as $form) {
      if ($form['title'] == $form_title) {
          return $form['id']; // Return the ID of the form that matches the title
      }
  }
  return null; // Return null if no form with the given title is found
}

add_filter( 'gform_required_legend_26', '__return_empty_string' );
add_filter( 'gform_required_legend_25', '__return_empty_string' );

add_action('wp_ajax_ajax_blog_search', 'ajax_blog_search_handler');
add_action('wp_ajax_nopriv_ajax_blog_search', 'ajax_blog_search_handler');

function ajax_blog_search_handler() {
    $paged = isset($_POST['paged']) ? intval($_POST['paged']) : 1;
    $search = isset($_POST['search']) ? sanitize_text_field($_POST['search']) : '';

    $args = array(
        'post_type' => 'blogs',
        'posts_per_page' => 3,
        'paged' => $paged,
    );

    if (!empty($search)) {
        $args['s'] = $search;
    }

    $blogs_query = new WP_Query($args);

    ob_start(); ?>

    <div class="articlespage justify-content-start gy-5">
        <?php if ($blogs_query->have_posts()): ?>
            <?php while ($blogs_query->have_posts()): $blogs_query->the_post(); ?>
                <div class="card blogv2-card-large">
                    <div class="blogv2-thumb-large">
                        <?php if (has_post_thumbnail()): ?>
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" class="thumblarge" alt="<?php the_title(); ?>">
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.jpg" class="thumblarge" alt="Default Image">
                        <?php endif; ?>
                    </div>
                    <div class="blogv2-cnt-large">
                        <small><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></small>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No blog posts found.</p>
        <?php endif; ?>
    </div>

    <div class="pagination blog-pagination">
        <?php
        echo paginate_links(array(
            'total' => $blogs_query->max_num_pages,
            'current' => $paged,
            'format' => '?paged=%#%',
            'show_all' => false,
            'end_size' => 1,
            'mid_size' => 2,
            'prev_next' => true,
            'prev_text' => __('« Prev'),
            'next_text' => __('Next »')
        ));
        ?>
    </div>

    <?php wp_reset_postdata();
    echo ob_get_clean();
    wp_die();
}

function ajax_load_press_releases() {
    $paged = isset($_POST['paged']) ? intval($_POST['paged']) : 1;

    $args = array(
        'post_type' => 'press-releases',
        'posts_per_page' => 9,
        'paged' => $paged,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_status'    => 'publish',
    );

    $query = new WP_Query($args);

    ob_start();
    if ($query->have_posts()) {
        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="mission-value-box">
                    <div class="mb-3">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('full'); ?>" class="w-100" alt="<?php the_title(); ?>">
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.jpg" class="w-100" alt="Default Image">
                        <?php endif; ?>
                    </div>
                    <div class="corevalue-hd">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                    <div class="corevalue-desc"><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></div>
                    <div class="certified-btn">
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        <?php endwhile;
    } else {
        echo '<p>No press releases found.</p>';
    }
    $posts_html = ob_get_clean();

    // Pagination Links
    $pagination = paginate_links(array(
        'total' => $query->max_num_pages,
        'current' => $paged,
        'type' => 'array',
        'prev_text' => __('« Prev'),
        'next_text' => __('Next »'),
    ));

    $pagination_html = '';
    if (!empty($pagination)) {
      foreach ($pagination as $page_link) {
        if (strpos($page_link, 'current') !== false) {
            $pagination_html .= '<span class="page-numbers current disabled">' . strip_tags($page_link) . '</span>';
        } else {
            if (preg_match('/page\/([0-9]+)/', $page_link, $matches)) {
                $page_num = intval($matches[1]);
            } elseif (preg_match('/paged=([0-9]+)/', $page_link, $matches)) {
                $page_num = intval($matches[1]);
            } else {
                $page_num = 1;
            }

            $pagination_html .= '<a href="#" class="page-numbers ajax-page-link" data-page="' . $page_num . '">' . strip_tags($page_link) . '</a>';
        }
      }
      }

    wp_send_json(array(
        'posts' => $posts_html,
        'pagination' => $pagination_html
    ));
}
add_action('wp_ajax_load_press_releases', 'ajax_load_press_releases');
add_action('wp_ajax_nopriv_load_press_releases', 'ajax_load_press_releases');
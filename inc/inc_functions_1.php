<?php 

require_once get_template_directory() . '/inc/cpt/customer-testimonitals.php';

function redirect_attachment_to_parent() {
    if (is_attachment()) {
        $parent_post_id = wp_get_post_parent_id(get_the_ID());
        if ($parent_post_id) {
            wp_redirect(get_permalink($parent_post_id));
            exit;
        } else {
            wp_redirect(home_url('/')); // Redirect to home if no parent
            exit;
        }
    }
}
add_action('template_redirect', 'redirect_attachment_to_parent');


function dd(...$args) {
    echo '<pre>';
    foreach ($args as $arg) {
        var_dump($arg);
    }
    echo '</pre>';
    die();
}

add_filter('login_message', 'add_security_notice_above_login_form');

function add_security_notice_above_login_form($message) {
    // Define the message to display
    $security_notice = '
    <div style="border: 1px solid #ddd; background: #f9f9f9; padding: 10px; margin-bottom: 20px; border-radius: 5px;">
        <p style="font-size: 14px; color: #333;">
            <strong>Last week, there were 172 vulnerabilities disclosed in 157 WordPress Plugins and 4 WordPress Themes that have been added to the Wordfence Intelligence Vulnerability Database by the Wordfence Threat Intelligence Team.</strong>
        </p>
        <p style="font-size: 14px; color: #333;">
            <a href="https://www.wordfence.com/threat-intel/" target="_blank" style="text-decoration: underline; color: #0073aa;">Review those vulnerabilities in this report now</a> to ensure your site is not affected.
        </p>
    </div>
    ';

    // Append the security notice above the default login message
    return $security_notice . $message;
}

function get_subcategories_by_parent_slug($parent_slug) {
    // Get the parent category object by its slug
    $parent_category = get_category_by_slug($parent_slug);

    if ($parent_category) {
        // Fetch subcategories (children) of the parent category
        $subcategories = get_categories(array(
            'child_of' => $parent_category->term_id, // Use parent category ID
            'hide_empty' => false, // Set to true if you want only categories with posts
        ));

        return $subcategories;
    } else {
        return null; // Parent category not found
    }
}

// Track views for specified post types
function track_post_views() {
    if (is_admin()) return; // Don't track views in the admin area
    
    $post_types = ['page', 'courses']; // Add more post types if needed
    
    if (!is_singular($post_types)) return; // Only track views for specific post types

    $post_id = get_the_ID(); // Get the current post ID
    if (!$post_id) return;

    // Get the current view count and increment
    $views = (int) get_post_meta($post_id, '_view_count', true);
    update_post_meta($post_id, '_view_count', $views + 1);
}
add_action('wp', 'track_post_views'); // Hook into 'wp' to ensure it runs only on the frontend

// Add View Count column for multiple post types
function add_view_count_column($columns) {
    $columns['view_count'] = 'View Count';
    return $columns;
}

// Populate the View Count column
function display_view_count_column($column, $post_id) {
    if ($column === 'view_count') {
        $views = get_post_meta($post_id, '_view_count', true);
        echo $views ? $views : '0';
    }
}

// Make View Count column sortable
function make_view_count_column_sortable($columns) {
    $columns['view_count'] = 'view_count';
    return $columns;
}

// Modify query to sort by View Count
function sort_by_view_count($query) {
    if (!is_admin() || !$query->is_main_query()) return;

    if ($query->get('orderby') === 'view_count') {
        $query->set('meta_key', '_view_count');
        $query->set('orderby', 'meta_value_num');
    }
}

// Apply all functions to multiple post types
$post_types = ['page', 'courses']; // Add more post types if needed

foreach ($post_types as $post_type) {
    add_filter("manage_{$post_type}_posts_columns", 'add_view_count_column');
    add_action("manage_{$post_type}_posts_custom_column", 'display_view_count_column', 10, 2);
    add_filter("manage_edit-{$post_type}_sortable_columns", 'make_view_count_column_sortable');
}

add_action('pre_get_posts', 'sort_by_view_count');

if (is_plugin_active('jetpack-boost/jetpack-boost.php')) {
    function custom_get_field_image_url($value, $post_id, $field) {
        // Check if the field is an image field and has a value
        if ($field['type'] === 'image' && !empty($value)) {
            
            // If the value is an array, return the URL
            if (is_array($value) && isset($value['url']) && pathinfo($value['url'], PATHINFO_EXTENSION) !== 'svg' ) {
                $value['url'] = apply_filters('jetpack_photon_url', $value['url']);
            }

            if(is_string($value) && pathinfo($value, PATHINFO_EXTENSION) !== 'svg'){
                $value = apply_filters('jetpack_photon_url', $value);
            }

        }
        return $value;
    }
    add_filter('acf/format_value', 'custom_get_field_image_url', 10, 3);
}


// Add a new column to the 'Partner' post type admin list
add_filter('manage_partner_posts_columns', function ($columns) {
    $columns['partner_level'] = __('Partner Level', 'your-text-domain');
    return $columns;
});

// Populate the custom column with the assigned taxonomy term(s)
add_action('manage_partner_posts_custom_column', function ($column, $post_id) {
    if ($column === 'partner_level') {
        $terms = get_the_terms($post_id, 'partner-level');
        if (!empty($terms) && !is_wp_error($terms)) {
            echo esc_html(join(', ', wp_list_pluck($terms, 'name')));
        } else {
            echo __('No Partner Level Assigned', 'your-text-domain');
        }
    }
}, 10, 2);

// Make the column sortable
add_filter('manage_edit-partner_sortable_columns', function ($columns) {
    $columns['partner_level'] = 'partner_level';
    return $columns;
});

// Handle sorting for the custom taxonomy column
add_action('pre_get_posts', function ($query) {
    if (!is_admin() || !$query->is_main_query()) {
        return;
    }

    $orderby = $query->get('orderby');
    if ('partner_level' === $orderby) {
        $query->set('orderby', 'name');
        $query->set('tax_query', [
            [
                'taxonomy' => 'partner-level',
                'field'    => 'slug',
                'terms'    => '',
            ]
        ]);
    }
});

add_filter('upload_dir', function ($uploads) {
    $blob_url = 'https://aicertswpcdn.blob.core.windows.net/aicertsqasite';

    $uploads['baseurl'] = $blob_url;
    return $uploads;
});

add_filter('wp_get_attachment_url', function($url, $post_id) {
    $blob_base = "https://aicertswpcdn.blob.core.windows.net/aicertsqasite";
    $upload_dir = wp_get_upload_dir();
    //return str_replace($upload_dir['baseurl'], $blob_base, $url);
    
    // Get the attachment post
    $attachment = get_post($post_id);
    if (!$attachment) return $url;

    // Get the upload date (post_date)
    $upload_date = $attachment->post_date; // Format: 'YYYY-MM-DD HH:MM:SS'
    $cutoff_date = '2025-07-01 00:00:00';

    // Only replace for files uploaded before cutoff date
    if ($upload_date < $cutoff_date) {
        return str_replace($upload_dir['baseurl'], $blob_base, $url);
    }
    return $url;
}, 10, 2);
/*
function register_acf_import_export_menu() {
    add_submenu_page(
        'tools.php',                         // Parent slug
        'Import/Export ACF Taxonomy',        // Page title
        'Import/Export ACF Taxonomy',        // Menu title
        'manage_options',                    // Capability
        'acf-import-export-taxonomy',        // Menu slug
        'acf_import_export_page_callback'    // Callback function
    );
  }
  add_action('admin_menu', 'register_acf_import_export_menu');
   
  // Callback to render Import/Export page
  function acf_import_export_page_callback() {
    // Handle Export
    if (isset($_POST['export_acf_csv'])) {
       // export_acf_taxonomy_to_csv();
    }
   
    // Handle Import
    if (isset($_POST['import_acf_csv']) && !empty($_FILES['acf_import_file']['tmp_name'])) {
      $file = $_FILES['acf_import_file']['tmp_name'];
      $message = import_acf_from_csv($file);
      echo '<div class="updated"><p>' . esc_html($message) . '</p></div>';
    }
   
    // Render the form
  ?>
    <div class="wrap">
        <h1>Import/Export ACF Taxonomy</h1>
   
        <h2>Export ACF Taxonomy</h2>
        <form method="post">
            <?php submit_button('Export ACF to CSV', 'primary', 'export_acf_csv'); ?>
        </form>
   
        <hr>
   
        <h2>Import ACF Taxonomy</h2>
        <form method="post" enctype="multipart/form-data">
            <label for="acf_import_file">Upload CSV File:</label><br>
            <input type="file" name="acf_import_file" id="acf_import_file" required>
            <?php submit_button('Import ACF from CSV', 'primary', 'import_acf_csv'); ?>
        </form>
    </div>
    <?php
  }
   
  
function import_acf_from_csv($file) {
    $taxonomy = 'course-tool'; // Replace with your taxonomy slug
    //$acf_field_key = 'your_acf_field_key'; // Replace with your ACF field key
    $image_field_key = 'tool_image'; // Replace with your ACF image field key
   
    if (!file_exists($file) || !is_readable($file)) {
        return 'File not found or not readable.';
    }
   
    $handle = fopen($file, 'r');
    if (!$handle) {
        return 'Could not open the uploaded file.';
    }
   
    // Skip the header row
    fgetcsv($handle);
   
    $created_terms = 0;
    while (($row = fgetcsv($handle)) !== false) {
        if (count($row) < 4) {
            continue; // Skip invalid rows
        }
   
        // Get the Term ID, Name, ACF Field Value, and Image URL
        $term_id = intval($row[0]); // New term ID (optional, can be skipped)
        $term_slug = $row[2]; // New term ID (optional, can be skipped)
        $term_name = sanitize_text_field($row[1]);
        //$acf_value = sanitize_text_field($row[2]);
        $image_url = $row[8]; // Image URL from the CSV
     
   
        if (term_exists($term_slug, $taxonomy)) {
            //echo $term_id . " ". $term_name . "<br>";
            //continue; // Skip if term already exists
            $term = get_term_by('slug', $term_slug, $taxonomy);
            $term_id = $term->term_id;
        }
        else {
            //Create the new term
            $new_term = wp_insert_term(
                $term_name,         // Term name
                $taxonomy,          // Taxonomy
                array(
                    'slug' => $term_slug, // Optional custom term ID
                )
            );

            //Check for errors
            if (is_wp_error($new_term)) {
                continue; // Skip this term if there was an error
            }
            $term_id = $new_term['term_id'];
        }
   

   
        // Get the new term's ID (this will be automatically assigned if not set)
        // $new_term_id = $new_term['term_id'];
   
        // Set the ACF field for the newly created term
        //update_field($acf_field_key, $acf_value, "{$taxonomy}_{$new_term_id}");
   
        // Handle image upload if the image URL is provided
        if ($image_url) {
            // Upload the image to WordPress and associate with the term
            $attachment_id = upload_image_from_url($image_url);
            
            if ($attachment_id) {
                update_field($image_field_key, $attachment_id, "{$taxonomy}_{$term_id}");
                echo $image_url . " uploaded with " . $attachment_id . " and term slug ". $term_slug . "<br>";
            }
            else {
                echo "Image not uploaded";
                die();
            }
        }
   
        $created_terms++;
    }
   
    fclose($handle);
   
    echo "Import successful! Created {$created_terms} new terms.";
  }
   
  // Function to upload an image from URL and return attachment ID
function upload_image_from_url($image_url) {
    if (!$image_url) {
        return false;
    }
  
    // Download the image to temp location
    $tmp = download_url($image_url);

    // Check for download errors
    if (is_wp_error($tmp)) {
        echo $tmp->get_error_code() . "{". $tmp->get_error_message() . "}";
        return false;
    }
   
    // Get the file name from the URL
    $file_array = array(
        'name' => basename($image_url),
        'tmp_name' => $tmp
    );
   
    // Upload the image to WordPress
    $attachment_id = media_handle_sideload($file_array, 0);
   
    // Check if there were any upload errors
    if (is_wp_error($attachment_id)) {
        @unlink($file_array['tmp_name']);
        return false;
    }
   
    return $attachment_id;
}
*/
// Include this code in your theme's functions.php or a custom plugin.

// function download_attachment_data_as_csv() {
//   // Arguments for WP_Query
//   $args = array(
//       'post_type'      => 'courses', // Replace with your post type
//       'posts_per_page' => -1,               // Fetch all posts
//   );

//   // Custom query to get posts
//   $query = new WP_Query($args);

//   // If posts are found
//   if ($query->have_posts()) {
//       $csv_data = array();

//       // Header row for CSV
//       $csv_data[] = array('Post ID', 'Title', 'BluePrint URL');

//       // Loop through the posts
//       while ($query->have_posts()) {
//           $query->the_post();

//           // Get the attachment ID from the custom field
//           //$attachment_id = get_post_meta(get_the_ID(), 'download_blueprint_url', true);
//           $post_id = get_the_ID();
          

//           // Get the file URL using the attachment ID
//           $file_url = get_field('download_blueprint_url', $post_id);;

//           // Add data to CSV array
//           $csv_data[] = array(
//               get_the_ID(),          // Post ID
//               get_the_title(),       // Post Title
//               $file_url              // File URL
//           );
//       }

//       // Reset post data
//       wp_reset_postdata();

//       // Create and download the CSV file
//       header('Content-Type: text/csv; charset=UTF-8');
//       header('Content-Disposition: attachment; filename="attachment_data.csv"');
//       $output = fopen('php://output', 'w');
//       fprintf($output, chr(0xEF).chr(0xBB).chr(0xBF));
//       foreach ($csv_data as $row) {
//           fputcsv($output, $row);
//       }
//       fclose($output);
//       exit;
//   } else {
//       echo 'No posts found with the specified custom field.';
//   }
// }

// // To trigger this download, you can use an admin page, a button, or a custom endpoint like this:

// add_action('admin_post_download_attachment_csv', 'download_attachment_data_as_csv');
// add_action('admin_post_nopriv_download_attachment_csv', 'download_attachment_data_as_csv'); // For non-logged-in users

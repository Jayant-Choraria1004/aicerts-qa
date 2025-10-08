<?php 
/* 
Template Name: Template CasStudies 
*/ 
   get_header(); 
   $post_type = 'case-studies'; // Change 'publications' to your desired post type.
   
   $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
   $args = array(
      'orderby' => 'date', 
      'order' => 'DESC', 
      'post_type' => $post_type,
      'posts_per_page' => 10,
      'paged' => $paged
  );
   $query = new WP_Query( $args );
?> 
<!--Header End-->
<!--Header End-->
<div class="middle-section">
   <div class="inner-page blog-bg">
       <section class="cert-spec-section listing-pages">
         <div class="container">
            <h1><?php echo get_the_title() ?></h1>
            <div class="row">
               <?php 
               if($query->have_posts()) : 
                     while($query->have_posts()) : $query->the_post(); ?>
                     <div class="col-lg-4 col-md-6 listing-box">
                        <div class="listing-tags">
                           <?php 
                           $post_id = get_the_ID();
                           $tags = get_the_terms($post_id, 'case-studies-tags'); 
                           $term_names = array();
                           if(!empty($tags)){
                              foreach ($tags as $term) {
                                 $term_names[] = $term->name;
                              }
                           }
                           if(is_array($tags)) { echo implode(", " , $term_names);} ?>
                        </div>
                        <?php  
                        $post_id = get_the_ID();
                        $download_file = get_field('case_study_file',$post_id);
                        $thumb = get_the_post_thumbnail_url($post_id, 'full');
                        if(empty($thumb)) {
                           $thumb = get_template_directory_uri()."/images/blog-img.jpg";
                        }
                        ?>
                        <img src="<?php echo esc_url($thumb); ?>" class="w-100 mb-4" />
                        <h4><a href="#"><?php echo get_the_title(); ?></a></h4>
                        <p><?php echo get_the_excerpt(); ?></p>
                        <?php /*<a href="#" class="btn btn-primary download-casestudy" data-casefile="<?php echo get_field('case_study_file'); ?>">Download Case Study</a> */ ?>
                         <a href="#" class="btn btn-primary download-<?php echo $post_type ?>" data-file="<?php echo $download_file; ?>"  data-bs-toggle="modal" data-bs-target="#download-casestudy">Download Case Study</a> 
                     </div>  
               <?php 
                  endwhile; 
               else :
                     echo 'No '. get_the_title()  .' found';
               endif;
               ?>         
            </div>
         </div>
     </section><!--#CaseStudies-->
   </div>
</div>
<?php wp_reset_postdata(); ?>
<div class="pagination">
<?php    
   echo paginate_links(array(
        'total' => $query->max_num_pages,
        'current' => max(1, get_query_var('paged')),
   ));
?>
</div>
<!--Footer-->


<?php $gravityform_shortcode = get_field('casestudy_form_shortcode'); ?>
<div class="modal fade leadgenpopupcta" id="download-casestudy" tabindex="-1"  aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">
               <?php echo esc_html("Download Case Study"); ?>
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <?php 
            if (!empty($gravityform_shortcode)) {
               echo do_shortcode($gravityform_shortcode);
            } else {
               echo '<p>No form available at the moment.</p>';
            }
            ?>
         </div>
      </div>
   </div>
</div>


<script>
     jQuery(document).ready(function(){
         jQuery(".download-<?php echo $post_type ?>").on('click touchstart', function(){

            var download_url = jQuery(this).data("file");
            var download_file = download_url.split('/').pop();
            jQuery(".gfield--input-type-hidden input").val(download_url);
            jQuery(".gfield--type-hidden input").val(download_url);
        });
     });

   document.addEventListener("DOMContentLoaded", function () {
      jQuery(document).on("gform_confirmation_loaded", function (event, formId) {
         setTimeout(function () {
               location.reload();
         }, 8000); // Reloads page after 5 seconds
      });
   });
</script>
<?php
// get_sidebar();
get_footer(); 
?>
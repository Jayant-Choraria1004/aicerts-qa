<?php /* Template Name: Template Publications 
   */ 
  get_header(); 

  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
  $post_type = 'publications'; // Change 'publications' to your desired post type.
  $post_type_taxname = 'publication-tag';
  $download_field_name = 'publication_file';
  $args = array(
      'orderby' => 'date', 
      'order' => 'DESC', 
      'post_type' => $post_type,
      'posts_per_page' => 9,
      'paged' => $paged
  );
  $query = new WP_Query( $args );
  ?> 
<style>
   .publication-pagination .page-numbers {background: #f3f3f3; padding:10px 15px; margin-right:10px; white-space:nowrap; margin-bottom:30px; font-size: 16px;}
   .publication-pagination .page-numbers:hover, .publication-pagination .page-numbers.current {background: var(--primary-color); color: var(--white-color); }
</style>
  
  <div class="middle-section">
     <div class="inner-page blog-bg">
         <section class="cert-spec-section listing-pages publicationsbox downloadpbc pb-0">
           <div class="container">
              <h1><?php echo get_the_title() ?></h1>
              <div class="row">
                 <?php 
                 if($query->have_posts()) : 
                     while($query->have_posts()) : $query->the_post(); 
                                            
                       include get_template_directory() . '/template-parts/card.php';  
                       ?>
                 <?php 
                    endwhile; 
                 else :
                       echo 'No ' . ucfirst($post_type) . ' found';
                 endif;
                 ?>         
              </div>
           </div>
       </section><!--#Publications-->
     </div>
	 
	 <div class="section">
		<div class="container">
				<div class="publication-pagination" style="margin-bottom: 30px;">
				  <?php    
					 echo paginate_links(array(
						  'total' => $query->max_num_pages,
						  'current' => max(1, get_query_var('paged')),
					 ));
				  ?>
				  </div>
		</div>
	 </div>
	 
  </div>
  <?php wp_reset_postdata(); ?>
  
  <?php $gravityform_shortcode = get_field('publication_form_shortcode','option'); ?>
  <div class="modal fade leadgenpopupcta" id="download-publication" tabindex="-1"  aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
   <div class="modal-content">
      <div class="modal-header">
         <h5 class="modal-title">
            <?php echo esc_html("Download Publication"); ?>
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

<!--Footer-->
<script>
     jQuery(document).ready(function(){
         jQuery(".download-<?php echo $post_type ?>").on('click touchstart', function(){

            var download_url = jQuery(this).data("file");
            var download_file = download_url.split('/').pop();
            jQuery(".gfield--input-type-hidden input").val(download_url);
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
get_footer(); 
?>
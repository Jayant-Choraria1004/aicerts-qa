<?php
/*
 *    Template Name: Publications-Detail
 */
get_header();
$title = get_the_title();
$id = get_the_ID();
$publication_date = get_field('publication_date');
$reading_time = get_field('reading_time');
$author_name = get_field('author_name');
$table_of_contents = get_field('table_of_contents');
$description_content = get_field('description_content');
$publication_subheading = get_field('publication_subheading');
$gravityform_shortcode = get_field('publication_form_shortcode','option');
$publication_detail_page_form_shortcode = get_field('publication_detail_page_form_shortcode','option');
$terms = get_the_terms( $id, 'publication-category' );
$download_file = get_field('publication_file');
$view_all_publication_button = get_field('view_all_publication_button','option');
$publication_banner_image = get_field('publication_banner_image');

// Query for more publications (excluding current one)
$args = array(
    'post_type'      => 'publications',
    'posts_per_page' => 3,
    'post__not_in'   => array($id),
    'orderby'        => 'date',
    'order'          => 'DESC',
);

$more_publications = new WP_Query($args);
?>
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
<div class="middle-section">
	<section class="banner-video-section pd-banners" style="background: url(<?php echo $publication_banner_image['url']; ?>) no-repeat center;">  
		<div class="container">
			<div class="row">
			<div class="col-lg-12">
				<div class="text-center"> 
					<h1><span class="primary_color"><?php echo $title; ?></span></h1>              
					<h2 class="text-light"><?php echo $publication_subheading; ?></h2>
					<a href="#" class="btn btn-primary download-publications" data-file="<?php echo $download_file; ?>"  data-bs-toggle="modal" data-bs-target="#download-publication">Download Now</a>					 
				</div>
			</div>
			</div>
		</div>
	</section>

	<section class="common-section">  
		<div class="container pub-container">
			<div class="row">
			<div class="col-lg-12">
					<div class="pub-sidebar"> 
						<?php if($publication_date): ?>
						<div class="pubsidebar-dtls">
							<div><label>Publication Date</label><h5><?php echo $publication_date; ?></h5></div>
							<?php if(!empty($terms) && FALSE): ?>
							<div><label>Category</label>
								<h5>
								<?php foreach ( $terms as $term ) {
									echo $term->name;
								} ?>
								</h5>
							</div>
							<?php endif; ?>
							<?php if($reading_time): ?>
								<div><label>Reading Time</label><h5><?php echo $reading_time; ?></h5></div>
							<?php endif; ?>
							<?php if($author_name): ?>
								<div><label>Author Name</label><h5><?php echo $author_name; ?></h5></div>
							<?php endif; ?>
						</div>
						<?php endif; ?>
						<?php if($table_of_contents): ?>					
						<div class="pub-tablecontent mb-5">
							<h4>Table of Contents</h4>
							<div class="card puntablebox">
								<?php echo $table_of_contents; ?>
							</div>
						</div>
						<?php endif; ?>
						<!-- <div class="card puntablebox">
							<h4><?php echo $title; ?></h4>
							<p>Get details on course, syllabus, projects, tools and more</p>
							<div>
								<?php echo do_shortcode($publication_detail_page_form_shortcode); ?>
								<?php 
								if (!empty($gravityform_shortcode)) {
									echo do_shortcode($gravityform_shortcode);
								} else {
									echo '<p>No form available at the moment.</p>';
								}
								?>
							</div>
						</div> -->
					</div>
				</div>
				<?php if($description_content): ?>
					<div class="col-lg-12">
						<div class="pt-4 pub-summary">
							<?php $i=1; foreach($description_content as $content): ?>
							<h4 class="primary_color"><?php echo $i.". ".$content['description_heading']; ?></h4>
							<?php echo $content['description_content']; ?>
							<?php $i++; endforeach; ?>							
							<a href="#" class="btn btn-primary read-fullpublication">Read Full</a>						
						</div>
					</div>
				<?php endif; ?>
				
			</div>
		</div>
	</section>

	<?php if ($more_publications->have_posts()) : ?>
		<section class="common-section mb-0 publicationsbox ">  
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="mb-4 more-pub-title">
						<h3>More Publications</h3> <a href="<?php echo $view_all_publication_button['url']; ?>" class="btn btn-primary">View All</a>
					</div>
				</div>
			<?php while ($more_publications->have_posts()) : $more_publications->the_post();
			$moreterms = get_the_terms( $id, 'publication-category' ); 
			$thumb = get_the_post_thumbnail_url($post_id, 'full');
			if (empty($thumb)) {
				$thumb = get_template_directory_uri() . "/images/blog-img.jpg";
			}
			?>
				<div class="col-lg-4 col-md-6 listing-box">		
					
						<img src="<?php echo esc_url($thumb); ?>" class="w-100 mb-4">
						<a href="<?php the_permalink(); ?>"><h4 class="mb-2"><?php the_title(); ?></h4></a>
						<p><?php foreach ( $moreterms as $t ) {
									echo $t->name;
								} ?></p>
						<!-- <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a> -->
				</div>
			<?php endwhile; ?>
			</div>
		</div>
		</section>
	<?php endif; ?>
</div>
<script>
	jQuery(document).ready(function($) {
		var download_url = "<?php echo $download_file ?>";		
		jQuery(".gfield--input-type-hidden input").val(download_url);
	});
//      jQuery(document).ready(function(){
//          jQuery(".download-<?php echo $post_type ?>").on('click touchstart', function(){

//             var download_url = jQuery(this).data("file");
//             var download_file = download_url.split('/').pop();
//             jQuery(".gfield--input-type-hidden input").val(download_url);
//         });
//      });

//    document.addEventListener("DOMContentLoaded", function () {
//       jQuery(document).on("gform_confirmation_loaded", function (event, formId) {
//          setTimeout(function () {
//                location.reload();
//          }, 8000); // Reloads page after 5 seconds
//       });
//    });
</script>
<?php
get_footer();
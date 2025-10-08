<?php
/**
 * The template for displaying 404 pages
 *
 */

get_header();
?>
<div class="middle-section">
  <div class="inner-page blog-bg">
    <section class="page-not-found d-flex justify-content-center align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center not-found">
              <img src="<?php echo get_template_directory_uri()."/images/404.png"; ?>">
              <h2>Opps! The Page Not Found</h2>
              <p>Sorry, the page you are looking for cannot be found. It seems that the URL you were trying to access is either incorrect or the page has been removed.</p>
              <div class="become-trainer-btn">
                <a target="_blank" href="<?php echo site_url();?>" class="btn btn-primary">Return to Homepage</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
<?php
get_footer();
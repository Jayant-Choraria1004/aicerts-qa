<?php
/**
 * The template for displaying Maintenance
 *
 */

get_header();
?>
<style>
.header-section { display:none; }
.footer-section { display:none; }
</style>
<div class="middle-section roles-based-solutions">
  <div class="inner-page certification-page">
    <section class="maintenance-section listing-pages">
      <div class="container maxwidth">
        <div class="row">
          <div class="text-center">
            <img src="<?php echo get_template_directory_uri()."/images/maintenance.png"; ?>">
            <h2>We're Under Maintenance</h2>
            <h4>We'll be back soon!</h4>
            <p>Our website is currently undergoing scheduled maintenance. We apologise for any inconvenience this may cause and appreciate your patience.</p>
            <p>While we're working on the site, you can still contact us via: <a href="mailto:support@aicerts.ai">support@aicerts.ai</a></p>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<?php
get_footer();
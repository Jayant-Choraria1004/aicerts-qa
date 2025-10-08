<?php
/*
 *    Template Name: ANAB
 */
get_header();

$anab = get_field('anab');
if ( post_password_required() && is_page([15006,13043]) ) {
  echo "<div class='anab-pass-protection card'>";
  echo get_the_password_form();
  echo "</div>";
} 
else {
?>

<div class="middle-section anab_main">
  <?php if($anab): ?>
    <?php $j=1; foreach($anab as $a): ?>
    <section class="anab-header1 <?php echo ($j == 2) ? 'bg2' : ''; ?>">
      <div class="container">
        <h2><span class="primary_color"><?php echo $a['anab_heading']; ?></h2>
      </div>
    </section>
    
    <section class="anab-table-section">
      <div class="container">
      <div class="table-responsive">
        <table class="table anab_table">
          <thead>
          <tr>
            <th scope="col">S.No</th>
            <th scope="col">Document Name</th>
            <th scope="col">Document Type</th>
            <th scope="col" style="max-width:220px;">Action</th>
          </tr>
          </thead>
          <tbody>
          <?php $i=1; foreach($a['anab_table'] as $table): ?>
          <tr>
            <td scope="row"><?php echo $i; ?>.</td>
            <td><?php echo $table['document_name']; ?></td>
            <td><?php echo $table['sub-category']; ?></td>
            <?php 
            $file_url = $table['pdf_link'];

            if(empty($table['pdf_link'])){
              $file_url = $table['external_file_url'];
            }
            ?>

            <td><a href="<?php echo $file_url; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-pdf.svg" alt="" class="me-2"/> Download</a></td>
          </tr>
          <?php $i++;  endforeach;?>
          </tbody>
        </table>
      </div>
      </div>
    </section>
    <?php $j++; endforeach; ?>
  <?php endif; ?>
</div>

<?php
}
get_footer();
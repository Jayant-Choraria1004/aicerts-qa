<?php
$gravityform = get_field('executive_summery_popup_form', 'option');
?>

<div class="modal fade" id="executivemodal" tabindex="-1" aria-labelledby="executivemodallabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="executivemodallabel">Download Executive Summary</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode($gravityform); ?>
      </div>
    </div>
  </div>
</div>


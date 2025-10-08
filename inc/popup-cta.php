<?php
if( !is_page('events') ) :
$popup_configuration = get_field('popup_configuration', 'option');
if( !empty($popup_configuration) )
{
  $popup_caption_1 = $popup_configuration['popup_caption_1'];
  $discount_caption = $popup_configuration['discount_caption'];
  $popup_caption_2 = $popup_configuration['popup_caption_2'];
  $coupan_code = $popup_configuration['coupan_code'];
  $cta_button_label = $popup_configuration['cta_button_label'];
  $cta_link = $popup_configuration['cta_link'];
}
?>
<!-- discount Modal -->
<div class="modal fade" id="modal-discount" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="close dmodalbtnclose" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

      <div class="modal-body">

        <img alt="" class="dmodal-img" src="<?php echo esc_url(get_template_directory_uri() . "/images/modal-discount-img.webp"); ?>">
        <img alt="" class="dmodal-badge" src="<?php echo esc_url(get_template_directory_uri() . "/images/modal-discount-badge.webp"); ?>">
        <div class="dmodal-cnt">
          <div>
            <p><?php echo $popup_caption_1; ?></p>
            <p class="dmodal-discountcode"><?php echo $discount_caption; ?></p>
            <p><?php echo $popup_caption_2; ?></p>
            <p class="dmodalcoupon">Use Code: <span class="primary_color" id="couponCode"><?php echo $coupan_code; ?></span> <i class="fa-regular fa-copy" id="copyCouponBtn"></i></p>
            <?php if(!empty($cta_link)) : ?>
              <a href="<?php echo $cta_link; ?>" class="btn btn-primary cta1" target="_blank"><?php echo $cta_button_label; ?></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- discount Modal end -->

<script>
  document.addEventListener("DOMContentLoaded", function() {
    var displayCount = localStorage.getItem("discountModalDisplayCount") || 0;
    
    if (displayCount < 2) {
      var timeout = 1000;

      setTimeout(function() {
        var myModal = new bootstrap.Modal(document.getElementById("modal-discount"), {});
        myModal.show();

        displayCount++;
        localStorage.setItem("discountModalDisplayCount", displayCount);
      }, timeout);
    }

  });

  jQuery(document).ready(function() {

    jQuery("#copyCouponBtn").click(function() {
      // Get the text from the coupon code element
      var couponCode = jQuery("#couponCode").text();

      // Use the Clipboard API to copy the text directly to the clipboard
      navigator.clipboard.writeText(couponCode).then(function() {
        // Notify the user that the code has been copied
        console.log("Coupon code copied: " + couponCode);
      }).catch(function(error) {
        console.error("Failed to copy text: ", error);
      });
      jQuery(this).removeClass("fa-regular");
      jQuery(this).addClass("fa-solid");
    });

    $(document).ready(function() {
        let sourceButton = $('.courses-template-tpl-certification-detail-V5 .cmndupbtnlink');
        
        if (sourceButton.length && sourceButton.attr('href')) {
            let url = sourceButton.attr('href');        
            $('#modal-discount a.cta1').attr('href', url);
        }
    });

  });
</script>
<?php endif; ?>
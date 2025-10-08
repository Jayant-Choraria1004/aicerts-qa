<style>
  .exp-gform-cnt .gform-theme--foundation .gform_fields input[type="radio"].hover,
  .exp-gform-cnt .gform-theme--foundation .gform_fields input[type="radio"].filled {
    background: url('<?php echo get_template_directory_uri(); ?>/images/star-filled.svg') no-repeat center;
    background-size: 30px auto;
    height: 32px;
    width: 32px;
    border: none;
  }
</style>
<script>
  jQuery(document).ready(function($) {
    const $radioButtons = $('.exp-gform-cnt .gform-theme--foundation .gform_fields input[type="radio"]');

    function updateStars(value, className) {
      $radioButtons.each(function() {
        if ($(this).val() <= value) {
          $(this).addClass(className);
        } else {
          $(this).removeClass(className);
        }
      });
    }

    // Mouse enter and leave events for hover effect
    $radioButtons.on('mouseenter', function() {
      updateStars($(this).val(), 'hover');
    }).on('mouseleave', function() {
      $radioButtons.removeClass('hover');
    });

    // Click event for filled effect
    $radioButtons.on('click', function() {
      updateStars($(this).val(), 'filled');
    });
  });
</script>
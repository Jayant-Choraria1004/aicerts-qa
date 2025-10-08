
<?php 
if(!empty($form_shortcode)) : ?>

<!-- Popup HTML Structure -->
<div id="custom-popup" class="gravity-popup_form">
    <div class="popup-content">
        <span class="close-button"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none"> <path d="M9 9L23.1421 23.1421" stroke="#A9A7B0" stroke-linecap="round"/> <path d="M9 23.1422L23.1421 9.00002" stroke="#A9A7B0" stroke-linecap="round"/> </svg></span>
        <?php echo do_shortcode($form_shortcode); ?>
    </div>
</div>

<script>
// document.addEventListener("DOMContentLoaded", function() {
//     var popup = document.getElementById("custom-popup");
//     var openButton = jQuery(".find-training-provider");
//     var closeButton = document.querySelector(".close-button");

//     openButton.click(function() {
//         popup.style.display = "block";
//     });

//     closeButton.onclick = function() {
//         popup.style.display = "none";
//     }

//     window.onclick = function(event) {
//         if (event.target == popup) {
//             popup.style.display = "none";
//         }
//     }
// });


document.addEventListener("DOMContentLoaded", function() {
    var popup = document.getElementById("custom-popup");

    // Event delegation to ensure the event works after AJAX updates
    jQuery(document).on("click", ".find-training-provider", function() {
        popup.style.display = "block";
    });

    // Close popup when clicking the close button
    jQuery(document).on("click", ".close-button", function() {
        popup.style.display = "none";
    });

    // Close popup when clicking outside
    window.onclick = function(event) {
        if (event.target == popup) {
            popup.style.display = "none";
        }
    };
});

</script>

<?php endif; ?>
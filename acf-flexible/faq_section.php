<?php
$section_title = get_sub_field('section_title');
$faqs = get_sub_field('faqs');
?>


<?php if ($section_title || $faqs): ?>
<section class="h2_faq pt-2">
   <div class="container">
      <?php if ($section_title): ?>
        <h2 class="mb-5 text-center"><?php echo esc_html($section_title); ?></h2>
      <?php endif; ?>
      <div class="faq_wrap">
         <div class="accordion" id="faq-accordion">
            <?php foreach ($faqs as $index => $faq): ?>
            <div class="accordion-item">
               <h2 class="accordion-header" id="faq_heading<?php echo $index; ?>">
                  <button class="accordion-button <?php echo $index === 0 ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#faq_collapse<?php echo $index; ?>" aria-expanded="true" aria-controls="faq_collapse<?php echo $index; ?>">
                    <?php echo esc_html($faq['question']); ?>
                  </button>
               </h2>
               <div id="faq_collapse<?php echo $index; ?>" class="accordion-collapse collapse" aria-labelledby="faq_heading<?php echo $index; ?>" data-bs-parent="#faq-accordion">
                  <div class="accordion-body">
                     <?php echo wp_kses_post($faq['answer']); ?>
                  </div>
               </div>
            </div>
            <?php endforeach; ?>
         </div>
      </div>
   </div>
</section>
<?php endif; ?>
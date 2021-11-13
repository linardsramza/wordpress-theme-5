<?php
$testimonials = otm_get_option('testimonials');
?>

<?php if($testimonials): ?>

<div class="swiper-container swiper-testimonials">
  <div class="swiper-wrapper">
  <?php foreach($testimonials as $testimonial): ?>
    <div class="swiper-slide">
      <div class="testimonial-entry text-center px-4 px-sm-5">
        <p class="testimonial-text">&ldquo;<?php echo $testimonial['testimonial'] ?>&rdquo;</p>
        <?php for ($i = 0; $i < $testimonial['testimonial_rating']; $i++) { ?>
        <i class="fa fa-star star"></i>
        <?php } ?>
        <p class="testimonial-details"><?php echo $testimonial['testimonial_details'] ?></p>
      </div>
    </div>
  <?php endforeach; ?>
  </div>
  <div class="testi-prev"><i class="icons icon-arrow-left" aria-hidden="true"></i></div>
  <div class="testi-next"><i class="icons icon-arrow-right" aria-hidden="true"></i></div>
</div>

<?php endif; ?>
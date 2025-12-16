<?php get_header(); ?>

<main>
<?php
if (have_posts()) :
  while (have_posts()) : the_post();
    the_title('<h2>', '</h2>');
    the_content();
  endwhile;
endif;
?>
</main>

<!-- Hero-Section -->
<div class="hero_section">
  <div class="hero_side">
    <h1>Samyang Hot Chicken Ramen</h1>
    <p>Experience the bold, spicy flavor loved by millions worldwide. Perfect for quick meals with maximum kick.</p>
    <button class="btn">
      <i class="fa-solid fa-cart-shopping"></i>
      Shop Now
    </button>
  </div>
  <div class="hero_side">
    <img src="wp-content/themes/astra/assets/image/hero image.png" alt="Hot Chicken Ramen">
  </div>
</div>

<!-- Featured Product -->
 <div></div>
<?php get_footer(); ?>

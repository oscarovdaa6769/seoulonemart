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

<!-- Why-Choose-Us -->
<div class="why_choose_us_section">
  <div class="why_choose_us_card">
    <span class="why_choose_us_icon"><i class="fa-solid fa-bowl-food"></i></span>
    <p>Authentic Korean Meals</p>
  </div>
  <div class="why_choose_us_card">
    <span class="why_choose_us_icon"><i class="fa-solid fa-clock"></i></span>
    <p>Fast & Easy Shopping</p>
  </div>
  <div class="why_choose_us_card">
  <span class="why_choose_us_icon"><i class="fa-solid fa-tag"></i></span>
    <p>Affordable Prices</p>
  </div>
  <div class="why_choose_us_card">
    <span class="why_choose_us_icon"><i class="fa-solid fa-leaf"></i></span>
    <p>Fresh & Ready-to-Eat</p>
  </div>
</div>

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

<!-- Featured-Product -->
<div class="featured_section">
  <h1>Featured Products</h1>
  <div class="featured_card">
    
  </div>
</div>
<?php get_footer(); ?>

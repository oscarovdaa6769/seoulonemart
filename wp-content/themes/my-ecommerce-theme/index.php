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
<div class="why_choose_us_section">
  <div class="why_choose_us_card">
    <i class="fa-solid fa-bowl-food"></i>
    <p>Authentic Korean Meals</p>
  </div>
  <div class="why_choose_us_card">
    <i class="fa-solid fa-clock"></i>
    <p>Fast & Easy Shopping</p>
  </div>
  <div class="why_choose_us_card">
    <i class="fa-solid fa-tag"></i>
    <p>Affordable Prices</p>
  </div>
  <div class="why_choose_us_card">
    <i class="fa-solid fa-leaf"></i>
    <p>Fresh & Ready-to-Eat</p>
  </div>
</div>

<?php get_footer(); ?>

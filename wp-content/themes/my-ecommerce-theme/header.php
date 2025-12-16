<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> | SeoulOne Mart</title>
  <?php wp_head(); ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body <?php body_class(); ?>>
<header>
   <div class="logo_section">
    <img src="wp-content/themes/astra/assets/image/seoulonemart-logo.png" alt="seoulonemart_logo">
   </div>

   <div class="search_bar">
      <input type="text" placeholder="Search here...">
      <button><i class="fa-solid fa-magnifying-glass icon"></i></button>
   </div>

   <div class="utility-nav">
    <a href=""><i class="fa-solid fa-user"></i></a>
    <a href=""><i class="fa-solid fa-heart"></i></a>
    <a href=""><i class="fa-solid fa-basket-shopping"></i></a>
   </div>

   <div class="language_switcher_section">
    <button class="language_switcher_btn">
      English <i class="fa-solid fa-angle-down"></i>
    </button>
    <ul class="language_switcher_menu">
      <li>English</li>
      <li>Khmer</li>
      <li>Korean</li>
    </ul>
   </div>

</header>

<nav>
  <ul>
    <li><a href="">Home</a></li>
    <li><a href="">Shop</a></li>
    <li><a href="">Promotions</a></li>
    <li><a href="">Recipes</a></li>
    <li><a href="">About Us</a></li>
    <li><a href="">Contact</a></li>
  </ul>
  <div class="location_section">
    <i class="fa-solid fa-location-dot"></i>
    <p>Delivery: Stueng Mean Chey, Phnom Penh</p>
  </div>
</nav>

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
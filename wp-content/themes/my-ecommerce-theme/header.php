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
    <img src="wp-content/themes/astra/assets/image/logo.png" alt="seoulonemart_logo">
   </div>

   <div class="search_bar">
    <form action="">
      <input type="text" placeholder="Search here...">
    </form>
    <i class="fa-solid fa-magnifying-glass icon"></i>
   </div>

   <div class="utility-nav">
    <a href=""><i class="fa-solid fa-user"></i></a>
    <a href=""><i class="fa-solid fa-heart"></i></a>
    <a href=""><i class="fa-solid fa-basket-shopping"></i></a>
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

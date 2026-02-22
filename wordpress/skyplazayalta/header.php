<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="header">
  <div class="container">
    <nav class="nav">
      <?php
  wp_nav_menu(array(
    'theme_location' => 'header-menu',
    'container' => 'nav',
    'menu_class' => 'nav'
  ));
?>
    </nav>   
    <div class="phone"><a href="tel:+79504777365">+7 (950) 477-73-65</a></div>
  </div>
</header>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Jevis Luxury <?php wp_title('|', true, 'left'); ?></title>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <!-- HEADER -->

  <header>
    <nav class="container">
      <div class="nav__left">

        <?php
        if (function_exists('the_custom_logo')) {
          the_custom_logo();
        }
        ?>

        <div class="nav__toggle" id="main-nav-toggle">
          <i class="ri-menu-line nav__burger"></i>
          <i class="ri-close-line nav__close"></i>
        </div>
      </div>

      <div class="nav__center">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'main-header',
          'container' => 'div',
          'container_id' => 'main-nav-menu',
          'container_class' => 'nav__menu',
          'menu_class' => 'nav__list',
          'depth' => 1
        ));
        ?>
      </div>
      <div class="nav__right">
        <div class="nav__menu">
          <ul class="nav__list">
            <li class="menu-item">
              <a href="https://instagram.com" target="_blank"><i class="ri-instagram-line ri-lg"></i></a>
            </li>
            <li class="menu-item">
              <a href="https://facebook.com" target="_blank"><i class="ri-facebook-line ri-lg"></i></a>
            </li>
            <li class="menu-item">
              <a href="https://twitter.com" target="_blank"><i class="ri-twitter-line ri-lg"></i></a>
            </li>
            <li class="menu-item">
              <a><i class="ri-search-line ri-lg"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main id="swup" class="transition-fade">
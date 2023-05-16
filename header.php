<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Wesley Alves Rolim">
  <title>
    <?php bloginfo('name'); ?> |
    <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
  </title>

  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="logo">
      <a href="/">
        <?php get_template_part('template-parts/logo', null); ?>
      </a>
    </div>
    <nav>
      <?php
      wp_nav_menu(array(
        'menu'  => 'header_menu',
        'theme_location'  => 'header_menu',
        'container'       => 'ul'
      ));
      ?>
    </nav>
  </header>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Dog">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/pc.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sp.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css">
  <!-- <title><?php bloginfo('name'); ?></title> -->
  <?php
  wp_enqueue_style('font-awesime', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css');
  wp_enqueue_style('google-web-font', 'https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap');
  wp_enqueue_script('jquery');
  wp_enqueue_script('DOG_wp_Local-main', get_template_directory_uri() . '/assets/is/main.js');
  wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header">
    <h1 class="header__logo">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header__logo.png" alt="ロゴロゴ">
        <span><?php bloginfo('description'); ?></span>
      </a>
    </h1>

    <nav class="gnav">
      <ul class="gnav__list">
        <li class="gnav__item"><a href="#">Dog1</a></li>
        <li class="gnav__item"><a href="#">Dog2</a></li>
        <li class="gnav__item"><a href="#">Dog3</a></li>
      </ul>
    </nav>
  </header>
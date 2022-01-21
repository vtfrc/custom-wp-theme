<!DOCTYPE html>
<html lang="en">
<head>
	
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&display=swap" rel="stylesheet">
	
  <?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>

  <header class="header">

    <a href="<?php echo home_url(); ?>" class="logo"><img src="/wp-content/uploads/2022/01/logo-vf.png" alt="vittorio faraco logo"></a>

    <nav class="menu">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'header',
        'container' => false,
        'items_wrap' => '<ul>%3$s</ul>'
      ));
      ?>
    </nav>

  </header>

  <div class="hero">

    <?php if(is_page($page='home')){ ?>
      <div class="hero-home-div animate__animated animate__fadeInUp">
        <h1><?php bloginfo('title'); ?></h1>
        <h2>Tech consultant, web developer and data analyst</h2>
        <p>Here I talk about innovation, growth and tech. Subscribe and get my free resources.</p>
        <a href="/newsletter"class="wp-block-button__link has-background no-border-radius" style="background-color:#ff3314">Subscribe</a>
      </div>
    <?php } ?>

    <?php if(!is_page($page='home')){ ?>
      <h1 class="animate__animated animate__fadeInUp"><?php the_title(); ?></h1>
    <?php } ?>

  </div>

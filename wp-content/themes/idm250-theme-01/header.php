<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
      // Using the ACF plugin, we can get the favicon from the admin panel
      $image = get_field('logo', 'option');
      if(!empty($image)): ?>
      <link rel="icon"
        href="<?php echo $image['url']?>"
        type="image/x-icon" />
      <?php endif; ?>
  <title> <?php echo get_the_title(); ?> </title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header>
    <div class="nav-container">
        <div class="nav-title-container">
            <a class="nav-title" href="<?php echo home_url(); ?>"> Earthen </a>
        </div>

        <?php
    // @link https://developer.wordpress.org/reference/functions/wp_body_open/
    // Fires the wp_body_open action.
    // wp_body_open();
    //   get_template_part('components/header')
        $menu = wp_nav_menu(['theme_location' => 'primary-menu']);
    ?>
        <div class="nav-links-container">
            <ul class="nav-links">       
            </ul>
        </div>
    </div>
  </header>
  
  
  <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
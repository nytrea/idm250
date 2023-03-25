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
    <title> <?php echo get_the_title(); ?> 404 | Earthen </title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
</body>
</html>

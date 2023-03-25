<?php get_header(); ?>

<!-- <h1> <?php 
// echo get_the_title(); 
?></h1> -->

<!-- if there's a featured image it'll be registered here -->


<div class="overlay">
   <div class="hero-image-container" style="background-image: url(
      <?php echo get_the_post_thumbnail_url(); ?>
      )">

      <h1 class="hero-text">
         <?php the_field('hero_home'); ?>
      </h1>


      
   </div>
</div>


  

<!-- <div class="title">
   <h1> <?php 
//    echo get_the_title()
   ; ?> </h1>
</div> -->

<!-- used to block out content on a page -->
<?php get_template_part('components/content');?>


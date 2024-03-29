<?php
/* Template Name: General Template */
/**
 * This template is used for any general informational page.
 */
get_header();
?>


<!-- if there's a featured image it'll be registered here -->

<div class="overlay">
   <div class="hero-image-container" style="background-image: url(
      <?php echo get_the_post_thumbnail_url(); ?>
      )">
   </div>
</div>

<h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
        <?php echo get_the_title(); ?>
</h2>

<!-- used to block out content on a page -->
<?php get_template_part('components/content');?>




<?php get_footer(); ?>
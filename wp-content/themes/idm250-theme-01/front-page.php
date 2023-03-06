<?php get_header(); ?>

<!-- <h1> <?php 
// echo get_the_title(); 
?></h1> -->

<!-- if there's a featured image it'll be registered here -->
<?php
if (has_post_thumbnail()){
    the_post_thumbnail();
}

?>

<div class="title">
   <h1> <?php echo get_the_title(); ?> </h1>
</div>

<!-- used to block out content on a page -->
<?php get_template_part('components/content');?>

<?php get_footer(); ?>
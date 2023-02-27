<?php get_header(); ?>

<h1> <?php echo get_the_title(); ?></h1>

<?php
    if(have_posts()){

        //load posts loop
        while (have_posts()){
            the_post();
            the_content();
        }
    }
    else{
        echo 'no posts found';
    }
    
?>

<?php get_template_part('components/content');?>

<?php get_footer(); ?>
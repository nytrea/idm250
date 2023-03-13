<?php get_header(); ?>

    <article id='post-<?php the_ID(); ?>' <?php post_class(); ?>>
        <?php get_template_part("components/content"); ?>
    </article>
    
<!-- 
    <div><?php 
    // echo get_the_excerpt();
     ?></div> -->


    <!-- <h2> </h2> -->

    <!-- <div class="blog-categories">
    <h2> Categories for this post </h2> -->


    <?php
    // $currentPostID = get_the_id();
    // $terms = get_the_terms($currentPostID, 'category');

    // if ($terms){
    //     foreach ($terms as $term){
    //         echo "<span>{$term->name}</span>";
    //     }
    // }
    // ?>
    <!-- // </div> -->
    <?php

    //checks if the post has a thumbnail
    if (has_post_thumbnail()) {
    the_post_thumbnail();
    }
    ?>

<?php get_footer(); ?>
<?php get_header(); ?>

    <article id='post-<?php the_ID(); ?>' <?php post_class(); ?>>
        <?php get_template_part('components/content'); ?>
    </article>

    <h2> Categories for this post </h2>


    <?php
    $currentPostID = get_the_id();
    $terms = get_the_terms($currentPostID, 'category');

    foreach ($terms as $term){
        echo '<p>{$term->name}</p>';
    }
    ?>


    <?php get_footer(); ?>
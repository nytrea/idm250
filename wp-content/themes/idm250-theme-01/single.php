<?php get_header(); ?>

    <div class="article-text-container">
        <article id='post-<?php the_ID(); ?>' <?php post_class(); ?>>
            <?php get_template_part("components/content"); ?>
        </article>
    </div>
    

<?php get_footer(); ?>
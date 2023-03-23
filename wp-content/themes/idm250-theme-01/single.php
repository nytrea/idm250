<?php get_header(); ?>

    <div class="overlay">
    <div class="hero-image-container" style="background-image: url(
        <?php echo get_the_post_thumbnail_url(); ?>
        )">
    </div>
    </div>

    <div class="article-text-container">
        <article id='post-<?php the_ID(); ?>' <?php post_class(); ?>>
            <?php get_template_part("components/content"); ?>
        </article>
    </div>
    

<?php get_footer(); ?>
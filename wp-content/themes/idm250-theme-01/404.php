<?php get_header('404'); ?>

<div>
    <!-- any content to denote it's a 404 error page -->
    <h2 class="error-title"> 
        <?php the_field('404_title', 'option'); ?> 
    </h2>
    <!-- <img src="/wp-content/themes/idm250-theme-01/dist/images/broken-ceramic.png" class="error-img"> -->
    
    <?php 
            $image = get_field('404_image', 'option');
            if( !empty( $image ) ): ?>
            <img class="error-img" src="<?php echo esc_url($image['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
    <!-- <p class="error-message">The Page You’re Looking For Doesn’t Seem To Exist.</p> -->
    <p class="error-message">
     <?php the_field('404_content', 'option'); ?>
    </p>

</div>

<?php get_footer('simple'); ?>


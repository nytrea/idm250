<?php
/* Template Name: Collection Listing */
/**
 * This template is used to display the item listing page featuring products from the collection. 
 * Each image has details about the item associated with it.
 */
get_header();

$args = [
    'post_type' => 'Handicrafts', // Pulls in content from the handicrafts collection
    'posts_per_page' => -1,
    'order' => 'DESC',
    'orderby' => 'date',
];
$blog_posts_query = new WP_Query($args);
?>

<div class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:max-w-4xl">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
        <?php echo get_the_title(); ?>
      </h2>
      <div class="mt-16 space-y-20 lg:mt-20 lg:space-y-20 collection-items">
        <?php
        // Check if there are any posts
        if ($blog_posts_query->have_posts()) {
            // Loop through the posts
            while ($blog_posts_query->have_posts()) {
                // This is where the post's data is set up
                $blog_posts_query->the_post();
                // This is where we include the blog card component
                get_template_part('components/collection-item-card');
            }
            // Restore original Post Data
            wp_reset_postdata();
        } else {
            echo '<p>Sorry, no posts matched your criteria.</p>';
        }?>
      </div>
    </div>
  </div>
</div>
</div>


<?php get_footer(); ?>
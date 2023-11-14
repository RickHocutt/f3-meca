<?php
/**
* A Simple Category Template
*/

get_header(); ?>

<section id="primary" class="site-content">
  <div class="max-w-4xl mx-auto px-4 prose">

  <?php
  // Check if there are any posts to display
  if ( have_posts() ) : ?>

  <header class="archive-header">
    <h1 class="archive-title"> <?php single_cat_title('Backblasts for '); ?></h1>

    <?php
    // Display optional category description
    if ( category_description() ) : ?>
    <div class="archive-meta"><?php echo category_description(); ?></div>
    <?php endif; ?>
  </header>

  <?php
  // The Loop
  while ( have_posts() ) : the_post(); ?>

  <div class="mb-8">
    <h2><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <small class="text-subdued"><?php the_time('F jS, Y') ?></small>

    <?php the_excerpt(); ?>
  </div>

  <?php endwhile; ?>

  <?php else: ?>
    <p>Sorry, no posts matched your criteria.</p>

  <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
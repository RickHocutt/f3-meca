<?php
/*
  Template Name: Max Width
*/
?>


<?php
get_header(); ?>

  <div class="max-w-7xl mx-auto prose prose-lg dark:prose-invert px-8">
    <?php if (have_posts()) {
      while(have_posts()) {
        the_post(); ?>

          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <?php the_content(); ?>

      <?php }
    } ?>
  </div>

<?php get_footer();
<?php
get_header(); ?>

<div class="max-w-7xl mx-auto px-8">
  <div class="flex flex-wrap -mx-4">
    <div class="w-full lg:w-3/5 px-4">
      <?php if (have_posts()) {
        while(have_posts()) {
          the_post(); ?>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        <?php }
      } ?>
    </div>

    <div class="w-full lg:w-2/5 px-4 prose prose-lg dark:prose-invert">
      <iframe class="w-full aspect-video mt-8" src="https://www.youtube.com/embed/rGo03Y1ZZ3I?si=iQ-VL6FoCnBB62qf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

      <iframe class="mt-8" width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/458316465&show_comments=false"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/f3nation" title="F3 Nation" target="_blank" style="color: #cccccc; text-decoration: none;">F3 Nation</a> · <a href="https://soundcloud.com/f3nation/f3-nation-primer-what-is-f3" title="F3 Nation Primer: What is F3?" target="_blank" style="color: #cccccc; text-decoration: none;">F3 Nation Primer: What is F3?</a></div>
    </div>

  </div>
</div>

<?php get_footer();
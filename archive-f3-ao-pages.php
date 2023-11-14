<?php get_header(); ?>

<div class="px-8">
  <div class="flex flex-wrap -mx-4 prose prose-lg dark:prose-invert">

    <div class="w-full md:w-1/3 px-4">
        <h2>MeCa AOs</h2>
        <div class="flex mb-6 gap-4 justify-between">
            <a href="/workouts" class="button">Find Upcoming Workouts Near You</a>
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" class="inline mr-1 fill-black dark:fill-white">
                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M3.9 54.9C10.5 40.9 24.5 32 40 32H472c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9V448c0 12.1-6.8 23.2-17.7 28.6s-23.8
                    4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6V320.9L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z"/>
                </svg>
                Filter Results
            </button>
        </div>

        <?php if (have_posts()) {
            while(have_posts()) {
                the_post(); ?>

             <div class="bg-neutral-200 dark:bg-neutral-700 p-4 rounded-lg">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
                <a href="<?php the_permalink(); ?>" class="button">Visit AO Page</a>
             </div>

            <?php }
        } ?>

    </div>

    <div class="w-full md:w-2/3 px-4">
        <iframe src="https://map.f3nation.com/?lat=35.310301&#038;lon=-80.663289&#038;zoom=8" width="100%" height="550" frameborder="0"></iframe>
        <small>View <a href="https://map.f3nation.com/?lat=35.310301&#038;lon=-80.663289&#038;zoom=8">F3 Nation &#8211; Local</a> in a full screen map</small>
    </div>

    </div>
</div>

<?php get_footer();
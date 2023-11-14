<?php

get_header(); ?>

<div class="px-8 prose prose-lg dark:prose-invert">
    <?php if (have_posts()) {
    while(have_posts()) {
        the_post(); ?>

        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

        <div class="flex flex-wrap -mx-4">
            <div class="w-1/2 px-4">
                <h2>Schedule</h2>

                <div id="visualization" class="my-8"></div>

                <div class="my-8"><a href="/schedule" class="button">All MeCa Workouts</a></div>


                <!-- ================================
                    TODO: Change hardcoded AO name in query below to dynamic name for filtered schedule results
                ================================ -->


                <script>
                    // Load the Visualization API and the corechart package.
                    google.charts.load('current', {'packages':['corechart', 'controls', 'table']});

                    // Set a callback to run when the Google Visualization API is loaded.
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        // Specify the URL of your Google Spreadsheet.
                        var spreadsheetUrl = 'https://docs.google.com/spreadsheets/d/1-YDu1Wfo8D4Ap8sSxxQeG-prI2EvgOHgdDafZww-uRQ/edit#gid=1189237817';

                        // Use the Google Visualization API Query Language to select and filter data.
                        var query = new google.visualization.Query(spreadsheetUrl);
                        query.setQuery("SELECT * WHERE B  = 'Tigertown'");  // Filter based on column B not being null.

                        // Send the query with a callback function.
                        query.send(handleQueryResponse);
                    }

                    function handleQueryResponse(response) {
                        if (response.isError()) {
                            console.error('Error in query: ' + response.getMessage() + ' ' + response.getDetailedMessage());
                            return;
                        }

                        // Create a DataTable from the query response.
                        var data = response.getDataTable();

                        // Create a table chart and set options.
                        var table = new google.visualization.Table(document.getElementById('visualization'));
                        var options = {
                            showRowNumber: false,
                            width: '100%'
                        };

                        // Draw the table chart with the filtered data.
                        table.draw(data, options);
                    }
                </script>

                <h2>More from this AO</h2>

                <?php the_content(); ?>
            </div>

            <?php  // Restore original post data
                    wp_reset_postdata();
                }
            } ?>

            <div class="w-1/2 px-4">
                <div class="mb-8">
                    <iframe style="border: 1px solid #aaa;" src="https://map.f3nation.com/?lat=35.310301&#038;lon=-80.663289&#038;zoom=8" width="100%" height="550" frameborder="0"></iframe>
                    <small>View <a href="https://map.f3nation.com/?lat=35.310301&#038;lon=-80.663289&#038;zoom=8">F3 Nation &#8211; Local</a> in a full screen map</small>
                </div>

                <h2>Backblasts</h2>

                <?php
                    // Set the category ID or slug
                    $category = 'f3rollingstone';

                    // Define the query arguments
                    $args = array(
                        'category_name' => $category,
                        'post_type' => 'post', // Change this if you're using a custom post type
                        'posts_per_page' => 1, // Use -1 to get all posts in the category
                    );

                    // Instantiate the query
                    $query = new WP_Query($args);

                    // Check if there are any posts
                    if ($query->have_posts()) {
                        // Loop through the posts
                        while ($query->have_posts()) {
                            $query->the_post();

                            // Display post content or do something else
                            the_title('<h3>', '</h3>');
                            the_content();
                        }

                        // Restore original post data
                        wp_reset_postdata();
                    } else {
                        // If no posts are found
                        echo 'No posts found';
                    }
                ?>

                <div><a href="/category/f3rollingstone/" class="button mt-4">All <?php the_title(); ?> Backblasts</a></div>
            </div>

    </div>
</div>

<?php get_footer();
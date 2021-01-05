<?php

get_header();

?>
<div class="container">
    <div>
        <a href="<?php echo site_url();?>"> <img src="<?php echo get_theme_file_uri('/images/logo.png') ?>" style="width:50%"></a>
        <hr>
        <div class="row">
            <div class="col-sm-6 d-flex align-items-stretch">
                <div class="card rounded-lg"><div class="card-header rounded-lg text-uppercase text-secondary font-weight-bolder">Welcome to the site</div><div class="card-body">
                        <p>This is a small business dedicated to making equally small and friendly websites for personal use, for instance blog sites, and
                            also business use. This could be anything from selling hats to photography. Or even a hobby site, like archery . Of course wordpress sites
                            are a common request, and we can make one from scratch , move one that already exists over to our hosting platform, or make adjustments to one that
                            already exists. </p>
                        <h5>Hosting</h5>
                        <p> Don't worry if you dont know what this means! Hosting is basically where the website lives, and 99% of the time that is in the cloud. We use
                            <a href="https://www.digitalocean.com">Digital Ocean</a> as our hosting platform, which has a lot of benefits and is explained in more detail <a href="#">here .</a></p>

                    </div></div></div>
            <div class="col-sm-6 d-flex align-items-stretch">
                <div class="card rounded-lg"><div class="card-header rounded-lg text-uppercase text-secondary font-weight-bolder">Our Services</div><div class="card-body">
                        <p>The field of web development is pretty large, and can be very confusing if you're not that technical , which makes choosing
                            a website for your business even more of a headache. To help matters along we have listed all the different types of work we do,
                            starting with the most common requests , and going onto more technical types of work </p>
                        <ul>
                            <li> Personal / Business website (wordpress or bespoke) </li>
                            <li> Moving a site to a different server</li>
                            <li> Hosting a website that already exists</li>
                            <li> E-commerce site using wordpress</li>
                            <li> Laravel / Vue websites for e-commerce or more complex server side cases</li>


                        </ul>
                        <p> Obviously we can accomodate other requests to do with web development and dev ops, please get in touch ! </p>

                    </div></div></div>



        </div>
        <hr>
        <div class="card rounded-lg">
            <div class="card-header rounded-lg text-uppercase text-secondary font-weight-bolder has-text-align-center"> Latest from the Blog </div>
            <div class="card-body">
<ul style="list-style-type: none">
            <?php
            // Define our WP Query Parameters
            $the_query = new WP_Query( 'posts_per_page=3' ); ?>


            <?php
            // Start our WP Query
            while ($the_query -> have_posts()) : $the_query -> the_post();
// Display the Post Title with Hyperlink
                ?>


                <li ><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>


                <li><?php
                    // Display the Post Excerpt
                    the_excerpt(); ?></li>


            <?php
// Repeat the process and reset once it hits the limit
            endwhile;
            wp_reset_postdata();
            ?>
</ul></div>
        </div>
        <hr>
        <div class="card rounded-lg">
            <div class="card-header rounded-lg text-uppercase text-secondary font-weight-bolder has-text-align-center"> Latest Articles </div>
            <div class="card-body">
                <ul style="list-style-type: none">
                    <?php
                    // Define our WP Query Parameters
                    $articles_query = new WP_Query( array(
                            'posts_per_page'=> 2,
                        'post_type' => 'article')); ?>


                    <?php
                    // Start our WP Query
                    while ($articles_query -> have_posts()) : $articles_query -> the_post();
// Display the Post Title with Hyperlink
                        ?>


                        <li ><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>


                        <li><?php
                            // Display the Post Excerpt
                            the_excerpt(); ?></li>


                    <?php
// Repeat the process and reset once it hits the limit
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </ul></div>
        </div>
        <hr>
        <div class="card"><div class="card-header text-uppercase text-secondary font-weight-bolder"> Website Portfolio </div>

            <div class="row p-3">
                <?php
                $portfolios = new WP_Query(array(
                        'post_type'=> 'portfolio',
                ));
               while($portfolios->have_posts()) {
                   $portfolios->the_post();

                   ?>
                   <div class="col-4 d-flex align-items-stretch"><div class="card"><a href="<?php the_permalink();?>"><img src="<?php  echo get_field('portfolio_image');?>" width="100%" class="text-align-center"/></a></div></div>

<?php } ?>

            </div>
        </div>
    </div>

    <?php

    get_footer();
    ?>

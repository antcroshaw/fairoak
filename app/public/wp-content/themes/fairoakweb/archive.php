<?php

get_header();

?>
<div class="container">

    <div>
        <a href="<?php echo site_url();?>"><img src="<?php echo get_theme_file_uri('/images/logo.png') ?>" style="width:50%"></a>
        <hr>
        <div class="metabox metabox--with-home-link">
            <p><a class="metabox__blog-home-link" href="<?php echo site_url('/blog'); ?>">
                    <i class="fa fa-home" aria-hidden="true"></i> Blog Home</a>
                <span class="metabox__main"><?php the_archive_title(); ?></span></p>
        </div>
        <?php
        while(have_posts()){
            the_post();?>
            <div class="card">
                <h5 class="card-header"><a href="<?php the_permalink(); ?>"><?php  the_title(); ?></a></h5>
                <div class="metabox">
                    <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?>
                        in <?php echo get_the_category_list(', ')?></p>
                </div>

                <div class="card-body">
                    <?php the_excerpt(); ?>
                    <p><a class="btn btn-primary" href="<?php  the_permalink();?>">Continue reading</a></p>
                </div>
            </div>
            <hr>
            <?php
        }


        ?>
    </div>
    <?php

    get_footer();

    ?>

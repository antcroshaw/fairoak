<?php
get_header();

while(have_posts()){
    the_post(); ?>
<div class="container container--narrow page-section">


    <img src="<?php echo get_theme_file_uri('/images/logo.png') ?>" style="width:50%">
    <hr>
    <div class="row">
        <div class="col-12 rounded-lg"><div class="card">
                <div class="card-header rounded-lg text-uppercase text-secondary font-weight-bolder"><?php the_title(); ?></div>
                <div class="card-body rounded-lg">


        <div class="generic-content"><?php the_content(); ?></div>
    </div>



            <div class="metabox metabox--with-home-link">
                <p><a class="metabox__blog-home-link" href="<?php echo site_url('/blog'); ?>"><i class="fa fa-home"
                                                                                                 aria-hidden="true"></i> Blog Home</a> <span class="metabox__main">Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?>
                           in <?php echo get_the_category_list(', ')?></span></p>
            </div>
        </div>
        </div>
    </div>

    </div>

<?php  }
get_footer();
?>

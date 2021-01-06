<?php
get_header();

while(have_posts()){
    the_post(); ?>
    <div class="container container--narrow page-section">


        <a href="<?php echo site_url() ?>">
            <img src="<?php echo get_theme_file_uri('/images/logo.png') ?>" style="width:50%"></a>
        <hr>
        <div class="row">
            <div class="col-12 rounded-lg"><div class="card">
                    <div class="card-header rounded-lg text-uppercase text-secondary text-center font-weight-bolder"><?php the_title(); ?></div>
                    <div class="card-body rounded-lg">


                        <div class="generic-content text-muted"><?php the_content(); ?></div>
                    </div>



                    <div class="metabox metabox--with-home-link">
                        <p><a class="metabox__blog-home-link" href="<?php echo site_url('/portfolios'); ?>"><i class="fa fa-home"
                                                                                                             aria-hidden="true"></i>Portfolio Home</a> <span class="metabox__main"></p>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php  }
get_footer();
?>



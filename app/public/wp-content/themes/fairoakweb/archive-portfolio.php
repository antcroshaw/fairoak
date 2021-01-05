<?php

get_header();

?>
<div class="container">

    <div>
        <a href="<?php echo site_url();?>"><img src="<?php echo get_theme_file_uri('/images/logo.png') ?>" style="width:50%"></a>
        <hr>

        <?php

        while(have_posts()){
            the_post();?>
            <div class="card">
                <h5 class="card-header"><a href="<?php the_permalink(); ?>"><?php  the_title(); ?></a></h5>


                <div class="card-body">
                    <div class="row">
                    <div class="col-6"><img src="<?php  echo get_field('portfolio_image');?>" width="75%" class="text-align-left"/></div>
                        <div class="col-6 text-muted" ><?php the_excerpt(); ?></div></div>
                    <hr>

                        <p class="p-3 text-center"><a class="btn-sm btn-secondary" href="<?php  the_permalink();?>">Continue reading</a></p></div>
                </div>

            <hr>
            <?php
        }


        ?>
    </div>
    <?php

    get_footer();

    ?>



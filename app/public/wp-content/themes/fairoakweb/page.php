<?php
get_header();

?>
<div class="container container--narrow page-section">


    <img src="<?php echo get_theme_file_uri('/images/logo.png') ?>" style="width:50%">
    <hr>
        <div class="row">
            <div class="col-12 rounded-lg"><div class="card">
                    <div class="card-header rounded-lg text-uppercase text-secondary font-weight-bolder"><?php the_title(); ?></div>
                <div class="card-body rounded-lg">
    <?php the_content(); ?>


</div>
</div>
 <hr>
    <?php

get_footer();
?>

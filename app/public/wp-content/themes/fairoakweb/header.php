<!doctype html>
<html lang="<? language_attributes();?>">
<head>
    <meta charset="<?php bloginfo('charset');?>"
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?php wp_head();
    ?>
</head>
<body <?php body_class();?>>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php if(is_page('home')) echo 'isCurrentPage'?>" href="<?php echo site_url(); ?>">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if(is_page('about-me')) echo 'isCurrentPage'?>" href="<?php echo site_url('about-me') ?>">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if(get_post_type() == 'post') echo 'isCurrentPage'?>" href="<?php echo site_url('blog') ?>">Blog</a>
                </li>


            </ul>
        </div>
    </nav>
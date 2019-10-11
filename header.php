<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    
    <?php wp_head(); ?>
</head>

<body>
    <header>
    <a class="screen-reader-text skip-link" href="#maincontent"
     alt="<?php esc_html_e( 'Skip to content' ); ?>"><?php esc_html_e( 'Skip to content'); ?></a>
    </header>

    <nav id="slideout-menu" role="mobile navigation">
        <ul>
            <li>
                <a href="<?php echo site_url(''); ?>">Home</a>
            </li>
            <li>
                <a href="<?php echo site_url('/blog'); ?>">Blogs</a>
            </li>
            <li>
                <a href="<?php echo site_url('/project '); ?>">Projects</a>
            </li>
            <li>
                <a href="<?php echo site_url('/about'); ?>">About</a>
            </li>
                <div class="searchbox-slide-menu">
                    <?php get_search_form(); ?>
                </div>
            </ul>
</nav>

    <nav role="navigation" role="navigation" aria-label="Main">
        <div id="logo-img">
            <a href="<?php echo site_url(''); ?>">
               <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/cs-home.png" alt="CScoding Logo">-->
            </a>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                <a  href="<?php echo site_url(''); ?>"
                    <?php if(is_front_page()) echo 'class="active"' ?>>
                Home</a>
            </li>
            <li>
                <a href="<?php echo site_url('/blog'); ?>"
                 <?php if(get_post_type() == 'post') echo 'class="active"' ?>
                     >Blog
                 </a>
            </li>
            <li>
                <a href="<?php echo site_url('/project'); ?>"
                 <?php if(get_post_type() == 'project') echo 'class="active"' ?>
                 >Projects</a>
            </li>
            <li>
                <a href="<?php echo site_url('/about'); ?>"
                <?php if(is_page('about')) echo 'class="active"' ?>>
                About</a>
            </li>
            <li>
                <div id="search-icon">
                    <i class="fas fa-search"></i>
                </div>
            </li>
        </ul>
    </nav>

    <div id="searchbox" role="search">
        <?php get_search_form(); ?>
    </div>

    <?php if(!is_front_page()) { ?>
      <main>
    <?php } ?>
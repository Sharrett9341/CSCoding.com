<?php 


get_header();?>

<div role="banner" id="banner">
    <div class="banner-text">
        <h1>Chris Sharrett</h1>
        <h3> Web Designer & Wordpress Developer</h3>
    </div>
</div>

<main id="main-content">
     <a href="blogslist.html">
        <h2 class="section-heading">All Projects</h2>
    </a>

    <section>
        
    <?php 
        $args = array(
        'post_type' => 'Project',
        'posts_per_page' => 2,
        );
    
    $Projects = new WP_Query($args);

    while ($Projects->have_posts()){
    $Projects -> the_post();

    

    ?>
 
        <div class="card">
            <div class="card-image">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
                </a>
            </div>

            <div class="card-description">
                <a href="<?php the_permalink();  ?>">
                    <h3><?php the_title(); ?></h3>
                </a>
                <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                </p>
                <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
            </div>
        </div>

        <?php }
         wp_reset_query(); 

         ?>
    </section>

    <a href="<?php echo site_url('/blog');?>">
        <h2 class="section-heading">All Blogs</h2>
    </a>
       <section>

    <?php 
        $args = array(
        'post_type' => 'post',
        'posts_per_page' => 2,
        );
    
    $blogposts = new WP_Query($args);

    while ($blogposts->have_posts()){
    $blogposts -> the_post();

    

    ?>
 
        <div class="card">
            <div class="card-image">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
                </a>
            </div>

            <div class="card-description">
                <a href="<?php the_permalink();  ?>">
                    <h3><?php the_title(); ?></h3>
                </a>
                <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                </p>
                <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
            </div>
        </div>

        <?php }
         wp_reset_query(); 

         ?>

    </section>

   
    <h2 class="section-heading">Source Code</h2>

    <section id="section-source">
       
        <a href="https://github.com/TheCSCoding" class="btn-readmore">GitHub Profile</a>
    </section>


<?php get_footer(); ?>
    

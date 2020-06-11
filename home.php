<?php 
/**
 * blog-page
 */
?>

<?php get_header();?>

<?php 
    $blog_title = __('Blog', 'theme');   
?>

<section>
    <div class="container mt-3">
        <div class="row"> 

            <div class="col-12 mt-5 mb-5">
                <h1 class="text-primary">   
                    <?php echo $blog_title; ?>
                </h1>
            </div>

            <?php  // The Loop
                if ( have_posts() ) {
                    while (have_posts() ) {
                    the_post(); ?> 
                    <div class="col-lg-3 col-md-6"> 
                        <?php get_template_part('template_parts/teases/tease-post')?>
                    </div>
                    <?php
                        }   
                    } else {
                        // no posts found
                    }
                    /* Restore original Post Data */
                    wp_reset_postdata();
                ?>
        </div>  
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-3">                
                <?php get_template_part('template_parts/pagination'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
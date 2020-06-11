<?php 
/** 
 * category-page
 */
?>

<?php get_header();?>

<section>
    <div class="container mt-3">
        <div class="row"> 
                <h1>
                    <?php echo __('Blog', 'theme'); ?>
                </h1>
            <div class="col-12 mt-3 mb-5">
                <h2 class="text-primary mt-3">   
                    <?php single_cat_title (); ?>
                </h2>
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

<?php get_footer();?>
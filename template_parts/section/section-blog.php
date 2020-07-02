<?php
/**
 * The homepage blog section file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Sam_Theme
 * @since 1.0.0
 */
?>
  

  <?php
 
 $args = array(
     'post_per_page' => 4,
     'post_type' => 'post',
     'post_status' => 'publish',
     'order'   => 'DESC', 
 );
 
 // The Query
 $the_query = new WP_Query( $args );
 
 ?>


<section>
    <div class="container">
        <div class="row"> 
        
            <div class="col-12 mt-5 mb-5">
                <h2 class="text-primary">BLOG</h2>
            </div>

        <?php //the loop
            if ( $the_query->have_posts() ) {
            
            while ( $the_query->have_posts() ) {
                $the_query->the_post();?>
                
                <div class="col-lg-3 col-md-6"> 
                    <?php get_template_part('template_parts/teases/tease-post') ?>
                </div>
        <?php
                
                
                }
                
            } else {
                    // no posts found
                }
        ?>
        <?php
            /* Restore original Post Data */
            wp_reset_postdata();
        ?>

        </div>
        <div class="row"> 
            <div class="col-12 mt-5 mb-5">
                <h2 class="text-primary coursive">«Preparati per una vacanza da sogno».</h2>  
            </div>
        </div>
    </div>
</section>
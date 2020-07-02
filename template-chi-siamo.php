<?php
/**
 * Template Name: Chi siamo B
 * 
 */
?>

<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col">

        <?php 
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post();  ?>
                <h1 class="text-primary mt-5">
                    <?php the_title(); ?>
                </h1>
                <div>

                    
                    <p>
                        <?php the_content(); ?>
                    </p>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>


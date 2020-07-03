<?php 
// * single page 
?>


<?php get_header(); ?>

<main>
    <div class="container mb-5" style="margin-top: 100px;">
        <div class="row">
            <div class="col-lg-8">
                <?php 
                    if ( have_posts() ) :
                        while (have_posts() ) :
                            the_post();?>

                            <h1 class="text-primary"><?php the_title(); ?></h1>

                            <?php $categories = get_the_category();?>
                                    <!-- <img src="https://source.unsplash.com/random" class="img-fluid" width="270px" height="255px"><br>  -->

                                    <?php if (!empty($categories) && isset($categories[0])) :?>
                                        <?php
                                        $link_categoria = get_category_link($categories[0]);
                                        $nome_categoria = $categories[0]->name;
                                        ?>
                                        <a href ="<?php echo $link_categoria; ?>"><span class="categoria"> <?php echo $nome_categoria ?> </span></a>  
                            <?php endif ?>
                            <span class="data-copy"><?php the_date(); ?></span>
                            <div class="mt-3">
                                <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                            </div>
                            <div class="mt-3">
                                <?php the_content(); ?>
                            </div>
                            <p><?php the_tags(); ?></p>
                            <?php
                        endwhile;           
                    endif;
                ?>
            </div>
            <div class="col-lg-4 mt-3">
                <?php get_template_part ( 'template_parts/main-sidebar' ); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
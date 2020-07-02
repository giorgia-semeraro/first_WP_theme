
<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Jo theme
 * @since Jo theme 1.0
 */

get_header(); ?>

    <div class="container search-container">
        <div class="row mb-5">
            <div class="col" style="margin-top: 60px;">

            <?php get_search_form(); ?>

            <?php if ( have_posts() ) : ?>

                <header class="page-header mt-3">
                    <h1 class="page-title text-primary"><?php printf( __( 'Risultati di ricerca per: %s', 'theme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                </header><!-- .page-header -->
            
            <div class="row mt-5">
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="col-lg-4">
                        <?php get_template_part( 'template_parts/teases/tease', get_post_type() ); ?>
                    </div>
                <?php endwhile; ?>
            </div>

        <?php else : ?>

            <h2 class="page-title text-primary"><?php printf( __( 'Non ci sono risultati di ricerca per: %s', 'theme' ), '<span>' . get_search_query() . '</span>' ); ?></h2>

        <?php endif; ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>






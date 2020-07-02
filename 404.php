<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Sam_Theme
 * @since 1.0.0
 */

get_header(); ?>

<main class="full" id="site-content">
    <div class="container">
        <div class="row">
<<<<<<< HEAD
            <div class="col-lg-4">
                <div class="section-inner thin error404-content mt3">
=======
            <div class="col-lg-6">
                <div class="section-inner thin error404-content">
>>>>>>> release/Final_Work

                    <h1 class="entry-title text-primary mt-5"><?php _e( 'Ops! Pagina non trovata', 'sam-theme' ); ?></h1>

                    <div class="intro-text"><p><?php _e( 'Non è stato possibile trovare la pagina che stavi cercando. Potrebbe essere stata rimossa, oppure non è mai esistita.', 'sam-theme' ); ?></p></div>

                    <?php
                    get_search_form(
                        array(
                            'label' => __( '404 not found', 'sam-theme' ),
                        )
                    );
                    ?>

                </div><!-- .section-inner -->
            </div>
        </div>
    </div>
</main><!-- #site-content -->

<?php get_footer(); ?>
<?php
/**
 * Header file for pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Sam_Theme
 * @since 1.0.0
 */

?>

<?php get_header(); ?>

<?php
//wordpress logo
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
    //Display post content
    //print("<pre>".print_r($post,true)."</pre>");

    ?>

    <h1> <?php the_title(); ?> </h1>
    <div> <?php the_content(); ?> </div>
    <small> <?php the_excerpt(); ?> </small>

    <?php
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'samtheme');
endif;
?>


<?php get_footer(); ?>
<?php
/**
 * Comment
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Sam_Theme
 * @since 1.0.0
 */

?>

<?php get_header(); ?>

    <!-- page hero -->
    <?php get_template_part('template_parts/section/section', 'page-hero'); ?>

    <!-- section who we are -->
    <?php get_template_part('template_parts/section/section', 'who-we-are'); ?>

     <!-- section categories -->
     <?php get_template_part('template_parts/section/section', 'categories'); ?>

    <!-- section blog -->
    <?php get_template_part('template_parts/section/section', 'blog'); ?>

   

<?php get_footer(); ?>
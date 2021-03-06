<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Sam_Theme
 * @since 1.0.0
 */
?>

<?php get_header(); ?>

<?php 
    $archive_title = __('Archive', 'theme');

    if (is_category()) {
        $archive_title = single_cat_title ('', false);
    } elseif (is_post_type_archive ()) {
        $archive_title = __('Blog', 'theme');
    }
    
?>

<?php get_footer(); ?>
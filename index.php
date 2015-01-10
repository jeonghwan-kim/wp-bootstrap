<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage wp-bootstrap
 * @since wp-bootstrap
 */

get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-9">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part( 'content', get_post_format() ); ?>
      <?php endwhile; ?>
      <?php paging_nav(); ?>
    <?php else : ?>
      <h2 class="text-muted">Nothing Found</h2>
    <?php endif; ?>
    </div>

    <?php get_sidebar(); ?>
    <?php get_footer(); ?>

<?php
get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-lg-9">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part( 'content', get_post_format() ); ?>
          <?php post_nav(); ?>
        <?php endwhile; ?>
        <?php paging_nav(); ?>
      <?php endif; ?>
    </div>

    <?php get_sidebar(); ?>
    <?php get_footer(); ?>

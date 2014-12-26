<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-lg-9">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part( 'content', get_post_format() ); ?>
      <?php endwhile; ?>
    <?php else : ?>
      <h2 class="text-muted">Nothing Found</h2>
    <?php endif; ?>
    </div>

    <?php get_sidebar(); ?>
    <?php get_footer(); ?>

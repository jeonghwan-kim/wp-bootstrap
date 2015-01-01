<?php
get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-lg-9">
      <?php if (have_posts()) : ?>
        <header class="archive-header">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <span class="glyphicon glyphicon-folder-open"></span>
              <?php printf( '<strong>%s</strong>', single_cat_title( '', false ) ); ?>
            </div>
            <?php if ( category_description() ) : ?>
              <div class="panel-body">
                <div class="category-description"><?php echo category_description(); ?></div>
              </div>
            <?php endif; ?>
          </div>
        </header>

        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part( 'content', get_post_format() ); ?>
        <?php endwhile; ?>
      <?php else : ?>
        <h2 class="text-muted">Nothing Found</h2>
      <?php endif; ?>
    </div>

    <?php get_sidebar(); ?>
    <?php get_footer(); ?>

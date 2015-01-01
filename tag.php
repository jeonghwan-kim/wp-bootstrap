<?php
get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-lg-9">
      <?php if (have_posts()) : ?>
        <header">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <span class="glyphicon glyphicon-tag"></span>
              <?php printf( '<strong>%s</strong>', single_tag_title( '', false ) ); ?>
            </div>
            <?php if ( tag_description() ) : ?>
              <div class="panel-body">
                <div class="category-description"><?php echo tag_description(); ?></div>
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

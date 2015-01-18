<?php get_header(); ?>

<?php if (have_posts()) : ?>

  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
      <header>
        <div class="container">
          <h1 class="page-header"><?php the_title(); ?></h1>
          <div class="entry-meta"><?php entry_meta(); ?></div>
        </div>
      </header>
    </article>

    <div class="container">
      <div class="row">
        <?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
        <div class="col-md-9">
        <?php else : ?>
        <div class="col-md-12">
        <?php endif; ?>
          <?php get_template_part( 'content-single', get_post_format() ); ?>
          <div class=""><?php post_nav(); ?></div>
        </div>

        <?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
          <div class="col-md-3">
            <?php get_sidebar(); ?>
          </div>
        <?php endif; ?>
      </div>
    </div> <!-- .container -->
  <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>

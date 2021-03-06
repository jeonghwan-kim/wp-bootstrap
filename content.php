<article class="home" <?php post_class(); ?>>
  <header>
    <h2 class="page-header">
      <?php if ( is_search() | is_home() | is_category() | is_tag() ) : ?>
        <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
      <?php endif; ?>
    </h2>
    <div class="entry-meta">
      <?php entry_meta(); ?>
    </div>
  </header>

  <?php if ( is_search() | is_home() | is_category() | is_tag() ) : ?>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
    <?php new_excerpt_more(); ?>
  </div>
  <?php endif; ?>

  <footer class="entry-meta text-muted">
<!--    --><?php //edit_post_link( '편집', '<span class="edit-link">', '</span>' ); ?>
<!--    --><?php //if ( comments_open() ) : ?>
<!--      --><?php //comments_popup_link('', '댓글 1', '댓글 %'); ?>
<!--    --><?php //endif; ?>
  </footer>
</article>

<?php
function widgets_init() {
  register_sidebar( array(
      'name' => __( 'Main Sidebar', 'ej88ej' ),
      'id' => 'main-sidebar',
      'description' => __( 'This is main sidebar', 'ej88ej'),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
  ) );
}
add_action( 'widgets_init', 'widgets_init' );
?>

<?php if ( ! function_exists( 'twentytwelve_entry_meta' ) ) :
/**
 * Set up post entry meta.
 *
 * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own twentytwelve_entry_meta() to override in a child theme.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_entry_meta() {
  // Translators: used between list items, there is a space after the comma.
  $categories_list = get_the_category_list( __( ', ', 'twentytwelve' ) );

  // Translators: used between list items, there is a space after the comma.
  $tag_list = get_the_tag_list( '', __( ', ', 'twentytwelve' ) );

  $date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>',
      esc_url( get_permalink() ),
      esc_attr( get_the_time() ),
      esc_attr( get_the_date( 'c' ) ),
      esc_html( get_the_date() )
  );

  $author = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
      esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
      esc_attr( sprintf( 'View all posts by %s', get_the_author() ) ),
      get_the_author()
  );

  // Translators: 1 is category, 2 is tag, 3 is the date and 4 is the author's name.
  if ( $tag_list ) {
    $utility_text = 'This entry was posted in %1$s and tagged %2$s on %3$s<span class="by-author"> by %4$s</span>';
  } elseif ( $categories_list ) {
    $utility_text = 'This entry was posted in %1$s on %3$s<span class="by-author"> by %4$s</span>';
  } else {
    $utility_text = 'This entry was posted on %3$s<span class="by-author"> by %4$s</span>.';
  }

  printf(
      $utility_text,
      $categories_list,
      $tag_list,
      $date,
      $author
  );
}
endif;
?>
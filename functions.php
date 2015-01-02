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

  add_editor_style();
}
add_action( 'widgets_init', 'widgets_init' );

function setup() {
  register_nav_menu( 'primary', 'Primary Menu' );
}
add_action( 'after_setup_theme', 'setup' );

function new_excerpt_more() {
  return ' <a href="'. get_permalink( get_the_ID() ) . '"><small><span class="glyphicon glyphicon-circle-arrow-right"></span> 더보기</small></a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

if ( ! function_exists( 'entry_date' ) ) :
function entry_date( $echo = true ) {
  $date = sprintf(
      '<span class="date text-muted">' .
        '<span class="glyphicon glyphicon-calendar"></span>' .
        '<time class="entry-date" datetime="%1$s">%2$s</time>' .
      '</span>',
      esc_attr( get_the_date( 'c' ) ),
      esc_html( get_the_date() )
  );

  if ( $echo )
    echo $date;

  return $date;
}
endif;

if ( ! function_exists( 'entry_meta' ) ) :
function entry_meta() {
  if ( ! has_post_format( 'link' ) && 'post' == get_post_type() )
    entry_date();

  $categories_list = get_the_category_list(', ');
  if ( $categories_list ) {
    echo '<span class="categories-links">' .
           '<span class="glyphicon glyphicon-folder-open text-primary"></span>' .
           $categories_list .
         '</span>';
  }

  $tag_list = get_the_tag_list('', ', ');
  if ( $tag_list ) {
    echo '<span class="tags-links">' .
           '<span class="glyphicon glyphicon-tags text-primary"></span>' .
           $tag_list .
         '</span>';
  }
}
endif;

if ( ! function_exists( 'paging_nav' ) ) :
  function paging_nav() {
    global $wp_query;

    // Don't print empty markup if there's only one page.
    if ( $wp_query->max_num_pages < 2 )
      return;
    ?>
    <nav class="row">
      <div class="col-sm-6">
        <?php if ( get_next_posts_link() ) : ?>
          <?php next_posts_link( '<span class="glyphicon glyphicon-chevron-left"></span>이전글' ); ?>
        <?php endif; ?>
      </div>
      <div class="col-sm-6 text-right">
        <?php if ( get_previous_posts_link() ) : ?>
          <?php previous_posts_link( '다음글<span class="glyphicon glyphicon-chevron-right"></span>' ); ?>
        <?php endif; ?>
      </div>

  <?php
  }
endif;

if ( ! function_exists( 'post_nav' ) ) :
function post_nav() {
  global $post;

  // Don't print empty markup if there's nowhere to navigate.
  $previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
  $next     = get_adjacent_post( false, '', false );

  if ( ! $next && ! $previous )
    return;
  ?>

  <nav class="row">
    <div class="col-sm-6">
      <?php previous_post_link( '%link', _x( '<span class="glyphicon glyphicon-chevron-left"></span> 이전글: %title', 'Previous post link' ) ); ?>
    </div>
    <div class="col-sm-6 text-right">
      <?php next_post_link( '%link', _x( '다음글: %title <span class="glyphicon glyphicon-chevron-right"></span>', 'Next post link' ) ); ?>
    </div>
  </nav>
<?php
}
endif;

?>
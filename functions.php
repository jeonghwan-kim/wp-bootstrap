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

function setup() {
  register_nav_menu( 'primary', 'Primary Menu' );
}
add_action( 'after_setup_theme', 'setup' );

if ( ! function_exists( 'entry_date' ) ) :
function entry_date( $echo = true ) {
  $date = sprintf(
      '<span class="date text-primary">' .
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


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

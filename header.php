<html>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
</head>

<header class="site-header" role="banner">
  <hgroup>
    <h1 class="page-header site-title">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
         title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
         rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
      <small><?php bloginfo( 'description' ); ?></small>
    </h1>
  </hgroup>
</header>

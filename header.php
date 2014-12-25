<html>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
</head>

<header class="site-header" role="banner">
  <div class="container">
    <hgroup>
      <h1 class="site-title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
           title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
           rel="home">
          <?php bloginfo( 'name' ); ?>
        </a>
      </h1>
      <p class="site-description"><?php bloginfo( 'description' ); ?></p>
    </hgroup>
  </div>
</header>

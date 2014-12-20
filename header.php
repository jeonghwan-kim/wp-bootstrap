<html>
<head>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
</head>

<header class="site-header" role="banner">
  <hgroup>
    <h1 class="site-title">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
         title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
         rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1>
    <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
  </hgroup>
</header>

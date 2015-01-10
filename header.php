<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); echo get_bloginfo('name', 'display');?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="site-header" role="banner">
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                  data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand"
             href="<?php echo esc_url( home_url( '/' ) ); ?>"
             title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
             rel="home">
            <?php bloginfo( 'name' ); ?>
          </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse" aria-expanded="false">
          <form role="search" method="get" id="searchform" class="navbar-form navbar-right"
                action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input type="text" class="form-control search-input"
                   value="<?php echo get_search_query(); ?>"
                   name="s" id="s" placeholder="검색" />
          </form>
        </div>
      </div>
    </nav>
  </header>

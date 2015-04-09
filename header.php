<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package GorMonjeeTheme
 */
?><!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <nav class="navbar top-nav" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_directory'); ?>/img/gormonjee_g.svg" alt="Gormonjee Logo"><img src="<?php bloginfo('template_directory'); ?>/img/gormonjee_text.svg" alt="Gormonjee Inc" class="hidden-xs logotype"></a>
      </div>

      <button type="button" class="btn btn-primary btn-lg pull-right" data-toggle="modal" data-target="#myModal">
        Sign Up
      </button>

      <?php get_template_part('modal'); ?>
        
      <div id="navbar" class="navbar-collapse collapse navbar-right">
        <?php wp_nav_menu( array( 'theme_location' => 'primary',
                                  'menu_id' => 'primary-menu',
                                  'container' => false,
                                  'menu_class'=>'nav nav-pills' ) ); ?>
      </div><!--/.navbar-collapse -->
    </div>
  </nav>
<!doctype html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  
  <title><?php wp_title('|',true,'right'); bloginfo('name'); ?></title>
    
  <meta name="author" content="">
  <meta name="description" content="<?php bloginfo('description'); ?>">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />     
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
  <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon.png">
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('title'); ?> RSS Feed" href="/feed/" />
  <script src="https://use.typekit.net/ryr4sgg.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="page-container">
    <header>
      <nav class="site-nav">
        <div class="site-nav__title">
          <a class="site-nav__link" href="/">Haik Avanian</a>
        </div>
        <div class="site-nav__menu">
          <ul class="site-nav__items">
            <li class="site-nav__item--left">
              <a class="site-nav__link" href="/">View Catalog</a>
            </li>
            <li class="site-nav__item">
              <a class="site-nav__link" href="/blog">Blog</a>
            </li>
            <li class="site-nav__item">
              <a class="site-nav__link" href="/information">Information</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="site-headline">
        <div class="site-headline__title">
          <h1><?php the_title(); ?></h1>
        </div>
        <div class="site-headline__caption">
          <span><?php the_excerpt(); ?></span>
        </div>
      </div>
    </header>
    
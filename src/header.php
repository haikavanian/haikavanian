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
            <?php
            $nav_items = wp_get_nav_menu_items("Header");
            foreach($nav_items as $nav_item):
              $a_class = implode(' ', $nav_item->classes);
              $link = $nav_item->url;
              $title = $nav_item->title;
              $active = get_the_id() == $nav_item->object_id || ((is_home() || is_single()) && $nav_item->object_id == get_option("page_for_posts"));
              $a_class .= $active ? ' active' : '';
              ?>
              <li class="site-nav__item <?php if($active): ?>site-nav__item--active<?php endif; ?>">
                <a class="site-nav__link" href="<?php echo $link; ?>"><?php echo $title; ?></a>
              </li>
              <?php
            endforeach;
            ?>
          </ul>
        </div>
      </nav>
      <div class="site-headline">
        <div class="site-headline__title">
          <h1><?php echo (is_home()) ? get_the_title(get_option("page_for_posts")) : get_the_title(); ?></h1>
        </div>
        <div class="site-headline__caption">
          <span><?php the_excerpt(); ?></span>
        </div>
      </div>
    </header>
    
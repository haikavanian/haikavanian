<?php get_header(); ?>
<?php while(have_posts()):
  the_post();
  ?>
  <article class="blog-post">
    <div class="blog-post__header">
      <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
      <span><?php the_date('m M Y'); ?></span>
    </div>
    <div class="blog-post__content"><?php the_content(); ?></div>
  </article>
  <?php
endwhile; ?>
<?php get_footer(); ?>

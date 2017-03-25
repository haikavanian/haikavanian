<?php get_header(); ?>
<?php if(have_posts()):
  the_post();
  ?>
  <article class="blog-post">
    <div class="blog-post__header">
      <span><?php the_date('m M Y'); ?></span>
    </div>
    <div><?php the_content(); ?></div>
  </article>
  <?php
endif; ?>
<?php get_footer(); ?>

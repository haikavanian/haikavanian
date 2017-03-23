<?php get_header(); ?>
<?php if(have_posts()):
  the_post();
  ?>
  <article class="blog-post">
    <div><?php the_content(); ?></div>
  </article>
  <?php
endif; ?>
<?php get_footer(); ?>

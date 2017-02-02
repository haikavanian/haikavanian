<?php 
get_header();
$args = array(
  "post_type" => "work",
  "posts_per_page" => -1,
  "orderby" => "menu_order",
  "order" => "desc"
);
$testimonials = new WP_Query($args);
?>
<div class="work-pile">
  <ul class="work-pile__items">
  <?php
  while($testimonials->have_posts()):
    $testimonials->the_post();
    ?>
    <li class="work-pile__item">
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
    </li>
    <?php
    endwhile;
    ?>
  </ul>
</div>
<?php
get_footer(); ?>

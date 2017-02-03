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
    $x = get_field('x', get_the_ID());
    $y = get_field('y', get_the_ID());
    ?>
    <li class="work-pile__item" style="left: <?php echo $x; ?>%; top: <?php echo $y; ?>%;">
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
      </a>
    </li>
    <?php
    endwhile;
    ?>
  </ul>
</div>
<?php
get_footer(); ?>

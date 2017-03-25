    <footer class="site-footer">
      <div class="site-footer__imprint">
        <span>&copy; <?php echo date('Y'); ?> Haik Avanian. All Rights Reserved.</span>
      </div>
      <div class="site-footer__contact">
        <span>Get in touch today!</span>
        <ul class="site-footer__social-items">
        <?php
          $nav_items = wp_get_nav_menu_items("Footer social links");
          foreach($nav_items as $nav_item):
          ?>
          <li class="site-footer__social-item">
            <a target="_blank" class="site-footer__social-link--<?php echo $nav_item->post_name; ?>" href="<?php echo $nav_item->url; ?>"><span><?php echo $nav_item->title; ?></span></a>
          </li>
          <?php
          endforeach; 
        ?>
        </ul>
      </div>
    </footer>
  </div>
  <!-- Theme hook -->
  <?php wp_footer(); ?>
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
  <!--[if lt IE 7 ]>
  <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js"></script>
  <script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script>
  <![endif]-->
</body>
</html>
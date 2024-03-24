<?php if (!is_404()) : ?>


  <footer>
    <div class="container">
      <div class="footer__container">
        <div class="footer__info">
          <?php
          if (function_exists('the_custom_logo')) {
            the_custom_logo();
          }
          ?>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
          <?php
          wp_nav_menu(array(
            'theme_location' => 'social-menu',
            'container' => 'div',
            'container_id' => 'social-footer-menu',
            'container_class' => 'footer__menu',
            'menu_class' => 'footer__list',
            'depth' => 1
          ));
          ?>
        </div>
        <div class="footer__col">
          <span>Jevis Luxury</span>
          <?php
          wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'container' => 'div',
            'container_id' => 'footer-menu',
            'depth' => 1
          ));
          ?>
        </div>
        <div class="footer__col">
          <span>Legal</span>
          <?php
          wp_nav_menu(array(
            'theme_location' => 'legal-menu',
            'container' => 'div',
            'container_id' => 'legal-menu',
            'depth' => 1
          ));
          ?>
        </div>
        <div class="footer__col">
          <span>Info</span>
          <?php
          wp_nav_menu(array(
            'theme_location' => 'info-menu',
            'container' => 'div',
            'container_id' => 'legal-menu',
            'depth' => 1
          ));
          ?>
        </div>
      </div>
      <p class="mt-2">© <?php bloginfo('name') ?> <?php echo date("Y") ?> | All Rights Reserved.</p>
    </div>
  </footer>

<?php endif ?>

</main>

<?php wp_footer() ?>

</body>

</html>
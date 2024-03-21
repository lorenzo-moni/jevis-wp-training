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
        <div class="footer__menu">
          <ul class="footer__list">
            <li class="menu-item">
              <a href="https://instagram.com" target="_blank"><i class="ri-instagram-line ri-2x"></i></a>
            </li>
            <li class="menu-item">
              <a href="https://facebook.com" target="_blank"><i class="ri-facebook-line ri-2x"></i></a>
            </li>
            <li class="menu-item">
              <a href="https://twitter.com" target="_blank"><i class="ri-twitter-x-line ri-2x"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="footer__col">
        <span>Jevis Luxury</span>
        <ul>
          <li><a href="/home.html">Home</a></li>
          <li><a href="/experiences.html">Experiences</a></li>
          <li><a href="/contacts.html">Contacts</a></li>
        </ul>
      </div>
      <div class="footer__col">
        <span>Experiences</span>
        <ul>
          <li><a href="/single.html">Snorkeling</a></li>
          <li><a href="/single.html">Trekking</a></li>
          <li><a href="/single.html">Wine Tasting</a></li>
        </ul>
      </div>
      <div class="footer__col">
        <span>Legal</span>
        <ul>
          <li><a href="/privacy.html">Privacy Policy</a></li>
          <li><a href="/cookie.html">Cookie Policy</a></li>
          <li><a href="/terms.html">Terms and Services</a></li>
        </ul>
      </div>
      <div class="footer__col">
        <span>Info</span>
        <ul>
          <li>P.IVA XXXXXXXXX</li>
          <li>info@jevis.it</li>
          <li>Via del Risorgimento</li>
        </ul>
      </div>
    </div>
    <p class="mt-2">© JEVIS Luxury 2024 | All Rights Reserved.</p>
  </div>
</footer>
</main>

<?php wp_footer() ?>

</body>

</html>
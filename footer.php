<?php
/**
 * The template for displaying the footer
*
 * @package WordPress
 * @subpackage WordPress Start Me Up
 */
?>

<footer class="footer">
  <section class="footer-logo-wrapper">
    <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Ola Ondá Guesthouse">
  </section>
    <section class="vcard">
      <p class="fn org">Olá Onda Ericeira<br/></p>
      <p class="adr">
        <span class="street-address">Rua Encosta da Abadia, 4</span>
        <span class="postal-code">2655-432</span>
        <span class="locality">Ericeira</span>
      </p>
      <a class="email underline" href="mailto:info@ola-onda-ericeira.com">info@ola-onda-ericeira.com</a>
      <p class="tel phone-number">+351 937 323 140</p>
    </section>

  <section class="social">
    <div class="content">
      <h1>#olaondaericeira</h1>
      <ul class="social-links">
        <li>
          <a href="https://www.facebook.com/olaondaericeira" target="_blank" title="Ola Ondá on Facebook">
            <svg width="97px" height="97px" viewBox="889 11389 96 99" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="iconmonstr-facebook-5" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(889.000000, 11389.322971)">
                    <circle class="bg" fill="#FFE581" cx="48" cy="49" r="41"></circle>
                    <path d="M48,8.16666667 C70.056,8.16666667 88,26.4845 88,49 C88,71.5155 70.056,89.8333333 48,89.8333333 C25.944,89.8333333 8,71.5155 8,49 C8,26.4845 25.944,8.16666667 48,8.16666667 Z M48,0 C21.492,0 0,21.93975 0,49 C0,76.06025 21.492,98 48,98 C74.508,98 96,76.06025 96,49 C96,21.93975 74.508,0 48,0 Z M40,40.8333333 L32,40.8333333 L32,49 L40,49 L40,73.5 L52,73.5 L52,49 L59.28,49 L60,40.8333333 L52,40.8333333 L52,37.4319167 C52,35.4800833 52.384,34.7083333 54.232,34.7083333 L60,34.7083333 L60,24.5 L50.384,24.5 C43.192,24.5 40,27.734 40,33.9243333 L40,40.8333333 Z" id="Shape" fill="#FFFFFF" fill-rule="nonzero"></path>
                    <path class="facebook" d="M40,40.8333333 L32,40.8333333 L32,49 L40,49 L40,73.5 L52,73.5 L52,49 L59.28,49 L60,40.8333333 L52,40.8333333 L52,37.4319167 C52,35.4800833 52.384,34.7083333 54.232,34.7083333 L60,34.7083333 L60,24.5 L50.384,24.5 C43.192,24.5 40,27.734 40,33.9243333 L40,40.8333333 Z" id="facebook" fill="#FFFFFF"></path>
                </g>
            </svg>
          </a>
        </li>
        <li>
          <a href="https://www.pinterest.com/olondaguesthous/" target="_blank" title="Ola Ondá on Pinterest">
            <svg width="97px" height="97px" viewBox="1082 11389 97 99" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="pinterest-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(1082.000000, 11389.322971)">
                    <circle class="bg" fill="#FFE581" cx="48" cy="48.6770294" r="41"></circle>
                    <path d="M48.2045898,8.14265951 C70.3545989,8.14265951 88.3750814,26.4066448 88.3750814,48.855957 C88.3750814,71.3052693 70.3545989,89.5692546 48.2045898,89.5692546 C26.0545808,89.5692546 8.03409831,71.3052693 8.03409831,48.855957 C8.03409831,26.4066448 26.0545808,8.14265951 48.2045898,8.14265951 Z M48.2045898,0 C21.5836051,0 0,21.8752548 0,48.855957 C0,75.8366593 21.5836051,97.7119141 48.2045898,97.7119141 C74.8255746,97.7119141 96.4091797,75.8366593 96.4091797,48.855957 C96.4091797,21.8752548 74.8255746,0 48.2045898,0 Z M48.2045898,24.4279785 C34.896106,24.4279785 24.1022949,35.3635702 24.1022949,48.855957 C24.1022949,59.2052773 30.4532496,68.0400628 39.4152863,71.6024764 C39.2063997,69.6685947 39.0135814,66.7046667 39.5036614,64.5957179 C39.9375027,62.6903355 42.3276469,52.4550125 42.3276469,52.4550125 C42.3276469,52.4550125 41.600561,50.9934052 41.600561,48.8274577 C41.600561,45.4319687 43.5488299,42.8955303 45.9670935,42.8955303 C48.0238226,42.8955303 49.0160338,44.4629922 49.0160338,46.3358039 C49.0160338,48.4366101 47.6984417,51.5674626 47.0195603,54.4703208 C46.4491394,56.904976 48.2246751,58.8836422 50.590717,58.8836422 C54.8728914,58.8836422 58.1708888,54.3074676 58.1708888,47.6996994 C58.1708888,41.8491985 54.0252941,37.7615835 48.1001466,37.7615835 C41.2430437,37.7615835 37.2179604,42.9728855 37.2179604,48.3633261 C37.2179604,50.4641323 38.0173532,52.7115063 39.0095643,53.9329052 C39.2063997,54.177185 39.2345191,54.3888942 39.1742633,54.6372453 L38.5114502,57.4057495 C38.4029899,57.8535958 38.1579499,57.9513077 37.7040234,57.7355272 C34.6912365,56.3146331 32.8072404,51.8565271 32.8072404,48.2696855 C32.8072404,40.5626583 38.330683,33.4907585 48.7308233,33.4907585 C57.0943196,33.4907585 63.5939052,39.5244692 63.5939052,47.5979161 C63.5939052,56.0174261 58.3556731,62.7921188 51.0848141,62.7921188 C48.6424482,62.7921188 46.3487131,61.5096499 45.5613715,59.9869726 L44.0589951,65.7926888 C43.5166935,67.9138516 42.0464535,70.5765013 41.0622764,72.1968905 C43.3198581,72.9012306 45.7220535,73.2839355 48.2045898,73.2839355 C61.5130737,73.2839355 72.3068848,62.3442725 72.3068848,48.855957 C72.3068848,35.3635702 61.5130737,24.4279785 48.2045898,24.4279785 L48.2045898,24.4279785 Z" id="Shape" fill="#FFFFFF" fill-rule="nonzero"></path>
                    <path class="pin" d="M48.2045898,24.4279785 C34.896106,24.4279785 24.1022949,35.3635702 24.1022949,48.855957 C24.1022949,59.2052773 30.4532496,68.0400628 39.4152863,71.6024764 C39.2063997,69.6685947 39.0135814,66.7046667 39.5036614,64.5957179 C39.9375027,62.6903355 42.3276469,52.4550125 42.3276469,52.4550125 C42.3276469,52.4550125 41.600561,50.9934052 41.600561,48.8274577 C41.600561,45.4319687 43.5488299,42.8955303 45.9670935,42.8955303 C48.0238226,42.8955303 49.0160338,44.4629922 49.0160338,46.3358039 C49.0160338,48.4366101 47.6984417,51.5674626 47.0195603,54.4703208 C46.4491394,56.904976 48.2246751,58.8836422 50.590717,58.8836422 C54.8728914,58.8836422 58.1708888,54.3074676 58.1708888,47.6996994 C58.1708888,41.8491985 54.0252941,37.7615835 48.1001466,37.7615835 C41.2430437,37.7615835 37.2179604,42.9728855 37.2179604,48.3633261 C37.2179604,50.4641323 38.0173532,52.7115063 39.0095643,53.9329052 C39.2063997,54.177185 39.2345191,54.3888942 39.1742633,54.6372453 L38.5114502,57.4057495 C38.4029899,57.8535958 38.1579499,57.9513077 37.7040234,57.7355272 C34.6912365,56.3146331 32.8072404,51.8565271 32.8072404,48.2696855 C32.8072404,40.5626583 38.330683,33.4907585 48.7308233,33.4907585 C57.0943196,33.4907585 63.5939052,39.5244692 63.5939052,47.5979161 C63.5939052,56.0174261 58.3556731,62.7921188 51.0848141,62.7921188 C48.6424482,62.7921188 46.3487131,61.5096499 45.5613715,59.9869726 L44.0589951,65.7926888 C43.5166935,67.9138516 42.0464535,70.5765013 41.0622764,72.1968905 C43.3198581,72.9012306 45.7220535,73.2839355 48.2045898,73.2839355 C61.5130737,73.2839355 72.3068848,62.3442725 72.3068848,48.855957 C72.3068848,35.3635702 61.5130737,24.4279785 48.2045898,24.4279785 L48.2045898,24.4279785 Z" id="pinterest" fill="#FFFFFF"></path>

                </g>
            </svg>
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/ola.onda.ericeira/" target="_blank" title="Ola Ondá on Instagram">
            <svg width="97px" height="97px" viewBox="1275 11389 97 99" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="iconmonstr-instagram-15" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(1275.000000, 11389.322971)">
                    <circle class="bg" fill="#FFE581" cx="49" cy="48.6770294" r="41"></circle>

                    <path d="M48.2045898,8.14265951 C70.3545989,8.14265951 88.3750814,26.4066448 88.3750814,48.855957 C88.3750814,71.3052693 70.3545989,89.5692546 48.2045898,89.5692546 C26.0545808,89.5692546 8.03409831,71.3052693 8.03409831,48.855957 C8.03409831,26.4066448 26.0545808,8.14265951 48.2045898,8.14265951 Z M48.2045898,0 C21.5836051,0 0,21.8752548 0,48.855957 C0,75.8366593 21.5836051,97.7119141 48.2045898,97.7119141 C74.8255746,97.7119141 96.4091797,75.8366593 96.4091797,48.855957 C96.4091797,21.8752548 74.8255746,0 48.2045898,0 Z" id="Shape" fill="#FFFFFF" fill-rule="nonzero"></path>
                    <path class="insta" d="M48.2045898,24.4279785 L48.2045898,24.4279785 C54.75238,24.4279785 55.571858,24.4564778 58.1467865,24.5786177 C66.9039537,24.9816794 71.7686002,29.9202024 72.162271,38.7834872 C72.2787654,41.3932096 72.3068848,42.2237609 72.3068848,48.855957 C72.3068848,55.4922245 72.2787654,56.3227758 72.162271,58.9284268 C71.7686002,67.807997 66.8878855,72.7302347 58.1467865,73.1373677 C55.571858,73.2554362 54.75238,73.2839355 48.2045898,73.2839355 C41.6567997,73.2839355 40.8413387,73.2554362 38.2664102,73.1373677 C29.5092431,72.7302347 24.6486136,67.7998544 24.2469087,58.9284268 C24.1304143,56.3227758 24.1022949,55.4922245 24.1022949,48.855957 C24.1022949,42.2237609 24.1304143,41.3932096 24.2469087,38.7834872 C24.6486136,29.9079884 29.5092431,24.9857507 38.2664102,24.5786177 C40.8413387,24.4564778 41.6567997,24.4279785 48.2045898,24.4279785 Z M61.0671812,32.8882017 C62.6699838,32.8882017 63.9634737,34.1991699 63.9634737,35.8195592 C63.9634737,37.4399484 62.6659668,38.7509166 61.0671812,38.7509166 C59.4683957,38.7509166 58.1749058,37.4358771 58.1749058,35.8195592 C58.1749058,34.1991699 59.4724127,32.8882017 61.0671812,32.8882017 Z M48.2045898,36.3121901 C55.0375905,36.3121901 60.5811183,41.9306251 60.5811183,48.855957 C60.5811183,55.7853603 55.0375905,61.399724 48.2045898,61.399724 C41.3715892,61.399724 35.8280614,55.7853603 35.8280614,48.855957 C35.8280614,41.9265538 41.3715892,36.3121901 48.2045898,36.3121901 Z M48.2045898,56.9986165 C52.6394121,56.9986165 56.2427052,53.3547764 56.2427052,48.855957 C56.2427052,44.3571377 52.6394121,40.7132975 48.2045898,40.7132975 C43.7657505,40.7132975 40.1704915,44.361209 40.1704915,48.855957 C40.1704915,53.3547764 43.7657505,56.9986165 48.2045898,56.9986165 Z M48.2045898,28.8331573 L48.2045898,28.8331573 C41.7692771,28.8331573 41.0060378,28.853514 38.4672627,28.9715825 C31.9275067,29.2728609 28.8825834,32.4118562 28.5853218,38.9870537 C28.4728444,41.5601341 28.4447251,42.3336868 28.4447251,48.855957 C28.4447251,55.3782273 28.4728444,56.1517799 28.5853218,58.7248604 C28.8866005,65.2837726 31.9194726,68.4349818 38.4672627,68.7403315 C41.0060378,68.8584001 41.7692771,68.8828281 48.2045898,68.8828281 C54.6439196,68.8828281 55.4031419,68.8543288 57.945934,68.7403315 C64.4856901,68.4390531 67.5265963,65.2919152 67.827875,58.7248604 C67.9403523,56.1517799 67.9644546,55.3782273 67.9644546,48.855957 C67.9644546,42.3336868 67.9403523,41.5642054 67.827875,38.9870537 C67.5265963,32.4159275 64.481673,29.2769323 57.945934,28.9756538 C55.4031419,28.8575853 54.6399026,28.8331573 48.2045898,28.8331573 Z" id="Combined-Shape" fill="#FFFFFF"></path>

                </g>
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </section>
  <section class="footer-menu">
    <?php if (!is_page_template('templates/page-uc.php')) :?>

    <nav>
      <ul>
       <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => '', 'items_wrap' => '%3$s') ); ?>
     </ul>
    </nav>
    <h2 class="credits">code &amp; design -  <a href="https://brucemoerdjiman.com" target="_blank">Bruce Moerdjiman</a></h2>
    <?php endif;?>
  </section>
</footer>
<?php wp_footer(); ?>

<?php
  $hostname = $_SERVER['HTTP_HOST']; // For local development
  if ($hostname == 'start-me-up:8888'  ): //Set hostname as provided
?>
<!-- bower:js -->
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery/dist/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/isMobile/isMobile.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/lightslider/dist/js/lightslider.min.js"></script>
<!-- endbower -->

<!-- custom:js -->
<script src="<?php echo get_template_directory_uri(); ?>/src/js/main.js"></script>
<!-- endcustom -->

<?php else:?>
<!-- vendor:js -->
<script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor.js"></script>
<!-- endvendor -->

<!-- custom-min:js -->
<script src="<?php echo get_template_directory_uri(); ?>/scripts/script.js"></script>
<!-- endcustom-min -->
<?php endif;?>

<?php if(is_page_template('templates/page-ola-onda.php')):?>
  <?php get_template_part( 'templates/parts/google-maps' );?>
<?php endif;?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88922254-1', 'auto');
  ga('send', 'pageview');
</script>

</body>
</html>

<?php
/**
 * The template for displaying the footer
*
 * @package WordPress
 * @subpackage WordPress Start Me Up
 */
?>

<footer class="footer">
  <img class="footer-logo" src="../wp-content/themes/olaonda/assets/img/logo.png" alt="Ola Ondá Guesthouse">

    <section class="vcard">
      <p class="fn org">Olá Onda Ericeira</p>
      <p class="adr">
      <span class="street-address">Rua Encosta da Abadia, 4</span>
      <span class="postal-code">2655-432</span>
      <span class="locality">Ericeira</span><br>
      </p>
      <a class="email">info@ola-onda-ericeira.com</a>
      <p class="tel">+351 937 323 140</p>
    </section>

  <section class="social">
  </section>
  <section class="footer-menu">
  </section>
</footer>
<?php wp_footer(); ?>

<?php
  $hostname = $_SERVER['HTTP_HOST']; // For local development
  if ($hostname == 'start-me-up:8888'  ): //Set hostname as provided
?>
<!-- bower:js -->
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery/dist/jquery.js"></script>
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

<script>
  //Google Analytics Code - Replace 'UA-XXXXXX-X'
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.nothing=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-XXXXXX-X', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>

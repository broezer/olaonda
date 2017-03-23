<?php
/**
 * Template Name: Ola Ondá
 * The template for Ola Ondá
 *
 */
get_header(); ?>

<main>
  <?php //get_template_part( 'templates/html/olaonda' );?>
  <header class="image-box ola-onda intro-box">
    <section class="content">
      <h1 class="white">Olá Onda</h1>
      <h2 class="white"><?php the_field('header_subtitle')?></h2>
    </section>
  </header>
  <article class="about-ola-onda">
    <p class="full-width medium-italic">
      <?php the_field('intro_text')?>
    </p>
  </article>
  <article class="walk-to-the-beach">
      <header class="left-9">
        <h1 class="green">
          <span class="meter">700 meter walk</span><br>
          <span class="beach">to the beach</span>
        </h1>
        <h2 class="green"><?php the_field('beach_untertitle') ;?></h2>
      </header>
      <section class="images">
        <div class="content">
          <img class="image-01" src="../wp-content/themes/olaonda/assets/img/to-the-beach.jpg" alt="Ola"/>
          <img class="image-02" src="../wp-content/themes/olaonda/assets/img/intro-beach.jpg" alt="Ola"/>
        </div>
      </section>
    </div>
  </article>

  <article class="ericeira">
    <header>
      <h1 class="base yellow"><?php the_field('ericeira_title'); ?></h1>
      <h2 class="undertitle yellow"><?php the_field('ericeira_subtitle'); ?></h2>
    </header>
    <div class="wrapper-11">
      <section class="left-6">
        <p class="">
          <?php the_field('ericeira_text'); ?>
        </p>
      </section>
      <section class="right-5 ericeira-img">
        <img class="ericeira" src="../wp-content/themes/olaonda/assets/img/ericeira.jpg" alt="Ola"/>
      </section>
    </div>
  </article>

  <article class="world-surf-reserve">
      <header class="image-box">
        <section class="content">
          <h1 class="white"><?php the_field('surf_title'); ?></h1>
          <h2 class="white"><?php the_field('surf_subtitle'); ?></h2>
        </section>
      </header>
      <p class="full-width">
        <?php the_field('surf_text'); ?>
      <p>
  </article>

  <article class="location">
    <header class="left-9">
      <h1 class="green">
        <span class="minutes">30-minute</span><br>
        <span class="drive">drive from lisbon</span>
      </h1>
      <h2 class="green"><?php the_field('transport_subtitle'); ?></h2>
    </header>
    <div class="wrapper">
      <section class="left-4">
        <img class="map" src="../wp-content/themes/olaonda/assets/img/map.jpg" alt="Ola"/>
      </section>
      <section class="right-6">
        <h3 class="green">By Car</h3>
        <p>
          <?php the_field('car_text'); ?>
        </p>
        <h3 class="green">Pickup Service</h3>
        <p>
          <?php the_field('pickup_text'); ?>
        </p>
        <h3 class="green">By bus</h3>
        <p>
          <?php the_field('bus_text'); ?>
        </p>
      </section>
    </div>
  </article>

  <article class="sun">
    <div class="wrapper">
      <section class="left-6">
        <h3 class="white">What's the weather like in Ericeira?</h3>
        <p>
          <?php the_field('weather_text'); ?>
        </p>
      </section>
    </div>
  </article>
  <article class="sea-temp">
    <div class="wrapper-11">
      <section class="right-7 shift-4">
        <h3 class="white">and the sea temperature?</h3>
        <p>
          <?php the_field('sea_text'); ?>
        </p>
      </section>
    </div>
  </article>
  <article class="surf-bus">
    <div class="wrapper">
      <section class="left-6">
        <h3 class="yellow">Ericeira Beach Bus</h3>
        <p>
          <?php the_field('beach_text'); ?>
        </p>
      </section>
    </div>
  </article>
  <article>
    <a class="chevron-sign" href="../rooms" title="">
      <svg width="100%"  viewBox="141 10728 1158 187" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <defs>
              <polygon id="path-1" points="0 0 1053.19176 0 1158 93.5 1053.19176 187 0 187"></polygon>
              <mask id="mask-2" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="0" y="0" width="1158" height="187" fill="white">
                  <use xlink:href="#path-1"></use>
              </mask>
          </defs>
          <g id="check-rooms" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(141.000000, 10728.000000)">
              <use class="chevron" stroke="#89DAC1" mask="url(#mask-2)" stroke-width="40" xlink:href="#path-1"></use>
              <text id="CHECK-OUT-OUR-ROOMS" font-family="Montserrat-Bold, Montserrat" font-size="55" font-weight="bold" letter-spacing="11.458333" fill="#89DAC1">
                  <tspan x="86" y="114">CHECK OUT OUR ROOMS</tspan>
              </text>

          </g>
      </svg>
    </a>
  </article>

</main>

<?php get_footer(); ?>

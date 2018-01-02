<?php
/**
 * Template Name: Ola Ondá Guesthouse
 * The template for Ola Ondá
 *
 */
get_header(); ?>

<?php
$image = get_field('header_image');
$size  = 'hd';
$image_url = $image['sizes'][ $size ];

$about_us_img =  get_field('about_us_image');
$size_02  = 'large';
$au_image_url = $about_us_img['sizes'][ $size_02 ];


$breakfast_img =  get_field('breakfast_image');
$size_03  = 'large';
$breakfast_img_url = $breakfast_img['sizes'][ $size_03 ];

?>

<main>
  <?php //get_template_part( 'templates/html/olaonda' );?>
  <?php if($image):?>
  <header class="image-box ola-onda intro-box"  style="background-image:url('<?php echo $image_url;?>')" >
  <?php else:?>
  <header class="image-box ola-onda intro-box">
  <?php endif;?>
    <section class="content">
      <h1 class="white"><?php the_title();?></h1>
      <h2 class="white"><?php the_field('header_subtitle')?></h2>
    </section>
  </header>
  <article class="about-ola-onda">
    <p class="full-width ">
	     <?php the_field_without_wpautop('intro');?>
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
          <img class="image-01" src="<?php echo get_template_directory_uri(); ?>/assets/img/to-the-beach.jpg" alt="Olá Onda"/>
          <img class="image-02" src="<?php echo get_template_directory_uri(); ?>/assets/img/intro-palms.jpg" alt="Olá Onda"/>
        </div>
      </section>
    </div>
  </article>
  <article class="breakfast">





    <div class="wrapper-11">
      <section class="left-6">
        <h3 class="green"><?php the_field('breakfast_title') ;?></h3>
        <p class="content">
          <?php the_field('breakfast_text'); ?>


        </p>
      </section>
      <section class="right-4 ">
        <figure class="image breakfast-image" style="background-image:url('<?php echo $breakfast_img_url;?>')">

        </figure>
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
        <img class="ericeira" src="<?php echo get_template_directory_uri(); ?>/assets/img/intro-praia.jpg" alt="Ola"/>
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
        <!--<img class="map" src="../wp-content/themes/olaonda/assets/img/map.jpg" alt="Ola"/>-->
        <?php

        $location = get_field('gmaps_guesthouse');

        if( !empty($location) ):
        ?>
        <div class="acf-map">
        	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
        </div>
        <?php endif; ?>
      </section>
      <section class="right-6">
        <h3 class="green">Pickup Service</h3>
        <p>
          <?php the_field('pickup_text'); ?>
        </p>
        <h3 class="green">By Car</h3>
        <p>
          <?php the_field('car_text'); ?>
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
    <div class="wrapper">
      <section class="left-6">
        <a class="svg-link" href="/rooms">
          <svg width="100%" height="125" viewBox="0 0 433 125" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs></defs>
                <g>
                    <rect id="Rectangle-2" stroke="#89DAC1" stroke-width="11" x="5.5" y="5.5" width="422" height="114"></rect>
                    <text id="" font-family="Montserrat-Bold, Montserrat" font-size="24" font-weight="bold" letter-spacing="5.5999999" fill="#89DAC1">
                        <tspan x="42" y="72">View rooms</tspan>
                    </text>
                    <polygon id="Triangle" fill="#89DAC1" points="374 63.5 349 76 349 51"></polygon>
                </g>
          </svg>
        </a>
      </section>
    </div>
  </article>
  <article class="about-us" id="about-us" name="about-us">

    <header>
      <h1 class="yellow">About Us</h1>
      <h2 class="yellow">The hosts of Olá Onda</h2>
    </header>

    <div class="wrapper-11">
      <section class="left-6">
        <p class="content">
          <?php the_field('about_us'); ?>


        </p>
      </section>
      <section class="right-4 ">
        <figure class="image about-us-image" style="background-image:url('<?php echo $au_image_url;?>')">

        </figure>
      </section>

    </div>

  </article>


</main>

<?php get_footer(); ?>

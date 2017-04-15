<?php
/**
 * Template Name: Home Page
 * The template for Home Page
 *
 */
get_header(); ?>

<main>
  <?php //get_template_part( 'templates/html/homepage' );?>


  <header class="intro intro-box">
    <div class="content content--home">
      <div class="logo-container">
        <div class="logo">
          <h1>
            <span>Olá Onda Guesthouse</span>
          </h1>
          <h2>Ericeira Guesthouse</h2>
        </div>
      </div>
    </div>
  </header>

  <article class="about-ola-onda">
    <p class="full-width">
      <?php the_field('intro_text');?>
    </p>
  </article>

  <article class="enjoy-with-us">
    <div class="wrapper">
      <section class="left-6">
        <h1 class="enjoy-ola">
          <span class="enjoy"> Enjoy </span><br>
          <span class="ericeira"> Ericeira </span><br>
          <span class="with-us"> with us </span>
        </h1>
        <img class="intro-beach" src="../wp-content/themes/olaonda/assets/img/intro-surfers.jpg" alt="Ola"/>
      </section>
      <section class="right-4">
        <img class="intro-beach" src="../wp-content/themes/olaonda/assets/img/intro-beach.jpg" alt="Ola"/>
        <a class="svg-link" href="/ola-onda">
          <svg width="100%" height="125" viewBox="0 0 433 125" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs></defs>
                <g>
                    <rect id="Rectangle-2" stroke="#89DAC1" stroke-width="11" x="5.5" y="5.5" width="422" height="114"></rect>
                    <text id="" font-family="Montserrat-Bold, Montserrat" font-size="24" font-weight="bold" letter-spacing="5.5999999" fill="#89DAC1">
                        <tspan x="42" y="72">Get to know us</tspan>
                    </text>
                    <polygon id="Triangle" fill="#89DAC1" points="374 63.5 349 76 349 51"></polygon>
                </g>
          </svg>
        </a>
      </section>
    </div>





  </article>

  <article class="our-rooms">
    <header>
      <h1 class="base yellow"><?php the_field('title_about_rooms');?></h1>
      <h2 class="undertitle yellow"><?php the_field('undertitle_about_rooms');?></h2>
    </header>
    <div class="wrapper">
      <section class="left-4">
        <img class="rooms-01" src="../wp-content/themes/olaonda/assets/img/rooms-01.jpg" alt="Ola"/>
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
      <section class="right-6">
        <p class="base">
          <?php the_field('text_about_rooms');?>
        </p>
        <img class="rooms-02" src="../wp-content/themes/olaonda/assets/img/rooms-02.jpg" alt="Ola"/>
      </section>
    </div>
  </article>


  <article class="why">
    <header>
      <h1 class="base green"><?php the_field('title_why');?></h1>
      <h2 class="undertitle green"><?php the_field('untertitle_why');?></h2>
    </header>
    <section class="see-the-ocean">
      <h1 class="see-the-ocean yellow">See the ocean</h1>
      <figure class="sea-the-ocean">
        <div class="content">
          <h2 class="undertitle sea-the-ocean">
            <?php the_field('text_see_the_ocean');?>
          </h2>
        </div>
      </figure>
    </section>
    <section class="surf-the-best-waves">
      <header class="left-5">
        <h1 class="base green surf-the-best-waves">Surf the best waves</h1>
      </header>
      <figure class="right-5">
        <img class="floor-surf" src="../wp-content/themes/olaonda/assets/img/floor-surf.jpg" alt="Ola"/>
      </figure>
    </section>
    <a class="chevron-sign" href="" title="">
      <svg width="100%"  viewBox="141 6246 1158 187" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <defs>
              <polygon id="path-1" points="141 6246 1194.19176 6246 1299 6339.5 1194.19176 6433 141 6433"></polygon>
              <mask id="mask-2" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="0" y="0" width="1158" height="187" fill="white">
                  <use xlink:href="#path-1"></use>
              </mask>
          </defs>
          <use class="chevron" stroke="#89DAC1" mask="url(#mask-2)" stroke-width="40" fill="none" xlink:href="#path-1"></use>
          <text id="DISCOVER-MORE" stroke="none" fill="none" font-family="Montserrat-Bold, Montserrat" font-size="55" font-weight="bold" letter-spacing="11.458333">
              <tspan x="262" y="6365" fill="#89DAC1">DISCOVER MORE</tspan>
          </text>
      </svg>
    </a>
  </article>

  <article class="testimonials">
    <blockquote>
      “Old world charm, new world waves. Ericeira is the El Dorado of surfing. It is cheap; the food is to die for. The waves are next level fun. Ericeira will make you question why you live where you live.”
      <footer><h4 class="green">— <cite>What Youth Magazine</cite></h4></footer>
    </blockquote>
    <blockquote>
      “Portugal is like California with less people, better food, less plastic, less crowd and less fake. It’s like a big neighbourhood and that’s sweet. It’s cheap and there’s no violence, no danger, no terrorism, and that’s probably the best thing ever. It’s a good place to say the least. Don’t come on a diet though, eating is the best way to really get to know Portugal and the Portuguese”
      <footer><h4 class="green">— <cite>Frederico Morais<br/>Portuguese professional surfer</cite></h4></footer>
    </blockquote>
  </article>


  <article class="surf-in-ericeira">

      <header class="image-box">
        <section class="content">
          <h1 class="white"><?php the_field('title_surf_ericeira');?></h1>
          <h2 class="white"><?php the_field('undertitle_surf_ericeira');?></h2>
        </section>
      </header>
      <p class="full-width">
        <?php the_field('text_surf_ericeira', false, false);?>
      <p>

  </article>



</main>

<?php get_footer(); ?>

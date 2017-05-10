<?php
/**
 * Template Name: Home Page
 * The template for Home Page
 *
 */
get_header(); ?>

<main>
  <?php //get_template_part( 'templates/html/homepage' );?>

  <?php
  $image = get_field('header_image');
  $size  = 'hd';
  $image_url = $image['sizes'][ $size ];
  ?>
  <header class="intro intro-box" >
  <?php if ($image):?>
    <div class="content content--home" style="background-image:url('<?php echo $image_url;?>')">
  <?php else:?>

    <div class="content content--home">

  <?php endif;?>
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
    <section class="wrapper">
      <ul class="usp">
        <li>
          <h2>Take a dip<br/>in the <span class="green">pool</a></h2>
        </li>
        <li>
          <h2><span class="yellow">Close</span> to the<br/>beach and<br/>downtown</a></h2>
        </li>
        <li>
          <h2><span class="green">Private</span><br/>bathrooms</h2>
        </li>
        <li>
          <h2><span class="yellow">See</span> the ocean<br/>right after you<br/>wake up</h2>
        </li>
      </ul>
    </wrapper>
    <div class="wrapper">
      <section class="left-4 discover-more">
        <a class="svg-link" href="/ola-onda">
          <svg width="100%" height="125" viewBox="0 0 433 125" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs></defs>
                <g>
                    <rect id="Rectangle-2" stroke="#89DAC1" stroke-width="11" x="5.5" y="5.5" width="422" height="114"></rect>
                    <text id="" font-family="Montserrat-Bold, Montserrat" font-size="24" font-weight="bold" letter-spacing="5.5999999" fill="#89DAC1">
                        <tspan x="42" y="72">Discover more</tspan>
                    </text>
                    <polygon id="Triangle" fill="#89DAC1" points="374 63.5 349 76 349 51"></polygon>
                </g>
          </svg>
        </a>
      </section>
    </div>
  </article>

  <article class="testimonials">
    <blockquote>
      “This amazing place will open in the summer of 2017. I was lucky to visit the place while still under construction and it will definitely become a very nice guesthouse. Beachview from the hill, swimming pool, super friendly owners. Can't wait to go there again!”
      <footer><h4 class="green">— <cite>Folkert, 29</cite></h4></footer>
    </blockquote>
    <blockquote>
      “Fantastic location! The seaview is amazing and the city centre of Ericeira is within walking distance, so you're close to all the bars and restaurants. Lovely owners with a lot of knowledge from the area. They gave some great tips about the best places to surf, best beaches and where to go for dinner or coffee. I had a very pleasant stay and I would definitely return!”
      <footer><h4 class="green">— <cite>Naima, 24</cite></h4></footer>
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

  <?php
  function fetchData($url){
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_TIMEOUT, 20);
      $result = curl_exec($ch);
      curl_close($ch);
      return $result;
    }
    $result = fetchData("https://api.instagram.com/v1/users/4493500693/media/recent/?access_token=4493500693.1677ed0.ba6587e1f9004855b04648af332997c4&count=2");
    $result = json_decode($result);
    $items = array();
    foreach ($result->data as $post) {
      $images[] = $post->images->standard_resolution->url;
      $date[] = $post->created_time;
      $link[] = $post->link;
    }
    //print_r($items);
    //echo $images[0];
    //echo date('M j, Y', $date[0]);
    //echo $images[1];
  ?>
  <article class="social-feed">
    <article class="insta-feed" style="background-image:url('<?php echo $images[0];?>')">
      <a href="<?php echo $link[0]; ?>" title="Olá Onda on Instagram">
        <header>
          <svg width="28px" height="28px" viewBox="0 0 28 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <!-- Generator: Sketch 43.1 (39012) - http://www.bohemiancoding.com/sketch -->
              <desc>Created with Sketch.</desc>
              <defs></defs>
              <g id="MAIN_v2" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="00---HOMEPAGE" transform="translate(-160.000000, -5743.000000)" fill-rule="nonzero" fill="#FFFFFF">
                      <g id="iconmonstr-instagram-15" transform="translate(160.000000, 5743.000000)">
                          <path d="M13.914727,2.32647414 C20.308544,2.32647414 25.5103328,7.54475565 25.5103328,13.9588449 C25.5103328,20.3729341 20.308544,25.5912156 13.914727,25.5912156 C7.52090992,25.5912156 2.31912116,20.3729341 2.31912116,13.9588449 C2.31912116,7.54475565 7.52090992,2.32647414 13.914727,2.32647414 Z M13.914727,0 C6.230319,0 0,6.25007279 0,13.9588449 C0,21.6676169 6.230319,27.9176897 13.914727,27.9176897 C21.5991349,27.9176897 27.8294539,21.6676169 27.8294539,13.9588449 C27.8294539,6.25007279 21.5991349,0 13.914727,0 Z M13.914727,8.23804495 C15.772343,8.23804495 15.9926595,8.24502437 16.7266614,8.27875824 C18.6132664,8.36483779 19.4922134,9.26169357 19.5791804,11.1391582 C19.6116481,11.8754873 19.6186055,12.0953391 19.6186055,13.9588449 C19.6186055,15.8223507 19.6116481,16.0433657 19.5791804,16.7785315 C19.4922134,18.6548329 18.614426,19.5540152 16.7266614,19.6400947 C15.9926595,19.6726654 15.7735026,19.680808 13.914727,19.680808 C12.0571109,19.680808 11.8367944,19.6738286 11.1039521,19.6400947 C9.21386837,19.5528519 8.33840013,18.6525065 8.25143309,16.7785315 C8.21896539,16.0433657 8.21084847,15.8223507 8.21084847,13.9588449 C8.21084847,12.0953391 8.21896539,11.874324 8.25143309,11.1391582 C8.33724057,9.26053033 9.21618749,8.36367455 11.1039521,8.27759501 C11.8367944,8.24386113 12.0571109,8.23804495 13.914727,8.23804495 L13.914727,8.23804495 Z M13.914727,6.97942243 C12.0246432,6.97942243 11.7892524,6.98756509 11.0459741,7.0224622 C8.51813202,7.13878591 7.11506372,8.54513953 6.99910766,11.0809963 C6.96548041,11.8266313 6.95736348,12.0639317 6.95736348,13.9588449 C6.95736348,15.8549213 6.96548041,16.0922217 6.99910766,16.8366934 C7.11506372,19.371387 8.51813202,20.7800671 11.0459741,20.8963908 C11.7892524,20.9301246 12.0246432,20.9382673 13.914727,20.9382673 C15.8048107,20.9382673 16.0413611,20.9301246 16.7846394,20.8963908 C19.3078432,20.7800671 20.7167093,19.3737134 20.8303463,16.8366934 C20.8639735,16.0922217 20.8720904,15.8549213 20.8720904,13.9588449 C20.8720904,12.0639317 20.8639735,11.8266313 20.8303463,11.0809963 C20.7167093,8.54862924 19.3124815,7.13762267 16.7846394,7.0224622 C16.0413611,6.98756509 15.8048107,6.97942243 13.914727,6.97942243 L13.914727,6.97942243 Z M13.914727,10.3749114 C11.9423144,10.3749114 10.3421208,11.9790154 10.3421208,13.9588449 C10.3421208,15.9386744 11.9423144,17.5427783 13.914727,17.5427783 C15.8871395,17.5427783 17.4873331,15.9386744 17.4873331,13.9588449 C17.4873331,11.9801786 15.8871395,10.3749114 13.914727,10.3749114 Z M13.914727,16.285319 C12.6334125,16.285319 11.5956058,15.2442218 11.5956058,13.9588449 C11.5956058,12.6746311 12.6334125,11.6323707 13.914727,11.6323707 C15.1948818,11.6323707 16.2350077,12.6734679 16.2350077,13.9588449 C16.2350077,15.2442218 15.1948818,16.285319 13.914727,16.285319 Z M17.6276399,9.39662907 C17.1672944,9.39662907 16.7927563,9.77119141 16.7927563,10.2341598 C16.7927563,10.6959649 17.1661348,11.0716905 17.6276399,11.0716905 C18.0891451,11.0716905 18.4636831,10.6971281 18.4636831,10.2341598 C18.4636831,9.77119141 18.0903046,9.39662907 17.6276399,9.39662907 Z" id="Shape"></path>
                      </g>
                  </g>
              </g>
          </svg>
          <p>


            <?php echo date('M j, Y', $date[0]) ?>
          </p>
        </header>
      </a>
    </article>

    <?php // Display blog posts on any page @ https://m0n.co/l
      $temp = $wp_query; $wp_query= null;
      $wp_query = new WP_Query(); $wp_query->query('posts_per_page=2' . '&paged='.$paged);
      while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
      <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
      <article class="blog-item" style="background-image:url('<?php echo $url;?>')">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> - Read more">

          <h2>
            <span>blog</span><br/>
            <?php the_title(); ?>
          </h2>
        </a>
      </article>

    <?php endwhile; ?>



    <article class="insta-feed" style="background-image:url('<?php echo $images[1];?>')">
      <a href="<?php echo $link[0]; ?>" title="Olá Onda on Instagram">
        <header>
          <svg width="28px" height="28px" viewBox="0 0 28 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <!-- Generator: Sketch 43.1 (39012) - http://www.bohemiancoding.com/sketch -->
              <desc>Created with Sketch.</desc>
              <defs></defs>
              <g id="MAIN_v2" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="00---HOMEPAGE" transform="translate(-160.000000, -5743.000000)" fill-rule="nonzero" fill="#FFFFFF">
                      <g id="iconmonstr-instagram-15" transform="translate(160.000000, 5743.000000)">
                          <path d="M13.914727,2.32647414 C20.308544,2.32647414 25.5103328,7.54475565 25.5103328,13.9588449 C25.5103328,20.3729341 20.308544,25.5912156 13.914727,25.5912156 C7.52090992,25.5912156 2.31912116,20.3729341 2.31912116,13.9588449 C2.31912116,7.54475565 7.52090992,2.32647414 13.914727,2.32647414 Z M13.914727,0 C6.230319,0 0,6.25007279 0,13.9588449 C0,21.6676169 6.230319,27.9176897 13.914727,27.9176897 C21.5991349,27.9176897 27.8294539,21.6676169 27.8294539,13.9588449 C27.8294539,6.25007279 21.5991349,0 13.914727,0 Z M13.914727,8.23804495 C15.772343,8.23804495 15.9926595,8.24502437 16.7266614,8.27875824 C18.6132664,8.36483779 19.4922134,9.26169357 19.5791804,11.1391582 C19.6116481,11.8754873 19.6186055,12.0953391 19.6186055,13.9588449 C19.6186055,15.8223507 19.6116481,16.0433657 19.5791804,16.7785315 C19.4922134,18.6548329 18.614426,19.5540152 16.7266614,19.6400947 C15.9926595,19.6726654 15.7735026,19.680808 13.914727,19.680808 C12.0571109,19.680808 11.8367944,19.6738286 11.1039521,19.6400947 C9.21386837,19.5528519 8.33840013,18.6525065 8.25143309,16.7785315 C8.21896539,16.0433657 8.21084847,15.8223507 8.21084847,13.9588449 C8.21084847,12.0953391 8.21896539,11.874324 8.25143309,11.1391582 C8.33724057,9.26053033 9.21618749,8.36367455 11.1039521,8.27759501 C11.8367944,8.24386113 12.0571109,8.23804495 13.914727,8.23804495 L13.914727,8.23804495 Z M13.914727,6.97942243 C12.0246432,6.97942243 11.7892524,6.98756509 11.0459741,7.0224622 C8.51813202,7.13878591 7.11506372,8.54513953 6.99910766,11.0809963 C6.96548041,11.8266313 6.95736348,12.0639317 6.95736348,13.9588449 C6.95736348,15.8549213 6.96548041,16.0922217 6.99910766,16.8366934 C7.11506372,19.371387 8.51813202,20.7800671 11.0459741,20.8963908 C11.7892524,20.9301246 12.0246432,20.9382673 13.914727,20.9382673 C15.8048107,20.9382673 16.0413611,20.9301246 16.7846394,20.8963908 C19.3078432,20.7800671 20.7167093,19.3737134 20.8303463,16.8366934 C20.8639735,16.0922217 20.8720904,15.8549213 20.8720904,13.9588449 C20.8720904,12.0639317 20.8639735,11.8266313 20.8303463,11.0809963 C20.7167093,8.54862924 19.3124815,7.13762267 16.7846394,7.0224622 C16.0413611,6.98756509 15.8048107,6.97942243 13.914727,6.97942243 L13.914727,6.97942243 Z M13.914727,10.3749114 C11.9423144,10.3749114 10.3421208,11.9790154 10.3421208,13.9588449 C10.3421208,15.9386744 11.9423144,17.5427783 13.914727,17.5427783 C15.8871395,17.5427783 17.4873331,15.9386744 17.4873331,13.9588449 C17.4873331,11.9801786 15.8871395,10.3749114 13.914727,10.3749114 Z M13.914727,16.285319 C12.6334125,16.285319 11.5956058,15.2442218 11.5956058,13.9588449 C11.5956058,12.6746311 12.6334125,11.6323707 13.914727,11.6323707 C15.1948818,11.6323707 16.2350077,12.6734679 16.2350077,13.9588449 C16.2350077,15.2442218 15.1948818,16.285319 13.914727,16.285319 Z M17.6276399,9.39662907 C17.1672944,9.39662907 16.7927563,9.77119141 16.7927563,10.2341598 C16.7927563,10.6959649 17.1661348,11.0716905 17.6276399,11.0716905 C18.0891451,11.0716905 18.4636831,10.6971281 18.4636831,10.2341598 C18.4636831,9.77119141 18.0903046,9.39662907 17.6276399,9.39662907 Z" id="Shape"></path>
                      </g>
                  </g>
              </g>
          </svg>
          <p>


            <?php echo date('M j, Y', $date[0]) ?>
          </p>
        </header>
      </a>
    </article>
  </article>

</main>

<?php get_footer(); ?>

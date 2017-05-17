<?php
$title = get_sub_field('title');
$class = strtolower($title);
$undertitle = get_sub_field('undertitle');

//$content = get_sub_field('content');
?>


<article class="<?php echo $class; ?>">

  <header>
    <h1 class=""><?php echo $title ?></h1>
    <h2 class=""><?php echo $undertitle ?></h2>
  </header>


  <?php
  // check if the flexible content field has rows of data
  if( have_rows('content-part') ):

       // loop through the rows of data
      while ( have_rows('content-part') ) : the_row();

          if( get_row_layout() == 'text' ):

            $text = get_sub_field('text');

          ?>
          <section class="wrapper">
            <p class="content">
              <?php echo $text; ?>
            </p>
            <?php if($class === 'ericeira surfguide' || $class === 'ericeira surf spot guide'):?>
              <a class="svg-link" href="../surf/ericeira-surf-spot-guide/">
                <svg width="100%" height="125" viewBox="0 0 433 125" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs></defs>
                      <g>
                          <rect id="Rectangle-2" stroke="#89DAC1" stroke-width="11" x="5.5" y="5.5" width="422" height="114"></rect>
                          <text id="" font-family="Montserrat-Bold, Montserrat" font-size="24" font-weight="bold" letter-spacing="5.5999999" fill="#89DAC1">
                              <tspan x="42" y="72">Go read it</tspan>
                          </text>
                          <polygon id="Triangle" fill="#89DAC1" points="374 63.5 349 76 349 51"></polygon>
                      </g>
                </svg>
              </a>
            <?php endif;?>
          </section>


          <?php
          elseif( get_row_layout() == 'text_img' ):
            $img = get_sub_field('image');
            $title = get_sub_field('title');
            $text = get_sub_field('text');
          ?>

          <div class="wrapper">
            <section>
              <h4 class=""><?php echo $title ?></h4>
              <p class="content">
                <?php echo $text; ?>
              </p>
            </section>
            <figure class="image" style="background-image:url('<?php echo $img['url'];?>')">

            </figure>
          </div>

          <?php
          endif;

      endwhile;

  else :

      // no layouts found

  endif;

  ?>








</article>

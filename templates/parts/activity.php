<?php
$title = get_sub_field('title');
$class = strtolower($title);
$undertitle = get_sub_field('undertitle');
$img = get_sub_field('image');
$size  = 'large';
$image_url = $img['sizes'][ $size ];
$content = get_sub_field('content');
?>


<article class="<?php echo $class; ?>" name="<?php echo $class; ?>" id="<?php echo $class; ?>">

  <header>
    <h1 class="green"><?php echo $title ?></h1>
    <h2 class="green"><?php echo $undertitle ?></h2>
  </header>

  <section class="wrapper">
    <p class="content">
      <?php echo $content; ?>

      <?php if ($title === 'Surfing'):?>
        <a class="svg-link" href="/surf">
          <svg width="100%" height="125" viewBox="0 0 433 125" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs></defs>
                <g>
                    <rect id="Rectangle-2" stroke="#89DAC1" stroke-width="11" x="5.5" y="5.5" width="422" height="114"></rect>
                    <text id="" font-family="Montserrat-Bold, Montserrat" font-size="24" font-weight="bold" letter-spacing="5.5999999" fill="#89DAC1">
                        <tspan x="42" y="72">Read more</tspan>
                    </text>
                    <polygon id="Triangle" fill="#89DAC1" points="374 63.5 349 76 349 51"></polygon>
                </g>
          </svg>
        </a>
      <?php endif;?>
    </p>
    <figure class="image" style="background-image:url('<?php echo $image_url;?>')">

    </figure>
  </section>

</article>

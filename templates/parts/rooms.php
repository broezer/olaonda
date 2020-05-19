<?php
$title = get_sub_field('title');
$undertitle = get_sub_field('undertitle');
//$img = get_sub_field('image');
$content = get_sub_field('copy');
$subtitle = get_sub_field('Subtitle');
$extra_content = get_sub_field('copy2');
$images = get_sub_field('photos');


?>


<article class="room">
  <header>
    <h1 class="base "><?php echo $title;?></h1>
    <h2 class="undertitle "><?php echo $undertitle;?></h2>
    <p class="">
      <?php echo $content;?>
    </p>
  </header>
  <section>
    <?php


    if( $images ): ?>
        <ul class="ola-slider">
            <?php foreach( $images as $image ): ?>
                <li data-thumb="<?php echo $image['sizes']['slider-thumb']; ?>">

                    <img src="<?php echo $image['sizes']['hd']; ?>" alt="<?php echo $image['alt']; ?>" />


                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
  </section>
  <section class="dates">

    <h3><?php echo $subtitle;?></h3>           
    
    <ul class="ola-months">  
      <li><?php get_template_part( 'templates/parts/cal/june'); ?></li>
      <li><?php get_template_part( 'templates/parts/cal/july'); ?></li>
      <li><?php get_template_part( 'templates/parts/cal/august'); ?></li>
      <li><?php get_template_part( 'templates/parts/cal/september'); ?></li>
      <li><?php get_template_part( 'templates/parts/cal/october'); ?></li>
    </uL>
    <div class="parent cal-legend">
      <div class="div1"> </div>
      <div class="div2">Available </div>
      <div class="div3"> </div>
      <div class="div4">Booked</div>
    </div>
    <p class="">
      <?php echo $extra_content;?>
    </p>

  </section>

</article>

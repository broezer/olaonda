<?php
$title = get_sub_field('title');
$undertitle = get_sub_field('undertitle');
//$img = get_sub_field('image');
$content = get_sub_field('copy');
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

</article>

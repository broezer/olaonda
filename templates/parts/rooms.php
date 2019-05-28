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
    <?php 
    // check for rows (sub repeater)
    if( have_rows('prices') ): ?>
      <ul class="prices">
      <?php 

      // loop through rows (sub repeater)
      while( have_rows('prices') ): the_row();
          // display each item as a list - with a class of completed ( if completed )
          $month = get_sub_field('month');
          $price = get_sub_field('price');
        ?>
        <li>
          <p><?php echo $month;?><br/><?php echo $price;?></p>
        </li>
      <?php endwhile; ?>
      </ul>
  <?php endif; //if( get_sub_field('items') ): ?>
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

<?php
$subtitle = get_sub_field('Subtitle');
?>


<article class="room">
  <section class="dates">
    <h3><?php echo $subtitle;?></h3>  

    <ul class="ola-months"> 
      <li><?php get_template_part( 'templates/parts/cal/april'); ?></li>
      <li><?php get_template_part( 'templates/parts/cal/may'); ?></li>
      <li><?php get_template_part( 'templates/parts/cal/june'); ?></li>
      <li><?php get_template_part( 'templates/parts/cal/july'); ?></li>
      <li><?php get_template_part( 'templates/parts/cal/august'); ?></li>
      <li><?php get_template_part( 'templates/parts/cal/september'); ?></li>
      <li><?php get_template_part( 'templates/parts/cal/october'); ?></li>
    </ul>
    <div class="parent cal-legend">
      <div class="div1"> </div>
      <div class="div2">Available </div>
      <div class="div3"> </div>
      <div class="div4">Booked</div>
    </div>
    

  </section>



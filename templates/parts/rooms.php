<?php
$title = get_sub_field('title');
$undertitle = get_sub_field('undertitle');
//$img = get_sub_field('image');
$content = get_sub_field('copy');

?>


<article class="room">
  <header>
    <h1 class="base "><?php echo $title;?></h1>
    <h2 class="undertitle "><?php echo $undertitle;?></h2>
    <p class="">
      <?php echo $content;?>
    </p>
  </header>


</article>

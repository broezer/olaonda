<?php
$title = get_sub_field('title');
global $b;
$id = $b - 1;

$image = get_sub_field('image');
$size  = 'large';
$image_url = $image['sizes'][ $size ];



$type = get_sub_field('type');
$conditions = get_sub_field('conditions');
$crowd = get_sub_field('crowd');
$info = get_sub_field('info');

?>


<article class="spots" id="<?php echo $id;?>" >
  <?php if ($image):?>
    <header class="image-box" style="background-image:url('<?php echo $image_url;?>')">
      <section class="content" >
        <h1 class="white"><?php echo $title ?></h1>
      </section>
    </header>
  <?php else:?>
    <header>
      <h1 class="yellow"><?php echo $title ?></h1>
    </header>
  <?php endif;?>
  <section class="wrapper">
    <?php if ($type):?>
      <h3 class="green">Type</h3>
      <p>
        <?php echo $type ?>
      </p>
    <?php endif;?>
  

  </section>
</article>

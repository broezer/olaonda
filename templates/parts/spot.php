<?php
$title = get_sub_field('title');

$image = get_sub_field('image');
$size  = 'hd';
$image_url = $image['sizes'][ $size ];

$type = get_sub_field('type');
$conditions = get_sub_field('conditions');
$crowd = get_sub_field('crowd');
$info = get_sub_field('info');

?>


<article>
  <?php if ($img):?>
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
    <?php if ($conditions):?>
      <h3 class="yellow">Works best with</h3>
      <p>
        <?php echo $conditions ?>
      </p>
    <?php endif;?>
    <?php if ($crowd):?>
      <h3 class="green">Crowd</h3>
      <p>
        <?php echo $crowd ?>
      </p>
    <?php endif;?>
    <?php if ($info):?>
      <h3 class="yellow">Information &amp; board rental</h3>
      <p>
        <?php echo $info ?>
      </p>
    <?php endif;?>

  </section>
</article>

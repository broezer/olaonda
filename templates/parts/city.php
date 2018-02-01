<?php
$title = get_sub_field('name');
$class = strtolower($title);
$img = get_sub_field('image');
$size  = 'large';
$image_url = $image['sizes'][ $size ];
$content = get_sub_field('content');
?>


<article class="<?php echo $class; ?> wrapper">

  <section>
    <h4 class="yellow"><?php echo $title ?></h4>
    <p class="content">
      <?php echo $content; ?>
    </p>
  </section>
  <figure class="image" style="background-image:url('<?php echo $image_url['url'];?>')">

  </figure>
</article>

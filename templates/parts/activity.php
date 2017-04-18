<?php
$title = get_sub_field('title');
$class = strtolower($title);
$undertitle = get_sub_field('undertitle');
$img = get_sub_field('image');
$content = get_sub_field('content');
?>


<article class="<?php echo $class; ?>">

  <header>
    <h1 class="green"><?php echo $title ?></h1>
    <h2 class="green"><?php echo $undertitle ?></h2>
  </header>

  <section class="wrapper">
    <p class="content">
      <?php echo $content; ?>
    </p>
    <figure class="image" style="background-image:url('<?php echo $img['url'];?>')">

    </figure>
  </section>
</article>

<?php
//$title = get_field('title');

$image = get_field('image');
$size  = 'large';
$image_url = $image['sizes'][ $size ];

$type = get_field('type');
$conditions = get_field('conditions');
$crowd = get_field('crowd');
$info = get_field('info');
$location = get_field('location');
?>


<article>
  <?php if ($image):?>
    <header class="image-box" style="background-image:url('<?php echo $image_url;?>')">
      <section class="content" >
        <h1 class="white"><?php the_title(); ?></h1>
      </section>
    </header>
  <?php else:?>
    <header>
      <h1 class="yellow"><?php the_title(); ?></h1>
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
        <?php the_field_without_wpautop('info') ; ?>
      </p>
    <?php endif;?>
		<?php if( !empty($location) ): ?>
			<div class="acf-map">
				<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
			</div>
		<?php endif; ?>
  </section>
</article>

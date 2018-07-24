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
$post_object = get_sub_field('surf_spot');
?>


<article class="spots" id="<?php echo $id;?>" >
  <?php if ($image):?>
    <header class="image-box" style="background-image:url('<?php echo $image_url;?>')">
      <section class="content" >
        <h1 class="white"><?php echo $title ?></h1>
      </section>
    </header>
  <?php else:?>
		<header class="image-box image-box--noborder">
      <section class="content" >
        <h1 class="white"><?php echo $title ?></h1>
      </section>
    </header>

  <?php endif;?>
  <section class="meta">
    <?php if ($type):?>
      <h3 class="white">Type</h3>
      <?php echo $type ?>
    <?php endif;?>
  </section>
	<?php
		if( $post_object ):
		$post = $post_object;
		setup_postdata( $post );
		?>
		<a class="spot-link" href="<?php the_permalink();?>" title="Olá Onda Ericeira - Surfspot Guide - <?php the_title();?>">
			<h3 class="white">Want to know more?</h3>
			<p>Read here</p>
		</a>
		<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	<?php endif;?>
</article>

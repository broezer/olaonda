<?php
$title = get_sub_field('title');
$lower = strtolower($title);
$id = str_replace(' ', '-', $lower);

$image = get_sub_field('image');
$size  = 'large';
$image_url = $image['sizes'][ $size ];

$type = get_sub_field('type');
$conditions = get_sub_field('conditions');
$crowd = get_sub_field('crowd');
$info = get_sub_field('info');
$post_object = get_sub_field('surf_spot');

?>



  <?php if ($image):?>

  <?php else:?>

  <?php endif;?>
	<?php
		if( $post_object ):
		$post = $post_object;
		setup_postdata( $post );
		$location = get_field('location');
		?>
			<?php if( !empty($location) ): ?>
				<div class="marker marker-<?php echo $id;?>" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
					<section>
					<h4 class="yellow marker-title"><?php the_sub_field('title'); ?></h2>

					<a href="<?php the_permalink();?>" title="Ola Onda Surfspot Guide - <?php the_title();?>">Click to read more</a>
					</section>
				</div>

			<?php endif; ?>
	    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	<?php endif; ?>

</article>

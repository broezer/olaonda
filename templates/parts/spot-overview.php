<?php
$title = get_sub_field('title');

$image = get_sub_field('image');
$size  = 'large';
$image_url = $image['sizes'][ $size ];

$type = get_sub_field('type');
$conditions = get_sub_field('conditions');
$crowd = get_sub_field('crowd');
$info = get_sub_field('info');
$post_object = get_sub_field('surf_spot');

?>


<article>
  <?php if ($image):?>

  <?php else:?>

  <?php endif;?>
	<?php
		if( $post_object ):
		$post = $post_object;
		setup_postdata( $post );
		$location = get_field('location');
		?>
	   	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php if( !empty($location) ): ?>
			<div class="map-wrapper">
				<div class="content acf-map">
					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
				</div>
			</div>
			<?php endif; ?>
	    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	<?php endif; ?>

</article>

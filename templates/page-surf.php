<?php
/**
 * Template Name: Surf
 * The template for Surf
 *
 */
get_header(); ?>


<?php
$image = get_field('header_image');
$size  = 'hd';
$image_url = $image['sizes'][ $size ];
?>


<main class="surf">
  <?php if($image):?>
  <header class="image-box surf intro-box"  style="background-image:url('<?php echo $image_url;?>')" >
  <?php else:?>
  <header class="image-box surf intro-box">
  <?php endif;?>
    <section class="content">
      <h1 class="white"><?php the_title();?></h1>
      <h2 class="white"><?php the_field('subtitle')?></h2>
    </section>
  </header>

  <article class="">
		<p class="full-width medium-italic">
			<?php the_field_without_wpautop('intro');?>
		</p>
  </article>



    <?php
    // check if the flexible content field has rows of data
    if( have_rows('content') ):

         // loop through the rows of data
        while ( have_rows('content') ) : the_row();

            if( get_row_layout() == 'article' ):

              get_template_part( 'templates/parts/content-article');

            endif;

        endwhile;

    else :

        // no layouts found

    endif;

    ?>





</main>

<?php get_footer(); ?>

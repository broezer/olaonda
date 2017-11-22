<?php
/**
 * Template Name: Adventures
 * The template for Adventures
 *
 */
get_header(); ?>


<?php
$image = get_field('header_image');
$size  = 'hd';
$image_url = $image['sizes'][ $size ];
?>


<main class="adventures">
  <?php if($image):?>
  <header class="image-box adventures intro-box"  style="background-image:url('<?php echo $image_url;?>')" >
  <?php else:?>
  <header class="image-box adventures intro-box">
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
    if( have_rows('activities') ):

         // loop through the rows of data
        while ( have_rows('activities') ) : the_row();

            if( get_row_layout() == 'spot' ):

              get_template_part( 'templates/parts/activity');

            elseif( get_row_layout() == 'sigthseeing' ):

            	get_template_part( 'templates/parts/sightseeing');

            endif;

        endwhile;

    else :

        // no layouts found

    endif;

    ?>





</main>

<?php get_footer(); ?>

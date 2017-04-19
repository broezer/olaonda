<?php
/**
 * Template Name: Surf
 * The template for Surf
 *
 */
get_header(); ?>


<main class="surf">
  <header class="image-box surf intro-box">
    <section class="content">
      <h1 class="white"><?php the_title();?></h1>
      <h2 class="white"><?php the_field('subtitle')?></h2>
    </section>
  </header>

  <article class="">
    <p class="full-width medium-italic">
      <?php the_field('intro');?>
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

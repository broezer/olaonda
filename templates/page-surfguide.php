<?php
/**
 * Template Name: Surf Guide
 * The template for Surf Guide
 *
 */
get_header(); ?>


<main class="surfguide">

    <header class="wrapper">
      <h1 class="green"><?php the_title();?></h1>
      <h2 class="undertitle yellow"><?php the_field('subtitle');?></h2>
      <p><?php the_field('intro');?></p>
    </header>


    <?php
    // check if the flexible content field has rows of data
    if( have_rows('surfguide') ):

         // loop through the rows of data
        while ( have_rows('surfguide') ) : the_row();

            if( get_row_layout() == 'area' ):

              get_template_part( 'templates/parts/area-title');

            elseif( get_row_layout() == 'spot' ):

            	get_template_part( 'templates/parts/spot');

            endif;

        endwhile;

    else :

        // no layouts found

    endif;

    ?>





</main>

<?php get_footer(); ?>

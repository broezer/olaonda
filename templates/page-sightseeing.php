<?php
/**
 * Template Name: Sightseeing
 * The template for Sightseeing
 *
 */
get_header(); ?>


<?php
$image = get_field('header_image');
$size  = 'hd';
$image_url = $image['sizes'][ $size ];
?>


<main class="adventures sightseeing">

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

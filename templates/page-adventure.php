<?php
/**
 * Template Name: Adventure
 * The template for Single Adventure
 *
 */
get_header(); ?>


<?php
$image = get_field('header_image');
$size  = 'hd';
$image_url = $image['sizes'][ $size ];
?>


<main class="adventures">

    <?php get_template_part( 'templates/parts/adventure'); ?>

</main>

<?php get_footer(); ?>

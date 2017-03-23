<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage WordPress Start Me Up
 */

get_header(); ?>

<main>
	<section class="content">
    <h1 class="green"><?php the_title();?></h1>
    <h2 class="yellow">Coming Soon</h2>
  </section>
</main>


<?php get_footer(); ?>

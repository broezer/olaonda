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

<main class="page-default">
<?php while ( have_posts() ) : the_post(); ?>
	<article>
		<header>
			<h1 class="green"><?php the_title(); ?></h1>
		</header>
		<section class="wrapper blog-post">
			<?php the_content(); ?>
		</section>
	</article>
<?php endwhile;  ?>
</main>


<?php get_footer(); ?>

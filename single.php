<?php
/**
 * The template for displaying single posts.
 *
 * @package WordPress
 * @subpackage WordPress Start Me Up
 */

get_header(); ?>


<main>
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

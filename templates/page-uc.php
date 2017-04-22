<?php
/**
 * Template Name: Under Construction
 * The template for Under Construction
 *
 */
get_header(); ?>



<main class="page-uc">
<?php while ( have_posts() ) : the_post(); ?>
	<article>
		<header>
			<h1 class="green">Olá Onda Ericeira Guesthouse</h1>
		</header>
		<section class="wrapper">
			<?php the_content(); ?>
		</section>
	</article>
<?php endwhile;  ?>
</main>


<?php get_footer(); ?>

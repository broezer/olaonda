<?php
/**
 * Template Name: Adventure
 * The template for Single Adventure
 *
 */

$undertitle = get_field('undertitle');
$content = get_field('content');

get_header(); ?>


<?php




?>


<main class="adventure">
<?php while ( have_posts() ) : the_post(); ?>
	<article>
		<header>
			<h1 class="green"><?php the_title(); ?></h1>
			<h2 class="green"><?php echo $undertitle ?></h2>
		</header>
		<section class="wrapper blog-post">
			<?php echo the_content(); ?>
		</section>
	</article>
<?php endwhile;  ?>
</main>


<?php get_footer(); ?>

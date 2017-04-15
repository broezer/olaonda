<?php
/**
 * Template Name: Blog Page
 * The template for Blog Page
 *
 */
get_header(); ?>


<main class="blog">
  <div class="wrapper">
    <header>
      <h1 class="green"><?php the_title();?></h1>
    </header>
    <?php // Display blog posts on any page @ https://m0n.co/l
  		$temp = $wp_query; $wp_query= null;
  		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=10' . '&paged='.$paged);
  		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>

        <article class="blog-item" style="background-image:url('<?php echo $url;?>')">
          <a href="<?php the_permalink(); ?>" title="Read more">
        		<h2>
              <?php the_title(); ?>
            </h2>
          </a>
        </article>


  		<?php endwhile; ?>

  		<?php if ($paged > 1) { ?>

  		<nav id="nav-posts">
  			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
  			<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
  		</nav>

  		<?php } else { ?>

  		<nav id="nav-posts">
  			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
  		</nav>

  		<?php } ?>

  		<?php wp_reset_postdata(); ?>
    </article>
  </div>
</main>

<?php get_footer(); ?>

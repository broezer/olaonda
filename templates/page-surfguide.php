<?php
/**
 * Template Name: Surf Guide
 * The template for Surf Guide
 *
 */
get_header(); ?>


<main class="surfguide">

    <header class="wrapper wrapper--surfguide">
      <h1 id="guide" class="green"><?php the_title();?></h1>
      <h2 class="undertitle yellow"><?php the_field('subtitle');?></h2>

    </header>
		<section class="surfguide-map cf">
			<aside class="surf-map">
				<div class="content">
					<div class="acf-map">
						<?php

						// check if the flexible content field has rows of data
						if( have_rows('surfguide') ):
								 // loop through the rows of data
								while ( have_rows('surfguide') ) : the_row();
										if( get_row_layout() == 'area' ):
											//get_template_part( 'templates/parts/area-title');
										elseif( get_row_layout() == 'spot' ):
											get_template_part( 'templates/parts/spot-pins');
										endif;
								endwhile;
						else :
						endif;
						?>

					</div>
				</div>
			</aside>
			<div class="wrapper wrapper--spots">
				<section id="guide-intro"><?php the_field('intro');?></section>
				<?php
				// check if the flexible content field has rows of data
				if( have_rows('surfguide') ):
				global $b;
				$b = 0;
						while ( have_rows('surfguide') ) : the_row();
								if( get_row_layout() == 'area' ):
									get_template_part( 'templates/parts/area-title');
								elseif( get_row_layout() == 'spot' ):
									$b++;
									get_template_part( 'templates/parts/spot');
								endif;
						endwhile;
				else :
				endif;
				?>
			</div>
		</section>
</main>


<?php get_footer(); ?>

<?php
$title = get_sub_field('title');
$undertitle = get_sub_field('undertitle');


?>


<article class="sightseeing">

  <header>
    <h1 class=""><?php echo $title ?></h1>
    <h2 class=""><?php echo $undertitle ?></h2>
  </header>

  <?php
  // check if the flexible content field has rows of data
  if( have_rows('cities') ):

       // loop through the rows of data
      while ( have_rows('cities') ) : the_row();

          if( get_row_layout() == 'city' ):

            get_template_part( 'templates/parts/city');

          endif;

      endwhile;

  else :

      // no layouts found

  endif;

  ?>
</article>

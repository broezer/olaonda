<?php
$title = get_sub_field('title');
$class = strtolower($title);
$undertitle = get_sub_field('undertitle');

//$content = get_sub_field('content');
?>


<article class="<?php echo $class; ?>">

  <header>
    <h1 class=""><?php echo $title ?></h1>
    <h2 class=""><?php echo $undertitle ?></h2>
  </header>


  <?php
  // check if the flexible content field has rows of data
  if( have_rows('content-part') ):

       // loop through the rows of data
      while ( have_rows('content-part') ) : the_row();

          if( get_row_layout() == 'text' ):

            $text = get_sub_field('text');
          ?>
          <section class="wrapper">
            <p class="content">
              <?php echo $text; ?>
            </p>

          </section>


          <?php
          elseif( get_row_layout() == 'text_img' ):
            $img = get_sub_field('image');
            $title = get_sub_field('title');
            $text = get_sub_field('text');
          ?>

          <div class="wrapper">
            <section>
              <h4 class=""><?php echo $title ?></h4>
              <p class="content">
                <?php echo $text; ?>
              </p>
            </section>
            <figure class="image" style="background-image:url('<?php echo $img['url'];?>')">

            </figure>
          </div>

          <?php
          endif;

      endwhile;

  else :

      // no layouts found

  endif;

  ?>








</article>

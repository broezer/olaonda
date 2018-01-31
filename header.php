<?php
/**
 * The template for displaying the header
 *
 * @package WordPress
 * @subpackage WordPress Start Me Up
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NB4NN6L');</script>
	<!-- End Google Tag Manager -->

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php if (is_home()|| is_front_page()):?>
		<title><?php bloginfo('name'); ?></title>
	<?php else: ?>
		<title><?php the_title('', ' - '); ?><?php bloginfo('name'); ?></title>
	<?php endif ?>

	<?php wp_head(); ?>

	<?php
	  $hostname = $_SERVER['HTTP_HOST']; // For local development
	  if ($hostname == 'olaonda.test'  ): //Set hostname as provided
	?>
	<!-- bower:css -->
	<!-- endbower -->

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/dev.css" />
	<?php else:?>

	<!-- vendor:css -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/vendor.min.css">
	<!-- endvendor -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/main.min.css" />
	<?php endif;?>

</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NB4NN6L"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

<?php if (!is_page_template('templates/page-uc.php')) :?>

	<a class="menu-button hvr-sweep-to-bottom ">
		<span class="c-hamburger c-hamburger--htx">
		  <span>toggle menu</span>
		</span>
	</a>

	<?php if ( is_singular('post') || is_page_template('default') ||  is_page_template('templates/page-blog.php') ||  is_page_template('templates/page-surfguide.php')) :?>
	<nav class="main-menu fixed">
	<?php else :?>
	<nav class="main-menu scroll">
	<?php endif;?>
		<div class="content">
			<section class="list">
				<ul class="">
					<li class="logo">
						<a href="/">
							<img class="logo-small" src="<?php echo get_template_directory_uri(); ?>/assets/svg/olaonda.svg">
						</a>
					</li>
					 <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => '', 'items_wrap' => '%3$s') ); ?>
				</ul>

			</section>
		</div>
		<div class="nav-adress">
			<section class="content vcard">
	      <p class="adr">
	        <span class="street-address">Rua Encosta da Abadia, 4</span>
	        <span class="postal-code">2655-432</span>
	        <span class="locality">Ericeira</span>
	      </p>
	      <a class="email underline" href="mailto:info@ola-onda-ericeira.com">info@ola-onda-ericeira.com</a>
	      <a class="tel phone-number" href="tel:+351937323140">+351 937 323 140</a>

	    </section>

		</div>
	</nav>


	<?php if ( is_singular('post') || is_page_template('default')  ||  is_page_template('templates/page-blog.php') ||  is_page_template('templates/page-blog.php')) :?>
	<?php else :?>
	<nav class="main-menu fixed fixed--later">
		<div class="content">
			<section class="list">
				<ul class="">
					<li class="logo">
						<a href="/">
							<img class="logo-small" src="<?php echo get_template_directory_uri(); ?>/assets/svg/olaonda.svg">
						</a>
					</li>
					 <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => '', 'items_wrap' => '%3$s') ); ?>
				</ul>
			</section>
		</div>
		<div class="nav-adress">
			<section class="content vcard">
	      <p class="adr">
	        <span class="street-address">Rua Encosta da Abadia, 4</span>
	        <span class="postal-code">2655-432</span>
	        <span class="locality">Ericeira</span>
	      </p>
	      <a class="email underline" href="mailto:info@ola-onda-ericeira.com">info@ola-onda-ericeira.com</a>
	      <a class="tel phone-number" href="tel:+351937323140">+351 937 323 140</a>
				
	    </section>
		</div>
	</nav>
	<?php endif;?>
<?php endif;?>

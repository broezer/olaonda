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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

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
	<!-- endvendor -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/main.min.css" />
	<?php endif;?>

</head>

<body <?php body_class(); ?>>

<a class="menu-button hvr-sweep-to-bottom ">
	<span class="c-hamburger c-hamburger--htx">
	  <span>toggle menu</span>
	</span>
</a>

<nav class="main-menu scroll">
	<div class="content">
		<section class="list">
			<ul class="">
				<li class="logo">
					<a href="/">
						<img class="logo-small" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
					</a>
				</li>
				<li>
					<a href="/ola-onda">Olá Onda</a>
				</li>
				<li>
					<a href="/rooms">Rooms</a>
				</li>
				<li>
					<a href="/">Surf</a>
				</li>
				<li>
					<a href="/">Adventures</a>
				</li>
				<li>
					<a href="/">Blog</a>
				</li>
				<li>
					<a href="/">Contact</a>
				</li>
			</ul>
		</section>
	</div>
</nav>

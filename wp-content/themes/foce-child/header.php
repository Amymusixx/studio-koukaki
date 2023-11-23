<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
    <div><h4 class="titre-menu">Fleurs d'orangers & chats errants</h4>
    <a href="#" id="openBtn"><span class="burger-icon">
    <span></span>
    <span></span>
    <span></span>
  </span>
</a>
<a id="closeBtn" href="#" class="close-hidden"><span>×</span></a>
</div>
    
    <div id="menu-burger" class="menu-burger-hidden">
      
  <img class="cat-blue floating-cat" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/cat.png'; ?>">
  <img class="cat-orange floating-cat" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/cat (1).png'; ?>">
  <img class="cat-black floating-cat" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Group 180.png'; ?>">
  <img class="flower-orange" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Flower.png'; ?>">
  <img class="flower-red" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Hibiscus.png'; ?>">
  <img id="fleur-violette" class="" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/orchid.png'; ?>">
  <img class="flower-pink" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/random_flower.png'; ?>">
  <img class="flower-white" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Sunflower.png'; ?>">

    <div class="menu-logo"><img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>"></div>
      <ul>
    <li><a id="close-story" href="#section-story"><span class="animation-titre slideInUp">Histoire</span></a>
    <li><a id="close-characters" href="#characters">Personnages</a></li>
    <li><a id="close-place" href="#place">Lieu</a></li>
    <li><a id="close-studio" href="#studio">Studio Koukaki</a></li>
  </ul>
  <div class="footer-menu"><p>STUDIO KOUKAKI</p></div>
</div>
      <div>

		<div id="mySidenav" class="sidenav">
    
</div>

<nav>
        



</nav>


	</header><!-- #masthead -->

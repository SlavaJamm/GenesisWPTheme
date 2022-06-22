<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// $bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
// $navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<style>
	body{
		opacity: 0;
	}
	body.loaded{
		opacity: 1;
	}
	</style>
	<!-- <link rel="profile" href="http://gmpg.org/xfn/11"> -->
	<!-- google tag for client id catch  -->
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-T3PWBR5');</script>
	<!-- End Google Tag Manager -->

	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
  	<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css"> -->
	<link rel="stylesheet" href="<?php wp_enqueue_style ('genesis', get_stylesheet_directory_uri (). '/css/genesis.css?v=3.3.0');?>">
	<meta property="og:image" content="https://genesis-startup-academy.com/wp-content/uploads/2022/05/Badge-min.png">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="2400">
	<meta property="og:image:height" content="1256">
	
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>

<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<header id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<?php get_template_part( 'global-templates/navbar', $navbar_type . '-' . $bootstrap_version ); ?>

	</header><!-- #wrapper-navbar end -->

<?php
/**
 * UnderStrap functions and definitions
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = 'inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/block-editor.php',                    // Load Block Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once get_theme_file_path( $understrap_inc_dir . $file );
}

//add js file to footer
function add_this_script_footer(){ ?>




	<!-- jquery for slider  -->
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

	<!-- slick slider cdn  -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<script>
    

		// show content only when loaded
		$(document).ready(function() {
			$("body").addClass("loaded");
		});


		// slick-slider 
		$(document).ready(function(){
			$('.single-review').slick({
				dots: true,
				infinite: true,
				speed: 500,		
  				autoplaySpeed: 4000,
				autoplay: true,
				arrows: false,		
			});
		});

		// / popup open thanks
		if($('.wpcf7-form').hasClass('sent')) {
			$('.popup-thanks').addClass('open'); 
		};
		// / popup open privacy
		$('.wpcf7-list-item-label').on('click', '.privacy-linktoopen', function() {
			$('.popup-privacy').addClass('open');			
		});


		// popup closee thanks
		$('.popup-thanks').on('click', '.closepopup', function() {
			$('.popup.open').removeClass('open');
			
			//after closing popup lead to main
            window.location.href = "/";
		});
		// popup closee privacy
		$('.popup-privacy').on('click', '.closepopup', function() {
			$('.popup.open').removeClass('open');			
		});

		// form underscore description of country
		$('.form-page form p:nth-child(11)').append( 
			"<div class='under-country'>* Your Company is eligible for participation only if it is incorporated in and its founder(s) and beneficial owner(s) are citizens of one of the eligible countries listed above</div>" 
		);


		// slick-slider only for phones
		if($(window).width() < 767){
			$(document).ready(function(){
				$('.slider-only-for-phone').slick({
					dots: true,
					infinite: true,
					speed: 500,		
					autoplaySpeed: 2000,
					autoplay: true,
					arrows: false,		
				});
			});
			// slick-slider only for phones with 2 slides
			$(document).ready(function(){
				$('.slider-only-for-phone-two-slides').slick({
					dots: true,
					infinite: true,
					speed: 500,		
					slidesToShow: 2,
					slidesToScroll: 2,
					autoplaySpeed: 2000,
					autoplay: true,
					arrows: false,		
				});
			});

		};

		// accortion faq
		$( function() {
			$( "#accordion" ).accordion({ collapsible: true, active: true});
		} );

		// mobile menu 
		$("#menuToggle").click(function(){
			$(".links").toggleClass('menu-show');
		});

		$("#about, #enroll, #program, #faq").on('click','a', function(event){ 
			event.preventDefault();
			var o =  $( $(this).attr("href") ).offset();   
			var sT = o.top - $("#menu-wrapper").outerHeight(true); // get the fixedbar height
			// compute the correct offset and scroll to it.
			window.scrollTo(0,sT);
		});
		


		
	
		

	</script>

<?php } 

add_action('wp_footer', 'add_this_script_footer'); ?>

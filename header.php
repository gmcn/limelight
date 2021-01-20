<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link type="text/plain" rel="author" href="<?php echo get_template_directory_uri(); ?>/humans.txt" />
<link type="text/plain" rel="robots" href="<?php echo get_template_directory_uri(); ?>/robots.txt" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starting-theme' ); ?></a>

	<header class="fixed-top">

		<div class="container-fluid top-nav--wrap">
			<div class="row">
				<div class="col-md-6">
					<a href="tel:+44 20 8447 4690">


						<svg id="phone-call" xmlns="http://www.w3.org/2000/svg" width="14.271" height="14.271" viewBox="0 0 14.271 14.271">
						  <g id="Group_5" data-name="Group 5">
						    <path id="Path_37" data-name="Path 37" d="M13.144,9.4a8.158,8.158,0,0,1-2.56-.407,1.1,1.1,0,0,0-1.114.236L7.85,10.448A9.049,9.049,0,0,1,3.823,6.422L5.013,4.84a1.137,1.137,0,0,0,.279-1.149,8.155,8.155,0,0,1-.41-2.564A1.128,1.128,0,0,0,3.755,0H1.127A1.128,1.128,0,0,0,0,1.127,13.159,13.159,0,0,0,13.144,14.271a1.128,1.128,0,0,0,1.127-1.127V10.523A1.128,1.128,0,0,0,13.144,9.4Z" fill="#372c2e"/>
						  </g>
						</svg>




						+44 20 8447 4690</a>
				</div>
				<div class="col-md-6">

					<?php
						wp_nav_menu( array(
							'theme_location'  => 'top-nav',
							'container'       => 'div',
							'depth'           => 2,
							// 'menu_class'      => 'navbar-nav mr-auto'
							) );
						?>

				</div>
			</div>
		</div>

		<nav class="navbar navbar-expand-lg">

			<?php $description = get_bloginfo( 'description', 'display' ); ?>

			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">

				<img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" alt=" <?php echo $description; /* WPCS: xss ok. */ ?>">

			</a>


			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<?php
				wp_nav_menu( array(
					// 'theme_location'  => 'mega_menu',
					// 'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
					// 'container'       => 'div',
					// 'container_class' => 'collapse navbar-collapse',
					// 'container_id'    => 'navbarCollapse',
					// 'menu_class'      => 'navbar-nav ml-auto',
					// 'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					// // 'walker'          => new WP_Bootstrap_Navwalker(),
					// 'walker'  				=> new BootstrapNavMenuWalker(),

					'theme_location' => 'mega_menu',
				  'depth' => 0,
					'container'       => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'navbarCollapse',
				  'menu_class'  => 'navbar-nav ml-auto',
				  'walker'  => new BootstrapNavMenuWalker()

					) );
				?>

		</nav>




	</header><!-- header -->



	<div id="content" class="site-content">

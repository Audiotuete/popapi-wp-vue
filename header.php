<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title><?php bloginfo('name'); wp_title(); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>


	<header class="jumbotron-container">
	<a href="http://www.nachhaltige-hochschulen.de/info/">
		<div class="jumbotron-content">
		<h1 class="site-title">
			<span class="pre-title">
				Positions- und Forderungspapier
			</span><br> 
			Nachhaltigkeit und Ethik<br> 
			an Hochschulen
		</h1>
		</div>
		</a>
	</header>
	<div class="nav-container">
		<nav class="navbar">
			<div class="home-link-container"><a class="link-to-home" href='http://www.nachhaltige-hochschulen.de/'><img class="home-icon" src="http://www.nachhaltige-hochschulen.de/wp-content/themes/PoPaPi/icons/home-button.png"  alt="home-link"/></a></div>
			<?php
				wp_nav_menu(array(
						'theme_location' 	=> 'primary',
						'menu_class' 		=> 'primary-menu',
						'container'			=> 'false'
				));
				?>
			<div class="unterzeichnen--container"><a href='http://www.nachhaltige-hochschulen.de/unterzeichnen'>Unterzeichnen</a></div>
			<!-- <div class="unterzeichnen--container"><a href='http://localhost/wordpress/unterzeichnen/'>Unterzeichnen</a></div> -->
		</div>	
		</nav>

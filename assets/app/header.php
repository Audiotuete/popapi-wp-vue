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

		<!-- <header class="jumbotron">

			<div class="white-overlay"></div>
			<img class="header-img"	src="wp-content/themes/popapi/assets/mobile_jumbotron.png" alt="Cafe Vetter Header"/>

			<div class="logo-container">
				<img class="header-logo" src="wp-content/themes/popapi/assets/vetter_Logo.png" alt="Cafe Vetter Logo"/>
			</div>

		</header> -->
		<div class="nav-container">
			<nav class="navbar">
				<?php
					wp_nav_menu(array(
							'theme_location' 	=> 'primary',
							'menu_class' 		=> 'primary-menu',
							'container'			=> 'false'
					));
					?>
				<div class="unterzeichnen--container"><a href='http://netzwerk-n.org/nh/unterzeichnen/'>Unterzeichnen</a></div>
				<!-- <div class="unterzeichnen--container"><a href='wordpress/unterzeichnen'>Unterzeichnen</a></div> -->
			</div>	
		</nav>

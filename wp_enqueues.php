<?php

//Loading stylesheets and scripts
function enqueue_customtheme_styles() {
	// wp_enqueue_script('boostrap_js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'));
	// wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
	wp_enqueue_style('google_fonts_PTSansNarrow', '//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700');
	wp_enqueue_style('popapi_stylesheet', get_template_directory_uri() . '/css/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_customtheme_styles');

// function enqueue_customtheme_scripts() {

// 	wp_enqueue_script('popapi_scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);
// }
// add_action('wp_enqueue_scripts', 'enqueue_customtheme_scripts');


function customtheme_setup() {
	register_nav_menus(array(
		'primary' => __('Primary Menu', 'customtheme')
	));

	// Adding dynamic Title support
	add_theme_support('title_tag');
}
add_action('after_setup_theme', 'customtheme_setup');


// A Footer Sidbar 
function footerWidget() {
	register_sidebar( array(
		name	=>'Footer',
		id		=>'footer'
	));
}

add_action( 'widgets_init', 'footerWidget' )
// function customize_mobile_mid($wp_customize) {
// 	$wp_customize->add_section('vetter-mobile-mid-section', array(
// 			'title' => 'Bilder: Handyansicht'
// 	));

// 	$wp_customize->add_setting('vetter-mobile-img-1');

// 	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control(
// 		$wp_customize, 'vetter-mobile-img1-control', array(
// 			'label' => 'Oberes Bild',
// 			'section' => 'vetter-mobile-mid-section',
// 			'settings' => 'vetter-mobile-img-1',
// 			'width' => 640,
// 			'height' => 350
// 		)
// 	));

// 	$wp_customize->add_setting('vetter-mobile-img-2');

// 	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control(
// 		$wp_customize, 'vetter-mobile-img2-control', array(
// 			'label' => 'Unteres Bild',
// 			'section' => 'vetter-mobile-mid-section',
// 			'settings' => 'vetter-mobile-img-2',
// 			'width' => 640,
// 			'height' => 144
// 		)
// 	));
// }
// add_action('customize_register', 'customize_mobile_mid')
?>

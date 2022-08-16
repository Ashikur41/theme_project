<?php
if(!function_exists('my_theme_setup')):


function my_theme_setup(){
	
	
	load_theme_textdomain('mytextdomaindev',get_template_directory_uri().'/languages');
	add_theme_support('post-thumbnails');
	add_theme_support( 'post-formats', array( 'aside', 'gallery','quote','image','video' ) );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-background',array(
	'default-color'=>'ff00oo',
	'default-image'=> get_template_directory_uri().'/assets/img/team-1.jpg'
		));
    add_theme_support('custom-header',array(
	'width'=>'980',
	'height'=>'60',
	'default-image'=> get_template_directory_uri().'/assets/img/service-4.jpg'
	));
	add_theme_support( 'custom-logo', array(
    'height'               => 100,
    'width'                => 400,
    'default-image'=> get_template_directory_uri().'/assets/img/carousel-1.jpg'
   ));
  
   add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
   add_theme_support( 'title-tag' );
   add_theme_support( 'customize-selective-refresh-widgets' );

	
	
	

	
	

	
}





endif;
function my_scripts(){
	
	wp_enqueue_style('style',get_template_directory_uri().'/assets/css/style.css');
	wp_enqueue_style('img',get_template_directory_uri().'/assets/img/favicon.ico');
	wp_enqueue_style('lib',get_template_directory_uri().'/assets/lib/flaticon/font/flaticon.css');
	wp_enqueue_style('owlcarousel',get_template_directory_uri().'/assets/lib/owlcarousel/assets/owl.carousel.min.css');
	wp_enqueue_style('owlcarouselfg',get_template_directory_uri().'/assets/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css');
	
	
	wp_enqueue_script('jquery',get_template_directory_uri().'/assets/https://code.jquery.com/jquery-3.4.1.min.js');
	wp_enqueue_script('stackpath',get_template_directory_uri().'/assets/https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js');
	wp_enqueue_script('easing',get_template_directory_uri().'/assets/lib/easing/easing.min.js');
	wp_enqueue_script('waypoints',get_template_directory_uri().'/assets/lib/waypoints/waypoints.min.js');
	wp_enqueue_script('counterup',get_template_directory_uri().'/assets/lib/counterup/counterup.min.js');
	wp_enqueue_script('carousel',get_template_directory_uri().'/assets/lib/owlcarousel/owl.carousel.min.js');
	wp_enqueue_script('jqBootstrapValidation',get_template_directory_uri().'/assets/mail/jqBootstrapValidation.min.js');
	wp_enqueue_script('contact',get_template_directory_uri().'/assets/mail/contact.js');
	wp_enqueue_script('main',get_template_directory_uri().'/assets/js/main.js');
	
}


add_action('wp_enqueue_scripts','my_scripts');

function my_register_menu(){
	register_nav_menus(array(
	'top'=>__('Top Menu','mytextdomaindev'),
	'primary'=>__('Primary Menu','mytextdomaindev'),
	'footer'=>__('Footer Menu','mytextdomaindev')
	
	));

}
add_action('init','my_register_menu');

include ('inc/add-class.php');

function modify_length($length){
	return 25;
}


add_filter('excerpt_length','modify_length');

function read_more($more){
	
	return '<a href="'.get_permalink(get_the_ID()).'">read more</a>';
}

add_filter('excerpt_more','read_more');

add_action('after_setup_theme','my_theme_setup');



?>
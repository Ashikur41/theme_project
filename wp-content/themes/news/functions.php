<?php
if(!function_exists('my_theme_setup')):


function my_theme_setup(){
	load_theme_textdomain('textdomainnews',get_template_directory_uri().'/languages');
	add_theme_support('post-thumbnails');
}

endif;

function my_scripts(){
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css');
	wp_enqueue_style('awesome',get_template_directory_uri().'/assets/css/font-awesome.min.css');
	wp_enqueue_style('animate',get_template_directory_uri().'/assets/css/animate.css');
	wp_enqueue_style('font',get_template_directory_uri().'/assets/css/font.css');
	wp_enqueue_style('scroller',get_template_directory_uri().'/assets/css/li-scroller.css');
	wp_enqueue_style('slick',get_template_directory_uri().'/assets/css/slick.css');
	wp_enqueue_style('fancybox',get_template_directory_uri().'/assets/css/jquery.fancybox.css');
	wp_enqueue_style('theme',get_template_directory_uri().'/assets/css/theme.css');
	wp_enqueue_style('style',get_template_directory_uri().'/assets/css/style.css');
	
	wp_enqueue_script('jquery.min',get_template_directory_uri().'/assets/js/jquery.min.js');
	wp_enqueue_script('min',get_template_directory_uri().'/assets/js/wow.min.js');
	wp_enqueue_script('bootstrapp',get_template_directory_uri().'/assets/js/bootstrap.min.js');
	wp_enqueue_script('slickg',get_template_directory_uri().'/assets/js/slick.min.js');
	wp_enqueue_script('scrollerr',get_template_directory_uri().'/assets/js/jquery.li-scroller.1.0.js');
	wp_enqueue_script('newsTicker',get_template_directory_uri().'/assets/js/jquery.newsTicker.min.js');
	wp_enqueue_script('fancyboxy',get_template_directory_uri().'/assets/js/jquery.fancybox.pack.js');
	wp_enqueue_script('custom',get_template_directory_uri().'/assets/js/custom.js');
}




add_action('wp_enqueue_scripts','my_scripts');
add_action('after_setup_theme','my_theme_setup');


require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
register_nav_menus(array(

'top'=>__('Top Menu','textdomainnews'),
'primary'=>__('Primary Menu','textdomainnews'),
'footer'=>__('Footer Menu','textdomainnews')


));

//popular post code start
function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

//popular post code end


?>
<?php

function hvo_scripts()
{
	// Scripts
	wp_enqueue_script('jquery', get_template_directory_uri() . '/bootstrap/js/jquery.min.js', array(), '1.0.0', true);
	wp_enqueue_script('bootjs', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), '1.0.0', true);
	
	// Slick
	wp_enqueue_script('slickslider', get_template_directory_uri() . '/js/slick.min.js', array(), '1.0.0', true);

	// Scrollmagic
	wp_enqueue_script('TweenMax', get_template_directory_uri() . '/js/TweenMax.min.js', array(), '1.0.0', true);
	wp_enqueue_script('ScrollMagic', get_template_directory_uri() . '/js/ScrollMagic.min.js', array(), '1.0.0', true);
	wp_enqueue_script('AnimationGsap', get_template_directory_uri() . '/js/animation.gsap.min.js', array(), '1.0.0', true);
	wp_enqueue_script('addIndicators', get_template_directory_uri() . '/js/debug.addIndicators.min.js', array(), '1.0.0', true);

	// Custom
	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true);

	// CSS
	wp_enqueue_style('bootcss', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'hvo_scripts');


// Menu's
function register_my_menus()
{
	register_nav_menus(
		array(
			'main_menu' => __('Hoofd Menu'),
			'socket' => __('Socket Menu'),
		)
	);
}
add_action('init', 'register_my_menus');



// Menu button
add_filter('wp_nav_menu_items', 'my_wp_nav_menu_items', 10, 2);

function my_wp_nav_menu_items($items, $args)
{

	// get menu
	$menu = wp_get_nav_menu_object($args->menu);


	// modify primary only
	if ($args->theme_location == 'main_menu') {

		// vars
		$knop = get_field('menu_knop', $menu);


		// prepend logo
		$menu_knop = "<li><a href=" . $knop['url'] . " class='nav-btn'>" . $knop['title'] . "</a></li>";


		// append html
		$items = $items . $menu_knop;
	}


	// return
	return $items;
}


// Img sizes

add_image_size('homeheader', 1400, 420, true);


// Widgets

function arphabet_widgets_init()
{

	register_sidebar(array(
		'name'          => 'Footer een',
		'id'            => 'footer_1',
		'before_widget' => '<div class="widget-block">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));

	register_sidebar(array(
		'name'          => 'Footer twee',
		'id'            => 'footer_2',
		'before_widget' => '<div class="widget-block">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));

	register_sidebar(array(
		'name'          => 'Footer drie',
		'id'            => 'footer_3',
		'before_widget' => '<div class="widget-block">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));
}

add_action('widgets_init', 'arphabet_widgets_init');


// Option pages

acf_add_options_page(array(

	'page_title' 	=> 'Socials',
	'menu_title' 	=> 'Socials',
	'menu_slug' 	=> 'socials',
	'capability' 	=> 'edit_posts',
	'icon_url' => 'dashicons-networking',
	'position' => 99

));
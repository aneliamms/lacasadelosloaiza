<?php

function casaloaiza_script_enqueue(){
	//Load StyleSheets
	wp_enqueue_style('font-menu', 'https://fonts.googleapis.com/css?family=Dancing+Script', array('customstyle') ,null,'all');
	wp_enqueue_style('font-body', 'https://fonts.googleapis.com/css?family=Poiret+One', array() ,null,'all');
	wp_enqueue_style('menu-font', 'http://fonts.googleapis.com/css?family=Raleway:300,500|Arvo:700', array() ,null,'all');

	wp_enqueue_style('style', get_template_directory_uri().'/style.css', array() ,null,'all');
	wp_enqueue_style('menu-css', get_template_directory_uri().'/css/menu.css', array() ,null,'all');
	wp_enqueue_style('customstyle', get_template_directory_uri().'/css/casaloaiza.css', array('style') ,null,'all');
	wp_enqueue_style('zocial', 'http://weloveiconfonts.com/api/?family=zocial', array() ,null,'all');
	wp_enqueue_style('fontonicons', get_template_directory_uri().'/css/fontonicons.css', array() ,null,'all');


	wp_enqueue_style('demo', get_template_directory_uri().'/css/demo.css', array() ,null,'all');
	wp_enqueue_style('normalize', get_template_directory_uri().'/css/normalize.css', array() ,null,'all');

	wp_enqueue_style('bootsrap-min', get_template_directory_uri().'/css/bootstrap.min.css', array() ,null, 'all');


	//Load Scripts
	wp_enqueue_script('jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), null, true);
	wp_enqueue_script('modernizr', get_template_directory_uri().'/js/modernizr.custom.js', array(), null, false);
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array('jQuery') , null, true);

	if(is_page( 'menu' )) {
		wp_enqueue_script('menu-js', get_template_directory_uri().'/js/menu.js', array('jQuery'), null, true);
		wp_enqueue_script('load-menu', get_template_directory_uri().'/js/load-menu.js', array('menu-js'), null, true);

	}

}

function casaloaiza_theme_setup(){
	add_theme_support('menus');
	add_theme_support('custom-header');


	register_nav_menu('primary','Header Menu');
	register_nav_menu('secondary','Footer Menu');

}

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

add_action('wp_enqueue_scripts','casaloaiza_script_enqueue');
add_action('init','casaloaiza_theme_setup');

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
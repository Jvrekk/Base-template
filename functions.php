<?php
	function js_portfolio(){
		wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');
		wp_enqueue_script('customjs', get_template_directory_uri() . '/js/index.js', array(), '1.0', true);
	}
	add_action('wp_enqueue_scripts', 'js_portfolio');


	function js_theme_setup(){
		add_theme_support('menus');
		register_nav_menu('main', 'Main menu of page');
	}
	add_action('init', 'js_theme_setup');
	

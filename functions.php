<?php
include_once dirname(__FILE__) . '/plugins/simple-cpt/simple-cpt.php';

function hades_custom_logo_setup()
{
	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array('site-title', 'site-description'),
		'unlink-homepage-logo' => true,
	);
	add_theme_support('custom-logo', $defaults);
}

function load_hades_support()
{
	add_editor_style('style.css');
	hades_custom_logo_setup();
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'load_hades_support');


function load_hades_styles()
{
	$theme_version = wp_get_theme()->get('Version');

	$version_string = is_string($theme_version) ? $theme_version : false;
	wp_register_style(
		'hades-style',
		get_template_directory_uri() . '/style.css',
		array(),
		$version_string
	);

	wp_enqueue_style(
		'hades-bootstrap',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css',
		array(),
		5.2
	);

	wp_enqueue_style('hades-style');
}

add_action('wp_enqueue_scripts', 'load_hades_styles');

function load_hades_scripts()
{
	wp_enqueue_script('script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js', array(), 5.2);
	wp_enqueue_script('script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array(), 5.2);
}

add_action('wp_enqueue_scripts', 'load_hades_scripts');

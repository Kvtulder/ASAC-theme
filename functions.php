<?php
$location = get_template_directory_uri();
$args = array(
	'default-color' => '000000',
	'default-image' => '/images/dots-3x3.png',
);



add_theme_support( 'custom-background', $args );
function my_function_admin_bar(){ 
  return false; 
}


add_filter( 'show_admin_bar' , 'my_function_admin_bar');

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Homepage Widget',
		'id'   => 'homepage-widget1',
		'description'   => 'This is a widgetized area beneath the news section.',
		'before_widget' => '<div id="contentcontainer" class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	));
		register_sidebar(array(
		'name' => 'Slider',
		'id'   => 'slider',
		'description'   => 'This is the widgetized area for the homepage slider.',
		'before_widget' => '<div id="slider">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	));

}
?>

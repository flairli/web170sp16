<?php
/*Theme name: web170 sp16 Huiming Li
author: Huiming Li/Flair
Description: This is my demo theme for web170 sp16
version:1.0*/
//register my menu
//register my sidebar
// Register My Menus
register_nav_menus(array(
'main-menu' => __( 'Main' ),
));
//
add_theme_support('post-thumbnails');
add_post_type_support('page','excerpt');

register_sidebar(array(
'name'=> __('Sidebar name', 'theme_text_domain'),
'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget' => '</li>',
	'before_title' => '<h2 class="widgettitle">',
	'after_title' => '</h2>' )); 

?>


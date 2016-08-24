<?php
/*
Theme Name: I Am an Educator
Theme URI: http://wordpress.org/themes/iamaneducator
Author: Nectar Shakir
Author URI: http://nectarshakir.com
Description: This is a customized WordPress theme for Seattle Opt Out, 2016.
Version: 1.0
*/
//Register menu //
register_nav_menus(array(
  'main-menu' => __('Main'),
));

//

// Create Post Thumbnails
add_theme_support('post-thumbnails');
//
//mulitple sidebars
   register_sidebar(array(
   'name' => 'sidebar',
   'before_widget' => '<div id="%1$s" class="widget %2$s">',
   'after_widget' => '</div>',
   'before_title' => '<h2>',
   'after_title' => '</h2>'
    ));

   register_sidebar(array(
   'name' => 'sidebar_subpage',
   'before_widget' => '<div id="%1$s" class="widget %2$s">',
   'after_widget' => '</div>',
   'before_title' => '<h2>',
   'after_title' => '</h2>'
   ));

//cropping medium images
// Add support for cropping default WordPress medium images -
if(!get_option("medium_crop"))
add_option("medium_crop", "1");
else
update_option("medium_crop", "1");
?>

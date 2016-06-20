<?php

/*
Theme Name: Spring 2016 Web 170
Author: Katherine Shaw
Author URL: http://katherineshawdesign.com
Description: Katherine is toooootally doing her homework, Mike.
Version: 0.1
*/

// My Menus A6
register_nav_menus(array(
    'navigation' => __('Main'),));

// My Sidebar A6
//register_sidebar 

// Make Thumbnails A9
add_theme_support('post-thumbnails');

// Page Excerpts A9
add_post_type_support ('page', 'excerpt'); 

?>

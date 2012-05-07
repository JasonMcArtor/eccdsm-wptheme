<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

if (function_exists('register_sidebar'))
    register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ));

add_theme_support('post-thumbnails');
set_post_thumbnail_size(619, 268);
add_image_size('right-thumb', 311, 268);

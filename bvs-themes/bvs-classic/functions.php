<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */
$current_language = strtolower(get_bloginfo('language'));

automatic_feed_links();

if ( function_exists('register_sidebar') )
    register_sidebar(
        array('name'=>__('Column 1', 'vhl'),
            'id' => 'vhl_column_1_' . $current_language,
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widgettitle"><span>',
            'after_title' => '</span></h3>',
        ));
    register_sidebar(
        array('name'=>_('Column 2', 'vhl'),
            'id' => 'vhl_column_2_' . $current_language,
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widgettitle"><span>',
            'after_title' => '</span></h3>',
        ));
    register_sidebar(
        array('name'=>_('Column 3', 'vhl'),
            'id' => 'vhl_column_3_' . $current_language,
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widgettitle"><span>',
            'after_title' => '</span></h3>',
        ));
	   register_sidebar(
        array('name'=>_('Footer', 'vhl'),
            'id' => 'vhl_footer_' . $current_language,
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widgettitle"><span>',
            'after_title' => '</span></h3>',
        ));

     if (function_exists('add_theme_support')) {
        add_theme_support('post-thumbnails');
		set_post_thumbnail_size(200, 70, true);
        add_image_size('large_highlight', 580, 340, true);
        add_image_size('medium_highlight', 220, 130, true);
        add_image_size('small_highlight', 60, 40, true);
        add_image_size('icon', 16, 16, true);
	}
?>

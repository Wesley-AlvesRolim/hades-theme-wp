<?php
function social_widget_init()
{

    register_sidebar(array(
        'name' => 'Social Media',
        'id' => 'social-media-widget',
        'before_widget' => '<div class="social-media">',
        'after_widget' => '</div>',
        'before_title' => '<span class="social-media-title">',
        'after_title' => '</span>',
    ));
}

add_action('widgets_init', 'social_widget_init');

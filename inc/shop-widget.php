<?php
function shop_widget_init()
{
    register_sidebar(array(
        'name' => 'Shop',
        'id' => 'shop-widget',
        'before_widget' => '<div class="shop">',
        'after_widget' => '</div>',
        'before_title' => '<span class="shop-title">',
        'after_title' => '</span>',
    ));
}

add_action('widgets_init', 'shop_widget_init');

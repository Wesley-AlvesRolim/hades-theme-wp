<?php

function load_hades_post_types()
{
    register_post_type('carousel', array(
        'label' => 'Carousel',
        'show_ui' => true,
        'supports' => array(
            'title', 'thumbnail', 'excerpt'
        )
    ));
    register_post_type('about_section', array(
        'label' => 'About',
        'show_ui' => true,
        'supports' => array(
            'title', 'thumbnail', 'editor'
        )
    ));
}

add_action('init', 'load_hades_post_types');

<?php

function university_post_types(){
    // Program Post Type

    register_post_type('program',array(
        'show_in_rest' => true,
        'public' => true,
        'supports'=> array('title','editor'),
        'rewrite' => array('slug'=>'programs'),
        'labels'  => array(
            'name'          => 'Programs',
            'add_new_item'  => 'Add New Program',
            'edit_item'     =>  'Edit Program',
            'all_items'     => 'All Programs',
            'singular_name' => 'Program'
        ),
        'menu_icon' => 'dashicons-awards',
        'has_archive' => true
        ));
        
    // Event Post Type
    register_post_type('event',array(
    'show_in_rest' => true,
    'public' => true,
    'supports'=> array('title','editor','excerpt'),
    'rewrite' => array('slug'=>'events'),
    'labels'  => array(
        'name'          => 'Events',
        'add_new_item'  => 'Add New Event',
        'edit_item'     =>  'Edit Event',
        'all_items'     => 'All Events',
        'singular_name' => 'Event'
    ),
    'menu_icon' => 'dashicons-calendar',
    'has_archive' => true
    ));
}
add_action('init','university_post_types');
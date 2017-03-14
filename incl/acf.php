<?php

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'	=> 'Opcje strony',
        'menu_title'	=> 'Opcje strony',
        'menu_slug'		=> 'page-options',
        'capability'	=> 'edit_posts',
        'parent_slug'	=> '',
        'icon_url'		=> 'dashicons-edit',
        'redirect'		=> true
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Logo',
        'menu_title'	=> 'Logo',
        'parent_slug'	=> 'page-options',
    ));

}

?>
<?php
function stedelijk_load_styles_scripts(){
    wp_enqueue_style('main.css', get_template_directory_uri() . '/css/stedelijk.css');
}
add_action('wp_enqueue_scripts','stedelijk_load_styles_scripts');

function stedelijk_init_theme(){
    register_nav_menu('main-menu', __('Hoofdmenu'));

}
add_action('init', 'stedelijk_init_theme');


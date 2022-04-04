<?php 

function wphetic_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

function wphetic_tailwind(){
    wp_enqueue_script('tailwind_js', 'https://cdn.tailwindcss.com', [], false, true);
}

add_action('after_setup_theme', 'wphetic_theme_support');
add_action('wp_enqueue_scripts', 'wphetic_tailwind');

function wphetic_login_headerurl($url){
    return 'https://google.com';
}

add_filter('login_headerurl', 'wphetic_login_headerurl');

function wphetic_admin_footertext($text){
    return '<3 ' . $text . ' <3';
}

add_filter('admin_footer_text', 'wphetic_admin_footertext');

?>

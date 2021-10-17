<?php

// add_action('wp_head', function() {
//     die('ciao les gars');
// }, 6);
// add_action('wp_head', function() {
//     die('ciao les bolosses');
// }, 5);

// add_action('after_setup_theme', function() {
//     die('ciao les gars');
// }, 6);

// add_action('after_setup_theme', function() {
//     add_theme_support('title-tag');
// }, 6);

// add_theme_support('title-tag');

// pour éviter les collisions
// namespace App;
// add_action('after_setup_theme', 'App\toto');

// creer sa propre fonction et l'appeler dans add-action
function toto() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
}

// on va utiliser le systeme d'action pour appeler bootstrap
// wp_register_style est une fonction qui va permettre d'enregistrer les styles
function toto_register_assets() {
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_register_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('animate');
}

function toto_title ($title) {
    return 'a plus';
}

function toto_menu_class ($classes) {
    $classes[] = 'nav-item';
    return $classes;
}

function toto_menu_link ($attrs) {
    $attrs['class'] = 'nav-link';
    return $attrs;
}

// hook
add_action('after_setup_theme', 'toto');
add_action('wp_enqueue_scripts', 'toto_register_assets');
// fonctionne comme un hook mais ca va changer la valeur que la fonction prend en paramètre
add_filter('wp_title', 'toto_title');
add_filter('nav_menu_css_class', 'toto_menu_class');
add_filter('nav_menu_link_attributes', 'toto_menu_link');
<?php
add_action('wp_enqueue_scripts', 'ajout_scripts');

// La fonction ajoutant les scripts et styles par Hook
function ajout_scripts(){
    //get_template_directory_uri() => racine du theme

    // LES SCRIPTS
    wp_register_script('jquery_script', get_template_directory_uri() . '/assets/scripts/jquery-3.2.1.slim.min.js', array('jquery'),'1.1', true);
    wp_enqueue_script('jquery_script');
    wp_register_script('main_script_header', get_template_directory_uri() . '/assets/scripts/main.js', array('jquery'),'1.1', true);
    wp_enqueue_script('main_script_header');
    wp_register_script('bootstrap_script', get_template_directory_uri() . '/assets/scripts/bootstrap.min.js', array('jquery'),'1.1', true);
    wp_enqueue_script('bootstrap_script');

    // LES FEUILLES DE STYLES
    wp_register_style( 'main_style', get_template_directory_uri() . '/assets/styles/main.css' );
    wp_enqueue_style( 'main_style' );
    wp_register_style( 'bootstrap_style', get_template_directory_uri() . '/assets/styles/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap_style' );
}

// Meta données de base
add_action('wp_head', 'ajout_viewport');

function ajout_viewport(){
    echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
}
<?php
add_action('wp_enqueue_scripts', 'ajout_scripts');

function ajout_scripts(){
    //get_template_directory_uri() => racine du theme

    // LES SCRIPTS
    wp_register_script('jquery_script', get_template_directory_uri() . '/assets/scripts/jquery-3.2.1.slim.min.js', array('jquery'),'1.1', true);
    wp_enqueue_script('jquery_script');
    wp_register_script('popper_script', get_template_directory_uri() . '/assets/scripts/popper.min.js', array('jquery'),'1.1', true);
    wp_enqueue_script('popper_script');
    wp_register_script('bootstrap_script', get_template_directory_uri() . '/assets/scripts/bootstrap.min.js', array('jquery'),'1.1', true);
    wp_enqueue_script('bootstrap_script');
    wp_register_script('images_script', get_template_directory_uri() . '/assets/scripts/imagesloaded.pkgd.min.js', array('jquery'),'1.1', true);
    wp_enqueue_script('images_script');
    wp_register_script('jquery_waypoint_script', get_template_directory_uri() . '/assets/scripts/jquery.waypoints.min.js', array('jquery'),'1.1', true);
    wp_enqueue_script('jquery_waypoint_script');
    wp_register_script('carousel_script', get_template_directory_uri() . '/assets/scripts/owl.carousel.min.js', array('jquery'),'1.1', true);
    wp_enqueue_script('carousel_script');
    wp_register_script('main_script_header', get_template_directory_uri() . '/assets/scripts/main.js', array('jquery'),'1.1', true);
    wp_enqueue_script('main_script_header');

    // LES FEUILLES DE STYLES
    wp_register_style( 'main_style', get_template_directory_uri() . '/assets/styles/style.css' );
    wp_enqueue_style( 'main_style' );
    wp_register_style( 'bootstrap_style', get_template_directory_uri() . '/assets/styles/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap_style' );
    wp_register_style( 'google_font', 'https://fonts.googleapis.com/css?family=Work+Sans' );
    wp_enqueue_style( 'google_font' );
    wp_register_style( 'animate_style', get_template_directory_uri() . '/assets/styles/animate.css' );
    wp_enqueue_style( 'animate_style' );
    wp_register_style( 'icomoon_style', get_template_directory_uri() . '/assets/styles/icomoon.css' );
    wp_enqueue_style( 'icomoon_style' );
    wp_register_style( 'open_style', get_template_directory_uri() . '/assets/styles/open-iconic-bootstrap.min.css' );
    wp_enqueue_style( 'open_style' );
    wp_register_style( 'owl_style', get_template_directory_uri() . '/assets/styles/owl.carousel.min.css' );
    wp_enqueue_style( 'owl_style' );
    wp_register_style( 'owl_theme_style', get_template_directory_uri() . '/assets/styles/owl.theme.default.min.css' );
    wp_enqueue_style( 'owl_theme_style' );
}

add_action('wp_head', 'ajout_viewport');

function ajout_viewport(){
    echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
}
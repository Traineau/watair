<?php

add_action( 'init', 'ajout_custom_type_evenement' );

function ajout_custom_type_evenement()
{

    $post_type = "evenement";
    $labels = array(
        'name' => 'Evenement',
        'singular_name' => 'Evenement',
        'all_items' => 'Tous les evenements',
        'add_new' => 'Ajouter un evenement',
        'add_new_item' => 'Ajouter un evenement',
        'edit_item' => "Editer un evenement",
        'new_item' => 'Nouveau evenement',
        'view_item' => "Voir un evenement",
        'search_items' => 'Chercher un evenement',
        'not_found' => 'Pas de résultats',
        'not_found_in_trash' => 'Pas de résultats',
        'parent_item_colon' => 'Evenement parent:',
        'menu_name' => 'Evenement',
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'supports' => array('title', 'thumbnail', 'editor', 'revisions'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-megaphone',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array('slug' => $post_type)
    );

    register_post_type($post_type, $args);

}
?>
<?php
/**
 * Created by PhpStorm.
 * User: thoma
 * Date: 17/10/2018
 * Time: 16:20
 */

add_action( 'init', 'ajout_custom_type_action' );

function ajout_custom_type_action(){

    $post_type = "action";
    $labels = array(
        'name' => 'Action',
        'singular_name' => 'Action',
        'all_items' => 'Toutes les actions',
        'add_new' => 'Ajouter une action',
        'add_new_item' => 'Ajouter une action',
        'edit_item' => "Editer une action",
        'new_item' => 'Nouveau action',
        'view_item' => "Voir une action",
        'search_items' => 'Chercher une action',
        'not_found' => 'Pas de résultats',
        'not_found_in_trash' => 'Pas de résultats',
        'parent_item_colon' => 'Action parente:',
        'menu_name' => 'Action',
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
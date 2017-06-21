<?php
/**
 * mycustomposttype
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */


 $labels = array(
 'name' => 'realisation',
 'singular_name' => 'realisation',
 'add_new' => 'Ajouter une réalisation',
 'add_new_item' => 'Ajouter une réal.',
 'edit_item' => 'Editer une réal.',
 'new_item' => 'Nouvelle realisation',
 'all_items' => 'Toutes les realisation',
 'view_item' => 'Voir realisation',
 'search_items' => 'Chercher realisation',
 'not_found' => 'Aucune realisation trouvée',
 'not_found_in_trash' => 'Aucune realisations trouvé dans la corbeille',
 'parent_item_colon' => 'realisation',
 'menu_name' => 'realisation'
 );
 $args = array(
 'labels' => $labels,
 'description' => 'realisation lien',
 'public' => true,
 'publicly_queryable' => true,
 'show_ui' => true,
 'show_in_menu' => true,
 'query_var' => true,
 'rewrite' => array( 'slug' => 'realisation' ),
 'capability_type' => 'post',
 'has_archive' => true,
 'hierarchical' => false,
 'menu_position' => null,
 'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt')
 );
 register_post_type('realisation', $args );

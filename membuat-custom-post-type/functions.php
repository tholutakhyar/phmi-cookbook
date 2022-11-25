<?php
//Tambah ke file functions.php

function custom_post_nama_disini() {
    $labels = array(
        'name'                => _x( 'Nama Disini', 'Post Type General Name', 'phmi' ),
        'singular_name'       => _x( 'Nama Disini', 'Post Type Singular Name', 'phmi' ),
        'menu_name'           => __( 'Nama Disini', 'phmi' ),
        'parent_item_colon'   => __( 'Parent Nama Disini', 'phmi' ),
        'all_items'           => __( 'All Nama Disini', 'phmi' ),
        'view_item'           => __( 'View Nama Disini', 'phmi' ),
        'add_new_item'        => __( 'Add Nama Disini', 'phmi' ),
        'add_new'             => __( 'Add Nama Disini', 'phmi' ),
        'edit_item'           => __( 'Edit Nama Disini', 'phmi' ),
        'update_item'         => __( 'Update Nama Disini', 'phmi' ),
        'search_items'        => __( 'Search Nama Disini', 'phmi' ),
        'not_found'           => __( 'Not Found', 'phmi' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'phmi' ),
    );
        
// Set other options for Custom Post Type
        
    $args = array(
        'label'               => __( 'nama disini', 'phmi' ),
        'description'         => __( 'Nama Disini', 'phmi' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'category', 'category-nama-disini' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-format-aside', // icon dari https://developer.wordpress.org/resource/dashicons/#format-aside
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true
    );
        
    // Registering your Custom Post Type
    register_post_type( 'nama-disini', $args );
    
}

add_action( 'init', 'custom_post_nama_disini', 0 );

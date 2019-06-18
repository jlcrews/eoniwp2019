<?php
/**
 * Policy Custom Post Type
 *
 * @package eoni-wordpress
 */

function eoni_policy_posttype() {
    register_post_type( 'policy',
        [
            'labels' => [
                'name' => __( 'Policies' ),
                'singular_name' => __( 'Policy' ),
                'add_new' => __( 'Add New Alert' ),
                'add_new_item' => __( 'Add New Policy' ),
                'edit_item' => __( 'Edit Policy' ),
                'new_item' => __( 'Add New Policy' ),
                'view_item' => __( 'View Policies' ),
                'search_items' => __( 'Search Policies' ),
                'not_found' => __( 'No Policies found' ),
                'not_found_in_trash' => __( 'No Policies found in trash' )
            ],
            'public' => true,
            'supports' => [ 'title', 'revisions', 'page-attributes','editor'],
            'capability_type' => 'post',
            'rewrite' => [ "slug" => "policy" ],
            'menu_position' => 5,
            'menu_icon' => 'dashicons-admin-users',
            'media_buttons' => false,
            'show_in_nav_menus' => false,
        ]
    );
}
add_action( 'init', 'eoni_policy_posttype' );
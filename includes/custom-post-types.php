<?php
/**
 * Custom post types for Examensarbete
 *
 * @link https://codex.wordpress.org/Post_Types
 *
 * @package WordPress
 * @subpackage Examensarbete
 * @since 1.0.0
 */

/**
 * Bostäder
 */
register_post_type(
    'premises',
    array(
        'label'             => 'Premises',
        'public'            => true,
        'has_archive'       => false,
        'supports'          => array('title', 'excerpt', 'author', 'thumbnail', 'revisions'),
        'menu_position'     => 6,
        'menu_icon'         => 'dashicons-admin-multisite',
        'show_in_rest'      => true,
        'show_in_nav_menus' => true,
        'hierarchical'      => true,
    )
);

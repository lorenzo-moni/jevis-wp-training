<?php


function jevis_luxury_register_custom_post_types()
{

    $labels = array(
        'name'                  => _x('Experiences', 'Post type general name', 'jevis_luxury'),
        'singular_name'         => _x('Experience', 'Post type singular name', 'jevis_luxury'),
        'menu_name'             => _x('Experiences', 'Admin Menu text', 'jevis_luxury'),
        'name_admin_bar'        => _x('Experience', 'Add New on Toolbar', 'jevis_luxury'),
        'add_new'               => __('Add New Experience', 'jevis_luxury'),
        'add_new_item'          => __('Add New Experience', 'jevis_luxury'),
        'new_item'              => __('New Experience', 'jevis_luxury'),
        'edit_item'             => __('Edit Experience', 'jevis_luxury'),
        'view_item'             => __('View Experience', 'jevis_luxury'),
        'all_items'             => __('All Experiences', 'jevis_luxury'),
        'search_items'          => __('Search Experiences', 'jevis_luxury'),
        'parent_item_colon'     => __('Parent Experiences:', 'jevis_luxury'),
        'not_found'             => __('No experiences found.', 'jevis_luxury'),
        'not_found_in_trash'    => __('No experiences found in Trash.', 'jevis_luxury'),
        'featured_image'        => _x('Experience Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'jevis_luxury'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'jevis_luxury'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'jevis_luxury'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'jevis_luxury'),
        'archives'              => _x('Experiences archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'jevis_luxury'),
        'insert_into_item'      => _x('Insert Experience', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'jevis_luxury'),
        'uploaded_to_this_item' => _x('Uploaded to this experience', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'jevis_luxury'),
        'filter_items_list'     => _x('Filter experiences list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'jevis_luxury'),
        'items_list_navigation' => _x('Experiences list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'jevis_luxury'),
        'items_list'            => _x('Experiences list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'jevis_luxury'),
    );

    $supports = array(
        'title',        // Post title
        'editor',       // Post content
        'excerpt',      // Allows short description
        'thumbnail',    // Allows feature images
        'custom-fields' // Supports by custom fields
    );

    $args = array(
        'labels'              => $labels,
        'supports'            => $supports,
        'description'         => 'experiences offered',
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
        'has_archive'         => 'experiences',
    );
    register_post_type('experience', $args);
}
// add_action('init', 'jevis_luxury_register_custom_post_types');

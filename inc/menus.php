<?php

function jevis_luxury_register_menus()
{
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu'),
            'social-menu' => __('Social Menu'),
            'legal-menu' => __('Legal Menu'),
            'info-menu' => __('Info Menu')
        )
    );
}

add_action('init', 'jevis_luxury_register_menus');


add_filter('wp_nav_menu_objects', 'jevis_luxury_nav_menu_objects', 10, 2);

function jevis_luxury_nav_menu_objects($items, $args)
{

    foreach ($items as &$item) {
        if ('social-menu' == $args->theme_location) {
            $icon_class = get_field('icon_class', $item);
            $item->title = ' <i class="' . $icon_class . '"></i>';
        }
    }

    return $items;
}

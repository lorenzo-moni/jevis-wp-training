<?php

function jevis_luxury_register_menus()
{
    register_nav_menus(
        array(
            'main-header' => __('Main Header'),
            'main-footer' => __('Main Footer')
        )
    );
}

add_action('init', 'jevis_luxury_register_menus');

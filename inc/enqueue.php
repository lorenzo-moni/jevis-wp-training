<?php

// Function used to register theme css style
function jevis_luxury_register_styles() {
wp_enqueue_style('jevis-luxury-icons', '//cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css');
wp_enqueue_style('jevis-luxury-fonts', '//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
wp_enqueue_style('jevis-luxury--main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0', 'all');
wp_enqueue_style('jevis-luxury--style', get_stylesheet_uri(), array(), '1.0', 'all');
}

// Function used to register theme js scripts
function jevis_luxury_register_scripts() {
wp_enqueue_script('jevis-luxury--swup', '//unpkg.com/swup@4', array(), '1.0.0');
wp_enqueue_script('jevis-luxury--main', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', array(
'strategy'  => 'defer',
));
}
add_action('wp_enqueue_scripts', 'jevis_luxury_register_styles');
add_action('wp_enqueue_scripts', 'jevis_luxury_register_scripts');
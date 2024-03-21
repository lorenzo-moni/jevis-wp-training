<?php


function jevis_luxury_featured_experiences_shortcode($atts)
{


    $custom_query = new WP_Query(
        array(
            'post_type' => 'experience',
            'posts_per_page' => 3,
            'meta_key'      => 'featured',
            'meta_value'    => true
        )
    );

    $counter = 0;

    $output = '';
    $output .= '<div class="container">';
    $output .= '<div class="experiences-grid">';
    ob_start();

    while ($custom_query->have_posts()) :
        $custom_query->the_post();

        get_template_part('template-parts/card', 'experience', array(
            'classes' => '',
            'card-type' => ($counter === 0) ? 'vertical' : 'horizontal'
        ));
        $counter += 1;


    endwhile;

    $output .= ob_get_clean();

    $output .= '</div>';
    $output .= '</div>';



    return $output;
}
add_shortcode('featured-experiences', 'jevis_luxury_featured_experiences_shortcode');

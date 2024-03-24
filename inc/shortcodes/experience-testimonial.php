<?php


function jevis_luxury_experience_testimonial_shortcode()
{


    $testimonials = get_field('testimonials');

    if (!$testimonials) return 'error';


    $output = '';
    $output .= '<div class="container">';
    $output .= '<div class="grid">';
    ob_start();

    global $post;

    foreach ($testimonials as $post) {
        setup_postdata($post);

        echo '<div class="col-4">';
        get_template_part('template-parts/card', 'testimonial');
        echo '</div>';
    }

    wp_reset_postdata();



    $output .= ob_get_clean();

    $output .= '</div>';
    $output .= '</div>';



    return $output;
}
add_shortcode('experience-testimonial', 'jevis_luxury_experience_testimonial_shortcode');

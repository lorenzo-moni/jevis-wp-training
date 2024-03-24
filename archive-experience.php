<?php

$image_url = wp_get_attachment_image_url(78, 'full')
?>



<?php get_header() ?>

<section class="page__header">
    <div class="header__background" style="background-image: url('<?php echo $image_url ?>')">
        <div class="header__content">
            <h1>Le Nostre Esperienze<span class="line"></span></h1>
        </div>
    </div>
</section>


<section class="page__content container">

    <div class="experiences-card__grid">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                get_template_part('template-parts/card', 'experience', array(
                    'classes' => 'vertical'
                ));
            endwhile;
        endif;
        ?>
    </div>


</section>


<?php
// Wp query
global $wp_query;
?>

<?php get_footer() ?>
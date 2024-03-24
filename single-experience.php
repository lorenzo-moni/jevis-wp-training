<?php get_header() ?>


<?php if (have_posts()) {
    while (have_posts()) {
        the_post();

        //Getting Post Thumbnail
        $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
        $taxonomy = 'experience-tag';
        $tags = get_the_terms(get_the_ID(), $taxonomy);
        $location = get_field('location');


?>

        <section class="page__header">
            <div class="header__background" style="background-image: url('<?php echo $backgroundImg[0] ?>')">
                <div class="header__content">
                    <div class="experience__tags">

                        <?php if ($tags) {
                            foreach ($tags as $tag) {
                                $post_id = $taxonomy . "_" . $tag->term_id;
                                $color = get_field('background_color', $post_id);
                        ?>
                                <a class="experience__tag" style="background-color: <?php echo $color ?>"><?php echo $tag->name ?></a>
                        <?php }
                        } ?>



                    </div>
                    <h1><?php the_title() ?></h1>
                    <div class="experience__location">
                        <i class="ri-map-pin-line"></i>
                        <span><?php echo $location ?></span>
                    </div>
                </div>
            </div>
        </section>




        <section class="page__content">
            <?php the_content() ?>
        </section>
<?php
    }
}
wp_reset_postdata() ?>


<?php get_footer() ?>
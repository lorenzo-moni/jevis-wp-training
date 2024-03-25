<?php get_header() ?>


<?php if (have_posts()) {
    while (have_posts()) {
        the_post();

        //Getting Post Thumbnail
        $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full'); ?>

        <section class="page__header">
            <div class="header__background" style="background-image: url('<?php echo $backgroundImg[0] ?>')">
                <div class="header__content">
                    <h1><?php the_title() ?><span class="line"></span></h1>
                </div>
            </div>
        </section>

        <section class="page__content container">
            <?php the_content() ?>
        </section>
<?php
    }
}
wp_reset_postdata() ?>


<?php get_footer() ?>
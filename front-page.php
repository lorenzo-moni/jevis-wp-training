<?php get_header() ?>
<!-- PAGE HEADER -->

<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>


        <!-- PAGE CONTENT -->

        <section class="page__content mt-0">

            <?php the_content() ?>


        </section>
<?php
    }
}
wp_reset_postdata() ?>


<?php get_footer() ?>
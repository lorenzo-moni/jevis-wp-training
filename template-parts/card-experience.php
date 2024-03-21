<?php
$image_url = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full')[0];
$alt_text = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);

$cardType = $args['card-type'];
$classes = $args['classes'];

$tags = get_the_terms(get_the_ID(), 'experience-tag');
?>



<div class="featured-card <?php echo $classes ?>" data-card-type="<?php echo $cardType ?>">
    <div class="featured-card__image">
        <img src="<?php echo $image_url ?>" alt="<?php echo $alt_text ?>">
        <div class="featured-card__location">
            <i class="ri-map-pin-line"></i>
            <span><?php the_field("location") ?></span>
        </div>
    </div>
    <div class="featured-card__content">
        <div>
            <div class="featured-card__tags">

                <?php if ($tags) {
                    foreach ($tags as $tag) { ?>
                        <a class="featured-card__tag" style="background-color: #0090cd"><?php echo $tag->slug ?></a>
                <?php }
                } ?>
            </div>
            <span class="featured-card__title"><?php the_title() ?></span>
            <p class="featured-card__excerpt">
                <?php the_excerpt() ?>
            </p>
        </div>
        <div>
            <a class="featured-card__cta" href="<?php the_permalink() ?>">Prenota Ora</a>
        </div>
    </div>
</div>
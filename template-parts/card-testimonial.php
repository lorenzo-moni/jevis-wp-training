<?php


$image = get_field('image');
$full_name = get_field('full_name');
$age = get_field('age');
$description = get_field('description');
$stars = get_field('stars');



?>



<div class="testimonial__card">
    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="testimonial__img" />
    <!-- <img src="/assets/img/flag-italy.svg" alt="italy" class="testimonial__flag" /> -->
    <span class="testimonial__name"><?php echo $full_name ?></span>
    <span class="testimonial__age"><?php echo $age ?> anni</span>
    <span class="testimonial__text"><?php echo $description ?></span>
    <div class="testimonial__stars">
        <?php
        for ($i = 0; $i < $stars; $i++) { ?>
            <img src="<?php echo get_template_directory_uri() . "/assets/img/star.png" ?>" alt="star" class="testimonial__star" />
        <?php
        }
        ?>
    </div>
</div>
<?php

/**
 * Template Name: Gallery
 */

get_header();

$args = array(
    'post_type' => 'photo-gallery',
    'posts_per_page' => -1,
);

$posts = new WP_query($args);
?>
<!-- destination field html end -->
<section class="destination-section destination-page">
    <div class="container">
        <?php if ($posts->have_posts()) : ?>
            <div class="destination-inner destination-three-column">
                <div class="row">
                    <?php while ($posts->have_posts()) : $posts->the_post(); ?>
                        <div class="col-md-4">
                            <a href="<?php the_permalink(); ?>">
                                <div class="desti-item overlay-desti-item">
                                    <figure class="desti-image">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('img_365x305', ['class' => 'w-100']); ?>
                                        <?php endif; ?>
                                    </figure>
                                    <div class="desti-content">
                                        <h3>
                                            <?php the_title(); ?>
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<!-- destination section html start -->
<?php
get_footer();

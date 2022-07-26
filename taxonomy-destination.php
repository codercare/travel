<?php
get_header();

?>

<?php if (have_posts()) : ?>
    <!-- packages html start -->
    <div class="package-section">
        <div class="container">
            <div class="package-inner">
                <div class="row">
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="package-wrap">
                                <?php if (has_post_thumbnail()) : ?>
                                    <figure class="feature-image">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('img_365x305'); ?>
                                        </a>
                                    </figure>
                                <?php endif; ?>
                                <div class="package-price">
                                    <h6>
                                        <span><?php the_field('trip_price'); ?> </span> / per person
                                    </h6>
                                </div>
                                <div class="package-content-wrap">
                                    <div class="package-meta text-center">
                                        <ul>
                                            <li>
                                                <i class="far fa-clock"></i>
                                                <?php the_field('days'); ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="package-content px-0">
                                        <h3>
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        <div class="btn-wrap m-0 text-left">
                                            <a href="<?php the_permalink(); ?>" class="button-text p-0">Trip Details<i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<!-- packages html end -->

<?php
get_footer();

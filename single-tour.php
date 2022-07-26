<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Dimas
 */

get_header();
?>

<div class="single-tour-section">
    <div class="container">
        <div class="row">
            <?php while (have_posts()) : the_post(); ?>
                <div class="col-lg-8">
                    <div class="single-tour-inner">
                        <h2><?php the_title(); ?></h2>
                        <figure class="feature-image">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('img_750x438'); ?>
                            <?php endif; ?>
                            <div class="package-meta text-center">
                                <ul>
                                    <li>
                                        <i class="far fa-clock"></i>
                                        <?php the_field('days'); ?>
                                    </li>
                                    <li>
                                        <i class="fas fa-user-friends"></i>
                                        Min person: <?php the_field('min_person'); ?>
                                    </li>
                                    <li>
                                        <i class="fas fa-map-marked-alt"></i>
                                        Nepal
                                    </li>
                                </ul>
                            </div>
                        </figure>
                        <div class="tab-container">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">DESCRIPTION</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="detail-itinerary-tab" data-toggle="tab" href="#detail-itinerary" role="tab" aria-controls="detail-itinerary" aria-selected="false">DETAIL ITINERARY</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="gallery-tab" data-toggle="tab" href="#gallery" role="tab" aria-controls="gallery" aria-selected="false">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="map-tab" data-toggle="tab" href="#map" role="tab" aria-controls="map" aria-selected="false">Map</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                    <div class="overview-content">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                                <div class="tab-pane" id="detail-itinerary" role="tabpanel" aria-labelledby="detail-itinerary-tab">
                                    <?php if (have_rows('detail_itinerary')) : ?>
                                        <div class="itinerary-timeline-wrap">
                                            <ul>
                                                <?php while (have_rows('detail_itinerary')) : the_row(); ?>
                                                    <li>
                                                        <div class="timeline-content">
                                                            <div class="day-count">Day <span><?php the_sub_field('day'); ?></span></div>
                                                            <h4><?php the_sub_field('title'); ?></h4>
                                                            <?php the_sub_field('description'); ?>
                                                        </div>
                                                    </li>
                                                <?php endwhile; ?>
                                            </ul>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="tab-pane" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
                                    <?php the_field('video'); ?>

                                    <!-- <div class="single-tour-gallery">
                                        <h3>GALLERY / PHOTOS</h3>
                                        <div class="single-tour-slider">
                                            <div class="single-tour-item">
                                                <figure class="feature-image">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img28.jpg" alt="">
                                                </figure>
                                            </div>
                                            <div class="single-tour-item">
                                                <figure class="feature-image">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img29.jpg" alt="">
                                                </figure>
                                            </div>
                                            <div class="single-tour-item">
                                                <figure class="feature-image">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img32.jpg" alt="">
                                                </figure>
                                            </div>
                                            <div class="single-tour-item">
                                                <figure class="feature-image">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img33.jpg" alt="">
                                                </figure>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="tab-pane" id="map" role="tabpanel" aria-labelledby="map-tab">
                                    <div class="map-area">
                                        <?php the_field('map'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="package-price">
                            <h5 class="price mb-0">
                                <span><?php the_field('trip_price'); ?></span> / per person
                            </h5>
                            <!-- <div class="start-wrap">
                                <div class="rating-start" title="Rated 5 out of 5">
                                    <span style="width: 60%"></span>
                                </div>
                            </div> -->
                        </div>
                        <div class="widget-bg booking-form-wrap">
                            <h4 class="bg-title">Booking</h4>
                            <?php echo do_shortcode('[contact-form-7 id="243" title="Package Booking"]'); ?>
                        </div>
                        <div class="widget-bg information-content pt-0 text-center">
                            <h5>TRAVEL TIPS</h5>
                            <h3>NEED TRAVEL RELATED TIPS & INFORMATION</h3>
                            <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid blandit, blandit torquent, odit placeat. </p>
                            <a href="https://dimasadventure.com/contact/" class="button-primary">GET A QUOTE</a>
                        </div>
                        <?php
                        $detination_terms = wp_get_object_terms($post->ID, 'destination', array('fields' => 'ids'));
                        $related_packages = new WP_Query(
                            array(
                                'post_type' => 'tour',
                                'post_status' => 'publish',
                                'posts_per_page' => 5,
                                'post__not_in'   => array($post->ID),
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'destination',
                                        'field' => 'id',
                                        'terms' => $detination_terms
                                    )
                                ),

                            )
                        );

                        ?>
                        <?php if ($related_packages->have_posts()) : ?>
                            <div class="widget widget_latest_post widget-post-thumb widget-similar-packages">
                                <div class="widget-heading text-center">
                                    <h5>SIMILAR PACKAGES</h5>
                                    <h3>OTHER TRAVEL PACKAGES</h3>
                                </div>
                                <ul>
                                    <?php while ($related_packages->have_posts()) : $related_packages->the_post();  ?>
                                        <li>
                                            <?php if (has_post_thumbnail()) : ?>
                                                <figure class="post-thumb">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_post_thumbnail('img_365x305'); ?>
                                                    </a>
                                                </figure>
                                            <?php endif; ?>
                                            <div class="post-content">
                                                <h5>
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </h5>
                                                <div class="entry-meta">
                                                    <span class="posted-on">
                                                        <i class="far fa-clock"></i> <?php the_field('days'); ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php
get_footer();

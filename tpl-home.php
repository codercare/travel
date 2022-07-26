<?php

/**
 * Template Name: Home
 */

get_header();
?>
<?php if (have_rows('slideshows')) : ?>
    <!-- Home slider html start -->
    <section class="home-slider-section">
        <div class="home-slider">
            <?php while (have_rows('slideshows')) : the_row(); ?>
                <?php $background_image = get_sub_field('background_image'); ?>
                <div class="home-banner-items">
                    <div class="banner-inner-wrap" style="background-image: url(<?php echo $background_image['url']; ?>)"></div>
                    <div class="banner-content-wrap">
                        <div class="container">
                            <div class="banner-content text-center">
                                <h2 class="banner-title"><?php the_sub_field('title'); ?></h2>
                                <p><?php the_sub_field('caption'); ?></p>
                                <?php if (get_sub_field('button_text')) : ?>
                                    <a href="<?php the_sub_field('button_link'); ?>" class="button-secondary">
                                        <?php the_sub_field('button_text'); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>
            <?php endwhile; ?>
        </div>
    </section>
    <!-- slider html end -->
<?php endif; ?>

<!-- Home search field html start -->
<div class="trip-search-section shape-search-section">
    <div class="slider-shape"></div>
    <div class="container">
        <div class="trip-search-inner white-bg d-flex">
            <div class="input-group">
                <label> Search Destination* </label>
                <input type="text" name="s" placeholder="Enter Destination">
            </div>
            <div class="input-group">
                <label> Pax Number* </label>
                <input type="text" name="s" placeholder="No.of People">
            </div>
            <div class="input-group width-col-3">
                <label> Checkin Date* </label>
                <i class="far fa-calendar"></i>
                <input class="input-date-picker" type="text" name="s" placeholder="MM / DD / YY" autocomplete="off" readonly="readonly">
            </div>
            <div class="input-group width-col-3">
                <label> Checkout Date* </label>
                <i class="far fa-calendar"></i>
                <input class="input-date-picker" type="text" name="s" placeholder="MM / DD / YY" autocomplete="off" readonly="readonly">
            </div>
            <div class="input-group width-col-3">
                <label class="screen-reader-text"> Search </label>
                <input type="submit" name="travel-search" value="INQUIRE NOW">
            </div>
        </div>
    </div>
</div>
<!-- search search field html end -->

<?php if (have_rows('top_notch_destinations')) : ?>
    <?php $i = 0; ?>
    <section class="destination-section">
        <div class="container">
            <div class="section-heading">
                <div class="row align-items-end">
                    <div class="col-lg-7">
                        <h5 class="dash-style">POPULAR DESTINATION</h5>
                        <h2><?php the_field('top_notch_destinations_title'); ?></h2>
                    </div>
                    <div class="col-lg-5">
                        <div class="section-disc">
                            <?php the_field('top_notch_destinations_description'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="destination-inner destination-three-column">
                <div class="row">
                    <?php while (have_rows('top_notch_destinations')) : the_row(); ?>
                        <?php
                        $column = $i  < 2 ? 'col-lg-7' : 'col-lg-5';
                        if ($i == 0 || $i == 2) {
                            echo "<div class='" . $column . "'><div class='row'>";
                        }
                        $image_size = $i > 1 ? 'img_460x255' : 'img_322x555';
                        $inner_column = $i > 1 ? 'col-sm-12' : 'col-sm-6';
                        ?>
                        <div class="<?php echo $inner_column; ?>">
                            <div class="desti-item overlay-desti-item">
                                <figure class="desti-image">
                                    <?php $image = get_sub_field('image'); ?>
                                    <img src="<?php echo $image['sizes'][$image_size]; ?>" alt="">
                                </figure>
                                <div class="desti-content">
                                    <h3>
                                        <a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <?php
                        if ($i == 1 || $i == 3) {
                            echo "</div></div>";
                        }
                        ?>
                        <?php $i++; ?>
                    <?php endwhile; ?>
                </div>
                <div class="btn-wrap text-center">
                    <a href="#" class="button-primary">MORE DESTINATIONS</a>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php
$packages = new WP_Query(array(
    'post_type' => 'trekking',
    'posts_per_page' => 6,
    'meta_query' => array(
        array(
            'key' => 'popular_package',
            'value' => '1',
            'compare' => '=='
        )
    ),
    'orderby' => 'date',
    'order' => 'DESC'
));
?>
<?php if ($packages->have_posts()) : ?>
    <!-- Home packages section html start -->
    <section class="package-section">
        <div class="container">
            <div class="section-heading text-center">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h5 class="dash-style">EXPLORE GREAT PLACES</h5>
                        <h2>POPULAR PACKAGES</h2>
                        <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid blandit, blandit torquent, odit placeat. Adipiscing repudiandae eius cursus? Nostrum magnis maxime curae placeat.</p>
                    </div>
                </div>
            </div>
            <div class="package-inner">
                <div class="row">
                    <?php while ($packages->have_posts()) : $packages->the_post(); ?>
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
                    <?php endwhile ?>
                </div>
                <div class="btn-wrap text-center">
                    <a href="#" class="button-primary">VIEW ALL PACKAGES</a>
                </div>
            </div>
        </div>
    </section>
    <!-- packages html end -->
    <?php wp_reset_postdata(); ?>
<?php endif; ?>

<!-- Home callback section html start -->
<section class="callback-section">
    <div class="container">
        <div class="row no-gutters align-items-center">
            <div class="col-lg-5">
                <?php $image = get_field('callback_image'); ?>
                <div class="callback-img" style="background-image: url(<?php echo $image['sizes']['img_480x540']; ?>);">
                    <?php if (get_field('callback_video_id')) : ?>
                        <div class="video-button">
                            <a id="video-container" data-video-id="<?php the_field('callback_video_id'); ?>">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="callback-inner">
                    <div class="section-heading section-heading-white">
                        <h5 class="dash-style">CALLBACK FOR MORE</h5>
                        <h2><?php the_field('callback_title'); ?></h2>
                        <?php if (get_field('callback_description')) : ?>
                            <p><?php the_field('callback_description'); ?></p>
                        <?php endif; ?>
                    </div>
                    <?php if (have_rows('callback_counters')) : ?>
                        <div class="callback-counter-wrap">
                            <?php while (have_rows('callback_counters')) : the_row(); ?>
                                <div class="counter-item">
                                    <div class="counter-icon">
                                        <?php $icon = get_sub_field('icon'); ?>
                                        <img src="<?php echo $icon['url']; ?>" alt="">
                                    </div>
                                    <div class="counter-content">
                                        <span class="counter-no">
                                            <span class="counter">
                                                <?php the_sub_field('counter_value'); ?>
                                            </span>
                                            <?php the_sub_field('counter_unit'); ?>
                                        </span>
                                        <span class="counter-text">
                                            <?php the_sub_field('title'); ?>
                                        </span>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                    <div class="support-area">
                        <div class="support-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon5.png" alt="">
                        </div>
                        <div class="support-content">
                            <h4>Our 24/7 Emergency Phone Services</h4>
                            <h3>
                                <a href="#">Call: +977-9849896250</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- callback html end -->

<?php if (have_rows('travel_activities')) : ?>
    <!-- Home activity section html start -->
    <section class="activity-section">
        <div class="container">
            <div class="section-heading text-center">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h5 class="dash-style">TRAVEL BY ACTIVITY</h5>
                        <h2><?php the_field('activities_title'); ?></h2>
                        <?php if (get_field('offers_description')) : ?>
                            <p><?php the_field('activities_description'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="activity-inner row">
                <?php while (have_rows('travel_activities')) : the_row(); ?>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                            <div class="activity-icon">
                                <a href="javascript:void(0);">
                                    <?php $icon = get_sub_field('icon'); ?>
                                    <img src="<?php echo $icon['url']; ?>" alt="">
                                </a>
                            </div>
                            <div class="activity-content">
                                <h4>
                                    <a href="javascript:void(0);"><?php the_sub_field('title'); ?></a>
                                </h4>
                                <p><?php the_sub_field('caption'); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <!-- activity html end -->
<?php endif; ?>

<?php if (have_rows('offers')) : ?>
    <!-- Home special section html start -->
    <section class="special-section">
        <div class="container">
            <div class="section-heading text-center">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h5 class="dash-style">TRAVEL OFFER & DISCOUNT</h5>
                        <h2><?php the_field('offers_title'); ?></h2>
                        <?php if (get_field('offers_description')) : ?>
                            <p><?php the_field('offers_description'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="special-inner">
                <div class="row">
                    <?php while (have_rows('offers')) : the_row(); ?>
                        <?php
                        $old_price = get_sub_field('old_price');
                        $new_price = get_sub_field('new_price');
                        $discount_pecentage = (int)(($old_price - $new_price) * 100) / $old_price;
                        ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="special-item">
                                <figure class="special-img">
                                    <?php $image = get_sub_field('image'); ?>
                                    <img src="<?php echo $image['sizes']['img_360x450']; ?>" alt="">
                                </figure>
                                <div class="badge-dis">
                                    <span>
                                        <strong><?php echo round($discount_pecentage, 0); ?>%</strong>
                                        off
                                    </span>
                                </div>
                                <div class="special-content">
                                    <h3>
                                        <a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a>
                                    </h3>
                                    <div class="package-price">
                                        Price:
                                        <del>$<?php echo $old_price; ?></del>
                                        <ins>$<?php echo $new_price; ?></ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- special html end -->
<?php endif; ?>

<!-- Home special section html start -->
<section class="best-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-heading">
                    <h5 class="dash-style">OUR TOUR GALLERY</h5>
                    <h2><?php the_field('tour_gallery_title'); ?></h2>
                    <?php if (get_field('tour_gallery_description')) : ?>
                        <p><?php the_field('tour_gallery_description'); ?></p>
                    <?php endif; ?>
                </div>
                <figure class="gallery-img">
                    <?php $tour_gallery_photo_1 = get_field('tour_gallery_photo_1'); ?>
                    <img src="<?php echo $tour_gallery_photo_1['sizes']['img_455x330']; ?>" alt="">
                </figure>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-sm-6">
                        <figure class="gallery-img">
                            <?php $tour_gallery_photo_2 = get_field('tour_gallery_photo_2'); ?>
                            <img src="<?php echo $tour_gallery_photo_2['sizes']['img_315x250']; ?>" alt="">
                        </figure>
                    </div>
                    <div class="col-sm-6">
                        <figure class="gallery-img">
                            <?php $tour_gallery_photo_3 = get_field('tour_gallery_photo_3'); ?>
                            <img src="<?php echo $tour_gallery_photo_3['sizes']['img_315x250']; ?>" alt="">
                        </figure>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <figure class="gallery-img">
                            <?php $tour_gallery_photo_4 = get_field('tour_gallery_photo_4'); ?>
                            <img src="<?php echo $tour_gallery_photo_4['sizes']['img_655x350']; ?>" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- best html end -->

<!-- Home client section html start -->
<div class="client-section">
    <div class="container">
        <div class="client-wrap client-slider secondary-bg">
            <div class="client-item">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo1.png" alt="">
                </figure>
            </div>
            <div class="client-item">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo2.png" alt="">
                </figure>
            </div>
            <div class="client-item">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo3.png" alt="">
                </figure>
            </div>
            <div class="client-item">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo4.png" alt="">
                </figure>
            </div>
            <div class="client-item">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo5.png" alt="">
                </figure>
            </div>
            <div class="client-item">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo2.png" alt="">
                </figure>
            </div>
        </div>
    </div>
</div>
<!-- client html end -->

<!-- Home subscribe section html start -->
<section class="subscribe-section" style="background-image: url(http://dimasadventure.com/wp-content/uploads/2022/06/abc-scaled.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto">
                <div class="section-heading section-heading-white text-center">
                    <?php the_field('cta_description'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subscribe html end -->

<?php
$posts = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC'
));
?>
<?php if ($posts->have_posts()) : ?>
    <!-- Home blog section html start -->
    <section class="blog-section">
        <div class="container">
            <div class="section-heading text-center">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h5 class="dash-style">FROM OUR BLOG</h5>
                        <h2>OUR RECENT POSTS</h2>
                        <!-- <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid blandit, blandit torquent, odit placeat. Adipiscing repudiandae eius cursus? Nostrum magnis maxime curae placeat.</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <?php while ($posts->have_posts()) : $posts->the_post(); ?>
                    <div class="col-md-6 col-lg-4">
                        <article class="post">
                            <?php if (has_post_thumbnail()) : ?>
                                <figure class="feature-image">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('img_365x305'); ?>
                                    </a>
                                </figure>
                            <?php endif; ?>
                            <div class="entry-content">
                                <h3>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <div class="entry-meta">
                                    <span class="byline">
                                        <a href="javascript:void(0);"><?php the_author(); ?></a>
                                    </span>
                                    <span class="posted-on">
                                        <a href="javascript:void(0);"><?php the_time('F j, Y'); ?></a>
                                    </span>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php endwhile ?>
            </div>
        </div>
    </section>
    <!-- blog html end -->
    <?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php
$testimonials = new WP_query(
    array(
        'post_type' => 'testimonial',
        'posts_per_page' => -1,
    )
);
?>
<?php if ($testimonials->have_posts()) : ?>
    <!-- Home testimonial section html start -->
    <div class="testimonial-section" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/img23.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="testimonial-inner testimonial-slider">
                        <?php while ($testimonials->have_posts()) : $testimonials->the_post(); ?>
                            <div class="testimonial-item text-center">
                                <figure class="testimonial-img">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'img_250x250'); ?>
                                        <img src="<?php echo $image[0]; ?>" alt="">
                                    <?php else : ?>
                                        <img src="http://dimasadventure.com/wp-content/uploads/2022/06/avatar.png" alt="">
                                    <?php endif; ?>
                                </figure>
                                <div class="testimonial-content">
                                    <?php the_content(); ?>
                                    <cite>
                                        <?php the_title(); ?>
                                        <?php if (get_field('country_intro')) : ?>
                                            <span class="company"><?php the_field('country_intro'); ?></span>
                                        <?php endif; ?>
                                    </cite>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial html end -->
    <?php wp_reset_postdata(); ?>
<?php endif; ?>

<!-- Home contact details section html start -->
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <?php $contact_image = get_field('contact_image'); ?>
                <!-- Home subscribe section html start -->
                <div class="contact-img" style="background-image: url(<?php echo $contact_image['sizes']['img_410x390']; ?>);">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact-details-wrap">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="contact-details">
                                <div class="contact-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon12.png" alt="">
                                </div>
                                <ul>
                                    <li>
                                        <a href="mailto:info@dimasadventure.com">info@dimasadventure.com</a>
                                    </li>
                                    <li>
                                        <a href="mailto:dimas.adventure.kathmandu@gmail.com">dimas.adventure.kathmandu@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="contact-details">
                                <div class="contact-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon13.png" alt="">
                                </div>
                                <ul>
                                    <li>
                                        <a href="tel:+977-1-4250655">+977-1-4250655</a>
                                    </li>
                                    <li>
                                        <a href="tel:+977-9849896250">+977-9849896250</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="contact-details">
                                <div class="contact-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon14.png" alt="">
                                </div>
                                <ul>
                                    <li>
                                        KMC-16, Kathmndu,Nepal
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-btn-wrap">
                    <h3>LET'S JOIN US FOR MORE UPDATE !!</h3>
                    <a href="#" class="button-primary">LEARN MORE</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  contact details html end -->
<?php
get_footer();

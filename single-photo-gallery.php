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
<!-- gallery section html start -->
<div class="gallery-section">
    <div class="container">
        <?php if (have_rows('gallery')) : ?>
            <div class="gallery-outer-wrap">
                <div class="gallery-inner-wrap gallery-container grid">
                    <?php while (have_rows('gallery')) : the_row(); ?>
                        <div class="single-gallery grid-item">
                            <figure class="gallery-img">
                                <?php $image = get_sub_field('image'); ?>
                                <img src="<?php echo $image['sizes']['img_365x305']; ?>" alt="">
                                <div class="gallery-title">
                                    <h3>
                                        <a href="<?php echo $image['url']; ?>" data-lightbox="lightbox-set">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </h3>
                                </div>
                            </figure>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<!-- gallery section html end -->
<?php
get_footer();

<?php

/**
 * Template Name: Team
 */

get_header();
?>
<div class="guide-page-section">
    <div class="container">
        <div class="row">
            <?php if (have_rows('team_members')) : ?>
                <?php while (have_rows('team_members')) : the_row(); ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="guide-content-wrap text-center">
                            <figure class="guide-image">
                                <?php $image = get_sub_field('image'); ?>
                                <img src="<?php echo $image['sizes']['img_315x300']; ?>" alt="">
                            </figure>
                            <div class="guide-content">
                                <h3><?php the_sub_field('name'); ?></h3>
                                <h5><?php the_sub_field('designation'); ?></h5>
                                <?php if (get_sub_field('bio')) : ?>
                                    <p><?php the_sub_field('bio'); ?></p>
                                <?php endif; ?>
                                <div class="guide-social social-links">
                                    <ul>
                                        <?php if (get_sub_field('facebook_link')) : ?>
                                            <li>
                                                <a href="<?php the_sub_field('facebook_link'); ?>" target="_blank">
                                                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('twitter_link')) : ?>
                                            <li>
                                                <a href="<?php the_sub_field('twitter_link'); ?>" target="_blank">
                                                    <i class="fab fa-twitter" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('youtube_link')) : ?>
                                            <li>
                                                <a href="<?php the_sub_field('youtube_link'); ?>" target="_blank">
                                                    <i class="fab fa-youtube" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('instagram_link')) : ?>
                                            <li>
                                                <a href="<?php the_sub_field('instagram_link'); ?>" target="_blank">
                                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('linkedin_link')) : ?>
                                            <li>
                                                <a href="<?php the_sub_field('linkedin_link'); ?>" target="_blank">
                                                    <i class="fab fa-linkedin" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php
get_footer();

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

<div class="single-post-section">
	<div class="single-post-inner">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 primary">
					<article class="single-content-wrap">
						<?php
						while (have_posts()) :
							the_post();

							get_template_part('template-parts/content', get_post_type());

							the_post_navigation(
								array(
									'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'dimas') . '</span> <span class="nav-title">%title</span>',
									'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'dimas') . '</span> <span class="nav-title">%title</span>',
								)
							);

							// If comments are open or we have at least one comment, load up the comment template.
							if (comments_open() || get_comments_number()) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
					</article>
					<!-- blog post item html end -->
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();

<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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

							the_content();

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

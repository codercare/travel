<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dimas
 */

?>

</main>
<footer id="colophon" class="site-footer footer-primary">
	<div class="top-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<aside class="widget widget_text">
						<h3 class="widget-title">CONTACT INFORMATION</h3>
						<div class="textwidget widget-text mb-4">
							<ul>
								<li>
									<i class="fas fa-phone-alt"></i>
									<a href="tel:+977-1-4250655" class="d-inline-block">
										+977-1-4250655
									</a>
									<a href="tel:+977-9849896250" class="d-inline-block">
										+977-9849896250
									</a>
								</li>
								<li>
									WhatsApp/Viber:
									<a href="tel:+977-9849896250" class="d-inline-block">
										+977-9849896250
									</a>
								</li>
								<li>
									<a href="mailto:info@dimasadventure.com">
										<i class="fas fa-envelope"></i>
										info@dimasadventure.com
									</a>
								</li>
								<li>
									<i class="fas fa-map-marker-alt"></i>
									KMC-16, Kathmndu,Nepal
								</li>
							</ul>
						</div>
						<h3 class="widget-title">Affiliated With</h3>
						<div class="widget-affiliations">
							<img src="http://dimasadventure.com/wp-content/uploads/2022/06/nepal-gov.png" alt="">
							<img src="http://dimasadventure.com/wp-content/uploads/2022/06/nepal-tourism-board.png" alt="">
							<img src="http://dimasadventure.com/wp-content/uploads/2022/06/nma.png" alt="">
							<img src="http://dimasadventure.com/wp-content/uploads/2022/06/tann.jpg" alt="">
						</div>
					</aside>
				</div>
				<div class="col-lg-3 col-md-6">
					<?php dynamic_sidebar('footer-2'); ?>
				</div>
				<div class="col-lg-3 col-md-6">
					<?php dynamic_sidebar('footer-3'); ?>
				</div>
				<div class="col-lg-3 col-md-6">
					<?php dynamic_sidebar('footer-4'); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="buttom-footer">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-5">
					<div class="footer-menu">
						<ul>
							<li>
								<a href="<?php echo esc_url(home_url('/privacy-policy')); ?>">Privacy Policy</a>
							</li>
							<li>
								<a href="<?php echo esc_url(home_url('/terms-conditions')); ?>">Term & Condition</a>
							</li>
							<li>
								<a href="<?php echo esc_url(home_url('/faq')); ?>">FAQ</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-2 text-center">
					<div class="footer-logo">
						<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt=""></a>
					</div>
				</div>
				<div class="col-md-5">
					<div class="copy-right text-right">Copyright © <?php echo date('Y'); ?> Dimas Adventure. All rights reserved.</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<a id="backTotop" href="#" class="to-top-icon">
	<i class="fas fa-chevron-up"></i>
</a>
<!-- custom search field html -->
<div class="header-search-form">
	<div class="container">
		<div class="header-search-container">
			<form class="search-form" role="search" method="get">
				<input type="text" name="s" placeholder="Enter your text...">
			</form>
			<a href="#" class="search-close">
				<i class="fas fa-times"></i>
			</a>
		</div>
	</div>
</div>
<!-- header html end -->
</div>

<?php wp_footer(); ?>

<script>
	jQuery(document).ready(function() {
		jQuery('body').bind('cut copy', function(e) {
			e.preventDefault();
		});

		jQuery('body').on('contextmenu', function(e) {
			return false;
		});
	});
</script>

</body>

</html>
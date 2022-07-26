<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dimas
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
<!-- 	<div id="siteLoader" class="site-loader">
		<div class="preloader-content">
			<img src="<?php // echo get_template_directory_uri(); ?>/assets/images/loader1.gif" alt="">
		</div>
	</div> -->
	<div id="page" class="full-page">
		<header id="masthead" class="site-header header-primary">
			<!-- header html start -->
			<div class="top-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 d-none d-lg-block">
							<div class="header-contact-info">
								<ul>
									<li>
										<a href="tel:+977-9849896250"><i class="fas fa-phone-alt"></i> +977-9849896250</a>
									</li>
									<li>
										<a href="mailto:info@dimasadventure.com"><i class="fas fa-envelope"></i> info@dimasadventure.com</a>
									</li>
									<li>
										<i class="fas fa-map-marker-alt"></i> KMC-16, Kathmndu,Nepal
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4 d-flex justify-content-lg-end justify-content-between">
							<div class="header-social social-links">
								<ul>
									<li><a href="https://www.facebook.com/dimasadventurenepal/" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
									<li><a href="https://www.instagram.com/dimas.adventure/" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
									<li><a href="https://wa.me/9779849896250" target="_blank"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
									<li><a href="tel:+977-9849896250" target="_blank"><i class="fab fa-viber" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="header-search-icon">
								<button class="search-icon">
									<i class="fas fa-search"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bottom-header">
				<div class="container d-flex justify-content-between align-items-center mb-3">
					<div class="site-identity">
						<h1 class="site-title">
							<a href="<?php echo esc_url(home_url('/')); ?>">
								<img class="white-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo">
								<img class="black-logo mt-2" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo">
							</a>
						</h1>
					</div>
					<div class="main-navigation d-none d-lg-block">
						<nav id="navigation" class="navigation">
							<?php
							wp_nav_menu(array(
								'theme_location' => "menu-1",
								'container' => "",
							));
							?>
						</nav>
					</div>
					<!-- <div class="header-btn">
						<a href="#" class="button-primary">BOOK NOW</a>
					</div> -->
				</div>
			</div>
			<div class="mobile-menu-container"></div>
		</header>
		<main id="content" class="site-main">
			<?php if (!is_front_page()) : ?>
			<?php $banner_bg = get_field('banner_background_image'); ?>
				<!-- Inner Banner html start-->
				<section class="inner-banner-wrap">
					<div class="inner-baner-container" style="background-image: url(<?php echo $banner_bg ? $banner_bg['sizes']['img_1920x800'] : 'https://dimasadventure.com/wp-content/uploads/2022/07/default-banner.jpg'; ?>);">
						<div class="container">
							<div class="inner-banner-content">
								<?php if (is_archive()) : ?>
									<?php the_archive_title('<h1 class="inner-title">', '</h1>'); ?>
								<?php else : ?>
									<?php the_title('<h1 class="inner-title">', '</h1>'); ?>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<div class="inner-shape"></div>
				</section>
				<!-- Inner Banner html end-->
			<?php endif; ?>
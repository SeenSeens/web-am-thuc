<?php
/**
 * Kim Bum
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- reset css -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/normalize.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/bootstrap.min.css">
	<!-- fontaweosme css -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/all.css">
	<!-- flaticon css -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/flaticon.css">
	<!-- slick slider css -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/slick.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/slick-theme.css">
	<!-- sidebarmenu css -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/sidebar-menu.css">
	<!-- jquery_ui css -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/jquery-ui.min.css">
	<!-- magnific css -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/magnific-popup.css">
	<!-- magnific css -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/jquery.nice-number.css">
	<!-- magnific css -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/nice-select.css">
	<!-- animate css -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/animate.css">
	<!-- Style css -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/style.css">
	<!-- Responsive css -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/responsive.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="search_wrapper">
	<a href="#" class="close_link"><i class="fas fa-times"></i></a>
	<form>
		<input type="text" class="form_control" placeholder="search here">
	</form>
</div>
<section class="header_top_bar">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-12">
				<div class="top_info top_social">
					<ul class="social_link">
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-12">
				<div class="top_info top_contact_info">
					<ul>
						<li><a href="#"><i class="fas fa-unlock"></i>Login Or Register</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<header class="header_area header_demo_1">
	<!-- End site_menu -->
	<div class="container">
		<div class="site_menu">
			<div class="row align-items-center">
				<div class="col-lg-2">
					<div class="brand_logo">
						<a href="<?php bloginfo( 'url' ); ?>" class="main_logo"><?php logo(); ?></a>
						<a href="<?php bloginfo( 'url' ); ?>" class="sticky_logo"><?php logo(); ?></a>
					</div>
				</div>
				<div class="col-lg-10">
					<div class="chopcafe_menu">
						<?php menu(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End site_menu -->
</header>

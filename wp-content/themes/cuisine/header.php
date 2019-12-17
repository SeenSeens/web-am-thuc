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
	<!-- Start search wrapper -->
	<div class="search_wrapper">
		<a href="#" class="close_link"><i class="fas fa-times"></i></a>
		<form><input type="text" class="form_control" placeholder="search here"></form>
	</div>
	<!-- End search wrapper -->
	<!-- Start preloader area -->
	<div class="preloader_area">
		<div class="spinner">
		  	<div class="line1"></div>
		  	<div class="line2"></div>
		  	<div class="line3"></div>
		  	<div class="line4"></div>
		  	<div class="line5"></div>
		  	<div class="line6"></div>
		  	<div class="line7"></div>
		</div>
	</div>
	<!-- End preloader area -->
	<!-- Start header_area -->
	<header class="header_area header_demo_2 transparent_header">
		<!-- End site_menu -->
		<div class="container">
			<div class="site_menu">
				<div class="row align-items-center">
					<div class="col-lg-2">
						<div class="brand_logo">
							<a href="<?php bloginfo('url'); ?>" class="main_logo"><?php logo(); ?></a>
							<a href="<?php bloginfo('url'); ?>" class="sticky_logo"><?php logo(); ?></a>
						</div>
					</div>
					<div class="col-lg-10">
						<div class="chopcafe_menu">
							<?php
							wp_nav_menu([
								'theme_location'	=> 'menu-1',
								'container'	=> 'nav',
								'container_class'	=> 'main_menu',
								'container_id'	=> '',
								'menu'	=>	'ul',
								'menu_class'	=>	'',
								'menu_id'	=>	'',
								'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
								'walker'	=>	new WP_Bootstrap_Navwalker(),
							]);
							?>
						</div>
					</div>
				</div>
			</div>
			<!-- mobile menu -->
			<div class="mobile_wrapper">
				<div class="row align-items-center mobile_header">
					<div class="col-lg-3 col-md-4 col-6">
						<div class="brand_logo">
							<a href="<?php bloginfo('url'); ?>"><?php logo(); ?></a>
						</div>
					</div>
					<div class="col-lg-9 col-md-8 col-6">
						<div class="mobile_menu">
							<ul>
								<li class="cart_icon"><a href="<?php echo get_site_url() . '/gio-hang' ?>"><i class="fas fa-shopping-cart"></i></a></li>
								<li><a href="#" class="menu_icon"><i class="fas fa-bars"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="sidenav_menu">
					<div class="times_icon">
						<a href="#" class="menu_icon"><i class="fas fa-times"></i></a>
					</div>
					<div class="brand_logo text-center">
						<a href="<?php bloginfo('url'); ?>"><img src="assets/images/logo_3.png" alt=""></a>
					</div>
					<div class="sidebar_search">
						<input type="text" placeholder="search here">
					</div>
					<?php
					wp_nav_menu([
						'theme_location'	=> 'menu-1',
						'container'	=>	false,
						'menu'	=>	'ul',
						'menu_class'	=>	'sidebar-menu',
						'fallback_cb'     => 'WP_Bootstrap_Navwalker_Mobile::fallback',
						'depth'	=>	new WP_Bootstrap_Navwalker_Mobile(),
					]);
					?>
				</div>
			</div>
			<!-- mobile menu -->
		</div>
		<!-- End site_menu -->
	</header>
	<!-- End header_area -->

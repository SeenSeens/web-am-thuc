<?php

if ( ! function_exists( 'cuisine_setup' ) ) :

	function cuisine_setup() {

		load_theme_textdomain( 'cuisine', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'cuisine' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-background', apply_filters( 'cuisine_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'cuisine_setup' );

function cuisine_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cuisine_content_width', 640 );
}
add_action( 'after_setup_theme', 'cuisine_content_width', 0 );

function cuisine_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'cuisine' ),
		'id'            => 'sidebar-footer',
		'description'   => esc_html__( 'Add widgets here.', 'cuisine' ),
		'before_widget' => '<div class="col-lg-3 col-md-6 col-sm-12">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
  register_sidebar( array(
		'name'          => esc_html__( 'Trang chủ giao diện 2', 'cuisine' ),
		'id'            => 'index-2',
		'description'   => esc_html__( 'Add widgets here.', 'cuisine' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'cuisine_widgets_init' );

function cuisine_scripts() {
	wp_enqueue_style( 'cuisine-style', get_stylesheet_uri() );

	wp_enqueue_script( 'cuisine-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'cuisine-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cuisine_scripts' );

require get_template_directory() . '/inc/custom-header.php';

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/template-functions.php';

require get_template_directory() . '/inc/customizer.php';

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

require_once get_template_directory() . '/inc/dev.php';

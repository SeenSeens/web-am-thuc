<?php
/**
 * Kim Bum
 */

// JS
if( !function_exists( 'script' ) ) :
    function script() {
        wp_register_script( 'bootstrapjs', get_template_directory_uri(). '/assets/js/bootstrap.min.js', array('jquery'), '4.3.1', true );
        wp_enqueue_script( 'bootstrapjs' );

        wp_register_script( 'popper', get_template_directory_uri(). '/assets/js/popper.min.js', array('jquery'), '', true );
        wp_enqueue_script( 'popper' );

        wp_register_script( 'slickjs', get_template_directory_uri(). '/assets/js/slick.min.js', array('jquery'), '', true );
        wp_enqueue_script( 'slickjs' );

        wp_register_script( 'magnificjs', get_template_directory_uri(). '/assets/js/magnific-popup.min.js', array('jquery'), '1.1.0', true);
        wp_enqueue_script( 'magnificjs' );

        wp_register_script( 'isotope', get_template_directory_uri(). '/assets/js/isotope.min.js', array('jquery'), '3.0.6', true );
        wp_enqueue_script( 'isotope' );

        wp_register_script( 'imagesloaded', get_template_directory_uri(). '/assets/js/imagesloaded.min.js', array('jquery'), '4.1.4', true );
        wp_enqueue_script( 'imagesloaded' );

        wp_register_script( 'counterup', get_template_directory_uri(). '/assets/js/counterup.min.js', array('jquery'), '', true );
        wp_enqueue_script( 'counterup' );

        wp_register_script( 'waypoints', get_template_directory_uri(). '/assets/js/waypoints.min.js', array('jquery'), '4.0.1', true );
        wp_enqueue_script( 'waypoints' );

        wp_register_script( 'countdown', get_template_directory_uri(). '/assets/js/countdown.min.js', array('jquery'), '2.2.0 ', true );
        wp_enqueue_script( 'countdown' );

        wp_register_script( 'jquery-ui-js', get_template_directory_uri(). '/assets/js/jquery-ui.min.js', array('jquery'), '1.12.1', true );
        wp_enqueue_script( 'jquery-ui-js' );

        wp_register_script( 'niceselectjs', get_template_directory_uri(). '/assets/js/nice-select.min.js', array('jquery'), '1.0', true );
        wp_enqueue_script( 'niceselectjs' );

        wp_register_script( 'nicenumberjs', get_template_directory_uri(). '/assets/js/nice-number.min.js', array('jquery'), '', true );
        wp_enqueue_script( 'nicenumberjs' );

        wp_register_script( 'sidebar-menu-js', get_template_directory_uri(). '/assets/js/sidebar-menu.js', array('jquery'), '', true );
        wp_enqueue_script( 'sidebar-menu-js' );

        wp_register_script( 'wow', get_template_directory_uri(). '/assets/js/wow.min.js', array('jquery'), '1.3.0', true );
        wp_enqueue_script( 'wow' );

        wp_register_script( 'main', get_template_directory_uri(). '/assets/js/main.js', array('jquery'), '', true );
        wp_enqueue_script( 'main' );
    }
    add_action( 'wp_enqueue_scripts', 'script' );
endif;

// Logo
if( !function_exists( 'logo' ) ) :
    function logo() {
        $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
        if ( has_custom_logo() ) {
            echo '<img src="' . $image[0]  . '" alt="' . get_bloginfo( 'name' ) . '" class="img-fluid" >';
        } else {
            echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
        }
    }
endif;

/** Register Custom Navigation Walker */
if ( ! file_exists( get_template_directory() . '/inc/wp-bootstrap-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'wp-bootstrap-navwalker-missing', __( 'It appears the wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/inc/wp-bootstrap-navwalker.php';
}

if ( ! file_exists( get_template_directory() . '/inc/wp-bootstrap-navwalker-mobile.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'wp-bootstrap-navwalker-missing', __( 'It appears the wp-bootstrap-navwalker-mobile.php file may be missing.', 'wp-bootstrap-navwalker-mobile' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/inc/wp-bootstrap-navwalker-mobile.php';
}

// Logo mobile
if( !function_exists( 'logo_mobile' ) ) :
    function logo_mobile() {
        $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
        if ( has_custom_logo() ) {
            echo '<img src="' . $image[0]  . '" alt="' . get_bloginfo( 'name' ) . '" >';
        } else {
            echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
        }
    }
endif;

require_once get_template_directory() . '/widgets/widget_contact_us.php';
require_once get_template_directory() . '/widgets/widget_opening_hours.php';
require_once get_template_directory() . '/widgets/widget_latest_news.php';
require_once get_template_directory() . '/widgets/widget_html.php';
require_once get_template_directory() . '/widgets/home2/head.php';
require_once get_template_directory() . '/widgets/home2/about.php';
require_once get_template_directory() . '/widgets/home2/popular.php';
require_once get_template_directory() . '/widgets/home2/features.php';
require_once get_template_directory() . '/widgets/home2/delicious.php';
require_once get_template_directory() . '/widgets/home2/reservations.php';
require_once get_template_directory() . '/widgets/home2/news.php';
require_once get_template_directory() . '/widgets/home2/chefs.php';

// Đăng ký 1 kích thước hình ảnh mới
add_image_size( 'img570-400', 570, 400, true );
add_image_size( 'img370-270', 370, 270, true );
add_image_size( 'img370-250', 370, 250, true );
add_image_size( 'img360-360', 360, 360, true );
add_image_size( 'img200-260', 200, 260, true );
add_image_size( 'img263-245', 263, 245, true );
add_image_size( 'img169-156', 169, 156, true );
add_image_size( 'img206-206', 206, 206, true );
add_image_size( 'img60-60', 60, 60, true );
add_image_size( 'img370-365', 370, 365, true );
function image_size() {
  add_theme_support( 'img570-400' );
  add_theme_support( 'img370-270' );
  add_theme_support( 'img370-250' );
  add_theme_support( 'img360-360' );
  add_theme_support( 'img200-261' );
  add_theme_support( 'img263-245' );
  add_theme_support( 'img169-156' );
  add_theme_support( 'img206-206' );
  add_theme_support( 'img60-60' );
  add_theme_support( 'img370-365' );
}
add_action( 'init', 'image_size' );

// Ghi đè template woocommerce
function cuisine_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'cuisine_add_woocommerce_support' );

// the_excerpt();
function wpdocs_excerpt_more( $more ) {
    if ( is_admin() ) {
        return $more;
    }
    return '';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// Phân trang
function wpbeginner_numeric_posts_nav($custom_query = null, $paged = null) {
    global $wp_query;
    if($custom_query) $main_query = $custom_query;
    else $main_query = $wp_query;
    $paged = ($paged) ? $paged : get_query_var('paged');
    $big = 999999999;
    $total = isset($main_query->max_num_pages)?$main_query->max_num_pages:'';
    if($total > 1) echo '<div class="pagination_list text-center">';
    echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, $paged ),
        'total' => $total,
        'mid_size' => '10', // Số trang hiển thị khi có nhiều trang trước khi hiển thị ...
        'prev_text'    => __('&larr;','cuisine'),
        'next_text'    => __('&rarr;','cuisine'),
        'type'         => 'list',
    ) );
    if($total > 1) echo '</div>';
}


// Chức năng: hiển thị phân trang cho sản phẩm WooCommerce khi dùng shortcode riêng lẻ

if ( ! is_admin() ) {
// ---------------------- FRONTPAGE -------------------

if ( defined('WC_VERSION') ) {
// ---------------------- WooCommerce active -------------------
  

    /**
    * Set Pagination for shortcodes custom loop on single-pages.
    * @uses $woocommerce_loop;
    */
    add_action( 'pre_get_posts', 'kli_wc_pre_get_posts_query' ); 
    function kli_wc_pre_get_posts_query( $query ) {
        global $woocommerce_loop;
    
        // Get paged from main query only
        // ! frontpage missing the post_type
        if ( is_main_query() && ( $query->query['post_type'] == 'product' ) || ! isset( $query->query['post_type'] ) ){
      
          if ( isset($query->query['paged']) ){
            $woocommerce_loop['paged'] = $query->query['paged'];
          }
        }
      
        if ( ! $query->is_post_type_archive || $query->query['post_type'] !== 'product' ){
            return;
        }
        
        $query->is_paged = true;
        $query->query['paged'] = $woocommerce_loop['paged'];
        $query->query_vars['paged'] = $woocommerce_loop['paged'];
    }
  
    /** Prepare Pagination data for shortcodes on pages
    * @uses $woocommerce_loop;
    **/
    add_action( 'loop_end', 'kli_query_loop_end' ); 
    function kli_query_loop_end( $query ) {
        
        if ( ! $query->is_post_type_archive || $query->query['post_type'] !== 'product' ){
            return;
        }
        
        // Cache data for pagination
        global $woocommerce_loop;
        $woocommerce_loop['pagination']['paged'] = $woocommerce_loop['paged'];
        $woocommerce_loop['pagination']['found_posts'] = $query->found_posts;
        $woocommerce_loop['pagination']['max_num_pages'] = $query->max_num_pages;
        $woocommerce_loop['pagination']['post_count'] = $query->post_count;
        $woocommerce_loop['pagination']['current_post'] = $query->current_post;

    }


    /**
    * Pagination for shortcodes on single-pages 
    * @uses $woocommerce_loop;
    */
    add_action( 'woocommerce_after_template_part', 'kli_wc_shortcode_pagination' ); 
    function kli_wc_shortcode_pagination( $template_name ) {

        if ( ! ( $template_name === 'loop/loop-end.php' && is_page() ) ){
            return;
        }

        global $wp_query, $woocommerce_loop;

        if ( ! isset( $woocommerce_loop['pagination'] ) ){
            return;
        }

        $wp_query->query_vars['paged'] = $woocommerce_loop['pagination']['paged'];
        $wp_query->query['paged'] = $woocommerce_loop['pagination']['paged'];
        $wp_query->max_num_pages = $woocommerce_loop['pagination']['max_num_pages'];
        $wp_query->found_posts = $woocommerce_loop['pagination']['found_posts'];
        $wp_query->post_count = $woocommerce_loop['pagination']['post_count'];
        $wp_query->current_post = $woocommerce_loop['pagination']['current_post'];
 
        // Custom pagination function or default woocommerce_pagination()
        kli_woocommerce_pagination();
    }   

    /**
    * Custom pagination for WooCommerce instead the default woocommerce_pagination()
    * @uses plugin Prime Strategy Page Navi, but added is_singular() on #line16
    **/
    remove_action('woocommerce_after_shop_loop', 'woocommerce_pagination', 10);
    add_action( 'woocommerce_after_shop_loop', 'kli_woocommerce_pagination', 10);
    function kli_woocommerce_pagination() {
        woocommerce_pagination(); 
    }



}/*woocommerce*/
}/*frontpage*/
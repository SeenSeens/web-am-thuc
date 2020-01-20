<?php
class Delicious extends WP_Widget {

    public function __construct() {
        parent::__construct('delicious', 'Thực đơn ngon');
        add_action( 'widgets_init', function() {
            register_widget( 'Delicious' );
        });
    }

    public function widget( $args, $instance ) {
        extract( $args );
        $background = get_field('features', 'widget_' . $widget_id);
        $background = $features['url'];
        echo $args['before_widget'];
        ?>
        <!-- Start chopcafe_menu section -->
        <section class="chopcafe_menu chopcafe_menu_2 bg_image" style="background-image: url(<?php echo esc_url($background) ?>);">
        	<div class="bg_overlay"></div>
        	<div class="container">
        		<div class="row justify-content-center">
        			<div class="col-lg-6">
        				<div class="chopcafe_title chopcafe_title_2 overlay_title text-center">
        					<h2>Our Delicious <span>Menu</span></h2>
        					<div class="title_divider">
        						<i class="flaticon-fork-and-knife-in-cross title_fork"></i>
        					</div>
        				</div>
        			</div>
        		</div>
        		<div class="row">
              <?php
              $loop = new WP_Query([
                'taxonomy'  => 'product_cat',
                'post_type' =>  'product',
                'posts_per_page'  =>  6,
                'orderby' =>  'rand'
              ]);
              if($loop->have_posts()) :
                while ($loop->have_posts()) :
                  $loop->the_post();
                  $id = get_the_ID();
                  $product = wc_get_product($id);
                  $price = $product->get_price_html();
                  $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'img169-156')
              ?>
        			<div class="col-lg-6 col-md-12 col-sm-12">
        				<div class="grid_item food_list_box">
        					<div class="grid_inner_item">
        						<div class="chopcafe_img">
        							<img src="<?php echo $thumb[0]; ?>" class="img-fluid" alt="">
        							<div class="overlay_img"></div>
        							<div class="overlay_content">
        								<a href="<?php echo $thumb[0]; ?>" class="btn_a btn_zoom"><i class="fas fa-search"></i></a>
        								<a href="#" class="btn_a btn_link"><i class="fas fa-link"></i></a>
        							</div>
        						</div>
        						<div class="chopcafe_info">
        							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        							<h4><?php echo $price; ?></h4>
        							<p><?php the_excerpt(); ?></p>
        						</div>
        					</div>
        				</div>
        			</div>
              <?php
                endwhile;
              endif; wp_reset_postdata();
              ?>
        		</div>
        	</div>
        </section>
        <!-- End chopcafe_menu section -->
        <?php
        echo $args['after_widget'];
    }

    public function form( $instance ) {
        // outputs the options form in the admin
    }

    public function update( $new_instance, $old_instance ) {
        // processes widget options to be saved
    }
}
$delicious = new Delicious();
?>

<?php

class Popular extends WP_Widget {

    public function __construct() {
        parent::__construct( 'popular', 'Mục phổ biến nhất của chúng tôi' );
        add_action( 'widgets_init', function() { register_widget( 'Popular' ); });
    }

    public function widget( $args, $instance ) {
        extract( $args );
        $title = apply_filters( 'widget_title', $instance['title'] );
        $categories = apply_filters( 'widget_categories', $instance['categories'] );
        $number = apply_filters( 'widget_number', $instance['number'] );
        echo $before_widget;
        ?>
        <section class="chopcafe_popular_item section_padding_2">
        	<div class="container">
        		<div class="row justify-content-center">
        			<div class="col-lg-6">
        				<div class="chopcafe_title chopcafe_title_2 text-center">
        					<h2>Our Most <span>Popular Item</span></h2>
        					<div class="title_divider">
        						<i class="flaticon-fork-and-knife-in-cross title_fork"></i>
        					</div>
        				</div>
        			</div>
        		</div>
        		<div class="row">
        			<div class="col-lg-12">
        				<div class="popular_item_slide">
                  <?php
                  $loop = new WP_Query( ['taxonomy' => 'product_cat', 'post_type' => 'product' , 'tag_ID' => $categories ] );
                  if ($loop->have_posts()) :
                    while($loop->have_posts()) :
                      $loop->the_post();
                      $id = get_the_ID();
                      $thump = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'img263-245');
                      $product = wc_get_product( $id );
                      $price = $product->get_price_html();
                  ?>
                    <div class="grid_item food_box">
                        <a href="<?php the_permalink(); ?>">
                            <div class="grid_inner_item">
                                <div class="chopcafe_img">
                                    <img src="<?php echo $thump[0]; ?>" class="img-fluid" alt="">
                                </div>
                                <div class="chopcafe_info text-center">
                                    <span><?= $price; ?></span>
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <ul class="rating">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                  <?php
                    endwhile;
                    endif; wp_reset_postdata();
                  ?>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <?php
        echo $after_widget;
    }

    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'cuisine' );
        $categories = ! empty( $instance['categories'] ) ? $instance['categories'] : esc_html__( '', 'cuisine' );
        $number = ! empty( $instance['number'] ) ? $instance['number'] : esc_html__( '', 'cuisine' );
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Tiêu đề', 'cuisine' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'categories ' ) ); ?>"><?php echo esc_html__( 'Danh mục', 'cuisine' ); ?></label>
            <select name="<?= esc_attr( $this->get_field_name( 'categories' ) ); ?>" id="<?= esc_attr( $this->get_field_id( 'categories' ) ); ?>">
                <option value=""><?= esc_html_e( 'Ngẫu nhiên', 'cuisine' ); ?></option>
                <?php
                $args = [ 'taxonomy' => 'product_cat', 'post_type' => 'product', 'orderby' => 'ID', 'show_count' => 0, 'pad_counts' => 0, 'hierarchical' => 1, 'title_li' => '', 'hide_empty' => 0 ];
                $all_categories = get_categories( $args );
                foreach ($all_categories as $cat) :
                  $sl = "";
                  if($cat->term_id == $categories):
                    $sl = "selected";
                  endif;
                  echo "<option value=\"" . $cat->term_id . "\" $sl>" . $cat->name . "</option>";
                endforeach;
                ?>
          </select>
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>"><?php echo esc_html__( 'Số bài viết', 'cuisine' ); ?></label>
            <input class="tiny-text" id="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number' ) ); ?>" type="text" value="<?php echo esc_attr( $number ); ?>">
        </p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = [];
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? $new_instance['title'] : '';
        $instance['categories'] = ( !empty( $new_instance['categories'] ) ) ? strip_tags( $new_instance['categories'] ) : '';
        $instance['number'] = ( !empty( $new_instance['number'] ) ) ? strip_tags( $new_instance['number'] ) : '';
        return $instance;
    }
}
$popular = new Popular();
?>

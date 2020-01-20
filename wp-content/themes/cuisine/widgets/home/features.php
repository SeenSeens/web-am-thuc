<?php
class Features extends WP_Widget {

    public function __construct() {
        parent::__construct( 'features', 'Features' );

        add_action( 'widgets_init', function() {
            register_widget( 'Features' );
        });
    }

    public function widget( $args, $instance ) {
        extract( $args );
        $features = get_field('features', 'widget_' . $widget_id);
        $features = $features['url'];
        echo $args['before_widget'];
        ?>
        <!-- Start chopcafe_fetaures section -->
        <section class="chopcafe_fetaures chopcafe_fetaures_1 section_padding">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-6">
        				<div class="chopcafe_img_box">
        					<div class="chopcafe_img fetaures_img">
                                <?php if( !empty( $features ) ) :
        						      echo '<img src="'. esc_url($features) .'" class="img-fluid" alt="">';
                                endif; ?>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-6">
        				<div class="chopcafe_content_box">
        					<div class="chopcafe_title content_title">
        						<h2>Our Awesome <span>Features</span></h2>
        						<div class="title_divider">
        							<i class="flaticon-fork-and-knife-in-cross title_fork"></i>
        						</div>
        					</div>
        					<div class="chopcafe_text_box">
        						<p>Sedut perspiciatis unde omnis iste natus error sitlutem acc usantium doloremque laudantium totam remaperiaeaque ipsa quae ab illo inventore veritatis</p>
        					</div>
        					<div class="chopcafe_feature_list">
        						<div class="single_feature">
        							<div class="chopcafe_icon">
        								<i class="flaticon-chef"></i>
        							</div>
        							<div class="chopcafe_info">
        								<h4>Cook With Lovely & Expert Chef</h4>
        								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do this eiusmod tempor incididunt ut labore et dolore</p>
        							</div>
        						</div>
        						<div class="single_feature">
        							<div class="chopcafe_icon">
        								<i class="flaticon-food-and-restaurant"></i>
        							</div>
        							<div class="chopcafe_info">
        								<h4>Book A Table Online</h4>
        								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do this eiusmod tempor incididunt ut labore et dolore</p>
        							</div>
        						</div>
        						<div class="single_feature">
        							<div class="chopcafe_icon">
        								<i class="flaticon-delivery-van"></i>
        							</div>
        							<div class="chopcafe_info">
        								<h4>Free & Fast Delivery</h4>
        								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do this eiusmod tempor incididunt ut labore et dolore</p>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!-- End chopcafe_fetaures section -->
        <?php
        echo $args['after_widget'];
    }

    public function form( $instance ) {
         $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'cuisine' );
         $text = ! empty( $instance['text'] ) ? $instance['text'] : esc_html__( '', 'cuisine' );
         ?>
         <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'cuisine' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
         </p>
         <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'Text' ) ); ?>"><?php echo esc_html__( 'Text:', 'cuisine' ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" type="text" cols="30" rows="10"><?php echo esc_attr( $text ); ?></textarea>
        </p>
         <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = [];
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['text'] = ( !empty( $new_instance['text'] ) ) ? $new_instance['text'] : '';
        return $instance;
    }
}
$features = new Features();
?>

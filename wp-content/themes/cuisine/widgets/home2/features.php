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
        $title = apply_filters( 'widget_title', $instance['title'] );
        $text = apply_filters( 'widget_text', $instance['text'] );

        $title1 = apply_filters( 'widget_title1', $instance['title1'] );
        $text1 = apply_filters( 'widget_text1', $instance['text1'] );

        $title2 = apply_filters( 'widget_title2', $instance['title2'] );
        $text2 = apply_filters( 'widget_text2', $instance['text2'] );

        $title3 = apply_filters( 'widget_title3', $instance['title3'] );
        $text3 = apply_filters( 'widget_text3', $instance['text3'] );
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
        						<h2><?php if(!empty($instance['title'])) { echo $title; } ?></h2>
        						<div class="title_divider">
        							<i class="flaticon-fork-and-knife-in-cross title_fork"></i>
        						</div>
        					</div>
        					<div class="chopcafe_text_box">
        						<p><?php if (!empty($instance['text'])) { echo $text; } ?></p>
        					</div>
        					<div class="chopcafe_feature_list">
        						<div class="single_feature">
        							<div class="chopcafe_icon">
        								<i class="flaticon-chef"></i>
        							</div>
        							<div class="chopcafe_info">
        								<h4><?php if(!empty($instance['title1'])) { echo $title1; } ?></h4>
        								<p><?php if (!empty($instance['text1'])) { echo $text1; } ?></p>
        							</div>
        						</div>
        						<div class="single_feature">
        							<div class="chopcafe_icon">
        								<i class="flaticon-food-and-restaurant"></i>
        							</div>
        							<div class="chopcafe_info">
        								<h4><?php if(!empty($instance['title2'])) { echo $title2; } ?></h4>
        								<p><?php if (!empty($instance['text2'])) { echo $text2; } ?></p>
        							</div>
        						</div>
        						<div class="single_feature">
        							<div class="chopcafe_icon">
        								<i class="flaticon-delivery-van"></i>
        							</div>
        							<div class="chopcafe_info">
        								<h4><?php if(!empty($instance['title3'])) { echo $title3; } ?></h4>
        								<p><?php if (!empty($instance['text3'])) { echo $text3; } ?></p>
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
        $title1 = ! empty( $instance['title1'] ) ? $instance['title1'] : esc_html__( '', 'cuisine' );
        $text1 = ! empty( $instance['text1'] ) ? $instance['text1'] : esc_html__( '', 'cuisine' );
        $title2 = ! empty( $instance['title2'] ) ? $instance['title2'] : esc_html__( '', 'cuisine' );
        $text2 = ! empty( $instance['text2'] ) ? $instance['text2'] : esc_html__( '', 'cuisine' );
        $title3 = ! empty( $instance['title3'] ) ? $instance['title3'] : esc_html__( '', 'cuisine' );
        $text3 = ! empty( $instance['text3'] ) ? $instance['text3'] : esc_html__( '', 'cuisine' );
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'cuisine' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'Text' ) ); ?>"><?php echo esc_html__( 'Text:', 'cuisine' ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" type="text" cols="10" rows="5"><?php echo esc_attr( $text ); ?></textarea>
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title1' ) ); ?>"><?php echo esc_html__( 'Title1:', 'cuisine' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title1' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title1' ) ); ?>" type="text" value="<?php echo esc_attr( $title1 ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'Text1' ) ); ?>"><?php echo esc_html__( 'Text1:', 'cuisine' ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text1' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text1' ) ); ?>" type="text" cols="10" rows="5"><?php echo esc_attr( $text1 ); ?></textarea>
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title2' ) ); ?>"><?php echo esc_html__( 'Title2:', 'cuisine' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title2' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title2' ) ); ?>" type="text" value="<?php echo esc_attr( $title2 ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'Text2' ) ); ?>"><?php echo esc_html__( 'Text2:', 'cuisine' ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text2' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text2' ) ); ?>" type="text" cols="10" rows="5"><?php echo esc_attr( $text2 ); ?></textarea>
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title3' ) ); ?>"><?php echo esc_html__( 'Title3:', 'cuisine' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title3' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title3' ) ); ?>" type="text" value="<?php echo esc_attr( $title3 ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'Text3' ) ); ?>"><?php echo esc_html__( 'Text3:', 'cuisine' ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text3' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text3' ) ); ?>" type="text" cols="10" rows="5"><?php echo esc_attr( $text3 ); ?></textarea>
        </p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = [];
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? sanitize_text_field($new_instance['title']) : '';
        $instance['text'] = ( !empty( $new_instance['text'] ) ) ? $new_instance['text'] : '';

        $instance['title1'] = ( !empty( $new_instance['title1'] ) ) ? sanitize_text_field($new_instance['title1']) : '';
        $instance['text1'] = ( !empty( $new_instance['text1'] ) ) ? $new_instance['text1'] : '';

        $instance['title2'] = ( !empty( $new_instance['title2'] ) ) ? sanitize_text_field($new_instance['title2']) : '';
        $instance['text2'] = ( !empty( $new_instance['text2'] ) ) ? $new_instance['text2'] : '';

        $instance['title3'] = ( !empty( $new_instance['title3'] ) ) ? sanitize_text_field($new_instance['title3']) : '';
        $instance['text3'] = ( !empty( $new_instance['text3'] ) ) ? $new_instance['text3'] : '';
        return $instance;
    }
}
$features = new Features();
?>

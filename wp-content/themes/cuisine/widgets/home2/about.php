<?php
class About extends WP_Widget {

    public function __construct() {
        parent::__construct( 'about', 'Giới thiệu' );
        add_action( 'widgets_init', function() {
            register_widget( 'About' );
        });
    }

    public function widget( $args, $instance ) {
        extract( $args );
        $title = apply_filters( 'widget_title', $instance['title'] );
        $text = apply_filters( 'widget_text', $instance['text'] );
        $link1 = apply_filters( 'widget_link1', $instance['link1'] );
        $link2 = apply_filters( 'widget_link2', $instance['link2'] );
        $img = apply_filters( 'widget_img', $instance['img'] );
        echo $args['before_widget'];
        ?>
        <section class="chopcafe_about chopcafe_about_2 section_padding_2">
        	<div class="container">
        		<div class="row align-items-center">
        			<div class="col-lg-6">
        				<div class="chopcafe_content_box">
        					<div class="chopcafe_title content_title">
        						<h2><?php if( !empty($instance['title']) ) : echo $title; endif; ?></h2>
        						<div class="title_divider">
        							<i class="flaticon-fork-and-knife-in-cross title_fork"></i>
        						</div>
        					</div>
        					<div class="about_text">
        						<?php if( !empty($instance['text']) ) : echo sprintf($text); endif; ?>
        						<a href="<?php if( !empty($instance['link1']) ) : echo $link1; endif; ?>" class="chopcafe_btn chopcafe_btn_2">Book Now</a>
        						<a href="<?php if( !empty($instance['link2']) ) : echo $link2; endif; ?>" class="play_btn"><i class="fas fa-play"></i></a>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-6">
        				<div class="chopcafe_img_box">
        					<div class="chopcafe_img">
        						<img src="<?php if( !empty($instance['link2']) ) : echo $img; endif; ?>" class="img-fluid" alt="">
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <?php
        echo $args['after_widget'];
    }

    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'cuisine' );
        $text = ! empty( $instance['text'] ) ? $instance['text'] : esc_html__( '', 'cuisine' );
        $link1 = ! empty( $instance['link1'] ) ? $instance['link1'] : esc_html__( '', 'cuisine' );
        $link2 = ! empty( $instance['link2'] ) ? $instance['link2'] : esc_html__( '', 'cuisine' );
        $img = ! empty( $instance['img'] ) ? $instance['img'] : esc_html__( '', 'cuisine' );
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Tiêu đề', 'cuisine' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'Text' ) ); ?>"><?php echo esc_html__( 'Trích dẫn', 'cuisine' ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" type="text" cols="30" rows="10"><?php echo esc_attr( $text ); ?></textarea>
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'link1' ) ); ?>"><?php echo esc_html__( 'Đường dẫn', 'cuisine' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'link1' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'link1' ) ); ?>" type="text" value="<?php echo esc_attr( $link1 ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'link2' ) ); ?>"><?php echo esc_html__( 'Đường dẫn', 'cuisine' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'link2' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'link2' ) ); ?>" type="text" value="<?php echo esc_attr( $link2 ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'img' ) ); ?>"><?php echo esc_html__( 'Hình ảnh', 'cuisine' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'img' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'img' ) ); ?>" type="text" value="<?php echo esc_attr( $img); ?>">
        </p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = [];
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['text'] = ( !empty( $new_instance['text'] ) ) ? $new_instance['text'] : '';
        $instance['link1'] = ( !empty( $new_instance['link1'] ) ) ? strip_tags( $new_instance['link1'] ) : '';
        $instance['link2'] = ( !empty( $new_instance['link2'] ) ) ? strip_tags( $new_instance['link2'] ) : '';
        $instance['img'] = ( !empty( $new_instance['img'] ) ) ? strip_tags( $new_instance['img'] ) : '';
        return $instance;
    }
}
$about = new About();
?>

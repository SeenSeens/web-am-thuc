<?php
class Head extends WP_Widget {
    public function __construct() {
        parent::__construct( 'head', 'Phần đầu trang' );
        add_action( 'widgets_init', function() {
            register_widget( 'Head' );
        });
    }

    public function widget( $args, $instance ) {
        extract( $args );
        $title1 = apply_filters( 'widget_title1', $instance['title1'] );
        $title2 = apply_filters( 'widget_title2', $instance['title2'] );
        $link = apply_filters( 'widget_link', $instance['link'] );
        $title3 = apply_filters( 'widget_title3', $instance['title3'] );
        echo $args['before_widget'];
        ?>
        <section class="header_bg header_bg_1 bg_image" style="background-image: url(<?php echo get_site_url() . '/wp-content/uploads/2019/12/breadcrumb_bg.jpg' ?>);">
          <div class="bg_overlay"></div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="welcome_content text-center">
                  <h1><?php if ( !empty($instance['title1']) ) : echo $title1; endif; ?></h1>
                  <h3><?php if ( !empty($instance['title2']) ) : echo $title2; endif; ?></h3>
                  <a href="<?php if ( !empty($instance['link']) ) : echo $link; endif; ?>" class="chopcafe_btn chopcafe_btn_2"><?php if ( !empty($instance['title3']) ) : echo $title3; endif; ?></a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php
        echo $args['after_widget'];
    }

    public function form( $instance ) {
        $title1 = ! empty( $instance['title1'] ) ? $instance['title1'] : esc_html__( '', 'cuisine' );
        $title2 = ! empty( $instance['title2'] ) ? $instance['title2'] : esc_html__( '', 'cuisine' );
        $link = ! empty( $instance['link'] ) ? $instance['link'] : esc_html__( '', 'cuisine' );
        $title3 = ! empty( $instance['title3'] ) ? $instance['title3'] : esc_html__( '', 'cuisine' );
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title1' ) ); ?>"><?php echo esc_html__( 'Tiêu đề 1', 'cuisine' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title1' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title1' ) ); ?>" type="text" value="<?php echo esc_attr( $title1 ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title2' ) ); ?>"><?php echo esc_html__( 'Tiêu đề 2', 'cuisine' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title2' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title2' ) ); ?>" type="text" value="<?php echo esc_attr( $title2 ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'link' ) ); ?>"><?php echo esc_html__( 'Link', 'cuisine' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'link' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'link' ) ); ?>" type="text" value="<?php echo esc_attr( $link ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title3' ) ); ?>"><?php echo esc_html__( 'Tiêu đề 3', 'cuisine' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title3' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title3' ) ); ?>" type="text" value="<?php echo esc_attr( $title3 ); ?>">
        </p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = [];
        $instance['title1'] = ( !empty( $new_instance['title1'] ) ) ? strip_tags( $new_instance['title1'] ) : '';
        $instance['title2'] = ( !empty( $new_instance['title2'] ) ) ? strip_tags( $new_instance['title2'] ) : '';
        $instance['link'] = ( !empty( $new_instance['link'] ) ) ? strip_tags( $new_instance['link'] ) : '';
        $instance['title3'] = ( !empty( $new_instance['title3'] ) ) ? strip_tags( $new_instance['title3'] ) : '';
        return $instance;
    }
}
$head = new Head();
?>

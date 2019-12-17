<?php
/**
 * Kim Bum
 * 29/11/2019
 */
class Opening_Hours extends WP_Widget {
    function __construct() {
 
        parent::__construct(
            'opening-hours',  // Base ID
            'Opening Hours'   // Name
        );

        add_action( 'widgets_init', function() {
            register_widget( 'Opening_Hours' );
        });
 
    }

    public function widget( $args, $instance ) {
        extract( $args );
        $title = apply_filters( 'widget_title', $instance['title'] );
        $text = apply_filters( 'widget_text', $instance['text'] );
        echo $args['before_widget'];
        ?>
            <div class="footer_widget_box">
                <div class="widget_title">
                    <?php  if ( ! empty( $instance['title'] ) ) : echo $args['before_title'] . $title . $args['after_title']; endif; ?>
                </div>
                <div class="widget_time">
                    <?php echo sprintf($text); ?>
                </div>
            </div>
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
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" type="text" cols="30" rows="10"><?php echo esc_textarea( $text ); ?></textarea>
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
$opening_hours = new Opening_Hours();

?>
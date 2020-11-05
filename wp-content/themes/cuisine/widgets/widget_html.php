<?php
/**
 * Kim Bum
 * 29/11/2019
 */

class Html extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'html',  // Base ID
            'Html'   // Name
        );
        add_action( 'widgets_init', function() {
            register_widget( 'Html' );
        });
    }
 
    public function widget( $args, $instance ) {
        extract( $args );
        $text = apply_filters( 'widget_text', $instance['text'] );
        if ( ! empty( $instance['text'] ) ) : echo sprintf($text); endif;
    }
 
    public function form( $instance ) {
        $text = ! empty( $instance['text'] ) ? $instance['text'] : esc_html__( '', 'cuisine' ); ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'Text' ) ); ?>"><?php echo esc_html__( 'Text:', 'cuisine' ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" type="text" cols="30" rows="15"><?php echo esc_attr( $text ); ?></textarea>
        </p>
    <?php }
 
    public function update( $new_instance, $old_instance ) {
        $instance = [];
        $instance['text'] = ( !empty( $new_instance['text'] ) ) ? $new_instance['text'] : '';
        return $instance;
    }
}
$html = new Html();
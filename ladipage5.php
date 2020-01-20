<?php
class Ladipage5 extends WP_Widget {

    public function __construct() {
        parent::__construct( 'ladipage5', 'Ladipage5');
        add_action( 'widgets_init', function() {
            register_widget( 'Ladipage5' );
        });
    }

    public function widget( $args, $instance ) {
        extract( $args );
        $title1 = apply_filters( 'widget_title1', $instance['title1'] );
        $title2 = apply_filters( 'widget_title2', $instance['title2'] );
        $hinh_1 = get_field('hinh_1', 'widget_' . $widget_id);
        $hinh_1 = $hinh_1['url'];
        echo $args['before_widget'];
        ?>
        <div id="SECTION176" class="ladi-section">
            <div class="ladi-section-background"></div>
            <div class="ladi-container">
                <div id="HEADLINE177" class="ladi-element">
                    <h3 class="ladi-headline"><?php if ( ! empty( $title1 ) ) : echo $title1; endif; ?></h3></div>
                <div id="IMAGE178" class="ladi-element">
                    <div class="ladi-image">
                        <?php if( !empty( $hinh_1 ) ) :
                            echo '<img src="'. esc_url($hinh_1) .'" />';
                        endif; ?>
                    </div>
                </div>
                <div id="PARAGRAPH180" class="ladi-element">
                    <p class="ladi-paragraph"><?php if ( ! empty( $title2 ) ) : echo $title2; endif; ?></p>
                </div>
            </div>
        </div>
        <?php
        echo $args['after_widget'];
    }

    public function form( $instance ) {
        $title1 = ! empty( $instance['title1'] ) ? $instance['title1'] : esc_html__( '', 'sieuthi18' );
        $title2 = ! empty( $instance['title2'] ) ? $instance['title2'] : esc_html__( '', 'sieuthi18' );
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title1' ) ); ?>"><?php echo esc_html__( 'Title 1:', 'sieuthi18' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title1' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title1' ) ); ?>" type="text" value="<?php echo esc_attr( $title1 ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title2' ) ); ?>"><?php echo esc_html__( 'Title 2:', 'sieuthi18' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title2' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title2' ) ); ?>" type="text" value="<?php echo esc_attr( $title2 ); ?>">
        </p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = [];
        $instance['title1'] = ( !empty( $new_instance['title1'] ) ) ? strip_tags( $new_instance['title1'] ) : '';
        $instance['title2'] = ( !empty( $new_instance['title2'] ) ) ? strip_tags( $new_instance['title2'] ) : '';
        return $instance;
    }
}
$ladipage5 = new Ladipage5();
?>

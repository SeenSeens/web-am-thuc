<?php
class Contact_Us extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'contact-us',  // Base ID
            'Contact Us'   // Name
        );
        add_action( 'widgets_init', function() {
            register_widget( 'Contact_Us' );
        });
    }
    public function widget( $args, $instance ) {
        extract( $args );
        $title = apply_filters( 'widget_title', $instance['title'] );
        $address = apply_filters( 'widget_address', $instance['address'] );
        $mail = apply_filters( 'widget_mail', $instance['mail'] );
        $phone = apply_filters( 'widget_phone', $instance['phone'] );
        echo $args['before_widget'];
        ?>
            <div class="footer_widget_box">
                <div class="widget_title">
                    <?php  if ( ! empty( $instance['title'] ) ) : echo $args['before_title'] . $title . $args['after_title']; endif; ?>
                </div>
                <div class="widget_contact">
                    <div class="info_list">
                        <div class="info_icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info_text">
                            <?php  if ( ! empty( $instance['address'] ) ) : echo ' <p> ' . $address . ' </p>'; endif; ?>
                        </div>
                    </div>
                    <div class="info_list">
                        <div class="info_icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info_text">
                            <p>
                                <a href="mailto:<?php  if ( ! empty( $instance['mail'] ) ) : echo ' <p> ' . $mail . ' </p>'; endif; ?>">
                                    <?php  if ( ! empty( $instance['mail'] ) ) : echo ' <p> ' . $mail . ' </p>'; endif; ?>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="info_list">
                        <div class="info_icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="info_text">
                            <p>
                                <a href="tel:<?php  if ( ! empty( $instance['phone'] ) ) : echo ' <p> ' . $phone . ' </p>'; endif; ?>">
                                    <?php  if ( ! empty( $instance['phone'] ) ) : echo ' <p> ' . $phone . ' </p>'; endif; ?>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        echo $args['after_widget'];
    }
 
    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'cuisine' );
        $address = ! empty( $instance['address'] ) ? $instance['address'] : esc_html__( '', 'cuisine' );
        $mail = ! empty( $instance['mail'] ) ? $instance['mail'] : esc_html__( '', 'cuisine' );
        $phone = ! empty( $instance['phone'] ) ? $instance['phone'] : esc_html__( '', 'cuisine' );
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'cuisine' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'address' ) ); ?>"><?php echo esc_html__( 'Address:', 'cuisine' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'address' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'address' ) ); ?>" type="text" value="<?php echo esc_attr( $address ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'mail' ) ); ?>"><?php echo esc_html__( 'Mail:', 'cuisine' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'mail' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'mail' ) ); ?>" type="text" value="<?php echo esc_attr( $mail ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'phone' ) ); ?>"><?php echo esc_html__( 'Phone:', 'cuisine' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'phone' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'phone' ) ); ?>" type="text" value="<?php echo esc_attr( $phone ); ?>">
        </p>
        <?php
    }
 
    public function update( $new_instance, $old_instance ) {
        $instance = [];
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['address'] = ( !empty( $new_instance['address'] ) ) ? strip_tags( $new_instance['address'] ) : '';
        $instance['mail'] = ( !empty( $new_instance['mail'] ) ) ? strip_tags( $new_instance['mail'] ) : '';
        $instance['phone'] = ( !empty( $new_instance['phone'] ) ) ? strip_tags( $new_instance['phone'] ) : '';
        return $instance;
    }
}
$contact_us = new Contact_Us();

?>
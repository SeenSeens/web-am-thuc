<?php

class Latest_News extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'latest-news',  // Base ID
            'Latest News'   // Name
        );
        add_action( 'widgets_init', function() {
            register_widget( 'Latest_News' );
        });
    }

    public function widget( $args, $instance ) {
        extract( $args );
        $title = apply_filters( 'widget_title', $instance['title'] );
        ?>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="footer_widget_box">
                <div class="widget_title">
                    <?php  if ( ! empty( $instance['title'] ) ) : echo $args['before_title'] . $title . $args['after_title']; endif; ?>
                </div>
                <div class="widget_news">
                    <?php
                    $query = new WP_Query([
                      'taxonomy'	=> 'category',
                      'post_type' => 'post',
                      'posts_per_page' => 5,
                      'orderby' =>  'ID',
                      'cat' => 1,

                    ]);
                    while($query->have_posts()) :
                        $query->the_post();
                        $ID = get_the_ID();
                        $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($ID), 'post-thumbnail');
                    ?>
                    <div class="single_news">
                        <div class="news_thumb">
                            <a href="#"><img src="<?= $thumb[0]; ?>" alt=""></a>
                        </div>
                        <div class="news_link">
                            <h3><a href="#"><?php the_title(); ?></a></h3>
                        </div>
                    </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
        <?php
    }

    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'cuisine' );
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'cuisine' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = [];
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }
}
$latest_news = new Latest_News();
?>

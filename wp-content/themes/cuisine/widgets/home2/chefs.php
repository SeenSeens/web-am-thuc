<?php
class Chefs extends WP_Widget {
 
    public function __construct() {
    	parent::__construct(
            'chefs',  // Base ID
            'Chefs'   // Name
        );
        add_action( 'widgets_init', function() {
            register_widget( 'Chefs' );
        });
    }
 
    public function widget( $args, $instance ) {
    	?>
    	<section class="chopcafe_chef chopcafe_chef_2 section_padding_2">
		    <div class="container">
		        <div class="row justify-content-center">
		            <div class="col-lg-6">
		                <div class="chopcafe_title chopcafe_title_2 text-center">
		                    <h2>Meet Our <span>Expert Chefs</span></h2>
		                    <div class="title_divider">
		                        <i class="flaticon-fork-and-knife-in-cross title_fork"></i>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="row">
		        	<?php
		        	$query = new WP_Query([
		        		'taxonomy'  => 'category',
		        		'cat'	=> '30',
		        		'post_type'	=>	'post',
		        		'posts_per_page'	=> -1,
		        	]);
		        	if ($query->have_posts()) {
		        		while ($query->have_posts()) {
		        			$query->the_post();
		        			$id = get_the_ID();
		        			$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'img206-206')
		        	?>
		            <div class="col-lg-3 col-md-6 col-sm-12">
		                <div class="chef_box wow slideInUp" style="visibility: visible;">
		                    <div class="chopcafe_img">
		                        <img src="<?= $thumb[0] ?>" class="img-fluid" alt="">
		                        <div class="overlay_img"></div>
		                        <div class="overlay_content">
		                            <div class="social">
		                                <ul>
		                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
		                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
		                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
		                                </ul>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="chef_info">
		                        <h3><a href="#"><?php the_title(); ?></a></h3>
		                        <p>Fry / saute cook</p>
		                    </div>
		                </div>
		            </div>
		        		<?php } wp_reset_query(); ?>
		        	<?php } wp_reset_postdata(); ?>
		        </div>
		    </div>
		</section>
    	<?php
    }
}
$chefs = new Chefs();
?>
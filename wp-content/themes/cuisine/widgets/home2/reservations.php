<?php

class Reservations extends WP_Widget {

	function __construct() {
		parent::__construct( 'reservations', 'Liên hệ với chúng tôi' );
        add_action( 'widgets_init', function() { register_widget( 'Reservations' ); });
	}

	function widget( $args, $instance ) {
		?>
		<!-- Start chopcafe_reservation section -->
		<section class="chopcafe_reservation chopcafe_reservation_2 section_padding_2 bg_image" style="background-image: url(<?php echo get_site_url() . '/wp-content/uploads/2019/12/book_bg_1.jpg'; ?>);">
			<div class="bg_overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="chopcafe_title overlay_title chopcafe_title_2 text-center">
							<h2><span>Liên Hệ Với Chúng Tôi</span></h2>
							<div class="title_divider">
								<i class="flaticon-fork-and-knife-in-cross title_fork"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="reservation_form">
		          <?php echo do_shortcode('[contact-form-7 id="81" title="Contact form 1"]'); ?>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="chopcafe_img_box">
							<div class="chopcafe_img reservation_img">
								<img src="<?php echo get_site_url() . '/wp-content/uploads/2019/12/book_1.png'; ?>" class="img-fluid" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End chopcafe_reservation section -->
		<?php
	}
}
$reservations = new Reservations();
?>
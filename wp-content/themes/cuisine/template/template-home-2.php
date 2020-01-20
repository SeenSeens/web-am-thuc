<?php
/*
 * Template Name: Home 2
 */
?>
<?php
get_header();
if(is_active_sidebar( 'index-2' )) : dynamic_sidebar( 'index-2' ); endif;
?>




<!-- Start chopcafe_chef section -->
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
      $loop = new WP_Query([
        'taxonomy'  => 'category',
        'post_type' =>  'post',
        'posts_per_page'  =>  6,
        'orderby' =>  'rand',
        'category_name' =>  'chefs'
      ]);
      if($loop->have_posts()) :
        while ($loop->have_posts()) :
          $loop->the_post();
          $id = get_the_ID();
          $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'img206-206')
      ?>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="chef_box">
					<div class="chopcafe_img">
						<img src="<?php echo $thumb[0]; ?>" class="img-fluid" alt="">
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
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					</div>
				</div>
			</div>
      <?php
        endwhile;
      endif; wp_reset_postdata();
      ?>
		</div>
	</div>
</section>
<!-- End chopcafe_chef section -->

<!-- Start chopcafe_reservation section -->
<section class="chopcafe_reservation chopcafe_reservation_2 section_padding_2 bg_image" style="background-image: url(<?php echo get_site_url() . '/wp-content/uploads/2019/12/book_bg_1.jpg'; ?>);">
	<div class="bg_overlay"></div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="chopcafe_title overlay_title chopcafe_title_2 text-center">
					<h2>Book a <span>Reservation</span></h2>
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

<!-- Start chopcafe_testimonial section -->
<section class="chopcafe_testimonial chopcafe_testimonial_2 section_padding_2">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="chopcafe_title chopcafe_title_2 text-center">
					<h2>What Say <span>Our Customer</span></h2>
					<div class="title_divider">
						<i class="flaticon-fork-and-knife-in-cross title_fork"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="testimonial_slider_1 text-center">
          <?php
          $loop = new WP_Query([
            'taxonomy'  => 'category',
            'post_type' =>  'post',
            'posts_per_page'  =>  3,
            'orderby' =>  'rand',
            'category_name' =>  'feedback'
          ]);
          if($loop->have_posts()) :
            while ($loop->have_posts()) :
              $loop->the_post();
              $id = get_the_ID();
              $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'img60-60')
          ?>
					<div class="testimonial_box">
						<div class="testimonial_info">
							<p><?php the_content(); ?></p>
						</div>
						<div class="testimonial_author">
							<div class="author_thumb">
								<img src="<?php echo $thumb[0]; ?>" alt="">
							</div>
							<div class="author_info">
								<h4><?php the_title(); ?></h4>
							</div>
						</div>
					</div>
          <?php
            endwhile;
          endif; wp_reset_postdata();
          ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End chopcafe_testimonial section -->
<?php get_footer(); ?>

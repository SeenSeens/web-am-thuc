<?php
/*
 * Template Name: Home 2
 */
?>
<?php get_header(); ?>
<!-- Start header_bg seciton -->
<section class="header_bg header_bg_1 bg_image" style="background-image: url(<?php echo get_site_url() . '/wp-content/uploads/2019/12/breadcrumb_bg.jpg' ?>);">
  <div class="bg_overlay"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="welcome_content text-center">
          <h1>Welcome to Chopcafe</h1>
          <h3>The House of  Taste & Delicious Food</h3>
          <a href="reservation.html" class="chopcafe_btn chopcafe_btn_2">RESERVATION</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End header_bg seciton -->
<!-- Start chopcafe_about section -->
<section class="chopcafe_about chopcafe_about_2 section_padding_2">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="chopcafe_content_box">
					<div class="chopcafe_title content_title">
						<h2>Know<span> About us</span></h2>
						<div class="title_divider">
							<i class="flaticon-fork-and-knife-in-cross title_fork"></i>
						</div>
					</div>
					<div class="about_text">
						<p>It is a long established fact that a reader will be distracted by the read able ctent of a page when looking at its layout. The point of using Lorem Ipsum is that it is has a more-or-less normal distribution of letter, as.here', making it look like read able English. Many desktop publising packages and web page editors now use is Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
						<p>here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover .</p>
						<a href="about.html" class="chopcafe_btn chopcafe_btn_2">Book Now</a>
						<a href="https://www.youtube.com/watch?v=3AtDnEC4zak" class="play_btn"><i class="fas fa-play"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="chopcafe_img_box">
					<div class="chopcafe_img">
						<img src="<?php echo get_site_url() . '/wp-content/uploads/2019/12/about_3.jpg' ?>" class="img-fluid" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End chopcafe_about section -->
<section class="chopcafe_popular_item section_padding_2">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="chopcafe_title chopcafe_title_2 text-center">
					<h2>Our Most <span>Popular Item</span></h2>
					<div class="title_divider">
						<i class="flaticon-fork-and-knife-in-cross title_fork"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="popular_item_slide">
          <?php
          $loop = new WP_Query( ['taxonomy' => 'product_cat', 'post_type' => 'product'] );
          if ($loop->have_posts()) :
            while($loop->have_posts()) :
              $loop->the_post();
              $id = get_the_ID();
              $thump = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'img263-245');
              $product = wc_get_product( $id );
              $price = $product->get_price_html();
          ?>
					<div class="grid_item food_box">
            <a href="<?php the_permalink(); ?>">
  						<div class="grid_inner_item">
  							<div class="chopcafe_img">
  								<img src="<?php echo $thump[0]; ?>" class="img-fluid" alt="">
  							</div>
  							<div class="chopcafe_info text-center">
  								<span><?= $price; ?></span>
  								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  								<ul class="rating">
  									<li><i class="fas fa-star"></i></li>
  									<li><i class="fas fa-star"></i></li>
  									<li><i class="fas fa-star"></i></li>
  									<li><i class="fas fa-star"></i></li>
  									<li><i class="fas fa-star"></i></li>
  								</ul>
  							</div>
  						</div>
            </a>
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

<!-- Start chopcafe_fetaures section -->
<section class="chopcafe_fetaures chopcafe_fetaures_1 section_padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="chopcafe_img_box">
					<div class="chopcafe_img fetaures_img">
						<img src="<?php echo get_site_url() . '/wp-content/uploads/2019/12/feature_1.jpg' ?>" class="img-fluid" alt="">
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="chopcafe_content_box">
					<div class="chopcafe_title content_title">
						<h2>Our Awesome <span>Features</span></h2>
						<div class="title_divider">
							<i class="flaticon-fork-and-knife-in-cross title_fork"></i>
						</div>
					</div>
					<div class="chopcafe_text_box">
						<p>Sedut perspiciatis unde omnis iste natus error sitlutem acc usantium doloremque laudantium totam remaperiaeaque ipsa quae ab illo inventore veritatis</p>
					</div>
					<div class="chopcafe_feature_list">
						<div class="single_feature">
							<div class="chopcafe_icon">
								<i class="flaticon-chef"></i>
							</div>
							<div class="chopcafe_info">
								<h4>Cook With Lovely & Expert Chef</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do this eiusmod tempor incididunt ut labore et dolore</p>
							</div>
						</div>
						<div class="single_feature">
							<div class="chopcafe_icon">
								<i class="flaticon-food-and-restaurant"></i>
							</div>
							<div class="chopcafe_info">
								<h4>Book A Table Online</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do this eiusmod tempor incididunt ut labore et dolore</p>
							</div>
						</div>
						<div class="single_feature">
							<div class="chopcafe_icon">
								<i class="flaticon-delivery-van"></i>
							</div>
							<div class="chopcafe_info">
								<h4>Free & Fast Delivery</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do this eiusmod tempor incididunt ut labore et dolore</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End chopcafe_fetaures section -->

<!-- Start chopcafe_menu section -->
<section class="chopcafe_menu chopcafe_menu_2 bg_image" style="background-image: url(<?php echo get_site_url() . '/wp-content/uploads/2019/12/menu_bg_1.jpg' ?>);">
	<div class="bg_overlay"></div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="chopcafe_title chopcafe_title_2 overlay_title text-center">
					<h2>Our Delicious <span>Menu</span></h2>
					<div class="title_divider">
						<i class="flaticon-fork-and-knife-in-cross title_fork"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
      <?php
      $loop = new WP_Query([
        'taxonomy'  => 'product_cat',
        'post_type' =>  'product',
        'posts_per_page'  =>  6,
        'orderby' =>  'rand'
      ]);
      if($loop->have_posts()) :
        while ($loop->have_posts()) :
          $loop->the_post();
          $id = get_the_ID();
          $product = wc_get_product($id);
          $price = $product->get_price_html();
          $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'img169-156')
      ?>
			<div class="col-lg-6 col-md-12 col-sm-12">
				<div class="grid_item food_list_box">
					<div class="grid_inner_item">
						<div class="chopcafe_img">
							<img src="<?php echo $thumb[0]; ?>" class="img-fluid" alt="">
							<div class="overlay_img"></div>
							<div class="overlay_content">
								<a href="<?php echo $thumb[0]; ?>" class="btn_a btn_zoom"><i class="fas fa-search"></i></a>
								<a href="#" class="btn_a btn_link"><i class="fas fa-link"></i></a>
							</div>
						</div>
						<div class="chopcafe_info">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<h4><?php echo $price; ?></h4>
							<p><?php the_excerpt(); ?></p>
						</div>
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
<!-- End chopcafe_menu section -->

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

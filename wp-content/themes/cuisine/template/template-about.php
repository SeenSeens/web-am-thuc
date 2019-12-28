<?php
/*
 * Template Name: About Us
 */
?>
<?php get_header(); ?>
<section class="chopcafe_breadcrumb bg_image" style="background-image: url(<?php echo get_site_url() . '/wp-content/uploads/2019/12/breadcrumb_bg.jpg' ?>);">
    <div class="bg_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_content text-center">
                    <h2><?php the_title(); ?></h2>
                    <ul>
                        <li><a href="<?php bloginfo('url'); ?>">Trang chủ</a></li>
                        <li class="active"><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="chopcafe_about chopcafe_about_3 section_padding_2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="chopcafe_img about_img_3">
                    <img src="<?php echo get_site_url() . '/wp-content/uploads/2019/12/about_2.png' ?>" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="chopcafe_content_box about_content_box">
                    <div class="chopcafe_title content_title">
                        <h2>About<span> Our Restaurant</span></h2>
                        <div class="title_divider">
                            <i class="flaticon-fork-and-knife-in-cross title_fork"></i>
                        </div>
                    </div>
                    <div class="about_text">
                        <p>Loremue Ipsum is simply dummy text of the printing and typesetting industry. Lorem ThIipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specime book. It have surv ived not only five cen turies.</p>
                        <p>Loremue Ipsum is simply dummy text of the printing and typesetting industry. Lorem ThIipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <a href="<?php the_permalink(); ?>" class="chopcafe_btn about_btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="chopcafe_project_counter bg_image" style="background-image: url(<?php echo get_site_url() . '/wp-content/uploads/2019/12/pattern.jpg' ?>);">
    <div class="bg_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="counter_box">
                    <div class="counter_info">
                        <h2><span class="counter">378</span>+</h2>
                        <h5>Menu Items</h5>
                    </div>
                    <div class="counter_icon">
                        <i class="flaticon-fork-and-knife-in-cross title_fork"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="counter_box">
                    <div class="counter_info">
                        <h2><span class="counter">500</span>+</h2>
                        <h5>Test & Love</h5>
                    </div>
                    <div class="counter_icon">
                        <i class="flaticon-fork-and-knife-in-cross title_fork"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="counter_box">
                    <div class="counter_info">
                        <h2><span class="counter">50</span>+</h2>
                        <h5>Professional Chef</h5>
                    </div>
                    <div class="counter_icon">
                        <i class="flaticon-fork-and-knife-in-cross title_fork"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="counter_box">
                    <div class="counter_info">
                        <h2><span class="counter">1000</span>+</h2>
                        <h5>Regular Visits</h5>
                    </div>
                    <div class="counter_icon">
                        <i class="flaticon-fork-and-knife-in-cross title_fork"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="chopcafe_why_choose chopcafe_why_choose_1 section_padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="choose_content_box">
                    <div class="chopcafe_title content_title">
                        <h2>Why choose <span>Chopcafe</span></h2>
                        <div class="title_divider">
                            <i class="flaticon-fork-and-knife-in-cross title_fork"></i>
                        </div>
                    </div>
                    <div class="choose_text">
                        <p>Loremue Ipsum is simply dummy text of the printing and typesetting industry. Lorem ThIipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specime book. It have surv ived not only five cen turies.</p>
                        <div class="choose_list">
                            <div class="single_choose">
                                <div class="choose_icon">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="choose_info">
                                    <p>Awesome Place & Clean Environment.</p>
                                </div>
                            </div>
                            <div class="single_choose">
                                <div class="choose_icon">
                                    <i class="fas fa-restroom"></i>
                                </div>
                                <div class="choose_info">
                                    <p>Lovely & Very Professional Chefs</p>
                                </div>
                            </div>
                            <div class="single_choose">
                                <div class="choose_icon">
                                    <i class="fas fa-pizza-slice"></i>
                                </div>
                                <div class="choose_info">
                                    <p>Tasty, Delicious & Fresh Foods.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="chopcafe_img why_choose_img_1">
                    <img src="<?php echo get_site_url() . '/wp-content/uploads/2019/12/choose_1.jpg' ?>" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="chopcafe_chef chopcafe_chef_1 bg_image section_padding_2" style="background-image: url(<?php echo get_site_url() . '/wp-content/uploads/2019/11/chef_bg.jpg' ?>);">
    <div class="bg_overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="chopcafe_title chopcafe_title_1 overlay_title text-center">
                    <h2>Meet Our <span>Expert Chefs</span></h2>
                    <div class="title_divider">
                        <i class="flaticon-fork-and-knife-in-cross title_fork"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="chef_slide_1">
                  <?php
                  $loop = new WP_Query( ['posts_per_page' => 5, 'taxonomy' => 'category', 'post_type' => 'post', 'category_name' => 'chefs'] );
                  if($loop->have_posts()) :
                    while($loop->have_posts()) :
                      $loop->the_post();
                      $id = get_the_ID();
                      $thump = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'img360-360');
                  ?>
                    <div class="chef_box">
                        <div class="chopcafe_img">
                            <img src="<?php echo $thump[0]; ?>" class="img-fluid" alt="">
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
                            <p>Chef Master</p>
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

<section class="chopcafe_special_food chopcafe_special_food_1 section_padding_2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="chopcafe_title chopcafe_title_1 text-center">
                    <h2>Our <span>Special Food</span></h2>
                    <div class="title_divider">
                        <i class="flaticon-fork-and-knife-in-cross title_fork"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="food_slider_1">
          <?php
          $loop = new WP_Query( ['posts_per_page' => 5, 'taxonomy' => 'product_cat', 'post_type' => 'product'] );
          if($loop->have_posts()) :
            while($loop->have_posts()) :
              $loop->the_post();
              $id = get_the_ID();
              $thump = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'img370-365');
              $product = wc_get_product($id);
			        $price = $product->get_price_html();
          ?>
            <div class="grid_item food_grid_box">
                <div class="grid_inner_item">
                    <div class="chopcafe_img">
                        <img src="<?php echo $thump[0]; ?>" class="img-fluid" alt="">
                        <div class="overlay_img"></div>
                        <div class="overlay_content">
                            <a href="<?php echo $thump[0]; ?>" class="btn_a btn_zoom"><i class="fas fa-search"></i></a>
                            <a href="<?php the_permalink(); ?>" class="btn_a btn_link"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                    <div class="chopcafe_info">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span><?php echo $price; ?></span></h3>
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

<section class="chopcafe_reservation chopcafe_reservation_4 bg_image section_padding_2" style="background-image: url(<?php echo get_site_url() . '/wp-content/uploads/2019/12/reservation_bg_1.jpg' ?>);">
    <div class="bg_overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="chopcafe_title chopcafe_title_1 overlay_title text-center">
                    <h2>Book a <span>Reservation</span></h2>
                    <div class="title_divider">
                        <i class="flaticon-fork-and-knife-in-cross title_fork"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="reservation_form reservation_form_4">
                    <?php echo do_shortcode('[contact-form-7 id="81" title="Contact form 1"]'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="chopcafe_img_box">
                    <div class="chopcafe_img reservation_img">
                        <img src="<?php echo get_site_url() .'/wp-content/uploads/2019/12/book_1.png' ?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="chopcafe_testimonial chopcafe_testimonial_4 section_padding_2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="chopcafe_title chopcafe_title_1 overlay_title text-center">
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
                    <div class="testimonial_box">
                        <div class="testimonial_info">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                        </div>
                        <div class="testimonial_author">
                            <div class="author_thumb">
                                <img src="<?php echo get_site_url() .'/wp-content/uploads/2019/12/client_1.jpg' ?>" alt="">
                            </div>
                            <div class="author_info">
                                <h4>Saiful Islam</h4>
                                <p>CEO & Founder</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial_box">
                        <div class="testimonial_info">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                        </div>
                        <div class="testimonial_author">
                            <div class="author_thumb">
                                <img src="<?php echo get_site_url() . '/wp-content/uploads/2019/12/client_1.jpg' ?>" alt="">
                            </div>
                            <div class="author_info">
                                <h4>Saiful Islam</h4>
                                <p>CEO & Founder</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial_box">
                        <div class="testimonial_info">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                        </div>
                        <div class="testimonial_author">
                            <div class="author_thumb">
                                <img src="<?php echo get_site_url() . '/wp-content/uploads/2019/12/client_1.jpg' ?>" alt="">
                            </div>
                            <div class="author_info">
                                <h4>Saiful Islam</h4>
                                <p>CEO & Founder</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>

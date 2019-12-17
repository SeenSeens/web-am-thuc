<?php
/*
 * Template Name: Home 1
 */
?>
<?php get_header(); ?>
<section class="header_slider header_slider_1">
    <div class="container">
        <div class="welcome_slider">
            <div class="single_slider">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="welcome_content">
                            <h1>Welcome To <span>Chopcafe</span></h1>
                            <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. </p>
                            <a href="reservation.html" class="chopcafe_btn reservation_btn">reservation</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="chopcafe_img welcome_img">
                            <img src="/cuisine/wp-content/uploads/2019/11/slider_1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="welcome_content">
                            <h1>Welcome To <span>Chopcafe</span></h1>
                            <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. </p>
                            <a href="reservation-2.html" class="chopcafe_btn reservation_btn">reservation</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="chopcafe_img welcome_img">
                            <img src="/cuisine/wp-content/uploads/2019/11/slider_2.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="welcome_content">
                            <h1>Welcome To <span>Chopcafe</span></h1>
                            <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. </p>
                            <a href="reservation-2.html" class="chopcafe_btn reservation_btn">reservation</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="chopcafe_img welcome_img">
                            <img src="/cuisine/wp-content/uploads/2019/11/slider_1.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="chopcafe_about chopcafe_about_1 gray_bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="chopcafe_content_box">
                    <div class="about_text">
                        <h2>About <span>Chopcafe</span></h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and type setting indust Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                        <p>It has survived not only five centuries, but also the leap into electronic type setting, remaining.</p>
                        <a href="menu_v1.html" class="chopcafe_btn about_btn">See Menu</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="chofcafe_img_box">
                    <div class="about_video_box chopcafe_img">
                        <img src="/cuisine/wp-content/uploads/2019/11/about_1.jpg" class="img-fluid" alt="">
                        <div class="bg_overlay"></div>
                        <div class="play_button">
                            <a href="https://www.youtube.com/watch?v=3AtDnEC4zak" class="play_btn"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="chopcafe_menu chopcafe_menu_1 section_padding_2" id="menu_grid">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="chopcafe_title chopcafe_title_1 text-center">
                    <h2>Taste & Delicious <span>Menu</span></h2>
                    <div class="title_divider">
                        <i class="flaticon-fork-and-knife-in-cross title_fork"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="chopcafe_filter text-center">
                    <?php
                        $terms = get_terms("product_cat");
                        $count = count($terms);
                        //echo '<button class="chopcafe_btn" data-filter=".breakfast">breakfast</button>';
                        if ( $count > 1 ) :
                            foreach ( $terms as $term ) :
                                $termname = strtolower($term->name);
                                $termname = str_replace(' ', '-', $termname);
                                echo '<button class="chopcafe_btn" data-filter=".'.$termname.'">'.$term->name.'</button>';
                            endforeach;
                        endif;
                    ?>
                </div>
            </div>
        </div>
        <div class="row grid">
        <?php
            $loop = new WP_Query([ 'taxonomy'  => 'product_cat', 'post_type' => 'product', 'posts_per_page' => -1]);
            $count = 0;
            if ( $loop ) :
                while ( $loop->have_posts() ) : $loop->the_post();
                    $terms = get_the_terms( $post->ID, 'product_cat' );
                        if ( $terms && ! is_wp_error( $terms ) ) :
                            $links = [];
                            foreach ( $terms as $term ) :
                                $links[] = $term->name;
                            endforeach;
                            $links = str_replace(' ', '-', $links);
                            $tax = join( " ", $links );
                        else :
                            $tax = '';
                        endif;
                        $infos = get_post_custom_values('_url');
                        $ID = get_the_ID();
                        $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($ID), 'img370-250');
        ?>
            <div class="col-lg-4 col-md-6 col-sm-12 menu_item <?php echo strtolower($tax); ?>">
                <div class="grid_item food_grid_box">
                    <div class="grid_inner_item">
                        <div class="chopcafe_img">
                            <img src="<?= $thumb[0]; ?>" class="img-fluid" alt="">
                            <div class="overlay_img"></div>
                            <div class="overlay_content">
                                <a href="<?= $thumb[0]; ?>" class="btn_a btn_zoom"><i class="fas fa-search"></i></a>
                                <a href="<?php the_permalink(); ?>" class="btn_a btn_link"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="chopcafe_info">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span>$ 11.00</span></h3>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php
                endwhile;
            endif;
        ?>
        </div>
    </div>
</section>

<section class="how_to_order how_to_order_1 section_padding_2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="chopcafe_title chopcafe_title_1 text-center">
                    <h2>How to <span>order online</span></h2>
                    <div class="title_divider">
                        <i class="flaticon-fork-and-knife-in-cross title_fork"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="grid_item">
                    <div class="grid_inner_item item_line">
                        <div class="icon_box">
                            <i class="flaticon-menu"></i>
                        </div>
                        <div class="chopcafe_info">
                            <h4>Choose Your Item</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="grid_item">
                    <div class="grid_inner_item item_line_2">
                        <div class="icon_box">
                            <i class="flaticon-ecommerce"></i>
                        </div>
                        <div class="chopcafe_info">
                            <h4>Order Food</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="grid_item">
                    <div class="grid_inner_item">
                        <div class="icon_box">
                            <i class="flaticon-scooter"></i>
                        </div>
                        <div class="chopcafe_info">
                            <h4>Ready For Delivery</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="chopcafe_chef chopcafe_chef_1 section_padding_2 bg_image" style="background-image: url(/cuisine/wp-content/uploads/2019/11/chef_bg.jpg);">
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
                  $loop = new WP_Query( [
                    'taxonomy'  => 'category',
                    'post_type' => 'post',
                    'category_name' => 'chefs'
                    ] );
                    if ($loop->have_posts()) :
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
                            <h3><a href="single_team.html"><?php the_title(); ?></a></h3>
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

<section class="chopcafe_reservation chopcafe_reservation_1 section_padding_2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="chopcafe_title chopcafe_title_1 text-center">
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
                        <img src="/cuisine/wp-content/uploads/2019/12/book_1.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="chopcafe_testimonial chopcafe_testimonial_1 section_padding_2 bg_image" style="background-image: url(/cuisine/wp-content/uploads/2019/12/review_bg.jpg);">
    <div class="bg_overlay"></div>
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
                                <img src="/cuisine/wp-content/uploads/2019/12/client_1.jpg" alt="">
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
                                <img src="/cuisine/wp-content/uploads/2019/12/client_1.jpg" alt="">
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
                                <img src="/cuisine/wp-content/uploads/2019/12/client_1.jpg" alt="">
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

<section class="chopcafe_blog chopcafe_blog_1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="chopcafe_title chopcafe_title_1 text-center">
                    <h2>Latest <span>News & Articles</span></h2>
                    <div class="title_divider">
                        <i class="flaticon-fork-and-knife-in-cross title_fork"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
          <?php
          $loop = new WP_Query( [
            'taxonomy' => 'category',
            'post_type' => 'post',
            'category_name' => 'tin-tuc'
            ] );
          if($loop->have_posts()) :
            while($loop->have_posts()) :
              $loop->the_post();
              $id = get_the_ID();
              $thump = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'img200-261');
          ?>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="grid_item">
                    <div class="grid_inner_item">
                        <div class="chopcafe_img">
                            <img src="<?php echo $thump[0]; ?>" class="img-fluid" alt="">
                            <div class="overlay_img"></div>
                            <div class="overlay_content">
                                <a href="<?php the_permalink(); ?>" class="chopcafe_link blog_link">Read more</a>
                            </div>
                        </div>
                        <div class="chopcafe_info">
                            <div class="post_meta">
                                <ul>
                                    <li><a href="#"><i class="fas fa-user"></i>By <?php the_author(); ?></a></li>
                                    <li><a href="#"><i class="fas fa-calendar-alt"></i><?php the_date('d-m-Y') ?></a></li>
                                </ul>
                            </div>
                            <div class="post_info">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php the_excerpt(); ?></p>
                            </div>
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
<?php get_footer(); ?>

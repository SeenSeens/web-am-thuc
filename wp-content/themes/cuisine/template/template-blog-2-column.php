<?php
/*
 * Template Name: Blog 2 Column
 */
?>
<?php get_header(); ?>
<section class="chopcafe_breadcrumb bg_image" style="background-image: url(/cuisine/wp-content/uploads/2019/12/breadcrumb_bg.jpg);">
    <div class="bg_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_content text-center">
                    <h2>Blog 2 Column</h2>
                    <ul>
                        <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="chopcafe_blog chopcafe_blog_2_column section_padding">
    <div class="container">
      <?php
      $loop = new WP_Query( ['taxonomy' => 'category', 'post_type' => 'post', 'category_name' => 'tin-tuc'] );
      if($loop->have_posts()) :
      ?>
        <div class="row">
          <?php
          while($loop->have_posts()) :
            $loop->the_post();
            $id = get_the_ID();
            $thump = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'img570-400');
          ?>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="grid_item">
                    <div class="grid_inner_item">
                        <div class="chopcafe_img">
                            <img src="<?php echo $thump[0]; ?>" class="img-fluid" alt="">
                            <div class="overlay_img"></div>
                            <div class="overlay_content">
                                <img src="/cuisine/wp-content/uploads/2019/12/client_1.jpg" class="img-fluid" alt="">
                                <span>Posted By <a href="#"><?php the_author(); ?></a></span>
                            </div>
                        </div>
                        <div class="chopcafe_info">
                            <div class="post_info">
                                <h3><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h3>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                            <div class="post_meta">
                                <ul>
                                    <li><a href="#" class="date"><?php the_date('d-m-Y'); ?></a></li>
                                    <li><a href="#" class="comment">5 Comments</a></li>
                                    <li><a href="<?php the_permalink(); ?>" class="link">Read more</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <?php endwhile; ?>
        </div>
        <div class="chopcafe_pagination">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination_list text-center">
                        <ul>
                            <li><a href="#"><i class="fas fa-angle-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li class="page_active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
      <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>

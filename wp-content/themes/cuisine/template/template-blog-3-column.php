<?php
/*
 * Template Name: Blog 3 Column
 */
?>
<?php get_header(); ?>
<section class="chopcafe_breadcrumb bg_image" style="background-image: url(<?php echo get_site_url(). '/wp-content/uploads/2019/12/breadcrumb_bg.jpg' ?>);">
    <div class="bg_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_content text-center">
                    <h2><?php the_title(); ?></h2>
                    <ul>
                        <li><a href="<?php bloginfo( 'url' ); ?>">Home</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="chopcafe_blog chopcafe_blog_3_column section_padding">
    <div class="container">
      <?php
      $loop = new WP_Query([
        'taxonomy' => 'category',
        'post_type' => 'post',
        'category__not_in' => [24, 28],
      ]);
      if($loop->have_posts()) :
      ?>
        <div class="row">
          <?php
          while($loop->have_posts()) :
            $loop->the_post();
            $id = get_the_ID();
            $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'img370-270');
          ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="grid_item">
                    <div class="grid_inner_item">
                        <div class="chopcafe_img">
                            <img src="<?php echo $thumb[0]; ?>" alt="" class="img-fluid rounded">
                            <div class="overlay_img"></div>
                            <div class="overlay_content">
                                <a href="<?php the_permalink(); ?>" class="chopcafe_link blog_link">Read more</a>
                            </div>
                        </div>
                        <div class="chopcafe_info">
                            <div class="post_meta">
                                <ul>
                                    <li><a href="#" class="author">By <?php the_author(); ?></a></li>
                                    <li><a href="#" class="date"><?php the_modified_date('d-m-Y'); ?></a></li>
                                    <li><a href="#" class="comment">5 Comments</a></li>
                                </ul>
                            </div>
                            <div class="post_info">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
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
                    <!-- <div class="pagination_list text-center">
                        <ul>
                            <li><a href="#"><i class="fas fa-angle-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li class="page_active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i></a></li>
                        </ul>
                    </div> -->
                    <?php wpbeginner_numeric_posts_nav(); ?>
                </div>
            </div>
        </div>
      <?php endif; wp_reset_postdata(); ?>
    </div>
</section>
<?php get_footer(); ?>

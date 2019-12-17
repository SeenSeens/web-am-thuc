<?php
/*
 * Template Name: Gallery Design 1
 */
?>
<?php get_header(); ?>
<section class="chopcafe_breadcrumb bg_image" style="background-image: url(/cuisine/wp-content/uploads/2019/12/breadcrumb_bg.jpg);">
    <div class="bg_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_content text-center">
                    <h2>Masonry Gallery</h2>
                    <ul>
                        <li><a href="<?php bloginfo( 'url' ); ?>">Home</a></li>
                        <li class="active">Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="chopcafe_gallery chopcafe_gallery_2 section_padding" id="chopcafe_masonry">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="chopcafe_filter text-center">
                  <?php
                  $terms = get_terms("product_cat");
                  $count = count($terms);
                  if($count > 0) :
                    foreach ( $terms as $term ) :
                      $termname = strtolower($term->name);
                      $termname = str_replace( ' ', '-', $termname);
                      echo '<button class="chopcafe_btn" data-filter=".' . $termname . '"> ' . $term->name . ' </button>';
                    endforeach;
                  endif;
                  ?>
                </div>
            </div>
        </div>
        <?php
        $loop = new WP_Query( ['taxonomy' => 'product_cat', 'post_type' => 'product'] );
        $count = 0;
        if($loop) :
        ?>
        <div class="masonry_grid row">
          <?php
          while($loop->have_posts()) :
            $loop->the_post();
            $terms = get_the_terms( $post->ID, 'product_cat');
            if( $terms && ! is_wp_error( $terms )) :
              $links = [];
              foreach ( $terms as $term )  :
                $links[] = $term->name;
              endforeach;
              $links = str_replace(' ', '-', $links);
              $tax = join( " ", $links );
            else :
              $tax = '';
            endif;
            $infos = get_post_custom_values( '_url' ); // Lấy các giá trị cho 1 trường bài tùy chỉnh.
            $ID = get_the_ID();
            $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($ID), 'post-thumbnail');
          ?>
            <div class="gallery_item <?php echo strtolower($tax); ?>">
                <div class="grid_item">
                    <div class="grid_inner_item">
                        <div class="chopcafe_img">
                            <img src="<?php echo $thumb[0]; ?>" class="img-fluid rounded" alt="">
                            <div class="overlay_img"></div>
                            <div class="overlay_content">
                                <a href="<?php echo $thumb[0]; ?>" class="btn_a zoom_img"><i class="fas fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>

<?php

class News extends WP_Widget {

	function __construct() {
		parent::__construct( 'news', 'Bài viết' );
        add_action( 'widgets_init', function() { register_widget( 'News' ); });
	}

	function widget( $args, $instance ) {
		$loop = new WP_Query([
	        'taxonomy'  => 'category',
	        'post_type' =>  'post',
	        'posts_per_page'  =>  4,
	        'orderby' =>  'id',
	        'cat' => 1,
	      ]);
		global $wp_query; $wp_query->in_the_loop = true;
		if($loop->have_posts()) :
	    ?>
		<section class="chopcafe_blog chopcafe_blog_1">
		    <div class="container">
		        <div class="row justify-content-center">
		            <div class="col-lg-6">
		                <div class="chopcafe_title chopcafe_title_1 text-center">
		                    <h2>Latest <span>News &amp; Articles</span></h2>
		                    <div class="title_divider">
		                        <i class="flaticon-fork-and-knife-in-cross title_fork"></i>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="row">
		        	<?php
		        	while ($loop->have_posts()) :
	          			$loop->the_post();
	          			$id = get_the_ID();
	          			$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'img200-260');
		        	?>
		            <div class="col-lg-6 col-md-6 col-sm-12">
		                <div class="grid_item wow slideInUp" style="visibility: visible;">
		                    <div class="grid_inner_item">
		                        <div class="chopcafe_img">
		                            <img src="<?= $thumb[0] ?>" class="img-fluid" alt="">
		                            <div class="overlay_img"></div>
		                            <div class="overlay_content">
		                                <a href="<?php the_permalink(); ?>" class="chopcafe_link blog_link">Read more</a>
		                            </div>
		                        </div>
		                        <div class="chopcafe_info">
		                            <div class="post_meta">
		                                <ul>
		                                    <li><a href="#"><i class="fas fa-user"></i>By <?php the_author(); ?></a></li>
		                                    <li><a href="#"><i class="fas fa-calendar-alt"></i><?php the_modified_date(); ?></a></li>
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
		            endwhile; wp_reset_query();
		            ?>
		        </div>
		    </div>
		</section>
		<?php
	      endif; wp_reset_postdata();
	}
}
$news = new News();
?>
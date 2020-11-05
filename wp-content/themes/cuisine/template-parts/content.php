<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cuisine
 */
global $thumb;
?>
<div class="single_blog_main">
    <div class="post_meta">
        <ul>
            <li><img src="/cuisine/wp-content/uploads/2019/12/client_1.jpg" alt=""><span>By <a href="#"><?php the_author(); ?></a></span></li>
            <li><?php the_modified_date(); ?></li>
        </ul>
    </div>
    <div class="post_content">
        <div class="chopcafe_img">
            <img src="<?php echo $thumb[0]; ?>" alt="">
        </div>
        <div class="post_text">
					<?php
					the_title( '<h3>', '</h3>' );
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'cuisine' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );
					?>
        </div>
    </div>
    <div class="post_share_tag">
        <div class="row">
			<?php
			$tags = get_tags( [] );
			?>
            <div class="col-lg-6 col-md-6 col-sm-12">
				<?php if($tags) : ?>
                <div class="post_tag">
                    <ul>
                        <li><span>Related Tag :</span></li>
						<?php
                        foreach($tags as $tag) :
                        	echo '<li><a href="' .get_term_link($tag). '">' .$tag->name. '</a></li>';
						endforeach;
                        ?>
                    </ul>
                </div>
				<?php endif; ?>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="post_share">
                    <ul class="social_link">
                        <li><span>Share :</span></li>
                        <li><a href="https://www.facebook.com/tuan.seen.it"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/tuanseenit/"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

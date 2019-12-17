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
            <li>5 Days Ago</li>
            <li>Published In : <a href="#">Business</a></li>
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
												<?php foreach($tags as $tag) :
                        	echo '<li><a href="' .get_term_link($tag). '">' .$tag->name. '</a></li>';
												endforeach; ?>
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
    <div class="post_comment">
        <h4>Comments : 03</h4>
        <div class="single_comment d-flex">
            <div class="author_thumb">
                <img src="assets/images/comment_1.jpg" alt="">
            </div>
            <div class="author_text">
                <h5>Adam Smith</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <span><a href="#"><i class="fas fa-reply"></i>Reply</a></span>
            </div>
        </div>
        <div class="single_comment d-flex">
            <div class="author_thumb">
                <img src="assets/images/comment_2.jpg" alt="">
            </div>
            <div class="author_text">
                <h5>Michle Parres</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <span><a href="#"><i class="fas fa-reply"></i>Reply</a></span>
            </div>
        </div>
        <div class="single_comment d-flex">
            <div class="author_thumb">
                <img src="assets/images/comment_3.jpg" alt="">
            </div>
            <div class="author_text">
                <h5>Adam Smith</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <span><a href="#"><i class="fas fa-reply"></i>Reply</a></span>
            </div>
        </div>
    </div>
    <div class="chopcafe_comment_form">
        <h4>Leave a comment</h4>
        <form>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form_group">
                        <input type="text" class="form_control" placeholder="Name" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form_group">
                        <input type="email" class="form_control" placeholder="Email" required>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form_group">
                        <textarea class="form_control" placeholder="Comment" name="message"></textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form_button">
                        <button type="submit" class="chopcafe_btn form_btn">Post Comment</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

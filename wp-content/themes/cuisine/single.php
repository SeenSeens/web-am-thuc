<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cuisine
 */

get_header();
?>
<section class="chopcafe_breadcrumb bg_image" style="background-image: url(/cuisine/wp-content/uploads/2019/12/breadcrumb_bg.jpg);">
    <div class="bg_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_content text-center">
                    <h2>Single Blog</h2>
                    <ul>
                        <li><a href="<?php bloginfo( 'url' ); ?>">Home</a></li>
                        <li class="active">Blog Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
// while ( have_posts() ) :
// 	the_post();
//
// 	get_template_part( 'template-parts/content', get_post_type() );
//
// 	the_post_navigation();
//
// 	// If comments are open or we have at least one comment, load up the comment template.
// 	if ( comments_open() || get_comments_number() ) :
// 		comments_template();
// 	endif;
//
// endwhile; // End of the loop.
?>

<section class="chopcafe_single_blog single_blog_section section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
				<?php
				while ( have_posts() ) :
					the_post();
					$id = get_the_ID();
					$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'post_thumbnail');
					get_template_part( 'template-parts/content', get_post_type() );
				endwhile;
				?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>

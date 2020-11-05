<?php
/*
 * Template Name: Contact
 */
?>
<?php get_header(); ?>
<section class="chopcafe_breadcrumb bg_image" style="background-image: url(<?php echo get_site_url() . '/wp-content/uploads/2019/12/breadcrumb_bg.jpg'; ?> );">
    <div class="bg_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_content text-center">
                    <h2>Contact us</h2>
                    <ul>
                        <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
                        <li class="active">contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="chopcafe_contact chopcafe_contact_1 section_padding">
    <div class="container">
        <div class="contact_information_area">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact_info_box d-flex align-items-center">
                        <div class="contact_icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact_info">
                            <a href="tel:+84385573558">+84 3 8557 3558 </a>
                            <a href="tel:+84968320572">+84 9 6832 0572</a>
                        </div>
                    </div>
                    <div class="contact_info_box  d-flex align-items-center">
                        <div class="contact_icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact_info">
                            <p>Khu phố 5, P.Thác Mơ, <br> TX.Phước Long, T.Bình Phước.</p>
                        </div>
                    </div>
                    <div class="contact_info_box d-flex align-items-center">
                        <div class="contact_icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact_info">
                            <a href="mailto:truongtuan829@gmail.com">truongtuan829@gmail.com</a>
                            <a href="mailto:tuantruong829@gmail.com">tuantruong829@gmail.com</a>
                        </div>
                    </div>
                    <div class="social_widget_box">
                        <h4>Follow Us on</h4>
                        <ul class="social_widget">
                            <li><a href="https://www.facebook.com/tuan.seen.it" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/tuanseenit" class="linkedin"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="https://www.instagram.com/09xx09x" class="instagram"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact_box">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124965.15984553118!2d106.92552128462661!3d11.823978190465285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3173695fc877ce0b%3A0x2aa8fc15435d686a!2zVHguIFBoxrDhu5tjIExvbmcsIELDrG5oIFBoxrDhu5tjLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1576488946687!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="chopcafe_contact">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="chopcafe_title chopcafe_title_1 text-center">
                        <h2>Contact <span>Form</span></h2>
                        <div class="title_divider">
                            <i class="flaticon-fork-and-knife-in-cross title_fork"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chopcafe_form">
                <?php echo do_shortcode('[contact-form-7 id="109" title="contact"]'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
